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

/* C:\xampp\htdocs\october/themes/banquet-city/pages/banquet-details.htm */
class __TwigTemplate_8c32f3a429c8a130d8bb39072248a6bf51263356f84d0c39a44bf624364c7921 extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 1), "html", null, true);
        echo "

<section class=\"bq-detail-head-wrap\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"bq-detail-head\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h3>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
\t\t\t\t\t<span>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "address", [], "any", false, false, false, 9), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-md-offset-3\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-5 nopadding\">
\t\t\t\t\t\t\t<ul class=\"bq-detail-rate\">
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<span>34 Reviews</span>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 nopadding\">
\t\t\t\t\t\t\t<button class=\"share-btn\"><a href=\"#\"><i class=\"fa fa-share\"></i> SHARE</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div><!-- bq-detail-head -->
\t\t</div>
\t</div>
</section><!-- bq-detail-head-wrap -->


<section class=\"bq-detail-banner\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row bq-banner\">
\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "banners", [], "any", false, false, false, 39)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "method", false, false, false, 39), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am2.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am5.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am3.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am4.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section><!-- bq-detail-banner -->

<section class=\"bq-detail-tabs\">
\t<div class=\"tabs\">
\t\t<div class=\"tab-head\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"tab-button-outer\">
\t\t\t\t\t\t<ul id=\"tab-button\">
\t\t\t\t\t\t\t<li><a href=\"#tab01\">Overview</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab02\">Menu</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab03\">Gallery</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab04\">Address and Contact</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab05\">Rating and Reviews</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t   </div>
\t\t\t   <div class=\"col-md-3 nopadding upper-contact\">
\t\t\t   \t<div class=\"col-md-6\">
\t\t\t   \t\t<span><i class=\"fa fa-phone\"></i>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "phone", [], "any", false, false, false, 77), "html", null, true);
        echo "</span>
\t\t\t   \t</div>
\t\t\t   \t<div class=\"col-md-6\">
\t\t\t   \t\t<span><i class=\"fa fa-phone\"></i> ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "phone", [], "any", false, false, false, 80), "html", null, true);
        echo "</span>
\t\t\t   \t</div>
\t\t\t   </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"tab-desc-wrap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"tab-select-outer\">
\t\t\t\t\t<select id=\"tab-select\">
\t\t\t\t\t\t<option value=\"#tab01\">Tab 1</option>
\t\t\t\t\t\t<option value=\"#tab02\">Tab 2</option>
\t\t\t\t\t\t<option value=\"#tab03\">Tab 3</option>
\t\t\t\t\t\t<option value=\"#tab04\">Tab 4</option>
\t\t\t\t\t\t<option value=\"#tab05\">Tab 5</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div id=\"tab01\" class=\"tab-contents\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"overview-wrap\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "description", [], "any", false, false, false, 105), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"bq-capacity bh4\">
\t\t\t\t\t\t\t\t\t\t<h4>Capacity <span>(Max ";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "max_capacity", [], "any", false, false, false, 107), "html", null, true);
        echo ")</span></h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Cluster : <span>500</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Theatre Style : <span>300</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Classroom Style : <span>5000</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Open : <span>1000</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- bq-capacity -->

\t\t\t\t\t\t\t\t\t<div class=\"bq-facelities bh4\">
\t\t\t\t\t\t\t\t\t\t<h4>Amenities and Facilities</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wifi\"></i> <span>Air Conditioning</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bus\"></i> <span>Secure Parking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bath\"></i> <span>Bathroom</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i> <span>Food</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-motorcycle\"></i> <span>MotorCycle</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bus\"></i> <span>Secure Parking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plug\"></i> <span>Air Conditioning</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tree\"></i> <span>Secure Parking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- bq-facelities -->

\t\t\t\t\t\t\t\t\t<div class=\"bq-policies bh4\">
\t\t\t\t\t\t\t\t\t\t<h4>Policies</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Decor</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Food</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Non Veg food allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Veg items not allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Alcohol</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Parking</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Other Polocies</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div><!-- bq-policies -->



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-9 -->
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div><!-- tab01 -->



\t\t\t\t<div id=\"tab02\" class=\"tab-contents menu-tabs\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<ul class=\"menu-tabs-head\">
\t\t\t\t\t\t\t<li class=\"active\">Main Menu (Non Veg)</li>
\t\t\t\t\t\t\t<li>Main Menu (Veg)</li>
\t\t\t\t\t\t\t<li>Non Veg Delight</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"col-md-12 bq-menu-item bh4 nopadding\">
\t\t\t\t\t\t\t";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["foodCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["foodCategory"]) {
            // line 274
            echo "\t\t\t\t\t\t\t<h4 class=\"bmi-ttl\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foodCategory"], "name", [], "any", false, false, false, 274), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><p>
