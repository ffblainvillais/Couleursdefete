<?php

namespace ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="action")
 */
class Action
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

   
    
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        return $this;
    }


    public function getLibelle()
    {
        return $this->libelle;
    }
    
   
    

    
    public function __toString()
    {
        return $this->getLibelle();
    }
}
