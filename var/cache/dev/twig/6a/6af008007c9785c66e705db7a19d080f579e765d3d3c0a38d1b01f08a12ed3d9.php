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

/* user/index.html.twig */
class __TwigTemplate_ca30dd2055c60a21d74fcf2daa03d8ba5fb9a50d2ba61f85c69bb6911bd5dd28 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "user/index.html.twig", 1);
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

        echo "Membres";
        
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
        echo "    <div class=\"jumbotron col-md-9 mx-auto mt-4\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"mb-4 py-2 reunionit-addflash\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        <div class=\"row\">
            <h1 class=\"col-sm-10\">Utilisateurs</h1>

            <div class=\"col-sm-2\">
                <a class=\"text-white\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">
                    <button class=\"btn btn-info float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ajouter un membre\">
                        <i class=\"fas fa-user-plus\"></i>
                    </button>
                </a>
            </div>
        </div>

        <div class=\"pagerfanta\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Qualité</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 36
        if ((isset($context["user_pager"]) || array_key_exists("user_pager", $context) ? $context["user_pager"] : (function () { throw new RuntimeError('Variable "user_pager" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_pager"]) || array_key_exists("user_pager", $context) ? $context["user_pager"] : (function () { throw new RuntimeError('Variable "user_pager" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 38
                echo "                    <tr>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                        <td>";
                // line 42
                echo ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 42)) ? (call_user_func_array($this->env->getFilter('role_formatPicto')->getCallable(), [twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 42), ", ")])) : (""));
                echo "</td>
                        <td class=\"last-column\">
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                                <i class=\"far fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\"></i>
                            </a>
                            <a class=\"ml-2\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">
                                <i class=\"fas fa-user-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer\"></i>
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                ";
        } else {
            // line 54
            echo "                    <tr>
                        <td colspan=\"7\">Aucun utilisateur enregistré.</td>
                    </tr>
                ";
        }
        // line 58
        echo "                </tbody>
            </table>
            ";
        // line 60
        if (((isset($context["user_pager"]) || array_key_exists("user_pager", $context) ? $context["user_pager"] : (function () { throw new RuntimeError('Variable "user_pager" does not exist.', 60, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["user_pager"]) || array_key_exists("user_pager", $context) ? $context["user_pager"] : (function () { throw new RuntimeError('Variable "user_pager" does not exist.', 60, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 60))) {
            // line 61
            echo "                ";
            echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta((isset($context["user_pager"]) || array_key_exists("user_pager", $context) ? $context["user_pager"] : (function () { throw new RuntimeError('Variable "user_pager" does not exist.', 61, $this->source); })()), "reunion_it");
            echo "
            ";
        }
        // line 63
        echo "        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 69,  216 => 68,  203 => 63,  197 => 61,  195 => 60,  191 => 58,  185 => 54,  182 => 53,  170 => 47,  164 => 44,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  144 => 38,  139 => 37,  137 => 36,  114 => 16,  108 => 12,  99 => 9,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Membres{% endblock %}

{% block content %}
    <div class=\"jumbotron col-md-9 mx-auto mt-4\">
        {% for message in app.flashes('notice') %}
            <div class=\"mb-4 py-2 reunionit-addflash\">
                {{ message }}
            </div>
        {% endfor %}
        <div class=\"row\">
            <h1 class=\"col-sm-10\">Utilisateurs</h1>

            <div class=\"col-sm-2\">
                <a class=\"text-white\" href=\"{{ path('user_new') }}\">
                    <button class=\"btn btn-info float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ajouter un membre\">
                        <i class=\"fas fa-user-plus\"></i>
                    </button>
                </a>
            </div>
        </div>

        <div class=\"pagerfanta\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Qualité</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% if user_pager %}
                {% for user in user_pager %}
                    <tr>
                        <td>{{ user.lastName }}</td>
                        <td>{{ user.firstName }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.roles ? user.roles|join(', ')|role_formatPicto : '' }}</td>
                        <td class=\"last-column\">
                            <a href=\"{{ path('user_show', {'id': user.id}) }}\" style=\"text-decoration: none;\">
                                <i class=\"far fa-eye\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\"></i>
                            </a>
                            <a class=\"ml-2\" href=\"{{ path('user_edit', {'id': user.id}) }}\">
                                <i class=\"fas fa-user-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer\"></i>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
                {% else %}
                    <tr>
                        <td colspan=\"7\">Aucun utilisateur enregistré.</td>
                    </tr>
                {% endif %}
                </tbody>
            </table>
            {% if user_pager and user_pager.haveToPaginate %}
                {{ pagerfanta(user_pager, 'reunion_it') }}
            {% endif %}
        </div>

    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
{% endblock %}
", "user/index.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/user/index.html.twig");
    }
}
