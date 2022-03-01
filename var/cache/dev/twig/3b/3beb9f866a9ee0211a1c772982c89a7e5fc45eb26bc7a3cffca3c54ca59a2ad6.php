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

/* BaseAdmin.html.twig */
class __TwigTemplate_0098589bb44b4c4413d4d890825a43f261a63ac5ab58d6002e82a77511d6d047 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BaseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BaseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.ico"), "html", null, true);
        echo "\">
    <title>Dashboard</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/noty.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/AdminTemplate/dist/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/jquery1_8_2.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/AdminTemplate/assets/libs/popper.js/dist/umd/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/AdminTemplate/assets/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- apps -->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/AdminTemplate/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/AdminTemplate/dist/js/app.init.horizontal-fullwidth.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/AdminTemplate/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/noty.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/myscript.js"), "html", null, true);
        echo "\"></script>

    <!--Custom JavaScript -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/AdminTemplate/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/adminTemplate/assets/libs/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>

</head>
<meta charset=\"UTF-8\">
<title>";
        // line 44
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 45
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "</head>
<body>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\">

                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
        echo "\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon\">

                        <!-- Light Logo icon -->
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/speaker.png"), "html", null, true);
        echo "\" style=\"height: 30px\" class=\"light-logo\" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                            <!-- dark Logo text -->
                        <b>TunRecrute</b>
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-left mr-auto\">
                    <li class=\"nav-item d-none d-md-block\">
                        <a class=\"nav-link sidebartoggler waves-effect waves-light\" href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\">
                            <i class=\"sl-icon-menu font-20\"></i>
                        </a>
                    </li>

                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-right\">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
";
        // line 116
        echo "                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-muted  waves-dark pro-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                           aria-expanded=\"false\">
                            <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/admin.png"), "html", null, true);
        echo "\" alt=\"user\" class=\"rounded-circle\" width=\"31\">
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd\">
                                <span class=\"with-arrow\">
                                    <span class=\"bg-primary\"></span>
                                </span>
                            <div class=\"d-flex no-block align-items-center p-15 bg-primary text-white m-b-10\">
                                <div class=\"\">
                                    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/admin.png"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\" width=\"60\">
                                </div>
                                <div class=\"m-l-10\">
                                    <h4 class=\"m-b-0\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), "html", null, true);
        echo "</h4>
                                </div>
                            </div>
                            <a class=\"dropdown-item\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
        echo "\">
                                <i class=\"ti-home m-r-5 m-l-5\"></i>Dashboard</a>

                            <a class=\"dropdown-item\" href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_signals");
        echo "\">
                                <i class=\" ti-target m-r-5 m-l-5\"></i>Signaled Jobs</a>

                            <a class=\"dropdown-item\" href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\">
                                <i class=\"ti-user m-r-5 m-l-5\"></i>Users List</a>

                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit");
        echo "\">
                                <i class=\"ti-settings m-r-5 m-l-5\"></i>Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                <i class=\"fa fa-power-off m-r-5 m-l-5\"></i>Logout</a>
                            <div class=\"dropdown-divider\"></div>

                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
