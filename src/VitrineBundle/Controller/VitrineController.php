<?php

namespace VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VitrineBundle\Form\TemoignageType;
use VitrineBundle\Entity\Temoignage;


class VitrineController extends Controller
{
    
   
    public function indexAction()
    {
        $titre="Accueil";
        
        
        return $this->render(
            'VitrineBundle:vitrine:index.html.twig',
            array('titre' => $titre)
        );
    }
    
    public function contactAction()
    {
        $titre="Contact";
        
        
        return $this->render(
            'VitrineBundle:vitrine:contact.html.twig',
            array('titre' => $titre)
        );
    }
    
    public function albumAction()
    {
        $titre="Album";
        
        
        return $this->render(
            'VitrineBundle:vitrine:album.html.twig',
            array('titre' => $titre)
        );
    }
    
    public function locationAction()
    {
        $titre="Location";
        
        
        return $this->render(
            'VitrineBundle:vitrine:location.html.twig',
            array('titre' => $titre)
        );
    }
    
    public function prestationAction()
    {
        $titre="Prestation";
        
        
        return $this->render(
            'VitrineBundle:vitrine:prestation.html.twig',
            array('titre' => $titre)
        );
    }
    
    public function partenaireAction()
    {
        $repository = $this->getDoctrine()->getRepository('PartenaireBundle:Partenaire');
        
        $partenaires = $repository->findAll();
        
        $titre="Partenaire";
        
        
        return $this->render(
            'VitrineBundle:vitrine:partenaire.html.twig',
            array('titre' => $titre,
                  'partenaires' => $partenaires)
        );
    }

    public function temoignageAction(){

        $repository = $this->getDoctrine()->getRepository('VitrineBundle:Temoignage');

        $temoignages = $repository->findBy(['allow' => 1]);

        $form = $this->createForm(TemoignageType::class, null, array("action" => $this->generateUrl('ajout-temoignage')));

        $titre="Temoignage";


        return $this->render(
            'VitrineBundle:vitrine:temoignage.html.twig',
            array('titre'       => $titre,
                "form"          => $form->createView(),
                'temoignages'   => $temoignages)
        );
    }

    public function ajoutTemoignageAction(Request $request){

        $temoignage = new Temoignage();

        $nom = $request->request->get('nom');
        $description = $request->request->get('description');

        $date = date('Y-m-d');
        $temoignage->setDate($date);
        $temoignage->setAllow(0);
        $temoignage->setNom($nom);
        $temoignage->setDescription($description);

        $em = $this->getDoctrine()->getManager();
        $em->persist($temoignage);
        $em->flush();

        $this->addFlash('feedback', "Votre témoignage à bien été pris en compte, il va être soumis à une modération !");

        //return $this->indexAction();
        return $this->redirectToRoute('temoignage');
    }

    public function gestionTemoignageAction(){

        $repository = $this->getDoctrine()->getRepository('VitrineBundle:Temoignage');

        $temoignages = $repository->findAll();

        $titre="Temoignage";


        return $this->render(
            'AppBundle:temoignages:temoignage.html.twig',
            array('titre'       => $titre,
                'temoignages'   => $temoignages)
        );
    }

    public function publierAction(Request $request){

        $idTemoignage = $request->attributes->get('idTemoignage');

        $temoignage = $this->getDoctrine()->getRepository('VitrineBundle:Temoignage')->findOneBy(['id' => $idTemoignage]);

        $temoignage->setAllow(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($temoignage);
        $em->flush();

        $this->addFlash('feedback', "Votre témoignage à bien été publié !");

        //return $this->indexAction();
        return $this->redirectToRoute('gestion-temoignage');
    }

    public function supprimerAction(Request $request){

        $idTemoignage = $request->attributes->get('idTemoignage');

        $temoignage = $this->getDoctrine()->getRepository('VitrineBundle:Temoignage')->findOneBy(['id' => $idTemoignage]);

        $em = $this->getDoctrine()->getManager();
        $em->remove($temoignage);
        $em->flush();

        $this->addFlash('feedback', "Votre témoignage à bien été supprimé !");

        //return $this->indexAction();
        return $this->redirectToRoute('gestion-temoignage');
    }


}
