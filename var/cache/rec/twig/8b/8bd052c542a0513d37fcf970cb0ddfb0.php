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

/* marketing/details_promo.html.twig */
class __TwigTemplate_3cdfe710e74fd80aecdec537bb13851e extends Template
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
        return "generalLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketing/details_promo.html.twig"));

        $this->parent = $this->loadTemplate("generalLayout.html.twig", "marketing/details_promo.html.twig", 1);
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
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
<meta name=\"title\" content=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
<meta name=\"description\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 6, $this->source); })()), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        yield "\">
<link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)])), "html", null, true);
        yield "\">
<link rel=\"shortlink\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 8, $this->source); })()), "slug", [], "any", false, false, false, 8)])), "html", null, true);
        yield "\">
<meta property=\"og:title\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
<meta property=\"og:description\" content=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 10, $this->source); })()), "meta_description", [], "any", false, false, false, 10), "html", null, true);
        yield "\">

<meta property=\"og:image\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 12, $this->source); })()), "articles", [], "any", false, false, false, 12), 0, [], "any", false, false, false, 12), "guid", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:url\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 14, $this->source); })()), "slug", [], "any", false, false, false, 14)])), "html", null, true);
        yield "\">
<meta property=\"og:locale\" content=\"fr\" />
<meta property=\"og:locale:alternate\" content=\"en\" />

";
        // line 19
        yield "<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:creator\" content=\"Kbr Global\">
<meta name=\"twitter:site\" content=\"@trustandmarket\">
<meta name=\"twitter:title\" content=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
<meta name=\"twitter:description\" content=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 23, $this->source); })()), "meta_description", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
<meta name=\"twitter:image\" content=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 24, $this->source); })()), "articles", [], "any", false, false, false, 24), 0, [], "any", false, false, false, 24), "guid", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
<meta name=\"twitter:image:alt\" content=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 25, $this->source); })()), "articles", [], "any", false, false, false, 25), 0, [], "any", false, false, false, 25), "guid", [], "any", false, false, false, 25), "html", null, true);
        yield "\">
";
        // line 27
        yield "
<script type=\"application/ld+json\">
\t{   
\t\t\"@context\": \"https://schema.org\", 
\t\t\"@type\": \"Article\",
\t\t\"headline\": \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), "html", null, true);
        yield "\",
\t\t\"alternativeHeadline\": \"Operation speciale Trust&Market\",
\t\t\"image\": \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 34, $this->source); })()), "articles", [], "any", false, false, false, 34), 0, [], "any", false, false, false, 34), "guid", [], "any", false, false, false, 34), "html", null, true);
        yield "\",
\t\t\"author\": \"Kalide Brassier\", 
\t\t\"award\": \"\",
\t\t\"editor\": \"Kbr Global\", 
\t\t\"genre\": \"Event\", 
\t\t\"keywords\": \"\", 
\t\t\"wordcount\": \"1120\",
\t\t\"publisher\": {
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"Google\",
\t\t\t\"logo\": {
\t\t\t\"@type\": \"ImageObject\",
\t\t\t\"url\": \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
\t\t\t}
\t\t},
\t\t\"url\": \"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 49, $this->source); })()), "slug", [], "any", false, false, false, 49)])), "html", null, true);
        yield "\",
\t\t\"mainEntityOfPage\": {
\t\t\t\"@type\": \"WebPage\",
\t\t\t\"@id\": \"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 52, $this->source); })()), "slug", [], "any", false, false, false, 52)])), "html", null, true);
        yield "\"
\t\t},
\t\t\"datePublished\": \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 54, $this->source); })()), "post_date", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"dateCreated\": \"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 55, $this->source); })()), "post_date", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"dateModified\": \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 56, $this->source); })()), "post_date", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"description\": \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 57, $this->source); })()), "meta_description", [], "any", false, false, false, 57), "html", null, true);
        yield "\",
