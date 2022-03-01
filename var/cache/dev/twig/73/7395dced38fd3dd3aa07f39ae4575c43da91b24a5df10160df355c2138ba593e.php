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

/* registration/ChooseRole.html.twig */
class __TwigTemplate_bc250084129517a32902bc8133e9019b7ceed3ee6f932d8c6a8d0046bf85798b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/ChooseRole.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/ChooseRole.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Inscription</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LoginTemplate/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LoginTemplate/logintemp/iofrm-style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LoginTemplate/logintemp/iofrm-theme5.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LoginTemplate/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LoginTemplate/css/koukicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.ico"), "html", null, true);
        echo "\">

    <style>
        /*Swal fix*/

        html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown),
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            height: 100% !important;
        }

        body {
            background-color: #1D59F2;
        }
    </style>

</head>

<body>

<div class=\"form-body\">

    <div class=\"row\">
        <div class=\"img-holder\">
            <div class=\"bg\"></div>
            <div class=\"info-holder\">

            </div>
        </div>
        <div class=\"form-holder\">
            <div class=\"form-content\">
                <div class=\"form-items\">
                    <h3 class=\"title\">Créer un Compte :</h3>
                    <p>Selectionner le type du compte</p>
                    <div class=\"row\">
                        <div class=\"col-12 mb-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body\">
                                    <h1><i class=\"kk kk-users\"></i></h1>
                                    <h5 class=\"card-title\">Candidat</h5>
                                    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-primary btn-block\">Inscription</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"card text-center\">
                                <div class=\"card-body\">
                                    <h1><i class=\"kk kk-camera-bag\"></i> </h1>
                                    <h5 class=\"card-title\">Employeur</h5>
                                    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_reg");
        echo "\" class=\"btn btn-success btn-block\">Inscription</a>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LoginTemplate/js/scriptLogin.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/ChooseRole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 75,  127 => 62,  114 => 52,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Inscription</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/LoginTemplate/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/LoginTemplate/logintemp/iofrm-style.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/LoginTemplate/logintemp/iofrm-theme5.css') }}\">
    <script src=\"{{ asset('assets/LoginTemplate/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/LoginTemplate/css/koukicons.min.css') }}\">
    <link rel=\"icon\" href=\"{{asset('assets/img/speaker.ico')}}\">

    <style>
        /*Swal fix*/

        html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown),
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            height: 100% !important;
        }

        body {
            background-color: #1D59F2;
        }
    </style>

</head>

<body>

<div class=\"form-body\">

    <div class=\"row\">
        <div class=\"img-holder\">
            <div class=\"bg\"></div>
            <div class=\"info-holder\">

            </div>
        </div>
        <div class=\"form-holder\">
            <div class=\"form-content\">
                <div class=\"form-items\">
                    <h3 class=\"title\">Créer un Compte :</h3>
                    <p>Selectionner le type du compte</p>
                    <div class=\"row\">
                        <div class=\"col-12 mb-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body\">
                                    <h1><i class=\"kk kk-users\"></i></h1>
                                    <h5 class=\"card-title\">Candidat</h5>
                                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary btn-block\">Inscription</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"card text-center\">
                                <div class=\"card-body\">
                                    <h1><i class=\"kk kk-camera-bag\"></i> </h1>
                                    <h5 class=\"card-title\">Employeur</h5>
                                    <a href=\"{{ path('employer_reg') }}\" class=\"btn btn-success btn-block\">Inscription</a>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"{{ asset('assets/LoginTemplate/js/scriptLogin.js') }}\"></script>
</body>

</html>", "registration/ChooseRole.html.twig", "/Users/macbookpro/Documents/final/templates/registration/ChooseRole.html.twig");
    }
}
