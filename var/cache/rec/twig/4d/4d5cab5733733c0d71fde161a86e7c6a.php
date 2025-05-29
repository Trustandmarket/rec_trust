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

/* profile/annoncesTag.html.twig */
class __TwigTemplate_73596781999e8fdb0701ace1a1a1aedd extends Template
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
            'annonce' => [$this, 'block_annonce'],
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
        return "profileTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/annoncesTag.html.twig"));

        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/annoncesTag.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
\t<link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\" sizes=\"192x192\"/>
\t<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
\t<meta name=\"msapplication-TileImage\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
\t<meta name=\"robots\" content=\"noindex\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market | Profil Annonces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_annonce(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "annonce"));

        // line 16
        yield "\tactive
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 19
        yield "\t";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

\t<link rel=\"stylesheet\" href=\" ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">

<link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/img-picker/image-picker.css"), "html", null, true);
        yield "\">
\t<link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-moderation.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tagsinput/tagify.css")), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">

\t<link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
\t<link
\trel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">

\t<!-- file input fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
\t<link
\thref=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/file-input-font/font/font-fileuploader.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<!-- file input styles -->
\t\t<link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.paginate.css"), "html", null, true);
        yield "\">


\t<style>
\t\t.image_picker_image {
\t\t\twidth: 100px;
\t\t\theight: 100px
\t\t}
\t\t.tox-statusbar__branding {
\t\t\tdisplay: none;
\t\t}
\t\t.btn-bg-primary {
\t\t\tcolor: #fff;
\t\t\tbackground: #f17b30 !important;
\t\t}
\t\t.btn-bg-primary:hover {
\t\t\tcolor: #fff;
\t\t\tbackground: #f4b279 !important;
\t\t}
\t\t.btn-bg-details-button {
\t\t\tcolor: #fff;
\t\t\tbackground: #008778 !important;
\t\t}
\t\t
\t\t.sub-msg{
\t\t\tcolor: #212529;
\t\t\tfont-size: 11px;
\t\t}
\t\tspan.fs-16{
\t\t\tfont-family: 'Palanquin Dark', sans-serif;
\t\t\tfont-weight: 300;
\t\t}

\t\t@media only screen and(min-width : 992px) {
\t\t\t.dashboard-menu {
\t\t\t\tmargin-top: 12px !important;
\t\t\t}
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 85
        yield "
\t";
        // line 86
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 91
        yield "
\t";
        // line 92
        yield from $this->yieldParentBlock("navigation", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 97
        yield "\t<div class=\"flex-fill container\">
\t\t<main class=\"\">

\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 101
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/annoncesTag.html.twig", 101)->unwrap()->yield($context);
        // line 102
        yield "\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t<!-- Modif des infos -->
\t\t\t\t\t<div id=\"modifInfo\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t<strong>Holy guacamole!</strong>
\t\t\t\t\t\t\t\tYou should check in on some of those fields below.
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 113
        yield from $this->loadTemplate("annonces/sousMenuAnnonces.html.twig", "profile/annoncesTag.html.twig", 113)->unwrap()->yield($context);
        // line 114
        yield "\t\t\t\t\t\t\t\t<div class=\"col-md-8 mb-2\">
\t\t\t\t\t\t\t\t";
        // line 115
        if ((((isset($context["reservationsEnCoursCount"]) || array_key_exists("reservationsEnCoursCount", $context) ? $context["reservationsEnCoursCount"] : (function () { throw new RuntimeError('Variable "reservationsEnCoursCount" does not exist.', 115, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 115, $this->source); })()) == "reservations-en-cours"))) {
            // line 116
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations en Cours-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx1\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx1\" href=\"#collapseOne1\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"collapseOne1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-en-cours"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsEnCoursCount"]) || array_key_exists("reservationsEnCoursCount", $context) ? $context["reservationsEnCoursCount"] : (function () { throw new RuntimeError('Variable "reservationsEnCoursCount" does not exist.', 128, $this->source); })()), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 145
            if (((isset($context["reservationsEnCoursCount"]) || array_key_exists("reservationsEnCoursCount", $context) ? $context["reservationsEnCoursCount"] : (function () { throw new RuntimeError('Variable "reservationsEnCoursCount" does not exist.', 145, $this->source); })()) > 0)) {
                // line 146
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsEnCours\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 147
                yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_cours.html.twig", "profile/annoncesTag.html.twig", 147)->unwrap()->yield($context);
                // line 148
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 150
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsEnCours\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsEnCours"]) || array_key_exists("reservationsEnCours", $context) ? $context["reservationsEnCours"] : (function () { throw new RuntimeError('Variable "reservationsEnCours" does not exist.', 152, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 153
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 153) == "devis")) {
                    // line 154
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                    // line 155
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 155)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 155), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                    }
                    yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                    yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 158), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 159
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                    yield ":";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 159), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 161
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                    yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 162), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 163
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 163), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 166
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn btn-bg-primary btn-s annulerCommande\" href=\"";
                    // line 169
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_cancelledReservationAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 169), "state" => "edition"]), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4 \" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 181
$context["a"], "pinged", [], "any", false, false, false, 181) == "product")) {
                    // line 182
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 182));
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 183
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($context["s"]) {
                            // line 184
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                            // line 185
                            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 185)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 185)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 185) != ""))) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 185), 0, [], "any", false, false, false, 185), "guid", [], "any", false, false, false, 185), "html", null, true);
                            } else {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 185), 0, [], "any", false, false, false, 185), "guid", [], "any", false, false, false, 185), "html", null, true);
                            }
                            yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 187
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 187), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 188
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 188), "html", null, true);
                            yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">";
                            // line 189
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 189), "html", null, true);
                            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 190
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 190), "html", null, true);
                            yield " €</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 193
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 193)), "html", null, true);
                            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 194
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 194), "html", null, true);
                            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 195
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 195), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 199
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 199), "html", null, true);
                            yield "</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm\" target=\"_blank\" href=\"";
                            // line 204
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "slug", [], "any", false, false, false, 204)) > 8)) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "slug", [], "any", false, false, false, 204)]), "html", null, true);
                            }
                            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 205
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.voir_annonce"), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 209
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_cancelledReservationAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 209)]), "html", null, true);
                            yield "\" class=\"btn btn-bg-primary btn-sm editer annulerCommande\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 210
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 219
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 220
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 221
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 231
        yield "
\t\t\t\t\t\t\t\t";
        // line 232
        if ((((isset($context["reservationsTermineesCount"]) || array_key_exists("reservationsTermineesCount", $context) ? $context["reservationsTermineesCount"] : (function () { throw new RuntimeError('Variable "reservationsTermineesCount" does not exist.', 232, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 232, $this->source); })()) == "reservations-terminees"))) {
            // line 233
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations terminees-->
\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx3\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne3\" data-parent=\"#accordionEx3\" href=\"#collapseOne3\" aria-expanded=\"true\" aria-controls=\"collapseOne3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-terminees"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsTermineesCount"]) || array_key_exists("reservationsTermineesCount", $context) ? $context["reservationsTermineesCount"] : (function () { throw new RuntimeError('Variable "reservationsTermineesCount" does not exist.', 244, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne3\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne3\" data-parent=\"#accordionEx3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 260
            if (((isset($context["reservationsTermineesCount"]) || array_key_exists("reservationsTermineesCount", $context) ? $context["reservationsTermineesCount"] : (function () { throw new RuntimeError('Variable "reservationsTermineesCount" does not exist.', 260, $this->source); })()) > 0)) {
                // line 261
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsTerminees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 262
                yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_terminees.html.twig", "profile/annoncesTag.html.twig", 262)->unwrap()->yield($context);
                // line 263
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 265
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsTerminees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsTerminees"]) || array_key_exists("reservationsTerminees", $context) ? $context["reservationsTerminees"] : (function () { throw new RuntimeError('Variable "reservationsTerminees" does not exist.', 267, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 268
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 268) == "devis")) {
                    // line 269
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                    // line 270
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 270)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 270), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                    }
                    yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 272
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                    yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 273), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 274
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                    yield ":";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 274), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 275
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                    yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 276
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 276), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 277
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 277), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 280
$context["a"], "pinged", [], "any", false, false, false, 280) == "product")) {
                    // line 281
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 281));
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 282
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($context["s"]) {
                            // line 283
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                            // line 284
                            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 284)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 284)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 284) != ""))) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 284), 0, [], "any", false, false, false, 284), "guid", [], "any", false, false, false, 284), "html", null, true);
                            } else {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 284), 0, [], "any", false, false, false, 284), "guid", [], "any", false, false, false, 284), "html", null, true);
                            }
                            yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 286
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 286), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 287
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 287), "html", null, true);
                            yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">";
                            // line 288
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 288), "html", null, true);
                            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 289
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 289), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 289), "metaValue", [], "any", false, false, false, 289), "html", null, true);
                            yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 292
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 292)), "html", null, true);
                            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 293
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 293), "html", null, true);
                            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 294
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 294), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 298
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 298), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 302
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 303
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 304
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 314
        yield "
