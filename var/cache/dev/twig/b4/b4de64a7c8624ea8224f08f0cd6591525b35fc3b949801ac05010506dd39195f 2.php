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

/* pages/CommonTemplates/_carousel.html.twig */
class __TwigTemplate_3ead612fd938cbc7d0bdee22bb06a455372f7228be7dfacae57aa55b67daa5ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CommonTemplates/_carousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CommonTemplates/_carousel.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context))) ? (_twig_default_filter((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context) ? $context["nomCarousel"] : (function () { throw new RuntimeError('Variable "nomCarousel" does not exist.', 1, $this->source); })()), "monCarousel")) : ("monCarousel")), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\">

    <ol class=\"carousel-indicators\">
        <li data-target=\"#";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context))) ? (_twig_default_filter((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context) ? $context["nomCarousel"] : (function () { throw new RuntimeError('Variable "nomCarousel" does not exist.', 4, $this->source); })()), "monCarousel")) : ("monCarousel")), "html", null, true);
        echo "\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#";
        // line 5
        echo twig_escape_filter($this->env, (((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context))) ? (_twig_default_filter((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context) ? $context["nomCarousel"] : (function () { throw new RuntimeError('Variable "nomCarousel" does not exist.', 5, $this->source); })()), "monCarousel")) : ("monCarousel")), "html", null, true);
        echo "\" data-slide-to=\"1\"></li>
    </ol>

    <div class=\"carousel-inner\" role=\"listbox\">

        <div class=\"item active\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 11, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 12
            echo "                <div class=\"col-md-4\">
                    ";
            // line 13
            echo twig_include($this->env, $context, "pages/CommonTemplates/_afficheFormations.html.twig");
            echo "
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

        </div>

        <div class=\"item \">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 21, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 22
            echo "                <div class=\"col-md-4\">
                    ";
            // line 23
            echo twig_include($this->env, $context, "pages/CommonTemplates/_afficheFormations.html.twig");
            echo "
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>



    </div>

    <a href=\"#";
        // line 32
        echo twig_escape_filter($this->env, (((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context))) ? (_twig_default_filter((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context) ? $context["nomCarousel"] : (function () { throw new RuntimeError('Variable "nomCarousel" does not exist.', 32, $this->source); })()), "monCarousel")) : ("monCarousel")), "html", null, true);
        echo "\" class=\"left carousel-control\" role=\"button\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> </a>
    <a href=\"#";
        // line 33
        echo twig_escape_filter($this->env, (((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context))) ? (_twig_default_filter((isset($context["nomCarousel"]) || array_key_exists("nomCarousel", $context) ? $context["nomCarousel"] : (function () { throw new RuntimeError('Variable "nomCarousel" does not exist.', 33, $this->source); })()), "monCarousel")) : ("monCarousel")), "html", null, true);
        echo "\" class=\"right carousel-control\" role=\"button\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span> </a>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/CommonTemplates/_carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 33,  152 => 32,  144 => 26,  127 => 23,  124 => 22,  107 => 21,  100 => 16,  83 => 13,  80 => 12,  63 => 11,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ nomCarousel |default('monCarousel') }}\" class=\"carousel slide\" data-ride=\"carousel\">

    <ol class=\"carousel-indicators\">
        <li data-target=\"#{{ nomCarousel |default('monCarousel') }}\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#{{ nomCarousel |default('monCarousel') }}\" data-slide-to=\"1\"></li>
    </ol>

    <div class=\"carousel-inner\" role=\"listbox\">

        <div class=\"item active\">
            {% for formation in formations %}
                <div class=\"col-md-4\">
                    {{ include ('pages/CommonTemplates/_afficheFormations.html.twig') }}
                </div>
            {% endfor %}


        </div>

        <div class=\"item \">
            {% for formation in formations %}
                <div class=\"col-md-4\">
                    {{ include ('pages/CommonTemplates/_afficheFormations.html.twig') }}
                </div>
            {% endfor %}
        </div>



    </div>

    <a href=\"#{{ nomCarousel |default('monCarousel') }}\" class=\"left carousel-control\" role=\"button\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> </a>
    <a href=\"#{{ nomCarousel |default('monCarousel') }}\" class=\"right carousel-control\" role=\"button\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span> </a>
</div>", "pages/CommonTemplates/_carousel.html.twig", "/Users/alessandro/Desktop/version2/templates/pages/CommonTemplates/_carousel.html.twig");
    }
}
