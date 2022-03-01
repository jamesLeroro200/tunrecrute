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

/* annonce/show.html.twig */
class __TwigTemplate_c9e40b4cd169399c0ced6495a177669122ccd1aef85f7e00eadc4b5265bea33d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAnnonce.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/show.html.twig"));

        $this->parent = $this->loadTemplate("baseAnnonce.html.twig", "annonce/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Annonce";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- Page header -->
<header class=\"page-header bg-img size-lg\" style=\"background-image: url(";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/wallhaven-eovv3r.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container\">
        <div class=\"header-detail\">

            <img class=\"logo\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "getPicture", [], "method", false, false, false, 11))), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"hgroup\">
                <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <h3><a href=\"\">Google</a></h3>
            </div>
            <time datetime=\"";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 16, $this->source); })()), "posted", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 16, $this->source); })()), "posted", [], "any", false, false, false, 16), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "\">";
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 16, $this->source); })()), "posted", [], "any", false, false, false, 16));
        echo "</time>
            <hr>
            <p class=\"lead\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>

            <ul class=\"details cols-3\">
            <li>
                <i class=\"fa fa-map-marker\"></i>
                <span>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 23, $this->source); })()), "adresseTravail", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
            </li>

            <li>
                <i class=\"fa fa-certificate\"></i>
                <span>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 28, $this->source); })()), "contrat", [], "any", false, false, false, 28), "html", null, true);
        echo "</span>
            </li>

            <li>
                <i class=\"fa fa-money\"></i>
                <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 33, $this->source); })()), "salaire", [], "any", false, false, false, 33), "html", null, true);
        echo " Dt/ month</span>
            </li>

            <li>
                <i class=\"fa fa-clock-o\"></i>
                <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 38, $this->source); })()), "heuresTravail", [], "any", false, false, false, 38), "html", null, true);
        echo "h / week</span>
            </li>

            <li>
                <i class=\"fa fa-flask\"></i>
                <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 43, $this->source); })()), "experience", [], "any", false, false, false, 43), "html", null, true);
        echo " years experience</span>
            </li>


            <li>
                <i class=\"fa fa-briefcase\"></i>
                <span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 49, $this->source); })()), "diplome", [], "any", false, false, false, 49), "html", null, true);
        echo "</span>
            </li>
            </ul>
            ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "            <div class=\"button-group\">
                ";
            // line 54
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER"))) {
                // line 55
                echo "                    <a class=\"btn btn-danger\"  data-toggle=\"modal\" data-target=\"#myModalNorm\">report</a>
                ";
            }
            // line 57
            echo "


                ";
            // line 60
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 61
                echo "
                        ";
                // line 62
                echo twig_include($this->env, $context, "annonce/_delete_form.html.twig");
                echo "
                ";
            }
            // line 64
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) {
                // line 65
                echo "                    ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 65, $this->source); })()), "candidatures", [], "any", false, false, false, 65))) {
                    // line 66
                    echo "
            <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_new", ["UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "annonceId" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
                    echo "\" class=\"btn btn-info\" >Apply</a>
                    ";
                } else {
                    // line 69
                    echo "                        ";
                    $context["test"] = false;
                    // line 70
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 70, $this->source); })()), "candidatures", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                        // line 71
                        echo "                            ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)))) {
                            // line 72
                            echo "                                ";
                            $context["test"] = true;
                            // line 73
                            echo "                            ";
                        }
                        // line 74
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                        ";
                    if ((0 === twig_compare((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 75, $this->source); })()), false))) {
                        // line 76
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_new", ["UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "annonceId" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
                        echo "\" class=\"btn btn-info\" >Apply</a>
                        ";
                    }
                    // line 78
                    echo "                    ";
                }
                // line 79
                echo "                ";
            }
            // line 80
            echo "            ";
        }
        // line 81
        echo "        </div>
        </div>
    </div>
