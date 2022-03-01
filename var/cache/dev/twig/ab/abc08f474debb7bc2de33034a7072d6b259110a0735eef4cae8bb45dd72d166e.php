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

/* annonce/mesannonces.html.twig */
class __TwigTemplate_386e2abc0fca031ffc609276e8f879f90d498982aaf98a931f45289a26742232 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "profile/baseProfile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/mesannonces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/mesannonces.html.twig"));

        $this->parent = $this->loadTemplate("profile/baseProfile.html.twig", "annonce/mesannonces.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"alice-bg section-padding-bottom\">
        <div class=\"container no-gliters\">
            <div class=\"row no-gliters\">
                <div class=\"col\">
                    <div class=\"dashboard-container\">
                        <div class=\"dashboard-content-wrapper\">
                            <div class=\"manage-job-container\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Applications</th>
                                        <th class=\"action\">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 21
            echo "                                    <tr class=\"job-items\">
                                        <td class=\"title\">
                                            <h5><a href=\"#\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></h5>
                                            <div class=\"info\">
                                                <span class=\"office-location\"><a href=\"#\"><i data-feather=\"map-pin\"></i>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "AdresseTravail", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></span>
                                                <span class=\"job-type full-time\"><a href=\"#\"><i data-feather=\"clock\"></i>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "heuresTravail", [], "any", false, false, false, 26), "html", null, true);
            echo "h / week</a></span>
                                                <span class=\"job-type part-time\"><a href=\"#\"><i data-feather=\"file\"></i>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "contrat", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></span>
                                            </div>
                                        </td>
                                        <td class=\"application\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_par_annonce", ["annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 30), "user_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" target=\"_blank\">
                                                ";
            // line 31
            $context["s"] = 0;
            // line 32
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["annonce"], "candidatures", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 33
                echo "                                                ";
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 33), "rejected")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 33), "shortlisted")))) {
                    // line 34
                    echo "                                                ";
                    $context["s"] = ((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 34, $this->source); })()) + 1);
                    // line 35
                    echo "                                                ";
                }
                // line 36
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                                                ";
            echo twig_escape_filter($this->env, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 37, $this->source); })()), "html", null, true);
            echo " Application(s)</a></td>
                                        <td class=\"action\">
                                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"preview\" title=\"Preview\" target=\"_blank\"><i data-feather=\"eye\"></i></a>
                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"edit\" title=\"Edit\" target=\"_blank\"><i data-feather=\"edit\"></i></a>
                                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"remove\" title=\"Delete\"><i data-feather=\"trash-2\"></i></a>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                    </tbody>
                                </table>
                                <div class=\"pagination-list text-center\">
                                    <nav class=\"navigation pagination\">
                                        <div class=\"nav-links\">
                                            ";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 50, $this->source); })()));
        echo "
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class=\"dashboard-sidebar\">
                            <div class=\"company-info\">
                                <div class=\"thumb\">
                                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Uploads/User_Images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "picture", [], "any", false, false, false, 59)), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"company-body\">
                                    <h5>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "compname", [], "any", false, false, false, 62), "html", null, true);
        echo "</h5>
                                </div>
                            </div>
                            <div class=\"dashboard-menu\">
                                <ul>
                                    <li><i class=\"fas fa-user\"></i><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Edit Profile</a></li>
                                    <li class=\"active\"><i class=\"fas fa-briefcase\"></i><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
        echo "l\">Manage Jobs</a></li>
                                    <li><i class=\"fas fa-users\"></i><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_index");
        echo "\">Manage Candidates</a></li>
                                    <li><i class=\"fas fa-calendar-check\"></i><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("managed_applications");
        echo "\">Managed Applications</a></li>
                                    <li><i class=\"fas fa-plus-square\"></i><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
        echo "\">Post New Job</a></li>
                                </ul>

                                <ul class=\"delete\">
                                    <li><i class=\"fas fa-power-off\"></i><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                                    <li><i class=\"fas fa-trash-alt\"></i><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-delete\">Delete Profile</a></li>
                                </ul>
                                <!-- Modal -->
                                <div class=\"modal fade modal-delete\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::deactivate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/mesannonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 80,  219 => 75,  212 => 71,  208 => 70,  204 => 69,  200 => 68,  196 => 67,  188 => 62,  182 => 59,  170 => 50,  163 => 45,  153 => 41,  149 => 40,  145 => 39,  139 => 37,  133 => 36,  130 => 35,  127 => 34,  124 => 33,  119 => 32,  117 => 31,  113 => 30,  107 => 27,  103 => 26,  99 => 25,  94 => 23,  90 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/baseProfile.html.twig' %}

