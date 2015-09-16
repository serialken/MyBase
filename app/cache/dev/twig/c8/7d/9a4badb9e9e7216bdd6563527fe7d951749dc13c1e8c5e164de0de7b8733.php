<?php

/* SerialkenBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_c87d9a4badb9e9e7216bdd6563527fe7d951749dc13c1e8c5e164de0de7b8733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SerialkenBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'serialken_body' => array($this, 'block_serialken_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SerialkenBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_serialken_body($context, array $blocks = array())
    {
        // line 10
        echo "
   <h2>Ajouter un article</h2>
   
   ";
        // line 13
        $this->env->loadTemplate("SerialkenBlogBundle:Blog:formulaire.html.twig")->display(array_merge($context, array("sujet" => "d'article")));
        // line 14
        echo "   
   <p>
     Attention : cet article sera ajouté directement
\t sur la page d'accueil apres validation du formulaire.
   </p>
   
   <p>
     ";
        // line 22
        echo "\t <a href=\"";
        echo $this->env->getExtension('routing')->getPath("serialkenblog_accueil");
        echo "\" class=\"btn\"> 
\t 
     ";
        // line 25
        echo "\t   <i class=\"icon-chevron-left\"></i>
\t   Retour à la liste
\t </a>
   </p>
   
";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  58 => 22,  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