\t\t\t\t\t\t\t\t";
        // line 315
        if ((((isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 315, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 315, $this->source); })()) == "reservations-annulees"))) {
            // line 316
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations annules-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx4\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne4\" data-parent=\"#accordionEx4\" href=\"#collapseOne4\" aria-expanded=\"true\" aria-controls=\"collapseOne4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-annulees"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 327, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne4\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne4\" data-parent=\"#accordionEx4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 344
            if (((isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 344, $this->source); })()) > 0)) {
                // line 345
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsAnnulees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 346
                yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_annulees.html.twig", "profile/annoncesTag.html.twig", 346)->unwrap()->yield($context);
                // line 347
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 349
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsAnnulees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsAnnulees"]) || array_key_exists("reservationsAnnulees", $context) ? $context["reservationsAnnulees"] : (function () { throw new RuntimeError('Variable "reservationsAnnulees" does not exist.', 351, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 352
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 352) == "devis")) {
                    // line 353
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                    // line 354
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 354)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 354), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                    }
                    yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 356
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                    yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 357
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 357), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 358
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                    yield ":";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 358), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 360
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                    yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 361
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_mime_type", [], "any", false, false, false, 361), "html", null, true);
                    yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 364
$context["a"], "pinged", [], "any", false, false, false, 364) == "product")) {
                    // line 365
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 365));
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 366
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($context["s"]) {
                            // line 367
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                            // line 368
                            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 368)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 368)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 368) != ""))) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 368), 0, [], "any", false, false, false, 368), "guid", [], "any", false, false, false, 368), "html", null, true);
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", true, true, false, 368) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 368), 0, [], "any", false, false, false, 368))) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 368), 0, [], "any", false, false, false, 368), "guid", [], "any", false, false, false, 368), "html", null, true);
                            }
                            yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 370
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 370), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 371
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 371), "html", null, true);
                            yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">";
                            // line 372
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 372), "html", null, true);
                            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 373
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 373), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 374
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 374), "metaValue", [], "any", false, false, false, 374), "html", null, true);
                            yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 377
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 377)), "html", null, true);
                            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 378
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 378), "html", null, true);
                            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 379
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 379), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 383
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 383), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 387
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 388
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 389
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 390
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 399
        yield "
\t\t\t\t\t\t\t\t";
        // line 400
        if ((((isset($context["reservationsDevisEnAttenteCount"]) || array_key_exists("reservationsDevisEnAttenteCount", $context) ? $context["reservationsDevisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttenteCount" does not exist.', 400, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 400, $this->source); })()) == "reservation-devis-en-attente"))) {
            // line 401
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservation-devis-en-attente-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\" href=\"#collapseOne2\" aria-expanded=\"true\" aria-controls=\"collapseOne2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsDevisEnAttenteCount"]) || array_key_exists("reservationsDevisEnAttenteCount", $context) ? $context["reservationsDevisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttenteCount" does not exist.', 413, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 430
            if (((isset($context["reservationsDevisEnAttenteCount"]) || array_key_exists("reservationsDevisEnAttenteCount", $context) ? $context["reservationsDevisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttenteCount" does not exist.', 430, $this->source); })()) > 0)) {
                // line 431
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsDevisEnAttente\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 432
                yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_devis_attente.html.twig", "profile/annoncesTag.html.twig", 432)->unwrap()->yield($context);
                // line 433
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 435
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsDevisEnAttente\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 437
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsDevisEnAttente"]) || array_key_exists("reservationsDevisEnAttente", $context) ? $context["reservationsDevisEnAttente"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttente" does not exist.', 437, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 438
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                // line 439
                if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 439)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 439)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 439) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 439), 0, [], "any", false, false, false, 439), "guid", [], "any", false, false, false, 439), "html", null, true);
                } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 439)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 439), 0, [], "any", false, false, false, 439))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 439), 0, [], "any", false, false, false, 439), "guid", [], "any", false, false, false, 439), "html", null, true);
                }
                yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 441
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 442
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 442), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 443
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 444
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 444), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 446
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 449
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 449), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 450), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 455), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 456
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 456), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 462
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn btn-bg-primary btn-s annuler-devis\" href=\"";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_annulerDevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 465), "state" => "edition"]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 470
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_detailsDevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 470)]), "html", null, true);
                yield "\" class=\"btn btn-bg-details-button btn-s\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.voir-accepter"), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4 \" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 488
        yield "
\t\t\t\t\t\t\t\t";
        // line 489
        if ((((isset($context["annoncesBrouillonCount"]) || array_key_exists("annoncesBrouillonCount", $context) ? $context["annoncesBrouillonCount"] : (function () { throw new RuntimeError('Variable "annoncesBrouillonCount" does not exist.', 489, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 489, $this->source); })()) == "annonces-en-brouillon"))) {
            // line 490
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces en brouillon -->
\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx5\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne5\" data-parent=\"#accordionEx5\" href=\"#collapseOne5\" aria-expanded=\"true\" aria-controls=\"collapseOne5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 500
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-brouillon"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesBrouillonCount"]) || array_key_exists("annoncesBrouillonCount", $context) ? $context["annoncesBrouillonCount"] : (function () { throw new RuntimeError('Variable "annoncesBrouillonCount" does not exist.', 501, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne5\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne5\" data-parent=\"#accordionEx5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 518
            if (((isset($context["annoncesBrouillonCount"]) || array_key_exists("annoncesBrouillonCount", $context) ? $context["annoncesBrouillonCount"] : (function () { throw new RuntimeError('Variable "annoncesBrouillonCount" does not exist.', 518, $this->source); })()) > 0)) {
                // line 519
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnonceBrouillon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 520
                yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_brouillon.html.twig", "profile/annoncesTag.html.twig", 520)->unwrap()->yield($context);
                // line 521
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 523
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesEnBrouillon\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 525
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesBrouillon"]) || array_key_exists("annoncesBrouillon", $context) ? $context["annoncesBrouillon"] : (function () { throw new RuntimeError('Variable "annoncesBrouillon" does not exist.', 525, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 526
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                // line 527
                if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 527)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 527)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 527) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 527), 0, [], "any", false, false, false, 527), "guid", [], "any", false, false, false, 527), "html", null, true);
                } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 527)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 527), 0, [], "any", false, false, false, 527))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 527), 0, [], "any", false, false, false, 527), "guid", [], "any", false, false, false, 527), "html", null, true);
                }
                yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 529), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 530), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 532
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 532, $this->source); })()), "request", [], "any", false, false, false, 532), "locale", [], "any", false, false, false, 532) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 532) != ""))) {
                    // line 533
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 533), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 535
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 535), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 537
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 538), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 539
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 539), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 542)), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 543
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 543), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 544
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 544), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 548
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 548)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 550
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 550)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                // line 551
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 551)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"";
                // line 556
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 556)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 561
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 561)]), "html", null, true);
                yield "\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 571
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 580
        yield "
