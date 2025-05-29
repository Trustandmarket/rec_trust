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

/* home/index.html.twig */
class __TwigTemplate_5e0a1618a58f3c0d69f3400270573c27 extends Template
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
        return "homeLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homeLayout.html.twig", "home/index.html.twig", 1);
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

\t<link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
\t<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
\t<meta name=\"msapplication-TileImage\" content=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
\t<meta name=\"title\" content=\"";
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t<meta name=\"description\" content=\"";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "home"]);
        yield "\">
\t<link rel=\"canonical\" href=\"https://www.trustandmarket.com/";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "getLocale", [], "method", false, false, false, 11), "html", null, true);
        yield "\">
\t";
        // line 13
        yield "\t<meta property=\"og:site_name\" content=\"Trust&Market\">
\t<meta property=\"og:title\" content=\"";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t<meta property=\"og:description\" content=\"";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "home"]);
        yield "\">
\t<meta property=\"og:image\" content=\"";
        // line 16
        if ((isset($context["bloc10"]) || array_key_exists("bloc10", $context) ? $context["bloc10"] : (function () { throw new RuntimeError('Variable "bloc10" does not exist.', 16, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc10"]) || array_key_exists("bloc10", $context) ? $context["bloc10"] : (function () { throw new RuntimeError('Variable "bloc10" does not exist.', 16, $this->source); })()), "optionValue", [], "any", false, false, false, 16), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg")), "html", null, true);
        }
        yield "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home")), "html", null, true);
        yield "\">
\t";
        // line 20
        yield "
\t";
        // line 22
        yield "\t<meta name=\"twitter:card\" content=\"summary_large_image\"> <meta name=\"twitter:creator\" content=\"Kbr Global\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t<meta name=\"twitter:description\" content=\"";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "home"]);
        yield "\">
\t<meta name=\"twitter:image\" content=\"";
        // line 26
        if ((isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 26, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 26, $this->source); })()), "optionValue", [], "any", false, false, false, 26), "|||"), 1, [], "array", false, false, false, 26), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-photo.jpg"), "html", null, true);
        }
        yield "\">
\t<meta name=\"twitter:image:alt\" content=\"";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t";
        // line 29
        yield "
\t";
        // line 31
        yield "\t<script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"https://schema.org\",
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"Trust & Market\",
\t\t\t\"legalName\" : \"SAS KBR GLOBAL\",
\t\t\t\"url\": \"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home")), "html", null, true);
        yield "\",
\t\t\t\"image\":\"";
        // line 38
        if ((isset($context["bloc10"]) || array_key_exists("bloc10", $context) ? $context["bloc10"] : (function () { throw new RuntimeError('Variable "bloc10" does not exist.', 38, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc10"]) || array_key_exists("bloc10", $context) ? $context["bloc10"] : (function () { throw new RuntimeError('Variable "bloc10" does not exist.', 38, $this->source); })()), "optionValue", [], "any", false, false, false, 38), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg"), "html", null, true);
        }
        yield "\",
\t\t\t\"telephone\": \"+33 1 85 42 14 91\",
\t\t\t\"email\": \"contact@kbr-global.com\",
\t\t\t\"logo\" : \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\",
\t\t\t\"foundingDate\": \"2017\",
\t\t\t\"founders\": [{
\t\t\t\t\"@type\": \"Person\",
\t\t\t\t\"name\": \"Kalide Brassier\"
\t\t\t}],
\t\t\t\"address\": {
\t\t\t\t\"@type\": \"PostalAddress\",
\t\t\t\t\"addressLocality\": \"CHELLES\",
\t\t\t\t\"postalCode\": \"77500\",
\t\t\t\t\"streetAddress\": \"1 Rue Rejane Ruel\",
\t\t\t\t\"addressCountry\": \"FR\"
\t\t\t},
\t\t\t\"sameAs\": [
\t\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t\t]
\t\t}
\t</script>

