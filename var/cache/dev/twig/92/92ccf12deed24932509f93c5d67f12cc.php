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

/* home/show.html.twig */
class __TwigTemplate_7a45c0cebb55c1bd7de4c0d5730d22fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"\"></div>

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 8
            echo "            <div class=\"card rounded-0\" style=\"border: none;\">
                <video id=\"myVideo";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"card-img-top\" controls style=\"width: 100%; height: auto;\">
                    <source src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["video"], "filename", [], "any", false, false, false, 10))), "html", null, true);
            echo "\" type=\"video/mp4\">
                    Your browser does not support the video tag.
                </video>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                    <a href=\"#\" class=\"btn btn-dark\">Zie video</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>

    <p class=\"text-white bg-danger\">dsaasdasdasdasd</p>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 26
            echo "            var video";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo " = document.getElementById('myVideo";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "');

            video";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo ".addEventListener('ended', function() {
                // Wacht 5 seconden (5000 milliseconden) voordat je doorstuurt
                setTimeout(function() {
                    window.location.href = \"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branches");
            echo "\";
                }, 5000);
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 35,  128 => 31,  122 => 28,  114 => 26,  110 => 25,  102 => 19,  91 => 14,  84 => 10,  80 => 9,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"\"></div>

        {% for video in files %}
            <div class=\"card rounded-0\" style=\"border: none;\">
                <video id=\"myVideo{{ video.id }}\" class=\"card-img-top\" controls style=\"width: 100%; height: auto;\">
                    <source src=\"{{ asset('uploads/' ~ video.filename) }}\" type=\"video/mp4\">
                    Your browser does not support the video tag.
                </video>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ video.name }}</h5>
                    <a href=\"#\" class=\"btn btn-dark\">Zie video</a>
                </div>
            </div>
        {% endfor %}
    </div>

    <p class=\"text-white bg-danger\">dsaasdasdasdasd</p>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            {% for video in files %}
            var video{{ video.id }} = document.getElementById('myVideo{{ video.id }}');

            video{{ video.id }}.addEventListener('ended', function() {
                // Wacht 5 seconden (5000 milliseconden) voordat je doorstuurt
                setTimeout(function() {
                    window.location.href = \"{{ path('branches') }}\";
                }, 5000);
            });
            {% endfor %}
        });
    </script>
{% endblock %}
", "home/show.html.twig", "C:\\Users\\SD Student\\Documents\\GitHub\\Holobox-info\\templates\\home\\show.html.twig");
    }
}
