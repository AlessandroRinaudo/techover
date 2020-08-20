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

/* pages/show.html.twig */
class __TwigTemplate_1e761782ca15d7fa8a84f5171eae5156116eef43098fce005256267a00ca75a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 17
        echo "
    


    <div class=\"jumbotron\" style=\"margin-top: 90px\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-8\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("" . twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27)) . "")), "html", null, true);
        echo "\" class =\"center img-thumbnail\" alt=\"image\" style=\"width:80%;text-align: center\">
                </div>
                <div class=\"col-md-4\" style=\"margin-top: 40px\">
                    <div class=\"sous-titre\" style=\"width: 90%;margin-bottom: 30px\">
                        <h1 style=\"text-align: center;font-size: 25px;\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</h1>
                    </div>
                    <h2 style=\"text-align: center;font-size: 25px;\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 33, $this->source); })()), "note", [], "any", false, false, false, 33), "html", null, true);
        echo " étoiles</h2>
                    <div class=\"text-primary\" style=\"font-size: 4rem;font-weight: bold\"></div>
                    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 35, $this->source); })()), "url", [], "any", false, false, false, 35), "html", null, true);
        echo "\" style=\"margin-top: 50px ;width:65%\" target=\"_blank\" class=\"btn btn-primary\">Accéder à cette formation</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container mt-4\">

        <h2 style=\"text-align: left\">Description</h2>

        <p>
            ";
        // line 46
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true));
        echo "
        </p>
        <hr class=\"my-4\" style=\"border-top-color: #999999\" >
        <div class=\"row \" style=\"background-color: #ECECEC\">
            <div class=\"col-md-12\">
                <h2>Spécificités</h2>

                <table class=\"table table-striped\">
                    <tr>
                        <td>Catégorie</td>
                        <td>  <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 56, $this->source); })()), "categorie", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 56, $this->source); })()), "categorie", [], "any", false, false, false, 56), "slug", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 56, $this->source); })()), "categorie", [], "any", false, false, false, 56), "html", null, true);
        echo "</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Langue</td>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 61, $this->source); })()), "langue", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>Niveau</td>
                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 66, $this->source); })()), "levelType", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                    </tr>



                </table>






            </div>



        </div>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 66,  137 => 61,  127 => 56,  114 => 46,  100 => 35,  95 => 33,  90 => 31,  83 => 27,  71 => 17,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

{#        <div class=\"container\" style=\"margin-top: 120px\">#}
{#            <div class=\"sous-titre\" style=\"width: 60%;margin-bottom: 30px\">#}
{#                <h1 style=\"text-align: center;font-size: 50px;\">{{ formation.title }}</h1>#}
{#            </div>#}
{#            <img src=\"{{ asset(''~formation.image~'') }}\" class =\"center\" alt=\"image\" style=\"margin-top:50px;width:40%;text-align: center\">#}
{#            <div class=\"text-primary\" style=\"font-size:2rem\"> Langue :{{ formation.langue }}</div>#}
{#            <h3>{{ formation.note }} étoiles</h3>#}
{#            <h4>Niveau : {{ formation.level}}</h4>#}
{#            <a href=\"{{ path( 'categorie.show',{id : formation.categorie.id ,slug : formation.categorie.slug}) }}\">{{formation.categorie}}</a>#}
{#            <h2 style=\"text-align: left\">Description</h2>#}
{#            <p style=\"text-align: justify\">{{ formation.description }}</p>#}
{#            <a href=\"{{ formation.url }}\" style=\"margin-top: 50px ;width:50%\" target=\"_blank\" class=\"btn btn-primary\">Accéder à cette formation</a>#}
{#        </div>#}

    


    <div class=\"jumbotron\" style=\"margin-top: 90px\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-8\">
                    <img src=\"{{ asset(''~formation.image~'') }}\" class =\"center img-thumbnail\" alt=\"image\" style=\"width:80%;text-align: center\">
                </div>
                <div class=\"col-md-4\" style=\"margin-top: 40px\">
                    <div class=\"sous-titre\" style=\"width: 90%;margin-bottom: 30px\">
                        <h1 style=\"text-align: center;font-size: 25px;\">{{ formation.title }}</h1>
                    </div>
                    <h2 style=\"text-align: center;font-size: 25px;\">{{ formation.note }} étoiles</h2>
                    <div class=\"text-primary\" style=\"font-size: 4rem;font-weight: bold\"></div>
                    <a href=\"{{ formation.url }}\" style=\"margin-top: 50px ;width:65%\" target=\"_blank\" class=\"btn btn-primary\">Accéder à cette formation</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container mt-4\">

        <h2 style=\"text-align: left\">Description</h2>

        <p>
            {{ formation.description | nl2br }}
        </p>
        <hr class=\"my-4\" style=\"border-top-color: #999999\" >
        <div class=\"row \" style=\"background-color: #ECECEC\">
            <div class=\"col-md-12\">
                <h2>Spécificités</h2>

                <table class=\"table table-striped\">
                    <tr>
                        <td>Catégorie</td>
                        <td>  <a href=\"{{ path( 'categorie.show',{id : formation.categorie.id ,slug : formation.categorie.slug}) }}\">{{formation.categorie}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Langue</td>
                        <td>{{ formation.langue }}</td>
                    </tr>

                    <tr>
                        <td>Niveau</td>
                        <td>{{ formation.levelType }}</td>
                    </tr>



                </table>






            </div>



        </div>


    </div>

{% endblock %}", "pages/show.html.twig", "/Users/alessandro/Desktop/jidu/templates/pages/show.html.twig");
    }
}
