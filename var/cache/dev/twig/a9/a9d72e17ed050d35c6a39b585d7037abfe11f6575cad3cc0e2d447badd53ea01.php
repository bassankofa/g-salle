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

/* user/edit.html.twig */
class __TwigTemplate_713206a02c5dd6ab808a347f4b8b4c1b8add9a23c400c04010725f2b0b547604 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 37
        $context["modal_message"] = (((("Voulez-vous vraiment supprimer le compte de " . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "firstName", [], "any", false, false, false, 37)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37)) . " ?");
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "unavailabilities", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
            // line 40
            if ((twig_date_converter($this->env) < twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 40))) {
                // line 41
                $context["modal_message"] = (((("Au moins une réunion à venir est organisée par " . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "firstName", [], "any", false, false, false, 41)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "lastName", [], "any", false, false, false, 41)) . ". Si vous supprimez son compte, ces réunions seront également supprimées.");
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/edit.html.twig", 1);
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

        echo "Modifier le profil";
        
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
    <div class=\"jumbotron col-md-6 mx-auto mt-4\">

        <h1>Modifier le profil</h1>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'widget');
        echo "
        <button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
            <i class=\"fas fa-check\"></i>
        </button>
        <button type=\"button\" class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Retour\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" style=\"color: #fff;\"><i class=\"fas fa-chevron-left\"></i></a>
        </button>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "

        ";
        // line 21
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21))) {
            // line 22
            echo "            <form id=\"form\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" style=\"position: relative;float: right;bottom: 38px;\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24))), "html", null, true);
            echo "\">
                <button class=\"btn btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\">
                    <i class=\"fas fa-trash-alt\"></i>
                </button>
            </form>
        ";
        }
        // line 30
        echo "
    </div>

    ";
        // line 33
        $this->loadTemplate("components/_confirm_modal.html.twig", "user/edit.html.twig", 33)->display($context);
        // line 34
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('#confirmationMessage').text('";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["modal_message"]) || array_key_exists("modal_message", $context) ? $context["modal_message"] : (function () { throw new RuntimeError('Variable "modal_message" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "');
        \$('.modal-title').text('Avertissement');
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

        // Customisation des boutons radio
        \$('.form-check').addClass('custom-control custom-radio');
        \$('.form-check-input').addClass('custom-control-input');
        \$('.form-check-label').addClass('custom-control-label');
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 48,  179 => 46,  169 => 45,  158 => 34,  156 => 33,  151 => 30,  142 => 24,  136 => 22,  134 => 21,  129 => 19,  124 => 17,  116 => 12,  112 => 11,  105 => 6,  95 => 5,  76 => 3,  65 => 1,  58 => 41,  56 => 40,  52 => 39,  50 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Modifier le profil{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-6 mx-auto mt-4\">

        <h1>Modifier le profil</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
            <i class=\"fas fa-check\"></i>
        </button>
        <button type=\"button\" class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Retour\">
            <a href=\"{{ path('user_index') }}\" style=\"color: #fff;\"><i class=\"fas fa-chevron-left\"></i></a>
        </button>
        {{ form_end(form) }}

        {% if user != app.user %}
            <form id=\"form\" method=\"post\" action=\"{{ path('user_delete', {'id': user.id}) }}\" style=\"position: relative;float: right;bottom: 38px;\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                <button class=\"btn btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\">
                    <i class=\"fas fa-trash-alt\"></i>
                </button>
            </form>
        {% endif %}

    </div>

    {% include 'components/_confirm_modal.html.twig' %}

{% endblock %}

{% set modal_message = 'Voulez-vous vraiment supprimer le compte de ' ~ user.firstName ~ ' ' ~ user.lastName ~ ' ?' %}

{% for unavailability in user.unavailabilities %}
    {% if date() < unavailability.startDate %}
        {% set modal_message = 'Au moins une réunion à venir est organisée par ' ~ user.firstName ~ ' ' ~ user.lastName ~ '. Si vous supprimez son compte, ces réunions seront également supprimées.' %}
    {% endif %}
{% endfor %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$('#confirmationMessage').text('{{ modal_message }}');
        \$('.modal-title').text('Avertissement');
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

        // Customisation des boutons radio
        \$('.form-check').addClass('custom-control custom-radio');
        \$('.form-check-input').addClass('custom-control-input');
        \$('.form-check-label').addClass('custom-control-label');
    </script>
{% endblock %}
", "user/edit.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/user/edit.html.twig");
    }
}
