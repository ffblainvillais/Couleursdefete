<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CommandeBundle\Entity\Commande;
use ArticleBundle\Entity\Lot;
use ActionBundle\Entity\Action;

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
    * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Commande", inversedBy="lots")
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
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param Commande $commande
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
     * @param Lot $lot
     * @return $this
     */
    public function setLot(Lot $lot)
    {
        $this->lot = $lot;
        return $this;
    }

    /**
     * @return Lot
     */
    public function getLot()
    {
        return $this->lot;
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
     * @return mixed
     */
    public function getRetour()
    {
        return $this->retour;
    }
}
