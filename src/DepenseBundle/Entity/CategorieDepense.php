<?php

namespace DepenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DepenseBundle\Entity\Depense;

/**
 * @ORM\Entity
 * @ORM\Table(name="Categorie_depense")
 */
class CategorieDepense
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="DepenseBundle\Entity\Depense", mappedBy="categorie")
     */
    private $spents;
    
    public function __construct()
    {
        $this->spents = new ArrayCollection();
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
     * @param Depense $spent
     */
    public function addSpent(Depense $spent)
    {
        $this->spents[] = $spent;
    }

    /**
     * @param Depense $spent
     */
    public function removeSpent(Depense $spent)
    {
        $this->spents->removeElement($spent);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpents()
    {
        return $this->spents;
    }

}
