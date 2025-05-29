<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/Commandes/Commandes/Fields/status.html.twig */
class __TwigTemplate_be0ece20daa00580b022de0483ebdd8d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Commandes/Commandes/Fields/status.html.twig"));

        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 1, $this->source); })()), "value", [], "any", false, false, false, 1) == "wc-pending")) {
            yield "En attente de payement";
        }
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "value", [], "any", false, false, false, 2) == "wc-completed")) {
            yield "Terminé";
        }
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3) == "wc-in-progress")) {
            yield "En cours";
        }
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "value", [], "any", false, false, false, 4) == "wc-cancelled")) {
            yield "Annulé";
        }
        // line 5
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "value", [], "any", false, false, false, 5) == "wc-failed")) {
            yield "Echoué";
        }
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6) == "wc-pending-trash")) {
            yield "En attente de payement";
        }
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "value", [], "any", false, false, false, 7) == "wc-completed-trash")) {
            yield "Terminé";
        }
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8) == "wc-in-progress-trash")) {
            yield "En cours";
        }
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9) == "wc-cancelled-trash")) {
            yield "Annulé";
        }
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10) == "wc-failed-trash")) {
            yield "Annulé";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/Commandes/Commandes/Fields/status.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 10,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  53 => 3,  49 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if field.value == 'wc-pending' %}En attente de payement{% endif %}
{% if field.value == 'wc-completed' %}Terminé{% endif %}
{% if field.value == 'wc-in-progress' %}En cours{% endif %}
{% if field.value == 'wc-cancelled' %}Annulé{% endif %}
{% if field.value == 'wc-failed' %}Echoué{% endif %}
{% if field.value == 'wc-pending-trash' %}En attente de payement{% endif %}
{% if field.value == 'wc-completed-trash' %}Terminé{% endif %}
{% if field.value == 'wc-in-progress-trash' %}En cours{% endif %}
{% if field.value == 'wc-cancelled-trash' %}Annulé{% endif %}
{% if field.value == 'wc-failed-trash' %}Annulé{% endif %}
", "admin/Commandes/Commandes/Fields/status.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Commandes/Commandes/Fields/status.html.twig");
    }
}
