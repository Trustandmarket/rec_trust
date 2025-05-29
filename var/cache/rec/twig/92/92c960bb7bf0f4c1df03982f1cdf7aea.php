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

/* partials/videoButton.html.twig */
class __TwigTemplate_16dfcbdef9e3c6e211fa9819538b0538 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/videoButton.html.twig"));

        // line 1
        yield "<style>
    .playVideoButton {
        display: block;
        position: fixed;
        width: 100px;
        height: 100px;
        bottom: 60px;
        right: 20px;
        z-index: 9999999999;
        cursor: pointer;
        font-size: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f17c30;
    }

    .playVideoButton i {
        font-size: 60px;
    }

    #topBtn {
        bottom: 60px;
    }
</style>
<div>
    ";
        // line 27
        if (array_key_exists("youtube_url", $context)) {
            // line 28
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 28, $this->source); })()), "autoload", [], "any", false, false, false, 28) == "yes")) {
                // line 29
                yield "            <p class=\"playVideoButton\">
                <i class=\"fas fa-play\"></i>
            </p>";
            }
            // line 32
            yield "    ";
        }
        // line 33
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/videoButton.html.twig";
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
        return array (  86 => 33,  83 => 32,  78 => 29,  75 => 28,  73 => 27,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    .playVideoButton {
        display: block;
        position: fixed;
        width: 100px;
        height: 100px;
        bottom: 60px;
        right: 20px;
        z-index: 9999999999;
        cursor: pointer;
        font-size: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f17c30;
    }

    .playVideoButton i {
        font-size: 60px;
    }

    #topBtn {
        bottom: 60px;
    }
</style>
<div>
    {% if youtube_url is defined %}
        {% if youtube_url.autoload == 'yes' %}
            <p class=\"playVideoButton\">
                <i class=\"fas fa-play\"></i>
            </p>{% endif %}
    {% endif %}
</div>
", "partials/videoButton.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/partials/videoButton.html.twig");
    }
}
