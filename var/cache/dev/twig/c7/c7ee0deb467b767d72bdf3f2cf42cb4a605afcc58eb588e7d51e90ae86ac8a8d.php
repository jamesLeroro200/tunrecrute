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

/* annonce/index.html.twig */
class __TwigTemplate_4327798977a4f2881b8ae0d8bcb334c3b0e89f4f3778a15586ab28c115c50f34 extends Template
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
        return "baseAnnonce.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAnnonce.html.twig", "annonce/index.html.twig", 1);
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

        echo "Annonce index";
        
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
        echo "<!-- Page header -->
<header class=\"page-header bg-img\" style=\"background-image: url(";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/wallhaven-eovv3r.jpg"), "html", null, true);
        echo ");\">


    <!--result login-->
    <div class=\"container page-name\">
        <h1 class=\"text-center\">Browse jobs</h1>
        <p class=\"lead text-center\">Use following search box to find jobs that fit you better</p>
    </div>

    <div class=\"container\">


        <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_annonce");
        echo "\" method=\"post\">

            <div class=\"row\">

                <div class=\"form-group col-xs-12 col-sm-4\">
                    <input type=\"text\" name=\"titre\" class=\"form-control\" placeholder=\"Titre\">
                </div>
                <div class=\"form-group col-xs-12 col-sm-4\">
                    <input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"Location\">
                </div>
                <div class=\"form-group col-xs-12 col-sm-4\">
                    <select name=\"domaine\" class=\"form-control selectpicker\">
                        <option value=\"\">Any</option>
                        <option>Banking & Finance</option>
                        <option>Education</option>
                        <option>Consulting</option>
                        <option>Marketing & Advertising</option>
                        <option>Technology</option>
                    </select>
                </div>

                <div class=\"form-group col-xs-12 col-sm-4\">
                    <h6>Contract</h6>
                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Any\" value=\"\" checked>
                        <label for=\"Any\">Any</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"CDI\" value=\"CDI\">
                        <label for=\"CDI\">CDI</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"CDD\" value=\"CDD\">
                        <label for=\"CDD\">CDD</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Full-Time\" value=\"Full-Time\">
                        <label for=\"Full-Time\">Full-Time</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Independent/Freelance\" value=\"Independent/Freelance\">
                        <label for=\"Independent/Freelance\">Independent/Freelance</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Internship\" value=\"Internship\">
                        <label for=\"Internship\">Internship</label>
                    </div>
                </div>


                <div class=\"form-group col-xs-12 col-sm-4\">
                    <h6>Diploma</h6>
                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"AnyD\" value=\"\" checked>
                        <label for=\"AnyD\">Any</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"No Diploma\" value=\"No Diploma\">
                        <label for=\"No Diploma\">No Diploma</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"Bachelor\" value=\"Bachelor\">
                        <label for=\"Bachelor\">Bachelor</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"Ph.D.\" value=\"Ph.D.\">
                        <label for=\"Ph.D.\">Ph.D.</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"Master\" value=\"Master\">
                        <label for=\"Master\">Master</label>
                    </div>
                </div>



                <div class=\"form-group col-xs-12 col-sm-4\">
                    <h6>Experience</h6>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"AnyE\" value=\"\" checked>
                        <label for=\"AnyE\">Any</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"none\" value=\"None\">
                        <label for=\"none\">No Experience</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"1-2\" value=\"1-2\">
                        <label for=\"1-2\">1-2</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"3-4\" value=\"3-4\">
                        <label for=\"3-4\">3-4</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"5-6\" value=\"5-6\">
                        <label for=\"5-6\">5-6</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"7-8\" value=\"7-8\">
                        <label for=\"7-8\">7-8</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"9+\" value=\"9+\">
                        <label for=\"9+\">9+</label>
                    </div>
                </div>

            </div>

            <div class=\"button-group\">
                <div class=\"action-buttons\">
                    <button class=\"btn btn-primary\" name=\"submit_search\">Apply filter</button>
                </div>
            </div>


        </form>

    </div>

</header>

<main>
    <section class=\"no-padding-top bg-alt\">
        <div class=\"container\">
            <div class=\"row\">
";
        // line 163
        if ((((isset($context["searched"]) || array_key_exists("searched", $context)) && (0 === twig_compare((isset($context["searched"]) || array_key_exists("searched", $context) ? $context["searched"] : (function () { throw new RuntimeError('Variable "searched" does not exist.', 163, $this->source); })()), true))) && (0 === twig_compare((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 163, $this->source); })()), true)))) {
            // line 164
            echo "                <div class=\"col-xs-12\">
                    <br>
                    <h5>There are <strong>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 166, $this->source); })()), "count", [], "any", false, false, false, 166), "html", null, true);
            echo "</strong> results that match your search</h5>
                </div>
