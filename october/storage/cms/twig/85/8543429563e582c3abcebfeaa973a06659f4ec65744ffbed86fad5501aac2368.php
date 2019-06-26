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

/* C:\xampp\htdocs\october/plugins/view9/reviews/components/reviewform/default.htm */
class __TwigTemplate_ff27191728c6e77f9c9d7d13b65f4c12bab3f10afeb870fe1b7084cd0cd90db3 extends \Twig\Template
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
        echo "<br>&nbsp;<br>
<h1>Add a Review</h1>
<form class=\"form-horizontal\" data-request = \"onSave\">
    <div class=\"form-group\">
        <label for=\"exampleFormControlTextarea1\">Description: </label>
        <textarea name = \"description\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label\">Rate: </label><br><br>
        <input type = \"radio\" name = \"rating\" value = 1>
        <input type = \"radio\" name = \"rating\" value = 2>
        <input type = \"radio\" name = \"rating\" value = 3>
        <input type = \"radio\" name = \"rating\" value = 4>
        <input type = \"radio\" name = \"rating\" value = 5>
        <br>
        <input type = \"hidden\" value = ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo " name = \"user_id\">
        <input type = \"hidden\" value = ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banquet"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo " name = \"banquet_id\">
    </div>
    <div class=\"col-md-4 col-md-offset-5\">
        <input type = \"submit\" value = \"SUBMIT\" name = \"submit\" class=\"load-btn\">
    </div>
    <br><br><br><br>
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 23
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 24
            echo "        <b>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</b>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 26
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/plugins/view9/reviews/components/reviewform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  67 => 24,  65 => 23,  56 => 17,  52 => 16,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<br>&nbsp;<br>
<h1>Add a Review</h1>
<form class=\"form-horizontal\" data-request = \"onSave\">
    <div class=\"form-group\">
        <label for=\"exampleFormControlTextarea1\">Description: </label>
        <textarea name = \"description\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label\">Rate: </label><br><br>
        <input type = \"radio\" name = \"rating\" value = 1>
        <input type = \"radio\" name = \"rating\" value = 2>
        <input type = \"radio\" name = \"rating\" value = 3>
        <input type = \"radio\" name = \"rating\" value = 4>
        <input type = \"radio\" name = \"rating\" value = 5>
        <br>
        <input type = \"hidden\" value = {{user.id}} name = \"user_id\">
        <input type = \"hidden\" value = {{banquet.id}} name = \"banquet_id\">
    </div>
    <div class=\"col-md-4 col-md-offset-5\">
        <input type = \"submit\" value = \"SUBMIT\" name = \"submit\" class=\"load-btn\">
    </div>
    <br><br><br><br>
    {% flash success %}
        <b>{{ message }}</b>
    {% endflash %}

</form>", "C:\\xampp\\htdocs\\october/plugins/view9/reviews/components/reviewform/default.htm", "");
    }
}
