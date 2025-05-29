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

/* blog/details.html.twig */
class __TwigTemplate_46c9ecaa1ecdc2c512b38a3233ee2b3f extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "generalLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/details.html.twig"));

        $this->parent = $this->loadTemplate("generalLayout.html.twig", "blog/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <meta name=\"title\"
          content=\"";
        // line 7
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "locale", [], "any", false, false, false, 7) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 7, $this->source); })()), "postExcerpt", [], "any", false, false, false, 7) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 7, $this->source); })()), "postExcerpt", [], "any", false, false, false, 7), "html", null, true);
            yield " ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 7, $this->source); })()), "postTitle", [], "any", false, false, false, 7), "html", null, true);
            yield " ";
        }
        yield "\">
    <meta name=\"description\" content=\"";
        // line 8
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 8, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 8, $this->source); })()), "getMetaValue", [], "any", false, false, false, 8), "html", null, true);
        }
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "postName", [], "any", false, false, false, 9)])), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "postName", [], "any", false, false, false, 10)])), "html", null, true);
        yield "\">
    <meta property=\"og:title\"
          content=\"";
        // line 12
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "postExcerpt", [], "any", false, false, false, 12) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "postExcerpt", [], "any", false, false, false, 12), "html", null, true);
            yield " ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "postTitle", [], "any", false, false, false, 12), "html", null, true);
            yield " ";
        }
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 13
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 13, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 13, $this->source); })()), "getMetaValue", [], "any", false, false, false, 13), "html", null, true);
        }
        yield "\">

    <meta property=\"og:image\" content=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "guid", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "postName", [], "any", false, false, false, 17)])), "html", null, true);
        yield "\">
    <meta property=\"og:locale\" content=\"fr\"/>
    <meta property=\"og:locale:alternate\" content=\"en\"/>

    ";
        // line 22
        yield "    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:creator\" content=\"Kbr Global\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\"
          content=\"";
        // line 26
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "locale", [], "any", false, false, false, 26) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "postExcerpt", [], "any", false, false, false, 26) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "postExcerpt", [], "any", false, false, false, 26), "html", null, true);
            yield " ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "postTitle", [], "any", false, false, false, 26), "html", null, true);
            yield " ";
        }
        yield "\">
    <meta name=\"twitter:description\" content=\"";
        // line 27
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 27, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 27, $this->source); })()), "getMetaValue", [], "any", false, false, false, 27), "html", null, true);
        }
        yield "\">
    <meta name=\"twitter:image\" content=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "guid", [], "any", false, false, false, 28), "html", null, true);
        yield "\">
    <meta name=\"twitter:image:alt\"
          content=\"";
        // line 30
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "locale", [], "any", false, false, false, 30) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "postExcerpt", [], "any", false, false, false, 30) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "postExcerpt", [], "any", false, false, false, 30), "html", null, true);
            yield " ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "postTitle", [], "any", false, false, false, 30), "html", null, true);
            yield " ";
        }
        yield "\">
    ";
        // line 32
        yield "
    <script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"https://schema.org\", 
\t\t\t\"@type\": \"Article\",
\t\t\t\"headline\": \"";
        // line 37
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "locale", [], "any", false, false, false, 37) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "postExcerpt", [], "any", false, false, false, 37) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "postExcerpt", [], "any", false, false, false, 37), "html", null, true);
            yield " ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "postTitle", [], "any", false, false, false, 37), "html", null, true);
            yield " ";
        }
        yield "\",
\t\t\t\"alternativeHeadline\": \"Blog Trust&Market\",
\t\t\t\"image\": \"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 39, $this->source); })()), "guid", [], "any", false, false, false, 39), "html", null, true);
        yield "\",
\t\t\t\"author\": \"Kalide Brassier\",
\t\t\t\"editor\": \"Kbr Global\", 
\t\t\t\"genre\": \"Event\", 
\t\t\t\"keywords\": \"\", 
\t\t\t\"wordcount\": \"";
        // line 44
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "locale", [], "any", false, false, false, 44) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "postContentFiltered", [], "any", false, false, false, 44) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "postContentFiltered", [], "any", false, false, false, 44))), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "postContent", [], "any", false, false, false, 44))), "html", null, true);
        }
        yield "\",
\t\t\t\"publisher\": {
\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\"name\": \"Google\",
\t\t\t\t\"logo\": {
\t\t\t\t\"@type\": \"ImageObject\",
\t\t\t\t\"url\": \"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
\t\t\t\t}
\t\t\t},
\t\t\t\"url\": \"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 53, $this->source); })()), "postName", [], "any", false, false, false, 53)])), "html", null, true);
        yield "\",
\t\t\t\"mainEntityOfPage\": {
\t\t\t\t\"@type\": \"WebPage\",
\t\t\t\t\"@id\": \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 56, $this->source); })()), "postName", [], "any", false, false, false, 56)])), "html", null, true);
        yield "\"
\t\t\t},
\t\t\t\"datePublished\": \"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 58, $this->source); })()), "getPostDate", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\t\"dateCreated\": \"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })()), "getPostDate", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\t\"dateModified\": \"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 60, $this->source); })()), "getPostDate", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\t\"description\": \"";
        // line 61
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 61, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 61, $this->source); })()), "getMetaValue", [], "any", false, false, false, 61), "html", null, true);
        }
        yield "\",
