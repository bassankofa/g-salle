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

/* unavailability/calendar.html.twig */
class __TwigTemplate_bb32b7534029b86369d77643308e1fa0803b33bc2134a86c64c751995c0f18fa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/calendar.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "unavailability/calendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
    <div class=\"jumbotron col-md-9 mx-auto mt-5\">

        
        <div> <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#form-imprimer\"><i class=\"fa fa-print\"></i> </button></div>


        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "            <div class=\"mb-4 py-2 reunionit-addflash\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        ";
        // line 17
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "unavailability/calendar.html.twig", 17)->display($context);
        // line 18
        echo "
    </div>
     
<div id=\"form-imprimer\" class=\"modal hide fade\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" >
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Imprimer période</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    
                </button>
            </div>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_imprimer"]) || array_key_exists("form_imprimer", $context) ? $context["form_imprimer"] : (function () { throw new RuntimeError('Variable "form_imprimer" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_imprimer"]) || array_key_exists("form_imprimer", $context) ? $context["form_imprimer"] : (function () { throw new RuntimeError('Variable "form_imprimer" does not exist.', 33, $this->source); })()), 'widget');
        echo "

            <div class=\"printer\">
      
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn-imprimer\"><i class=\"fa fa-print\"> </i>Imprimer</button>
            </div>
           ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_imprimer"]) || array_key_exists("form_imprimer", $context) ? $context["form_imprimer"] : (function () { throw new RuntimeError('Variable "form_imprimer" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
                 
           
        </div>
    </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 51
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" />
    <style>
        .fc-today {
            background: #45585055 !important;
            /*border: none !important;*/
            /*border-top: 1px solid #ddd !important;*/
            /*font-weight: bold;*/
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 66
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src='";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/fullcalendar/locale/fr.js"), "html", null, true);
        echo "'></script>

    <script type=\"text/javascript\">
     function printer(){
        window.print()
     }
        \$(function () {
            \$('#calendar-holder').fullCalendar({
                locale: 'fr',
                themeSystem: 'bootstrap4',
                header: {
                    left: 'today',
                    center: 'title',
                    right: 'month, basicWeek, basicDay, prev, next'
                },
                lazyFetching: true,
                navLinks: true,
                // Si la largeur de la fenêtre (ou de l'écran) est inférieure à 765px de large,
                // on n'affiche que la journée courante, sinon on affiche le mois courant.
                defaultView: \$(window).width() < 765 ? 'basicDay':'month',
                eventLimit: true,
                eventLimitText: \"de plus\",
                slotDuration: '00:30:00',
                weekends: false,
                minTime: \"";
        // line 92
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\Unavailability::DAY_START"), "html", null, true);
        echo "\",
                maxTime: \"";
        // line 93
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\Unavailability::DAY_END"), "html", null, true);
        echo "\",
                eventSources: [
                    {
                        url: 'fc-load-events',
                        type: 'POST',
                        data: {
                            filters: {
                                \"test\":42
                            }
                        },
                        error: function () {
                            alert('L\\'affichage du calendrier a renvoyé une erreur !');
                        }
                    }
                ]
            });
        });
    </script>

     <script>

var date_debut;
var date_fin;

function dateDebut(val){
    date_debut=val;
}

function dateFin(val){
    date_fin=val;

}
        \$('#btn-imprimer').on(\"click\", function() {
          

            \$.ajax({
                 method: 'POST',
                 url: \"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imprimer-data");
        echo "\",
                 data: {date_debut:date_debut,date_fin :date_fin},
                 success: function(data,dataType,d){

                    window.open('printer-calendrier.html?data='+JSON.stringify(data)+\"&date_debut=\"+date_debut+\"&date_fin=\"+date_fin, '_blank');

                    console.log(data);
                    console.log(dataType);
                    console.log(d);

                    //\$(code_html).appendTo('#modal_form');
                  //  \$('#imprimer').modal('show');
                },
                error:function(error){

                    window.open('printer-calendrier.html?test=2', '_blank');
                }
            })
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "unavailability/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 130,  239 => 93,  235 => 92,  208 => 68,  204 => 67,  199 => 66,  194 => 64,  184 => 63,  164 => 52,  159 => 51,  149 => 50,  129 => 39,  120 => 33,  115 => 31,  100 => 18,  98 => 17,  95 => 16,  86 => 13,  83 => 12,  79 => 11,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block content %}
    
    <div class=\"jumbotron col-md-9 mx-auto mt-5\">

        
        <div> <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#form-imprimer\"><i class=\"fa fa-print\"></i> </button></div>


        {% for message in app.flashes('notice') %}
            <div class=\"mb-4 py-2 reunionit-addflash\">
                {{ message }}
            </div>
        {% endfor %}

        {% include '@FullCalendar/Calendar/calendar.html.twig' %}

    </div>
     
<div id=\"form-imprimer\" class=\"modal hide fade\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" >
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Imprimer période</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    
                </button>
            </div>
            {{ form_start(form_imprimer, {attr: {novalidate: 'novalidate'}}) }}

            {{form_widget(form_imprimer)}}

            <div class=\"printer\">
      
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn-imprimer\"><i class=\"fa fa-print\"> </i>Imprimer</button>
            </div>
           {{ form_end(form_imprimer)}}
                 
           
        </div>
    </div>
</div>



{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}\" />
    <style>
        .fc-today {
            background: #45585055 !important;
            /*border: none !important;*/
            /*border-top: 1px solid #ddd !important;*/
            /*font-weight: bold;*/
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {#<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}\"></script>#}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>
    <script src='{{ asset('bundles/fullcalendar/js/fullcalendar/locale/fr.js') }}'></script>

    <script type=\"text/javascript\">
     function printer(){
        window.print()
     }
        \$(function () {
            \$('#calendar-holder').fullCalendar({
                locale: 'fr',
                themeSystem: 'bootstrap4',
                header: {
                    left: 'today',
                    center: 'title',
                    right: 'month, basicWeek, basicDay, prev, next'
                },
                lazyFetching: true,
                navLinks: true,
                // Si la largeur de la fenêtre (ou de l'écran) est inférieure à 765px de large,
                // on n'affiche que la journée courante, sinon on affiche le mois courant.
                defaultView: \$(window).width() < 765 ? 'basicDay':'month',
                eventLimit: true,
                eventLimitText: \"de plus\",
                slotDuration: '00:30:00',
                weekends: false,
                minTime: \"{{ constant('App\\\\Entity\\\\Unavailability::DAY_START') }}\",
                maxTime: \"{{ constant('App\\\\Entity\\\\Unavailability::DAY_END') }}\",
                eventSources: [
                    {
                        url: 'fc-load-events',
                        type: 'POST',
                        data: {
                            filters: {
                                \"test\":42
                            }
                        },
                        error: function () {
                            alert('L\\'affichage du calendrier a renvoyé une erreur !');
                        }
                    }
                ]
            });
        });
    </script>

     <script>

var date_debut;
var date_fin;

function dateDebut(val){
    date_debut=val;
}

function dateFin(val){
    date_fin=val;

}
        \$('#btn-imprimer').on(\"click\", function() {
          

            \$.ajax({
                 method: 'POST',
                 url: \"{{ path('imprimer-data')}}\",
                 data: {date_debut:date_debut,date_fin :date_fin},
                 success: function(data,dataType,d){

                    window.open('printer-calendrier.html?data='+JSON.stringify(data)+\"&date_debut=\"+date_debut+\"&date_fin=\"+date_fin, '_blank');

                    console.log(data);
                    console.log(dataType);
                    console.log(d);

                    //\$(code_html).appendTo('#modal_form');
                  //  \$('#imprimer').modal('show');
                },
                error:function(error){

                    window.open('printer-calendrier.html?test=2', '_blank');
                }
            })
        });

    </script>
{% endblock %}", "unavailability/calendar.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/unavailability/calendar.html.twig");
    }
}
