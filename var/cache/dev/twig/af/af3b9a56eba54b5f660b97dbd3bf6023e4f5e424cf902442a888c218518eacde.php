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

/* profile/employer/resume.html.twig */
class __TwigTemplate_7356a49772840a18ce00f59e14b59f971e40be4d6e0e13218d2b80ea86f04973 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/employer/resume.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/employer/resume.html.twig"));

        $this->parent = $this->loadTemplate("profile/baseProfile.html.twig", "profile/employer/resume.html.twig", 1);
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
        echo "    <div class=\"alice-bg section-padding-bottom\">
        <div class=\"container no-gliters\">
            <div class=\"row no-gliters\">
                <div class=\"col\">
                    <div class=\"dashboard-container\">
                        <div class=\"dashboard-content-wrapper\">
                            ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "cvFilename", [], "any", false, false, false, 9) || twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "coverLetterFilename", [], "any", false, false, false, 9))) {
            // line 10
            echo "                                <div class=\"download-resume dashboard-section\">
                                    ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "cvFilename", [], "any", false, false, false, 11)) {
                // line 12
                echo "                                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("downloadCV");
                echo "\">Download CV<i data-feather=\"download\"></i></a>
                                    ";
            }
            // line 14
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "coverLetterFilename", [], "any", false, false, false, 14)) {
                // line 15
                echo "                                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("downloadCL");
                echo "\">Download Cover Letter<i data-feather=\"download\"></i></a>
                                    ";
            }
            // line 17
            echo "                                </div>
                            ";
        }
        // line 19
        echo "                            ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "profSkills", [], "any", false, false, false, 19)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "socialMedia", [], "any", false, false, false, 19)))) {
            // line 20
            echo "                                <div class=\"skill-and-profile dashboard-section\">
                                    ";
            // line 21
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "profskills", [], "any", false, false, false, 21))) {
                // line 22
                echo "                                    <div class=\"skill\">
                                        <label>Skills:</label>
                                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "profskills", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 25
                    echo "                                        <a href=\"#\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 25), "html", null, true);
                    echo "</a>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                                    </div>
                                    ";
            }
            // line 29
            echo "                                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "socialMedia", [], "any", false, false, false, 29))) {
                // line 30
                echo "                                        <div class=\"social-profile\">
                                            <label>Social Media:</label>
                                            ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "socialMedia", [], "any", false, false, false, 32), "facebook", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "socialMedia", [], "any", false, false, false, 33), "facebook", [], "any", false, false, false, 33), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                            ";
                }
                // line 35
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "socialMedia", [], "any", false, false, false, 35), "twitter", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "socialMedia", [], "any", false, false, false, 36), "twitter", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                            ";
                }
                // line 38
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "socialMedia", [], "any", false, false, false, 38), "google", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "socialMedia", [], "any", false, false, false, 39), "google", [], "any", false, false, false, 39), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-google-plus\"></i></a>
                                            ";
                }
                // line 41
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "socialMedia", [], "any", false, false, false, 41), "linkedin", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "socialMedia", [], "any", false, false, false, 42), "linkedin", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                                            ";
                }
                // line 44
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "socialMedia", [], "any", false, false, false, 44), "pintrest", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "socialMedia", [], "any", false, false, false, 45), "pintrest", [], "any", false, false, false, 45), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                            ";
                }
                // line 47
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "socialMedia", [], "any", false, false, false, 47), "behance", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "socialMedia", [], "any", false, false, false, 48), "behance", [], "any", false, false, false, 48), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-behance\"></i></a>
                                            ";
                }
                // line 50
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "socialMedia", [], "any", false, false, false, 50), "dribbble", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "socialMedia", [], "any", false, false, false, 51), "dribbble", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a>
                                            ";
                }
                // line 53
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "socialMedia", [], "any", false, false, false, 53), "github", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "socialMedia", [], "any", false, false, false, 54), "github", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                                            ";
                }
                // line 56
                echo "                                        </div>
                                    ";
            }
            // line 58
            echo "                                </div>
                            ";
        }
        // line 60
        echo "                            <div class=\"personal-information dashboard-section last-child details-section\">
                                <h4><i data-feather=\"user-plus\"></i>Personal Details</h4>
                                <ul>
                                    <li><span>Full Name:</span>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "firstname", [], "any", false, false, false, 63), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "lastname", [], "any", false, false, false, 63), "html", null, true);
        echo "</li>
                                    <li><span>Email:</span>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "email", [], "any", false, false, false, 64), "html", null, true);
        echo "</li>
                                    <li><span>Date of Birth:</span> ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "birthdate", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
        echo "</li>
                                    <li><span>Nationality:</span> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "nationality", [], "any", false, false, false, 66), "html", null, true);
        echo " </li>
                                    <li><span>Sex:</span> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "sex", [], "any", false, false, false, 67), "html", null, true);
        echo "</li>
                                    <li><span>Address:</span>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "address", [], "any", false, false, false, 68), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                            <div class=\"about-details details-section dashboard-section\">
                                <h4><i data-feather=\"align-left\"></i>About Me</h4>
                                <p>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "aboutme", [], "any", false, false, false, 73), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"edication-background details-section dashboard-section\">
                                <h4><i data-feather=\"book\"></i>Education Background</h4>
                                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "education", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
            // line 78
            echo "                                    <div class=\"education-label\">
                                        <span class=\"study-year\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "startYear", [], "any", false, false, false, 79), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "endYear", [], "any", false, false, false, 79), "html", null, true);
            echo "</span>
                                        <h5>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "DiplomaTitle", [], "any", false, false, false, 80), "html", null, true);
            echo "<span>@ ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "InstitutionName", [], "any", false, false, false, 80), "html", null, true);
            echo "</span></h5>
                                        <p>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "Description", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"briefcase\"></i>Work Experiance</h4>
                                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "workExps", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 88
            echo "                                    <div class=\"experience-section\">
                                        <span class=\"service-year\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "startYear", [], "any", false, false, false, 89), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "endYear", [], "any", false, false, false, 89), "html", null, true);
            echo "</span>
                                        <h5>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "Title", [], "any", false, false, false, 90), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, ("@ " . twig_get_attribute($this->env, $this->source, $context["work"], "companyName", [], "any", false, false, false, 90)), "html", null, true);
            echo "</span></h5>
                                        <p>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "Description", [], "any", false, false, false, 91), "html", null, true);
            echo "</p>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                            </div>
                            <div class=\"professonal-skill dashboard-section details-section\">
                                <h4><i data-feather=\"feather\"></i>Professional Skill</h4>
                                <div class=\"progress-group\">
                                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "profSkills", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 99
            echo "                                        <div class=\"progress-item\">
                                            <div class=\"progress-head\">
                                                <p class=\"progress-on\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "Name", [], "any", false, false, false, 101), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"progress-body\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "Percent", [], "any", false, false, false, 105), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0;\"></div>
                                                </div>
                                                <p class=\"progress-to\">";
            // line 107
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["skill"], "Percent", [], "any", false, false, false, 107) . "%"), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                </div>
                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"globe\"></i>Languages</h4>
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "languageProfs", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 116
            echo "                                    <div class=\"experience-section lang\">
                                        <h5>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "LanguageName", [], "any", false, false, false, 117), "html", null, true);
            echo "<span style=\"margin-left: 0px;\">";
            echo twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, $context["lang"], "ProfeciencyLvl", [], "any", false, false, false, 117)), "html", null, true);
            echo "</span></h5>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                            </div>
                        </div>
                        <div class=\"dashboard-sidebar\">
                            <div class=\"user-info\">
                                <figure style=\"text-align: center;margin-bottom: 10px\">
                                    <div style=\"margin-bottom: 22px\">
                                        <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "picture", [], "any", false, false, false, 126))), "html", null, true);
        echo "\" class=\"img-fluid\"style=\"max-width: 65%; border-radius: 100%\" alt=\"\">
                                    </div>
                                    <figcaption>
                                        <div class=\"user-body\">
                                            <h5 style=\"text-transform: uppercase;font-size: 24px\">";
        // line 130
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "firstname", [], "any", false, false, false, 130) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "lastname", [], "any", false, false, false, 130)), "html", null, true);
        echo "</h5>
                                        </div>
                                    </figcaption>

                                </figure>
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
        return "profile/employer/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 130,  388 => 126,  380 => 120,  369 => 117,  366 => 116,  362 => 115,  356 => 111,  346 => 107,  341 => 105,  334 => 101,  330 => 99,  326 => 98,  320 => 94,  311 => 91,  305 => 90,  299 => 89,  296 => 88,  292 => 87,  287 => 84,  278 => 81,  272 => 80,  266 => 79,  263 => 78,  259 => 77,  252 => 73,  244 => 68,  240 => 67,  236 => 66,  232 => 65,  228 => 64,  222 => 63,  217 => 60,  213 => 58,  209 => 56,  203 => 54,  200 => 53,  194 => 51,  191 => 50,  185 => 48,  182 => 47,  176 => 45,  173 => 44,  167 => 42,  164 => 41,  158 => 39,  155 => 38,  149 => 36,  146 => 35,  140 => 33,  138 => 32,  134 => 30,  131 => 29,  127 => 27,  118 => 25,  114 => 24,  110 => 22,  108 => 21,  105 => 20,  102 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 12,  81 => 11,  78 => 10,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
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
                            {% if user.cvFilename or  user.coverLetterFilename%}
                                <div class=\"download-resume dashboard-section\">
                                    {% if user.cvFilename %}
                                        <a href=\"{{ path('downloadCV') }}\">Download CV<i data-feather=\"download\"></i></a>
                                    {% endif %}
                                    {% if user.coverLetterFilename %}
                                        <a href=\"{{ path('downloadCL') }}\">Download Cover Letter<i data-feather=\"download\"></i></a>
                                    {% endif %}
                                </div>
                            {% endif %}
                            {% if not user.profSkills is empty  or not user.socialMedia is empty%}
                                <div class=\"skill-and-profile dashboard-section\">
                                    {% if not user.profskills is empty %}
                                    <div class=\"skill\">
                                        <label>Skills:</label>
                                        {% for skill in user.profskills %}
                                        <a href=\"#\">{{ skill.name }}</a>
                                        {% endfor %}
                                    </div>
                                    {% endif %}
                                    {% if not user.socialMedia is empty %}
                                        <div class=\"social-profile\">
                                            <label>Social Media:</label>
                                            {% if user.socialMedia.facebook %}
                                                <a href=\"{{ user.socialMedia.facebook }}\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                            {% endif %}
                                            {% if user.socialMedia.twitter %}
                                                <a href=\"{{ user.socialMedia.twitter }}\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                            {% endif %}
                                            {% if user.socialMedia.google %}
                                                <a href=\"{{ user.socialMedia.google }}\" target=\"_blank\"><i class=\"fab fa-google-plus\"></i></a>
                                            {% endif %}
                                            {% if user.socialMedia.linkedin %}
                                                <a href=\"{{ user.socialMedia.linkedin }}\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                                            {% endif %}
                                            {% if user.socialMedia.pintrest %}
                                                <a href=\"{{ user.socialMedia.pintrest }}\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                            {% endif %}
                                            {% if user.socialMedia.behance %}
                                                <a href=\"{{ user.socialMedia.behance }}\" target=\"_blank\"><i class=\"fab fa-behance\"></i></a>
                                            {% endif %}
                                            {% if user.socialMedia.dribbble %}
                                                <a href=\"{{ user.socialMedia.dribbble }}\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a>
                                            {% endif %}
                                            {% if user.socialMedia.github %}
                                                <a href=\"{{ user.socialMedia.github }}\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            <div class=\"personal-information dashboard-section last-child details-section\">
                                <h4><i data-feather=\"user-plus\"></i>Personal Details</h4>
                                <ul>
                                    <li><span>Full Name:</span>{{ user.firstname }} {{ user.lastname }}</li>
                                    <li><span>Email:</span>{{ app.user.email }}</li>
                                    <li><span>Date of Birth:</span> {{ user.birthdate|date('d/m/Y') }}</li>
                                    <li><span>Nationality:</span> {{ user.nationality }} </li>
                                    <li><span>Sex:</span> {{ user.sex }}</li>
                                    <li><span>Address:</span>{{ user.address }}</li>
                                </ul>
                            </div>
                            <div class=\"about-details details-section dashboard-section\">
                                <h4><i data-feather=\"align-left\"></i>About Me</h4>
                                <p>{{ user.aboutme }}</p>
                            </div>
                            <div class=\"edication-background details-section dashboard-section\">
                                <h4><i data-feather=\"book\"></i>Education Background</h4>
                                {% for edu in user.education %}
                                    <div class=\"education-label\">
                                        <span class=\"study-year\">{{ edu.startYear }} - {{ edu.endYear }}</span>
                                        <h5>{{ edu.DiplomaTitle }}<span>@ {{ edu.InstitutionName }}</span></h5>
                                        <p>{{ edu.Description }}</p>
                                    </div>
                                {% endfor %}
                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"briefcase\"></i>Work Experiance</h4>
                                {% for work in user.workExps %}
                                    <div class=\"experience-section\">
                                        <span class=\"service-year\">{{ work.startYear }} - {{ work.endYear }}</span>
                                        <h5>{{ work.Title }}<span>{{ '@ '~ work.companyName }}</span></h5>
                                        <p>{{ work.Description }}</p>
                                    </div>
                                {% endfor %}
                            </div>
                            <div class=\"professonal-skill dashboard-section details-section\">
                                <h4><i data-feather=\"feather\"></i>Professional Skill</h4>
                                <div class=\"progress-group\">
                                    {% for skill in user.profSkills %}
                                        <div class=\"progress-item\">
                                            <div class=\"progress-head\">
                                                <p class=\"progress-on\">{{ skill.Name }}</p>
                                            </div>
                                            <div class=\"progress-body\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"{{ skill.Percent }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0;\"></div>
                                                </div>
                                                <p class=\"progress-to\">{{skill.Percent~'%'}}</p>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"globe\"></i>Languages</h4>
                                {% for lang in user.languageProfs %}
                                    <div class=\"experience-section lang\">
                                        <h5>{{ lang.LanguageName }}<span style=\"margin-left: 0px;\">{{ ' - '~ lang.ProfeciencyLvl }}</span></h5>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"dashboard-sidebar\">
                            <div class=\"user-info\">
                                <figure style=\"text-align: center;margin-bottom: 10px\">
                                    <div style=\"margin-bottom: 22px\">
                                        <img src=\"{{ asset('Uploads/User_Images/' ~ user.picture) }}\" class=\"img-fluid\"style=\"max-width: 65%; border-radius: 100%\" alt=\"\">
                                    </div>
                                    <figcaption>
                                        <div class=\"user-body\">
                                            <h5 style=\"text-transform: uppercase;font-size: 24px\">{{ user.firstname ~ ' ' ~ user.lastname }}</h5>
                                        </div>
                                    </figcaption>

                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "profile/employer/resume.html.twig", "/Users/macbookpro/Documents/final/templates/profile/employer/resume.html.twig");
    }
}
