<?php

/* SerialkenBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_50ff75369acd16822666fc11731d302a812279483268468b0c7c8e240bf52acb extends Twig_Template
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
        // line 3
        $context["comment"] = ((array_key_exists("comment", $context)) ? (_twig_default_filter((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), false)) : (false));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_serialken_body($context, array $blocks = array())
    {
        // line 12
        echo "
   
    ";
        // line 14
        $this->env->loadTemplate("SerialkenBlogBundle:Blog:article.html.twig")->display($context);
        // line 15
        echo "    
    ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["listeArticleCompetence"]) ? $context["listeArticleCompetence"] : $this->getContext($context, "listeArticleCompetence"))) > 0)) {
            echo " 
       <div> 
           Compétences utilisées dans cet article : 
           <ul> 
           ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArticleCompetence"]) ? $context["listeArticleCompetence"] : $this->getContext($context, "listeArticleCompetence")));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCompetence"]) {
                echo " 
                 <li> ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "competence"), "nom"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "niveau"), "html", null, true);
                echo "</li> 
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCompetence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  
            </ul> 
        </div>
    ";
        }
        // line 26
        echo "  
    ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["listeCommentaires"]) ? $context["listeCommentaires"] : $this->getContext($context, "listeCommentaires"))) > 0)) {
            // line 28
            echo "    <h4>Commentaires <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["listeCommentaires"]) ? $context["listeCommentaires"] : $this->getContext($context, "listeCommentaires"))), "html", null, true);
            echo "</span></h4> 
        ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCommentaires"]) ? $context["listeCommentaires"] : $this->getContext($context, "listeCommentaires")));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 30
                echo "            <div class=\"alert alert-info\">
                ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"), "html", null, true);
                echo "
                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_supprimer_commentaire", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\" class=\" btn btn-mini\"> 
                    <i class=\"icon-chevron-down\"></i>
                        supprimer commentaire
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "   ";
        } else {
            // line 39
            echo "     <div class=\"alert alert-info\">Pas encore de commentaires !!!!!!</div>
   ";
        }
        // line 41
        echo "    ";
        // line 42
        echo "   ";
        if ((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment"))) {
            // line 43
            echo "       ";
            $this->env->loadTemplate("SerialkenBlogBundle:Blog:formulaire.html.twig")->display(array_merge($context, array("sujet" => "de commentaires")));
            // line 44
            echo "   ";
        } else {
            // line 45
            echo "   <p>
       <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_ajouter_commentaire", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" class=\" btn btn-mini\"> 
           <i class=\"icon-chevron-down\"></i>
           ajouter un commentaire
       </a>
   </p>
   ";
        }
        // line 52
        echo "  <p>
    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("serialkenblog_accueil");
        echo "\" class=\"btn\">
\t  <i class=\"icon-chevron-left\"></i>
\t  Retour à la liste
\t</a>
\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t  <i class=\"icon-chevron-left\"></i>
\t  Modifier l'article
\t</a>
\t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t  <i class=\"icon-trash\"></i>
\t  Supprimer l'article
\t</a>
  </p>
  
";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 61,  157 => 57,  150 => 53,  147 => 52,  138 => 46,  135 => 45,  132 => 44,  129 => 43,  126 => 42,  124 => 41,  120 => 39,  117 => 38,  105 => 32,  99 => 31,  96 => 30,  92 => 29,  87 => 28,  85 => 27,  82 => 26,  76 => 22,  66 => 21,  60 => 20,  53 => 16,  50 => 15,  48 => 14,  44 => 12,  41 => 11,  34 => 8,  31 => 7,  26 => 3,);
    }
}
