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

/* home/content.html.twig */
class __TwigTemplate_385ae4238898b477b9f539bae2050b29 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "descriptiveContent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/content.html.twig"));

        $this->parent = $this->loadTemplate("descriptiveContent.html.twig", "home/content.html.twig", 1);
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
        yield "\t";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
\t<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png"), "html", null, true);
        yield "\"/>
\t<meta name=\"msapplication-TileImage\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\"/>
\t<meta name=\"title\" content=\"";
        // line 7
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "locale", [], "any", false, false, false, 7) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 7, $this->source); })()), "postExcerpt", [], "any", false, false, false, 7) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 7, $this->source); })()), "postExcerpt", [], "any", false, false, false, 7), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 7, $this->source); })()), "getPostTitle", [], "any", false, false, false, 7), "html", null, true);
        }
        yield "\">
\t<meta name=\"description\" content=\"";
        // line 8
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 8, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 8, $this->source); })()), "getMetaValue", [], "any", false, false, false, 8), "html", null, true);
        }
        yield "\">
\t<link rel=\"canonical\" href=\"";
        // line 9
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 9, $this->source); })()), "getPostName", [], "any", false, false, false, 9) == "a-propos") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 9, $this->source); })()), "getPostName", [], "any", false, false, false, 9) == "le-centre-daide-trust-market")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 9, $this->source); })()), "getPostName", [], "any", false, false, false, 9) == "nos-conditions"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["idPage"]) || array_key_exists("idPage", $context) ? $context["idPage"] : (function () { throw new RuntimeError('Variable "idPage" does not exist.', 9, $this->source); })()), "getPostName", [], "any", false, false, false, 9)])), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["idPage"]) || array_key_exists("idPage", $context) ? $context["idPage"] : (function () { throw new RuntimeError('Variable "idPage" does not exist.', 9, $this->source); })()), "getPostName", [], "any", false, false, false, 9), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 9, $this->source); })()), "getPostName", [], "any", false, false, false, 9)])), "html", null, true);
        }
        yield "\">
\t";
        // line 11
        yield "\t<meta property=\"og:title\" content=\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "locale", [], "any", false, false, false, 11) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 11, $this->source); })()), "postExcerpt", [], "any", false, false, false, 11) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 11, $this->source); })()), "postExcerpt", [], "any", false, false, false, 11), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 11, $this->source); })()), "getPostTitle", [], "any", false, false, false, 11), "html", null, true);
        }
        yield "\">
\t<meta property=\"og:description\" content=\"";
        // line 12
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 12, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 12, $this->source); })()), "getMetaValue", [], "any", false, false, false, 12), "html", null, true);
        }
        yield "\">
\t<meta property=\"og:image\" content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 15
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 15, $this->source); })()), "getPostName", [], "any", false, false, false, 15) == "a-propos") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 15, $this->source); })()), "getPostName", [], "any", false, false, false, 15) == "le-centre-daide-trust-market")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 15, $this->source); })()), "getPostName", [], "any", false, false, false, 15) == "nos-conditions"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["idPage"]) || array_key_exists("idPage", $context) ? $context["idPage"] : (function () { throw new RuntimeError('Variable "idPage" does not exist.', 15, $this->source); })()), "getPostName", [], "any", false, false, false, 15)])), "html", null, true);
            yield "
\t";
        } else {
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["idPage"]) || array_key_exists("idPage", $context) ? $context["idPage"] : (function () { throw new RuntimeError('Variable "idPage" does not exist.', 16, $this->source); })()), "getPostName", [], "any", false, false, false, 16), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 16, $this->source); })()), "getPostName", [], "any", false, false, false, 16)])), "html", null, true);
        }
        yield "\">
\t";
        // line 18
        yield "
\t";
        // line 20
        yield "\t<meta name=\"twitter:card\" content=\"summary\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"";
        // line 22
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "locale", [], "any", false, false, false, 22) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 22, $this->source); })()), "postExcerpt", [], "any", false, false, false, 22) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 22, $this->source); })()), "postExcerpt", [], "any", false, false, false, 22), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 22, $this->source); })()), "getPostTitle", [], "any", false, false, false, 22), "html", null, true);
        }
        yield "\">