\t";
        // line 65
        yield "\t<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 69
        yield "\t";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
\t|
\t";
        // line 71
        if ( !(null === (isset($context["meta_page"]) || array_key_exists("meta_page", $context) ? $context["meta_page"] : (function () { throw new RuntimeError('Variable "meta_page" does not exist.', 71, $this->source); })()))) {
            // line 72
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_page"]) || array_key_exists("meta_page", $context) ? $context["meta_page"] : (function () { throw new RuntimeError('Variable "meta_page" does not exist.', 72, $this->source); })()), "postTitle", [], "any", false, false, false, 72), "html", null, true);
            yield "
\t\t";
        } else {
            // line 73
            yield "Trust &amp; Market |
\t\t";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.titre"), "html", null, true);
            yield "
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 79
        yield "\t";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

\t<!-- Your custom styles (optional) -->
\t<link href=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\">
\t<link href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 90
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 94
        yield "\t";
        yield from $this->yieldParentBlock("navigation", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 99
        yield "\t<main class=\"text-center\">
\t\t<div class=\"container\" style=\"max-width: 60rem;display: none;\">
\t\t\t<div class=\"row\"></div>
\t\t</div>
\t\t<div class=\"container\" style=\"max-width: 60rem;padding: 1rem;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 toi\">
\t\t\t\t\t<div class=\"com-preview\">
\t\t\t\t\t\t<div class=\"com-preview-media-container\">
\t\t\t\t\t\t\t<a class=\"com-preview-media__image\" href=\"";
        // line 108
        if ((isset($context["bloc12"]) || array_key_exists("bloc12", $context) ? $context["bloc12"] : (function () { throw new RuntimeError('Variable "bloc12" does not exist.', 108, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 108) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc12"]) || array_key_exists("bloc12", $context) ? $context["bloc12"] : (function () { throw new RuntimeError('Variable "bloc12" does not exist.', 108, $this->source); })()), "optionValue", [], "any", false, false, false, 108), "|||"), 0, [], "array", false, false, false, 108))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 108), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
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
\t\t\t\t\t\t\t   style=\"background-image:url(";
        // line 109
        if ((isset($context["bloc12"]) || array_key_exists("bloc12", $context) ? $context["bloc12"] : (function () { throw new RuntimeError('Variable "bloc12" does not exist.', 109, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc12"]) || array_key_exists("bloc12", $context) ? $context["bloc12"] : (function () { throw new RuntimeError('Variable "bloc12" does not exist.', 109, $this->source); })()), "optionValue", [], "any", false, false, false, 109), "|||"), 1, [], "array", false, false, false, 109), "html", null, true);
        } else {
            yield "https://unsplash.it/800/600?image=696";
        }
        yield ");box-shadow: inset 0 0 0 2000px rgba(6, 48, 66, 0.35);\"></a>
\t\t\t\t\t\t\t<h3 class=\"com-preview-media__text\">
\t\t\t\t\t\t\t\t";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.decouvrez_musique"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3 style=\"margin-top: 2rem;\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.decouvrez_les_services"), "html", null, true);
        yield "</h3>
\t\t\t\t<div class=\"col-md-12\" style=\"padding: 0;\">
\t\t\t\t\t<div id=\"news-slider\" class=\"owl-carousel\">
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-photograph overlay lazy carroussel_image\" data-src=\"";
        // line 122
        if ((isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 122, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 122, $this->source); })()), "optionValue", [], "any", false, false, false, 122), "|||"), 1, [], "array", false, false, false, 122), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-photo.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        if ((isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 123, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 123, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 123) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc1"]) || array_key_exists("bloc1", $context) ? $context["bloc1"] : (function () { throw new RuntimeError('Variable "bloc1" does not exist.', 123, $this->source); })()), "optionValue", [], "any", false, false, false, 123), "|||"), 0, [], "array", false, false, false, 123))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 123), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "photographe", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.photographe"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-musicien overlay lazy carroussel_image\" data-src=\"";
        // line 129
        if ((isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 129, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 129, $this->source); })()), "optionValue", [], "any", false, false, false, 129), "|||"), 1, [], "array", false, false, false, 129), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-musicien.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 130
        if ((isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 130, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 130, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 130) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc2"]) || array_key_exists("bloc2", $context) ? $context["bloc2"] : (function () { throw new RuntimeError('Variable "bloc2" does not exist.', 130, $this->source); })()), "optionValue", [], "any", false, false, false, 130), "|||"), 0, [], "array", false, false, false, 130))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 130), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "musiciens", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.musicien"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-prod-musicale overlay lazy carroussel_image\" data-src=\"";
        // line 136
        if ((isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 136, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 136, $this->source); })()), "optionValue", [], "any", false, false, false, 136), "|||"), 1, [], "array", false, false, false, 136), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-production-musicale.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 137
        if ((isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 137, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 137) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc3"]) || array_key_exists("bloc3", $context) ? $context["bloc3"] : (function () { throw new RuntimeError('Variable "bloc3" does not exist.', 137, $this->source); })()), "optionValue", [], "any", false, false, false, 137), "|||"), 0, [], "array", false, false, false, 137))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 137), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-denregistrement", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-enregistrement"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-grp-d-musiq overlay lazy carroussel_image\" data-src=\"";
        // line 143
        if ((isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 143, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 143, $this->source); })()), "optionValue", [], "any", false, false, false, 143), "|||"), 1, [], "array", false, false, false, 143), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-group-music.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 144
        if ((isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 144, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 144) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc4"]) || array_key_exists("bloc4", $context) ? $context["bloc4"] : (function () { throw new RuntimeError('Variable "bloc4" does not exist.', 144, $this->source); })()), "optionValue", [], "any", false, false, false, 144), "|||"), 0, [], "array", false, false, false, 144))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 144), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "groupes-de-musique", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.groupe-de-musique"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<div class=\"box-prestation box-chorale overlay lazy carroussel_image\" data-src=\"";
        // line 149
        if ((isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 149, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 149, $this->source); })()), "optionValue", [], "any", false, false, false, 149), "|||"), 1, [], "array", false, false, false, 149), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-chorale.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 150
        if ((isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 150, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 150, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 150) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc5"]) || array_key_exists("bloc5", $context) ? $context["bloc5"] : (function () { throw new RuntimeError('Variable "bloc5" does not exist.', 150, $this->source); })()), "optionValue", [], "any", false, false, false, 150), "|||"), 0, [], "array", false, false, false, 150))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 150), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "chorale-gospel", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.chorale"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-stud-photo overlay lazy carroussel_image\" data-src=\"";
        // line 155
        if ((isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 155, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 155, $this->source); })()), "optionValue", [], "any", false, false, false, 155), "|||"), 1, [], "array", false, false, false, 155), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-stud-photo.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 156
        if ((isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 156, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 156, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 156) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc6"]) || array_key_exists("bloc6", $context) ? $context["bloc6"] : (function () { throw new RuntimeError('Variable "bloc6" does not exist.', 156, $this->source); })()), "optionValue", [], "any", false, false, false, 156), "|||"), 0, [], "array", false, false, false, 156))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 156), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-photo", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-photo"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-realisation-vid overlay lazy carroussel_image\" data-src=\"";
        // line 162
        if ((isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 162, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 162, $this->source); })()), "optionValue", [], "any", false, false, false, 162), "|||"), 1, [], "array", false, false, false, 162), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-realisation-vid.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 163
        if ((isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 163, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 163) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc7"]) || array_key_exists("bloc7", $context) ? $context["bloc7"] : (function () { throw new RuntimeError('Variable "bloc7" does not exist.', 163, $this->source); })()), "optionValue", [], "any", false, false, false, 163), "|||"), 0, [], "array", false, false, false, 163))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 163), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "realisation-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.realisation-video"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-evenementiels overlay lazy carroussel_image\" data-src=\"";
        // line 169
        if ((isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 169, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 169, $this->source); })()), "optionValue", [], "any", false, false, false, 169), "|||"), 1, [], "array", false, false, false, 169), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-evenementiels.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 170
        if ((isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 170, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 170, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 170) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc8"]) || array_key_exists("bloc8", $context) ? $context["bloc8"] : (function () { throw new RuntimeError('Variable "bloc8" does not exist.', 170, $this->source); })()), "optionValue", [], "any", false, false, false, 170), "|||"), 0, [], "array", false, false, false, 170))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 170), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "evenementiels", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.evenementiel"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-stud-vid overlay lazy carroussel_image\" data-src=\"";
        // line 176
        if ((isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 176, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 176, $this->source); })()), "optionValue", [], "any", false, false, false, 176), "|||"), 1, [], "array", false, false, false, 176), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-studio-video.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 177
        if ((isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 177, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 177, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 177) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc9"]) || array_key_exists("bloc9", $context) ? $context["bloc9"] : (function () { throw new RuntimeError('Variable "bloc9" does not exist.', 177, $this->source); })()), "optionValue", [], "any", false, false, false, 177), "|||"), 0, [], "array", false, false, false, 177))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 177), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-video"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.decouvrez_les_produits"), "html", null, true);
        yield "</h3>
\t\t\t\t<div class=\"col-md-12 toi\">
\t\t\t\t\t<div class=\"com-preview\">
\t\t\t\t\t\t<div class=\"com-preview-media-container\">
\t\t\t\t\t\t\t<a class=\"com-preview-media__image\" href=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        yield "\" style=\"background-image:url(";
        if ((isset($context["bloc11"]) || array_key_exists("bloc11", $context) ? $context["bloc11"] : (function () { throw new RuntimeError('Variable "bloc11" does not exist.', 188, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc11"]) || array_key_exists("bloc11", $context) ? $context["bloc11"] : (function () { throw new RuntimeError('Variable "bloc11" does not exist.', 188, $this->source); })()), "optionValue", [], "any", false, false, false, 188), "html", null, true);
        } else {
            yield "https://unsplash.it/800/600?image=696";
        }
        yield ");box-shadow: inset 0 0 0 2000px rgba(6, 48, 66, 0.35);\"></a>
\t\t\t\t\t\t\t<h3 class=\"com-preview-media__text\">
\t\t\t\t\t\t\t\t";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.produits_offres"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3 class=\"mt-4\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.derniers_articles"), "html", null, true);
        yield "</h3>
\t\t\t\t<div class=\"cartearticles row\">
\t\t\t\t\t";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 198, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 199
            yield "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_name", [], "any", false, false, false, 200)])), "html", null, true);
            yield "\" style=\"text-decoration: none;\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"img-cover\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imagePost", [], "any", false, false, false, 203), "html", null, true);
            yield "\" class=\"lazy\" alt=\"article-cover\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t<h4 style=\"text-overflow: ellipsis;font-size: 1.25rem;\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_title", [], "any", false, false, false, 206), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

