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

/* room/edit.html.twig */
class __TwigTemplate_129973fa0c136f3b1fc16d1faf73ac4d283b0149478765b10a98ec29c9af5a02 extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/edit.html.twig"));

        // line 68
        $context["modal_message"] = (("Voulez-vous vraiment supprimer la salle " . twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68)) . " ?");
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 70, $this->source); })()), "unavailabilities", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
            // line 72
            if ((twig_date_converter($this->env) < twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 72))) {
                // line 73
                $context["modal_message"] = (("Des réunions à venir sont organisées dans la salle " . twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73)) . ". Si vous la supprimez, ces réunions seront également supprimées.");
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "room/edit.html.twig", 1);
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

        echo "Salle ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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

        <h1>Modifier la salle ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row');
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "capacity", [], "any", false, false, false, 15), 'row');
        echo "

        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "features", [], "any", false, false, false, 17), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "features", [], "any", false, false, false, 20), 'label');
        echo "
            ";
        // line 21
        $context["salle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21);
        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "features", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 23
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["feature"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>

        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "picture", [], "any", false, false, false, 27), 'row');
        echo "

        <button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
            <i class=\"fas fa-check\"></i>
        </button>
        <button type=\"button\" class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Retour\">
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
        echo "\" style=\"color: #fff;\">
                <i class=\"fas fa-chevron-left\"></i>
            </a>
        </button>

        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "

        <form id=\"form\" method=\"post\"
              action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\"
              style=\"position: relative;float: right;bottom: 38px;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44))), "html", null, true);
        echo "\">
            <button class=\"btn btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\">
                <i class=\"fas fa-trash-alt\"></i>
            </button>
        </form>

    </div>

    ";
        // line 52
        $this->loadTemplate("components/_confirm_modal.html.twig", "room/edit.html.twig", 52)->display($context);
        // line 53
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 57
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css\" integrity=\"sha256-Kq686ftxGamHGd8MpwJXmYgk1s7m00maEfHX1VpKYP8=\" crossorigin=\"anonymous\" />
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <style>
        /* On empêche Bootstrap d'afficher le bouton File Input dans le bloc Dropify */
        .custom-file-label {
            display: none;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js\" integrity=\"sha256-SUaao5Q7ifr2twwET0iyXVy0OVnuFJhGVi5E/dqEiLU=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script>
        \$('.dropify').dropify({
            messages: {
                default: 'Glissez-d&eacute;posez un fichier ici ou cliquez',
                replace: 'Glissez-d&eacute;posez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'D&eacute;sol&eacute;, le fichier est trop volumineux'
            }
        });

        \$('#confirmationMessage').text('";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["modal_message"]) || array_key_exists("modal_message", $context) ? $context["modal_message"] : (function () { throw new RuntimeError('Variable "modal_message" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "');
        \$('.modal-title').text('Supprimer la salle');
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

        // Customisation des checkboxes
        \$('.form-check').addClass('custom-control custom-checkbox');
        \$('.form-check-input').addClass('custom-control-input');
        \$('.form-check-label').addClass('custom-control-label');
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 93,  256 => 80,  246 => 79,  225 => 57,  215 => 56,  204 => 53,  202 => 52,  191 => 44,  185 => 41,  179 => 38,  171 => 33,  162 => 27,  158 => 25,  149 => 23,  144 => 22,  142 => 21,  138 => 20,  132 => 17,  127 => 15,  122 => 13,  117 => 11,  112 => 9,  107 => 6,  97 => 5,  77 => 3,  66 => 1,  59 => 73,  57 => 72,  53 => 70,  51 => 68,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Salle {{ room.name }}{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-6 mx-auto mt-4\">

        <h1>Modifier la salle {{ room.name }}</h1>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        {{ form_row(form.name) }}

        {{ form_row(form.capacity) }}

        {{ form_errors(form.features) }}

        <div class=\"form-group\">
            {{ form_label(form.features) }}
            {% set salle = form.vars.value %}
            {% for feature in form.features %}
                {{ form_widget(feature) }}
            {% endfor %}
        </div>

        {{ form_row(form.picture) }}

        <button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
            <i class=\"fas fa-check\"></i>
        </button>
        <button type=\"button\" class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Retour\">
            <a href=\"{{ path('room_index') }}\" style=\"color: #fff;\">
                <i class=\"fas fa-chevron-left\"></i>
            </a>
        </button>

        {{ form_end(form) }}

        <form id=\"form\" method=\"post\"
              action=\"{{ path('room_delete', {'id': room.id}) }}\"
              style=\"position: relative;float: right;bottom: 38px;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ room.id) }}\">
            <button class=\"btn btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\">
                <i class=\"fas fa-trash-alt\"></i>
            </button>
        </form>

    </div>

    {% include 'components/_confirm_modal.html.twig' %}

{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css\" integrity=\"sha256-Kq686ftxGamHGd8MpwJXmYgk1s7m00maEfHX1VpKYP8=\" crossorigin=\"anonymous\" />
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <style>
        /* On empêche Bootstrap d'afficher le bouton File Input dans le bloc Dropify */
        .custom-file-label {
            display: none;
        }
    </style>
{% endblock %}

{% set modal_message = 'Voulez-vous vraiment supprimer la salle ' ~ room.name ~ ' ?' %}

{% for unavailability in room.unavailabilities %}

    {% if date() < unavailability.startDate %}
        {% set modal_message = 'Des réunions à venir sont organisées dans la salle ' ~ room.name ~
            '. Si vous la supprimez, ces réunions seront également supprimées.' %}
    {% endif %}

{% endfor %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js\" integrity=\"sha256-SUaao5Q7ifr2twwET0iyXVy0OVnuFJhGVi5E/dqEiLU=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script>
        \$('.dropify').dropify({
            messages: {
                default: 'Glissez-d&eacute;posez un fichier ici ou cliquez',
                replace: 'Glissez-d&eacute;posez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'D&eacute;sol&eacute;, le fichier est trop volumineux'
            }
        });

        \$('#confirmationMessage').text('{{ modal_message }}');
        \$('.modal-title').text('Supprimer la salle');
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

        // Customisation des checkboxes
        \$('.form-check').addClass('custom-control custom-checkbox');
        \$('.form-check-input').addClass('custom-control-input');
        \$('.form-check-label').addClass('custom-control-label');
    </script>
{% endblock %}

", "room/edit.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/room/edit.html.twig");
    }
}
