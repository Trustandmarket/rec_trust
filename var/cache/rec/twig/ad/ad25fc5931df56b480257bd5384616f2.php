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

/* profile/dashboard.html.twig */
class __TwigTemplate_854f2f5c91160ba2af64611ea6959d12 extends Template
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
        return "profileTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/dashboard.html.twig", 1);
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
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
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

        yield "Trust &amp; Market | Profil Tableau de bord";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 21
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>

    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-profile.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-dashboarduser.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">


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

        .custome-text {
            font-size: 18px;
            font-family: 'Palanquin', sans-serif;
        }

        .card-text {
            font-size: 16px;
            font-family: 'Palanquin', sans-serif;
        }

        .card-title {
            color: inherit;
        }

        a, .card-block {
            color: inherit;
        }

        strong {
            font-weight: bold;
        }

        .card {
            border: 1px solid #9e9e9e;
            border-color: #ff7e10;
            margin-bottom: 2rem;
            min-height: 172px;
        }
        .menu_item{
            display: flex;
            flex:1 0 auto;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
        }

        .modal-title{
            font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            text-align: center;
        }

        .modal-content{
            border-radius: 5px;
        }

        .modal-body{
            width: 95%;
            margin: auto;
        }

        .modal-footer{
            display: block;
        }

        .modal-footer .btn-warning{
            float: left;
            background-color: #262626 !important;
        }

        .modal-footer .btn-primary{
            float: right;
        }

        .flex-fill {
            min-height: 50vh;
        }
        /* Extra small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            main, .container{
                margin-top: 70px;
            }

            .center {
                width: 85%;
            }
            .custome-text. {
                font-size: 16px;
            }

            .card-text {
                font-size: 14px;
            }
        }
        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container{
                margin-top: 100px;
            }

            .center {
                width: 60%;
            }
            .custome-text {
                font-size: 16px !important;
            }

            .card-text {
                font-size: 14px;
            }
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 163
        yield "
    ";
        // line 164
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 168
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

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 171
        yield "    ";
        // line 172
        yield "    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container py-4\">
                <h1 class=\"custom-title\">Compte</h1>
                <p class=\"custome-text mt-2\">Bonjour <strong>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new RuntimeError('Variable "user_name" does not exist.', 176, $this->source); })()), "html", null, true);
        yield "</strong>, bienvenue dans votre profil <strong>";
        if ((CoreExtension::inFilter("ROLE_SOCIETE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "roles", [], "any", false, false, false, 176)) || CoreExtension::inFilter("ROLE_AUTO_ENTREPRENEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "roles", [], "any", false, false, false, 176)))) {
            yield "professionnel";
        } else {
            yield "abonné";
        }
        yield "</strong>.
                    <strong><a href=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177), "id", [], "any", false, false, false, 177)]), "html", null, true);
        yield "\" target=\"_blank\">Visualisez votre profil</a></strong></p>
                <div class=\"row menu_item\">
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"";
        // line 182
        if ((CoreExtension::inFilter("ROLE_SOCIETE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182), "roles", [], "any", false, false, false, 182)) || CoreExtension::inFilter("ROLE_AUTO_ENTREPRENEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182), "roles", [], "any", false, false, false, 182)))) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_profile");
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home_profil");
        }
        yield "\">
                                <h4 class=\"card-title\">Profil et informations personnelles</h4>
                                <p class=\"card-text mt-2\">Renseignez vos informations personnelles pour nous aider a
                                    vous connaitre.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annonces");
        yield "\">
                                <h4 class=\"card-title\">Annonces</h4>
                                <p class=\"card-text mt-2\">Retrouvez ici vos prestations réservées et/ou celles que vous proposez.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"";
        // line 201
        if (CoreExtension::inFilter("ROLE_ABONNE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "roles", [], "any", false, false, false, 201))) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_fournisseursAbonne");
        } else {
            // line 202
            yield "                ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_fournisseurs");
        }
        yield "\">
                                <h4 class=\"card-title\">Fournisseur de services</h4>
                                <p class=\"card-text mt-2\">Vous etes ou devenez professionnel et renseignez vos
                                    informations professionnelles.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_parameters");
        yield "\">
                                <h3 class=\"card-title\">Paramètres</h3>
                                <p class=\"card-text mt-2\">Notifications, historiques de transactions... Paramétrez
                                    ici votre profil en toute simplicité.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experiences_liste_experience");
        yield "\">
                                <h4 class=\"card-title\">Mes expériences</h4>
                                <p class=\"card-text mt-2\">Retrouvez ici vos différentes expériences crées sur Trust
                                    & market.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\" href=\"";
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement");
        yield "\">
                                <h4 class=\"card-title\">Mes abonnements</h4>
                                <p class=\"card-text mt-2\">Retrouvez ici vos abonnements et vos informations de
                                    facturation.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"center mt-2 small\">
                    <p>Vous souhaitez supprimer votre profil et toutes <br>ses données?</p>
                    <a style=\"font-weight: bold\" id=\"deleteProfile\" data-toggle=\"modal\" data-target=\"#deleteTarget\" href=\"\">Supprimer mon profil</a>
                </div>
                <div class=\"modal fade right\" id=\"deleteTarget\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteTarget\"
                     aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"row\">
                                <div class=\"col-md-6 px-0\" style=\"background-size: cover\">
                                    <img src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/modal/img-log.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\"
                                         style=\"width: fit-content\">
                                </div>
                                <div class=\"col-md-6 px-0 right-section-modal\">
                                    <div class=\"modal-header border-bottom-0\">
                                        <h5 class=\"modal-title\" id=\"exampleModalPreviewLabel\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.effacer-compte"), "html", null, true);
        yield "</h5>
                                    </div>
                                    <div class=\"modal-body\"
                                         style='padding-left: 1rem;padding-right: 1rem; padding-top: 0rem; padding-bottom: 0rem;'>
                                        <div class=\"effacer-definitivement\">
                                            <div>
                                                <input type=\"checkbox\" id=\"horns\" name=\"horns\"/>
                                            </div>
                                            <div>
                                                <label for=\"horns\">";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.effacer-compte-donnees"), "html", null, true);
        yield "</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer border-top-0 pb-0\">
                                        <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Basic example\">
                                            <button type=\"button\" class=\"btn btn-lg firstletter-capital logout-no\"
                                                    data-dismiss=\"modal\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.non"), "html", null, true);
        yield "</button>
                                            <button type=\"button\"
                                                    class=\"btn btn-lg btn-primary firstletter-capital logout-yes delete_port2\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.oui"), "html", null, true);
        yield "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Modal -->
                <input id=\"hornsUrlDelete\" hidden value=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_profil", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "user", [], "any", false, false, false, 280), "id", [], "any", false, false, false, 280)]), "html", null, true);
        yield "\"/>
                <input id=\"hornsUrlDeleteAll\" hidden value=\"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_profil_all", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281), "id", [], "any", false, false, false, 281)]), "html", null, true);
        yield "\"/>
                ";
        // line 282
        yield from $this->loadTemplate("partials/videoButton.html.twig", "profile/dashboard.html.twig", 282)->unwrap()->yield($context);
        // line 283
        yield "                ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/dashboard.html.twig", 283)->unwrap()->yield($context);
        // line 284
        yield "        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 290
        yield "        ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 295
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

        <!-- jQuery plugin for datepicker -->
        <script src=\"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>


        <script>
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
// first thing turn Hide Menu Search bar
                \$(\"#searchMenu\").hide();
// toggle menu search bar on/off
                \$(\"#searchMenuShowHide\").click(function () {
                    \$(\"#searchMenu\").toggle(\"slide\");
                });

                \$(document).on('click', '.delete_port2', function (e) {
                    let urlPath = '';
                    e.preventDefault();
                    toastr.info(\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.en-cours"), "html", null, true);
        yield "\");
                    if (\$('#horns:checkbox:checked').length > 0) {
                        urlPath = \$(\"#hornsUrlDeleteAll\").val();
                    } else {
                        urlPath = \$(\"#hornsUrlDelete\").val();
                    }
                    \$.ajax({
                        url: urlPath,
                        type: 'GET',
                        success: function (response) {
                            if (response > 0) {
                                toastr.clear();
                                toastr.success(\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.succes"), "html", null, true);
        yield "\");
                                window.setTimeout(function () {
                                    window.location = \"\";
                                }, 200);
                            }
                        },
                        error: function (response) {
                            toastr.clear();
                            toastr.error(\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.error"), "html", null, true);
        yield "\");
                        }
                    });
                });

            });
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
        return "profile/dashboard.html.twig";
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
        return array (  638 => 345,  627 => 337,  612 => 325,  583 => 299,  579 => 298,  572 => 295,  562 => 294,  550 => 290,  540 => 289,  530 => 284,  527 => 283,  525 => 282,  521 => 281,  517 => 280,  506 => 272,  501 => 270,  491 => 263,  479 => 254,  471 => 249,  450 => 231,  438 => 222,  425 => 212,  410 => 202,  406 => 201,  394 => 192,  377 => 182,  369 => 177,  359 => 176,  353 => 172,  351 => 171,  341 => 170,  325 => 168,  314 => 164,  311 => 163,  301 => 162,  164 => 31,  160 => 30,  156 => 29,  152 => 28,  148 => 27,  142 => 24,  135 => 21,  125 => 20,  108 => 18,  96 => 13,  91 => 11,  85 => 8,  80 => 6,  74 => 4,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'profileTemplate.html.twig' %}

{% block head %}
    {{ parent() }}

    <link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png')) }}\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png')) }}\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png')) }}\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\"/>
    <meta name=\"robots\" content=\"noindex\">

{% endblock %}

{% block title %}Trust &amp; Market | Profil Tableau de bord{% endblock %}

{% block style %}
    {{ parent() }}

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" {{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>

    <link href=\"{{ preload(asset('assets/css/custome.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ preload(asset('assets/css/style-profile.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ preload(asset('assets/css/style-dashboarduser.css')) }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">


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

        .custome-text {
            font-size: 18px;
            font-family: 'Palanquin', sans-serif;
        }

        .card-text {
            font-size: 16px;
            font-family: 'Palanquin', sans-serif;
        }

        .card-title {
            color: inherit;
        }

        a, .card-block {
            color: inherit;
        }

        strong {
            font-weight: bold;
        }

        .card {
            border: 1px solid #9e9e9e;
            border-color: #ff7e10;
            margin-bottom: 2rem;
            min-height: 172px;
        }
        .menu_item{
            display: flex;
            flex:1 0 auto;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
        }

        .modal-title{
            font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            text-align: center;
        }

        .modal-content{
            border-radius: 5px;
        }

        .modal-body{
            width: 95%;
            margin: auto;
        }

        .modal-footer{
            display: block;
        }

        .modal-footer .btn-warning{
            float: left;
            background-color: #262626 !important;
        }

        .modal-footer .btn-primary{
            float: right;
        }

        .flex-fill {
            min-height: 50vh;
        }
        /* Extra small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            main, .container{
                margin-top: 70px;
            }

            .center {
                width: 85%;
            }
            .custome-text. {
                font-size: 16px;
            }

            .card-text {
                font-size: 14px;
            }
        }
        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container{
                margin-top: 100px;
            }

            .center {
                width: 60%;
            }
            .custome-text {
                font-size: 16px !important;
            }

            .card-text {
                font-size: 14px;
            }
        }

    </style>
{% endblock %}


{% block header %}

    {{ parent() }}

{% endblock %}

{% block navigation %}{% endblock %}

{% block body %}
    {# <div id=\"trustBody\" class=\"container\"> #}
    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container py-4\">
                <h1 class=\"custom-title\">Compte</h1>
                <p class=\"custome-text mt-2\">Bonjour <strong>{{ user_name }}</strong>, bienvenue dans votre profil <strong>{% if  'ROLE_SOCIETE' in app.user.roles or 'ROLE_AUTO_ENTREPRENEUR' in app.user.roles %}professionnel{% else %}abonné{% endif %}</strong>.
                    <strong><a href=\"{{ path('profile_detailsProfessionnel', {'id': app.user.id}) }}\" target=\"_blank\">Visualisez votre profil</a></strong></p>
                <div class=\"row menu_item\">
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"{% if  'ROLE_SOCIETE' in app.user.roles or 'ROLE_AUTO_ENTREPRENEUR' in app.user.roles %}{{ path('profile_profile') }}{% else %}{{ path('profile_home_profil') }}{% endif %}\">
                                <h4 class=\"card-title\">Profil et informations personnelles</h4>
                                <p class=\"card-text mt-2\">Renseignez vos informations personnelles pour nous aider a
                                    vous connaitre.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"{{ path('profile_annonces' ) }}\">
                                <h4 class=\"card-title\">Annonces</h4>
                                <p class=\"card-text mt-2\">Retrouvez ici vos prestations réservées et/ou celles que vous proposez.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"{% if'ROLE_ABONNE' in app.user.roles %}{{ path('profile_fournisseursAbonne') }}{% else %}
                {{ path('profile_fournisseurs') }}{% endif %}\">
                                <h4 class=\"card-title\">Fournisseur de services</h4>
                                <p class=\"card-text mt-2\">Vous etes ou devenez professionnel et renseignez vos
                                    informations professionnelles.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"{{ path('profile_parameters' ) }}\">
                                <h3 class=\"card-title\">Paramètres</h3>
                                <p class=\"card-text mt-2\">Notifications, historiques de transactions... Paramétrez
                                    ici votre profil en toute simplicité.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\"
                               href=\"{{ path('experiences_liste_experience' ) }}\">
                                <h4 class=\"card-title\">Mes expériences</h4>
                                <p class=\"card-text mt-2\">Retrouvez ici vos différentes expériences crées sur Trust
                                    & market.</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-sm-6 col-lg-4\">
                        <div class=\"card px-2 py-4\">
                            <a class=\"card-block stretched-link text-decoration-none\" href=\"{{ path('app_abonnement') }}\">
                                <h4 class=\"card-title\">Mes abonnements</h4>
                                <p class=\"card-text mt-2\">Retrouvez ici vos abonnements et vos informations de
                                    facturation.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"center mt-2 small\">
                    <p>Vous souhaitez supprimer votre profil et toutes <br>ses données?</p>
                    <a style=\"font-weight: bold\" id=\"deleteProfile\" data-toggle=\"modal\" data-target=\"#deleteTarget\" href=\"\">Supprimer mon profil</a>
                </div>
                <div class=\"modal fade right\" id=\"deleteTarget\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteTarget\"
                     aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"row\">
                                <div class=\"col-md-6 px-0\" style=\"background-size: cover\">
                                    <img src=\"{{ asset('assets/img/modal/img-log.png') }}\" alt=\"\" class=\"img-fluid\"
                                         style=\"width: fit-content\">
                                </div>
                                <div class=\"col-md-6 px-0 right-section-modal\">
                                    <div class=\"modal-header border-bottom-0\">
                                        <h5 class=\"modal-title\" id=\"exampleModalPreviewLabel\">{{ 'profil-utilisateur.liens.effacer-compte'|trans }}</h5>
                                    </div>
                                    <div class=\"modal-body\"
                                         style='padding-left: 1rem;padding-right: 1rem; padding-top: 0rem; padding-bottom: 0rem;'>
                                        <div class=\"effacer-definitivement\">
                                            <div>
                                                <input type=\"checkbox\" id=\"horns\" name=\"horns\"/>
                                            </div>
                                            <div>
                                                <label for=\"horns\">{{ 'profil-utilisateur.liens.effacer-compte-donnees'|trans }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer border-top-0 pb-0\">
                                        <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Basic example\">
                                            <button type=\"button\" class=\"btn btn-lg firstletter-capital logout-no\"
                                                    data-dismiss=\"modal\">{{ 'general.non'|trans }}</button>
                                            <button type=\"button\"
                                                    class=\"btn btn-lg btn-primary firstletter-capital logout-yes delete_port2\">{{ 'general.oui'|trans }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Modal -->
                <input id=\"hornsUrlDelete\" hidden value=\"{{ path('profile_delete_profil',{id:app.user.id}) }}\"/>
                <input id=\"hornsUrlDeleteAll\" hidden value=\"{{ path('profile_delete_profil_all',{id:app.user.id}) }}\"/>
                {% include(\"partials/videoButton.html.twig\") %}
                {% include(\"partials/otherPagesVideoModal.html.twig\") %}
        </main>
    </div>
{% endblock %}


\t{% block footer %}
        {{ parent() }}

    {% endblock %}

\t{% block javascripts %}
        {{ parent() }}

        <!-- jQuery plugin for datepicker -->
        <script src=\"{{ prerender(asset('assets/js/gijgo-js/gijgo.min.2.js')) }}\"></script>
        <script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>


        <script>
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
// first thing turn Hide Menu Search bar
                \$(\"#searchMenu\").hide();
// toggle menu search bar on/off
                \$(\"#searchMenuShowHide\").click(function () {
                    \$(\"#searchMenu\").toggle(\"slide\");
                });

                \$(document).on('click', '.delete_port2', function (e) {
                    let urlPath = '';
                    e.preventDefault();
                    toastr.info(\"{{ 'systeme.compte.en-cours'|trans }}\");
                    if (\$('#horns:checkbox:checked').length > 0) {
                        urlPath = \$(\"#hornsUrlDeleteAll\").val();
                    } else {
                        urlPath = \$(\"#hornsUrlDelete\").val();
                    }
                    \$.ajax({
                        url: urlPath,
                        type: 'GET',
                        success: function (response) {
                            if (response > 0) {
                                toastr.clear();
                                toastr.success(\"{{ 'systeme.compte.succes'|trans }}\");
                                window.setTimeout(function () {
                                    window.location = \"\";
                                }, 200);
                            }
                        },
                        error: function (response) {
                            toastr.clear();
                            toastr.error(\"{{ 'systeme.compte.error'|trans }}\");
                        }
                    });
                });

            });
        </script>

    {% endblock %}
", "profile/dashboard.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/dashboard.html.twig");
    }
}
