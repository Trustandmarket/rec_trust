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

/* menuProfile.html.twig */
class __TwigTemplate_56a050c08f4fa09eabe2a94e9f5f16ac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuProfile.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_dashboard");
        yield "\">Compte</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</li>
                <li>
                    ";
        // line 9
        if (array_key_exists("infos_bulle", $context)) {
            // line 10
            yield "                        <span class=\"nav-link popover_infos px-2 py-0\" data-html=\"true\" data-container=\"body\"
                              data-toggle=\"popover\"
                              data-placement=\"right\" data-content=\"\">
            <i style=\"color: #f17c30;\" class=\"fas fa-question-circle fa-lg\"></i>
        </span>
                    ";
        }
        // line 15
        yield "</li>
            </ol>
        </nav>
    </div>
    <div class=\"col-12\">
        <h1 class=\"d-flex justify-content-center justify-content-md-start justify-content-sm-center\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</h1>
        <hr class=\"divider bg-dark mt-0 pt-0\"/>
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menuProfile.html.twig";
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
        return array (  78 => 20,  71 => 15,  63 => 10,  61 => 9,  56 => 7,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-12\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('profile_dashboard') }}\">Compte</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ page_name }}</li>
                <li>
                    {% if infos_bulle is defined %}
                        <span class=\"nav-link popover_infos px-2 py-0\" data-html=\"true\" data-container=\"body\"
                              data-toggle=\"popover\"
                              data-placement=\"right\" data-content=\"\">
            <i style=\"color: #f17c30;\" class=\"fas fa-question-circle fa-lg\"></i>
        </span>
                    {% endif %}</li>
            </ol>
        </nav>
    </div>
    <div class=\"col-12\">
        <h1 class=\"d-flex justify-content-center justify-content-md-start justify-content-sm-center\">{{ page_name }}</h1>
        <hr class=\"divider bg-dark mt-0 pt-0\"/>
    </div>
</div>", "menuProfile.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/menuProfile.html.twig");
    }
}
