<?php

/* SerialkenBlogBundle:Blog:formulaireModif.html.twig */
class __TwigTemplate_98fe0f5195172f94e55c201e0007b12bab95b0148e8c97753ca049945cf7025b extends Twig_Template
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
        // line 4
        echo "
<h4>Formulaire de modification</h4>

";
        // line 8
        echo "<div class=\"well\">
  <form method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 11
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      <div>
        ";
        // line 14
        echo "         ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label', array("label" => "Titre de l'article"));
        echo "
        ";
        // line 16
        echo "         ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'errors');
        echo "
        ";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget');
        echo "
      </div>
    ";
        // line 21
        echo "      <div>
         ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'label', array("label" => "Contenu de l'article"));
        echo "
         ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'errors');
        echo "
         ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'widget');
        echo "
      </div>
      <div>
         ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'label', array("label" => "Auteur de l'article"));
        echo "
         ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'errors');
        echo "
         ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'widget');
        echo "
      </div>
         ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
       <input type=\"submit\" class=\"btn btn-primary\">
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:formulaireModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  77 => 28,  34 => 11,  53 => 31,  70 => 21,  153 => 62,  146 => 60,  137 => 47,  134 => 46,  127 => 35,  110 => 70,  23 => 2,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 24,  63 => 23,  59 => 22,  38 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 24,  68 => 31,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 21,  46 => 14,  27 => 8,  44 => 13,  31 => 8,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 29,  49 => 14,  24 => 4,  25 => 5,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 13,  40 => 14,  37 => 11,  22 => 4,  246 => 90,  157 => 63,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 58,  101 => 32,  98 => 26,  96 => 48,  83 => 25,  74 => 14,  66 => 15,  55 => 20,  52 => 15,  50 => 18,  43 => 11,  41 => 12,  35 => 8,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 61,  147 => 58,  144 => 59,  141 => 58,  133 => 36,  130 => 41,  125 => 11,  122 => 33,  116 => 29,  112 => 27,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 25,  86 => 31,  82 => 22,  80 => 38,  73 => 27,  64 => 25,  60 => 18,  57 => 11,  54 => 16,  51 => 14,  48 => 24,  45 => 16,  42 => 12,  39 => 9,  36 => 10,  33 => 9,  30 => 9,);
    }
}
