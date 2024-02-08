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

/* home/home.html.twig */
class __TwigTemplate_ac0e12a68af5301f312bbf2e760f8f90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-4\">
            <h2>holobox applicatie </h2>
        </div>
        <div class=\"container\">
            <div class=\"row\">


                <div class=\"col-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">voeg een video toe!</h5>
                        <h6 class=\"card-subtitle mb-2 text-body-secondary\">Card subtitle</h6>
                        <p class=\"card-text\">voeg een video toe om te laten zien op de holobox</p>
                        <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Link</a>
                    </div>
                </div>
                </div>
                <div class=\"col-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">video overzicht</h5>
                        <h6 class=\"card-subtitle mb-2 text-body-secondary\">bekijk alle videos</h6>
                        <p class=\"card-text\">klik hier voor een lijst met alle videos om ze te bekijken of verwijderen.</p>
                        <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Link</a>
                    </div>
                </div>
                </div>
                <div class=\"col-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Card title</h5>
                        <h6 class=\"card-subtitle mb-2 text-body-secondary\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Link</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-4\">
            <h2>holobox applicatie </h2>
        </div>
        <div class=\"container\">
            <div class=\"row\">


                <div class=\"col-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">voeg een video toe!</h5>
                        <h6 class=\"card-subtitle mb-2 text-body-secondary\">Card subtitle</h6>
                        <p class=\"card-text\">voeg een video toe om te laten zien op de holobox</p>
                        <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Link</a>
                    </div>
                </div>
                </div>
                <div class=\"col-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">video overzicht</h5>
                        <h6 class=\"card-subtitle mb-2 text-body-secondary\">bekijk alle videos</h6>
                        <p class=\"card-text\">klik hier voor een lijst met alle videos om ze te bekijken of verwijderen.</p>
                        <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Link</a>
                    </div>
                </div>
                </div>
                <div class=\"col-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Card title</h5>
                        <h6 class=\"card-subtitle mb-2 text-body-secondary\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Link</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>
{% endblock %}", "home/home.html.twig", "C:\\Users\\SD Student\\Documents\\GitHub\\Holobox-info\\templates\\home\\home.html.twig");
    }
}
