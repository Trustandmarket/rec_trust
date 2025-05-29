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

/* annonces/details.html.twig */
class __TwigTemplate_faa55ba48695f9aa9d6a52e734efdab2 extends Template
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

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "otherLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/details.html.twig"));

        $this->parent = $this->loadTemplate("otherLayout.html.twig", "annonces/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\" sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    <meta name=\"title\" content=\"";
        // line 10
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 10, $this->source); })()), "titre_en", [], "any", false, false, false, 10) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 10, $this->source); })()), "titre_en", [], "any", false, false, false, 10), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 10, $this->source); })()), "post_title", [], "any", false, false, false, 10), "html", null, true);
        }
        yield "\">
    <meta name=\"description\" content=\"";
        // line 11
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "locale", [], "any", false, false, false, 11) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 11, $this->source); })()), "content_en", [], "any", false, false, false, 11) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 11, $this->source); })()), "content_en", [], "any", false, false, false, 11)), "truncate", [160, "...", false], "method", false, false, false, 11), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 11, $this->source); })()), "post_content", [], "any", false, false, false, 11)), "truncate", [160, "...", false], "method", false, false, false, 11), "html", null, true);
        }
        yield "\">
    <meta name=\"keywords\" content=\"";
        // line 12
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 12, $this->source); })()), "categorie_parent_en", [], "any", false, false, false, 12) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 12, $this->source); })()), "categorie_parent_en", [], "any", false, false, false, 12), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 12, $this->source); })()), "categorieParent", [], "any", false, false, false, 12), "html", null, true);
        }
        yield "\">

    <link rel=\"canonical\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 14, $this->source); })()), "post_name", [], "any", false, false, false, 14)])), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 15, $this->source); })()), "post_name", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\">
    <meta property=\"og:title\" content=\"";
        // line 16
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 16, $this->source); })()), "titre_en", [], "any", false, false, false, 16) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 16, $this->source); })()), "titre_en", [], "any", false, false, false, 16), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 16, $this->source); })()), "post_title", [], "any", false, false, false, 16), "html", null, true);
        }
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 17
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "locale", [], "any", false, false, false, 17) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 17, $this->source); })()), "content_en", [], "any", false, false, false, 17) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 17, $this->source); })()), "content_en", [], "any", false, false, false, 17)), "truncate", [160, "...", false], "method", false, false, false, 17), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 17, $this->source); })()), "post_content", [], "any", false, false, false, 17)), "truncate", [160, "...", false], "method", false, false, false, 17), "html", null, true);
        }
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 18
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 18, $this->source); })()), "gallery", [], "any", false, false, false, 18))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 18, $this->source); })()), "gallery", [], "any", false, false, false, 18), 0, [], "any", false, false, false, 18), "guid", [], "any", false, false, false, 18), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 18, $this->source); })()), "images_secondaires", [], "any", false, false, false, 18))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 18, $this->source); })()), "images_secondaires", [], "any", false, false, false, 18), 0, [], "any", false, false, false, 18), "guid", [], "any", false, false, false, 18), "html", null, true);
        }
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 20, $this->source); })()), "post_name", [], "any", false, false, false, 20)])), "html", null, true);
        yield "\">
    <meta property=\"og:locale\" content=\"fr\"/>
    <meta property=\"og:locale:alternate\" content=\"en\"/>

    ";
        // line 25
        yield "    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:creator\" content=\"Kbr Global\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"";
        // line 28
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "locale", [], "any", false, false, false, 28) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 28, $this->source); })()), "titre_en", [], "any", false, false, false, 28) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 28, $this->source); })()), "titre_en", [], "any", false, false, false, 28), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 28, $this->source); })()), "post_title", [], "any", false, false, false, 28), "html", null, true);
        }
        yield "\">
    <meta name=\"twitter:description\" content=\"";
        // line 29
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 29, $this->source); })()), "content_en", [], "any", false, false, false, 29) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 29, $this->source); })()), "content_en", [], "any", false, false, false, 29)), "truncate", [160, "...", false], "method", false, false, false, 29), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 29, $this->source); })()), "post_content", [], "any", false, false, false, 29)), "truncate", [160, "...", false], "method", false, false, false, 29), "html", null, true);
        }
        yield "\">
    <meta name=\"twitter:image\" content=\"";
        // line 30
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 30, $this->source); })()), "gallery", [], "any", false, false, false, 30))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 30, $this->source); })()), "gallery", [], "any", false, false, false, 30), 0, [], "any", false, false, false, 30), "guid", [], "any", false, false, false, 30), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 30, $this->source); })()), "images_secondaires", [], "any", false, false, false, 30))) {
            yield "detailsAnnonce.images_secondaires.0.guid";
        }
        yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
        // line 31
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 31, $this->source); })()), "gallery", [], "any", false, false, false, 31))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 31, $this->source); })()), "gallery", [], "any", false, false, false, 31), 0, [], "any", false, false, false, 31), "guid", [], "any", false, false, false, 31), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 31, $this->source); })()), "images_secondaires", [], "any", false, false, false, 31))) {
            yield "detailsAnnonce.images_secondaires.0.guid";
        }
        yield "\">
    ";
        // line 33
        yield "
    ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 34, $this->source); })()), "categorieParentType", [], "any", false, false, false, 34) == "product_cat")) {
            // line 35
            yield "        <script type=\"application/ld+json\">
\t\t\t{
\t\t\t\t\"@context\": \"https://schema.org\",
\t\t\t\t\"@type\": \"product\",
\t\t\t\t\"brand\": \"Acme\",
\t\t\t\t\"logo\": \"http://www.example.com/logo.png\",
\t\t\t\t\"name\": \"";
            // line 41
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "locale", [], "any", false, false, false, 41) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 41, $this->source); })()), "titre_en", [], "any", false, false, false, 41) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 41, $this->source); })()), "titre_en", [], "any", false, false, false, 41), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 41, $this->source); })()), "post_title", [], "any", false, false, false, 41), "html", null, true);
            }
            yield "\",
\t\t\t\t\"image\": \"";
            // line 42
            if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 42, $this->source); })()), "gallery", [], "any", false, false, false, 42))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 42, $this->source); })()), "gallery", [], "any", false, false, false, 42), 0, [], "any", false, false, false, 42), "guid", [], "any", false, false, false, 42), "html", null, true);
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 42, $this->source); })()), "images_secondaires", [], "any", false, false, false, 42))) {
                yield "detailsAnnonce.images_secondaires.0.guid";
            }
            yield "\",
\t\t\t\t\"description\": \"";
            // line 43
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "locale", [], "any", false, false, false, 43) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 43, $this->source); })()), "content_en", [], "any", false, false, false, 43) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 43, $this->source); })()), "content_en", [], "any", false, false, false, 43)), "truncate", [160, "...", false], "method", false, false, false, 43), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 43, $this->source); })()), "post_content", [], "any", false, false, false, 43)), "truncate", [160, "...", false], "method", false, false, false, 43), "html", null, true);
            }
            yield "\",
\t\t\t\t\"offers\": {
\t\t\t\t\t\"@type\": \"Offer\",
\t\t\t\t\t\"priceCurrency\": \"";
            // line 46
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 46, $this->source); })()), "devise", [], "any", false, false, false, 46))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 46, $this->source); })()), "devise", [], "any", false, false, false, 46), "metaValue", [], "any", false, false, false, 46), "html", null, true);
            } else {
                yield "€";
            }
            yield "\",
\t\t\t\t\t\"price\": \"";
            // line 47
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 47, $this->source); })()), "prix", [], "any", false, false, false, 47))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 47, $this->source); })()), "prix", [], "any", false, false, false, 47), "html", null, true);
            } else {
                yield "0";
            }
            yield "\",
\t\t\t\t\t\"availability\": \"http://schema.org/InStock\",
\t\t\t\t\t\"seller\": {
\t\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}



        </script>
    ";
        } else {
            // line 60
            yield "        <script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"http://schema.org/\",
\t\t\t\"@type\": \"Service\",
\t\t\t\"name\": \"";
            // line 64
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "locale", [], "any", false, false, false, 64) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 64, $this->source); })()), "titre_en", [], "any", false, false, false, 64) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 64, $this->source); })()), "titre_en", [], "any", false, false, false, 64), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 64, $this->source); })()), "post_title", [], "any", false, false, false, 64), "html", null, true);
            }
            yield "\",
\t\t\t\"description\": \"";
            // line 65
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "locale", [], "any", false, false, false, 65) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 65, $this->source); })()), "content_en", [], "any", false, false, false, 65) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 65, $this->source); })()), "content_en", [], "any", false, false, false, 65)), "truncate", [160, "...", false], "method", false, false, false, 65), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 65, $this->source); })()), "post_content", [], "any", false, false, false, 65)), "truncate", [160, "...", false], "method", false, false, false, 65), "html", null, true);
            }
            yield "\",
\t\t\t\"provider\": {
\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t},
\t\t\t\"image\": \"";
            // line 70
            if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 70, $this->source); })()), "gallery", [], "any", false, false, false, 70))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 70, $this->source); })()), "gallery", [], "any", false, false, false, 70), 0, [], "any", false, false, false, 70), "guid", [], "any", false, false, false, 70), "html", null, true);
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 70, $this->source); })()), "images_secondaires", [], "any", false, false, false, 70))) {
                yield "detailsAnnonce.images_secondaires.0.guid";
            }
            yield "\",
\t\t\t\"offers\": {
\t\t\t\t\"@type\": \"Offer\",
\t\t\t\t\"priceCurrency\": \"";
            // line 73
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 73, $this->source); })()), "devise", [], "any", false, false, false, 73))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 73, $this->source); })()), "devise", [], "any", false, false, false, 73), "metaValue", [], "any", false, false, false, 73), "html", null, true);
            } else {
                yield "€";
            }
            yield "\",
\t\t\t\t\"price\": \"";
            // line 74
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 74, $this->source); })()), "prix", [], "any", false, false, false, 74))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 74, $this->source); })()), "prix", [], "any", false, false, false, 74), "html", null, true);
            } else {
                yield "0";
            }
            yield "\",
