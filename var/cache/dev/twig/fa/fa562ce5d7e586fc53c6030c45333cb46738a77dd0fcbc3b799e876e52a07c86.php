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

/* Profile/employer/edit.html.twig */
class __TwigTemplate_55115e067a2e175a1ae67f6dad689ef00a934300fa6db6a8e0fd2328fe61c831 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/employer/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Profile/employer/edit.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 2, $this->source); })()), [0 => "form/my_theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("profile/baseProfile.html.twig", "Profile/employer/edit.html.twig", 1);
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
        echo "<div class=\"alice-bg section-padding-bottom\">
    <div class=\"container no-gliters\">
        <div class=\"row no-gliters\">
            <div class=\"col\">
                <div class=\"dashboard-container\">
                    <div class=\"dashboard-content-wrapper\">
                        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "dashboard-form"]]);
        echo "
                            <div class=\"dashboard-section upload-profile-photo\">
                                <div class=\"update-photo\">
                                    <img class=\"image\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "picture", [], "any", false, false, false, 14))), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"file-upload\">
                                    <span>Change Avatar</span>
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 18, $this->source); })()), "pictureFile", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "file-input"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"dashboard-section basic-info-input\">
                                <h4><i data-feather=\"user-check\"></i>Basic Info</h4>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Company Name</label>
                                    <div class=\"col-sm-9\">
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 26, $this->source); })()), "compname", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Company Name"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Email Address</label>
                                    <div class=\"col-sm-9\">
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@example.com"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Phone</label>
                                    <div class=\"col-sm-9\">
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 38, $this->source); })()), "tel", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "12 345 678"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Address</label>
                                    <div class=\"col-sm-9\">
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 44, $this->source); })()), "address", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ariana"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">About Us</label>
                                    <div class=\"col-sm-9\">
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 51, $this->source); })()), "aboutme", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard-section media-inputs\">
                                <h4><i data-feather=\"image\"></i>Video</h4>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Intro Video</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\">Link</div>
                                            </div>
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 64, $this->source); })()), "socialMedia", [], "any", false, false, false, 64), "youtube", [], "any", false, false, false, 64), 'widget', ["attr" => ["placeholder" => "https://www.youtube.com/watch?v=ZRkdyjJ_489M"]]);
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard-section social-inputs\">
                                <h4><i data-feather=\"cast\"></i>Social Networks</h4>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Social Links</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\"><i class=\"fab fa-facebook-f\"></i></div>
                                            </div>
                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 78, $this->source); })()), "socialMedia", [], "any", false, false, false, 78), "facebook", [], "any", false, false, false, 78), 'widget', ["attr" => ["placeholder" => "facebook.com/username"]]);
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"offset-sm-3 col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\"><i class=\"fab fa-twitter\"></i></div>
                                            </div>
                                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 88, $this->source); })()), "socialMedia", [], "any", false, false, false, 88), "twitter", [], "any", false, false, false, 88), 'widget', ["attr" => ["placeholder" => "twitter.com/username"]]);
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"offset-sm-3 col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\"><i class=\"fab fa-linkedin-in\"></i></div>
                                            </div>
                                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 98, $this->source); })()), "socialMedia", [], "any", false, false, false, 98), "linkedin", [], "any", false, false, false, 98), 'widget', ["attr" => ["placeholder" => "linkedin.com/username"]]);
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\"></label>
                                    <div class=\"col-sm-9\">
                                        <button type=\"submit\" class=\"button\">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                        ";
        // line 109
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 109, $this->source); })()), "socialMedia", [], "any", false, false, false, 109), "setRendered", [], "any", false, false, false, 109);
        // line 110
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 110, $this->source); })()), 'form_end');
        echo "
                        ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_start', ["attr" => ["class" => "dashboard-form", "id" => "pwd-form"]]);
        echo "
                        <div class=\"dashboard-section basic-info-input\">
                            <h4><i data-feather=\"lock\"></i>Change Password</h4>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\">New Password</label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "password", [], "any", false, false, false, 117), "first", [], "any", false, false, false, 117), 'row', ["attr" => ["class" => "form-control", "placeholder" => "New password"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\">Retype Password</label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "password", [], "any", false, false, false, 123), "second", [], "any", false, false, false, 123), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Retype password"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\"></label>
                                <div class=\"col-sm-9\">
                                    <button class=\"button\">Update Password</button>
                                </div>
                            </div>
                        </div>
                        ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
        echo "
                    </div>
                    <div class=\"dashboard-sidebar\">
                        <div class=\"company-info\">
                            <div class=\"thumb\">
                                <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "picture", [], "any", false, false, false, 138))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"company-body\">
                                <h5>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "compname", [], "any", false, false, false, 141), "html", null, true);
        echo "</h5>
                            </div>
                        </div>
                        <div class=\"dashboard-menu\">
                            <ul>
                                <li class=\"active\"><i class=\"fas fa-user\"></i><a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Edit Profile</a></li>
                                <li><i class=\"fas fa-briefcase\"></i><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
        echo "\">Manage Jobs</a></li>
                                <li><i class=\"fas fa-users\"></i><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_index");
        echo "\">Manage Candidates</a></li>
                                <li><i class=\"fas fa-calendar-check\"></i><a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("managed_applications");
        echo "\">Managed Applications</a></li>
                                <li><i class=\"fas fa-plus-square\"></i><a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
        echo "\">Post New Job</a></li>
                            </ul>
                            <ul class=\"delete\">
                                <li><i class=\"fas fa-power-off\"></i><a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                                <li><i class=\"fas fa-trash-alt\"></i><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-delete\">Delete Profile</a></li>
                            </ul>
                            <!-- Modal -->
                            <div class=\"modal fade modal-delete\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::deactivate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158)]));
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
        return "Profile/employer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 158,  295 => 153,  289 => 150,  285 => 149,  281 => 148,  277 => 147,  273 => 146,  265 => 141,  259 => 138,  251 => 133,  238 => 123,  229 => 117,  220 => 111,  215 => 110,  213 => 109,  199 => 98,  186 => 88,  173 => 78,  156 => 64,  140 => 51,  130 => 44,  121 => 38,  112 => 32,  103 => 26,  92 => 18,  85 => 14,  79 => 11,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/baseProfile.html.twig' %}
{% form_theme profileForm 'form/my_theme.html.twig' %}