\t<meta name=\"twitter:description\" content=\"";
        // line 23
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 23, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 23, $this->source); })()), "getMetaValue", [], "any", false, false, false, 23), "html", null, true);
        }
        yield "\">
\t<meta name=\"twitter:image\" content=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
\t<meta name=\"twitter:image:alt\" content=\"";
        // line 25
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "locale", [], "any", false, false, false, 25) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 25, $this->source); })()), "postExcerpt", [], "any", false, false, false, 25) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 25, $this->source); })()), "postExcerpt", [], "any", false, false, false, 25), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 25, $this->source); })()), "getPostTitle", [], "any", false, false, false, 25), "html", null, true);
        }
        yield "\">
\t";
        // line 27
        yield "
\t";
        // line 29
        yield "\t<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 33, $this->source); })()), "getPostName", [], "any", false, false, false, 33), "html", null, true);
        yield "\",
\t\t\"description\": \"";
        // line 34
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 34, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 34, $this->source); })()), "getMetaValue", [], "any", false, false, false, 34), "html", null, true);
        }
        yield "\"
\t}
\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "locale", [], "any", false, false, false, 39) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 39, $this->source); })()), "postExcerpt", [], "any", false, false, false, 39) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 39, $this->source); })()), "postExcerpt", [], "any", false, false, false, 39), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 39, $this->source); })()), "getPostTitle", [], "any", false, false, false, 39), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 41
        yield "\t";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
\t<!-- Your custom styles (optional) -->
\t<link href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
\t<style>
\t\t.chat-menu a {
\t\t\tborder-radius: 50%;
\t\t\tbackground-color: transparent;
\t\t\twidth: 100%;
\t\t}
\t\t.breadcrumb {
\t\t\tbackground-color: white;
\t\t}

\t\t.breadcrumb a {
\t\t\tcolor: #000000;
\t\t}
\t\t
\t\t.breadcrumb a:hover {
\t\t\tcolor: #f17c30;
\t\t}
\t</style>
\t<link href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-aide.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 67
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 69
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

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
\t<main class=\"text-center mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb pl-0\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a target=\"_blank\" href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["idPage"]) || array_key_exists("idPage", $context) ? $context["idPage"] : (function () { throw new RuntimeError('Variable "idPage" does not exist.', 79, $this->source); })()), "getPostName", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["idPage"]) || array_key_exists("idPage", $context) ? $context["idPage"] : (function () { throw new RuntimeError('Variable "idPage" does not exist.', 79, $this->source); })()), "getPostName", [], "any", false, false, false, 79)), ["-" => " "]), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t\t<ul class=\"list-group text-left\">
\t\t\t\t\t\t";
        // line 83
        if (((isset($context["tsm"]) || array_key_exists("tsm", $context) ? $context["tsm"] : (function () { throw new RuntimeError('Variable "tsm" does not exist.', 83, $this->source); })()) == (isset($context["tsmp"]) || array_key_exists("tsmp", $context) ? $context["tsmp"] : (function () { throw new RuntimeError('Variable "tsmp" does not exist.', 83, $this->source); })()))) {
            // line 84
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_menu"]) || array_key_exists("sous_menu", $context) ? $context["sous_menu"] : (function () { throw new RuntimeError('Variable "sous_menu" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 85
                yield "\t\t\t\t\t\t\t\t";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 85))) > 0)) {
                    // line 86
                    yield "\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-flush ";
                    if ((((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 86, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 86)) && ((isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 86, $this->source); })()) != "nos-conditions"))) {
                        yield " current-menu-item ";
                    }
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                 \">
\t\t\t\t\t\t\t\t\t\t";
                    // line 87
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 87) == 480)) {
                        // line 88
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_index");
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 89
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "locale", [], "any", false, false, false, 89) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 89) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 89), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 89), "html", null, true);
                        }
                        // line 90
                        yield "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 91