\t\t\"sameAs\": [
\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t]
\t}
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("titre-promo-com", [], "marketing"), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 70, $this->source); })()), "titre", [], "any", false, false, false, 70), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 73
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
<!-- Gijgo datepicker css -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\"
\tintegrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"
\tcrossorigin=\"anonymous\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
<!-- Your custom styles (optional) -->
<link rel=\"stylesheet\" href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\">
<link href=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/single-post.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

<link href=\"https://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox.css"), "html", null, true);
        yield "\" />
<style>
\t.ml-6 {
\t\tmargin-left: 5rem !important;
\t}

\t.timer {
\t\tfont-size: 12px;
\t\tcolor: #90949c;
\t\tfont-family: cursive;
\t}

\t@media only screen and (min-width: 768px) {
\t\t.fixage {
\t\t\tposition: fixed;
\t\t\tright: 0px;
\t\t}
\t}

\t@media only screen and (min-width: 768px) and (max-width: 1199px) {
\t\t.carteArticle {
\t\t\theight: 23rem;
\t\t\toverflow-y: auto;
\t\t}
\t}

\t.liArticle {
\t\tmargin: 5px !important;
\t\tborder-radius: 5px;
\t}

\t@media only screen and (min-width: 1500px) {
\t\t.fixage {
\t\t\twidth: 30%;
\t\t}
\t}

\t.grand-titre {
\t\ttext-align: center;
\t}

\t@media only screen and (max-width: 768px) {
\t\t.list_category_annonce {
\t\t\tflex-direction: column;
\t\t\twidth: 100%;
\t\t\tmax-width: 100%;
\t\t\tbox-sizing: content-box;
\t\t}

\t\t.category_annonce {
\t\t\twidth: auto;
\t\t\tmargin-left: 0%;
\t\t}
\t}

\t.list_category_annonce {
\t\tflex-wrap: wrap;
\t\tdisplay: flex;
\t\tjustify-content: space-around;
\t}

\t.carousel-cards {
\t\tflex-wrap: wrap;
\t\tdisplay: flex;
\t\tjustify-content: space-around;
\t\tposition: relative;
\t}

\t.carousel-card {
\t\twidth: auto;
\t\t/* margin-right: 2%; */
\t\tborder-radius: 15px;
\t\theight: 16rem;
\t\tbackground-repeat: no-repeat;
\t\tbackground-size: cover;
\t\tdisplay: flex;
\t\tjustify-content: space-between;
\t\talign-items: end;
\t\tmargin-bottom: 1rem;
\t\tcursor: pointer;
\t\tbox-shadow: inset 0 0 0 2000px rgb(6 48 66 / 35%);
\t\tbackground-size: cover;
\t}

\t.left-align-text {
\t\tposition: relative;
\t\tleft: 15px;
\t\tbottom: 0px;
\t\tcolor: white;
\t\ttext-transform: uppercase;
\t}

\t.right-align-text {
\t\tposition: relative;
\t\tright: 15px;
\t\tbottom: 0px;
\t\tcolor: white;
\t\ttext-transform: uppercase;
\t}

