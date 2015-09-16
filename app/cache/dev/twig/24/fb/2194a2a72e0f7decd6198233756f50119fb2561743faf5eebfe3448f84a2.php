<?php

/* SerialkenBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_24fb2194a2a72e0f7decd6198233756f50119fb2561743faf5eebfe3448f84a2 extends Twig_Template
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

<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,  157 => 63,  153 => 62,  149 => 61,  146 => 60,  144 => 59,  141 => 58,  134 => 46,  127 => 12,  122 => 10,  108 => 58,  93 => 46,  86 => 42,  80 => 38,  75 => 37,  68 => 31,  62 => 29,  54 => 27,  38 => 14,  36 => 10,  23 => 2,  63 => 19,  55 => 20,  52 => 26,  46 => 13,  43 => 11,  40 => 10,  33 => 7,  30 => 8,  154 => 54,  147 => 50,  140 => 46,  137 => 47,  131 => 42,  128 => 41,  125 => 11,  123 => 39,  119 => 37,  116 => 8,  114 => 35,  110 => 70,  107 => 32,  96 => 48,  92 => 29,  87 => 28,  85 => 27,  82 => 26,  76 => 22,  66 => 21,  60 => 18,  53 => 16,  50 => 15,  48 => 14,  44 => 12,  41 => 10,  34 => 8,  31 => 8,  26 => 7,);
    }
}
