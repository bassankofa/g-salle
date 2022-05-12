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

/* room/_search.html.twig */
class __TwigTemplate_bce10a8eb039cec126611c17b48a0eab8fa213f5f291f4ba786eafb1a0605251 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/_search.html.twig"));

        // line 1
        echo "<form class=\"mt-3\" action=\"\">
    <div class=\"form-group\">
        <label for=\"roomCapacitySelect\">Capacité</label>
        <select class=\"custom-select\" id=\"roomCapacitySelect\">
            <option selected disabled>Sélectionnez</option>
            <option value='{\"min\":1,\"max\":5}'>Moins de 5 personnes</option>
            <option value='{\"min\":6,\"max\":10}'>Entre 6 et 10 personnes</option>
            <option value='{\"min\":11,\"max\":20}'>Entre 11 et 20 personnes</option>
            <option value='{\"min\":21}'>Plus de 20 personnes</option>
        </select>
    </div>
    <div class=\"form-group\">
        <label for=\"featuresList\">Options</label>
        <select multiple class=\"form-control\" id=\"featuresList\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 16
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["feature"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["feature"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </select>
    </div>
    <div class=\"form-group row mx-0 mt-0\">
        <button type=\"button\" onclick=\"initSearch()\" class=\"btn btn-info col-5 mt-0\"><i class=\"fas fa-redo\"></i></button>
        <button type=\"button\" onclick=\"updateRooms()\" class=\"btn btn-info col-5 offset-2 mt-0\"><i class=\"fas fa-search\"></i></button>
    </div>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "room/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"mt-3\" action=\"\">
    <div class=\"form-group\">
        <label for=\"roomCapacitySelect\">Capacité</label>
        <select class=\"custom-select\" id=\"roomCapacitySelect\">
            <option selected disabled>Sélectionnez</option>
            <option value='{\"min\":1,\"max\":5}'>Moins de 5 personnes</option>
            <option value='{\"min\":6,\"max\":10}'>Entre 6 et 10 personnes</option>
            <option value='{\"min\":11,\"max\":20}'>Entre 11 et 20 personnes</option>
            <option value='{\"min\":21}'>Plus de 20 personnes</option>
        </select>
    </div>
    <div class=\"form-group\">
        <label for=\"featuresList\">Options</label>
        <select multiple class=\"form-control\" id=\"featuresList\">
            {% for feature in features %}
            <option value=\"{{ feature }}\">{{ feature }}</option>
            {% endfor %}
        </select>
    </div>
    <div class=\"form-group row mx-0 mt-0\">
        <button type=\"button\" onclick=\"initSearch()\" class=\"btn btn-info col-5 mt-0\"><i class=\"fas fa-redo\"></i></button>
        <button type=\"button\" onclick=\"updateRooms()\" class=\"btn btn-info col-5 offset-2 mt-0\"><i class=\"fas fa-search\"></i></button>
    </div>
</form>", "room/_search.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/room/_search.html.twig");
    }
}
