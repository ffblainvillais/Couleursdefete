<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CommandeBundle\Entity\Commande;
use ArticleBundle\Entity\Article;
use ActionBundle\Entity\Action;

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
    * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Commande", inversedBy="article")
    * @ORM\JoinColumn(name="commande_id", referencedColumnName="id", nullable=false)
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


    /**
     * @param $quantite
     * @return $this
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param \CommandeBundle\Entity\Commande $commande
     * @return $this
     */
    public function setCommande(Commande $commande)
    {
        $this->commande = $commande;
        return $this;
    }

    /**
     * @return Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param Article $article
     * @return $this
     */
    public function setArticle(Article $article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param Action $action
     * @return $this
     */
    public function setAction(Action $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return Action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param $retour
     * @return $this
     */
    public function setRetour($retour)
    {
        $this->retour = $retour;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRetour()
    {
        return $this->retour;
    }

}
