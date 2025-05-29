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

/* annonces/detailsProfil.html.twig */
class __TwigTemplate_17d7a4a0b18e428134c345fdff3b22e1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/detailsProfil.html.twig"));

        $this->parent = $this->loadTemplate("otherLayout.html.twig", "annonces/detailsProfil.html.twig", 1);
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
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market | Détails du Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 18
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">

    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mon-profil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <link href=\"http://rawgit.com/gjunge/rateit.js/master/scripts/rateit.css\" rel=\"stylesheet\" type=\"text/css\">

    <style>
        html {
            scroll-behavior: smooth;
        }

        .col-md-12 h5 {
            font-style: normal;
        }

        hr {
            margin-top: 0.1rem;
            margin-bottom: 0.1rem;
        }

        h2.user-info {
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            line-height: 1rem;
        }

        h2.bloc-title {
            font-size: larger !important;
        }

        h5.user-info {
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            /* line-height: 1rem; */
        }
        .card-footer {
            text-align: end;
        }
        .pagination .page-item.active .page-link {
            background-color: #f17b30;
        }

        .img-fluid {
            height: auto;
            width: auto;
            border-radius: 5%;
        }

        @media only screen and (max-width: 768px) {
            .profile-data-container {
                margin: auto 1rem;
            }

            #lectureInfo {
                display: flex;
                flex-flow: column;
                align-items: center;
            }

            .img-fluid {
                height: auto;
                width: auto;
                border-radius: 5%;
            }
        }

        @media only screen and(min-width: 768px) and (max-width: 992px) {
            .med-flex {
                display: flex;
                flex-flow: row;
                align-items: center;
            }

            .profile-data-container {
                margin: auto 0rem;
            }
        }

        @media only screen and (min-width: 992px) {
            .profile-data-container {
                margin: auto 8rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 119
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 122
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

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 124
        yield "    <!--Main Layout-->
    <main class=\"mt-3 pt-5\">
        <div class=\"container\">
            <div class=\"profile-data-container\">
                <!-- Vu du profil -->
                <div id=\"lectureInfo\" class=\"row\">
                    <div class=\"row med-flex col-12\">
                        <div class=\"col-md-4 pb-2\">
                            <img class=\"img-fluid\" width=\"100% \\9\"
                                 src=\"";
        // line 133
        if ((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 133, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 133, $this->source); })()), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
        }
        yield "\"
                                 alt=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 134, $this->source); })()), "first_name", [], "any", false, false, false, 134), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 134, $this->source); })()), "last_name", [], "any", false, false, false, 134), "html", null, true);
        yield "\"/>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"row ml-0\">
                                <h1 class=\"\"
                                    style=\"margin-bottom: 0.2rem;\">";
        // line 139
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 139, $this->source); })()), "nom_commercial", [], "any", false, false, false, 139) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 139, $this->source); })()), "first_name", [], "any", false, false, false, 139), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 139, $this->source); })()), "nom_commercial", [], "any", false, false, false, 139), "html", null, true);
        }
        yield " </h1>
                                ";
        // line 140
        if ((array_key_exists("statut_kyc", $context) && (isset($context["statut_kyc"]) || array_key_exists("statut_kyc", $context) ? $context["statut_kyc"] : (function () { throw new RuntimeError('Variable "statut_kyc" does not exist.', 140, $this->source); })()))) {
            yield "<img title=\"Profil fournisseur validé\" style=\"width: 50px; height: auto;\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/svg/check-mark-3280.svg")), "html", null, true);
            yield "\"/>
                                ";
        } elseif ((        // line 141
array_key_exists("statut_kyc", $context) &&  !(isset($context["statut_kyc"]) || array_key_exists("statut_kyc", $context) ? $context["statut_kyc"] : (function () { throw new RuntimeError('Variable "statut_kyc" does not exist.', 141, $this->source); })()))) {
            yield "<img
                                    title=\"Profil fournisseur non validé\" style=\"width: 50px; height: auto;\"
                                    src=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/svg/yellow-check-mark-circular-tick-16216.svg")), "html", null, true);
            yield "\"/>";
        }
        // line 144
        yield "                            </div>
                            ";
        // line 145
        if ((isset($context["principal_activity"]) || array_key_exists("principal_activity", $context) ? $context["principal_activity"] : (function () { throw new RuntimeError('Variable "principal_activity" does not exist.', 145, $this->source); })())) {
            yield "<h2 class=\"mt-1\" style=\"margin-bottom: 0px;font-size:large;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["principal_activity"]) || array_key_exists("principal_activity", $context) ? $context["principal_activity"] : (function () { throw new RuntimeError('Variable "principal_activity" does not exist.', 145, $this->source); })()), "description", [], "any", false, false, false, 145), "html", null, true);
            yield "</h2>";
        }
        // line 146
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "experience", [], "any", true, true, false, 146)) {
            // line 147
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 147, $this->source); })()), "experience", [], "any", false, false, false, 147), "html", null, true);
            yield "
                                <h5 class=\"user-info\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.experience"), "html", null, true);
            yield " :
                                    <strong>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.annee"), "html", null, true);
            yield "</strong>
                                </h5>
                            ";
        } else {
            // line 152
            yield "                            ";
        }
        // line 153
        yield "
                            <div class=\"pt-1 mt-4 row\">
                                <a href=\"#\" style=\"color:#fff;background-color:black;\"
                                   class=\"btn btn-md ml-0 col-md-4\">";
        // line 156
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 156)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["departements"]) || array_key_exists("departements", $context) ? $context["departements"] : (function () { throw new RuntimeError('Variable "departements" does not exist.', 156, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 157
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 157), "getDepartement", [], "any", false, false, false, 157) && (CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 157) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 157), "getDepartement", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "departement", [], "any", false, false, false, 157), "html", null, true);
                }
                // line 158
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dep'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield "</a>
                                <a target=\"_blank\" href=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_chat", ["destinataire" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159)]), "html", null, true);
        yield "\"
                                   class=\"btn btn-md btn-primary ml-0 col-md-4\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.message"), "html", null, true);
        yield "</a>
                                <button data-toggle=\"modal\" data-target=\".modal-skills\"
                                        style=\"color:#fff;background-color:#53b4a6;\" class=\"btn btn-md ml-0 col-md-4\">
                                    Mes compétences
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class=\"row col-12 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div
                                        class=\"col-md-12 mt-4\">
                                    <!-- <h5>";
        // line 175
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 175, $this->source); })()), "first_name", [], "any", false, false, false, 175);
        yield " en quelques mots</h5> -->
                                    <h2 class=\"no-oblique bloc-title\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.description"), "html", null, true);
        yield "</h2>
                                    <hr>
                                    <div class=\"p-2\">
                                        <div>
                                            ";
        // line 180
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 180, $this->source); })()), "description", [], "any", false, false, false, 180);
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.reference"), "html", null, true);
        yield "</h2>
                                    <hr>
                                    <div class=\"p-2\">
                                        <div>
                                            ";
        // line 190
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 190, $this->source); })()), "reference", [], "any", false, false, false, 190);
        yield "</div>
                                    </div>
                                </div>
                                <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.portfolio"), "html", null, true);
        yield "</h2>
                                    <hr class=\"mb-2\">
                                    <div class=\"owl-carousel owl-theme\">
                                        ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 197, $this->source); })()), "portfolio", [], "any", false, false, false, 197), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 198
            yield "                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\" data-src=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["s"], "html", null, true);
            yield "\"></div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                                    </div>
                                </div>
                                <div id=\"mesVideos\" class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.videos"), "html", null, true);
        yield "</h2>
                                    <hr class=\"mb-2\">
                                    <div class=\"owl-carousel owl-theme\">
                                        ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 208, $this->source); })()), "videos", [], "any", false, false, false, 208), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 209
            yield "                                            <div class=\"item-video\" data-merge=\"3\">
                                                <a class=\"owl-video\"
                                                   href=\"https://www.youtube.com/embed/";
            // line 211
            if (($context["v"] != null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
            }
            yield "\"></a>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        yield "                                    </div>
                                </div>
                                <div id=\"mesAnnonces\" class=\"col-md-12 my-4\">
                                    <h2 class=\"py-4 mb-2 bloc-title\">Mon univers de prestations</h2>
                                    <hr class=\"mb-3\">
                                    <div class=\"owl-theme col-md-12 row\">
                                        ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 220, $this->source); })()), "annonces", [], "any", false, false, false, 220));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 221
            yield "                                            <div class=\"col-lg-4 col-md-6 col-sm-6 mb-5 clearfix isotope-grid\">
                                                <!-- Card -->
                                                <div class=\"card\">
                                                    <!-- Card image -->
                                                    ";
            // line 225
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 225))) {
                // line 226
                yield "                                                        <div class=\"view overlay isotope-item\"
                                                             style=\"height:160px; border-bottom: 4px solid #f17b30\">
                                                            <img loading=\"lazy\" class=\"card-img-top lazy\" width=\"100%\"
                                                                 src=\"";
                // line 229
                if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 229))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 229), 0, [], "any", false, false, false, 229), "guid", [], "any", false, false, false, 229), ["www." => ""]), "html", null, true);
                } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 229))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 229), 0, [], "any", false, false, false, 229), "guid", [], "any", false, false, false, 229), ["www." => ""]), "html", null, true);
                } else {
                    yield "https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg";
                }
                yield "\"
                                                                 alt=\"Card image cap\">
                                                            ";
                // line 237
                yield "                                                            <a href=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 237) != "")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 237)]), "html", null, true);
                }
                yield "\">
                                                                <div class=\"mask rgba-white-slight\"></div>
                                                            </a>
                                                        </div>
                                                    ";
            }
            // line 242
            yield "                                                    <!-- Card content -->
                                                    <div class=\"card-body\">
                                                        <!-- Title -->
                                                        <h4 class=\"card-title fs-18\">
                                                            ";
            // line 246
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 246, $this->source); })()), "request", [], "any", false, false, false, 246), "locale", [], "any", false, false, false, 246) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 246) != ""))) {
                // line 247
                yield "                                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 247), "html", null, true);
                yield "
                                                            ";
            } else {
                // line 249
                yield "                                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre", [], "any", false, false, false, 249), "html", null, true);
                yield "
                                                            ";
            }
            // line 251
            yield "                                                        </h4>
                                                        <!-- Category -->
                                                        <h5 class=\"card-sub-title fs-15\">
                                                            <a href=\"";
            // line 254
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 254)) == "produits")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                yield " ";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 254), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                yield " ";
            }
            yield "\">
                                                                ";
            // line 255
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 255, $this->source); })()), "request", [], "any", false, false, false, 255), "locale", [], "any", false, false, false, 255) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 255) != ""))) {
                // line 256
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 256), "html", null, true);
                yield "
                                                                ";
            } else {
                // line 258
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 258), "html", null, true);
                yield "
                                                                ";
            }
            // line 260
            yield "                                                            </a>
                                                        </h5>
                                                        <!-- Sub Category -->
                                                        <h5 class=\"card-sub-category fs-18\">
                                                            <a href=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 264), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorieSlug", [], "any", false, false, false, 264), "code_postal_ville" => ""]), "html", null, true);
            yield "\">
                                                                ";
            // line 265
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "request", [], "any", false, false, false, 265), "locale", [], "any", false, false, false, 265) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 265) != ""))) {
                // line 266
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 266), "html", null, true);
                yield "
                                                                ";
            } else {
                // line 268
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie", [], "any", false, false, false, 268), "html", null, true);
                yield "
                                                                ";
            }
            // line 270
            yield "                                                            </a>
                                                        </h5>
                                                        <!-- Price -->
                                                        <p class=\"annonce-price fs-24 mb-0\">
                                                    <span data-stars=\"";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 274), 0), "html", null, true);
            yield "\"
                                                          class=\"number\">";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 275), "html", null, true);
            yield "</span>
                                                            ";
            // line 276
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 276) != null)) {
                // line 277
                yield "                                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 277), "html", null, true);
            } else {
                yield "€
                                                            ";
            }
            // line 279
            yield "                                                        </p>
                                                    </div>
                                                    <div class=\"card-footer bg-transparent\">
                                                        <a target=\"_blank\"
                                                           href=\"";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 283), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_author", [], "any", false, false, false, 283)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 283), "html", null, true);
            yield "</a>
                                                    </div>
                                                </div>
                                                <!-- Card -->
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['liste'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        yield "                                        ";
        // line 322
        yield "                                    </div>
                                    ";
        // line 323
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 323, $this->source); })()), "annonces", [], "any", false, false, false, 323)) > 0)) {
            // line 324
            yield "                                        <nav aria-label=\"...\">
                                            <ul class=\"pagination justify-content-center\">
                                                <li class=\"page-item ";
            // line 326
            if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 326, $this->source); })()) == 1)) {
                yield "disabled";
            }
            yield "\">
                                                    <a class=\"page-link\"
                                                       href=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 328, $this->source); })()), "id", [], "any", false, false, false, 328)), "noPage" => (            // line 329
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 329, $this->source); })()) - 1)]), "html", null, true);
            yield "\"
                                                       tabindex=\"-1\">";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
            yield "</a>
                                                </li>

                                                ";
            // line 333
            if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 333, $this->source); })()) > 1)) {
                // line 334
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\"
                                                           href=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source,                 // line 337
(isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 337, $this->source); })()), "id", [], "any", false, false, false, 337)), "noPage" => 1]), "html", null, true);
                yield "\">1<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                ";
            }
            // line 341
            yield "                                                ";
            if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 341, $this->source); })()) > 2)) {
                // line 342
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"\">...<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                ";
            }
            // line 347
            yield "                                                <li class=\"page-item active\">
                                                    <a class=\"page-link\" href=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source,             // line 349
(isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 349, $this->source); })()), "id", [], "any", false, false, false, 349)), "noPage" => (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 349, $this->source); })())]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 349, $this->source); })()), "html", null, true);
            yield "
                                                        <span class=\"sr-only\"></span>
                                                    </a>
                                                </li>
                                                ";
            // line 353
            if ((((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 353, $this->source); })()) - (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 353, $this->source); })())) > 1)) {
                // line 354
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"\">...<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                    </li>
                                                ";
            }
            // line 360
            yield "                                                ";
            if ((((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 360, $this->source); })()) - (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 360, $this->source); })())) > 0)) {
                // line 361
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\"
                                                           href=\"";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source,                 // line 364
(isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 364, $this->source); })()), "id", [], "any", false, false, false, 364)), "noPage" => (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 364, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 364, $this->source); })()), "html", null, true);
                yield "
                                                            <span class=\"sr-only\"></span>
                                                        </a>
                                                    </li>
                                                ";
            }
            // line 369
            yield "                                                <li class=\"page-item ";
            if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 369, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 369, $this->source); })()))) {
                yield "disabled";
            }
            yield "\">
                                                    <a class=\"page-link\"
                                                       href=\"";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 371, $this->source); })()), "id", [], "any", false, false, false, 371)), "noPage" => (            // line 372
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 372, $this->source); })()) + 1)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
            yield "</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    ";
        }
        // line 377
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vu du profil -->
            </div>
        </div>
        <div class=\"modal fade modal-skills\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\" style=\"background-color:#008779;border-radius: 15px;padding: 1rem;\">
                    <h5 class=\"modal-title\" style=\"color: #fff;font-size: larger;\" id=\"exampleModalLongTitle\">MES
                        DOMAINES D'EXPERTISES</h5>
                    ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detailsPro"]) || array_key_exists("detailsPro", $context) ? $context["detailsPro"] : (function () { throw new RuntimeError('Variable "detailsPro" does not exist.', 391, $this->source); })()), "competence", [], "any", false, false, false, 391));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 392
            yield "                        <span style=\"text-align:left !important;\"
                              class=\"text-center competence-item pb-2\">";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        yield "                </div>
            </div>
        </div>
        ";
        // line 398
        yield from $this->loadTemplate("partials/videoButton.html.twig", "annonces/detailsProfil.html.twig", 398)->unwrap()->yield($context);
        // line 399
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "annonces/detailsProfil.html.twig", 399)->unwrap()->yield($context);
        // line 400
        yield "    </main>
    <!--Main Layout-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 406
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 407
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 411
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 412
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script src=\"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 419
        yield "    <script src=\"//cdn.ckeditor.com/4.13.0/standard/ckeditor.js\"></script>
    <script src=\"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- jQuery plugin for input tags -->
    <script src=\"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tagsinput/jQuery.tagify.min.js"), "html", null, true);
        yield "\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <!-- RateIt Js -->
    <script type=\"text/javascript\" src=\"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/rateit/jquery.rateit.min.js"), "html", null, true);
        yield "\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>


    <script>
        \$(document).ready(function () {
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
//Smooth scroll
            if (\"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 450, $this->source); })()), "html", null, true);
        yield "\" > 1) {
                window.location = \"#mesAnnonces\";
            }
//End
// Portfolio owlcarousel
            \$('#monPortfolio .owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                lazyLoad: true,
                loop: true,
                margin: 10
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

// Annonces owlcarousel
            \$('#mesAnnonces .owl-carousel').owlCarousel({loop: false, margin: 10, nav: true});
// input tags
            \$('#competencesModif').tagify();
// list images from portfolio and video
            \$('.portfolio-ul').on('click', 'li span:first-child', function () {
                \$(this).parent().fadeOut(300, function () {
                    \$(this).remove();
                });
            });
            \$('.videos-ul').on('click', 'li span:first-child', function () {
                \$(this).parent().fadeOut(300, function () {
                    \$(this).remove();
                });
            });

// add/remove new video in the update section
            var scntDiv = \$('#newVideosRow');
            var i = \$('#newVideosRow .col-md-4').length + 1;

            \$('#addScnt').on('click', function () {
                \$('<div class=\"col-md-4\"><div class=\"md-form\"> <input type=\"text\" class=\"form-control border p-2\" name=\"new_vid_' + i + '\" placeholder=\"Add new YouTube video link\"><div class=\"valid-feedback\">OK!</div><div class=\"invalid-feedback\">Ce champ contient une erreur!</div></div> <a class=\"btn btn-md btn-danger\" id=\"retirerSec\">Rétirer</a></div>').appendTo(scntDiv);
                i++;
                return false;
            });

            \$('#newVideosRow').on('click', '#retirerSec', function () { // console.log(\"Am here\");
                if (i > 2) {
                    \$(this).parents('.col-md-4').remove();
                    i--;
                }
                return false;
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

// first thing turn Hide \"Update section\" input field
// \$(\"#lectureInfo\").hide();
            \$(\"#modifInfo\").hide();

// toggle on/off using \"Mofier mon profile\"
            \$(\"#modifierProfile\").click(function () {
                \$(\"#lectureInfo\").toggle(\"slide\");
                \$(\"#modifInfo\").toggle(\"slide\");
            });
// toggle on/off using \"Annuler les modification\"
            \$(\"#annulerModif\").click(function () {
                \$(\"#modifInfo\").toggle(\"slide\");
                \$(\"#lectureInfo\").toggle(\"slide\");
            });

            \$('#date').datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome'
            });

            \$(\"div[role='wrapper']\").append(\"<label for='date'>Date de naissance</label><div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");


// Set card title and card-body equal height
            let maxHeightTitle = 0;
            let maxHeightbody = 0;
// card body
            \$(\".card-body\").each(function () {
                if (\$(this).height() > maxHeightbody) {
                    maxHeightbody = \$(this).height();
                }
            });
            \$(\".card-body\").height(maxHeightbody);

        });
    </script>

    <script>

        function switchButtons(button, oppositeButton) {
            button.disabled = false;
            button.style.display = 'none';
            oppositeButton.style.display = 'block';
        }

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
        return "annonces/detailsProfil.html.twig";
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
        return array (  940 => 450,  915 => 428,  908 => 424,  901 => 420,  898 => 419,  894 => 417,  888 => 414,  882 => 412,  872 => 411,  860 => 407,  850 => 406,  839 => 400,  836 => 399,  834 => 398,  829 => 395,  821 => 393,  818 => 392,  814 => 391,  798 => 377,  788 => 372,  787 => 371,  779 => 369,  769 => 364,  768 => 363,  764 => 361,  761 => 360,  753 => 354,  751 => 353,  742 => 349,  741 => 348,  738 => 347,  731 => 342,  728 => 341,  721 => 337,  720 => 336,  716 => 334,  714 => 333,  708 => 330,  704 => 329,  703 => 328,  696 => 326,  692 => 324,  690 => 323,  687 => 322,  685 => 289,  671 => 283,  665 => 279,  658 => 277,  656 => 276,  652 => 275,  648 => 274,  642 => 270,  636 => 268,  630 => 266,  628 => 265,  624 => 264,  618 => 260,  612 => 258,  606 => 256,  604 => 255,  594 => 254,  589 => 251,  583 => 249,  577 => 247,  575 => 246,  569 => 242,  558 => 237,  547 => 229,  542 => 226,  540 => 225,  534 => 221,  530 => 220,  522 => 214,  511 => 211,  507 => 209,  503 => 208,  497 => 205,  492 => 202,  483 => 199,  480 => 198,  476 => 197,  470 => 194,  463 => 190,  456 => 186,  447 => 180,  440 => 176,  436 => 175,  418 => 160,  414 => 159,  405 => 158,  400 => 157,  395 => 156,  390 => 153,  387 => 152,  381 => 149,  377 => 148,  372 => 147,  369 => 146,  363 => 145,  360 => 144,  356 => 143,  351 => 141,  345 => 140,  337 => 139,  327 => 134,  319 => 133,  308 => 124,  298 => 123,  282 => 122,  271 => 119,  261 => 118,  165 => 29,  161 => 28,  157 => 27,  152 => 25,  148 => 24,  144 => 23,  139 => 21,  132 => 18,  122 => 17,  105 => 15,  95 => 12,  90 => 10,  84 => 7,  79 => 5,  74 => 4,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'otherLayout.html.twig' %}

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
{% endblock %}

{% block title %}Trust &amp; Market | Détails du Profil{% endblock %}

{% block style %}
    {{ parent() }}

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" {{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">

    <link href=\"{{ asset('assets/css/custome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/mon-profil.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/css/result.css') }}\" rel=\"stylesheet\">
    <!-- Custom css for camroll -->
    <link href=\"{{ asset('assets/css/camroll/camroll_slider.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <link href=\"http://rawgit.com/gjunge/rateit.js/master/scripts/rateit.css\" rel=\"stylesheet\" type=\"text/css\">

    <style>
        html {
            scroll-behavior: smooth;
        }

        .col-md-12 h5 {
            font-style: normal;
        }

        hr {
            margin-top: 0.1rem;
            margin-bottom: 0.1rem;
        }

        h2.user-info {
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            line-height: 1rem;
        }

        h2.bloc-title {
            font-size: larger !important;
        }

        h5.user-info {
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            /* line-height: 1rem; */
        }
        .card-footer {
            text-align: end;
        }
        .pagination .page-item.active .page-link {
            background-color: #f17b30;
        }

        .img-fluid {
            height: auto;
            width: auto;
            border-radius: 5%;
        }

        @media only screen and (max-width: 768px) {
            .profile-data-container {
                margin: auto 1rem;
            }

            #lectureInfo {
                display: flex;
                flex-flow: column;
                align-items: center;
            }

            .img-fluid {
                height: auto;
                width: auto;
                border-radius: 5%;
            }
        }

        @media only screen and(min-width: 768px) and (max-width: 992px) {
            .med-flex {
                display: flex;
                flex-flow: row;
                align-items: center;
            }

            .profile-data-container {
                margin: auto 0rem;
            }
        }

        @media only screen and (min-width: 992px) {
            .profile-data-container {
                margin: auto 8rem;
            }
        }
    </style>
{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock %}

{% block navigation %}{% endblock %}
{% block body %}
    <!--Main Layout-->
    <main class=\"mt-3 pt-5\">
        <div class=\"container\">
            <div class=\"profile-data-container\">
                <!-- Vu du profil -->
                <div id=\"lectureInfo\" class=\"row\">
                    <div class=\"row med-flex col-12\">
                        <div class=\"col-md-4 pb-2\">
                            <img class=\"img-fluid\" width=\"100% \\9\"
                                 src=\"{% if avatar %}{{ avatar }}{% else %}{{ asset('assets/img/profile/avatar-profile.png') }}{% endif %}\"
                                 alt=\"{{ detailsPro.first_name }} {{ detailsPro.last_name }}\"/>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"row ml-0\">
                                <h1 class=\"\"
                                    style=\"margin-bottom: 0.2rem;\">{% if detailsPro.nom_commercial == '' %}{{ detailsPro.first_name }}{% else %}{{ detailsPro.nom_commercial }}{% endif %} </h1>
                                {% if statut_kyc is defined and statut_kyc %}<img title=\"Profil fournisseur validé\" style=\"width: 50px; height: auto;\" src=\"{{ absolute_url(asset('assets/img/svg/check-mark-3280.svg')) }}\"/>
                                {% elseif statut_kyc is defined and not statut_kyc %}<img
                                    title=\"Profil fournisseur non validé\" style=\"width: 50px; height: auto;\"
                                    src=\"{{ absolute_url(asset('assets/img/svg/yellow-check-mark-circular-tick-16216.svg')) }}\"/>{% endif %}
                            </div>
                            {% if principal_activity %}<h2 class=\"mt-1\" style=\"margin-bottom: 0px;font-size:large;\">{{ principal_activity.description }}</h2>{% endif %}
                            {% if detailsPro.experience is defined %}
                                {{ detailsPro.experience }}
                                <h5 class=\"user-info\">{{ 'profil-utilisateur.mon-profil.experience'|trans }} :
                                    <strong>{{ 'profil-utilisateur.mon-profil.annee'|trans }}</strong>
                                </h5>
                            {% else %}
                            {% endif %}

                            <div class=\"pt-1 mt-4 row\">
                                <a href=\"#\" style=\"color:#fff;background-color:black;\"
                                   class=\"btn btn-md ml-0 col-md-4\">{% if user.getUserUniqueData %}{% for dep in departements %}
                                        {% if user.getUserUniqueData.getDepartement and dep.id == user.getUserUniqueData.getDepartement.id %}{{ dep.departement }}{% endif %}
                                    {% endfor %}{% endif %}</a>
                                <a target=\"_blank\" href=\"{{ path('chat_chat', {'destinataire': detailsPro.id }) }}\"
                                   class=\"btn btn-md btn-primary ml-0 col-md-4\">{{ 'profil-utilisateur.mon-profil.message'|trans }}</a>
                                <button data-toggle=\"modal\" data-target=\".modal-skills\"
                                        style=\"color:#fff;background-color:#53b4a6;\" class=\"btn btn-md ml-0 col-md-4\">
                                    Mes compétences
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class=\"row col-12 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div
                                        class=\"col-md-12 mt-4\">
                                    <!-- <h5>{{ detailsPro.first_name|raw }} en quelques mots</h5> -->
                                    <h2 class=\"no-oblique bloc-title\">{{ 'profil-utilisateur.mon-profil.description'|trans }}</h2>
                                    <hr>
                                    <div class=\"p-2\">
                                        <div>
                                            {{ detailsPro.description|raw }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">{{ 'profil-utilisateur.mon-profil.reference'|trans }}</h2>
                                    <hr>
                                    <div class=\"p-2\">
                                        <div>
                                            {{ detailsPro.reference|raw }}</div>
                                    </div>
                                </div>
                                <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">{{ 'profil-utilisateur.mon-profil.portfolio'|trans }}</h2>
                                    <hr class=\"mb-2\">
                                    <div class=\"owl-carousel owl-theme\">
                                        {% for s in detailsPro.portfolio|slice(0, 10) %}
                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\" data-src=\"{{ s }}\"></div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                                <div id=\"mesVideos\" class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">{{ 'profil-utilisateur.mon-profil.videos'|trans }}</h2>
                                    <hr class=\"mb-2\">
                                    <div class=\"owl-carousel owl-theme\">
                                        {% for v in detailsPro.videos|slice(0, 10) %}
                                            <div class=\"item-video\" data-merge=\"3\">
                                                <a class=\"owl-video\"
                                                   href=\"https://www.youtube.com/embed/{% if v != null %}{{ v }}{% endif %}\"></a>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                                <div id=\"mesAnnonces\" class=\"col-md-12 my-4\">
                                    <h2 class=\"py-4 mb-2 bloc-title\">Mon univers de prestations</h2>
                                    <hr class=\"mb-3\">
                                    <div class=\"owl-theme col-md-12 row\">
                                        {% for liste in detailsPro.annonces %}
                                            <div class=\"col-lg-4 col-md-6 col-sm-6 mb-5 clearfix isotope-grid\">
                                                <!-- Card -->
                                                <div class=\"card\">
                                                    <!-- Card image -->
                                                    {% if liste.gallery is not null %}
                                                        <div class=\"view overlay isotope-item\"
                                                             style=\"height:160px; border-bottom: 4px solid #f17b30\">
                                                            <img loading=\"lazy\" class=\"card-img-top lazy\" width=\"100%\"
                                                                 src=\"{% if liste.gallery|first %}{{ liste.gallery.0.guid|replace({'www.': ''}) }}{% elseif liste.images_secondaires|first %}{{ liste.images_secondaires.0.guid|replace({'www.': ''}) }}{% else %}https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg{% endif %}\"
                                                                 alt=\"Card image cap\">
                                                            {#<div class=\"btnh1-display\">
                                                                <button class=\"btn-wish btnh1\" data-id=\"{{ liste.id }}\">
                                                                    {% if liste.id in text_wishlist %}<i style=\"color: red;\"
                                                                                                         class=\"fas fa-heart\"></i> {% else %}
                                                                        <i class=\"far fa-heart\"></i> {% endif %}</button>
                                                            </div>#}
                                                            <a href=\"{% if liste.post_name != '' %}{{ path('annonces_detailsAnnonce', { id:liste.post_name }) }}{% endif %}\">
                                                                <div class=\"mask rgba-white-slight\"></div>
                                                            </a>
                                                        </div>
                                                    {% endif %}
                                                    <!-- Card content -->
                                                    <div class=\"card-body\">
                                                        <!-- Title -->
                                                        <h4 class=\"card-title fs-18\">
                                                            {% if app.request.locale == 'en' and liste.titre_en != '' %}
                                                                {{ liste.titre_en }}
                                                            {% else %}
                                                                {{ liste.titre }}
                                                            {% endif %}
                                                        </h4>
                                                        <!-- Category -->
                                                        <h5 class=\"card-sub-title fs-15\">
                                                            <a href=\"{% if liste.categorieParent|lower == 'produits' %}{{ path('annonces_listeAnnonces',{type_prestation:'produits',services_proposes: '',code_postal_ville: ''}) }} {% else %}{{ path('annonces_listeAnnonces', {type_prestation: liste.categorieParentSlug,services_proposes: '',code_postal_ville: ''}) }} {% endif %}\">
                                                                {% if app.request.locale == 'en' and liste.categorieParent_en != '' %}
                                                                    {{ liste.categorieParent_en }}
                                                                {% else %}
                                                                    {{ liste.categorieParent }}
                                                                {% endif %}
                                                            </a>
                                                        </h5>
                                                        <!-- Sub Category -->
                                                        <h5 class=\"card-sub-category fs-18\">
                                                            <a href=\"{{ path('annonces_listeAnnonces', {type_prestation: liste.categorieParentSlug,services_proposes: liste.sousCategorieSlug,code_postal_ville: ''}) }}\">
                                                                {% if app.request.locale == 'en' and liste.sousCategorie_en != '' %}
                                                                    {{ liste.sousCategorie_en }}
                                                                {% else %}
                                                                    {{ liste.sousCategorie }}
                                                                {% endif %}
                                                            </a>
                                                        </h5>
                                                        <!-- Price -->
                                                        <p class=\"annonce-price fs-24 mb-0\">
                                                    <span data-stars=\"{{ liste.price|round(0) }}\"
                                                          class=\"number\">{{ liste.price }}</span>
                                                            {% if liste.devise != null %}
                                                                {{ liste.devise }}{% else %}€
                                                            {% endif %}
                                                        </p>
                                                    </div>
                                                    <div class=\"card-footer bg-transparent\">
                                                        <a target=\"_blank\"
                                                           href=\"{{ path('annonces_listeAnnoncesCommercial', {nom_commercial: liste.nom_commercial, id_commercial: liste.post_author}) }}\">{{ liste.nom_commercial }}</a>
                                                    </div>
                                                </div>
                                                <!-- Card -->
                                            </div>
                                        {% endfor %}
                                        {#{% for s in detailsPro.annonces %}
                                            <div class=\"col-md-4 mb-5 clearfix isotope-grid\">
                                                <div class=\"card\">
                                                    <a href=\"{{path('annonces_detailsAnnonce',{id:s.slug})}}\" target=\"_blank\">
                                                        <div class=\"item-box-blog-image annonces-title\">
                                                            <figure>
                                                                <img alt=\"{% if s.post_title is defined %}{{s.post_title}}{% else %}{{s.titre}}{% endif %}\"
                                                                src=\"{% if s.gallery|length > 0 and s.gallery != '' %}{{s.gallery.0.guid}}{% elseif s.images_secondaires|length > 0 and s.images_secondaires != '' %}{{s.images_secondaires.0.guid}}{% endif %}\">
                                                            </figure>
                                                        </div>
                                                    </a>

                                                    <div class=\"item-box-blog-body annonces-body\">
                                                        <!--Heading-->
                                                        <div class=\"item-box-blog-heading annonces-head\">
                                                            <a href=\"#\" tabindex=\"0\">
                                                                <h6 class=\"mt-2 primary-colour\">{% if s.post_title is defined %}{{s.post_title}}{% else %}{{s.titre}}{% endif %}</h6>
                                                            </a>
                                                        </div>
                                                        <!--Data-->
                                                        <div class=\"item-box-blog-data\" style=\"padding: 15px;\">
                                                            <p class=\"mt-1\">{{s.price}}
                                                                {% if s.devise == \"\" %}€
                                                                {% else %}
                                                                    {{s.devise}}
                                                                {% endif %}
                                                            </p>
                                                        </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}#}
                                    </div>
                                    {% if detailsPro.annonces|length > 0 %}
                                        <nav aria-label=\"...\">
                                            <ul class=\"pagination justify-content-center\">
                                                <li class=\"page-item {% if noPage == 1 %}disabled{% endif %}\">
                                                    <a class=\"page-link\"
                                                       href=\"{{ path('profile_detailsProfessionnel',{ id:'infos-profil-' ~ detailsPro.id,
                                                           noPage:noPage-1}) }}\"
                                                       tabindex=\"-1\">{{ 'filtres.precedent'|trans({}, 'liste_annonces') }}</a>
                                                </li>

                                                {% if noPage > 1 %}
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\"
                                                           href=\"{{ path('profile_detailsProfessionnel',
                                                               {id: 'infos-profil-' ~ detailsPro.id , noPage: 1}) }}\">1<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                {% endif %}
                                                {% if noPage > 2 %}
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"\">...<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                {% endif %}
                                                <li class=\"page-item active\">
                                                    <a class=\"page-link\" href=\"{{ path('profile_detailsProfessionnel',
                                                        {id: 'infos-profil-' ~ detailsPro.id , noPage: noPage}) }}\">{{ noPage }}
                                                        <span class=\"sr-only\"></span>
                                                    </a>
                                                </li>
                                                {% if pages - noPage > 1 %}
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"\">...<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                    </li>
                                                {% endif %}
                                                {% if pages - noPage > 0 %}
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\"
                                                           href=\"{{ path('profile_detailsProfessionnel',
                                                               {id:'infos-profil-' ~ detailsPro.id, noPage: pages}) }}\">{{ pages }}
                                                            <span class=\"sr-only\"></span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                                <li class=\"page-item {% if noPage == pages %}disabled{% endif %}\">
                                                    <a class=\"page-link\"
                                                       href=\"{{ path('profile_detailsProfessionnel',{id:'infos-profil-' ~ detailsPro.id,
                                                           noPage:noPage+1}) }}\">{{ 'filtres.suivant'|trans({}, 'liste_annonces') }}</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vu du profil -->
            </div>
        </div>
        <div class=\"modal fade modal-skills\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\" style=\"background-color:#008779;border-radius: 15px;padding: 1rem;\">
                    <h5 class=\"modal-title\" style=\"color: #fff;font-size: larger;\" id=\"exampleModalLongTitle\">MES
                        DOMAINES D'EXPERTISES</h5>
                    {% for key,item in detailsPro.competence %}
                        <span style=\"text-align:left !important;\"
                              class=\"text-center competence-item pb-2\">{{ item }}</span>
                    {% endfor %}
                </div>
            </div>
        </div>
        {% include(\"partials/videoButton.html.twig\") %}
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
    {# Text editor #}
    <script src=\"//cdn.ckeditor.com/4.13.0/standard/ckeditor.js\"></script>
    <script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- jQuery plugin for input tags -->
    <script src=\"{{ asset('assets/js/tagsinput/jQuery.tagify.min.js') }}\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <!-- RateIt Js -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/rateit/jquery.rateit.min.js') }}\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>


    <script>
        \$(document).ready(function () {
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
//Smooth scroll
            if (\"{{ noPage }}\" > 1) {
                window.location = \"#mesAnnonces\";
            }
//End
// Portfolio owlcarousel
            \$('#monPortfolio .owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                lazyLoad: true,
                loop: true,
                margin: 10
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

// Annonces owlcarousel
            \$('#mesAnnonces .owl-carousel').owlCarousel({loop: false, margin: 10, nav: true});
// input tags
            \$('#competencesModif').tagify();
// list images from portfolio and video
            \$('.portfolio-ul').on('click', 'li span:first-child', function () {
                \$(this).parent().fadeOut(300, function () {
                    \$(this).remove();
                });
            });
            \$('.videos-ul').on('click', 'li span:first-child', function () {
                \$(this).parent().fadeOut(300, function () {
                    \$(this).remove();
                });
            });

// add/remove new video in the update section
            var scntDiv = \$('#newVideosRow');
            var i = \$('#newVideosRow .col-md-4').length + 1;

            \$('#addScnt').on('click', function () {
                \$('<div class=\"col-md-4\"><div class=\"md-form\"> <input type=\"text\" class=\"form-control border p-2\" name=\"new_vid_' + i + '\" placeholder=\"Add new YouTube video link\"><div class=\"valid-feedback\">OK!</div><div class=\"invalid-feedback\">Ce champ contient une erreur!</div></div> <a class=\"btn btn-md btn-danger\" id=\"retirerSec\">Rétirer</a></div>').appendTo(scntDiv);
                i++;
                return false;
            });

            \$('#newVideosRow').on('click', '#retirerSec', function () { // console.log(\"Am here\");
                if (i > 2) {
                    \$(this).parents('.col-md-4').remove();
                    i--;
                }
                return false;
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

// first thing turn Hide \"Update section\" input field
// \$(\"#lectureInfo\").hide();
            \$(\"#modifInfo\").hide();

// toggle on/off using \"Mofier mon profile\"
            \$(\"#modifierProfile\").click(function () {
                \$(\"#lectureInfo\").toggle(\"slide\");
                \$(\"#modifInfo\").toggle(\"slide\");
            });
// toggle on/off using \"Annuler les modification\"
            \$(\"#annulerModif\").click(function () {
                \$(\"#modifInfo\").toggle(\"slide\");
                \$(\"#lectureInfo\").toggle(\"slide\");
            });

            \$('#date').datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome'
            });

            \$(\"div[role='wrapper']\").append(\"<label for='date'>Date de naissance</label><div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");


// Set card title and card-body equal height
            let maxHeightTitle = 0;
            let maxHeightbody = 0;
// card body
            \$(\".card-body\").each(function () {
                if (\$(this).height() > maxHeightbody) {
                    maxHeightbody = \$(this).height();
                }
            });
            \$(\".card-body\").height(maxHeightbody);

        });
    </script>

    <script>

        function switchButtons(button, oppositeButton) {
            button.disabled = false;
            button.style.display = 'none';
            oppositeButton.style.display = 'block';
        }

    </script>

{% endblock %}
", "annonces/detailsProfil.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/annonces/detailsProfil.html.twig");
    }
}
