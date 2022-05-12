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

/* unavailability/new_type_reservation.html.twig */
class __TwigTemplate_1769a50ca3ba5eeb33339d4245f72c7b7ea2110796756c2ab2fccaff0d3ecfa5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/new_type_reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unavailability/new_type_reservation.html.twig"));

        // line 1
        echo "

<div id=\"new_reserve\" class=\"modal hide fade\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" >
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Nouveau type Réservation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    
                </button>
            </div>

            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget');
        echo "

            <button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
                <i class=\"fas fa-check\"></i>
            </button>
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 22, $this->source); })()), 'form_end');
        echo "

                 
           
        </div>
    </div>
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "unavailability/new_type_reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  67 => 17,  63 => 16,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div id=\"new_reserve\" class=\"modal hide fade\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" >
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Nouveau type Réservation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    
                </button>
            </div>

            {{ form_start(formType, {attr: {novalidate: 'novalidate'}}) }}

                {{form_label(formType.name)}}
                {{form_widget(formType.name)}}

            <button class=\"btn btn-info\" style=\"margin-top: 20px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Enregistrer\">
                <i class=\"fas fa-check\"></i>
            </button>
            {{ form_end(formType) }}

                 
           
        </div>
    </div>
</div>


", "unavailability/new_type_reservation.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/unavailability/new_type_reservation.html.twig");
    }
}
