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

/* unavailability/show.html.twig */
class __TwigTemplate_93e635639a49652430530fd80f115b7812b15e97d95aec2c70ca05b66664e1a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/show.html.twig"));

        // line 118
        $context["modal_message"] = "Voulez-vous vraiment supprimer cette réservation ?";
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "unavailability/show.html.twig", 1);
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

        echo "Réservation";
        
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

        <div class=\"d-flex\">

            <h1 class=\"mr-auto\">Réservation</h1>

            ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
            // line 14
            echo "
            <div class=\"btn-group\" role=\"group\">
                <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_calendar");
            echo "\" style=\"color: #fff;\">
                    <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Calendrier\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </button>
                </a>
                ";
            // line 21
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 21, $this->source); })()), "organiser", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)))) {
                // line 22
                echo "                    ";
                // line 23
                echo "                    ";
                if ((twig_date_converter($this->env) < twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 23, $this->source); })()), "startDate", [], "any", false, false, false, 23)))) {
                    // line 24
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
                    echo "\" style=\"color: #fff;\">
                            <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;margin-left: 5px;\">
                                <i class=\"fas fa-edit\"></i>
                            </button>
                        </a>
                        <form id=\"form\" method=\"post\" action=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
                    echo "\" style=\"display: inline-block;\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31))), "html", null, true);
                    echo "\">
                            <button class=\"btn btn-warning\" style=\"width: 45px;margin-left: 5px;\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </form>
                    ";
                }
                // line 37
                echo "
                ";
            }
            // line 39
            echo "
            </div>

            ";
        }
        // line 43
        echo "        </div>
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Objet</th>
                    <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 48, $this->source); })()), "object", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Organisateur</th>
                    <td>
                        ";
        // line 54
        echo "                        ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 54, $this->source); })()), "organiser", [], "any", false, false, false, 54), "deletedAt", [], "any", false, false, false, 54))) {
            // line 55
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 55, $this->source); })()), "organiser", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
                                ";
            // line 56
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 56, $this->source); })()), "organiser", [], "any", false, false, false, 56), "firstName", [], "any", false, false, false, 56) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 56, $this->source); })()), "organiser", [], "any", false, false, false, 56), "lastName", [], "any", false, false, false, 56)), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 59
            echo "                            <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compte supprimé\">
                                ";
            // line 60
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 60, $this->source); })()), "organiser", [], "any", false, false, false, 60), "firstName", [], "any", false, false, false, 60) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 60, $this->source); })()), "organiser", [], "any", false, false, false, 60), "lastName", [], "any", false, false, false, 60)), "html", null, true);
            echo "
                            </span>
                        ";
        }
        // line 63
        echo "                    </td>
                </tr>
                <tr>
                    <th>Salle</th>
                    <td>
                        ";
        // line 69
        echo "                        ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 69, $this->source); })()), "room", [], "any", false, false, false, 69), "deletedAt", [], "any", false, false, false, 69))) {
            // line 70
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 70, $this->source); })()), "room", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">
                                ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 71, $this->source); })()), "room", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 74
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 74, $this->source); })()), "room", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
            echo "
                        ";
        }
        // line 76
        echo "                    </td>
                </tr>
                <tr>
                    <th>Début</th>
                    <td>";
        // line 80
        ((twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 80, $this->source); })()), "startDate", [], "any", false, false, false, 80)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 80, $this->source); })()), "startDate", [], "any", false, false, false, 80), "\\L\\e d/m/Y à H:i"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th>Fin</th>
                    <td>";
        // line 84
        ((twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 84, $this->source); })()), "endDate", [], "any", false, false, false, 84)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 84, $this->source); })()), "endDate", [], "any", false, false, false, 84), "\\L\\e d/m/Y à H:i"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th>Invités</th>
                    <td>
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 89, $this->source); })()), "guests", [], "any", false, false, false, 89));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
            // line 90
            echo "                            ";
            // line 91
            echo "                            ";
            if ((null == twig_get_attribute($this->env, $this->source, $context["guest"], "deletedAt", [], "any", false, false, false, 91))) {
                // line 92
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["guest"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\">
                                ";
                // line 93
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["guest"], "firstName", [], "any", false, false, false, 93) . " ") . twig_get_attribute($this->env, $this->source, $context["guest"], "lastName", [], "any", false, false, false, 93)), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 93)) {
                    echo ", ";
                }
                // line 94
                echo "                            </a>
                            ";
            } else {
                // line 96
                echo "                                <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compte supprimé\">
                                    ";
                // line 97
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["guest"], "firstName", [], "any", false, false, false, 97) . " ") . twig_get_attribute($this->env, $this->source, $context["guest"], "lastName", [], "any", false, false, false, 97)), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 97)) {
                    echo ", ";
                }
                // line 98
                echo "                                </span>
                            ";
            }
            // line 100
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                    </td>
                </tr>
                ";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 104
            echo "                    <tr>
                        <th>Type</th>
                        <td>";
            // line 106
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106) == 0)) ? ("Réunion") : ("Autre"));
            echo "</td>
                    </tr>
                ";
        }
        // line 109
        echo "            </tbody>
        </table>

    </div>

    ";
        // line 114
        $this->loadTemplate("components/_confirm_modal.html.twig", "unavailability/show.html.twig", 114)->display($context);
        // line 115
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('#confirmationMessage').text('";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["modal_message"]) || array_key_exists("modal_message", $context) ? $context["modal_message"] : (function () { throw new RuntimeError('Variable "modal_message" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "');
        \$('.modal-title').text('Supprimer la réservation');
        \$('#form').click(function(e) {
            e.preventDefault();
            \$('#confirmationModal').modal({});

            \$('#confirm').on(\"click\", function () {
                \$('#form').submit();
                \$(\"#confirmationModal\").modal('hide');
            });

            \$(\"#cancel\").on(\"click\", function(){
                \$(\"#confirmationModal\").modal('hide');
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "unavailability/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 123,  349 => 121,  339 => 120,  328 => 115,  326 => 114,  319 => 109,  313 => 106,  309 => 104,  307 => 103,  303 => 101,  289 => 100,  285 => 98,  280 => 97,  277 => 96,  273 => 94,  268 => 93,  263 => 92,  260 => 91,  258 => 90,  241 => 89,  233 => 84,  226 => 80,  220 => 76,  214 => 74,  208 => 71,  203 => 70,  200 => 69,  193 => 63,  187 => 60,  184 => 59,  178 => 56,  173 => 55,  170 => 54,  162 => 48,  155 => 43,  149 => 39,  145 => 37,  136 => 31,  131 => 29,  122 => 24,  119 => 23,  117 => 22,  115 => 21,  107 => 16,  103 => 14,  101 => 13,  92 => 6,  82 => 5,  63 => 3,  52 => 1,  50 => 118,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Réservation{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        <div class=\"d-flex\">

            <h1 class=\"mr-auto\">Réservation</h1>

            {% if is_granted('ROLE_EMPLOYEE') %}

            <div class=\"btn-group\" role=\"group\">
                <a href=\"{{ path('unavailability_calendar') }}\" style=\"color: #fff;\">
                    <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Calendrier\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </button>
                </a>
                {% if is_granted('ROLE_ADMIN') or unavailability.organiser == app.user %}
                    {# On n'affiche les boutons 'edit' et 'delete' seulement si la réunion n'a pas commencé #}
                    {% if date() < date(unavailability.startDate) %}
                        <a href=\"{{ path('unavailability_edit', {'id': unavailability.id}) }}\" style=\"color: #fff;\">
                            <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;margin-left: 5px;\">
                                <i class=\"fas fa-edit\"></i>
                            </button>
                        </a>
                        <form id=\"form\" method=\"post\" action=\"{{ path('unavailability_delete', {'id': unavailability.id}) }}\" style=\"display: inline-block;\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ unavailability.id) }}\">
                            <button class=\"btn btn-warning\" style=\"width: 45px;margin-left: 5px;\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </form>
                    {% endif %}

                {% endif %}

            </div>

            {% endif %}
        </div>
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Objet</th>
                    <td>{{ unavailability.object }}</td>
                </tr>
                <tr>
                    <th>Organisateur</th>
                    <td>
                        {# On désactive le lien vers l'organisateur s'il n'existe plus #}
                        {% if null == unavailability.organiser.deletedAt %}
                            <a href=\"{{ path('user_show', {'id': unavailability.organiser.id}) }}\">
                                {{ unavailability.organiser.firstName ~ ' ' ~ unavailability.organiser.lastName }}
                            </a>
                        {% else %}
                            <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compte supprimé\">
                                {{ unavailability.organiser.firstName ~ ' ' ~ unavailability.organiser.lastName }}
                            </span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Salle</th>
                    <td>
                        {# On désactive le lien vers la salle si elle n'existe plus #}
                        {% if null == unavailability.room.deletedAt %}
                            <a href=\"{{ path('room_show', {'id': unavailability.room.id}) }}\">
                                {{ unavailability.room.name }}
                            </a>
                        {% else %}
                            {{ unavailability.room.name }}
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Début</th>
                    <td>{{ unavailability.startDate ? unavailability.startDate|date('\\\\L\\\\e d/m/Y à H:i') : '' }}</td>
                </tr>
                <tr>
                    <th>Fin</th>
                    <td>{{ unavailability.endDate ? unavailability.endDate|date('\\\\L\\\\e d/m/Y à H:i') : '' }}</td>
                </tr>
                <tr>
                    <th>Invités</th>
                    <td>
                        {% for guest in unavailability.guests %}
                            {# On désactive le lien vers l'utilisateur s'il n'existe plus #}
                            {% if null == guest.deletedAt %}
                            <a href=\"{{ path('user_show', {'id': guest.id}) }}\">
                                {{ guest.firstName ~ ' ' ~ guest.lastName }}{% if not loop.last %}, {% endif %}
                            </a>
                            {% else %}
                                <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compte supprimé\">
                                    {{ guest.firstName ~ ' ' ~ guest.lastName }}{% if not loop.last %}, {% endif %}
                                </span>
                            {% endif %}
                        {% endfor %}
                    </td>
                </tr>
                {% if is_granted('ROLE_ADMIN') %}
                    <tr>
                        <th>Type</th>
                        <td>{{ unavailability.type == 0 ? 'Réunion' : 'Autre' }}</td>
                    </tr>
                {% endif %}
            </tbody>
        </table>

    </div>

    {% include 'components/_confirm_modal.html.twig' %}

{% endblock %}

{% set modal_message = 'Voulez-vous vraiment supprimer cette réservation ?' %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$('#confirmationMessage').text('{{ modal_message }}');
        \$('.modal-title').text('Supprimer la réservation');
        \$('#form').click(function(e) {
            e.preventDefault();
            \$('#confirmationModal').modal({});

            \$('#confirm').on(\"click\", function () {
                \$('#form').submit();
                \$(\"#confirmationModal\").modal('hide');
            });

            \$(\"#cancel\").on(\"click\", function(){
                \$(\"#confirmationModal\").modal('hide');
            });
        });
    </script>
{% endblock %}

", "unavailability/show.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/unavailability/show.html.twig");
    }
}
