<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use ArticleBundle\Entity\Lot;
use ArticleBundle\Entity\Article;
use PartenaireBundle\Entity\Partenaire;
use UserBundle\Entity\User;
use CommandeBundle\Entity\Annee;
use ClientBundle\Entity\Client;

/**
 * @ORM\Entity(repositoryClass="CommandeBundle\Repository\CommandeRepository")
 * @ORM\Table(name="Commande")
 */
class Commande
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
     * @ORM\Column(type="string")
     */
    private $date;
    
    /**
     * @ORM\Column(type="boolean", options={"default" = 0})
     */
    private $paye;
    
    /**
     * @ORM\Column(type="boolean", options={"default" = 0})
     */
    private $archive;
    
    /**
    * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\Client")
    * @ORM\JoinColumn(nullable=true)
    */
    private $client;
    
    /**
    * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Annee")
    * @ORM\JoinColumn(nullable=true)
    */
    private $annee;
    
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=true)
    */
    private $utilisateur;
    
    /**
     * @ORM\Column(type="float")
     */
    private $acompte;
    
    /**
     * @ORM\Column(type="date")
     */
    private $dateEvenement;
    
    /**
    * @ORM\ManyToOne(targetEntity="PartenaireBundle\Entity\Partenaire")
    * @ORM\JoinColumn(nullable=true)
    */
    private $partenaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CommandeArticle", mappedBy="commande")
     */
    private $articles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CommandeLot", mappedBy="commande")
     */
    private $lots;
    
    /**
     * @ORM\Column(type="string")
     */
    private $type_evenement;
    

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->lots     = new ArrayCollection();
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
     * @return varchar
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    
    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Set paye
     *
     * @param \boolean $paye
     *
     * @return Commande
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return \boolean
     */
    public function getPaye()
    {
        return $this->paye;
    }
    
    /**
     * Set archive
     *
     * @param \boolean $archive
     *
     * @return Commande
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return \boolean
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * @param Client $client
     * @return $this
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Annee $annee
     * @return $this
     */
    public function setAnnee(Annee $annee)
    {
        $this->annee = $annee;
        return $this;
    }

    /**
     * @return Annee
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param User $utilisateur
     * @return $this
     */
    public function setUtilisateur(User $utilisateur)
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    /**
     * @return User
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set acompte
     *
     * @param \float $acompte
     *
     * @return Commande
     */
    public function setAcompte($acompte)
    {
        $this->acompte = $acompte;
        return $this;
    }

    /**
     * Get acompte
     *
     * @return \float
     */
    public function getAcompte()
    {
        return $this->acompte;
    }
    
    
    /**
     * Set dateEvenement
     *
     * @param \date $dateEvenement
     *
     * @return Article
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;
        return $this;
    }

    /**
     * Get date
     *
     * @return \dateEvenement
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * @param Partenaire $partenaire
     * @return $this
     */
    public function setPartenaire(Partenaire $partenaire)
    {
        $this->partenaire = $partenaire;
        return $this;
    }

    /**
     * @return Partenaire
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }
    
    /**
     * Set type_evenement
     *
     * @param \varchar $type_evenement
     *
     * @return Commande
     */
    public function setTypeEvenement($type_evenement)
    {
        $this->type_evenement = $type_evenement;
        return $this;
    }

    /**
     * Get libelle
     *
     * @return \varchar
     */
    public function getTypeEvenement()
    {
        return $this->type_evenement;
    }

    /**
     * @param Article $article
     */
    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
    }

    /**
     * @param Article $article
     */
    public function removeArticle(Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @param Lot $lot
     */
    public function addLot(Lot $lot)
    {
        $this->lots[] = $lot;
    }

    /**
     * @param Lot $lot
     */
    public function removeLot(Lot $lot)
    {
        $this->lots->removeElement($lot);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLots()
    {
        return $this->lots;
    }

}
