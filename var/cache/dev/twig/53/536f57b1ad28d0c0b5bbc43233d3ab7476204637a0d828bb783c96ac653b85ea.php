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

/* admin/users.html.twig */
class __TwigTemplate_961be5aedb1ecfe6050792f743257efe9cdf7600dc141c8b397a87049425e392 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "admin/users.html.twig", 1);
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
                                        <h3 class=\"m-b-0\">Users List</h3>
                                        <span>Here you can see all the user profiles and decide which ones to deactivate</span>
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
                                <h4 class=\"card-title\">Users</h4>
                                <div class=\"row m-t-40\">
                                    <!-- Column -->
                                    <div class=\"col-md-6 col-lg-3 col-xlg-3\">
                                        <div class=\"card card-hover\">
                                            <div class=\"box bg-info text-center\">
                                                <h1 class=\"font-light text-white\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["nbSign"]) || array_key_exists("nbSign", $context) ? $context["nbSign"] : (function () { throw new RuntimeError('Variable "nbSign" does not exist.', 62, $this->source); })()), "html", null, true);
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
        // line 71
        echo twig_escape_filter($this->env, (isset($context["nbAnn"]) || array_key_exists("nbAnn", $context) ? $context["nbAnn"] : (function () { throw new RuntimeError('Variable "nbAnn" does not exist.', 71, $this->source); })()), "html", null, true);
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
        // line 80
        echo twig_escape_filter($this->env, (isset($context["nbUser"]) || array_key_exists("nbUser", $context) ? $context["nbUser"] : (function () { throw new RuntimeError('Variable "nbUser" does not exist.', 80, $this->source); })()), "html", null, true);
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
        // line 89
        echo twig_escape_filter($this->env, (isset($context["nbCan"]) || array_key_exists("nbCan", $context) ? $context["nbCan"] : (function () { throw new RuntimeError('Variable "nbCan" does not exist.', 89, $this->source); })()), "html", null, true);
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
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Address</th>
                                            <th>Active</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 111
            echo "                                            <tr>
                                                <td><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" class=\"font-medium link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo "</a></td>
                                                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                                                <td>
                                                    ";
            // line 115
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 115), 0, [], "array", false, false, false, 115), "ROLE_CANDIDAT"))) {
                // line 116
                echo "                                                    <span class=\"badge badge-info\">Candidate</span>
                                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 117
$context["user"], "roles", [], "any", false, false, false, 117), 0, [], "array", false, false, false, 117), "ROLE_EMPLOYER"))) {
                // line 118
                echo "                                                        <span class=\"badge badge-warning\">Employer</span>
                                                    ";
            } else {
                // line 120
                echo "                                                        <span class=\"badge badge-primary\">Admin</span>
                                                    ";
            }
            // line 122
            echo "                                                </td>
                                                <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                                                <td>";
            // line 124
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isactive", [], "any", false, false, false, 124), 0))) {
                // line 125
                echo "                                                        <span class=\"badge badge-danger\">Inactive</span>
                                                    ";
            } else {
                // line 127
                echo "                                                        <span class=\"badge badge-success\">Active</span>
                                                    ";
            }
            // line 128
            echo "</td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            <i class=\"ti-settings\"></i>
                                                        </button>
                                                        <div class=\"dropdown-menu animated slideInUp\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);\">
                                                            <a class=\"dropdown-item\" href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deactivate_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to change the state of this Profile ?');\"><i class=\"ti-trash\"></i> Deactivate Profile</a>
                                                            <a class=\"dropdown-item\" href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activate_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to change the state of this Profile ?');\"><i class=\"ti-trash\"></i> Activate Profile</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                        </tbody>
                                    </table>
                                    <ul class=\"pagination float-right\">
                                        ";
        // line 146
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 146, $this->source); })()));
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
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 146,  282 => 143,  269 => 136,  265 => 135,  256 => 128,  252 => 127,  248 => 125,  246 => 124,  242 => 123,  239 => 122,  235 => 120,  231 => 118,  229 => 117,  226 => 116,  224 => 115,  219 => 113,  213 => 112,  210 => 111,  206 => 110,  182 => 89,  170 => 80,  158 => 71,  146 => 62,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseAdmin.html.twig' %}

{% block title %}Dashboard{% endblock %}

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
                                        <h3 class=\"m-b-0\">Users List</h3>
                                        <span>Here you can see all the user profiles and decide which ones to deactivate</span>
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
                                <h4 class=\"card-title\">Users</h4>
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
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Address</th>
                                            <th>Active</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for user in users %}
                                            <tr>
                                                <td><a href=\"{{ path('annonce_show', {'id': user.id}) }}\" class=\"font-medium link\">{{ user.id }}</a></td>
                                                <td>{{ user.email }}</td>
                                                <td>
                                                    {% if user.roles[0] == \"ROLE_CANDIDAT\" %}
                                                    <span class=\"badge badge-info\">Candidate</span>
                                                    {% elseif user.roles[0] == \"ROLE_EMPLOYER\" %}
                                                        <span class=\"badge badge-warning\">Employer</span>
                                                    {% else %}
                                                        <span class=\"badge badge-primary\">Admin</span>
                                                    {% endif %}
                                                </td>
                                                <td>{{ user.address }}</td>
                                                <td>{% if user.isactive == 0 %}
                                                        <span class=\"badge badge-danger\">Inactive</span>
                                                    {% else %}
                                                        <span class=\"badge badge-success\">Active</span>
                                                    {% endif %}</td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            <i class=\"ti-settings\"></i>
                                                        </button>
                                                        <div class=\"dropdown-menu animated slideInUp\" x-placement=\"bottom-start\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);\">
                                                            <a class=\"dropdown-item\" href=\"{{ path('deactivate_user', {'id': user.id}) }}\" onclick=\"return confirm('Are you sure you want to change the state of this Profile ?');\"><i class=\"ti-trash\"></i> Deactivate Profile</a>
                                                            <a class=\"dropdown-item\" href=\"{{ path('activate_user', {'id': user.id}) }}\" onclick=\"return confirm('Are you sure you want to change the state of this Profile ?');\"><i class=\"ti-trash\"></i> Activate Profile</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <ul class=\"pagination float-right\">
                                        {{  knp_pagination_render(users) }}
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
{% endblock %}", "admin/users.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\admin\\users.html.twig");
    }
}
