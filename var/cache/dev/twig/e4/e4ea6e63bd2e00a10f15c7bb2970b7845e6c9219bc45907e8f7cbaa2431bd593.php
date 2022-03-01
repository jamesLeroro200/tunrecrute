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

/* admin/signalsByannonce.html.twig */
class __TwigTemplate_8987c258a678b01f3877971517385097f4cadea1e7ee5942243d5acd56e4a2af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/signalsByannonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/signalsByannonce.html.twig"));

        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "admin/signalsByannonce.html.twig", 1);
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
                                    <h3 class=\"m-b-0\">Reports</h3>
                                    <span>This is a list of all the Reports related to the choosen job</span>
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
                            <div class=\"row m-t-40\">
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                    <div class=\"card card-hover\">
                                        <div class=\"box bg-info text-center\">
                                            <h1 class=\"font-light text-white\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["nbSign"]) || array_key_exists("nbSign", $context) ? $context["nbSign"] : (function () { throw new RuntimeError('Variable "nbSign" does not exist.', 63, $this->source); })()), "html", null, true);
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
        // line 72
        echo twig_escape_filter($this->env, (isset($context["nbAnn"]) || array_key_exists("nbAnn", $context) ? $context["nbAnn"] : (function () { throw new RuntimeError('Variable "nbAnn" does not exist.', 72, $this->source); })()), "html", null, true);
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
        // line 81
        echo twig_escape_filter($this->env, (isset($context["nbUser"]) || array_key_exists("nbUser", $context) ? $context["nbUser"] : (function () { throw new RuntimeError('Variable "nbUser" does not exist.', 81, $this->source); })()), "html", null, true);
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
        // line 90
        echo twig_escape_filter($this->env, (isset($context["nbCan"]) || array_key_exists("nbCan", $context) ? $context["nbCan"] : (function () { throw new RuntimeError('Variable "nbCan" does not exist.', 90, $this->source); })()), "html", null, true);
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
                                        <th>Job Title</th>
                                        <th>Signaled</th>
                                        <th>Description</th>
                                        <th>Reported By</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["signals"]) || array_key_exists("signals", $context) ? $context["signals"] : (function () { throw new RuntimeError('Variable "signals" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["signal"]) {
            // line 110
            echo "                                        <tr>
                                            <td><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["signal"], "getAnnonceId", [], "method", false, false, false, 111), "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\" class=\"font-medium link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["signal"], "getAnnonceId", [], "method", false, false, false, 111), "title", [], "any", false, false, false, 111), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 112
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["signal"], "time", [], "any", false, false, false, 112));
            echo "</td>
                                            <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["signal"], "description", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                                            <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["signal"], "getUserId", [], "method", false, false, false, 114), "email", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signal_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["signal"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this reports ?');\"><i class=\"fas fa-window-close\" style=\"color : indianred\"></i></a></td>


                                            ";
            // line 119
            echo "
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                                    </tbody>
                                </table>
                                <ul class=\"pagination float-right\">
                                    ";
        // line 125
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["signals"]) || array_key_exists("signals", $context) ? $context["signals"] : (function () { throw new RuntimeError('Variable "signals" does not exist.', 125, $this->source); })()));
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
        return "admin/signalsByannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 125,  244 => 122,  236 => 119,  230 => 115,  226 => 114,  222 => 113,  218 => 112,  212 => 111,  209 => 110,  205 => 109,  183 => 90,  171 => 81,  159 => 72,  147 => 63,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                    <h3 class=\"m-b-0\">Reports</h3>
                                    <span>This is a list of all the Reports related to the choosen job</span>
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
                                        <th>Job Title</th>
                                        <th>Signaled</th>
                                        <th>Description</th>
                                        <th>Reported By</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for signal in signals %}
                                        <tr>
                                            <td><a href=\"{{ path('annonce_show', {'id': signal.getAnnonceId().id}) }}\" class=\"font-medium link\">{{ signal.getAnnonceId().title }}</a></td>
                                            <td>{{ time_diff(signal.time) }}</td>
                                            <td>{{ signal.description }}</td>
                                            <td>{{ signal.getUserId().email }}</td>
                                            <td><a href=\"{{ path('signal_delete', {'id': signal.id}) }}\" onclick=\"return confirm('Are you sure you want to delete this reports ?');\"><i class=\"fas fa-window-close\" style=\"color : indianred\"></i></a></td>


                                            {#                                            <td>{{ signal.getAnnonceId().User.compname }}</td>#}

                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <ul class=\"pagination float-right\">
                                    {{  knp_pagination_render(signals) }}
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
{% endblock %}", "admin/signalsByannonce.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\admin\\signalsByannonce.html.twig");
    }
}
