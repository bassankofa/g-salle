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

/* components/_footer.html.twig */
class __TwigTemplate_22e832a46f9b7b15c1aae09e22b6d27e281afef2e1075b7783367fa213a7a16a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer class=\"page-footer font-small blue pt-4\">

    <!-- Footer Links -->
    <div class=\"container-fluid text-center text-md-left\">

        <!-- Grid row -->
        <div class=\"row\">

            <!-- Grid column -->
            <div class=\"col-md-6 mt-md-0 mt-3\">

                <!-- Content -->
                <h5 class=\"text-uppercase\">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- Links -->
                <h5 class=\"text-uppercase\">Links</h5>

                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"#!\">Link 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- Links -->
                <h5 class=\"text-uppercase\">Links</h5>

                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"#!\">Link 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=\"footer-copyright text-center py-3\">© 2018 Copyright:
        <a href=\"https://mdbootstrap.com/education/bootstrap/\"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"page-footer font-small blue pt-4\">

    <!-- Footer Links -->
    <div class=\"container-fluid text-center text-md-left\">

        <!-- Grid row -->
        <div class=\"row\">

            <!-- Grid column -->
            <div class=\"col-md-6 mt-md-0 mt-3\">

                <!-- Content -->
                <h5 class=\"text-uppercase\">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- Links -->
                <h5 class=\"text-uppercase\">Links</h5>

                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"#!\">Link 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- Links -->
                <h5 class=\"text-uppercase\">Links</h5>

                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"#!\">Link 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=\"footer-copyright text-center py-3\">© 2018 Copyright:
        <a href=\"https://mdbootstrap.com/education/bootstrap/\"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->", "components/_footer.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/components/_footer.html.twig");
    }
}