\t\t\t\t\t\t\t\t";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["foodItems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["foodItem"]) {
                // line 278
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["foodItem"], "food_category_id", [], "any", false, false, false, 278) == twig_get_attribute($this->env, $this->source, $context["foodCategory"], "id", [], "any", false, false, false, 278))) {
                    // line 279
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foodItem"], "name", [], "any", false, false, false, 279), "html", null, true);
                    echo "  | \t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foodItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foodCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "\t\t\t\t\t\t</div><!-- bq-menu-item -->



\t\t\t\t\t\t";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 290
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "user_id", [], "any", false, false, false, 290) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 290))) {
                // line 291
                echo "\t\t\t\t\t\t\t\t";
                $context["alreadyReviewed"] = true;
                // line 292
                echo "\t\t\t\t\t\t\t";
            }
            // line 293
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "\t\t\t\t\t\t";
        if (($context["alreadyReviewed"] ?? null)) {
            // line 295
            echo "\t\t\t\t\t\t\t<br>&nbsp;<br>&nbsp;<br><hr><br>&nbsp;<br>
\t\t\t\t\t\t\t<h2>You have already reviewed this banquet.</h2>
\t\t\t\t\t\t";
        } else {
            // line 298
            echo "\t\t\t\t\t\t";
            if (($context["user"] ?? null)) {
                // line 299
                echo "\t\t\t\t\t\t\t";
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("reviewForm"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 300
                echo "\t\t\t\t\t\t";
            }
            // line 301
            echo "\t\t\t\t\t\t";
        }
        // line 302
        echo "\t\t\t\t\t\t<br>&nbsp;<br>
\t\t\t\t\t\t<b>Reviews go here</b>
\t\t\t\t\t\t<br>&nbsp;<hr>
\t\t\t\t\t\t";
        // line 305
        $context["reviewCount"] = 0;
        // line 306
        echo "\t\t\t\t\t\t";
        $context["reviewSum"] = 0;
        // line 307
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 308
            echo "\t\t\t\t\t\t\t";
            $context["reviewCount"] = (($context["reviewCount"] ?? null) + 1);
            // line 309
            echo "\t\t\t\t\t\t\t";
            $context["reviewSum"] = (($context["reviewSum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 309));
            // line 310
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<b>Posted By: </b>";
            // line 311
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "email", [], "any", false, false, false, 311), "html", null, true);
            echo "
\t\t\t\t\t\t\t<p>Post Date: ";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "post_date", [], "any", false, false, false, 312), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<h5>";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 313), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<b>Rating: ";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 314), "html", null, true);
            echo " / 5</b>
\t\t\t\t\t\t\t<br><hr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "\t\t\t\t\t\t";
        if ((($context["reviewCount"] ?? null) > 0)) {
            // line 318
            echo "\t\t\t\t\t\t\t";
            $context["reviewAverage"] = (($context["reviewSum"] ?? null) / ($context["reviewCount"] ?? null));
            // line 319
            echo "\t\t\t\t\t\t";
        }
        // line 320
        echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<b>Average Rating For Banquet: </b>";
        // line 321
        echo twig_escape_filter($this->env, ($context["reviewAverage"] ?? null), "html", null, true);
        echo "

\t\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t</div><!-- tab02 -->

\t\t\t\t<div id=\"tab03\" class=\"tab-contents bq-gallery\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"row\">
                 <div class=\"col-md-9\">
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq6.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq5.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-12\" style=\"margin: 30px 0\">
                 \t\t<img src=\"img/bq2.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq4.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq1.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 </div>

                 <div class=\"col-md-3 nopadding lg-img\">
                 \t<div>
                 \t\t<img src=\"img/bq6.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div >
                 \t\t<img src=\"img/bq5.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 </div>
             </div>
\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t <div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t</div><!-- tab03 -->

\t\t\t\t<div id=\"tab04\" class=\"tab-contents\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.1127241364816!2d85.33111671559486!3d27.682910682802127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a6a1185d73%3A0x62e78f577014992c!2sView9!5e0!3m2!1sen!2snp!4v1558348201499!5m2!1sen!2snp\" width=\"100%\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>

                      <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 bq-contact-address bh4\">
\t\t\t\t\t\t\t<h5>Banquet location</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Opposite of Bhatbhateni Super market</li>
\t\t\t\t\t\t\t\t<li>Bhatbhateni, Kathmandu, Nepal</li>
\t\t\t\t\t\t\t\t<li>Phone: 4123896</li>
\t\t\t\t\t\t\t\t<li>Mobile: 9841979700</li>
\t\t\t\t\t\t\t\t<li>Email: amrapali@gmail.com</li>
\t\t\t\t\t\t\t\t<li>Website: amrapali.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- bq-contact-address -->
                       
\t\t\t\t\t\t<div class=\"col-md-4 bq-contact-address bh4\">
\t\t\t\t\t\t\t<h5>Banquet location</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Opposite of Bhatbhateni Super market</li>
\t\t\t\t\t\t\t\t<li>Bhatbhateni, Kathmandu, Nepal</li>
\t\t\t\t\t\t\t\t<li>Phone: 4123896</li>
\t\t\t\t\t\t\t\t<li>Mobile: 9841979700</li>
\t\t\t\t\t\t\t\t<li>Email: amrapali@gmail.com</li>
\t\t\t\t\t\t\t\t<li>Website: amrapali.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- bq-contact-address -->

\t\t\t\t\t\t<div class=\"col-md-4 bq-contact-address bh4\">
\t\t\t\t\t\t\t<h5>Banquet location</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Opposite of Bhatbhateni Super market</li>
\t\t\t\t\t\t\t\t<li>Bhatbhateni, Kathmandu, Nepal</li>
\t\t\t\t\t\t\t\t<li>Phone: 4123896</li>
\t\t\t\t\t\t\t\t<li>Mobile: 9841979700</li>
\t\t\t\t\t\t\t\t<li>Email: amrapali@gmail.com</li>
\t\t\t\t\t\t\t\t<li>Website: amrapali.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- bq-contact-address -->
\t\t\t\t\t </div>
\t\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t</div><!-- tab04 -->

\t\t\t\t<div id=\"tab05\" class=\"tab-contents bq-review-wrap\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t<div class=\"col-md-6 reviews nopadding\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 nopadding\"><h3>34 Reviews</h3></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<ul class=\"bq-detail-rate\">
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t       </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wr-review\">WRITE REVIEW</a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-12 nopadding review-box-wrap\">
\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<img src=\"img/rv1.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10 banquet-wrap-box bh4\">
\t\t\t\t\t\t\t\t\t<h4>Beautiful Ambience and great food!</h4>
\t\t\t\t\t\t\t\t\t<p>My daughter's 18th birthday was celebrated and it was a blast. Enjoyed every bit of it with amazing food, music, service. Bookevents took my review then and there and my review is still the same. Bookevents are yet to send my recording as promised.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h5>Ramesh Khatri,<span>November 2018</span></5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- review-box-wrap -->

\t\t\t\t\t\t<div class=\"col-md-12 nopadding review-box-wrap\">
\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<img src=\"img/rv2.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10 banquet-wrap-box bh4\">
\t\t\t\t\t\t\t\t\t<h4>Best Banquet Hall in Kathmandu</h4>
\t\t\t\t\t\t\t\t\t<p>My daughter's 18th birthday was celebrated and it was a blast. Enjoyed every bit of it with amazing food, music, service. Bookevents took my review then and there and my review is still the same. Bookevents are yet to send my recording as promised.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h5>Ramesh Khatri,<span>November 2018</span></5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- review-box-wrap -->

\t\t\t\t\t\t<div class=\"col-md-12 nopadding review-box-wrap\">
\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<img src=\"img/rv1.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10 banquet-wrap-box bh4\">
\t\t\t\t\t\t\t\t\t<h4>Beautiful Ambience and great food!</h4>
\t\t\t\t\t\t\t\t\t<p>My daughter's 18th birthday was celebrated and it was a blast. Enjoyed every bit of it with amazing food, music, service. Bookevents took my review then and there and my review is still the same. Bookevents are yet to send my recording as promised.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h5>Ramesh Khatri,<span>November 2018</span></5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- review-box-wrap -->

\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-5\"><a href=\"#\" class=\"load-btn\">LOAD MORE</a></div>



\t\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t\t

\t\t\t\t</div><!-- tab05 -->
\t\t\t</div>
\t\t</div><!-- tab-desc-wrap -->
\t</div>
</div>
</section><!-- bq-detail-tabs -->


<section class=\"banquet-wrap\">
\t<div class=\"container\">
\t\t\t\t<h2>Banquet Nearby</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq5.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t<h4>Sasa Banquet & Event Management</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-half.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq6.png\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t<h4>Crystal Banquet</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq7.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t<h4>Maxim Banquets & Events</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-half.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t<h4>Alfa House Banquet</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-half.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-all\">Show All(192)
\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t</div>
\t</div>
</section><!-- banquet-wrap -->

<section class=\"bq-ct-wrap\">
  <div class=\"container\">
  \t<h2>Browse Banquets in your City</h2>
\t<div class=\"owl-carousel owl-theme\">
\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc1.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Kathmandu</h4>
\t\t\t\t\t\t<span><p>230</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc2.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Lalitpur</h4>
\t\t\t\t\t\t<span><p>20</p>Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t     \t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc3.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Dhanding</h4>
\t\t\t\t\t\t<span><p>90</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc4.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Pokhara</h4>
\t\t\t\t\t\t<span><p>45</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc5.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Biratnagar</h4>
\t\t\t\t\t\t<span><p>120</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc6.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Bhaktapur</h4>
\t\t\t\t\t\t<span><p>250</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>
    </div>
  </div>
</section>






<!-- Modal -->
<div class=\"modal login-modal\" id=\"login_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><img src=\"img/close.png\" alt=\"\"></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Log In</h4>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email Address\"><i class=\"icofont-envelope\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\"><i class=\"icofont-lock\"></i>
          </div>
          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\"> Remember Me
            </label>
          </div>
          <button type=\"submit\" class=\"btn btn-default login-btn\">Log In</button>
          <span><a href=\"#\" class=\"fgt-pwd\">Forget your Password?</a></span>
          <h5>Don't have an account? <span><a href=\"#\">Sign Up</a></span></h5>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal login-modal sign-up\" id=\"signup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><img src=\"img/close.png\" alt=\"\"></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Sign Up</h4>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Full Name\"><i class=\"icofont-envelope\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"input\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Address\"><i class=\"icofont-google-map\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"input\" class=\"form-control\" id=\"exampleInput\" placeholder=\"Phone Number\"><i class=\"icofont-iphone\"></i>
          </div>
           <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\"><i class=\"icofont-lock\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Confirm Password\"><i class=\"icofont-lock\"></i>
          </div>
          <button type=\"submit\" class=\"btn btn-default login-btn\">Sign Up</button>
          <h5>Already have an account? <span><a href=\"#\">Log in</a></span></h5>
        </form>
      </div>
    </div>
  </div>
</div>




<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"js/owl.carousel.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/jquery.flexslider.js\"></script>
<script src=\"js/wow.js\"></script>
<script src=\"js/retina.js\"></script>

<script>
  \$(document).ready(function(){
   \$(\"#search_btn\").on ('click',function(){
    \$('#search').addClass('wow animated slideInDown');
    \$('#search').toggle();


  });

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
 });


  \$('.flexslider').flexslider({
    animation: \"slide\"
  });

  // The slider being synced must be initialized first
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

