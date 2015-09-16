<?php
// src\Serialken\BlogBundle\Entity

namespace Serialken\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * ArticleCompetence
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BlogBundle\Repository\ArticleCompetenceRepository")
 */
class ArticleCompetence
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Serialken\BlogBundle\Entity\Article")
     */
    private $article;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Serialken\BlogBundle\Entity\Competence")
     */
    private $competence;
    
    /**
     * @ORM\Column()
     */
    private $niveau; //creation dun attribut niveau
    
    public function setArticle(\Serialken\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;
        return $this;
    }
    public function getArticle()
    {
        return $this->article;
    }
    
    public function setCompetence(\Serialken\BlogBundle\Entity\Competence $competence) 
    {
        $this->competence = $competence;
        return $this;
    }
    public function getCompetence()
    {
        return $this->competence;
    }
    
    public function setNiveau($niveau) 
    {
        $this->niveau = $niveau;
        return $this;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
}