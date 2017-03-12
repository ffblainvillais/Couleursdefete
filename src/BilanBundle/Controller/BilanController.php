<?php

namespace BilanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BilanBundle\Form\BilanType;




class BilanController extends Controller
{

    public function indexAction()
    {
        
        $form = $this->createForm(BilanType::class, null, array("action" => $this->generateUrl('generation-bilan')));

        return $this->render(
            'bilan/bilan.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    
    public function generationBilanAction(Request $request)
    {
        $user = $this->getUser();
        
        foreach($user->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['annee' => $request->request->get('bilan')['annee']]);
                break;
            }
            elseif($role === "ROLE_ADMIN"){
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['annee' => $request->request->get('bilan')['annee'], 'utilisateur' => $user]);
                break;
            }
            //@todo selectionner les article du parent (de son admin)
            else{
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['annee' => $request->request->get('bilan')['annee'], 'utilisateur' => $user]);
                break;
            }
        }
        
        $commandesArticles = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findAll();
        $commandesLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findAll();
        $depenses = $this->getDoctrine()->getRepository('DepenseBundle:Depense')->findBy(['annee' => $request->request->get('bilan')['annee']]);
        $categoriesDepense = $this->getDoctrine()->getRepository('DepenseBundle:CategorieDepense')->findAll();
        
        $annee = $this->getDoctrine()->getRepository('CommandeBundle:annee')->findOneBy(['id' => $request->request->get('bilan')['annee']]);
        
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('bilan/affichage-bilan.html.twig',
                array('commandes' => $commandes,
                    'commandesArticles' => $commandesArticles,
                    'annee' => $annee,
                    'commandesLot' => $commandesLot,
                    'depenses' => $depenses,
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
