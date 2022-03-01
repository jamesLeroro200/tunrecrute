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

/* baseAnnonce.html.twig */
class __TwigTemplate_10e49cb3091f85d46b9bfff554dd9979538cc7c99ac829b346095ec18d6acdcf extends Template
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
            'script' => [$this, 'block_script'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAnnonce.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "

    <!-- Scripts -->
    ";
        // line 25
        $this->displayBlock('script', $context, $blocks);
        // line 28
        echo "
</head>
<body class=\"nav-on-header smart-nav bg-alt\">
<!-- Navigation bar -->
<nav class=\"navbar\">
    <div class=\"container\">

        <!-- Logo -->
        <div class=\"pull-left\">
            <a class=\"navbar-toggle\" href=\"#\" data-toggle=\"offcanvas\"><i class=\"ti-menu\"></i></a>

            <div class=\"logo-wrapper\">
                <a class=\"logo\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                <a class=\"logo-alt\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.png"), "html", null, true);
        echo "\" alt=\"logo-alt\"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "        <div class=\"pull-right\">

            <div class=\"dropdown user-account\">
                <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                    ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "picture", [], "any", false, false, false, 53)) {
                // line 54
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "picture", [], "any", false, false, false, 54))), "html", null, true);
                echo "\" alt=\"avatar\">
                    ";
            } else {
                // line 56
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile.png"), "html", null, true);
                echo "\" alt=\"avatar\">

                    ";
            }
            // line 59
            echo "                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
            echo "\">Edit Profile</a></li>
                    <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                </ul>
            </div>

        </div>
        ";
        }
        // line 68
        echo "        <!-- END User account -->
        ";
        // line 69
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "            <div class=\"pull-right user-login\">
                <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a> or <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Choose_Role");
            echo "\">register</a>
            </div>
        ";
        }
        // line 74
        echo "        <!-- Navigation menu -->
        <ul class=\"nav-menu\">


            <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\">Browse jobs</a>
            ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER"))) {
            // line 80
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            echo "\">My jobs</a>
            <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
            echo "\">Post a job</a>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT"))) {
            // line 83
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applied_jobs");
            echo "\">My Applications</a>
            ";
        }
        // line 85
        echo "        </ul>
        <!-- END Navigation menu -->

    </div>
</nav>
<!-- END Navigation bar -->

";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <!-- Styles -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/thejobs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/noty.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.ico"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/thejobs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/jquery1_8_2.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/noty.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/myscript.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 26
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
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

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 96
            echo "        <script>
            new Noty({
                theme: 'metroui',
                timeout: 1500,
                killer: true,
                type: 'success',
                layout: 'topCenter',
                text: '";
            // line 103
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "'
            }).show();
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 103,  352 => 96,  347 => 95,  337 => 94,  319 => 92,  308 => 26,  298 => 25,  285 => 19,  281 => 18,  276 => 16,  272 => 15,  268 => 14,  264 => 13,  260 => 12,  256 => 11,  252 => 10,  248 => 9,  244 => 8,  241 => 7,  231 => 6,  212 => 5,  200 => 107,  198 => 94,  195 => 93,  193 => 92,  184 => 85,  178 => 83,  176 => 82,  172 => 81,  167 => 80,  165 => 79,  161 => 78,  155 => 74,  147 => 71,  144 => 70,  142 => 69,  139 => 68,  130 => 62,  126 => 61,  122 => 59,  115 => 56,  109 => 54,  107 => 53,  101 => 49,  99 => 48,  87 => 41,  81 => 40,  67 => 28,  65 => 25,  60 => 22,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
    <!-- Styles -->
    <link href=\"{{ asset('assets/jobs/css/app.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/jobs/css/thejobs.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/jobs/css/custom.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/jobs/css/noty.css') }}\" rel=\"stylesheet\">
        <link rel=\"icon\" href=\"{{asset('assets/img/speaker.ico')}}\">
        <script src=\"{{ asset('assets/jobs/js/app.min.js') }}\"></script>
        <script src=\"{{ asset('assets/jobs/js/thejobs.js') }}\"></script>
        <script src=\"{{ asset('assets/jobs/js/custom.js') }}\"></script>
        <script src=\"{{ asset('assets/jobs/js/jquery1_8_2.js') }}\"></script>

        <script src=\"{{ asset('assets/jobs/js/noty.js') }}\"></script>
        <script src=\"{{asset('assets/jobs/js/myscript.js')}}\"></script>

    {% endblock %}


    <!-- Scripts -->
    {% block script %}

    {% endblock %}

</head>
<body class=\"nav-on-header smart-nav bg-alt\">
<!-- Navigation bar -->
<nav class=\"navbar\">
    <div class=\"container\">

        <!-- Logo -->
        <div class=\"pull-left\">
            <a class=\"navbar-toggle\" href=\"#\" data-toggle=\"offcanvas\"><i class=\"ti-menu\"></i></a>

            <div class=\"logo-wrapper\">
                <a class=\"logo\" href=\"{{ path('annonce_index') }}\"><img src=\"{{ asset('assets/img/speaker.png') }}\" alt=\"logo\"></a>
                <a class=\"logo-alt\" href=\"{{ path('annonce_index') }}\"><img src=\"{{ asset('assets/img/speaker.png') }}\" alt=\"logo-alt\"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        {% if app.user %}
        <div class=\"pull-right\">

            <div class=\"dropdown user-account\">
                <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                    {% if app.user.picture %}
                    <img src=\"{{ asset('Uploads/User_Images/' ~ app.user.picture) }}\" alt=\"avatar\">
                    {% else %}
                        <img src=\"{{ asset('assets/img/profile.png') }}\" alt=\"avatar\">

                    {% endif %}
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li><a href=\"{{ path(\"edit_profile\") }}\">Edit Profile</a></li>
                    <li><a href=\"{{ path(\"app_logout\") }}\">Logout</a></li>
                </ul>
            </div>

        </div>
        {% endif %}
        <!-- END User account -->
        {% if not app.user %}
            <div class=\"pull-right user-login\">
                <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_login') }}\">Login</a> or <a href=\"{{ path('Choose_Role') }}\">register</a>
            </div>
        {% endif %}
        <!-- Navigation menu -->
        <ul class=\"nav-menu\">


            <a href=\"{{ path(\"annonce_index\") }}\">Browse jobs</a>
            {% if app.user and is_granted(\"ROLE_EMPLOYER\") %}
            <a href=\"{{ path(\"mes_annonces\") }}\">My jobs</a>
            <a href=\"{{ path(\"annonce_new\") }}\">Post a job</a>
            {% elseif app.user and is_granted(\"ROLE_CANDIDAT\") %}
                <a href=\"{{ path(\"applied_jobs\") }}\">My Applications</a>
            {% endif %}
        </ul>
        <!-- END Navigation menu -->

    </div>
</nav>
<!-- END Navigation bar -->

{% block body %}{% endblock %}

{% block javascripts %}
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
    {% endfor %}{% endblock %}
</body>
</html>
", "baseAnnonce.html.twig", "/Users/macbookpro/Documents/final/templates/baseAnnonce.html.twig");
    }
}