//   \$('.bq-hamburger').click(function() {
//   \$('.responsive-nav').toggle();
//   \$('.responsive-nav').stop().animate( {backgroundColor:'black'}, {duration:500});
// });

// });

/* A simple and scalable hamburger menu using css transitions. */

\$(function() {
  var \$tabButtonItem = \$('#tab-button li'),
  \$tabSelect = \$('#tab-select'),
  \$tabContents = \$('.tab-contents'),
  activeClass = 'is-active';

  \$tabButtonItem.first().addClass(activeClass);
  \$tabContents.not(':first').hide();

  \$tabButtonItem.find('a').on('click', function(e) {
    var target = \$(this).attr('href');

    \$tabButtonItem.removeClass(activeClass);
    \$(this).parent().addClass(activeClass);
    \$tabSelect.val(target);
    \$tabContents.hide();
    \$(target).show();
    e.preventDefault();
  });

  \$tabSelect.on('change', function() {
    var target = \$(this).val(),
    targetSelectNum = \$(this).prop('selectedIndex');

    \$tabButtonItem.removeClass(activeClass);
    \$tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    \$tabContents.hide();
    \$(target).show();
  });
});

</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/banquet-city/pages/banquet-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 321,  470 => 320,  467 => 319,  464 => 318,  461 => 317,  452 => 314,  448 => 313,  444 => 312,  440 => 311,  437 => 310,  434 => 309,  431 => 308,  426 => 307,  423 => 306,  421 => 305,  416 => 302,  413 => 301,  410 => 300,  405 => 299,  402 => 298,  397 => 295,  394 => 294,  388 => 293,  385 => 292,  382 => 291,  379 => 290,  375 => 289,  369 => 285,  361 => 282,  355 => 281,  349 => 279,  346 => 278,  342 => 277,  335 => 274,  331 => 273,  162 => 107,  157 => 105,  129 => 80,  123 => 77,  82 => 39,  49 => 9,  45 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{user.email}}

