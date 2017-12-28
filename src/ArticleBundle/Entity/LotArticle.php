<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ArticleBundle\Entity\Lot;
use ArticleBundle\Entity\Article;

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
    * @ORM\JoinColumn(name="article_id", referencedColumnName="id", nullable=false)
    */
    private $article;
    
    /**
    * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Lot", inversedBy="lotArticles")
    * @ORM\JoinColumn(name="lot_id", referencedColumnName="id", nullable=false)
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
     * @param \ArticleBundle\Entity\Article $article
     * @return $this
     */
    public function setArticle(Article $article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;

    }

}
