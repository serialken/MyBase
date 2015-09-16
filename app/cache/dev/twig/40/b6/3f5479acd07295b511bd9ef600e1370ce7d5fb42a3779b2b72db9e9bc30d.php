<?php

/* SerialkenBlogBundle:Blog:supprimer.html.twig */
class __TwigTemplate_40b63f5479acd07295b511bd9ef600e1370ce7d5fb42a3779b2b72db9e9bc30d extends Twig_Template
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
        echo "    Supprimer un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_serialken_body($context, array $blocks = array())
    {
        // line 10
        echo "
   <h2>Supprimer un article</h2>   
    
   <p>
      Etes vous sur de vouloir supprimer l'article \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
        echo "\" ?
   </p>

   ";
        // line 18
        echo "   <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" method=\"post\">
       <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serialkenblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
           <i class=\"icon-chevron-left\"></i>
           Retour à l'article
       </a>
       <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("serialkenblog_accueil");
        echo "\" class=\"btn\">
\t   <i class=\"icon-chevron-left\"></i>
\t   Retour à la liste
        </a>
        <input type=\"submit\" value=\"supprimer\" class=\"btn btn-danger\" />
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
   </form>
   
";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  81 => 29,  77 => 28,  34 => 11,  53 => 16,  70 => 21,  153 => 62,  146 => 60,  137 => 47,  134 => 46,  127 => 35,  110 => 70,  23 => 2,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 28,  71 => 19,  67 => 24,  63 => 23,  59 => 19,  38 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 24,  68 => 31,  56 => 21,  87 => 25,  21 => 2,  26 => 7,  93 => 46,  88 => 6,  78 => 21,  46 => 12,  27 => 8,  44 => 13,  31 => 8,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 22,  62 => 29,  49 => 14,  24 => 4,  25 => 5,  19 => 2,  79 => 18,  72 => 16,  69 => 18,  47 => 13,  40 => 14,  37 => 11,  22 => 4,  246 => 90,  157 => 63,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 32,  115 => 43,  111 => 37,  108 => 58,  101 => 32,  98 => 26,  96 => 48,  83 => 19,  74 => 28,  66 => 23,  55 => 20,  52 => 15,  50 => 18,  43 => 11,  41 => 10,  35 => 8,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 61,  147 => 58,  144 => 59,  141 => 58,  133 => 36,  130 => 41,  125 => 11,  122 => 33,  116 => 29,  112 => 27,  109 => 29,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 25,  86 => 31,  82 => 22,  80 => 38,  73 => 27,  64 => 25,  60 => 18,  57 => 11,  54 => 18,  51 => 14,  48 => 14,  45 => 16,  42 => 10,  39 => 9,  36 => 10,  33 => 9,  30 => 8,);
    }
}
