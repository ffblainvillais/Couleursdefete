<?php

namespace CommandeBundle\Service;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


//@todo reussir a caler toutes les methodes utiles a mes commandes dedans pour alleger le controll0er
class CommandeService{
    
    //supprime un article d'une commande \AppBundle\Entity\CommandeArticle
    private function suppressionArticleCommande($articleCommande){
        
        $em = $this->getDoctrine()->getManager();
        
        if ($articleCommande->getAction() == "Vente"){
            
            //on remet en stock l'article
            $this->remiseEnStock($articleCommande->getArticle(), $articleCommande->getQuantite());
        }
        
        $em->remove($articleCommande);
        
        $em->flush();
        
    }
    
    //supprime un lot \AppBundle\Entity\CommandeLot
    private function suppressionLot($commandeLot){
        
        $em = $this->getDoctrine()->getManager();
        
        $lot = $commandeLot->getLot();
        $quantiteDeLot = $commandeLot->getQuantite();
        
        $articlesLot = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $lot]);
        
        foreach($articlesLot as $articleLot){
            
            //quantite d'un article dans le lot * quantite de lots
            $quantite = $articleLot->getQuantite()*$quantiteDeLot;
            
            if($commandeLot->getAction()->getLibelle() == 'Vente' ){
                
                //on remet l'article en stock
                $this->remiseEnStock($articleLot->getArticle(), $quantite);
            }
 
        }
        
        $em->remove($commandeLot);
        
        $em->flush();
        
    }
    
    //remet un article en stock \ArticleBundle\Entity\Article
    private function remiseEnStock($article, $quantite){
        
        $em = $this->getDoctrine()->getManager();
              
        $article->setQuantite($article->getQuantite()+$quantite);
        
        $em->flush();
        
    }
    
    //remet un article en stock \ArticleBundle\Entity\Article
    private function retraitStock($article, $quantite){
        
        //si la quantité demandé dépasse le stock
        if($article->getQuantite() < $quantite){
            $this->addFlash('alert', "Le stock de '".$article->getLibelle()."' est de ".$article->getQuantite()." Vous ne pouvez donc pas en ajouter ".$quantite." !");
            return false;
        }

        if($quantite <= 0){
            $this->addFlash('alert', "La quantité d'article demandé est incorrect");
            return false;
        }

        //si la quantité est suffisante, on la soustrait au stock
        $reste = $article->getQuantite()-$quantite;
        $article->setQuantite($reste);
        
        return true;
    }
    
    
    
}