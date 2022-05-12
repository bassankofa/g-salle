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

/* email/unavailability_new_guest.html.twig */
class __TwigTemplate_8bbd9782efc503e57b5de14b7ff4ebbdf9244cf05cc05666456750b53ad91b8b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/unavailability_new_guest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/unavailability_new_guest.html.twig"));

        // line 1
        echo "<p>Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 1, $this->source); })()), "firstName", [], "any", false, false, false, 1), "html", null, true);
        echo ", vous avez reçu une invitation de la part de ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "organiser", [], "any", false, false, false, 1), "firstName", [], "any", false, false, false, 1) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "organiser", [], "any", false, false, false, 1), "lastName", [], "any", false, false, false, 1)), "html", null, true);
        echo ".</p>

<p>La réunion est prévue le ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "startDate", [], "any", false, false, false, 3), "d/m/Y", "Africa/Dakar"), "html", null, true);
        echo " en salle ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "room", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo ". Vous pouvez la visualiser à tout moment sur <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)])), "html", null, true);
        echo "\">ce lien</a>.</p>



<p><span style='font-size: 9.0pt; font-family: \"Arial\",sans-serif; color: #002060'>Emma Gomis</span></p>

<p> <span style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Gestionnaire des Affaires Administratives</span></p>

<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Adresse : Immeuble Rivonia 11 ème étage, Plateau,Dakar</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'><a href=\"mailto:office.manager@adsglobalcorp.com\">Email : office.manager@adsglobalcorp.com</a></p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Tel | Whatsapp  : +221 77 353 35 74</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Site web : www.adsglobalcorp.com</p>
";
        // line 16
        echo "<p>
    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\"    width=\"1.325in\" height=\"0.2916in\">
</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/unavailability_new_guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  70 => 16,  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Bonjour {{ guest.firstName }}, vous avez reçu une invitation de la part de {{ data.organiser.firstName ~ ' ' ~ data.organiser.lastName }}.</p>

<p>La réunion est prévue le {{ data.startDate|date('d/m/Y', \"Africa/Dakar\") }} en salle {{ data.room.name }}. Vous pouvez la visualiser à tout moment sur <a href=\"{{ absolute_url(path('unavailability_show', {'id':data.id})) }}\">ce lien</a>.</p>



<p><span style='font-size: 9.0pt; font-family: \"Arial\",sans-serif; color: #002060'>Emma Gomis</span></p>

<p> <span style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Gestionnaire des Affaires Administratives</span></p>

<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Adresse : Immeuble Rivonia 11 ème étage, Plateau,Dakar</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'><a href=\"mailto:office.manager@adsglobalcorp.com\">Email : office.manager@adsglobalcorp.com</a></p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Tel | Whatsapp  : +221 77 353 35 74</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Site web : www.adsglobalcorp.com</p>
{# Makes an absolute URL to the /images/logo.png file #}
<p>
    <img src=\"{{ absolute_url(asset('images/logo.png')) }}\"    width=\"1.325in\" height=\"0.2916in\">
</p>", "email/unavailability_new_guest.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/email/unavailability_new_guest.html.twig");
    }
}
