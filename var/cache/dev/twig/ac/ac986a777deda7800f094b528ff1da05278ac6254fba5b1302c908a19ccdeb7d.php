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

/* room/show.html.twig */
class __TwigTemplate_a0c7b5ab13165a39a562524326720c534cc2d743fe88447b58cfbba2bec5ae84 extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        // line 1
        $context["day_start"] = twig_constant("App\\Entity\\Unavailability::DAY_START");
        // line 2
        $context["day_end"] = twig_constant("App\\Entity\\Unavailability::DAY_END");
        // line 88
        $context["modal_message"] = (("Voulez-vous vraiment supprimer la salle " . twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88)) . " ?");
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 90, $this->source); })()), "unavailabilities", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["unavailability"]) {
            // line 92
            if ((twig_date_converter($this->env) < twig_get_attribute($this->env, $this->source, $context["unavailability"], "startDate", [], "any", false, false, false, 92))) {
                // line 93
                $context["modal_message"] = (("Des réunions à venir sont organisées dans la salle " . twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93)) . ". Si vous la supprimez, ces réunions seront également supprimées.");
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unavailability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        $this->parent = $this->loadTemplate("layout.html.twig", "room/show.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Salle ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <div class=\"jumbotron col-md-9 mx-auto mt-5\">

        <div class=\"row mt-0 mb-5\">
            <a href=\"#\" id=\"thumbnailPicture\" class=\"card card-img-top col col-lg-3 mb-2 mb-lg-0\"
               style=\"background-image: url('";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/room/" . twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 14, $this->source); })()), "picture", [], "any", false, false, false, 14))), "html", null, true);
        echo "')\">
            </a>
            <div class=\"col-lg-9 d-flex align-items-stretch flex-column\">
                <div class=\"mb-auto d-flex\">
                    <h1 class=\"mr-auto\">Salle ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                    <div class=\"btn-group\" role=\"group\">
                        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
            // line 21
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
            echo "\" style=\"color: #fff;\">
                                <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;\">
                                    <i class=\"fas fa-chevron-left\"></i>
                                </button>
                            </a>
                        ";
        }
        // line 27
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" style=\"color: #fff;\">
                                <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;margin-left: 5px;\">
                                    <i class=\"fas fa-edit\"></i>
                                </button>
                            </a>
                            <form id=\"form\" method=\"post\" action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" style=\"display: inline-block;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-warning\" style=\"width: 45px;margin-left: 5px;\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </button>
                            </form>
                        ";
        }
        // line 41
        echo "                    </div>
                </div>
                <div class=\"mb-0\">
                    <table class=\"table table-active m-0\">
                        <tbody>
                        <tr class=\"lead\">
                            <th>Capacité :</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 48, $this->source); })()), "capacity", [], "any", false, false, false, 48), "html", null, true);
        echo " personnes</td>
                        </tr>
                        <tr class=\"lead\">
                            <th>Options :</th>
                            <td>";
        // line 52
        ((twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 52, $this->source); })()), "features", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 52, $this->source); })()), "features", [], "any", false, false, false, 52), ", "), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
            // line 62
            echo "            ";
            $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "room/show.html.twig", 62)->display($context);
            // line 63
            echo "        ";
        }
        // line 64
        echo "
    </div>

    ";
        // line 67
        $this->loadTemplate("room/_large_picture_modal.html.twig", "room/show.html.twig", 67)->display($context);
        // line 68
        echo "
    ";
        // line 69
        $this->loadTemplate("room/_dates_confirm_modal.html.twig", "room/show.html.twig", 69)->display($context);
        // line 70
        echo "
    ";
        // line 71
        $this->loadTemplate("components/_confirm_modal.html.twig", "room/show.html.twig", 71)->display($context);
        // line 72
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 76
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 77
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

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src='";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/fullcalendar/locale/fr.js"), "html", null, true);
        echo "'></script>
    ";
        // line 104
        echo "    <script>
        // Paramétrage du calendrier (cf. documentation de fullCalendar)
        \$(function () {
            \$('#calendar-holder').fullCalendar({
                themeSystem: 'bootstrap4',
                contentHeight: \"auto\",
                locale: 'fr',
                timezone: \"Europe/Paris\",
                now: '";
        // line 112
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y H:i"), "html", null, true);
        echo "',
                header: {
                    left: 'today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay, prev, next'
                },
                businessHours: {
                    start: \"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["day_start"]) || array_key_exists("day_start", $context) ? $context["day_start"] : (function () { throw new RuntimeError('Variable "day_start" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "\",
                    end: \"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["day_end"]) || array_key_exists("day_end", $context) ? $context["day_end"] : (function () { throw new RuntimeError('Variable "day_end" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "\",
                    dow: [1, 2, 3, 4, 5]
                },
                lazyFetching: true,
                navLinks: true,
                // Si la largeur de la fenêtre (ou de l'écran) est inférieure à 765px de large,
                // on n'affiche que la journée courante, sinon on affiche la semaine courante.
                defaultView: \$(window).width() < 765 ? 'agendaDay':'agendaWeek',
                slotDuration: '00:30:00',
                weekends: false,
                minTime: \"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["day_start"]) || array_key_exists("day_start", $context) ? $context["day_start"] : (function () { throw new RuntimeError('Variable "day_start" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "\",
                maxTime: \"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["day_end"]) || array_key_exists("day_end", $context) ? $context["day_end"] : (function () { throw new RuntimeError('Variable "day_end" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "\",
                nowIndicator: true,
                selectable: true,
                selectContraints: \"businessHours\",
                // On n'autorise la réservation qu'à partir de l'heure courante.
                selectAllow: function(select) {
                    return moment().diff(select.start) <= 0;
                },
                selectOverlap: false,
                unselectCancel: '#datesConfirm',
                select: function(startDate, endDate) {
                    // S'il s'agit de journée(s) complète(s), on fixe les heures de début et de fin.
                    if (!startDate.hasTime() || !endDate.hasTime()) {
                        startDate.time('";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["day_start"]) || array_key_exists("day_start", $context) ? $context["day_start"] : (function () { throw new RuntimeError('Variable "day_start" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "');
                        endDate.time('";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["day_end"]) || array_key_exists("day_end", $context) ? $context["day_end"] : (function () { throw new RuntimeError('Variable "day_end" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "');
                        if (endDate >= startDate.clone().add(1, 'days')) {
                            endDate.add(-1, 'days')
                        }
                    }

                    // On fixe l'heure de début mini et l'heure de fin maxi.
                    const start = parseInt(startDate.format(\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["day_start"]) || array_key_exists("day_start", $context) ? $context["day_start"] : (function () { throw new RuntimeError('Variable "day_start" does not exist.', 152, $this->source); })()), "html", null, true);
        echo "\"))
                    <= parseInt(startDate.format('HH')) ?
                        startDate.format('DD/MM/YYYY HH:mm') : startDate.format('DD/MM/YYYY ' + '";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["day_start"]) || array_key_exists("day_start", $context) ? $context["day_start"] : (function () { throw new RuntimeError('Variable "day_start" does not exist.', 154, $this->source); })()), "html", null, true);
        echo "');

                    const end = parseInt(startDate.format(\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["day_start"]) || array_key_exists("day_start", $context) ? $context["day_start"] : (function () { throw new RuntimeError('Variable "day_start" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "\"))
                    <= parseInt(endDate.format('HH')) && parseInt(endDate.format('HH'))
                    <= parseInt(endDate.format(\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["day_end"]) || array_key_exists("day_end", $context) ? $context["day_end"] : (function () { throw new RuntimeError('Variable "day_end" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "\")) ?
                        endDate.format('DD/MM/YYYY HH:mm') : endDate.format('DD/MM/YYYY ' + '";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["day_end"]) || array_key_exists("day_end", $context) ? $context["day_end"] : (function () { throw new RuntimeError('Variable "day_end" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "');

                    // On demande une confirmation à l'utilisateur
                    const confirmationMessage = 'Réserver la salle ";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 162, $this->source); })()), "name", [], "any", false, false, false, 162), "html", null, true);
        echo " pour la période du '
                        + start + ' au '
                        + end + ' ?' ;
                    \$('#datesConfirmationMessage').text(confirmationMessage);
                    \$('.modal-title').text('Vérifiez les dates');

                    \$('#datesConfirmationModal').modal({});

                    \$(\"#datesConfirm\").on(\"click\", function(){
                        window.location.href = '";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailability_new");
        echo "'
                            + '?startDate=' + encodeURIComponent(start)
                            + '&endDate=' + encodeURIComponent(end)
                            + '&roomId=";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174), "html", null, true);
        echo "';
                        \$(\"#datesConfirmationModal\").modal('hide');
                    });

                    \$(\"#datesCancel\").on(\"click\", function(){
                        // this.unselect();
                        \$(\"#datesConfirmationModal\").modal('hide');
                    });
                },
                eventSources: [
                    {
                        url: 'fc-load-events',
                        type: 'POST',
                        data: {
                            filters: {
                                'id': ";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189), "html", null, true);
        echo "
                            }
                        },
                        error: function () {
                            alert('L\\'affichage du calendrier a renvoyé une erreur !');
                        }
                    }
                ],
                timeFormat: 'H(:mm)' // uppercase H for 24-hour clock
            });

            \$('#thumbnailPicture').on(\"click\", function () {
                \$('#largePicture').modal({});
            });
        });

        \$('#confirmationMessage').text('";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["modal_message"]) || array_key_exists("modal_message", $context) ? $context["modal_message"] : (function () { throw new RuntimeError('Variable "modal_message" does not exist.', 205, $this->source); })()), "html", null, true);
        echo "');
        \$('.modal-title').text('Supprimer la salle');
        \$('#form').click(function(e) {
            e.preventDefault();
            \$('#confirmationModal').modal({});

            \$('#confirm').on(\"click\", function () {
                \$('#form').submit();
                \$(\"#confirmationModal\").modal('hide');
            });

            \$(\"#cancel\").on(\"click\", function(){
                \$(\"#confirmationModal\").modal('hide');
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 205,  426 => 189,  408 => 174,  402 => 171,  390 => 162,  384 => 159,  380 => 158,  375 => 156,  370 => 154,  365 => 152,  355 => 145,  351 => 144,  335 => 131,  331 => 130,  318 => 120,  314 => 119,  304 => 112,  294 => 104,  290 => 102,  286 => 101,  282 => 100,  277 => 99,  267 => 98,  247 => 77,  242 => 76,  232 => 75,  221 => 72,  219 => 71,  216 => 70,  214 => 69,  211 => 68,  209 => 67,  204 => 64,  201 => 63,  198 => 62,  196 => 61,  184 => 52,  177 => 48,  168 => 41,  159 => 35,  154 => 33,  145 => 28,  142 => 27,  132 => 21,  130 => 20,  125 => 18,  118 => 14,  111 => 9,  101 => 8,  81 => 6,  70 => 4,  63 => 93,  61 => 92,  57 => 90,  55 => 88,  53 => 2,  51 => 1,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% set day_start = constant('App\\\\Entity\\\\Unavailability::DAY_START') %}
{% set day_end = constant('App\\\\Entity\\\\Unavailability::DAY_END') %}

{% extends 'layout.html.twig' %}

{% block page_title %}Salle {{ room.name }}{% endblock %}

{% block content %}

    <div class=\"jumbotron col-md-9 mx-auto mt-5\">

        <div class=\"row mt-0 mb-5\">
            <a href=\"#\" id=\"thumbnailPicture\" class=\"card card-img-top col col-lg-3 mb-2 mb-lg-0\"
               style=\"background-image: url('{{ asset('images/room/'~room.picture) }}')\">
            </a>
            <div class=\"col-lg-9 d-flex align-items-stretch flex-column\">
                <div class=\"mb-auto d-flex\">
                    <h1 class=\"mr-auto\">Salle {{ room.name }}</h1>
                    <div class=\"btn-group\" role=\"group\">
                        {% if is_granted('ROLE_EMPLOYEE') %}
                            <a href=\"{{ path('room_index') }}\" style=\"color: #fff;\">
                                <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;\">
                                    <i class=\"fas fa-chevron-left\"></i>
                                </button>
                            </a>
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('room_edit', {'id': room.id}) }}\" style=\"color: #fff;\">
                                <button type=\"button\" class=\"btn btn-info\" style=\"width: 45px;margin-left: 5px;\">
                                    <i class=\"fas fa-edit\"></i>
                                </button>
                            </a>
                            <form id=\"form\" method=\"post\" action=\"{{ path('room_delete', {'id': room.id}) }}\" style=\"display: inline-block;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ room.id) }}\">
                                <button class=\"btn btn-warning\" style=\"width: 45px;margin-left: 5px;\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </button>
                            </form>
                        {% endif %}
                    </div>
                </div>
                <div class=\"mb-0\">
                    <table class=\"table table-active m-0\">
                        <tbody>
                        <tr class=\"lead\">
                            <th>Capacité :</th>
                            <td>{{ room.capacity }} personnes</td>
                        </tr>
                        <tr class=\"lead\">
                            <th>Options :</th>
                            <td>{{ room.features ? room.features|join(', ') : '' }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        {% if is_granted('ROLE_EMPLOYEE') %}
            {% include '@FullCalendar/Calendar/calendar.html.twig' %}
        {% endif %}

    </div>

    {% include 'room/_large_picture_modal.html.twig' %}

    {% include 'room/_dates_confirm_modal.html.twig' %}

    {% include 'components/_confirm_modal.html.twig' %}

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

{% set modal_message = 'Voulez-vous vraiment supprimer la salle ' ~ room.name ~ ' ?' %}

{% for unavailability in room.unavailabilities %}

    {% if date() < unavailability.startDate %}
        {% set modal_message = 'Des réunions à venir sont organisées dans la salle ' ~ room.name ~
            '. Si vous la supprimez, ces réunions seront également supprimées.' %}
    {% endif %}
{% endfor %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>
    <script src='{{ asset('bundles/fullcalendar/js/fullcalendar/locale/fr.js') }}'></script>
    {#<script src=\"{{ asset('js/reunionit_room_calendar.js') }}\"></script>#}
    <script>
        // Paramétrage du calendrier (cf. documentation de fullCalendar)
        \$(function () {
            \$('#calendar-holder').fullCalendar({
                themeSystem: 'bootstrap4',
                contentHeight: \"auto\",
                locale: 'fr',
                timezone: \"Europe/Paris\",
                now: '{{ \"now\"|date(\"m/d/Y H:i\") }}',
                header: {
                    left: 'today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay, prev, next'
                },
                businessHours: {
                    start: \"{{ day_start }}\",
                    end: \"{{ day_end }}\",
                    dow: [1, 2, 3, 4, 5]
                },
                lazyFetching: true,
                navLinks: true,
                // Si la largeur de la fenêtre (ou de l'écran) est inférieure à 765px de large,
                // on n'affiche que la journée courante, sinon on affiche la semaine courante.
                defaultView: \$(window).width() < 765 ? 'agendaDay':'agendaWeek',
                slotDuration: '00:30:00',
                weekends: false,
                minTime: \"{{ day_start }}\",
                maxTime: \"{{ day_end }}\",
                nowIndicator: true,
                selectable: true,
                selectContraints: \"businessHours\",
                // On n'autorise la réservation qu'à partir de l'heure courante.
                selectAllow: function(select) {
                    return moment().diff(select.start) <= 0;
                },
                selectOverlap: false,
                unselectCancel: '#datesConfirm',
                select: function(startDate, endDate) {
                    // S'il s'agit de journée(s) complète(s), on fixe les heures de début et de fin.
                    if (!startDate.hasTime() || !endDate.hasTime()) {
                        startDate.time('{{ day_start }}');
                        endDate.time('{{ day_end }}');
                        if (endDate >= startDate.clone().add(1, 'days')) {
                            endDate.add(-1, 'days')
                        }
                    }

                    // On fixe l'heure de début mini et l'heure de fin maxi.
                    const start = parseInt(startDate.format(\"{{ day_start }}\"))
                    <= parseInt(startDate.format('HH')) ?
                        startDate.format('DD/MM/YYYY HH:mm') : startDate.format('DD/MM/YYYY ' + '{{ day_start }}');

                    const end = parseInt(startDate.format(\"{{ day_start }}\"))
                    <= parseInt(endDate.format('HH')) && parseInt(endDate.format('HH'))
                    <= parseInt(endDate.format(\"{{ day_end }}\")) ?
                        endDate.format('DD/MM/YYYY HH:mm') : endDate.format('DD/MM/YYYY ' + '{{ day_end }}');

                    // On demande une confirmation à l'utilisateur
                    const confirmationMessage = 'Réserver la salle {{ room.name }} pour la période du '
                        + start + ' au '
                        + end + ' ?' ;
                    \$('#datesConfirmationMessage').text(confirmationMessage);
                    \$('.modal-title').text('Vérifiez les dates');

                    \$('#datesConfirmationModal').modal({});

                    \$(\"#datesConfirm\").on(\"click\", function(){
                        window.location.href = '{{ path('unavailability_new') }}'
                            + '?startDate=' + encodeURIComponent(start)
                            + '&endDate=' + encodeURIComponent(end)
                            + '&roomId={{ room.id }}';
                        \$(\"#datesConfirmationModal\").modal('hide');
                    });

                    \$(\"#datesCancel\").on(\"click\", function(){
                        // this.unselect();
                        \$(\"#datesConfirmationModal\").modal('hide');
                    });
                },
                eventSources: [
                    {
                        url: 'fc-load-events',
                        type: 'POST',
                        data: {
                            filters: {
                                'id': {{ room.id }}
                            }
                        },
                        error: function () {
                            alert('L\\'affichage du calendrier a renvoyé une erreur !');
                        }
                    }
                ],
                timeFormat: 'H(:mm)' // uppercase H for 24-hour clock
            });

            \$('#thumbnailPicture').on(\"click\", function () {
                \$('#largePicture').modal({});
            });
        });

        \$('#confirmationMessage').text('{{ modal_message }}');
        \$('.modal-title').text('Supprimer la salle');
        \$('#form').click(function(e) {
            e.preventDefault();
            \$('#confirmationModal').modal({});

            \$('#confirm').on(\"click\", function () {
                \$('#form').submit();
                \$(\"#confirmationModal\").modal('hide');
            });

            \$(\"#cancel\").on(\"click\", function(){
                \$(\"#confirmationModal\").modal('hide');
            });
        });
    </script>
{% endblock %}
", "room/show.html.twig", "/home/sankofa-impact/www-bass/reunionIT/templates/room/show.html.twig");
    }
}
