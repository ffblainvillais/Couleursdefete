<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ArticleBundle\Entity\Article;

/**
 * @ORM\Entity
 * @ORM\Table(name="Lot")
 */
class Lot
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
     * @ORM\Column(type="float")
     */
    private $prix;

    
    
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
     * @return Commande
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
     * @return \prix
     */
    public function getprix()
    {
        return $this->prix;
    }
    
    
    
    
    public function __toString()
    {
        return $this->getLibelle();
    }
}
