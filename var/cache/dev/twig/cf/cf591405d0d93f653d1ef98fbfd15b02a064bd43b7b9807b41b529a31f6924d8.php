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

/* unavailability/_form.html.twig */
class __TwigTemplate_98976def68fc4bc3986e64c8e445a97f75d393c86e4e672fb608901a09b53b42 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_label' => [$this, 'block_form_label'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "object", [], "any", false, false, false, 3), 'label');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "object", [], "any", false, false, false, 4), 'widget');
        echo "
";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "room", [], "any", false, false, false, 6), 'label');
            echo "
    ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "room", [], "any", false, false, false, 7), 'widget');
            echo "

    ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "type_reservation", [], "any", false, false, false, 9), 'label');
            echo "
    ";
            // line 10
            $this->displayBlock('form_label', $context, $blocks);
            // line 15
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "type_reservation", [], "any", false, false, false, 15), 'widget');
            echo "
    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "organiser", [], "any", false, false, false, 16), 'label');
            echo "
    ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "organiser", [], "any", false, false, false, 17), 'widget');
            echo "

";
        }
        // line 20
        echo "






";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'widget');
        echo "



<button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
    <i class=\"fas fa-check\"></i>
</button>
<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["unavailability"]) || array_key_exists("unavailability", $context) ? $context["unavailability"] : (function () { throw new RuntimeError('Variable "unavailability" does not exist.', 34, $this->source); })()), "room", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\" style=\"color: #fff;\">
    <button type=\"button\" class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Retour\">
        <i class=\"fas fa-chevron-left\"></i>
    </button>
</a>
";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "

  ";
        // line 41
        $this->loadTemplate("unavailability/new_type_reservation.html.twig", "unavailability/_form.html.twig", 41)->display($context);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        echo "
        <div> <button type=\"button\" class=\"btn\" data-toggle=\"modal\" id=\"new_reserve_btn\"><i class=\"fa fa-plus\"></i> </button></div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo " <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <script>
        \$('#new_reserve_btn').on(\"click\", function() {
            \$.ajax({
                url: 'nouvelle-type-reservation.html',
                type: 'POST',
                dataType: 'html',
                success: function(code_html, statut){
                    \$(code_html).appendTo('#modal_form');
                    \$('#new_reserve').modal('show');
                }
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "unavailability/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 44,  165 => 43,  152 => 11,  142 => 10,  130 => 60,  128 => 43,  125 => 42,  123 => 41,  118 => 39,  110 => 34,  100 => 27,  91 => 20,  85 => 17,  81 => 16,  76 => 15,  74 => 10,  70 => 9,  65 => 7,  60 => 6,  58 => 5,  54 => 4,  50 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}

{{ form_label(form.object) }}
{{ form_widget(form.object) }}
{% if is_granted('ROLE_ADMIN')  %}
    {{ form_label(form.room) }}
    {{ form_widget(form.room) }}

    {{ form_label(form.type_reservation) }}
    {%block form_label%}

        <div> <button type=\"button\" class=\"btn\" data-toggle=\"modal\" id=\"new_reserve_btn\"><i class=\"fa fa-plus\"></i> </button></div>

    {%endblock%}
    {{ form_widget(form.type_reservation) }}
    {{ form_label(form.organiser) }}
    {{ form_widget(form.organiser) }}

{% endif %}







{{ form_widget(form) }}



<button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
    <i class=\"fas fa-check\"></i>
</button>
<a href=\"{{ path('room_show', { 'id': unavailability.room.id }) }}\" style=\"color: #fff;\">
    <button type=\"button\" class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Retour\">
        <i class=\"fas fa-chevron-left\"></i>
    </button>
</a>
{{ form_end(form) }}

  {% include 'unavailability/new_type_reservation.html.twig' %}

{% block javascripts %}
 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <script>
        \$('#new_reserve_btn').on(\"click\", function() {
            \$.ajax({
                url: 'nouvelle-type-reservation.html',
                type: 'POST',
                dataType: 'html',
                success: function(code_html, statut){
                    \$(code_html).appendTo('#modal_form');
                    \$('#new_reserve').modal('show');
                }
            });
        });

    </script>
{% endblock %}


", "unavailability/_form.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/unavailability/_form.html.twig");
    }
}