\t\t\t\"sameAs\": [
\t\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t\t]
\t\t}

    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Blog T&M | ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "locale", [], "any", false, false, false, 75) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 75, $this->source); })()), "postExcerpt", [], "any", false, false, false, 75) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 75, $this->source); })()), "postExcerpt", [], "any", false, false, false, 75)), "truncate", [45, "...", false], "method", false, false, false, 75), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 75, $this->source); })()), "postTitle", [], "any", false, false, false, 75)), "truncate", [45, "...", false], "method", false, false, false, 75), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 78
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\"
          integrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"
          crossorigin=\"anonymous\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Your custom styles (optional) -->
    <link rel=\"stylesheet\" href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/single-post.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\">
    <style>
        .breadcrumb-item + .breadcrumb-item::before {
            content: \"|\";
        }

        .breadcrumb {
            background-color: white;
        }

        .breadcrumb a {
            color: #000000;
        }

        .breadcrumb a:hover {
            color: #f17c30;
        }
        strong {
            font-weight: bold;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 115
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 120
        yield "
    <div id=\"imageHolder\" class=\"view intro-2\">
        <div class=\"full-bg-img\">
            <div class=\"mask rgba-purple-light flex-center\">
                <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                    <h2 class=\"page-title\"></h2>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 135
        yield "
    <!--Main layout-->
    <main class=\"mt-5 pt-5\">
        <div class=\"container\">
            <!--Section: Post-->
            <section class=\"mt-4\">
                <!--Grid row-->
                <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-md-12 mb-4\">
                        <div class=\"article-container\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb pl-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
                                    <li class=\"breadcrumb-item\"><a target=\"_blank\" href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        yield "\">Blog</a></li>
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index", ["categorie" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 151, $this->source); })()), "slug", [], "any", false, false, false, 151)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 151, $this->source); })()), "slug", [], "any", false, false, false, 151)), "html", null, true);
        yield "</a></li>
                                </ol>
                            </nav>
                            ";
        // line 159
        yield "                            <h1 class=\"\">";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "request", [], "any", false, false, false, 159), "locale", [], "any", false, false, false, 159) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 159, $this->source); })()), "postExcerpt", [], "any", false, false, false, 159) != ""))) {
            // line 160
            yield "                                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 160, $this->source); })()), "postExcerpt", [], "any", false, false, false, 160);
            yield "
                                ";
        } else {
            // line 162
            yield "                                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 162, $this->source); })()), "postTitle", [], "any", false, false, false, 162);
            yield "
                                ";
        }
        // line 163
        yield "</h1>

                            <!--Featured Image-->
                            ";
        // line 166
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 166, $this->source); })()), "guid", [], "any", false, false, false, 166) != "") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 166, $this->source); })()), "guid", [], "any", false, false, false, 166) != null))) {
            // line 167
            yield "                                <div class=\"card mb-4 wow fadeIn\">
                                    <img src=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 168, $this->source); })()), "guid", [], "any", false, false, false, 168), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 168, $this->source); })()), "postTitle", [], "any", false, false, false, 168), "html", null, true);
            yield "\">
                                </div>
                            ";
        }
        // line 171
        yield "                            <!--/.Featured Image-->

                            <!--Card-->
                            <div class=\"card mb-4 wow fadeIn\">
                                <!--Card content-->
                                <div class=\"card-body\">
                                    ";
        // line 177
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "request", [], "any", false, false, false, 177), "locale", [], "any", false, false, false, 177) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 177, $this->source); })()), "postContentFiltered", [], "any", false, false, false, 177) != ""))) {
            // line 178
            yield "                                        ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 178, $this->source); })()), "postContentFiltered", [], "any", false, false, false, 178);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 178, $this->source); })()), "postContent", [], "any", false, false, false, 178);
        }
        // line 179
        yield "                                </div>

                            </div>
                            ";
        // line 183
        yield "                            <!--Comments-->
                            <div class=\"card card-comments mb-3 wow fadeIn\">
                                <div class=\"card-header font-weight-bold\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbrComments"]) || array_key_exists("nbrComments", $context) ? $context["nbrComments"] : (function () { throw new RuntimeError('Variable "nbrComments" does not exist.', 185, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commentaires", [], "blog");
        yield "</div>
                                <div class=\"card-body\">
                                    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listeCommentaires"]) || array_key_exists("listeCommentaires", $context) ? $context["listeCommentaires"] : (function () { throw new RuntimeError('Variable "listeCommentaires" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 188
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_parent", [], "any", false, false, false, 188) == 0)) {
                // line 189
                yield "                                            <div class=\"media d-block d-md-flex mt-4\"
                                                 data-comment=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_post_ID", [], "any", false, false, false, 190), "html", null, true);
                yield "\"
                                                 data-comment-user=\"";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user_id", [], "any", false, false, false, 191), "html", null, true);
                yield "\">
                                                ";
                // line 192
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_agent", [], "any", false, false, false, 192) == false)) {
                    // line 193
                    yield "                                                    <img class=\"d-flex mb-3 mx-auto\" src=\"/assets/img/profile/avatar-profile.png\" alt=\"Generic placeholder image\">
                                                ";
                } else {
                    // line 195
                    yield "                                                    <img class=\"d-flex mb-3 mx-auto \" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_agent", [], "any", false, false, false, 195)), "html", null, true);
                    yield "\" alt=\"profile photo\">
                                                ";
                }
                // line 197
                yield "                                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                                    ";
                // line 198
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_parent", [], "any", false, false, false, 198) == 0)) {
                    // line 199
                    yield "                                                        <h5 class=\"mt-0 font-weight-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_author", [], "any", false, false, false, 199), "html", null, true);
                    yield "
                                                            <a href=\"#\" class=\"pull-right reply\"
                                                               data-comment=\"";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_post_ID", [], "any", false, false, false, 201), "html", null, true);
                    yield "\"
                                                               data-form=\"";
                    // line 202
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_ID", [], "any", false, false, false, 202), "html", null, true);
                    yield "\"
                                                               data-comment-user=\"";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user_id", [], "any", false, false, false, 203), "html", null, true);
                    yield "\">
                                                                <i class=\"fas fa-reply\"></i>
                                                            </a>
                                                        </h5>
                                                        <div class=\"d-flex pb-3 timer\">
                                                            <time class=\"timeago\"
                                                                  datetime=\"";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_date", [], "any", false, false, false, 209), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_date", [], "any", false, false, false, 209), "html", null, true);
                    yield "</time>
                                                        </div>
                                                    ";
                }
                // line 212
                yield "
                                                    ";
                // line 213
                yield CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_content", [], "any", false, false, false, 213);
                yield "

                                                </div>
                                            </div>
                                        ";
            }
            // line 218
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_parent", [], "any", false, false, false, 218) != 0)) {
                // line 219
                yield "                                            <div class=\"media d-block d-md-flex mt-4 ml-6 border-left\">
                                                ";
                // line 220
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_agent", [], "any", false, false, false, 220) == false)) {
                    // line 221
                    yield "                                                    <img class=\"d-flex mb-3 mx-auto \"
                                                         src=\"";
                    // line 222
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "session", [], "any", false, false, false, 222), "get", ["avatar"], "method", false, false, false, 222) != "")) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "session", [], "any", false, false, false, 222), "get", ["avatar"], "method", false, false, false, 222), "html", null, true);
                    } else {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                        yield " ";
                    }
                    yield "\"
                                                         alt=\"Generic placeholder image\">
                                                ";
                } else {
                    // line 225
                    yield "                                                    <img class=\"d-flex mb-3 mx-auto \" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_agent", [], "any", false, false, false, 225)), "html", null, true);
                    yield "\"
                                                         alt=\"Generic placeholder image\">
                                                ";
                }
                // line 228
                yield "                                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                                    <h5 class=\"mt-0 font-weight-bold\">";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_author", [], "any", false, false, false, 229), "html", null, true);
                yield "
                                                        <a href=\"#\" class=\"pull-right reply\"
                                                           data-comment=\"";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_post_ID", [], "any", false, false, false, 231), "html", null, true);
                yield "\"
                                                           data-form=\"";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_ID", [], "any", false, false, false, 232), "html", null, true);
                yield "\"
                                                           data-comment-user=\"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user_id", [], "any", false, false, false, 233), "html", null, true);
                yield "\">
                                                            <i class=\"fas fa-reply\"></i>
                                                        </a>
                                                    </h5>
                                                    <div class=\"d-flex pb-3 timer\">
                                                        <time class=\"timeago\"
                                                              datetime=\"";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_date", [], "any", false, false, false, 239), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_date", [], "any", false, false, false, 239), "html", null, true);
                yield "</time>
                                                    </div>
                                                    ";
                // line 241
                yield CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_content", [], "any", false, false, false, 241);
                yield "
                                                </div>
                                            </div>
                                        ";
            }
            // line 245
            yield "                                        <div class=\"form_reply_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "comment_ID", [], "any", false, false, false, 245), "html", null, true);
            yield "  d-none\"></div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "                                </div>
                            </div>
                            <!--/.Comments-->

                            <!--Reply-->
                            <div class=\"card mb-3 wow fadeIn\">
                                <div class=\"card-header font-weight-bold\">
                                    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["listeCommentaires"]) || array_key_exists("listeCommentaires", $context) ? $context["listeCommentaires"] : (function () { throw new RuntimeError('Variable "listeCommentaires" does not exist.', 254, $this->source); })())) == 0)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbrComments"]) || array_key_exists("nbrComments", $context) ? $context["nbrComments"] : (function () { throw new RuntimeError('Variable "nbrComments" does not exist.', 254, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.titre1", [], "blog");
            yield "
                                    ";
        } else {
            // line 256
            yield "                                        ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.titre2", [], "blog");
            yield "
                                    ";
        }
        // line 258
        yield "                                </div>
                                <div class=\"card-body\">

                                    <!-- Default form reply -->
                                    <form id=\"addComment\" method=\"post\"action=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_addComment", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 262, $this->source); })()), "id", [], "any", false, false, false, 262)]), "html", null, true);
        yield "\">
                                        <!-- Comment -->
                                        <div class=\"form-group\">
                                            <label for=\"replyFormComment\">";
        // line 265
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.commentaire", [], "blog");
        yield "</label>
                                            <textarea class=\"form-control\" name=\"commentaire\" id=\"replyFormComment\" rows=\"5\" required></textarea>
                                        </div>
                                        ";
        // line 268
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "user", [], "any", false, false, false, 268) == null)) {
            // line 269
            yield "                                            <!-- Name -->
                                            <label for=\"replyFormName\">";
            // line 270
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.nom", [], "blog");
            yield "</label>
                                            <input type=\"text\" name=\"nom\" id=\"replyFormName\" class=\"form-control\" required>
                                            <br>
                                            <!-- Email -->
                                            <label for=\"replyFormEmail\">";
            // line 274
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.email", [], "blog");
            yield "</label>
                                            <input type=\"email\" name=\"emailAuthor\" id=\"replyFormEmail\" class=\"form-control\" required>
                                        ";
        }
        // line 277
        yield "                                        <br>

                                        <!-- Site internet -->
                                        <label for=\"replyFormSite\">";
        // line 280
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.site", [], "blog");
        yield "</label>
                                        <input type=\"text\" id=\"replyFormSite\" name=\"site\" class=\"form-control\">
                                        <div class=\"text-center mt-4\">
                                            <button class=\"btn btn-primary first-letter-is-uppercase btn-md sendComment\" type=\"submit\">";
        // line 283
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.publier", [], "blog");
        yield "</button>
                                        </div>
                                    </form>
                                    <!-- Default form reply -->
                                </div>
                            </div>
                            <!--/.Reply-->
                        </div>
                        <div style=\"margin-top: 6rem;\">
                            <h4>ARTICLES DISPONIBLES</h4>
                            <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        yield "\" target=\"_blank\"
                               style=\"color: #f17b30;text-decoration: underline;\">Consulter le blog<i class=\"fa fa-chevron-right\"></i></a>
                            <div class=\"col-md-12\" style=\"padding: 0;\">
                                <div id=\"news-slider\" class=\"owl-carousel\">
                                    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context) ? $context["lastArticles"] : (function () { throw new RuntimeError('Variable "lastArticles" does not exist.', 297, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 298
            yield "                                        <div class=\"post-slide item\">
                                            <a class=\"hover-orange\" target=\"_blank\"
                                               href=\"";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_name", [], "any", false, false, false, 300)]), "html", null, true);
            yield "\">
                                                <img class=\"box-prestation box-photograph overlay lazy\"
                                                     alt=\"";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 302), "html", null, true);
            yield "\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "imagePost", [], "any", false, false, false, 302), "html", null, true);
            yield "\"
                                                     style=\"background-image: url(";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "imagePost", [], "any", false, false, false, 303), "html", null, true);
            yield ");\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 303), "html", null, true);
            yield "
                                            </a>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <!-- <div