\t\t\t\t\t\t\t\t";
        // line 581
        if ((((isset($context["annoncesModerationCount"]) || array_key_exists("annoncesModerationCount", $context) ? $context["annoncesModerationCount"] : (function () { throw new RuntimeError('Variable "annoncesModerationCount" does not exist.', 581, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 581, $this->source); })()) == "annonces-en-moderation"))) {
            // line 582
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces en moderation -->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx6\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne6\" data-parent=\"#accordionEx6\" href=\"#collapseOne6\" aria-expanded=\"true\" aria-controls=\"collapseOne6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 592
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-moderation"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 593
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesModerationCount"]) || array_key_exists("annoncesModerationCount", $context) ? $context["annoncesModerationCount"] : (function () { throw new RuntimeError('Variable "annoncesModerationCount" does not exist.', 593, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne6\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne6\" data-parent=\"#accordionEx6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 609
            if (((isset($context["annoncesModerationCount"]) || array_key_exists("annoncesModerationCount", $context) ? $context["annoncesModerationCount"] : (function () { throw new RuntimeError('Variable "annoncesModerationCount" does not exist.', 609, $this->source); })()) > 0)) {
                // line 610
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnonceModeration\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 611
                yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_moderation.html.twig", "profile/annoncesTag.html.twig", 611)->unwrap()->yield($context);
                // line 612
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 614
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesEnModeration\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 616
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesModeration"]) || array_key_exists("annoncesModeration", $context) ? $context["annoncesModeration"] : (function () { throw new RuntimeError('Variable "annoncesModeration" does not exist.', 616, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 617
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                // line 618
                if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 618)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 618)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 618) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 618), 0, [], "any", false, false, false, 618), "guid", [], "any", false, false, false, 618), "html", null, true);
                } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 618)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 618), 0, [], "any", false, false, false, 618))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 618), 0, [], "any", false, false, false, 618), "guid", [], "any", false, false, false, 618), "html", null, true);
                }
                yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 620
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 620), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 621
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 621), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 623
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 623, $this->source); })()), "request", [], "any", false, false, false, 623), "locale", [], "any", false, false, false, 623) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 623) != ""))) {
                    // line 624
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 624), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 626
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 626), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 628
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 629
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 629), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 630), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 633
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 633)), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 634
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 634), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 635
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 635), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 639
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 639)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 641
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 641)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                // line 642
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 642)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 647
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 656
        yield "
\t\t\t\t\t\t\t\t";
        // line 657
        if ((((isset($context["annoncesRejeteesCount"]) || array_key_exists("annoncesRejeteesCount", $context) ? $context["annoncesRejeteesCount"] : (function () { throw new RuntimeError('Variable "annoncesRejeteesCount" does not exist.', 657, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 657, $this->source); })()) == "annonces-rejetees"))) {
            // line 658
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces en rejetees -->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx7\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne7\" data-parent=\"#accordionEx7\" href=\"#collapseOne7\" aria-expanded=\"true\" aria-controls=\"collapseOne7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 668
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-rejetees"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 669
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesRejeteesCount"]) || array_key_exists("annoncesRejeteesCount", $context) ? $context["annoncesRejeteesCount"] : (function () { throw new RuntimeError('Variable "annoncesRejeteesCount" does not exist.', 669, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 675
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne7\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne7\" data-parent=\"#accordionEx7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 686
            if (((isset($context["annoncesRejeteesCount"]) || array_key_exists("annoncesRejeteesCount", $context) ? $context["annoncesRejeteesCount"] : (function () { throw new RuntimeError('Variable "annoncesRejeteesCount" does not exist.', 686, $this->source); })()) > 0)) {
                // line 687
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnonceRejetees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 688
                yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_rejetees.html.twig", "profile/annoncesTag.html.twig", 688)->unwrap()->yield($context);
                // line 689
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 691
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesRejetees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 693
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesRejetees"]) || array_key_exists("annoncesRejetees", $context) ? $context["annoncesRejetees"] : (function () { throw new RuntimeError('Variable "annoncesRejetees" does not exist.', 693, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 694
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                // line 695
                if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 695)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 695)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 695) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 695), 0, [], "any", false, false, false, 695), "guid", [], "any", false, false, false, 695), "html", null, true);
                } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 695)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 695), 0, [], "any", false, false, false, 695))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 695), 0, [], "any", false, false, false, 695), "guid", [], "any", false, false, false, 695), "html", null, true);
                }
                yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 697
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 697), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 698
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 698), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 700
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 700, $this->source); })()), "request", [], "any", false, false, false, 700), "locale", [], "any", false, false, false, 700) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 700) != ""))) {
                    // line 701
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 701), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 703
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 703), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 705
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 706
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 706), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 707
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 707), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 710
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 710)), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 711
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 711), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 712
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 712), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 716
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 716)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 718
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 718)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                // line 719
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 719)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 724
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 734
        yield "
\t\t\t\t\t\t\t\t";
        // line 735
        if ((((isset($context["annoncesPublieesCount"]) || array_key_exists("annoncesPublieesCount", $context) ? $context["annoncesPublieesCount"] : (function () { throw new RuntimeError('Variable "annoncesPublieesCount" does not exist.', 735, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 735, $this->source); })()) == "annonces-publiees"))) {
            // line 736
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces publiees -->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx8\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne8\" data-parent=\"#accordionEx8\" href=\"#collapseOne8\" aria-expanded=\"true\" aria-controls=\"collapseOne8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 746
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-publiees"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesPublieesCount"]) || array_key_exists("annoncesPublieesCount", $context) ? $context["annoncesPublieesCount"] : (function () { throw new RuntimeError('Variable "annoncesPublieesCount" does not exist.', 747, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 753
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne8\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne8\" data-parent=\"#accordionEx8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 764
            if (((isset($context["annoncesPublieesCount"]) || array_key_exists("annoncesPublieesCount", $context) ? $context["annoncesPublieesCount"] : (function () { throw new RuntimeError('Variable "annoncesPublieesCount" does not exist.', 764, $this->source); })()) > 0)) {
                // line 765
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnoncesPubliees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 766
                yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_publiees.html.twig", "profile/annoncesTag.html.twig", 766)->unwrap()->yield($context);
                // line 767
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 769
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesPubliees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 772
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesPubliees"]) || array_key_exists("annoncesPubliees", $context) ? $context["annoncesPubliees"] : (function () { throw new RuntimeError('Variable "annoncesPubliees" does not exist.', 772, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 773
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                // line 774
                if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 774)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 774)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 774) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 774), 0, [], "any", false, false, false, 774), "guid", [], "any", false, false, false, 774), "html", null, true);
                } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 774)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 774), 0, [], "any", false, false, false, 774))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 774), 0, [], "any", false, false, false, 774), "guid", [], "any", false, false, false, 774), "html", null, true);
                }
                yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 776
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 776), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 777
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 777), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 779
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 779, $this->source); })()), "request", [], "any", false, false, false, 779), "locale", [], "any", false, false, false, 779) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 779) != ""))) {
                    // line 780
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 780), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 782
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 782), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 784
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 785
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 785), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 786
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 786), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 789
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 789)), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 790
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 790), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 791
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 791), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 795
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 795)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 797)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                // line 798
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 798)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"";
                // line 803
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 803), "state" => "edition"]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 808
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 808)]), "html", null, true);
                yield "\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mt-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 814
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 814)) > 8)) {
                    // line 815
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 815)) > 8)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 815)]), "html", null, true);
                    }
                    yield "\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 817
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.voir_annonce"), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 820
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div ";
                // line 822
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorieParentType", [], "any", false, false, false, 822) == "product_cat")) {
                    yield " hidden ";
                } else {
                    yield " fa-minus ";
                }
                yield " class=\"btn-group mt-2 ml-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"mise_en_rupture\" href=\"";
                // line 823
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 823)) > 8)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_rupture", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 823)]), "html", null, true);
                }
                yield "\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas ";
                // line 824
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 824) == 0)) {
                    yield "fa-plus";
                } else {
                    yield "fa-minus";
                }
                yield "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 825
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 825) == 0)) {
                    // line 826
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.produit_disponible"), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 828
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.rupture"), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 830
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 837
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->

\t\t\t\t\t\t\t\t";
        }
        // line 847
        yield "
