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

/* home/branches.html.twig */
class __TwigTemplate_97f9e0af5028a7cbfd99137b118cb02c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/branches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/branches.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/branches.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


    <nav class=\"navbar bg-danger \">
        <div class=\"container-fluid\">
            <a class=\"\" href=\"#\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/return.png"), "html", null, true);
        echo "\" alt=\"return\" class=\"col-2 ms-2\" alt=\"return\">
            </a>

            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoroc.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"col-2\" alt=\"rocmondriaan\">
        </div>
    </nav>


    <div class=\"container-fluid p-0\">


        <div id=\"carouselExampleCaptions\" class=\"carousel slide\">
            <div class=\"carousel-indicators\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branches"]) || array_key_exists("branches", $context) ? $context["branches"] : (function () { throw new RuntimeError('Variable "branches" does not exist.', 24, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["branche"]) {
            // line 25
            echo "                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 25)) {
                echo "class=\"active\"";
            }
            echo " aria-label=\"Slide ";
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "\"></button>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['branche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

            <div class=\"carousel-inner\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branches"]) || array_key_exists("branches", $context) ? $context["branches"] : (function () { throw new RuntimeError('Variable "branches" does not exist.', 30, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["branche"]) {
            // line 31
            echo "                    <div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31)) {
                echo "active";
            }
            echo " align-items-center\" >
                        <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a8f48ba2-9603-4e2b-ac2d-60ce06efa566.webp"), "html", null, true);
            echo "\" style=\"height:3000px\"  class=\"\" alt=\"...\">
                        <div class=\"carousel-caption\" style=\"height: 20%\">
                            <h1 class=\"m-0\" style=\"height: 30%\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branche"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</h1>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("courses", ["id" => twig_get_attribute($this->env, $this->source, $context["branche"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><div class=\"btn btn-primary fs-1\">Klik hier</div></a>
                            <p>Some representative placeholder content for the slide.</p>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['branche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon bg-dark\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>








    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/branches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 40,  173 => 35,  169 => 34,  164 => 32,  157 => 31,  140 => 30,  135 => 27,  112 => 25,  95 => 24,  82 => 14,  76 => 11,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}



    <nav class=\"navbar bg-danger \">
        <div class=\"container-fluid\">
            <a class=\"\" href=\"#\">
                <img src=\"{{ asset('img/return.png') }}\" alt=\"return\" class=\"col-2 ms-2\" alt=\"return\">
            </a>

            <img src=\"{{ asset('img/logoroc.jpg') }}\" alt=\"Logo\" class=\"col-2\" alt=\"rocmondriaan\">
        </div>
    </nav>


    <div class=\"container-fluid p-0\">


        <div id=\"carouselExampleCaptions\" class=\"carousel slide\">
            <div class=\"carousel-indicators\">
                {% for key, branche in branches %}
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"{{ key }}\" {% if loop.first %}class=\"active\"{% endif %} aria-label=\"Slide {{ key + 1 }}\"></button>
                {% endfor %}
            </div>

            <div class=\"carousel-inner\">
                {% for key, branche in branches %}
                    <div class=\"carousel-item {% if loop.first %}active{% endif %} align-items-center\" >
                        <img src=\"{{ asset('img/a8f48ba2-9603-4e2b-ac2d-60ce06efa566.webp') }}\" style=\"height:3000px\"  class=\"\" alt=\"...\">
                        <div class=\"carousel-caption\" style=\"height: 20%\">
                            <h1 class=\"m-0\" style=\"height: 30%\">{{ branche.name }}</h1>
                            <a href=\"{{ path('courses', {id:branche.id}) }}\"><div class=\"btn btn-primary fs-1\">Klik hier</div></a>
                            <p>Some representative placeholder content for the slide.</p>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon bg-dark\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>








    </div>

{% endblock %}", "home/branches.html.twig", "C:\\Users\\SD Student\\Documents\\GitHub\\Holobox-info\\templates\\home\\branches.html.twig");
    }
}
