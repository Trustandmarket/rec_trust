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

/* footer.html.twig */
class __TwigTemplate_a8788d3c41d4845fd15e717d16b2acca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield from $this->loadTemplate("partials/top_button.html.twig", "footer.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<div>
\t<div class=\"new-footer\">
\t\t<div class=\"col-md-12 responsive-footer-links\">
\t\t\t<p class=\"footer-links\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 7
            yield "\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 7) == 7453)) {
                // line 8
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "locale", [], "any", false, false, false, 8) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 8) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 8), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 8), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 9
$context["n"], "id", [], "any", false, false, false, 9) == 4683)) {
                // line 10
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 10) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 10), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 10), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t";
            } else {
                // line 12
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postName", [], "any", false, false, false, 12)]), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 12) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 12), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 12), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t";
            }
            // line 14
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t\t\t\t<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.pied-de-page.subscribe-newsletter"), "html", null, true);
        yield "</a>
\t\t\t</p>
\t\t</div>\t
\t\t<div class=\"col-md-12 inline-footer\">
\t\t\t<div class=\"copyright-links\">
\t\t\t\t<p>&copy;&nbsp;Trust &amp; Market ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "<span class=\"comma-to-display\">,</span></p>
\t\t\t\t<p class=\"footer-links footer-links-desktop\">
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 23
            yield "\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 23) == 7453)) {
                // line 24
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 24) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 24), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 24), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["n"], "id", [], "any", false, false, false, 25) == 4683)) {
                // line 26
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "locale", [], "any", false, false, false, 26) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 26) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 26), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 26), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t\t";
            } else {
                // line 28
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postName", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "locale", [], "any", false, false, false, 28) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 28) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 28), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 28), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t\t";
            }
            // line 30
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "\t\t\t\t\t<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.pied-de-page.subscribe-newsletter"), "html", null, true);
        yield "</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"logos-footer\">
\t\t\t\t<ul class=\"footer-ul-social-icons text-right\">
\t\t\t\t\t<li class=\"mr-4\">
\t\t\t\t\t\t<a href=\"https://www.stripe.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stripe-logo.png"), "html", null, true);
        yield "\" width=\"50\" height=\"25\" alt=\"stripe-payment-logo\" class=\"stripe-with-powered\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/trustandmarket/\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://twitter.com/trustandmarket\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.instagram.com/trustandmarket/\">
\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<input value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "getLocale", [], "method", false, false, false, 60), "html", null, true);
        yield "\" hidden id=\"page_lang\"/>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer.html.twig";
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
        return array (  207 => 60,  182 => 38,  169 => 31,  163 => 30,  151 => 28,  139 => 26,  137 => 25,  126 => 24,  123 => 23,  119 => 22,  114 => 20,  103 => 15,  97 => 14,  85 => 12,  73 => 10,  71 => 9,  60 => 8,  57 => 7,  53 => 6,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% include \"partials/top_button.html.twig\" %}
<div>
\t<div class=\"new-footer\">
\t\t<div class=\"col-md-12 responsive-footer-links\">
\t\t\t<p class=\"footer-links\">
\t\t\t\t{% for n in footer%}
\t\t\t\t\t{% if n.id == 7453 %}
\t\t\t\t\t\t<a href=\"{{path('blog_index')}}\">{% if app.request.locale == 'en' and n.postExcerpt != '' %}{{ n.postExcerpt }}{% else %}{{ n.postTitle }}{% endif %}</a>
\t\t\t\t\t{% elseif n.id == 4683 %}
\t\t\t\t\t\t<a href=\"{{path('experience_envoyez_commentaires')}}\">{% if app.request.locale == 'en' and n.postExcerpt != '' %}{{ n.postExcerpt }}{% else %}{{ n.postTitle }}{% endif %}</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{path('site_navigation', {navigation: n.postName})}}\">{% if app.request.locale == 'en' and n.postExcerpt != '' %}{{ n.postExcerpt }}{% else %}{{ n.postTitle }}{% endif %}</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t<a href=\"{{ path('app_newsletter') }}\">{{'home.pied-de-page.subscribe-newsletter'|trans}}</a>
\t\t\t</p>
\t\t</div>\t
\t\t<div class=\"col-md-12 inline-footer\">
\t\t\t<div class=\"copyright-links\">
\t\t\t\t<p>&copy;&nbsp;Trust &amp; Market {{ \"now\"|date(\"Y\") }}<span class=\"comma-to-display\">,</span></p>
\t\t\t\t<p class=\"footer-links footer-links-desktop\">
\t\t\t\t\t{% for n in footer%}
\t\t\t\t\t\t{% if n.id == 7453 %}
\t\t\t\t\t\t\t<a href=\"{{path('blog_index')}}\">{% if app.request.locale == 'en' and n.postExcerpt != '' %}{{ n.postExcerpt }}{% else %}{{ n.postTitle }}{% endif %}</a>
\t\t\t\t\t\t{% elseif n.id == 4683 %}
\t\t\t\t\t\t\t<a href=\"{{path('experience_envoyez_commentaires')}}\">{% if app.request.locale == 'en' and n.postExcerpt != '' %}{{ n.postExcerpt }}{% else %}{{ n.postTitle }}{% endif %}</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a href=\"{{path('site_navigation', {navigation: n.postName})}}\">{% if app.request.locale == 'en' and n.postExcerpt != '' %}{{ n.postExcerpt }}{% else %}{{ n.postTitle }}{% endif %}</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<a href=\"{{ path('app_newsletter') }}\">{{'home.pied-de-page.subscribe-newsletter'|trans}}</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"logos-footer\">
\t\t\t\t<ul class=\"footer-ul-social-icons text-right\">
\t\t\t\t\t<li class=\"mr-4\">
\t\t\t\t\t\t<a href=\"https://www.stripe.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/stripe-logo.png') }}\" width=\"50\" height=\"25\" alt=\"stripe-payment-logo\" class=\"stripe-with-powered\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/trustandmarket/\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://twitter.com/trustandmarket\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.instagram.com/trustandmarket/\">
\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<input value=\"{{app.request.getLocale()}}\" hidden id=\"page_lang\"/>
</div>
", "footer.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/footer.html.twig");
    }
}
