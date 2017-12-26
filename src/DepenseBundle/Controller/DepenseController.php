<?php

namespace DepenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DepenseBundle\Form\DepenseType;
use DepenseBundle\Form\CategorieDepenseType;
use DepenseBundle\Entity\Depense;
use DepenseBundle\Entity\CategorieDepense;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use DepenseBundle\Service\SpentService;

class DepenseController extends Controller
{

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
        $categoriesDepense  = $this->em->getRepository(CategorieDepense::class)->findAll();
        $form               = $this->createForm(DepenseType::class, null, array("action" => $this->generateUrl('ajout-depense')));
        $formCategorie      = $this->createForm(CategorieDepenseType::class, null, array("action" => $this->generateUrl('ajout-categorie')));

        return $this->render(
            'DepenseBundle:depense:depense.html.twig',
            array(
                  'categories'      => $categoriesDepense,
                  'form'            => $form->createView(),
                  'formCategorie'   => $formCategorie->createView(),
            )
        );
    }

    public function ajoutAction(Request $request)
    {
        $depense = new Depense();
        
        $form = $this->createForm(DepenseType::class, $depense);
        
        //renvois true quand le formulaire n'est pas valide n'empeche
        //pas de lancer la requete avec ces données
        $form->handleRequest($request)->isValid();
        
        $depense = $form->getData();
        
        $date = date('Y-m-d');
        $depense->setDate($date);
        
        //On regarde si l'année existe déjà
        $anneeExplose = explode("-", $date)[0];
        $annee = $this->getDoctrine()->getRepository('CommandeBundle:Annee')->findOneBy(['libelle' => $anneeExplose]);
        
        //si elle n'existe pas on l'ajoute en BDD pour débloquer
        //le bilan de l'année ajoutée
        if(!$annee){
            $annee = new Annee();
            $annee->setLibelle($anneeExplose);
            
            $this->em->persist($annee);
            $this->em->flush();
        }

        $depense->setAnnee($annee);
        
        //multi-user
        //$depense->setUtilisateur($this->getUser());

        $this->em->persist($depense);
        $this->em->flush();

        $this->addFlash('feedback', "la dépense '".$depense->getLibelle()."' à bien été enregistrée");
       
        return $this->redirectToRoute('depense');    
    }
    
    
    
    public function suppressionAction(Request $request){

        $depense = $this->getDoctrine()->getRepository('DepenseBundle:Depense')->findOneBy(['id' => $request->attributes->get('idDepense')]);
       
        $this->addFlash('feedback', "La dépense '".$depense->getLibelle()."' à bien été supprimé");
       
        $this->em->remove($depense);
        $this->em->flush();
        
        return $this->redirectToRoute('depense');
    }
    
    
    public function modificationPopAction(Request $request)
    {
        $idDepense = $request->attributes->get('idDepense');
        
        $repository = $this->getDoctrine()->getRepository('DepenseBundle:Depense');
        $depense = $repository->findOneBy(['id' => $idDepense]);
        
        $form = $this->createForm(DepenseType::class, null, array("action" => $this->generateUrl('modification-depense', array('idDepense' => $idDepense))));
        
        $form->setData($depense);
        
        return $this->render(
            'DepenseBundledepense:ajout-depense.html.twig',
            array('form' => $form->createView())
        ); 
        
    }
    
    
    public function modificationAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('DepenseBundle:Depense');
        
        $depense = $repository->findOneBy(['id' => $request->attributes->get('idDepense')]);
        
        $form = $this->createForm(DepenseType::class);
        
        $form->setData($depense);
        
        $form->handleRequest($request);

        $this->em->merge($depense);
        $this->em->flush();

        $this->addFlash('feedback', "la dépense '".$depense->getLibelle()."' à bien été modifié");
        
        return $this->redirectToRoute('depense'); 
        
    }

    public function ajoutCategorieAction(Request $request)
    {
        $categorieDepense = new CategorieDepense();

        $form = $this->createForm(CategorieDepenseType::class, $categorieDepense);

        //renvois true quand le formulaire n'est pas valide n'empeche
        //pas de lancer la requete avec ces données
        $form->handleRequest($request)->isValid();

        $categorieDepense = $form->getData();

        $this->em->persist($categorieDepense);
        $this->em->flush();

        $this->addFlash('feedback', "la catégorie de dépense '".$categorieDepense->getLibelle()."' à bien été enregistrée");

        return $this->redirectToRoute('depense');
    }

    public function suppressionCategorieAction(Request $request){

        $categorieDepense = $this->getDoctrine()->getRepository('DepenseBundle:CategorieDepense')->findOneBy(['id' => $request->attributes->get('idCategorie')]);

        $this->addFlash('feedback', "La categorie '".$categorieDepense->getLibelle()."' à bien été supprimé");

        $this->deplaceDepensesDansDivers($categorieDepense);

        $this->em->remove($categorieDepense);
        $this->em->flush();

        return $this->redirectToRoute('depense');
    }

    public function deplaceDepensesDansDivers($categorieDepense){

        $depenses = $this->getDoctrine()->getRepository('DepenseBundle:Depense')->findBy(['categorie' => $categorieDepense]);

        $aTrier = $this->getDoctrine()->getRepository('DepenseBundle:CategorieDepense')->findOneBy(['libelle' => 'A trier']);

        foreach ($depenses as $depense){

            $depense->setCategorie($aTrier);

            $this->em->merge($depense);
        }

        $this->em->flush();

        return true;
    }
    
    
}
