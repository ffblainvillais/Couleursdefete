<?php

namespace DepenseBundle\Controller;

use CommandeBundle\Entity\Annee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use DepenseBundle\Service\SpentService;

use DepenseBundle\Form\BilanType;
use CommandeBundle\Entity\Commande;
use DepenseBundle\Entity\CategorieDepense;

class BilanController extends Controller
{

    protected $container;
    protected $em;
    protected $spentService;

    public function __construct(ContainerInterface $container, EntityManagerInterface $entityManager, SpentService $spentService)
    {
        $this->container        = $container;
        $this->em               = $entityManager;
        $this->spentService     = $spentService;
    }

    public function indexAction()
    {
        $form = $this->createForm(BilanType::class, null, array("action" => $this->generateUrl('generation-bilan')));

        return $this->render(
            'DepenseBundle:bilan:bilan.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    public function generationBilanAction(Request $request)
    {
        $yearNumber         = $request->request->get('bilan')['annee'];
        $year               = $this->em->getRepository(Annee::class)->findOneBy(['id' => $request->request->get('bilan')['annee']]);
        $orders             = $this->em->getRepository(Commande::class)->getOrdersForBalanceSheet($yearNumber);
        $spentsCategories   = $this->em->getRepository(CategorieDepense::class)->findAll();

        $html = $this->render('DepenseBundle:bilan:affichage-bilan.html.twig', array(
            "orders"            => $orders,
            "spentsCategories"  => $spentsCategories,
            "year"              => $year,
        ))->getContent();

        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr', true, 'UTF-8', array(20, 15, 20, 15));

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('fullpage');

        $html2pdf->writeHTML($html);

        $content = $html2pdf->Output('', true);
        
        $titre = "Bilan_Financier_".str_replace(" ", "_", $year->getLibelle());

        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename='.$titre.'.pdf');
        return $response;
        
    }
    
}
