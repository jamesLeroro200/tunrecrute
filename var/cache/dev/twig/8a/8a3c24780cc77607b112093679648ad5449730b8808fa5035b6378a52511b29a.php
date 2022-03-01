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

/* profile/candidate/editResume.html.twig */
class __TwigTemplate_1ee78caa7a767fc18db04d1eacde6b3037aeecfb24f4ca53b534dadb6c1e1819 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/candidate/editResume.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/candidate/editResume.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form_upload"]) || array_key_exists("form_upload", $context) ? $context["form_upload"] : (function () { throw new RuntimeError('Variable "form_upload" does not exist.', 2, $this->source); })()), [0 => "form/my_theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("profile/baseProfile.html.twig", "profile/candidate/editResume.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"alice-bg section-padding-bottom\">
        <div class=\"container no-gliters\">
            <div class=\"row no-gliters\">
                <div class=\"col\">
                    <div class=\"dashboard-container\">
                        <div class=\"dashboard-content-wrapper\">
                            <div class=\"download-resume dashboard-section\">
                                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_upload"]) || array_key_exists("form_upload", $context) ? $context["form_upload"] : (function () { throw new RuntimeError('Variable "form_upload" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume_edit")]);
        echo "
                                <div class=\"update-file\">
                                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_upload"]) || array_key_exists("form_upload", $context) ? $context["form_upload"] : (function () { throw new RuntimeError('Variable "form_upload" does not exist.', 14, $this->source); })()), "cv", [], "any", false, false, false, 14), 'widget', ["attr" => ["onchange" => "this.form.submit();"]]);
        echo "Update CV <i data-feather=\"edit-2\"></i>
                                </div>
                                <div class=\"update-file\">
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_upload"]) || array_key_exists("form_upload", $context) ? $context["form_upload"] : (function () { throw new RuntimeError('Variable "form_upload" does not exist.', 17, $this->source); })()), "coverLetter", [], "any", false, false, false, 17), 'widget', ["attr" => ["onchange" => "this.form.submit();"]]);
        echo "Update Cover Letter <i data-feather=\"edit-2\"></i>
                                </div>
                                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_upload"]) || array_key_exists("form_upload", $context) ? $context["form_upload"] : (function () { throw new RuntimeError('Variable "form_upload" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
                            </div>
                            <div class=\"skill-and-profile dashboard-section\">
                                <div class=\"social-profile\">
                                    <label>Social Media:</label>
                                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "socialMedia", [], "any", false, false, false, 24)) {
            // line 25
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "socialMedia", [], "any", false, false, false, 25), "facebook", [], "any", false, false, false, 25)) {
                // line 26
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "socialMedia", [], "any", false, false, false, 26), "facebook", [], "any", false, false, false, 26), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                    ";
            }
            // line 28
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "socialMedia", [], "any", false, false, false, 28), "twitter", [], "any", false, false, false, 28)) {
                // line 29
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "socialMedia", [], "any", false, false, false, 29), "twitter", [], "any", false, false, false, 29), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                    ";
            }
            // line 31
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "socialMedia", [], "any", false, false, false, 31), "google", [], "any", false, false, false, 31)) {
                // line 32
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "socialMedia", [], "any", false, false, false, 32), "google", [], "any", false, false, false, 32), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-google-plus\"></i></a>
                                    ";
            }
            // line 34
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "socialMedia", [], "any", false, false, false, 34), "linkedin", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "socialMedia", [], "any", false, false, false, 35), "linkedin", [], "any", false, false, false, 35), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    ";
            }
            // line 37
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "socialMedia", [], "any", false, false, false, 37), "pintrest", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "socialMedia", [], "any", false, false, false, 38), "pintrest", [], "any", false, false, false, 38), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                    ";
            }
            // line 40
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "socialMedia", [], "any", false, false, false, 40), "behance", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "socialMedia", [], "any", false, false, false, 41), "behance", [], "any", false, false, false, 41), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-behance\"></i></a>
                                    ";
            }
            // line 43
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "socialMedia", [], "any", false, false, false, 43), "dribbble", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "socialMedia", [], "any", false, false, false, 44), "dribbble", [], "any", false, false, false, 44), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a>
                                    ";
            }
            // line 46
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "socialMedia", [], "any", false, false, false, 46), "github", [], "any", false, false, false, 46)) {
                // line 47
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "socialMedia", [], "any", false, false, false, 47), "github", [], "any", false, false, false, 47), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                                    ";
            }
            // line 49
            echo "                                    ";
        }
        // line 50
        echo "                                    <!-- Button trigger modal -->
                                    <button type=\"button\" class=\"btn btn-primary edit-button\" data-toggle=\"modal\" data-target=\"#modal-social\">
                                        <i data-feather=\"edit-2\"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"modal-social\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        ";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "socialMedia", [], "any", false, false, false, 56)) {
            // line 57
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social_media_new"));
            echo "
                                        ";
        } else {
            // line 59
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social_media_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "socialMedia", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]));
            echo "
                                        ";
        }
        // line 61
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"personal-information dashboard-section last-child details-section\">
                                <h4><i data-feather=\"user-plus\"></i>Personal Details</h4>
                                <ul>
                                    <li><span>Full Name:</span> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "firstname", [], "any", false, false, false, 67), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "lastname", [], "any", false, false, false, 67), "html", null, true);
        echo "</li>
                                    <li><span>Email:</span>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "email", [], "any", false, false, false, 68), "html", null, true);
        echo "</li>
                                    <li><span>Date of Birth:</span> ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "birthdate", [], "any", false, false, false, 69), "html", null, true);
        echo "</li>
                                    <li><span>Nationality:</span> ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nationality", [], "any", false, false, false, 70), "html", null, true);
        echo " </li>
                                    <li><span>Sex:</span> ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "sex", [], "any", false, false, false, 71), "html", null, true);
        echo "</li>
                                    <li><span>Address:</span>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "address", [], "any", false, false, false, 72), "html", null, true);
        echo "</li>
                                </ul>
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-personal-details\">
                                    <i data-feather=\"edit-2\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"modal-personal-details\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::user_details"));
        echo "
                                </div>
                            </div>
                            <div class=\"about-details details-section dashboard-section\">
                                <h4><i data-feather=\"align-left\"></i>About Me</h4>
                                <p>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "aboutme", [], "any", false, false, false, 85), "html", null, true);
        echo "</p>
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-about-me\">
                                    <i data-feather=\"edit-2\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"modal-about-me\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::about_user"));
        echo "
                                </div>
                            </div>
                            <div class=\"edication-background details-section dashboard-section\">
                                <h4><i data-feather=\"book\"></i>Education Background</h4>
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "education", [], "any", false, false, false, 97));
        foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
            // line 98
            echo "                                    <div class=\"education-label\">
                                        <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("education_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\" style=\"display: block;color: #ff3366;\" data-toggle=\"modal\" data-target=\"#modal-education-delete-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\">
                                            <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("education_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-education-edit-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 102), "html", null, true);
            echo "\">
                                            <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <span class=\"study-year\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "startYear", [], "any", false, false, false, 105), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "endYear", [], "any", false, false, false, 105), "html", null, true);
            echo "</span>
                                        <h5>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "DiplomaTitle", [], "any", false, false, false, 106), "html", null, true);
            echo "<span>@ ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "InstitutionName", [], "any", false, false, false, 106), "html", null, true);
            echo "</span></h5>
                                        <p>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "Description", [], "any", false, false, false, 107), "html", null, true);
            echo "</p>
                                        <div class=\"modal fade modal-education\" id=\"modal-education-delete-";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            ";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\EducationController::delete", ["id" => twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 109)]));
            echo "
                                        </div>
                                        <div class=\"modal fade modal-education\" id=\"modal-education-edit-";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 111), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            ";
            // line 112
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\EducationController::edit", ["id" => twig_get_attribute($this->env, $this->source, $context["edu"], "id", [], "any", false, false, false, 112)]));
            echo "
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-education-add\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-education\" id=\"modal-education-add\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\EducationController::new"));
        echo "
                                </div>

                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"briefcase\"></i>Work Experience</h4>
                                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "workExps", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 129
            echo "                                    <div class=\"experience-section\">
                                        <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("work_exp_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\" style=\"display: block;color: #ff3366\" data-toggle=\"modal\" data-target=\"#modal-experience-delete-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 130), "html", null, true);
            echo "\">
                                            <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("work_exp_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-experience-edit-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 133), "html", null, true);
            echo "\">
                                            <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <span class=\"service-year\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "startYear", [], "any", false, false, false, 136), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "endYear", [], "any", false, false, false, 136), "html", null, true);
            echo "</span>
                                        <h5>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "Title", [], "any", false, false, false, 137), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, ("@ " . twig_get_attribute($this->env, $this->source, $context["work"], "companyName", [], "any", false, false, false, 137)), "html", null, true);
            echo "</span></h5>
                                        <p>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "Description", [], "any", false, false, false, 138), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"modal fade modal-experience\" id=\"modal-experience-delete-";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 140), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        ";
            // line 141
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\WorkExpController::delete", ["id" => twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 141)]));
            echo "
                                    </div>
                                    <div class=\"modal fade modal-experience\" id=\"modal-experience-edit-";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 143), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\WorkExpController::edit", ["id" => twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 144)]));
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-experience\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-experience\" id=\"modal-experience\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\WorkExpController::new"));
        echo "

                                </div>
                            </div>
                            <div class=\"professonal-skill dashboard-section details-section\">
                                <h4><i data-feather=\"feather\"></i>Professional Skill</h4>
                                <div class=\"progress-group\">
                                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161), "profSkills", [], "any", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 162
            echo "                                        <div class=\"progress-item\">
                                            <div class=\"progress-head\">
                                                <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_skill_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            echo "\" style=\"display: block;color:#ff3366\" data-toggle=\"modal\" data-target=\"#modal-pro-skill-delete-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 164), "html", null, true);
            echo "\">
                                                    <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right: 40px;margin-top: 5px;\"></i>
                                                </a>
                                                <a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_skill_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 167)]), "html", null, true);
            echo "\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-pro-skill-edit-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 167), "html", null, true);
            echo "\">
                                                    <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right: 10px;margin-top: 5px;\"></i>
                                                </a>
                                                <p class=\"progress-on\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "Name", [], "any", false, false, false, 170), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"progress-body\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "Percent", [], "any", false, false, false, 174), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0;\"></div>
                                                </div>
                                                <p class=\"progress-to\">";
            // line 176
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["skill"], "Percent", [], "any", false, false, false, 176) . "%"), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"modal fade modal-pro-skill\" id=\"modal-pro-skill-delete-";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 179), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            ";
            // line 180
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfSkillController::delete", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 180)]));
            echo "
                                        </div>
                                        <div class=\"modal fade modal-pro-skill\" id=\"modal-pro-skill-edit-";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 182), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            ";
            // line 183
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfSkillController::edit", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 183)]));
            echo "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                                </div>
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-pro-skill\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-pro-skill\" id=\"modal-pro-skill\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfSkillController::new"));
        echo "
                                </div>
                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"globe\"></i>Languages</h4>
                                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "user", [], "any", false, false, false, 198), "languageProfs", [], "any", false, false, false, 198));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 199
            echo "                                        <div class=\"experience-section lang\">
                                            <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("language_prof_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\" style=\"display: block;color:#ff3366\" data-toggle=\"modal\" data-target=\"#modal-lang-delete-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 200), "html", null, true);
            echo "\">
                                                <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                            </a>
                                            <a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("language_prof_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 203)]), "html", null, true);
            echo "\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-lang-edit-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 203), "html", null, true);
            echo "\">
                                                <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                            </a>
                                            <h5>";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "LanguageName", [], "any", false, false, false, 206), "html", null, true);
            echo "<span style=\"margin-left: 0px;\">";
            echo twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, $context["lang"], "ProfeciencyLvl", [], "any", false, false, false, 206)), "html", null, true);
            echo "</span></h5>
                                        </div>
                                        <div class=\"modal fade modal-experience\" id=\"modal-lang-delete-";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 208), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            ";
            // line 209
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\LanguageProfController::delete", ["id" => twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 209)]));
            echo "
                                        </div>
                                        <div class=\"modal fade modal-experience\" id=\"modal-lang-edit-";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 211), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            ";
            // line 212
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\LanguageProfController::edit", ["id" => twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 212)]));
            echo "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-lang-skill\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-experience\" id=\"modal-lang-skill\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\LanguageProfController::new"));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"dashboard-sidebar\">
                            <div class=\"user-info\">
                                <div class=\"thumb\">
                                    <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228), "picture", [], "any", false, false, false, 228))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"user-body\">
                                    <h5>";
        // line 231
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "firstname", [], "any", false, false, false, 231) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "lastname", [], "any", false, false, false, 231)), "html", null, true);
        echo "</h5>
                                </div>
                            </div>
                            <div class=\"dashboard-menu\">
                                <ul>
                                    <li><i class=\"fas fa-user\"></i><a href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Edit Profile</a></li>
                                    <li><i class=\"fas fa-file-alt\"></i><a href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume");
        echo "\">Resume</a></li>
                                    <li  class=\"active\"><i class=\"fas fa-edit\"></i><a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume_edit");
        echo "\">Edit Resume</a></li>
                                    <li><i class=\"fas fa-check-square\"></i><a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applied_jobs");
        echo "\">Applied Job</a></li>
                                </ul>
                                <ul class=\"delete\">
                                    <li><i class=\"fas fa-power-off\"></i><a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                                    <li><i class=\"fas fa-trash-alt\"></i><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-delete\">Delete Profile</a></li>
                                </ul>
                                <!-- Modal -->
                                <div class=\"modal fade modal-delete\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    ";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::deactivate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247)]));
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
        return "profile/candidate/editResume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 247,  613 => 242,  607 => 239,  603 => 238,  599 => 237,  595 => 236,  587 => 231,  581 => 228,  571 => 221,  563 => 215,  554 => 212,  550 => 211,  545 => 209,  541 => 208,  534 => 206,  526 => 203,  518 => 200,  515 => 199,  511 => 198,  503 => 193,  494 => 186,  485 => 183,  481 => 182,  476 => 180,  472 => 179,  466 => 176,  461 => 174,  454 => 170,  446 => 167,  438 => 164,  434 => 162,  430 => 161,  420 => 154,  411 => 147,  402 => 144,  398 => 143,  393 => 141,  389 => 140,  384 => 138,  378 => 137,  372 => 136,  364 => 133,  356 => 130,  353 => 129,  349 => 128,  340 => 122,  332 => 116,  322 => 112,  318 => 111,  313 => 109,  309 => 108,  305 => 107,  299 => 106,  293 => 105,  285 => 102,  277 => 99,  274 => 98,  270 => 97,  262 => 92,  252 => 85,  244 => 80,  233 => 72,  229 => 71,  225 => 70,  221 => 69,  217 => 68,  211 => 67,  203 => 61,  197 => 59,  191 => 57,  189 => 56,  181 => 50,  178 => 49,  172 => 47,  169 => 46,  163 => 44,  160 => 43,  154 => 41,  151 => 40,  145 => 38,  142 => 37,  136 => 35,  133 => 34,  127 => 32,  124 => 31,  118 => 29,  115 => 28,  109 => 26,  106 => 25,  104 => 24,  96 => 19,  91 => 17,  85 => 14,  80 => 12,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/baseProfile.html.twig' %}
{% form_theme form_upload 'form/my_theme.html.twig' %}

