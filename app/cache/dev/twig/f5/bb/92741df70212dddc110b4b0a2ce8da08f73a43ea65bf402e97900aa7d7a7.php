<?php

/* ::layout.html.twig */
class __TwigTemplate_f5bb92741df70212dddc110b4b0a2ce8da08f73a43ea65bf402e97900aa7d7a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
\t
\t<title>";
        // line 8
        $this->displayBlock('tittle', $context, $blocks);
        echo "</title>
\t
\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>
  
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
          <h1>Mon projet symfony2</h1>
          <p>Ce projet est dans le cadre de ma formation Symfony2 :) .</p>
          <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
           Lire le tutoriel >>
           </a></p>
        </div>\t
        <div>
        ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "            Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 29
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
        ";
        }
        // line 31
        echo "        </div>
\t    <div class=\"row\">\t
\t      <div id=\"menu\" class=\"span3\">
            <h3>Menu</h3>
            <ul class=\"nav nav-pills nav-stacked\">
\t\t\t";
        // line 37
        echo "            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("serialkenblog_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("serialkenblog_ajouter");
        echo "\">Ajouter un article</a></li>           
            </ul>
            
\t\t\t";
        // line 42
        echo "\t         ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SerialkenBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
             </div>
             <div id=\"content\" class=\"span9\">
\t\t   ";
        // line 46
        echo "                   ";
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "\t     </div>
\t    </div>
\t\t
        <hr>
        
\t\t<footer class=\"container\">
\t\t <p>Symply the best !!!!!!! SerialArt</p>
\t\t </footer>
    </div>
\t
  ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "\t
  </body>
</html>";
    }

    // line 8
    public function block_tittle($context, array $blocks = array())
    {
        echo "Serialken";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t  ";
        // line 12
        echo "\t  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "\t\t   ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "\t";
        // line 60
        echo "\t <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/adapters/jquery.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\">
             \$().ready(function () {
                  \$('.ckeditor').ckeditor();
             });
         </script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  153 => 62,  149 => 61,  146 => 60,  144 => 59,  141 => 58,  134 => 46,  127 => 12,  122 => 10,  108 => 58,  93 => 46,  86 => 42,  80 => 38,  75 => 37,  68 => 31,  62 => 29,  54 => 27,  38 => 14,  36 => 10,  23 => 2,  63 => 19,  55 => 20,  52 => 26,  46 => 13,  43 => 11,  40 => 10,  33 => 7,  30 => 6,  154 => 54,  147 => 50,  140 => 46,  137 => 47,  131 => 42,  128 => 41,  125 => 11,  123 => 39,  119 => 37,  116 => 8,  114 => 35,  110 => 70,  107 => 32,  96 => 48,  92 => 29,  87 => 28,  85 => 27,  82 => 26,  76 => 22,  66 => 21,  60 => 18,  53 => 16,  50 => 15,  48 => 14,  44 => 12,  41 => 11,  34 => 8,  31 => 8,  26 => 3,);
    }
}
