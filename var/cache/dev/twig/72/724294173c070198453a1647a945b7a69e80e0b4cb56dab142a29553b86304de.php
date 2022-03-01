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

/* /profile/candidate/personaldetails.html.twig */
class __TwigTemplate_d1c2d6e1f5ad2155daac04f8a291f5c18a9921a1a2ce8141eab9246761803fb5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/profile/candidate/personaldetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/profile/candidate/personaldetails.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-body\">
            <div class=\"title\">
                <h4><i data-feather=\"user-plus\"></i>Personal Details</h4>
            </div>
            <div class=\"content\">
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["id" => "persoDetailsForm"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details")]);
        echo "
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">First Name</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "firstname", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Last Name</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "lastname", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "lastname", [], "any", false, false, false, 20), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Email</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Date Of Birth</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "birthdate", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "birthdate", [], "any", false, false, false, 34), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Nationality</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nationality", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nationality", [], "any", false, false, false, 41), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Gender</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "sex", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "sex", [], "any", false, false, false, 48), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Address</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "address", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "address", [], "any", false, false, false, 55), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"buttons\">
                                <button class=\"primary-bg\" type=\"submit\">Save Update</button>
                                <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>
                    </div>
                ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).on(\"submit\",\"#persoDetailsForm\",function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        \$form = \$('#persoDetailsForm');
        \$.ajax({
            url: \$form.attr(\"action\"),
            type: \"POST\",
            data: \$form.serialize(),
            success: function (data) {
                if(data ===\"success\") {
                    window.location.reload();
                }else{
                    \$(\"#modal-personal-details\").html(data);
                    feather.replace();
                }
            },
            error: function (res){
                console.log(\"error\");
            }
        });
        return false;
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/profile/candidate/personaldetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  141 => 55,  137 => 54,  128 => 48,  124 => 47,  115 => 41,  111 => 40,  102 => 34,  98 => 33,  89 => 27,  85 => 26,  76 => 20,  72 => 19,  63 => 13,  59 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-body\">
            <div class=\"title\">
                <h4><i data-feather=\"user-plus\"></i>Personal Details</h4>
            </div>
            <div class=\"content\">
                {{ form_start(form,{'attr':{'id':'persoDetailsForm'},'action':path('details')})}}
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">First Name</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.firstname,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.firstname) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Last Name</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.lastname,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.lastname) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Email</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.email,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.email) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Date Of Birth</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.birthdate,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.birthdate) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Nationality</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.nationality,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.nationality) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Gender</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.sex,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.sex) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Address</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.address,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.address) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"buttons\">
                                <button class=\"primary-bg\" type=\"submit\">Save Update</button>
                                <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>
                    </div>
                {{form_end(form)}}
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).on(\"submit\",\"#persoDetailsForm\",function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        \$form = \$('#persoDetailsForm');
        \$.ajax({
            url: \$form.attr(\"action\"),
            type: \"POST\",
            data: \$form.serialize(),
            success: function (data) {
                if(data ===\"success\") {
                    window.location.reload();
                }else{
                    \$(\"#modal-personal-details\").html(data);
                    feather.replace();
                }
            },
            error: function (res){
                console.log(\"error\");
            }
        });
        return false;
    });
</script>
", "/profile/candidate/personaldetails.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\Profile\\candidate\\personaldetails.html.twig");
    }
}