{% block body  %}
<div class=\"alice-bg section-padding-bottom\">
    <div class=\"container no-gliters\">
        <div class=\"row no-gliters\">
            <div class=\"col\">
                <div class=\"dashboard-container\">
                    <div class=\"dashboard-content-wrapper\">
                        {{form_start(profileForm,{'attr':{'class':'dashboard-form'}}) }}
                            <div class=\"dashboard-section upload-profile-photo\">
                                <div class=\"update-photo\">
                                    <img class=\"image\" src=\"{{ asset('Uploads/User_Images/' ~ app.user.picture) }}\" alt=\"\">
                                </div>
                                <div class=\"file-upload\">
                                    <span>Change Avatar</span>
                                    {{ form_widget(profileForm.pictureFile,{ 'attr':{'class':'file-input'} } ) }}
                                </div>
                            </div>
                            <div class=\"dashboard-section basic-info-input\">
                                <h4><i data-feather=\"user-check\"></i>Basic Info</h4>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Company Name</label>
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(profileForm.compname,{ 'attr':{'class':'form-control','placeholder':'Company Name'} } ) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Email Address</label>
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(profileForm.email,{ 'attr':{'class':'form-control','placeholder':'email@example.com'} } ) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Phone</label>
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(profileForm.tel,{ 'attr':{'class':'form-control','placeholder':'12 345 678'} } ) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Address</label>
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(profileForm.address,{ 'attr':{'class':'form-control','placeholder':'Ariana'} } ) }}
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">About Us</label>
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(profileForm.aboutme,{ 'attr':{'class':'form-control'} } ) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard-section media-inputs\">
                                <h4><i data-feather=\"image\"></i>Video</h4>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Intro Video</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\">Link</div>
                                            </div>
                                            {{ form_widget(profileForm.socialMedia.youtube,{ 'attr':{'placeholder':'https://www.youtube.com/watch?v=ZRkdyjJ_489M'} } ) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard-section social-inputs\">
                                <h4><i data-feather=\"cast\"></i>Social Networks</h4>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">Social Links</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\"><i class=\"fab fa-facebook-f\"></i></div>
                                            </div>
                                            {{ form_widget(profileForm.socialMedia.facebook,{'attr':{'placeholder':'facebook.com/username'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"offset-sm-3 col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\"><i class=\"fab fa-twitter\"></i></div>
                                            </div>
                                            {{ form_widget(profileForm.socialMedia.twitter,{'attr':{'placeholder':'twitter.com/username'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"offset-sm-3 col-sm-9\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <div class=\"input-group-text\"><i class=\"fab fa-linkedin-in\"></i></div>
                                            </div>
                                            {{ form_widget(profileForm.socialMedia.linkedin,{'attr':{'placeholder':'linkedin.com/username'}}) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\"></label>
                                    <div class=\"col-sm-9\">
                                        <button type=\"submit\" class=\"button\">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                        {% do profileForm.socialMedia.setRendered %}
                        {{form_end(profileForm)}}
                        {{ form_start(form,{'attr':{'class':'dashboard-form','id':'pwd-form'}}) }}
                        <div class=\"dashboard-section basic-info-input\">
                            <h4><i data-feather=\"lock\"></i>Change Password</h4>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\">New Password</label>
                                <div class=\"col-sm-9\">
                                    {{ form_row(form.password.first,{'attr':{'class':'form-control','placeholder':'New password'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\">Retype Password</label>
                                <div class=\"col-sm-9\">
                                    {{ form_row(form.password.second,{'attr':{'class':'form-control','placeholder':'Retype password'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\"></label>
                                <div class=\"col-sm-9\">
                                    <button class=\"button\">Update Password</button>
                                </div>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                    <div class=\"dashboard-sidebar\">
                        <div class=\"company-info\">
                            <div class=\"thumb\">
                                <img src=\"{{ asset('Uploads/User_Images/' ~ app.user.picture) }}\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"company-body\">
                                <h5>{{ app.user.compname }}</h5>
                            </div>
                        </div>
                        <div class=\"dashboard-menu\">
                            <ul>
                                <li class=\"active\"><i class=\"fas fa-user\"></i><a href=\"{{ path('edit_profile') }}\">Edit Profile</a></li>
                                <li><i class=\"fas fa-briefcase\"></i><a href=\"{{ path('mes_annonces') }}\">Manage Jobs</a></li>
                                <li><i class=\"fas fa-users\"></i><a href=\"{{ path('candidature_index') }}\">Manage Candidates</a></li>
                                <li><i class=\"fas fa-calendar-check\"></i><a href=\"{{ path('managed_applications') }}\">Managed Applications</a></li>
                                <li><i class=\"fas fa-plus-square\"></i><a href=\"{{ path('annonce_new') }}\">Post New Job</a></li>
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
{% endblock %}", "Profile/employer/edit.html.twig", "/Users/macbookpro/Documents/final/templates/Profile/employer/edit.html.twig");
    }
}
