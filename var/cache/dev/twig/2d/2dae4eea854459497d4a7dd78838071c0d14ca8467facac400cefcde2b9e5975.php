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

/* landing/index.html.twig */
class __TwigTemplate_051cb2408596c9e10e10eb4d01f6e6f20b56305e9da64b0cfe9d1836a9798e64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Post a job position or create your online resume by TheJobs!\">
    <meta name=\"keywords\" content=\"\">

    <title>Welcome</title>

    <!-- Styles -->
    <link href=\"  ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel=\"icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.ico"), "html", null, true);
        echo "\">
</head>

<body class=\"nav-on-header smart-nav\">

<!-- Navigation bar -->
<nav class=\"navbar\">
    <div class=\"container\">

        <!-- Logo -->
        <div class=\"pull-left\">

            <div class=\"logo-wrapper\">
                <a class=\"logo\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.png"), "html", null, true);
        echo " alt=\"logo\"></a>
                <a class=\"logo-alt\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.png"), "html", null, true);
        echo " alt=\"logo-alt\"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class=\"pull-right user-login\">
            <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a> or <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Choose_Role");
        echo "\">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->

        <!-- END Navigation menu -->

    </div>
</nav>
<!-- END Navigation bar -->


<!-- Site header -->
<header class=\"site-header size-lg text-center\" style=\"background-image: url(";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/wallhaven-r7z7z1.jpg"), "html", null, true);
        echo ")\">
    <div class=\"container\">
        <div class=\"col-xs-12\">
            <br><br>
            <h2>Welcome to<mark>TunRecrute</mark>!</h2>
            <h5 class=\"font-alt\">Start searching for a job opportunity right now</h5>
            <br><br><br>
            <form class=\"header-job-search\"  action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_annonce");
        echo "\" method=\"post\">
                <div class=\"input-keyword\">
                    <input type=\"text\" class=\"form-control\" name=\"titre\" placeholder=\"Job title, skills, or company\">
                </div>

                <div class=\"input-location\">
                    <input type=\"text\" class=\"form-control\" name=\"address\" placeholder=\"City or state\">
                </div>

                <div class=\"btn-search\">
                    <button class=\"btn btn-primary\" type=\"submit\">Find jobs</button>
";
        // line 75
        echo "                </div>
            </form>
        </div>

    </div>
</header>
<!-- END Site header -->


<!-- Main container -->
<main>

    <!-- Recent jobs -->
    <section>
        <div class=\"container\">
            <header class=\"section-header\">
                <span>Latest</span>
                <h2>Recent jobs</h2>
            </header>

            <div class=\"row item-blocks-connected\">
    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 96, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 97
            echo "        <!-- Job item -->
        <div class=\"col-xs-12\">
            <a class=\"item-block\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">
                <header>
                    <img src=";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 101), "getPicture", [], "method", false, false, false, 101))), "html", null, true);
            echo " alt=\"\">
                    <div class=\"hgroup\">
                        <h4>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 103), "html", null, true);
            echo "</h4>
                        <h5>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 104), "getCompname", [], "method", false, false, false, 104), "html", null, true);
            echo "</h5>
                    </div>
                    <div class=\"header-meta\">
                        <span class=\"location\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "adresseTravail", [], "any", false, false, false, 107), "html", null, true);
            echo "</span>
                        <span class=\"label label-success\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "contrat", [], "any", false, false, false, 108), "html", null, true);
            echo "</span>
                    </div>
                </header>
            </a>
        </div>
        <!-- END Job item -->
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "        <div class=\"col-xs-12\">
            No jobs Yet !!!
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            </div>

            <br><br>
            <p class=\"text-center\"><a class=\"btn btn-info\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\">Browse all jobs</a></p>
        </div>
    </section>





    <!-- Facts -->
    <section class=\"bg-img bg-repeat no-overlay section-sm\" style=\"background-image: ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-pattern.png"), "html", null, true);
        echo "\">
        <div class=\"container\">

";
        // line 139
        echo "
                <div class=\"counter col-md-6 col-sm-6\">
                    <p><span data-from=\"0\" data-to=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["numA"]) || array_key_exists("numA", $context) ? $context["numA"] : (function () { throw new RuntimeError('Variable "numA" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "\"></span>+</p>
                    <h6>Jobs</h6>
                </div>

";
        // line 149
        echo "
                <div class=\"counter col-md-6 col-sm-6\">
                    <p><span data-from=\"0\" data-to=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["numU"]) || array_key_exists("numU", $context) ? $context["numU"] : (function () { throw new RuntimeError('Variable "numU" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "\"></span>+</p>
                    <h6>Users</h6>
                </div>
            </div>

        </div>
    </section>
    <!-- END Facts -->





</main>
<!-- END Main container -->


<!-- Site footer -->
<footer class=\"site-footer\">



    <!-- Bottom section -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-6 col-xs-12\">
            </div>

            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <ul class=\"social-icons\">
                    <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                    <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li><a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END Bottom section -->

</footer>
<!-- END Site footer -->


<!-- Back to top button -->
<a id=\"scroll-up\" href=\"#\"><i class=\"ti-angle-up\"></i></a>
<!-- END Back to top button -->

<!-- Scripts -->
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "landing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 200,  314 => 199,  263 => 151,  259 => 149,  252 => 141,  248 => 139,  242 => 131,  230 => 122,  225 => 119,  216 => 115,  204 => 108,  200 => 107,  194 => 104,  190 => 103,  185 => 101,  180 => 99,  176 => 97,  171 => 96,  148 => 75,  134 => 63,  124 => 56,  105 => 42,  92 => 34,  86 => 33,  70 => 20,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Post a job position or create your online resume by TheJobs!\">
    <meta name=\"keywords\" content=\"\">

    <title>Welcome</title>

    <!-- Styles -->
    <link href=\"  {{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/custom.css') }}\" rel=\"stylesheet\">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel=\"icon\" href=\"{{asset('assets/img/speaker.ico')}}\">
