<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_cf4c88d620ed9d9aa338f9514bc8e8286cff46222651a2c80e4d98c28488d399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  76 => 22,  97 => 27,  81 => 29,  77 => 28,  34 => 10,  53 => 15,  70 => 21,  153 => 62,  146 => 60,  137 => 45,  134 => 46,  127 => 35,  110 => 33,  23 => 4,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 46,  132 => 51,  128 => 41,  107 => 32,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 37,  102 => 28,  71 => 19,  67 => 24,  63 => 23,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 27,  75 => 24,  68 => 31,  56 => 21,  87 => 28,  21 => 2,  26 => 3,  93 => 46,  88 => 6,  78 => 21,  46 => 12,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 22,  62 => 29,  49 => 14,  24 => 4,  25 => 5,  19 => 2,  79 => 18,  72 => 16,  69 => 18,  47 => 13,  40 => 14,  37 => 11,  22 => 3,  246 => 90,  157 => 63,  145 => 46,  139 => 45,  131 => 42,  123 => 39,  120 => 32,  115 => 43,  111 => 37,  108 => 58,  101 => 32,  98 => 26,  96 => 30,  83 => 19,  74 => 28,  66 => 21,  55 => 20,  52 => 15,  50 => 15,  43 => 11,  41 => 11,  35 => 8,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 54,  149 => 61,  147 => 50,  144 => 59,  141 => 58,  133 => 36,  130 => 41,  125 => 40,  122 => 33,  116 => 36,  112 => 27,  109 => 29,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 31,  82 => 26,  80 => 38,  73 => 27,  64 => 18,  60 => 20,  57 => 18,  54 => 18,  51 => 14,  48 => 14,  45 => 16,  42 => 10,  39 => 11,  36 => 10,  33 => 6,  30 => 8,);
    }
}
