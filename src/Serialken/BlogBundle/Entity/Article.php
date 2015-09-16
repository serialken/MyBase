<?php

namespace Serialken\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BlogBundle\Repository\ArticleRepository")
 * 
 * @ORM\HasLifeCycleCallbacks()
 * 
 */
class Article
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(min=5)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     * @Assert\Length(min=2)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $contenu;
    
     /**
     * @ORM\OneToOne(targetEntity="Serialken\BlogBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\joinColumn(nullable=true)
      * @Assert\Valid()
     */
    private $image;
    
    /**
     * @ORM\column(name="publication", type="boolean")
     */
    private $publication;
        
    /**
     * @ORM\ManyToMany(targetEntity="Serialken\BlogBundle\Entity\Categorie", cascade={"persist"})
     * @Assert\Valid()
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="Serialken\BlogBundle\Entity\Commentaire", cascade ={"persist", "remove"}, mappedBy="article")
     * @Assert\Valid()
     */
    private $commentaires;
    
    /**
     * @var \Datetime
     * 
     * @ORM\column(name="dateEdition", type="datetime", nullable=true)
     */
    private $dateEdition;
    
    ///**
     // * @Gedmo\Slug(fields={"titre"})
      //* @ORM\column(length=128, unique=true)
      //*/
     private $slug;
    
    public function __construct()
    {
      $this->date = new\Datetime();
      $this->publication = true;
      $this->categories = new ArrayCollection();
      $this->commentaires = new ArrayCollection();
    }
       
     /**
     *@ORM\PreUpdate 
     */
    public function preUpdateDate() 
    {
        $this->setDateEdition(new \Datetime());
    }   
    
    //getters et setters
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
     * Set date
     *
     * @param \DateTime $date
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
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }
    
    /**
     * Set image
     * 
     * @param Serialken\BlogBundle\Entity\Image $image
     */
    public function setImage(\Serialken\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    }
    
    /**
     * @return Serialken\BlogBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Add categories
     * 
     * @param Serialken\BlogBundle\Entity\Categorie $categorie
     */
    public function addCategorie(\Serialken\BlogBundle\Entity\Categorie $categorie)
    {
        $this->categories[] = $categorie;
    }
    
    /**
     * Remove categories
     * 
     * @param Serialken\BlogBundle\Entity\Categorie $categorie
     */
    public function removeCategorie(\Serialken\BlogBundle\Entity\Categorie $categorie)
    {
        $this->categories->removeElement($categorie);
    }
    
    /**
     * Get categories
     * 
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
    
    /**
     * Add Commentaires
     * 
     * @param Serialken\BlogBundle\Entity\Commentaire $commentaire
     */
    public function addCommentaire(\Serialken\BlogBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;
        //on lie larticle au commentaire 
        //pour plutard pouvoir recupere lobjet article a partir du commentaire
        $commentaire->setArticle($this);
        return $this;
    }
    
    /**
     * Remove Commentaires
     * 
     * @param Serialken\BlogBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\Serialken\BlogBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }
    
    /**
     * Get Commentaires
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
    
    /**
     * Set DateEdition
     * 
     * @param \Datetime $date
     * @return Entity
     * 
     */
    public function setDateEdition($date) 
    {
        $this->dateEdition = $date;
        return $this;
    }
    
    /**
     * Get DateEdition
     * 
     * @return \Datetime
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }
    
   /**
    * @ORM\Preupdate
    */
    public function preSetDateEdition()
    {
        return $this->setDateEdition(new \DateTime());
    }
    
    /**
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