\t<div class=\"siteorigin-widget-tinymce textwidget\">
\t\t<div id=\"video-popup-light\" style=\"display: none;\">
\t\t\t<a class=\"boxclose\" id=\"video-popup-close\"></a>
\t\t\t<iframe src=\"\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>
\t\t</div>

\t\t<div id=\"video-popup-fade\" style=\"display: none;\"></div>

\t\t";
        // line 226
        yield "\t</div>
\t";
        // line 227
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 231
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

\t<!-- Full background slider jQuery plugin -->
\t<script src=\"https://code.jquery.com/ui/1.10.2/jquery-ui.min.js\" integrity=\"sha256-FgiaQnQazF/QCrF9qSvpRY6PACn9ZF8VnlgqfqD1LsE=\" crossorigin=\"anonymous\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js")), "html", null, true);
        yield "\" defer></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script>
\t<script>
\t\t/* \tconst clickC = document.querySelector(\".desc\");
\tclickC.addEventListener(\"click\", function () {
\t\tconst r = Math.round(Math.random() * 255 + 0);
\t\tconst g = Math.round(Math.random() * 255 + 0);
\t\tconst b = Math.round(Math.random() * 255 + 0);
\t\tdocument.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
\t}); */

\$(document).ready(function () {
\$(\"#news-slider\").owlCarousel({
items: 3,
itemsDesktop: [
1199, 3
],
itemsDesktopSmall: [
980, 2
],
itemsMobile: [
600, 1
],
navigation: true,
navigationText: [
\"\", \"\"
],
pagination: true,
autoPlay: true
});
});
\$(\"#yourproject-iconed-link, #fermeur\").click(function (e) {
\te.preventDefault();
\t\$(\"#dialoguons\").fadeToggle(\"slow\", \"linear\");
});

