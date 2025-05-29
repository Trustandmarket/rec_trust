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

/* marketing/details_univers_trust.html.twig */
class __TwigTemplate_84a207e09089b42c640eec7fb99fb2db extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketing/details_univers_trust.html.twig"));

        $this->parent = $this->loadTemplate("descriptiveContent.html.twig", "marketing/details_univers_trust.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 5, $this->source); })()), "meta_titre", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
<meta name=\"description\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 6, $this->source); })()), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        yield "\">
<link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)])), "html", null, true);
        yield "\">
<link rel=\"shortlink\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 8, $this->source); })()), "slug", [], "any", false, false, false, 8)])), "html", null, true);
        yield "\">
<meta property=\"og:title\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 9, $this->source); })()), "meta_titre", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
<meta property=\"og:description\" content=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 10, $this->source); })()), "meta_description", [], "any", false, false, false, 10), "html", null, true);
        yield "\">

<meta property=\"og:image\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 12, $this->source); })()), "image_couverture", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:url\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 14, $this->source); })()), "slug", [], "any", false, false, false, 14)])), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 22, $this->source); })()), "meta_titre", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
<meta name=\"twitter:description\" content=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 23, $this->source); })()), "meta_description", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
<meta name=\"twitter:image\" content=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 24, $this->source); })()), "image_couverture", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
<meta name=\"twitter:image:alt\" content=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 25, $this->source); })()), "image_couverture", [], "any", false, false, false, 25), "html", null, true);
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
\t\t\"alternativeHeadline\": \"Univers Trust&Market\",
\t\t\"image\": \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 34, $this->source); })()), "image_couverture", [], "any", false, false, false, 34), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 49, $this->source); })()), "slug", [], "any", false, false, false, 49)])), "html", null, true);
        yield "\",
\t\t\"mainEntityOfPage\": {
\t\t\t\"@type\": \"WebPage\",
\t\t\t\"@id\": \"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 52, $this->source); })()), "slug", [], "any", false, false, false, 52)])), "html", null, true);
        yield "\"
\t\t},
\t\t\"datePublished\": \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 54, $this->source); })()), "created_at", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"dateCreated\": \"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 55, $this->source); })()), "created_at", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"dateModified\": \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 56, $this->source); })()), "edited_at", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("titre-univers-trust", [], "marketing"), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 70, $this->source); })()), "titre", [], "any", false, false, false, 70))), "html", null, true);
        
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\"
\tintegrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"
\tcrossorigin=\"anonymous\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
\t<!-- Your custom styles (optional) -->
\t<link href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">

<link href=\"https://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox.css"), "html", null, true);
        yield "\" />
<style>
\t.chat-menu a {
\t\tborder-radius: 50%;
\t\tbackground-color: transparent;
\t\twidth: 100%;
\t}
\t
\t.breadcrumb {
\t\tbackground-color: white;
\t}

\t.breadcrumb a {
\t\tcolor: #000000;
\t}
\t
\t.breadcrumb a:hover {
\t\tcolor: #f17c30;
\t}
\t@media only screen and (min-width: 768px) {
\t\t.fixage {
\t\t\tposition: fixed;
\t\t\tright: 0px;
\t\t}
\t\t.div_separated.div_right {
\t\t\tborder-left: 1px solid #FF7E10;
\t\t}
\t\t#imageHolder .titre_filter>h1 {
\t\t\tfont-size: 20px;
\t\t\ttext-align: center;
\t\t\twidth: auto;
\t\t\ttext-transform: uppercase;
\t\t\tcolor: white !important;
\t\t\tfont-size: 1.75rem !important;
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

\t\t#imageHolder .titre_filter>h1 {
\t\t\tfont-size: 20px;
\t\t\ttext-align: center;
\t\t\ttext-transform: uppercase;
\t\t\tcolor: white !important;
\t\t\tfont-size: 1.25rem !important;
\t\t\tdisplay: block;
\t\t}

