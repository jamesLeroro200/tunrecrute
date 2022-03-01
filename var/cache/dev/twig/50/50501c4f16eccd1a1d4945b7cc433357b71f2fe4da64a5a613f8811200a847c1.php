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

/* admin/edit.html.twig */
class __TwigTemplate_286c3b8bfb5993a0870e632d1117a2292429fab2eea0bcc6a00413d40b1d242c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "admin/edit.html.twig", 1);
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

        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card  bg-light no-card-border\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"m-r-10\">
                                </div>
                                <div>
                                    <h3 class=\"m-b-0\">Admin Settings</h3>
                                    <span>Here you can edit your profile's information and add other admins</span>
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
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "                    <script>
                        new Noty({
                            theme: 'metroui',
                            timeout: 1500,
                            killer: true,
                            type: 'success',
                            layout: 'topCenter',
                            text: '";
            // line 53
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "'
                        }).show();
                    </script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 59, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit")]);
        echo "
                        <div class=\"card-header bg-info\">
                            <h4 class=\"m-b-0 text-white\">Add an Admin</h4>
                        </div>
                        <hr>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'widget', ["attr" => ["placeholder" => "Email"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 73, $this->source); })()), "address", [], "any", false, false, false, 73), 'widget', ["attr" => ["placeholder" => "Address"]]);
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 81, $this->source); })()), "firstname", [], "any", false, false, false, 81), 'widget', ["attr" => ["placeholder" => "Firstname"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 86, $this->source); })()), "lastname", [], "any", false, false, false, 86), 'widget', ["attr" => ["placeholder" => "Address"]]);
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 94, $this->source); })()), "plainPassword", [], "any", false, false, false, 94), "first", [], "any", false, false, false, 94), 'widget', ["attr" => ["placeholder" => "Password"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 99, $this->source); })()), "plainPassword", [], "any", false, false, false, 99), "second", [], "any", false, false, false, 99), 'widget', ["attr" => ["placeholder" => "Retype password"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 103, $this->source); })()), "Add Admin")) : ("Add Admin")), "html", null, true);
        echo "</button>


                            ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 106, $this->source); })()), 'form_end');
        echo "
                        </div>


                    </div>
<hr>
                    <div class=\"card\">
                        ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_start');
        echo "
                        <div class=\"card-header bg-info\">
                            <h4 class=\"m-b-0 text-white\">Edit My Profile</h4>
                        </div>
                        <hr>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "address", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "firstname", [], "any", false, false, false, 135), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "lastname", [], "any", false, false, false, 140), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "plainPassword", [], "any", false, false, false, 148), "first", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "plainPassword", [], "any", false, false, false, 153), "second", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Retype password"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i> ";
        // line 157
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 157, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        echo "</button>


                        ";
        // line 160
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
        echo "
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

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <div id=\"ack\"></div>

    <!--This page JavaScript -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 160,  302 => 157,  295 => 153,  287 => 148,  276 => 140,  268 => 135,  257 => 127,  249 => 122,  237 => 113,  227 => 106,  221 => 103,  214 => 99,  206 => 94,  195 => 86,  187 => 81,  176 => 73,  168 => 68,  156 => 59,  152 => 57,  142 => 53,  133 => 46,  129 => 45,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card  bg-light no-card-border\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"m-r-10\">
                                </div>
                                <div>
                                    <h3 class=\"m-b-0\">Admin Settings</h3>
                                    <span>Here you can edit your profile's information and add other admins</span>
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
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        {{ form_start(addform, {'action': path('admin_edit')}) }}
                        <div class=\"card-header bg-info\">
                            <h4 class=\"m-b-0 text-white\">Add an Admin</h4>
                        </div>
                        <hr>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_widget(addform.email,{'attr': {'placeholder' : 'Email'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_widget(addform.address,{'attr': {'placeholder' : 'Address'}}) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_widget(addform.firstname,{'attr': {'placeholder' : 'Firstname'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_widget(addform.lastname,{'attr': {'placeholder' : 'Address'}}) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_widget(addform.plainPassword.first,{'attr': { 'placeholder' : 'Password'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_widget(addform.plainPassword.second,{'attr': { 'placeholder' : 'Retype password'}}) }}
                                    </div>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i> {{ button_label|default('Add Admin') }}</button>


                            {{ form_end(addform) }}
                        </div>


                    </div>
<hr>
                    <div class=\"card\">
                        {{ form_start(form) }}
                        <div class=\"card-header bg-info\">
                            <h4 class=\"m-b-0 text-white\">Edit My Profile</h4>
                        </div>
                        <hr>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        {{ form_widget(form.email,{'attr': {'class' : 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        {{ form_widget(form.address,{'attr': {'class' : 'form-control'}}) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        {{ form_widget(form.firstname) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                        {{ form_widget(form.lastname) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                            {{ form_widget(form.plainPassword.first,{'attr': {'class' : 'form-control', 'placeholder' : 'Password'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                            {{ form_widget(form.plainPassword.second,{'attr': {'class' : 'form-control', 'placeholder' : 'Retype password'}}) }}
                                    </div>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i> {{ button_label|default('Update') }}</button>


                        {{ form_end(form) }}
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

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <div id=\"ack\"></div>

    <!--This page JavaScript -->
{% endblock %}", "admin/edit.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\admin\\edit.html.twig");
    }
}
