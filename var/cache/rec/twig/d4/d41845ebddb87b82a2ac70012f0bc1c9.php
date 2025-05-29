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

/* partials/otherPagesVideoModal.html.twig */
class __TwigTemplate_ee648e041d3275b4ec1b68f380757005 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/otherPagesVideoModal.html.twig"));

        // line 1
        yield "<!-- Modal -->
";
        // line 2
        if (array_key_exists("youtube_url", $context)) {
            // line 3
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 3, $this->source); })()), "autoload", [], "any", false, false, false, 3) == "yes")) {
                // line 4
                yield "        <div class=\"modal fade\" id=\"youtubeVideoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"youtubeVideoModalTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                <div class=\"modal-content\" style=\"background-color: transparent;box-shadow: none;\">
                    <div class=\"modal-body\">
                        <span aria-hidden=\"true\" class=\"closeVideoBtnModal\">&times;</span>
                        <div class=\"hs-responsive-embed-youtube\">
                            <iframe class=\"rounded\" src=\"\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
                        </div>
                        <input hidden value=\"";
                // line 12
                if ((isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 12, $this->source); })())) {
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 12, $this->source); })()), "autoload", [], "any", false, false, false, 12) == "yes")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 12, $this->source); })()), "optionValue", [], "any", false, false, false, 12), "html", null, true);
                    }
                }
                yield "\" id=\"youtube_url\"/>
                    </div>
                </div>
            </div>
        </div>
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
        return "partials/otherPagesVideoModal.html.twig";
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
        return array (  63 => 12,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Modal -->
{% if youtube_url is defined %}
    {% if youtube_url.autoload == 'yes' %}
        <div class=\"modal fade\" id=\"youtubeVideoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"youtubeVideoModalTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                <div class=\"modal-content\" style=\"background-color: transparent;box-shadow: none;\">
                    <div class=\"modal-body\">
                        <span aria-hidden=\"true\" class=\"closeVideoBtnModal\">&times;</span>
                        <div class=\"hs-responsive-embed-youtube\">
                            <iframe class=\"rounded\" src=\"\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
                        </div>
                        <input hidden value=\"{% if youtube_url %}{% if youtube_url.autoload == 'yes' %}{{youtube_url.optionValue}}{% endif %}{% endif %}\" id=\"youtube_url\"/>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endif %}", "partials/otherPagesVideoModal.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/partials/otherPagesVideoModal.html.twig");
    }
}
