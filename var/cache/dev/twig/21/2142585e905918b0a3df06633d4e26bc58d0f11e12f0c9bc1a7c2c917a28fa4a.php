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

/* annonce/_form.html.twig */
class __TwigTemplate_2ef38f8b950fc90024f361c4bd6999d33644a05f64b1efa7c78715e6d6beec17 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group col-xs-12 col-sm-6\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'widget', ["attr" => ["placeholder" => "Title"]]);
        echo "
    </div>
    <div class=\"form-group col-xs-12 col-sm-6\">
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "domaine", [], "any", false, false, false, 7), 'widget');
        echo "
    </div>
    <div class=\"form-group col-xs-12\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), 'widget', ["attr" => ["placeholder" => "Write a short description"]]);
        echo "
    </div>
    <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
        <div class=\"input-group input-group-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-briefcase\"></i></span>
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "contrat", [], "any", false, false, false, 15), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
        <div class=\"input-group input-group-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-certificate\"></i></span>
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "diplome", [], "any", false, false, false, 21), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
        <div class=\"input-group input-group-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-flask\"></i></span>
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "experience", [], "any", false, false, false, 27), 'widget', ["attr" => ["placeholder" => "Experience, e.g. 4"]]);
        echo "
            <span class=\"input-group-addon\">Years</span>
        </div>
    </div>
    <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
        <div class=\"input-group input-group-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "salaire", [], "any", false, false, false, 34), 'widget', ["attr" => ["placeholder" => "Salary"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
        <div class=\"input-group input-group-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></span>
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "adresseTravail", [], "any", false, false, false, 40), 'widget', ["attr" => ["placeholder" => "Location, e.g. Ariana"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
        <div class=\"input-group input-group-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-clock-o\"></i></span>
    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "heuresTravail", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Working hours, e.g. 40"]]);
        echo "
        </div>
    </div>
</div>
<div class=\"button-group\">
    <div class=\"action-buttons\">
        <div class=\"upload-button\">
    <button class=\"btn btn-block btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 53, $this->source); })()), "Add")) : ("Add")), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>
";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "annonce/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  127 => 53,  117 => 46,  108 => 40,  99 => 34,  89 => 27,  80 => 21,  71 => 15,  63 => 10,  57 => 7,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
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
    <button class=\"btn btn-block btn-primary\">{{ button_label|default('Add') }}</button>
        </div>
    </div>
</div>
{{ form_end(form) }}
</div>
", "annonce/_form.html.twig", "/Users/macbookpro/Documents/final/templates/annonce/_form.html.twig");
    }
}
