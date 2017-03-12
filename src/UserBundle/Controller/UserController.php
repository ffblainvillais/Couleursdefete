<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function indexAction()
    {
        $utilisateurs = $this->getDoctrine()->getRepository('UserBundle:User')->findAll();

        return $this->render(
            'user/utilisateur.html.twig',
            array('utilisateurs' => $utilisateurs)
        );
    }
    
    
    
    public function superAdminAction(Request $request)
    {
        $idUtilisateur = $request->attributes->get('idUtilisateur');
        
        $utilisateur = $this->getDoctrine()->getRepository('UserBundle:User')->findOneBy(['id' => $idUtilisateur]);
        
        $utilisateur->setRoles(['ROLE_SUPER_ADMIN']);
        
        $em = $this->getDoctrine()->getManager();
        $em->merge($utilisateur);
        $em->flush();
        
        $this->addFlash('feedback', "l'utilisateur '".$utilisateur->getUsername()."' à bien été nommé SUPER_ADMIN");
        
        return $this->indexAction();
    }
    
    
    
    public function adminAction(Request $request)
    {
        $idUtilisateur = $request->attributes->get('idUtilisateur');
        
        $utilisateur = $this->getDoctrine()->getRepository('UserBundle:User')->findOneBy(['id' => $idUtilisateur]);
        
        $utilisateur->setRoles(['ROLE_ADMIN']);
        
        $em = $this->getDoctrine()->getManager();
        $em->merge($utilisateur);
        $em->flush();
        
        $this->addFlash('feedback', "l'utilisateur '".$utilisateur->getUsername()."' à bien été nommé ADMIN");
        
        return $this->indexAction();
    }
    
    
    
    public function removeAdminAction(Request $request)
    {
        $idUtilisateur = $request->attributes->get('idUtilisateur');
        
        $utilisateur = $this->getDoctrine()->getRepository('UserBundle:User')->findOneBy(['id' => $idUtilisateur]);
        
        $utilisateur->removeRole('ROLE_ADMIN');
        
        $em = $this->getDoctrine()->getManager();
        $em->merge($utilisateur);
        $em->flush();
        
        $this->addFlash('alert', "l'utilisateur '".$utilisateur->getUsername()."' n'est plus ADMIN");
        
        return $this->indexAction();
    }
    
    
    
    public function suppressionAction(Request $request)
    {
        $idUtilisateur = $request->attributes->get('idUtilisateur');
        
        $utilisateur = $this->getDoctrine()->getRepository('UserBundle:User')->findOneBy(['id' => $idUtilisateur]);
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($utilisateur);
        $em->flush();
        
        $this->addFlash('feedback', "l'utilisateur '".$utilisateur->getUsername()."' à bien été supprimé");
        
        return $this->indexAction();
    }
    
    
    
    public function activerAction(Request $request){
        
        $idUtilisateur = $request->attributes->get('idUtilisateur');
        
        $utilisateur = $this->getDoctrine()->getRepository('UserBundle:User')->findOneBy(['id' => $idUtilisateur]);
        
        return $this->modifierActivation("activer", $utilisateur);  
    }
    
    
    
    public function desactiverAction(Request $request){
        
        $idUtilisateur = $request->attributes->get('idUtilisateur');
        
        $utilisateur = $this->getDoctrine()->getRepository('UserBundle:User')->findOneBy(['id' => $idUtilisateur]);
        
        return $this->modifierActivation("desactiver", $utilisateur);  
    }
    
    
    
    private function modifierActivation($action, $utilisateur){
        
        if($action === "activer"){
            
            $utilisateur->setEnabled(1);
            
            $this->addFlash('feedback', "Le compte de l'utilisateur '".$utilisateur->getUsername()."' est activé");
            
        }
        elseif($action === "desactiver"){
            
            $utilisateur->setEnabled(0);
            
            $this->addFlash('feedback', "Le compte de l'utilisateur '".$utilisateur->getUsername()."' est desactivé");
            
        }
        
        $em = $this->getDoctrine()->getManager();
        $em->merge($utilisateur);
        $em->flush();
        
        return $this->indexAction();
    }
}