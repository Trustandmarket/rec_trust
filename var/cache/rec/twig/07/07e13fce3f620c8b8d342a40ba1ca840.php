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

/* blog/index.html.twig */
class __TwigTemplate_629003c70eedc0153a37192bbc5d3fab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("generalLayout.html.twig", "blog/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        yield "\t";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
\t<meta name=\"title\" content=\"";
        // line 4
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        yield "\">
\t<meta name=\"description\" content=\"";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "blog"]);
        yield "\">
\t<link rel=\"canonical\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")), "html", null, true);
        yield "\">
\t<link rel=\"shortlink\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")), "html", null, true);
        yield "\">
\t";
        // line 9
        yield "\t<meta property=\"og:title\" content=\"blog\">
\t<meta property=\"og:description\" content=\"";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "blog"]);
        yield "\">

\t<meta property=\"og:image\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")), "html", null, true);
        yield "\">
\t<meta property=\"og:locale\" content=\"fr\"/>
\t<meta property=\"og:locale:alternate\" content=\"en\"/>
\t";
        // line 18
        yield "
\t";
        // line 20
        yield "\t<meta name=\"twitter:card\" content=\"summary\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        yield "\">
\t<meta name=\"twitter:description\" content=\"";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "blog"]);
        yield "\">
\t<meta name=\"twitter:image\" content=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
\t<meta name=\"twitter:image:alt\" content=\"";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        yield "\">
\t";
        // line 27
        yield "
\t<style>
\t\t.blog_list .card {
\t\t\tmin-height: 100%;
\t\t}
\t\t.blog_list .card img {
\t\t\theight: 200px;
\t\t\twidth: 100%;
\t\t\tobject-fit: cover;
\t\t}
\t</style>

\t";
        // line 40
        yield "    <script type=\"application/ld+json\">
        {
        \"@context\": \"https://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\": [
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 46
            yield "        {
            \"@type\": \"ListItem\",
            \"position\":\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
            yield "\",
            \"item\": {
            \"@id\": \"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_name", [], "any", false, false, false, 50)])), "html", null, true);
            yield "\",
            \"name\": \"";
            // line 51
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "locale", [], "any", false, false, false, 51) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title_en", [], "any", false, false, false, 51) != CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_title", [], "any", false, false, false, 51))) && (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title_en", [], "any", false, false, false, 51) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title_en", [], "any", false, false, false, 51), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_title", [], "any", false, false, false, 51)), "html", null, true);
            }
            yield "\",
            \"image\": \"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imagePost", [], "any", false, false, false, 52), "html", null, true);
            yield "\"
            }
        }
        ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55) != true)) {
                yield ",";
            }
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
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "\t\t]
\t\t
\t}
    </script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market |";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 65
        yield "\t";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
\t<!-- Your custom styles (optional) -->
\t<link rel=\"stylesheet\" href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\">
\t<link href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-blog.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 74
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        yield "∑
\t<div id=\"imageHolder\" class=\"view intro-2\">
\t\t<div class=\"full-bg-img\">
\t\t\t<div class=\"mask rgba-purple-light flex-center\">
\t\t\t\t<div class=\"container text-left align-items-end white-text wow fadeInUp\">
\t\t\t\t\t<h2 class=\"page-title\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.titre"), "html", null, true);
        yield "T&M</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 88
        yield "\t<!--Main Layout-->
