<?php

namespace DepenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;

use DepenseBundle\Form\BilanType;

class BilanController extends Controller
{

    protected $container;
    protected $em;

    public function __construct(ContainerInterface $container, EntityManagerInterface $entityManager)
    {
        $this->container        = $container;
        $this->em               = $entityManager;
    }

    public function indexAction()
    {
        $form = $this->createForm(BilanType::class, null, array("action" => $this->generateUrl('generation-bilan')));

        return $this->render(
            'DepenseBundle:bilan:bilan.html.twig',
            array('form' => $form->createView())
        );
    }

    public function generationBilanAction(Request $request)
    {
        $commandes = $this->em->getRepository('CommandeBundle:Commande')->findBy(['annee' => $request->request->get('bilan')['annee'], "paye" => 1]);

        $repository = $this->em->getRepository('AppBundle:CommandeArticle');

        $queryReservations = $repository->createQueryBuilder("ca")
            ->leftJoin('ca.commande', 'c')
            ->where("c.paye = 1")
            ->getQuery();

        $commandesArticles = $queryReservations->getResult();
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:CommandeLot');

        $queryReservations = $repository->createQueryBuilder("cl")
            ->leftJoin('cl.commande', 'c')
            ->where("c.paye = 1")
            ->getQuery();

        $commandesLot = $queryReservations->getResult();

        //$commandesLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findAll();
        $depenses = $this->getDoctrine()->getRepository('DepenseBundle:Depense')->findBy(['annee' => $request->request->get('bilan')['annee']]);
        $categoriesDepense = $this->getDoctrine()->getRepository('DepenseBundle:CategorieDepense')->findAll();
        
        $annee = $this->getDoctrine()->getRepository('CommandeBundle:annee')->findOneBy(['id' => $request->request->get('bilan')['annee']]);
        
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('DepenseBundle:bilan:affichage-bilan.html.twig',
                array(
                    'commandes'         => $commandes,
                    'commandesArticles' => $commandesArticles,
                    'annee'             => $annee,
                    'commandesLot'      => $commandesLot,
                    'depenses'          => $depenses,
                    'categoriesDepense' => $categoriesDepense)
                )->getContent();
         
        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
 
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
 
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $content = $html2pdf->Output('', true);
        
        //on appose un titre
        $titre = "Bilan_Financier_".str_replace(" ", "_", $annee->getLibelle());

        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename='.$titre.'.pdf');
        return $response;
        
    }
    
}
