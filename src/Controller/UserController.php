<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\Model\ChangePassword;
use App\Form\UserAdminType;
use App\Form\UserPasswordChangeType;
use App\Repository\UnavailabilityRepository;
use App\Service\EmailManager;
use App\Service\UnavailabilityManager;
use App\Service\UserManager;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
    /**
     * Liste de tous les utilisateurs actifs.
     * @Route("/admin/utilisateurs.html", name="user_index", methods={"GET"})
     * @return Response
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $queryBuilder = $entityManager->createQueryBuilder()
            ->select('u')
            ->from(User::class, 'u')
            ->orderBy('u.lastName', 'ASC');

        $adapter = new DoctrineORMAdapter($queryBuilder);

        $pagerfanta = new Pagerfanta($adapter);

        if (isset($_GET["page"])) {
            $pagerfanta->setCurrentPage($_GET["page"]);
        }

        return $this->render('user/index.html.twig', [
            'user_pager' => $pagerfanta
        ]);
    }

    /**
     * Permet à l'admin de créer un nouvel utilisateur.
     * @Route("/admin/nouvel-utilisateur.html", name="user_new", methods={"GET","POST"})
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @return Response
     */
    public function new(Request $request,
                        \Swift_Mailer $mailer): Response
    {
        $user = new User();

        // On génère un mot de passe provisoire qui sera envoyé par mail au nouvel utilisateur.
        $temporaryPassword = "Passer12";
               //uniqid();
        $user->setPassword(password_hash($temporaryPassword, PASSWORD_BCRYPT));

        $form = $this->createForm(UserAdminType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $message = (new \Swift_Message('Bienvenue sur G-SALLE REUNION !'))
            ->setFrom('emma.gomis@adsglobalcorp.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView(
                    'email/registration.html.twig', [
                        'firstName' => $user->getFirstName(),
                        'lastName' => $user->getLastName(),
                        'temporaryPassword' => $temporaryPassword
                    ]
                ),
                'text/html'
            );

            $mailer->send($message);
           // var_dump($mailer);

            $this->addFlash('notice',
                'Le compte a été créé.');

           return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Affiche le profil d'un utilisateur.
     * @Route("/utilisateur-{id}.html", name="user_show", methods={"GET"})
     * @Security("u != null and u.getDeletedAt() == null", statusCode=404,
     *     message="Cet utilisateur n'existe plus ou n'a jamais existé.")
     * @IsGranted("ROLE_GUEST")
     * @param User $u
     * @return Response
     */
    public function show(User $u = null): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $u
        ]);
    }

    /**
     * Permet à l'admin de modifier le profil d'un utilisateur.
     * @Route("/admin/modifier/utilisateur-{id}.html", name="user_edit", methods={"GET","POST"})
     * @Security("u != null and u.getDeletedAt() == null", statusCode=404,
     *     message="Cet utilisateur n'existe plus ou n'a jamais existé.")
     * @param Request $request
     * @param User $u
     * @return Response
     */
    public function edit(Request $request,
                         User $u = null): Response
    {
        $form = $this->createForm(UserAdminType::class, $u);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('notice',
                'Le profil de l\'utilisateur a été mis à jour.');

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $u,
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet à l'utilisateur de changer son mot de passe.
     * @Route("/mot-de-passe.html", name="password_change", methods={"GET","POST"})
     * @IsGranted("ROLE_EMPLOYEE")
     * @param Request $request
     * @return Response
     */
    public function changePassword(Request $request)
    {
        $changePasswordModel = new ChangePassword();

        $form = $this->createForm(UserPasswordChangeType::class, $changePasswordModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $this->getUser();
            $user->setPassword(password_hash($form->getData()->getNewPassword(), PASSWORD_BCRYPT));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('notice',
                'Votre nouveau mot de passe a bien été enregistré.');

            return $this->redirectToRoute('user_show', [
                'id'=>$user->getId()
            ]);
        }

        return $this->render('user/password.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet à l'admin de supprimer un compte utilisateur.
     * @Route("/admin/supprimer/utilisateur-{id}.html", name="user_delete", methods={"DELETE"})
     * @Security("user != null and user.getDeletedAt() == null", statusCode=404,
     *     message="Cet utilisateur n'existe plus ou n'a jamais existé.")
     * @param Request $request
     * @param UnavailabilityRepository $unavailabilityRepository
     * @param UnavailabilityManager $unavailabilityManager
     * @param UserManager $userManager
     * @param EmailManager $emailManager
     * @param \Swift_Mailer $mailer
     * @param User $user
     * @return Response
     */
    public function delete(Request $request,
                           UnavailabilityRepository $unavailabilityRepository,
                           UnavailabilityManager $unavailabilityManager,
                           UserManager $userManager,
                           EmailManager $emailManager,
                           \Swift_Mailer $mailer,
                           User $user = null): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {

            // On active le filtre Gedmo/softdeleteable
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->getFilters()->enable('softdeleteable');

            if ($user->hasUpcomingUnavailabilities() || $user->hasUpcomingInvitations()) {

                // Si l'utilisateur est l'organisateur de réunions à venir, on supprime ces réunions.
                if ($user->hasUpcomingUnavailabilities()) {
                    $unavailabilityManager->deleteUpcomingUnavailabilitiesByOrganiser($emailManager,$user, $mailer);
                }

                // Si l'utilisateur est invité à des réunions à venir, on le supprime des invités à ces réunions.
                if ($user->hasUpcomingInvitations()) {
                    $userManager->removeUserFromUpcomingUnavailabilitiesGuests($user);
                }
            }

            // Dans tous les cas, on le désactive (1ère requête "remove")
            $userManager->removeUserFromDatabase($user);

            if (empty($user->getUnavailabilities()) && empty($user->getInvitations())) {
                // Si l'utilisateur n'est l'organisateur ou l'invité d'aucune réunion,
                // on le supprime définitivement (2e requête "remove").
                $userManager->removeUserFromDatabase($user);
            } else {
                $entityManager->persist($user);
                $entityManager->flush();
            }
        }
        $this->addFlash('notice',
            'Le compte a été supprimé.');

        return $this->redirectToRoute('user_index');
    }

    /**
     * Affiche le tableau de bord d'un utilisateur.
     * @Route("/tableau-de-bord.html", name="user_dashboard")
     * @Security("has_role('ROLE_EMPLOYEE')")
     * @return Response
     */
    public function dashboard()
    {
        return $this->render('user/dashboard.html.twig', ['page'=>1]);
    }
}
