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

/* user/show.html.twig */
class __TwigTemplate_4b44eb0648c057dcf73c3fa5964170c24b04be71537cecbcda985d9555899cb3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        // line 101
        $context["modal_message"] = (((("Voulez-vous vraiment supprimer le compte de " . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "firstName", [], "any", false, false, false, 101)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "lastName", [], "any", false, false, false, 101)) . " ?");
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "unavailabilities", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
            // line 104
            if ((twig_date_converter($this->env) < twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 104))) {
                // line 105
                $context["message"] = (((("Des réunions à venir sont organisées par " . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "firstName", [], "any", false, false, false, 105)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "lastName", [], "any", false, false, false, 105)) . ". Si vous supprimez son compte, ces réunions seront également supprimées.");
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstName", [], "any", false, false, false, 3) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3)), "html", null, true);
        
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <div class=\"mb-4 py-2 reunionit-addflash\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        <div class=\"row\">
            <h1 class=\"mr-auto\">";
        // line 16
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "lastName", [], "any", false, false, false, 16)), "html", null, true);
        echo "</h1>

            ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
            // line 19
            echo "            <div class=\"btn-group\" role=\"group\">
                ";
            // line 20
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 21
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\" style=\"color: #fff;\">
                        <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </button>
                    </a>
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" style=\"color: #fff;\">
                        <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;margin-left: 5px;\">
                            <i class=\"fas fa-edit\"></i>
                        </button>
                    </a>
                    ";
                // line 31
                if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                        <form id=\"form\" method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
                    echo "\" style=\"display: inline-block;\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34))), "html", null, true);
                    echo "\">
                            <button class=\"btn btn-warning\" style=\"width: 45px;margin-left: 5px;\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </form>
                    ";
                }
                // line 40
                echo "                ";
            }
            // line 41
            echo "            </div>
            ";
        }
        // line 43
        echo "        </div>
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>
                        Qualité
                    </th>
                    <td>
                        ";
        // line 51
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "roles", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('role_format')->getCallable(), [twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "roles", [], "any", false, false, false, 51), ", ")]), "html", null, true))) : (print ("")));
        echo "
                    </td>
                </tr>
                <tr>
                    <th>
                        Email
                    </th>
                    <td>
                        <a href=\"mailto:";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
                            ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), "html", null, true);
        echo "
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>
                        Téléphone
                    </th>
                    <td>
                        Non renseigné
                    </td>
                </tr>
                <tr>
                    <th>
                        Service
                    </th>
                    <td>
                        Non renseigné
                    </td>
                </tr>
                <tr>
                    <th>
                        Dernière connexion
                    </th>
                    <td>
                        Non renseigné
                    </td>
                </tr>
            </tbody>
        </table>

        ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91))) {
            // line 92
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("password_change");
            echo "\" class=\"btn btn-primary\">Mettre à jour mon mot de passe</a>
        ";
        }
        // line 94
        echo "
    </div>

    ";
        // line 97
        $this->loadTemplate("components/_confirm_modal.html.twig", "user/show.html.twig", 97)->display($context);
        // line 98
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('#confirmationMessage').text('";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["modal_message"]) || array_key_exists("modal_message", $context) ? $context["modal_message"] : (function () { throw new RuntimeError('Variable "modal_message" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "');
        \$('.modal-title').text('Supprimer le compte');
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

        ";
        // line 130
        echo "            ";
        // line 131
        echo "            ";
        // line 132
        echo "                ";
        // line 133
        echo "                ";
        // line 134
        echo "                ";
        // line 135
        echo "                ";
        // line 136
        echo "                    ";
        // line 137
        echo "                    ";
        // line 138
        echo "                        ";
        // line 139
        echo "                            ";
        // line 140
        echo "                        ";
        // line 141
        echo "                    ";
        // line 142
        echo "                ";
        // line 143
        echo "                ";
        // line 144
        echo "                    ";
        // line 145
        echo "                ";
        // line 146
        echo "            ";
        // line 147
        echo "        ";
        // line 148
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 148,  337 => 147,  335 => 146,  333 => 145,  331 => 144,  329 => 143,  327 => 142,  325 => 141,  323 => 140,  321 => 139,  319 => 138,  317 => 137,  315 => 136,  313 => 135,  311 => 134,  309 => 133,  307 => 132,  305 => 131,  303 => 130,  284 => 113,  278 => 111,  268 => 110,  257 => 98,  255 => 97,  250 => 94,  244 => 92,  242 => 91,  208 => 60,  204 => 59,  193 => 51,  183 => 43,  179 => 41,  176 => 40,  167 => 34,  161 => 32,  159 => 31,  151 => 26,  142 => 21,  140 => 20,  137 => 19,  135 => 18,  130 => 16,  126 => 14,  117 => 11,  114 => 10,  110 => 9,  105 => 6,  95 => 5,  76 => 3,  65 => 1,  58 => 105,  56 => 104,  52 => 103,  50 => 101,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}{{ user.firstName ~' '~ user.lastName }}{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        {% for message in app.flashes('notice') %}
            <div class=\"mb-4 py-2 reunionit-addflash\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"row\">
            <h1 class=\"mr-auto\">{{ user.firstName ~' '~ user.lastName }}</h1>

            {% if is_granted('ROLE_EMPLOYEE') %}
            <div class=\"btn-group\" role=\"group\">
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('user_index') }}\" style=\"color: #fff;\">
                        <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </button>
                    </a>
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\" style=\"color: #fff;\">
                        <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;margin-left: 5px;\">
                            <i class=\"fas fa-edit\"></i>
                        </button>
                    </a>
                    {% if user != app.user %}
                        <form id=\"form\" method=\"post\" action=\"{{ path('user_delete', {'id': user.id}) }}\" style=\"display: inline-block;\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
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
                    <th>
                        Qualité
                    </th>
                    <td>
                        {{ user.roles ? user.roles|join(', ') |role_format : '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Email
                    </th>
                    <td>
                        <a href=\"mailto:{{ user.email }}\">
                            {{ user.email }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>
                        Téléphone
                    </th>
                    <td>
                        Non renseigné
                    </td>
                </tr>
                <tr>
                    <th>
                        Service
                    </th>
                    <td>
                        Non renseigné
                    </td>
                </tr>
                <tr>
                    <th>
                        Dernière connexion
                    </th>
                    <td>
                        Non renseigné
                    </td>
                </tr>
            </tbody>
        </table>

        {% if user.id == app.user.id %}
            <a href=\"{{ path('password_change') }}\" class=\"btn btn-primary\">Mettre à jour mon mot de passe</a>
        {% endif %}

    </div>

    {% include 'components/_confirm_modal.html.twig' %}

{% endblock %}

{% set modal_message = 'Voulez-vous vraiment supprimer le compte de ' ~ user.firstName ~ ' ' ~ user.lastName ~ ' ?' %}

{% for unavailability in user.unavailabilities %}
    {% if date() < unavailability.startDate %}
        {% set message = 'Des réunions à venir sont organisées par ' ~ user.firstName ~ ' ' ~ user.lastName ~
            '. Si vous supprimez son compte, ces réunions seront également supprimées.' %}
    {% endif %}
{% endfor %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$('#confirmationMessage').text('{{ modal_message }}');
        \$('.modal-title').text('Supprimer le compte');
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

        {#\$('#form').click(function(e) {#}
            {#e.preventDefault();#}
            {#\$.ajax({#}
                {#method: 'POST',#}
                {#url: '{{ path('user_delete_confirm', { 'id': user.id }) }}',#}
                {#data: \$('#form').serialize(),#}
                {#success: function (data) {#}
                    {#console.log(data);#}
                    {#if (data.ask) {#}
                        {#if (confirm('{{ message }}')) {#}
                            {#\$('#form').submit();#}
                        {#}#}
                    {#}#}
                {#},#}
                {#fail: function() {#}
                    {#alert('error');#}
                {#}#}
            {#});#}
        {#});#}
    </script>
{% endblock %}
", "user/show.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/user/show.html.twig");
    }
}
