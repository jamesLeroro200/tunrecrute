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

/* candidature/index.html.twig */
class __TwigTemplate_e5b2e6612a2dc738db50da7f9890644e88a20b95cfec8e969cdf86f5336eac90 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        $this->parent = $this->loadTemplate("Profile/baseProfile.html.twig", "candidature/index.html.twig", 1);
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
        echo "    <div class=\"alice-bg section-padding-bottom\" >
        <div class=\"container no-gliters\" style=\"max-width: 990px;\">
            <div class=\"row no-gliters\">
                <div class=\"col\">
                    <div class=\"dashboard-container\">
                        <div class=\"dashboard-content-wrapper\" style=\"width: 100%\">
                            <div class=\"manage-candidate-container\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th >Candidate</th>
                                        <th >Status</th>
                                        <th class=\"action\">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 20
        if (twig_test_empty((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "                                    </tbody>
                                    </table>
                                    <div style=\"margin-left:330px;margin-top:70px;font-size: 1.4rem;font-family: 'Poppins', sans-serif; font-weight: 500; color: #6f7484;\">
                                    No Application(s) To Manage Yet
                                    </div>
                                    ";
        } else {
            // line 27
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 28
                echo "                                    ";
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 28), "rejected")) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 28), "shortlisted")))) {
                    // line 29
                    echo "                                    <tr class=\"candidates-list\">
                                        <td class=\"title\">
                                            <div class=\"thumb\">
                                                <img src=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 32), "picture", [], "any", false, false, false, 32))), "html", null, true);
                    echo "\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <div class=\"body\">
                                                <h5><a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 35), "firstName", [], "any", false, false, false, 35), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 35), "lastName", [], "any", false, false, false, 35), "html", null, true);
                    echo "</a></h5>
                                            </div>
                                        </td>
                                        <td class=\"status\">
                                            ";
                    // line 39
                    if ( !twig_get_attribute($this->env, $this->source, $context["candidature"], "status", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "                                            N/A
                                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 41
$context["candidature"], "status", [], "any", false, false, false, 41), "shortlisted"))) {
                        // line 42
                        echo "                                            <i data-feather=\"check-circle\"></i>Shortlisted
                                            ";
                    }
                    // line 44
                    echo "                                        </td>
                                        <td class=\"action\">
                                            <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["AnnonceId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "s" => "shortlisted"]), "html", null, true);
                    echo "\" class=\"download\"><i data-feather=\"check-circle\"></i></a>
                                            <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["AnnonceId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "annonce", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "UserId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "s" => "rejected"]), "html", null, true);
                    echo "\" class=\"remove\"><i data-feather=\"x-circle\"></i></a>
                                        </td>
                                    </tr>
                                    ";
                }
                // line 51
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                    ";
        }
        // line 53
        echo "                                    </tbody>
                                </table>
                                <div class=\"pagination-list text-center\">
                                    <nav class=\"navigation pagination\">
                                        <div class=\"nav-links\">
                                            ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 58, $this->source); })()));
        echo "
                                        </div>
                                    </nav>
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
        return "candidature/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 58,  161 => 53,  158 => 52,  152 => 51,  145 => 47,  141 => 46,  137 => 44,  133 => 42,  131 => 41,  128 => 40,  126 => 39,  115 => 35,  109 => 32,  104 => 29,  101 => 28,  96 => 27,  88 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Profile/baseProfile.html.twig' %}

{% block body %}
    <div class=\"alice-bg section-padding-bottom\" >
        <div class=\"container no-gliters\" style=\"max-width: 990px;\">
            <div class=\"row no-gliters\">
                <div class=\"col\">
                    <div class=\"dashboard-container\">
                        <div class=\"dashboard-content-wrapper\" style=\"width: 100%\">
                            <div class=\"manage-candidate-container\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th >Candidate</th>
                                        <th >Status</th>
                                        <th class=\"action\">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% if candidatures is empty%}
                                    </tbody>
                                    </table>
                                    <div style=\"margin-left:330px;margin-top:70px;font-size: 1.4rem;font-family: 'Poppins', sans-serif; font-weight: 500; color: #6f7484;\">
                                    No Application(s) To Manage Yet
                                    </div>
                                    {% else %}
                                    {% for candidature in candidatures %}
                                    {% if candidature.status != 'rejected' or candidature.status != 'shortlisted' %}
                                    <tr class=\"candidates-list\">
                                        <td class=\"title\">
                                            <div class=\"thumb\">
                                                <img src=\"{{  asset('Uploads/User_Images/' ~ candidature.user.picture) }}\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <div class=\"body\">
                                                <h5><a href=\"{{ path('resume',{'id':candidature.user.id}) }}\" target=\"_blank\">{{ candidature.user.firstName }} {{ candidature.user.lastName }}</a></h5>
                                            </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "candidature/index.html.twig", "/Users/macbookpro/Documents/final/templates/candidature/index.html.twig");
    }
}
