<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="commande_lot")
 */
class CommandeLot
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
    * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Lot")
    * @ORM\JoinColumn(nullable=false)
    */
    private $lot;
    
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

    
    

    public function setLot(\ArticleBundle\Entity\Lot $lot)
    {
        $this->lot = $lot;
        return $this;
    }

    public function getLot()
    {
        return $this->lot;
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