\t.detail_marketing {
\t\ttext-align: justify;
\t\tmargin-top: 1rem;
\t\tmargin-bottom: 2rem;
\t\tfont-family: 'Open Sans', sans-serif;
\t}
\t.category_annonce {
\t\twidth: auto;
\t\t/* margin-left: 1%; */
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\tborder: 2px solid black;
\t\tborder-radius: 10px;
\t\tpadding: 10px;
\t\tmargin-bottom: 1rem;
\t\tcursor: pointer;
\t\tcolor: black;
\t\ttext-transform: uppercase;
\t\tfont-family: 'Open Sans', sans-serif;
\t\ttext-align: center;
\t}
\t.category_annonce_ahref:hover {
\t\ttext-decoration: inherit;
\t}
\t.category_annonce_ahref:hover>div {
\t\tbackground: #262626;
\t\tcolor: white;
\t\ttext-decoration: inherit;
\t}
\t.lcl_fade_oc.lcl_pre_show #lcl_overlay,
\t.lcl_fade_oc.lcl_pre_show #lcl_window,
\t.lcl_fade_oc.lcl_is_closing #lcl_overlay,
\t.lcl_fade_oc.lcl_is_closing #lcl_window {
\t\topacity: 0 !important;
\t}
\t.lcl_fade_oc.lcl_is_closing #lcl_overlay {
\t\t-webkit-transition-delay: .15s !important;
\t\ttransition-delay: .15s !important;
\t}
\t.active-slide {
\t\tdisplay: flex !important;
\t}
\t.slide {
\t\tdisplay: none;
\t}
\t.slider-dots {
\t\tlist-style: none;
\t\tdisplay: inline-block;
\t\tpadding-left: 0;
\t\tmargin-bottom: 0;
\t}
\t.slider-dots li {
\t\tcolor: #bbbcbc;
\t\tdisplay: inline;
\t\tfont-size: 40px;
\t\tmargin-right: 5px;
\t}
\t.slider-dots li.active-dot {
\t\tcolor: #363636;
\t}
\tstrong{
\t\tfont-weight: bold;
\t}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 251
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 252
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 256
        yield "<div id=\"imageHolder\" class=\"view intro-2\">
\t<div class=\"full-bg-img\">
\t\t<div class=\"mask rgba-purple-light flex-center\">
\t\t\t<div class=\"container text-left align-items-end white-text wow fadeInUp\">
\t\t\t\t<h2 class=\"page-title\"></h2>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 268
        yield "<!--Main layout-->
<main class=\"mt-5 pt-5\">
\t<div class=\"container\">
\t\t<h3 hidden class=\"h3-responsive grand-titre\">";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 271, $this->source); })()), "titre", [], "any", false, false, false, 271), "html", null, true);
        yield "</h3>
\t\t<p class=\"detail_marketing\">
\t\t\t";
        // line 273
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 273, $this->source); })()), "chapeau", [], "any", false, false, false, 273);
        yield "
\t\t</p>
\t\t<section>
\t\t\t<div style=\"width: 100%;display: flex;justify-content: center;\">
\t\t\t\t<ul class=\"slider-dots\">
\t\t\t\t\t";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["page_slide"]) || array_key_exists("page_slide", $context) ? $context["page_slide"] : (function () { throw new RuntimeError('Variable "page_slide" does not exist.', 278, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 279
            yield "\t\t\t\t\t\t<li class=\"dot ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 279) == 1)) {
                yield "active-dot";
            }
            yield "\">•</li>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 283
        $context["x"] = 0;
        // line 284
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 284, $this->source); })()), "articles", [], "any", false, false, false, 284));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 285
            yield "\t\t\t\t";
            $context["x"] = ((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 285, $this->source); })()) + 1);
            // line 286
            yield "\t\t\t\t";
            if (((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 286, $this->source); })()) == 1)) {
                yield "<div class=\"row slide ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 286) == 1)) {
                    yield "active-slide";
                }
                yield "\">";
            }
            // line 287
            yield "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"carousel-card col-md-12\"
\t\t\t\t\t\tstyle=\"background-image: url(";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 289), "html", null, true);
            yield ");\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "postTitle", [], "any", false, false, false, 289), "html", null, true);
            yield "\"
\t\t\t\t\t\tattr-src=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 290), "html", null, true);
            yield "\"
\t\t\t\t\t\tdata-lcl-author=\"Trust&Market\"
\t\t\t\t\t\tdata-lcl-thumb=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 292), "html", null, true);
            yield "\">
\t\t\t\t\t\t<p class=\"left-align-text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"right-align-text\">
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 300
            if (((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 300, $this->source); })()) == 4)) {
                // line 301
                yield "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 302
                $context["x"] = 0;
                yield " 
\t\t\t\t";
            }
            // line 304
            yield "\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "\t\t</section>
