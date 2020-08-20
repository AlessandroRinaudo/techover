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

/* pages/informations.html.twig */
class __TwigTemplate_5883d5a53329eac6c4f3b5b47b0d9c3c180958c8317996509d474f5762bc9fbd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/informations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/informations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/informations.html.twig", 1);
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

        echo "   
    <div class=\"container\" style=\"margin-top: 150px\">
        <div class=\"description px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
            <h1 class=\"display-4\">Qui sommes-nous?</h1>
            <p class=\"lead\">Jidu est une start-up spécialisée dans le Machine learning et l’intelligence artificielle pour l’éducation, l’apprentissage et la formation, et souhaite accompagner l’apprenant dans une montée en compétences continue, personnalisée et qui prend en compte l’évolution de ses usages.</p>
        </div>

        <hr class=\"clearfix w-100 d-md-none pb-3\">
        <div class=\"container text-center\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-4 color-class\">
                    <div class=\"card\" style=\"width:400px\">
                        <img class=\"img-information\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/travailleur.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Marouene Chaibi</h4>
                            <p class=\"card-text\">Directeur général</br>&</br>Cofondateur de la start-up</p>
                            <a href=\"#\" class=\"btn btn-primary\">Détails</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 color-class\">
                    <div class=\"card\" style=\"width:400px\">
                        <img class=\"img-information\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/travailleur.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Fabien Mallet</h4>
                            <p class=\"card-text\">Directeur marketing</br>&</br>Cofondateur de la start-up</p>
                            <a href=\"#\" class=\"btn btn-primary\">Détails</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 color-class\">
                    <div class=\"card\" style=\"width:400px\">
                        <img class=\"img-information\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/travailleur.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Mthandazo Ndhlovu</h4>
                            <p class=\"card-text\">Directeur de la technologie</br>&</br>Cofondateur de la start-up</p>
                            <a href=\"#\" class=\"btn btn-primary\">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <hr class=\"clearfix w-100 d-md-none pb-3\">

        <div class=\"contact px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
            <h4 class=\"display-5>Pour nous contacter</h4>
            <p class=\"lead\">Vous pouvez nous contacter par téléphone au 01 23 45 67 89 ou bien par mail à l'adresse suivante techOver@techover.com</p>
        </div>
    </div>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  94 => 25,  81 => 15,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}   
    <div class=\"container\" style=\"margin-top: 150px\">
        <div class=\"description px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
            <h1 class=\"display-4\">Qui sommes-nous?</h1>
            <p class=\"lead\">Jidu est une start-up spécialisée dans le Machine learning et l’intelligence artificielle pour l’éducation, l’apprentissage et la formation, et souhaite accompagner l’apprenant dans une montée en compétences continue, personnalisée et qui prend en compte l’évolution de ses usages.</p>
        </div>

        <hr class=\"clearfix w-100 d-md-none pb-3\">
        <div class=\"container text-center\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-4 color-class\">
                    <div class=\"card\" style=\"width:400px\">
                        <img class=\"img-information\" src=\"{{ asset('images/travailleur.png') }}\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Marouene Chaibi</h4>
                            <p class=\"card-text\">Directeur général</br>&</br>Cofondateur de la start-up</p>
                            <a href=\"#\" class=\"btn btn-primary\">Détails</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 color-class\">
                    <div class=\"card\" style=\"width:400px\">
                        <img class=\"img-information\" src=\"{{ asset('images/travailleur.png') }}\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Fabien Mallet</h4>
                            <p class=\"card-text\">Directeur marketing</br>&</br>Cofondateur de la start-up</p>
                            <a href=\"#\" class=\"btn btn-primary\">Détails</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 color-class\">
                    <div class=\"card\" style=\"width:400px\">
                        <img class=\"img-information\" src=\"{{ asset('images/travailleur.png') }}\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Mthandazo Ndhlovu</h4>
                            <p class=\"card-text\">Directeur de la technologie</br>&</br>Cofondateur de la start-up</p>
                            <a href=\"#\" class=\"btn btn-primary\">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <hr class=\"clearfix w-100 d-md-none pb-3\">

        <div class=\"contact px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
            <h4 class=\"display-5>Pour nous contacter</h4>
            <p class=\"lead\">Vous pouvez nous contacter par téléphone au 01 23 45 67 89 ou bien par mail à l'adresse suivante techOver@techover.com</p>
        </div>
    </div>  
{% endblock %}", "pages/informations.html.twig", "/Users/alessandro/Desktop/version2/templates/pages/informations.html.twig");
    }
}