$context["m"], "id", [], "any", false, false, false, 91) == 3742)) {
                        // line 92
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires");
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 93
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "locale", [], "any", false, false, false, 93) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 93) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 93), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 93), "html", null, true);
                        }
                        // line 94
                        yield "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 96
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["idPage"]) || array_key_exists("idPage", $context) ? $context["idPage"] : (function () { throw new RuntimeError('Variable "idPage" does not exist.', 96, $this->source); })()), "postName", [], "any", false, false, false, 96), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postName", [], "any", false, false, false, 96)]), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 97
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "locale", [], "any", false, false, false, 97) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 97) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 97), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 97), "html", null, true);
                        }
                        // line 98
                        yield "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 100
                    yield "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                // line 102
                yield "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "\t\t\t\t\t\t";
        } else {
            // line 104
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_menu_parent"]) || array_key_exists("sous_menu_parent", $context) ? $context["sous_menu_parent"] : (function () { throw new RuntimeError('Variable "sous_menu_parent" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 105
                yield "\t\t\t\t\t\t\t\t<li class=\"list-group-item  ";
                if ((((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 105, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 105)) && ((isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 105, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postName", [], "any", false, false, false, 105)))) {
                    yield " current-menu-item ";
                }
                yield "\">
\t\t\t\t\t\t\t\t\t";
                // line 106
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 106) != "")) {
                    // line 107
                    yield "\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuParent"]) || array_key_exists("menuParent", $context) ? $context["menuParent"] : (function () { throw new RuntimeError('Variable "menuParent" does not exist.', 107, $this->source); })()), "postName", [], "any", false, false, false, 107), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postName", [], "any", false, false, false, 107)]), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 108
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "locale", [], "any", false, false, false, 108) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 108) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 108), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 108), "html", null, true);
                    }
                    yield "</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 110
                yield "\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t\t\t\t\t\t\t";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_menu"]) || array_key_exists("sous_menu", $context) ? $context["sous_menu"] : (function () { throw new RuntimeError('Variable "sous_menu" does not exist.', 111, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
                    // line 112
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postParent", [], "any", false, false, false, 112) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 112))) {
                        // line 113
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-flush  ";
                        if (((isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 113, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postName", [], "any", false, false, false, 113))) {
                            yield " current-menu-item ";
                        }
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        // line 114
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuParent"]) || array_key_exists("menuParent", $context) ? $context["menuParent"] : (function () { throw new RuntimeError('Variable "menuParent" does not exist.', 114, $this->source); })()), "postName", [], "any", false, false, false, 114), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postName", [], "any", false, false, false, 114)]), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 115
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "locale", [], "any", false, false, false, 115) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 115) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 115), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postTitle", [], "any", false, false, false, 115), "html", null, true);
                        }
                        // line 116
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 119
                    yield "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['m1'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "\t\t\t\t\t\t";
        }
        // line 124
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9 text-left\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 130
        yield "\t\t\t\t\t\t\t";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "locale", [], "any", false, false, false, 130) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 130, $this->source); })()), "postContentFiltered", [], "any", false, false, false, 130) != ""))) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 130, $this->source); })()), "postContentFiltered", [], "any", false, false, false, 130);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 130, $this->source); })()), "postContent", [], "any", false, false, false, 130);
        }
        // line 131
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<!-- Full background slider jQuery plugin -->
\t<script type=\"text/javascript\" src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
\t<script>
\$(document).ready(function () {
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});

let url_background = \"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 152, $this->source); })()), "guid", [], "any", false, false, false, 152), "html", null, true);
        yield "\"
if (url_background.includes('wp-content')) {
\t\$('#imageHolder').css(\"background-image\", url_background); 
}

// Hambuger menu icon
\$('.animated-button-icon').on('click', function () {
\$('.animated-icon2').toggleClass('open');
});

// Recherche avancer
\$(\"#recherche-avancer\").click(function () {
\$(\"#sectionAvancer\").toggleClass('d-none');
});

// first thing turn Hide Menu Search bar
\$(\"#searchMenu\").hide();
// toggle menu search bar on/off
\$(\"#searchMenuShowHide\").click(function () {
\$(\"#searchMenu\").toggle(\"slide\");
});
});