\t\t<p class=\"detail_marketing\">
\t\t\t";
        // line 307
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 307, $this->source); })()), "description", [], "any", false, false, false, 307);
        yield "
\t\t</p>
\t\t<div class=\"row\">
\t\t";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 310, $this->source); })()), "categorie", [], "any", false, false, false, 310));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 311
            yield "\t\t\t<a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 311), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "\" class=\"col-md-3 category_annonce_ahref\">
\t\t\t\t<div class=\"category_annonce col-md-12\">
\t\t\t\t\t";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 313), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "\t\t</div>
\t</div>
</main>
<!--Main layout-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 325
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 330
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<!-- Full background slider jQuery plugin -->
<script type=\"text/javascript\" src=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.js\"></script>
<script src=\"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lc_lightbox.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<!-- SKINS -->
<link rel=\"stylesheet\" href=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox_skins_dark.css"), "html", null, true);
        yield "\" />
<!-- ASSETS -->
<script\tsrc=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alloy_finger.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script>
\t\$(document).ready(function (e) {

\t\t// live handler
\t\tlc_lightbox('.carousel-card', {
\t\t\twrap_class: 'lcl_fade_oc',
\t\t\tgallery: true,
\t\t\tthumb_attr: 'data-lcl-thumb',
\t\t\tskin: 'dark',
\t\t\tradius: 0,
\t\t\tpadding: 0,
\t\t\tborder_w: 0,
\t\t\tsrc_attr: 'attr-src',
\t\t\tmax_width: '93%',
\t\t\tmax_height: '93%',
\t\t\tshow_author: false,
\t\t\tshow_title :true,
\t\t\tshow_descr :true,
\t\t\tthumbs_nav :true,
\t\t\ttn_hidden :0,
\t\t\ttxt_hidden :0,
\t\t});

\t\tmain();
\t});
\tvar slideSpeed = 10000;

\tvar main = function () {
\t\t//Carousel
\t\tsetInterval(function () { timedDelay() }, slideSpeed);
\t\t//arrow-next
\t\t\$('.arrow-next').click(function (e) {
\t\t\te.preventDefault();

\t\t\tvar currentSlide = \$('.active-slide');
\t\t\tvar nextSlide = currentSlide.next();

\t\t\tvar currentDot = \$('.active-dot');
\t\t\tvar nextDot = currentDot.next();

\t\t\tif (nextSlide.length === 0) {
\t\t\t\tnextSlide = \$('.slide').first();
\t\t\t\tnextDot = \$('.dot').first();
\t\t\t}

\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tnextSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tnextDot.addClass('active-dot');
\t\t\t});
\t\t});
\t\t//arrow-prev
\t\t\$('.arrow-prev').click(function (e) {
\t\t\te.preventDefault();

\t\t\tvar currentSlide = \$('.active-slide');
\t\t\tvar prevSlide = currentSlide.prev();

\t\t\tvar currentDot = \$('.active-dot');
\t\t\tvar prevDot = currentDot.prev();

\t\t\tif (prevSlide.length === 0) {
\t\t\t\tprevSlide = \$('.slide').last();
\t\t\t\tprevDot = \$('.dot').last();
\t\t\t}

\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tprevSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tprevDot.addClass('active-dot');
\t\t\t});
\t\t});
\t};

