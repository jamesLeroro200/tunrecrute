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

/* Profile/employer/managedApps.html.twig */
class __TwigTemplate_5220112914e203ee844da283ed3e0fb4567197518d679ac99114ad3094769cdc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/employer/managedApps.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/employer/managedApps.html.twig"));

        $this->parent = $this->loadTemplate("Profile/baseProfile.html.twig", "Profile/employer/managedApps.html.twig", 1);
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
                            <div class=\"manage-candidate-container\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Candidate</th>
                                        <th>Job applied to</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class=\"action\">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 22
        if (twig_test_empty((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                                    </tbody>
                                </table>
                                <div style=\"margin-left:295px;margin-top:70px;font-size: 1.4rem;font-family: 'Poppins', sans-serif; font-weight: 500; color: #6f7484;\">
                                    No Application(s) Managed
                                </div>
                                ";
        } else {
            // line 29
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 30
                echo "                                            <tr class=\"candidates-list\">
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
                echo "\" style=\"padding-top: 8px;\" target=\"_blank\">";
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
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 43), "rejected"))) {
                    // line 44
                    echo "                                                        <i data-feather=\"x-circle\" style=\"color: #ff3366;\"></i><span style=\"color: #ff3366;\">Rejected</span>
                                                    ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 45
$context["candidature"], "status", [], "any", false, false, false, 45), "shortlisted"))) {
                    // line 46
                    echo "                                                        <i data-feather=\"check-circle\" style=\"color: #01d13d;\"></i><span style=\"color: #01d13d;\">Shortlisted</span>
                                                    ";
                }
                // line 48
                echo "                                                </td>
                                                <td class=\"status\">
                                                    ";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "date", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                echo "
                                                </td>
                                                <td class=\"action\">
                                                    ";
                // line 53
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 53), "rejected"))) {
                    // line 54
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["AnnonceId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "s" => "shortlisted"]), "html", null, true);
                    echo "\" class=\"download\"><i data-feather=\"check-circle\"></i></a>
                                                    ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 55
$context["candidature"], "status", [], "any", false, false, false, 55), "shortlisted"))) {
                    // line 56
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["AnnonceId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "s" => "rejected"]), "html", null, true);
                    echo "\" class=\"remove\"><i data-feather=\"x-circle\"></i></a>
                                                    ";
                }
                // line 58
                echo "                                                </td>
                                            </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                ";
        }
        // line 62
        echo "                                </tbody>
                                </table>
                                <div class=\"pagination-list text-center\">
                                    <nav class=\"navigation pagination\">
                                        <div class=\"nav-links\">
                                            ";
        // line 67
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 67, $this->source); })()));
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
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "picture", [], "any", false, false, false, 76))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"company-body\">
                                    <h5>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "compname", [], "any", false, false, false, 79), "html", null, true);
        echo "</h5>
                                </div>
                            </div>
                            <div class=\"dashboard-menu\">
                                <ul>
                                    <li><i class=\"fas fa-user\"></i><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Edit Profile</a></li>
                                    <li><i class=\"fas fa-briefcase\"></i><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
        echo "\">Manage Jobs</a></li>
                                    <li><i class=\"fas fa-users\"></i><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_index");
        echo "\">Manage Candidates</a></li>
                                    <li class=\"active\"><i class=\"fas fa-calendar-check\"></i><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("managed_applications");
        echo "\">Managed Applications</a></li>
                                    <li><i class=\"fas fa-plus-square\"></i><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
        echo "\">Post New Job</a></li>
                                </ul>
                                <ul class=\"delete\">
                                    <li><i class=\"fas fa-power-off\"></i><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                                    <li><i class=\"fas fa-trash-alt\"></i><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-delete\">Delete Profile</a></li>
                                </ul>
                                <!-- Modal -->
                                <div class=\"modal fade modal-delete\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::deactivate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96)]));
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
        return "Profile/employer/managedApps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 96,  235 => 91,  229 => 88,  225 => 87,  221 => 86,  217 => 85,  213 => 84,  205 => 79,  199 => 76,  187 => 67,  180 => 62,  177 => 61,  169 => 58,  163 => 56,  161 => 55,  156 => 54,  154 => 53,  148 => 50,  144 => 48,  140 => 46,  138 => 45,  135 => 44,  133 => 43,  125 => 40,  114 => 36,  108 => 33,  103 => 30,  98 => 29,  90 => 23,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
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
                                        <th>Date</th>
                                        <th class=\"action\">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% if candidatures is empty %}
                                    </tbody>
                                </table>
                                <div style=\"margin-left:295px;margin-top:70px;font-size: 1.4rem;font-family: 'Poppins', sans-serif; font-weight: 500; color: #6f7484;\">
                                    No Application(s) Managed
                                </div>
                                {% else %}
                                    {% for candidature in candidatures %}
                                            <tr class=\"candidates-list\">
                                                <td class=\"title\" style=\"margin-right: -70px;\">
                                                    <div class=\"thumb\">
                                                        <img src=\"{{  asset('Uploads/User_Images/' ~ candidature.user.picture) }}\" class=\"img-fluid\" alt=\"\">
                                                    </div>
                                                    <div class=\"body\">
                                                        <h5><a href=\"{{ path('resume',{'id':candidature.user.id}) }}\" style=\"padding-top: 8px;\" target=\"_blank\">{{ candidature.user.firstName }} {{ candidature.user.lastName }}</a></h5>
                                                    </div>
                                                </td>
                                                <td class=\"status\">
                                                    <h5 style=\"color: #232630\"><a href=\"{{path('annonce_show',{'id':candidature.annonce.id})}}\" target=\"_blank\">{{ candidature.annonce.title }}</a></h5>
                                                </td>
                                                <td class=\"status\">
                                                    {% if candidature.status == 'rejected' %}
                                                        <i data-feather=\"x-circle\" style=\"color: #ff3366;\"></i><span style=\"color: #ff3366;\">Rejected</span>
                                                    {% elseif candidature.status == 'shortlisted' %}
                                                        <i data-feather=\"check-circle\" style=\"color: #01d13d;\"></i><span style=\"color: #01d13d;\">Shortlisted</span>
                                                    {% endif %}
                                                </td>
                                                <td class=\"status\">
                                                    {{ candidature.date|date('d/m/Y') }}
                                                </td>
                                                <td class=\"action\">
                                                    {% if candidature.status == 'rejected' %}
                                                        <a href=\"{{ path('status',{'AnnonceId':candidature.annonce.id,'UserId':candidature.user.id,'s':'shortlisted'}) }}\" class=\"download\"><i data-feather=\"check-circle\"></i></a>
                                                    {% elseif candidature.status == 'shortlisted' %}
                                                        <a href=\"{{ path('status',{'AnnonceId':candidature.annonce.id,'UserId':candidature.user.id,'s':'rejected'}) }}\" class=\"remove\"><i data-feather=\"x-circle\"></i></a>
                                                    {% endif %}
                                                </td>
                                            </tr>
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
                                    <li><i class=\"fas fa-users\"></i><a href=\"{{ path('candidature_index') }}\">Manage Candidates</a></li>
                                    <li class=\"active\"><i class=\"fas fa-calendar-check\"></i><a href=\"{{ path('managed_applications') }}\">Managed Applications</a></li>
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
{% endblock %}", "Profile/employer/managedApps.html.twig", "/Users/macbookpro/Documents/final/templates/Profile/employer/managedApps.html.twig");
    }
}