\t\t\t\t\t\tclass=\"col-md-4 mb-4 fixage\">
\t\t\t\t\t\t<a href=\"";
        // line 317
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        yield "\">
\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-1 font-weight-bold\">";
        // line 318
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("retour-blog", [], "blog");
        yield "</h5>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"card mb-4 wow fadeIn\">
\t\t\t\t\t\t\t<div class=\"card-header\">";
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("articles-cat", [], "blog");
        yield "</div>
\t\t\t\t\t\t\t<div class=\"card-body carteArticle\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["relatedPost"]) || array_key_exists("relatedPost", $context) ? $context["relatedPost"] : (function () { throw new RuntimeError('Variable "relatedPost" does not exist.', 324, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 325
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 325) <= 5)) {
                // line 326
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"media listeInterest\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-flex mr-3 liArticle\" width=\"80\" height=\"auto\" src=\"";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "imagePost", [], "any", false, false, false, 327), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 327), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_name", [], "any", false, false, false, 329)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-1 font-weight-bold\">";
                // line 330
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 330, $this->source); })()), "request", [], "any", false, false, false, 330), "locale", [], "any", false, false, false, 330) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title_en", [], "any", false, false, false, 330) != ""))) {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title_en", [], "any", false, false, false, 330);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 330);
                }
                yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 332
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "request", [], "any", false, false, false, 332), "locale", [], "any", false, false, false, 332) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "content_en", [], "any", false, false, false, 332) != ""))) {
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "content_en", [], "any", false, false, false, 332), "<p><h2><a><em>");
                    yield "(...)";
                } else {
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "descriptionPost", [], "any", false, false, false, 332), "<p>");
                    yield "(...)";
                }
                // line 333
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 336
            yield "\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> -->
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!--Section: Post-->
        </div>
    </main>
    <!--Main layout-->

    ";
        // line 350
        yield from $this->loadTemplate("partials/videoButton.html.twig", "blog/details.html.twig", 350)->unwrap()->yield($context);
        // line 351
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "blog/details.html.twig", 351)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 354
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 355
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <!-- Full background slider jQuery plugin -->
    <script type=\"text/javascript\" src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.10.2/jquery-ui.min.js\"
            integrity=\"sha256-FgiaQnQazF/QCrF9qSvpRY6PACn9ZF8VnlgqfqD1LsE=\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js")), "html", null, true);
        yield "\" defer></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script>
    <script>
        window.onload = verifSize();
        function verifSize() {
            \$('.fixage').css('bottom', '');
        }
        \$(window).resize(function () {

        });
        \$(document).ready(function () {

            ";
        // line 375
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "blog/details.html.twig", 375)->unwrap()->yield($context);
        // line 376
        yield "
            \$(\"#news-slider\").owlCarousel({
                center: true,
                items: 4,
                itemsDesktop: [
                    1199, 4
                ],
                itemsDesktopSmall: [
                    980, 3
                ],
                itemsMobile: [
                    600, 1
                ],
                navigation: true,
                navigationText: [
                    \"\", \"\"
                ],
                pagination: true,
                autoPlay: true,
                lazyLoad: true,
                autoplaySpeed: 1000
            });
        });

        function checkOffset() {
            var a = \$(document).scrollTop() + window.innerHeight;
            var b = \$('.footer').offset().top;
            if (a < b) {
                \$('.fixage').css('bottom', '');
            } else {
                \$('.fixage').css('bottom', (100 + (a - b)) + 'px');
            }
        }

        \$(document).ready(checkOffset);
        \$(document).scroll(checkOffset);
        \$(document).ready(function () {
            \$(\"time.timeago\").timeago();
            var i = 0;
            var form = `<form class=\"reply_comment\"  method=\"post\" action=\"";
        // line 415
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_rapid_add_Comment");
        yield "\">
                    <div class=\"form-group mt-4\">
                      <label for=\"quickReplyFormComment\">Votre commentaire</label>
                      <input  type=\"hidden\" name=\"parent_id\" value=\"\" class=\"parent_id\"  />
                      <input  type=\"hidden\" name=\"comment_id\" value=\"\" class=\"comment_id\"  />
                      <textarea required  name=\"commentaire\" class=\"form-control\" id=\"quickReplyFormComment\" rows=\"5\"></textarea>
                      <div class=\"text-center\">
                        <button class=\"btn btn-primary first-letter-is-uppercase btn-sm\" id=\"rapidSendComment\" type=\"submit\">Publier</button>
                      </div>
                    </div>
                  </form>`;

            \$('.reply').click(function (e) {
                e.preventDefault();
                let is_ident = \$(this).data('form');
                let comment = \$(this).data('comment');
                let user = \$(this).data('comment-user');

                \$('.form_reply_' + is_ident).html(form);
                \$('.parent_id').val(user);
                \$('.comment_id').val(comment);
                \$(this).attr('data-active', '1');
                \$('.form_reply_' + is_ident).toggleClass('d-none');

            })

            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });
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
            // Ajout rapide commentaire
            \$('form .reply_comment').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#reply_comment').addClass('running');
                toastr.info('";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "');
                var \$form = \$(this);
                var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                var data = (formdata !== null) ? formdata : \$form.serialize();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (reponse) {
                        if (reponse != 0) {
                            toastr.clear();
                            toastr.success('";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "');
                            window.location = \"\";
                        } else if (reponse == 0) {
                            \$('#rapidSendComment').removeClass('running');
                            toastr.clear();
                            toastr.error('";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
                        }
                    },
                    error: function (reponse) {
                        \$('#rapidSendComment').removeClass('running');
                        toastr.clear();
                        toastr.error('";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
                    }
                });
                return false;
            });
            // Ajout commentaire
            \$('#addComment').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#sendComment').addClass('running');
                toastr.info('";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "');
                var \$form = \$(this);
                var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                var data = (formdata !== null) ? formdata : \$form.serialize();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (reponse) {
                        if (reponse != 0) {
                            toastr.clear();
                            toastr.success('";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "');
                            window.location = \"\";
                        } else if (reponse == 0) {
                            \$('#sendComment').removeClass('running');
                            toastr.clear();
                            toastr.error('";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
                        }
                    },
                    error: function (reponse) {
                        \$('#sendComment').removeClass('running');
                        toastr.clear();
                        toastr.error('";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
                    }
                });
                return false;
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
            \"showDuration\": \"300\",
            \"hideDuration\": \"1000\",
            \"timeOut\": \"12000\",
            \"extendedTimeOut\": \"1000\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        ";
        // line 547
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 547, $this->source); })()), "session", [], "any", false, false, false, 547), "flashbag", [], "any", false, false, false, 547), "get", ["success"], "method", false, false, false, 547));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 548
            yield "        toastr.success('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
            yield "');";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        yield "    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 552
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 553
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/details.html.twig";
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
        return array (  1192 => 553,  1182 => 552,  1173 => 549,  1165 => 548,  1161 => 547,  1135 => 524,  1126 => 518,  1118 => 513,  1102 => 500,  1090 => 491,  1081 => 485,  1073 => 480,  1057 => 467,  1002 => 415,  961 => 376,  959 => 375,  944 => 363,  937 => 359,  933 => 358,  926 => 355,  916 => 354,  907 => 351,  905 => 350,  890 => 337,  876 => 336,  871 => 333,  863 => 332,  854 => 330,  850 => 329,  843 => 327,  840 => 326,  837 => 325,  820 => 324,  814 => 321,  808 => 318,  804 => 317,  792 => 307,  780 => 303,  774 => 302,  769 => 300,  765 => 298,  761 => 297,  754 => 293,  741 => 283,  735 => 280,  730 => 277,  724 => 274,  717 => 270,  714 => 269,  712 => 268,  706 => 265,  700 => 262,  694 => 258,  688 => 256,  680 => 254,  671 => 247,  662 => 245,  655 => 241,  648 => 239,  639 => 233,  635 => 232,  631 => 231,  626 => 229,  623 => 228,  616 => 225,  603 => 222,  600 => 221,  598 => 220,  595 => 219,  592 => 218,  584 => 213,  581 => 212,  573 => 209,  564 => 203,  560 => 202,  556 => 201,  550 => 199,  548 => 198,  545 => 197,  539 => 195,  535 => 193,  533 => 192,  529 => 191,  525 => 190,  522 => 189,  519 => 188,  515 => 187,  508 => 185,  504 => 183,  499 => 179,  493 => 178,  491 => 177,  483 => 171,  475 => 168,  472 => 167,  470 => 166,  465 => 163,  459 => 162,  453 => 160,  450 => 159,  442 => 151,  438 => 150,  434 => 149,  418 => 135,  408 => 134,  388 => 120,  378 => 119,  366 => 115,  356 => 114,  324 => 88,  319 => 86,  315 => 85,  304 => 78,  294 => 77,  272 => 75,  249 => 61,  245 => 60,  241 => 59,  237 => 58,  232 => 56,  226 => 53,  220 => 50,  207 => 44,  199 => 39,  186 => 37,  179 => 32,  167 => 30,  162 => 28,  156 => 27,  144 => 26,  138 => 22,  131 => 17,  126 => 15,  119 => 13,  107 => 12,  102 => 10,  98 => 9,  92 => 8,  80 => 7,  74 => 5,  64 => 4,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'generalLayout.html.twig' %}