<section class=\"bq-detail-head-wrap\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"bq-detail-head\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h3>{{banquet.name}}</h3>
\t\t\t\t\t<span>{{banquet.address}}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-md-offset-3\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-5 nopadding\">
\t\t\t\t\t\t\t<ul class=\"bq-detail-rate\">
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<span>34 Reviews</span>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 nopadding\">
\t\t\t\t\t\t\t<button class=\"share-btn\"><a href=\"#\"><i class=\"fa fa-share\"></i> SHARE</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div><!-- bq-detail-head -->
\t\t</div>
\t</div>
</section><!-- bq-detail-head-wrap -->


<section class=\"bq-detail-banner\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row bq-banner\">
\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t<img src=\"{{banquet.banners[0].getPath()}}\" alt=\"\" class=\"img-responsive\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am2.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am5.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am3.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t<img src=\"img/am4.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section><!-- bq-detail-banner -->

<section class=\"bq-detail-tabs\">
\t<div class=\"tabs\">
\t\t<div class=\"tab-head\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"tab-button-outer\">
\t\t\t\t\t\t<ul id=\"tab-button\">
\t\t\t\t\t\t\t<li><a href=\"#tab01\">Overview</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab02\">Menu</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab03\">Gallery</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab04\">Address and Contact</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab05\">Rating and Reviews</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t   </div>
\t\t\t   <div class=\"col-md-3 nopadding upper-contact\">
\t\t\t   \t<div class=\"col-md-6\">
\t\t\t   \t\t<span><i class=\"fa fa-phone\"></i>{{banquet.phone}}</span>
\t\t\t   \t</div>
\t\t\t   \t<div class=\"col-md-6\">
\t\t\t   \t\t<span><i class=\"fa fa-phone\"></i> {{banquet.phone}}</span>
\t\t\t   \t</div>
\t\t\t   </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"tab-desc-wrap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"tab-select-outer\">
\t\t\t\t\t<select id=\"tab-select\">
\t\t\t\t\t\t<option value=\"#tab01\">Tab 1</option>
\t\t\t\t\t\t<option value=\"#tab02\">Tab 2</option>
\t\t\t\t\t\t<option value=\"#tab03\">Tab 3</option>
\t\t\t\t\t\t<option value=\"#tab04\">Tab 4</option>
\t\t\t\t\t\t<option value=\"#tab05\">Tab 5</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div id=\"tab01\" class=\"tab-contents\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"overview-wrap\">
\t\t\t\t\t\t\t\t\t<p>{{banquet.description}}</p>
\t\t\t\t\t\t\t\t\t<div class=\"bq-capacity bh4\">
\t\t\t\t\t\t\t\t\t\t<h4>Capacity <span>(Max {{banquet.max_capacity}})</span></h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Cluster : <span>500</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Theatre Style : <span>300</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Classroom Style : <span>5000</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Open : <span>1000</span></h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- bq-capacity -->

