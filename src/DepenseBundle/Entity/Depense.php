<?php

namespace DepenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="depense")
 * @ORM\Entity(repositoryClass="DepenseBundle\Repository\SpentRepository")
 */
class Depense
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
     * @ORM\Column(name="montant",type="float")
     * @Assert\Type(type="float", message="prix.invalid")
     */
    private $montant;
    
    
    /**
    * @ORM\ManyToOne(targetEntity="DepenseBundle\Entity\CategorieDepense")
    * @ORM\JoinColumn(nullable=true)
    */
    private $categorie;
    
    /**
    * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Annee")
    * @ORM\JoinColumn(nullable=true)
    */
    private $annee;
    
    /**
     * @ORM\Column(type="string")
     */
    private $date;
    
    

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
     * Set montant
     *
     * @param \float $montant
     *
     * @return Article
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return \varchar
     */
    public function getMontant()
    {
        return $this->montant;
    }
    
    
    public function setCategorie(\DepenseBundle\Entity\CategorieDepense $categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
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
    
    
    /**
     * Set date
     *
     * @param \date $date
     *
     * @return Depense
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
}
