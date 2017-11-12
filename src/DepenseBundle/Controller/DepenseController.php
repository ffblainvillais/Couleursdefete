<?php

namespace DepenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DepenseBundle\Form\DepenseType;
use DepenseBundle\Form\CategorieDepenseType;
use DepenseBundle\Entity\Depense;
use DepenseBundle\Entity\CategorieDepense;


class DepenseController extends Controller
{
    
   
    public function indexAction()
    {
        
        $repository = $this->getDoctrine()->getRepository('DepenseBundle:Depense');
        
        $categoriesDepense = $this->getDoctrine()->getRepository('DepenseBundle:CategorieDepense')->findAll();
        
        //partie multi utilisateur
        /*foreach($this->getUser()->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                $articles = $repository->findAll();
                break;
            }
            elseif($role === "ROLE_ADMIN"){
                $articles = $repository->findBy(['utilisateur' => $this->getUser()]);
                break;
            }
            //@todo selectionner les article du parent (de son admin)
            else{
                $articles = $repository->findBy(['utilisateur' => $this->getUser()]);
                break;
            }
        }*/
        
        $depenses = $repository->findAll();
        
        $form = $this->createForm(DepenseType::class, null, array("action" => $this->generateUrl('ajout-depense')));
        $formCategorie = $this->createForm(CategorieDepenseType::class, null, array("action" => $this->generateUrl('ajout-categorie')));

        return $this->render(
            'DepenseBundle:depense:depense.html.twig',
            array('depenses' => $depenses,
                  'categories' => $categoriesDepense,
                  'form' => $form->createView(),
                  'formCategorie' => $formCategorie->createView(),
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
            
            $em->persist($annee);
            $em->flush();
        }

        $depense->setAnnee($annee);
        
        //multi-user
        //$depense->setUtilisateur($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($depense);
        $em->flush();

        $this->addFlash('feedback', "la dépense '".$depense->getLibelle()."' à bien été enregistrée");
       
        return $this->redirectToRoute('depense');    
    }
    
    
    
    public function suppressionAction(Request $request){

        $depense = $this->getDoctrine()->getRepository('DepenseBundle:Depense')->findOneBy(['id' => $request->attributes->get('idDepense')]);
       
        $this->addFlash('feedback', "La dépense '".$depense->getLibelle()."' à bien été supprimé");
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($depense);
        $em->flush();
        
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

        $em = $this->getDoctrine()->getManager();
        $em->merge($depense);
        $em->flush();

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

        $em = $this->getDoctrine()->getManager();
        $em->persist($categorieDepense);
        $em->flush();

        $this->addFlash('feedback', "la catégorie de dépense '".$categorieDepense->getLibelle()."' à bien été enregistrée");

        return $this->redirectToRoute('depense');
    }

    public function suppressionCategorieAction(Request $request){

        $categorieDepense = $this->getDoctrine()->getRepository('DepenseBundle:CategorieDepense')->findOneBy(['id' => $request->attributes->get('idCategorie')]);

        $this->addFlash('feedback', "La categorie '".$categorieDepense->getLibelle()."' à bien été supprimé");

        $this->deplaceDepensesDansDivers($categorieDepense);

        $em = $this->getDoctrine()->getManager();
        $em->remove($categorieDepense);
        $em->flush();

        return $this->redirectToRoute('depense');
    }

    public function deplaceDepensesDansDivers($categorieDepense){

        $depenses = $this->getDoctrine()->getRepository('DepenseBundle:Depense')->findBy(['categorie' => $categorieDepense]);

        $em = $this->getDoctrine()->getManager();

        $aTrier = $this->getDoctrine()->getRepository('DepenseBundle:CategorieDepense')->findOneBy(['libelle' => 'A trier']);

        foreach ($depenses as $depense){

            $depense->setCategorie($aTrier);

            $em->merge($depense);
        }

        $em->flush();

        return true;
    }
    
    
}
