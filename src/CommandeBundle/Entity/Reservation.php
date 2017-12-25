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
    * @ORM\JoinColumn(name="article_id", referencedColumnName="id", nullable=false)
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
     * Set date
     *
     * @param \date $date
     *
     * @return Reservation
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

    /**
     * @param $quantite
     * @return Reservation
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

}
