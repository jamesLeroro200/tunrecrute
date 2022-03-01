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

/* admin/index.html.twig */
class __TwigTemplate_f6e6bd9023b1083fe5aae7135d751c6e577c7605c5e620006d19d0e7f6557425 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "BaseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card  bg-light no-card-border\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"m-r-10\">
                                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/admin.png"), "html", null, true);
        echo "\" alt=\"user\" width=\"60\" class=\"rounded-circle\" />
                                </div>
                                <div>
                                    <h3 class=\"m-b-0\">Welcome back!</h3>
                                    <span>Some infos about TunRecrute</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class=\"row\">
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-danger text-center\">
                            <h1 class=\"font-light text-white\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nbSign"]) || array_key_exists("nbSign", $context) ? $context["nbSign"] : (function () { throw new RuntimeError('Variable "nbSign" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</h1>
                            <h6 class=\"text-white\">Reports</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-info text-center\">
                            <h1 class=\"font-light text-white\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["nbAnn"]) || array_key_exists("nbAnn", $context) ? $context["nbAnn"] : (function () { throw new RuntimeError('Variable "nbAnn" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</h1>
                            <h6 class=\"text-white\">Jobs</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-primary text-center\">
                            <h1 class=\"font-light text-white\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["nbUser"]) || array_key_exists("nbUser", $context) ? $context["nbUser"] : (function () { throw new RuntimeError('Variable "nbUser" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "</h1>
                            <h6 class=\"text-white\">Users</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-success text-center\">
                            <h1 class=\"font-light text-white\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["nbCan"]) || array_key_exists("nbCan", $context) ? $context["nbCan"] : (function () { throw new RuntimeError('Variable "nbCan" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</h1>
                            <h6 class=\"text-white\">Applications</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Jobs By Field</h4>
                            <div>
                                <canvas id=\"pie-chart\" height=\"150\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <!-- column -->
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Jobs by Company</h4>
                            <div>
                                <canvas id=\"bar-chart-horizontal\" height=\"150\"> </canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <!-- title -->
                            <div class=\"d-md-flex align-items-center\">
                                <div>
                                    <h4 class=\"card-title\">Jobs that need immediate attention</h4>
                                    <h5 class=\"card-subtitle\">This is a list of the jobs that are getting the most reports</h5>
                                </div>
                            <!-- title -->
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table v-middle\">
                                <thead>
                                <tr class=\"bg-light\">
                                    <th class=\"border-top-0\">Title</th>
                                    <th class=\"border-top-0\">Company</th>
                                    <th class=\"border-top-0\">Email</th>
                                    <th class=\"border-top-0\">Reports</th>
                                    <th class=\"border-top-0\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 118
            echo "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
";
            // line 124
            echo "                                            <div class=\"\">
                                                <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" class=\"font-medium link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 125), "html", null, true);
            echo "</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "User", [], "any", false, false, false, 129), "compname", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                                    <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "User", [], "any", false, false, false, 130), "email", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_signals", ["annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 132)]), "html", null, true);
            echo "\"><label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "signals", [], "any", false, false, false, 132)), "html", null, true);
            echo " report(s)</label></a>
                                    </td>
                                    <td>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"ti-settings\"></i>
                                        </button>
                                        <div class=\"dropdown-menu animated slideInUp\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            echo "\"><i class=\"ti-eye\"></i> Open Job</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deactivate_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "getUser", [], "method", false, false, false, 141), "id", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to Deactivate this profile ?');\"><i class=\"ti-trash\"></i> Deactivate Poster</a>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                                </tbody>
                            </table>

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

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        echo "        <script>
        \t// New chart
\tnew Chart(document.getElementById(\"pie-chart\"), {
\t\ttype: 'pie',
\t\tdata: {
\t\t  // labels: [\"Africa\", \"Asia\", \"Europe\", \"Latin America\"],
\t\t  labels: [
\t\t      ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbdom"]) || array_key_exists("nbdom", $context) ? $context["nbdom"] : (function () { throw new RuntimeError('Variable "nbdom" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 170
            echo "\t\t      \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "domaine", [], "any", false, false, false, 170), "html", null, true);
            echo "\",
\t\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t\t  ],
\t\t  datasets: [{
\t\t\tlabel: \"Population (millions)\",
\t\t\tbackgroundColor: [\"#ffcd56\", \"#07b107\",\"#4bc0c0\",\"#ff6384\",
\t\t\t\"#36a2eb\"],
\t\t\tdata: [
\t\t\t";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbdom"]) || array_key_exists("nbdom", $context) ? $context["nbdom"] : (function () { throw new RuntimeError('Variable "nbdom" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 179
            echo "\t\t      \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "mycount", [], "any", false, false, false, 179), "html", null, true);
            echo "\",
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "]
\t\t  }]
\t\t},
\t\toptions: {
\t\t  title: {
\t\t\tdisplay: true,
\t\t\ttext: 'Number of posted jobs for each field'
\t\t  }
\t\t}
\t});

\t// Horizental Bar Chart
\tnew Chart(document.getElementById(\"bar-chart-horizontal\"), {
\t\ttype: 'horizontalBar',
\t\tdata: {
\t\t  labels: [
\t\t  ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bycomp"]) || array_key_exists("bycomp", $context) ? $context["bycomp"] : (function () { throw new RuntimeError('Variable "bycomp" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 197
            echo "\t\t      \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "compname", [], "any", false, false, false, 197), "html", null, true);
            echo "\",
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "],
\t\t  datasets: [
\t\t\t{
\t\t\t  label: \"Population (millions)\",
\t\t\t  backgroundColor: [\"#ffcd56\", \"#07b107\",\"#4bc0c0\",\"#ff6384\",
\t\t\t\"#36a2eb\",\"#e40503\"],
\t\t\t  data: [
\t\t\t  ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bycomp"]) || array_key_exists("bycomp", $context) ? $context["bycomp"] : (function () { throw new RuntimeError('Variable "bycomp" does not exist.', 205, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 206
            echo "\t\t      \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "mycount", [], "any", false, false, false, 206), "html", null, true);
            echo "\",
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "]
\t\t\t}
\t\t  ]
\t\t},
\t\toptions: {
\t\t  legend: { display: false },
\t\t  title: {
\t\t\tdisplay: true,
\t\t\ttext: 'Most Active Companies'
\t\t  }
\t\t}
\t});

            </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 207,  396 => 206,  392 => 205,  383 => 198,  374 => 197,  370 => 196,  352 => 180,  343 => 179,  339 => 178,  331 => 172,  322 => 170,  318 => 169,  309 => 162,  299 => 161,  276 => 147,  264 => 141,  260 => 140,  247 => 132,  242 => 130,  238 => 129,  229 => 125,  226 => 124,  221 => 118,  217 => 117,  158 => 61,  146 => 52,  134 => 43,  122 => 34,  100 => 15,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseAdmin.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card  bg-light no-card-border\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"m-r-10\">
                                    <img src=\"{{ asset(\"/assets/img/admin.png\") }}\" alt=\"user\" width=\"60\" class=\"rounded-circle\" />
                                </div>
                                <div>
                                    <h3 class=\"m-b-0\">Welcome back!</h3>
                                    <span>Some infos about TunRecrute</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class=\"row\">
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-danger text-center\">
                            <h1 class=\"font-light text-white\">{{ nbSign }}</h1>
                            <h6 class=\"text-white\">Reports</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-info text-center\">
                            <h1 class=\"font-light text-white\">{{ nbAnn }}</h1>
                            <h6 class=\"text-white\">Jobs</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-primary text-center\">
                            <h1 class=\"font-light text-white\">{{ nbUser }}</h1>
                            <h6 class=\"text-white\">Users</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                    <div class=\"card card-hover\">
                        <div class=\"box bg-success text-center\">
                            <h1 class=\"font-light text-white\">{{ nbCan }}</h1>
                            <h6 class=\"text-white\">Applications</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Jobs By Field</h4>
                            <div>
                                <canvas id=\"pie-chart\" height=\"150\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <!-- column -->
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Jobs by Company</h4>
                            <div>
                                <canvas id=\"bar-chart-horizontal\" height=\"150\"> </canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <!-- title -->
                            <div class=\"d-md-flex align-items-center\">
                                <div>
                                    <h4 class=\"card-title\">Jobs that need immediate attention</h4>
                                    <h5 class=\"card-subtitle\">This is a list of the jobs that are getting the most reports</h5>
                                </div>
                            <!-- title -->
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table v-middle\">
                                <thead>
                                <tr class=\"bg-light\">
                                    <th class=\"border-top-0\">Title</th>
                                    <th class=\"border-top-0\">Company</th>
                                    <th class=\"border-top-0\">Email</th>
                                    <th class=\"border-top-0\">Reports</th>
                                    <th class=\"border-top-0\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for annonce in annonces %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
{#                                            <div class=\"m-r-10\">#}
{#                                                <a class=\"btn btn-circle btn-danger text-white\">EA</a>#}
{#                                            </div>#}
                                            <div class=\"\">
                                                <a href=\"{{ path('annonce_show', {'id': annonce.id}) }}\" class=\"font-medium link\">{{ annonce.title }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ annonce.User.compname }}</td>
                                    <td>{{ annonce.User.email }}</td>
                                    <td>
                                        <a href=\"{{ path('annonce_signals', {'annonce_id': annonce.id}) }}\"><label class=\"label label-danger\">{{ annonce.signals|length }} report(s)</label></a>
                                    </td>
                                    <td>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"ti-settings\"></i>
                                        </button>
                                        <div class=\"dropdown-menu animated slideInUp\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);\">
                                            <a class=\"dropdown-item\" href=\"{{ path('annonce_show', {'id': annonce.id}) }}\"><i class=\"ti-eye\"></i> Open Job</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('deactivate_user', {'id': annonce.getUser().id}) }}\" onclick=\"return confirm('Are you sure you want to Deactivate this profile ?');\"><i class=\"ti-trash\"></i> Deactivate Poster</a>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


            </div>


        </div>
    {% endblock %}
    {% block javascripts %}
        <script>
        \t// New chart
\tnew Chart(document.getElementById(\"pie-chart\"), {
\t\ttype: 'pie',
\t\tdata: {
\t\t  // labels: [\"Africa\", \"Asia\", \"Europe\", \"Latin America\"],
\t\t  labels: [
\t\t      {% for domaine in nbdom %}
\t\t      \"{{ domaine.domaine }}\",
\t\t      {% endfor %}
\t\t  ],
\t\t  datasets: [{
\t\t\tlabel: \"Population (millions)\",
\t\t\tbackgroundColor: [\"#ffcd56\", \"#07b107\",\"#4bc0c0\",\"#ff6384\",
\t\t\t\"#36a2eb\"],
\t\t\tdata: [
\t\t\t{% for domaine in nbdom %}
\t\t      \"{{ domaine.mycount }}\",
\t\t    {% endfor %}]
\t\t  }]
\t\t},
\t\toptions: {
\t\t  title: {
\t\t\tdisplay: true,
\t\t\ttext: 'Number of posted jobs for each field'
\t\t  }
\t\t}
\t});

\t// Horizental Bar Chart
\tnew Chart(document.getElementById(\"bar-chart-horizontal\"), {
\t\ttype: 'horizontalBar',
\t\tdata: {
\t\t  labels: [
\t\t  {% for company in bycomp %}
\t\t      \"{{ company.compname }}\",
\t\t    {% endfor %}],
\t\t  datasets: [
\t\t\t{
\t\t\t  label: \"Population (millions)\",
\t\t\t  backgroundColor: [\"#ffcd56\", \"#07b107\",\"#4bc0c0\",\"#ff6384\",
\t\t\t\"#36a2eb\",\"#e40503\"],
\t\t\t  data: [
\t\t\t  {% for company in bycomp %}
\t\t      \"{{ company.mycount }}\",
\t\t    {% endfor %}]
\t\t\t}
\t\t  ]
\t\t},
\t\toptions: {
\t\t  legend: { display: false },
\t\t  title: {
\t\t\tdisplay: true,
\t\t\ttext: 'Most Active Companies'
\t\t  }
\t\t}
\t});

            </script>
    {% endblock %}", "admin/index.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\admin\\index.html.twig");
    }
}
