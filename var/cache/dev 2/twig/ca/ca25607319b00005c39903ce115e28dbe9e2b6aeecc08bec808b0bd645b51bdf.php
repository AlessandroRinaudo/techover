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

/* base.html.twig */
class __TwigTemplate_94c4cb543107b1c67ee481ffb8b654d138b7965f43e775a8b9d7f77322f7c401 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>TechOver</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Patua+One&display=swap\" rel=\"stylesheet\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>
<body>


<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\"data-toggle =\"collapse\" data-target=\"#monMenu\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <img class=\"navbar-brand imgLogo\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" alt=\"techover\">
        </div>
        <div class=\"collapse navbar-collapse\" id=\"monMenu\">
            <ul class=\"nav navbar-nav navbar-right barPrinci\">
                <li><a style=\"";
        // line 31
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 31, $this->source); })()), "homepage"))) {
            echo "color:#337ab7; ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ACCUEIL</a> </li>
                <li><a style=\"";
        // line 32
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 32, $this->source); })()), "formations"))) {
            echo "color:#337ab7; ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation.route");
        echo "\">FORMATIONS</a> </li>
                <li><a href=\"#\">NOS PROJET</a> </li>
                <li><a href=\"#\">QUI SOMMES NOUS</a> </li>
            </ul>

        </div>
    </div>
</nav>
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "<!-- Footer -->
<footer class=\"page-footer font-small blue pt-4 footer-ecrites\">

    <!-- Footer liens -->
    <div class=\"container-fluid text-center text-md-left\">

        <!-- Grid row -->
        <div class=\"row\">

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- liens -->
                <h5 class=\"text-uppercase\">liens</h5>

                <ul class=\"list-unstyled footer-ecrites\">
                    <li>
                        <a href=\"#!\">lien 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- liens -->
                <h5 class=\"text-uppercase footer-ecrites\">liens</h5>

                <ul class=\"list-unstyled footer-ecrites\">
                    <li>
                        <a href=\"#!\">lien 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <div class=\"footer-copyright text-center py-3 row footer-ecrites\"style=\"padding:30px 0;\">© 2020 Copyright: TechOver Jidu
    </div>


</footer>
<!-- Footer -->
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel = \"icon\" href =\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" type = \"image/x-icon\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 41,  215 => 40,  203 => 13,  198 => 12,  188 => 11,  108 => 42,  106 => 41,  104 => 40,  89 => 32,  81 => 31,  74 => 27,  60 => 15,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>TechOver</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Patua+One&display=swap\" rel=\"stylesheet\">
    {% block stylesheets %}
    <link rel = \"icon\" href =\"{{ asset('images/logo2.png') }}\" type = \"image/x-icon\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% endblock %}
</head>
<body>


<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\"data-toggle =\"collapse\" data-target=\"#monMenu\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <img class=\"navbar-brand imgLogo\" src=\"{{ asset('images/logo1.png') }}\" alt=\"techover\">
        </div>
        <div class=\"collapse navbar-collapse\" id=\"monMenu\">
            <ul class=\"nav navbar-nav navbar-right barPrinci\">
                <li><a style=\"{% if current_menu is defined and current_menu == 'homepage'%}color:#337ab7; {% endif %}\" href=\"{{ path('home') }}\">ACCUEIL</a> </li>
                <li><a style=\"{% if current_menu is defined and current_menu == 'formations'%}color:#337ab7; {% endif %}\" href=\"{{ path('formation.route') }}\">FORMATIONS</a> </li>
                <li><a href=\"#\">NOS PROJET</a> </li>
                <li><a href=\"#\">QUI SOMMES NOUS</a> </li>
            </ul>

        </div>
    </div>
</nav>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<!-- Footer -->
<footer class=\"page-footer font-small blue pt-4 footer-ecrites\">

    <!-- Footer liens -->
    <div class=\"container-fluid text-center text-md-left\">

        <!-- Grid row -->
        <div class=\"row\">

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- liens -->
                <h5 class=\"text-uppercase\">liens</h5>

                <ul class=\"list-unstyled footer-ecrites\">
                    <li>
                        <a href=\"#!\">lien 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class=\"col-md-3 mb-md-0 mb-3\">

                <!-- liens -->
                <h5 class=\"text-uppercase footer-ecrites\">liens</h5>

                <ul class=\"list-unstyled footer-ecrites\">
                    <li>
                        <a href=\"#!\">lien 1</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 2</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 3</a>
                    </li>
                    <li>
                        <a href=\"#!\">lien 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <div class=\"footer-copyright text-center py-3 row footer-ecrites\"style=\"padding:30px 0;\">© 2020 Copyright: TechOver Jidu
    </div>


</footer>
<!-- Footer -->
</body>
</html>", "base.html.twig", "/Users/alessandro/Desktop/version2/templates/base.html.twig");
    }
}
