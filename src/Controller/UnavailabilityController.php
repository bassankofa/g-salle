<?php

namespace App\Controller;

use App\Entity\Room;
use App\Entity\Unavailability;
use App\Entity\TypeReservation;
use App\Entity\User;
use App\Form\UnavailabilityAdminType;
use App\Form\UnavailabilityEditAdminType;
use App\Form\UnavailabilityEditType;
use App\Form\TypeReservationType;
use App\Form\UnavailabilityType;
use App\Form\ImprimerPeriodeType;

use App\Repository\RoomRepository;
use App\Repository\UnavailabilityRepository;
use App\Service\EmailManager;
use App\Service\UnavailabilityManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UnavailabilityController extends AbstractController
{
    /**
     * Affiche les réunions organisées par l'utilisateur ou
     * toutes les réunions si l'utilisateur est admin.
     * @Route("/admin/historique.html", name="unavailability_index", methods={"GET"})
     * @return Response
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        // On désactive le filtre pour obtenir les réunions organisées dans des salles supprimées,
        // ou dont l'organisateur ou un invité a été supprimé.
        $entityManager->getFilters()->disable('softdeleteable');

        $queryBuilder = $entityManager->createQueryBuilder()
            ->select('u')
            ->from(Unavailability::class, 'u')
            ->orderBy('u.startDate', 'DESC');

        $adapter = new DoctrineORMAdapter($queryBuilder);

        $pagerfanta = new Pagerfanta($adapter);

        if (isset($_GET["page"])) {
            $pagerfanta->setCurrentPage($_GET["page"]);
        }

        return $this->render('unavailability/index.html.twig', [
            'unavailabilities_pager' => $pagerfanta
        ]);
    }

    /**
     * Permet de créer une nouvelle réservation.
     * @Route("/nouvelle-reservation.html", name="unavailability_new", methods={"GET","POST"})
     * @IsGranted("ROLE_EMPLOYEE", message="Vous n'êtes pas autorisé à consulter cette page.")
     * @param Request $request
     * @param RoomRepository $roomRepository
     * @param \Swift_Mailer $mailer
     * @param UnavailabilityRepository $unavailabilityRepository
     * @param EmailManager $emailManager
     * @return Response
     */
    public function new(Request $request,
                        RoomRepository $roomRepository,
                        \Swift_Mailer $mailer,
                        UnavailabilityRepository $unavailabilityRepository,
                        EmailManager $emailManager): Response
    {
        $unavailability = new Unavailability();

        $typereservation = new TypeReservation();

        $unavailability->setOrganiser($this->getUser());

        if ($this->getUser()->hasRole('ROLE_ADMIN')) {
            $form = $this->createForm(UnavailabilityAdminType::class, $unavailability);
            $formType = $this->createForm(TypeReservationType::class, $typereservation);

            // Comme le formulaire admin a un champ Organiser, on l'indique.
            $form->get('organiser')->setData($this->getUser());
        } else {
            $form = $this->createForm(UnavailabilityType::class, $unavailability);
            $formType = $this->createForm(TypeReservationType::class, $typereservation);
          //  $unavailability->setTypeReservation("r");
        }

        // Pré-remplissage des dates et de la salle sélectionnées
        if (!null == $request->query->get('startDate')
            && !null == $request->query->get('endDate')
            && !null == $request->query->get('roomId')) {

            $startDate = \DateTime::createFromFormat('d/m/Y H:i', $request->query->get('startDate'));
            $endDate = \DateTime::createFromFormat('d/m/Y H:i', $request->query->get('endDate'));
            $room = $roomRepository->findOneById($request->query->get('roomId'));

            $unavailability ->setStartDate($startDate)
                            ->setEndDate($endDate)
                            ->setRoom($room);

//            $form->get('startDate')->setData($startDate);
//            $form->get('endDate')->setData($endDate);

            if ($this->getUser()->hasRole('ROLE_ADMIN')) {
                $form->get('room')->setData($room);
            }
        }

        $form->handleRequest($request);
        $formType->handleRequest($request);

        if ($formType->isSubmitted() && $formType->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typereservation);
            $entityManager->flush();

            $formData = $form->getData();

            return $this->redirect($request->getUri());
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($unavailability);
            $entityManager->flush();

            $formData = $form->getData();

            // Envoi de mail à l'organisateur
            $emailManager->sendEmail($mailer,
                'Réservation Salle  | Enregistrement de votre réservation',
                $formData->getOrganiser()->getEmail(),
                'email/unavailability_new.html.twig',
                ['data' => $formData]
            );

            // Envoi de mails aux invités
            $guests = $formData->getGuests();
            foreach ($guests as $guest) {
                $emailManager->sendEmail($mailer,
                    'Réservation Salle  | Nouvelle invitation',
                    $guest->getEmail(),
                    'email/unavailability_new_guest.html.twig',
                    ['guest'=>$guest,'data' => $formData]
                );
            }

            $this->addFlash('notice',
                'La réservation a été enregistrée.');

            return $this->redirectToRoute('unavailability_calendar');
        }

//        $unavailabilities = $unavailabilityRepository->findUnavailabilitiesByRoom($room->getId());

        return $this->render('unavailability/new.html.twig', [
            'unavailability' => $unavailability,
            'form' => $form->createView(),
            'formType'=>$formType->createView()
//            'unavailabilities' => $unavailabilities,
        ]);
    }

    /**
     * Affiche les infos sur une réservation.
     * @Route("/reservation-{id}.html", name="unavailability_show", methods={"GET"})
     * @Security("unavailability != null", statusCode=404,
     *     message="Cette réservation n'existe plus ou n'a jamais existé.")
     * @Security("unavailability.isGuest(user) or has_role('ROLE_EMPLOYEE')", statusCode=403,
     *     message="Vous n'avez pas l'autorisation d'accéder à cette page.")
     * @param Unavailability $unavailability
     * @return Response
     */
    public function show(Unavailability $unavailability = null): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->getFilters()->disable('softdeleteable');

        return $this->render('unavailability/show.html.twig', [
            'unavailability' => $unavailability
        ]);
    }

    /**
     * Permet à l'admin ou à l'organisateur de modifier une réservation.
     * @Route("/modifier/reservation-{id}.html", name="unavailability_edit", methods={"GET","POST"})
     * @Security("unavailability != null", statusCode=404,
     *     message="Cette réservation n'existe plus ou n'a jamais existé.")
     * @Security("(unavailability.isOrganiser(user) or has_role('ROLE_ADMIN')) and unavailability.isNotPast()",
     *     message="Vous n'êtes pas autorisé à modifier cette réservation.")
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @param Unavailability $unavailability
     * @param EmailManager $emailManager
     * @return Response
     */
    public function edit(Request $request,
                         \Swift_Mailer $mailer,
                         Unavailability $unavailability = null,
                         EmailManager $emailManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->getFilters()->disable('softdeleteable');

        $typereservation = new TypeReservation();

        if ($this->getUser()->hasRole('ROLE_ADMIN')) {
            $form = $this->createForm(UnavailabilityEditAdminType::class, $unavailability);
            $formType = $this->createForm(TypeReservationType::class, $typereservation);

        } else {
            $form = $this->createForm(UnavailabilityEditType::class, $unavailability);
        }

        $oldGuests = $unavailability->getGuests()->toArray();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $formData = $form->getData();

            // Envoi de mail à l'organisateur
            $emailManager->sendEmail($mailer,
                'Réservation Salle  | Modification de votre réservation',
                $formData->getOrganiser()->getEmail(),
                'email/unavailability_edit.html.twig',
                ['data' => $formData]
            );

            $newGuests = $unavailability->getGuests()->toArray();

            $persistGuests = [];
            $removedGuests = [];
            $additionalGuests = [];
            foreach ($oldGuests as $guest) {
                if (in_array($guest, $newGuests)) {
                    $persistGuests[] = $guest;
                } else {
                    $removedGuests[] = $guest;
                }
            }
            foreach ($newGuests as $guest) {
                if (!in_array($guest, $oldGuests)) {
                    $additionalGuests[] = $guest;
                }
            }

            // Envoi de mails aux guests déjà invités
            foreach ($persistGuests as $guest) {
                $emailManager->sendEmail($mailer,
                    'Réservation Salle  | Modification d\'une invitation',
                    $guest->getEmail(),
                    'email/unavailability_edit_guest.html.twig',
                    ['guest'=>$guest,'data' => $formData]
                );
            }

            // Envoi de mails aux guests nouvellement invités
            foreach ($additionalGuests as $guest) {
                $emailManager->sendEmail($mailer,
                    'Réservation Salle  | Nouvelle invitation',
                    $guest->getEmail(),
                    'email/unavailability_new_guest.html.twig',
                    ['guest'=>$guest,'data' => $formData]
                );
            }

            // Envoi de mails aux guests nouvellement invités
            foreach ($removedGuests as $guest) {
                $emailManager->sendEmail($mailer,
                    'Réservation Salle  | Invitation annulée',
                    $guest->getEmail(),
                    'email/unavailability_delete_guest.html.twig',
                    ['guest'=>$guest,'data' => $formData]
                );
            }

            $this->addFlash('notice',
                'La réservation a été modifiée.');

            return $this->redirectToRoute('unavailability_calendar');
        }

        return $this->render('unavailability/edit.html.twig', [
            'unavailability' => $unavailability,
            'form' => $form->createView(),
            'formType' => $formType->createView(),
        ]);
    }

    /**
     * Permet à l'admin ou à l'organisateur de supprimer une réservation.
     * @Route("/supprimer/reservation-{id}.html", name="unavailability_delete", methods={"DELETE"})
     * @Security("unavailability != null", statusCode=404, message="Cette réservation n'existe plus ou n'a jamais existé.")
     * @Security("unavailability.isOrganiser(user) or has_role('ROLE_ADMIN')",
     *     message="Impossible de supprimer une réunion dont vous n'êtes pas l'organisateur.")
     * @Security("unavailability.isNotPast()", message="Impossible de supprimer une réunion passée.")
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @param Unavailability $unavailability
     * @param UnavailabilityManager $unavailabilityManager
     * @param EmailManager $emailManager
     * @return Response
     */
    public function delete(Request $request,
                           \Swift_Mailer $mailer,
                           Unavailability $unavailability,
                           UnavailabilityManager $unavailabilityManager,
                           EmailManager $emailManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$unavailability->getId(), $request->request->get('_token'))) {

            // Envoi de mail à l'organisateur
            $emailManager->sendEmail($mailer,
                'Réservation Salle | Suppression de votre réservation',
                $unavailability->getOrganiser()->getEmail(),
                'email/unavailability_delete.html.twig',
                ['data' => $unavailability]
            );

            // Envoi de mails aux invités
            $guests = $unavailability->getGuests();
            foreach ($guests as $guest) {
                $emailManager->sendEmail($mailer,
                    'Réservation Salle  | Annulation d\'une invitation',
                    $guest->getEmail(),
                    'email/unavailability_delete_guest.html.twig',
                    ['guest'=>$guest,'data' => $unavailability]
                );
            }

            $unavailabilityManager->removeUnavailabilityFromDatabase($unavailability);
        }

        $this->addFlash('notice',
            'La réservation a été annulée.');

        return $this->redirectToRoute('unavailability_calendar');
    }

    /**
     * Affiche le calendrier de toutes les réunions dans toutes les salles.
     * @Route("/calendrier.html", name="unavailability_calendar")
     * @IsGranted("ROLE_EMPLOYEE", message="Vous n'êtes pas autorisé à consulter l'agenda de toutes les réunions.")
     */
    public function calendar()
    {
        $formImprimer = $this->createForm(ImprimerPeriodeType::class, null);

        return $this->render('unavailability/calendar.html.twig',["form_imprimer"=>$formImprimer->createView()]);
    }


    /**
     * @param Swift_Mailer $mailer
     * @param $object
     * @param $to
     * @param $view
     * @param $options
     */
    public function sendEmail(Swift_Mailer $mailer, $object, $to, $view, $options)
    {
        $message = (new \Swift_Message($object))
            ->setFrom('emma.gomis@adsglobalcorp.com')
            ->setTo($to)
            ->setBody(
                $this->renderView($view, $options), 'text/html');
        $mailer->send($message);
    }

     /**
     * Permet de créer une nouvelle réservation.
     * @Route("/nouvelle-type-reservation.html", name="type_reservation_new", methods={"GET","POST"})
     * @IsGranted("ROLE_EMPLOYEE", message="Vous n'êtes pas autorisé à consulter cette page.")
     * @param Request $request
     * @return Response
     */
    public function newTypeReservation(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $queryBuilder = $entityManager->createQueryBuilder()
            ->select('u')
            ->from(User::class, 'u')
            ->orderBy('u.lastName', 'ASC');

        $adapter = new DoctrineORMAdapter($queryBuilder);

        $pagerfanta = new Pagerfanta($adapter);


        $typereservation = new TypeReservation();
        $form = $this->createForm(TypeReservationType::class, $typereservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typereservation);
            $entityManager->flush();

            $formData = $form->getData();

            return $this->redirectToRoute('unavailability_calendar');
        }

        return $this->render('unavailability/new_type_reservation.html.twig', [
            'formType' => $form->createView(),
        ]);
        
    }

}
