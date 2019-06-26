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

/* C:\xampp\htdocs\october/themes/banquet-city/pages/homepage.htm */
class __TwigTemplate_901256f5c71b1a461906105fbbd8bf5b68aef7f4e8abb4a3b7e466f7561a389b extends \Twig\Template
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
        echo "<section class=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"banner-slide\">
\t\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/banners/1.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/banners/2.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/banners/3.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"col-md-12 bq-ads\">
\t\t\t\t <img src=\"https://cdn5.vectorstock.com/i/1000x1000/22/69/coming-soon-label-design-vector-822269.jpg\" width=\"100%\" height=\"185px\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12 bq-ads\">
\t\t\t\t   <img src=\"https://img.freepik.com/free-vector/opnening-soon-composition-with-flat-design_23-2147865115.jpg?size=338&ext=jpg\" width=\"100%\" height=\"185px\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section> <!-- banner -->

<section class=\"banquet-wrap\">
<div class=\"container\">
\t\t<h2>Featured Banquets</h2>
\t\t<div class=\"row\">
\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured_banquets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured_banquet"]) {
            // line 38
            echo "\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t        <a href=\"";
            // line 40
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("banquet-details", ["id" => twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "id", [], "any", false, false, false, 40), "slug" => twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "slug", [], "any", false, false, false, 40)]);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "banners", [], "any", false, false, false, 41)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "method", false, false, false, 41), "html", null, true);
            echo "\" class=\"img-fluid\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 43
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("banquet-details", ["id" => twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "id", [], "any", false, false, false, 43), "slug" => twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "slug", [], "any", false, false, false, 43)]);
            echo "\">
\t\t\t\t\t\t<h4>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "address", [], "any", false, false, false, 46), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<h5>Capacity:";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["featured_banquet"], "max_capacity", [], "any", false, false, false, 47), "html", null, true);
            echo " Max</h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"";
            // line 49
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 50
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 51
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 52
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-half.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 53
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured_banquet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("featured-banquets");
        echo "\" class=\"show-all\">Show All(";
        echo twig_escape_filter($this->env, ($context["featured_banquets_count"] ?? null), "html", null, true);
        echo ")
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
</div>
</section><!-- banquet-wrap -->

<section class=\"banquet-wrap\">
<div class=\"container\">
\t\t<h2>Recently Added Banquets</h2>
\t\t<div class=\"row\">
\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new_banquets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["new_banquet"]) {
            // line 75
            echo "\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t        <a href=\"";
            // line 77
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("banquet-details", ["id" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "id", [], "any", false, false, false, 77), "slug" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "slug", [], "any", false, false, false, 77)]);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["new_banquet"], "banners", [], "any", false, false, false, 78)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "getPath", [], "method", false, false, false, 78), "html", null, true);
            echo "\" class=\"img-fluid\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 80
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("banquet-details", ["id" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "id", [], "any", false, false, false, 80), "slug" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "slug", [], "any", false, false, false, 80)]);
            echo "\">
\t\t\t\t\t\t<h4>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new_banquet"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new_banquet"], "address", [], "any", false, false, false, 83), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<h5>Capacity:";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new_banquet"], "max_capacity", [], "any", false, false, false, 84), "html", null, true);
            echo " Max</h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"";
            // line 86
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 87
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 88
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 89
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-half.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"";
            // line 90
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate.png");
            echo "\" alt=\"\"></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new_banquet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<a class=\"show-all\">Show All(";
        // line 99
        echo twig_escape_filter($this->env, ($context["new_banquets_count"] ?? null), "html", null, true);
        echo ")
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t</a>
\t\t\t</div>

</div>
</div>
</section><!-- banquet-wrap -->



<section class=\"bq-ct-wrap\">
<div class=\"container\">
<h2>Browse Banquets in Kathmandu</h2>
<div class=\"row\">
\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banquets_in_kathmandu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["new_banquet"]) {
            // line 115
            echo "<div class=\"col-sm-3\">
\t<div class=\"banquet-wrap-box\">
\t\t\t<a href=\"";
            // line 117
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("banquet-details", ["id" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "id", [], "any", false, false, false, 117), "slug" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "slug", [], "any", false, false, false, 117)]);
            echo "\">
\t\t\t<img src=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["new_banquet"], "banners", [], "any", false, false, false, 118)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "getPath", [], "method", false, false, false, 118), "html", null, true);
            echo "\" class=\"img-fluid\">
\t\t\t</a>
\t\t\t<a href=\"";
            // line 120
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("banquet-details", ["id" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "id", [], "any", false, false, false, 120), "slug" => twig_get_attribute($this->env, $this->source, $context["new_banquet"], "slug", [], "any", false, false, false, 120)]);
            echo "\">
