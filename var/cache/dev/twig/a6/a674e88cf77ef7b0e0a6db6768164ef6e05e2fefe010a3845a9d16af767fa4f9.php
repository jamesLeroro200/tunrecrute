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

/* security/login.html.twig */
class __TwigTemplate_e10a4c48492487e82e2c452069535ec572d8f50d54724605afcb9e4047ee26a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "

<style>
    body{
        background-color:#25373D !important;

    }
    #wrapy{
        position:fixed;
        z-index:-1;
        top:0;
        left:0;
        background-color:black

    }
    #wrapy img.bgfade{
        position:absolute;
        top:0;
        display:none;
        width:100%;
        height:100%;
        z-index:-1
    }
    .box {

        height: 100%;

    }
    .loginBtn:focus {
        outline: none;
    }
    .loginBtn:active {
        box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
    }

    .loginBtn a:hover {
        color : white;
    }
    .loginBtn a {
        color : white;
    }
</style>

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Job search Website\">
    <meta name=\"keywords\" content=\"\">

    <title>JobFound</title>

    <!-- Styles -->
    <link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/thejobs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/css/noty.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/jquery1_8_2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/noty.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jobs/js/myscript.js"), "html", null, true);
        echo "\"></script>

    <!--JQUERT -->

    <script>
        //change image every 3 seconds
        \$(window).load(function(){

            \$('img.bgfade').hide();
            var dg_H = \$(window).height();
            var dg_W = \$(window).width();
            \$('#wrapy').css({'height':\"1200px\",'width':\"1900px\"});

            function anim() {
                \$(\"#wrapy img.bgfade\").first().appendTo('#wrapy').fadeOut(1500);
                \$(\"#wrapy img\").first().fadeIn(1500);
                setTimeout(anim, 3000);
            }
            anim();
        })
        \$(window).resize(function(){window.location.href=window.location.href})
    </script>

    <!--<link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'> -->


";
        // line 88
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.ico"), "html", null, true);
        echo "\">
</head>

<body class=\"nav-on-header smart-nav\">


<div id=\"wrapy\">
    <img class=\"bgfade\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1.jpg"), "html", null, true);
        echo "\">
    <img class=\"bgfade\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/wallhaven-eovv3r.jpg"), "html", null, true);
        echo "\">
    <img class=\"bgfade\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/wallhaven-q66kx5.jpg"), "html", null, true);
        echo "\">

</div>
<!-- Navigation bar -->
<nav class=\"navbar\">
    <div class=\"container\">

        <!-- Logo -->
        <div class=\"pull-left\">
            <a class=\"navbar-toggle\" href=\"#\" data-toggle=\"offcanvas\"></a>

            <div class=\"logo-wrapper\">
                <a class=\"logo\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                <a class=\"logo-alt\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/speaker.png"), "html", null, true);
        echo "\" alt=\"logo-alt\"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class=\"pull-right user-login\">
            <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Choose_Role");
        echo "\">Register Now</a>
        </div>
        <!-- END User account -->

    </div>
</nav>
<!-- END Navigation bar -->

<!-- Site headerrrrrrrrrrrrrrrrrrrr -->
<header class=\"site-header size-lg text-center box\" >
    <div class=\"container\">
        <div class=\"col-xs-12\">

            <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tunrecrute.png"), "html", null, true);
        echo "\" class=\"image-responsive\" width=\"408px\">


<form method=\"post\" id=\"myForm\" class=\"header-job-search\" autocomplete=\"off\">
    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 136
            echo "        <script>
    new Noty({
            theme: 'metroui',
            timeout: 1500,
            killer: true,
            type: 'error',
            layout: 'topCenter',
            text: 'Login/Password incorrect'
        }).show();
</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 149
            echo "        <script>
            new Noty({
                theme: 'metroui',
                timeout: 1500,
                killer: true,
                type: 'warning',
                layout: 'topCenter',
                text: 'Your Account is Disabled'
            }).show();
        </script>
        ";
            // line 160
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "

    ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163)) {
            // line 164
            echo "        <div class=\"mb-3\">
            <script>
                new Noty({
                    theme: 'metroui',
                    timeout: 1500,
                    killer: true,
                    type: 'success',
                    layout: 'topCenter',
                    text: 'Login Successful'
                }).show();
            </script>
           You are logged in as ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "username", [], "any", false, false, false, 175), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 178
        echo "
";
        // line 181
        echo "    <div class=\"input-keyword\">
    <input type=\"email\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 182, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Adresse email\" name=\"email\" class=\"form-control\" required autofocus>
    </div>
";
        // line 185
        echo "    <div class=\"input-location\">
    <input type=\"password\" name=\"password\" placeholder=\"mot de passe\" id=\"inputPassword\" class=\"form-control\" required>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >


    ";
        // line 203
        echo "    <div class=\"btn-search\">

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
    </div>
</form>


            <!--result login-->
            <div id=\"ack\"></div>

        </div>

    </div>