\t\t\t\t\t\t\t\t";
        // line 848
        if ((((isset($context["devisEnAttenteCount"]) || array_key_exists("devisEnAttenteCount", $context) ? $context["devisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "devisEnAttenteCount" does not exist.', 848, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 848, $this->source); })()) == "devis-en-attente"))) {
            // line 849
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations en Cours-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx9\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne9\" data-parent=\"#accordionEx9\" href=\"#collapseOne9\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"collapseOne9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devisEnAttenteCount"]) || array_key_exists("devisEnAttenteCount", $context) ? $context["devisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "devisEnAttenteCount" does not exist.', 860, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 866
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne9\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne9\" data-parent=\"#accordionEx9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 877
            if (((isset($context["devisEnAttenteCount"]) || array_key_exists("devisEnAttenteCount", $context) ? $context["devisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "devisEnAttenteCount" does not exist.', 877, $this->source); })()) > 0)) {
                // line 878
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationDevisEnAttente\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 879
                yield from $this->loadTemplate("profile/partials/pagination_bloc_devis_attente.html.twig", "profile/annoncesTag.html.twig", 879)->unwrap()->yield($context);
                // line 880
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 882
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateDevisEnAttente\" class=\"col-md-12\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 884
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["devisEnAttente"]) || array_key_exists("devisEnAttente", $context) ? $context["devisEnAttente"] : (function () { throw new RuntimeError('Variable "devisEnAttente" does not exist.', 884, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 885
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                // line 886
                if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 886)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 886)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 886) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 886), 0, [], "any", false, false, false, 886), "guid", [], "any", false, false, false, 886), "html", null, true);
                } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 886)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 886), 0, [], "any", false, false, false, 886))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 886), 0, [], "any", false, false, false, 886), "guid", [], "any", false, false, false, 886), "html", null, true);
                }
                yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 888
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 889
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 889), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 890
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 891
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 891), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 893
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 895
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 896
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 896), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 897
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 897), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 902
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 902), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 902), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 908
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"";
                // line 911
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 911), "state" => "edition"]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 916
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 916)]), "html", null, true);
                yield "\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4 \" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 927
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 936
        yield "
\t\t\t\t\t\t\t\t";
        // line 937
        if ((((isset($context["devisEnBrouillonCount"]) || array_key_exists("devisEnBrouillonCount", $context) ? $context["devisEnBrouillonCount"] : (function () { throw new RuntimeError('Variable "devisEnBrouillonCount" does not exist.', 937, $this->source); })()) != 0) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 937, $this->source); })()) == "devis-en-brouillon"))) {
            // line 938
            yield "\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations en Cours-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx10\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne10\" data-parent=\"#accordionEx10\" href=\"#collapseOne10\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"collapseOne10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
            // line 949
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-brouillon"), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devisEnBrouillonCount"]) || array_key_exists("devisEnBrouillonCount", $context) ? $context["devisEnBrouillonCount"] : (function () { throw new RuntimeError('Variable "devisEnBrouillonCount" does not exist.', 949, $this->source); })()), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 955
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne10\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne10\" data-parent=\"#accordionEx10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 966
            if (((isset($context["devisEnBrouillonCount"]) || array_key_exists("devisEnBrouillonCount", $context) ? $context["devisEnBrouillonCount"] : (function () { throw new RuntimeError('Variable "devisEnBrouillonCount" does not exist.', 966, $this->source); })()) > 0)) {
                // line 967
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationDevisEnBrouillon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 968
                yield from $this->loadTemplate("profile/partials/pagination_bloc_devis_brouillon.html.twig", "profile/annoncesTag.html.twig", 968)->unwrap()->yield($context);
                // line 969
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 971
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateDevisEnBrouillon\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 973
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["devisEnBrouillon"]) || array_key_exists("devisEnBrouillon", $context) ? $context["devisEnBrouillon"] : (function () { throw new RuntimeError('Variable "devisEnBrouillon" does not exist.', 973, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 974
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
                // line 975
                if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 975)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 975)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 975) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 975), 0, [], "any", false, false, false, 975), "guid", [], "any", false, false, false, 975), "html", null, true);
                } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 975)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 975), 0, [], "any", false, false, false, 975))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 975), 0, [], "any", false, false, false, 975), "guid", [], "any", false, false, false, 975), "html", null, true);
                }
                yield "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 977
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 978
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 978), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 979
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 980
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 980), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 982
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 984
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 985
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 985), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 986
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 986), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 991
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 991), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 992
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 992), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 998
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"";
                // line 1001
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1001), "state" => "edition"]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-devis mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 1006
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1006)]), "html", null, true);
                yield "\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4\" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1017
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t";
        }
        // line 1026
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Fin des modifs -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 1032
        yield from $this->loadTemplate("partials/project.html.twig", "profile/annoncesTag.html.twig", 1032)->unwrap()->yield($context);
        // line 1033
        yield "\t\t\t";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/annoncesTag.html.twig", 1033)->unwrap()->yield($context);
        // line 1034
        yield "\t\t</main>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1039
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1040
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1044
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1045
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<!-- jQuery plugin for datepicker -->
\t<script src=\"";
        // line 1047
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 1048
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/img-picker/image-picker.min.js")), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 1049
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tagsinput/jQuery.tagify.min.js")), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 1050
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 1051
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>

\t";
        // line 1054
        yield "
\t<script>
\t\$(document).ready(function () {
// CKEDITOR.replace( 'description' );
// CKEDITOR.replace( 'description1' );

var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});


\$(function () {
\tlet text = `";
        // line 1070
        if ((isset($context["infos_bulle"]) || array_key_exists("infos_bulle", $context) ? $context["infos_bulle"] : (function () { throw new RuntimeError('Variable "infos_bulle" does not exist.', 1070, $this->source); })())) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["infos_bulle"]) || array_key_exists("infos_bulle", $context) ? $context["infos_bulle"] : (function () { throw new RuntimeError('Variable "infos_bulle" does not exist.', 1070, $this->source); })()), "optionValue", [], "any", false, false, false, 1070);
        }
        yield "`;
\t\$('.popover_infos').data('content', text);
 \t\$('[data-toggle=\"popover\"]').popover()
})
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

// Initialize the object
\$(\"#photos\").imagepicker();
\$(\"#videos\").imagepicker();
// Retrieve the picker
\$(\"#photos\").data('picker');
\$(\"#videos\").data('picker');

\$('.date').datepicker({multidate: true, format: 'dd-mm-yyyy'});



\$('#headingOne1').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne2').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne3').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne4').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne5').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne6').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne7').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne8').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne9').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne10').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#accordionEx1').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsEnCours').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsEnCours').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx2').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsDevisEnAttente').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsDevisEnAttente').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx3').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsTerminees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsTerminees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx4').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tconsole.log(data);
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsAnnulees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsAnnulees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx5').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesEnBrouillon').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnonceBrouillon').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx6').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tconsole.log(data);
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesEnModeration').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnonceModeration').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx7').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesRejetees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnonceRejetees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx8').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tconsole.log(data);
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesPubliees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnoncesPubliees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx9').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateDevisEnAttente').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationDevisEnAttente').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx10').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateDevisEnBrouillon').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationDevisEnBrouillon').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});
// jQuery time
var current_fs,

_fs,
previous_fs; // fieldsets
var left,
opacity,
scale; // fieldset properties which we will animate
var animating; // flag to prevent quick multi-click glitches

\$(\".next\").click(function () {
if (animating) 
return false;

animating = true;
current_fs = \$(this).parent();
next_fs = \$(this).parent().next();

// activate next step on progressbar using the index of next_fs
\$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");

// show the next fieldset
next_fs.show();
// hide the current fieldset with style
current_fs.animate({
opacity: 0
}, {
step: function (now, mx) {
// as the opacity of current_fs reduces to 0 - stored in \"now\"
// 1. scale current_fs down to 80%
scale = 1 - (1 - now) * 0.2;
// 2. bring next_fs from the right(50%)
left = (now * 50) + \"%\";
// 3. increase opacity of next_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({
'transform': 'scale(' + scale + ')',
'position': 'absolute'
});
next_fs.css({'left': left, 'opacity': opacity});
},
duration: 800,
complete: function () {
current_fs.hide();
animating = false;
},
// this comes from the custom easing plugin
easing: 'easeInOutBack'
});
});

