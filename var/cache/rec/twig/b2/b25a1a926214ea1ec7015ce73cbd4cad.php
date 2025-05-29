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

/* profile/annonces.html.twig */
class __TwigTemplate_6adc19a0e6420ccbf19877fb8bda0e61 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/annonces.html.twig"));

        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/annonces.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png"), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png"), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png"), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\"/>
    <meta name=\"robots\" content=\"noindex\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 19
        yield "    Trust &amp; Market | Profil Annonces
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_annonce(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "annonce"));

        // line 22
        yield "    active
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 25
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/img-picker/image-picker.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-moderation.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.paginate.css"), "html", null, true);
        yield "\">
    <!-- file input fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
    <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/file-input-font/font/font-fileuploader.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- file input styles -->
    <link href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">

    <style>
        .image_picker_image {
            width: 100px;
            height: 100px
        }

        .tox-statusbar__branding {
            display: none;
        }

        .btn-bg-primary {
            color: #fff;
            background: #f17b30 !important;
        }

        .btn-bg-primary:hover {
            color: #fff;
            background: #f4b279 !important;
        }

        .sub-msg {
            color: #212529;
            font-size: 11px;
        }

        span.fs-16 {
            font-family: 'Palanquin Dark', sans-serif;
            font-weight: 300;
        }

        @media (max-width: 575.98px) {
            main, .container {
                margin-top: 70px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container {
                margin-top: 100px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 91
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 95
        yield "    ";
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
        yield "    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container\">
                <div class=\"mt-2 pt-4\">
                    <!-- Modif des infos -->
                    <div id=\"modifInfo\">
                        ";
        // line 105
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/annonces.html.twig", 105)->unwrap()->yield($context);
        // line 106
        yield "                        <div class=\"row\">
                            <div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                <strong></strong>
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            ";
        // line 113
        yield from $this->loadTemplate("annonces/sousMenuAnnonces.html.twig", "profile/annonces.html.twig", 113)->unwrap()->yield($context);
        // line 114
        yield "                            <div class=\"col-md-8 mb-2\">

                                <!--Accordion wrapper Pour les reservations en Cours-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx1\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx1\"
                                               href=\"#collapseOne1\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne1\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-en-cours"), "html", null, true);
        yield "
                                                ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsEnCoursCount"]) || array_key_exists("reservationsEnCoursCount", $context) ? $context["reservationsEnCoursCount"] : (function () { throw new RuntimeError('Variable "reservationsEnCoursCount" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx1\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 149
        if (((isset($context["reservationsEnCoursCount"]) || array_key_exists("reservationsEnCoursCount", $context) ? $context["reservationsEnCoursCount"] : (function () { throw new RuntimeError('Variable "reservationsEnCoursCount" does not exist.', 149, $this->source); })()) > 0)) {
            // line 150
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsEnCours\">
                                                                ";
            // line 152
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_cours.html.twig", "profile/annonces.html.twig", 152)->unwrap()->yield($context);
            // line 153
            yield "                                                            </div>
                                                        ";
        }
        // line 155
        yield "                                                    </div>
                                                    <div id=\"paginateReservationsEnCours\" class=\"col-md-12\">
                                                        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsEnCours"]) || array_key_exists("reservationsEnCours", $context) ? $context["reservationsEnCours"] : (function () { throw new RuntimeError('Variable "reservationsEnCours" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 158
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 158) == "devis")) {
                // line 159
                yield "                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('";
                // line 161
                if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 161)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 161), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                }
                yield "')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">
                                                                        <h4>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 165), "html", null, true);
                yield "</h4>
                                                                        <h4>";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield "
                                                                            :";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 167), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 169
                yield "                                                                        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 171), "html", null, true);
                yield "
                                                                            ";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 172), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 174
                yield "                                                                        ";
                // line 175
                yield "                                                                        <div class=\"pt-4\">
                                                                            <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                                 aria-label=\"Toolbar with button groups\">
                                                                                <div class=\"btn-group mr-2\" role=\"group\"
                                                                                     aria-label=\"First group\">
                                                                                    <a class=\"btn btn btn-bg-primary btn-s annulerCommande\"
                                                                                       href=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_cancelledReservationAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 181), "state" => "edition"]), "html", null, true);
                yield "\">
                                                                                        ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
                yield "
                                                                                    </a>
                                                                                </div>
                                                                                <div class=\"btn-group ml-4 \"
                                                                                     role=\"group\"
                                                                                     aria-label=\"Thirth group\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 192
$context["a"], "pinged", [], "any", false, false, false, 192) == "product")) {
                // line 193
                yield "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 193));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 194
                    yield "                                                                    ";
                    if ($context["s"]) {
                        // line 195
                        yield "                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('";
                        // line 197
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 197) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 197)) > 0)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 197) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 197), 0, [], "any", false, false, false, 197), "guid", [], "any", false, false, false, 197), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 197), 0, [], "any", false, false, false, 197), "guid", [], "any", false, false, false, 197), "html", null, true);
                        }
                        yield "')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>";
                        // line 199
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 199), "html", null, true);
                        yield "
                                                                                    ";
                        // line 200
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 200), "html", null, true);
                        yield "</h3>
                                                                                <p class=\"fs-14\">";
                        // line 201
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 201), "html", null, true);
                        yield "</p>
                                                                                <h3>";
                        // line 202
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 202), "html", null, true);
                        yield " €</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 205
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 205)), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 206
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 206), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 207
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 207), "html", null, true);
                        yield "</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 211
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 211), "html", null, true);
                        yield "</span>
                                                                                <div class=\"pt-4\">
                                                                                    <div class=\"btn-toolbar\"
                                                                                         role=\"toolbar\"
                                                                                         aria-label=\"Toolbar with button groups\">
                                                                                        <div class=\"btn-group mr-2\"
                                                                                             role=\"group\"
                                                                                             aria-label=\"First group\">
                                                                                            <a class=\"btn btn-bg-primary btn-sm\"
                                                                                               target=\"_blank\"
                                                                                               href=\"";
                        // line 221
                        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "slug", [], "any", false, false, false, 221)) > 8)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "slug", [], "any", false, false, false, 221)]), "html", null, true);
                        }
                        yield "\">
                                                                                                ";
                        // line 222
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.voir_annonce"), "html", null, true);
                        yield "
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class=\"btn-group mr-2\"
                                                                                             role=\"group\"
                                                                                             aria-label=\"Second group\">
                                                                                            <a href=\"";
                        // line 228
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_cancelledReservationAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 228)]), "html", null, true);
                        yield "\"
                                                                                               class=\"btn btn-bg-primary btn-sm editer annulerCommande\">
                                                                                                ";
                        // line 230
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
                        yield "
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    ";
                    }
                    // line 238
                    yield "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 239
                yield "                                                            ";
            }
            // line 240
            yield "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservation-devis-en-attente-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\"
                                               href=\"#collapseOne2\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne2\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservation-devis-en-attente"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsDevisEnAttenteCount"]) || array_key_exists("reservationsDevisEnAttenteCount", $context) ? $context["reservationsDevisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttenteCount" does not exist.', 264, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 282
        if (((isset($context["reservationsDevisEnAttenteCount"]) || array_key_exists("reservationsDevisEnAttenteCount", $context) ? $context["reservationsDevisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttenteCount" does not exist.', 282, $this->source); })()) > 0)) {
            // line 283
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsDevisEnAttente\">
                                                                ";
            // line 285
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_devis_attente.html.twig", "profile/annonces.html.twig", 285)->unwrap()->yield($context);
            // line 286
            yield "                                                            </div>
                                                        ";
        }
        // line 288
        yield "                                                    </div>
                                                    <div id=\"paginateReservationsDevisEnAttente\" class=\"col-md-12\">
                                                        ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsDevisEnAttente"]) || array_key_exists("reservationsDevisEnAttente", $context) ? $context["reservationsDevisEnAttente"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttente" does not exist.', 290, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 291
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 293
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293), "guid", [], "any", false, false, false, 293), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 293)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293), "guid", [], "any", false, false, false, 293), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 297), "html", null, true);
            yield "</h4>
                                                                    <h4>";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 300), "html", null, true);
            yield "</h4>
                                                                    ";
            // line 302
            yield "                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
            yield "
                                                                                :
                                                                                ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 306), "html", null, true);
            yield "
                                                                                ";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 307), "html", null, true);
            yield "</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 312), "html", null, true);
            yield "
                                                                        ";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 313), "html", null, true);
            yield "</span>
                                                                        </div>
                                                                    </div>
                                                                    <br>

                                                                    ";
            // line 319
            yield "                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn btn-bg-primary btn-s annuler-devis\"
                                                                                   href=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_annulerDevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 325), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    ";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
            yield "
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_detailsDevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 331)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-details-button btn-s\">";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.voir-accepter"), "html", null, true);
            yield "</a>
                                                                            </div>
                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservations terminees-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx3\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne3\" data-parent=\"#accordionEx3\"
                                               href=\"#collapseOne3\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne3\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-terminees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsTermineesCount"]) || array_key_exists("reservationsTermineesCount", $context) ? $context["reservationsTermineesCount"] : (function () { throw new RuntimeError('Variable "reservationsTermineesCount" does not exist.', 365, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id=\"collapseOne3\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne3\" data-parent=\"#accordionEx3\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 382
        if (((isset($context["reservationsTermineesCount"]) || array_key_exists("reservationsTermineesCount", $context) ? $context["reservationsTermineesCount"] : (function () { throw new RuntimeError('Variable "reservationsTermineesCount" does not exist.', 382, $this->source); })()) > 0)) {
            // line 383
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsTerminees\">
                                                                ";
            // line 385
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_terminees.html.twig", "profile/annonces.html.twig", 385)->unwrap()->yield($context);
            // line 386
            yield "                                                            </div>
                                                        ";
        }
        // line 388
        yield "                                                    </div>

                                                    <div id=\"paginateReservationsTerminees\" class=\"col-md-12\">
                                                        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsTerminees"]) || array_key_exists("reservationsTerminees", $context) ? $context["reservationsTerminees"] : (function () { throw new RuntimeError('Variable "reservationsTerminees" does not exist.', 391, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 392
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 392) == "devis")) {
                // line 393
                yield "                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('";
                // line 395
                if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 395)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 395), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                }
                yield "')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">
                                                                        <h4>";
                // line 397
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 399), "html", null, true);
                yield "</h4>
                                                                        <h4>";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield "
                                                                            :";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 401), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 403
                yield "                                                                        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 405), "html", null, true);
                yield "
                                                                            ";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 406), "html", null, true);
                yield "</h4>
                                                                    </div>
                                                                </div>
                                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 409
