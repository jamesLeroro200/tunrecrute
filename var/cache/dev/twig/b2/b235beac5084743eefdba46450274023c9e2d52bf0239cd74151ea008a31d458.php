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

/* social_media/edit.html.twig */
class __TwigTemplate_a19914c3a6f7790ffa3aa8a217b6fd6335da245c149deed6b72dcbad6fad05f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "social_media/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "social_media/edit.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-body\">
            <div class=\"title\">
                <h4><i data-feather=\"git-branch\"></i>Social Networks</h4>
            </div>
            <div class=\"content\">
                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "socialMedia", [], "any", false, false, false, 8)) {
            // line 9
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["id" => "editSocialMediaForm"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social_media_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "socialmedia", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)])]);
            echo "
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Social Links</label>
                        <div class=\"col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-facebook-f\"></i></div>
                                </div>
                                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "facebook", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "facebook.com/username"]]);
            echo "
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "facebook", [], "any", false, false, false, 18), 'errors');
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
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "twitter", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "twitter.com/username"]]);
            echo "
                                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "twitter", [], "any", false, false, false, 29), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-google-plus\"></i></div>
                                </div>
                                ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "google", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "google.com/username"]]);
            echo "
                                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "google", [], "any", false, false, false, 40), 'errors');
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
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "linkedin", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "linkedin.com/username"]]);
            echo "
                                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "linkedin", [], "any", false, false, false, 51), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-pinterest-p\"></i></div>
                                </div>
                                ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "pintrest", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "pintrest.com/username"]]);
            echo "
                                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "pintrest", [], "any", false, false, false, 62), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-instagram\"></i></div>
                                </div>
                                ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "instagram", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "instagram.com/username"]]);
            echo "
                                ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "instagram", [], "any", false, false, false, 73), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-behance\"></i></div>
                                </div>
                                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "behance", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "behance.com/username"]]);
            echo "
                                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "behance", [], "any", false, false, false, 84), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-dribbble\"></i></div>
                                </div>
                                ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "dribbble", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dribbble.com/username"]]);
            echo "
                                ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "dribbble", [], "any", false, false, false, 95), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-github\"></i></div>
                                </div>
                                ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "github", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "github.com/username"]]);
            echo "
                                ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "github", [], "any", false, false, false, 106), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"buttons\">
                                <button type=\"submit\" class=\"primary-bg\">Save Update</button>
                                <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>
                    </div>
                ";
            // line 118
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
            echo "
                ";
        }
        // line 120
        echo "            </div>
        </div>
    </div>
</div>
<script>
    \$(document).on(\"submit\",\"#editSocialMediaForm\",function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        \$form = \$(\"#editSocialMediaForm\");
        \$.ajax({
            url: \$form.attr(\"action\"),
            type: \"POST\",
            data: \$form.serialize(),
            success: function (data) {
                if(data ===\"success\"){
                    window.location.reload();
                }else{
                    \$(\"#modal-social\").html(data);
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
        return "social_media/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 120,  221 => 118,  206 => 106,  202 => 105,  189 => 95,  185 => 94,  172 => 84,  168 => 83,  155 => 73,  151 => 72,  138 => 62,  134 => 61,  121 => 51,  117 => 50,  104 => 40,  100 => 39,  87 => 29,  83 => 28,  70 => 18,  66 => 17,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-body\">
            <div class=\"title\">
                <h4><i data-feather=\"git-branch\"></i>Social Networks</h4>
            </div>
            <div class=\"content\">
                {% if app.user.socialMedia%}
                {{form_start(form,{'attr':{'id':'editSocialMediaForm'},'action':path('social_media_edit',{'id':app.user.socialmedia.id})})}}
                    <div class=\"form-group row\">
                        <label class=\"col-sm-3 col-form-label\">Social Links</label>
                        <div class=\"col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-facebook-f\"></i></div>
                                </div>
                                {{ form_widget(form.facebook,{'attr':{'class':'form-control','placeholder':'facebook.com/username'}}) }}
                                {{ form_errors(form.facebook) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-twitter\"></i></div>
                                </div>
                                {{ form_widget(form.twitter,{'attr':{'class':'form-control','placeholder':'twitter.com/username'}}) }}
                                {{ form_errors(form.twitter) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-google-plus\"></i></div>
                                </div>
                                {{ form_widget(form.google,{'attr':{'class':'form-control','placeholder':'google.com/username'}}) }}
                                {{ form_errors(form.google) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-linkedin-in\"></i></div>
                                </div>
                                {{ form_widget(form.linkedin,{'attr':{'class':'form-control','placeholder':'linkedin.com/username'}}) }}
                                {{ form_errors(form.linkedin) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-pinterest-p\"></i></div>
                                </div>
                                {{ form_widget(form.pintrest,{'attr':{'class':'form-control','placeholder':'pintrest.com/username'}}) }}
                                {{ form_errors(form.pintrest) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-instagram\"></i></div>
                                </div>
                                {{ form_widget(form.instagram,{'attr':{'class':'form-control','placeholder':'instagram.com/username'}}) }}
                                {{ form_errors(form.instagram) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-behance\"></i></div>
                                </div>
                                {{ form_widget(form.behance,{'attr':{'class':'form-control','placeholder':'behance.com/username'}}) }}
                                {{ form_errors(form.behance) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-dribbble\"></i></div>
                                </div>
                                {{ form_widget(form.dribbble,{'attr':{'class':'form-control','placeholder':'dribbble.com/username'}}) }}
                                {{ form_errors(form.dribbble) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\"><i class=\"fab fa-github\"></i></div>
                                </div>
                                {{ form_widget(form.github,{'attr':{'class':'form-control','placeholder':'github.com/username'}}) }}
                                {{ form_errors(form.github) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"offset-sm-3 col-sm-9\">
                            <div class=\"buttons\">
                                <button type=\"submit\" class=\"primary-bg\">Save Update</button>
                                <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>
                    </div>
                {{form_end(form)}}
                {% endif %}
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).on(\"submit\",\"#editSocialMediaForm\",function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        \$form = \$(\"#editSocialMediaForm\");
        \$.ajax({
            url: \$form.attr(\"action\"),
            type: \"POST\",
            data: \$form.serialize(),
            success: function (data) {
                if(data ===\"success\"){
                    window.location.reload();
                }else{
                    \$(\"#modal-social\").html(data);
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
", "social_media/edit.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\social_media\\edit.html.twig");
    }
}