\t\t.category_annonce {
\t\t\twidth: auto;
\t\t\tmargin-left: 0%;
\t\t}

\t\t
\t\t.detail_marketing2 {
\t\t\tflex-direction: column;
\t\t\twidth: 100%;
\t\t}
\t\t
\t\t.div_separated {
\t\t\twidth: 100%;
\t\t}

\t\t.div_border_left {
\t\t\tborder-top: 1.5px solid gray;
\t\t\tborder-left: none;
\t\t\tborder-color: #FF7E10;
\t\t}

\t\t.div_border_right {
\t\t\tborder: none;
\t\t}

\t\t#ui-datepicker-div {
\t\t\twidth: 55% !important;
\t\t}

\t\t.expertiseRow .breadcrumb{
\t\t\tdisplay: none;
\t\t}

\t\t.expertiseRow{
\t\t\tflex-wrap: wrap-reverse;
\t\t}

\t\t.acces_rapide_bloc{
\t\t\tmargin-bottom: 5rem;
\t\t}
\t}
\t.acces_rapide_link{
\t\tlist-style: none;
\t\tpadding: 0;
\t}
\t.acces_rapide_link a{
\t\tcolor: #fff !important;
\t}
\t.acces_rapide{
\t\tbackground-color: #262626;
\t\tpadding: 10px;
\t}
\t.acces_rapide h4{
\t\tcolor: #f07c3a;
\t}

\t.dummy_ul {
\t\tlist-style: none;
\t\tpadding-left: 27px;
\t}
\t.dummy_ul li{
\t\tmargin-bottom: 1rem;
\t}
\t.dummy_ul li::before {
\t\tcontent: \"\\2022\";
\t\tcolor: #f07c3a;
\t\tfont-weight: bold;
\t\tdisplay: inline-block; 
\t\twidth: 1em;
\t\tmargin-left: -1em;
\t}

\theader {
\t\theight: 100% !important;
\t}

\t#holder {
\t\tmin-height: 55% !important;
    \theight: 55%;
\t}
</style>
<link href=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-aide.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 246
        yield "<header style=\"height: 55% !important;\">
";
        // line 247
        yield from $this->loadTemplate("header-new-design.html.twig", "marketing/details_univers_trust.html.twig", 247)->unwrap()->yield($context);
        yield "\t
\t\t\t\t\t<div id=\"imageHolder\" class=\"view intro-2\" style=\"background-image: url('";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 248, $this->source); })()), "image_couverture", [], "any", false, false, false, 248), "html", null, true);
        yield "');background-size: cover;background-repeat: no-repeat;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div style=\"height: 17rem;\" class=\"mask rgba-purple-light flex-center ";
        // line 250
        yield " pt-5 searchFilterDiv\">
\t\t\t\t\t\t\t\t<div class=\"titre_filter\" style=\"margin-top: 8rem;width:auto; color:white;\">
\t\t\t\t\t\t\t\t\t<h1>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 252, $this->source); })()), "titre", [], "any", false, false, false, 252), "html", null, true);
        yield "</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 270
        yield "</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 274
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 275
        yield "<!--Main layout-->
<main class=\"mt-2 pt-2\">
\t<div class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb pl-0\">
\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 280
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 281, $this->source); })()), "titre", [], "any", false, false, false, 281))), "html", null, true);
        yield "</a></li>
