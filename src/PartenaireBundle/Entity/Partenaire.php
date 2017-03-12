<?php

namespace PartenaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Partenaire")
 */
class Partenaire
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
    private $adresse;
    
    
    /**
     * @ORM\Column(type="string")
     */
    private $site;
    
   
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/jpg" })
     */
    public $logo;
    
    
    

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
     * @return Partenaire
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
     * Set adresse
     *
     * @param \varchar $adresse
     *
     * @return Partenaire
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
     * Set site
     *
     * @param \varchar $site
     *
     * @return Partenaire
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \varchar
     */
    public function getSite()
    {
        return $this->site;
    }
    
    
    
    
    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }
    
   
    
    
    
    
    
    public function getWebPath()
    {
        return null === $this->pictureName ? null : $this->getUploadDir().'/'.$this->pictureName;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/pictures';
    }
   
    public function uploadLogo()
    {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique
        // nécessaire de le nettoyer pour éviter les problèmes de sécurité

        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->logo->move($this->getUploadRootDir(), $this->logo->getClientOriginalName());

        // On sauvegarde le nom de fichier
        $this->pictureName = $this->logo->getClientOriginalName();
       
        // La propriété file ne servira plus
        $this->logo = null;
    }
    
    
    
    
    
    public function __toString()
    {
        return $this->getNom();
    }
}
