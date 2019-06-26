<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\october/themes/banquet-city/layouts/master_front.htm */
class __TwigTemplate_1668c026823a8fa280e5693752c9b2aa97b5de6c1436badeb51b2a0ceb51e50d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_description", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
    rel=\"stylesheet\">
  <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/ham.css", 2 => "assets/css/style.css", 3 => "assets/css/flexslider.css", 4 => "assets/css/owl.carousel.css", 5 => "assets/css/font-awesome.css", 6 => "assets/css/animate.css"]);
        // line 19
        echo "\" rel=\"stylesheet\">
  ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "</head>

<body>
  <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
  <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/owl.carousel.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/jquery.flexslider.js", 3 => "assets/js/wow.js", 4 => "assets/js/retina.js"]);
        // line 31
        echo "\"></script>
  ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 34
        echo "
  ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
  
<script>
  \$(document).ready(function(){
    \$(\"#navbarSupportedContent form\").submit(function (event) {
\t\t\tevent.preventDefault();
\t\t\tquery = \$(this).find('input').val();
      window.location=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"+'/s/'+query;
\t\t});
  });  
  </script>

  ";
        // line 48
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 49
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 50
        echo "  </body>
  </html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/banquet-city/layouts/master_front.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  118 => 49,  103 => 48,  95 => 43,  86 => 36,  82 => 35,  79 => 34,  76 => 33,  72 => 32,  69 => 31,  67 => 25,  61 => 21,  58 => 20,  55 => 19,  53 => 11,  47 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>{{this.page.title}}</title>
  <meta name=\"description\" content=\"{{this.page.meta_description}}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
    rel=\"stylesheet\">
  <link href=\"{{ [
    'assets/css/bootstrap.min.css',
    'assets/css/ham.css',
    'assets/css/style.css',
    'assets/css/flexslider.css',
    'assets/css/owl.carousel.css',
    'assets/css/font-awesome.css',
    'assets/css/animate.css'
    ]|theme }}\" rel=\"stylesheet\">
  {% styles %}
</head>

<body>
  <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
  <script src=\"{{ [
    'assets/js/owl.carousel.js',
    'assets/js/bootstrap.min.js',
    'assets/js/jquery.flexslider.js',
    'assets/js/wow.js',
    'assets/js/retina.js'
]|theme }}\"></script>
  {% partial \"navbar\" %}
  {% page %}

  {% partial \"footer\" %}

  
<script>
  \$(document).ready(function(){
    \$(\"#navbarSupportedContent form\").submit(function (event) {
\t\t\tevent.preventDefault();
\t\t\tquery = \$(this).find('input').val();
      window.location=\"{{'homepage'|page}}\"+'/s/'+query;
\t\t});
  });  
  </script>

  {% framework extras %}
  {% scripts %}
  </body>
  </html>", "C:\\xampp\\htdocs\\october/themes/banquet-city/layouts/master_front.htm", "");
    }
}