\t\t\t</ol>
\t\t</nav>
\t\t<div class=\"row expertiseRow\">
\t\t\t<div class=\"col-md-3 acces_rapide_bloc\">
\t\t\t\t<div class=\"acces_rapide\">
\t\t\t\t\t";
        // line 288
        yield "\t\t\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 288, $this->source); })()), "lien_acces_rapides", [], "any", false, false, false, 288);
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 text-left\">
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 294
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 294, $this->source); })()), "youtube", [], "any", false, false, false, 294) != "")) {
            // line 295
            yield "\t\t\t\t\t\t\t<div class=\"\" style=\"margin-bottom: 2rem;\">
\t\t\t\t\t\t\t\t<iframe class=\"embed-responsive-item\" id=\"ytplayer\" type=\"text/html\" style=\"width:100%;\" height=\"360\" src=\"https://www.youtube.com/embed/";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 296, $this->source); })()), "youtube", [], "any", false, false, false, 296), "html", null, true);
            yield "\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 299
        yield "\t\t\t\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 299, $this->source); })()), "contenu", [], "any", false, false, false, 299);
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
<!--Main layout-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 310
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 311
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 316
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<!-- Full background slider jQuery plugin -->
<script type=\"text/javascript\" src=\"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.js\"></script>
<script src=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lc_lightbox.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<!-- SKINS -->
<link rel=\"stylesheet\" href=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox_skins_dark.css"), "html", null, true);
        yield "\" />
<!-- ASSETS -->
<script\tsrc=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alloy_finger.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
";
        // line 328
        yield "</script>
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

\t\t
\t\t\$('.date_input').datepicker({
\t\t\tdateFormat: 'dd-M-yy',
\t\t\tminDate: 1,
\t\t\tcloseText: 'Fermer',
\t\t\tprevText: 'Précédent',
\t\t\tnextText: 'Suivant',
\t\t\tcurrentText: 'Aujourd\\'hui',
\t\t\tmonthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
\t\t\tmonthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
\t\t\tdayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
\t\t\tdayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
\t\t\tdayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
\t\t\tweekHeader: 'Sem.'
\t\t},);
\t\t
\t\t\$('.date_icon').on('click', function() {
\t\t\t\$('.date_input').focus();
\t\t})

\t\t\$(\"#numero_telephone\").keyup(function () {
\t\t\tlet phone = \$(\"#numero_telephone\").val().replace(/\\s|[a-zA-Z]/g, \"\");
\t\t\t\$(\"#numero_telephone\").val(phone);
\t\t});
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

\t\$('#submitForm').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
\t\te.preventDefault();
\t\tif(\$('.numero_telephone').val().match(/^(?:(?:\\+|00)33|0)\\s*[1-9](?:[\\s.-]*\\d{2}){4}\$/gmi)){
\t\ttoastr.info('";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "');
\t\tvar \$form = \$(this);
\t\t\tvar formdata = (window.FormData) ? new FormData(\$form[0]) : null;
\t\t\tvar data = (formdata !== null) ? formdata : \$form.serialize();

\t\t\$.ajax({
\t\t\turl: \$form.attr('action'),
\t\t\ttype: \$form.attr('method'),
\t\t\tcontentType: false,
\t\t\tprocessData: false,
\t\t\tdata: data,
\t\t\tsuccess: function (reponse) {
\t\t\twindow.location = \"\";
\t\t\tif (reponse != 0) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.success('";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "');
\t\t\t} else if (reponse == 0) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.error('";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
\t\t\t}

\t\t\t},
\t\t\terror: function (reponse) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.error('";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
\t\t\t}
\t\t});
\t\t}else{
\t\t\ttoastr.warning('Entrez un numéro de téléphone valide');
\t\t}
\t\treturn false;
\t});
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
        return "marketing/details_univers_trust.html.twig";
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
        return array (  767 => 478,  758 => 472,  752 => 469,  734 => 454,  606 => 328,  602 => 325,  597 => 323,  592 => 321,  587 => 319,  582 => 317,  578 => 316,  568 => 315,  557 => 311,  547 => 310,  529 => 299,  523 => 296,  520 => 295,  518 => 294,  508 => 288,  499 => 281,  495 => 280,  488 => 275,  478 => 274,  469 => 270,  461 => 252,  457 => 250,  452 => 248,  448 => 247,  445 => 246,  435 => 245,  425 => 242,  265 => 85,  259 => 82,  255 => 81,  251 => 80,  241 => 73,  231 => 72,  211 => 70,  191 => 57,  187 => 56,  183 => 55,  179 => 54,  174 => 52,  168 => 49,  162 => 46,  147 => 34,  142 => 32,  135 => 27,  131 => 25,  127 => 24,  123 => 23,  119 => 22,  114 => 19,  107 => 14,  102 => 12,  97 => 10,  93 => 9,  89 => 8,  85 => 7,  81 => 6,  77 => 5,  73 => 4,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'descriptiveContent.html.twig' %}