\$(\".previous\").click(function () {
if (animating) 
return false;

animating = true;
current_fs = \$(this).parent();
previous_fs = \$(this).parent().prev();
// de-activate current step on progressbar
\$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");
// show the previous fieldset
previous_fs.show();
// hide the current fieldset with style
current_fs.animate({
opacity: 0
}, {
step: function (now, mx) {
// as the opacity of current_fs reduces to 0 - stored in \"now\"
// 1. scale previous_fs from 80% to 100%
scale = 0.8 + (1 - now) * 0.2;
// 2. take current_fs to the right(50%) - from 0%
left = ((1 - now) * 50) + \"%\";
// 3. increase opacity of previous_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({'left': left});
previous_fs.css({
'transform': 'scale(' + scale + ')',
'opacity': opacity
});
},
duration: 800,
complete: function () {
current_fs.hide();
animating = false;
},
// this comes from the custom easing plugin
easing: 'easeInOutBack'
});
});




// Supprimer annonce

\$(document).on('click', '.supprimer', function (e) { // On emp�che le navigateur de soumettre le formulaire
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
swal({
title: \"Suppression de l'objet\",
text: \"Attention l'objet sera Supprimeé et n'apparaitra plus sur le site\",
type: \"info\",
showCancelButton: true,
confirmButtonClass: \"btn-danger\",
confirmButtonText: \"Supprimer\",
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
if (reponse == 1) {

swal(\"suppression terminée\", \"\", \"success\");
window.setTimeout(function () {
window.location = \"\";
}, 1000);
t.parents('li').hide();
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


\$(document).on('click', '.annuler-devis', function (e) { // On emp�che le navigateur de soumettre le formulaire
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
swal({
title: \"Annulation de la reservation\",
text: \"";
        // line 1546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.confirmer_annulation"), "html", null, true);
        yield "\",

type: \"info\",
showCancelButton: true,
confirmButtonClass: \"btn-danger\",
confirmButtonText: \"Annuler Reservation\",
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
if (reponse == 1) {

swal(\"";
        // line 1566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.succes"), "html", null, true);
        yield "\", \"\", \"success\");

window.setTimeout(function () {
window.location = \"\";
}, 1000);
t.parents('li').hide();
} else {

swal(\"commande.annuler.erreur'|trans}}\", \"\", \"error\");


}
},
error: function (reponse) {
swal(\"";
        // line 1580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.erreur"), "html", null, true);
        yield "\", \"\", \"error\");


}

});

} else {
swal.close();
}
});
return false;
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
\"timeOut\": \"30000\",
\"extendedTimeOut\": \"1000\",
\"showEasing\": \"swing\",
\"hideEasing\": \"linear\",
\"showMethod\": \"fadeIn\",
\"hideMethod\": \"fadeOut\"
}
});

</script>
";
        // line 1615
        yield from $this->loadTemplate("profile/js/annulerCommande.js.twig", "profile/annoncesTag.html.twig", 1615)->unwrap()->yield($context);
        // line 1616
        yield from $this->loadTemplate("profile/js/brouillonDevisAnnonce.html.twig", "profile/annoncesTag.html.twig", 1616)->unwrap()->yield($context);
        // line 1617
        yield from $this->loadTemplate("profile/js/creerDevisAnnonce.html.twig", "profile/annoncesTag.html.twig", 1617)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/annoncesTag.html.twig";
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
        return array (  2870 => 1617,  2868 => 1616,  2866 => 1615,  2828 => 1580,  2811 => 1566,  2788 => 1546,  2307 => 1070,  2289 => 1054,  2284 => 1051,  2280 => 1050,  2276 => 1049,  2272 => 1048,  2268 => 1047,  2262 => 1045,  2252 => 1044,  2240 => 1040,  2230 => 1039,  2220 => 1034,  2217 => 1033,  2215 => 1032,  2207 => 1026,  2196 => 1017,  2179 => 1006,  2171 => 1001,  2166 => 998,  2158 => 992,  2154 => 991,  2146 => 986,  2142 => 985,  2138 => 984,  2134 => 982,  2130 => 980,  2126 => 979,  2122 => 978,  2118 => 977,  2109 => 975,  2106 => 974,  2102 => 973,  2098 => 971,  2094 => 969,  2092 => 968,  2089 => 967,  2087 => 966,  2073 => 955,  2062 => 949,  2049 => 938,  2047 => 937,  2044 => 936,  2033 => 927,  2016 => 916,  2008 => 911,  2003 => 908,  1993 => 902,  1985 => 897,  1981 => 896,  1977 => 895,  1973 => 893,  1969 => 891,  1965 => 890,  1961 => 889,  1957 => 888,  1948 => 886,  1945 => 885,  1941 => 884,  1937 => 882,  1933 => 880,  1931 => 879,  1928 => 878,  1926 => 877,  1912 => 866,  1901 => 860,  1888 => 849,  1886 => 848,  1883 => 847,  1871 => 837,  1859 => 830,  1853 => 828,  1847 => 826,  1845 => 825,  1837 => 824,  1831 => 823,  1823 => 822,  1819 => 820,  1813 => 817,  1805 => 815,  1803 => 814,  1794 => 808,  1786 => 803,  1778 => 798,  1774 => 797,  1769 => 795,  1762 => 791,  1758 => 790,  1754 => 789,  1748 => 786,  1744 => 785,  1741 => 784,  1735 => 782,  1729 => 780,  1727 => 779,  1722 => 777,  1718 => 776,  1709 => 774,  1706 => 773,  1702 => 772,  1697 => 769,  1693 => 767,  1691 => 766,  1688 => 765,  1686 => 764,  1672 => 753,  1663 => 747,  1659 => 746,  1647 => 736,  1645 => 735,  1642 => 734,  1630 => 724,  1619 => 719,  1615 => 718,  1610 => 716,  1603 => 712,  1599 => 711,  1595 => 710,  1589 => 707,  1585 => 706,  1582 => 705,  1576 => 703,  1570 => 701,  1568 => 700,  1563 => 698,  1559 => 697,  1550 => 695,  1547 => 694,  1543 => 693,  1539 => 691,  1535 => 689,  1533 => 688,  1530 => 687,  1528 => 686,  1514 => 675,  1505 => 669,  1501 => 668,  1489 => 658,  1487 => 657,  1484 => 656,  1473 => 647,  1462 => 642,  1458 => 641,  1453 => 639,  1446 => 635,  1442 => 634,  1438 => 633,  1432 => 630,  1428 => 629,  1425 => 628,  1419 => 626,  1413 => 624,  1411 => 623,  1406 => 621,  1402 => 620,  1393 => 618,  1390 => 617,  1386 => 616,  1382 => 614,  1378 => 612,  1376 => 611,  1373 => 610,  1371 => 609,  1358 => 599,  1349 => 593,  1345 => 592,  1333 => 582,  1331 => 581,  1328 => 580,  1317 => 571,  1301 => 561,  1293 => 556,  1285 => 551,  1281 => 550,  1276 => 548,  1269 => 544,  1265 => 543,  1261 => 542,  1255 => 539,  1251 => 538,  1248 => 537,  1242 => 535,  1236 => 533,  1234 => 532,  1229 => 530,  1225 => 529,  1216 => 527,  1213 => 526,  1209 => 525,  1205 => 523,  1201 => 521,  1199 => 520,  1196 => 519,  1194 => 518,  1180 => 507,  1171 => 501,  1167 => 500,  1155 => 490,  1153 => 489,  1150 => 488,  1139 => 479,  1122 => 470,  1115 => 466,  1111 => 465,  1106 => 462,  1098 => 456,  1094 => 455,  1086 => 450,  1082 => 449,  1078 => 448,  1074 => 446,  1070 => 444,  1066 => 443,  1062 => 442,  1058 => 441,  1049 => 439,  1046 => 438,  1042 => 437,  1038 => 435,  1034 => 433,  1032 => 432,  1029 => 431,  1027 => 430,  1013 => 419,  1004 => 413,  1000 => 412,  987 => 401,  985 => 400,  982 => 399,  971 => 390,  965 => 389,  962 => 388,  956 => 387,  949 => 383,  942 => 379,  938 => 378,  934 => 377,  928 => 374,  924 => 373,  920 => 372,  916 => 371,  912 => 370,  903 => 368,  900 => 367,  897 => 366,  892 => 365,  890 => 364,  884 => 361,  879 => 360,  873 => 358,  869 => 357,  865 => 356,  856 => 354,  853 => 353,  850 => 352,  846 => 351,  842 => 349,  838 => 347,  836 => 346,  833 => 345,  831 => 344,  817 => 333,  808 => 327,  804 => 326,  792 => 316,  790 => 315,  787 => 314,  776 => 305,  770 => 304,  767 => 303,  761 => 302,  754 => 298,  747 => 294,  743 => 293,  739 => 292,  731 => 289,  727 => 288,  723 => 287,  719 => 286,  710 => 284,  707 => 283,  704 => 282,  699 => 281,  697 => 280,  691 => 277,  687 => 276,  683 => 275,  677 => 274,  673 => 273,  669 => 272,  660 => 270,  657 => 269,  654 => 268,  650 => 267,  646 => 265,  642 => 263,  640 => 262,  637 => 261,  635 => 260,  622 => 250,  613 => 244,  609 => 243,  597 => 233,  595 => 232,  592 => 231,  581 => 222,  575 => 221,  572 => 220,  566 => 219,  554 => 210,  550 => 209,  543 => 205,  537 => 204,  529 => 199,  522 => 195,  518 => 194,  514 => 193,  508 => 190,  504 => 189,  500 => 188,  496 => 187,  487 => 185,  484 => 184,  481 => 183,  476 => 182,  474 => 181,  460 => 170,  456 => 169,  451 => 166,  449 => 165,  445 => 163,  441 => 162,  436 => 161,  430 => 159,  426 => 158,  422 => 157,  413 => 155,  410 => 154,  407 => 153,  403 => 152,  399 => 150,  395 => 148,  393 => 147,  390 => 146,  388 => 145,  374 => 134,  365 => 128,  361 => 127,  348 => 116,  346 => 115,  343 => 114,  341 => 113,  328 => 102,  326 => 101,  320 => 97,  310 => 96,  299 => 92,  296 => 91,  286 => 90,  275 => 86,  272 => 85,  262 => 84,  214 => 42,  210 => 41,  205 => 39,  197 => 34,  192 => 32,  187 => 30,  183 => 29,  179 => 28,  175 => 27,  171 => 26,  166 => 24,  162 => 23,  157 => 21,  151 => 19,  141 => 18,  132 => 16,  122 => 15,  105 => 14,  93 => 9,  89 => 8,  85 => 7,  81 => 6,  75 => 4,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'profileTemplate.html.twig' %}

{% block head %}
\t{{parent()}}

\t<link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png')) }}\" sizes=\"32x32\"/>
\t<link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png')) }}\" sizes=\"192x192\"/>
\t<link rel=\"apple-touch-icon-precomposed\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png')) }}\"/>
\t<meta name=\"msapplication-TileImage\" content=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\"/>
\t<meta name=\"robots\" content=\"noindex\">

{% endblock %}

{% block title %}Trust &amp; Market | Profil Annonces{% endblock %}
{% block  annonce %}
\tactive
{% endblock %}
{% block style %}
\t{{parent()}}

\t<link rel=\"stylesheet\" href=\" {{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">

<link href=\"{{ preload(asset('assets/css/custome.css'))}}\" rel=\"stylesheet\">
<link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/img-picker/image-picker.css')}}\">
\t<link href=\"{{ asset('assets/css/style-moderation.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ preload(asset('assets/css/tagsinput/tagify.css'))}}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">

\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
\t<link
\trel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">

\t<!-- file input fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
\t<link
\thref=\"{{asset('assets/font/file-input-font/font/font-fileuploader.css')}}\" rel=\"stylesheet\">
\t<!-- file input styles -->
\t\t<link href=\"{{asset('assets/css/file-input-css/jquery.fileuploader.min.css')}}\" media=\"all\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery.paginate.css') }}\">


\t<style>
\t\t.image_picker_image {
\t\t\twidth: 100px;
\t\t\theight: 100px
\t\t}
\t\t.tox-statusbar__branding {
\t\t\tdisplay: none;
\t\t}
\t\t.btn-bg-primary {
\t\t\tcolor: #fff;
\t\t\tbackground: #f17b30 !important;
\t\t}
\t\t.btn-bg-primary:hover {
\t\t\tcolor: #fff;
\t\t\tbackground: #f4b279 !important;
\t\t}
\t\t.btn-bg-details-button {
\t\t\tcolor: #fff;
\t\t\tbackground: #008778 !important;
\t\t}
\t\t
\t\t.sub-msg{
\t\t\tcolor: #212529;
\t\t\tfont-size: 11px;
\t\t}
\t\tspan.fs-16{
\t\t\tfont-family: 'Palanquin Dark', sans-serif;
\t\t\tfont-weight: 300;
\t\t}

\t\t@media only screen and(min-width : 992px) {
\t\t\t.dashboard-menu {
\t\t\t\tmargin-top: 12px !important;
\t\t\t}
\t\t}
\t</style>
{% endblock %}


{% block header %}

\t{{parent()}}

{% endblock %}

{% block navigation %}

\t{{parent()}}

{% endblock %}

{% block body %}
\t<div class=\"flex-fill container\">
\t\t<main class=\"\">

\t\t\t<div class=\"container\">
\t\t\t\t{% include 'menuProfile.html.twig' %}
\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t<!-- Modif des infos -->
\t\t\t\t\t<div id=\"modifInfo\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t<strong>Holy guacamole!</strong>
\t\t\t\t\t\t\t\tYou should check in on some of those fields below.
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% include 'annonces/sousMenuAnnonces.html.twig' %}
\t\t\t\t\t\t\t\t<div class=\"col-md-8 mb-2\">
\t\t\t\t\t\t\t\t{% if reservationsEnCoursCount != 0 and tag == \"reservations-en-cours\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations en Cours-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx1\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx1\" href=\"#collapseOne1\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"collapseOne1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.reservations-en-cours'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{reservationsEnCoursCount}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if reservationsEnCoursCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsEnCours\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_reservations_cours.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsEnCours\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in reservationsEnCours %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if a.pinged == \"devis\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.affiche %}{{a.affiche}}{% else %}{{ asset('assets/images/empty_devis.jpg') }}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-service'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.post_title}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-date'|trans}}:{{a.date_evenement}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p class=\"fs-14\">{{a.titre}}</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-prestataire'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.prenom_prestataire}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.nom_prestataire}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-map-marker\"></i> {{a.pays|country_name}}, {{a.etat}}, {{a.ville}}</span> <br> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-calendar\"></i> {{a.dates_devis}} </span> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn btn-bg-primary btn-s annulerCommande\" href=\"{{path('profile_cancelledReservationAnnounce',{id:a.id, state:'edition'})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.annuler'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4 \" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif a.pinged == \"product\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for s in a.annonces %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if s %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if s.gallery|length > 0 and s.gallery is defined and s.gallery != '' %}{{s.gallery.0.guid}}{% else %}{{s.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{s.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.last_name}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">{{s.post_title}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.post_parent }} €</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.pays|country_name}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.etat}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.ville}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.date_evenement}}</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm\" target=\"_blank\" href=\"{% if s.slug|length > 8 %}{{path('annonces_detailsAnnonce',{id:s.slug})}}{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'general.voir_annonce'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('profile_cancelledReservationAnnounce',{id:a.id})}}\" class=\"btn btn-bg-primary btn-sm editer annulerCommande\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.annuler'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if reservationsTermineesCount != 0 and tag == \"reservations-terminees\"%}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations terminees-->
\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx3\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne3\" data-parent=\"#accordionEx3\" href=\"#collapseOne3\" aria-expanded=\"true\" aria-controls=\"collapseOne3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.reservations-terminees'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{reservationsTermineesCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne3\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne3\" data-parent=\"#accordionEx3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if reservationsTermineesCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsTerminees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_reservations_terminees.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsTerminees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in reservationsTerminees %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if a.pinged == \"devis\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.affiche %}{{a.affiche}}{% else %}{{ asset('assets/images/empty_devis.jpg') }}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-service'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.post_title}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-date'|trans}}:{{a.date_evenement}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-prestataire'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.prenom_prestataire}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.nom_prestataire}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif a.pinged == \"product\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for s in a.annonces %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if s %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if s.gallery|length > 0 and s.gallery is defined and s.gallery != '' %}{{s.gallery.0.guid}}{% else %}{{s.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{s.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.last_name}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">{{s.post_title}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.post_parent }} {{s.devise.metaValue}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.pays|country_name}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.etat}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.ville}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.date_evenement}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if reservationsAnnuleesCount != 0 and tag == \"reservations-annulees\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations annules-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx4\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne4\" data-parent=\"#accordionEx4\" href=\"#collapseOne4\" aria-expanded=\"true\" aria-controls=\"collapseOne4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.reservations-annulees'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{reservationsAnnuleesCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne4\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne4\" data-parent=\"#accordionEx4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if reservationsAnnuleesCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsAnnulees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_reservations_annulees.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsAnnulees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in reservationsAnnulees %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if a.pinged == \"devis\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.affiche %}{{a.affiche}}{% else %}{{ asset('assets/images/empty_devis.jpg') }}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-service'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.post_title}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-date'|trans}}:{{a.date_evenement}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p class=\"fs-14\">{{a.titre}}</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-prestataire'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.post_mime_type}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif a.pinged == \"product\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for s in a.annonces %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if s %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if s.gallery|length > 0 and s.gallery is defined and s.gallery != '' %}{{s.gallery.0.guid}}{% elseif s.images_secondaires is defined and s.images_secondaires.0 %}{{s.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{s.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.last_name}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">{{s.post_title}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.post_parent }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.devise.metaValue}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.pays|country_name}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.etat}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{s.ville}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.date_evenement}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if reservationsDevisEnAttenteCount != 0 and tag == \"reservation-devis-en-attente\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservation-devis-en-attente-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\" href=\"#collapseOne2\" aria-expanded=\"true\" aria-controls=\"collapseOne2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.devis-en-attente'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{reservationsDevisEnAttenteCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if reservationsDevisEnAttenteCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationReservationsDevisEnAttente\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_reservations_devis_attente.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateReservationsDevisEnAttente\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in reservationsDevisEnAttente %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery|length > 0 and a.gallery and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-service'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-date'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.dates_devis}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p class=\"fs-14\">{{a.titre}}</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-prestataire'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.prenom_prestataire}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.nom_prestataire}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.price}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.devise}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-calendar\"></i> {{a.dates_devis}} </span> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn btn-bg-primary btn-s annuler-devis\" href=\"{{path('devis_annulerDevis',{id:a.id, state:'edition'})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.annuler'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('devis_detailsDevis',{id:a.id})}}\" class=\"btn btn-bg-details-button btn-s\">{{'profil-utilisateur.annonces.voir-accepter'|trans}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4 \" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if annoncesBrouillonCount != 0 and tag == \"annonces-en-brouillon\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces en brouillon -->
\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx5\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne5\" data-parent=\"#accordionEx5\" href=\"#collapseOne5\" aria-expanded=\"true\" aria-controls=\"collapseOne5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.annonces-en-brouillon'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{annoncesBrouillonCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne5\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne5\" data-parent=\"#accordionEx5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if annoncesBrouillonCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnonceBrouillon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_annonces_brouillon.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesEnBrouillon\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in annoncesBrouillon %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{a.gallery.0.guid}}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0  %}{{a.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{a.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.last_name}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and a.titre_en != '' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre_en}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.price }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.devise}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.pays|country_name}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.etat}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.ville}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|first}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|last}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{a.calendrier|length}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"{{path('profile_EditDraftAnnounce',{id:a.id})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('profile_deleteDraftAnnounce',{id:a.id})}}\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if annoncesModerationCount != 0 and tag == \"annonces-en-moderation\"  %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces en moderation -->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx6\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne6\" data-parent=\"#accordionEx6\" href=\"#collapseOne6\" aria-expanded=\"true\" aria-controls=\"collapseOne6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\" id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.annonces-en-moderation'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{annoncesModerationCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne6\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne6\" data-parent=\"#accordionEx6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if annoncesModerationCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnonceModeration\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_annonces_moderation.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesEnModeration\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in annoncesModeration %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{a.gallery.0.guid}}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0  %}{{a.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{a.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.last_name}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and a.titre_en != '' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre_en}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.price }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.devise}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.pays|country_name}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.etat}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.ville}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|first}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|last}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{a.calendrier|length}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if annoncesRejeteesCount != 0 and tag == \"annonces-rejetees\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces en rejetees -->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx7\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne7\" data-parent=\"#accordionEx7\" href=\"#collapseOne7\" aria-expanded=\"true\" aria-controls=\"collapseOne7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.annonces-rejetees'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{annoncesRejeteesCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne7\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne7\" data-parent=\"#accordionEx7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if annoncesRejeteesCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnonceRejetees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_annonces_rejetees.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesRejetees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in annoncesRejetees %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{a.gallery.0.guid}}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0  %}{{a.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.last_name}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and a.titre_en != '' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre_en}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.price }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.devise}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.pays|country_name}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.etat}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.ville}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|first}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|last}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{a.calendrier|length}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if annoncesPublieesCount != 0 and tag == \"annonces-publiees\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les annonces publiees -->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx8\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne8\" data-parent=\"#accordionEx8\" href=\"#collapseOne8\" aria-expanded=\"true\" aria-controls=\"collapseOne8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.annonces-publiees'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{annoncesPublieesCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne8\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne8\" data-parent=\"#accordionEx8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if annoncesPublieesCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationAnnoncesPubliees\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_annonces_publiees.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateAnnoncesPubliees\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in annoncesPubliees %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{a.gallery.0.guid}}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0  %}{{a.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{a.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.last_name}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.locale == 'en' and a.titre_en != '' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre_en}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ a.price }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.devise}}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.pays|country_name}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.etat}},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.ville}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|first}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.calendrier|last}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{a.calendrier|length}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"{{path('profile_EditDraftAnnounce',{id:a.id, state:'edition'})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('profile_deleteDraftAnnounce',{id:a.id})}}\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mt-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if a.slug|length > 8 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{% if a.slug|length > 8 %}{{path('annonces_detailsAnnonce',{id:a.slug})}}{% endif %}\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'general.voir_annonce'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div {% if a.categorieParentType == 'product_cat' %} hidden {% else %} fa-minus {% endif %} class=\"btn-group mt-2 ml-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"mise_en_rupture\" href=\"{% if a.slug|length > 8 %}{{path('annonces_rupture',{slug:a.slug})}}{% endif %}\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas {% if a.rupture == 0 %}fa-plus{% else %}fa-minus{% endif %}\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if a.rupture == 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'general.produit_disponible'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'general.rupture'|trans}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->

