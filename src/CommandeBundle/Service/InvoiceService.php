<?php

namespace CommandeBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class InvoiceService {

    protected $em;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        return $this;
    }

    /**
     * Récupère le PDF correspondant à la commande donnée si il n'existe pas il est généré et renvoyé à la volée
     *
     * @param int $commandeId
     * @param string $typeDocument
     * @return Response
     */
    public function getOrderPdf($commandeId, $typeDocument, $html)
    {
        $orderDirectory    = './data/factures/';
        $orderFilename     = 'Facture-' . $commandeId . '.pdf';

        if(!is_dir($orderDirectory)){


            mkdir("./data");
            mkdir("./data/factures");
        }

        $pdf = @file_get_contents($orderDirectory.$orderFilename);

        if (!$pdf) {
            
            $this->genererPdf($html, $typeDocument, $commandeId);
            
            $pdf = @file_get_contents($orderDirectory.$orderFilename);

        }
        
        $response = new Response();
        $response->setContent($pdf);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename='.$orderFilename);
        return $response;

    }

    public function prepareRenderViewPdf($commandeId, $typeDocument)
    {
        $commande           = $this->em->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $commandeId]);

        $itemsCommande = $this->getItemsCommande($commandeId);

        return array(
            'commande'          => $commande,
            'itemsCommande'     => $itemsCommande,
            'typeDocument'      => $typeDocument,
        );

    }

    /**
     * Génere un fichier PDF correspondant à la commande donnée
     *
     * @param int $commandeId
     * @param string $typeDocument
     * @return Response
     */
    public function genererPdf($html, $typeDocument, $commandeId){

        //on instancie la classe Html2Pdf_Html2Pdf avec le sens de la page, le format, la langue
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        $html2pdf->pdf->SetDisplayMode('real');

        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);

        if ($typeDocument == "UltimeFacture") {

            $orderFilename     = 'Facture-' . $commandeId . '.pdf';

            //Output récupère le contenu du pdf
            $content = $html2pdf->Output('', 'S');
            
            //on enregistre le pdf sur le serveur
            file_put_contents('./data/factures/' . $orderFilename, $content);

        } else {

            $orderFilename     = $typeDocument . '-' . $commandeId . '.pdf';

            $content = $html2pdf->Output('', true);

            $response = new Response();

            $response->setContent($content);
            $response->headers->set('Content-Type', 'application/force-download');
            $response->headers->set('Content-disposition', 'filename=' . $orderFilename);

            return $response;
        }

    }

    /**
     * Prends en paramètre un id de commande et renvoie sois forme de tableau les items de la commande
     *
     * @param int $commandeId
     * @return array
     */
    public function getItemsCommande($commandeId)
    {

        $commande           = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $commandeId]);
        $location           = $this->getDoctrine()->getRepository('ActionBundle:Action')->findOneBy(['libelle' => "Location"]);
        $prestation         = $this->getDoctrine()->getRepository('ActionBundle:Action')->findOneBy(['libelle' => "Prestation"]);

        $aLocations     = array_merge(
            $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $commande, "action" => $location]),
            $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findBy(['commande' => $commande, "action" => $location])
        );

        $aPrestations   = array_merge(
            $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $commande, "action" => $prestation]),
            $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findBy(['commande' => $commande, "action" => $prestation])
        );

        $aLocations     = $this->mapArrayItems($aLocations);
        $aPrestations   = $this->mapArrayItems($aPrestations);

        $itemsCommande  = array(
            "Location"      => $aLocations,
            "Prestation"    => $aPrestations,
        );

        return $itemsCommande;
    }

    /**
     * Map un tableau d'entités en tableau clé valeur pour la vue
     *
     * @param array $aLocation
     * @return array
     */
    public function mapArrayItems($aLocation)
    {

        $mappedArrayLocation = array();

        foreach($aLocation as $item){

            if($item instanceof \AppBundle\Entity\CommandeArticle){

                $target = $item->getArticle();

            } elseif ($item instanceof \AppBundle\Entity\CommandeLot){

                $target = $item->getLot();
            }

            $mappedArrayLocation[] = array(
                "libelle"   => $target->getLibelle(),
                "quantite"  => $item->getQuantite(),
                "prix"      => $target->getPrix(),
            );
        }

        return $mappedArrayLocation;
    }

    public function getDoctrine()
    {
        return $this->em;
    }
}