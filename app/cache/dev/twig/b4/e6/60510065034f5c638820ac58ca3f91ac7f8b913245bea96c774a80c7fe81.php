<?php

/* SerialkenBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_b4e660510065034f5c638820ac58ca3f91ac7f8b913245bea96c774a80c7fe81 extends Twig_Template
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
<h4>Formulaire ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "html", null, true);
        echo "</h4>

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
     ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 14
        echo "      ";
        // line 24
        echo "      ";
        // line 29
        echo "      
";
        // line 31
        echo "       <input type=\"submit\" class=\"btn btn-primary\">
  </form>
</div>
        ";
    }

    public function getTemplateName()
    {
        return "SerialkenBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 31,  50 => 29,  48 => 24,  46 => 14,  42 => 12,  37 => 11,  33 => 9,  30 => 8,  25 => 5,  22 => 4,  19 => 2,);
    }
}