\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if devisEnAttenteCount != 0 and tag == \"devis-en-attente\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations en Cours-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx9\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne9\" data-parent=\"#accordionEx9\" href=\"#collapseOne9\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"collapseOne9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.devis-en-attente'|trans}} ({{devisEnAttenteCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne9\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne9\" data-parent=\"#accordionEx9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if devisEnAttenteCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationDevisEnAttente\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_devis_attente.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateDevisEnAttente\" class=\"col-md-12\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in devisEnAttente %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{a.gallery.0.guid}}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0  %}{{a.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-service'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-date'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.dates_devis}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p class=\"fs-14\">{{a.titre}}</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-prestataire'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.last_name}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.price}} {{a.devise}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-calendar\"></i> {{a.dates_devis}} </span> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"{{path('profile_EditDraftAnnounce',{id:a.id, state:'edition'})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('profile_deleteDraftAnnounce',{id:a.id})}}\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4 \" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if devisEnBrouillonCount != 0 and tag == \"devis-en-brouillon\" %}
\t\t\t\t\t\t\t\t\t<!--Accordion wrapper Pour les reservations en Cours-->
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion md-accordion  mb-5\" id=\"accordionEx10\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" id=\"headingOne10\" data-parent=\"#accordionEx10\" href=\"#collapseOne10\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"collapseOne10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{'profil-utilisateur.annonces.devis-en-brouillon'|trans}} ({{devisEnBrouillonCount}})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-12 sub-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.message-en-attente'|trans}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne10\" class=\"collapse md-12\" role=\"tabpanel\" aria-labelledby=\"headingOne10\" data-parent=\"#accordionEx10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if devisEnBrouillonCount > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"dynamicPaginationDevisEnBrouillon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"profile/partials/pagination_bloc_devis_brouillon.html.twig\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"paginateDevisEnBrouillon\" class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for a in devisEnBrouillon %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{a.gallery.0.guid}}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0  %}{{a.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-service'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.titre}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-date'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.dates_devis}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p class=\"fs-14\">{{a.titre}}</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{'profil-utilisateur.annonces.devis-prestataire'|trans}}:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.first_name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.last_name}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.price}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{a.devise}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-calendar\"></i> {{a.dates_devis}} </span> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"{{path('profile_EditDraftAnnounce',{id:a.id, state:'edition'})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-devis mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('profile_deleteDraftAnnounce',{id:a.id})}}\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group ml-4\" role=\"group\" aria-label=\"Thirth group\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Accordion card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Accordion wrapper -->
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Fin des modifs -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% include(\"partials/project.html.twig\") %}
\t\t\t{% include(\"partials/otherPagesVideoModal.html.twig\") %}
\t\t</main>
\t</div>
{% endblock %}


{% block footer %}
\t{{parent()}}

{% endblock %}

{% block javascripts %}
\t{{parent()}}
\t<!-- jQuery plugin for datepicker -->
\t<script src=\"{{ prerender(asset('assets/js/gijgo-js/gijgo.min.2.js')) }}\"></script>
\t<script src=\"{{ prerender(asset('assets/js/img-picker/image-picker.min.js')) }}\"></script>
\t<script src=\"{{ prerender(asset('assets/js/tagsinput/jQuery.tagify.min.js')) }}\"></script>
\t<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
\t<script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>

\t{# Text editor #}

\t<script>
\t\$(document).ready(function () {
// CKEDITOR.replace( 'description' );
// CKEDITOR.replace( 'description1' );

var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});


\$(function () {
\tlet text = `{% if infos_bulle %}{{infos_bulle.optionValue|raw}}{% endif %}`;
\t\$('.popover_infos').data('content', text);
 \t\$('[data-toggle=\"popover\"]').popover()
})
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

// Initialize the object
\$(\"#photos\").imagepicker();
\$(\"#videos\").imagepicker();
// Retrieve the picker
\$(\"#photos\").data('picker');
\$(\"#videos\").data('picker');

\$('.date').datepicker({multidate: true, format: 'dd-mm-yyyy'});



\$('#headingOne1').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne2').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne3').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne4').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne5').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne6').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne7').click(function() {
\tlet accordion = \$(this).find('i');
\t
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne8').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne9').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#headingOne10').click(function() {
\tlet accordion = \$(this).find('i');
\tif(accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')){
  \t\taccordion.removeClass('fa-plus');
  \t\taccordion.addClass('fa-minus');
\t}else{
  \t\taccordion.removeClass('fa-minus');
\t\taccordion.addClass('fa-plus');
\t}
});

\$('#accordionEx1').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsEnCours').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsEnCours').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx2').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsDevisEnAttente').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsDevisEnAttente').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx3').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsTerminees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsTerminees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx4').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tconsole.log(data);
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateReservationsAnnulees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationReservationsAnnulees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx5').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesEnBrouillon').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnonceBrouillon').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx6').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tconsole.log(data);
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesEnModeration').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnonceModeration').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx7').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesRejetees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnonceRejetees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx8').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tconsole.log(data);
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateAnnoncesPubliees').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationAnnoncesPubliees').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx9').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateDevisEnAttente').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationDevisEnAttente').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});