{% block head %}
{{ parent() }}
<meta name=\"title\" content=\"{{ops.meta_titre}}\">
<meta name=\"description\" content=\"{{ops.meta_description}}\">
<link rel=\"canonical\" href=\"{{absolute_url(path('marketing_details_univers_trust', {slug: ops.slug}))}}\">
<link rel=\"shortlink\" href=\"{{absolute_url(path('marketing_details_univers_trust', {slug: ops.slug}))}}\">
<meta property=\"og:title\" content=\"{{ops.meta_titre}}\">
<meta property=\"og:description\" content=\"{{ops.meta_description}}\">

<meta property=\"og:image\" content=\"{{ops.image_couverture}}\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:url\" content=\"{{absolute_url(path('marketing_details_univers_trust', {slug: ops.slug}))}}\">
<meta property=\"og:locale\" content=\"fr\" />
<meta property=\"og:locale:alternate\" content=\"en\" />

{# Twitter CARD #}
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:creator\" content=\"Kbr Global\">
<meta name=\"twitter:site\" content=\"@trustandmarket\">
<meta name=\"twitter:title\" content=\"{{ops.meta_titre}}\">
<meta name=\"twitter:description\" content=\"{{ops.meta_description}}\">
<meta name=\"twitter:image\" content=\"{{ops.image_couverture}}\">
<meta name=\"twitter:image:alt\" content=\"{{ops.image_couverture}}\">
{# END Twitter Card #}

<script type=\"application/ld+json\">
\t{   
\t\t\"@context\": \"https://schema.org\", 
\t\t\"@type\": \"Article\",
\t\t\"headline\": \"{{ops.titre}}\",
\t\t\"alternativeHeadline\": \"Univers Trust&Market\",
\t\t\"image\": \"{{ops.image_couverture}}\",
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
\t\t\"url\": \"{{absolute_url(path('marketing_details_univers_trust', {slug: ops.slug}))}}\",
\t\t\"mainEntityOfPage\": {
\t\t\t\"@type\": \"WebPage\",
\t\t\t\"@id\": \"{{absolute_url(path('marketing_details_univers_trust', {slug: ops.slug}))}}\"
\t\t},
\t\t\"datePublished\": \"{{ops.created_at|date(\"d/m/Y\")}}\",
\t\t\"dateCreated\": \"{{ops.created_at|date(\"d/m/Y\")}}\",
\t\t\"dateModified\": \"{{ops.edited_at|date(\"d/m/Y\")}}\",
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

{% block title %}Trust &amp; Market | {{'titre-univers-trust'|trans({}, 'marketing') }} | {{ ops.titre|lower|capitalize }}{% endblock %}

{% block style %}
{{ parent() }}
<!-- Gijgo datepicker css -->
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\"
\tintegrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"
\tcrossorigin=\"anonymous\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
\t<!-- Your custom styles (optional) -->
\t<link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/result.css')}}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/custome.css') }} \" rel=\"stylesheet\">

<link href=\"https://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/lc_lightbox.css') }}\" />
<style>
\t.chat-menu a {
\t\tborder-radius: 50%;
\t\tbackground-color: transparent;
\t\twidth: 100%;
\t}
\t
\t.breadcrumb {
\t\tbackground-color: white;
\t}

