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
class __TwigTemplate_850f23d9b8bb53b55e174e2dc0c375879916412b3c19c68e3f0604e930162541 extends \Twig\Template
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
        echo ", votre compte vient d'être créé sur RéunionIT.</h5>

";
        // line 6
        echo "<p>Pour vous connecter, cliquez sur <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">ce lien</a>.</p>

<p>Votre mot de passe provisoire est <strong>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["temporaryPassword"]) || array_key_exists("temporaryPassword", $context) ? $context["temporaryPassword"] : (function () { throw new RuntimeError('Variable "temporaryPassword" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</strong>, veuillez le changer rapidement.</p>

<p>A très vite !</p>

<p>Rémi et Pascal.</p>
";
        // line 14
        echo "<p>
    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/template-gecko.svg")), "html", null, true);
        echo "\">
</p>";
        
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
        return array (  69 => 15,  66 => 14,  58 => 8,  52 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Bravo ! Vous êtes inscrit !</h3>

<h5>Bonjour {{ firstName }}, votre compte vient d'être créé sur RéunionIT.</h5>

{# example, assuming you have a route named \"login\" #}
<p>Pour vous connecter, cliquez sur <a href=\"{{ path('index') }}\">ce lien</a>.</p>

<p>Votre mot de passe provisoire est <strong>{{ temporaryPassword }}</strong>, veuillez le changer rapidement.</p>

<p>A très vite !</p>

<p>Rémi et Pascal.</p>
{# Makes an absolute URL to the /images/logo.png file #}
<p>
    <img src=\"{{ absolute_url(asset('images/template-gecko.svg')) }}\">
</p>", "email/registration.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/email/registration.html.twig");
    }
}
