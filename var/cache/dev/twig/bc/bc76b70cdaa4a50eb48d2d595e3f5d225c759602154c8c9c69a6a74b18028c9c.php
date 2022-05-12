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

/* printer/printer-calendrier.html.twig */
class __TwigTemplate_fe1d35578724949a40086677f7c11bbe4637301be9e3acc96006cbef298cd3da extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "printer/printer-calendrier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "printer/printer-calendrier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "printer/printer-calendrier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    <link rel=\"icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gecko.png"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reunionit-custom.css"), "html", null, true);
        echo "\" />
    <style>
    body{
        font-family: sans-serif;
    }
    .title{
        text-align:center;
        font-size:30px;
        margin-top:3%;
        margin-bottom:3%;
    }
    .logo{
        width:20%;
    }
      table{
         border-collapse: collapse;
         width:100%;
         
    }

        th, td{
        border: 1px solid black;

        
        }
          th{
        padding:10px;
        text-transform : uppercase;
        
        }
        
        
        .separateur{
            background:#0AAA00;
            height:110px;
            width:100%;
            padding-top:111px;
        }
        .vide{
            font-size: 36px;
            color: #eee;
            text-align: center;
            padding-top: 10px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "          <img class=\"logo\" src=\"http://localhost/reunionIT/public/images/logo.png\" alt=\"logo ads\" />
        <div class=\"title\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "
                     <br/>";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["semaine"]) || array_key_exists("semaine", $context) ? $context["semaine"] : (function () { throw new RuntimeError('Variable "semaine" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "
        </div>


        ";
        // line 62
        if (((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 62, $this->source); })()) == null)) {
            // line 63
            echo "           <div class=\"vide\"> calendrier Vide </div>
        ";
        } else {
            // line 65
            echo "                    ";
            // line 66
            echo "



            <table class=\"table\">
            <thead>
            <tr>
                    <th class=\"header\">Jour</th>
                    <th>Heure</th>
                    <th>entite</th>
                    <th>responsable/demandeur</th>
                    <th>Objet</th>
                    <th>participants</th>
            </tr>
            </thead>
            <tbody>
            
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unavailabilities_pager"]) || array_key_exists("unavailabilities_pager", $context) ? $context["unavailabilities_pager"] : (function () { throw new RuntimeError('Variable "unavailabilities_pager" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
                // line 84
                echo "                    <tr>
                    <td style=\"text-transform:uppercase\"> 
                         ";
                // line 86
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "start_date", [], "any", false, false, false, 86)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "start_date", [], "any", false, false, false, 86), "medium", "medium", "EEEE", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
                echo "

                     </td>
                    <td>";
                // line 89
                ((twig_get_attribute($this->env, $this->source, $context["unavailability"], "start_date", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "start_date", [], "any", false, false, false, 89), "H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>  ";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "entite", [], "any", false, false, false, 90), "html", null, true);
                echo "</td>
                    <td> ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "orga_firstname", [], "any", false, false, false, 91), "html", null, true);
                echo "</td>
                    <td> ";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "object", [], "any", false, false, false, 92), "html", null, true);
                echo "</td>
                    <td> ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unavailability"], "guest", [], "any", false, false, false, 93), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                   
                
            

            </tbody>

            </table>
            

        ";
        }
        // line 106
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
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
        return "printer/printer-calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 112,  261 => 110,  251 => 109,  240 => 106,  228 => 96,  219 => 93,  215 => 92,  211 => 91,  207 => 90,  203 => 89,  197 => 86,  193 => 84,  189 => 83,  170 => 66,  168 => 65,  164 => 63,  162 => 62,  155 => 58,  151 => 57,  148 => 56,  138 => 55,  82 => 8,  77 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}

    <link rel=\"icon\" href=\"{{ asset('images/gecko.png') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/reunionit-custom.css') }}\" />
    <style>
    body{
        font-family: sans-serif;
    }
    .title{
        text-align:center;
        font-size:30px;
        margin-top:3%;
        margin-bottom:3%;
    }
    .logo{
        width:20%;
    }
      table{
         border-collapse: collapse;
         width:100%;
         
    }

        th, td{
        border: 1px solid black;

        
        }
          th{
        padding:10px;
        text-transform : uppercase;
        
        }
        
        
        .separateur{
            background:#0AAA00;
            height:110px;
            width:100%;
            padding-top:111px;
        }
        .vide{
            font-size: 36px;
            color: #eee;
            text-align: center;
            padding-top: 10px;
        }
    </style>
{% endblock %}
      
{% block body %}
          <img class=\"logo\" src=\"http://localhost/reunionIT/public/images/logo.png\" alt=\"logo ads\" />
        <div class=\"title\">{{ title }}
                     <br/>{{ semaine }}
        </div>


        {% if unavailabilities_pager == null %}
           <div class=\"vide\"> calendrier Vide </div>
        {% else %}
                    {# ./templates/printer/printer-calendrier.html.twig #}




            <table class=\"table\">
            <thead>
            <tr>
                    <th class=\"header\">Jour</th>
                    <th>Heure</th>
                    <th>entite</th>
                    <th>responsable/demandeur</th>
                    <th>Objet</th>
                    <th>participants</th>
            </tr>
            </thead>
            <tbody>
            
                {% for unavailability in unavailabilities_pager %}
                    <tr>
                    <td style=\"text-transform:uppercase\"> 
                         {{ unavailability.start_date  ? unavailability.start_date  |format_datetime(locale='fr',pattern=\"EEEE\") }}

                     </td>
                    <td>{{unavailability.start_date ? unavailability.start_date|date('H:i') : ''}}</td>
                    <td>  {{unavailability.entite}}</td>
                    <td> {{unavailability.orga_firstname}}</td>
                    <td> {{unavailability.object}}</td>
                    <td> {{unavailability.guest}}</td>
                    </tr>
                    {% endfor %}
                   
                
            

            </tbody>

            </table>
            

        {% endif %}

{% endblock %}

{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
{% endblock %}
", "printer/printer-calendrier.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/printer/printer-calendrier.html.twig");
    }
}