</head>

<body class=\"nav-on-header smart-nav\">

<!-- Navigation bar -->
<nav class=\"navbar\">
    <div class=\"container\">

        <!-- Logo -->
        <div class=\"pull-left\">

            <div class=\"logo-wrapper\">
                <a class=\"logo\" href=\"{{ path(\"app_index\") }}\"><img src={{ asset(\"assets/img/speaker.png\") }} alt=\"logo\"></a>
                <a class=\"logo-alt\" href=\"{{ path(\"app_index\") }}\"><img src={{ asset(\"assets/img/speaker.png\")}} alt=\"logo-alt\"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class=\"pull-right user-login\">
            <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_login') }}\">Login</a> or <a href=\"{{ path('Choose_Role') }}\">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->

        <!-- END Navigation menu -->

    </div>
</nav>
<!-- END Navigation bar -->


<!-- Site header -->
<header class=\"site-header size-lg text-center\" style=\"background-image: url({{asset('assets/img/wallhaven-r7z7z1.jpg')}})\">
    <div class=\"container\">
        <div class=\"col-xs-12\">
            <br><br>
            <h2>Welcome to<mark>TunRecrute</mark>!</h2>
            <h5 class=\"font-alt\">Start searching for a job opportunity right now</h5>
            <br><br><br>
            <form class=\"header-job-search\"  action=\"{{ path('search_annonce') }}\" method=\"post\">
                <div class=\"input-keyword\">
                    <input type=\"text\" class=\"form-control\" name=\"titre\" placeholder=\"Job title, skills, or company\">
                </div>

                <div class=\"input-location\">
                    <input type=\"text\" class=\"form-control\" name=\"address\" placeholder=\"City or state\">
                </div>

                <div class=\"btn-search\">
                    <button class=\"btn btn-primary\" type=\"submit\">Find jobs</button>
{#                    <a href=\"job-list.html\">Advanced Job Search</a>#}
                </div>
            </form>
        </div>

    </div>
</header>
<!-- END Site header -->


<!-- Main container -->
<main>

    <!-- Recent jobs -->
    <section>
        <div class=\"container\">
            <header class=\"section-header\">
                <span>Latest</span>
                <h2>Recent jobs</h2>
            </header>

            <div class=\"row item-blocks-connected\">
    {% for annonce in annonces %}
        <!-- Job item -->
        <div class=\"col-xs-12\">
            <a class=\"item-block\" href=\"{{ path('annonce_show', {'id': annonce.id}) }}\">
                <header>
                    <img src={{ asset('Uploads/User_Images/' ~ annonce.user.getPicture()) }} alt=\"\">
                    <div class=\"hgroup\">
                        <h4>{{ annonce.title }}</h4>
                        <h5>{{ annonce.user.getCompname() }}</h5>
                    </div>
                    <div class=\"header-meta\">
                        <span class=\"location\">{{ annonce.adresseTravail }}</span>
                        <span class=\"label label-success\">{{ annonce.contrat }}</span>
                    </div>
                </header>
            </a>
        </div>
        <!-- END Job item -->
    {% else %}
        <div class=\"col-xs-12\">
            No jobs Yet !!!
        </div>
    {% endfor %}
            </div>

            <br><br>
            <p class=\"text-center\"><a class=\"btn btn-info\" href=\"{{ path(\"annonce_index\") }}\">Browse all jobs</a></p>
        </div>
    </section>





    <!-- Facts -->
    <section class=\"bg-img bg-repeat no-overlay section-sm\" style=\"background-image: {{ asset('assets/img/bg-pattern.png') }}\">
        <div class=\"container\">

{#            <div class=\"row\">#}
{#                <div class=\"counter col-md-3 col-sm-6\">#}
{#                    <p><span data-from=\"0\" data-to=\"6890\"></span>+</p>#}
{#                    <h6>Jobs</h6>#}
{#                </div>#}

                <div class=\"counter col-md-6 col-sm-6\">
                    <p><span data-from=\"0\" data-to=\"{{ numA }}\"></span>+</p>
                    <h6>Jobs</h6>
                </div>

{#                <div class=\"counter col-md-3 col-sm-6\">#}
{#                    <p><span data-from=\"0\" data-to=\"36800\"></span>+</p>#}
{#                    <h6>Resume</h6>#}
{#                </div>#}

                <div class=\"counter col-md-6 col-sm-6\">
                    <p><span data-from=\"0\" data-to=\"{{ numU }}\"></span>+</p>
                    <h6>Users</h6>
                </div>
            </div>

        </div>
    </section>
    <!-- END Facts -->





</main>
<!-- END Main container -->


<!-- Site footer -->
<footer class=\"site-footer\">



    <!-- Bottom section -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-6 col-xs-12\">
            </div>

            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <ul class=\"social-icons\">
                    <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                    <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li><a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END Bottom section -->

</footer>
<!-- END Site footer -->


<!-- Back to top button -->
<a id=\"scroll-up\" href=\"#\"><i class=\"ti-angle-up\"></i></a>
<!-- END Back to top button -->

<!-- Scripts -->
<script src=\"{{ asset('assets/js/app.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

</body>
</html>
", "landing/index.html.twig", "/Users/macbookpro/Documents/final/templates/landing/index.html.twig");
    }
}
