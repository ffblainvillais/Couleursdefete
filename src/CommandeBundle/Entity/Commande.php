<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DoctrineCommonCollectionsArrayCollection;
use ArticleBundle\Entity\Article;

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
     * @ORM\Column(type="string")
     */
    private $type_evenement;
    
    
    
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

    
    
    public function setClient(\ClientBundle\Entity\Client $client)
    {
        $this->client = $client;
        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }
    
    
    public function setAnnee(\CommandeBundle\Entity\Annee $annee)
    {
        $this->annee = $annee;
        return $this;
    }

    public function getAnnee()
    {
        return $this->annee;
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
    
    
    public function setPartenaire(\PartenaireBundle\Entity\Partenaire $partenaire)
    {
        $this->partenaire = $partenaire;
        return $this;
    }

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
    
    
    
    public function __toString()
    {
        return $this->getLibelle();
    }
}
