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
class __TwigTemplate_741280a160dfabd80713302ecfaa5890d2e0dd013b6def965515116cf59279dc extends \Twig\Template
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

        // line 129
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
                    <th>Entité</th>
                    <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 67, $this->source); })()), "entite", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
              
                </tr>
                <tr>
                    <th>Salle</th>
                    <td>
                        ";
        // line 74
        echo "                        ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 74, $this->source); })()), "room", [], "any", false, false, false, 74), "deletedAt", [], "any", false, false, false, 74))) {
            // line 75
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 75, $this->source); })()), "room", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                                ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 76, $this->source); })()), "room", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 79
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 79, $this->source); })()), "room", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
            echo "
                        ";
        }
        // line 81
        echo "                    </td>
                </tr>
                <tr>
                    <th>Début</th>
                    <td>";
        // line 85
        ((twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 85, $this->source); })()), "startDate", [], "any", false, false, false, 85)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 85, $this->source); })()), "startDate", [], "any", false, false, false, 85), "\\L\\e d/m/Y à H:i"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th>Fin</th>
                    <td>";
        // line 89
        ((twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 89, $this->source); })()), "endDate", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 89, $this->source); })()), "endDate", [], "any", false, false, false, 89), "\\L\\e d/m/Y à H:i"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th>Invités</th>
                    <td>
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 94, $this->source); })()), "guests", [], "any", false, false, false, 94));
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
            // line 95
            echo "                            ";
            // line 96
            echo "                            ";
            if ((null == twig_get_attribute($this->env, $this->source, $context["guest"], "deletedAt", [], "any", false, false, false, 96))) {
                // line 97
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["guest"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                echo "\">
                                ";
                // line 98
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["guest"], "firstName", [], "any", false, false, false, 98) . " ") . twig_get_attribute($this->env, $this->source, $context["guest"], "lastName", [], "any", false, false, false, 98)), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 98)) {
                    echo ", ";
                }
                // line 99
                echo "                            </a>
                            ";
            } else {
                // line 101
                echo "                                <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compte supprimé\">
                                    ";
                // line 102
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["guest"], "firstName", [], "any", false, false, false, 102) . " ") . twig_get_attribute($this->env, $this->source, $context["guest"], "lastName", [], "any", false, false, false, 102)), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 102)) {
                    echo ", ";
                }
                // line 103
                echo "                                </span>
                            ";
            }
            // line 105
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
        // line 106
        echo "                    </td>
                </tr>
                 <tr>
                    <th>Etat</th>
                    <td><span class=\"";
        // line 110
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 110, $this->source); })()), "etat", [], "any", false, false, false, 110) == "attente")) ? ("btn btn-warning") : ("btn btn-success"));
        echo "\">
                          ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 111, $this->source); })()), "etat", [], "any", false, false, false, 111), "html", null, true);
        echo "</span></td>
              
                </tr>
                ";
        // line 114
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 115
            echo "                    <tr>
                        <th>Type</th>
                        <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 117, $this->source); })()), "typeReservation", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 120
        echo "            </tbody>
        </table>

    </div>

    ";
        // line 125
        $this->loadTemplate("components/_confirm_modal.html.twig", "unavailability/show.html.twig", 125)->display($context);
        // line 126
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('#confirmationMessage').text('";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["modal_message"]) || array_key_exists("modal_message", $context) ? $context["modal_message"] : (function () { throw new RuntimeError('Variable "modal_message" does not exist.', 134, $this->source); })()), "html", null, true);
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
        return array (  375 => 134,  369 => 132,  359 => 131,  348 => 126,  346 => 125,  339 => 120,  333 => 117,  329 => 115,  327 => 114,  321 => 111,  317 => 110,  311 => 106,  297 => 105,  293 => 103,  288 => 102,  285 => 101,  281 => 99,  276 => 98,  271 => 97,  268 => 96,  266 => 95,  249 => 94,  241 => 89,  234 => 85,  228 => 81,  222 => 79,  216 => 76,  211 => 75,  208 => 74,  199 => 67,  193 => 63,  187 => 60,  184 => 59,  178 => 56,  173 => 55,  170 => 54,  162 => 48,  155 => 43,  149 => 39,  145 => 37,  136 => 31,  131 => 29,  122 => 24,  119 => 23,  117 => 22,  115 => 21,  107 => 16,  103 => 14,  101 => 13,  92 => 6,  82 => 5,  63 => 3,  52 => 1,  50 => 129,  37 => 1,);
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
                    <th>Entité</th>
                    <td>{{ unavailability.entite }}</td>
              
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
                 <tr>
                    <th>Etat</th>
                    <td><span class=\"{{unavailability.etat=='attente'?'btn btn-warning':'btn btn-success'}}\">
                          {{ unavailability.etat }}</span></td>
              
                </tr>
                {% if is_granted('ROLE_ADMIN') %}
                    <tr>
                        <th>Type</th>
                        <td>{{ unavailability.typeReservation.name }}</td>
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
