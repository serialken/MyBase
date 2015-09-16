<?php

/* SerialkenBlogBundle:Blog:article.html.twig */
class __TwigTemplate_3b6e9b793802bba784e1dee2970962785ad1b9f55fb2e6a2ba5ba33148af7c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), false)) : (false));
        echo " 

<h3>
    ";
        // line 6
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            // line 7
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "webPath")), "html", null, true);
            echo "\"
             alt=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
            echo "\" 
         />
    ";
        }
        // line 12
        echo "    ";
        if ((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil"))) {
            // line 13
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "
    ";
        }
        // line 17
        echo "</h3>
   <i> Créé le ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/y"), "html", null, true);
        echo ", par ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo "</i>
   ";
        // line 20
        echo "   ";
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"), "count") > 0)) {
            // line 21
            echo "       
           <i>
                    - catégories :
                   ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 25
                echo "                       ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 26
                echo "                   ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </i>     
   ";
        }
        // line 29
        echo "   
   
   
   <div class=\"well\">
       ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
        echo "
   </div>
   ";
        // line 35
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "dateEdition", array(), "any", true, true)) {
            echo "<i>Derniére modification: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateEdition"), "d/m/Y"), "html", null, true);
            echo "</i>";
        }
        // line 36
        echo "   
   
   
";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  112 => 27,  98 => 26,  70 => 21,  67 => 20,  61 => 18,  58 => 17,  35 => 8,  28 => 6,  22 => 3,  19 => 2,  157 => 63,  153 => 62,  149 => 61,  146 => 60,  144 => 59,  141 => 58,  134 => 46,  127 => 35,  122 => 33,  108 => 58,  93 => 46,  86 => 42,  80 => 38,  75 => 24,  68 => 31,  62 => 29,  54 => 27,  38 => 14,  36 => 10,  23 => 2,  63 => 19,  55 => 20,  52 => 15,  46 => 13,  43 => 11,  40 => 10,  33 => 7,  30 => 7,  154 => 54,  147 => 50,  140 => 46,  137 => 47,  131 => 42,  128 => 41,  125 => 11,  123 => 39,  119 => 37,  116 => 29,  114 => 35,  110 => 70,  107 => 32,  96 => 48,  92 => 25,  87 => 28,  85 => 27,  82 => 26,  76 => 22,  66 => 21,  60 => 18,  53 => 16,  50 => 15,  48 => 14,  44 => 13,  41 => 12,  34 => 8,  31 => 8,  26 => 7,);
    }
}