\t<main class=\"mt-5\">
\t\t<div class=\"container\"><pre>
\t\t</pre>
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 94
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 94, $this->source); })()) == null)) {
            yield "active";
        }
        yield "\" id=\"tous-tab\" data-toggle=\"tab\" href=\"#tous\" role=\"tab\" aria-controls=\"tous\" aria-selected=\"";
        if ( !array_key_exists("categorie", $context)) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.liste-articles"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 97
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 97, $this->source); })()) == "musique")) {
            yield "active";
        }
        yield "\" id=\"musique-tab\" data-toggle=\"tab\" href=\"#musique\" role=\"tab\" aria-controls=\"musique\" aria-selected=\"";
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 97, $this->source); })()) == "musique")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.musique"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 100
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 100, $this->source); })()) == "photographie")) {
            yield "active";
        }
        yield "\" id=\"photographie-tab\" data-toggle=\"tab\" href=\"#photographie\" role=\"tab\" aria-controls=\"Photographie\" aria-selected=\"";
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 100, $this->source); })()) == "photographie")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.photographie"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 103
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 103, $this->source); })()) == "video")) {
            yield "active";
        }
        yield "\" id=\"video-tab\" data-toggle=\"tab\" href=\"#video\" role=\"tab\" aria-controls=\"video\" aria-selected=\"";
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 103, $this->source); })()) == "video")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.video"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 106
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 106, $this->source); })()) == "experiences")) {
            yield "active";
        }
        yield "\" id=\"experience-tab\" data-toggle=\"tab\" href=\"#experience\" role=\"tab\" aria-controls=\"experience\" aria-selected=\"";
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 106, $this->source); })()) == "experiences")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.experiences"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content blog_list\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade ";
        // line 110
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 110, $this->source); })()) == null)) {
            yield "show active";
        }
        yield " mt-5\" id=\"tous\" role=\"tabpanel\" aria-labelledby=\"tous-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 113
            yield "\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "locale", [], "any", false, false, false, 113) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title_en", [], "any", false, false, false, 113) != CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_title", [], "any", false, false, false, 113))) && (CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title_en", [], "any", false, false, false, 113) != ""))) {
                // line 114
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "imagePost", [], "any", false, false, false, 119), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 119), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_name", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
                // line 127
                yield CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title_en", [], "any", false, false, false, 127);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t";
                // line 129
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 131
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 135
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "locale", [], "any", false, false, false, 135) == "fr")) {
                // line 136
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "imagePost", [], "any", false, false, false, 141), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 141), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_name", [], "any", false, false, false, 142)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_title", [], "any", false, false, false, 149);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t";
                // line 151
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 153
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 158
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 161
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 161, $this->source); })()) == "musique")) {
            yield "show active";
        }
        yield "\" id=\"musique\" role=\"tabpanel\" aria-labelledby=\"musique-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dataMusique"]) || array_key_exists("dataMusique", $context) ? $context["dataMusique"] : (function () { throw new RuntimeError('Variable "dataMusique" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 164
            yield "\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "locale", [], "any", false, false, false, 164) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 164) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 164))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 164) != ""))) {
                // line 165
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 170), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 170), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 171)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 179
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 179);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 183
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 185
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 189
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "request", [], "any", false, false, false, 189), "locale", [], "any", false, false, false, 189) == "fr")) {
                // line 190
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 195), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 195), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 196)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 204
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 204);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 208
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 210
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 215
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 218
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 218, $this->source); })()) == "photographie")) {
            yield "show active";
        }
        yield "\" id=\"photographie\" role=\"tabpanel\" aria-labelledby=\"photographie-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dataPhotographie"]) || array_key_exists("dataPhotographie", $context) ? $context["dataPhotographie"] : (function () { throw new RuntimeError('Variable "dataPhotographie" does not exist.', 220, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 221
            yield "\t\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "request", [], "any", false, false, false, 221), "locale", [], "any", false, false, false, 221) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 221) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 221))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 221) != ""))) {
                // line 222
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 228), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 228), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 229)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 238
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 238);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 242
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 244
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 248
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "request", [], "any", false, false, false, 248), "locale", [], "any", false, false, false, 248) == "fr")) {
                // line 249
                yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 256), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 256), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 257)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 266
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 266);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 270
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 272
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 277
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 280
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 280, $this->source); })()) == "video")) {
            yield "show active";
        }
        yield "\" id=\"video\" role=\"tabpanel\" aria-labelledby=\"video-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dataVideo"]) || array_key_exists("dataVideo", $context) ? $context["dataVideo"] : (function () { throw new RuntimeError('Variable "dataVideo" does not exist.', 282, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 283
            yield "\t\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "request", [], "any", false, false, false, 283), "locale", [], "any", false, false, false, 283) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 283) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 283))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 283) != ""))) {
                // line 284
                yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 291), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 291), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 292)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 300
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 300);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 304
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 306
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 310
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "request", [], "any", false, false, false, 310), "locale", [], "any", false, false, false, 310) == "fr")) {
                // line 311
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 317), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 317), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 318)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 326
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 326);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 330
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 332
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 337
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 340
        if (((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 340, $this->source); })()) == "experiences")) {
            yield "show active";
        }
        yield "\" id=\"experience\" role=\"tabpanel\" aria-labelledby=\"experience-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dataExperience"]) || array_key_exists("dataExperience", $context) ? $context["dataExperience"] : (function () { throw new RuntimeError('Variable "dataExperience" does not exist.', 342, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 343
            yield "\t\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "locale", [], "any", false, false, false, 343) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 343) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 343))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 343) != ""))) {
                // line 344
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 349
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 349), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 349), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 350)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 358
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 358);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 362
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 364
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 368
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 368, $this->source); })()), "request", [], "any", false, false, false, 368), "locale", [], "any", false, false, false, 368) == "fr")) {
                // line 369
                yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 375), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 375), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 376)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 384
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 384);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 388
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 390
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 395
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t<!--Main Layout-->

