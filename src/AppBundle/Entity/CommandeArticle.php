<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="commande_article")
 */
class CommandeArticle
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;
    
    /**
    * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Article")
    * @ORM\JoinColumn(nullable=false)
    */
    private $article;
    
    /**
    * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Commande")
    * @ORM\JoinColumn(nullable=false)
    */
    private $commande;
    
    /**
    * @ORM\ManyToOne(targetEntity="ActionBundle\Entity\Action")
    * @ORM\JoinColumn(nullable=false)
    */
    private $action;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $retour;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

   
    
    
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
        return $this;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }
    
    
    
    
    public function setCommande(\CommandeBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;
        return $this;
    }

    public function getCommande()
    {
        return $this->commande;
    }

    
    

    public function setArticle(\ArticleBundle\Entity\Article $article)
    {
        $this->article = $article;
        return $this;
    }

    public function getArticle()
    {
        return $this->article;
    }
    
    
    
    
    public function setAction(\ActionBundle\Entity\Action $action)
    {
        $this->action = $action;
        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }
    
    
    
    
    public function setRetour($retour)
    {
        $this->retour = $retour;
        return $this;
    }

    public function getRetour()
    {
        return $this->retour;
    }
  
    
    

    
    public function __toString()
    {
        return $this->getLibelle();
    }
}