// Style Menu and SubMenu
\t</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/content.html.twig";
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
        return array (  561 => 152,  547 => 141,  541 => 139,  531 => 138,  517 => 131,  510 => 130,  503 => 124,  500 => 123,  492 => 120,  486 => 119,  481 => 116,  475 => 115,  471 => 114,  464 => 113,  461 => 112,  457 => 111,  454 => 110,  445 => 108,  440 => 107,  438 => 106,  431 => 105,  426 => 104,  423 => 103,  417 => 102,  413 => 100,  409 => 98,  403 => 97,  398 => 96,  394 => 94,  388 => 93,  383 => 92,  381 => 91,  378 => 90,  372 => 89,  367 => 88,  365 => 87,  358 => 86,  355 => 85,  350 => 84,  348 => 83,  339 => 79,  335 => 78,  325 => 71,  315 => 70,  299 => 69,  288 => 67,  278 => 66,  268 => 64,  246 => 45,  242 => 44,  238 => 43,  232 => 41,  222 => 40,  199 => 39,  185 => 34,  181 => 33,  175 => 29,  172 => 27,  164 => 25,  160 => 24,  154 => 23,  146 => 22,  142 => 20,  139 => 18,  134 => 16,  128 => 15,  123 => 13,  117 => 12,  108 => 11,  100 => 9,  94 => 8,  86 => 7,  82 => 6,  78 => 5,  73 => 4,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'descriptiveContent.html.twig' %}