</header>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModalNorm\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\"
                            data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        Report this post
                    </h4>
                </div>

                <!-- Modal Body -->
                <div class=\"modal-body\">
                    ";
        // line 106
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)])]);
        echo "
                    ";
        // line 108
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "description", [], "any", false, false, false, 108), 'widget', ["attr" => ["placeholder" => "Description"]]);
        echo "
                    <hr class=\"hr-xs\">

                    <button type=\"submit\" class=\"btn btn-danger btn-block\">report</button>

                    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        echo "

                </div>

                <!-- Modal Footer -->

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 113,  283 => 108,  278 => 106,  252 => 81,  249 => 80,  246 => 79,  243 => 78,  237 => 76,  234 => 75,  228 => 74,  225 => 73,  222 => 72,  219 => 71,  214 => 70,  211 => 69,  206 => 67,  203 => 66,  200 => 65,  197 => 64,  192 => 62,  189 => 61,  187 => 60,  182 => 57,  178 => 55,  176 => 54,  173 => 53,  171 => 52,  165 => 49,  156 => 43,  148 => 38,  140 => 33,  132 => 28,  124 => 23,  116 => 18,  109 => 16,  103 => 13,  98 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAnnonce.html.twig' %}

{% block title %}Annonce{% endblock %}

{% block body %}
<!-- Page header -->
<header class=\"page-header bg-img size-lg\" style=\"background-image: url({{ asset('assets/img/wallhaven-eovv3r.jpg')}});\">
    <div class=\"container\">
        <div class=\"header-detail\">

            <img class=\"logo\" src=\"{{ asset('Uploads/User_Images/' ~ annonce.user.getPicture()) }}\" alt=\"\">
            <div class=\"hgroup\">
                <h1>{{ annonce.title }}</h1>
                <h3><a href=\"\">Google</a></h3>
            </div>
            <time datetime=\"{{ annonce.posted ? annonce.posted|date('Y-m-d H:i:s') : '' }}\">{{ time_diff(annonce.posted) }}</time>
            <hr>
            <p class=\"lead\">{{ annonce.description }}</p>

            <ul class=\"details cols-3\">
            <li>
                <i class=\"fa fa-map-marker\"></i>
                <span>{{ annonce.adresseTravail }}</span>
            </li>

            <li>
                <i class=\"fa fa-certificate\"></i>
                <span>{{ annonce.contrat }}</span>
            </li>

            <li>
                <i class=\"fa fa-money\"></i>
                <span>{{ annonce.salaire }} Dt/ month</span>
            </li>

            <li>
                <i class=\"fa fa-clock-o\"></i>
                <span>{{ annonce.heuresTravail }}h / week</span>
            </li>

            <li>
                <i class=\"fa fa-flask\"></i>
                <span>{{ annonce.experience}} years experience</span>
            </li>


            <li>
                <i class=\"fa fa-briefcase\"></i>
                <span>{{ annonce.diplome}}</span>
            </li>
            </ul>
            {% if app.user %}
            <div class=\"button-group\">
                {% if is_granted(\"ROLE_CANDIDAT\") or is_granted(\"ROLE_EMPLOYER\") %}
                    <a class=\"btn btn-danger\"  data-toggle=\"modal\" data-target=\"#myModalNorm\">report</a>
                {% endif %}



                {% if is_granted('ROLE_ADMIN') %}

                        {{ include('annonce/_delete_form.html.twig') }}
                {% endif %}
                {% if is_granted('ROLE_CANDIDAT') %}
                    {% if annonce.candidatures is empty %}

            <a href=\"{{ path('candidature_new',{'UserId':app.user.id,'annonceId':annonce.id}) }}\" class=\"btn btn-info\" >Apply</a>
                    {% else %}
                        {% set test = false %}
                        {% for candidature in annonce.candidatures %}
                            {% if candidature.user.id == app.user.id %}
                                {% set test = true %}
                            {% endif %}
                        {% endfor %}
                        {% if test == false %}
                <a href=\"{{ path('candidature_new',{'UserId':app.user.id,'annonceId':annonce.id}) }}\" class=\"btn btn-info\" >Apply</a>
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endif %}
        </div>
        </div>
    </div>
</header>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModalNorm\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\"
                            data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        Report this post
                    </h4>
                </div>

                <!-- Modal Body -->
                <div class=\"modal-body\">
                    {#form here#}
                    {{ form_start(form, {'action': path('annonce_show', { 'id': annonce.id })}) }}
                    {#                    {{ form_widget(form.annonceId,{'attr': {'value' : annonce.user.id}}) }}#}
                    {{ form_widget(form.description,{'attr': {'placeholder' : 'Description'}}) }}
                    <hr class=\"hr-xs\">

                    <button type=\"submit\" class=\"btn btn-danger btn-block\">report</button>

                    {{ form_end(form) }}

                </div>

                <!-- Modal Footer -->

            </div>
        </div>
    </div>
{% endblock %}
", "annonce/show.html.twig", "/Users/macbookpro/Documents/final/templates/annonce/show.html.twig");
    }
}
