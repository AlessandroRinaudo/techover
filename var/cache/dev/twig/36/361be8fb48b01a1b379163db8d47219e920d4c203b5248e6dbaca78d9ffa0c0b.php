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

/* pages/CommonTemplates/_afficheFormations.html.twig */
class __TwigTemplate_60cde836522e9c1110204204d45f2917e2b3a79d657147905e566f3868a2b987 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CommonTemplates/_afficheFormations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CommonTemplates/_afficheFormations.html.twig"));

        // line 1
        echo "<!--Ce bout de code affiche une formation -->
<div class=\"thumbnail\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("" . twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, false, 3)) . "")), "html", null, true);
        echo "\" alt=\"image\">
    <div class=\"caption\">
        <h4 class=\"contenu\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h4>
        <p class=\"description contenu\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
        <center> ";
        // line 7
        echo $this->extensions['Brokoskokoli\StarRatingBundle\Extensions\StarRatingExtension']->rating(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 7, $this->source); })()), "note", [], "any", false, false, false, 7), 5);
        echo " </center>

        <a  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 9, $this->source); })()), "slug", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"  class=\"btn btn-order contenu\" role=\"button\"><span class=\"glyphicon glyphicon-new-window\"></span>voir page formation </a>
    </div>
</div>
<!--Fin du bout de code qui affiche la formation -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/CommonTemplates/_afficheFormations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Ce bout de code affiche une formation -->
<div class=\"thumbnail\">
    <img src=\"{{ asset(''~formation.image~'') }}\" alt=\"image\">
    <div class=\"caption\">
        <h4 class=\"contenu\">{{ formation.title }}</h4>
        <p class=\"description contenu\">{{ formation.description }}</p>
        <center> {{  formation.note|rating(5)  }} </center>

        <a  href=\"{{ path( 'formation.show',{id : formation.id ,slug : formation.slug}) }}\"  class=\"btn btn-order contenu\" role=\"button\"><span class=\"glyphicon glyphicon-new-window\"></span>voir page formation </a>
    </div>
</div>
<!--Fin du bout de code qui affiche la formation -->", "pages/CommonTemplates/_afficheFormations.html.twig", "/Users/alessandro/Documents/studio/s6/projet de prog/jidu/templates/pages/CommonTemplates/_afficheFormations.html.twig");
    }
}