\t.breadcrumb a {
\t\tcolor: #000000;
\t}
\t
\t.breadcrumb a:hover {
\t\tcolor: #f17c30;
\t}
\t@media only screen and (min-width: 768px) {
\t\t.fixage {
\t\t\tposition: fixed;
\t\t\tright: 0px;
\t\t}
\t\t.div_separated.div_right {
\t\t\tborder-left: 1px solid #FF7E10;
\t\t}
\t\t#imageHolder .titre_filter>h1 {
\t\t\tfont-size: 20px;
\t\t\ttext-align: center;
\t\t\twidth: auto;
\t\t\ttext-transform: uppercase;
\t\t\tcolor: white !important;
\t\t\tfont-size: 1.75rem !important;
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

\t\t#imageHolder .titre_filter>h1 {
\t\t\tfont-size: 20px;
\t\t\ttext-align: center;
\t\t\ttext-transform: uppercase;
\t\t\tcolor: white !important;
\t\t\tfont-size: 1.25rem !important;
\t\t\tdisplay: block;
\t\t}

\t\t.category_annonce {
\t\t\twidth: auto;
\t\t\tmargin-left: 0%;
\t\t}

\t\t
\t\t.detail_marketing2 {
\t\t\tflex-direction: column;
\t\t\twidth: 100%;
\t\t}
\t\t
\t\t.div_separated {
\t\t\twidth: 100%;
\t\t}

\t\t.div_border_left {
\t\t\tborder-top: 1.5px solid gray;
\t\t\tborder-left: none;
\t\t\tborder-color: #FF7E10;
\t\t}

\t\t.div_border_right {
\t\t\tborder: none;
\t\t}

\t\t#ui-datepicker-div {
\t\t\twidth: 55% !important;
\t\t}

\t\t.expertiseRow .breadcrumb{
\t\t\tdisplay: none;
\t\t}

\t\t.expertiseRow{
\t\t\tflex-wrap: wrap-reverse;
\t\t}

\t\t.acces_rapide_bloc{
\t\t\tmargin-bottom: 5rem;
\t\t}
\t}
\t.acces_rapide_link{
\t\tlist-style: none;
\t\tpadding: 0;
\t}
\t.acces_rapide_link a{
\t\tcolor: #fff !important;
\t}
\t.acces_rapide{
\t\tbackground-color: #262626;
\t\tpadding: 10px;
\t}
\t.acces_rapide h4{
\t\tcolor: #f07c3a;
\t}

\t.dummy_ul {
\t\tlist-style: none;
\t\tpadding-left: 27px;
\t}
\t.dummy_ul li{
\t\tmargin-bottom: 1rem;
\t}
\t.dummy_ul li::before {
\t\tcontent: \"\\2022\";
\t\tcolor: #f07c3a;
\t\tfont-weight: bold;
\t\tdisplay: inline-block; 
\t\twidth: 1em;
\t\tmargin-left: -1em;
\t}

\theader {
\t\theight: 100% !important;
\t}

\t#holder {
\t\tmin-height: 55% !important;
    \theight: 55%;
\t}
</style>
<link href=\"{{ asset('assets/css/style-aide.css') }} \" rel=\"stylesheet\">
{% endblock %}

