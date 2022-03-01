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

/* education/_delete_form.html.twig */
class __TwigTemplate_d54a356a9e0daf41819bc31e027c6eba2cca6e9e155ac3479fa7cae814348e65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "education/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "education/_delete_form.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\" role=\"document\" style=\"max-width: 400px;height: 100vh\">
    <div class=\"modal-content\">
        <div class=\"modal-body\" style=\"padding: 30px\">
            <h4 style=\"font-size: 1.5rem;margin-bottom: 15px;text-transform: uppercase;\"><i data-feather=\"trash-2\">
                </i>Delete Item
            </h4>
            <p style=\"margin-bottom: 15px;\">Are you sure! You want to delete this item. This can't be undone!</p>
            <form method= \"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("education_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["education"]) || array_key_exists("education", $context) ? $context["education"] : (function () { throw new RuntimeError('Variable "education" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">
                <div class=\"buttons\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["education"]) || array_key_exists("education", $context) ? $context["education"] : (function () { throw new RuntimeError('Variable "education" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11))), "html", null, true);
        echo "\">
                    <button class=\"delete-button\" style=\"background: #ff3366;color: #ffffff;\">Delete</button>
                    <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "education/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-dialog\" role=\"document\" style=\"max-width: 400px;height: 100vh\">
    <div class=\"modal-content\">
        <div class=\"modal-body\" style=\"padding: 30px\">
            <h4 style=\"font-size: 1.5rem;margin-bottom: 15px;text-transform: uppercase;\"><i data-feather=\"trash-2\">
                </i>Delete Item
            </h4>
            <p style=\"margin-bottom: 15px;\">Are you sure! You want to delete this item. This can't be undone!</p>
            <form method= \"post\" action=\"{{ path('education_delete', {'id': education.id}) }}\">
                <div class=\"buttons\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ education.id) }}\">
                    <button class=\"delete-button\" style=\"background: #ff3366;color: #ffffff;\">Delete</button>
                    <button class=\"\" data-dismiss=\"modal\">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>", "education/_delete_form.html.twig", "C:\\Users\\Win10-Space\\Desktop\\tunrecrute\\final\\templates\\education\\_delete_form.html.twig");
    }
}
