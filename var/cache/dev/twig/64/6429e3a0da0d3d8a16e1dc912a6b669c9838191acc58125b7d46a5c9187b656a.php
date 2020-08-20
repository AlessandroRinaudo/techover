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

/* pages/home.html.twig */
class __TwigTemplate_5dbc141de782791531eca4bd20c1fbb4cc7f172c221bbdb378a37eb39692cf4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   <section id=\"section-1\">
       ";
        // line 6
        echo twig_include($this->env, $context, "pages/CommonTemplates/_filtreTemplate.html.twig");
        echo "
   </section>
   <!--Ce bout de code affiche dans la page d'accueil les catégories tendances et les formations les mieux notées dans un carrousel -->
   <section id=section-2 class=\"container\">
      <div class=\"sous-titre\">
         <h2>Les catégories tendances</h2>
      </div>
      ";
        // line 13
        echo twig_include($this->env, $context, "pages/CommonTemplates/_carousel.html.twig");
        echo "
   </section>


   <section id=section-3 class=\"container\">
      <a class=\"btn btn-primary\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie.route");
        echo "\">Voir toutes les catégories</a>
   </section>


   <section id=section-4 class=\"container\">
      <div class=\"sous-titre\">
         <h2>Les formations les mieux notées</h2>
      </div>
      ";
        // line 26
        echo twig_include($this->env, $context, "pages/CommonTemplates/_carousel.html.twig", ["nomCarousel" => "Carousel2", "nomVar" => (isset($context["formationsMieuxNotees"]) || array_key_exists("formationsMieuxNotees", $context) ? $context["formationsMieuxNotees"] : (function () { throw new RuntimeError('Variable "formationsMieuxNotees" does not exist.', 26, $this->source); })())]);
        echo "
   </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  90 => 18,  82 => 13,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

   <section id=\"section-1\">
       {{ include('pages/CommonTemplates/_filtreTemplate.html.twig') }}
   </section>
   <!--Ce bout de code affiche dans la page d'accueil les catégories tendances et les formations les mieux notées dans un carrousel -->
   <section id=section-2 class=\"container\">
      <div class=\"sous-titre\">
         <h2>Les catégories tendances</h2>
      </div>
      {{ include ('pages/CommonTemplates/_carousel.html.twig') }}
   </section>


   <section id=section-3 class=\"container\">
      <a class=\"btn btn-primary\" href=\"{{ path('categorie.route') }}\">Voir toutes les catégories</a>
   </section>


   <section id=section-4 class=\"container\">
      <div class=\"sous-titre\">
         <h2>Les formations les mieux notées</h2>
      </div>
      {{ include ('pages/CommonTemplates/_carousel.html.twig',{nomCarousel :'Carousel2',nomVar:formationsMieuxNotees}) }}
   </section>
{% endblock %}", "pages/home.html.twig", "/Users/alessandro/Documents/studio/s6/projet de prog/jidu/templates/pages/home.html.twig");
    }
}