{% block head %}
\t{{ parent() }}
\t<link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png') }}\"/>
\t<meta name=\"msapplication-TileImage\" content=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')}}\"/>
\t<meta name=\"title\" content=\"{% if app.request.locale == 'en' and contenu.postExcerpt != '' %}{{ contenu.postExcerpt }}{% else %}{{ contenu.getPostTitle }}{% endif %}\">
\t<meta name=\"description\" content=\"{% if meta_desc is not null %}{{meta_desc.getMetaValue}}{% endif %}\">
\t<link rel=\"canonical\" href=\"{% if contenu.getPostName == 'a-propos' or contenu.getPostName == 'le-centre-daide-trust-market' or contenu.getPostName == 'nos-conditions'  %}{{ absolute_url(path('site_navigation',{'navigation': idPage.getPostName })) }}{% else %}{{ absolute_url(path('page_navigation',{'idPage': idPage.getPostName, 'id': contenu.getPostName })) }}{% endif %}\">
\t{# OG CONTENT #}
\t<meta property=\"og:title\" content=\"{% if app.request.locale == 'en' and contenu.postExcerpt != '' %}{{ contenu.postExcerpt }}{% else %}{{ contenu.getPostTitle }}{% endif %}\">
\t<meta property=\"og:description\" content=\"{% if meta_desc is not null %}{{meta_desc.getMetaValue}}{% endif %}\">
\t<meta property=\"og:image\" content=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')}}\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"{% if contenu.getPostName == 'a-propos' or contenu.getPostName == 'le-centre-daide-trust-market' or contenu.getPostName == 'nos-conditions'  %}{{ absolute_url(path('site_navigation',{'navigation': idPage.getPostName })) }}
\t{% else %}{{ absolute_url(path('page_navigation',{'idPage': idPage.getPostName, 'id': contenu.getPostName })) }}{% endif %}\">
\t{# END OG CONTENT #}

\t{# Twitter CARD #}
\t<meta name=\"twitter:card\" content=\"summary\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"{% if app.request.locale == 'en' and contenu.postExcerpt != '' %}{{ contenu.postExcerpt }}{% else %}{{ contenu.getPostTitle }}{% endif %}\">
\t<meta name=\"twitter:description\" content=\"{% if meta_desc is not null %}{{meta_desc.getMetaValue}}{% endif %}\">
\t<meta name=\"twitter:image\" content=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\">
\t<meta name=\"twitter:image:alt\" content=\"{% if app.request.locale == 'en' and contenu.postExcerpt != '' %}{{ contenu.postExcerpt }}{% else %}{{ contenu.getPostTitle }}{% endif %}\">
\t{# END Twitter Card #}

\t{# JSON LD #}
\t<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"{{contenu.getPostName}}\",
\t\t\"description\": \"{% if meta_desc is not null %}{{meta_desc.getMetaValue}}{% endif %}\"
\t}
\t</script>
\t{# END JSON LD #}
{% endblock %}
{% block title %}{{ parent() }} | {% if app.request.locale == 'en' and contenu.postExcerpt != '' %}{{ contenu.postExcerpt }}{% else %}{{ contenu.getPostTitle }}{% endif %}{% endblock %}
{% block style %}
\t{{ parent() }}
\t<!-- Your custom styles (optional) -->
\t<link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/result.css')}}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/custome.css') }} \" rel=\"stylesheet\">
\t<style>
\t\t.chat-menu a {
\t\t\tborder-radius: 50%;
\t\t\tbackground-color: transparent;
\t\t\twidth: 100%;
\t\t}
\t\t.breadcrumb {
\t\t\tbackground-color: white;
\t\t}

\t\t.breadcrumb a {
\t\t\tcolor: #000000;
\t\t}
\t\t
\t\t.breadcrumb a:hover {
\t\t\tcolor: #f17c30;
\t\t}
\t</style>
\t<link href=\"{{ asset('assets/css/style-aide.css') }} \" rel=\"stylesheet\">
{% endblock %}
{% block header %}
\t{{ parent() }}
{% endblock %}
{% block navigation  %}{% endblock %}
{% block body %}
{{ parent() }}
\t<main class=\"text-center mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb pl-0\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('home')}}\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a target=\"_blank\" href=\"{{path('site_navigation', {navigation: idPage.getPostName})}}\">{{idPage.getPostName|capitalize|replace({\"-\": \" \"})}}</a></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t\t<ul class=\"list-group text-left\">
\t\t\t\t\t\t{% if tsm==tsmp %}
\t\t\t\t\t\t\t{% for m in sous_menu %}
\t\t\t\t\t\t\t\t{% if m.postTitle|trim|length > 0 %}
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-flush {% if id == m.id and navigation != 'nos-conditions' %} current-menu-item {% endif %}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                 \">
\t\t\t\t\t\t\t\t\t\t{% if m.id == 480 %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"{{ path('experience_index') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and m.postExcerpt != '' %}{{ m.postExcerpt }}{% else %}{{ m.postTitle }}{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% elseif m.id == 3742 %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"{{ path('experience_envoyez_commentaires') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and m.postExcerpt != '' %}{{ m.postExcerpt }}{% else %}{{ m.postTitle }}{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"{{ path('page_navigation', { idPage: idPage.postName ,id: m.postName }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and m.postExcerpt != '' %}{{ m.postExcerpt }}{% else %}{{ m.postTitle }}{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% for m in sous_menu_parent %}
\t\t\t\t\t\t\t\t<li class=\"list-group-item  {% if id == m.id and navigation == m.postName %} current-menu-item {% endif %}\">
\t\t\t\t\t\t\t\t\t{% if m.postTitle != \"\" %}
\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"{{ path('page_navigation', { idPage: menuParent.postName, id: m.postName }) }}\">
\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and m.postExcerpt != '' %}{{ m.postExcerpt }}{% else %}{{ m.postTitle }}{% endif %}</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t\t\t\t\t\t\t{% for m1 in sous_menu %}
\t\t\t\t\t\t\t\t\t\t\t{% if m1.postParent == m.id %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-flush  {% if navigation == m1.postName %} current-menu-item {% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"{{ path('page_navigation', {idPage: menuParent.postName, id: m1.postName}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and m1.postExcerpt != '' %}{{ m1.postExcerpt }}{% else %}{{ m1.postTitle }}{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9 text-left\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{#  {{dump(sous_menu_parent)}} #}
\t\t\t\t\t\t\t{% if app.request.locale == 'en' and contenu.postContentFiltered != '' %}{{ contenu.postContentFiltered | raw }}{% else %}{{ contenu.postContent | raw }}{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
{% block javascripts %}
\t{{ parent() }}
\t<!-- Full background slider jQuery plugin -->
\t<script type=\"text/javascript\" src=\"{{ asset('assets/js/fullclip.min.js') }}\"></script>
\t<script>
\$(document).ready(function () {
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});

let url_background = \"{{contenu.guid}}\"
if (url_background.includes('wp-content')) {
\t\$('#imageHolder').css(\"background-image\", url_background); 
}

// Hambuger menu icon
\$('.animated-button-icon').on('click', function () {
\$('.animated-icon2').toggleClass('open');
});

// Recherche avancer
\$(\"#recherche-avancer\").click(function () {
\$(\"#sectionAvancer\").toggleClass('d-none');
});

// first thing turn Hide Menu Search bar
\$(\"#searchMenu\").hide();
// toggle menu search bar on/off
\$(\"#searchMenuShowHide\").click(function () {
\$(\"#searchMenu\").toggle(\"slide\");
});
});

// Style Menu and SubMenu
\t</script>

{% endblock %}
", "home/content.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/home/content.html.twig");
    }
}
