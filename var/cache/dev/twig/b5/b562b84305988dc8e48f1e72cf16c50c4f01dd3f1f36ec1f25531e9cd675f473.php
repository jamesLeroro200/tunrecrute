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

/* Profile/employer/candidates.html.twig */
class __TwigTemplate_7cb31ab9c53df7e7b00bfb4785bb4150c1b56e6a7cc5151f412730b5ec8fcb01 extends Template
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
        return "Profile/baseProfile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/employer/candidates.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/employer/candidates.html.twig"));

        $this->parent = $this->loadTemplate("Profile/baseProfile.html.twig", "Profile/employer/candidates.html.twig", 1);
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
        echo "<div class=\"alice-bg section-padding-bottom\">
    <div class=\"container no-gliters\">
        <div class=\"row no-gliters\">
            <div class=\"col\">
                <div class=\"dashboard-container\">
                    <div class=\"dashboard-content-wrapper\">
                        <div class=\"manage-candidate-container\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Candidate</th>
                                    <th>Job applied to</th>
                                    <th>Status</th>
                                    <th class=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 21
        if (twig_test_empty((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "                                </tbody>
                                </table>
                                <div style=\"margin-left:295px;margin-top:70px;font-size: 1.4rem;font-family: 'Poppins', sans-serif; font-weight: 500; color: #6f7484;\">
                                    No Application(s) To Manage Yet
                                </div>
                                ";
        } else {
            // line 28
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 29
                echo "                                    ";
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 29), "rejected")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 29), "shortlisted")))) {
                    // line 30
                    echo "                                        <tr class=\"candidates-list\">
                                            <td class=\"title\" style=\"margin-right: -70px;\">
                                                <div class=\"thumb\">
                                                    <img src=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 33), "picture", [], "any", false, false, false, 33))), "html", null, true);
                    echo "\" class=\"img-fluid\" alt=\"\">
                                                </div>
                                                <div class=\"body\">
                                                    <h5><a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 36), "firstName", [], "any", false, false, false, 36), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 36), "lastName", [], "any", false, false, false, 36), "html", null, true);
                    echo "</a></h5>
                                                </div>
                                            </td>
                                            <td class=\"status\">
                                                <h5 style=\"color: #232630\"><a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40), "html", null, true);
                    echo "</a></h5>
                                            </td>
                                            <td class=\"status\">
                                                ";
                    // line 43
                    if ( !twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 43)) {
                        // line 44
                        echo "                                                    N/A
                                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 45
$context["candidature"], "status", [], "any", false, false, false, 45), "shortlisted"))) {
                        // line 46
                        echo "                                                    <i data-feather=\"check-circle\"></i>Shortlisted
                                                ";
                    }
                    // line 48
                    echo "                                            </td>
                                            <td class=\"action\">
                                                <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["AnnonceId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "s" => "shortlisted"]), "html", null, true);
                    echo "\" class=\"download\"><i data-feather=\"check-circle\"></i></a>
                                                <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["AnnonceId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "s" => "rejected"]), "html", null, true);
                    echo "\" class=\"remove\"><i data-feather=\"x-circle\"></i></a>
                                            </td>
                                        </tr>
                                    ";
                }
                // line 55
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                ";
        }
        // line 57
        echo "                                </tbody>
                            </table>
                            <div class=\"pagination-list text-center\">
                                <nav class=\"navigation pagination\">
                                    <div class=\"nav-links\">
                                        ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 62, $this->source); })()));
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
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "picture", [], "any", false, false, false, 71))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"company-body\">
                                <h5>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "compname", [], "any", false, false, false, 74), "html", null, true);
        echo "</h5>
                            </div>
                        </div>
                        <div class=\"dashboard-menu\">
                            <ul>
                                <li><i class=\"fas fa-user\"></i><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Edit Profile</a></li>
                                <li><i class=\"fas fa-briefcase\"></i><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
        echo "\">Manage Jobs</a></li>
                                <li class=\"active\"><i class=\"fas fa-users\"></i><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_index");
        echo "\">Manage Candidates</a></li>
                                <li><i class=\"fas fa-users\"></i><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("managed_applications");
        echo "\">Managed Applications</a></li>
                                <li><i class=\"fas fa-plus-square\"></i><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
        echo "\">Post New Job</a></li>
                            </ul>
                            <ul class=\"delete\">
                                <li><i class=\"fas fa-power-off\"></i><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                                <li><i class=\"fas fa-trash-alt\"></i><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-delete\">Delete Profile</a></li>
                            </ul>
                            <!-- Modal -->
                            <div class=\"modal fade modal-delete\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::deactivate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]));
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
        return "Profile/employer/candidates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 91,  225 => 86,  219 => 83,  215 => 82,  211 => 81,  207 => 80,  203 => 79,  195 => 74,  189 => 71,  177 => 62,  170 => 57,  167 => 56,  161 => 55,  154 => 51,  150 => 50,  146 => 48,  142 => 46,  140 => 45,  137 => 44,  135 => 43,  127 => 40,  116 => 36,  110 => 33,  105 => 30,  102 => 29,  97 => 28,  89 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Profile/baseProfile.html.twig' %}

