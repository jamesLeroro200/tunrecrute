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

/* annonce/edit.html.twig */
class __TwigTemplate_75a302468d9cf6d98e48511077c43a6e2d7b673538db9b93a47c058fda6c753b extends Template
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
        return "basejob.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $this->parent = $this->loadTemplate("basejob.html.twig", "annonce/edit.html.twig", 1);
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

        echo "Edit Annonce";
        
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
    <header class=\"page-header\">
        <div class=\"container page-name\">
            <h1 class=\"text-center\">Update job</h1>
            <!--<p class=\"lead text-center\">Create a new vacancy for your company and put it online.</p>!-->
        </div>
        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-group col-xs-12 col-sm-6\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), 'widget', ["attr" => ["placeholder" => "Title"]]);
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "domaine", [], "any", false, false, false, 20), 'widget');
        echo "
                </div>
                <div class=\"form-group col-xs-12\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'widget', ["attr" => ["placeholder" => "Write a short description"]]);
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-briefcase\"></i></span>
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "contrat", [], "any", false, false, false, 28), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-certificate\"></i></span>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "diplome", [], "any", false, false, false, 34), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-flask\"></i></span>
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "experience", [], "any", false, false, false, 40), 'widget', ["attr" => ["placeholder" => "Experience, e.g. 4"]]);
        echo "
                        <span class=\"input-group-addon\">Years</span>
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "salaire", [], "any", false, false, false, 47), 'widget', ["attr" => ["placeholder" => "Salary"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></span>
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "adresseTravail", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => "Location, e.g. Ariana"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-clock-o\"></i></span>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "heuresTravail", [], "any", false, false, false, 59), 'widget', ["attr" => ["placeholder" => "Working hours, e.g. 40"]]);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"button-group\">
                <div class=\"action-buttons\">
                    <div class=\"upload-button\">
                        <button class=\"btn btn-block btn-primary\">";
        // line 66
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 66, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
            ";
        // line 71
        echo twig_include($this->env, $context, "annonce/_delete_form.html.twig");
        echo "

            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\">back to list</a>
        </div>

        </div>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 73,  191 => 71,  187 => 70,  180 => 66,  170 => 59,  161 => 53,  152 => 47,  142 => 40,  133 => 34,  124 => 28,  116 => 23,  110 => 20,  104 => 17,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basejob.html.twig' %}

{% block title %}Edit Annonce{% endblock %}

{% block body %}

    <header class=\"page-header\">
        <div class=\"container page-name\">
            <h1 class=\"text-center\">Update job</h1>
            <!--<p class=\"lead text-center\">Create a new vacancy for your company and put it online.</p>!-->
        </div>
        <div class=\"container\">

            <div class=\"row\">
                {{ form_start(form) }}
                <div class=\"form-group col-xs-12 col-sm-6\">
                    {{ form_widget(form.title,{'attr': {'placeholder' : 'Title'}}) }}
                </div>
                <div class=\"form-group col-xs-12 col-sm-6\">
                    {{ form_widget(form.domaine) }}
                </div>
                <div class=\"form-group col-xs-12\">
                    {{ form_widget(form.description,{'attr': {'placeholder' : 'Write a short description'}}) }}
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-briefcase\"></i></span>
                        {{ form_widget(form.contrat) }}
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-certificate\"></i></span>
                        {{ form_widget(form.diplome) }}
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-flask\"></i></span>
                        {{ form_widget(form.experience,{'attr': {'placeholder' : 'Experience, e.g. 4'}}) }}
                        <span class=\"input-group-addon\">Years</span>
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
                        {{ form_widget(form.salaire,{'attr': {'placeholder' : 'Salary'}}) }}
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></span>
                        {{ form_widget(form.adresseTravail,{'attr': {'placeholder' : 'Location, e.g. Ariana'}}) }}
                    </div>
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-clock-o\"></i></span>
                        {{ form_widget(form.heuresTravail,{'attr': {'placeholder' : 'Working hours, e.g. 40'}}) }}
                    </div>
                </div>
            </div>
            <div class=\"button-group\">
                <div class=\"action-buttons\">
                    <div class=\"upload-button\">
                        <button class=\"btn btn-block btn-primary\">{{ button_label|default('Update') }}</button>
                    </div>
                </div>
            </div>
            {{ form_end(form) }}
            {{ include('annonce/_delete_form.html.twig') }}

            <a href=\"{{ path('annonce_index') }}\">back to list</a>
        </div>

        </div>
    </header>
{% endblock %}
", "annonce/edit.html.twig", "/Users/macbookpro/Documents/final/templates/annonce/edit.html.twig");
    }
}
