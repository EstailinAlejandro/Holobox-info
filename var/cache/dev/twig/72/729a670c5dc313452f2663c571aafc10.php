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

/* home/courses.html.twig */
class __TwigTemplate_2fb83b1d864c563ef3960733e1e2e2e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/courses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/courses.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/courses.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
        <div class=\"container bg-warning\">
            <h1 style=\"height: 10%\" class=\"text-center text-white\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"row row-cols-3 align-items-center mt-5 bg-danger\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 10, $this->source); })()), "getCourses", [], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 11
            echo "                <a class=\"text-decoration-none\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OnlyVideo", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
                    <div class=\"card rounded-0\" style=\"width: 60%; border: none; background-color: #5eb5e0\">
                        <img class=\"card-img-top rounded-0\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/kapper.jpg"), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</h4>
                            <p class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "learning_path", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                            <button class=\"btn btn-dark text-start d-flex align-items-center\">
                                <span class=\"ps-1 \">Zie video <br> van opleiding</span>
                                <i class=\"bi bi-arrow-right-short ms-auto ps-5\"></i>
                            </button>
                        </div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>









";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  98 => 16,  94 => 15,  89 => 13,  83 => 11,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"container bg-warning\">
            <h1 style=\"height: 10%\" class=\"text-center text-white\">{{ branch.name }}</h1>
        </div>

        <div class=\"row row-cols-3 align-items-center mt-5 bg-danger\">
            {% for course in branch.getCourses() %}
                <a class=\"text-decoration-none\" href=\"{{ path('OnlyVideo', {'id': course.id}) }}\">
                    <div class=\"card rounded-0\" style=\"width: 60%; border: none; background-color: #5eb5e0\">
                        <img class=\"card-img-top rounded-0\" src=\"{{ asset('img/kapper.jpg') }}\" alt=\"\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">{{ course.name }}</h4>
                            <p class=\"card-title\">{{ course.learning_path }}</p>
                            <button class=\"btn btn-dark text-start d-flex align-items-center\">
                                <span class=\"ps-1 \">Zie video <br> van opleiding</span>
                                <i class=\"bi bi-arrow-right-short ms-auto ps-5\"></i>
                            </button>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
    </div>









{% endblock %}", "home/courses.html.twig", "C:\\Users\\SD Student\\Documents\\GitHub\\Holobox-info\\templates\\home\\courses.html.twig");
    }
}