\t\t\t\t\t\t\t\t\t<div class=\"bq-facelities bh4\">
\t\t\t\t\t\t\t\t\t\t<h4>Amenities and Facilities</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wifi\"></i> <span>Air Conditioning</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bus\"></i> <span>Secure Parking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bath\"></i> <span>Bathroom</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i> <span>Food</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-motorcycle\"></i> <span>MotorCycle</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bus\"></i> <span>Secure Parking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plug\"></i> <span>Air Conditioning</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tree\"></i> <span>Secure Parking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- bq-facelities -->

\t\t\t\t\t\t\t\t\t<div class=\"bq-policies bh4\">
\t\t\t\t\t\t\t\t\t\t<h4>Policies</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Decor</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Food</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Non Veg food allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Veg items not allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Alcohol</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Parking</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Other Polocies</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Outside dectorator allowed</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div><!-- bq-policies -->



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-9 -->
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div><!-- tab01 -->



\t\t\t\t<div id=\"tab02\" class=\"tab-contents menu-tabs\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<ul class=\"menu-tabs-head\">
\t\t\t\t\t\t\t<li class=\"active\">Main Menu (Non Veg)</li>
\t\t\t\t\t\t\t<li>Main Menu (Veg)</li>
\t\t\t\t\t\t\t<li>Non Veg Delight</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"col-md-12 bq-menu-item bh4 nopadding\">
\t\t\t\t\t\t\t{% for foodCategory in foodCategories %}
\t\t\t\t\t\t\t<h4 class=\"bmi-ttl\">{{foodCategory.name}}</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><p>
\t\t\t\t\t\t\t\t{% for foodItem in foodItems %}
\t\t\t\t\t\t\t\t\t{% if foodItem.food_category_id == foodCategory.id %}
\t\t\t\t\t\t\t\t\t\t\t{{foodItem.name}}  | \t\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div><!-- bq-menu-item -->