\$('#accordionEx10').on('click', '.page-item', function(e) {
    e.preventDefault();
\tvar url = \$(this).children().attr('href');
\t\$.ajax({
\turl: url,
\tmethod: \"get\",
\t\tsuccess: function (data) {
\t\t\tif (data.html) {
\t\t\t\t\$('#paginateDevisEnBrouillon').html(data.html);
\t\t\t}
\t\t\t\$('#dynamicPaginationDevisEnBrouillon').html(data.pagination);
\t\t},
\t\terror: function (xhr) {
\t\t\tconsole.error(xhr);
\t\t}
\t});
});
// jQuery time
var current_fs,

_fs,
previous_fs; // fieldsets
var left,
opacity,
scale; // fieldset properties which we will animate
var animating; // flag to prevent quick multi-click glitches

\$(\".next\").click(function () {
if (animating) 
return false;

animating = true;
current_fs = \$(this).parent();
next_fs = \$(this).parent().next();

// activate next step on progressbar using the index of next_fs
\$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");

// show the next fieldset
next_fs.show();
// hide the current fieldset with style
current_fs.animate({
opacity: 0
}, {
step: function (now, mx) {
// as the opacity of current_fs reduces to 0 - stored in \"now\"
// 1. scale current_fs down to 80%
scale = 1 - (1 - now) * 0.2;
// 2. bring next_fs from the right(50%)
left = (now * 50) + \"%\";
// 3. increase opacity of next_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({
'transform': 'scale(' + scale + ')',
'position': 'absolute'
});
next_fs.css({'left': left, 'opacity': opacity});
},
duration: 800,
complete: function () {
current_fs.hide();
animating = false;
},
// this comes from the custom easing plugin
easing: 'easeInOutBack'
});
});

