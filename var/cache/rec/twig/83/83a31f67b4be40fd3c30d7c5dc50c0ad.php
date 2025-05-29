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

/* partials/js/videoButton.js.twig */
class __TwigTemplate_e4f80e6305c2cafae54fcb7584666e60 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/js/videoButton.js.twig"));

        // line 1
        if (array_key_exists("youtube_url", $context)) {
            // line 2
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 2, $this->source); })()), "autoload", [], "any", false, false, false, 2) == "yes")) {
                // line 3
                yield "        \$(\"#youtubeVideoModal\").modal(\"hide\");

        \$(\".closeVideoBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#youtubeVideoModal\").modal('hide');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", \"\");
        });

        \$(\".playVideoButton i\").click(function () {
            \$(\"#youtubeVideoModal\").modal('toggle');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", 'https://www.youtube.com/embed/' + \$(\"#youtubeVideoModal #youtube_url\").val());
        });
    ";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/js/videoButton.js.twig";
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
        return array (  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if youtube_url is defined %}
    {% if youtube_url.autoload == 'yes' %}
        \$(\"#youtubeVideoModal\").modal(\"hide\");

        \$(\".closeVideoBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#youtubeVideoModal\").modal('hide');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", \"\");
        });

        \$(\".playVideoButton i\").click(function () {
            \$(\"#youtubeVideoModal\").modal('toggle');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", 'https://www.youtube.com/embed/' + \$(\"#youtubeVideoModal #youtube_url\").val());
        });
    {% endif %}
{% endif %}", "partials/js/videoButton.js.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/partials/js/videoButton.js.twig");
    }
}
