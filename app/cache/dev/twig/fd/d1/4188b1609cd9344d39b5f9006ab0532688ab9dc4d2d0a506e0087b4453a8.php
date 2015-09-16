<?php

/* SerialkenBlogBundle::layout.html.twig */
class __TwigTemplate_fdd14188b1609cd9344d39b5f9006ab0532688ab9dc4d2d0a506e0087b4453a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'serialken_body' => array($this, 'block_serialken_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  ";
        // line 13
        echo "  <h1>Blog</h1>
  
  <hr>
  
  ";
        // line 18
        echo "  ";
        $this->displayBlock('serialken_body', $context, $blocks);
        // line 20
        echo "  
";
    }

    // line 18
    public function block_serialken_body($context, array $blocks = array())
    {
        // line 19
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  55 => 20,  52 => 18,  46 => 13,  43 => 11,  40 => 10,  33 => 7,  30 => 6,  154 => 54,  147 => 50,  140 => 46,  137 => 45,  131 => 42,  128 => 41,  125 => 40,  123 => 39,  119 => 37,  116 => 36,  114 => 35,  110 => 33,  107 => 32,  96 => 30,  92 => 29,  87 => 28,  85 => 27,  82 => 26,  76 => 22,  66 => 21,  60 => 18,  53 => 16,  50 => 15,  48 => 14,  44 => 12,  41 => 11,  34 => 8,  31 => 7,  26 => 3,);
    }
}
