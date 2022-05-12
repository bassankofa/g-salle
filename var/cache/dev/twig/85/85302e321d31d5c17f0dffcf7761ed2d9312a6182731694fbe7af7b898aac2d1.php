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

/* user/_dashboard_organiser.html.twig */
class __TwigTemplate_050aa68284e7f73d47919028d63690fc212f8a3c68837645dd3acdb3f9646298 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_dashboard_organiser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_dashboard_organiser.html.twig"));

        // line 1
        echo "<table class=\"table\">
    <thead>
    <tr>
        <th>Objet</th>
        <th>Salle</th>
        <th>Début</th>
        <th>Fin</th>
        ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "            <th>Type</th>
        ";
        }
        // line 11
        echo "        <th> </th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if ( !twig_test_empty((isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
                // line 17
                echo "            <tr ";
                echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 17) < twig_date_converter($this->env))) ? ("class=\"table-active \"") : (""));
                echo ">
                <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "object", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "room", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
                <td>Le ";
                // line 20
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 20), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>Le ";
                // line 21
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 21), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                ";
                // line 22
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 23
                    echo "                    <td>";
                    echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "type", [], "any", false, false, false, 23) == 0)) ? ("Réunion") : ("Autre"));
                    echo "</td>
                ";
                }
                // line 25
                echo "                <td class=\"last-column\">
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_show", ["id" => twig_get_attribute($this->env, $this->source, $context["unavailability"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                        <i class=\"far fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\" ></i>
                    </a>
                    ";
                // line 29
                if ((twig_date_converter($this->env) < twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["unavailability"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-user-edit ml-2\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer\"></i>
                        </a>
                    ";
                }
                // line 34
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        <tr>
            <td colspan=\"7\">Aucune réservation enregistrée.</td>
        </tr>
    ";
        }
        // line 42
        echo "    </tbody>
</table>

";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 45, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 45)) {
            // line 46
            echo "
    <ul class=\"pagination\">

        <li class=\"page-item";
            // line 49
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 49, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 49) == 1)) ? (" disabled") : (""));
            echo "\">
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsOrganiserPage(";
            // line 50
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 50, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 50) - 1), "html", null, true);
            echo ")\"><i class=\"fas fa-angle-left\"></i></a>
        </li>

        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 53, $this->source); })()), "getNbPages", [], "method", false, false, false, 53)));
            foreach ($context['_seq'] as $context["_key"] => $context["givenPage"]) {
                // line 54
                echo "            <li class=\"page-item";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 54, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 54) == $context["givenPage"])) ? (" active") : (""));
                echo "\">
                <a class=\"page-link\" onclick=\"loadUnavailabilityAsOrganiserPage(";
                // line 55
                echo twig_escape_filter($this->env, $context["givenPage"], "html", null, true);
                echo ")\">";
                echo twig_escape_filter($this->env, $context["givenPage"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['givenPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
        <li class=\"page-item";
            // line 59
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 59, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 59) == twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 59, $this->source); })()), "getNbPages", [], "method", false, false, false, 59))) ? (" disabled") : (""));
            echo "\" >
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsOrganiserPage(";
            // line 60
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsOrganiser_pager"]) || array_key_exists("unavailabilitiesAsOrganiser_pager", $context) ? $context["unavailabilitiesAsOrganiser_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsOrganiser_pager" does not exist.', 60, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 60) + 1), "html", null, true);
            echo ")\"><i class=\"fas fa-angle-right\"></i></a>
        </li>
    </ul>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_dashboard_organiser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 60,  181 => 59,  178 => 58,  167 => 55,  162 => 54,  158 => 53,  152 => 50,  148 => 49,  143 => 46,  141 => 45,  136 => 42,  130 => 38,  127 => 37,  119 => 34,  111 => 30,  109 => 29,  103 => 26,  100 => 25,  94 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  71 => 17,  66 => 16,  64 => 15,  58 => 11,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
    <thead>
    <tr>
        <th>Objet</th>
        <th>Salle</th>
        <th>Début</th>
        <th>Fin</th>
        {% if is_granted('ROLE_ADMIN') %}
            <th>Type</th>
        {% endif %}
        <th> </th>
    </tr>
    </thead>
    <tbody>
    {% if unavailabilitiesAsOrganiser_pager is not empty %}
        {% for unavailability in unavailabilitiesAsOrganiser_pager %}
            <tr {{ unavailability.startDate < date() ? 'class=\"table-active \"' : '' }}>
                <td>{{ unavailability.object }}</td>
                <td>{{ unavailability.room.name }}</td>
                <td>Le {{ unavailability.startDate ? unavailability.startDate|date('d/m/Y à H:i') : '' }}</td>
                <td>Le {{ unavailability.endDate ? unavailability.endDate|date('d/m/Y à H:i') : '' }}</td>
                {% if is_granted('ROLE_ADMIN') %}
                    <td>{{ unavailability.type == 0 ? 'Réunion' : 'Autre' }}</td>
                {% endif %}
                <td class=\"last-column\">
                    <a href=\"{{ path('unavailability_show', {'id': unavailability.id}) }}\" style=\"text-decoration: none;\">
                        <i class=\"far fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\" ></i>
                    </a>
                    {% if date() < unavailability.startDate %}
                        <a href=\"{{ path('unavailability_edit', {'id': unavailability.id}) }}\">
                            <i class=\"fas fa-user-edit ml-2\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer\"></i>
                        </a>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"7\">Aucune réservation enregistrée.</td>
        </tr>
    {% endif %}
    </tbody>
</table>

{% if unavailabilitiesAsOrganiser_pager.haveToPaginate %}

    <ul class=\"pagination\">

        <li class=\"page-item{{ unavailabilitiesAsOrganiser_pager.getCurrentPage() == 1 ? ' disabled' : '' }}\">
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsOrganiserPage({{ unavailabilitiesAsOrganiser_pager.getCurrentPage() -1 }})\"><i class=\"fas fa-angle-left\"></i></a>
        </li>

        {% for givenPage in 1..unavailabilitiesAsOrganiser_pager.getNbPages() %}
            <li class=\"page-item{{ unavailabilitiesAsOrganiser_pager.getCurrentPage() == givenPage ? ' active' : '' }}\">
                <a class=\"page-link\" onclick=\"loadUnavailabilityAsOrganiserPage({{ givenPage }})\">{{ givenPage }}</a>
            </li>
        {%  endfor %}

        <li class=\"page-item{{ unavailabilitiesAsOrganiser_pager.getCurrentPage() == unavailabilitiesAsOrganiser_pager.getNbPages() ? ' disabled' : '' }}\" >
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsOrganiserPage({{ unavailabilitiesAsOrganiser_pager.getCurrentPage() +1}})\"><i class=\"fas fa-angle-right\"></i></a>
        </li>
    </ul>

{% endif %}
", "user/_dashboard_organiser.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/user/_dashboard_organiser.html.twig");
    }
}
