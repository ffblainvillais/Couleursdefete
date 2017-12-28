<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Article")
 * @ORM\Entity(repositoryClass="ArticleBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $libelle;
    
    
    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;
    
    
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    
    
    /**
     * @ORM\Column(name="prix",type="float")
     * @Assert\Type(type="float", message="prix.invalid")
     */
    private $prix;
    
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=true)
    */
    private $utilisateur;
    
    

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
     * Set libelle
     *
     * @param \varchar $libelle
     *
     * @return Article
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return \varchar
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    /**
     * Set quantite
     *
     * @param \integer $quantite
     *
     * @return Article
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return \integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
    
    /**
     * Set description
     *
     * @param \varchar $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return \varchar
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set prix 
     *
     * @param \float $prix
     *
     * @return Article
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return \float
     */
    public function getPrix()
    {
        return $this->prix;
    }
    
    
    public function setUtilisateur(\UserBundle\Entity\User $utilisateur)
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
    
    public function nomDescription()
    {
        $rendu = $this->getLibelle()." - ".$this->getDescription();
        
        return $rendu;
    }
    
    public function __toString()
    {
        return $this->nomDescription();
    }
}
