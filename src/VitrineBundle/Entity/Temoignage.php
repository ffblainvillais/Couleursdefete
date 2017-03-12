<?php

namespace VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Temoignage")
 */
class Temoignage
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
    private $nom;
    
    
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    
    
    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $allow;
    
    
    

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
     * Set nom
     *
     * @param \varchar $nom
     *
     * @return Temoignage
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return \varchar
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param \varchar $description
     *
     * @return Temoignage
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return \varchar
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \date $date
     *
     * @return Temoignage
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
     * Set allow
     *
     * @param \boolean $allow
     *
     * @return Temoignage
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;

        return $this;
    }

    /**
     * Get allow
     *
     * @return \boolean
     */
    public function getAllow()
    {
        return $this->allow;
    }

    
   

}
