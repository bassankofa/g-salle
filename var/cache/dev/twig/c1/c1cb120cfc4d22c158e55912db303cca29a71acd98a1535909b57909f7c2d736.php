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

/* unavailability/index.html.twig */
class __TwigTemplate_2f67d9f56571991b7872456d76f259f7f88d032231527423bf827e91f45ae906 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "unavailability/index.html.twig", 1);
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

        echo "Historique";
        
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

        <h1>Historique des réunions</h1>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Objet</th>
                    <th>Salle</th>
                    <th>Organisateur</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Type</th>
                    <th>Etat</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 24
        if ((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
                // line 26
                echo "                <tr ";
                echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 26) < twig_date_converter($this->env))) ? ("class=\"table-active \"") : (""));
                echo ">
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "object", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "room", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "organiser", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "organiser", [], "any", false, false, false, 29), "lastName", [], "any", false, false, false, 29)), "html", null, true);
                echo "</td>
                    <td>Le ";
                // line 30
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 30), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>Le ";
                // line 31
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 31), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "typeReservation", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                    <td><span class=\"";
                // line 33
                echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "etat", [], "any", false, false, false, 33) == "attente")) ? ("btn btn-warning") : ("btn btn-success"));
                echo "\">
                         ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "etat", [], "any", false, false, false, 34), "html", null, true);
                echo "</span></td>
                    <td class=\"last-column\">
                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_show", ["id" => twig_get_attribute($this->env, $this->source, $context["unavailability"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                            <i class=\"fas fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\"></i>
                        </a>
                        ";
                // line 39
                if ((twig_date_converter($this->env) < twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 39))) {
                    // line 40
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["unavailability"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-edit ml-2\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer\"></i>
                        </a>
                        ";
                }
                // line 44
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            ";
        } else {
            // line 48
            echo "                <tr>
                    <td>Aucune réservation enregistrée.</td>
                </tr>
            ";
        }
        // line 52
        echo "            </tbody>
        </table>
        ";
        // line 54
        if (((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 54, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 54, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 54))) {
            // line 55
            echo "            ";
            echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 55, $this->source); })()), "reunion_it");
            echo "
        ";
        }
        // line 57
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "unavailability/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  192 => 55,  190 => 54,  186 => 52,  180 => 48,  177 => 47,  169 => 44,  161 => 40,  159 => 39,  153 => 36,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  115 => 26,  110 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Historique{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        <h1>Historique des réunions</h1>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Objet</th>
                    <th>Salle</th>
                    <th>Organisateur</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Type</th>
                    <th>Etat</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
            {% if unavailabilities_pager %}
            {% for unavailability in unavailabilities_pager %}
                <tr {{ unavailability.startDate < date() ? 'class=\"table-active \"' : '' }}>
                    <td>{{ unavailability.object }}</td>
                    <td>{{ unavailability.room.name }}</td>
                    <td>{{ unavailability.organiser.firstName ~ ' ' ~ unavailability.organiser.lastName }}</td>
                    <td>Le {{ unavailability.startDate ? unavailability.startDate|date('d/m/Y à H:i') : '' }}</td>
                    <td>Le {{ unavailability.endDate ? unavailability.endDate|date('d/m/Y à H:i') : '' }}</td>
                    <td>{{ unavailability.typeReservation.name  }}</td>
                    <td><span class=\"{{unavailability.etat=='attente'?'btn btn-warning':'btn btn-success'}}\">
                         {{ unavailability.etat }}</span></td>
                    <td class=\"last-column\">
                        <a href=\"{{ path('unavailability_show', {'id': unavailability.id}) }}\" style=\"text-decoration: none;\">
                            <i class=\"fas fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\"></i>
                        </a>
                        {% if date() < unavailability.startDate %}
                        <a href=\"{{ path('unavailability_edit', {'id': unavailability.id}) }}\">
                            <i class=\"fas fa-edit ml-2\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer\"></i>
                        </a>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            {% else %}
                <tr>
                    <td>Aucune réservation enregistrée.</td>
                </tr>
            {% endif %}
            </tbody>
        </table>
        {% if unavailabilities_pager and unavailabilities_pager.haveToPaginate %}
            {{ pagerfanta(unavailabilities_pager, 'reunion_it') }}
        {% endif %}
    </div>

{% endblock %}
", "unavailability/index.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/unavailability/index.html.twig");
    }
}
