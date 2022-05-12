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

/* front/index.html.twig */
class __TwigTemplate_c0dbb8c1d53771ecb25b5e1c0db17a512662ff62cf6cfaa5583d54c1c69cad57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "front/index.html.twig", 1);
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

        echo " ADS G-SALLE";
        
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
        <div class=\"row\">
            <div class=\"col-12 col-lg-6\">
                <p class=\"lead\">Vous avez remarqué ?</p>
                <p class=\"lead font-weight-bolder\">Ce qui vous fait perdre le plus de temps, dans une réunion, c'est son organisation.</p>
                <p class=\"lead\">Avec <u>G-SALLE</u>, réservez une salle et conviez les participants en quelques clics.</p>
                <p class=\"lead\">Que vous soyez organisateur ou invité, vous serez informé par email du moindre changement.</p>
            </div>
            <div class=\"col-12 col-lg-6 text-center text-primary text-secondary text-uppercase\">
                <h1 class=\"display-4 font-weight-bold\"><i class=\"\"></i>
                    <br>
                   African Solutions to African Challenges<exp>*</exp>&nbsp!
                </h1>
            </div>
        </div>
        <hr class=\"mb-4\">
        ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 24
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
                // line 25
                echo "                <p class=\"lead\">
                    <a class=\"btn btn-primary btn-lg\" href=\"";
                // line 26
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
                echo "\" role=\"button\">Réserver une salle</a>
                </p>
            ";
            }
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "            <p class=\"lead\">
                <a class=\"btn btn-primary btn-lg\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" role=\"button\">Se connecter</a>
            </p>
        ";
        }
        // line 34
        echo "
       <!-- <blockquote>* &laquo;&nbsp;Maladie&nbsp;&raquo; de la réunion.<footer class=\"blockquote-footer\">Encyclopædia Universalis</footer></blockquote>-->

        <div class=\"col-5 ml-auto\">
            <blockquote class=\"blockquote font-weight-bold\">
                <p class=\"mb-0\"><i><span class=\"h1 text-success\">&laquo;</span>&nbsp;
               <p>The world increasingly pays attention to Africa – while an increasing number of foreign decision makers and groups are keen to invest there and get involved into projects. Our continent is naturally rich in natural resources but also in talents – thanks to the men and women who live there. Their creativity and the ideas they develop to address their day-to-day challenges is an inspiration.</p>

               <p> We believe that Africa can become an innovation laboratory capable of inspiring the rest of the world. 
                Within ADS, we seek to support the development of Africa to enable it to achieve its full potential 
                by offering innovative solutions in a wide range of strategic sectors. With our international partners 
                and with forward-looking governments keen to develop opportunities on their territory, we are building together 
                projects for a better future.</p>

                <p>Is Africa the new driver for global growth? Sure, no doubt about it. This conviction drives us forward.</p>
                &nbsp;<span class=\"h1 text-success\">&raquo;</span></i></p>
                <br>
                <footer class=\"blockquote-footer\">SAMBA BATHILY, <cite title=\"Source Title\">Founder and Chairman</cite></footer>
            </blockquote>
        </div>

        ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
            // line 56
            echo "        
        <div class=\"row\">
            <div class=\"col-12\">Actuellement :</div>
            <div class=\"card text-white bg-info col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["upcomingUnavailabilities"]) || array_key_exists("upcomingUnavailabilities", $context) ? $context["upcomingUnavailabilities"] : (function () { throw new RuntimeError('Variable "upcomingUnavailabilities" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 62
            echo (((1 < (isset($context["upcomingUnavailabilities"]) || array_key_exists("upcomingUnavailabilities", $context) ? $context["upcomingUnavailabilities"] : (function () { throw new RuntimeError('Variable "upcomingUnavailabilities" does not exist.', 62, $this->source); })()))) ? ("réunions programmées") : ("réunion programmée"));
            echo "</p>
                </div>
            </div>
            <div class=\"card text-white bg-success col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["currentAvailableRoomCount"]) || array_key_exists("currentAvailableRoomCount", $context) ? $context["currentAvailableRoomCount"] : (function () { throw new RuntimeError('Variable "currentAvailableRoomCount" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 68
            echo (((1 < (isset($context["currentAvailableRoomCount"]) || array_key_exists("currentAvailableRoomCount", $context) ? $context["currentAvailableRoomCount"] : (function () { throw new RuntimeError('Variable "currentAvailableRoomCount" does not exist.', 68, $this->source); })()))) ? ("salles disponibles") : ("salle disponible"));
            echo "</p>
                </div>
            </div>
            <div class=\"card text-white bg-warning col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["currentUnavailability"]) || array_key_exists("currentUnavailability", $context) ? $context["currentUnavailability"] : (function () { throw new RuntimeError('Variable "currentUnavailability" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 74
            echo (((1 < (isset($context["currentUnavailability"]) || array_key_exists("currentUnavailability", $context) ? $context["currentUnavailability"] : (function () { throw new RuntimeError('Variable "currentUnavailability" does not exist.', 74, $this->source); })()))) ? ("salles occupées") : ("salle occupée"));
            echo "</p>
                </div>
            </div>
            <div class=\"col-12\">Nos locaux :</div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["totalRoomCount"]) || array_key_exists("totalRoomCount", $context) ? $context["totalRoomCount"] : (function () { throw new RuntimeError('Variable "totalRoomCount" does not exist.', 80, $this->source); })()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">salles de réunion</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["roomMaxCapacity"]) || array_key_exists("roomMaxCapacity", $context) ? $context["roomMaxCapacity"] : (function () { throw new RuntimeError('Variable "roomMaxCapacity" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">capacité maximum</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["totalCapacity"]) || array_key_exists("totalCapacity", $context) ? $context["totalCapacity"] : (function () { throw new RuntimeError('Variable "totalCapacity" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">capacité totale</p>
                </div>
            </div>
            <div class=\"col-12\">Notre personnel :</div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 99
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["lastOrganiser"]) || array_key_exists("lastOrganiser", $context) ? $context["lastOrganiser"] : (function () { throw new RuntimeError('Variable "lastOrganiser" does not exist.', 99, $this->source); })()), "firstName", [], "any", false, false, false, 99) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["lastOrganiser"]) || array_key_exists("lastOrganiser", $context) ? $context["lastOrganiser"] : (function () { throw new RuntimeError('Variable "lastOrganiser" does not exist.', 99, $this->source); })()), "lastName", [], "any", false, false, false, 99)), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">vient de réserver une salle</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <!-- <h4 class=\"card-title\"> lastMonthOrganiser.firstName ~ ' ' ~ lastMonthOrganiser.lastName </h4> -->
                    <p class=\"card-text\">est l'organisateur du mois dernier</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                   <!-- <h4 class=\"card-title\"> lastMonthGuest.firstName ~ ' ' ~ lastMonthGuest.lastName }}</h4>-->
                    <p class=\"card-text\">est l'invité du mois dernier</p>
                </div>
            </div>
        </div>
        ";
        } else {
            // line 117
            echo "            <hr>
            <div class=\"mt-3\">
                Pour en savoir plus sur ce service, écrivez à
                <a href=\"mailto:contact-technique@adsglobalcorp.com\">
                    contact-technique@adsglobalcorp.com
                </a>
            </div>
        ";
        }
        // line 125
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 125,  251 => 117,  230 => 99,  220 => 92,  211 => 86,  202 => 80,  193 => 74,  189 => 73,  181 => 68,  177 => 67,  169 => 62,  165 => 61,  158 => 56,  156 => 55,  133 => 34,  127 => 31,  124 => 30,  121 => 29,  115 => 26,  112 => 25,  109 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %} ADS G-SALLE{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-4\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-6\">
                <p class=\"lead\">Vous avez remarqué ?</p>
                <p class=\"lead font-weight-bolder\">Ce qui vous fait perdre le plus de temps, dans une réunion, c'est son organisation.</p>
                <p class=\"lead\">Avec <u>G-SALLE</u>, réservez une salle et conviez les participants en quelques clics.</p>
                <p class=\"lead\">Que vous soyez organisateur ou invité, vous serez informé par email du moindre changement.</p>
            </div>
            <div class=\"col-12 col-lg-6 text-center text-primary text-secondary text-uppercase\">
                <h1 class=\"display-4 font-weight-bold\"><i class=\"\"></i>
                    <br>
                   African Solutions to African Challenges<exp>*</exp>&nbsp!
                </h1>
            </div>
        </div>
        <hr class=\"mb-4\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% if is_granted('ROLE_EMPLOYEE') %}
                <p class=\"lead\">
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('room_index') }}\" role=\"button\">Réserver une salle</a>
                </p>
            {% endif %}
        {% else %}
            <p class=\"lead\">
                <a class=\"btn btn-primary btn-lg\" href=\"{{ path('app_login') }}\" role=\"button\">Se connecter</a>
            </p>
        {% endif %}

       <!-- <blockquote>* &laquo;&nbsp;Maladie&nbsp;&raquo; de la réunion.<footer class=\"blockquote-footer\">Encyclopædia Universalis</footer></blockquote>-->

        <div class=\"col-5 ml-auto\">
            <blockquote class=\"blockquote font-weight-bold\">
                <p class=\"mb-0\"><i><span class=\"h1 text-success\">&laquo;</span>&nbsp;
               <p>The world increasingly pays attention to Africa – while an increasing number of foreign decision makers and groups are keen to invest there and get involved into projects. Our continent is naturally rich in natural resources but also in talents – thanks to the men and women who live there. Their creativity and the ideas they develop to address their day-to-day challenges is an inspiration.</p>

               <p> We believe that Africa can become an innovation laboratory capable of inspiring the rest of the world. 
                Within ADS, we seek to support the development of Africa to enable it to achieve its full potential 
                by offering innovative solutions in a wide range of strategic sectors. With our international partners 
                and with forward-looking governments keen to develop opportunities on their territory, we are building together 
                projects for a better future.</p>

                <p>Is Africa the new driver for global growth? Sure, no doubt about it. This conviction drives us forward.</p>
                &nbsp;<span class=\"h1 text-success\">&raquo;</span></i></p>
                <br>
                <footer class=\"blockquote-footer\">SAMBA BATHILY, <cite title=\"Source Title\">Founder and Chairman</cite></footer>
            </blockquote>
        </div>

        {% if is_granted('ROLE_EMPLOYEE') %}
        
        <div class=\"row\">
            <div class=\"col-12\">Actuellement :</div>
            <div class=\"card text-white bg-info col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ upcomingUnavailabilities }}</h4>
                    <p class=\"card-text\">{{ 1 < upcomingUnavailabilities ? 'réunions programmées' : 'réunion programmée' }}</p>
                </div>
            </div>
            <div class=\"card text-white bg-success col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ currentAvailableRoomCount }}</h4>
                    <p class=\"card-text\">{{ 1 < currentAvailableRoomCount ? 'salles disponibles' : 'salle disponible' }}</p>
                </div>
            </div>
            <div class=\"card text-white bg-warning col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ currentUnavailability }}</h4>
                    <p class=\"card-text\">{{ 1 < currentUnavailability ? 'salles occupées' : 'salle occupée' }}</p>
                </div>
            </div>
            <div class=\"col-12\">Nos locaux :</div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ totalRoomCount }}</h4>
                    <p class=\"card-text\">salles de réunion</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ roomMaxCapacity }}</h4>
                    <p class=\"card-text\">capacité maximum</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ totalCapacity }}</h4>
                    <p class=\"card-text\">capacité totale</p>
                </div>
            </div>
            <div class=\"col-12\">Notre personnel :</div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ lastOrganiser.firstName ~ ' ' ~ lastOrganiser.lastName }}</h4>
                    <p class=\"card-text\">vient de réserver une salle</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                    <!-- <h4 class=\"card-title\"> lastMonthOrganiser.firstName ~ ' ' ~ lastMonthOrganiser.lastName </h4> -->
                    <p class=\"card-text\">est l'organisateur du mois dernier</p>
                </div>
            </div>
            <div class=\"card text-white bg-secondary col-11 col-sm-4 col-lg-4 mb-1 mb-sm-3 mx-auto text-center\">
                <div class=\"card-body\">
                   <!-- <h4 class=\"card-title\"> lastMonthGuest.firstName ~ ' ' ~ lastMonthGuest.lastName }}</h4>-->
                    <p class=\"card-text\">est l'invité du mois dernier</p>
                </div>
            </div>
        </div>
        {% else %}
            <hr>
            <div class=\"mt-3\">
                Pour en savoir plus sur ce service, écrivez à
                <a href=\"mailto:contact-technique@adsglobalcorp.com\">
                    contact-technique@adsglobalcorp.com
                </a>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "front/index.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/front/index.html.twig");
    }
}