\t\t\t<h4>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new_banquet"], "name", [], "any", false, false, false, 121), "html", null, true);
            echo "</h4>
\t\t\t</a>
\t\t\t<h5>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new_banquet"], "address", [], "any", false, false, false, 123), "html", null, true);
            echo "</h5>
\t\t\t<h5>Capacity:";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new_banquet"], "max_capacity", [], "any", false, false, false, 124), "html", null, true);
            echo " Max</h5>
\t\t<ul>
\t\t\t<li><img src=\"";
            // line 126
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t<li><img src=\"";
            // line 127
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t<li><img src=\"";
            // line 128
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-full.png");
            echo "\" alt=\"\"></li>
\t\t\t<li><img src=\"";
            // line 129
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate-half.png");
            echo "\" alt=\"\"></li>
\t\t\t<li><img src=\"";
            // line 130
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/rate.png");
            echo "\" alt=\"\"></li>
\t\t</ul>
\t\t<div class=\"add-compare\">
\t\t\t<a href=\"#\">Add to Compare</a>
\t\t</div>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new_banquet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "<div class=\"col-sm-12\">
\t<a class=\"show-all\">Show All(";
        // line 139
        echo twig_escape_filter($this->env, ($context["banquets_in_kathmandu_count"] ?? null), "html", null, true);
        echo ")
\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t</a>
</div>

</div>
</div>
</section>

<section class=\"bq-explore-wrap\">
<div class=\"container\">
<h2>Explore Vendors</h2>
<div class=\"row\">
";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vendors_cat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor_cat"]) {
            // line 153
            echo "\t<div class=\"col-md-2\">
\t\t<a href=\"";
            // line 154
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("vendor", ["slug" => twig_get_attribute($this->env, $this->source, $context["vendor_cat"], "slug", [], "any", false, false, false, 154)]);
            echo "\">
\t\t<div class=\"bq-explore-box\">
\t\t\t<img src=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vendor_cat"], "thumbnail", [], "any", false, false, false, 156), "getPath", [], "method", false, false, false, 156), "html", null, true);
            echo "\">
\t\t\t<h4>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vendor_cat"], "name", [], "any", false, false, false, 157), "html", null, true);
            echo "</h4>
\t\t</div>
\t\t</a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "</div>
</div>
</section>

<script>
  \$(document).ready(function(){
  new WOW().init();
  \$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  });
  \$('.flexslider').flexslider({
      animation: \"slide\"
    });
  
    \$('#carousel').flexslider({
      animation: \"slide\",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 210,
      itemMargin: 5,
      asNavFor: '#slider'
    });
   
    \$('#slider').flexslider({
      animation: \"slide\",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: \"#carousel\"
    });
  });  
  </script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/banquet-city/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 162,  353 => 157,  349 => 156,  344 => 154,  341 => 153,  337 => 152,  321 => 139,  318 => 138,  304 => 130,  300 => 129,  296 => 128,  292 => 127,  288 => 126,  283 => 124,  279 => 123,  274 => 121,  270 => 120,  265 => 118,  261 => 117,  257 => 115,  253 => 114,  235 => 99,  232 => 98,  218 => 90,  214 => 89,  210 => 88,  206 => 87,  202 => 86,  197 => 84,  193 => 83,  188 => 81,  184 => 80,  179 => 78,  175 => 77,  171 => 75,  167 => 74,  150 => 62,  147 => 61,  133 => 53,  129 => 52,  125 => 51,  121 => 50,  117 => 49,  112 => 47,  108 => 46,  103 => 44,  99 => 43,  94 => 41,  90 => 40,  86 => 38,  82 => 37,  57 => 15,  51 => 12,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"banner-slide\">
\t\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/banners/1.jpg'|theme}}\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/banners/2.jpg'|theme}}\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/banners/3.jpg'|theme}}\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"col-md-12 bq-ads\">
\t\t\t\t <img src=\"https://cdn5.vectorstock.com/i/1000x1000/22/69/coming-soon-label-design-vector-822269.jpg\" width=\"100%\" height=\"185px\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12 bq-ads\">
\t\t\t\t   <img src=\"https://img.freepik.com/free-vector/opnening-soon-composition-with-flat-design_23-2147865115.jpg?size=338&ext=jpg\" width=\"100%\" height=\"185px\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section> <!-- banner -->