$context["a"], "pinged", [], "any", false, false, false, 409) == "product")) {
                // line 410
                yield "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 410));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 411
                    yield "                                                                    ";
                    if ($context["s"]) {
                        // line 412
                        yield "                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('";
                        // line 414
                        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 414)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 414)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 414) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 414), 0, [], "any", false, false, false, 414), "guid", [], "any", false, false, false, 414), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 414), 0, [], "any", false, false, false, 414), "guid", [], "any", false, false, false, 414), "html", null, true);
                        }
                        yield "')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>";
                        // line 416
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 416), "html", null, true);
                        yield "
                                                                                    ";
                        // line 417
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 417), "html", null, true);
                        yield "</h3>
                                                                                <p class=\"fs-14\">";
                        // line 418
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 418), "html", null, true);
                        yield "</p>
                                                                                <h3>";
                        // line 419
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 419), "html", null, true);
                        yield "
                                                                                    ";
                        // line 420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 420), "metaValue", [], "any", false, false, false, 420), "html", null, true);
                        yield "</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 423
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 423)), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 424
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 424), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 425
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 425), "html", null, true);
                        yield "</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 429
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 429), "html", null, true);
                        yield "</span>
                                                                            </div>
                                                                        </div>
                                                                    ";
                    }
                    // line 433
                    yield "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                yield "                                                            ";
            }
            // line 435
            yield "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservations annules-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx4\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne4\" data-parent=\"#accordionEx4\"
                                               href=\"#collapseOne4\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne4\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-annulees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 459, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne4\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne4\" data-parent=\"#accordionEx4\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">

                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 478
        if (((isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 478, $this->source); })()) > 0)) {
            // line 479
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsAnnulees\">
                                                                ";
            // line 481
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_annulees.html.twig", "profile/annonces.html.twig", 481)->unwrap()->yield($context);
            // line 482
            yield "                                                            </div>
                                                        ";
        }
        // line 484
        yield "                                                    </div>

                                                    <div id=\"paginateReservationsAnnulees\" class=\"col-md-12\">
                                                        ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsAnnulees"]) || array_key_exists("reservationsAnnulees", $context) ? $context["reservationsAnnulees"] : (function () { throw new RuntimeError('Variable "reservationsAnnulees" does not exist.', 487, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 488
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 488) == "devis")) {
                // line 489
                yield "                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('";
                // line 491
                if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 491)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 491), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                }
                yield "')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">

                                                                        <h4>";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 496), "html", null, true);
                yield "</h4>

                                                                        <h4>";
                // line 498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield "
                                                                            :";
                // line 499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 499), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 501
                yield "                                                                        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_mime_type", [], "any", false, false, false, 503), "html", null, true);
                yield "</h4>
                                                                    </div>
                                                                </div>

                                                            ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 507