{% block body %}
    <div class=\"alice-bg section-padding-bottom\">
        <div class=\"container no-gliters\">
            <div class=\"row no-gliters\">
                <div class=\"col\">
                    <div class=\"dashboard-container\">
                        <div class=\"dashboard-content-wrapper\">
                            <div class=\"download-resume dashboard-section\">
                                {{ form_start(form_upload,{'action':path('resume_edit')}) }}
                                <div class=\"update-file\">
                                    {{ form_widget(form_upload.cv,{'attr':{'onchange':'this.form.submit();'}}) }}Update CV <i data-feather=\"edit-2\"></i>
                                </div>
                                <div class=\"update-file\">
                                    {{ form_widget(form_upload.coverLetter,{'attr':{'onchange':'this.form.submit();'}}) }}Update Cover Letter <i data-feather=\"edit-2\"></i>
                                </div>
                                {{ form_end(form_upload) }}
                            </div>
                            <div class=\"skill-and-profile dashboard-section\">
                                <div class=\"social-profile\">
                                    <label>Social Media:</label>
                                    {% if app.user.socialMedia %}
                                    {% if app.user.socialMedia.facebook %}
                                    <a href=\"{{ app.user.socialMedia.facebook}}\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                    {% endif %}
                                    {% if app.user.socialMedia.twitter %}
                                    <a href=\"{{ app.user.socialMedia.twitter }}\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                    {% endif %}
                                    {% if app.user.socialMedia.google %}
                                    <a href=\"{{ app.user.socialMedia.google }}\" target=\"_blank\"><i class=\"fab fa-google-plus\"></i></a>
                                    {% endif %}
                                    {% if app.user.socialMedia.linkedin %}
                                    <a href=\"{{ app.user.socialMedia.linkedin }}\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    {% endif %}
                                    {% if app.user.socialMedia.pintrest %}
                                    <a href=\"{{ app.user.socialMedia.pintrest }}\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                    {% endif %}
                                    {% if app.user.socialMedia.behance %}
                                    <a href=\"{{ app.user.socialMedia.behance }}\" target=\"_blank\"><i class=\"fab fa-behance\"></i></a>
                                    {% endif %}
                                    {% if app.user.socialMedia.dribbble %}
                                    <a href=\"{{app.user.socialMedia.dribbble}}\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a>
                                    {% endif %}
                                    {% if app.user.socialMedia.github %}
                                    <a href=\"{{app.user.socialMedia.github}}\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                                    {% endif %}
                                    {% endif %}
                                    <!-- Button trigger modal -->
                                    <button type=\"button\" class=\"btn btn-primary edit-button\" data-toggle=\"modal\" data-target=\"#modal-social\">
                                        <i data-feather=\"edit-2\"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"modal-social\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        {% if  not app.user.socialMedia %}
                                        {{ render(path('social_media_new')) }}
                                        {% else %}
                                        {{ render(path('social_media_edit',{'id':app.user.socialMedia.id})) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"personal-information dashboard-section last-child details-section\">
                                <h4><i data-feather=\"user-plus\"></i>Personal Details</h4>
                                <ul>
                                    <li><span>Full Name:</span> {{ app.user.firstname }} {{ app.user.lastname }}</li>
                                    <li><span>Email:</span>{{ app.user.email }}</li>
                                    <li><span>Date of Birth:</span> {{ app.user.birthdate }}</li>
                                    <li><span>Nationality:</span> {{ app.user.nationality }} </li>
                                    <li><span>Sex:</span> {{ app.user.sex }}</li>
                                    <li><span>Address:</span>{{ app.user.address }}</li>
                                </ul>
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-personal-details\">
                                    <i data-feather=\"edit-2\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"modal-personal-details\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    {{ render(controller('App\\\\Controller\\\\ProfileController::user_details')) }}
                                </div>
                            </div>
                            <div class=\"about-details details-section dashboard-section\">
                                <h4><i data-feather=\"align-left\"></i>About Me</h4>
                                <p>{{ app.user.aboutme }}</p>
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-about-me\">
                                    <i data-feather=\"edit-2\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"modal-about-me\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    {{ render(controller('App\\\\Controller\\\\ProfileController::about_user')) }}
                                </div>
                            </div>
                            <div class=\"edication-background details-section dashboard-section\">
                                <h4><i data-feather=\"book\"></i>Education Background</h4>
                                {% for edu in app.user.education %}
                                    <div class=\"education-label\">
                                        <a href=\"{{ path('education_delete',{'id':edu.id}) }}\" style=\"display: block;color: #ff3366;\" data-toggle=\"modal\" data-target=\"#modal-education-delete-{{ edu.id }}\">
                                            <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <a href=\"{{ path('education_edit',{'id':edu.id}) }}\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-education-edit-{{ edu.id }}\">
                                            <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <span class=\"study-year\">{{ edu.startYear }}-{{ edu.endYear }}</span>
                                        <h5>{{ edu.DiplomaTitle }}<span>@ {{ edu.InstitutionName }}</span></h5>
                                        <p>{{ edu.Description }}</p>
                                        <div class=\"modal fade modal-education\" id=\"modal-education-delete-{{ edu.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            {{ render(controller('App\\\\Controller\\\\EducationController::delete',{'id':edu.id})) }}
                                        </div>
                                        <div class=\"modal fade modal-education\" id=\"modal-education-edit-{{ edu.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            {{ render(controller('App\\\\Controller\\\\EducationController::edit',{'id':edu.id})) }}
                                        </div>
                                    </div>
                                {% endfor %}
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-education-add\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-education\" id=\"modal-education-add\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    {{ render(controller('App\\\\Controller\\\\EducationController::new')) }}
                                </div>

                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"briefcase\"></i>Work Experience</h4>
                                {% for work in app.user.workExps %}
                                    <div class=\"experience-section\">
                                        <a href=\"{{ path('work_exp_delete',{'id':work.id}) }}\" style=\"display: block;color: #ff3366\" data-toggle=\"modal\" data-target=\"#modal-experience-delete-{{ work.id }}\">
                                            <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <a href=\"{{ path('work_exp_edit',{'id':work.id}) }}\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-experience-edit-{{ work.id }}\">
                                            <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                        </a>
                                        <span class=\"service-year\">{{ work.startYear }}-{{ work.endYear }}</span>
                                        <h5>{{ work.Title }}<span>{{ '@ '~ work.companyName }}</span></h5>
                                        <p>{{ work.Description }}</p>
                                    </div>
                                    <div class=\"modal fade modal-experience\" id=\"modal-experience-delete-{{ work.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        {{ render(controller('App\\\\Controller\\\\WorkExpController::delete',{'id':work.id})) }}
                                    </div>
                                    <div class=\"modal fade modal-experience\" id=\"modal-experience-edit-{{ work.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        {{ render(controller('App\\\\Controller\\\\WorkExpController::edit',{'id':work.id})) }}
                                    </div>
                                {% endfor %}

                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-experience\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-experience\" id=\"modal-experience\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    {{ render(controller('App\\\\Controller\\\\WorkExpController::new')) }}

                                </div>
                            </div>
                            <div class=\"professonal-skill dashboard-section details-section\">
                                <h4><i data-feather=\"feather\"></i>Professional Skill</h4>
                                <div class=\"progress-group\">
                                    {% for skill in app.user.profSkills %}
                                        <div class=\"progress-item\">
                                            <div class=\"progress-head\">
                                                <a href=\"{{path('prof_skill_delete',{'id':skill.id})}}\" style=\"display: block;color:#ff3366\" data-toggle=\"modal\" data-target=\"#modal-pro-skill-delete-{{ skill.id }}\">
                                                    <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right: 40px;margin-top: 5px;\"></i>
                                                </a>
                                                <a href=\"{{path('prof_skill_edit',{'id':skill.id})}}\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-pro-skill-edit-{{ skill.id }}\">
                                                    <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right: 10px;margin-top: 5px;\"></i>
                                                </a>
                                                <p class=\"progress-on\">{{ skill.Name }}</p>
                                            </div>
                                            <div class=\"progress-body\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"{{ skill.Percent }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0;\"></div>
                                                </div>
                                                <p class=\"progress-to\">{{skill.Percent~'%'}}</p>
                                            </div>
                                        </div>
                                        <div class=\"modal fade modal-pro-skill\" id=\"modal-pro-skill-delete-{{ skill.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            {{ render(controller('App\\\\Controller\\\\ProfSkillController::delete',{'id':skill.id})) }}
                                        </div>
                                        <div class=\"modal fade modal-pro-skill\" id=\"modal-pro-skill-edit-{{ skill.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            {{ render(controller('App\\\\Controller\\\\ProfSkillController::edit',{'id':skill.id})) }}
                                        </div>
                                    {% endfor %}
                                </div>
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-pro-skill\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-pro-skill\" id=\"modal-pro-skill\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    {{ render(controller('App\\\\Controller\\\\ProfSkillController::new')) }}
                                </div>
                            </div>
                            <div class=\"experience dashboard-section details-section\">
                                <h4><i data-feather=\"globe\"></i>Languages</h4>
                                    {% for lang in app.user.languageProfs %}
                                        <div class=\"experience-section lang\">
                                            <a href=\"{{ path('language_prof_delete',{'id':lang.id}) }}\" style=\"display: block;color:#ff3366\" data-toggle=\"modal\" data-target=\"#modal-lang-delete-{{ lang.id }}\">
                                                <i data-feather=\"x-circle\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                            </a>
                                            <a href=\"{{ path('language_prof_edit',{'id':lang.id}) }}\" style=\"display: block;color: #246df8\" data-toggle=\"modal\" data-target=\"#modal-lang-edit-{{ lang.id }}\">
                                                <i data-feather=\"edit-2\"style=\"float: right;width: 15px;height: 15px;margin-right:11px;margin-top:9px;\"></i>
                                            </a>
                                            <h5>{{ lang.LanguageName }}<span style=\"margin-left: 0px;\">{{ ' - '~ lang.ProfeciencyLvl }}</span></h5>
                                        </div>
                                        <div class=\"modal fade modal-experience\" id=\"modal-lang-delete-{{ lang.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            {{ render(controller('App\\\\Controller\\\\LanguageProfController::delete',{'id':lang.id})) }}
                                        </div>
                                        <div class=\"modal fade modal-experience\" id=\"modal-lang-edit-{{ lang.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            {{ render(controller('App\\\\Controller\\\\LanguageProfController::edit',{'id':lang.id})) }}
                                        </div>
                                    {% endfor %}
                                <!-- Button trigger modal -->
                                <button type=\"button\" class=\"btn btn-primary edit-resume\" data-toggle=\"modal\" data-target=\"#modal-lang-skill\">
                                    <i data-feather=\"plus\"></i>
                                </button>
                                <!-- Modal -->
                                <div class=\"modal fade modal-experience\" id=\"modal-lang-skill\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    {{ render(controller('App\\\\Controller\\\\LanguageProfController::new')) }}
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
                                    <li><i class=\"fas fa-user\"></i><a href=\"{{ path('edit_profile') }}\">Edit Profile</a></li>
                                    <li><i class=\"fas fa-file-alt\"></i><a href=\"{{ path('resume') }}\">Resume</a></li>
                                    <li  class=\"active\"><i class=\"fas fa-edit\"></i><a href=\"{{ path('resume_edit') }}\">Edit Resume</a></li>
                                    <li><i class=\"fas fa-check-square\"></i><a href=\"{{ path('applied_jobs') }}\">Applied Job</a></li>
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
{% endblock %}", "profile/candidate/editResume.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\Profile\\candidate\\editResume.html.twig");
    }
}
