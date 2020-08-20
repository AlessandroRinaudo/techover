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

/* admin/formation/_form.html.twig */
class __TwigTemplate_64fb0ef8265353cab8e908b3bdbeb2cc553d8ff45414620e6824264ddcc0044e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class =\"form_change\" style=\"margin: 100px auto\">
    <div class=\"row\" style=\"margin-bottom: 20px; background-color: #f7f7f7\">
        <div class=\"col-md-4\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'row');
        echo "</div>
    </div>
    <div class=\"row\" style=\"background-color: #f7f7f7; margin-bottom: 50px\">
        <div class=\"col-md-10\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7), 'row');
        echo "</div>
    </div>
    <div class=\"row\" style=\"background-color: #f7f7f7; margin-bottom: 50px\">
        <div class=\"col-md-5\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "url", [], "any", false, false, false, 10), 'row');
        echo "</div>
        <div class=\"col-md-2\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "langue", [], "any", false, false, false, 11), 'row');
        echo "</div>
        <div class=\"col-md-1\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "level", [], "any", false, false, false, 12), 'row');
        echo "</div>
        <div class=\"col-md-1\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "note", [], "any", false, false, false, 13), 'row');
        echo "</div>
        <div class=\"col-md-2\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "aviable", [], "any", false, false, false, 14), 'row');
        echo "</div>
    </div>
</div>

";
        // line 23
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'widget');
        echo "
<button class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, (((isset($context["button"]) || array_key_exists("button", $context))) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 24, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/formation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  89 => 24,  84 => 23,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  55 => 7,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class =\"form_change\" style=\"margin: 100px auto\">
    <div class=\"row\" style=\"margin-bottom: 20px; background-color: #f7f7f7\">
        <div class=\"col-md-4\">{{ form_row(form.title) }}</div>
    </div>
    <div class=\"row\" style=\"background-color: #f7f7f7; margin-bottom: 50px\">
        <div class=\"col-md-10\">{{ form_row(form.description) }}</div>
    </div>
    <div class=\"row\" style=\"background-color: #f7f7f7; margin-bottom: 50px\">
        <div class=\"col-md-5\">{{ form_row(form.url) }}</div>
        <div class=\"col-md-2\">{{ form_row(form.langue) }}</div>
        <div class=\"col-md-1\">{{ form_row(form.level) }}</div>
        <div class=\"col-md-1\">{{ form_row(form.note) }}</div>
        <div class=\"col-md-2\">{{ form_row(form.aviable) }}</div>
    </div>
</div>

{#        pour changer le theme aller sur packages/twig.yaml et taper ça
            form_themes :['nom du theme']
            exemple
            form_themes : ['bootstrap_4_layout.html.twig']
#}
        {{ form_widget(form)}}
<button class=\"btn btn-primary\">{{ button |default('Enregistrer') }}</button>
{{ form_end(form) }}", "admin/formation/_form.html.twig", "/Users/alessandro/Documents/studio/s6/projet de prog/jidu/templates/admin/formation/_form.html.twig");
    }
}
