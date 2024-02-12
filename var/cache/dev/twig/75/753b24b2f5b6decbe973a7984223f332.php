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

/* home/select.html.twig */
class __TwigTemplate_0dcef01af69dab43435a5b7c9787fe4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/select.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/select.html.twig", 1);
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
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 7
            echo "        <div class=\"card rounded-0\" style=\"width: 18rem; border: none\">
            <video class=\"\" controls>
                <source src=\"uploads/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 9), "html", null, true);
            echo "\" type=\"video/mp4\">

                Your browser does not support the video tag.
            </video>
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                <a href=\"#\" class=\"btn btn-dark\">Zie video</a>
            </div>
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
<div class=\"cta-image-block cta-image-block--color-blue\" style=\"background: url('img/kapper.jpg&height=300');\">

    <div class=\"cta-image-block__content-wrapper \">
        <div class=\"cta-image-block__content\">
            <h3 class=\"cta-image-block__title\">Medewerker ICT support</h3>
            <span class=\"cta-image-block__subtitle\">Niveau 2, bol</span>
            <a class=\"btn btn-dark text-start d-flex align-items-center\" href=\"#\">
                <span class=\"ps-1 pe-3\">Zie video <br> van opleiding</span>
                <i class=\"bi bi-arrow-right-short ms-auto\"></i></a>
        </div>
    </div>
</div>




    <div class=\"card rounded-0 \" style=\"width: 18rem; border: none; background-color: #5eb5e0 \">
        <img class=\"card-img-top rounded-0\" src=\"img/kapper.jpg\" alt=\"\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">dssdasadsad</h4>
            <p class=\"card-title\">Niveau 2, bol</p>
            <a class=\"btn btn-dark text-start d-flex s\" href=\"#\">
                <span class=\"ps-1 \">Zie video <br> van opleiding</span>
                <i class=\"bi bi-arrow-right-short ms-auto\"></i></a>
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  88 => 14,  80 => 9,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"\"></div>
    {% for file in files %}
        <div class=\"card rounded-0\" style=\"width: 18rem; border: none\">
            <video class=\"\" controls>
                <source src=\"uploads/{{ file.filename }}\" type=\"video/mp4\">

                Your browser does not support the video tag.
            </video>
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ file.name}}</h5>
                <a href=\"#\" class=\"btn btn-dark\">Zie video</a>
            </div>
        </div>


    {% endfor %}
    </div>
<div class=\"cta-image-block cta-image-block--color-blue\" style=\"background: url('img/kapper.jpg&height=300');\">

    <div class=\"cta-image-block__content-wrapper \">
        <div class=\"cta-image-block__content\">
            <h3 class=\"cta-image-block__title\">Medewerker ICT support</h3>
            <span class=\"cta-image-block__subtitle\">Niveau 2, bol</span>
            <a class=\"btn btn-dark text-start d-flex align-items-center\" href=\"#\">
                <span class=\"ps-1 pe-3\">Zie video <br> van opleiding</span>
                <i class=\"bi bi-arrow-right-short ms-auto\"></i></a>
        </div>
    </div>
</div>




    <div class=\"card rounded-0 \" style=\"width: 18rem; border: none; background-color: #5eb5e0 \">
        <img class=\"card-img-top rounded-0\" src=\"img/kapper.jpg\" alt=\"\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">dssdasadsad</h4>
            <p class=\"card-title\">Niveau 2, bol</p>
            <a class=\"btn btn-dark text-start d-flex s\" href=\"#\">
                <span class=\"ps-1 \">Zie video <br> van opleiding</span>
                <i class=\"bi bi-arrow-right-short ms-auto\"></i></a>
        </div>
    </div>


{% endblock %}", "home/select.html.twig", "C:\\Users\\SD Student\\Documents\\GitHub\\Holobox-info\\templates\\home\\select.html.twig");
    }
}