";
        }
        // line 169
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 169, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 170
            echo "                <div class=\"col-xs-12\">
                    <a class=\"item-block\" href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\">
                        <header>
                            <img src=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/User_Images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 173), "getPicture", [], "method", false, false, false, 173))), "html", null, true);
            echo "\">
                            <div class=\"hgroup\">
                                <h4>";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 175), "html", null, true);
            echo "</h4>
                                <h5>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 176), "getCompname", [], "method", false, false, false, 176), "html", null, true);
            echo "
                                    <span class=\"label label-success\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "contrat", [], "any", false, false, false, 177), "html", null, true);
            echo "</span>
                                    ";
            // line 178
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["annonce"], "domaine", [], "any", false, false, false, 178), "Banking & Finance"))) {
                // line 179
                echo "                                    <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "domaine", [], "any", false, false, false, 179), "html", null, true);
                echo "</span>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 180
$context["annonce"], "domaine", [], "any", false, false, false, 180), "Education"))) {
                // line 181
                echo "                                        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "domaine", [], "any", false, false, false, 181), "html", null, true);
                echo "</span>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 182
$context["annonce"], "domaine", [], "any", false, false, false, 182), "Consulting"))) {
                // line 183
                echo "                                        <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "domaine", [], "any", false, false, false, 183), "html", null, true);
                echo "</span>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 184
$context["annonce"], "domaine", [], "any", false, false, false, 184), "Marketing & Advertising"))) {
                // line 185
                echo "                                        <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "domaine", [], "any", false, false, false, 185), "html", null, true);
                echo "</span>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 186
$context["annonce"], "domaine", [], "any", false, false, false, 186), "Technology"))) {
                // line 187
                echo "                                        <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "domaine", [], "any", false, false, false, 187), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 189
            echo "                                        </h5>
                            </div>
                            <time datetime=\"";
            // line 191
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "posted", [], "any", false, false, false, 191)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "posted", [], "any", false, false, false, 191), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "\">";
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["annonce"], "posted", [], "any", false, false, false, 191));
            echo "</time>
                        </header>

                        <div class=\"item-body\">
                            <p>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 195), "html", null, true);
            echo "</p>
                        </div>

                        <footer>
                            <ul class=\"details cols-3\">
                            <li>
                                <i class=\"fa fa-map-marker\"></i>
                                <span>";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "adresseTravail", [], "any", false, false, false, 202), "html", null, true);
            echo "</span>
                            </li>

                            <li>
                                <i class=\"fa fa-money\"></i>
                                <span>";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "salaire", [], "any", false, false, false, 207), "html", null, true);
            echo " / year</span>
                            </li>

                            <li>
                                <i class=\"fa fa-certificate\"></i>
                                <span>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "experience", [], "any", false, false, false, 212), "html", null, true);
            echo " / years of experience</span>
                            </li>
                            </ul>
                        </footer>
                    </a>
                </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 219
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                <div class=\"navigation\" style=\"margin: 20px auto; width: 500px;\">
                    ";
        // line 224
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 224, $this->source); })()));
        echo "
                </div>
            </div>
        </div>
    </section>
</main>
    <div id=\"ack\"></div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 224,  391 => 223,  382 => 219,  370 => 212,  362 => 207,  354 => 202,  344 => 195,  335 => 191,  331 => 189,  325 => 187,  323 => 186,  318 => 185,  316 => 184,  311 => 183,  309 => 182,  304 => 181,  302 => 180,  297 => 179,  295 => 178,  291 => 177,  287 => 176,  283 => 175,  278 => 173,  273 => 171,  270 => 170,  264 => 169,  258 => 166,  254 => 164,  252 => 163,  106 => 19,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAnnonce.html.twig' %}

{% block title %}Annonce index{% endblock %}