\$(\".previous\").click(function () {
if (animating) 
return false;

animating = true;
current_fs = \$(this).parent();
previous_fs = \$(this).parent().prev();
// de-activate current step on progressbar
\$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");
// show the previous fieldset
previous_fs.show();
// hide the current fieldset with style
current_fs.animate({
opacity: 0
}, {
step: function (now, mx) {
// as the opacity of current_fs reduces to 0 - stored in \"now\"
// 1. scale previous_fs from 80% to 100%
scale = 0.8 + (1 - now) * 0.2;
// 2. take current_fs to the right(50%) - from 0%
left = ((1 - now) * 50) + \"%\";
// 3. increase opacity of previous_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({'left': left});
previous_fs.css({
'transform': 'scale(' + scale + ')',
'opacity': opacity
});
},
duration: 800,
complete: function () {
current_fs.hide();
animating = false;
},
// this comes from the custom easing plugin
easing: 'easeInOutBack'
});
});




// Supprimer annonce

\$(document).on('click', '.supprimer', function (e) { // On emp�che le navigateur de soumettre le formulaire
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
swal({
title: \"Suppression de l'objet\",
text: \"Attention l'objet sera Supprimeé et n'apparaitra plus sur le site\",
type: \"info\",
showCancelButton: true,
confirmButtonClass: \"btn-danger\",
confirmButtonText: \"Supprimer\",
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
if (reponse == 1) {

swal(\"suppression terminée\", \"\", \"success\");
window.setTimeout(function () {
window.location = \"\";
}, 1000);
t.parents('li').hide();
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


\$(document).on('click', '.annuler-devis', function (e) { // On emp�che le navigateur de soumettre le formulaire
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
swal({
title: \"Annulation de la reservation\",
text: \"{{'commande.annuler.confirmer_annulation'|trans}}\",

type: \"info\",
showCancelButton: true,
confirmButtonClass: \"btn-danger\",
confirmButtonText: \"Annuler Reservation\",
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
if (reponse == 1) {

swal(\"{{'commande.annuler.succes'|trans}}\", \"\", \"success\");

window.setTimeout(function () {
window.location = \"\";
}, 1000);
t.parents('li').hide();
} else {

swal(\"commande.annuler.erreur'|trans}}\", \"\", \"error\");


}
},
error: function (reponse) {
swal(\"{{'commande.annuler.erreur'|trans}}\", \"\", \"error\");


}

});

} else {
swal.close();
}
});
return false;
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
\"timeOut\": \"30000\",
\"extendedTimeOut\": \"1000\",
\"showEasing\": \"swing\",
\"hideEasing\": \"linear\",
\"showMethod\": \"fadeIn\",
\"hideMethod\": \"fadeOut\"
}
});

</script>
{% include(\"profile/js/annulerCommande.js.twig\") %}
{% include(\"profile/js/brouillonDevisAnnonce.html.twig\") %}
{% include(\"profile/js/creerDevisAnnonce.html.twig\") %}{% endblock %}

", "profile/annoncesTag.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/annoncesTag.html.twig");
    }
}