{% block head %}
    {{ parent() }}
    <meta name=\"title\"
          content=\"{% if app.request.locale == 'en' and post.postExcerpt != '' %} {{ post.postExcerpt }} {% else %} {{ post.postTitle }} {% endif %}\">
    <meta name=\"description\" content=\"{% if meta_desc is not null %}{{ meta_desc.getMetaValue }}{% endif %}\">
    <link rel=\"canonical\" href=\"{{ absolute_url(path('blog_details_postBlog', {slug: post.postName})) }}\">
    <link rel=\"shortlink\" href=\"{{ absolute_url(path('blog_details_postBlog', {slug: post.postName})) }}\">
    <meta property=\"og:title\"
          content=\"{% if app.request.locale == 'en' and post.postExcerpt != '' %} {{ post.postExcerpt }} {% else %} {{ post.postTitle }} {% endif %}\">
    <meta property=\"og:description\" content=\"{% if meta_desc is not null %}{{ meta_desc.getMetaValue }}{% endif %}\">

    <meta property=\"og:image\" content=\"{{ post.guid }}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ absolute_url(path('blog_details_postBlog', {slug: post.postName})) }}\">
    <meta property=\"og:locale\" content=\"fr\"/>
    <meta property=\"og:locale:alternate\" content=\"en\"/>

    {# Twitter CARD #}
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:creator\" content=\"Kbr Global\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\"
          content=\"{% if app.request.locale == 'en' and post.postExcerpt != '' %} {{ post.postExcerpt }} {% else %} {{ post.postTitle }} {% endif %}\">
    <meta name=\"twitter:description\" content=\"{% if meta_desc is not null %}{{ meta_desc.getMetaValue }}{% endif %}\">
    <meta name=\"twitter:image\" content=\"{{ post.guid }}\">
    <meta name=\"twitter:image:alt\"
          content=\"{% if app.request.locale == 'en' and post.postExcerpt != '' %} {{ post.postExcerpt }} {% else %} {{ post.postTitle }} {% endif %}\">
    {# END Twitter Card #}

    <script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"https://schema.org\", 
\t\t\t\"@type\": \"Article\",
\t\t\t\"headline\": \"{% if app.request.locale == 'en' and post.postExcerpt != '' %} {{ post.postExcerpt }} {% else %} {{ post.postTitle }} {% endif %}\",
\t\t\t\"alternativeHeadline\": \"Blog Trust&Market\",
\t\t\t\"image\": \"{{ post.guid }}\",
\t\t\t\"author\": \"Kalide Brassier\",
\t\t\t\"editor\": \"Kbr Global\", 
\t\t\t\"genre\": \"Event\", 
\t\t\t\"keywords\": \"\", 
\t\t\t\"wordcount\": \"{% if app.request.locale == 'en' and post.postContentFiltered != '' %}{{ post.postContentFiltered|striptags()|length }}{% else %}{{ post.postContent|striptags()|length }}{% endif %}\",
\t\t\t\"publisher\": {
\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\"name\": \"Google\",
\t\t\t\t\"logo\": {
\t\t\t\t\"@type\": \"ImageObject\",
\t\t\t\t\"url\": \"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png')) }}\"
\t\t\t\t}
\t\t\t},
\t\t\t\"url\": \"{{ absolute_url(path('blog_details_postBlog', {slug: post.postName})) }}\",
\t\t\t\"mainEntityOfPage\": {
\t\t\t\t\"@type\": \"WebPage\",
\t\t\t\t\"@id\": \"{{ absolute_url(path('blog_details_postBlog', {slug: post.postName})) }}\"
\t\t\t},
\t\t\t\"datePublished\": \"{{ post.getPostDate|date(\"d/m/Y\") }}\",
\t\t\t\"dateCreated\": \"{{ post.getPostDate|date(\"d/m/Y\") }}\",
\t\t\t\"dateModified\": \"{{ post.getPostDate|date(\"d/m/Y\") }}\",
\t\t\t\"description\": \"{% if meta_desc is not null %}{{ meta_desc.getMetaValue }}{% endif %}\",
\t\t\t\"sameAs\": [
\t\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t\t]
\t\t}

    </script>

