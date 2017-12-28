<?php

namespace ArticleBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ArticleBundle\Entity\LotArticle;

/**
 * @ORM\Entity
 * @ORM\Table(name="Lot")
 * @ORM\Entity(repositoryClass="ArticleBundle\Repository\LotRepository")
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="ArticleBundle\Entity\LotArticle", mappedBy="lot")
     */
    private $lotArticles;

    public function __construct()
    {
        $this->lotArticles = new ArrayCollection();
    }
    
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
     * @return Lot
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
     * @return Lot
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

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLotArticles()
    {
        return $this->lotArticles;
    }

    /**
     * @param \ArticleBundle\Entity\LotArticle $lotArticle
     */
    public function addLotArticles(LotArticle $lotArticle)
    {
        $this->lotArticles[] = $lotArticle;
    }

    /**
     * @param \ArticleBundle\Entity\LotArticle $lotArticle
     */
    public function removeLotArticle(LotArticle $lotArticle)
    {
        $this->lotArticles->removeElement($lotArticle);
    }

    public function __toString()
    {
        return $this->getLibelle();
    }
}