\t\t\t\t\"seller\": {
\t\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t\t}
\t\t\t}
\t\t}



        </script>
    ";
        }
        // line 86
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market | ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "locale", [], "any", false, false, false, 90) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 90, $this->source); })()), "titre_en", [], "any", false, false, false, 90) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 90, $this->source); })()), "titre_en", [], "any", false, false, false, 90)), "truncate", [45, true], "method", false, false, false, 90), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 90, $this->source); })()), "post_title", [], "any", false, false, false, 90)), "truncate", [45, true], "method", false, false, false, 90), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 93
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link href=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/voir-annonce.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"
          integrity=\"sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

    <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\"> -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css\"
          integrity=\"sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    <!-- Bootstrap toggle switch -->
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>


    <style>

        @media only screen and (max-width: 500px) {
            #dialoguons {
                width: 70%;
            }
        }

        @media only screen and (min-width: 501px) {
            #dialoguons {
                width: 40%;
            }
        }

        @media only screen and (min-width: 769) and (max-width: 1024px) {
            #dialoguons {
                width: 30%;
            }
        }

        @media only screen and (min-width: 1025px) {
            #dialoguons {
                width: 19%;
            }
        }

        @media only screen and (max-width: 800px) {
            .datepicker table {
                width: 100%;
            }

            .datepicker-inline {
                width: 100%;
            }

            .datepicker-days table {
                width: 100%;
            }

            .mode3 {
                margin-bottom: 3rem;
            }
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: \"|\";
        }

        .breadcrumb {
            background-color: white;
        }

        .breadcrumb a {
            color: #000000;
        }

        .p-pop-up1 {
            margin-bottom: 2rem;
        }

        .p-pop-titre1,
        .p-pop-titre2 {
            font-family: \"Palanquin Dark\";
        }

        .p-pop-content1 {
            background: #53b4a6;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-family: \"Source Sans Pro\";
        }

        .p-pop-content2 {
            background: black;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-family: \"Source Sans Pro\";
        }

        .button_profil_sendmsg {
            width: 100%;
            display: flex;
            justify-content: end;
            align-items: center;
            margin: 0.5rem;
            padding: 0;
        }

        .prestation-link {
            text-align: center;
        }

        ul.slick-dots {
            position: absolute;
            bottom: -25px;
            display: block;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;
            cursor: pointer;
        }

        .slick-dots li button {
            border-radius: 50%;
            font-size: 0;
            line-height: 0;
            display: block;
            width: 10px;
            height: 10px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:before {
            font-family: 'slick';
            font-size: 35px;
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 10px;
            height: 10px;
            content: '•';
            text-align: center;
            opacity: .25;
            color: black;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: black;
        }

        .btn-wish {
            background: transparent;
            border: none;
            /* margin: 87px; */
            /* font-size: 88px; */
            outline: none;
            color: grey;
        }

        .btnh1-display {
            display: flex;
            justify-content: end;
        }

        .btn i:hover {
            cursor: pointer;
        }

        button:focus {
            outline: none;
        }

        .item .btnh1-display {
            position: absolute;
            top: 10%;
            left: 95%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-size: 16px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        .bloc-nom-commercial{
            display: flex;
            justify-content: space-between;
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 316
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 320
        yield "
    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"mt-3\">
                ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 325));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 326
            yield "                    <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        <strong>";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        yield "                <!-- Vu du profil -->
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb px-0\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 336
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
                        <li class=\"breadcrumb-item\">
                            <a target=\"_blank\"
                               href=\"";
        // line 339
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 339, $this->source); })()), "categorieParent", [], "any", false, false, false, 339)) == "produits")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 339, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 339), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 340, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 340), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 341
        yield "\">";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "request", [], "any", false, false, false, 341), "locale", [], "any", false, false, false, 341) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 341, $this->source); })()), "categorie_parent_en", [], "any", false, false, false, 341) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 341, $this->source); })()), "categorie_parent_en", [], "any", false, false, false, 341), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 341, $this->source); })()), "categorieParent", [], "any", false, false, false, 341), "html", null, true);
        }
        yield "</a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a target=\"_blank\"
                               href=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 345, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 345), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 345, $this->source); })()), "sousCategorieSlug", [], "any", false, false, false, 345), "code_postal_ville" => ""]), "html", null, true);
        yield "\">";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 345, $this->source); })()), "request", [], "any", false, false, false, 345), "locale", [], "any", false, false, false, 345) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 345, $this->source); })()), "categorie_en", [], "any", false, false, false, 345) != ""))) {
            // line 346
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 346, $this->source); })()), "categorie_en", [], "any", false, false, false, 346), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 346, $this->source); })()), "sousCategorie", [], "any", false, false, false, 346), "html", null, true);
        }
        yield "</a>
                        </li>
                    </ol>
                </nav>
                <div id=\"lectureInfo\" class=\"row\">
                    <div class=\"col-md-3 desktop-form\">
                        <div>
                            <h5 class=\"border-bottom pb-3\">
                                ";
        // line 354
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 354, $this->source); })()), "prix", [], "any", false, false, false, 354))) {
            // line 355
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 355, $this->source); })()), "prix", [], "any", false, false, false, 355), "html", null, true);
            yield "
                                ";
        } else {
            // line 357
            yield "                                    0
                                ";
        }
        // line 359
        yield "                                ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 359, $this->source); })()), "devise", [], "any", false, false, false, 359))) {
            // line 360
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 360, $this->source); })()), "devise", [], "any", false, false, false, 360), "metaValue", [], "any", false, false, false, 360), "html", null, true);
        } else {
            yield "€
                                ";
        }
        // line 362
        yield "                            </h5>
                            <h6 class=\"mt-4 mb-2\" ";
        // line 363
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 363, $this->source); })()), "categorieParentType", [], "any", false, false, false, 363) != "product_cat")) {
            yield " hidden ";
        }
        yield ">
                                <i class=\"fas fa-calendar\"></i>
                                ";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.disponibilites"), "html", null, true);
        yield "
                            </h6>
                            <p class=\"fs-14\" ";
        // line 367
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 367, $this->source); })()), "categorieParentType", [], "any", false, false, false, 367) != "product_cat")) {
            yield " hidden ";
        }
        yield ">
                                Sélectionner les dates de prestations souhaitées pour finaliser votre reservation.
                                <span class=\"calendar_infos\" data-html=\"true\" data-container=\"body\"
                                      data-toggle=\"popover2\" data-placement=\"top\" data-content=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:rgb(0, 82, 204);\"
                                                   class=\"fas fa-question-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
                            </p>
                            <form action=\"\">
                                <div class=\"multipleDatePicker md-form\" ";
        // line 376
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 376, $this->source); })()), "categorieParentType", [], "any", false, false, false, 376) != "product_cat")) {
            // line 377
            yield "hidden";
        }
        yield " value='' type='text'>
                                    <input type='hidden' class='DateField' value=''>
                                </div>
                                ";
        // line 380
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 380, $this->source); })()), "categorieParentType", [], "any", false, false, false, 380) != "product_cat")) {
            // line 381
            yield "                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <label for=\"product_quantity\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.quantite"), "html", null, true);
            yield "</label>
                                            <select class=\"form-control\" id=\"product_quantity\" name=\"product_quantity\">
                                                <option selected>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                    </div>
                                ";
        }
        // line 399
        yield "                                <div class=\"col-md-12 md-form\">
                                    <p id=\"price\" ";
        // line 400
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 400, $this->source); })()), "categorieParentType", [], "any", false, false, false, 400) != "product_cat")) {
            yield " hidden ";
        }
        yield ">
                                        ";
        // line 401
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["datep"]) || array_key_exists("datep", $context) ? $context["datep"] : (function () { throw new RuntimeError('Variable "datep" does not exist.', 401, $this->source); })())) > 0)) {
            // line 402
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["datep"]) || array_key_exists("datep", $context) ? $context["datep"] : (function () { throw new RuntimeError('Variable "datep" does not exist.', 402, $this->source); })())), "html", null, true);
            yield "x";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 402, $this->source); })()), "prix", [], "any", false, false, false, 402), "html", null, true);
            yield "=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["datep"]) || array_key_exists("datep", $context) ? $context["datep"] : (function () { throw new RuntimeError('Variable "datep" does not exist.', 402, $this->source); })())) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 402, $this->source); })()), "prix", [], "any", false, false, false, 402)), "html", null, true);
            yield "
                                            ";
            // line 403
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 403, $this->source); })()), "devise", [], "any", false, false, false, 403))) {
                // line 404
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 404, $this->source); })()), "devise", [], "any", false, false, false, 404), "metaValue", [], "any", false, false, false, 404), "html", null, true);
            } else {
                yield "€
                                            ";
            }
            // line 406
            yield "                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 406, $this->source); })()), "categorieParentType", [], "any", false, false, false, 406) != "product_cat")) {
            // line 407
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 407, $this->source); })()), "prix", [], "any", false, false, false, 407), "html", null, true);
            yield "
                                            ";
            // line 408
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 408, $this->source); })()), "devise", [], "any", false, false, false, 408))) {
                // line 409
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 409, $this->source); })()), "devise", [], "any", false, false, false, 409), "metaValue", [], "any", false, false, false, 409), "html", null, true);
            } else {
                yield "€
                                            ";
            }
            // line 411
            yield "                                        ";
        }
        // line 412
        yield "                                    </p>
                                    <button id=\"enregDates\" ";
        // line 413
        if ((((isset($context["rupture"]) || array_key_exists("rupture", $context) ? $context["rupture"] : (function () { throw new RuntimeError('Variable "rupture" does not exist.', 413, $this->source); })()) == 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 413, $this->source); })()), "categorieParentType", [], "any", false, false, false, 413) != "product_cat"))) {
            // line 414
            yield "disabled";
        }
        yield " class=\"btn btn-md btn-primary text-center\"
                                            type=\"submit\">
                                        ";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.ajouter-panier"), "html", null, true);
        yield "
                                    </button>
                                    ";
        // line 418
        if ((((isset($context["rupture"]) || array_key_exists("rupture", $context) ? $context["rupture"] : (function () { throw new RuntimeError('Variable "rupture" does not exist.', 418, $this->source); })()) == 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 418, $this->source); })()), "categorieParentType", [], "any", false, false, false, 418) != "product_cat"))) {
            // line 419
            yield "                                        <span id=\"rupture\" class=\"btn btn-md btn-warning text-center\">
\t\t\t\t\t\t\t\t\t";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.rupture"), "html", null, true);
            yield "</span>
                                    ";
        }
        // line 422
        yield "                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <h1 class=\"pb-3 border-bottom\" style=\"text-transform: uppercase; font-size: 1.7rem\">
                            ";
        // line 428
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "request", [], "any", false, false, false, 428), "locale", [], "any", false, false, false, 428) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 428, $this->source); })()), "titre_en", [], "any", false, false, false, 428) != ""))) {
            // line 429
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 429, $this->source); })()), "titre_en", [], "any", false, false, false, 429), "html", null, true);
        } else {
            // line 430
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 430, $this->source); })()), "post_title", [], "any", false, false, false, 430), "html", null, true);
        }
        // line 431
        yield "                        </h1>

                        <div class=\"row\">
                            <!-- Carousel slider for portfolio -->
                            <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                                <div class=\"owl-carousel owl-theme\">
                                    ";
        // line 437
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 437, $this->source); })()), "gallery", [], "any", false, false, false, 437))) {
            // line 438
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 438, $this->source); })()), "gallery", [], "any", false, false, false, 438));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 439
                yield "                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\"
                                                     data-src=\"";
                // line 441
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "guid", [], "any", false, false, false, 441), ["www." => ""]), "html", null, true);
                yield "\"></div>
                                                <div class=\"btnh1-display\">
                                                    <button class=\"btn-wish btnh1\" data-id=\"";
                // line 443
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 443, $this->source); })()), "id", [], "any", false, false, false, 443), "html", null, true);
                yield "\">
                                                        ";
                // line 444
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 444, $this->source); })()), "id", [], "any", false, false, false, 444), (isset($context["text_wishlist"]) || array_key_exists("text_wishlist", $context) ? $context["text_wishlist"] : (function () { throw new RuntimeError('Variable "text_wishlist" does not exist.', 444, $this->source); })()))) {
                    yield "<i
                                                                style=\"color: red;\" class=\"fas fa-heart\"></i> ";
                } else {
                    // line 446
                    yield "                                                            <i class=\"wish-heart far fa-heart\"></i> ";
                }
                yield "</button>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            yield "                                    ";
        }
        // line 451
        yield "                                    ";
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 451, $this->source); })()), "images_secondaires", [], "any", false, false, false, 451))) {
            // line 452
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 452, $this->source); })()), "images_secondaires", [], "any", false, false, false, 452));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 453
                yield "                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\"
                                                     data-src=\"";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "guid", [], "any", false, false, false, 455), ["www." => ""]), "html", null, true);
                yield "\"></div>
                                                <div class=\"btnh1-display\">
                                                    <button class=\"btn-wish btnh1\" data-id=\"";
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 457, $this->source); })()), "id", [], "any", false, false, false, 457), "html", null, true);
                yield "\">
                                                        ";
                // line 458
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 458, $this->source); })()), "id", [], "any", false, false, false, 458), (isset($context["text_wishlist"]) || array_key_exists("text_wishlist", $context) ? $context["text_wishlist"] : (function () { throw new RuntimeError('Variable "text_wishlist" does not exist.', 458, $this->source); })()))) {
                    yield "<i
                                                                style=\"color: red;\" class=\"fas fa-heart\"></i> ";
                } else {
                    // line 460
                    yield "                                                            <i class=\"far fa-heart\"></i> ";
                }
                yield "</button>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 464
            yield "                                    ";
        }
        // line 465
        yield "                                </div>

                                <h2 class=\"mt-4 mb-2\" style=\"font-size: 1.5rem\">
                                    ";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.caracteristiques"), "html", null, true);
        yield "
                                </h2>
                                <div class=\"container\">
                                    <div class=\"row py-2 px-2 xtic-box\">
                                        <div class=\"col-md-6\">
                                            <p class=\"x-info ref fs-14\">
                                                <strong>Ref: ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 474, $this->source); })()), "id", [], "any", false, false, false, 474), "html", null, true);
        yield "</strong>
                                            </p>
                                            <p>
                                                <a class=\"x-info fs-18\"
                                                   href=\"";
        // line 478
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 478, $this->source); })()), "categorieParent", [], "any", false, false, false, 478)) == "produits")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 478, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 478), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 479, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 479), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 480
        yield "\"><strong>";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 480, $this->source); })()), "request", [], "any", false, false, false, 480), "locale", [], "any", false, false, false, 480) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 480, $this->source); })()), "categorie_parent_en", [], "any", false, false, false, 480) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 480, $this->source); })()), "categorie_parent_en", [], "any", false, false, false, 480), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 480, $this->source); })()), "categorieParent", [], "any", false, false, false, 480), "html", null, true);
        }
        yield "</strong>
                                                </a>
                                            </p>
                                            <p>
                                                <a class=\"x-info fs-18\"
                                                   href=\"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 485, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 485), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 485, $this->source); })()), "sousCategorieSlug", [], "any", false, false, false, 485), "code_postal_ville" => ""]), "html", null, true);
        yield "\">
                                                    <strong>";
        // line 486
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 486, $this->source); })()), "request", [], "any", false, false, false, 486), "locale", [], "any", false, false, false, 486) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 486, $this->source); })()), "categorie_en", [], "any", false, false, false, 486) != ""))) {
            // line 488
            yield "                                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 488, $this->source); })()), "categorie_en", [], "any", false, false, false, 488), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 488, $this->source); })()), "sousCategorie", [], "any", false, false, false, 488), "html", null, true);
        }
        yield "</strong>
                                                </a>
                                            </p>
                                            <p class=\"x-info fs-14\">
                                                <strong>
                                                    <i class=\"fas fa-map-marker\"></i>
                                                    ";
        // line 494
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 494, $this->source); })()), "codePostal", [], "any", false, false, false, 494))) {
            // line 495
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 495, $this->source); })()), "codePostal", [], "any", false, false, false, 495), "html", null, true);
            yield "
                                                    ";
        }
        // line 497
        yield "                                                    ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 497, $this->source); })()), "ville", [], "any", false, false, false, 497))) {
            // line 498
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 498, $this->source); })()), "ville", [], "any", false, false, false, 498), "html", null, true);
            yield "
                                                    ";
        }
        // line 500
        yield "                                                    ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 500, $this->source); })()), "pays", [], "any", false, false, false, 500))) {
            // line 501
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 501, $this->source); })()), "pays", [], "any", false, false, false, 501)), "html", null, true);
            yield "
                                                    ";
        }
        // line 503
        yield "                                                </strong>
                                            </p>
                                            <p class=\"x-info fs-14\">
                                                ";
        // line 506
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 506, $this->source); })()), "categorieParent", [], "any", false, false, false, 506) == "product_cat")) {
            // line 507
            yield "                                                    <strong>
                                                        <i class=\"fas fa-calendar\"></i>
                                                        (";
            // line 509
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 509, $this->source); })()), "calendrier", [], "any", false, false, false, 509)), "html", null, true);
            yield "
                                                        -
                                                        ";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 511, $this->source); })()), "calendrier", [], "any", false, false, false, 511)), "html", null, true);
            yield "
                                                        )
                                                        ";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 513, $this->source); })()), "calendrier", [], "any", false, false, false, 513)), "html", null, true);
            yield "
                                                        ";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.dates-disponibles"), "html", null, true);
            yield "
                                                    </strong>
                                                ";
        }
        // line 517
        yield "                                            </p>
                                        </div>
                                        <div class=\"col-md-6 text-right\">
                                            <div class=\"row bloc-nom-commercial\">
                                                <div class=\"content\">
                                                    <!-- Your content goes here -->
                                                </div>
                                                <img class=\"img-fluid rounded-circle float-right\" width=\"100% \\9\"
                                                     src=\"";
        // line 525
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 525, $this->source); })()), "avatar", [], "any", false, false, false, 525) != null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 525, $this->source); })()), "avatar", [], "any", false, false, false, 525)), ["www." => ""]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
        }
        yield "\"
                                                     alt=\"";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 526, $this->source); })()), "first_name", [], "any", false, false, false, 526), "html", null, true);
        yield "\">
                                            </div>
                                            <p><a class=\"x-info fs-18 mt-2\" href=\"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 528, $this->source); })()), "nom_commercial", [], "any", false, false, false, 528), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 528, $this->source); })()), "post_author", [], "any", false, false, false, 528)]), "html", null, true);
        yield "\"><strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 528, $this->source); })()), "nom_commercial", [], "any", false, false, false, 528), "html", null, true);
        yield "</strong></a></p>

                                            ";
        // line 533
        yield "                                            <p class=\"x-info ref fs-14\">
                                                ";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.publie-le"), "html", null, true);
        yield "
                                                ";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 535, $this->source); })()), "post_date", [], "any", false, false, false, 535), "html", null, true);
        yield "
                                                ";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.maj-le"), "html", null, true);
        yield "
                                                ";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 537, $this->source); })()), "post_modified", [], "any", false, false, false, 537), "html", null, true);
        yield "
                                            </p>
                                        </div>
                                        <div class=\"row\" style=\"width: 100%;\">
                                            <div class=\"col-md-12 my-1 pull-right button_profil_sendmsg\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"popover_infos\" data-html=\"true\" data-container=\"body\"
                                                  data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:rgb(0, 82, 204);\"
                                                   class=\"fas fa-question-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <a target=\"_blank\"
                                                   href=\"";
        // line 548
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 548, $this->source); })()), "post_author", [], "any", false, false, false, 548))]), "html", null, true);
        yield "\"
                                                   class=\"btn btn-sm btn-primary\">
                                                    ";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.details-profil"), "html", null, true);
        yield "</a>
                                                <a target=\"_blank\"
                                                   href=\"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_chat", ["destinataire" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 552, $this->source); })()), "post_author", [], "any", false, false, false, 552)]), "html", null, true);
        yield "\"
                                                   class=\"btn btn-sm btn-primary\">
                                                    ";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.envoyer-message"), "html", null, true);
        yield "</a>
                                                ";
        // line 555
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "user", [], "any", false, false, false, 555)) {
            // line 556
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 556, $this->source); })()), "user", [], "any", false, false, false, 556), "id", [], "any", false, false, false, 556) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 556, $this->source); })()), "post_author", [], "any", false, false, false, 556))) {
                // line 557
                yield "                                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_deleteAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 557, $this->source); })()), "id", [], "any", false, false, false, 557)]), "html", null, true);
                yield "\"
                                                           tabindex=\"0\"
                                                           class=\"btn btn-sm btn-primary deleteAnnounce\">";
                // line 559
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.supprimer-annonce"), "html", null, true);
                yield "</a>
                                                    ";
            }
            // line 561
            yield "                                                ";
        }
        // line 562
        yield "                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 mt-4\">
                                    <div class=\"mobile-form\">

                                    </div>
                                    ";
        // line 576
        yield "                                    <div class=\"\">
                                        ";
        // line 577
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 577, $this->source); })()), "request", [], "any", false, false, false, 577), "locale", [], "any", false, false, false, 577) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 577, $this->source); })()), "content_en", [], "any", false, false, false, 577) != ""))) {
            // line 578
            yield "                                            ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 578, $this->source); })()), "content_en", [], "any", false, false, false, 578);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 578, $this->source); })()), "post_content", [], "any", false, false, false, 578);
            yield "
                                        ";
        }
        // line 580
        yield "                                    </div>
                                </div>
                                <!-- Videos -->
                                ";
        // line 583
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 583, $this->source); })()), "livraison", [], "any", false, false, false, 583) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 583, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 583) == "produits"))) {
            // line 584
            yield "                                    <div id=\"mesVideos\" class=\"col-md-12 mt-4\">
                                        <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">Modes de livraison</h2>
                                        <div class=\"row modes\">
                                            <div class=\"col-md-6 mode mode1\" style=\"display: flex;margin-bottom: 3rem;\">
                                                <img src=\"";
            // line 588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/livraison-standard.svg"), "html", null, true);
            yield "\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-livraison-standard"), "html", null, true);
            yield "</h5>
                                                    <p>";
            // line 592
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-livraison-standard"), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode2\" style=\"display: flex;margin-bottom: 3rem;\">
                                                <img src=\"";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/livraison-prioritaire.svg"), "html", null, true);
            yield "\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-livraison-prioritaire"), "html", null, true);
            yield "</h5>
                                                    <p>";
            // line 600
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-livraison-prioritaire"), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode3\" style=\"display: flex;\">
                                                <img src=\"";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/livraison-express.svg"), "html", null, true);
            yield "\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-livraison-express"), "html", null, true);
            yield "</h5>
                                                    <p>";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-livraison-express"), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode4\">
                                                <p style=\"margin-bottom: 0.5rem;\"><span
                                                            style=\"font-weight: bold;font-size: 0.8rem;\">";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-infos"), "html", null, true);
            yield "</span>
                                                    <span>01 85 42 14 91</span></p>
                                                <a target=\"_blank\"
                                                   href=\"";
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => "aide", "id" => "modes-de-livraison"]), "html", null, true);
            yield "\"
                                                   style=\"color: black;text-decoration: underline;\">";
            // line 617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-infos"), "html", null, true);
            yield "</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 622
        yield "
                                <!-- Videos -->
                                <!-- Videos -->
                                <div id=\"mesVideos\" class=\"col-md-12 mt-4\">
                                    <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">
                                        ";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.videos"), "html", null, true);
        yield "</h2>
                                    <div class=\"owl-carousel owl-theme\">
                                        ";
        // line 629
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 629, $this->source); })()), "videos", [], "any", false, false, false, 629));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 630
            yield "                                            <div class=\"item-video\" data-merge=\"3\">
                                                <a class=\"owl-video\"
                                                   href=\"https://www.youtube.com/embed/";
            // line 632
            if (($context["a"] != " ")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["a"], "html", null, true);
            }
            yield "\"></a>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 635
        yield "                                    </div>
                                </div>
                                <!-- Videos -->
                                <div class=\"col-md-12 mt-4\">
                                    <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 639, $this->source); })()), "commentaires", [], "any", false, false, false, 639)), "html", null, true);
        yield "
                                        ";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.commentaires"), "html", null, true);
        yield "
                                    </h2>
                                    <div class=\"container\">
                                        ";
        // line 644
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 644, $this->source); })()), "commentaires", [], "any", false, false, false, 644));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 645
            yield "                                            <div class=\"row xtic-box py-2 rounded mb-2\">
                                                <div class=\"col-md-2 pt-2 text-center\">
                                                    <center>
                                                        <img class=\"img-fluid rounded-circle\" width=\"100% \\9\"
                                                             src=\"";
            // line 649
            if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "avatar", [], "any", false, false, false, 649)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "avatar", [], "any", false, false, false, 649)), "html", null, true);
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            }
            yield "\"
                                                             alt=\"";
            // line 650
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_author", [], "any", false, false, false, 650), "html", null, true);
            yield "\">
                                                    </center>
                                                    <p class=\"x-info ref-comment fs-14\">
                                                        <strong>
                                                            <a href=\"#\" target=\"_blank\">";
            // line 654
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_author", [], "any", false, false, false, 654), "html", null, true);
            yield "</a>
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div class=\"col-md-10\">
                                                    <p class=\"x-info ref-comment fs-14\">
                                                        ";
            // line 660
            yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_content", [], "any", false, false, false, 660);
            yield "<br>
                                                        ";
            // line 661
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_date", [], "any", false, false, false, 661), "d-m-Y h:i"), "html", null, true);
            yield "
                                                    </p>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 666
        yield "                                    </div>
                                    <div class=\"col-md-12 mt-4\" style=\"padding: 0;\">
                                        <h3 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem;\">
                                            ";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.ajouter-commentaire"), "html", null, true);
        yield "</h3>
                                        <form action=\"";
        // line 670
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_addAnnounceComment");
        yield "\"
                                              id=\"addAnnounceComment\"
                                              method=\"post\">
                                            <input hidden name=\"postId\" value=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 673, $this->source); })()), "id", [], "any", false, false, false, 673), "html", null, true);
        yield "\"/>
                                            <textarea id=\"comment-text\" name=\"comment-box\" class=\"comment-box form-control\" rows=\"10\"></textarea>
                                            <button class=\"btn btn-md btn-primary addComment ";
        // line 675
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 675, $this->source); })()), "user", [], "any", false, false, false, 675)) {
            yield "disabled";
        }
        yield "\"
                                                    id=\"enregPasse\" type=\"submit\" style=\"margin: 0;margin-top: 3em;\">
                                                ";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.publier"), "html", null, true);
        yield "
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Vu du profil -->
                    </div>
                    <div class=\"col-md-12\">
                        <h3 style=\"margin-top: 2rem;\">Explorez notre univers</h3>
                        <p class=\"x-info fs-14\">Complétez l'offre ou contactez-nous si besoin</p>
                        <div class=\"col-md-12\" style=\"padding: 0;\">
                            <div id=\"news-slider\" class=\"\">
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-photograph overlay lazy carroussel_image\"
                                             data-src=\"";
        // line 694
        if ((isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 694, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 694, $this->source); })()), "optionValue", [], "any", false, false, false, 694), "|||"), 1, [], "array", false, false, false, 694), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-photo.jpg"), "html", null, true);
        }
        yield "\">
                                            <a href=\"";
        // line 695
        if ((isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 695, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 695, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 695) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 695, $this->source); })()), "optionValue", [], "any", false, false, false, 695), "|||"), 0, [], "array", false, false, false, 695))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 695), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "photographe", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.photographe"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-musicien overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 703
        if ((isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 703, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 703, $this->source); })()), "optionValue", [], "any", false, false, false, 703), "|||"), 1, [], "array", false, false, false, 703), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-musicien.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 704
        if ((isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 704, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 704, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 704) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 704, $this->source); })()), "optionValue", [], "any", false, false, false, 704), "|||"), 0, [], "array", false, false, false, 704))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 704), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "musiciens", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.musicien"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-prod-musicale overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 712
        if ((isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 712, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 712, $this->source); })()), "optionValue", [], "any", false, false, false, 712), "|||"), 1, [], "array", false, false, false, 712), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-production-musicale.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 713
        if ((isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 713, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 713, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 713) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 713, $this->source); })()), "optionValue", [], "any", false, false, false, 713), "|||"), 0, [], "array", false, false, false, 713))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 713), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-denregistrement", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-enregistrement"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-grp-d-musiq overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 721
        if ((isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 721, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 721, $this->source); })()), "optionValue", [], "any", false, false, false, 721), "|||"), 1, [], "array", false, false, false, 721), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-group-music.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 722
        if ((isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 722, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 722, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 722) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 722, $this->source); })()), "optionValue", [], "any", false, false, false, 722), "|||"), 0, [], "array", false, false, false, 722))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 722), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "groupes-de-musique", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.groupe-de-musique"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <div class=\"box-prestation box-chorale overlay lazy carroussel_image\"
                                         style=\"background-image: url(";
        // line 729
        if ((isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 729, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 729, $this->source); })()), "optionValue", [], "any", false, false, false, 729), "|||"), 1, [], "array", false, false, false, 729), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-chorale.jpg"), "html", null, true);
        }
        yield ");\">
                                        <a href=\"";
        // line 730
        if ((isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 730, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 730, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 730) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 730, $this->source); })()), "optionValue", [], "any", false, false, false, 730), "|||"), 0, [], "array", false, false, false, 730))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 730), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "chorale-gospel", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                           class=\"prestation-link lazyload\">";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.chorale"), "html", null, true);
        yield "</a>
                                    </div>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-stud-photo overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 737
        if ((isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 737, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 737, $this->source); })()), "optionValue", [], "any", false, false, false, 737), "|||"), 1, [], "array", false, false, false, 737), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-stud-photo.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 738
        if ((isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 738, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 738, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 738) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 738, $this->source); })()), "optionValue", [], "any", false, false, false, 738), "|||"), 0, [], "array", false, false, false, 738))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 738), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-photo", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-photo"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-realisation-vid overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 746
        if ((isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 746, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 746, $this->source); })()), "optionValue", [], "any", false, false, false, 746), "|||"), 1, [], "array", false, false, false, 746), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-realisation-vid.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 747
        if ((isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 747, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 747, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 747) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 747, $this->source); })()), "optionValue", [], "any", false, false, false, 747), "|||"), 0, [], "array", false, false, false, 747))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 747), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "realisation-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link\">";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.realisation-video"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-evenementiels overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 755
        if ((isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 755, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 755, $this->source); })()), "optionValue", [], "any", false, false, false, 755), "|||"), 1, [], "array", false, false, false, 755), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-evenementiels.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 756
        if ((isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 756, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 756, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 756) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 756, $this->source); })()), "optionValue", [], "any", false, false, false, 756), "|||"), 0, [], "array", false, false, false, 756))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 756), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "evenementiels", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link\">";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.evenementiel"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-stud-vid overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 764
        if ((isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 764, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 764, $this->source); })()), "optionValue", [], "any", false, false, false, 764), "|||"), 1, [], "array", false, false, false, 764), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-studio-video.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 765
        if ((isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 765, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 765, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 765) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 765, $this->source); })()), "optionValue", [], "any", false, false, false, 765), "|||"), 0, [], "array", false, false, false, 765))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 765), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-video"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 774
        yield from $this->loadTemplate("partials/project.html.twig", "annonces/details.html.twig", 774)->unwrap()->yield($context);
        // line 775
        yield "                ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "annonces/details.html.twig", 775)->unwrap()->yield($context);
        // line 776
        yield "    </main>
    <!--Main Layout-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 779
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 780
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 782
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 783
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 786
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    ";
        // line 790
        yield "    <script src=\"//cdn.ckeditor.com/4.13.0/standard/ckeditor.js\"></script>
    <script type=\"text/javascript\" src='";
        // line 791
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <script src=\"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"
            integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script> -->
    <!-- Bootstrap Toggle switch -->
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

    <script>
        \$(document).ready(function () {

            if (\$(window).width() < 768) {
                \$('.desktop-form div').appendTo('.mobile-form');
            }
            window.onresize = function (event) {
                if (\$(window).width() < 768) {
                    \$('.desktop-form div').appendTo('.mobile-form');
                } else if (\$(window).width() > 768) {
                    \$('.mobile-form div').appendTo('.desktop-form');
                }
            };

            \$(function () {
                let infos_bulle = `";
        // line 824
        if ((array_key_exists("infos_bulle", $context) && (isset($context["infos_bulle"]) || array_key_exists("infos_bulle", $context) ? $context["infos_bulle"] : (function () { throw new RuntimeError('Variable "infos_bulle" does not exist.', 824, $this->source); })()))) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["infos_bulle"]) || array_key_exists("infos_bulle", $context) ? $context["infos_bulle"] : (function () { throw new RuntimeError('Variable "infos_bulle" does not exist.', 824, $this->source); })()), "optionValue", [], "any", false, false, false, 824);
        }
        yield "`;
                \$('.popover_infos').data('content', infos_bulle);
                \$('[data-toggle=\"popover\"]').popover();


                let calendar_infos = `";
        // line 829
        if ((array_key_exists("calendar_infos", $context) && (isset($context["calendar_infos"]) || array_key_exists("calendar_infos", $context) ? $context["calendar_infos"] : (function () { throw new RuntimeError('Variable "calendar_infos" does not exist.', 829, $this->source); })()))) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_infos"]) || array_key_exists("calendar_infos", $context) ? $context["calendar_infos"] : (function () { throw new RuntimeError('Variable "calendar_infos" does not exist.', 829, $this->source); })()), "optionValue", [], "any", false, false, false, 829);
        }
        yield "`;
                \$('.calendar_infos').data('content', calendar_infos);
                \$('[data-toggle=\"popover2\"]').popover();
            })

            tinymce.init({
                selector: 'textarea#comment-text',
                height: 350,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,
                language: 'fr_FR'
            });

            var docWidth = document.documentElement.offsetWidth;
            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });
            // Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });
            // multiple datepicker setup


            // little function to return available dates to calender
            let dateDipo = [];
            let dates = \"\";
            let exist = ";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["datep"]) || array_key_exists("datep", $context) ? $context["datep"] : (function () { throw new RuntimeError('Variable "datep" does not exist.', 865, $this->source); })())), "html", null, true);
        yield "; // si l'annonce courante est deja dans le panier
            let prix = 0;
            let devise = ";
        // line 867
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 867, $this->source); })()), "devise", [], "any", false, false, false, 867))) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 867, $this->source); })()), "devise", [], "any", false, false, false, 867), "metaValue", [], "any", false, false, false, 867), "html", null, true);
            yield "\"";
        } else {
            yield " '€'";
        }
        yield ";
            ";
        // line 868
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 868, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["d1"]) {
            yield "dateDipo[dateDipo.length] = '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d1"], "html", null, true);
            yield "'; ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 869
        yield "            let nombreJour = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["datep"]) || array_key_exists("datep", $context) ? $context["datep"] : (function () { throw new RuntimeError('Variable "datep" does not exist.', 869, $this->source); })())), "html", null, true);
        yield "\";

            \$(\".multipleDatePicker\").datepicker({
                multidate: true,
                format: 'dd-mm-yyyy',
                startDate: '";
        // line 874
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 874, $this->source); })()), "d-m-Y", false), "html", null, true);
        yield "',
                endDate: '";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 875, $this->source); })()), "+1 year"), "d-m-Y", false), "html", null, true);
        yield "',
                beforeShowDay: function (d) {
                    let dat = formatDate(d);
                    console.log(dat);
                    let rep = false;
                    if (dateDipo.includes(dat)) {
                        rep = {
                            true: true,
                            tooltip: 'Disponible',
                            classes: 'jr-dispo'
                        };
                    }
                    return rep;
                }
            }).on('changeDate', function (e) {
                let dateTime = \$(\".multipleDatePicker\").datepicker(\"getDates\");
                nombreJour = dateTime.length;
                let p2 = '";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 892, $this->source); })()), "prix", [], "any", false, false, false, 892), "html", null, true);
        yield "';
                let p3 = p2.match(/[0-9,.]*/);
                if (p3 !== null) {
                    var amount2 = parseFloat(p3[0].replace(/,/g, '')); // replace , thousands separator
                }
                prix = nombreJour * amount2;
                if (nombreJour > 0) {
                    \$('#price').html(nombreJour + \"x\" + '";
        // line 899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 899, $this->source); })()), "prix", [], "any", false, false, false, 899), "html", null, true);
        yield "' + '=' + prix + ' ' + devise);
                } else {
                    \$('#price').html('');
                }
            });

            function padTo2Digits(num) {
                return num.toString().padStart(2, '0');
            }

            function formatDate(date) {
                return [
                    padTo2Digits(date.getDate()),
                    padTo2Digits(date.getMonth() + 1),
                    date.getFullYear(),
                ].join('-');
            }

            \$('.multipleDatePicker').datepicker('update', ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datep"]) || array_key_exists("datep", $context) ? $context["datep"] : (function () { throw new RuntimeError('Variable "datep" does not exist.', 917, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d"], "html", null, true);
            yield "', ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ");
            function arrayRemove(arr, value) {
                return arr.filter(function (ele) {
                    return ele != value;
                });
            }

            // start portfolio/video slider
            // Portfolio owlcarousel
            \$('#monPortfolio .owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                lazyLoad: true,
                loop: false,
                rewind: true,
                margin: 10,
                merge: true
            });
            // Video owlcarousel
            \$('#mesVideos .owl-carousel').owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                nav: true,
                video: true,
                lazyLoad: false,
                center: true
            });


            \$('#news-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 3,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: \"unslick\"
                    // instead of a settings object
                ]
            });
            // \$(\"#news-slider\").owlCarousel({
            // \titems: 3,
            // \titemsDesktop: [
            // \t\t1199, 3
            // \t],
            // \titemsDesktopSmall: [
            // \t\t980, 2
            // \t],
            // \titemsMobile: [
            // \t\t600, 1
            // \t],
            // \tnavigation: true,
            // \tnavigationText: [
            // \t\t\"\", \"\"
            // \t],
            // \tpagination: true,
            // \tautoPlay: true
            // });


            \$(document).on('click', '#enregDates', function (e) {// On empeche le navigateur de soumettre le formulaire
                e.preventDefault();
                let d = \$(\".multipleDatePicker\").datepicker(\"getDates\");
                let alldates = [];
                for (let i = 0; i < d.length; i++) {
                    let dateTime = new Date(d[i]);
                    let date = formatDate(dateTime);
                    alldates[alldates.length] = date;
                }
                dates += alldates.join('|');

                let adresse = \"";
        // line 1016
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1016, $this->source); })()), "ville", [], "any", false, false, false, 1016))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1016, $this->source); })()), "ville", [], "any", false, false, false, 1016), "html", null, true);
        }
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1016, $this->source); })()), "etat", [], "any", false, false, false, 1016))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1016, $this->source); })()), "etat", [], "any", false, false, false, 1016), "html", null, true);
        }
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1016, $this->source); })()), "pays", [], "any", false, false, false, 1016))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1016, $this->source); })()), "pays", [], "any", false, false, false, 1016)), "html", null, true);
        }
        yield "\";
                let image = '";
        // line 1017
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1017, $this->source); })()), "gallery", [], "any", false, false, false, 1017))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1017, $this->source); })()), "gallery", [], "any", false, false, false, 1017), 0, [], "any", false, false, false, 1017), "guid", [], "any", false, false, false, 1017), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1017, $this->source); })()), "images_secondaires", [], "any", false, false, false, 1017))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1017, $this->source); })()), "images_secondaires", [], "any", false, false, false, 1017), 0, [], "any", false, false, false, 1017), "guid", [], "any", false, false, false, 1017), "html", null, true);
        }
        yield "';
                let email = '";
        // line 1018
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1018, $this->source); })()), "email", [], "any", false, false, false, 1018), "html", null, true);
        yield "';
                let p = '";
        // line 1019
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1019, $this->source); })()), "prix", [], "any", false, false, false, 1019), "html", null, true);
        yield "';
                let categorieParent = \"";
        // line 1020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1020, $this->source); })()), "categorieParentType", [], "any", false, false, false, 1020), "html", null, true);
        yield "\";
                let match = p.match(/[0-9,.]*/);
                let nombreJour = 0;
                let amount = 0;
                if (match !== null) {
                    amount = parseFloat(match[0].replace(/,/g, '')); // replace , thousands separator
                }
                if (categorieParent != 'product_cat') {
                    nombreJour = \$('#product_quantity').val();
                } else {
                    nombreJour = d.length;
                }

                let livraison = '";
        // line 1033
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1033, $this->source); })()), "livraison", [], "any", false, false, false, 1033), "html", null, true);
        yield "';
                let url1 = \"";
        // line 1034
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_panier");
        yield "\" + '?id=' + '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1034, $this->source); })()), "id", [], "any", false, false, false, 1034), "html", null, true);
        yield "' +
                    '&prixu=' + amount + '&userId=' + '";
        // line 1035
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1035, $this->source); })()), "post_author", [], "any", false, false, false, 1035), "html", null, true);
        yield "' +
                    '&qte=' + nombreJour + '&dates=' + dates +
                    '&libelle=' + '";
        // line 1037
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1037, $this->source); })()), "post_title", [], "any", false, false, false, 1037), "html", null, true);
        yield "' + '&image=' + image + '&adresse=' + adresse +
                    '&email=' + email + '&devise=' + devise + '&name=' + '";
        // line 1038
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1038, $this->source); })()), "post_name", [], "any", false, false, false, 1038), "html", null, true);
        yield "' +
                    '&categorie=' + '";
        // line 1039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1039, $this->source); })()), "categorieParentSlug", [], "any", false, false, false, 1039), "html", null, true);
        yield "' + '&sousCategorie=' + '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1039, $this->source); })()), "sousCategorieSlug", [], "any", false, false, false, 1039), "html", null, true);
        yield "' +
                    '&livraison=' + livraison + '&etat=' + '";
        // line 1040
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 1040, $this->source); })()), "html", null, true);
        yield "';


                if (nombreJour > 0) {
                    toastr.info('Ajout au panier en cours...');
                    \$.ajax({
                        url: url1,
                        type: 'get',
                        success: function (response) {
                            toastr.clear();
                            toastr.success('Annonce ajoutée au panier!');
                            if (exist == 0) {
                                \$('#panier').html(";
        // line 1052
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1052, $this->source); })()), "session", [], "any", false, false, false, 1052), "get", ["taille"], "method", false, false, false, 1052), "html", null, true);
        yield " +1);
                            }
                            window.location = \"";
        // line 1054
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsAnnonce"]) || array_key_exists("detailsAnnonce", $context) ? $context["detailsAnnonce"] : (function () { throw new RuntimeError('Variable "detailsAnnonce" does not exist.', 1054, $this->source); })()), "post_name", [], "any", false, false, false, 1054)]), "html", null, true);
        yield "\";
                        },
                        error: function (response) {
                            toastr.clear();
                            toastr.error('Erreur lors de l\\'ajout');
                        }
                    });
                } else {
                    toastr.info('Veuillez selectionner une date disponible');
                }
            });

            // Hambuger menu icon
            \$('.animated-button-icon').on('click', function () {
                \$('.animated-icon2').toggleClass('open');
            });
            // first thing turn Hide Menu Search bar
            \$(\"#searchMenu\").hide();
            // toggle menu search bar on/off
            \$(\"#searchMenuShowHide\").click(function () {
                \$(\"#searchMenu\").toggle(\"slide\");
            });
            // For comments add

            \$('#addAnnounceComment').on('submit', function (e) {
                e.preventDefault();

                // Get the content from TinyMCE editor
                let temp = tinymce.activeEditor.getContent();

                // Check if the content is empty
                if (temp.trim() === \"\") {  // Check if the content is empty or only contains whitespace
                    toastr.warning(\"";
        // line 1086
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vous devez remplir un commentaire!"), "html", null, true);
        yield "\");  // Display an error message
                    return false;  // Prevent form submission
                }

                // If not empty, proceed with form submission
                toastr.info(\"";
        // line 1091
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "\");

                \$('#comment-text').val(temp);
                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize() + '&comment-box=' + temp;

                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        if (response != 0) {
                            toastr.clear();
                            toastr.success(\"";
        // line 1107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        } else if (response == 0) {
                            \$('#enregPasse').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 1112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (response) {
                        \$('#enregPasse').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 1118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                    }
                });

                return false;
            });


            \$(document).on('click', '.deleteAnnounce', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                let t = \$(this);
                let urlPath = \$(this).attr('href');
                swal({
                    title: t.text(),
                    text: \"";
        // line 1132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sure"), "html", null, true);
        yield "\",
                    type: \"info\",
                    showCancelButton: true,
                    confirmButtonClass: \"btn-danger\",
                    confirmButtonText: \"Oui\",
                    cancelButtonText: \"Annuler\",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                    showLoaderOnConfirm: true
                }, function (isConfirm) {

                    if (isConfirm) {
                        \$.ajax({
                            url: urlPath,
                            type: 'GET',
                            success: function (reponse) {
                                if (reponse > 0) {
                                    swal(\"Action effectuée avec succès.\", \"\", \"success\");
                                    window.location = \"";
        // line 1150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_profile");
        yield "\";
                                } else {
                                    swal(\"erreur de suppression\", \"\", \"error\");
                                }
                            },
                            error: function (reponse) {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
                return false;
            });

            // First Like Button
            \$(document).on('click', '.btnh1', function () {
                let element = \$(this);
                //Enregistrer dans la wishlist
                let url = \"";
        // line 1170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_add_remove_to_user_wishlist", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1170, $this->source); })()), "request", [], "any", false, false, false, 1170), "get", ["_locale"], "method", false, false, false, 1170)]), "html", null, true);
        yield "\";
                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        annonce_id: \$(this).attr('data-id')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.color == 'red') {
                            element.children().removeClass(\"far\");
                            element.children().addClass(\"fas\");
                            element.children().css('color', 'red');
                        } else if (response.color == 'black') {
                            element.children().removeClass(\"fas\");
                            element.children().addClass(\"far\");
                            element.children().css('color', 'grey');
                        } else if (response.status == 401) {
                            window.location = \"";
        // line 1188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\";
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });

        });

        toastr.options = {
            \"closeButton\": true,
            \"debug\": false,
            \"newestOnTop\": false,
            \"progressBar\": true,
            \"positionClass\": \"toast-top-center\",
            \"preventDuplicates\": false,
            \"onclick\": null,
            \"showDuration\": \"200\",
            \"hideDuration\": \"800\",
            \"timeOut\": \"3000\",
            \"extendedTimeOut\": \"800\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        };
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/details.html.twig";
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
        return array (  2427 => 1188,  2406 => 1170,  2383 => 1150,  2362 => 1132,  2345 => 1118,  2336 => 1112,  2328 => 1107,  2309 => 1091,  2301 => 1086,  2266 => 1054,  2261 => 1052,  2246 => 1040,  2240 => 1039,  2236 => 1038,  2232 => 1037,  2227 => 1035,  2221 => 1034,  2217 => 1033,  2201 => 1020,  2197 => 1019,  2193 => 1018,  2185 => 1017,  2173 => 1016,  2062 => 917,  2041 => 899,  2031 => 892,  2011 => 875,  2007 => 874,  1998 => 869,  1987 => 868,  1977 => 867,  1972 => 865,  1931 => 829,  1921 => 824,  1886 => 792,  1882 => 791,  1879 => 790,  1873 => 786,  1868 => 784,  1863 => 783,  1853 => 782,  1842 => 780,  1832 => 779,  1822 => 776,  1819 => 775,  1817 => 774,  1806 => 766,  1787 => 765,  1779 => 764,  1769 => 757,  1750 => 756,  1742 => 755,  1732 => 748,  1713 => 747,  1705 => 746,  1695 => 739,  1676 => 738,  1668 => 737,  1659 => 731,  1640 => 730,  1632 => 729,  1623 => 723,  1604 => 722,  1596 => 721,  1586 => 714,  1567 => 713,  1559 => 712,  1549 => 705,  1530 => 704,  1522 => 703,  1512 => 696,  1492 => 695,  1484 => 694,  1464 => 677,  1457 => 675,  1452 => 673,  1446 => 670,  1442 => 669,  1437 => 666,  1426 => 661,  1422 => 660,  1413 => 654,  1406 => 650,  1397 => 649,  1391 => 645,  1386 => 644,  1380 => 640,  1376 => 639,  1370 => 635,  1359 => 632,  1355 => 630,  1351 => 629,  1346 => 627,  1339 => 622,  1331 => 617,  1327 => 616,  1321 => 613,  1313 => 608,  1309 => 607,  1303 => 604,  1296 => 600,  1292 => 599,  1286 => 596,  1279 => 592,  1275 => 591,  1269 => 588,  1263 => 584,  1261 => 583,  1256 => 580,  1248 => 578,  1246 => 577,  1243 => 576,  1233 => 562,  1230 => 561,  1225 => 559,  1219 => 557,  1216 => 556,  1214 => 555,  1210 => 554,  1205 => 552,  1200 => 550,  1195 => 548,  1181 => 537,  1177 => 536,  1173 => 535,  1169 => 534,  1166 => 533,  1159 => 528,  1154 => 526,  1146 => 525,  1136 => 517,  1130 => 514,  1126 => 513,  1121 => 511,  1116 => 509,  1112 => 507,  1110 => 506,  1105 => 503,  1099 => 501,  1096 => 500,  1090 => 498,  1087 => 497,  1081 => 495,  1079 => 494,  1066 => 488,  1064 => 486,  1060 => 485,  1047 => 480,  1042 => 479,  1036 => 478,  1029 => 474,  1020 => 468,  1015 => 465,  1012 => 464,  1001 => 460,  996 => 458,  992 => 457,  987 => 455,  983 => 453,  978 => 452,  975 => 451,  972 => 450,  961 => 446,  956 => 444,  952 => 443,  947 => 441,  943 => 439,  938 => 438,  936 => 437,  928 => 431,  924 => 430,  920 => 429,  918 => 428,  910 => 422,  905 => 420,  902 => 419,  900 => 418,  895 => 416,  889 => 414,  887 => 413,  884 => 412,  881 => 411,  874 => 409,  872 => 408,  867 => 407,  864 => 406,  857 => 404,  855 => 403,  846 => 402,  844 => 401,  838 => 400,  835 => 399,  816 => 383,  812 => 381,  810 => 380,  803 => 377,  801 => 376,  787 => 367,  782 => 365,  775 => 363,  772 => 362,  765 => 360,  762 => 359,  758 => 357,  752 => 355,  750 => 354,  735 => 346,  731 => 345,  719 => 341,  714 => 340,  708 => 339,  702 => 336,  697 => 333,  685 => 327,  682 => 326,  678 => 325,  671 => 320,  661 => 319,  645 => 318,  634 => 316,  624 => 315,  407 => 105,  403 => 104,  399 => 103,  394 => 101,  390 => 100,  386 => 99,  382 => 98,  377 => 96,  370 => 93,  360 => 92,  338 => 90,  328 => 86,  309 => 74,  301 => 73,  291 => 70,  279 => 65,  271 => 64,  265 => 60,  245 => 47,  237 => 46,  227 => 43,  219 => 42,  211 => 41,  203 => 35,  201 => 34,  198 => 33,  190 => 31,  182 => 30,  174 => 29,  166 => 28,  161 => 25,  154 => 20,  145 => 18,  137 => 17,  129 => 16,  125 => 15,  121 => 14,  112 => 12,  104 => 11,  96 => 10,  92 => 9,  88 => 8,  84 => 7,  80 => 6,  74 => 4,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'otherLayout.html.twig' %}

{% block head %}
    {{ parent() }}

    <link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png')) }}\" sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png')) }}\" sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png')) }}\"/>
    <meta name=\"msapplication-TileImage\" content=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\"/>
    <meta name=\"title\" content=\"{% if app.request.locale == 'en' and detailsAnnonce.titre_en != '' %}{{ detailsAnnonce.titre_en }}{% else %}{{ detailsAnnonce.post_title }}{% endif %}\">
    <meta name=\"description\" content=\"{% if app.request.locale == 'en' and detailsAnnonce.content_en != '' %}{{ detailsAnnonce.content_en|raw|u.truncate(160, '...', false) }}{% else %}{{ detailsAnnonce.post_content|raw|u.truncate(160 , '...', false) }}{% endif %}\">
    <meta name=\"keywords\" content=\"{% if app.request.locale == 'en' and detailsAnnonce.categorie_parent_en != '' %}{{ detailsAnnonce.categorie_parent_en }}{% else %}{{ detailsAnnonce.categorieParent }}{% endif %}\">

    <link rel=\"canonical\" href=\"{{ absolute_url(path('annonces_detailsAnnonce', {id: detailsAnnonce.post_name})) }}\">
    <link rel=\"shortlink\" href=\"{{ path('annonces_detailsAnnonce', {id: detailsAnnonce.post_name}) }}\">
    <meta property=\"og:title\" content=\"{% if app.request.locale == 'en' and detailsAnnonce.titre_en != '' %}{{ detailsAnnonce.titre_en }}{% else %}{{ detailsAnnonce.post_title }}{% endif %}\">
    <meta property=\"og:description\" content=\"{% if app.request.locale == 'en' and detailsAnnonce.content_en != '' %}{{ detailsAnnonce.content_en|raw|u.truncate(160, '...', false) }}{% else %}{{ detailsAnnonce.post_content|raw|u.truncate(160, '...', false) }}{% endif %}\">
    <meta property=\"og:image\" content=\"{% if detailsAnnonce.gallery|first %}{{ detailsAnnonce.gallery.0.guid }}{% elseif detailsAnnonce.images_secondaires|first %}{{ detailsAnnonce.images_secondaires.0.guid }}{% endif %}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ absolute_url(path('annonces_detailsAnnonce', {id: detailsAnnonce.post_name})) }}\">
    <meta property=\"og:locale\" content=\"fr\"/>
    <meta property=\"og:locale:alternate\" content=\"en\"/>

    {# Twitter CARD #}
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:creator\" content=\"Kbr Global\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"{% if app.request.locale == 'en' and detailsAnnonce.titre_en != '' %}{{ detailsAnnonce.titre_en }}{% else %}{{ detailsAnnonce.post_title }}{% endif %}\">
    <meta name=\"twitter:description\" content=\"{% if app.request.locale == 'en' and detailsAnnonce.content_en != '' %}{{ detailsAnnonce.content_en|raw|u.truncate(160, '...', false) }}{% else %}{{ detailsAnnonce.post_content|raw|u.truncate(160, '...', false) }}{% endif %}\">
    <meta name=\"twitter:image\" content=\"{% if detailsAnnonce.gallery|first %}{{ detailsAnnonce.gallery.0.guid }}{% elseif detailsAnnonce.images_secondaires|first %}detailsAnnonce.images_secondaires.0.guid{% endif %}\">
    <meta name=\"twitter:image:alt\" content=\"{% if detailsAnnonce.gallery|first %}{{ detailsAnnonce.gallery.0.guid }}{% elseif detailsAnnonce.images_secondaires|first %}detailsAnnonce.images_secondaires.0.guid{% endif %}\">
    {# END Twitter Card #}

    {% if detailsAnnonce.categorieParentType == 'product_cat' %}
        <script type=\"application/ld+json\">
\t\t\t{
\t\t\t\t\"@context\": \"https://schema.org\",
\t\t\t\t\"@type\": \"product\",
\t\t\t\t\"brand\": \"Acme\",
\t\t\t\t\"logo\": \"http://www.example.com/logo.png\",
\t\t\t\t\"name\": \"{% if app.request.locale == 'en' and detailsAnnonce.titre_en != '' %}{{ detailsAnnonce.titre_en }}{% else %}{{ detailsAnnonce.post_title }}{% endif %}\",
\t\t\t\t\"image\": \"{% if detailsAnnonce.gallery|first %}{{ detailsAnnonce.gallery.0.guid }}{% elseif detailsAnnonce.images_secondaires|first %}detailsAnnonce.images_secondaires.0.guid{% endif %}\",
\t\t\t\t\"description\": \"{% if app.request.locale == 'en' and detailsAnnonce.content_en != '' %}{{ detailsAnnonce.content_en|raw|u.truncate(160, '...', false) }}{% else %}{{ detailsAnnonce.post_content|raw|u.truncate(160, '...', false) }}{% endif %}\",
\t\t\t\t\"offers\": {
\t\t\t\t\t\"@type\": \"Offer\",
\t\t\t\t\t\"priceCurrency\": \"{% if detailsAnnonce.devise is not null %}{{ detailsAnnonce.devise.metaValue }}{% else %}€{% endif %}\",
\t\t\t\t\t\"price\": \"{% if detailsAnnonce.prix is not null %}{{ detailsAnnonce.prix }}{% else %}0{% endif %}\",
\t\t\t\t\t\"availability\": \"http://schema.org/InStock\",
\t\t\t\t\t\"seller\": {
\t\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}



        </script>
    {% else %}
        <script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"http://schema.org/\",
\t\t\t\"@type\": \"Service\",
\t\t\t\"name\": \"{% if app.request.locale == 'en' and detailsAnnonce.titre_en != '' %}{{ detailsAnnonce.titre_en }}{% else %}{{ detailsAnnonce.post_title }}{% endif %}\",
\t\t\t\"description\": \"{% if app.request.locale == 'en' and detailsAnnonce.content_en != '' %}{{ detailsAnnonce.content_en|raw|u.truncate(160, '...', false) }}{% else %}{{ detailsAnnonce.post_content|raw|u.truncate(160, '...', false) }}{% endif %}\",
\t\t\t\"provider\": {
\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t},
\t\t\t\"image\": \"{% if detailsAnnonce.gallery|first %}{{ detailsAnnonce.gallery.0.guid }}{% elseif detailsAnnonce.images_secondaires|first %}detailsAnnonce.images_secondaires.0.guid{% endif %}\",
\t\t\t\"offers\": {
\t\t\t\t\"@type\": \"Offer\",
\t\t\t\t\"priceCurrency\": \"{% if detailsAnnonce.devise is not null %}{{ detailsAnnonce.devise.metaValue }}{% else %}€{% endif %}\",
\t\t\t\t\"price\": \"{% if detailsAnnonce.prix is not null %}{{ detailsAnnonce.prix }}{% else %}0{% endif %}\",
\t\t\t\t\"seller\": {
\t\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t\t}
\t\t\t}
\t\t}



        </script>
    {% endif %}


{% endblock %}

{% block title %}Trust &amp; Market | {% if app.request.locale == 'en' and detailsAnnonce.titre_en != '' %}{{ detailsAnnonce.titre_en | u.truncate(45, true) }}{% else %}{{ detailsAnnonce.post_title|u.truncate(45, true) }}{% endif %}{% endblock %}

{% block style %}
    {{ parent() }}

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" {{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/css/home.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/custome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/voir-annonce.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom css for camroll -->
    <link href=\"{{ asset('assets/css/camroll/camroll_slider.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"
          integrity=\"sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

    <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\"> -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css\"
          integrity=\"sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    <!-- Bootstrap toggle switch -->
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>


    <style>

        @media only screen and (max-width: 500px) {
            #dialoguons {
                width: 70%;
            }
        }

        @media only screen and (min-width: 501px) {
            #dialoguons {
                width: 40%;
            }
        }

        @media only screen and (min-width: 769) and (max-width: 1024px) {
            #dialoguons {
                width: 30%;
            }
        }

        @media only screen and (min-width: 1025px) {
            #dialoguons {
                width: 19%;
            }
        }

        @media only screen and (max-width: 800px) {
            .datepicker table {
                width: 100%;
            }

            .datepicker-inline {
                width: 100%;
            }

            .datepicker-days table {
                width: 100%;
            }

            .mode3 {
                margin-bottom: 3rem;
            }
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: \"|\";
        }

        .breadcrumb {
            background-color: white;
        }

        .breadcrumb a {
            color: #000000;
        }

        .p-pop-up1 {
            margin-bottom: 2rem;
        }

        .p-pop-titre1,
        .p-pop-titre2 {
            font-family: \"Palanquin Dark\";
        }

        .p-pop-content1 {
            background: #53b4a6;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-family: \"Source Sans Pro\";
        }

        .p-pop-content2 {
            background: black;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-family: \"Source Sans Pro\";
        }

        .button_profil_sendmsg {
            width: 100%;
            display: flex;
            justify-content: end;
            align-items: center;
            margin: 0.5rem;
            padding: 0;
        }

        .prestation-link {
            text-align: center;
        }

        ul.slick-dots {
            position: absolute;
            bottom: -25px;
            display: block;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;
            cursor: pointer;
        }

        .slick-dots li button {
            border-radius: 50%;
            font-size: 0;
            line-height: 0;
            display: block;
            width: 10px;
            height: 10px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:before {
            font-family: 'slick';
            font-size: 35px;
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 10px;
            height: 10px;
            content: '•';
            text-align: center;
            opacity: .25;
            color: black;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: black;
        }

        .btn-wish {
            background: transparent;
            border: none;
            /* margin: 87px; */
            /* font-size: 88px; */
            outline: none;
            color: grey;
        }

        .btnh1-display {
            display: flex;
            justify-content: end;
        }

        .btn i:hover {
            cursor: pointer;
        }

        button:focus {
            outline: none;
        }

        .item .btnh1-display {
            position: absolute;
            top: 10%;
            left: 95%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-size: 16px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        .bloc-nom-commercial{
            display: flex;
            justify-content: space-between;
        }

    </style>
{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock %}
{% block navigation %}{% endblock %}
{% block body %}

    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"mt-3\">
                {% for message in app.flashes('notice') %}
                    <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        <strong>{{ message }}</strong>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
                <!-- Vu du profil -->
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb px-0\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('home') }}\">Accueil</a></li>
                        <li class=\"breadcrumb-item\">
                            <a target=\"_blank\"
                               href=\"{% if detailsAnnonce.categorieParent|lower == 'produits' %}{{ path('annonces_listeAnnonces', {type_prestation: detailsAnnonce.categorieParentSlug,services_proposes: '',code_postal_ville: ''}) }}
\t\t\t\t\t\t\t\t\t\t{% else %}{{ path('annonces_listeAnnonces', {type_prestation: detailsAnnonce.categorieParentSlug,services_proposes: '',code_postal_ville: ''}) }}
\t\t\t\t\t\t\t\t\t\t{% endif %}\">{% if app.request.locale == 'en' and detailsAnnonce.categorie_parent_en != '' %}{{ detailsAnnonce.categorie_parent_en }}{% else %}{{ detailsAnnonce.categorieParent }}{% endif %}</a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a target=\"_blank\"
                               href=\"{{ path('annonces_listeAnnonces', {type_prestation: detailsAnnonce.categorieParentSlug,services_proposes: detailsAnnonce.sousCategorieSlug,code_postal_ville: ''}) }}\">{% if app.request.locale == 'en' and detailsAnnonce.categorie_en != '' %}
                                    {{ detailsAnnonce.categorie_en }}{% else %}{{ detailsAnnonce.sousCategorie }}{% endif %}</a>
                        </li>
                    </ol>
                </nav>
                <div id=\"lectureInfo\" class=\"row\">
                    <div class=\"col-md-3 desktop-form\">
                        <div>
                            <h5 class=\"border-bottom pb-3\">
                                {% if detailsAnnonce.prix is not null %}
                                    {{ detailsAnnonce.prix }}
                                {% else %}
                                    0
                                {% endif %}
                                {% if detailsAnnonce.devise is not null %}
                                    {{ detailsAnnonce.devise.metaValue }}{% else %}€
                                {% endif %}
                            </h5>
                            <h6 class=\"mt-4 mb-2\" {% if detailsAnnonce.categorieParentType !='product_cat' %} hidden {% endif %}>
                                <i class=\"fas fa-calendar\"></i>
                                {{ 'profil-utilisateur.annonces-details.disponibilites'|trans }}
                            </h6>
                            <p class=\"fs-14\" {% if detailsAnnonce.categorieParentType !='product_cat' %} hidden {% endif %}>
                                Sélectionner les dates de prestations souhaitées pour finaliser votre reservation.
                                <span class=\"calendar_infos\" data-html=\"true\" data-container=\"body\"
                                      data-toggle=\"popover2\" data-placement=\"top\" data-content=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:rgb(0, 82, 204);\"
                                                   class=\"fas fa-question-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
                            </p>
                            <form action=\"\">
                                <div class=\"multipleDatePicker md-form\" {% if detailsAnnonce.categorieParentType
                                    !='product_cat' %}hidden{% endif %} value='' type='text'>
                                    <input type='hidden' class='DateField' value=''>
                                </div>
                                {% if detailsAnnonce.categorieParentType != 'product_cat' %}
                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <label for=\"product_quantity\">{{ 'profil-utilisateur.annonces-details.quantite'|trans }}</label>
                                            <select class=\"form-control\" id=\"product_quantity\" name=\"product_quantity\">
                                                <option selected>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"col-md-12 md-form\">
                                    <p id=\"price\" {% if detailsAnnonce.categorieParentType !='product_cat' %} hidden {% endif %}>
                                        {% if datep|length >0 %}
                                            {{ datep|length }}x{{ detailsAnnonce.prix }}={{ datep|length * detailsAnnonce.prix }}
                                            {% if detailsAnnonce.devise is not null %}
                                                {{ detailsAnnonce.devise.metaValue }}{% else %}€
                                            {% endif %}
                                        {% elseif detailsAnnonce.categorieParentType != 'product_cat' %}
                                            {{ detailsAnnonce.prix }}
                                            {% if detailsAnnonce.devise is not null %}
                                                {{ detailsAnnonce.devise.metaValue }}{% else %}€
                                            {% endif %}
                                        {% endif %}
                                    </p>
                                    <button id=\"enregDates\" {% if rupture==0 and detailsAnnonce.categorieParentType
                                        !='product_cat' %}disabled{% endif %} class=\"btn btn-md btn-primary text-center\"
                                            type=\"submit\">
                                        {{ 'profil-utilisateur.annonces-details.ajouter-panier'|trans }}
                                    </button>
                                    {% if rupture == 0 and detailsAnnonce.categorieParentType != 'product_cat' %}
                                        <span id=\"rupture\" class=\"btn btn-md btn-warning text-center\">
\t\t\t\t\t\t\t\t\t{{ 'profil-utilisateur.annonces-details.rupture'|trans }}</span>
                                    {% endif %}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <h1 class=\"pb-3 border-bottom\" style=\"text-transform: uppercase; font-size: 1.7rem\">
                            {% if app.request.locale == 'en' and detailsAnnonce.titre_en != '' %}
                                {{ detailsAnnonce.titre_en }}{% else %}
                                {{ detailsAnnonce.post_title }}{% endif %}
                        </h1>

                        <div class=\"row\">
                            <!-- Carousel slider for portfolio -->
                            <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                                <div class=\"owl-carousel owl-theme\">
                                    {% if detailsAnnonce.gallery|first %}
                                        {% for a in detailsAnnonce.gallery %}
                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\"
                                                     data-src=\"{{ a.guid|replace({'www.': ''}) }}\"></div>
                                                <div class=\"btnh1-display\">
                                                    <button class=\"btn-wish btnh1\" data-id=\"{{ detailsAnnonce.id }}\">
                                                        {% if detailsAnnonce.id in text_wishlist %}<i
                                                                style=\"color: red;\" class=\"fas fa-heart\"></i> {% else %}
                                                            <i class=\"wish-heart far fa-heart\"></i> {% endif %}</button>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}
                                    {% if detailsAnnonce.images_secondaires|first %}
                                        {% for a in detailsAnnonce.images_secondaires %}
                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\"
                                                     data-src=\"{{ a.guid|replace({'www.': ''}) }}\"></div>
                                                <div class=\"btnh1-display\">
                                                    <button class=\"btn-wish btnh1\" data-id=\"{{ detailsAnnonce.id }}\">
                                                        {% if detailsAnnonce.id in text_wishlist %}<i
                                                                style=\"color: red;\" class=\"fas fa-heart\"></i> {% else %}
                                                            <i class=\"far fa-heart\"></i> {% endif %}</button>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}
                                </div>

                                <h2 class=\"mt-4 mb-2\" style=\"font-size: 1.5rem\">
                                    {{ 'profil-utilisateur.annonces-details.caracteristiques'|trans }}
                                </h2>
                                <div class=\"container\">
                                    <div class=\"row py-2 px-2 xtic-box\">
                                        <div class=\"col-md-6\">
                                            <p class=\"x-info ref fs-14\">
                                                <strong>Ref: {{ detailsAnnonce.id }}</strong>
                                            </p>
                                            <p>
                                                <a class=\"x-info fs-18\"
                                                   href=\"{% if detailsAnnonce.categorieParent|lower == 'produits' %}{{ path('annonces_listeAnnonces', {type_prestation: detailsAnnonce.categorieParentSlug,services_proposes: '',code_postal_ville: ''}) }}
\t\t\t\t\t\t\t\t\t\t{% else %}{{ path('annonces_listeAnnonces', {type_prestation: detailsAnnonce.categorieParentSlug,services_proposes: '',code_postal_ville: ''}) }}
\t\t\t\t\t\t\t\t\t\t{% endif %}\"><strong>{% if app.request.locale == 'en' and detailsAnnonce.categorie_parent_en != '' %}{{ detailsAnnonce.categorie_parent_en }}{% else %}{{ detailsAnnonce.categorieParent }}{% endif %}</strong>
                                                </a>
                                            </p>
                                            <p>
                                                <a class=\"x-info fs-18\"
                                                   href=\"{{ path('annonces_listeAnnonces', {type_prestation: detailsAnnonce.categorieParentSlug,services_proposes: detailsAnnonce.sousCategorieSlug,code_postal_ville: ''}) }}\">
                                                    <strong>{% if app.request.locale == 'en' and detailsAnnonce.categorie_en
                                                            != '' %}
                                                            {{ detailsAnnonce.categorie_en }}{% else %}{{ detailsAnnonce.sousCategorie }}{% endif %}</strong>
                                                </a>
                                            </p>
                                            <p class=\"x-info fs-14\">
                                                <strong>
                                                    <i class=\"fas fa-map-marker\"></i>
                                                    {% if detailsAnnonce.codePostal is not null %}
                                                        {{ detailsAnnonce.codePostal }}
                                                    {% endif %}
                                                    {% if detailsAnnonce.ville is not null %}
                                                        {{ detailsAnnonce.ville }}
                                                    {% endif %}
                                                    {% if detailsAnnonce.pays is not null %}
                                                        {{ detailsAnnonce.pays|country_name }}
                                                    {% endif %}
                                                </strong>
                                            </p>
                                            <p class=\"x-info fs-14\">
                                                {% if detailsAnnonce.categorieParent == 'product_cat' %}
                                                    <strong>
                                                        <i class=\"fas fa-calendar\"></i>
                                                        ({{ detailsAnnonce.calendrier|first }}
                                                        -
                                                        {{ detailsAnnonce.calendrier|last }}
                                                        )
                                                        {{ detailsAnnonce.calendrier|length }}
                                                        {{ 'profil-utilisateur.annonces-details.dates-disponibles'|trans }}
                                                    </strong>
                                                {% endif %}
                                            </p>
                                        </div>
                                        <div class=\"col-md-6 text-right\">
                                            <div class=\"row bloc-nom-commercial\">
                                                <div class=\"content\">
                                                    <!-- Your content goes here -->
                                                </div>
                                                <img class=\"img-fluid rounded-circle float-right\" width=\"100% \\9\"
                                                     src=\"{% if detailsAnnonce.avatar != null %}{{ detailsAnnonce.avatar|last|replace({'www.': ''}) }}{% else %}{{ asset('assets/img/profile/avatar-profile.png') }}{% endif %}\"
                                                     alt=\"{{ detailsAnnonce.first_name }}\">
                                            </div>
                                            <p><a class=\"x-info fs-18 mt-2\" href=\"{{ path('annonces_listeAnnoncesCommercial', {nom_commercial: detailsAnnonce.nom_commercial, id_commercial: detailsAnnonce.post_author}) }}\"><strong>{{ detailsAnnonce.nom_commercial }}</strong></a></p>

                                            {#<p class=\"x-info ref fs-14\" style=\"margin-top:-20px\">
                                                <strong>{% if detailsAnnonce.societe != '' %}{{ detailsAnnonce.societe }}{% else %}{{ detailsAnnonce.first_name }}{% endif %}</strong>
                                            </p>#}
                                            <p class=\"x-info ref fs-14\">
                                                {{ 'profil-utilisateur.annonces-details.publie-le'|trans }}
                                                {{ detailsAnnonce.post_date }}
                                                {{ 'profil-utilisateur.annonces-details.maj-le'|trans }}
                                                {{ detailsAnnonce.post_modified }}
                                            </p>
                                        </div>
                                        <div class=\"row\" style=\"width: 100%;\">
                                            <div class=\"col-md-12 my-1 pull-right button_profil_sendmsg\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"popover_infos\" data-html=\"true\" data-container=\"body\"
                                                  data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:rgb(0, 82, 204);\"
                                                   class=\"fas fa-question-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <a target=\"_blank\"
                                                   href=\"{{ path('profile_detailsProfessionnel',{'id': 'infos-profil-' ~ detailsAnnonce.post_author }) }}\"
                                                   class=\"btn btn-sm btn-primary\">
                                                    {{ 'profil-utilisateur.annonces-details.details-profil'|trans }}</a>
                                                <a target=\"_blank\"
                                                   href=\"{{ path('chat_chat', {'destinataire': detailsAnnonce.post_author }) }}\"
                                                   class=\"btn btn-sm btn-primary\">
                                                    {{ 'profil-utilisateur.annonces-details.envoyer-message'|trans }}</a>
                                                {% if app.user %}
                                                    {% if app.user.id == detailsAnnonce.post_author %}
                                                        <a href=\"{{ path('annonces_deleteAnnounce', { id: detailsAnnonce.id }) }}\"
                                                           tabindex=\"0\"
                                                           class=\"btn btn-sm btn-primary deleteAnnounce\">{{ 'profil-utilisateur.annonces-details.supprimer-annonce'|trans }}</a>
                                                    {% endif %}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 mt-4\">
                                    <div class=\"mobile-form\">

                                    </div>
                                    {# <h5 class=\"py-4 mb-4 border-bottom\">
                                        {% if detailsAnnonce.post_type == \"devis\"
                                        %}{{'profil-utilisateur.annonces-details.description-devis'|trans}}
                                        {% else %}{{'profil-utilisateur.annonces-details.description-prestation'|trans}}
                                        {% endif %}
                                    </h5> #}
                                    <div class=\"\">
                                        {% if app.request.locale == 'en' and detailsAnnonce.content_en != '' %}
                                            {{ detailsAnnonce.content_en|raw }}{% else %}{{ detailsAnnonce.post_content|raw }}
                                        {% endif %}
                                    </div>
                                </div>
                                <!-- Videos -->
                                {% if detailsAnnonce.livraison == 'oui' and detailsAnnonce.categorieParentSlug == 'produits' %}
                                    <div id=\"mesVideos\" class=\"col-md-12 mt-4\">
                                        <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">Modes de livraison</h2>
                                        <div class=\"row modes\">
                                            <div class=\"col-md-6 mode mode1\" style=\"display: flex;margin-bottom: 3rem;\">
                                                <img src=\"{{ asset('assets/img/livraison-standard.svg') }}\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>{{ 'details-annonces.titre-livraison-standard'|trans }}</h5>
                                                    <p>{{ 'details-annonces.contenu-livraison-standard'|trans }}</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode2\" style=\"display: flex;margin-bottom: 3rem;\">
                                                <img src=\"{{ asset('assets/img/livraison-prioritaire.svg') }}\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>{{ 'details-annonces.titre-livraison-prioritaire'|trans }}</h5>
                                                    <p>{{ 'details-annonces.contenu-livraison-prioritaire'|trans }}</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode3\" style=\"display: flex;\">
                                                <img src=\"{{ asset('assets/img/livraison-express.svg') }}\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>{{ 'details-annonces.titre-livraison-express'|trans }}</h5>
                                                    <p>{{ 'details-annonces.contenu-livraison-express'|trans }}</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode4\">
                                                <p style=\"margin-bottom: 0.5rem;\"><span
                                                            style=\"font-weight: bold;font-size: 0.8rem;\">{{ 'details-annonces.titre-infos'|trans }}</span>
                                                    <span>01 85 42 14 91</span></p>
                                                <a target=\"_blank\"
                                                   href=\"{{ path('page_navigation', { idPage: 'aide' ,id: 'modes-de-livraison' }) }}\"
                                                   style=\"color: black;text-decoration: underline;\">{{ 'details-annonces.contenu-infos'|trans }}</a>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                <!-- Videos -->
                                <!-- Videos -->
                                <div id=\"mesVideos\" class=\"col-md-12 mt-4\">
                                    <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">
                                        {{ 'profil-utilisateur.annonces-details.videos'|trans }}</h2>
                                    <div class=\"owl-carousel owl-theme\">
                                        {% for a in detailsAnnonce.videos %}
                                            <div class=\"item-video\" data-merge=\"3\">
                                                <a class=\"owl-video\"
                                                   href=\"https://www.youtube.com/embed/{% if a != \" \" %}{{ a }}{% endif %}\"></a>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                                <!-- Videos -->
                                <div class=\"col-md-12 mt-4\">
                                    <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">{{ detailsAnnonce.commentaires|length }}
                                        {{ 'profil-utilisateur.annonces-details.commentaires'|trans }}
                                    </h2>
                                    <div class=\"container\">
                                        {# {{ dump(detailsAnnonce) }}#}
                                        {% for a in detailsAnnonce.commentaires %}
                                            <div class=\"row xtic-box py-2 rounded mb-2\">
                                                <div class=\"col-md-2 pt-2 text-center\">
                                                    <center>
                                                        <img class=\"img-fluid rounded-circle\" width=\"100% \\9\"
                                                             src=\"{% if a.avatar %}{{ a.avatar|first }}{% else %} {{ asset('assets/img/profile/avatar-profile.png') }}{% endif %}\"
                                                             alt=\"{{ a.comment_author }}\">
                                                    </center>
                                                    <p class=\"x-info ref-comment fs-14\">
                                                        <strong>
                                                            <a href=\"#\" target=\"_blank\">{{ a.comment_author }}</a>
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div class=\"col-md-10\">
                                                    <p class=\"x-info ref-comment fs-14\">
                                                        {{ a.comment_content|raw }}<br>
                                                        {{ a.comment_date|date('d-m-Y h:i') }}
                                                    </p>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <div class=\"col-md-12 mt-4\" style=\"padding: 0;\">
                                        <h3 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem;\">
                                            {{ 'profil-utilisateur.annonces-details.ajouter-commentaire'|trans }}</h3>
                                        <form action=\"{{ path('annonces_addAnnounceComment') }}\"
                                              id=\"addAnnounceComment\"
                                              method=\"post\">
                                            <input hidden name=\"postId\" value=\"{{ detailsAnnonce.id }}\"/>
                                            <textarea id=\"comment-text\" name=\"comment-box\" class=\"comment-box form-control\" rows=\"10\"></textarea>
                                            <button class=\"btn btn-md btn-primary addComment {% if not app.user %}disabled{% endif %}\"
                                                    id=\"enregPasse\" type=\"submit\" style=\"margin: 0;margin-top: 3em;\">
                                                {{ 'profil-utilisateur.annonces-details.publier'|trans }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Vu du profil -->
                    </div>
                    <div class=\"col-md-12\">
                        <h3 style=\"margin-top: 2rem;\">Explorez notre univers</h3>
                        <p class=\"x-info fs-14\">Complétez l'offre ou contactez-nous si besoin</p>
                        <div class=\"col-md-12\" style=\"padding: 0;\">
                            <div id=\"news-slider\" class=\"\">
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-photograph overlay lazy carroussel_image\"
                                             data-src=\"{% if bloc1 %}{{ bloc1.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-photo.jpg') }}{% endif %}\">
                                            <a href=\"{% if bloc1 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc1.optionValue|split('|||')[0] %} {{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'photographe',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link lazyload\">{{ 'home.bouton.photographe'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-musicien overlay lazy carroussel_image\"
                                             style=\"background-image: url({% if bloc2 %}{{ bloc2.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-musicien.jpg') }}{% endif %});\">
                                            <a href=\"{% if bloc2 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc2.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'musiciens',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link lazyload\">{{ 'home.bouton.musicien'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-prod-musicale overlay lazy carroussel_image\"
                                             style=\"background-image: url({% if bloc3 %}{{ bloc3.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-production-musicale.jpg') }}{% endif %});\">
                                            <a href=\"{% if bloc3 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc3.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'studio-denregistrement',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link lazyload\">{{ 'home.bouton.studio-enregistrement'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-grp-d-musiq overlay lazy carroussel_image\"
                                             style=\"background-image: url({% if bloc4 %}{{ bloc4.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-group-music.jpg') }}{% endif %});\">
                                            <a href=\"{% if bloc4 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc4.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'groupes-de-musique',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link lazyload\">{{ 'home.bouton.groupe-de-musique'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <div class=\"box-prestation box-chorale overlay lazy carroussel_image\"
                                         style=\"background-image: url({% if bloc5 %}{{ bloc5.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-chorale.jpg') }}{% endif %});\">
                                        <a href=\"{% if bloc5 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc5.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces',{type_prestation:'chorale-gospel',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                           class=\"prestation-link lazyload\">{{ 'home.bouton.chorale'|trans }}</a>
                                    </div>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-stud-photo overlay lazy carroussel_image\"
                                             style=\"background-image: url({% if bloc6 %}{{ bloc6.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-stud-photo.jpg') }}{% endif %});\">
                                            <a href=\"{% if bloc6 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc6.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'studio-photo',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link lazyload\">{{ 'home.bouton.studio-photo'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-realisation-vid overlay lazy carroussel_image\"
                                             style=\"background-image: url({% if bloc7 %}{{ bloc7.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-realisation-vid.jpg') }}{% endif %});\">
                                            <a href=\"{% if bloc7 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc7.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'realisation-video',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link\">{{ 'home.bouton.realisation-video'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-evenementiels overlay lazy carroussel_image\"
                                             style=\"background-image: url({% if bloc8 %}{{ bloc8.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-evenementiels.jpg') }}{% endif %});\">
                                            <a href=\"{% if bloc8 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc8.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'evenementiels',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link\">{{ 'home.bouton.evenementiel'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-stud-vid overlay lazy carroussel_image\"
                                             style=\"background-image: url({% if bloc9 %}{{ bloc9.optionValue|split('|||')[1] }}{% else %}{{ asset('assets/img/prestations/home-prestations-studio-video.jpg') }}{% endif %});\">
                                            <a href=\"{% if bloc9 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc9.optionValue|split('|||')[0] %}{{ path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''}) }}{% endif %} {% endfor %}{% else %}{{ path('annonces_listeAnnonces', {type_prestation: 'studio-video',services_proposes: '',code_postal_ville: ''}) }}{% endif %}\"
                                               class=\"prestation-link lazyload\">{{ 'home.bouton.studio-video'|trans }}</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% include(\"partials/project.html.twig\") %}
                {% include(\"partials/otherPagesVideoModal.html.twig\") %}
    </main>
    <!--Main Layout-->
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/camroll/camroll_slider.js') }}\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    {# Text editor #}
    <script src=\"//cdn.ckeditor.com/4.13.0/standard/ckeditor.js\"></script>
    <script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
    <script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"
            integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script> -->
    <!-- Bootstrap Toggle switch -->
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

    <script>
        \$(document).ready(function () {

            if (\$(window).width() < 768) {
                \$('.desktop-form div').appendTo('.mobile-form');
            }
            window.onresize = function (event) {
                if (\$(window).width() < 768) {
                    \$('.desktop-form div').appendTo('.mobile-form');
                } else if (\$(window).width() > 768) {
                    \$('.mobile-form div').appendTo('.desktop-form');
                }
            };

            \$(function () {
                let infos_bulle = `{% if infos_bulle is defined and infos_bulle %}{{ infos_bulle.optionValue|raw }}{% endif %}`;
                \$('.popover_infos').data('content', infos_bulle);
                \$('[data-toggle=\"popover\"]').popover();


                let calendar_infos = `{% if calendar_infos is defined and calendar_infos %}{{ calendar_infos.optionValue|raw }}{% endif %}`;
                \$('.calendar_infos').data('content', calendar_infos);
                \$('[data-toggle=\"popover2\"]').popover();
            })

            tinymce.init({
                selector: 'textarea#comment-text',
                height: 350,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,
                language: 'fr_FR'
            });

            var docWidth = document.documentElement.offsetWidth;
            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });
            // Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });
            // multiple datepicker setup


            // little function to return available dates to calender
            let dateDipo = [];
            let dates = \"\";
            let exist = {{ datep| length }}; // si l'annonce courante est deja dans le panier
            let prix = 0;
            let devise = {% if detailsAnnonce.devise is not null %}\"{{ detailsAnnonce.devise.metaValue }}\"{% else %} '€'{% endif %};
            {% for d1 in date %}dateDipo[dateDipo.length] = '{{ d1 }}'; {% endfor %}
            let nombreJour = \"{{ datep|length }}\";

            \$(\".multipleDatePicker\").datepicker({
                multidate: true,
                format: 'dd-mm-yyyy',
                startDate: '{{ d|date(\"d-m-Y\", false) }}',
                endDate: '{{ d|date_modify(\"+1 year\")|date(\"d-m-Y\", false) }}',
                beforeShowDay: function (d) {
                    let dat = formatDate(d);
                    console.log(dat);
                    let rep = false;
                    if (dateDipo.includes(dat)) {
                        rep = {
                            true: true,
                            tooltip: 'Disponible',
                            classes: 'jr-dispo'
                        };
                    }
                    return rep;
                }
            }).on('changeDate', function (e) {
                let dateTime = \$(\".multipleDatePicker\").datepicker(\"getDates\");
                nombreJour = dateTime.length;
                let p2 = '{{ detailsAnnonce.prix }}';
                let p3 = p2.match(/[0-9,.]*/);
                if (p3 !== null) {
                    var amount2 = parseFloat(p3[0].replace(/,/g, '')); // replace , thousands separator
                }
                prix = nombreJour * amount2;
                if (nombreJour > 0) {
                    \$('#price').html(nombreJour + \"x\" + '{{ detailsAnnonce.prix }}' + '=' + prix + ' ' + devise);
                } else {
                    \$('#price').html('');
                }
            });

            function padTo2Digits(num) {
                return num.toString().padStart(2, '0');
            }

            function formatDate(date) {
                return [
                    padTo2Digits(date.getDate()),
                    padTo2Digits(date.getMonth() + 1),
                    date.getFullYear(),
                ].join('-');
            }

            \$('.multipleDatePicker').datepicker('update', {% for d in datep %}'{{ d }}', {% endfor %});
            function arrayRemove(arr, value) {
                return arr.filter(function (ele) {
                    return ele != value;
                });
            }

            // start portfolio/video slider
            // Portfolio owlcarousel
            \$('#monPortfolio .owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                lazyLoad: true,
                loop: false,
                rewind: true,
                margin: 10,
                merge: true
            });
            // Video owlcarousel
            \$('#mesVideos .owl-carousel').owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                nav: true,
                video: true,
                lazyLoad: false,
                center: true
            });


            \$('#news-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 3,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: \"unslick\"
                    // instead of a settings object
                ]
            });
            // \$(\"#news-slider\").owlCarousel({
            // \titems: 3,
            // \titemsDesktop: [
            // \t\t1199, 3
            // \t],
            // \titemsDesktopSmall: [
            // \t\t980, 2
            // \t],
            // \titemsMobile: [
            // \t\t600, 1
            // \t],
            // \tnavigation: true,
            // \tnavigationText: [
            // \t\t\"\", \"\"
            // \t],
            // \tpagination: true,
            // \tautoPlay: true
            // });


            \$(document).on('click', '#enregDates', function (e) {// On empeche le navigateur de soumettre le formulaire
                e.preventDefault();
                let d = \$(\".multipleDatePicker\").datepicker(\"getDates\");
                let alldates = [];
                for (let i = 0; i < d.length; i++) {
                    let dateTime = new Date(d[i]);
                    let date = formatDate(dateTime);
                    alldates[alldates.length] = date;
                }
                dates += alldates.join('|');

                let adresse = \"{% if detailsAnnonce.ville is not null %}{{ detailsAnnonce.ville }}{% endif %}{% if detailsAnnonce.etat is not null %}{{ detailsAnnonce.etat }}{% endif %}{% if detailsAnnonce.pays is not null %}{{ detailsAnnonce.pays|country_name }}{% endif %}\";
                let image = '{% if detailsAnnonce.gallery|first %}{{ detailsAnnonce.gallery.0.guid }}{% elseif detailsAnnonce.images_secondaires|first %}{{ detailsAnnonce.images_secondaires.0.guid }}{% endif %}';
                let email = '{{ detailsAnnonce.email }}';
                let p = '{{ detailsAnnonce.prix }}';
                let categorieParent = \"{{ detailsAnnonce.categorieParentType }}\";
                let match = p.match(/[0-9,.]*/);
                let nombreJour = 0;
                let amount = 0;
                if (match !== null) {
                    amount = parseFloat(match[0].replace(/,/g, '')); // replace , thousands separator
                }
                if (categorieParent != 'product_cat') {
                    nombreJour = \$('#product_quantity').val();
                } else {
                    nombreJour = d.length;
                }

                let livraison = '{{ detailsAnnonce.livraison }}';
                let url1 = \"{{ path('annonces_panier') }}\" + '?id=' + '{{ detailsAnnonce.id }}' +
                    '&prixu=' + amount + '&userId=' + '{{ detailsAnnonce.post_author }}' +
                    '&qte=' + nombreJour + '&dates=' + dates +
                    '&libelle=' + '{{ detailsAnnonce.post_title }}' + '&image=' + image + '&adresse=' + adresse +
                    '&email=' + email + '&devise=' + devise + '&name=' + '{{ detailsAnnonce.post_name }}' +
                    '&categorie=' + '{{ detailsAnnonce.categorieParentSlug }}' + '&sousCategorie=' + '{{ detailsAnnonce.sousCategorieSlug }}' +
                    '&livraison=' + livraison + '&etat=' + '{{ etat }}';


                if (nombreJour > 0) {
                    toastr.info('Ajout au panier en cours...');
                    \$.ajax({
                        url: url1,
                        type: 'get',
                        success: function (response) {
                            toastr.clear();
                            toastr.success('Annonce ajoutée au panier!');
                            if (exist == 0) {
                                \$('#panier').html({{ app.session.get('taille') }} +1);
                            }
                            window.location = \"{{ path('annonces_detailsAnnonce', {id:detailsAnnonce.post_name}) }}\";
                        },
                        error: function (response) {
                            toastr.clear();
                            toastr.error('Erreur lors de l\\'ajout');
                        }
                    });
                } else {
                    toastr.info('Veuillez selectionner une date disponible');
                }
            });

            // Hambuger menu icon
            \$('.animated-button-icon').on('click', function () {
                \$('.animated-icon2').toggleClass('open');
            });
            // first thing turn Hide Menu Search bar
            \$(\"#searchMenu\").hide();
            // toggle menu search bar on/off
            \$(\"#searchMenuShowHide\").click(function () {
                \$(\"#searchMenu\").toggle(\"slide\");
            });
            // For comments add

            \$('#addAnnounceComment').on('submit', function (e) {
                e.preventDefault();

                // Get the content from TinyMCE editor
                let temp = tinymce.activeEditor.getContent();

                // Check if the content is empty
                if (temp.trim() === \"\") {  // Check if the content is empty or only contains whitespace
                    toastr.warning(\"{{ 'Vous devez remplir un commentaire!'|trans }}\");  // Display an error message
                    return false;  // Prevent form submission
                }

                // If not empty, proceed with form submission
                toastr.info(\"{{ 'systeme.requetes.requete-en-cours'|trans }}\");

                \$('#comment-text').val(temp);
                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize() + '&comment-box=' + temp;

                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        if (response != 0) {
                            toastr.clear();
                            toastr.success(\"{{ 'systeme.requetes.succes'|trans }}\");
                            window.location = \"\";
                        } else if (response == 0) {
                            \$('#enregPasse').removeClass('running');
                            toastr.clear();
                            toastr.error(\"{{ 'systeme.requetes.erreur'|trans }}\");
                        }
                    },
                    error: function (response) {
                        \$('#enregPasse').removeClass('running');
                        toastr.clear();
                        toastr.error(\"{{ 'systeme.requetes.erreur'|trans }}\");
                    }
                });

                return false;
            });


            \$(document).on('click', '.deleteAnnounce', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                let t = \$(this);
                let urlPath = \$(this).attr('href');
                swal({
                    title: t.text(),
                    text: \"{{ 'general.sure'|trans }}\",
                    type: \"info\",
                    showCancelButton: true,
                    confirmButtonClass: \"btn-danger\",
                    confirmButtonText: \"Oui\",
                    cancelButtonText: \"Annuler\",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                    showLoaderOnConfirm: true
                }, function (isConfirm) {

                    if (isConfirm) {
                        \$.ajax({
                            url: urlPath,
                            type: 'GET',
                            success: function (reponse) {
                                if (reponse > 0) {
                                    swal(\"Action effectuée avec succès.\", \"\", \"success\");
                                    window.location = \"{{ path('profile_profile') }}\";
                                } else {
                                    swal(\"erreur de suppression\", \"\", \"error\");
                                }
                            },
                            error: function (reponse) {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
                return false;
            });

            // First Like Button
            \$(document).on('click', '.btnh1', function () {
                let element = \$(this);
                //Enregistrer dans la wishlist
                let url = \"{{ path('annonces_add_remove_to_user_wishlist',{ _locale : app.request.get('_locale') }) }}\";
                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        annonce_id: \$(this).attr('data-id')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.color == 'red') {
                            element.children().removeClass(\"far\");
                            element.children().addClass(\"fas\");
                            element.children().css('color', 'red');
                        } else if (response.color == 'black') {
                            element.children().removeClass(\"fas\");
                            element.children().addClass(\"far\");
                            element.children().css('color', 'grey');
                        } else if (response.status == 401) {
                            window.location = \"{{ path('app_login') }}\";
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });

        });

        toastr.options = {
            \"closeButton\": true,
            \"debug\": false,
            \"newestOnTop\": false,
            \"progressBar\": true,
            \"positionClass\": \"toast-top-center\",
            \"preventDuplicates\": false,
            \"onclick\": null,
            \"showDuration\": \"200\",
            \"hideDuration\": \"800\",
            \"timeOut\": \"3000\",
            \"extendedTimeOut\": \"800\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        };
    </script>
{% endblock %}", "annonces/details.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/annonces/details.html.twig");
    }
}