<section class=\"banquet-wrap\">
<div class=\"container\">
\t\t<h2>Featured Banquets</h2>
\t\t<div class=\"row\">
\t\t{% for featured_banquet in featured_banquets %}
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t        <a href=\"{{ 'banquet-details'|page({id: featured_banquet.id, slug: featured_banquet.slug}) }}\">
\t\t\t\t\t\t<img src=\"{{featured_banquet.banners[0].getPath()}}\" class=\"img-fluid\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ 'banquet-details'|page({id: featured_banquet.id, slug: featured_banquet.slug}) }}\">
\t\t\t\t\t\t<h4>{{ featured_banquet.name }}</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5>{{ featured_banquet.address }}</h5>
\t\t\t\t\t\t<h5>Capacity:{{ featured_banquet.max_capacity }} Max</h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-half.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            {% endfor %}
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<a href=\"{{'featured-banquets'|page}}\" class=\"show-all\">Show All({{featured_banquets_count}})
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
</div>
</section><!-- banquet-wrap -->

<section class=\"banquet-wrap\">
<div class=\"container\">
\t\t<h2>Recently Added Banquets</h2>
\t\t<div class=\"row\">
\t\t\t\t{% for new_banquet in new_banquets %}
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t        <a href=\"{{ 'banquet-details'|page({id: new_banquet.id, slug: new_banquet.slug}) }}\">
\t\t\t\t\t\t<img src=\"{{new_banquet.banners[0].getPath()}}\" class=\"img-fluid\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ 'banquet-details'|page({id: new_banquet.id, slug: new_banquet.slug}) }}\">
\t\t\t\t\t\t<h4>{{ new_banquet.name }}</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5>{{ new_banquet.address }}</h5>
\t\t\t\t\t\t<h5>Capacity:{{ new_banquet.max_capacity }} Max</h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate-half.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t\t<li><img src=\"{{'assets/img/rate.png'|theme}}\" alt=\"\"></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<a class=\"show-all\">Show All({{new_banquets_count}})
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t</a>
\t\t\t</div>

</div>
</div>
</section><!-- banquet-wrap -->



<section class=\"bq-ct-wrap\">
<div class=\"container\">
<h2>Browse Banquets in Kathmandu</h2>
<div class=\"row\">
\t{% for new_banquet in banquets_in_kathmandu %}
<div class=\"col-sm-3\">
\t<div class=\"banquet-wrap-box\">
\t\t\t<a href=\"{{ 'banquet-details'|page({id: new_banquet.id, slug: new_banquet.slug}) }}\">
\t\t\t<img src=\"{{new_banquet.banners[0].getPath()}}\" class=\"img-fluid\">
\t\t\t</a>
\t\t\t<a href=\"{{ 'banquet-details'|page({id: new_banquet.id, slug: new_banquet.slug}) }}\">
\t\t\t<h4>{{ new_banquet.name }}</h4>
\t\t\t</a>
\t\t\t<h5>{{ new_banquet.address }}</h5>
\t\t\t<h5>Capacity:{{ new_banquet.max_capacity }} Max</h5>
\t\t<ul>
\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t<li><img src=\"{{'assets/img/rate-full.png'|theme}}\" alt=\"\"></li>
\t\t\t<li><img src=\"{{'assets/img/rate-half.png'|theme}}\" alt=\"\"></li>
\t\t\t<li><img src=\"{{'assets/img/rate.png'|theme}}\" alt=\"\"></li>
\t\t</ul>
\t\t<div class=\"add-compare\">
\t\t\t<a href=\"#\">Add to Compare</a>
\t\t</div>
\t</div>
</div>
{% endfor %}
<div class=\"col-sm-12\">
\t<a class=\"show-all\">Show All({{banquets_in_kathmandu_count}})
\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t</a>
</div>

</div>
</div>
</section>

<section class=\"bq-explore-wrap\">
<div class=\"container\">
<h2>Explore Vendors</h2>
<div class=\"row\">
{% for vendor_cat in vendors_cat%}
\t<div class=\"col-md-2\">
\t\t<a href=\"{{ 'vendor'|page({slug: vendor_cat.slug}) }}\">
\t\t<div class=\"bq-explore-box\">
\t\t\t<img src=\"{{vendor_cat.thumbnail.getPath()}}\">
\t\t\t<h4>{{vendor_cat.name}}</h4>
\t\t</div>
\t\t</a>
\t</div>
{% endfor %}
</div>
</div>
</section>

<script>
  \$(document).ready(function(){
  new WOW().init();
  \$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  });
  \$('.flexslider').flexslider({
      animation: \"slide\"
    });
  
    \$('#carousel').flexslider({
      animation: \"slide\",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 210,
      itemMargin: 5,
      asNavFor: '#slider'
    });
   
    \$('#slider').flexslider({
      animation: \"slide\",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: \"#carousel\"
    });
  });  
  </script>", "C:\\xampp\\htdocs\\october/themes/banquet-city/pages/homepage.htm", "");
    }
}
