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

/* scriptautomatisationBrevo.html.twig */
class __TwigTemplate_cfd55ed1db7d37ea0fd08c4a08b39bcd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scriptautomatisationBrevo.html.twig"));

        // line 1
        yield "<!-- Brevo automatisation {literal} -->
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "environment", [], "any", false, false, false, 2) == "prod")) {
            // line 3
            yield "    <script src=\"https://cdn.brevo.com/js/sdk-loader.js\" async></script>
    <script>
        // Version: 2.0
        window.Brevo = window.Brevo || [];
        Brevo.push([
            \"init\",
            {
            client_key: \"xm9yyt6ib4f6j92a9jxioufg\",
            // Optional: Add other initialization options, see documentation
            }
        ]);
    </script>    
";
        }
        // line 16
        yield "<!-- /Brevo automatisation {/literal} -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scriptautomatisationBrevo.html.twig";
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
        return array (  65 => 16,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Brevo automatisation {literal} -->
{% if app.environment == 'prod' %}
    <script src=\"https://cdn.brevo.com/js/sdk-loader.js\" async></script>
    <script>
        // Version: 2.0
        window.Brevo = window.Brevo || [];
        Brevo.push([
            \"init\",
            {
            client_key: \"xm9yyt6ib4f6j92a9jxioufg\",
            // Optional: Add other initialization options, see documentation
            }
        ]);
    </script>    
{% endif %}
<!-- /Brevo automatisation {/literal} -->", "scriptautomatisationBrevo.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/scriptautomatisationBrevo.html.twig");
    }
}