{% block body %}
<div class=\"alice-bg section-padding-bottom\">
    <div class=\"container no-gliters\">
        <div class=\"row no-gliters\">
            <div class=\"col\">
                <div class=\"dashboard-container\">
                    <div class=\"dashboard-content-wrapper\">
                        <div class=\"manage-candidate-container\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Candidate</th>
                                    <th>Job applied to</th>
                                    <th>Status</th>
                                    <th class=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% if candidatures is empty %}
                                </tbody>
                                </table>
                                <div style=\"margin-left:295px;margin-top:70px;font-size: 1.4rem;font-family: 'Poppins', sans-serif; font-weight: 500; color: #6f7484;\">
                                    No Application(s) To Manage Yet
                                </div>
                                {% else %}
                                {% for candidature in candidatures %}
                                    {% if candidature.status != 'rejected' and candidature.status != 'shortlisted' %}
                                        <tr class=\"candidates-list\">
                                            <td class=\"title\" style=\"margin-right: -70px;\">
                                                <div class=\"thumb\">
                                                    <img src=\"{{  asset('Uploads/User_Images/' ~ candidature.user.picture) }}\" class=\"img-fluid\" alt=\"\">
                                                </div>
                                                <div class=\"body\">
                                                    <h5><a href=\"{{ path('resume',{'id':candidature.user.id}) }}\" target=\"_blank\">{{ candidature.user.firstName }} {{ candidature.user.lastName }}</a></h5>
                                                </div>
                                            </td>
                                            <td class=\"status\">
                                                <h5 style=\"color: #232630\"><a href=\"{{path('annonce_show',{'id':candidature.annonce.id})}}\" target=\"_blank\">{{ candidature.annonce.title }}</a></h5>
                                            </td>
                                            <td class=\"status\">
                                                {% if not candidature.status %}
                                                    N/A
                                                {% elseif candidature.status == 'shortlisted' %}
                                                    <i data-feather=\"check-circle\"></i>Shortlisted
                                                {% endif %}
                                            </td>
                                            <td class=\"action\">
                                                <a href=\"{{ path('status',{'AnnonceId':candidature.annonce.id,'UserId':candidature.user.id,'s':'shortlisted'}) }}\" class=\"download\"><i data-feather=\"check-circle\"></i></a>
                                                <a href=\"{{ path('status',{'AnnonceId':candidature.annonce.id,'UserId':candidature.user.id,'s':'rejected'}) }}\" class=\"remove\"><i data-feather=\"x-circle\"></i></a>
                                            </td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                                {% endif %}
                                </tbody>
                            </table>
                            <div class=\"pagination-list text-center\">
                                <nav class=\"navigation pagination\">
                                    <div class=\"nav-links\">
                                        {{  knp_pagination_render(candidatures) }}
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"dashboard-sidebar\">
                        <div class=\"company-info\">
                            <div class=\"thumb\">
                                <img src=\"{{ asset('Uploads/User_Images/'~ app.user.picture) }}\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"company-body\">
                                <h5>{{ app.user.compname }}</h5>
                            </div>
                        </div>
                        <div class=\"dashboard-menu\">
                            <ul>
                                <li><i class=\"fas fa-user\"></i><a href=\"{{ path('edit_profile') }}\">Edit Profile</a></li>
                                <li><i class=\"fas fa-briefcase\"></i><a href=\"{{ path('mes_annonces') }}\">Manage Jobs</a></li>
                                <li class=\"active\"><i class=\"fas fa-users\"></i><a href=\"{{ path('candidature_index') }}\">Manage Candidates</a></li>
                                <li><i class=\"fas fa-users\"></i><a href=\"{{ path('managed_applications') }}\">Managed Applications</a></li>
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
{% endblock %}", "Profile/employer/candidates.html.twig", "/Users/macbookpro/Documents/final/templates/Profile/employer/candidates.html.twig");
    }
}