";
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 168));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 169
            echo "        <div class=\"mb-3\">
            <script>
                new Noty({
                    theme: 'metroui',
                    timeout: 1500,
                    killer: true,
                    type: 'success',
                    layout: 'topCenter',
                    text: '";
            // line 177
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "'
                }).show();
            </script>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        $this->displayBlock('javascripts', $context, $blocks);
        // line 184
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
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

    // line 45
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
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

    // line 182
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BaseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 182,  360 => 167,  342 => 45,  323 => 44,  311 => 184,  309 => 182,  298 => 177,  288 => 169,  283 => 168,  281 => 167,  265 => 154,  259 => 151,  252 => 147,  246 => 144,  240 => 141,  234 => 138,  228 => 135,  217 => 127,  204 => 116,  165 => 69,  157 => 64,  137 => 46,  135 => 45,  131 => 44,  124 => 40,  120 => 39,  114 => 36,  110 => 35,  106 => 34,  101 => 32,  97 => 31,  92 => 29,  88 => 28,  82 => 25,  72 => 18,  67 => 16,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset(\"assets/img/speaker.ico\")}}\">
    <title>Dashboard</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href=\"{{ asset('assets/jobs/css/noty.css') }}\" rel=\"stylesheet\">

    <link href=\"{{asset(\"assets/AdminTemplate/dist/css/style.min.css\")}}\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src=\"{{ asset('assets/jobs/js/jquery1_8_2.js') }}\"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"{{ asset(\"assets/AdminTemplate/assets/libs/popper.js/dist/umd/popper.min.js\") }}\"></script>
    <script src=\"{{ asset(\"assets/AdminTemplate/assets/libs/bootstrap/dist/js/bootstrap.min.js\") }}\"></script>
    <!-- apps -->
    <script src=\"{{ asset(\"assets/AdminTemplate/dist/js/app.min.js\") }}\"></script>
    <script src=\"{{ asset(\"assets/AdminTemplate/dist/js/app.init.horizontal-fullwidth.js\") }}\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"{{ asset(\"assets/AdminTemplate/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\") }}\"></script>
    <script src=\"{{asset('assets/jobs/js/noty.js')}}\"></script>
    <script src=\"{{asset('assets/jobs/js/myscript.js')}}\"></script>

    <!--Custom JavaScript -->
    <script src=\"{{ asset(\"assets/AdminTemplate/dist/js/custom.min.js\") }}\"></script>
    <script src=\"{{ asset(\"assets/adminTemplate/assets/libs/Chart.js/dist/Chart.min.js\") }}\"></script>

</head>
<meta charset=\"UTF-8\">
<title>{% block title %}Welcome!{% endblock %}</title>
{% block stylesheets %}{% endblock %}
</head>
<body>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\">

                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class=\"navbar-brand\" href=\"{{ path(\"admin_dash\") }}\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon\">

                        <!-- Light Logo icon -->
                        <img src=\"{{ asset(\"/assets/img/speaker.png\") }}\" style=\"height: 30px\" class=\"light-logo\" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                            <!-- dark Logo text -->
                        <b>TunRecrute</b>
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-left mr-auto\">
                    <li class=\"nav-item d-none d-md-block\">
                        <a class=\"nav-link sidebartoggler waves-effect waves-light\" href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\">
                            <i class=\"sl-icon-menu font-20\"></i>
                        </a>
                    </li>

                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-right\">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
{#                    <li class=\"nav-item search-box\">#}
{#                        <a class=\"nav-link waves-effect waves-dark\" href=\"javascript:void(0)\">#}
{#                            <i class=\"ti-search font-16\"></i>#}
{#                        </a>#}
{#                        <form class=\"app-search position-absolute\">#}
{#                            <input type=\"text\" class=\"form-control\" placeholder=\"Search &amp; enter\">#}
{#                            <a class=\"srh-btn\">#}
{#                                <i class=\"ti-close\"></i>#}
{#                            </a>#}
{#                        </form>#}
{#                    </li>#}
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-muted  waves-dark pro-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                           aria-expanded=\"false\">
                            <img src=\"{{ asset(\"/assets/img/admin.png\") }}\" alt=\"user\" class=\"rounded-circle\" width=\"31\">
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd\">
                                <span class=\"with-arrow\">
                                    <span class=\"bg-primary\"></span>
                                </span>
                            <div class=\"d-flex no-block align-items-center p-15 bg-primary text-white m-b-10\">
                                <div class=\"\">
                                    <img src=\"{{ asset(\"/assets/img/admin.png\") }}\" alt=\"user\" class=\"img-circle\" width=\"60\">
                                </div>
                                <div class=\"m-l-10\">
                                    <h4 class=\"m-b-0\">{{ app.user.email }}</h4>
                                </div>
                            </div>
                            <a class=\"dropdown-item\" href=\"{{ path(\"admin_dash\") }}\">
                                <i class=\"ti-home m-r-5 m-l-5\"></i>Dashboard</a>

                            <a class=\"dropdown-item\" href=\"{{ path(\"admin_signals\") }}\">
                                <i class=\" ti-target m-r-5 m-l-5\"></i>Signaled Jobs</a>

                            <a class=\"dropdown-item\" href=\"{{ path(\"admin_users\") }}\">
                                <i class=\"ti-user m-r-5 m-l-5\"></i>Users List</a>

                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path(\"admin_edit\") }}\">
                                <i class=\"ti-settings m-r-5 m-l-5\"></i>Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path(\"app_logout\") }}\">
                                <i class=\"fa fa-power-off m-r-5 m-l-5\"></i>Logout</a>
                            <div class=\"dropdown-divider\"></div>

                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
{% block body %}{% endblock %}
    {% for message in app.flashes('success') %}
        <div class=\"mb-3\">
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
        </div>
    {% endfor %}
{% block javascripts %}
{% endblock %}
</body>
</html>
", "BaseAdmin.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\BaseAdmin.html.twig");
    }
}