\t";
        // line 403
        yield from $this->loadTemplate("partials/videoButton.html.twig", "blog/index.html.twig", 403)->unwrap()->yield($context);
        // line 404
        yield "\t";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "blog/index.html.twig", 404)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 407
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 408
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

\t<!-- Full background slider jQuery plugin -->
\t<script type=\"text/javascript\" src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
\t<!-- Lazy load -->
\t<!-- cdnjs for lazy load -->
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

\t<script>
\t\$(document).ready(function () { // Lazy Loading initializer
\t\$(function () {
\t\t\$('.lazy').lazy();
\t});

\t\t";
        // line 423
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "blog/index.html.twig", 423)->unwrap()->yield($context);
        // line 424
        yield "\tvar docWidth = document.documentElement.offsetWidth;

\t[].forEach.call(document.querySelectorAll('*'), function (el) {
\tif (el.offsetWidth > docWidth) {
\tconsole.log(el);
\t}
\t});
\t// Hambuger menu icon
\t\$('.animated-button-icon').on('click', function () {
\t\$('.animated-icon2').toggleClass('open');
\t});

\t// Recherche avancer
\t\$(\"#recherche-avancer\").click(function () {
\t\$(\"#sectionAvancer\").toggleClass('d-none');
\t});

\t// first thing turn Hide Menu Search bar
\t\$(\"#searchMenu\").hide();
\t// toggle menu search bar on/off
\t\$(\"#searchMenuShowHide\").click(function () {
\t\$(\"#searchMenu\").toggle(\"slide\");
\t});

\t// Set card title and card-body equal height
\tlet maxHeightTitle = 0;
\tlet maxHeightbody = 0;

\t\$(\".card-title\").each(function () {
\tif (\$(this).height() > maxHeightTitle) {
\tmaxHeightTitle = \$(this).height();
\t}
\t});

\t\$(\".card-title\").height(maxHeightTitle);
\t// card body
\t\$(\".card-body\").each(function () {
\tif (\$(this).height() > maxHeightbody) {
\tmaxHeightbody = \$(this).height();
\t}
\t});
\t\t\$(\".card-body\").height(maxHeightbody);
\t});
\t</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 471
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 472
        yield "
