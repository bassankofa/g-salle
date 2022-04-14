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
class __TwigTemplate_a2a07abf5d218eb8861d522f231e26e51f9e8363320377b89d4e838f64dfde7a extends \Twig\Template
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

        <h1>Historique de l'occupation des salles</h1>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Objet</th>
                    <th>Salle</th>
                    <th>Organisateur</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Type</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 23
        if ((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
                // line 25
                echo "                <tr ";
                echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 25) < twig_date_converter($this->env))) ? ("class=\"table-active \"") : (""));
                echo ">
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "object", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "room", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "organiser", [], "any", false, false, false, 28), "firstName", [], "any", false, false, false, 28) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "organiser", [], "any", false, false, false, 28), "lastName", [], "any", false, false, false, 28)), "html", null, true);
                echo "</td>
                    <td>Le ";
                // line 29
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 29), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>Le ";
                // line 30
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 30), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 31
                echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "type", [], "any", false, false, false, 31) == 0)) ? ("Réunion") : ("Autre"));
                echo "</td>
                    <td class=\"last-column\">
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_show", ["id" => twig_get_attribute($this->env, $this->source, $context["unavailability"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                            <i class=\"fas fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\"></i>
                        </a>
                        ";
                // line 36
                if ((twig_date_converter($this->env) < twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["unavailability"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-edit ml-2\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer\"></i>
                        </a>
                        ";
                }
                // line 41
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            ";
        } else {
            // line 45
            echo "                <tr>
                    <td>Aucune réservation enregistrée.</td>
                </tr>
            ";
        }
        // line 49
        echo "            </tbody>
        </table>
        ";
        // line 51
        if (((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 51, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 51, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 51))) {
            // line 52
            echo "            ";
            echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 52, $this->source); })()), "reunion_it");
            echo "
        ";
        }
        // line 54
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
        return array (  189 => 54,  183 => 52,  181 => 51,  177 => 49,  171 => 45,  168 => 44,  160 => 41,  152 => 37,  150 => 36,  144 => 33,  139 => 31,  135 => 30,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  114 => 25,  109 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Historique{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        <h1>Historique de l'occupation des salles</h1>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Objet</th>
                    <th>Salle</th>
                    <th>Organisateur</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Type</th>
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
                    <td>{{ unavailability.type == 0 ? 'Réunion' : 'Autre' }}</td>
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
