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
class __TwigTemplate_06896662c60544db5053d6ffe9af692a11a7da0e6258f1ffb0626897d836c6d9 extends \Twig\Template
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
    <script src=\"https://unpkg.com/gremlins.js\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Patua+One&display=swap\" rel=\"stylesheet\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>
<body>



";
        // line 49
        echo "

<nav class=\"navbar navbar-inverse navbar-fixed-top\" style=\"margin-bottom: 0px;bottom: auto;\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\"data-toggle =\"collapse\" data-target=\"#monMenu\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
           <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img class=\"navbar-brand imgLogo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" alt=\"techover\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"monMenu\">
            <ul class=\"nav navbar-nav navbar-right barPrinci\">
                <li><a style=\"";
        // line 63
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 63, $this->source); })()) == "homepage"))) {
            echo "color:#337ab7; ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a> </li>
                <li><a style=\"";
        // line 64
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 64, $this->source); })()) == "categories"))) {
            echo "color:#337ab7; ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie.route");
        echo "\">Categories</a> </li>
                <li><a style=\"";
        // line 65
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 65, $this->source); })()) == "formations"))) {
            echo "color:#337ab7; ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation.route");
        echo "\">Formations</a> </li>
                <li><a style=\"";
        // line 66
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 66, $this->source); })()) == "informations"))) {
            echo "color:#337ab7; ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("informations");
        echo "\">Qui sommes nous</a> </li>
                <li class=\"custom-control custom-switch\" style=\"margin:15px;display: flex !important;\">
                    <label class=\"switch\">
                        <input type=\"checkbox\" id=\"darkSwitch\">
                        <span class=\"slider round\"></span>
                    </label>
                </li>

            </ul>

        </div>
    </div>
</nav>
";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "




<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/dark-mode-switch.min.js"), "html", null, true);
        echo "\"></script>


<!-- Footer -->
<footer class=\"page-footer font-small blue pt-4 footer-ecrites\">

    <!-- Footer liens -->
    <div class=\"container-fluid text-center text-md-left\">

        <!-- Grid row -->
        <div class=\"row\" style=\"background-color:#292d2d\">

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <div class=\"container\">
            <!-- Grid column -->
            <div class=\"col-md-6 mb-4\">
                <!-- liens -->
                <h5 class=\"text-uppercase\" style=\"font-size: 25px\">Contact</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"http://tiny.cc/abouttechover\" target=\"_blank\">45 rue des Saints-Pères 75006 Paris
                        </a>
                    </li>
                    <li>
                        <a href=\"mailto:techover@techOver.com\">techOver@techOver.com</a>
                    </li>
                    <li class=\"liens-bloques\">
                        +1 23 45 67 89
                    </li>
                    <li class=\"liens-bloques\">
                        +6 23 45 67 89
                    </li>
                </ul>
            </div>

            <div class=\"container\">
            <!-- Grid column -->
            <div class=\"col-md-6 mb-4\">
                <!-- Liens -->
                <h5 class=\"text-uppercase\" style=\"font-size: 25px\">Liens</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"https://www.udemy.com/?utm_source=adwords-brand&utm_medium=udemyads&utm_campaign=NEW-AW-PROS-Branded-Search-FR-FRA_._ci__._sl_FRA_._vi__._sd_All_._la_FR_._&tabei=7&utm_term=_._ag_52142199346_._ad_254041601034_._de_c_._dm__._pl__._ti_kwd-310556426868_._li_9056527_._pd__._&gclid=Cj0KCQjwmpb0BRCBARIsAG7y4zbWagwMcse-ia0YxrdVH4LAxLN28MO_pZ0LVS_OaBcVsb3Nhs_28rsaAnpSEALw_wcB\" target=\"_blank\">Udemy
                        </a>
                    </li>

                    <li>
                        <a href=\"https://www.coursera.org/\" target=\"_blank\">Coursera</a>
                    </li>

                    <li class=\"liens-bloques\">
                        <a href=\"https://www.jidu.ai/\" target=\"_blank\">Start-up Jidu</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
    <!-- Footer Links -->

    </div>
    <div class=\"footer-copyright text-center py-3 row footer-ecrites\" style=\"padding:30px 0;margin-right: 0px;margin-left: 0px;\">© 2020 Copyright: TechOver Jidu
    </div>


</footer>
<!-- Footer -->
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel = \"icon\" href =\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" type = \"image/x-icon\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dark-mode.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
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

    // line 80
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
        return array (  282 => 80,  264 => 79,  252 => 20,  247 => 18,  242 => 16,  237 => 14,  232 => 13,  222 => 12,  144 => 86,  137 => 81,  135 => 80,  133 => 79,  113 => 66,  105 => 65,  97 => 64,  89 => 63,  80 => 59,  68 => 49,  61 => 22,  59 => 12,  46 => 1,);
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
    <script src=\"https://unpkg.com/gremlins.js\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Patua+One&display=swap\" rel=\"stylesheet\">
    {% block stylesheets %}
    <link rel = \"icon\" href =\"{{ asset('images/logo2.png') }}\" type = \"image/x-icon\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>

    <link rel=\"stylesheet\" href=\"{{ asset('css/dark-mode.css') }}\">
    {% endblock %}
</head>
<body>



{#

Script pour tester la robustesse du site en exécutant une multitude d’interactions sur l’interface aléatoirement.
<script>
     gremlins.createHorde().unleash();
</script>

Version du même script en Bookmarklet, avec quelques options détaillées.

<a id=\"bookmarklet\" title=\"gremlins.js\" href=\"
    javascript: (function() {
        function callback() {
         gremlins.createHorde({
             species: [gremlins.species.clicker(), gremlins.species.toucher(), gremlins.species.formFiller(),gremlins.species.scroller(),gremlins.species.typer()],
             mogwais: [gremlins.mogwais.alert(),gremlins.mogwais.fps(),gremlins.mogwais.gizmo()],
             strategies: [gremlins.strategies.distribution()] }).unleash(); }
          var s = document.createElement(&quot;script&quot;);
         s.src = &quot;https://unpkg.com/gremlins.js&quot;; if (s.addEventListener) { s.addEventListener(&quot;load&quot;, callback, false); }
         else if (s.readyState) { s.onreadystatechange = callback; } document.body.appendChild(s); })()\">gremlins.js
</a>

#}


<nav class=\"navbar navbar-inverse navbar-fixed-top\" style=\"margin-bottom: 0px;bottom: auto;\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\"data-toggle =\"collapse\" data-target=\"#monMenu\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
           <a href=\"{{ path('home') }}\"><img class=\"navbar-brand imgLogo\" src=\"{{ asset('images/logo1.png') }}\" alt=\"techover\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"monMenu\">
            <ul class=\"nav navbar-nav navbar-right barPrinci\">
                <li><a style=\"{% if current_menu is defined and current_menu == 'homepage'%}color:#337ab7; {% endif %}\" href=\"{{ path('home') }}\">Accueil</a> </li>
                <li><a style=\"{% if current_menu is defined and current_menu == 'categories'%}color:#337ab7; {% endif %}\" href=\"{{ path('categorie.route') }}\">Categories</a> </li>
                <li><a style=\"{% if current_menu is defined and current_menu == 'formations'%}color:#337ab7; {% endif %}\" href=\"{{ path('formation.route') }}\">Formations</a> </li>
                <li><a style=\"{% if current_menu is defined and current_menu == 'informations'%}color:#337ab7; {% endif %}\" href=\"{{ path('informations') }}\">Qui sommes nous</a> </li>
                <li class=\"custom-control custom-switch\" style=\"margin:15px;display: flex !important;\">
                    <label class=\"switch\">
                        <input type=\"checkbox\" id=\"darkSwitch\">
                        <span class=\"slider round\"></span>
                    </label>
                </li>

            </ul>

        </div>
    </div>
</nav>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}





<script src=\"{{ asset('javascript/dark-mode-switch.min.js') }}\"></script>


<!-- Footer -->
<footer class=\"page-footer font-small blue pt-4 footer-ecrites\">

    <!-- Footer liens -->
    <div class=\"container-fluid text-center text-md-left\">

        <!-- Grid row -->
        <div class=\"row\" style=\"background-color:#292d2d\">

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <div class=\"container\">
            <!-- Grid column -->
            <div class=\"col-md-6 mb-4\">
                <!-- liens -->
                <h5 class=\"text-uppercase\" style=\"font-size: 25px\">Contact</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"http://tiny.cc/abouttechover\" target=\"_blank\">45 rue des Saints-Pères 75006 Paris
                        </a>
                    </li>
                    <li>
                        <a href=\"mailto:techover@techOver.com\">techOver@techOver.com</a>
                    </li>
                    <li class=\"liens-bloques\">
                        +1 23 45 67 89
                    </li>
                    <li class=\"liens-bloques\">
                        +6 23 45 67 89
                    </li>
                </ul>
            </div>

            <div class=\"container\">
            <!-- Grid column -->
            <div class=\"col-md-6 mb-4\">
                <!-- Liens -->
                <h5 class=\"text-uppercase\" style=\"font-size: 25px\">Liens</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <a href=\"https://www.udemy.com/?utm_source=adwords-brand&utm_medium=udemyads&utm_campaign=NEW-AW-PROS-Branded-Search-FR-FRA_._ci__._sl_FRA_._vi__._sd_All_._la_FR_._&tabei=7&utm_term=_._ag_52142199346_._ad_254041601034_._de_c_._dm__._pl__._ti_kwd-310556426868_._li_9056527_._pd__._&gclid=Cj0KCQjwmpb0BRCBARIsAG7y4zbWagwMcse-ia0YxrdVH4LAxLN28MO_pZ0LVS_OaBcVsb3Nhs_28rsaAnpSEALw_wcB\" target=\"_blank\">Udemy
                        </a>
                    </li>

                    <li>
                        <a href=\"https://www.coursera.org/\" target=\"_blank\">Coursera</a>
                    </li>

                    <li class=\"liens-bloques\">
                        <a href=\"https://www.jidu.ai/\" target=\"_blank\">Start-up Jidu</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
    <!-- Footer Links -->

    </div>
    <div class=\"footer-copyright text-center py-3 row footer-ecrites\" style=\"padding:30px 0;margin-right: 0px;margin-left: 0px;\">© 2020 Copyright: TechOver Jidu
    </div>


</footer>
<!-- Footer -->
</body>
</html>", "base.html.twig", "/Users/alessandro/Documents/studio/s6/projet de prog/jidu/templates/base.html.twig");
    }
}
