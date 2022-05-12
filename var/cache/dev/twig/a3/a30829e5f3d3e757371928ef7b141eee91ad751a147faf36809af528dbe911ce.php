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

/* user/dashboard.html.twig */
class __TwigTemplate_3fff9699bc435cac093398869b5ffdf6d6d43a8455c206c2e693402cfd8116df extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "user/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Tableau de bord";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
            // line 10
            echo "
        <h1>Tableau de bord</h1>

        <ul class=\"nav nav-tabs mt-4\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#unavailability-organiser\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Mes réunions</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#unavailability-guest\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Mes invitations</a>
            </li>
        </ul>

        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane fade show active\" id=\"unavailability-organiser\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                ";
            // line 25
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DashboardController::showUnavailabilitiesAsOrganiser", ["page" =>             // line 26
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })())], ["strategy" => "hinclude"]));
            // line 27
            echo "

            </div>

            <div class=\"tab-pane fade\" id=\"unavailability-guest\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

                ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DashboardController::showUnavailabilitiesAsGuest", ["page" =>             // line 34
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 34, $this->source); })())], ["strategy" => "hinclude"]));
            // line 35
            echo "

            </div>
        </div>

        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 41
            echo "
        <h1>Mes invitations</h1>

            ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DashboardController::showUnavailabilitiesAsGuest", ["page" =>             // line 45
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 45, $this->source); })())], ["strategy" => "hinclude"]));
            // line 46
            echo "

        ";
        }
        // line 49
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function loadUnavailabilityAsOrganiserPage(page)
        {
            console.log('loadUnavailabilityAsOrganiserPage: ' + page);
            \$.ajax({
                url: '/pagers/unavailabilitiesasorganiser/' + page,
                method: 'POST',
                success: function(content) {\$('#unavailability-organiser').html(content);}
            })
        }
        function loadUnavailabilityAsGuestPage(page)
        {
            console.log('loadUnavailabilityAsGuestPage: ' + page);
            \$.ajax({
                url: '/pagers/unavailabilitiesasguest/' + page,
                method: 'POST',
                success: function(content) {\$('#unavailability-guest').html(content);}
            })
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 55,  161 => 54,  148 => 49,  143 => 46,  141 => 45,  140 => 44,  135 => 41,  127 => 35,  125 => 34,  124 => 33,  116 => 27,  114 => 26,  113 => 25,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Tableau de bord{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        {% if is_granted('ROLE_EMPLOYEE') %}

        <h1>Tableau de bord</h1>

        <ul class=\"nav nav-tabs mt-4\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#unavailability-organiser\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Mes réunions</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#unavailability-guest\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Mes invitations</a>
            </li>
        </ul>

        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane fade show active\" id=\"unavailability-organiser\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                {{ render(controller('App\\\\Controller\\\\DashboardController::showUnavailabilitiesAsOrganiser',
                    {'page': page}, { 'strategy': 'hinclude'}
                )) }}

            </div>

            <div class=\"tab-pane fade\" id=\"unavailability-guest\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

                {{ render(controller('App\\\\Controller\\\\DashboardController::showUnavailabilitiesAsGuest',
                    {'page': page}, { 'strategy': 'hinclude'}
                )) }}

            </div>
        </div>

        {% elseif is_granted('ROLE_GUEST') %}

        <h1>Mes invitations</h1>

            {{ render(controller('App\\\\Controller\\\\DashboardController::showUnavailabilitiesAsGuest',
                {'page': page}, { 'strategy': 'hinclude'}
            )) }}

        {% endif %}

    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function loadUnavailabilityAsOrganiserPage(page)
        {
            console.log('loadUnavailabilityAsOrganiserPage: ' + page);
            \$.ajax({
                url: '/pagers/unavailabilitiesasorganiser/' + page,
                method: 'POST',
                success: function(content) {\$('#unavailability-organiser').html(content);}
            })
        }
        function loadUnavailabilityAsGuestPage(page)
        {
            console.log('loadUnavailabilityAsGuestPage: ' + page);
            \$.ajax({
                url: '/pagers/unavailabilitiesasguest/' + page,
                method: 'POST',
                success: function(content) {\$('#unavailability-guest').html(content);}
            })
        }
    </script>
{% endblock %}
", "user/dashboard.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/user/dashboard.html.twig");
    }
}