\t//timedDelay function
\tfunction timedDelay() {
\t\tvar currentSlide = \$('.active-slide');
\t\tvar nextTimedSlide = currentSlide.next();
\t\tvar currentDot = \$('.active-dot');
\t\tvar nextDot = currentDot.next();
\t\t\tif (nextTimedSlide.length === 0) {
\t\t\t\tnextTimedSlide = \$('.slide').first();
\t\t\t\tnextDot = \$('.dot').first();
\t\t\t}
\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tnextTimedSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tnextDot.addClass('active-dot');
\t\t\t});
\t}
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
        return "marketing/details_promo.html.twig";
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
        return array (  731 => 339,  726 => 337,  721 => 335,  716 => 333,  711 => 331,  707 => 330,  697 => 329,  686 => 325,  676 => 324,  664 => 317,  654 => 313,  648 => 311,  644 => 310,  638 => 307,  634 => 305,  620 => 304,  615 => 302,  612 => 301,  610 => 300,  599 => 292,  594 => 290,  588 => 289,  584 => 287,  575 => 286,  572 => 285,  554 => 284,  552 => 283,  548 => 281,  529 => 279,  512 => 278,  504 => 273,  499 => 271,  494 => 268,  484 => 267,  467 => 256,  457 => 255,  446 => 252,  436 => 251,  262 => 84,  256 => 81,  252 => 80,  242 => 73,  232 => 72,  212 => 70,  192 => 57,  188 => 56,  184 => 55,  180 => 54,  175 => 52,  169 => 49,  163 => 46,  148 => 34,  143 => 32,  136 => 27,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  115 => 19,  108 => 14,  103 => 12,  98 => 10,  94 => 9,  90 => 8,  86 => 7,  82 => 6,  78 => 5,  74 => 4,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'generalLayout.html.twig' %}

{% block head %}
{{ parent() }}
<meta name=\"title\" content=\"{{ops.titre}}\">
<meta name=\"description\" content=\"{{ops.meta_description}}\">
<link rel=\"canonical\" href=\"{{absolute_url(path('marketing_details_promo_com', {slug: ops.slug}))}}\">
<link rel=\"shortlink\" href=\"{{absolute_url(path('marketing_details_promo_com', {slug: ops.slug}))}}\">
<meta property=\"og:title\" content=\"{{ops.titre}}\">
<meta property=\"og:description\" content=\"{{ops.meta_description}}\">

<meta property=\"og:image\" content=\"{{ops.articles.0.guid}}\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:url\" content=\"{{absolute_url(path('marketing_details_promo_com', {slug: ops.slug}))}}\">
<meta property=\"og:locale\" content=\"fr\" />
<meta property=\"og:locale:alternate\" content=\"en\" />

{# Twitter CARD #}
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:creator\" content=\"Kbr Global\">
<meta name=\"twitter:site\" content=\"@trustandmarket\">
<meta name=\"twitter:title\" content=\"{{ops.titre}}\">
<meta name=\"twitter:description\" content=\"{{ops.meta_description}}\">
<meta name=\"twitter:image\" content=\"{{ops.articles.0.guid}}\">
<meta name=\"twitter:image:alt\" content=\"{{ops.articles.0.guid}}\">
{# END Twitter Card #}

<script type=\"application/ld+json\">
\t{   
\t\t\"@context\": \"https://schema.org\", 
\t\t\"@type\": \"Article\",
\t\t\"headline\": \"{{ops.titre}}\",
\t\t\"alternativeHeadline\": \"Operation speciale Trust&Market\",
\t\t\"image\": \"{{ops.articles.0.guid}}\",
\t\t\"author\": \"Kalide Brassier\", 
\t\t\"award\": \"\",
\t\t\"editor\": \"Kbr Global\", 
\t\t\"genre\": \"Event\", 
\t\t\"keywords\": \"\", 
\t\t\"wordcount\": \"1120\",
\t\t\"publisher\": {
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"Google\",
\t\t\t\"logo\": {
\t\t\t\"@type\": \"ImageObject\",
\t\t\t\"url\": \"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png')) }}\"
\t\t\t}
\t\t},
\t\t\"url\": \"{{absolute_url(path('marketing_details_promo_com', {slug: ops.slug}))}}\",
\t\t\"mainEntityOfPage\": {
\t\t\t\"@type\": \"WebPage\",
\t\t\t\"@id\": \"{{absolute_url(path('marketing_details_promo_com', {slug: ops.slug}))}}\"
\t\t},
\t\t\"datePublished\": \"{{ops.post_date|date(\"d/m/Y\")}}\",
\t\t\"dateCreated\": \"{{ops.post_date|date(\"d/m/Y\")}}\",
\t\t\"dateModified\": \"{{ops.post_date|date(\"d/m/Y\")}}\",
\t\t\"description\": \"{{ops.meta_description}}\",
\t\t\"sameAs\": [
\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t]
\t}
</script>

