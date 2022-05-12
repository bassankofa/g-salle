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

/* room/index.html.twig */
class __TwigTemplate_cacf017ce2bbec92194a0309536727e6d15737ecf37aa5987bb9d942ae50a344 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "room/index.html.twig", 1);
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

        echo "Nos salles";
        
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
    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <div class=\"mb-4 py-2 reunionit-addflash\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        <div class=\"row\">
            <h1 class=\"col-sm-9\">Nos salles de réunion</h1>

            ";
        // line 18
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 19
            echo "                <div class=\"col-sm-3\">
                    <a class=\"text-white\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_new");
            echo "\">
                        <button class=\"btn btn-info float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ajouter une salle\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </a>
                </div>
            ";
        }
        // line 27
        echo "        </div>

        <hr>

        <button type=\"button\" onclick=\"displaySearch(this)\" class=\"btn btn-outline-info btn-lg btn-block btn-group-toggle\" data-toggle=\"buttons\">
            <i class=\"fas fa-search\"></i>
            <i class=\"fas fa-angle-down\" id=\"arrowDown\"></i>
            <i class=\"fas fa-angle-up\" id=\"arrowUp\" style=\"display:none;\"></i>
        </button>

        <div id=\"room_search\" style=\"display:none;\">
            ";
        // line 38
        echo twig_include($this->env, $context, "room/_search.html.twig");
        echo "
        </div>

        <hr>

        <div class=\"row text-center\" id=\"roomList\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 45
            echo "                <div class=\"roomCard col-11 col-sm-6 col-lg-4 col-xl-3 mb-sm-4 position-relative\"
                     data-infos='{\"capacity\":";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 46), "html", null, true);
            echo ",\"features\":[\"";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["room"], "features", [], "any", false, false, false, 46), "\",\""), "html", null, true);
            echo "\"]}'>
                    <div class=\"card mb-3 mx-auto\">
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">
                            <div class=\"card-img-top\" style=\"background-image: url('";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/room/" . twig_get_attribute($this->env, $this->source, $context["room"], "picture", [], "any", false, false, false, 49))), "html", null, true);
            echo "');\">
                            </div>
                        </a>
                        <div class=\"card-body\">
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">
                                <h2 class=\"card-title\" style=\"font-size: 1.5rem;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 54
            ((twig_get_attribute($this->env, $this->source, $context["room"], "features", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["room"], "features", [], "any", false, false, false, 54), ", "), "html", null, true))) : (print ("")));
            echo "\">
                                    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "
                                </h2>
                            </a>
                            <p class=\"card-text\">
                                <i class=\"fas fa-user\" style=\"font-size:1.3rem\"></i>&nbsp<sup style=\"font-size: 1rem;\" class=\"roomCapacity\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 59), "html", null, true);
            echo "</sup>
                            </p>
                            ";
            // line 61
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 62
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" class=\"btn btn-info\" style=\"position:absolute;top:0;right:0;\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                            ";
            }
            // line 66
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var element = document.getElementById(\"room_search\");
        var arrowUp = document.getElementById(\"arrowUp\");
        var arrowDown = document.getElementById(\"arrowDown\");
        function displaySearch(button) {
            if (element.style.display === 'none') {
                element.style.display = 'block';
                arrowUp.style.display = 'inline-block';
                arrowDown.style.display = 'none';
            } else {
                element.style.display = 'none';
                arrowUp.style.display = 'none';
                arrowDown.style.display = 'inline-block';
            }
        }

        function updateRooms() {
            \$('.roomCard').show();

            var selectedFeatures = \$('#featuresList').val();
            var selectedCapacity = JSON.parse(\$('#roomCapacitySelect').val());
            console.log(selectedCapacity);

            \$('#roomList .roomCard').each(function () {
                var card = \$(this);
                var infos = card.data('infos');

                var featuresByRoom = infos.features;
                var capacityByRoom = infos.capacity;

                if (!(findRoomWithThisFeatures(selectedFeatures, featuresByRoom)
                    && findRoomWithThisCapacity(selectedCapacity, capacityByRoom))){
                    card.hide();
                }
            })
        }
        function initSearch() {
            var capacity = document.getElementById(\"roomCapacitySelect\").options;
            capacity[0].selected = true;

            var features = document.getElementById(\"featuresList\").options;
            for(var i = 0; i < features.length; i++){
                features[i].selected = false;
            }
            \$('.roomCard').show();
            console.log('init');
        }
        function findRoomWithThisFeatures (haystack, arr) {
            // alert(haystack.every(o => arr.includes(o)));
            return haystack.every(o => arr.includes(o));
        }
        function findRoomWithThisCapacity (selectedCapacity, capacityByRoom) {
            // var minSelectedCapacity = selectedCapacity.min;
            var minSelectedCapacity = selectedCapacity === null ? 0 : selectedCapacity.min;

            if(selectedCapacity === null || selectedCapacity.max === undefined) {
                return minSelectedCapacity <= capacityByRoom;
            }

            var maxSelectedCapacity = selectedCapacity.max;

            return ( minSelectedCapacity <= capacityByRoom && capacityByRoom <= maxSelectedCapacity );
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 77,  231 => 76,  217 => 70,  208 => 66,  200 => 62,  198 => 61,  193 => 59,  186 => 55,  182 => 54,  178 => 53,  171 => 49,  167 => 48,  160 => 46,  157 => 45,  153 => 44,  144 => 38,  131 => 27,  121 => 20,  118 => 19,  116 => 18,  110 => 14,  101 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Nos salles{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-4\">

        {% for message in app.flashes('notice') %}
            <div class=\"mb-4 py-2 reunionit-addflash\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"row\">
            <h1 class=\"col-sm-9\">Nos salles de réunion</h1>

            {% if is_granted('IS_AUTHENTICATED_FULLY') and is_granted('ROLE_ADMIN') %}
                <div class=\"col-sm-3\">
                    <a class=\"text-white\" href=\"{{ path('room_new') }}\">
                        <button class=\"btn btn-info float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ajouter une salle\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </a>
                </div>
            {% endif %}
        </div>

        <hr>

        <button type=\"button\" onclick=\"displaySearch(this)\" class=\"btn btn-outline-info btn-lg btn-block btn-group-toggle\" data-toggle=\"buttons\">
            <i class=\"fas fa-search\"></i>
            <i class=\"fas fa-angle-down\" id=\"arrowDown\"></i>
            <i class=\"fas fa-angle-up\" id=\"arrowUp\" style=\"display:none;\"></i>
        </button>

        <div id=\"room_search\" style=\"display:none;\">
            {{ include('room/_search.html.twig')}}
        </div>

        <hr>

        <div class=\"row text-center\" id=\"roomList\">
            {% for room in rooms %}
                <div class=\"roomCard col-11 col-sm-6 col-lg-4 col-xl-3 mb-sm-4 position-relative\"
                     data-infos='{\"capacity\":{{ room.capacity }},\"features\":[\"{{ room.features|join('\",\"') }}\"]}'>
                    <div class=\"card mb-3 mx-auto\">
                        <a href=\"{{ path('room_show', {'id': room.id}) }}\">
                            <div class=\"card-img-top\" style=\"background-image: url('{{ asset('images/room/' ~ room.picture) }}');\">
                            </div>
                        </a>
                        <div class=\"card-body\">
                            <a href=\"{{ path('room_show', {'id': room.id}) }}\">
                                <h2 class=\"card-title\" style=\"font-size: 1.5rem;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ room.features ? room.features|join(', ') : '' }}\">
                                    {{ room.name }}
                                </h2>
                            </a>
                            <p class=\"card-text\">
                                <i class=\"fas fa-user\" style=\"font-size:1.3rem\"></i>&nbsp<sup style=\"font-size: 1rem;\" class=\"roomCapacity\">{{ room.capacity }}</sup>
                            </p>
                            {% if is_granted('IS_AUTHENTICATED_FULLY') and is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('room_edit', {'id': room.id}) }}\" class=\"btn btn-info\" style=\"position:absolute;top:0;right:0;\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        var element = document.getElementById(\"room_search\");
        var arrowUp = document.getElementById(\"arrowUp\");
        var arrowDown = document.getElementById(\"arrowDown\");
        function displaySearch(button) {
            if (element.style.display === 'none') {
                element.style.display = 'block';
                arrowUp.style.display = 'inline-block';
                arrowDown.style.display = 'none';
            } else {
                element.style.display = 'none';
                arrowUp.style.display = 'none';
                arrowDown.style.display = 'inline-block';
            }
        }

        function updateRooms() {
            \$('.roomCard').show();

            var selectedFeatures = \$('#featuresList').val();
            var selectedCapacity = JSON.parse(\$('#roomCapacitySelect').val());
            console.log(selectedCapacity);

            \$('#roomList .roomCard').each(function () {
                var card = \$(this);
                var infos = card.data('infos');

                var featuresByRoom = infos.features;
                var capacityByRoom = infos.capacity;

                if (!(findRoomWithThisFeatures(selectedFeatures, featuresByRoom)
                    && findRoomWithThisCapacity(selectedCapacity, capacityByRoom))){
                    card.hide();
                }
            })
        }
        function initSearch() {
            var capacity = document.getElementById(\"roomCapacitySelect\").options;
            capacity[0].selected = true;

            var features = document.getElementById(\"featuresList\").options;
            for(var i = 0; i < features.length; i++){
                features[i].selected = false;
            }
            \$('.roomCard').show();
            console.log('init');
        }
        function findRoomWithThisFeatures (haystack, arr) {
            // alert(haystack.every(o => arr.includes(o)));
            return haystack.every(o => arr.includes(o));
        }
        function findRoomWithThisCapacity (selectedCapacity, capacityByRoom) {
            // var minSelectedCapacity = selectedCapacity.min;
            var minSelectedCapacity = selectedCapacity === null ? 0 : selectedCapacity.min;

            if(selectedCapacity === null || selectedCapacity.max === undefined) {
                return minSelectedCapacity <= capacityByRoom;
            }

            var maxSelectedCapacity = selectedCapacity.max;

            return ( minSelectedCapacity <= capacityByRoom && capacityByRoom <= maxSelectedCapacity );
        }
    </script>
{% endblock %}
", "room/index.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/room/index.html.twig");
    }
}
