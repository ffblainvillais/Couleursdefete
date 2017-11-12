<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ClientBundle\Form\ClientType;
use ClientBundle\Form\ContactClientType;
use ClientBundle\Entity\Client;


class ClientController extends Controller
{
    const MAIL = "etrewebmaster@gmail.com";
    const NOM = "Couleurs de Fete";
   
    public function indexAction()
    {
        
        foreach($this->getUser()->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                $clients = $this->getDoctrine()->getRepository('ClientBundle:Client')->findAll();
                break;
            }
            elseif($role === "ROLE_ADMIN"){
                $clients = $this->getDoctrine()->getRepository('ClientBundle:Client')->findBy(['utilisateur' => $this->getUser()]);
                break;
            }
            //@todo selectionner les article du parent (de son admin)
            else{
                $clients = $this->getDoctrine()->getRepository('ClientBundle:Client')->findBy(['utilisateur' => $this->getUser()]);
                break;
            }
        }
        
        $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findAll();
        
        $form = $this->createForm(ClientType::class, null, array("action" => $this->generateUrl('ajout-client')));
        
        $formContact = $this->createForm(ContactClientType::class, null, array("action" => $this->generateUrl('newsletter-client')));

        return $this->render(
            'ClientBundle:client:client.html.twig',
            array('clients' => $clients,
                'commandes' => $commandes,
                'form' => $form->createView(),
                'formContact' => $formContact->createView())
        );
    }
    
    
    public function ajoutAction(Request $request)
    {
        $user = $this->getUser();
        
        $client = $this->getDoctrine()->getRepository('ClientBundle:Client')->findOneBy(['nom' => $request->request->get('client')['nom'], 'prenom' => $request->request->get('client')['prenom']]);

        if($client){
            
            $this->addFlash('alert', "le client '".$client->getPrenom()." ".$client->getNom()."' existe déjà !");
            
            return $this->indexAction(); 
        }
        
        $client = new Client();
        
        $form = $this->createForm(ClientType::class, $client);
        
        $form->handleRequest($request);
            
        $client = $form->getData();
        
        $client->setUtilisateur($user);

        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();

        $this->addFlash('feedback', "le client ".$client->getPrenom()." ".$client->getNom()." à bien été ajouté");
       
        return $this->redirectToRoute('client');    
    }
    
    
    
    public function suppressionAction(Request $request){

        $client = $this->getDoctrine()->getRepository('ClientBundle:Client')->findOneBy(['id' => $request->attributes->get('idClient')]);

        $commandeClient = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['client' => $client]);
        
        if($commandeClient){
            
            $this->addFlash('alert', "le client '".$client->getNom()."' est client d'une ou plusieurs commandes, vous ne pouvez donc pas le supprimer");
        
            return $this->redirectToRoute('client');
        }
        
        $this->addFlash('feedback', "Le client '".$client->getPrenom()." ".$client->getNom()."' à bien été supprimé");
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($client);
        $em->flush();
        
        return $this->redirectToRoute('client');
    }
    
    
    public function modificationPopAction(Request $request)
    {
        $client = $this->getDoctrine()->getRepository('ClientBundle:Client')->findOneBy(['id' => $request->attributes->get('idClient')]);
        
        $form = $this->createForm(ClientType::class, null, array("action" => $this->generateUrl('modification-client', array('idClient' => $request->attributes->get('idClient')))));
        
        $form->setData($client);
        
        return $this->render(
            'ClientBundle:client:ajout-client.html.twig',
            array('form' => $form->createView())
        ); 
        
    }
    
    
    public function modificationAction(Request $request)
    {
        $client = $this->getDoctrine()->getRepository('ClientBundle:Client')->findOneBy(['id' => $request->attributes->get('idClient')]);
        
        $form = $this->createForm(ClientType::class);
        
        $form->setData($client);
        
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->merge($client);
        $em->flush();

        $this->addFlash('feedback', "Les information du client '".$client->getPrenom()." ".$client->getNom()."' ont bien été modifiées");
        
        return $this->redirectToRoute('client'); 
        
    }
    
    
    
    
    public function mailClientPopAction(Request $request)
    {
        $idClient = $request->attributes->get('idClient');

        $form = $this->createForm(ContactClientType::class, null, array("action" => $this->generateUrl('mail-client', array('idClient' => $idClient))));
        
        return $this->render(
            'ClientBundle:client:ajout-client.html.twig',
            array('form' => $form->createView())
        ); 
        
    }
    
    
    public function mailClientAction(Request $request)
    {
        $user = $this->getUser();
        
        foreach($user->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                
                $this->addFlash('alert', "Le contact des clients des utilisateurs de l'application est désactivé");
        
                return $this->indexAction();
            }
        }
        $client = $this->getDoctrine()->getRepository('ClientBundle:Client')->findOneBy(['id' => $request->attributes->get('idClient')]);
        
        $sujet = $request->request->get('contact_client')['sujet'];
        
        $contenu = $request->request->get('contact_client')['contenu'];
        
        $message = \Swift_Message::newInstance()
            ->setSubject($sujet)
            ->setFrom(array(self::MAIL => self::NOM))
            ->setTo($client->getMail())
            ->setBody($contenu);
        
        $this->get('mailer')->send($message);
        
        $this->addFlash('feedback', "Le client '".$client->getNom()."' à bien été contacté");
        
        return $this->redirectToRoute('client'); 
        
    }
    
    
    
    
    public function newsletterAction(Request $request)
    {
        
        $user = $this->getUser();
        
        foreach($user->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                
                $this->addFlash('alert', "Le contact des clients des utilisateurs de l'application est désactivé");
        
                return $this->indexAction();
                //$clients = $this->getDoctrine()->getRepository('ClientBundle:Client')->findAll();
                //break;
            }
            elseif($role === "ROLE_ADMIN"){
                $clients = $this->getDoctrine()->getRepository('ClientBundle:Client')->findBy(['utilisateur' => $this->getUser()]);
                break;
            }
            //@todo selectionner les article du parent (de son admin)
            else{
                $clients = $this->getDoctrine()->getRepository('ClientBundle:Client')->findBy(['utilisateur' => $this->getUser()]);
                break;
            }
        }
        
        $sujet = $request->request->get('contact_client')['sujet'];
        
        $contenu = $request->request->get('contact_client')['contenu'];
                
        foreach($clients as $client){
            
            $message = \Swift_Message::newInstance()
                ->setSubject($sujet)
                ->setFrom(array(self::MAIL => self::NOM))
                ->setTo($client->getMail())
                ->setBody($contenu);

            $this->get('mailer')->send($message);
        
        }
        
        $this->addFlash('feedback', "La Newsletter à bien été envoyée");
        
        //return $this->indexAction();
        return $this->redirectToRoute('client'); 
        
    }
    
    
    
    public function relanceAction(Request $request){
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        
        $client = $this->getDoctrine()->getRepository('ClientBundle:Client')->findOneBy(['id' => $request->attributes->get('idClient')]);
        
        $message = \Swift_Message::newInstance()
            ->setSubject('solde réservation')
            ->setFrom(array(self::MAIL => self::NOM))
            ->setTo($client->getMail());
            
        $image = $message->embed(\Swift_Image::fromPath("http://couleursdefete.free.fr/images/cdf.png"));
        
        $message->setBody($this->renderView('ClientBundle:email:relance.html.twig', array('commande' => $commande, 'image' => $image)), 'text/html');
        
        $this->get('mailer')->send($message);
        
        $this->addFlash('feedback', "Le client '".$client->getNom()."' à bien été contacté");
        
        return $this->redirectToRoute('client'); 
    }
    
}