$context["a"], "pinged", [], "any", false, false, false, 507) == "product") && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 507))) {
                // line 508
                yield "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 508));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 509
                    yield "                                                                    ";
                    if ($context["s"]) {
                        // line 510
                        yield "                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('";
                        // line 512
                        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 512)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 512)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 512) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 512), 0, [], "any", false, false, false, 512), "guid", [], "any", false, false, false, 512), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 512), 0, [], "any", false, false, false, 512), "guid", [], "any", false, false, false, 512), "html", null, true);
                        }
                        yield "')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>";
                        // line 514
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 514), "html", null, true);
                        yield "
                                                                                    ";
                        // line 515
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 515), "html", null, true);
                        yield "</h3>
                                                                                <p class=\"fs-14\">";
                        // line 516
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 516), "html", null, true);
                        yield "</p>
                                                                                <h3>";
                        // line 517
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 517), "html", null, true);
                        yield "
                                                                                    ";
                        // line 518
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 518), "metaValue", [], "any", false, false, false, 518), "html", null, true);
                        yield "</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 521
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 521)), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 522
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 522), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 523
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 523), "html", null, true);
                        yield "</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 527
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 527), "html", null, true);
                        yield "</span>
                                                                            </div>
                                                                        </div>
                                                                    ";
                    }
                    // line 531
                    yield "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 532
                yield "                                                            ";
            }
            // line 533
            yield "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 534
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en brouillon -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx5\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne5\" data-parent=\"#accordionEx5\"
                                               href=\"#collapseOne5\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne5\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-brouillon"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesBrouillonCount"]) || array_key_exists("annoncesBrouillonCount", $context) ? $context["annoncesBrouillonCount"] : (function () { throw new RuntimeError('Variable "annoncesBrouillonCount" does not exist.', 558, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne5\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne5\" data-parent=\"#accordionEx5\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 576
        if (((isset($context["annoncesBrouillonCount"]) || array_key_exists("annoncesBrouillonCount", $context) ? $context["annoncesBrouillonCount"] : (function () { throw new RuntimeError('Variable "annoncesBrouillonCount" does not exist.', 576, $this->source); })()) > 0)) {
            // line 577
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceBrouillon\">
                                                                ";
            // line 579
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_brouillon.html.twig", "profile/annonces.html.twig", 579)->unwrap()->yield($context);
            // line 580
            yield "                                                            </div>
                                                        ";
        }
        // line 582
        yield "                                                    </div>
                                                    <div id=\"paginateAnnoncesEnBrouillon\" class=\"col-md-12\">
                                                        ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesBrouillon"]) || array_key_exists("annoncesBrouillon", $context) ? $context["annoncesBrouillon"] : (function () { throw new RuntimeError('Variable "annoncesBrouillon" does not exist.', 584, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 585
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 587
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 587) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 587)) > 0)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 587) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 587), 0, [], "any", false, false, false, 587), "guid", [], "any", false, false, false, 587), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 587)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 587), 0, [], "any", false, false, false, 587))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 587), 0, [], "any", false, false, false, 587), "guid", [], "any", false, false, false, 587), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 589), "html", null, true);
            yield "
                                                                        ";
            // line 590
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 590), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 592
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 592, $this->source); })()), "request", [], "any", false, false, false, 592), "locale", [], "any", false, false, false, 592) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 592) != ""))) {
                // line 593
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 593), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 595
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 595), "html", null, true);
                yield "
                                                                        ";
            }
            // line 597
            yield "                                                                    </p>
                                                                    <h3>";
            // line 598
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 598), "html", null, true);
            yield "
                                                                        ";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 599), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 602)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 603), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 604), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 608)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 610)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 611)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 619)]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 625
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 625)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en moderation -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx6\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne6\" data-parent=\"#accordionEx6\"
                                               href=\"#collapseOne6\" aria-expanded=\"true\" aria-controls=\"collapseOne6\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-moderation"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesModerationCount"]) || array_key_exists("annoncesModerationCount", $context) ? $context["annoncesModerationCount"] : (function () { throw new RuntimeError('Variable "annoncesModerationCount" does not exist.', 659, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id=\"collapseOne6\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne6\" data-parent=\"#accordionEx6\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 676
        if (((isset($context["annoncesModerationCount"]) || array_key_exists("annoncesModerationCount", $context) ? $context["annoncesModerationCount"] : (function () { throw new RuntimeError('Variable "annoncesModerationCount" does not exist.', 676, $this->source); })()) > 0)) {
            // line 677
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceModeration\">
                                                                ";
            // line 679
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_moderation.html.twig", "profile/annonces.html.twig", 679)->unwrap()->yield($context);
            // line 680
            yield "                                                            </div>
                                                        ";
        }
        // line 682
        yield "                                                    </div>
                                                    <div id=\"paginateAnnoncesEnModeration\" class=\"col-md-12\">
                                                        ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesModeration"]) || array_key_exists("annoncesModeration", $context) ? $context["annoncesModeration"] : (function () { throw new RuntimeError('Variable "annoncesModeration" does not exist.', 684, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 685
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 687
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 687) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 687)) > 0)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 687) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 687), 0, [], "any", false, false, false, 687), "guid", [], "any", false, false, false, 687), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 687)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 687), 0, [], "any", false, false, false, 687))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 687), 0, [], "any", false, false, false, 687), "guid", [], "any", false, false, false, 687), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 689
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 689), "html", null, true);
            yield "
                                                                        ";
            // line 690
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 690), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 692
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 692, $this->source); })()), "request", [], "any", false, false, false, 692), "locale", [], "any", false, false, false, 692) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 692) != ""))) {
                // line 693
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 693), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 695
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 695), "html", null, true);
                yield "
                                                                        ";
            }
            // line 697
            yield "                                                                    </p>
                                                                    <h3>";
            // line 698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 698), "html", null, true);
            yield "
                                                                        ";
            // line 699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 699), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 702
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 702)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 703
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 703), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 704
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 704), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 708)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 710)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 711)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 716
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->
                                    </div>
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en rejetees -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx7\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne7\" data-parent=\"#accordionEx7\"
                                               href=\"#collapseOne7\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne7\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-rejetees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesRejeteesCount"]) || array_key_exists("annoncesRejeteesCount", $context) ? $context["annoncesRejeteesCount"] : (function () { throw new RuntimeError('Variable "annoncesRejeteesCount" does not exist.', 739, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne7\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne7\" data-parent=\"#accordionEx7\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 757
        if (((isset($context["annoncesRejeteesCount"]) || array_key_exists("annoncesRejeteesCount", $context) ? $context["annoncesRejeteesCount"] : (function () { throw new RuntimeError('Variable "annoncesRejeteesCount" does not exist.', 757, $this->source); })()) > 0)) {
            // line 758
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceRejetees\">
                                                                ";
            // line 760
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_rejetees.html.twig", "profile/annonces.html.twig", 760)->unwrap()->yield($context);
            // line 761
            yield "                                                            </div>
                                                        ";
        }
        // line 763
        yield "                                                    </div>
                                                    <div id=\"paginateAnnoncesRejetees\" class=\"col-md-12\">
                                                        ";
        // line 765
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesRejetees"]) || array_key_exists("annoncesRejetees", $context) ? $context["annoncesRejetees"] : (function () { throw new RuntimeError('Variable "annoncesRejetees" does not exist.', 765, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 766
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 768
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 768)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 768)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 768) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 768), 0, [], "any", false, false, false, 768), "guid", [], "any", false, false, false, 768), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 768)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 768), 0, [], "any", false, false, false, 768))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 768), 0, [], "any", false, false, false, 768), "guid", [], "any", false, false, false, 768), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 770
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 770), "html", null, true);
            yield "
                                                                        ";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 771), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 773
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 773, $this->source); })()), "request", [], "any", false, false, false, 773), "locale", [], "any", false, false, false, 773) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 773) != ""))) {
                // line 774
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 774), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 776
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 776), "html", null, true);
                yield "
                                                                        ";
            }
            // line 778
            yield "                                                                    </p>
                                                                    <h3>";
            // line 779
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 779), "html", null, true);
            yield "
                                                                        ";
            // line 780
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 780), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 783
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 783)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 784), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 785
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 785), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 789
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 789)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 791
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 791)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 792
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 792)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>

                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 801
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 801)]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 807
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 807)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces publiees -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx8\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne8\" data-parent=\"#accordionEx8\"
                                               href=\"#collapseOne8\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne8\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-publiees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesPublieesCount"]) || array_key_exists("annoncesPublieesCount", $context) ? $context["annoncesPublieesCount"] : (function () { throw new RuntimeError('Variable "annoncesPublieesCount" does not exist.', 841, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 847
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne8\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne8\" data-parent=\"#accordionEx8\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 859
        if (((isset($context["annoncesPublieesCount"]) || array_key_exists("annoncesPublieesCount", $context) ? $context["annoncesPublieesCount"] : (function () { throw new RuntimeError('Variable "annoncesPublieesCount" does not exist.', 859, $this->source); })()) > 0)) {
            // line 860
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnoncesPubliees\">
                                                                ";
            // line 862
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_publiees.html.twig", "profile/annonces.html.twig", 862)->unwrap()->yield($context);
            // line 863
            yield "                                                            </div>
                                                        ";
        }
        // line 865
        yield "                                                    </div>

                                                    <div id=\"paginateAnnoncesPubliees\" class=\"col-md-12\">
                                                        ";
        // line 868
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annoncesPubliees"]) || array_key_exists("annoncesPubliees", $context) ? $context["annoncesPubliees"] : (function () { throw new RuntimeError('Variable "annoncesPubliees" does not exist.', 868, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 869
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 871
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 871)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 871)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 871) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 871), 0, [], "any", false, false, false, 871), "guid", [], "any", false, false, false, 871), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 871)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 871), 0, [], "any", false, false, false, 871))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 871), 0, [], "any", false, false, false, 871), "guid", [], "any", false, false, false, 871), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 873), "html", null, true);
            yield "
                                                                        ";
            // line 874
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 874), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 876
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 876, $this->source); })()), "request", [], "any", false, false, false, 876), "locale", [], "any", false, false, false, 876) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 876) != ""))) {
                // line 877
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 877), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 879
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 879), "html", null, true);
                yield "
                                                                        ";
            }
            // line 881
            yield "                                                                    </p>
                                                                    <h3>";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 882), "html", null, true);
            yield "
                                                                        ";
            // line 883
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 883), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 886
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 886)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 887
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 887), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 888
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 888), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 892
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 892)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 894
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 894)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 895)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 903
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 903), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 909
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 909)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group mt-2\" role=\"group\"
                                                                                 aria-label=\"Thirth group\">
                                                                                ";
            // line 917
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 917)) > 8)) {
                // line 918
                yield "                                                                                    <a href=\"";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 918)) > 8)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 918)]), "html", null, true);
                }
                yield "\"
                                                                                       class=\"btn btn-bg-primary btn-sm \">
                                                                                        <i class=\"fas fa-eye\"></i>
                                                                                        ";
                // line 921
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.voir_annonce"), "html", null, true);
                yield "
                                                                                    </a>
                                                                                ";
            }
            // line 924
            yield "                                                                            </div>

                                                                            <div ";
            // line 926
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorieParentType", [], "any", false, false, false, 926) == "product_cat")) {
                yield "hidden";
            } else {
                yield "fa-minus";
            }
            // line 927
            yield "                                                                                 class=\"btn-group mt-2 ml-2\"
                                                                                 role=\"group\" aria-label=\"Thirth group\">
                                                                                <a id=\"mise_en_rupture\"
                                                                                   href=\"";
            // line 930
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 930)) > 8)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_rupture", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 930)]), "html", null, true);
            }
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm \">
                                                                                    <i class=\"fas ";
            // line 932
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 932) == 0)) {
                yield "fa-plus";
            } else {
                yield "fa-minus";
            }
            yield "\"></i>
                                                                                    ";
            // line 933
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 933) == 0)) {
                // line 934
                yield "                                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.produit_disponible"), "html", null, true);
                yield "
                                                                                    ";
            } else {
                // line 936
                yield "                                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.rupture"), "html", null, true);
                yield "
                                                                                    ";
            }
            // line 938
            yield "                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 945
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les devis en attente -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx9\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne9\" data-parent=\"#accordionEx9\"
                                               href=\"#collapseOne9\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne9\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 967
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 968
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devisEnAttenteCount"]) || array_key_exists("devisEnAttenteCount", $context) ? $context["devisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "devisEnAttenteCount" does not exist.', 968, $this->source); })()), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 974
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne9\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne9\" data-parent=\"#accordionEx9\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 986
        if (((isset($context["devisEnAttenteCount"]) || array_key_exists("devisEnAttenteCount", $context) ? $context["devisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "devisEnAttenteCount" does not exist.', 986, $this->source); })()) > 0)) {
            // line 987
            yield "                                                            <div class=\"col-md-12\" id=\"dynamicPaginationDevisEnAttente\">
                                                                ";
            // line 988
            yield from $this->loadTemplate("profile/partials/pagination_bloc_devis_attente.html.twig", "profile/annonces.html.twig", 988)->unwrap()->yield($context);
            // line 989
            yield "                                                            </div>
                                                        ";
        }
        // line 991
        yield "                                                    </div>
                                                    <div id=\"paginateDevisEnAttente\" class=\"col-md-12\">
                                                        ";
        // line 993
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["devisEnAttente"]) || array_key_exists("devisEnAttente", $context) ? $context["devisEnAttente"] : (function () { throw new RuntimeError('Variable "devisEnAttente" does not exist.', 993, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 994
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 996
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 996)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 996)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 996) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 996), 0, [], "any", false, false, false, 996), "guid", [], "any", false, false, false, 996), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 996)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 996), 0, [], "any", false, false, false, 996))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 996), 0, [], "any", false, false, false, 996), "guid", [], "any", false, false, false, 996), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>";
            // line 998
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1000
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 1000), "html", null, true);
            yield "</h4>
                                                                    <h4>";
            // line 1001
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1003
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 1003), "html", null, true);
            yield "</h4>
                                                                    ";
            // line 1005
            yield "                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>";
            // line 1007
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
            yield "
                                                                                :
                                                                                ";
            // line 1009
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 1009), "html", null, true);
            yield "
                                                                                ";
            // line 1010
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 1010), "html", null, true);
            yield "</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1015
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 1015), "html", null, true);
            yield "
                                                                        ";
            // line 1016
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 1016), "html", null, true);
            yield "</span>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 1026
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1026), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 1032
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1032)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1045
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les devis en brouillon -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx10\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne10\" data-parent=\"#accordionEx10\"
                                               href=\"#collapseOne10\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne10\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 1067
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-brouillon"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 1068
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devisEnBrouillonCount"]) || array_key_exists("devisEnBrouillonCount", $context) ? $context["devisEnBrouillonCount"] : (function () { throw new RuntimeError('Variable "devisEnBrouillonCount" does not exist.', 1068, $this->source); })()), "html", null, true);
        yield ")</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 1073
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne10\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne10\" data-parent=\"#accordionEx10\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 1085
        if (((isset($context["devisEnBrouillonCount"]) || array_key_exists("devisEnBrouillonCount", $context) ? $context["devisEnBrouillonCount"] : (function () { throw new RuntimeError('Variable "devisEnBrouillonCount" does not exist.', 1085, $this->source); })()) > 0)) {
            // line 1086
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationDevisEnBrouillon\">
                                                                ";
            // line 1088
            yield from $this->loadTemplate("profile/partials/pagination_bloc_devis_brouillon.html.twig", "profile/annonces.html.twig", 1088)->unwrap()->yield($context);
            // line 1089
            yield "                                                            </div>
                                                        ";
        }
        // line 1091
        yield "                                                    </div>
                                                    <div id=\"paginateDevisEnBrouillon\" class=\"col-md-12\">
                                                        ";
        // line 1093
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["devisEnBrouillon"]) || array_key_exists("devisEnBrouillon", $context) ? $context["devisEnBrouillon"] : (function () { throw new RuntimeError('Variable "devisEnBrouillon" does not exist.', 1093, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 1094
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 1096
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 1096)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 1096)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 1096) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 1096), 0, [], "any", false, false, false, 1096), "guid", [], "any", false, false, false, 1096), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 1096)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 1096), 0, [], "any", false, false, false, 1096))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 1096), 0, [], "any", false, false, false, 1096), "guid", [], "any", false, false, false, 1096), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>";
            // line 1098
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 1100), "html", null, true);
            yield "</h4>
                                                                    <h4>";
            // line 1101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 1103), "html", null, true);
            yield "</h4>
                                                                    ";
            // line 1105
            yield "                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>";
            // line 1107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
            yield "
                                                                                :
                                                                                ";
            // line 1109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 1109), "html", null, true);
            yield "
                                                                                ";
            // line 1110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 1110), "html", null, true);
            yield "</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 1115), "html", null, true);
            yield "
                                                                        ";
            // line 1116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 1116), "html", null, true);
            yield "</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 1126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1126), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 1132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1132)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1145
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin des modifs -->
                </div>
            </div>
            ";
        // line 1158
        yield from $this->loadTemplate("partials/project.html.twig", "profile/annonces.html.twig", 1158)->unwrap()->yield($context);
        // line 1159
        yield "            ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/annonces.html.twig", 1159)->unwrap()->yield($context);
        // line 1160
        yield "        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1166
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1171
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 1174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/img-picker/image-picker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.paginate.js"), "html", null, true);
        yield "\"></script>

    <script>
        var docWidth = document.documentElement.offsetWidth;
        [].forEach.call(document.querySelectorAll('*'), function (el) {
            if (el.offsetWidth > docWidth) {
                console.log(el);
            }
        });

        \$(function () {
            let text = `";
        // line 1189
        if ((isset($context["infos_bulle"]) || array_key_exists("infos_bulle", $context) ? $context["infos_bulle"] : (function () { throw new RuntimeError('Variable "infos_bulle" does not exist.', 1189, $this->source); })())) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["infos_bulle"]) || array_key_exists("infos_bulle", $context) ? $context["infos_bulle"] : (function () { throw new RuntimeError('Variable "infos_bulle" does not exist.', 1189, $this->source); })()), "optionValue", [], "any", false, false, false, 1189);
        }
        yield "`;
            \$('.popover_infos').data('content', text);
            \$('[data-toggle=\"popover\"]').popover();
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

        \$('#headingOne1').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne2').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne3').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne4').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne5').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne6').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne7').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne8').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne9').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne10').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#accordionEx1').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsEnCours').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsEnCours').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx2').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsDevisEnAttente').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsDevisEnAttente').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx3').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsTerminees').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsTerminees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx4').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateReservationsAnnulees').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsAnnulees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx5').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateAnnoncesEnBrouillon').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceBrouillon').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx6').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateAnnoncesEnModeration').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceModeration').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx7').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateAnnoncesRejetees').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceRejetees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx8').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateAnnoncesPubliees').html(data.html);
                    }
                    \$('#dynamicPaginationAnnoncesPubliees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx9').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data.pagination);
                    if (data.html) {
                        \$('#paginateDevisEnAttente').html(data.html);
                    }
                    \$('#dynamicPaginationDevisEnAttente').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx10').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateDevisEnBrouillon').html(data.html);
                    }
                    \$('#dynamicPaginationDevisEnBrouillon').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
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

        \$(document).on('change', '.souscategorie', function (e) {
            \$('.prestations').attr('name', \"next\");
            \$('.prestations').removeAttr('disabled');
        });
        \$(document).on('blur', '#addressePostale, #codePostale, #ville', function (e) {
            if (\$('#addressePostale').val() != '' && \$('#codePostale').val() != '' && \$('#ville').val() != '') {
                \$('.adresse').attr('name', \"next\");
                \$('.adresse').removeAttr('disabled');
            } else {
                \$('.adresse').attr('disabled', \"disabled\");
                \$('.adresse').attr('name', \"previous\");
            }

        });

        \$(document).on('blur', '#nom', function (e) {
            if (\$('#nom').val() != '') {
                \$('.nom').attr('name', \"next\");
                \$('.nom').removeAttr('disabled');
            } else {
                \$('.nom').attr('disabled', \"disabled\");
                \$('.nom').attr('name', \"previous\");
            }

        });

        \$(document).on('change', '#photos', function (e) {
            if (\$('#photos').val() != '') {
                \$('.portfolio').attr('name', \"next\");
                \$('.portfolio').removeAttr('disabled');
            } else {
                \$('.portfolio').attr('disabled', \"disabled\");
                \$('.portfolio').attr('name', \"previous\");
            }

        });
        \$(document).on('blur', '#prix', function (e) {
            if (\$('#devise').val() != '' && \$('#prix').val() != '') {
                \$('.devise').attr('name', \"next\");
                \$('.devise').removeAttr('disabled');
            } else {
                \$('.devise').attr('disabled', \"disabled\");
                \$('.devise').attr('name', \"previous\");
            }

        });


        \$(document).on('click', '.annuler-devis', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Annulation de la reservation\",
                text: \"";
        // line 1656
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
        // line 1676
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
        // line 1690
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
                            console.log(reponse);
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
        // Supprimer annonce
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
        };
    </script>
    ";
        // line 1768
        yield from $this->loadTemplate("profile/js/annulerCommande.js.twig", "profile/annonces.html.twig", 1768)->unwrap()->yield($context);
        // line 1769
        yield "    ";
        yield from $this->loadTemplate("profile/js/brouillonDevisAnnonce.html.twig", "profile/annonces.html.twig", 1769)->unwrap()->yield($context);
        // line 1770
        yield "    ";
        yield from $this->loadTemplate("profile/js/creerDevisAnnonce.html.twig", "profile/annonces.html.twig", 1770)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/annonces.html.twig";
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
        return array (  2980 => 1770,  2977 => 1769,  2975 => 1768,  2894 => 1690,  2877 => 1676,  2854 => 1656,  2382 => 1189,  2368 => 1178,  2364 => 1177,  2360 => 1176,  2356 => 1175,  2352 => 1174,  2345 => 1171,  2335 => 1170,  2323 => 1166,  2313 => 1165,  2303 => 1160,  2300 => 1159,  2298 => 1158,  2283 => 1145,  2264 => 1132,  2255 => 1126,  2242 => 1116,  2238 => 1115,  2230 => 1110,  2226 => 1109,  2221 => 1107,  2217 => 1105,  2213 => 1103,  2208 => 1101,  2204 => 1100,  2199 => 1098,  2190 => 1096,  2186 => 1094,  2182 => 1093,  2178 => 1091,  2174 => 1089,  2172 => 1088,  2168 => 1086,  2166 => 1085,  2151 => 1073,  2143 => 1068,  2139 => 1067,  2115 => 1045,  2096 => 1032,  2087 => 1026,  2074 => 1016,  2070 => 1015,  2062 => 1010,  2058 => 1009,  2053 => 1007,  2049 => 1005,  2045 => 1003,  2040 => 1001,  2036 => 1000,  2031 => 998,  2022 => 996,  2018 => 994,  2014 => 993,  2010 => 991,  2006 => 989,  2004 => 988,  2001 => 987,  1999 => 986,  1984 => 974,  1975 => 968,  1971 => 967,  1947 => 945,  1935 => 938,  1929 => 936,  1923 => 934,  1921 => 933,  1913 => 932,  1906 => 930,  1901 => 927,  1895 => 926,  1891 => 924,  1885 => 921,  1876 => 918,  1874 => 917,  1863 => 909,  1854 => 903,  1843 => 895,  1839 => 894,  1834 => 892,  1827 => 888,  1823 => 887,  1819 => 886,  1813 => 883,  1809 => 882,  1806 => 881,  1800 => 879,  1794 => 877,  1792 => 876,  1787 => 874,  1783 => 873,  1774 => 871,  1770 => 869,  1766 => 868,  1761 => 865,  1757 => 863,  1755 => 862,  1751 => 860,  1749 => 859,  1734 => 847,  1725 => 841,  1721 => 840,  1696 => 817,  1680 => 807,  1671 => 801,  1659 => 792,  1655 => 791,  1650 => 789,  1643 => 785,  1639 => 784,  1635 => 783,  1629 => 780,  1625 => 779,  1622 => 778,  1616 => 776,  1610 => 774,  1608 => 773,  1603 => 771,  1599 => 770,  1590 => 768,  1586 => 766,  1582 => 765,  1578 => 763,  1574 => 761,  1572 => 760,  1568 => 758,  1566 => 757,  1551 => 745,  1542 => 739,  1538 => 738,  1514 => 716,  1503 => 711,  1499 => 710,  1494 => 708,  1487 => 704,  1483 => 703,  1479 => 702,  1473 => 699,  1469 => 698,  1466 => 697,  1460 => 695,  1454 => 693,  1452 => 692,  1447 => 690,  1443 => 689,  1434 => 687,  1430 => 685,  1426 => 684,  1422 => 682,  1418 => 680,  1416 => 679,  1412 => 677,  1410 => 676,  1396 => 665,  1387 => 659,  1383 => 658,  1359 => 636,  1342 => 625,  1333 => 619,  1322 => 611,  1318 => 610,  1313 => 608,  1306 => 604,  1302 => 603,  1298 => 602,  1292 => 599,  1288 => 598,  1285 => 597,  1279 => 595,  1273 => 593,  1271 => 592,  1266 => 590,  1262 => 589,  1253 => 587,  1249 => 585,  1245 => 584,  1241 => 582,  1237 => 580,  1235 => 579,  1231 => 577,  1229 => 576,  1214 => 564,  1205 => 558,  1201 => 557,  1176 => 534,  1170 => 533,  1167 => 532,  1161 => 531,  1154 => 527,  1147 => 523,  1143 => 522,  1139 => 521,  1133 => 518,  1129 => 517,  1125 => 516,  1121 => 515,  1117 => 514,  1108 => 512,  1104 => 510,  1101 => 509,  1096 => 508,  1094 => 507,  1087 => 503,  1081 => 501,  1077 => 499,  1073 => 498,  1068 => 496,  1063 => 494,  1053 => 491,  1049 => 489,  1046 => 488,  1042 => 487,  1037 => 484,  1033 => 482,  1031 => 481,  1027 => 479,  1025 => 478,  1009 => 465,  1000 => 459,  996 => 458,  972 => 436,  966 => 435,  963 => 434,  957 => 433,  950 => 429,  943 => 425,  939 => 424,  935 => 423,  929 => 420,  925 => 419,  921 => 418,  917 => 417,  913 => 416,  904 => 414,  900 => 412,  897 => 411,  892 => 410,  890 => 409,  884 => 406,  880 => 405,  874 => 403,  870 => 401,  866 => 400,  862 => 399,  857 => 397,  848 => 395,  844 => 393,  841 => 392,  837 => 391,  832 => 388,  828 => 386,  826 => 385,  822 => 383,  820 => 382,  806 => 371,  797 => 365,  793 => 364,  768 => 341,  753 => 332,  749 => 331,  741 => 326,  737 => 325,  729 => 319,  721 => 313,  717 => 312,  709 => 307,  705 => 306,  700 => 304,  696 => 302,  692 => 300,  687 => 298,  683 => 297,  678 => 295,  669 => 293,  665 => 291,  661 => 290,  657 => 288,  653 => 286,  651 => 285,  647 => 283,  645 => 282,  630 => 270,  621 => 264,  617 => 263,  593 => 241,  587 => 240,  584 => 239,  578 => 238,  567 => 230,  562 => 228,  553 => 222,  547 => 221,  534 => 211,  527 => 207,  523 => 206,  519 => 205,  513 => 202,  509 => 201,  505 => 200,  501 => 199,  492 => 197,  488 => 195,  485 => 194,  480 => 193,  478 => 192,  465 => 182,  461 => 181,  453 => 175,  451 => 174,  447 => 172,  443 => 171,  437 => 169,  433 => 167,  429 => 166,  425 => 165,  420 => 163,  411 => 161,  407 => 159,  404 => 158,  400 => 157,  396 => 155,  392 => 153,  390 => 152,  386 => 150,  384 => 149,  369 => 137,  360 => 131,  356 => 130,  338 => 114,  336 => 113,  327 => 106,  325 => 105,  317 => 99,  307 => 98,  296 => 95,  286 => 94,  275 => 91,  265 => 90,  212 => 43,  207 => 41,  201 => 38,  197 => 37,  193 => 36,  189 => 35,  184 => 33,  180 => 32,  176 => 31,  172 => 30,  168 => 29,  164 => 28,  157 => 25,  147 => 24,  138 => 22,  128 => 21,  119 => 19,  109 => 18,  97 => 13,  92 => 11,  86 => 8,  81 => 6,  75 => 4,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'profileTemplate.html.twig' %}

{% block head %}
    {{ parent() }}

    <link rel=\"icon\" href=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png') }}\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png') }}\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png') }}\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png') }}\"/>
    <meta name=\"robots\" content=\"noindex\">

{% endblock %}

{% block title %}
    Trust &amp; Market | Profil Annonces
{% endblock %}
{% block  annonce %}
    active
{% endblock %}
{% block style %}
    {{ parent() }}

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" {{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">
    <link href=\"{{ asset('assets/css/custome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/img-picker/image-picker.css') }}\">
    <link href=\"{{ asset('assets/css/style-moderation.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery.paginate.css') }}\">
    <!-- file input fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/font/file-input-font/font/font-fileuploader.css') }}\" rel=\"stylesheet\">
    <!-- file input styles -->
    <link href=\"{{ asset('assets/css/file-input-css/jquery.fileuploader.min.css') }}\" media=\"all\" rel=\"stylesheet\">

    <style>
        .image_picker_image {
            width: 100px;
            height: 100px
        }

        .tox-statusbar__branding {
            display: none;
        }

        .btn-bg-primary {
            color: #fff;
            background: #f17b30 !important;
        }

        .btn-bg-primary:hover {
            color: #fff;
            background: #f4b279 !important;
        }

        .sub-msg {
            color: #212529;
            font-size: 11px;
        }

        span.fs-16 {
            font-family: 'Palanquin Dark', sans-serif;
            font-weight: 300;
        }

        @media (max-width: 575.98px) {
            main, .container {
                margin-top: 70px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container {
                margin-top: 100px;
            }
        }
    </style>
{% endblock %}


{% block header %}
    {{ parent() }}
{% endblock %}

{% block navigation %}
    {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container\">
                <div class=\"mt-2 pt-4\">
                    <!-- Modif des infos -->
                    <div id=\"modifInfo\">
                        {% include 'menuProfile.html.twig' %}
                        <div class=\"row\">
                            <div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                <strong></strong>
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            {% include 'annonces/sousMenuAnnonces.html.twig' %}
                            <div class=\"col-md-8 mb-2\">

                                <!--Accordion wrapper Pour les reservations en Cours-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx1\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx1\"
                                               href=\"#collapseOne1\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne1\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.reservations-en-cours'|trans }}
                                                {{ reservationsEnCoursCount }}
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx1\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if reservationsEnCoursCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsEnCours\">
                                                                {% include \"profile/partials/pagination_bloc_reservations_cours.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div id=\"paginateReservationsEnCours\" class=\"col-md-12\">
                                                        {% for a in reservationsEnCours %}
                                                            {% if a.pinged == \"devis\" %}
                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('{% if a.affiche %}{{ a.affiche }}{% else %}{{ asset('assets/images/empty_devis.jpg') }}{% endif %}')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">
                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-service'|trans }}
                                                                            :
                                                                            {{ a.post_title }}</h4>
                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-date'|trans }}
                                                                            :{{ a.date_evenement }}</h4>
                                                                        {# <p class=\"fs-14\">{{a.titre}}</p> #}
                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-prestataire'|trans }}
                                                                            :
                                                                            {{ a.prenom_prestataire }}
                                                                            {{ a.nom_prestataire }}</h4>
                                                                        {# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-map-marker\"></i> {{a.pays|country_name}}, {{a.etat}}, {{a.ville}}</span> <br> #}
                                                                        {# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-calendar\"></i> {{a.dates_devis}} </span> #}
                                                                        <div class=\"pt-4\">
                                                                            <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                                 aria-label=\"Toolbar with button groups\">
                                                                                <div class=\"btn-group mr-2\" role=\"group\"
                                                                                     aria-label=\"First group\">
                                                                                    <a class=\"btn btn btn-bg-primary btn-s annulerCommande\"
                                                                                       href=\"{{ path('profile_cancelledReservationAnnounce',{id:a.id, state:'edition'}) }}\">
                                                                                        {{ 'profil-utilisateur.annonces.annuler'|trans }}
                                                                                    </a>
                                                                                </div>
                                                                                <div class=\"btn-group ml-4 \"
                                                                                     role=\"group\"
                                                                                     aria-label=\"Thirth group\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {% elseif a.pinged == \"product\" %}
                                                                {% for s in a.annonces %}
                                                                    {% if s %}
                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('{% if s.gallery is defined and s.gallery|length > 0 and s.gallery != '' %}{{ s.gallery.0.guid }}{% else %}{{ s.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>{{ s.first_name }}
                                                                                    {{ s.last_name }}</h3>
                                                                                <p class=\"fs-14\">{{ s.post_title }}</p>
                                                                                <h3>{{ a.post_parent }} €</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.pays|country_name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.etat }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.ville }}</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.date_evenement }}</span>
                                                                                <div class=\"pt-4\">
                                                                                    <div class=\"btn-toolbar\"
                                                                                         role=\"toolbar\"
                                                                                         aria-label=\"Toolbar with button groups\">
                                                                                        <div class=\"btn-group mr-2\"
                                                                                             role=\"group\"
                                                                                             aria-label=\"First group\">
                                                                                            <a class=\"btn btn-bg-primary btn-sm\"
                                                                                               target=\"_blank\"
                                                                                               href=\"{% if s.slug|length > 8 %}{{ path('annonces_detailsAnnonce',{id:s.slug}) }}{% endif %}\">
                                                                                                {{ 'general.voir_annonce'|trans }}
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class=\"btn-group mr-2\"
                                                                                             role=\"group\"
                                                                                             aria-label=\"Second group\">
                                                                                            <a href=\"{{ path('profile_cancelledReservationAnnounce',{id:a.id}) }}\"
                                                                                               class=\"btn btn-bg-primary btn-sm editer annulerCommande\">
                                                                                                {{ 'profil-utilisateur.annonces.annuler'|trans }}
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endif %}
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservation-devis-en-attente-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\"
                                               href=\"#collapseOne2\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne2\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.reservation-devis-en-attente'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ reservationsDevisEnAttenteCount }})
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if reservationsDevisEnAttenteCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsDevisEnAttente\">
                                                                {% include \"profile/partials/pagination_bloc_reservations_devis_attente.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div id=\"paginateReservationsDevisEnAttente\" class=\"col-md-12\">
                                                        {% for a in reservationsDevisEnAttente %}
                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('{% if a.gallery|length > 0 and a.gallery and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>{{ 'profil-utilisateur.annonces.devis-service'|trans }}
                                                                        :
                                                                        {{ a.titre }}</h4>
                                                                    <h4>{{ 'profil-utilisateur.annonces.devis-date'|trans }}
                                                                        :
                                                                        {{ a.dates_devis }}</h4>
                                                                    {# <p class=\"fs-14\">{{a.titre}}</p> #}
                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>{{ 'profil-utilisateur.annonces.devis-prestataire'|trans }}
                                                                                :
                                                                                {{ a.prenom_prestataire }}
                                                                                {{ a.nom_prestataire }}</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.price }}
                                                                        {{ a.devise }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <br>

                                                                    {# <span class=\"texte-gris text-bold fs-14\"><i class=\"fas fa-calendar\"></i> {{a.dates_devis}} </span> #}
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn btn-bg-primary btn-s annuler-devis\"
                                                                                   href=\"{{ path('devis_annulerDevis',{id:a.id, state:'edition'}) }}\">
                                                                                    {{ 'profil-utilisateur.annonces.annuler'|trans }}
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"{{ path('devis_detailsDevis',{id:a.id}) }}\"
                                                                                   class=\"btn btn-bg-details-button btn-s\">{{ 'profil-utilisateur.annonces.voir-accepter'|trans }}</a>
                                                                            </div>
                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservations terminees-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx3\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne3\" data-parent=\"#accordionEx3\"
                                               href=\"#collapseOne3\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne3\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.reservations-terminees'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ reservationsTermineesCount }})
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id=\"collapseOne3\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne3\" data-parent=\"#accordionEx3\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if reservationsTermineesCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsTerminees\">
                                                                {% include \"profile/partials/pagination_bloc_reservations_terminees.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>

                                                    <div id=\"paginateReservationsTerminees\" class=\"col-md-12\">
                                                        {% for a in reservationsTerminees %}
                                                            {% if a.pinged == \"devis\" %}
                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('{% if a.affiche %}{{ a.affiche }}{% else %}{{ asset('assets/images/empty_devis.jpg') }}{% endif %}')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">
                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-service'|trans }}
                                                                            :
                                                                            {{ a.post_title }}</h4>
                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-date'|trans }}
                                                                            :{{ a.date_evenement }}</h4>
                                                                        {# <p class=\"fs-14\">{{a.titre}}</p> #}
                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-prestataire'|trans }}
                                                                            :
                                                                            {{ a.prenom_prestataire }}
                                                                            {{ a.nom_prestataire }}</h4>
                                                                    </div>
                                                                </div>
                                                            {% elseif a.pinged == \"product\" %}
                                                                {% for s in a.annonces %}
                                                                    {% if s %}
                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('{% if s.gallery|length > 0 and s.gallery is defined and s.gallery != '' %}{{ s.gallery.0.guid }}{% else %}{{ s.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>{{ s.first_name }}
                                                                                    {{ s.last_name }}</h3>
                                                                                <p class=\"fs-14\">{{ s.post_title }}</p>
                                                                                <h3>{{ a.post_parent }}
                                                                                    {{ s.devise.metaValue }}</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.pays|country_name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.etat }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.ville }}</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.date_evenement }}</span>
                                                                            </div>
                                                                        </div>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endif %}
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservations annules-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx4\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne4\" data-parent=\"#accordionEx4\"
                                               href=\"#collapseOne4\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne4\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.reservations-annulees'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ reservationsAnnuleesCount }})
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne4\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne4\" data-parent=\"#accordionEx4\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">

                                                    <div class=\"col-md-12 row\">
                                                        {% if reservationsAnnuleesCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsAnnulees\">
                                                                {% include \"profile/partials/pagination_bloc_reservations_annulees.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>

                                                    <div id=\"paginateReservationsAnnulees\" class=\"col-md-12\">
                                                        {% for a in reservationsAnnulees %}
                                                            {% if a.pinged == \"devis\" %}
                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('{% if a.affiche %}{{ a.affiche }}{% else %}{{ asset('assets/images/empty_devis.jpg') }}{% endif %}')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">

                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-service'|trans }}
                                                                            :
                                                                            {{ a.post_title }}</h4>

                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-date'|trans }}
                                                                            :{{ a.date_evenement }}</h4>
                                                                        {# <p class=\"fs-14\">{{a.titre}}</p> #}
                                                                        <h4>{{ 'profil-utilisateur.annonces.devis-prestataire'|trans }}
                                                                            :
                                                                            {{ a.post_mime_type }}</h4>
                                                                    </div>
                                                                </div>

                                                            {% elseif a.pinged == \"product\" and a.annonces %}
                                                                {% for s in a.annonces %}
                                                                    {% if s %}
                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('{% if s.gallery|length > 0 and s.gallery is defined and s.gallery != '' %}{{ s.gallery.0.guid }}{% else %}{{ s.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>{{ s.first_name }}
                                                                                    {{ s.last_name }}</h3>
                                                                                <p class=\"fs-14\">{{ s.post_title }}</p>
                                                                                <h3>{{ a.post_parent }}
                                                                                    {{ s.devise.metaValue }}</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.pays|country_name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.etat }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.ville }}</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.date_evenement }}</span>
                                                                            </div>
                                                                        </div>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endif %}
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en brouillon -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx5\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne5\" data-parent=\"#accordionEx5\"
                                               href=\"#collapseOne5\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne5\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.annonces-en-brouillon'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ annoncesBrouillonCount }})
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne5\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne5\" data-parent=\"#accordionEx5\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if annoncesBrouillonCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceBrouillon\">
                                                                {% include \"profile/partials/pagination_bloc_annonces_brouillon.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div id=\"paginateAnnoncesEnBrouillon\" class=\"col-md-12\">
                                                        {% for a in annoncesBrouillon %}
                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('{% if a.gallery is defined and a.gallery|length > 0 and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>{{ a.first_name }}
                                                                        {{ a.last_name }}</h3>
                                                                    <p class=\"fs-14\">
                                                                        {% if app.request.locale == 'en' and a.titre_en != '' %}
                                                                            {{ a.titre_en }}
                                                                        {% else %}
                                                                            {{ a.titre }}
                                                                        {% endif %}
                                                                    </p>
                                                                    <h3>{{ a.price }}
                                                                        {{ a.devise }}</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.pays|country_name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.etat }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.ville }}</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|first }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|last }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{ a.calendrier|length }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"{{ path('profile_EditDraftAnnounce',{id:a.id}) }}\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"{{ path('profile_deleteDraftAnnounce',{id:a.id}) }}\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en moderation -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx6\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne6\" data-parent=\"#accordionEx6\"
                                               href=\"#collapseOne6\" aria-expanded=\"true\" aria-controls=\"collapseOne6\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.annonces-en-moderation'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{ annoncesModerationCount }})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id=\"collapseOne6\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne6\" data-parent=\"#accordionEx6\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if annoncesModerationCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceModeration\">
                                                                {% include \"profile/partials/pagination_bloc_annonces_moderation.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div id=\"paginateAnnoncesEnModeration\" class=\"col-md-12\">
                                                        {% for a in annoncesModeration %}
                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('{% if a.gallery is defined and a.gallery|length > 0 and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>{{ a.first_name }}
                                                                        {{ a.last_name }}</h3>
                                                                    <p class=\"fs-14\">
                                                                        {% if app.request.locale == 'en' and a.titre_en != '' %}
                                                                            {{ a.titre_en }}
                                                                        {% else %}
                                                                            {{ a.titre }}
                                                                        {% endif %}
                                                                    </p>
                                                                    <h3>{{ a.price }}
                                                                        {{ a.devise }}</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.pays|country_name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.etat }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.ville }}</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|first }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|last }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{ a.calendrier|length }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->
                                    </div>
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en rejetees -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx7\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne7\" data-parent=\"#accordionEx7\"
                                               href=\"#collapseOne7\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne7\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.annonces-rejetees'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ annoncesRejeteesCount }})
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne7\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne7\" data-parent=\"#accordionEx7\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if annoncesRejeteesCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceRejetees\">
                                                                {% include \"profile/partials/pagination_bloc_annonces_rejetees.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div id=\"paginateAnnoncesRejetees\" class=\"col-md-12\">
                                                        {% for a in annoncesRejetees %}
                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>{{ a.first_name }}
                                                                        {{ a.last_name }}</h3>
                                                                    <p class=\"fs-14\">
                                                                        {% if app.request.locale == 'en' and a.titre_en != '' %}
                                                                            {{ a.titre_en }}
                                                                        {% else %}
                                                                            {{ a.titre }}
                                                                        {% endif %}
                                                                    </p>
                                                                    <h3>{{ a.price }}
                                                                        {{ a.devise }}</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.pays|country_name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.etat }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.ville }}</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|first }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|last }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{ a.calendrier|length }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>

                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"{{ path('profile_EditDraftAnnounce',{id:a.id}) }}\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"{{ path('profile_deleteDraftAnnounce',{id:a.id}) }}\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces publiees -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx8\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne8\" data-parent=\"#accordionEx8\"
                                               href=\"#collapseOne8\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne8\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.annonces-publiees'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ annoncesPublieesCount }})
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne8\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne8\" data-parent=\"#accordionEx8\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if annoncesPublieesCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnoncesPubliees\">
                                                                {% include \"profile/partials/pagination_bloc_annonces_publiees.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>

                                                    <div id=\"paginateAnnoncesPubliees\" class=\"col-md-12\">
                                                        {% for a in annoncesPubliees %}
                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>{{ a.first_name }}
                                                                        {{ a.last_name }}</h3>
                                                                    <p class=\"fs-14\">
                                                                        {% if app.request.locale == 'en' and a.titre_en != '' %}
                                                                            {{ a.titre_en }}
                                                                        {% else %}
                                                                            {{ a.titre }}
                                                                        {% endif %}
                                                                    </p>
                                                                    <h3>{{ a.price }}
                                                                        {{ a.devise }}</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.pays|country_name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.etat }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.ville }}</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|first }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.calendrier|last }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t({{ a.calendrier|length }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"{{ path('profile_EditDraftAnnounce',{id:a.id, state:'edition'}) }}\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"{{ path('profile_deleteDraftAnnounce',{id:a.id}) }}\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group mt-2\" role=\"group\"
                                                                                 aria-label=\"Thirth group\">
                                                                                {% if a.slug|length > 8 %}
                                                                                    <a href=\"{% if a.slug|length > 8 %}{{ path('annonces_detailsAnnonce',{id:a.slug}) }}{% endif %}\"
                                                                                       class=\"btn btn-bg-primary btn-sm \">
                                                                                        <i class=\"fas fa-eye\"></i>
                                                                                        {{ 'general.voir_annonce'|trans }}
                                                                                    </a>
                                                                                {% endif %}
                                                                            </div>

                                                                            <div {% if a.categorieParentType == 'product_cat' %}hidden{% else %}fa-minus{% endif %}
                                                                                 class=\"btn-group mt-2 ml-2\"
                                                                                 role=\"group\" aria-label=\"Thirth group\">
                                                                                <a id=\"mise_en_rupture\"
                                                                                   href=\"{% if a.slug|length > 8 %}{{ path('annonces_rupture',{slug:a.slug}) }}{% endif %}\"
                                                                                   class=\"btn btn-bg-primary btn-sm \">
                                                                                    <i class=\"fas {% if a.rupture == 0 %}fa-plus{% else %}fa-minus{% endif %}\"></i>
                                                                                    {% if a.rupture == 0 %}
                                                                                        {{ 'general.produit_disponible'|trans }}
                                                                                    {% else %}
                                                                                        {{ 'general.rupture'|trans }}
                                                                                    {% endif %}
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les devis en attente -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx9\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne9\" data-parent=\"#accordionEx9\"
                                               href=\"#collapseOne9\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne9\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.devis-en-attente'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ devisEnAttenteCount }})
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne9\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne9\" data-parent=\"#accordionEx9\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if devisEnAttenteCount > 0 %}
                                                            <div class=\"col-md-12\" id=\"dynamicPaginationDevisEnAttente\">
                                                                {% include \"profile/partials/pagination_bloc_devis_attente.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div id=\"paginateDevisEnAttente\" class=\"col-md-12\">
                                                        {% for a in devisEnAttente %}
                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>{{ 'profil-utilisateur.annonces.devis-service'|trans }}
                                                                        :
                                                                        {{ a.titre }}</h4>
                                                                    <h4>{{ 'profil-utilisateur.annonces.devis-date'|trans }}
                                                                        :
                                                                        {{ a.dates_devis }}</h4>
                                                                    {# <p class=\"fs-14\">{{a.titre}}</p> #}
                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>{{ 'profil-utilisateur.annonces.devis-prestataire'|trans }}
                                                                                :
                                                                                {{ a.first_name }}
                                                                                {{ a.last_name }}</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.price }}
                                                                        {{ a.devise }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"{{ path('profile_EditDraftAnnounce',{id:a.id, state:'edition'}) }}\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"{{ path('profile_deleteDraftAnnounce',{id:a.id}) }}\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les devis en brouillon -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx10\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne10\" data-parent=\"#accordionEx10\"
                                               href=\"#collapseOne10\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne10\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">{{ 'profil-utilisateur.annonces.devis-en-brouillon'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t({{ devisEnBrouillonCount }})</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            {{ 'profil-utilisateur.annonces.message-en-attente'|trans }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne10\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne10\" data-parent=\"#accordionEx10\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        {% if devisEnBrouillonCount > 0 %}
                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationDevisEnBrouillon\">
                                                                {% include \"profile/partials/pagination_bloc_devis_brouillon.html.twig\" %}
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div id=\"paginateDevisEnBrouillon\" class=\"col-md-12\">
                                                        {% for a in devisEnBrouillon %}
                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('{% if a.gallery|length > 0 and a.gallery is defined and a.gallery != '' %}{{ a.gallery.0.guid }}{% elseif a.images_secondaires|length > 0 and a.images_secondaires.0 %}{{ a.images_secondaires.0.guid }}{% endif %}')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>{{ 'profil-utilisateur.annonces.devis-service'|trans }}
                                                                        :
                                                                        {{ a.titre }}</h4>
                                                                    <h4>{{ 'profil-utilisateur.annonces.devis-date'|trans }}
                                                                        :
                                                                        {{ a.dates_devis }}</h4>
                                                                    {# <p class=\"fs-14\">{{a.titre}}</p> #}
                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>{{ 'profil-utilisateur.annonces.devis-prestataire'|trans }}
                                                                                :
                                                                                {{ a.first_name }}
                                                                                {{ a.last_name }}</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ a.price }}
                                                                        {{ a.devise }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"{{ path('profile_EditDraftAnnounce',{id:a.id, state:'edition'}) }}\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"{{ path('profile_deleteDraftAnnounce',{id:a.id}) }}\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin des modifs -->
                </div>
            </div>
            {% include(\"partials/project.html.twig\") %}
            {% include(\"partials/otherPagesVideoModal.html.twig\") %}
        </main>
    </div>
{% endblock %}


{% block footer %}
    {{ parent() }}

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- jQuery plugin for datepicker -->
    <script src=\"{{ asset('assets/js/gijgo-js/gijgo.min.2.js') }}\"></script>
    <script src=\"{{ asset('assets/js/img-picker/image-picker.min.js') }}\"></script>
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.paginate.js') }}\"></script>

    <script>
        var docWidth = document.documentElement.offsetWidth;
        [].forEach.call(document.querySelectorAll('*'), function (el) {
            if (el.offsetWidth > docWidth) {
                console.log(el);
            }
        });

        \$(function () {
            let text = `{% if infos_bulle %}{{ infos_bulle.optionValue|raw }}{% endif %}`;
            \$('.popover_infos').data('content', text);
            \$('[data-toggle=\"popover\"]').popover();
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

        \$('#headingOne1').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne2').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne3').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne4').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne5').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne6').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne7').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne8').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne9').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne10').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#accordionEx1').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsEnCours').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsEnCours').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx2').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsDevisEnAttente').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsDevisEnAttente').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx3').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsTerminees').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsTerminees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx4').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateReservationsAnnulees').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsAnnulees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx5').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateAnnoncesEnBrouillon').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceBrouillon').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx6').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateAnnoncesEnModeration').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceModeration').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx7').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateAnnoncesRejetees').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceRejetees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx8').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateAnnoncesPubliees').html(data.html);
                    }
                    \$('#dynamicPaginationAnnoncesPubliees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx9').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data.pagination);
                    if (data.html) {
                        \$('#paginateDevisEnAttente').html(data.html);
                    }
                    \$('#dynamicPaginationDevisEnAttente').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx10').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateDevisEnBrouillon').html(data.html);
                    }
                    \$('#dynamicPaginationDevisEnBrouillon').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
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

        \$(document).on('change', '.souscategorie', function (e) {
            \$('.prestations').attr('name', \"next\");
            \$('.prestations').removeAttr('disabled');
        });
        \$(document).on('blur', '#addressePostale, #codePostale, #ville', function (e) {
            if (\$('#addressePostale').val() != '' && \$('#codePostale').val() != '' && \$('#ville').val() != '') {
                \$('.adresse').attr('name', \"next\");
                \$('.adresse').removeAttr('disabled');
            } else {
                \$('.adresse').attr('disabled', \"disabled\");
                \$('.adresse').attr('name', \"previous\");
            }

        });

        \$(document).on('blur', '#nom', function (e) {
            if (\$('#nom').val() != '') {
                \$('.nom').attr('name', \"next\");
                \$('.nom').removeAttr('disabled');
            } else {
                \$('.nom').attr('disabled', \"disabled\");
                \$('.nom').attr('name', \"previous\");
            }

        });

        \$(document).on('change', '#photos', function (e) {
            if (\$('#photos').val() != '') {
                \$('.portfolio').attr('name', \"next\");
                \$('.portfolio').removeAttr('disabled');
            } else {
                \$('.portfolio').attr('disabled', \"disabled\");
                \$('.portfolio').attr('name', \"previous\");
            }

        });
        \$(document).on('blur', '#prix', function (e) {
            if (\$('#devise').val() != '' && \$('#prix').val() != '') {
                \$('.devise').attr('name', \"next\");
                \$('.devise').removeAttr('disabled');
            } else {
                \$('.devise').attr('disabled', \"disabled\");
                \$('.devise').attr('name', \"previous\");
            }

        });


        \$(document).on('click', '.annuler-devis', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Annulation de la reservation\",
                text: \"{{ 'commande.annuler.confirmer_annulation'|trans }}\",

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

                                swal(\"{{ 'commande.annuler.succes'|trans }}\", \"\", \"success\");

                                window.setTimeout(function () {
                                    window.location = \"\";
                                }, 1000);
                                t.parents('li').hide();
                            } else {

                                swal(\"commande.annuler.erreur'|trans}}\", \"\", \"error\");


                            }
                        },
                        error: function (reponse) {
                            swal(\"{{ 'commande.annuler.erreur'|trans }}\", \"\", \"error\");


                        }

                    });

                } else {
                    swal.close();
                }
            });
            return false;
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
                            console.log(reponse);
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
        // Supprimer annonce
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
        };
    </script>
    {% include(\"profile/js/annulerCommande.js.twig\") %}
    {% include(\"profile/js/brouillonDevisAnnonce.html.twig\") %}
    {% include(\"profile/js/creerDevisAnnonce.html.twig\") %}
{% endblock %}
", "profile/annonces.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/annonces.html.twig");
    }
}
