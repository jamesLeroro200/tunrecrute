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

/* work_exp/new.html.twig */
class __TwigTemplate_8b92024db1d56e5737b52f1cf1b12189d60f47f00b9be398b625f7e6bccb1ccc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "work_exp/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "work_exp/new.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-body\">
            <div class=\"title\">
                <h4><i data-feather=\"briefcase\"></i>Experience</h4>
            </div>
            <div class=\"content\">
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["id" => "newWorkForm"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("work_exp_new")]);
        echo "
                <div class=\"input-block-wrap\">
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label\" style=\"margin-right: 0; padding-top: 10px; padding-bottom: 0; color: #6f7484;font-size: 1.4rem; font-family: 'Poppins', sans-serif; font-weight: 600\">
                                Details of Experience
                            </label>
                            <div class=\"col-sm-9\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Title</div>
                                    </div>
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Title", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Title", [], "any", false, false, false, 20), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"offset-sm-3 col-sm-9\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Company</div>
                                    </div>
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "CompanyName", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "CompanyName", [], "any", false, false, false, 31), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"col-sm-9 offset-sm-3\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Start Year</div>
                                    </div>
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "startYear", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "startYear", [], "any", false, false, false, 42), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"col-sm-9 offset-sm-3\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">End Year</div>
                                    </div>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "endYear", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "endYear", [], "any", false, false, false, 53), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"offset-sm-3 col-sm-9\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Description</div>
                                    </div>
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"buttons\">
                                <button class=\"primary-bg\">Add</button>
                                <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>
                    </div>
                ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).on(\"submit\",\"#newWorkForm\",function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        \$form = \$(\"#newWorkForm\");
        \$.ajax({
            url: \$form.attr('action'),
            type: \"POST\",
            data: \$form.serialize(),
            success: function (data) {
                if(data ==='success') {
                    window.location.reload();
                }else{
                    \$('#modal-experience').html(data);
                    feather.replace();
                }
            },
            error: function (res){
                console.log('error');
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
        return "work_exp/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 77,  138 => 64,  134 => 63,  121 => 53,  117 => 52,  104 => 42,  100 => 41,  87 => 31,  83 => 30,  70 => 20,  66 => 19,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-body\">
            <div class=\"title\">
                <h4><i data-feather=\"briefcase\"></i>Experience</h4>
            </div>
            <div class=\"content\">
                {{form_start(form,{'attr':{'id':'newWorkForm'},'action':path('work_exp_new')})}}
                <div class=\"input-block-wrap\">
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label\" style=\"margin-right: 0; padding-top: 10px; padding-bottom: 0; color: #6f7484;font-size: 1.4rem; font-family: 'Poppins', sans-serif; font-weight: 600\">
                                Details of Experience
                            </label>
                            <div class=\"col-sm-9\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Title</div>
                                    </div>
                                    {{ form_widget( form.Title,{'attr':{'class':'form-control'}} ) }}
                                    {{ form_errors(form.Title) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"offset-sm-3 col-sm-9\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Company</div>
                                    </div>
                                    {{ form_widget( form.CompanyName,{'attr':{'class':'form-control'}} ) }}
                                    {{ form_errors(form.CompanyName) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"col-sm-9 offset-sm-3\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Start Year</div>
                                    </div>
                                    {{ form_widget( form.startYear,{'attr':{'class':'form-control'}} ) }}
                                    {{ form_errors(form.startYear) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"col-sm-9 offset-sm-3\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">End Year</div>
                                    </div>
                                    {{ form_widget( form.endYear,{'attr':{'class':'form-control'}} ) }}
                                    {{ form_errors(form.endYear) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"offset-sm-3 col-sm-9\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\">Description</div>
                                    </div>
                                    {{ form_widget( form.description,{'attr':{'class':'form-control'}} ) }}
                                    {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"buttons\">
                                <button class=\"primary-bg\">Add</button>
                                <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).on(\"submit\",\"#newWorkForm\",function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        \$form = \$(\"#newWorkForm\");
        \$.ajax({
            url: \$form.attr('action'),
            type: \"POST\",
            data: \$form.serialize(),
            success: function (data) {
                if(data ==='success') {
                    window.location.reload();
                }else{
                    \$('#modal-experience').html(data);
                    feather.replace();
                }
            },
            error: function (res){
                console.log('error');
            }
        });
        return false;
    });
</script>

", "work_exp/new.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\work_exp\\new.html.twig");
    }
}