</header>
<!-- END Site header -->

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 203,  314 => 189,  308 => 185,  303 => 182,  300 => 181,  297 => 178,  289 => 175,  276 => 164,  274 => 163,  270 => 161,  264 => 160,  252 => 149,  248 => 148,  245 => 147,  229 => 136,  225 => 135,  218 => 131,  202 => 118,  189 => 110,  183 => 109,  168 => 97,  164 => 96,  160 => 95,  149 => 88,  120 => 61,  116 => 60,  112 => 59,  108 => 58,  104 => 57,  100 => 56,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<style>
    body{
        background-color:#25373D !important;

    }
    #wrapy{
        position:fixed;
        z-index:-1;
        top:0;
        left:0;
        background-color:black

    }
    #wrapy img.bgfade{
        position:absolute;
        top:0;
        display:none;
        width:100%;
        height:100%;
        z-index:-1
    }
    .box {

        height: 100%;

    }
    .loginBtn:focus {
        outline: none;
    }
    .loginBtn:active {
        box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
    }

    .loginBtn a:hover {
        color : white;
    }
    .loginBtn a {
        color : white;
    }
</style>

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Job search Website\">
    <meta name=\"keywords\" content=\"\">

    <title>JobFound</title>

    <!-- Styles -->
    <link href=\"{{ asset('assets/jobs/css/app.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/jobs/css/thejobs.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/jobs/css/noty.css') }}\" rel=\"stylesheet\">
    <script src=\"{{ asset('assets/jobs/js/jquery1_8_2.js') }}\"></script>
    <script src=\"{{asset('assets/jobs/js/noty.js')}}\"></script>
    <script src=\"{{asset('assets/jobs/js/myscript.js')}}\"></script>

    <!--JQUERT -->

    <script>
        //change image every 3 seconds
        \$(window).load(function(){

            \$('img.bgfade').hide();
            var dg_H = \$(window).height();
            var dg_W = \$(window).width();
            \$('#wrapy').css({'height':\"1200px\",'width':\"1900px\"});

            function anim() {
                \$(\"#wrapy img.bgfade\").first().appendTo('#wrapy').fadeOut(1500);
                \$(\"#wrapy img\").first().fadeIn(1500);
                setTimeout(anim, 3000);
            }
            anim();
        })
        \$(window).resize(function(){window.location.href=window.location.href})
    </script>

    <!--<link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'> -->


{#    Favicons#}
    <link rel=\"icon\" href=\"{{ asset(\"assets/img/speaker.ico\") }}\">
</head>

<body class=\"nav-on-header smart-nav\">


<div id=\"wrapy\">
    <img class=\"bgfade\" src=\"{{ asset('assets/img/1.jpg') }}\">
    <img class=\"bgfade\" src=\"{{ asset('assets/img/wallhaven-eovv3r.jpg') }}\">
    <img class=\"bgfade\" src=\"{{ asset('assets/img/wallhaven-q66kx5.jpg') }}\">

</div>
<!-- Navigation bar -->
<nav class=\"navbar\">
    <div class=\"container\">

        <!-- Logo -->
        <div class=\"pull-left\">
            <a class=\"navbar-toggle\" href=\"#\" data-toggle=\"offcanvas\"></a>

            <div class=\"logo-wrapper\">
                <a class=\"logo\" href=\"{{ path('app_index') }}\"><img src=\"{{ asset('assets/img/speaker.png') }}\" alt=\"logo\"></a>
                <a class=\"logo-alt\" href=\"{{ path('app_index') }}\"><img src=\"{{ asset('assets/img/speaker.png') }}\" alt=\"logo-alt\"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class=\"pull-right user-login\">
            <a class=\"btn btn-sm btn-primary\" href=\"{{ path('Choose_Role') }}\">Register Now</a>
        </div>
        <!-- END User account -->

    </div>
</nav>
<!-- END Navigation bar -->

<!-- Site headerrrrrrrrrrrrrrrrrrrr -->
<header class=\"site-header size-lg text-center box\" >
    <div class=\"container\">
        <div class=\"col-xs-12\">

            <img src=\"{{asset('assets/img/tunrecrute.png')}}\" class=\"image-responsive\" width=\"408px\">


<form method=\"post\" id=\"myForm\" class=\"header-job-search\" autocomplete=\"off\">
    {% for message in app.flashes('error') %}
        <script>
    new Noty({
            theme: 'metroui',
            timeout: 1500,
            killer: true,
            type: 'error',
            layout: 'topCenter',
            text: 'Login/Password incorrect'
        }).show();
</script>
    {% endfor %}

    {% for message in app.flashes('warning') %}
        <script>
            new Noty({
                theme: 'metroui',
                timeout: 1500,
                killer: true,
                type: 'warning',
                layout: 'topCenter',
                text: 'Your Account is Disabled'
            }).show();
        </script>
        {#        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
    {% endfor %}


    {% if app.user %}
        <div class=\"mb-3\">
            <script>
                new Noty({
                    theme: 'metroui',
                    timeout: 1500,
                    killer: true,
                    type: 'success',
                    layout: 'topCenter',
                    text: 'Login Successful'
                }).show();
            </script>
           You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

{#    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>#}
{#    <label for=\"inputEmail\">Email</label>#}
    <div class=\"input-keyword\">
    <input type=\"email\" value=\"{{ last_username }}\" placeholder=\"Adresse email\" name=\"email\" class=\"form-control\" required autofocus>
    </div>
{#    <label for=\"inputPassword\">Password</label>#}
    <div class=\"input-location\">
    <input type=\"password\" name=\"password\" placeholder=\"mot de passe\" id=\"inputPassword\" class=\"form-control\" required>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >


    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
    <div class=\"btn-search\">

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
    </div>
</form>


            <!--result login-->
            <div id=\"ack\"></div>

        </div>

    </div>
</header>
<!-- END Site header -->

</body>
</html>
", "security/login.html.twig", "/Users/macbookpro/Documents/final/templates/security/login.html.twig");
    }
}
