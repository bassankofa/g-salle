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

/* user/_dashboard_guest.html.twig */
class __TwigTemplate_ac08503e8e5ff35f365d2b68cd74b5d74f1a888e2a1250c1568f2f0f451bd210 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_dashboard_guest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_dashboard_guest.html.twig"));

        // line 1
        echo "<table class=\"table\">
    <thead>
    <tr>
        <th>Objet</th>
        <th>Salle</th>
        <th>Organisateur</th>
        <th>Début</th>
        <th>Fin</th>
        ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "            <th>Type</th>
        ";
        }
        // line 12
        echo "        <th> </th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        if ( !twig_test_empty((isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
                // line 18
                echo "            <tr ";
                echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 18) < twig_date_converter($this->env))) ? ("class=\"table-active \"") : (""));
                echo ">
                <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "object", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "room", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                <td>";
                // line 21
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "organiser", [], "any", false, false, false, 21), "firstName", [], "any", false, false, false, 21) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unavailability"], "organiser", [], "any", false, false, false, 21), "lastName", [], "any", false, false, false, 21)), "html", null, true);
                echo "</td>
                <td>Le ";
                // line 22
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 22), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>Le ";
                // line 23
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "endDate", [], "any", false, false, false, 23), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                ";
                // line 24
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 25
                    echo "                    <td>";
                    echo (((twig_get_attribute($this->env, $this->source, $context["unavailability"], "type", [], "any", false, false, false, 25) == 0)) ? ("Réunion") : ("Autre"));
                    echo "</td>
                ";
                }
                // line 27
                echo "                <td>
                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_show", ["id" => twig_get_attribute($this->env, $this->source, $context["unavailability"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                        <i class=\"far fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\" ></i>
                    </a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        <tr>
            <td colspan=\"7\">Aucune invitation enregistrée.</td>
        </tr>
    ";
        }
        // line 39
        echo "    </tbody>
</table>

";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 42, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 42)) {
            // line 43
            echo "
    <ul class=\"pagination\">

        <li class=\"page-item";
            // line 46
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 46, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 46) == 1)) ? (" disabled") : (""));
            echo "\">
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsGuestPage(";
            // line 47
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 47, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 47) - 1), "html", null, true);
            echo ")\"><i class=\"fas fa-angle-left\"></i></a>
        </li>

        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 50, $this->source); })()), "getNbPages", [], "method", false, false, false, 50)));
            foreach ($context['_seq'] as $context["_key"] => $context["givenPage"]) {
                // line 51
                echo "            <li class=\"page-item";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 51, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 51) == $context["givenPage"])) ? (" active") : (""));
                echo "\">
                <a class=\"page-link\" onclick=\"loadUnavailabilityAsGuestPage(";
                // line 52
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
            // line 55
            echo "
        <li class=\"page-item";
            // line 56
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 56, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 56) == twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 56, $this->source); })()), "getNbPages", [], "method", false, false, false, 56))) ? (" disabled") : (""));
            echo "\" >
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsGuestPage(";
            // line 57
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["unavailabilitiesAsGuest_pager"]) || array_key_exists("unavailabilitiesAsGuest_pager", $context) ? $context["unavailabilitiesAsGuest_pager"] : (function () { throw new RuntimeError('Variable "unavailabilitiesAsGuest_pager" does not exist.', 57, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 57) + 1), "html", null, true);
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
        return "user/_dashboard_guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  174 => 56,  171 => 55,  160 => 52,  155 => 51,  151 => 50,  145 => 47,  141 => 46,  136 => 43,  134 => 42,  129 => 39,  123 => 35,  120 => 34,  108 => 28,  105 => 27,  99 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  72 => 18,  67 => 17,  65 => 16,  59 => 12,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
    <thead>
    <tr>
        <th>Objet</th>
        <th>Salle</th>
        <th>Organisateur</th>
        <th>Début</th>
        <th>Fin</th>
        {% if is_granted('ROLE_ADMIN') %}
            <th>Type</th>
        {% endif %}
        <th> </th>
    </tr>
    </thead>
    <tbody>
    {% if unavailabilitiesAsGuest_pager is not empty %}
        {% for unavailability in unavailabilitiesAsGuest_pager %}
            <tr {{ unavailability.startDate < date() ? 'class=\"table-active \"' : '' }}>
                <td>{{ unavailability.object }}</td>
                <td>{{ unavailability.room.name }}</td>
                <td>{{ unavailability.organiser.firstName ~ ' ' ~ unavailability.organiser.lastName }}</td>
                <td>Le {{ unavailability.startDate ? unavailability.startDate|date('d/m/Y à H:i') : '' }}</td>
                <td>Le {{ unavailability.endDate ? unavailability.endDate|date('d/m/Y à H:i') : '' }}</td>
                {% if is_granted('ROLE_ADMIN') %}
                    <td>{{ unavailability.type == 0 ? 'Réunion' : 'Autre' }}</td>
                {% endif %}
                <td>
                    <a href=\"{{ path('unavailability_show', {'id': unavailability.id}) }}\" style=\"text-decoration: none;\">
                        <i class=\"far fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\" ></i>
                    </a>
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"7\">Aucune invitation enregistrée.</td>
        </tr>
    {% endif %}
    </tbody>
</table>

{% if unavailabilitiesAsGuest_pager.haveToPaginate %}

    <ul class=\"pagination\">

        <li class=\"page-item{{ unavailabilitiesAsGuest_pager.getCurrentPage() == 1 ? ' disabled' : '' }}\">
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsGuestPage({{ unavailabilitiesAsGuest_pager.getCurrentPage() -1 }})\"><i class=\"fas fa-angle-left\"></i></a>
        </li>

        {% for givenPage in 1..unavailabilitiesAsGuest_pager.getNbPages() %}
            <li class=\"page-item{{ unavailabilitiesAsGuest_pager.getCurrentPage() == givenPage ? ' active' : '' }}\">
                <a class=\"page-link\" onclick=\"loadUnavailabilityAsGuestPage({{ givenPage }})\">{{ givenPage }}</a>
            </li>
        {%  endfor %}

        <li class=\"page-item{{ unavailabilitiesAsGuest_pager.getCurrentPage() == unavailabilitiesAsGuest_pager.getNbPages() ? ' disabled' : '' }}\" >
            <a class=\"page-link\" onclick=\"loadUnavailabilityAsGuestPage({{ unavailabilitiesAsGuest_pager.getCurrentPage() +1}})\"><i class=\"fas fa-angle-right\"></i></a>
        </li>
    </ul>

{% endif %}
", "user/_dashboard_guest.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/user/_dashboard_guest.html.twig");
    }
}
