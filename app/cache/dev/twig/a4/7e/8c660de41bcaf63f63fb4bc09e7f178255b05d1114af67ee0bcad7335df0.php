<?php

/* SerialkenBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_a47e8c660de41bcaf63f63fb4bc09e7f178255b05d1114af67ee0bcad7335df0 extends Twig_Template
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
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_serialken_body($context, array $blocks = array())
    {
        // line 10
        echo "
   <h2>Modifier un article</h2>
   
   ";
        // line 13
        $this->env->loadTemplate("SerialkenBlogBundle:Blog:formulaire.html.twig")->display(array_merge($context, array("sujet" => "de modification")));
        // line 14
        echo "   
   <p>
     Vous éditez un article deja existant,
\t ne le changez pas trop pour éviter aux membres de ne pas comprendre
\t ce qui se passe.
   </p>
   
   <p>
     <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t   <i class=\"icon-chevron-left\"></i>
\t   Retour à l'article
\t </a>
   </p>
   
";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