{% block body %}
<!-- Page header -->
<header class=\"page-header bg-img\" style=\"background-image: url({{ asset('assets/img/wallhaven-eovv3r.jpg')}});\">


    <!--result login-->
    <div class=\"container page-name\">
        <h1 class=\"text-center\">Browse jobs</h1>
        <p class=\"lead text-center\">Use following search box to find jobs that fit you better</p>
    </div>

    <div class=\"container\">


        <form action=\"{{ path('search_annonce') }}\" method=\"post\">

            <div class=\"row\">

                <div class=\"form-group col-xs-12 col-sm-4\">
                    <input type=\"text\" name=\"titre\" class=\"form-control\" placeholder=\"Titre\">
                </div>
                <div class=\"form-group col-xs-12 col-sm-4\">
                    <input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"Location\">
                </div>
                <div class=\"form-group col-xs-12 col-sm-4\">
                    <select name=\"domaine\" class=\"form-control selectpicker\">
                        <option value=\"\">Any</option>
                        <option>Banking & Finance</option>
                        <option>Education</option>
                        <option>Consulting</option>
                        <option>Marketing & Advertising</option>
                        <option>Technology</option>
                    </select>
                </div>

                <div class=\"form-group col-xs-12 col-sm-4\">
                    <h6>Contract</h6>
                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Any\" value=\"\" checked>
                        <label for=\"Any\">Any</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"CDI\" value=\"CDI\">
                        <label for=\"CDI\">CDI</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"CDD\" value=\"CDD\">
                        <label for=\"CDD\">CDD</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Full-Time\" value=\"Full-Time\">
                        <label for=\"Full-Time\">Full-Time</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Independent/Freelance\" value=\"Independent/Freelance\">
                        <label for=\"Independent/Freelance\">Independent/Freelance</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"contract\" id=\"Internship\" value=\"Internship\">
                        <label for=\"Internship\">Internship</label>
                    </div>
                </div>


                <div class=\"form-group col-xs-12 col-sm-4\">
                    <h6>Diploma</h6>
                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"AnyD\" value=\"\" checked>
                        <label for=\"AnyD\">Any</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"No Diploma\" value=\"No Diploma\">
                        <label for=\"No Diploma\">No Diploma</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"Bachelor\" value=\"Bachelor\">
                        <label for=\"Bachelor\">Bachelor</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"Ph.D.\" value=\"Ph.D.\">
                        <label for=\"Ph.D.\">Ph.D.</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"diploma\" id=\"Master\" value=\"Master\">
                        <label for=\"Master\">Master</label>
                    </div>
                </div>



                <div class=\"form-group col-xs-12 col-sm-4\">
                    <h6>Experience</h6>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"AnyE\" value=\"\" checked>
                        <label for=\"AnyE\">Any</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"none\" value=\"None\">
                        <label for=\"none\">No Experience</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"1-2\" value=\"1-2\">
                        <label for=\"1-2\">1-2</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"3-4\" value=\"3-4\">
                        <label for=\"3-4\">3-4</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"5-6\" value=\"5-6\">
                        <label for=\"5-6\">5-6</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"7-8\" value=\"7-8\">
                        <label for=\"7-8\">7-8</label>
                    </div>

                    <div class=\"radio\">
                        <input type=\"radio\" name=\"experience\" id=\"9+\" value=\"9+\">
                        <label for=\"9+\">9+</label>
                    </div>
                </div>

            </div>

            <div class=\"button-group\">
                <div class=\"action-buttons\">
                    <button class=\"btn btn-primary\" name=\"submit_search\">Apply filter</button>
                </div>
            </div>


        </form>

    </div>

</header>

<main>
    <section class=\"no-padding-top bg-alt\">
        <div class=\"container\">
            <div class=\"row\">
{#    <h1>Annonce index</h1>#}
{% if searched is defined and searched == true and etat == true %}
                <div class=\"col-xs-12\">
                    <br>
                    <h5>There are <strong>{{ annonces.count }}</strong> results that match your search</h5>
                </div>
{% endif %}
        {% for annonce in annonces %}
                <div class=\"col-xs-12\">
                    <a class=\"item-block\" href=\"{{ path('annonce_show', {'id': annonce.id}) }}\">
                        <header>
                            <img src=\"{{ asset('Uploads/User_Images/' ~ annonce.user.getPicture()) }}\">
                            <div class=\"hgroup\">
                                <h4>{{ annonce.title }}</h4>
                                <h5>{{ annonce.user.getCompname() }}
                                    <span class=\"label label-success\">{{ annonce.contrat }}</span>
                                    {% if annonce.domaine == \"Banking & Finance\" %}
                                    <span class=\"label label-default\">{{ annonce.domaine }}</span>
                                    {% elseif annonce.domaine == \"Education\" %}
                                        <span class=\"label label-success\">{{ annonce.domaine }}</span>
                                    {% elseif annonce.domaine == \"Consulting\" %}
                                        <span class=\"label label-primary\">{{ annonce.domaine }}</span>
                                    {% elseif annonce.domaine == \"Marketing & Advertising\" %}
                                        <span class=\"label label-warning\">{{ annonce.domaine }}</span>
                                    {% elseif annonce.domaine == \"Technology\" %}
                                        <span class=\"label label-info\">{{ annonce.domaine }}</span>
                                    {% endif %}
                                        </h5>
                            </div>
                            <time datetime=\"{{ annonce.posted ? annonce.posted|date('Y-m-d H:i:s') : '' }}\">{{ time_diff(annonce.posted) }}</time>
                        </header>

                        <div class=\"item-body\">
                            <p>{{ annonce.description }}</p>
                        </div>

                        <footer>
                            <ul class=\"details cols-3\">
                            <li>
                                <i class=\"fa fa-map-marker\"></i>
                                <span>{{ annonce.adresseTravail }}</span>
                            </li>

                            <li>
                                <i class=\"fa fa-money\"></i>
                                <span>{{ annonce.salaire }} / year</span>
                            </li>

                            <li>
                                <i class=\"fa fa-certificate\"></i>
                                <span>{{ annonce.experience }} / years of experience</span>
                            </li>
                            </ul>
                        </footer>
                    </a>
                </div>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
                <div class=\"navigation\" style=\"margin: 20px auto; width: 500px;\">
                    {{  knp_pagination_render(annonces) }}
                </div>
            </div>
        </div>
    </section>
</main>
    <div id=\"ack\"></div>


{% endblock %}
", "annonce/index.html.twig", "/Users/macbookpro/Documents/final/templates/annonce/index.html.twig");
    }
}
