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

/* components/_navbar.html.twig */
class __TwigTemplate_77056d86a41dea13544f378baed96fe795509a096c4ee13fa447b92b6c59a1b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        // line 1
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1);
        // line 2
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\">
    <div class=\"container col-md-9 mx-auto\">

        <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"G-Salle\" style=\"height:1.25rem\">&nbsp;&nbsp;&nbsp;<strong>G-Salle</strong>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"nav navbar-nav mr-auto\">
            ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
            // line 16
            echo "                <a class=\"nav-item nav-link ";
            echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()) == "unavailability_calendar")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_calendar");
            echo "\">Calendrier</a>
                <a class=\"nav-item nav-link ";
            // line 17
            echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()) == "room_index")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
            echo "\">Salles</a>
            ";
        }
        // line 19
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                <a class=\"nav-item nav-link ";
            echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 20, $this->source); })()) == "unavailability_index")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_index");
            echo "\">Historique</a>
                <a class=\"nav-item nav-link ";
            // line 21
            echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 21, $this->source); })()) == "user_index")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Utilisateurs</a>
            ";
        }
        // line 23
        echo "            </ul>
            <ul class=\"nav navbar-nav\">
                ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "                    <li class=\"nav-item dropdown\">
                        <a id=\"bonjour\" class=\"nav-link text-white dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Bonjour ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "firstName", [], "any", false, false, false, 28), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 42px, 0px);\">
                            <a class=\"dropdown-item\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dashboard");
            echo "\">Tableau de bord</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Mon profil</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" >
                                Déconnexion
                            </a>
                        </div>
                    </li>
                ";
        } else {
            // line 40
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" >
                            Bienvenue, veuillez vous connecter
                        </a>
                    </li>
                ";
        }
        // line 46
        echo "            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 46,  136 => 41,  133 => 40,  124 => 34,  119 => 32,  115 => 31,  109 => 28,  105 => 26,  103 => 25,  99 => 23,  92 => 21,  85 => 20,  82 => 19,  75 => 17,  68 => 16,  66 => 15,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route = app.request.get('_route') %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\">
    <div class=\"container col-md-9 mx-auto\">

        <a class=\"navbar-brand\" href=\"{{ path('index') }}\">
            <img src=\"{{ asset('images/logo.png') }}\" alt=\"G-Salle\" style=\"height:1.25rem\">&nbsp;&nbsp;&nbsp;<strong>G-Salle</strong>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"nav navbar-nav mr-auto\">
            {% if is_granted('ROLE_EMPLOYEE') %}
                <a class=\"nav-item nav-link {{ route == 'unavailability_calendar' ? 'active' : '' }}\" href=\"{{ path('unavailability_calendar') }}\">Calendrier</a>
                <a class=\"nav-item nav-link {{ route == 'room_index' ? 'active' : '' }}\" href=\"{{ path('room_index') }}\">Salles</a>
            {% endif %}
            {% if is_granted ('ROLE_ADMIN') %}
                <a class=\"nav-item nav-link {{ route == 'unavailability_index' ? 'active' : '' }}\" href=\"{{ path('unavailability_index') }}\">Historique</a>
                <a class=\"nav-item nav-link {{ route == 'user_index' ? 'active' : '' }}\" href=\"{{ path('user_index') }}\">Utilisateurs</a>
            {% endif %}
            </ul>
            <ul class=\"nav navbar-nav\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item dropdown\">
                        <a id=\"bonjour\" class=\"nav-link text-white dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Bonjour {{ app.user.firstName }}
                        </a>
                        <div class=\"dropdown-menu\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 42px, 0px);\">
                            <a class=\"dropdown-item\" href=\"{{ path('user_dashboard') }}\">Tableau de bord</a>
                            <a class=\"dropdown-item\" href=\"{{ path('user_show', {'id': app.user.id }) }}\">Mon profil</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\" >
                                Déconnexion
                            </a>
                        </div>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"{{ path('app_login') }}\" >
                            Bienvenue, veuillez vous connecter
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "components/_navbar.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/components/_navbar.html.twig");
    }
}
