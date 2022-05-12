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

/* email/registration.html.twig */
class __TwigTemplate_ab361eab4aeb3647be7649b90eff6b4689af68e9cf0c6b0241e777f6f98e7045 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        // line 1
        echo "<h3>Bravo ! Vous êtes inscrit !</h3>

<h5>Bonjour ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 3, $this->source); })()), "html", null, true);
        echo ", votre compte vient d'être créé sur G-salle de réunion.</h5>

";
        // line 6
        echo "<p>Pour vous connecter, cliquez sur <a href=\"http://reserversalle.sambabathily.com/\" target=\"_blank\">ce lien</a>.</p>

<p>Votre mot de passe provisoire est <strong>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["temporaryPassword"]) || array_key_exists("temporaryPassword", $context) ? $context["temporaryPassword"] : (function () { throw new RuntimeError('Variable "temporaryPassword" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</strong>, veuillez le changer rapidement.</p>

<p>A très vite !</p>

<p style=\"padding-top:30%\"><span style='font-size: 9.0pt; font-family: \"Arial\",sans-serif; color: #002060'>Emma Gomis</span></p>

<p> <span style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Gestionnaire des Affaires Administratives</span></p>

<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Adresse : Immeuble Rivonia 11 ème étage, Plateau,Dakar</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'><a href=\"mailto:office.manager@adsglobalcorp.com\">Email : office.manager@adsglobalcorp.com</a></p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Tel | Whatsapp  : +221 77 353 35 74</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Site web : www.adsglobalcorp.com</p>
";
        // line 21
        echo "<p>
    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\"    width=\"1.325in\" height=\"0.2916in\">
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  71 => 21,  56 => 8,  52 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Bravo ! Vous êtes inscrit !</h3>

<h5>Bonjour {{ firstName }}, votre compte vient d'être créé sur G-salle de réunion.</h5>

{# example, assuming you have a route named \"login\" {{path('index')}} #}
<p>Pour vous connecter, cliquez sur <a href=\"http://reserversalle.sambabathily.com/\" target=\"_blank\">ce lien</a>.</p>

<p>Votre mot de passe provisoire est <strong>{{ temporaryPassword }}</strong>, veuillez le changer rapidement.</p>

<p>A très vite !</p>

<p style=\"padding-top:30%\"><span style='font-size: 9.0pt; font-family: \"Arial\",sans-serif; color: #002060'>Emma Gomis</span></p>

<p> <span style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Gestionnaire des Affaires Administratives</span></p>

<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Adresse : Immeuble Rivonia 11 ème étage, Plateau,Dakar</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'><a href=\"mailto:office.manager@adsglobalcorp.com\">Email : office.manager@adsglobalcorp.com</a></p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Tel | Whatsapp  : +221 77 353 35 74</p>
<p style='font-size: 9.0pt;font-family: \"Arial\",sans-serif;color: #7F7F7F;'>Site web : www.adsglobalcorp.com</p>
{# Makes an absolute URL to the /images/logo.png file #}
<p>
    <img src=\"{{ absolute_url(asset('images/logo.png')) }}\"    width=\"1.325in\" height=\"0.2916in\">
</p>
", "email/registration.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/email/registration.html.twig");
    }
}