{% endblock %}

{% block title %}Trust &amp; Market | {{'titre-promo-com'|trans({}, 'marketing') }} | {{ ops.titre }}{% endblock %}

{% block style %}
{{ parent() }}
<!-- Gijgo datepicker css -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\"
\tintegrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"
\tcrossorigin=\"anonymous\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
<!-- Your custom styles (optional) -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/custome.css') }}\">
<link href=\"{{ asset('assets/css/single-post.css') }}\" rel=\"stylesheet\">

<link href=\"https://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/lc_lightbox.css') }}\" />
<style>
\t.ml-6 {
\t\tmargin-left: 5rem !important;
\t}

\t.timer {
\t\tfont-size: 12px;
\t\tcolor: #90949c;
\t\tfont-family: cursive;
\t}

\t@media only screen and (min-width: 768px) {
\t\t.fixage {
\t\t\tposition: fixed;
\t\t\tright: 0px;
\t\t}
\t}

\t@media only screen and (min-width: 768px) and (max-width: 1199px) {
\t\t.carteArticle {
\t\t\theight: 23rem;
\t\t\toverflow-y: auto;
\t\t}
\t}

\t.liArticle {
\t\tmargin: 5px !important;
\t\tborder-radius: 5px;
\t}

\t@media only screen and (min-width: 1500px) {
\t\t.fixage {
\t\t\twidth: 30%;
\t\t}
\t}

\t.grand-titre {
\t\ttext-align: center;
\t}

\t@media only screen and (max-width: 768px) {
\t\t.list_category_annonce {
\t\t\tflex-direction: column;
\t\t\twidth: 100%;
\t\t\tmax-width: 100%;
\t\t\tbox-sizing: content-box;
\t\t}

\t\t.category_annonce {
\t\t\twidth: auto;
\t\t\tmargin-left: 0%;
\t\t}
\t}

\t.list_category_annonce {
\t\tflex-wrap: wrap;
\t\tdisplay: flex;
\t\tjustify-content: space-around;
\t}

\t.carousel-cards {
\t\tflex-wrap: wrap;
\t\tdisplay: flex;
\t\tjustify-content: space-around;
\t\tposition: relative;
\t}

\t.carousel-card {
\t\twidth: auto;
\t\t/* margin-right: 2%; */
\t\tborder-radius: 15px;
\t\theight: 16rem;
\t\tbackground-repeat: no-repeat;
\t\tbackground-size: cover;
\t\tdisplay: flex;
\t\tjustify-content: space-between;
\t\talign-items: end;
\t\tmargin-bottom: 1rem;
\t\tcursor: pointer;
\t\tbox-shadow: inset 0 0 0 2000px rgb(6 48 66 / 35%);
\t\tbackground-size: cover;
\t}

\t.left-align-text {
\t\tposition: relative;
\t\tleft: 15px;
\t\tbottom: 0px;
\t\tcolor: white;
\t\ttext-transform: uppercase;
\t}

\t.right-align-text {
\t\tposition: relative;
\t\tright: 15px;
\t\tbottom: 0px;
\t\tcolor: white;
\t\ttext-transform: uppercase;
\t}

