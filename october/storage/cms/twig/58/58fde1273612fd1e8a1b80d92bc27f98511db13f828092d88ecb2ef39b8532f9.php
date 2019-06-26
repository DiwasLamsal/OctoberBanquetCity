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

/* C:\xampp\htdocs\october/themes/banquet-city/partials/navbar.htm */
class __TwigTemplate_cc14cfc99c2309594b2b11732e8df029b36e4ee0acd26d71e987d1d52bb56e75 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<div class=\"container\">
\t\t<div class=\"row\" style=\"width: 100%\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\"></a>
\t\t\t</div>

\t\t\t<div class=\" col-md-6\">
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\"
\t\t\t\t\t\t\t\tplaceholder=\"Search Banquet by Name, City or Event Type\" aria-label=\"Search\" required>
\t\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><i
\t\t\t\t\t\t\t\t\tclass=\"material-icons\">
\t\t\t\t\t\t\t\t\tsearch
\t\t\t\t\t\t\t\t</i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"nav-menu\">
\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("banquet-register");
        echo "\" class=\"reg-head\">Register Your Banquet</a></li>
\t\t\t\t\t<li><a href=\"#\">Help</a></li>
\t\t\t\t\t";
        // line 25
        if (($context["user"] ?? null)) {
            // line 26
            echo "\t\t\t\t\t\t<li><a href = \"#\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
\t\t\t\t\t\t<p style=\"text-align: center;\">Welcome, ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("signup");
            echo "\">Sign Up</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Login</a></li>
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"ham-nav\" role=\"navigation\">
\t\t\t\t<div id=\"menuToggle\">
\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>

\t\t\t\t\t<ul id=\"h_menu\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Home</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>About</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Info</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Show me more</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Home</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>About</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Info</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Show me more</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Home</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>About</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Info</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Show me more</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>


</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/banquet-city/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  84 => 30,  79 => 29,  74 => 27,  71 => 26,  69 => 25,  64 => 23,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<div class=\"container\">
\t\t<div class=\"row\" style=\"width: 100%\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{'homepage'|page}}\"><img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"\"></a>
\t\t\t</div>

\t\t\t<div class=\" col-md-6\">
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\"
\t\t\t\t\t\t\t\tplaceholder=\"Search Banquet by Name, City or Event Type\" aria-label=\"Search\" required>
\t\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><i
\t\t\t\t\t\t\t\t\tclass=\"material-icons\">
\t\t\t\t\t\t\t\t\tsearch
\t\t\t\t\t\t\t\t</i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"nav-menu\">
\t\t\t\t\t<li><a href=\"{{'banquet-register'|page}}\" class=\"reg-head\">Register Your Banquet</a></li>
\t\t\t\t\t<li><a href=\"#\">Help</a></li>
\t\t\t\t\t{% if user %}
\t\t\t\t\t\t<li><a href = \"#\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
\t\t\t\t\t\t<p style=\"text-align: center;\">Welcome, {{ user.email }}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li><a href=\"{{'signup'|page}}\">Sign Up</a></li>
\t\t\t\t\t\t<li><a href=\"{{'login'|page}}\">Login</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"ham-nav\" role=\"navigation\">
\t\t\t\t<div id=\"menuToggle\">
\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>

\t\t\t\t\t<ul id=\"h_menu\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Home</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>About</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Info</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Show me more</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Home</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>About</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Info</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Show me more</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Home</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>About</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Info</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<li>Show me more</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>


</nav>", "C:\\xampp\\htdocs\\october/themes/banquet-city/partials/navbar.htm", "");
    }
}