{% endblock %}

{% block title %} Blog T&M | {% if app.request.locale == 'en' and post.postExcerpt != '' %}{{ post.postExcerpt|raw|u.truncate(45, '...', false) }}{% else %}{{ post.postTitle|raw| u.truncate(45, '...', false) }}{% endif %}{% endblock %}

{% block style %}
    {{ parent() }}
    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\"
          integrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"
          crossorigin=\"anonymous\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Your custom styles (optional) -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/custome.css') }}\">
    <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"{{ asset('assets/css/single-post.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\">
    <style>
        .breadcrumb-item + .breadcrumb-item::before {
            content: \"|\";
        }

        .breadcrumb {
            background-color: white;
        }

        .breadcrumb a {
            color: #000000;
        }

        .breadcrumb a:hover {
            color: #f17c30;
        }
        strong {
            font-weight: bold;
        }
    </style>
{% endblock %}


{% block header %}
    {{ parent() }}

{% endblock %}

{% block navigation %}

    <div id=\"imageHolder\" class=\"view intro-2\">
        <div class=\"full-bg-img\">
            <div class=\"mask rgba-purple-light flex-center\">
                <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                    <h2 class=\"page-title\"></h2>
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block body %}

    <!--Main layout-->
    <main class=\"mt-5 pt-5\">
        <div class=\"container\">
            <!--Section: Post-->
            <section class=\"mt-4\">
                <!--Grid row-->
                <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-md-12 mb-4\">
                        <div class=\"article-container\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb pl-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('home') }}\">Accueil</a></li>
                                    <li class=\"breadcrumb-item\"><a target=\"_blank\" href=\"{{ path('blog_index') }}\">Blog</a></li>
                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('blog_index',{'categorie':categorie.slug}) }}\">{{ categorie.slug|capitalize }}</a></li>
                                </ol>
                            </nav>
                            {#<p class=\"h1 mb-2\">{% if app.request.locale == 'en' and post.postExcerpt != '' %}
                                    {{ post.postExcerpt|raw }}
                                {% else %}
                                    {{ post.postTitle|raw }}
                                {% endif %}</p>#}
                            <h1 class=\"\">{% if app.request.locale == 'en' and post.postExcerpt != '' %}
                                    {{ post.postExcerpt|raw }}
                                {% else %}
                                    {{ post.postTitle|raw }}
                                {% endif %}</h1>

                            <!--Featured Image-->
                            {% if post.guid != \"\" and post.guid != null %}
                                <div class=\"card mb-4 wow fadeIn\">
                                    <img src=\"{{ post.guid }}\" class=\"img-fluid\" alt=\"{{ post.postTitle }}\">
                                </div>
                            {% endif %}
                            <!--/.Featured Image-->

                            <!--Card-->
                            <div class=\"card mb-4 wow fadeIn\">
                                <!--Card content-->
                                <div class=\"card-body\">
                                    {% if app.request.locale == 'en' and post.postContentFiltered != '' %}
                                        {{ post.postContentFiltered|raw }}{% else %}{{ post.postContent|raw }}{% endif %}
                                </div>

                            </div>
                            {#  {{dump(listeCommentaires)}} #}
                            <!--Comments-->
                            <div class=\"card card-comments mb-3 wow fadeIn\">
                                <div class=\"card-header font-weight-bold\">{{ nbrComments }} {{ 'commentaires'|trans({}, 'blog')|raw }}</div>
                                <div class=\"card-body\">
                                    {% for c in listeCommentaires %}
                                        {% if c.comment_parent == 0 %}
                                            <div class=\"media d-block d-md-flex mt-4\"
                                                 data-comment=\"{{ c.comment_post_ID }}\"
                                                 data-comment-user=\"{{ c.user_id }}\">
                                                {% if c.comment_agent == false %}
                                                    <img class=\"d-flex mb-3 mx-auto\" src=\"/assets/img/profile/avatar-profile.png\" alt=\"Generic placeholder image\">
                                                {% else %}
                                                    <img class=\"d-flex mb-3 mx-auto \" src=\"{{ c.comment_agent|first }}\" alt=\"profile photo\">
                                                {% endif %}
                                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                                    {% if c.comment_parent == 0 %}
                                                        <h5 class=\"mt-0 font-weight-bold\">{{ c.comment_author }}
                                                            <a href=\"#\" class=\"pull-right reply\"
                                                               data-comment=\"{{ c.comment_post_ID }}\"
                                                               data-form=\"{{ c.comment_ID }}\"
                                                               data-comment-user=\"{{ c.user_id }}\">
                                                                <i class=\"fas fa-reply\"></i>
                                                            </a>
                                                        </h5>
                                                        <div class=\"d-flex pb-3 timer\">
                                                            <time class=\"timeago\"
                                                                  datetime=\"{{ c.comment_date }}\">{{ c.comment_date }}</time>
                                                        </div>
                                                    {% endif %}

                                                    {{ c.comment_content|raw }}

                                                </div>
                                            </div>
                                        {% endif %}
                                        {% if c.comment_parent != 0 %}
                                            <div class=\"media d-block d-md-flex mt-4 ml-6 border-left\">
                                                {% if c.comment_agent == false %}
                                                    <img class=\"d-flex mb-3 mx-auto \"
                                                         src=\"{% if app.session.get('avatar')!='' %} {{ app.session.get('avatar') }}{% else %} {{ asset('assets/img/profile/avatar-profile.png') }} {% endif %}\"
                                                         alt=\"Generic placeholder image\">
                                                {% else %}
                                                    <img class=\"d-flex mb-3 mx-auto \" src=\"{{ c.comment_agent|first }}\"
                                                         alt=\"Generic placeholder image\">
                                                {% endif %}
                                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                                    <h5 class=\"mt-0 font-weight-bold\">{{ c.comment_author }}
                                                        <a href=\"#\" class=\"pull-right reply\"
                                                           data-comment=\"{{ c.comment_post_ID }}\"
                                                           data-form=\"{{ c.comment_ID }}\"
                                                           data-comment-user=\"{{ c.user_id }}\">
                                                            <i class=\"fas fa-reply\"></i>
                                                        </a>
                                                    </h5>
                                                    <div class=\"d-flex pb-3 timer\">
                                                        <time class=\"timeago\"
                                                              datetime=\"{{ c.comment_date }}\">{{ c.comment_date }}</time>
                                                    </div>
                                                    {{ c.comment_content|raw }}
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"form_reply_{{ c.comment_ID }}  d-none\"></div>
                                    {% endfor %}
                                </div>
                            </div>
                            <!--/.Comments-->

                            <!--Reply-->
                            <div class=\"card mb-3 wow fadeIn\">
                                <div class=\"card-header font-weight-bold\">
                                    {% if listeCommentaires|length == 0 %}{{ nbrComments }} {{ 'form.titre1'|trans({}, 'blog')|raw }}
                                    {% else %}
                                        {{ 'form.titre2'|trans({}, 'blog')|raw }}
                                    {% endif %}
                                </div>
                                <div class=\"card-body\">

                                    <!-- Default form reply -->
                                    <form id=\"addComment\" method=\"post\"action=\"{{ path('blog_addComment',{id:post.id}) }}\">
                                        <!-- Comment -->
                                        <div class=\"form-group\">
                                            <label for=\"replyFormComment\">{{ 'form.commentaire'|trans({}, 'blog')|raw }}</label>
                                            <textarea class=\"form-control\" name=\"commentaire\" id=\"replyFormComment\" rows=\"5\" required></textarea>
                                        </div>
                                        {% if app.user == null %}
                                            <!-- Name -->
                                            <label for=\"replyFormName\">{{ 'form.nom'|trans({}, 'blog')|raw }}</label>
                                            <input type=\"text\" name=\"nom\" id=\"replyFormName\" class=\"form-control\" required>
                                            <br>
                                            <!-- Email -->
                                            <label for=\"replyFormEmail\">{{ 'form.email'|trans({}, 'blog')|raw }}</label>
                                            <input type=\"email\" name=\"emailAuthor\" id=\"replyFormEmail\" class=\"form-control\" required>
                                        {% endif %}
                                        <br>

                                        <!-- Site internet -->
                                        <label for=\"replyFormSite\">{{ 'form.site'|trans({}, 'blog')|raw }}</label>
                                        <input type=\"text\" id=\"replyFormSite\" name=\"site\" class=\"form-control\">
                                        <div class=\"text-center mt-4\">
                                            <button class=\"btn btn-primary first-letter-is-uppercase btn-md sendComment\" type=\"submit\">{{ 'form.publier'|trans({}, 'blog')|raw }}</button>
                                        </div>
                                    </form>
                                    <!-- Default form reply -->
                                </div>
                            </div>
                            <!--/.Reply-->
                        </div>
                        <div style=\"margin-top: 6rem;\">
                            <h4>ARTICLES DISPONIBLES</h4>
                            <a href=\"{{ path('blog_index') }}\" target=\"_blank\"
                               style=\"color: #f17b30;text-decoration: underline;\">Consulter le blog<i class=\"fa fa-chevron-right\"></i></a>
                            <div class=\"col-md-12\" style=\"padding: 0;\">
                                <div id=\"news-slider\" class=\"owl-carousel\">
                                    {% for s in lastArticles %}
                                        <div class=\"post-slide item\">
                                            <a class=\"hover-orange\" target=\"_blank\"
                                               href=\"{{ path('blog_details_postBlog',{slug:s.post_name}) }}\">
                                                <img class=\"box-prestation box-photograph overlay lazy\"
                                                     alt=\"{{ s.post_title }}\" src=\"{{ s.imagePost }}\"
                                                     style=\"background-image: url({{ s.imagePost }});\">{{ s.post_title }}
                                            </a>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <!-- <div
\t\t\t\t\t\tclass=\"col-md-4 mb-4 fixage\">
\t\t\t\t\t\t<a href=\"{{ path('blog_index') }}\">
\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-1 font-weight-bold\">{{ 'retour-blog'|trans({}, 'blog')|raw }}</h5>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"card mb-4 wow fadeIn\">
\t\t\t\t\t\t\t<div class=\"card-header\">{{ 'articles-cat'|trans({}, 'blog')|raw }}</div>
\t\t\t\t\t\t\t<div class=\"card-body carteArticle\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t{% for s in relatedPost %}
\t\t\t\t\t\t\t\t\t\t{% if loop.index <= 5 %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"media listeInterest\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-flex mr-3 liArticle\" width=\"80\" height=\"auto\" src=\"{{ s.imagePost }}\" alt=\"{{ s.title }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('blog_details_postBlog',{slug:s.post_name}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-1 font-weight-bold\">{% if app.request.locale == 'en' and s.title_en != '' %}{{ s.title_en|raw }}{% else %}{{ s.title|raw }}{% endif %}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and s.content_en != '' %}{{ s.content_en|striptags('<p><h2><a><em>')|raw }}(...){% else %}{{ s.descriptionPost|striptags('<p>')|raw }}(...){% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> -->
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!--Section: Post-->
        </div>
    </main>
    <!--Main layout-->

    {% include(\"partials/videoButton.html.twig\") %}
    {% include(\"partials/otherPagesVideoModal.html.twig\") %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Full background slider jQuery plugin -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/fullclip.min.js') }}\"></script>
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.10.2/jquery-ui.min.js\"
            integrity=\"sha256-FgiaQnQazF/QCrF9qSvpRY6PACn9ZF8VnlgqfqD1LsE=\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/js/fullclip.min.js')) }}\" defer></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script>
    <script>
        window.onload = verifSize();
        function verifSize() {
            \$('.fixage').css('bottom', '');
        }
        \$(window).resize(function () {

        });
        \$(document).ready(function () {

            {% include(\"partials/js/videoButton.js.twig\") %}

            \$(\"#news-slider\").owlCarousel({
                center: true,
                items: 4,
                itemsDesktop: [
                    1199, 4
                ],
                itemsDesktopSmall: [
                    980, 3
                ],
                itemsMobile: [
                    600, 1
                ],
                navigation: true,
                navigationText: [
                    \"\", \"\"
                ],
                pagination: true,
                autoPlay: true,
                lazyLoad: true,
                autoplaySpeed: 1000
            });
        });

        function checkOffset() {
            var a = \$(document).scrollTop() + window.innerHeight;
            var b = \$('.footer').offset().top;
            if (a < b) {
                \$('.fixage').css('bottom', '');
            } else {
                \$('.fixage').css('bottom', (100 + (a - b)) + 'px');
            }
        }

        \$(document).ready(checkOffset);
        \$(document).scroll(checkOffset);
        \$(document).ready(function () {
            \$(\"time.timeago\").timeago();
            var i = 0;
            var form = `<form class=\"reply_comment\"  method=\"post\" action=\"{{ path('blog_rapid_add_Comment') }}\">
                    <div class=\"form-group mt-4\">
                      <label for=\"quickReplyFormComment\">Votre commentaire</label>
                      <input  type=\"hidden\" name=\"parent_id\" value=\"\" class=\"parent_id\"  />
                      <input  type=\"hidden\" name=\"comment_id\" value=\"\" class=\"comment_id\"  />
                      <textarea required  name=\"commentaire\" class=\"form-control\" id=\"quickReplyFormComment\" rows=\"5\"></textarea>
                      <div class=\"text-center\">
                        <button class=\"btn btn-primary first-letter-is-uppercase btn-sm\" id=\"rapidSendComment\" type=\"submit\">Publier</button>
                      </div>
                    </div>
                  </form>`;

            \$('.reply').click(function (e) {
                e.preventDefault();
                let is_ident = \$(this).data('form');
                let comment = \$(this).data('comment');
                let user = \$(this).data('comment-user');

                \$('.form_reply_' + is_ident).html(form);
                \$('.parent_id').val(user);
                \$('.comment_id').val(comment);
                \$(this).attr('data-active', '1');
                \$('.form_reply_' + is_ident).toggleClass('d-none');

            })

            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });
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
            // Ajout rapide commentaire
            \$('form .reply_comment').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#reply_comment').addClass('running');
                toastr.info('{{ 'systeme.requetes.requete-en-cours'|trans }}');
                var \$form = \$(this);
                var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                var data = (formdata !== null) ? formdata : \$form.serialize();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (reponse) {
                        if (reponse != 0) {
                            toastr.clear();
                            toastr.success('{{'systeme.requetes.succes'|trans}}');
                            window.location = \"\";
                        } else if (reponse == 0) {
                            \$('#rapidSendComment').removeClass('running');
                            toastr.clear();
                            toastr.error('{{'systeme.requetes.erreur'|trans}}');
                        }
                    },
                    error: function (reponse) {
                        \$('#rapidSendComment').removeClass('running');
                        toastr.clear();
                        toastr.error('{{'systeme.requetes.erreur'|trans}}');
                    }
                });
                return false;
            });
            // Ajout commentaire
            \$('#addComment').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#sendComment').addClass('running');
                toastr.info('{{'systeme.requetes.requete-en-cours'|trans}}');
                var \$form = \$(this);
                var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                var data = (formdata !== null) ? formdata : \$form.serialize();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (reponse) {
                        if (reponse != 0) {
                            toastr.clear();
                            toastr.success('{{'systeme.requetes.succes'|trans}}');
                            window.location = \"\";
                        } else if (reponse == 0) {
                            \$('#sendComment').removeClass('running');
                            toastr.clear();
                            toastr.error('{{'systeme.requetes.erreur'|trans}}');
                        }
                    },
                    error: function (reponse) {
                        \$('#sendComment').removeClass('running');
                        toastr.clear();
                        toastr.error('{{'systeme.requetes.erreur'|trans}}');
                    }
                });
                return false;
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
            \"showDuration\": \"300\",
            \"hideDuration\": \"1000\",
            \"timeOut\": \"12000\",
            \"extendedTimeOut\": \"1000\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        {% for flashMessage in app.session.flashbag.get('success') %}
        toastr.success('{{ 'systeme.requetes.succes'|trans }}');{% endfor %}
    </script>
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}
", "blog/details.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/blog/details.html.twig");
    }
}
