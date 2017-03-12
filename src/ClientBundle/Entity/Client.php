<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Client")
 * @ORM\Entity(repositoryClass="ClientBundle\Entity\ClientRepository")
 */
class Client
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
    private $prenom;
    
    
    /**
     * @ORM\Column(type="string")
     */
    private $adresse;
    
    
    /**
     * @ORM\Column(type="string")
     */
    private $mail;
    
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=true)
    */
    private $utilisateur;

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
     * @return Article
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
     * Set prenom
     *
     * @param \varchar $prenom
     *
     * @return Article
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return \varchar
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    
    /**
     * Set adresse
     *
     * @param \varchar $adresse
     *
     * @return Article
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \varchar
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    
    /**
     * Set mail
     *
     * @param \varchar $mail
     *
     * @return Article
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return \varchar
     */
    public function getMail()
    {
        return $this->mail;
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
    
    
    
    public function __toString()
    {
        return $this->getNom();
    }
}