{% block body %}
    <div class=\"alice-bg section-padding-bottom\">
        <div class=\"container no-gliters\">
            <div class=\"row no-gliters\">
                <div class=\"col\">
                    <div class=\"dashboard-container\">
                        <div class=\"dashboard-content-wrapper\">
                            <div class=\"manage-job-container\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Applications</th>
                                        <th class=\"action\">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for annonce in annonces %}
                                    <tr class=\"job-items\">
                                        <td class=\"title\">
                                            <h5><a href=\"#\">{{ annonce.title }}</a></h5>
                                            <div class=\"info\">
                                                <span class=\"office-location\"><a href=\"#\"><i data-feather=\"map-pin\"></i>{{ annonce.AdresseTravail }}</a></span>
                                                <span class=\"job-type full-time\"><a href=\"#\"><i data-feather=\"clock\"></i>{{ annonce.heuresTravail }}h / week</a></span>
                                                <span class=\"job-type part-time\"><a href=\"#\"><i data-feather=\"file\"></i>{{ annonce.contrat }}</a></span>
                                            </div>
                                        </td>
                                        <td class=\"application\"><a href=\"{{ path('candidature_par_annonce',{'annonce_id':annonce.id,'user_id':app.user.id}) }}\" target=\"_blank\">
                                                {% set s=0%}
                                                {% for candidature in annonce.candidatures %}
                                                {% if candidature.status != 'rejected' and candidature.status!= 'shortlisted' %}
                                                {% set s = s + 1 %}
                                                {% endif %}
                                                {% endfor %}
                                                {{ s }} Application(s)</a></td>
                                        <td class=\"action\">
                                            <a href=\"{{ path('annonce_show',{'id':annonce.id}) }}\" class=\"preview\" title=\"Preview\" target=\"_blank\"><i data-feather=\"eye\"></i></a>
                                            <a href=\"{{ path('annonce_edit',{'id':annonce.id}) }}\" class=\"edit\" title=\"Edit\" target=\"_blank\"><i data-feather=\"edit\"></i></a>
                                            <a href=\"{{ path('annonce_delete',{'id':annonce.id}) }}\" class=\"remove\" title=\"Delete\"><i data-feather=\"trash-2\"></i></a>
                                        </td>
                                    </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"pagination-list text-center\">
                                    <nav class=\"navigation pagination\">
                                        <div class=\"nav-links\">
                                            {{  knp_pagination_render(annonces) }}
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class=\"dashboard-sidebar\">
                            <div class=\"company-info\">
                                <div class=\"thumb\">
                                    <img src=\"{{ asset('Uploads/User_Images/')~app.user.picture }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"company-body\">
                                    <h5>{{ app.user.compname }}</h5>
                                </div>
                            </div>
                            <div class=\"dashboard-menu\">
                                <ul>
                                    <li><i class=\"fas fa-user\"></i><a href=\"{{ path('edit_profile') }}\">Edit Profile</a></li>
                                    <li class=\"active\"><i class=\"fas fa-briefcase\"></i><a href=\"{{ path('mes_annonces') }}l\">Manage Jobs</a></li>
                                    <li><i class=\"fas fa-users\"></i><a href=\"{{ path('candidature_index') }}\">Manage Candidates</a></li>
                                    <li><i class=\"fas fa-calendar-check\"></i><a href=\"{{ path('managed_applications') }}\">Managed Applications</a></li>
                                    <li><i class=\"fas fa-plus-square\"></i><a href=\"{{ path('annonce_new') }}\">Post New Job</a></li>
                                </ul>

                                <ul class=\"delete\">
                                    <li><i class=\"fas fa-power-off\"></i><a href=\"{{ path('app_logout') }}\">Logout</a></li>
                                    <li><i class=\"fas fa-trash-alt\"></i><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-delete\">Delete Profile</a></li>
                                </ul>
                                <!-- Modal -->
                                <div class=\"modal fade modal-delete\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    {{ render(controller('App\\\\Controller\\\\ProfileController::deactivate',{'id':app.user.id})) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "annonce/mesannonces.html.twig", "/Users/macbookpro/Documents/final/templates/annonce/mesannonces.html.twig");
    }
}
