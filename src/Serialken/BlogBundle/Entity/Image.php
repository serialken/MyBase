<?php

namespace Serialken\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\component\HttpFoundation\File\UploadedFile;


/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BlogBundle\Repository\ImageRepository")
 * @ORM\HasLifeCycleCallbacks()
 */
class Image
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=false)
     */
    private $alt;

    private $file;
    
    private $tempFilename;
    
    public function __construct()
    {
      //$this->tempFilename = 'toto';
    
    }
    
    public function setFile(UploadedFile $file) {
        $this->file = $file;
        
        //on verifie si on a dja un fichier pour cette entité
        if(null !== $this->url)
        {
            //on sauvegarde lextension pour le supprimer plutard
            $this->tempFilename = $this->url;
            
            //on reinitialise les valeurs
            $this->url = null;
            $this->alt = null;
        }
    }
    
    /**
     * 
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() 
    {
        var_dump($this->url);
        if (null === $this->file){
         return;     
        }
        //le nom du fichier est son id on stocke juste son extension
        $this->url = $this->file->getClientOriginalExtension();
     //die(var_dump($this->getUrl()));
        //je stock le nom de base du fichier
        $this->alt = $this->file->getClientOriginalName();
    }
    
    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate 
     */
    public function upload()
    {
        if (null === $this->file){
         return;   
     }
     //si on a avait un ancien fichier on le supprime
     if(null !== $this->tempFilename)
     {
         $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
         if(file_exists($oldFile))
         {
             unlink($oldFile);
         }
     }
     //on dplace le fichier envoyé dans le repertoire de notre choix
     $this->file->move($this->getUploadRootDir(), //rep de destination
                        $this->id.'.'.$this->url); //nom du fichier a creer "id.extension"
    }
    
    /**
     * @ORM\PreRemove
     */
    public function preRemoveUpload()
    {
        //je sauvegarde temporairement le fichier car il depend de lid
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        //on postremove on a pas acces a lid donc on utilise notre sauvegarde
        if(is_file($this->tempFilename))
        {
//            die(var_dump($this->tempFilename));
            unlink($this->tempFilename);
        }     
    }
    
     public function getUploadDir()
    {
        //on retourn le chemin relatif pour un navigateur
        return 'uploads/img';
    }
    
     public function getUploadRootDir()
    {
        //on retourn le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    public function getWebpath() {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }
    
    public function getFile() {
        return $this->file;
    }
    
  
}