\t.detail_marketing {
\t\ttext-align: justify;
\t\tmargin-top: 1rem;
\t\tmargin-bottom: 2rem;
\t\tfont-family: 'Open Sans', sans-serif;
\t}
\t.category_annonce {
\t\twidth: auto;
\t\t/* margin-left: 1%; */
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\tborder: 2px solid black;
\t\tborder-radius: 10px;
\t\tpadding: 10px;
\t\tmargin-bottom: 1rem;
\t\tcursor: pointer;
\t\tcolor: black;
\t\ttext-transform: uppercase;
\t\tfont-family: 'Open Sans', sans-serif;
\t\ttext-align: center;
\t}
\t.category_annonce_ahref:hover {
\t\ttext-decoration: inherit;
\t}
\t.category_annonce_ahref:hover>div {
\t\tbackground: #262626;
\t\tcolor: white;
\t\ttext-decoration: inherit;
\t}
\t.lcl_fade_oc.lcl_pre_show #lcl_overlay,
\t.lcl_fade_oc.lcl_pre_show #lcl_window,
\t.lcl_fade_oc.lcl_is_closing #lcl_overlay,
\t.lcl_fade_oc.lcl_is_closing #lcl_window {
\t\topacity: 0 !important;
\t}
\t.lcl_fade_oc.lcl_is_closing #lcl_overlay {
\t\t-webkit-transition-delay: .15s !important;
\t\ttransition-delay: .15s !important;
\t}
\t.active-slide {
\t\tdisplay: flex !important;
\t}
\t.slide {
\t\tdisplay: none;
\t}
\t.slider-dots {
\t\tlist-style: none;
\t\tdisplay: inline-block;
\t\tpadding-left: 0;
\t\tmargin-bottom: 0;
\t}
\t.slider-dots li {
\t\tcolor: #bbbcbc;
\t\tdisplay: inline;
\t\tfont-size: 40px;
\t\tmargin-right: 5px;
\t}
\t.slider-dots li.active-dot {
\t\tcolor: #363636;
\t}
\tstrong{
\t\tfont-weight: bold;
\t}
</style>
{% endblock %}

{% block header %}
\t{{parent()}}
{% endblock %}

{% block navigation %}
<div id=\"imageHolder\" class=\"view intro-2\">
\t<div class=\"full-bg-img\">
\t\t<div class=\"mask rgba-purple-light flex-center\">
\t\t\t<div class=\"container text-left align-items-end white-text wow fadeInUp\">
\t\t\t\t<h2 class=\"page-title\"></h2>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

{% block body %}
<!--Main layout-->
<main class=\"mt-5 pt-5\">
\t<div class=\"container\">
\t\t<h3 hidden class=\"h3-responsive grand-titre\">{{ ops.titre }}</h3>
\t\t<p class=\"detail_marketing\">
\t\t\t{{ops.chapeau|raw}}
\t\t</p>
\t\t<section>
\t\t\t<div style=\"width: 100%;display: flex;justify-content: center;\">
\t\t\t\t<ul class=\"slider-dots\">
\t\t\t\t\t{% for item in 1.. page_slide %}
\t\t\t\t\t\t<li class=\"dot {% if loop.index == 1 %}active-dot{% endif %}\">•</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t{% set x = 0 %}
\t\t\t{% for item in ops.articles %}
\t\t\t\t{% set x = x + 1 %}
\t\t\t\t{% if x == 1 %}<div class=\"row slide {% if loop.index == 1 %}active-slide{% endif %}\">{% endif %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"carousel-card col-md-12\"
\t\t\t\t\t\tstyle=\"background-image: url({{item.guid}});\" title=\"{{item.postTitle}}\"
\t\t\t\t\t\tattr-src=\"{{item.guid}}\"
\t\t\t\t\t\tdata-lcl-author=\"Trust&Market\"
\t\t\t\t\t\tdata-lcl-thumb=\"{{item.guid}}\">
\t\t\t\t\t\t<p class=\"left-align-text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"right-align-text\">
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% if x == 4 %}
\t\t\t\t\t</div>
\t\t\t\t\t{% set x = 0 %} 
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</section>
\t\t<p class=\"detail_marketing\">
\t\t\t{{ops.description|raw}}
\t\t</p>
\t\t<div class=\"row\">
\t\t{% for item in ops.categorie %}
\t\t\t<a target=\"_blank\" href=\"{{path('annonces_listeAnnonces',{type_prestation:item.slug,services_proposes: '',code_postal_ville: ''})}}\" class=\"col-md-3 category_annonce_ahref\">
\t\t\t\t<div class=\"category_annonce col-md-12\">
\t\t\t\t\t{{item.name}}
\t\t\t\t</div>
\t\t\t</a>
\t\t{% endfor %}
\t\t</div>
\t</div>
</main>
<!--Main layout-->
{% endblock %}


