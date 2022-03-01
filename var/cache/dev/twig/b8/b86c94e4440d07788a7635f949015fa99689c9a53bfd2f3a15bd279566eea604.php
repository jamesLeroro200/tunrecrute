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

/* Profile/baseProfile.html.twig */
class __TwigTemplate_490b908d73be62767f1b2c89c24499627381471bdfee01048f0fe31130bead66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/baseProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/baseProfile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "</head>
<body>
<header class=\"header-2\">
    <div class=\"container\" style=\"margin-top: -9px;\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"header-top\">
                    <div class=\"logo-area\" style=\"height: 78px;padding-top: 15px;\">
                        <a class=\"logo\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    </div>
                    <div class=\"header-top-toggler\">
                        <div class=\"header-top-toggler-button\"></div>
                    </div>
                    <div class=\"top-nav\">
                        ";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) {
            // line 70
            echo "                        <div class=\"dropdown header-top-account\">
                            <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
            echo "#\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-left: 7px;padding-top: 10px;\">
                                Browse Jobs</a>
                        </div>
                        <div class=\"dropdown header-top-account\">
                            <a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            echo "\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-left: 7px;padding-top: 10px;\">
                                My Jobs</a>
                        </div>
                        <div class=\"dropdown header-top-account\" style=\"margin-bottom: 0;padding: 0px;\">
                            <a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
            echo "\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-right: 320px;padding-left: 7px;padding-top: 10px;\">
                                Post a Job</a>
                        </div>
                        ";
        }
        // line 83
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT"))) {
            // line 84
            echo "                        <div class=\"dropdown header-top-account\">
                            <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
            echo "\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-left: 7px;padding-top: 10px;\">
                                Browse Jobs</a>
                        </div>
                        <div class=\"dropdown header-top-account\" style=\"margin-bottom: 0;padding: 0px;\">
                            <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applied_jobs");
            echo "\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-right: 400px;padding-left: 7px;padding-top: 10px;\">
                                My Applications</a>
                        </div>
                        ";
        }
        // line 93
        echo "                        <a class href=\"#\"  style=\"padding-top: 11px\">
                            <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "picture", [], "any", false, false, false, 94))), "html", null, true);
        echo "\" alt=\"avatar\" style=\"width: 50px;height: 50px;border-radius: 100%;\">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 104
            echo "        <script>
            new Noty({
                theme: 'metroui',
                timeout: 1500,
                killer: true,
                type: 'success',
                layout: 'topCenter',
                text: '";
            // line 111
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "'
            }).show();
        </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- External Css -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/themify-icons.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/et-line.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/plyr.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/flag.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/slick.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/owl.carousel.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/jquery.nstSlider.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/noty.css"), "html", null, true);
        echo "\" >

        <!-- Custom Css -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/css/dashboard.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/feather.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/jquery.nstSlider.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/visible.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/chart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/plyr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/tinymce.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/dashboard.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/datePicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/js/upload-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/noty.js"), "html", null, true);
        echo "\"></script>


        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"icon\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.ico"), "html", null, true);
        echo "\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Profile/baseProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 117,  383 => 116,  365 => 115,  352 => 52,  342 => 45,  338 => 44,  334 => 43,  330 => 42,  326 => 41,  322 => 40,  318 => 39,  314 => 38,  310 => 37,  306 => 36,  302 => 35,  298 => 34,  294 => 33,  290 => 32,  286 => 31,  282 => 30,  278 => 29,  274 => 28,  270 => 27,  266 => 26,  262 => 25,  255 => 21,  251 => 20,  247 => 19,  243 => 18,  239 => 17,  235 => 16,  231 => 15,  227 => 14,  223 => 13,  219 => 12,  213 => 9,  210 => 8,  200 => 7,  181 => 6,  169 => 126,  167 => 116,  165 => 115,  155 => 111,  146 => 104,  142 => 103,  130 => 94,  127 => 93,  120 => 89,  113 => 85,  110 => 84,  107 => 83,  100 => 79,  93 => 75,  86 => 71,  83 => 70,  81 => 69,  70 => 63,  60 => 55,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Profile{% endblock %}</title>
    {% block stylesheets %}
        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/bootstrap.min.css') }}\">

        <!-- External Css -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/fontawesome-all.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/themify-icons.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/et-line.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/bootstrap-select.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/plyr.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/flag.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/slick.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/owl.carousel.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/profile/css/jquery.nstSlider.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/jobs/css/noty.css') }}\" >

        <!-- Custom Css -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/profile/css/main.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/profile/css/dashboard.css') }}\">
        <script src=\"{{ asset('assets/profile/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/popper.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/feather.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/bootstrap-select.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/jquery.nstSlider.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/owl.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/visible.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/jquery.countTo.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/chart.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/plyr.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/tinymce.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/slick.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/jquery.ajaxchimp.min.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/custom.js') }}\"></script>
        <script src=\"{{ asset('assets/profile/js/dashboard.js')}}\"></script>
        <script src=\"{{ asset('assets/profile/js/datePicker.js')}}\"></script>
        <script src=\"{{ asset('assets/profile/js/upload-input.js')}}\"></script>
        <script src=\"{{ asset('assets/jobs/js/noty.js') }}\"></script>


        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"icon\" href=\"{{asset('assets/img/speaker.ico')}}\">

    {% endblock %}
