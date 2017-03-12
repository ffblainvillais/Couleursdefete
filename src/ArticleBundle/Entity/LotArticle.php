<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="lot_article")
 */
class LotArticle
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
    * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Lot")
    * @ORM\JoinColumn(nullable=false)
    */
    private $lot;
    

    
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
    
    
    
    
    public function setLot(\ArticleBundle\Entity\Lot $lot)
    {
        $this->lot = $lot;
        return $this;
    }

    public function getLot()
    {
        return $this->lot;
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
    
    

    
    /*public function __toString()
    {
        return $this->getLibelle();
    }*/
}