\t";
        // line 473
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
        return "blog/index.html.twig";
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
        return array (  1076 => 473,  1073 => 472,  1063 => 471,  1010 => 424,  1008 => 423,  993 => 411,  986 => 408,  976 => 407,  967 => 404,  965 => 403,  956 => 396,  950 => 395,  943 => 390,  940 => 388,  934 => 384,  923 => 376,  917 => 375,  909 => 369,  907 => 368,  901 => 364,  898 => 362,  892 => 358,  881 => 350,  875 => 349,  868 => 344,  865 => 343,  861 => 342,  854 => 340,  850 => 338,  844 => 337,  837 => 332,  834 => 330,  828 => 326,  817 => 318,  811 => 317,  803 => 311,  801 => 310,  795 => 306,  792 => 304,  786 => 300,  775 => 292,  769 => 291,  760 => 284,  757 => 283,  753 => 282,  746 => 280,  742 => 278,  736 => 277,  729 => 272,  726 => 270,  720 => 266,  708 => 257,  702 => 256,  693 => 249,  691 => 248,  685 => 244,  682 => 242,  676 => 238,  664 => 229,  658 => 228,  650 => 222,  647 => 221,  643 => 220,  636 => 218,  632 => 216,  626 => 215,  619 => 210,  616 => 208,  610 => 204,  599 => 196,  593 => 195,  586 => 190,  584 => 189,  578 => 185,  575 => 183,  569 => 179,  558 => 171,  552 => 170,  545 => 165,  542 => 164,  538 => 163,  531 => 161,  527 => 159,  521 => 158,  514 => 153,  511 => 151,  507 => 149,  497 => 142,  491 => 141,  484 => 136,  482 => 135,  476 => 131,  473 => 129,  469 => 127,  459 => 120,  453 => 119,  446 => 114,  443 => 113,  439 => 112,  432 => 110,  415 => 106,  399 => 103,  383 => 100,  367 => 97,  351 => 94,  343 => 88,  333 => 87,  319 => 81,  303 => 76,  292 => 74,  282 => 73,  272 => 69,  268 => 68,  264 => 67,  258 => 65,  248 => 64,  230 => 63,  218 => 56,  202 => 55,  196 => 52,  188 => 51,  184 => 50,  179 => 48,  175 => 46,  158 => 45,  151 => 40,  137 => 27,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 20,  114 => 18,  108 => 14,  103 => 12,  98 => 10,  95 => 9,  91 => 7,  87 => 6,  83 => 5,  79 => 4,  74 => 3,  64 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'generalLayout.html.twig' %}
{% block head %}
\t{{ parent() }}
\t<meta name=\"title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'blog'}) }}\">
\t<meta name=\"description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'blog'}) }}\">
\t<link rel=\"canonical\" href=\"{{ absolute_url(path('blog_index')) }}\">
\t<link rel=\"shortlink\" href=\"{{ absolute_url(path('blog_index')) }}\">
\t{# OG Content #}
\t<meta property=\"og:title\" content=\"blog\">
\t<meta property=\"og:description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'blog'}) }}\">

\t<meta property=\"og:image\" content=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"{{ absolute_url(path('blog_index')) }}\">
\t<meta property=\"og:locale\" content=\"fr\"/>
\t<meta property=\"og:locale:alternate\" content=\"en\"/>
\t{# END OG Content #}

\t{# Twitter CARD #}
\t<meta name=\"twitter:card\" content=\"summary\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'blog'}) }}\">
\t<meta name=\"twitter:description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'blog'}) }}\">
\t<meta name=\"twitter:image\" content=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\">
\t<meta name=\"twitter:image:alt\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'blog'}) }}\">
\t{# END Twitter Card #}

\t<style>
\t\t.blog_list .card {
\t\t\tmin-height: 100%;
\t\t}
\t\t.blog_list .card img {
\t\t\theight: 200px;
\t\t\twidth: 100%;
\t\t\tobject-fit: cover;
\t\t}
\t</style>

\t{# JSON LD #}
    <script type=\"application/ld+json\">
        {
        \"@context\": \"https://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\": [
        {% for article in data %}
        {
            \"@type\": \"ListItem\",
            \"position\":\"{{loop.index}}\",
            \"item\": {
            \"@id\": \"{{absolute_url(path('blog_details_postBlog', {slug: article.post_name}))}}\",
            \"name\": \"{% if app.request.locale == 'en' and article.title_en != article.post_title and article.title_en != '' %}{{article.title_en}}{% else %}{{ article.post_title|trim }}{% endif %}\",
            \"image\": \"{{ article.imagePost }}\"
            }
        }
        {% if loop.last != true %},{% endif %}{% endfor %}
\t\t]
\t\t
\t}
    </script>
\t{# END JSON LD #}
{% endblock %}

{% block title %}Trust &amp; Market |{{ include('Seo/Meta/title.html.twig', {code: 'blog'}) }}{% endblock %}
{% block style %}
\t{{ parent() }}
\t<!-- Your custom styles (optional) -->
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/custome.css') }}\">
\t<link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/style-blog.css') }}\" rel=\"stylesheet\">
{% endblock %}


{% block header %}
\t{{parent()}}
{% endblock %}
{% block navigation %}∑
\t<div id=\"imageHolder\" class=\"view intro-2\">
\t\t<div class=\"full-bg-img\">
\t\t\t<div class=\"mask rgba-purple-light flex-center\">
\t\t\t\t<div class=\"container text-left align-items-end white-text wow fadeInUp\">
\t\t\t\t\t<h2 class=\"page-title\">{{'blog.titre'|trans}}T&M</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
{% block body %}
\t<!--Main Layout-->
\t<main class=\"mt-5\">
\t\t<div class=\"container\"><pre>
\t\t</pre>
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link {% if categorie == null %}active{% endif %}\" id=\"tous-tab\" data-toggle=\"tab\" href=\"#tous\" role=\"tab\" aria-controls=\"tous\" aria-selected=\"{% if categorie is not defined %}true{% else %}false{% endif %}\">{{'blog.menu.liste-articles'|trans}}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link {% if categorie == 'musique' %}active{% endif %}\" id=\"musique-tab\" data-toggle=\"tab\" href=\"#musique\" role=\"tab\" aria-controls=\"musique\" aria-selected=\"{% if categorie == 'musique' %}true{% else %}false{% endif %}\">{{'blog.menu.musique'|trans}}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link {% if categorie == 'photographie' %}active{% endif %}\" id=\"photographie-tab\" data-toggle=\"tab\" href=\"#photographie\" role=\"tab\" aria-controls=\"Photographie\" aria-selected=\"{% if categorie == 'photographie' %}true{% else %}false{% endif %}\">{{'blog.menu.photographie'|trans}}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link {% if categorie == 'video' %}active{% endif %}\" id=\"video-tab\" data-toggle=\"tab\" href=\"#video\" role=\"tab\" aria-controls=\"video\" aria-selected=\"{% if categorie == 'video' %}true{% else %}false{% endif %}\">{{'blog.menu.video'|trans}}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link {% if categorie == 'experiences' %}active{% endif %}\" id=\"experience-tab\" data-toggle=\"tab\" href=\"#experience\" role=\"tab\" aria-controls=\"experience\" aria-selected=\"{% if categorie == 'experiences' %}true{% else %}false{% endif %}\">{{'blog.menu.experiences'|trans}}</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content blog_list\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade {% if categorie == null %}show active{% endif %} mt-5\" id=\"tous\" role=\"tabpanel\" aria-labelledby=\"tous-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t{% for i in data %}
\t\t\t\t\t\t{% if app.request.locale == 'en' and i.title_en != i.post_title and i.title_en != '' %}
\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{i.imagePost}}\" alt=\"{{i.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:i.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">{{i.title_en|raw}}</h4>
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ i.post_content|striptags('<p>')|easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:i.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif app.request.locale == 'fr' %}
\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{i.imagePost}}\" alt=\"{{i.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:i.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">{{i.post_title|raw}}</h4>
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ i.post_content|striptags('<p>')|easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:i.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 {% if categorie == 'musique' %}show active{% endif %}\" id=\"musique\" role=\"tabpanel\" aria-labelledby=\"musique-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t{% for a in dataMusique %}
\t\t\t\t\t\t{% if app.request.locale == 'en' and a.title_en != a.post_title and a.title_en != '' %}
\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.title_en|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif app.request.locale == 'fr' %}
\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.post_title|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 {% if categorie == 'photographie' %}show active{% endif %}\" id=\"photographie\" role=\"tabpanel\" aria-labelledby=\"photographie-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t{% for a in dataPhotographie %}
\t\t\t\t\t\t\t{% if app.request.locale == 'en' and a.title_en != a.post_title and a.title_en != '' %}
\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.title_en|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif app.request.locale == 'fr' %}
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.post_title|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 {% if categorie == 'video' %}show active{% endif %}\" id=\"video\" role=\"tabpanel\" aria-labelledby=\"video-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t{% for a in dataVideo %}
\t\t\t\t\t\t\t{% if app.request.locale == 'en' and a.title_en != a.post_title and a.title_en != '' %}
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.title_en|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif app.request.locale == 'fr' %}
\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.post_title|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 {% if categorie == 'experiences' %}show active{% endif %}\" id=\"experience\" role=\"tabpanel\" aria-labelledby=\"experience-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t{% for a in dataExperience %}
\t\t\t\t\t\t\t{% if app.request.locale == 'en' and a.title_en != a.post_title and a.title_en != '' %}
\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.title_en|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif app.request.locale == 'fr' %}
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"{{a.imagePost}}\" alt=\"{{a.title}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{a.post_title|raw}}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t{# <p class=\"card-text\">{{ a.post_content|striptags('<p>')| easyadmin_truncate(200, true)|raw }}</p> #}
\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('blog_details_postBlog',{slug:a.post_name})}}\" class=\"btn btn-primary\">{{'blog.details-article'|trans}}</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t<!--Main Layout-->

