<?php

namespace PartenaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PartenaireBundle\Entity\Partenaire;
use PartenaireBundle\Form\PartenaireType;


class PartenaireController extends Controller
{
    
   
    public function indexAction()
    {
        
        $repository = $this->getDoctrine()->getRepository('PartenaireBundle:Partenaire');
        
        $partenaires = $repository->findAll();

        $form = $this->createForm(PartenaireType::class, null, array("action" => $this->generateUrl('ajout-partenaire')));

        return $this->render(
            'partenaire/partenaire.html.twig',
            array('partenaires' => $partenaires,
                  'form' => $form->createView())
        );
    }
    
    
    public function ajoutAction(Request $request)
    {
        $partenaireTest = $this->getDoctrine()->getRepository('PartenaireBundle:Partenaire')->findOneBy(['nom' => $request->request->get('partenaire')['nom']]);

        if($partenaireTest){
            
            $this->addFlash('alert', "le partenaire '".$partenaireTest->getNom()."' existe déjà !");
            
            return $this->indexAction(); 
        }
        
        $partenaire = new Partenaire();
        
        $form = $this->createForm(PartenaireType::class, $partenaire);
        
        //renvois true quand le formulaire n'est pas valide n'empeche
        //pas de lancer la requete avec ces données
        $form->handleRequest($request)->isValid();
        
        $partenaire = $form->getData();
        
        $em = $this->getDoctrine()->getManager();

        
        
        /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
        $file = $partenaire->getLogo();
        
        if($file != null){
            
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('logos_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $partenaire->setLogo($fileName);
        }
        
        

        
        
        $em->persist($partenaire);
        $em->flush();

        $this->addFlash('feedback', "le partenaire '".$partenaire->getNom()."' à bien été ajouté");
       
        return $this->redirectToRoute('partenaire-appli');   
    }
    
    
    
    public function suppressionAction(Request $request){

        $partenaire = $this->getDoctrine()->getRepository('PartenaireBundle:Partenaire')->findOneBy(['id' => $request->attributes->get('idPartenaire')]);

        $this->addFlash('feedback', "Le partenaire '".$partenaire->getNom()."' à bien été supprimé");
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($partenaire);
        $em->flush();
        
        return $this->redirectToRoute('partenaire-appli');
    }
    
    
    public function modificationPopAction(Request $request)
    {
        $idPartenaire = $request->attributes->get('idPartenaire');
        
        $repository = $this->getDoctrine()->getRepository('PartenaireBundle:Partenaire');
        $partenaire = $repository->findOneBy(['id' => $idPartenaire]);
        
        $form = $this->createForm(PartenaireType::class, null, array("action" => $this->generateUrl('modification-partenaire', array('idPartenaire' => $idPartenaire))));
        
        $form->setData($partenaire);
        
        return $this->render(
            'article/ajout-article.html.twig',
            array('form' => $form->createView())
        ); 
        
    }
    
    
    public function modificationAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('PartenaireBundle:Partenaire');
        
        $partenaire = $repository->findOneBy(['id' => $request->attributes->get('idPartenaire')]);
        
        $form = $this->createForm(PartenaireType::class);
        
        $imagePath = $partenaire->getLogo();
        
        $form->setData($partenaire);
        
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        
        /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
        $file = $partenaire->getLogo();
        
        if($file != null){
            
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('logos_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $partenaire->setLogo($fileName);
        }
        else{
            $partenaire->setLogo($imagePath);
        }
        
        $em->merge($partenaire);
        $em->flush();

        $this->addFlash('feedback', "le partenaire '".$partenaire->getNom()."' à bien été modifié");
        
        return $this->redirectToRoute('partenaire-appli');
        
    }
    
    
}
