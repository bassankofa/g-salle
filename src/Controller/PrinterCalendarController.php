<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use App\Entity\Unavailability;

// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;

class PrinterCalendarController extends Controller
{
 /**
     * Affiche les réunions organisées par l'utilisateur ou
     * toutes les réunions si l'utilisateur est admin.
     * @Route("/printer-data.html", name="imprimer-data", methods={"GET","POST"})
     * @return Response
     */

    public function getData(Request $request)

    {

        $entityManager = $this->getDoctrine()->getManager();

  
        
            $em = $this->getDoctrine()->getManager();
            $sql = "SELECT unavailability.start_date,unavailability.end_date,unavailability.entite ,unavailability.object ,
            organiser.first_name as orga_firstname, organiser.last_name as orga_lastname ,
            GROUP_CONCAT(guest.first_name,' ', guest.last_name) as guest
            from unavailability 
                LEFT JOIN user  organiser ON organiser.id=unavailability.organiser_id
                LEFT JOIN unavailability_user   ON unavailability_user.unavailability_id=unavailability.id 
                LEFT JOIN user guest ON  guest.id=unavailability_user.user_id
                WHERE unavailability.start_date>=:date_start AND unavailability.end_date <=:date_end
                group by unavailability.start_date, unavailability.end_date,unavailability.entite,unavailability.object,organiser.first_name,organiser.last_name";
            $statement = $em->getConnection()->prepare($sql);
            // var_dump($sql);
            $statement->bindValue('date_start',$request->get('date_debut'));
            $statement->bindValue('date_end',$request->get('date_fin'));
            $statement->execute();
            $result = $statement->fetchAll();

            return new JsonResponse($result);

    }

    /**
     * Affiche les réunions organisées par l'utilisateur ou
     * toutes les réunions si l'utilisateur est admin.
     * @Route("/printer-calendrier.html", name="imprimer-calendrier", methods={"GET","POST"})
     * @return Response
     */

    public function index(Request $request)

    {

       
        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);

     //   $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        
        $firstday = date('d/m/Y',strtotime($request->get('date_debut')));
        $lastday = date('d/m/Y',strtotime($request->get('date_fin')));

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('printer/printer-calendrier.html.twig', [
            'title' => "Calendrier hebdomadaire des réunions d'ads group ",
            'semaine'=>"semaine du ".$firstday." au ".$lastday,
            "unavailabilities_pager"=>json_decode($request->get('data')),
            "date_debut"=>$request->get('data')
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("calendrier.pdf", [
            "Attachment" => false
        ]);
        exit(0);
        ;
    }

    
}