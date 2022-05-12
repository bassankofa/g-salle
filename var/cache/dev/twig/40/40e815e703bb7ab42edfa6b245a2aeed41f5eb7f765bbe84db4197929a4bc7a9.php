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

/* email/unavailability_delete.html.twig */
class __TwigTemplate_5ebb825646eaba790cca9f629460eb2201803604b216702e6f45cc9dea6ba5d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/unavailability_delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/unavailability_delete.html.twig"));

        // line 1
        echo "<p>Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "organiser", [], "any", false, false, false, 1), "firstName", [], "any", false, false, false, 1), "html", null, true);
        echo ", votre réservation de la salle ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "room", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "startDate", [], "any", false, false, false, 1), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo " a été annulée.</p>

<p>A très vite !</p>

<p><span style='font-size: 9.0pt; font-family: \"Arial\",sans-serif; color: #002060'>Emma Gomis</span></p>

<p> <span style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Gestionnaire des Affaires Administratives</span></p>

<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Adresse : Immeuble Rivonia 11 ème étage, Plateau,Dakar</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'><a href=\"mailto:office.manager@adsglobalcorp.com\">Email : office.manager@adsglobalcorp.com</a></p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Tel | Whatsapp  : +221 77 353 35 74</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Site web : www.adsglobalcorp.com</p>
";
        // line 14
        echo "<p>
    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\"    width=\"1.325in\" height=\"0.2916in\">
</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/unavailability_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  63 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Bonjour {{ data.organiser.firstName }}, votre réservation de la salle {{ data.room.name }} le {{ data.startDate|date('d/m/Y', \"Europe/Paris\") }} a été annulée.</p>

<p>A très vite !</p>

<p><span style='font-size: 9.0pt; font-family: \"Arial\",sans-serif; color: #002060'>Emma Gomis</span></p>

<p> <span style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Gestionnaire des Affaires Administratives</span></p>

<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Adresse : Immeuble Rivonia 11 ème étage, Plateau,Dakar</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'><a href=\"mailto:office.manager@adsglobalcorp.com\">Email : office.manager@adsglobalcorp.com</a></p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Tel | Whatsapp  : +221 77 353 35 74</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Site web : www.adsglobalcorp.com</p>
{# Makes an absolute URL to the /images/logo.png file #}
<p>
    <img src=\"{{ absolute_url(asset('images/logo.png')) }}\"    width=\"1.325in\" height=\"0.2916in\">
</p>", "email/unavailability_delete.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/email/unavailability_delete.html.twig");
    }
}
