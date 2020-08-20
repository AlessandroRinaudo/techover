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

/* pages/CommonTemplates/_filtreTemplate.html.twig */
class __TwigTemplate_e8da317a4c5268c3695e25e73cb66fc064236a609e11020e80556bfed727d1a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CommonTemplates/_filtreTemplate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CommonTemplates/_filtreTemplate.html.twig"));

        // line 1
        echo "<div class=\"container-fluid container-formation\">
    <div class=\"jumbotron\" style=\"padding: 40px\">
        <h3 style=\"text-align: center;margin-top:10px;margin-bottom: 20px\">Filtrer les formations</h3>
        <div class=\"container\" style=\"display: flex !important;justify-content: center !important;\">
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-row\">
                <div class=\"col-md-6\">
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "maxNote", [], "any", false, false, false, 8), 'row');
        echo "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "maxLevel", [], "any", false, false, false, 11), 'row');
        echo "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 15
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "langueUtilisateur", [], "any", false, false, false, 15), 'row');
        echo "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "categoriePrefere", [], "any", false, false, false, 18), 'row');
        echo "
                </div>
                <div class=\"col-md-6\">
                    <button class=\"btn btn-warning\" style=\"background: #337ab7;border-color:#337ab7\"> Rechercher</button>
                </div>
            </div>
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/CommonTemplates/_filtreTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  74 => 18,  67 => 15,  61 => 11,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid container-formation\">
    <div class=\"jumbotron\" style=\"padding: 40px\">
        <h3 style=\"text-align: center;margin-top:10px;margin-bottom: 20px\">Filtrer les formations</h3>
        <div class=\"container\" style=\"display: flex !important;justify-content: center !important;\">
            {{ form_start(form) }}
            <div class=\"form-row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.maxNote) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.maxLevel) }}
                </div>
                <div class=\"col-md-6\">
                    {#                        {{ form_row(form.langueChoisie) }}#}
                    {{ form_row(form.langueUtilisateur) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.categoriePrefere) }}
                </div>
                <div class=\"col-md-6\">
                    <button class=\"btn btn-warning\" style=\"background: #337ab7;border-color:#337ab7\"> Rechercher</button>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>", "pages/CommonTemplates/_filtreTemplate.html.twig", "/Users/alessandro/Desktop/version2/templates/pages/CommonTemplates/_filtreTemplate.html.twig");
    }
}