{% block footer %}
{{parent()}}

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
<!-- Full background slider jQuery plugin -->
<script type=\"text/javascript\" src=\"{{ asset('assets/js/fullclip.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.js\"></script>
<script src=\"{{ asset('assets/js/lc_lightbox.js') }}\" type=\"text/javascript\"></script>
<!-- SKINS -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/lc_lightbox_skins_dark.css') }}\" />
<!-- ASSETS -->
<script\tsrc=\"{{ asset('assets/js/alloy_finger.min.js') }}\" type=\"text/javascript\"></script>
<script>
\t\$(document).ready(function (e) {

\t\t// live handler
\t\tlc_lightbox('.carousel-card', {
\t\t\twrap_class: 'lcl_fade_oc',
\t\t\tgallery: true,
\t\t\tthumb_attr: 'data-lcl-thumb',
\t\t\tskin: 'dark',
\t\t\tradius: 0,
\t\t\tpadding: 0,
\t\t\tborder_w: 0,
\t\t\tsrc_attr: 'attr-src',
\t\t\tmax_width: '93%',
\t\t\tmax_height: '93%',
\t\t\tshow_author: false,
\t\t\tshow_title :true,
\t\t\tshow_descr :true,
\t\t\tthumbs_nav :true,
\t\t\ttn_hidden :0,
\t\t\ttxt_hidden :0,
\t\t});

\t\tmain();
\t});
\tvar slideSpeed = 10000;

\tvar main = function () {
\t\t//Carousel
\t\tsetInterval(function () { timedDelay() }, slideSpeed);
\t\t//arrow-next
\t\t\$('.arrow-next').click(function (e) {
\t\t\te.preventDefault();

\t\t\tvar currentSlide = \$('.active-slide');
\t\t\tvar nextSlide = currentSlide.next();

\t\t\tvar currentDot = \$('.active-dot');
\t\t\tvar nextDot = currentDot.next();

\t\t\tif (nextSlide.length === 0) {
\t\t\t\tnextSlide = \$('.slide').first();
\t\t\t\tnextDot = \$('.dot').first();
\t\t\t}

\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tnextSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tnextDot.addClass('active-dot');
\t\t\t});
\t\t});
\t\t//arrow-prev
\t\t\$('.arrow-prev').click(function (e) {
\t\t\te.preventDefault();

\t\t\tvar currentSlide = \$('.active-slide');
\t\t\tvar prevSlide = currentSlide.prev();

\t\t\tvar currentDot = \$('.active-dot');
\t\t\tvar prevDot = currentDot.prev();

\t\t\tif (prevSlide.length === 0) {
\t\t\t\tprevSlide = \$('.slide').last();
\t\t\t\tprevDot = \$('.dot').last();
\t\t\t}

\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tprevSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tprevDot.addClass('active-dot');
\t\t\t});
\t\t});
\t};

\t//timedDelay function
\tfunction timedDelay() {
\t\tvar currentSlide = \$('.active-slide');
\t\tvar nextTimedSlide = currentSlide.next();
\t\tvar currentDot = \$('.active-dot');
\t\tvar nextDot = currentDot.next();
\t\t\tif (nextTimedSlide.length === 0) {
\t\t\t\tnextTimedSlide = \$('.slide').first();
\t\t\t\tnextDot = \$('.dot').first();
\t\t\t}
\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tnextTimedSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tnextDot.addClass('active-dot');
\t\t\t});
\t}
</script>

{% endblock %}
", "marketing/details_promo.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/marketing/details_promo.html.twig");
    }
}