\t\t\t\t\t\t{% for review in reviews2 %}
\t\t\t\t\t\t\t{% if review.user_id == user.id %}
\t\t\t\t\t\t\t\t{% set alreadyReviewed = true %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% if alreadyReviewed %}
\t\t\t\t\t\t\t<br>&nbsp;<br>&nbsp;<br><hr><br>&nbsp;<br>
\t\t\t\t\t\t\t<h2>You have already reviewed this banquet.</h2>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% if user %}
\t\t\t\t\t\t\t{% component 'reviewForm' %}
\t\t\t\t\t\t{% endif  %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<br>&nbsp;<br>
\t\t\t\t\t\t<b>Reviews go here</b>
\t\t\t\t\t\t<br>&nbsp;<hr>
\t\t\t\t\t\t{% set reviewCount = 0 %}
\t\t\t\t\t\t{% set reviewSum = 0 %}
\t\t\t\t\t\t{% for review in reviews %}
\t\t\t\t\t\t\t{% set reviewCount = reviewCount + 1 %}
\t\t\t\t\t\t\t{% set reviewSum = reviewSum + review.rating %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<b>Posted By: </b>{{review.email}}
\t\t\t\t\t\t\t<p>Post Date: {{review.post_date}}</p>
\t\t\t\t\t\t\t<h5>{{review.description}}</h5>
\t\t\t\t\t\t\t<b>Rating: {{review.rating}} / 5</b>
\t\t\t\t\t\t\t<br><hr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% if reviewCount > 0 %}
\t\t\t\t\t\t\t{% set reviewAverage = reviewSum/reviewCount %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<b>Average Rating For Banquet: </b>{{reviewAverage}}

\t\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t</div><!-- tab02 -->

\t\t\t\t<div id=\"tab03\" class=\"tab-contents bq-gallery\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"row\">
                 <div class=\"col-md-9\">
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq6.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq5.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-12\" style=\"margin: 30px 0\">
                 \t\t<img src=\"img/bq2.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq4.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div class=\"col-md-6\">
                 \t\t<img src=\"img/bq1.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 </div>

                 <div class=\"col-md-3 nopadding lg-img\">
                 \t<div>
                 \t\t<img src=\"img/bq6.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 \t<div >
                 \t\t<img src=\"img/bq5.png\" alt=\"\" class=\"img-responsive\">
                 \t</div>
                 </div>
             </div>
\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t <div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t</div><!-- tab03 -->

\t\t\t\t<div id=\"tab04\" class=\"tab-contents\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.1127241364816!2d85.33111671559486!3d27.682910682802127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a6a1185d73%3A0x62e78f577014992c!2sView9!5e0!3m2!1sen!2snp!4v1558348201499!5m2!1sen!2snp\" width=\"100%\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>

                      <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 bq-contact-address bh4\">
\t\t\t\t\t\t\t<h5>Banquet location</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Opposite of Bhatbhateni Super market</li>
\t\t\t\t\t\t\t\t<li>Bhatbhateni, Kathmandu, Nepal</li>
\t\t\t\t\t\t\t\t<li>Phone: 4123896</li>
\t\t\t\t\t\t\t\t<li>Mobile: 9841979700</li>
\t\t\t\t\t\t\t\t<li>Email: amrapali@gmail.com</li>
\t\t\t\t\t\t\t\t<li>Website: amrapali.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- bq-contact-address -->
                       
\t\t\t\t\t\t<div class=\"col-md-4 bq-contact-address bh4\">
\t\t\t\t\t\t\t<h5>Banquet location</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Opposite of Bhatbhateni Super market</li>
\t\t\t\t\t\t\t\t<li>Bhatbhateni, Kathmandu, Nepal</li>
\t\t\t\t\t\t\t\t<li>Phone: 4123896</li>
\t\t\t\t\t\t\t\t<li>Mobile: 9841979700</li>
\t\t\t\t\t\t\t\t<li>Email: amrapali@gmail.com</li>
\t\t\t\t\t\t\t\t<li>Website: amrapali.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- bq-contact-address -->

\t\t\t\t\t\t<div class=\"col-md-4 bq-contact-address bh4\">
\t\t\t\t\t\t\t<h5>Banquet location</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Opposite of Bhatbhateni Super market</li>
\t\t\t\t\t\t\t\t<li>Bhatbhateni, Kathmandu, Nepal</li>
\t\t\t\t\t\t\t\t<li>Phone: 4123896</li>
\t\t\t\t\t\t\t\t<li>Mobile: 9841979700</li>
\t\t\t\t\t\t\t\t<li>Email: amrapali@gmail.com</li>
\t\t\t\t\t\t\t\t<li>Website: amrapali.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- bq-contact-address -->
\t\t\t\t\t </div>
\t\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t</div><!-- tab04 -->

\t\t\t\t<div id=\"tab05\" class=\"tab-contents bq-review-wrap\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"col-md-12 nopadding\">
\t\t\t\t\t\t\t<div class=\"col-md-6 reviews nopadding\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 nopadding\"><h3>34 Reviews</h3></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<ul class=\"bq-detail-rate\">
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/str.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t       </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 nopadding\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wr-review\">WRITE REVIEW</a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-12 nopadding review-box-wrap\">
\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<img src=\"img/rv1.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10 banquet-wrap-box bh4\">
\t\t\t\t\t\t\t\t\t<h4>Beautiful Ambience and great food!</h4>
\t\t\t\t\t\t\t\t\t<p>My daughter's 18th birthday was celebrated and it was a blast. Enjoyed every bit of it with amazing food, music, service. Bookevents took my review then and there and my review is still the same. Bookevents are yet to send my recording as promised.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h5>Ramesh Khatri,<span>November 2018</span></5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- review-box-wrap -->

\t\t\t\t\t\t<div class=\"col-md-12 nopadding review-box-wrap\">
\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<img src=\"img/rv2.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10 banquet-wrap-box bh4\">
\t\t\t\t\t\t\t\t\t<h4>Best Banquet Hall in Kathmandu</h4>
\t\t\t\t\t\t\t\t\t<p>My daughter's 18th birthday was celebrated and it was a blast. Enjoyed every bit of it with amazing food, music, service. Bookevents took my review then and there and my review is still the same. Bookevents are yet to send my recording as promised.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h5>Ramesh Khatri,<span>November 2018</span></5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- review-box-wrap -->

\t\t\t\t\t\t<div class=\"col-md-12 nopadding review-box-wrap\">
\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<img src=\"img/rv1.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10 banquet-wrap-box bh4\">
\t\t\t\t\t\t\t\t\t<h4>Beautiful Ambience and great food!</h4>
\t\t\t\t\t\t\t\t\t<p>My daughter's 18th birthday was celebrated and it was a blast. Enjoyed every bit of it with amazing food, music, service. Bookevents took my review then and there and my review is still the same. Bookevents are yet to send my recording as promised.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h5>Ramesh Khatri,<span>November 2018</span></5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- review-box-wrap -->

\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-5\"><a href=\"#\" class=\"load-btn\">LOAD MORE</a></div>



\t\t\t\t\t</div><!-- col-md-9 -->

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<h3 class=\"vin-title\">Venues Inside</h3>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/vi.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sagarmatha Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 venue-in\">
\t\t\t\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/bq4.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<h4>Sasa Banquet &amp; Event Management</h4>
\t\t\t\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- col-md-3 -->
\t\t\t\t\t

\t\t\t\t</div><!-- tab05 -->
\t\t\t</div>
\t\t</div><!-- tab-desc-wrap -->
\t</div>
</div>
</section><!-- bq-detail-tabs -->


<section class=\"banquet-wrap\">
\t<div class=\"container\">
\t\t\t\t<h2>Banquet Nearby</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq5.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t<h4>Sasa Banquet & Event Management</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-half.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq6.png\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t<h4>Crystal Banquet</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq7.png\" class=\"img-fluid\">
\t\t\t\t\t\t\t<h4>Maxim Banquets & Events</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-half.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"banquet-wrap-box\">
\t\t\t\t\t\t\t<img src=\"img/bq8.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t<h4>Alfa House Banquet</h4>
\t\t\t\t\t\t\t<h5>Buddhanagar,kathmandu</h5>
\t\t\t\t\t\t\t<h5>Capacity:1200 Max</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-full.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate-half.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"img/rate.png\" alt=\"\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"add-compare\">
\t\t\t\t\t\t\t\t<a href=\"#\">Add to Compare</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-all\">Show All(192)
\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t</div>
\t</div>
</section><!-- banquet-wrap -->

<section class=\"bq-ct-wrap\">
  <div class=\"container\">
  \t<h2>Browse Banquets in your City</h2>
\t<div class=\"owl-carousel owl-theme\">
\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc1.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Kathmandu</h4>
\t\t\t\t\t\t<span><p>230</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc2.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Lalitpur</h4>
\t\t\t\t\t\t<span><p>20</p>Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t     \t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc3.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Dhanding</h4>
\t\t\t\t\t\t<span><p>90</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc4.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Pokhara</h4>
\t\t\t\t\t\t<span><p>45</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc5.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Biratnagar</h4>
\t\t\t\t\t\t<span><p>120</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<a href=\"#\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"img/bc6.png\">
\t\t\t\t\t<div class=\"img-fade\"></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h4>Bhaktapur</h4>
\t\t\t\t\t\t<span><p>250</p> Banquets</span>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t</div>
    </div>
  </div>
</section>






<!-- Modal -->
<div class=\"modal login-modal\" id=\"login_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><img src=\"img/close.png\" alt=\"\"></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Log In</h4>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email Address\"><i class=\"icofont-envelope\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\"><i class=\"icofont-lock\"></i>
          </div>
          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\"> Remember Me
            </label>
          </div>
          <button type=\"submit\" class=\"btn btn-default login-btn\">Log In</button>
          <span><a href=\"#\" class=\"fgt-pwd\">Forget your Password?</a></span>
          <h5>Don't have an account? <span><a href=\"#\">Sign Up</a></span></h5>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal login-modal sign-up\" id=\"signup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><img src=\"img/close.png\" alt=\"\"></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Sign Up</h4>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Full Name\"><i class=\"icofont-envelope\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"input\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Address\"><i class=\"icofont-google-map\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"input\" class=\"form-control\" id=\"exampleInput\" placeholder=\"Phone Number\"><i class=\"icofont-iphone\"></i>
          </div>
           <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\"><i class=\"icofont-lock\"></i>
          </div>
          <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Confirm Password\"><i class=\"icofont-lock\"></i>
          </div>
          <button type=\"submit\" class=\"btn btn-default login-btn\">Sign Up</button>
          <h5>Already have an account? <span><a href=\"#\">Log in</a></span></h5>
        </form>
      </div>
    </div>
  </div>
</div>




<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"js/owl.carousel.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/jquery.flexslider.js\"></script>
<script src=\"js/wow.js\"></script>
<script src=\"js/retina.js\"></script>

<script>
  \$(document).ready(function(){
   \$(\"#search_btn\").on ('click',function(){
    \$('#search').addClass('wow animated slideInDown');
    \$('#search').toggle();


  });

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
 });


  \$('.flexslider').flexslider({
    animation: \"slide\"
  });

  // The slider being synced must be initialized first
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

//   \$('.bq-hamburger').click(function() {
//   \$('.responsive-nav').toggle();
//   \$('.responsive-nav').stop().animate( {backgroundColor:'black'}, {duration:500});
// });

// });

/* A simple and scalable hamburger menu using css transitions. */

\$(function() {
  var \$tabButtonItem = \$('#tab-button li'),
  \$tabSelect = \$('#tab-select'),
  \$tabContents = \$('.tab-contents'),
  activeClass = 'is-active';

  \$tabButtonItem.first().addClass(activeClass);
  \$tabContents.not(':first').hide();

  \$tabButtonItem.find('a').on('click', function(e) {
    var target = \$(this).attr('href');

    \$tabButtonItem.removeClass(activeClass);
    \$(this).parent().addClass(activeClass);
    \$tabSelect.val(target);
    \$tabContents.hide();
    \$(target).show();
    e.preventDefault();
  });

  \$tabSelect.on('change', function() {
    var target = \$(this).val(),
    targetSelectNum = \$(this).prop('selectedIndex');

    \$tabButtonItem.removeClass(activeClass);
    \$tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    \$tabContents.hide();
    \$(target).show();
  });
});

</script>", "C:\\xampp\\htdocs\\october/themes/banquet-city/pages/banquet-details.htm", "");
    }
}