\t{% include(\"partials/videoButton.html.twig\") %}
\t{% include(\"partials/otherPagesVideoModal.html.twig\") %}
{% endblock %}

{% block javascripts %}
\t{{ parent() }}

\t<!-- Full background slider jQuery plugin -->
\t<script type=\"text/javascript\" src=\"{{ asset('assets/js/fullclip.min.js') }}\"></script>
\t<!-- Lazy load -->
\t<!-- cdnjs for lazy load -->
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

\t<script>
\t\$(document).ready(function () { // Lazy Loading initializer
\t\$(function () {
\t\t\$('.lazy').lazy();
\t});

\t\t{% include(\"partials/js/videoButton.js.twig\") %}
\tvar docWidth = document.documentElement.offsetWidth;

\t[].forEach.call(document.querySelectorAll('*'), function (el) {
\tif (el.offsetWidth > docWidth) {
\tconsole.log(el);
\t}
\t});
\t// Hambuger menu icon
\t\$('.animated-button-icon').on('click', function () {
\t\$('.animated-icon2').toggleClass('open');
\t});

\t// Recherche avancer
\t\$(\"#recherche-avancer\").click(function () {
\t\$(\"#sectionAvancer\").toggleClass('d-none');
\t});

\t// first thing turn Hide Menu Search bar
\t\$(\"#searchMenu\").hide();
\t// toggle menu search bar on/off
\t\$(\"#searchMenuShowHide\").click(function () {
\t\$(\"#searchMenu\").toggle(\"slide\");
\t});

\t// Set card title and card-body equal height
\tlet maxHeightTitle = 0;
\tlet maxHeightbody = 0;

\t\$(\".card-title\").each(function () {
\tif (\$(this).height() > maxHeightTitle) {
\tmaxHeightTitle = \$(this).height();
\t}
\t});

\t\$(\".card-title\").height(maxHeightTitle);
\t// card body
\t\$(\".card-body\").each(function () {
\tif (\$(this).height() > maxHeightbody) {
\tmaxHeightbody = \$(this).height();
\t}
\t});
\t\t\$(\".card-body\").height(maxHeightbody);
\t});
\t</script>

{% endblock %}

{% block footer %}

\t{{parent()}}

{% endblock %}
", "blog/index.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/blog/index.html.twig");
    }
}