\$(\".closeBtnModal\").click(function (e) {
\te.preventDefault();
\t\$(\"#newsletterModal\").modal('toggle');
});


setTimeout(function () {
\tvar f = document.querySelectorAll('iframe')[0];
\tlet url = \$(\"#youtube_url\").val();
\tconsole.log(url);
\tf.src = 'https://www.youtube.com/embed/' + url;
\tconsole.log('FB loaded after 2s');
}, 100);

\$(document).ready(function () {
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
\$(\"#frLang\").hide();
// toggle language for English
\$(\"#enLang\").click(function () {
\$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-us'> </span>  EN\");
\$(\"#enLang\").hide();
\$(\"#frLang\").toggle(\"slide\");
});
// toggle language for French
\$(\"#frLang\").click(function () {
\$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-fr'> </span>  FR\");
\$(\"#frLang\").hide();
\$(\"#enLang\").toggle(\"slide\");
});

});

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
        return "home/index.html.twig";
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
        return array (  835 => 239,  827 => 235,  817 => 234,  806 => 231,  796 => 230,  786 => 227,  783 => 226,  768 => 212,  756 => 206,  750 => 203,  744 => 200,  741 => 199,  737 => 198,  732 => 196,  723 => 190,  712 => 188,  705 => 184,  678 => 177,  670 => 176,  644 => 170,  636 => 169,  610 => 163,  602 => 162,  576 => 156,  568 => 155,  543 => 150,  535 => 149,  510 => 144,  502 => 143,  476 => 137,  468 => 136,  442 => 130,  434 => 129,  407 => 123,  399 => 122,  391 => 117,  382 => 111,  373 => 109,  353 => 108,  342 => 99,  332 => 98,  321 => 94,  311 => 93,  300 => 90,  290 => 89,  280 => 86,  274 => 83,  270 => 82,  263 => 79,  253 => 78,  242 => 74,  239 => 73,  233 => 72,  231 => 71,  225 => 69,  215 => 68,  206 => 65,  180 => 41,  170 => 38,  166 => 37,  158 => 31,  155 => 29,  151 => 27,  143 => 26,  139 => 25,  135 => 24,  131 => 22,  128 => 20,  124 => 18,  115 => 16,  111 => 15,  107 => 14,  104 => 13,  100 => 11,  96 => 10,  92 => 9,  88 => 8,  84 => 7,  80 => 6,  74 => 4,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homeLayout.html.twig' %}

{% block head %}
\t{{ parent() }}

\t<link rel=\"icon\" href=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png')) }}\" sizes=\"32x32\"/>
\t<link rel=\"apple-touch-icon-precomposed\" href=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png')) }}\"/>
\t<meta name=\"msapplication-TileImage\" content=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\"/>
\t<meta name=\"title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'home'}) }}\">
\t<meta name=\"description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'home'}) }}\">
\t<link rel=\"canonical\" href=\"https://www.trustandmarket.com/{{app.request.getLocale()}}\">
\t{# OG CONTENT #}
\t<meta property=\"og:site_name\" content=\"Trust&Market\">
\t<meta property=\"og:title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'home'}) }}\">
\t<meta property=\"og:description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'home'}) }}\">
\t<meta property=\"og:image\" content=\"{% if bloc10 %}{{bloc10.optionValue}}{% else %}{{absolute_url(asset('assets/img/prestations/cover.jpg'))}}{% endif %}\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"{{ absolute_url(path('home')) }}\">
\t{# END OG CONTENT #}

\t{# Twitter CARD #}
\t<meta name=\"twitter:card\" content=\"summary_large_image\"> <meta name=\"twitter:creator\" content=\"Kbr Global\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'home'}) }}\">
\t<meta name=\"twitter:description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'home'}) }}\">
\t<meta name=\"twitter:image\" content=\"{% if bloc1 %}{{bloc1.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-photo.jpg')}}{% endif %}\">
\t<meta name=\"twitter:image:alt\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'home'}) }}\">
\t{# END Twitter Card #}

\t{# LD JSON #}
\t<script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"https://schema.org\",
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"Trust & Market\",
\t\t\t\"legalName\" : \"SAS KBR GLOBAL\",
\t\t\t\"url\": \"{{ absolute_url(path('home')) }}\",
\t\t\t\"image\":\"{% if bloc10 %}{{bloc10.optionValue}}{% else %}{{asset('assets/img/prestations/cover.jpg')}}{% endif %}\",
\t\t\t\"telephone\": \"+33 1 85 42 14 91\",
\t\t\t\"email\": \"contact@kbr-global.com\",
\t\t\t\"logo\" : \"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\",
\t\t\t\"foundingDate\": \"2017\",
\t\t\t\"founders\": [{
\t\t\t\t\"@type\": \"Person\",
\t\t\t\t\"name\": \"Kalide Brassier\"
\t\t\t}],
\t\t\t\"address\": {
\t\t\t\t\"@type\": \"PostalAddress\",
\t\t\t\t\"addressLocality\": \"CHELLES\",
\t\t\t\t\"postalCode\": \"77500\",
\t\t\t\t\"streetAddress\": \"1 Rue Rejane Ruel\",
\t\t\t\t\"addressCountry\": \"FR\"
\t\t\t},
\t\t\t\"sameAs\": [
\t\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t\t]
\t\t}
\t</script>

\t{# End LD JSON #}
\t<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\"/>
{% endblock %}

{% block title %}
\t{{ parent() }}
\t|
\t{% if meta_page is not null %}
\t\t{{ meta_page.postTitle }}
\t\t{% else %}Trust &amp; Market |
\t\t{{'general.titre'|trans}}
\t{% endif %}
{% endblock %}

{% block style %}
\t{{ parent() }}

\t<!-- Your custom styles (optional) -->
\t<link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/css/footer.css')) }}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\">
\t<link href=\"{{ absolute_url(asset('assets/css/home.min.css')) }}\" rel=\"stylesheet\">
{% endblock %}

{% block header %}
\t{{parent()}}
{% endblock %}

{% block navigation %}
\t{{parent()}}
{% endblock %}


{% block body %}
\t<main class=\"text-center\">
\t\t<div class=\"container\" style=\"max-width: 60rem;display: none;\">
\t\t\t<div class=\"row\"></div>
\t\t</div>
\t\t<div class=\"container\" style=\"max-width: 60rem;padding: 1rem;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 toi\">
\t\t\t\t\t<div class=\"com-preview\">
\t\t\t\t\t\t<div class=\"com-preview-media-container\">
\t\t\t\t\t\t\t<a class=\"com-preview-media__image\" href=\"{% if bloc12 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc12.optionValue|split('|||')[0] %} {{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'photographe',services_proposes: '',code_postal_ville: ''})}}{% endif %}\"
\t\t\t\t\t\t\t   style=\"background-image:url({% if bloc12 %}{{bloc12.optionValue|split('|||')[1]}}{% else %}https://unsplash.it/800/600?image=696{% endif %});box-shadow: inset 0 0 0 2000px rgba(6, 48, 66, 0.35);\"></a>
\t\t\t\t\t\t\t<h3 class=\"com-preview-media__text\">
\t\t\t\t\t\t\t\t{{'general.decouvrez_musique'|trans}}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3 style=\"margin-top: 2rem;\">{{'general.decouvrez_les_services'|trans}}</h3>
\t\t\t\t<div class=\"col-md-12\" style=\"padding: 0;\">
\t\t\t\t\t<div id=\"news-slider\" class=\"owl-carousel\">
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-photograph overlay lazy carroussel_image\" data-src=\"{% if bloc1 %}{{bloc1.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-photo.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc1 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc1.optionValue|split('|||')[0] %} {{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'photographe',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.photographe'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-musicien overlay lazy carroussel_image\" data-src=\"{% if bloc2 %}{{bloc2.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-musicien.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc2 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc2.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'musiciens',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.musicien'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-prod-musicale overlay lazy carroussel_image\" data-src=\"{% if bloc3 %}{{bloc3.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-production-musicale.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc3 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc3.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'studio-denregistrement',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.studio-enregistrement'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-grp-d-musiq overlay lazy carroussel_image\" data-src=\"{% if bloc4 %}{{bloc4.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-group-music.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc4 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc4.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'groupes-de-musique',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.groupe-de-musique'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<div class=\"box-prestation box-chorale overlay lazy carroussel_image\" data-src=\"{% if bloc5 %}{{bloc5.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-chorale.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t<a href=\"{% if bloc5 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc5.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces',{type_prestation:'chorale-gospel',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.chorale'|trans}}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-stud-photo overlay lazy carroussel_image\" data-src=\"{% if bloc6 %}{{bloc6.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-stud-photo.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc6 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc6.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'studio-photo',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.studio-photo'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-realisation-vid overlay lazy carroussel_image\" data-src=\"{% if bloc7 %}{{bloc7.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-realisation-vid.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc7 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc7.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'realisation-video',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.realisation-video'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-evenementiels overlay lazy carroussel_image\" data-src=\"{% if bloc8 %}{{bloc8.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-evenementiels.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc8 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc8.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'evenementiels',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.evenementiel'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-stud-vid overlay lazy carroussel_image\" data-src=\"{% if bloc9 %}{{bloc9.optionValue|split('|||')[1]}}{% else %}{{asset('assets/img/prestations/home-prestations-studio-video.jpg')}}{% endif %}\">
\t\t\t\t\t\t\t\t\t<a href=\"{% if bloc9 %}{% for item in prestations %} {% if item.termTaxonomyId == bloc9.optionValue|split('|||')[0] %}{{path('annonces_listeAnnonces', {type_prestation: item.slug,services_proposes: '',code_postal_ville: ''})}}{% endif %} {% endfor %}{% else %}{{path('annonces_listeAnnonces', {type_prestation: 'studio-video',services_proposes: '',code_postal_ville: ''})}}{% endif %}\" class=\"prestation-link lazyload\">{{'home.bouton.studio-video'|trans}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3>{{'general.decouvrez_les_produits'|trans}}</h3>
\t\t\t\t<div class=\"col-md-12 toi\">
\t\t\t\t\t<div class=\"com-preview\">
\t\t\t\t\t\t<div class=\"com-preview-media-container\">
\t\t\t\t\t\t\t<a class=\"com-preview-media__image\" href=\"{{path('annonces_listeAnnonces', {type_prestation: 'produits',services_proposes: '',code_postal_ville: ''})}}\" style=\"background-image:url({% if bloc11 %}{{bloc11.optionValue}}{% else %}https://unsplash.it/800/600?image=696{% endif %});box-shadow: inset 0 0 0 2000px rgba(6, 48, 66, 0.35);\"></a>
\t\t\t\t\t\t\t<h3 class=\"com-preview-media__text\">
\t\t\t\t\t\t\t\t{{'general.produits_offres'|trans}}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3 class=\"mt-4\">{{'general.derniers_articles'|trans}}</h3>
\t\t\t\t<div class=\"cartearticles row\">
\t\t\t\t\t{% for article in blog %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"{{absolute_url(path('blog_details_postBlog', {slug: article.post_name}))}}\" style=\"text-decoration: none;\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"img-cover\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ article.imagePost }}\" class=\"lazy\" alt=\"article-cover\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t<h4 style=\"text-overflow: ellipsis;font-size: 1.25rem;\">{{ article.post_title }}</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

\t<div class=\"siteorigin-widget-tinymce textwidget\">
\t\t<div id=\"video-popup-light\" style=\"display: none;\">
\t\t\t<a class=\"boxclose\" id=\"video-popup-close\"></a>
\t\t\t<iframe src=\"\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>
\t\t</div>

\t\t<div id=\"video-popup-fade\" style=\"display: none;\"></div>

\t\t{# <a href=\"#\" id=\"video-popup-opener\"></a> #}
\t</div>
\t{{parent()}}
{% endblock %}

{% block footer %}
\t{{ parent() }}
{% endblock %}

{% block javascripts %}
\t{{ parent() }}

\t<!-- Full background slider jQuery plugin -->
\t<script src=\"https://code.jquery.com/ui/1.10.2/jquery-ui.min.js\" integrity=\"sha256-FgiaQnQazF/QCrF9qSvpRY6PACn9ZF8VnlgqfqD1LsE=\" crossorigin=\"anonymous\"></script>
\t<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/js/fullclip.min.js')) }}\" defer></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script>
\t<script>
\t\t/* \tconst clickC = document.querySelector(\".desc\");
\tclickC.addEventListener(\"click\", function () {
\t\tconst r = Math.round(Math.random() * 255 + 0);
\t\tconst g = Math.round(Math.random() * 255 + 0);
\t\tconst b = Math.round(Math.random() * 255 + 0);
\t\tdocument.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
\t}); */

\$(document).ready(function () {
\$(\"#news-slider\").owlCarousel({
items: 3,
itemsDesktop: [
1199, 3
],
itemsDesktopSmall: [
980, 2
],
itemsMobile: [
600, 1
],
navigation: true,
navigationText: [
\"\", \"\"
],
pagination: true,
autoPlay: true
});
});
\$(\"#yourproject-iconed-link, #fermeur\").click(function (e) {
\te.preventDefault();
\t\$(\"#dialoguons\").fadeToggle(\"slow\", \"linear\");
});

\$(\".closeBtnModal\").click(function (e) {
\te.preventDefault();
\t\$(\"#newsletterModal\").modal('toggle');
});


setTimeout(function () {
\tvar f = document.querySelectorAll('iframe')[0];
\tlet url = \$(\"#youtube_url\").val();
\tconsole.log(url);
\tf.src = 'https://www.youtube.com/embed/' + url;
\tconsole.log('FB loaded after 2s');
}, 100);

\$(document).ready(function () {
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
\$(\"#frLang\").hide();
// toggle language for English
\$(\"#enLang\").click(function () {
\$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-us'> </span>  EN\");
\$(\"#enLang\").hide();
\$(\"#frLang\").toggle(\"slide\");
});
// toggle language for French
\$(\"#frLang\").click(function () {
\$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-fr'> </span>  FR\");
\$(\"#frLang\").hide();
\$(\"#enLang\").toggle(\"slide\");
});

});

\t</script>

{% endblock %}
", "home/index.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/home/index.html.twig");
    }
}
