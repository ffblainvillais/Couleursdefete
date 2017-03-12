<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ArticleBundle\Entity\Article;

/**
 * @ORM\Entity
 * @ORM\Table(name="Reservation")
 */
class Reservation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
    * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Article")
    * @ORM\JoinColumn(nullable=false)
    */
    private $article;
    
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;
    
    
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
    
    
    /**
     * Set date
     *
     * @param \date $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \date
     */
    public function getDate()
    {
        return $this->date;
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
    
    
    
    
    public function __toString()
    {
        return $this->getLibelle();
    }
}