</head>
<body>
<header class=\"header-2\">
    <div class=\"container\" style=\"margin-top: -9px;\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"header-top\">
                    <div class=\"logo-area\" style=\"height: 78px;padding-top: 15px;\">
                        <a class=\"logo\" href=\"{{ path('annonce_index') }}\"><img src=\"{{ asset('assets/img/speaker.png') }}\" alt=\"logo\"></a>
                    </div>
                    <div class=\"header-top-toggler\">
                        <div class=\"header-top-toggler-button\"></div>
                    </div>
                    <div class=\"top-nav\">
                        {% if is_granted('ROLE_EMPLOYER') %}
                        <div class=\"dropdown header-top-account\">
                            <a href=\"{{ path('annonce_index') }}#\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-left: 7px;padding-top: 10px;\">
                                Browse Jobs</a>
                        </div>
                        <div class=\"dropdown header-top-account\">
                            <a href=\"{{ path('mes_annonces') }}\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-left: 7px;padding-top: 10px;\">
                                My Jobs</a>
                        </div>
                        <div class=\"dropdown header-top-account\" style=\"margin-bottom: 0;padding: 0px;\">
                            <a href=\"{{ path('annonce_new')}}\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-right: 320px;padding-left: 7px;padding-top: 10px;\">
                                Post a Job</a>
                        </div>
                        {% endif %}
                        {% if app.user and is_granted('ROLE_CANDIDAT') %}
                        <div class=\"dropdown header-top-account\">
                            <a href=\"{{path('annonce_index')}}\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-left: 7px;padding-top: 10px;\">
                                Browse Jobs</a>
                        </div>
                        <div class=\"dropdown header-top-account\" style=\"margin-bottom: 0;padding: 0px;\">
                            <a href=\"{{path('applied_jobs')}}\" class=\"account-button\"style=\"font-weight: 500;font-size: 14px;letter-spacing: 1px;line-height: 60px;padding-right: 400px;padding-left: 7px;padding-top: 10px;\">
                                My Applications</a>
                        </div>
                        {% endif %}
                        <a class href=\"#\"  style=\"padding-top: 11px\">
                            <img src=\"{{ asset('Uploads/User_Images/' ~ app.user.picture) }}\" alt=\"avatar\" style=\"width: 50px;height: 50px;border-radius: 100%;\">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
{% for message in app.flashes('success') %}
        <script>
            new Noty({
                theme: 'metroui',
                timeout: 1500,
                killer: true,
                type: 'success',
                layout: 'topCenter',
                text: '{{ message }}'
            }).show();
        </script>
{% endfor %}
{% block body %}{% endblock %}
{% block javascripts %}

{#<script>#}
{#    \$(\".primary-bg\").click(function (e){#}
{#        if(!\$('#test-form').isValid()){#}
{#            e.preventDefault()#}
{#        }#}
{#    })#}
{#</script>#}
{% endblock %}
</body>
</html>
", "Profile/baseProfile.html.twig", "/Users/macbookpro/Documents/final/templates/Profile/baseProfile.html.twig");
    }
}
