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

/* profile/candidate/applied.html.twig */
class __TwigTemplate_2b66436d471d4ec1f8ff05144ec90a512c2a73063a7f5b89de18f71466ce0423 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/candidate/applied.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/candidate/applied.html.twig"));

        $this->parent = $this->loadTemplate("profile/baseProfile.html.twig", "profile/candidate/applied.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"alice-bg section-padding-bottom\">
    <div class=\"container no-gliters\">
        <div class=\"row no-gliters\">
            <div class=\"col\">
                <div class=\"dashboard-container\">
                    <div class=\"dashboard-content-wrapper\">
                        <div class=\"dashboard-applied\">
                            <h4 class=\"apply-title\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " Job(s) Applied</h4>
                            <div class=\"dashboard-apply-area\">
                                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cand"]) {
            // line 13
            echo "                                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cand"], "isDeleted", [], "any", false, false, false, 13), false))) {
                // line 14
                echo "                                <div class=\"job-list\">
                                    <div class=\"thumb\">
                                        <a href=\"#\">
                                            <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Uploads/User_Images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "annonce", [], "any", false, false, false, 17), "user", [], "any", false, false, false, 17), "picture", [], "any", false, false, false, 17)), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"\">
                                        </a>
                                    </div>
                                    <div class=\"body\">
                                        <div class=\"content\">
                                            <h4><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "annonce", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "annonce", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</a></h4>
                                            <div class=\"info\">
                                                <span class=\"company\"><a href=\"#\"><i data-feather=\"briefcase\"></i>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "annonce", [], "any", false, false, false, 24), "user", [], "any", false, false, false, 24), "compname", [], "any", false, false, false, 24), "html", null, true);
                echo "</a></span>
                                                <span class=\"office-location\"><a href=\"#\"><i data-feather=\"map-pin\"></i>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "annonce", [], "any", false, false, false, 25), "adresseTravail", [], "any", false, false, false, 25), "html", null, true);
                echo "</a></span>
                                                <span class=\"job-type part-time\"><a href=\"#\"><i data-feather=\"file\"></i>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "annonce", [], "any", false, false, false, 26), "contrat", [], "any", false, false, false, 26), "html", null, true);
                echo "</a></span>
                                                ";
                // line 27
                if ( !twig_get_attribute($this->env, $this->source, $context["cand"], "status", [], "any", false, false, false, 27)) {
                    echo " <span class=\"status\"><i data-feather=\"clock\"></i> Application Pending";
                }
                echo "</span>
                                                ";
                // line 28
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cand"], "status", [], "any", false, false, false, 28), "shortlisted"))) {
                    echo " <span class=\"status\" style=\"color: #01d13d;\"><i data-feather=\"check-circle\" style=\"color: #01d13d;\"></i> Shortlisted! Check your email!";
                }
                echo "</span>
                                                ";
                // line 29
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cand"], "status", [], "any", false, false, false, 29), "rejected"))) {
                    echo " <span class=\"status\" style=\"color: #ff3366;\"><i data-feather=\"x-circle\" style=\"color: #ff3366;\"></i>Rejected :( ";
                }
                echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"more\">
                                            <form>
                                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_delete", ["UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "AnnonceId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cand"], "annonce", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"bookmark-remove\" onclick=\"this.form.submit()\"><i class=\"fas fa-times\"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                ";
            }
            // line 40
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"dashboard-sidebar\">
                        <div class=\"user-info\">
                            <div class=\"thumb\">
                                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "picture", [], "any", false, false, false, 47))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"user-body\">
                                <h5>";
        // line 50
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "firstname", [], "any", false, false, false, 50) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "lastname", [], "any", false, false, false, 50)), "html", null, true);
        echo "</h5>
                            </div>
                        </div>
                        <div class=\"dashboard-menu\">
                            <ul>
                                <li><i class=\"fas fa-user\"></i><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Edit Profile</a></li>
                                <li><i class=\"fas fa-file-alt\"></i><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume");
        echo "\">Resume</a></li>
                                <li><i class=\"fas fa-edit\"></i><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume_edit");
        echo "\">Edit Resume</a></li>
                                <li class=\"active\"><i class=\"fas fa-check-square\"></i><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applied_jobs");
        echo "\">Applied Job</a></li>
                            </ul>
                            <ul class=\"delete\">
                                <li><i class=\"fas fa-power-off\"></i><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                                <li><i class=\"fas fa-trash-alt\"></i><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-delete\">Delete Profile</a></li>
                            </ul>
                            <!-- Modal -->
                            <div class=\"modal fade modal-delete\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::deactivate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]));
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
        return "profile/candidate/applied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 66,  198 => 61,  192 => 58,  188 => 57,  184 => 56,  180 => 55,  172 => 50,  166 => 47,  158 => 41,  152 => 40,  143 => 34,  133 => 29,  127 => 28,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  102 => 22,  94 => 17,  89 => 14,  86 => 13,  82 => 12,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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
                        <div class=\"dashboard-applied\">
                            <h4 class=\"apply-title\">{{ count }} Job(s) Applied</h4>
                            <div class=\"dashboard-apply-area\">
                                {% for cand in candidatures %}
                                {% if cand.isDeleted == false %}
                                <div class=\"job-list\">
                                    <div class=\"thumb\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('Uploads/User_Images/') ~ cand.annonce.user.picture }}\" class=\"img-fluid\" alt=\"\">
                                        </a>
                                    </div>
                                    <div class=\"body\">
                                        <div class=\"content\">
                                            <h4><a href=\"{{ path('annonce_show',{'id':cand.annonce.id})}}\">{{ cand.annonce.title }}</a></h4>
                                            <div class=\"info\">
                                                <span class=\"company\"><a href=\"#\"><i data-feather=\"briefcase\"></i>{{ cand.annonce.user.compname }}</a></span>
                                                <span class=\"office-location\"><a href=\"#\"><i data-feather=\"map-pin\"></i>{{ cand.annonce.adresseTravail }}</a></span>
                                                <span class=\"job-type part-time\"><a href=\"#\"><i data-feather=\"file\"></i>{{ cand.annonce.contrat }}</a></span>
                                                {% if not cand.status %} <span class=\"status\"><i data-feather=\"clock\"></i> Application Pending{% endif %}</span>
                                                {% if cand.status == 'shortlisted' %} <span class=\"status\" style=\"color: #01d13d;\"><i data-feather=\"check-circle\" style=\"color: #01d13d;\"></i> Shortlisted! Check your email!{% endif %}</span>
                                                {% if cand.status == 'rejected' %} <span class=\"status\" style=\"color: #ff3366;\"><i data-feather=\"x-circle\" style=\"color: #ff3366;\"></i>Rejected :( {% endif %}</span>
                                            </div>
                                        </div>
                                        <div class=\"more\">
                                            <form>
                                            <a href=\"{{ path('candidature_delete',{'UserId':cand.user.id,'AnnonceId':cand.annonce.id}) }}\" class=\"bookmark-remove\" onclick=\"this.form.submit()\"><i class=\"fas fa-times\"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"dashboard-sidebar\">
                        <div class=\"user-info\">
                            <div class=\"thumb\">
                                <img src=\"{{ asset('Uploads/User_Images/' ~ app.user.picture) }}\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"user-body\">
                                <h5>{{ app.user.firstname ~ ' ' ~ app.user.lastname }}</h5>
                            </div>
                        </div>
                        <div class=\"dashboard-menu\">
                            <ul>
                                <li><i class=\"fas fa-user\"></i><a href=\"{{  path('edit_profile') }}\">Edit Profile</a></li>
                                <li><i class=\"fas fa-file-alt\"></i><a href=\"{{  path('resume') }}\">Resume</a></li>
                                <li><i class=\"fas fa-edit\"></i><a href=\"{{  path('resume_edit') }}\">Edit Resume</a></li>
                                <li class=\"active\"><i class=\"fas fa-check-square\"></i><a href=\"{{  path('applied_jobs') }}\">Applied Job</a></li>
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
{% endblock %}", "profile/candidate/applied.html.twig", "/Users/macbookpro/Documents/final/templates/profile/candidate/applied.html.twig");
    }
}
