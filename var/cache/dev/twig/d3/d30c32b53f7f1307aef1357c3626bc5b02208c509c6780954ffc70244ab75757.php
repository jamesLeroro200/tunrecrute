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

/* admin/signals.html.twig */
class __TwigTemplate_f865582a7931d3a9fbc2a6018a28ab55413a855e194c0b8cc0a16934df9c3571 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/signals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/signals.html.twig"));

        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "admin/signals.html.twig", 1);
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

        echo "Signals";
        
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
        echo "


    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card  bg-light no-card-border\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"m-r-10\">
                                </div>
                                <div>
                                    <h3 class=\"m-b-0\">Reported Jobs</h3>
                                    <span>This is a list of all the jobs that have been reported by users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Reported Posts</h4>
                            <div class=\"row m-t-40\">
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-info text-center\">
                                            <h1 class=\"font-light text-white\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["nbSign"]) || array_key_exists("nbSign", $context) ? $context["nbSign"] : (function () { throw new RuntimeError('Variable "nbSign" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <h6 class=\"text-white\">Reports</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-primary text-center\">
                                            <h1 class=\"font-light text-white\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["nbAnn"]) || array_key_exists("nbAnn", $context) ? $context["nbAnn"] : (function () { throw new RuntimeError('Variable "nbAnn" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <h6 class=\"text-white\">Jobs</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-success text-center\">
                                            <h1 class=\"font-light text-white\">";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["nbUser"]) || array_key_exists("nbUser", $context) ? $context["nbUser"] : (function () { throw new RuntimeError('Variable "nbUser" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <h6 class=\"text-white\">Users</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-dark text-center\">
                                            <h1 class=\"font-light text-white\">";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["nbCan"]) || array_key_exists("nbCan", $context) ? $context["nbCan"] : (function () { throw new RuntimeError('Variable "nbCan" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <h6 class=\"text-white\">Applications</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <div class=\"table-responsive\">
                                <table id=\"zero_config\" class=\"table table-striped table-bordered\">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Posted</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Reports</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 112
            echo "                                        <tr>
                                            <td><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\" class=\"font-medium link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 113), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 114
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["annonce"], "posted", [], "any", false, false, false, 114));
            echo "</td>
                                            <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "getUser", [], "method", false, false, false, 115), "compname", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
                                            <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "getUser", [], "method", false, false, false, 116), "Email", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_signals", ["annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\" class=\"font-medium link\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "signals", [], "any", false, false, false, 117)), "html", null, true);
            echo " Signal(s)</a></td>

                                            <td>
                                                <div class=\"btn-group\">
                                                    <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"ti-settings\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu animated slideInUp\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);\">
                                                        <a class=\"dropdown-item\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\"><i class=\"ti-eye\"></i> Open Job</a>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deactivate_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "getUser", [], "method", false, false, false, 126), "id", [], "any", false, false, false, 126)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to Deactivate this profile ?');\"><i class=\"ti-trash\"></i> Deactivate Poster</a>
                                                    </div>
                                                </div>
                                            </td>
";
            // line 131
            echo "
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                    </tbody>
                                </table>
                                <ul class=\"pagination float-right\">
                                    ";
        // line 137
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 137, $this->source); })()));
        echo "
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
    <div id=\"ack\"></div>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<!--This page JavaScript -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/signals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 137,  264 => 134,  256 => 131,  249 => 126,  245 => 125,  232 => 117,  228 => 116,  224 => 115,  220 => 114,  214 => 113,  211 => 112,  207 => 111,  184 => 91,  172 => 82,  160 => 73,  148 => 64,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseAdmin.html.twig' %}

{% block title %}Signals{% endblock %}

{% block body %}



    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card  bg-light no-card-border\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"m-r-10\">
                                </div>
                                <div>
                                    <h3 class=\"m-b-0\">Reported Jobs</h3>
                                    <span>This is a list of all the jobs that have been reported by users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Reported Posts</h4>
                            <div class=\"row m-t-40\">
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-info text-center\">
                                            <h1 class=\"font-light text-white\">{{ nbSign }}</h1>
                                            <h6 class=\"text-white\">Reports</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-primary text-center\">
                                            <h1 class=\"font-light text-white\">{{ nbAnn }}</h1>
                                            <h6 class=\"text-white\">Jobs</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-success text-center\">
                                            <h1 class=\"font-light text-white\">{{ nbUser }}</h1>
                                            <h6 class=\"text-white\">Users</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-dark text-center\">
                                            <h1 class=\"font-light text-white\">{{ nbCan }}</h1>
                                            <h6 class=\"text-white\">Applications</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <div class=\"table-responsive\">
                                <table id=\"zero_config\" class=\"table table-striped table-bordered\">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Posted</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Reports</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for annonce in annonces %}
                                        <tr>
                                            <td><a href=\"{{ path('annonce_show', {'id': annonce.id}) }}\" class=\"font-medium link\">{{ annonce.title }}</a></td>
                                            <td>{{ time_diff(annonce.posted) }}</td>
                                            <td>{{ annonce.getUser().compname }}</td>
                                            <td>{{ annonce.getUser().Email }}</td>
                                            <td><a href=\"{{ path('annonce_signals', {'annonce_id': annonce.id}) }}\" class=\"font-medium link\">{{ annonce.signals|length }} Signal(s)</a></td>

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
{#                                            <td>{{ signal.getAnnonceId().User.compname }}</td>#}

                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <ul class=\"pagination float-right\">
                                    {{  knp_pagination_render(annonces) }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
    <div id=\"ack\"></div>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<!--This page JavaScript -->
{% endblock %}", "admin/signals.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\admin\\signals.html.twig");
    }
}