{% block header %}
<header style=\"height: 55% !important;\">
{% include(\"header-new-design.html.twig\") %}\t
\t\t\t\t\t<div id=\"imageHolder\" class=\"view intro-2\" style=\"background-image: url('{{ops.image_couverture}}');background-size: cover;background-repeat: no-repeat;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div style=\"height: 17rem;\" class=\"mask rgba-purple-light flex-center {# fullBackground #} pt-5 searchFilterDiv\">
\t\t\t\t\t\t\t\t<div class=\"titre_filter\" style=\"margin-top: 8rem;width:auto; color:white;\">
\t\t\t\t\t\t\t\t\t<h1>{{ops.titre}}</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{# <div id=\"imageHolder\" class=\"view intro-2\">
\t\t\t\t\t\t<div class=\"full-bg-img\">
\t\t\t\t\t\t\t<div class=\"mask rgba-purple-light flex-center\">
\t\t\t\t\t\t\t\t<div class=\"container text-left align-items-end white-text wow fadeInUp\">
\t\t\t\t\t\t\t\t\t<h2 class=\"page-title\" style=\"color: #fff;\">
\t\t\t\t\t\t\t\t\t\t{% block pageTitle %}
\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and contenu.postExcerpt != '' %}{{ contenu.postExcerpt|upper }}{% else %}{{ contenu.getPostTitle|upper }}{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> #}
</header>
{% endblock %}


{% block body %}
<!--Main layout-->
<main class=\"mt-2 pt-2\">
\t<div class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb pl-0\">
\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{path('home')}}\">Accueil</a></li>
\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">{{ops.titre|lower|capitalize}}</a></li>
\t\t\t</ol>
\t\t</nav>
\t\t<div class=\"row expertiseRow\">
\t\t\t<div class=\"col-md-3 acces_rapide_bloc\">
\t\t\t\t<div class=\"acces_rapide\">
\t\t\t\t\t{# <h4>Accès rapides</h4> #}
\t\t\t\t\t{{ops.lien_acces_rapides|raw}}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 text-left\">
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t{% if ops.youtube != '' %}
\t\t\t\t\t\t\t<div class=\"\" style=\"margin-bottom: 2rem;\">
\t\t\t\t\t\t\t\t<iframe class=\"embed-responsive-item\" id=\"ytplayer\" type=\"text/html\" style=\"width:100%;\" height=\"360\" src=\"https://www.youtube.com/embed/{{ops.youtube}}\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{{ops.contenu|raw}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
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
{# <script type=\"text/javascript\"
        src=\"https://raw.githubusercontent.com/jquery/jquery-ui/master/ui/i18n/datepicker-fr.js\"> #}
</script>
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

\t\t
\t\t\$('.date_input').datepicker({
\t\t\tdateFormat: 'dd-M-yy',
\t\t\tminDate: 1,
\t\t\tcloseText: 'Fermer',
\t\t\tprevText: 'Précédent',
\t\t\tnextText: 'Suivant',
\t\t\tcurrentText: 'Aujourd\\'hui',
\t\t\tmonthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
\t\t\tmonthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
\t\t\tdayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
\t\t\tdayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
\t\t\tdayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
\t\t\tweekHeader: 'Sem.'
\t\t},);
\t\t
\t\t\$('.date_icon').on('click', function() {
\t\t\t\$('.date_input').focus();
\t\t})

\t\t\$(\"#numero_telephone\").keyup(function () {
\t\t\tlet phone = \$(\"#numero_telephone\").val().replace(/\\s|[a-zA-Z]/g, \"\");
\t\t\t\$(\"#numero_telephone\").val(phone);
\t\t});
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

\t\$('#submitForm').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
\t\te.preventDefault();
\t\tif(\$('.numero_telephone').val().match(/^(?:(?:\\+|00)33|0)\\s*[1-9](?:[\\s.-]*\\d{2}){4}\$/gmi)){
\t\ttoastr.info('{{ 'systeme.requetes.requete-en-cours'|trans }}');
\t\tvar \$form = \$(this);
\t\t\tvar formdata = (window.FormData) ? new FormData(\$form[0]) : null;
\t\t\tvar data = (formdata !== null) ? formdata : \$form.serialize();

\t\t\$.ajax({
\t\t\turl: \$form.attr('action'),
\t\t\ttype: \$form.attr('method'),
\t\t\tcontentType: false,
\t\t\tprocessData: false,
\t\t\tdata: data,
\t\t\tsuccess: function (reponse) {
\t\t\twindow.location = \"\";
\t\t\tif (reponse != 0) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.success('{{ 'systeme.requetes.succes'|trans }}');
\t\t\t} else if (reponse == 0) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.error('{{ 'systeme.requetes.erreur'|trans }}');
\t\t\t}

\t\t\t},
\t\t\terror: function (reponse) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.error('{{ 'systeme.requetes.erreur'|trans }}');
\t\t\t}
\t\t});
\t\t}else{
\t\t\ttoastr.warning('Entrez un numéro de téléphone valide');
\t\t}
\t\treturn false;
\t});
</script>

{% endblock %}
", "marketing/details_univers_trust.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/marketing/details_univers_trust.html.twig");
    }
}
