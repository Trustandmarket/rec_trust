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

/* profile/index.html.twig */
class __TwigTemplate_8cd08d722cd449acb3a506dad4fb22f5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/index.html.twig", 1);
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
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    <meta name=\"robots\" content=\"noindex\">


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 21
        yield "    Trust &amp; Market | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.titre-page"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 23
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-profile.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Custom css for input tag -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tagsinput/tagify.css")), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/phone/css/intlTelInput.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Crop css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css\" integrity=\"sha512-cyzxRvewl+FOKTtpBzYjW6x6IAYUCZy3sGP40hn+DQkqeluGRCax7qztK2ImL64SA+C7kVWdLI6wvdlStawhyw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <style>
        user-info-text {
            font-size: 14px;
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            color: black;
        }

        .mimic-label {
            font-family: Roboto, sans-serif;
            font-weight: 300;
            color: #757575;
        }
        .image_area {
            position: relative;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
            float: right;
        }

        .modal-lg{
            max-width: 1000px !important;
        }

        .overlay {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.5);
            overflow: hidden;
            height: 0;
            transition: .5s ease;
            width: 100%;
        }

        .image_area:hover .overlay {
            height: 50%;
            cursor: pointer;
        }

        .text {
            color: #333;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
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
        strong {
             font-weight: bold;
        }
        .cropper-container{
            width: 100%;
        }

        #topBtn {
            /*bottom: 0px !important;*/
        }

        /* Extra small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            main, .container {
                margin-top: 70px;
            }

            .preview {
                overflow: hidden;
                width: 200px;
                height: 200px;
                border: 1px solid red;
                margin: auto;
                float: none;
            }

            .image-bloc{
                margin-top: 25px;
            }
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container {
                margin-top: 100px;
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

            .modal-footer .cancel{
                float: left;
                font-size: large;
            }

            .modal-footer .approve{
                float: right;
                font-size: large;
            }

            .image-bloc{
                margin-top: 25px;
            }

            .preview {
                overflow: hidden;
                width: 200px;
                height: 200px;
                border: 1px solid red;
                margin: auto;
                float: none;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 209
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 210
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 212
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

    // line 213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 214
        yield "    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container mt-2 pt-4\">
                ";
        // line 217
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/index.html.twig", 217)->unwrap()->yield($context);
        // line 218
        yield "                <div class=\"mb-3\">
                    ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "flashes", ["noticeErrorDate"], "method", false, false, false, 219));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 220
            yield "                        <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <span>";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 227));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 228
            yield "                        <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <span>";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "                </div>
                <div class=\"mt-3\">
                    <!-- Lecture des infos -->
                    <div id=\"lectureInfo\" class=\"row\">
                        <div class=\"col-md-3 mb-2\">
                            <img class=\"img-fluid m-auto preview-avatar\" width=\"100% \\9\"
                                 src=\"";
        // line 241
        if ((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 241, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 241, $this->source); })()), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
        }
        yield "\" alt=\"\">
                        </div>
                        <div class=\"col-md-4\">
                            <p class=\"user-info-text\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom"), "html", null, true);
        yield ":
                                <span>";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_name"]) || array_key_exists("last_name", $context) ? $context["last_name"] : (function () { throw new RuntimeError('Variable "last_name" does not exist.', 245, $this->source); })()), "html", null, true);
        yield "</span>
                            </p>
                            ";
        // line 248
        yield "                            <p class=\"user-info-text\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.prenom"), "html", null, true);
        yield ":
                                <span>";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["first_name"]) || array_key_exists("first_name", $context) ? $context["first_name"] : (function () { throw new RuntimeError('Variable "first_name" does not exist.', 249, $this->source); })()), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.sexe"), "html", null, true);
        yield ":
                                <span>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 252, $this->source); })())), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.date-de-naissance"), "html", null, true);
        yield "
                                :
                                <span>";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bdaytime"]) || array_key_exists("bdaytime", $context) ? $context["bdaytime"] : (function () { throw new RuntimeError('Variable "bdaytime" does not exist.', 256, $this->source); })()), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.lieu-de-naissance"), "html", null, true);
        yield "
                                :
                                <span>";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["birth_place"]) || array_key_exists("birth_place", $context) ? $context["birth_place"] : (function () { throw new RuntimeError('Variable "birth_place" does not exist.', 260, $this->source); })())), "html", null, true);
        yield "</span>
                            </p>
                        </div>
                        <div class=\"col-md-4\">
                            <p class=\"user-info-text\">";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresse-email"), "html", null, true);
        yield ":
                                <span>";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "getEmailCanonical", [], "any", false, false, false, 265), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.telephone"), "html", null, true);
        yield ":
                                <span>";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new RuntimeError('Variable "telephone" does not exist.', 268, $this->source); })()), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.activite"), "html", null, true);
        yield ":
                                <span>";
        // line 271
        if ((isset($context["principal_activity"]) || array_key_exists("principal_activity", $context) ? $context["principal_activity"] : (function () { throw new RuntimeError('Variable "principal_activity" does not exist.', 271, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["principal_activity"]) || array_key_exists("principal_activity", $context) ? $context["principal_activity"] : (function () { throw new RuntimeError('Variable "principal_activity" does not exist.', 271, $this->source); })()), "description", [], "any", false, false, false, 271), "html", null, true);
        }
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.competence"), "html", null, true);
        yield "
                                (";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 274, $this->source); })())), "html", null, true);
        yield ") :
                                <span>";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 275, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            yield "<a href=\"#\" class=\"badge badge-info mr-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["c"], "html", null, true);
            yield "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom_commercial"), "html", null, true);
        yield ":
                                <span>";
        // line 278
        if (((isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 278, $this->source); })()) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["first_name"]) || array_key_exists("first_name", $context) ? $context["first_name"] : (function () { throw new RuntimeError('Variable "first_name" does not exist.', 278, $this->source); })()), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 278, $this->source); })()), "html", null, true);
        }
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.departement"), "html", null, true);
        yield ":
                                <span>";
        // line 281
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 281, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 281)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["departements"]) || array_key_exists("departements", $context) ? $context["departements"] : (function () { throw new RuntimeError('Variable "departements" does not exist.', 281, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 282
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 282, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 282), "getDepartement", [], "any", false, false, false, 282) && (CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 282) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 282, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 282), "getDepartement", [], "any", false, false, false, 282), "id", [], "any", false, false, false, 282)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "departement", [], "any", false, false, false, 282), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dep'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield "</span>
                            </p>
                        </div>
                        <div class=\"col-md-12 mt-4\">
                            <!--Accordion wrapper-->
                            <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx\" role=\"tablist\"
                                 aria-multiselectable=\"true\">
                                <!-- Accordion card -->
                                <div class=\"card\">
                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\">
                                        <a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx\"
                                           href=\"#collapseOne1\" aria-expanded=\"true\"
                                           aria-controls=\"collapseOne1\">
                                            <h5 class=\"mb-0\">
                                                <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                   id=\"accordion_address\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresses"), "html", null, true);
        yield "</i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\"
                                         aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h3 class=\"col-md-12\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.domicile"), "html", null, true);
        yield "</h3>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numeroNomRue_domicile"]) || array_key_exists("numeroNomRue_domicile", $context) ? $context["numeroNomRue_domicile"] : (function () { throw new RuntimeError('Variable "numeroNomRue_domicile" does not exist.', 312, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label>";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["codePostal_domicile"]) || array_key_exists("codePostal_domicile", $context) ? $context["codePostal_domicile"] : (function () { throw new RuntimeError('Variable "codePostal_domicile" does not exist.', 317, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label>";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ville_domicile"]) || array_key_exists("ville_domicile", $context) ? $context["ville_domicile"] : (function () { throw new RuntimeError('Variable "ville_domicile" does not exist.', 322, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label for=\"ville\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["region_domicile"]) || array_key_exists("region_domicile", $context) ? $context["region_domicile"] : (function () { throw new RuntimeError('Variable "region_domicile" does not exist.', 326, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label for=\"region\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                    </div>

                                                    <div class=\"md-form\">
                                                        <span>";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                        <select disabled class=\"browser-default custom-select\">
                                                            <option value=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pays_domicile"]) || array_key_exists("pays_domicile", $context) ? $context["pays_domicile"] : (function () { throw new RuntimeError('Variable "pays_domicile" does not exist.', 333, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["pays_domicile"]) || array_key_exists("pays_domicile", $context) ? $context["pays_domicile"] : (function () { throw new RuntimeError('Variable "pays_domicile" does not exist.', 333, $this->source); })())), "html", null, true);
        yield "</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=\"vl\"></div>

                                                <div class=\"col-md-6\">
                                                    <h3 class=\"col-md-12\">";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.livraison"), "html", null, true);
        yield "</h3>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numeroNomRue_livraison"]) || array_key_exists("numeroNomRue_livraison", $context) ? $context["numeroNomRue_livraison"] : (function () { throw new RuntimeError('Variable "numeroNomRue_livraison" does not exist.', 343, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label>";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["codePostal_livraison"]) || array_key_exists("codePostal_livraison", $context) ? $context["codePostal_livraison"] : (function () { throw new RuntimeError('Variable "codePostal_livraison" does not exist.', 348, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label>";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ville_livraison"]) || array_key_exists("ville_livraison", $context) ? $context["ville_livraison"] : (function () { throw new RuntimeError('Variable "ville_livraison" does not exist.', 353, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label>";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                    </div>

                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["region_livraison"]) || array_key_exists("region_livraison", $context) ? $context["region_livraison"] : (function () { throw new RuntimeError('Variable "region_livraison" does not exist.', 358, $this->source); })()), "html", null, true);
        yield "\">
                                                        <label for=\"region\">";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <span>";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                        <select disabled class=\"browser-default custom-select\">
                                                            <option value=\"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pays_livraison"]) || array_key_exists("pays_livraison", $context) ? $context["pays_livraison"] : (function () { throw new RuntimeError('Variable "pays_livraison" does not exist.', 364, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["pays_livraison"]) || array_key_exists("pays_livraison", $context) ? $context["pays_livraison"] : (function () { throw new RuntimeError('Variable "pays_livraison" does not exist.', 364, $this->source); })())), "html", null, true);
        yield "</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                            </div>
                            <!-- Accordion wrapper -->
                        </div>
                        <div class=\"col-md-12 mt-4\">
                            <h5>";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.description"), "html", null, true);
        yield "</h5>
                            <div class=\"p-2\">
                                <div class=\"text-box border border-dark p-2\" style=\"min-height:200px;\">
                                    ";
        // line 380
        yield (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 380, $this->source); })());
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 mt-2\">
                            <h5>";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.reference"), "html", null, true);
        yield "</h5>
                            <div class=\"p-2\">
                                <div class=\"text-box border border-dark p-2\" style=\"min-height:200px;\">
                                    ";
        // line 388
        yield (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 388, $this->source); })());
        yield "
                                </div>
                            </div>
                        </div>
                        <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                            <h5 class=\"py-4 mb-2\">Portfolio (";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["portfolio"]) || array_key_exists("portfolio", $context) ? $context["portfolio"] : (function () { throw new RuntimeError('Variable "portfolio" does not exist.', 393, $this->source); })())), "html", null, true);
        yield ")</h5>
                            <div class=\"owl-carousel owl-theme\">
                                ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["portfolio"]) || array_key_exists("portfolio", $context) ? $context["portfolio"] : (function () { throw new RuntimeError('Variable "portfolio" does not exist.', 395, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 396
            yield "                                    <div class=\"item\">
                                        <div class=\"portfolio-bg lazy\" data-src=\"";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 397), "html", null, true);
            yield "\"></div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        yield "                            </div>
                        </div>

                        <!-- Videos -->
                        <div id=\"mesVideos\" class=\"col-md-12 my-2\">
                            <h5 class=\"py-4 mb-2\">";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.video"), "html", null, true);
        yield "
                                (";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 406, $this->source); })())), "html", null, true);
        yield ")</h5>
                            <div class=\"owl-carousel owl-theme\">
                                ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["imgid"]) || array_key_exists("imgid", $context) ? $context["imgid"] : (function () { throw new RuntimeError('Variable "imgid" does not exist.', 408, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 409
            yield "                                    ";
            if (($context["v"] != "")) {
                // line 410
                yield "                                        <div class=\"item-video\" data-merge=\"3\">
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "\"></a>
                                        </div>
                                    ";
            }
            // line 414
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        yield "                            </div>
                        </div>
                        <!-- End of videos -->
                        <div class=\" col-md-12 text-right\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a id=\"voirProfile\" target=\"_blank\" href=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 421, $this->source); })()))]), "html", null, true);
        yield "\" class=\"btn btn-md btn-dark float-left\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.voir-profil"), "html", null, true);
        yield "</a>
                                </div>
                                <div class=\"col-md-6\">
                                    <button id=\"modifierProfile\" class=\"btn btn-md btn-primary float-right\">";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.bouton-modifier"), "html", null, true);
        yield "</button>
                                </div>
                                ";
        // line 429
        yield "                            </div>
                        </div>
                    </div>
                    <!-- Fin de lecture -->

                    <!-- Modif des infos -->
                    <div id=\"modifInfo\">
                        <form class=\"row\" action=\"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_updateProfile");
        yield "\" method=\"post\" id=\"updateProfile\"
                              enctype=\"multipart/form-data\">
                            <div class=\"col-md-4 mb-2\">
                                <div id=\"blah\">
                                    <img class=\"img-fluid m-auto avatar-preview\" id=\"avatar-preview\" width=\"100% \\9\" src=\"";
        // line 440
        if ((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 440, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 440, $this->source); })()), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            yield " ";
        }
        yield "\">
                                </div>
                                <div class=\"custom-file\">
                                    <label class=\"custom-file-label\" for=\"imageUpload\">
                                        <small>";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.ajouter-photo-profil"), "html", null, true);
        yield "</small>
                                    </label>
                                    <input type=\"file\" class=\"custom-file-input is-valid\" id=\"imageUpload\" name=\"avatar\"
                                           lang=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 447, $this->source); })()), "request", [], "any", false, false, false, 447), "getLocale", [], "method", false, false, false, 447), "html", null, true);
        yield "\" accept=\"image/png,image/jpeg\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"last_name\" required name=\"last_name\" class=\"form-control\"
                                           value=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_name"]) || array_key_exists("last_name", $context) ? $context["last_name"] : (function () { throw new RuntimeError('Variable "last_name" does not exist.', 453, $this->source); })()), "html", null, true);
        yield "\">
                                    <label for=\"last_name\">";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom"), "html", null, true);
        yield "*</label>
                                </div>
                                <input type=\"text\" hidden value=\"\" id=\"crop_image\" name=\"crop_image\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"first_name\" required name=\"first_name\" class=\"form-control\"
                                           value=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["first_name"]) || array_key_exists("first_name", $context) ? $context["first_name"] : (function () { throw new RuntimeError('Variable "first_name" does not exist.', 459, $this->source); })()), "html", null, true);
        yield "\">
                                    <label for=\"prenom\">";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.prenom"), "html", null, true);
        yield " *</label>
                                </div>
                                <div class=\"md-form\">
                                    <select id=\"sexe\" name=\"sexe\" required class=\"browser-default custom-select\">
                                        <option value=\"homme\" ";
        // line 464
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 464, $this->source); })()) && ((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 464, $this->source); })()) == "homme"))) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homme"), "html", null, true);
        yield "</option>
                                        <option value=\"femme\" ";
        // line 465
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 465, $this->source); })()) && ((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 465, $this->source); })()) == "femme"))) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.femme"), "html", null, true);
        yield "</option>
                                        <option value=\"autre\" ";
        // line 466
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 466, $this->source); })()) && ((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 466, $this->source); })()) == "autre"))) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.autre"), "html", null, true);
        yield "</option>
                                    </select>
                                </div>
                                <div class=\"md-form\">
                                    <input autocomplete=\"disabled\" type=\"text\" id=\"bdaytime\"
                                           style=\"font-size:14px; margin-top:20px\" required name=\"bdaytime\"
                                           class=\"form-control form-control-md inputNaissance\"
                                           value=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim((isset($context["bdaytime"]) || array_key_exists("bdaytime", $context) ? $context["bdaytime"] : (function () { throw new RuntimeError('Variable "bdaytime" does not exist.', 473, $this->source); })())), "html", null, true);
        yield "\">
                                    <label for=\"bdaytime\">";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.date-de-naissance"), "html", null, true);
        yield " *</label>
                                </div>
                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.lieu-de-naissance"), "html", null, true);
        yield "</span>
                                    <select id=\"birth_place\" name=\"birth_place\" required
                                            class=\"browser-default custom-select\">
                                        <option value=\"";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["birth_place"]) || array_key_exists("birth_place", $context) ? $context["birth_place"] : (function () { throw new RuntimeError('Variable "birth_place" does not exist.', 480, $this->source); })()), "html", null, true);
        yield "\">";
        if (((isset($context["birth_place"]) || array_key_exists("birth_place", $context) ? $context["birth_place"] : (function () { throw new RuntimeError('Variable "birth_place" does not exist.', 480, $this->source); })()) != "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["birth_place"]) || array_key_exists("birth_place", $context) ? $context["birth_place"] : (function () { throw new RuntimeError('Variable "birth_place" does not exist.', 480, $this->source); })())), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.lieu-de-naissance"), "html", null, true);
            yield " *";
        }
        // line 481
        yield "                                        </option>
                                        ";
        // line 482
        yield from $this->loadTemplate("countryRegister.html.twig", "profile/index.html.twig", 482)->unwrap()->yield($context);
        // line 483
        yield "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"telephone\" name=\"telephone\" class=\"form-control\"
                                           value=\"";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new RuntimeError('Variable "telephone" does not exist.', 489, $this->source); })()), "html", null, true);
        yield "\">
                                    <label class=\"active\" for=\"tel\">";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.telephone"), "html", null, true);
        yield "</label>
                                </div>
                                <div class=\"md-form\">
                                    <input type=\"email\" id=\"email\" required name=\"email\" class=\"form-control\"
                                           value=\"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 494, $this->source); })()), "user", [], "any", false, false, false, 494), "getEmailCanonical", [], "any", false, false, false, 494), "html", null, true);
        yield "\">
                                    <label for=\"email\">";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresse-email"), "html", null, true);
        yield "
                                        *</label></label>
                                </div>
                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.activite"), "html", null, true);
        yield "</span>
                                    <select class='browser-default custom-select' id=\"activite\" name=\"activite\">
                                        <option value=\"\">";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.activite"), "html", null, true);
        yield "</option>
                                        ";
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 502, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 503
            yield "                                            <option ";
            if ((isset($context["principal_activity"]) || array_key_exists("principal_activity", $context) ? $context["principal_activity"] : (function () { throw new RuntimeError('Variable "principal_activity" does not exist.', 503, $this->source); })())) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termId", [], "any", false, false, false, 503) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["principal_activity"]) || array_key_exists("principal_activity", $context) ? $context["principal_activity"] : (function () { throw new RuntimeError('Variable "principal_activity" does not exist.', 503, $this->source); })()), "termId", [], "any", false, false, false, 503))) {
                    yield "selected";
                }
                // line 504
                yield "                                                    ";
            }
            // line 505
            yield "                                                    value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termId", [], "any", false, false, false, 505), "html", null, true);
            yield "\">";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 505, $this->source); })()), "request", [], "any", false, false, false, 505), "locale", [], "any", false, false, false, 505) == "en")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 505), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 505), "html", null, true);
            }
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        yield "                                    </select>
                                </div>
                                <div class=\"md-form\">
                                    <label for=\"competencesModif\"></label>
                                    <h6>";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.competence"), "html", null, true);
        yield "</h6>
                                    <input type=\"text\" placeholder=\"Compétences séparées d'une virgule\"
                                           id=\"competencesModif\" class=\"form-control\" name=\"competence1\"
                                           value=\"";
        // line 514
        if ( !(null === (isset($context["competences"]) || array_key_exists("competences", $context) ? $context["competences"] : (function () { throw new RuntimeError('Variable "competences" does not exist.', 514, $this->source); })()))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["competences"]) || array_key_exists("competences", $context) ? $context["competences"] : (function () { throw new RuntimeError('Variable "competences" does not exist.', 514, $this->source); })()), "metaValue", [], "any", false, false, false, 514), "html", null, true);
            yield " ";
        }
        yield "\"
                                           data-role=\"tagsinput\">
                                </div>
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"nom_commercial\" name=\"nom_commercial\" class=\"form-control\"
                                           value=\"";
        // line 519
        if (((isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 519, $this->source); })()) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["first_name"]) || array_key_exists("first_name", $context) ? $context["first_name"] : (function () { throw new RuntimeError('Variable "first_name" does not exist.', 519, $this->source); })()), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 519, $this->source); })()), "html", null, true);
        }
        yield "\">
                                    <label for=\"nom_commercial\">";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom_commercial"), "html", null, true);
        yield "</label>
                                </div>


                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.departement"), "html", null, true);
        yield "</span>
                                    <select class='browser-default custom-select' id=\"departement\" name=\"departement\">
                                        <option value=\"\"></option>
                                        ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["departements"]) || array_key_exists("departements", $context) ? $context["departements"] : (function () { throw new RuntimeError('Variable "departements" does not exist.', 528, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 529
            yield "                                            <option ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 529, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 529)) {
                // line 530
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 530, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 530), "getDepartement", [], "any", false, false, false, 530) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 530) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 530, $this->source); })()), "getUserUniqueData", [], "any", false, false, false, 530), "getDepartement", [], "any", false, false, false, 530), "id", [], "any", false, false, false, 530)))) {
                    yield "selected";
                }
            }
            // line 531
            yield "                                                    value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 531), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "departement", [], "any", false, false, false, 531), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        yield "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-4\">
                                <!--Accordion wrapper-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\"
                                               href=\"#collapseOne2\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne1\">
                                                <h5 class=\"mb-0\">
                                                    <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                       id=\"accordion_address2\">";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresses"), "html", null, true);
        yield "</i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <h3 class=\"col-md-12\">";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.domicile"), "html", null, true);
        yield "</h3>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"numeroNomRue_domicile\"
                                                                   name=\"numeroNomRue_domicile\"
                                                                   class=\"form-control\" value=\"";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numeroNomRue_domicile"]) || array_key_exists("numeroNomRue_domicile", $context) ? $context["numeroNomRue_domicile"] : (function () { throw new RuntimeError('Variable "numeroNomRue_domicile" does not exist.', 564, $this->source); })()), "html", null, true);
        yield "\">
                                                            <label for=\"numeroNomRue_domicile\">";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"codePostal_domicile\"
                                                                   name=\"codePostal_domicile\"
                                                                   class=\"form-control\" value=\"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["codePostal_domicile"]) || array_key_exists("codePostal_domicile", $context) ? $context["codePostal_domicile"] : (function () { throw new RuntimeError('Variable "codePostal_domicile" does not exist.', 570, $this->source); })()), "html", null, true);
        yield "\">
                                                            <label for=\"codePostal_domicile\">";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"ville_domicile\" name=\"ville_domicile\"
                                                                   class=\"form-control\" value=\"";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ville_domicile"]) || array_key_exists("ville_domicile", $context) ? $context["ville_domicile"] : (function () { throw new RuntimeError('Variable "ville_domicile" does not exist.', 575, $this->source); })()), "html", null, true);
        yield "\">
                                                            <label for=\"ville_domicile\">";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                        </div>


                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"region_domicile\" name=\"region_domicile\" class=\"form-control\" value=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["region_domicile"]) || array_key_exists("region_domicile", $context) ? $context["region_domicile"] : (function () { throw new RuntimeError('Variable "region_domicile" does not exist.', 581, $this->source); })()), "html", null, true);
        yield "\">
                                                            <label for=\"region_domicile\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <span>";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                            <select id=\"pays_domicile\" name=\"pays_domicile\"
                                                                    class=\"browser-default custom-select\">
                                                                ";
        // line 589
        if (((isset($context["pays_domicile"]) || array_key_exists("pays_domicile", $context) ? $context["pays_domicile"] : (function () { throw new RuntimeError('Variable "pays_domicile" does not exist.', 589, $this->source); })()) != "")) {
            // line 590
            yield "                                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pays_domicile"]) || array_key_exists("pays_domicile", $context) ? $context["pays_domicile"] : (function () { throw new RuntimeError('Variable "pays_domicile" does not exist.', 590, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["pays_domicile"]) || array_key_exists("pays_domicile", $context) ? $context["pays_domicile"] : (function () { throw new RuntimeError('Variable "pays_domicile" does not exist.', 590, $this->source); })())), "html", null, true);
            yield "</option>
                                                                    ";
            // line 591
            yield from $this->loadTemplate("countryRegister.html.twig", "profile/index.html.twig", 591)->unwrap()->yield($context);
            // line 592
            yield "                                                                ";
        } else {
            // line 593
            yield "                                                                    ";
            yield from $this->loadTemplate("countryDefault.html.twig", "profile/index.html.twig", 593)->unwrap()->yield($context);
            // line 594
            yield "                                                                ";
        }
        // line 595
        yield "                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"vl\"></div>

                                                    <div class=\"col-md-6\">
                                                        <h3 class=\"col-md-12\">";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.livraison"), "html", null, true);
        yield "</h3>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"numeroNomRue_livraison\"
                                                                   name=\"numeroNomRue_livraison\" class=\"form-control\"
                                                                   value=\"";
        // line 606
        if ( !(null === (isset($context["numeroNomRue_livraison"]) || array_key_exists("numeroNomRue_livraison", $context) ? $context["numeroNomRue_livraison"] : (function () { throw new RuntimeError('Variable "numeroNomRue_livraison" does not exist.', 606, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numeroNomRue_livraison"]) || array_key_exists("numeroNomRue_livraison", $context) ? $context["numeroNomRue_livraison"] : (function () { throw new RuntimeError('Variable "numeroNomRue_livraison" does not exist.', 606, $this->source); })()), "html", null, true);
        }
        yield "\">
                                                            <label for=\"numeroNomRue_livraison\">";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"codePostal_livraison\"
                                                                   name=\"codePostal_livraison\" class=\"form-control\"
                                                                   value=\"";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["codePostal_livraison"]) || array_key_exists("codePostal_livraison", $context) ? $context["codePostal_livraison"] : (function () { throw new RuntimeError('Variable "codePostal_livraison" does not exist.', 612, $this->source); })()), "html", null, true);
        yield "\">
                                                            <label for=\"codePostal_livraison\">";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"ville_livraison\"
                                                                   name=\"ville_livraison\" class=\"form-control\"
                                                                   value=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ville_livraison"]) || array_key_exists("ville_livraison", $context) ? $context["ville_livraison"] : (function () { throw new RuntimeError('Variable "ville_livraison" does not exist.', 618, $this->source); })()), "html", null, true);
        yield "\">
                                                            <label for=\"ville_livraison\">";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"region_livraison\" name=\"region_livraison\" class=\"form-control\" value=\"";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["region_livraison"]) || array_key_exists("region_livraison", $context) ? $context["region_livraison"] : (function () { throw new RuntimeError('Variable "region_livraison" does not exist.', 623, $this->source); })()), "html", null, true);
        yield "\">
                                                            <label for=\"region_livraison\">";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <span>";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                            <select id=\"pays_livraison\" name=\"pays_livraison\"
                                                                    class=\"browser-default custom-select\">
                                                                ";
        // line 631
        if (((isset($context["pays_livraison"]) || array_key_exists("pays_livraison", $context) ? $context["pays_livraison"] : (function () { throw new RuntimeError('Variable "pays_livraison" does not exist.', 631, $this->source); })()) != "")) {
            // line 632
            yield "                                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pays_livraison"]) || array_key_exists("pays_livraison", $context) ? $context["pays_livraison"] : (function () { throw new RuntimeError('Variable "pays_livraison" does not exist.', 632, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["pays_livraison"]) || array_key_exists("pays_livraison", $context) ? $context["pays_livraison"] : (function () { throw new RuntimeError('Variable "pays_livraison" does not exist.', 632, $this->source); })())), "html", null, true);
            yield "</option>
                                                                    ";
            // line 633
            yield from $this->loadTemplate("countryRegister.html.twig", "profile/index.html.twig", 633)->unwrap()->yield($context);
            // line 634
            yield "                                                                ";
        } else {
            // line 635
            yield "                                                                    ";
            yield from $this->loadTemplate("countryDefault.html.twig", "profile/index.html.twig", 635)->unwrap()->yield($context);
            // line 636
            yield "                                                                ";
        }
        // line 637
        yield "                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->
                            </div>
                            <div class=\"col-md-12 mt-4\">
                                <h5>";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.description"), "html", null, true);
        yield "</h5>
                                <div class=\"form-group\">
                                <textarea class=\"form-control border-dark\" id=\"description\" name=\"description\"
                                          rows=\"7\">";
        // line 652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 652, $this->source); })()), "html", null, true);
        yield "</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-2\">
                                <h5>";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.reference"), "html", null, true);
        yield "</h5>
                                <div class=\"form-group\">
                                <textarea class=\"form-control border-dark\" id=\"reference\" name=\"reference\" rows=\"7\">";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 658, $this->source); })()), "html", null, true);
        yield "</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-2\">
                                <h5>Portfolio</h5>
                                <div class=\"form-group\">
                                    <div class=\"p-2\">
                                        <div class=\"border border-dark p-2\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12 d-flex justify-content-center\">
                                                    <ul class=\"portfolio-ul\">
                                                        ";
        // line 669
        if ((isset($context["portfolio"]) || array_key_exists("portfolio", $context) ? $context["portfolio"] : (function () { throw new RuntimeError('Variable "portfolio" does not exist.', 669, $this->source); })())) {
            // line 670
            yield "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["portfolio"]) || array_key_exists("portfolio", $context) ? $context["portfolio"] : (function () { throw new RuntimeError('Variable "portfolio" does not exist.', 670, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 671
                yield "                                                                <li style=\"background-image: url(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 671), "html", null, true);
                yield ");\"
                                                                    class=\"aimg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 674
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_portfolio", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 674)]), "html", null, true);
                yield "\"
                                                                   class=\"delete_port ld-over-inverse\"
                                                                   style=\"color:#fff\">Supprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 682
            yield "                                                        ";
        }
        // line 683
        yield "                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <h6 class=\"control-label col-md-3\">";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-portfolio"), "html", null, true);
        yield "</h6>
                                                <div class=\"col-md-8\">
                                                    <div class=\"row\">
                                                        <div id=\"coba\" class=\"row\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-12 mt-2\">
                                <h5>";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.video"), "html", null, true);
        yield "</h5>
                                <div class=\"p-2\">
                                    <div class=\"border border-dark p-2\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 d-flex justify-content-center\">
                                                <ul class=\"videos-ul\">
                                                    ";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["imgid"]) || array_key_exists("imgid", $context) ? $context["imgid"] : (function () { throw new RuntimeError('Variable "imgid" does not exist.', 706, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 707
            yield "                                                        ";
            if (($context["v"] != "")) {
                // line 708
                yield "                                                            <li style=\"background-image: url('https://img.youtube.com/vi/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "/0.jpg');\"
                                                                class=\"aimg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 711
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_video", ["id" => $context["v"]]), "html", null, true);
                yield "\"
                                                               class=\"delete_port ld-over-inverse\" style=\"color:#fff\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </li>
                                                        ";
            }
            // line 719
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        yield "                                                </ul>
                                            </div>
                                        </div>
                                        <div id=\"newVideos\" class=\"row mt-3\">
                                            <div class=\"col-md-3\">
                                                <h6>";
        // line 725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-youtube-link"), "html", null, true);
        yield "</h6>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <div id=\"newVideosRow\" class=\"row\">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"md-form\">
                                                            <input type=\"text\"
                                                                   pattern=\"^(http(s)?:\\/\\/)?((w){3}.)?youtu(be|.be)?(\\.com)?\\/.+\"
                                                                   class=\"form-control border p-2\" name=\"new_vid[]\"
                                                                   placeholder=\"Add new YouTube video link\">
                                                        </div>
                                                        <a id=\"addScnt\" href=\"#\"
                                                           class=\"btn btn-md btn-warning\">";
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add"), "html", null, true);
        yield "</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offset-md-6 col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <button id=\"send\" type=\"submit\"
                                                class=\"btn btn-md btn-success ld-over-inverse \">";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-modification-profil.bouton-modifier"), "html", null, true);
        yield "
                                            <i class=\"ld ld-ring ld-spin\"></i>
                                        </button>
                                    </div>
                                    <div class=\"col\">
                                        <button id=\"annulerModif\" type=\"button\" class=\"btn btn-md btn-warning\">";
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-modification-profil.bouton-annuler"), "html", null, true);
        yield "</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Fin des modifs -->
                    <!-- Crop modal -->
                    <div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Redimensionner votre image et enregistrer</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"img-container px-3\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\" style=\"margin: inherit;\">
                                                <img src=\"\" id=\"sample_image\" />
                                            </div>
                                            <div class=\"col-md-4 image-bloc\">
                                                <div class=\"preview\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-warning cancel\" data-dismiss=\"modal\"><b>Annuler</b></button>
                                    <button type=\"button\" id=\"crop\" class=\"btn btn-primary approve\"><b>Enregistrer</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Crop modal -->
                </div>
            </div>

            ";
        // line 794
        yield from $this->loadTemplate("partials/project.html.twig", "profile/index.html.twig", 794)->unwrap()->yield($context);
        // line 795
        yield "            ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/index.html.twig", 795)->unwrap()->yield($context);
        // line 796
        yield "        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 799
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 800
        yield "        ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "<!-- Modal for supprimer -->
        <div class=\"modal fade right\" id=\"deleteTarget\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteTarget\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"row\">
                        <div class=\"col-md-6 px-0\" style=\"background-size: cover\">
                            <img src=\"";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/modal/img-log.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\"
                                 style=\"width: fit-content\">
                        </div>
                        <div class=\"col-md-6 px-0 right-section-modal\">
                            <div class=\"modal-header border-bottom-0\">
                                <h5 class=\"modal-title\"
                                    id=\"exampleModalPreviewLabel\">";
        // line 813
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
        // line 822
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.effacer-compte-donnees"), "html", null, true);
        yield "</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer border-top-0 pb-0\">
                                <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Basic example\">
                                    <button type=\"button\" class=\"btn btn-lg firstletter-capital logout-no\"
                                            data-dismiss=\"modal\">";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.non"), "html", null, true);
        yield "</button>
                                    <button type=\"button\"
                                            class=\"btn btn-lg btn-primary firstletter-capital logout-yes delete_port2\">";
        // line 831
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
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_profil", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 839, $this->source); })())]), "html", null, true);
        yield "\"/>
        <input id=\"hornsUrlDeleteAll\" hidden value=\"";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_profil_all", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 840, $this->source); })())]), "html", null, true);
        yield "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 843
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 844
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 846
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\">
    </script><!-- jQuery plugin for spartan image picker -->
    <script type=\"text/javascript\"
            src=\"";
        // line 849
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/spartan-image-picker/spartan-multi-image-picker-min.js"), "html", null, true);
        yield "\">
    </script><!-- jQuery plugin for input tags -->
    <script src=\"";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tagsinput/jQuery.tagify.min.js")), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script><!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 854
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/phone/js/intlTelInput.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 855
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Tinymce editor -->
    <script type=\"text/javascript\" src='";
        // line 857
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>

    <!-- Crop cdn -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js\" integrity=\"sha512-6lplKUSl86rUVprDIjiW8DuOniNX8UDoRATqZSds/7t6zCQZfaCe3e5zcGaQwxa8Kpn5RTM9Fvl3X2lLV4grPQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <script>
        function getUnique(array) {
            var uniqueArray = [];
            // Loop through array values
            for (i = 0; i < array.length; i++) {
                if (uniqueArray.indexOf(array[i]) === -1) {
                    uniqueArray.push(array[i]);
                }
            }
            return uniqueArray;
        }

        function validateEmail(email) {
            var re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(email);
        }

        function validatePhoneNumber(phone) {
            var re = /^(\\+|00)[0-9]{1,3}[0-9 ]{4,20}(?:x.+)?\$/;
            return re.test(phone);
        }

        // pattern=\"^(6|2)[. ]{0,1}[0-9 .]{8,13}(?:x.+)?\$\"

        //Accordeon1 and 2

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
        //End Accordeon1
        \$(document).ready(function () {
            let docWidth = document.documentElement.offsetWidth;
            tinymce.init({
                selector: 'textarea#description',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,";
        // line 929
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 929, $this->source); })()), "request", [], "any", false, false, false, 929), "locale", [], "any", false, false, false, 929) == "fr")) {
            // line 930
            yield "                language: 'fr_FR',";
        }
        // line 931
        yield "            });
            tinymce.init({
                selector: 'textarea#reference',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,";
        // line 941
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 941, $this->source); })()), "request", [], "any", false, false, false, 941), "locale", [], "any", false, false, false, 941) == "fr")) {
            // line 942
            yield "                language: 'fr_FR',";
        }
        // line 943
        yield "            });

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                }
            });


            \$(function () {
                \$('.lazy').lazy();
            });

            \$(\"[for=tel]\").addClass(\"active\");
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
                center: true,
                /* responsive:{
                              480:{
                                  items:2
                              },
                              600:{
                                  items:2
                              }
                          }*/
            });


// add/remove new video in the update section
            let scntDiv = \$('#newVideosRow');
            let i = \$('#newVideosRow .col-md-4').length + 1;

            \$('#addScnt').on('click', function () {
                \$('<div class=\"col-md-4\"><div class=\"md-form\"> <input type=\"url\" class=\"form-control border p-2\" name=\"new_vid[]\" placeholder=\"";
        // line 990
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-youtube-link"), "html", null, true);
        yield "\"><div class=\"valid-feedback\">OK!</div><div class=\"invalid-feedback\">Ce champ contient une erreur!</div></div> <a class=\"btn btn-md btn-danger\" id=\"retirerSec\">         ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.supprimer"), "html", null, true);
        yield "</a></div>').appendTo(scntDiv);
                i++;
            });

            \$('#newVideosRow').on('click', '#retirerSec', function () {
                \$(this).parents('.col-md-4').remove();
                i--;
            });

// add new portfolio images
            \$(\"#coba\").spartanMultiImagePicker({
                fieldName: 'file[]',
                status: false,
                loaderIcon: '<i class=\"fas fa-sync fa-spin\"></i>',
                maxFileSize: '1048576',
                url: \$(\"#containerForPortfolio\").attr(\"addPortfolioUrl\"),
                additionalParam: {
                    name: 'portfolios[]'
                },
                onSizeErr: function (index, file) {
                    toastr.clear();
                    toastr.warning(\"";
        // line 1011
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.taille_fichier"), "html", null, true);
        yield "\");
                },
                onRemoveRow: function (index) {
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

// first thing turn Hide \"Update section\" input field
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

            \$(\"div[role='wrapper']\").append(\"<div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");


// Validate fields
// Date format
            \$('.inputNaissance').datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome',
                format: 'mm/dd/yyyy',
                label: false
            });
// First Name
            \$(\"#first_name\").change(function () {
                let first_name = \$(\"#first_name\").val();
                if (isNaN(first_name)) {
                    \$(\"#first_name\").removeClass(\"is-invalid\");
                    \$(\"#first_name\").addClass(\"is-valid\");
                } else {
                    \$(\"#first_name\").removeClass(\"is-valid\");
                    \$(\"#first_name\").addClass(\"is-invalid\");
                }
            });

// Last Name
            \$(\"#last_name\").change(function () {
                let last_name = \$(\"#last_name\").val();
                if (isNaN(last_name)) {
                    \$(\"#last_name\").removeClass(\"is-invalid\");
                    \$(\"#last_name\").addClass(\"is-valid\");
                } else {
                    \$(\"#last_name\").removeClass(\"is-valid\");
                    \$(\"#last_name\").addClass(\"is-invalid\");
                }
            });

            \$(\"#sexe\").change(function () {
                let sexe = \$(\"#sexe\").val();
                if (isNaN(sexe)) {
                    \$(\"#sexe\").removeClass(\"is-invalid\");
                    \$(\"#sexe\").addClass(\"is-valid\");
                } else {
                    \$(\"#sexe\").removeClass(\"is-valid\");
                    \$(\"#sexe\").addClass(\"is-invalid\");
                }
            });


            \$(\"#email\").keyup(function () {
                let email = \$(\"#email\").val();
                if (validateEmail(email)) {
                    \$(\"#email\").removeClass(\"is-invalid\");
                    \$(\"#email\").addClass(\"is-valid\");
                } else {
                    \$(\"#email\").removeClass(\"is-valid\");
                    \$(\"#email\").addClass(\"is-invalid\");
                }
            });

            \$(\"#telephone\").keyup(function () {
                let phone = \$(\"#telephone\").val().replace(/\\s|[a-zA-Z]/g, \"\");
                \$(\"#telephone\").val(phone);
                if (validatePhoneNumber(phone)) {
                    \$(\"#telephone\").removeClass(\"is-invalid\");
                    \$(\"#telephone\").addClass(\"is-valid\");
                } else {
                    \$(\"#telephone\").removeClass(\"is-valid\");
                    \$(\"#telephone\").addClass(\"is-invalid\");
                }
            });

            \$(\"#bdaytime\").change(function () {
                let bdaytime = \$(\"#bdaytime\").val().replace(/\\s|[a-zA-Z]/g, \"\");
                \$(\"#bdaytime\").val(bdaytime);
                if (bdaytime != '') {
                    \$(\"#bdaytime\").removeClass(\"is-invalid\");
                    \$(\"#bdaytime\").addClass(\"is-valid\");
                } else {
                    \$(\"#bdaytime\").removeClass(\"is-valid\");
                    \$(\"#bdaytime\").addClass(\"is-invalid\");
                }
            });

            \$(\"#birth_place\").change(function () {
                let birth_place = \$(\"#birth_place\").val();
                if (isNaN(birth_place)) {
                    \$(\"#birth_place\").removeClass(\"is-invalid\");
                    \$(\"#birth_place\").addClass(\"is-valid\");
                } else {
                    \$(\"#birth_place\").removeClass(\"is-valid\");
                    \$(\"#birth_place\").addClass(\"is-invalid\");
                }
            });

            \$(\"#raison_sociale\").keyup(function () {
                let nom = \$(\"#raison_sociale\").val();
                if (isNaN(nom)) {
                    \$(\"#raison_sociale\").removeClass(\"is-invalid\");
                    \$(\"#raison_sociale\").addClass(\"is-valid\");
                } else {
                    \$(\"#raison_sociale\").removeClass(\"is-valid\");
                    \$(\"#raison_sociale\").addClass(\"is-invalid\");
                }
            });

            \$(\"#siret\").keyup(function () {
                let nom = \$(\"#siret\").val();
                if (isNaN(nom)) {
                    \$(\"#siret\").removeClass(\"is-invalid\");
                    \$(\"#siret\").addClass(\"is-valid\");
                } else {
                    \$(\"#siret\").removeClass(\"is-valid\");
                    \$(\"#siret\").addClass(\"is-invalid\");
                }
            });

            \$(\"#tva\").change(function () {
                let nom = \$(\"#tva\").val();
                if (isNaN(nom)) {
                    \$(\"#tva\").removeClass(\"is-invalid\");
                    \$(\"#tva\").addClass(\"is-valid\");
                } else {
                    \$(\"#tva\").removeClass(\"is-valid\");
                    \$(\"#tva\").addClass(\"is-invalid\");
                }
            });
//Code postal livraison et domicile
            \$(\"#codePostal_livraison\").keyup(function () {
                let codePostal_livraison = \$(\"#codePostal_livraison\").val().replace(/\\s/g, \"\");
                \$(\"#codePostal_livraison\").val(codePostal_livraison);
                if (codePostal_livraison != '') {
                    \$(\"#codePostal_livraison\").removeClass(\"is-invalid\");
                    \$(\"#codePostal_livraison\").addClass(\"is-valid\");
                } else {
                    \$(\"#codePostal_livraison\").removeClass(\"is-valid\");
                    \$(\"#codePostal_livraison\").addClass(\"is-invalid\");
                }
            });

            \$(\"#codePostal_domicile\").keyup(function () {
                let codePostal_domicile = \$(\"#codePostal_domicile\").val().replace(/\\s/g, \"\");
                \$(\"#codePostal_domicile\").val(codePostal_domicile);
                if (codePostal_domicile != '') {
                    \$(\"#codePostal_domicile\").removeClass(\"is-invalid\");
                    \$(\"#codePostal_domicile\").addClass(\"is-valid\");
                    \$(\"#codePostal_livraison\").val(codePostal_domicile);
                    \$(\"[for=codePostal_livraison]\").addClass(\"active\");
                } else {
                    \$(\"#codePostal_domicile\").removeClass(\"is-valid\");
                    \$(\"#codePostal_domicile\").addClass(\"is-invalid\");
                }
            });

            \$(\"#ville_domicile\").keyup(function () {
                \$(\"#ville_livraison\").val(\$(\"#ville_domicile\").val());
                \$(\"[for=ville_livraison]\").addClass(\"active\");
            });

            \$(\"#region_domicile\").keyup(function () {
                \$(\"#region_livraison\").val(\$(\"#region_domicile\").val());
                \$(\"[for=region_livraison]\").addClass(\"active\");
            });

            \$(\"#numeroNomRue_domicile\").keyup(function () {
                \$(\"#numeroNomRue_livraison\").val(\$(\"#numeroNomRue_domicile\").val());
                \$(\"[for=numeroNomRue_livraison]\").addClass(\"active\");
            });

            \$(\"#numeroNomRue_domicile\").keyup(function () {
                \$(\"#numeroNomRue_livraison\").val(\$(\"#numeroNomRue_domicile\").val());
                \$(\"[for=numeroNomRue_livraison]\").addClass(\"active\");
            });

            let \$modal = \$('#modal');
            let image = document.getElementById('sample_image');
            let crop_image = \"\";
            let cropper;

            document.getElementById('imageUpload').addEventListener('change', function (event) {
                let fileInput = event.target;
                let file = fileInput.files[0];
                let files = event.target.files;
                let message_size = '';
                if (fileInput.files.length !== 0 && file.size > 1048576) {
                    fileInput.value = \"\";
                    message_size = \"";
        // line 1234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.taille_fichier_avatar"), "html", null, true);
        yield "\";
                    toastr.warning(message_size);
                }else if(fileInput.files.length !== 0 && file.size < 1048576){
                    //Handle crop
                    let done = function(url){
                        image.src = url;
                        \$modal.modal('show');
                    };
                    const reader = new FileReader();
                    reader.onload = function(event)
                    {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                }
            });

            \$modal.on('shown.bs.modal', function() {
                let cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    preview:'.preview'
                });
            }).on('hidden.bs.modal', function(){
                cropper.destroy();
                cropper = null;
                \$('#imageUpload').val('');
            });

            \$('#crop').click(function(){
                canvas = cropper.getCroppedCanvas({
                    width:400,
                    height:400
                });

                canvas.toBlob(function(blob){
                    url = URL.createObjectURL(blob);
                    let reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function(){
                        let base64data = reader.result;

                        \$('#blah').html('<img class=\"img-fluid m-auto avatar-preview\" id=\"avatar-preview\" style=\"max-height:400px\" width=\"100%\" src=\"' + url  + '\" >');
                        crop_image = base64data;
                        \$modal.modal('hide');
                    };
                });
            });

            // input tags
            \$('#competencesModif').tagify();

            \$('#updateProfile').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#crop_image').val(crop_image);
                \$('#telephone').val(\$('#telephone').val().replace(/\\s/g, ''));

                \$('#send').addClass('running');
                toastr.info(\"";
        // line 1292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "\");

                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        console.log(response);
                        if (response.result == 1) {
                            toastr.clear();
                            toastr.success(\"";
        // line 1307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        }
                        if (response.result == 2) {
                            toastr.clear();
                            toastr.error('noticeErrorDate', 'La date de naissance n\\'est pas conforme au format attentu; Veuillez mettre a jour votre profil.');
                            window.location = \"\";
                        } else if (response.result == 0) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 1317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (response) {
                        //console.log(response);
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.error"), "html", null, true);
        yield "\");
                    }
                });
                return false;
            });

            \$(document).on('click', '.delete_port', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                let t = \$(this);
                let urlPath = \$(this).attr('href');
                swal({
                    title: \"Suppression de l'objet\",
                    text: \"Attention l'objet sera Supprimé et n'apparaitra plus sur le site\",
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
                            success: function (response) {
                                if (response == 1) {
                                    swal(\"suppression terminée\", \"\", \"success\");
                                    t.parents('li').hide();
                                } else {
                                    swal(\"erreur de suppression\", \"\", \"error\");
                                }
                            },
                            error: function (response) {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
            });

            \$(document).on('click', '.delete_port2', function (e) {
                let urlPath = '';
                e.preventDefault();
                toastr.info(\"";
        // line 1371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.en-cours"), "html", null, true);
        yield "\");
                if (\$('#horns:checkbox:checked').length > 0) {
                    urlPath = \$(\"#hornsUrlDeleteAll\").val();
                } else {
                    urlPath = \$(\"#hornsUrlDelete\").val();
                }
                \$.ajax({
                    url: urlPath,
                    type: 'POST',
                    success: function (response) {
                        if (response > 0) {
                            toastr.clear();
                            toastr.success(\"";
        // line 1383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.succes"), "html", null, true);
        yield "\");
                            window.setTimeout(function () {
                                window.location = \"";
        // line 1385
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\";
                            }, 200);
                        }
                    },
                    error: function (response) {
                        toastr.clear();
                        toastr.error(\"";
        // line 1391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.error"), "html", null, true);
        yield "\");
                    }
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
                \"showDuration\": \"1600\",
                \"closeDuration\": \"1600\",
                \"timeOut\": \"2000\",
                \"extendedTimeOut\": \"2200\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let input = document.querySelector(\"#telephone\");
            window.intlTelInput(input, {
                autoHideDialCode: true,
                initialCountry: \"fr\",
                nationalMode: false,
                formatOnDisplay: false,
                // separateDialCode: true,
                utilsScript: \"/assets/phone/js/utils.js\"
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
        return "profile/index.html.twig";
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
        return array (  2303 => 1391,  2294 => 1385,  2289 => 1383,  2274 => 1371,  2224 => 1324,  2214 => 1317,  2201 => 1307,  2183 => 1292,  2122 => 1234,  1896 => 1011,  1870 => 990,  1821 => 943,  1818 => 942,  1816 => 941,  1804 => 931,  1801 => 930,  1799 => 929,  1724 => 857,  1719 => 855,  1715 => 854,  1711 => 853,  1707 => 852,  1703 => 851,  1698 => 849,  1692 => 846,  1686 => 844,  1676 => 843,  1666 => 840,  1662 => 839,  1651 => 831,  1646 => 829,  1636 => 822,  1624 => 813,  1615 => 807,  1604 => 800,  1594 => 799,  1584 => 796,  1581 => 795,  1579 => 794,  1536 => 754,  1528 => 749,  1513 => 737,  1498 => 725,  1491 => 720,  1485 => 719,  1474 => 711,  1467 => 708,  1464 => 707,  1460 => 706,  1451 => 700,  1435 => 687,  1429 => 683,  1426 => 682,  1412 => 674,  1405 => 671,  1400 => 670,  1398 => 669,  1384 => 658,  1379 => 656,  1372 => 652,  1366 => 649,  1352 => 637,  1349 => 636,  1346 => 635,  1343 => 634,  1341 => 633,  1334 => 632,  1332 => 631,  1326 => 628,  1319 => 624,  1315 => 623,  1308 => 619,  1304 => 618,  1296 => 613,  1292 => 612,  1284 => 607,  1278 => 606,  1271 => 602,  1262 => 595,  1259 => 594,  1256 => 593,  1253 => 592,  1251 => 591,  1244 => 590,  1242 => 589,  1236 => 586,  1229 => 582,  1225 => 581,  1217 => 576,  1213 => 575,  1206 => 571,  1202 => 570,  1194 => 565,  1190 => 564,  1183 => 560,  1169 => 549,  1151 => 533,  1140 => 531,  1134 => 530,  1131 => 529,  1127 => 528,  1121 => 525,  1113 => 520,  1105 => 519,  1093 => 514,  1087 => 511,  1081 => 507,  1066 => 505,  1063 => 504,  1057 => 503,  1053 => 502,  1049 => 501,  1044 => 499,  1037 => 495,  1033 => 494,  1026 => 490,  1022 => 489,  1014 => 483,  1012 => 482,  1009 => 481,  1000 => 480,  994 => 477,  988 => 474,  984 => 473,  970 => 466,  962 => 465,  954 => 464,  947 => 460,  943 => 459,  935 => 454,  931 => 453,  922 => 447,  916 => 444,  904 => 440,  897 => 436,  888 => 429,  883 => 424,  875 => 421,  867 => 415,  861 => 414,  855 => 411,  852 => 410,  849 => 409,  845 => 408,  840 => 406,  836 => 405,  829 => 400,  820 => 397,  817 => 396,  813 => 395,  808 => 393,  800 => 388,  794 => 385,  786 => 380,  780 => 377,  762 => 364,  757 => 362,  751 => 359,  747 => 358,  740 => 354,  736 => 353,  729 => 349,  725 => 348,  718 => 344,  714 => 343,  709 => 341,  696 => 333,  691 => 331,  684 => 327,  680 => 326,  674 => 323,  670 => 322,  663 => 318,  659 => 317,  652 => 313,  648 => 312,  642 => 309,  628 => 298,  601 => 282,  596 => 281,  592 => 280,  583 => 278,  579 => 277,  565 => 275,  561 => 274,  557 => 273,  550 => 271,  546 => 270,  541 => 268,  537 => 267,  532 => 265,  528 => 264,  521 => 260,  516 => 258,  511 => 256,  506 => 254,  501 => 252,  497 => 251,  492 => 249,  487 => 248,  482 => 245,  478 => 244,  468 => 241,  460 => 235,  448 => 229,  445 => 228,  440 => 227,  428 => 221,  425 => 220,  421 => 219,  418 => 218,  416 => 217,  411 => 214,  401 => 213,  385 => 212,  374 => 210,  364 => 209,  183 => 36,  177 => 33,  173 => 32,  169 => 31,  165 => 30,  161 => 29,  157 => 28,  152 => 26,  148 => 25,  144 => 24,  139 => 23,  129 => 22,  120 => 21,  110 => 20,  97 => 14,  91 => 11,  85 => 8,  80 => 6,  74 => 4,  64 => 3,  47 => 1,);
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
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <meta name=\"msapplication-TileImage\"
          content=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\"/>
    <meta name=\"robots\" content=\"noindex\">


{% endblock %}

{% block title %}
    Trust &amp; Market | {{ 'profil-utilisateur.liens.titre-page'|trans }}{% endblock %}
{% block style %}
    {{ parent() }}
    <link href=\"{{ preload(asset('assets/css/custome.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ preload(asset('assets/css/style-profile.css')) }}\" rel=\"stylesheet\">
    <!-- Custom css for input tag -->
    <link rel=\"stylesheet\" href=\"{{ preload(asset('assets/css/tagsinput/tagify.css')) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/phone/css/intlTelInput.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Custom css for camroll -->
    <link href=\"{{ asset('assets/css/camroll/camroll_slider.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Crop css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css\" integrity=\"sha512-cyzxRvewl+FOKTtpBzYjW6x6IAYUCZy3sGP40hn+DQkqeluGRCax7qztK2ImL64SA+C7kVWdLI6wvdlStawhyw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <style>
        user-info-text {
            font-size: 14px;
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            color: black;
        }

        .mimic-label {
            font-family: Roboto, sans-serif;
            font-weight: 300;
            color: #757575;
        }
        .image_area {
            position: relative;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
            float: right;
        }

        .modal-lg{
            max-width: 1000px !important;
        }

        .overlay {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.5);
            overflow: hidden;
            height: 0;
            transition: .5s ease;
            width: 100%;
        }

        .image_area:hover .overlay {
            height: 50%;
            cursor: pointer;
        }

        .text {
            color: #333;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
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
        strong {
             font-weight: bold;
        }
        .cropper-container{
            width: 100%;
        }

        #topBtn {
            /*bottom: 0px !important;*/
        }

        /* Extra small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            main, .container {
                margin-top: 70px;
            }

            .preview {
                overflow: hidden;
                width: 200px;
                height: 200px;
                border: 1px solid red;
                margin: auto;
                float: none;
            }

            .image-bloc{
                margin-top: 25px;
            }
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container {
                margin-top: 100px;
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

            .modal-footer .cancel{
                float: left;
                font-size: large;
            }

            .modal-footer .approve{
                float: right;
                font-size: large;
            }

            .image-bloc{
                margin-top: 25px;
            }

            .preview {
                overflow: hidden;
                width: 200px;
                height: 200px;
                border: 1px solid red;
                margin: auto;
                float: none;
            }
        }
    </style>
{% endblock %}
{% block header %}
    {{ parent() }}
{% endblock %}
{% block navigation %}{% endblock %}
{% block body %}
    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container mt-2 pt-4\">
                {% include 'menuProfile.html.twig' %}
                <div class=\"mb-3\">
                    {% for message in app.flashes('noticeErrorDate') %}
                        <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <span>{{ message }}</span>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('notice') %}
                        <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <span>{{ message }}</span>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"mt-3\">
                    <!-- Lecture des infos -->
                    <div id=\"lectureInfo\" class=\"row\">
                        <div class=\"col-md-3 mb-2\">
                            <img class=\"img-fluid m-auto preview-avatar\" width=\"100% \\9\"
                                 src=\"{% if avatar %}{{ avatar }}{% else %}{{ asset('assets/img/profile/avatar-profile.png') }}{% endif %}\" alt=\"\">
                        </div>
                        <div class=\"col-md-4\">
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.nom'|trans }}:
                                <span>{{ last_name }}</span>
                            </p>
                            {# Go to next line #}
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.prenom'|trans }}:
                                <span>{{ first_name }}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.sexe'|trans }}:
                                <span>{{ sexe|trans }}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.date-de-naissance'|trans }}
                                :
                                <span>{{ bdaytime }}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.lieu-de-naissance'|trans }}
                                :
                                <span>{{ birth_place|country_name }}</span>
                            </p>
                        </div>
                        <div class=\"col-md-4\">
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.adresse-email'|trans }}:
                                <span>{{ app.user.getEmailCanonical }}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.telephone'|trans }}:
                                <span>{{ telephone }}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.activite'|trans }}:
                                <span>{% if principal_activity %}{{ principal_activity.description }}{% endif %}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.competence'|trans }}
                                ({{ competence|length }}) :
                                <span>{% for c in competence %}<a href=\"#\" class=\"badge badge-info mr-1\">{{ c }}</a>{% endfor %}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.nom_commercial'|trans }}:
                                <span>{% if nom_commercial == '' %}{{ first_name }}{% else %}{{ nom_commercial }}{% endif %}</span>
                            </p>
                            <p class=\"user-info-text\">{{ 'profil-utilisateur.formulaire-profil.departement'|trans }}:
                                <span>{% if user.getUserUniqueData %}{% for dep in departements %}
                                        {% if user.getUserUniqueData.getDepartement and dep.id == user.getUserUniqueData.getDepartement.id %}{{ dep.departement }}{% endif %}{% endfor %}{% endif %}</span>
                            </p>
                        </div>
                        <div class=\"col-md-12 mt-4\">
                            <!--Accordion wrapper-->
                            <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx\" role=\"tablist\"
                                 aria-multiselectable=\"true\">
                                <!-- Accordion card -->
                                <div class=\"card\">
                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\">
                                        <a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx\"
                                           href=\"#collapseOne1\" aria-expanded=\"true\"
                                           aria-controls=\"collapseOne1\">
                                            <h5 class=\"mb-0\">
                                                <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                   id=\"accordion_address\">{{ 'profil-utilisateur.formulaire-profil.adresses'|trans }}</i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\"
                                         aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h3 class=\"col-md-12\">{{ 'profil-utilisateur.formulaire-profil.domicile'|trans }}</h3>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"{{ numeroNomRue_domicile }}\">
                                                        <label>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue'|trans }}</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"{{ codePostal_domicile }}\">
                                                        <label>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal'|trans }}</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"{{ ville_domicile }}\">
                                                        <label for=\"ville\">{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-ville'|trans }}</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"{{ region_domicile }}\">
                                                        <label for=\"region\">{{ 'profil-utilisateur.formulaire-profil.region'|trans }}</label>
                                                    </div>

                                                    <div class=\"md-form\">
                                                        <span>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-pays'|trans }}</span>
                                                        <select disabled class=\"browser-default custom-select\">
                                                            <option value=\"{{ pays_domicile }}\">{{ pays_domicile|country_name }}</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=\"vl\"></div>

                                                <div class=\"col-md-6\">
                                                    <h3 class=\"col-md-12\">{{ 'profil-utilisateur.formulaire-profil.livraison'|trans }}</h3>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"{{ numeroNomRue_livraison }}\">
                                                        <label>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue'|trans }}</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"{{ codePostal_livraison }}\">
                                                        <label>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal'|trans }}</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"{{ ville_livraison }}\">
                                                        <label>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-ville'|trans }}</label>
                                                    </div>

                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"{{ region_livraison }}\">
                                                        <label for=\"region\">{{ 'profil-utilisateur.formulaire-profil.region'|trans }}</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <span>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-pays'|trans }}</span>
                                                        <select disabled class=\"browser-default custom-select\">
                                                            <option value=\"{{ pays_livraison }}\">{{ pays_livraison|country_name }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                            </div>
                            <!-- Accordion wrapper -->
                        </div>
                        <div class=\"col-md-12 mt-4\">
                            <h5>{{ 'profil-utilisateur.formulaire-profil.description'|trans }}</h5>
                            <div class=\"p-2\">
                                <div class=\"text-box border border-dark p-2\" style=\"min-height:200px;\">
                                    {{ description|raw }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 mt-2\">
                            <h5>{{ 'profil-utilisateur.formulaire-profil.reference'|trans }}</h5>
                            <div class=\"p-2\">
                                <div class=\"text-box border border-dark p-2\" style=\"min-height:200px;\">
                                    {{ reference|raw }}
                                </div>
                            </div>
                        </div>
                        <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                            <h5 class=\"py-4 mb-2\">Portfolio ({{ portfolio|length }})</h5>
                            <div class=\"owl-carousel owl-theme\">
                                {% for p in portfolio %}
                                    <div class=\"item\">
                                        <div class=\"portfolio-bg lazy\" data-src=\"{{ p.guid }}\"></div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>

                        <!-- Videos -->
                        <div id=\"mesVideos\" class=\"col-md-12 my-2\">
                            <h5 class=\"py-4 mb-2\">{{ 'profil-utilisateur.formulaire-profil.video'|trans }}
                                ({{ video|length }})</h5>
                            <div class=\"owl-carousel owl-theme\">
                                {% for v in imgid %}
                                    {% if v != '' %}
                                        <div class=\"item-video\" data-merge=\"3\">
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/{{ v }}\"></a>
                                        </div>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                        <!-- End of videos -->
                        <div class=\" col-md-12 text-right\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a id=\"voirProfile\" target=\"_blank\" href=\"{{ path('profile_detailsProfessionnel',{'id': 'infos-profil-' ~ id}) }}\" class=\"btn btn-md btn-dark float-left\">{{ 'profil-utilisateur.formulaire-profil.voir-profil'|trans }}</a>
                                </div>
                                <div class=\"col-md-6\">
                                    <button id=\"modifierProfile\" class=\"btn btn-md btn-primary float-right\">{{ 'profil-utilisateur.formulaire-profil.bouton-modifier'|trans }}</button>
                                </div>
                                {#<div class=\"col-md-3\">
                                    <a id=\"deleteProfile\" data-toggle=\"modal\" data-target=\"#deleteTarget\" class=\"btn btn-md btn-danger float-right\">{{ 'profil-utilisateur.formulaire-profil.bouton-supprimer'|trans }}</a>
                                </div>#}
                            </div>
                        </div>
                    </div>
                    <!-- Fin de lecture -->

                    <!-- Modif des infos -->
                    <div id=\"modifInfo\">
                        <form class=\"row\" action=\"{{ path('profile_updateProfile') }}\" method=\"post\" id=\"updateProfile\"
                              enctype=\"multipart/form-data\">
                            <div class=\"col-md-4 mb-2\">
                                <div id=\"blah\">
                                    <img class=\"img-fluid m-auto avatar-preview\" id=\"avatar-preview\" width=\"100% \\9\" src=\"{% if avatar %}{{ avatar }}{% else %}{{ asset('assets/img/profile/avatar-profile.png') }} {% endif %}\">
                                </div>
                                <div class=\"custom-file\">
                                    <label class=\"custom-file-label\" for=\"imageUpload\">
                                        <small>{{ 'profil-utilisateur.formulaire-profil.ajouter-photo-profil'|trans }}</small>
                                    </label>
                                    <input type=\"file\" class=\"custom-file-input is-valid\" id=\"imageUpload\" name=\"avatar\"
                                           lang=\"{{ app.request.getLocale() }}\" accept=\"image/png,image/jpeg\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"last_name\" required name=\"last_name\" class=\"form-control\"
                                           value=\"{{ last_name }}\">
                                    <label for=\"last_name\">{{ 'profil-utilisateur.formulaire-profil.nom'|trans }}*</label>
                                </div>
                                <input type=\"text\" hidden value=\"\" id=\"crop_image\" name=\"crop_image\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"first_name\" required name=\"first_name\" class=\"form-control\"
                                           value=\"{{ first_name }}\">
                                    <label for=\"prenom\">{{ 'profil-utilisateur.formulaire-profil.prenom'|trans }} *</label>
                                </div>
                                <div class=\"md-form\">
                                    <select id=\"sexe\" name=\"sexe\" required class=\"browser-default custom-select\">
                                        <option value=\"homme\" {% if sexe and sexe =='homme' %} selected {% endif %}>{{ 'general.homme'|trans }}</option>
                                        <option value=\"femme\" {% if sexe and sexe =='femme' %} selected {% endif %}>{{ 'general.femme'|trans }}</option>
                                        <option value=\"autre\" {% if sexe and sexe =='autre' %} selected {% endif %}>{{ 'general.autre'|trans }}</option>
                                    </select>
                                </div>
                                <div class=\"md-form\">
                                    <input autocomplete=\"disabled\" type=\"text\" id=\"bdaytime\"
                                           style=\"font-size:14px; margin-top:20px\" required name=\"bdaytime\"
                                           class=\"form-control form-control-md inputNaissance\"
                                           value=\"{{ bdaytime|trim }}\">
                                    <label for=\"bdaytime\">{{ 'profil-utilisateur.formulaire-profil.date-de-naissance'|trans }} *</label>
                                </div>
                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">{{ 'general.lieu-de-naissance'|trans }}</span>
                                    <select id=\"birth_place\" name=\"birth_place\" required
                                            class=\"browser-default custom-select\">
                                        <option value=\"{{ birth_place }}\">{% if birth_place != '' %}{{ birth_place|country_name }}{% else %}{{ 'general.lieu-de-naissance'|trans }} *{% endif %}
                                        </option>
                                        {% include(\"countryRegister.html.twig\") %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"telephone\" name=\"telephone\" class=\"form-control\"
                                           value=\"{{ telephone }}\">
                                    <label class=\"active\" for=\"tel\">{{ 'profil-utilisateur.formulaire-profil.telephone'|trans }}</label>
                                </div>
                                <div class=\"md-form\">
                                    <input type=\"email\" id=\"email\" required name=\"email\" class=\"form-control\"
                                           value=\"{{ app.user.getEmailCanonical }}\">
                                    <label for=\"email\">{{ 'profil-utilisateur.formulaire-profil.adresse-email'|trans }}
                                        *</label></label>
                                </div>
                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">{{ 'profil-utilisateur.formulaire-profil.activite'|trans }}</span>
                                    <select class='browser-default custom-select' id=\"activite\" name=\"activite\">
                                        <option value=\"\">{{ 'profil-utilisateur.formulaire-profil.activite'|trans }}</option>
                                        {% for item in activities %}
                                            <option {% if principal_activity %}{% if item.termId == principal_activity.termId %}selected{% endif %}
                                                    {% endif %}
                                                    value=\"{{ item.termId }}\">{% if app.request.locale == 'en' %}{{ item.content }}{% else %}{{ item.name }}{% endif %}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"md-form\">
                                    <label for=\"competencesModif\"></label>
                                    <h6>{{ 'profil-utilisateur.formulaire-profil.competence'|trans }}</h6>
                                    <input type=\"text\" placeholder=\"Compétences séparées d'une virgule\"
                                           id=\"competencesModif\" class=\"form-control\" name=\"competence1\"
                                           value=\"{% if competences is not null %} {{ competences.metaValue }} {% endif %}\"
                                           data-role=\"tagsinput\">
                                </div>
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"nom_commercial\" name=\"nom_commercial\" class=\"form-control\"
                                           value=\"{% if nom_commercial == '' %}{{ first_name }}{% else %}{{ nom_commercial }}{% endif %}\">
                                    <label for=\"nom_commercial\">{{ 'profil-utilisateur.formulaire-profil.nom_commercial'|trans }}</label>
                                </div>


                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">{{ 'profil-utilisateur.formulaire-profil.departement'|trans }}</span>
                                    <select class='browser-default custom-select' id=\"departement\" name=\"departement\">
                                        <option value=\"\"></option>
                                        {% for item in departements %}
                                            <option {% if user.getUserUniqueData %}
                                                    {% if user.getUserUniqueData.getDepartement and item.id == user.getUserUniqueData.getDepartement.id %}selected{% endif %}{% endif %}
                                                    value=\"{{ item.id }}\">{{ item.departement }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-4\">
                                <!--Accordion wrapper-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\"
                                               href=\"#collapseOne2\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne1\">
                                                <h5 class=\"mb-0\">
                                                    <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                       id=\"accordion_address2\">{{ 'profil-utilisateur.formulaire-profil.adresses'|trans }}</i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <h3 class=\"col-md-12\">{{ 'profil-utilisateur.formulaire-profil.domicile'|trans }}</h3>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"numeroNomRue_domicile\"
                                                                   name=\"numeroNomRue_domicile\"
                                                                   class=\"form-control\" value=\"{{ numeroNomRue_domicile }}\">
                                                            <label for=\"numeroNomRue_domicile\">{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue'|trans }}</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"codePostal_domicile\"
                                                                   name=\"codePostal_domicile\"
                                                                   class=\"form-control\" value=\"{{ codePostal_domicile }}\">
                                                            <label for=\"codePostal_domicile\">{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal'|trans }}</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"ville_domicile\" name=\"ville_domicile\"
                                                                   class=\"form-control\" value=\"{{ ville_domicile }}\">
                                                            <label for=\"ville_domicile\">{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-ville'|trans }}</label>
                                                        </div>


                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"region_domicile\" name=\"region_domicile\" class=\"form-control\" value=\"{{ region_domicile }}\">
                                                            <label for=\"region_domicile\">{{ 'profil-utilisateur.formulaire-profil.region'|trans }}</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <span>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-pays'|trans }}</span>
                                                            <select id=\"pays_domicile\" name=\"pays_domicile\"
                                                                    class=\"browser-default custom-select\">
                                                                {% if pays_domicile != '' %}
                                                                    <option value=\"{{ pays_domicile }}\">{{ pays_domicile|country_name }}</option>
                                                                    {% include 'countryRegister.html.twig' %}
                                                                {% else %}
                                                                    {% include 'countryDefault.html.twig' %}
                                                                {% endif %}
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"vl\"></div>

                                                    <div class=\"col-md-6\">
                                                        <h3 class=\"col-md-12\">{{ 'profil-utilisateur.formulaire-profil.livraison'|trans }}</h3>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"numeroNomRue_livraison\"
                                                                   name=\"numeroNomRue_livraison\" class=\"form-control\"
                                                                   value=\"{% if numeroNomRue_livraison is not null %}{{ numeroNomRue_livraison }}{% endif %}\">
                                                            <label for=\"numeroNomRue_livraison\">{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue'|trans }}</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"codePostal_livraison\"
                                                                   name=\"codePostal_livraison\" class=\"form-control\"
                                                                   value=\"{{ codePostal_livraison }}\">
                                                            <label for=\"codePostal_livraison\">{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal'|trans }}</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"ville_livraison\"
                                                                   name=\"ville_livraison\" class=\"form-control\"
                                                                   value=\"{{ ville_livraison }}\">
                                                            <label for=\"ville_livraison\">{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-ville'|trans }}</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"region_livraison\" name=\"region_livraison\" class=\"form-control\" value=\"{{ region_livraison }}\">
                                                            <label for=\"region_livraison\">{{ 'profil-utilisateur.formulaire-profil.region'|trans }}</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <span>{{ 'profil-utilisateur.fournisseurs.formulaire-details-facture-pays'|trans }}</span>
                                                            <select id=\"pays_livraison\" name=\"pays_livraison\"
                                                                    class=\"browser-default custom-select\">
                                                                {% if pays_livraison != '' %}
                                                                    <option value=\"{{ pays_livraison }}\">{{ pays_livraison|country_name }}</option>
                                                                    {% include 'countryRegister.html.twig' %}
                                                                {% else %}
                                                                    {% include 'countryDefault.html.twig' %}
                                                                {% endif %}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->
                            </div>
                            <div class=\"col-md-12 mt-4\">
                                <h5>{{ 'profil-utilisateur.formulaire-profil.description'|trans }}</h5>
                                <div class=\"form-group\">
                                <textarea class=\"form-control border-dark\" id=\"description\" name=\"description\"
                                          rows=\"7\">{{ description }}</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-2\">
                                <h5>{{ 'profil-utilisateur.formulaire-profil.reference'|trans }}</h5>
                                <div class=\"form-group\">
                                <textarea class=\"form-control border-dark\" id=\"reference\" name=\"reference\" rows=\"7\">{{ reference }}</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-2\">
                                <h5>Portfolio</h5>
                                <div class=\"form-group\">
                                    <div class=\"p-2\">
                                        <div class=\"border border-dark p-2\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12 d-flex justify-content-center\">
                                                    <ul class=\"portfolio-ul\">
                                                        {% if portfolio %}
                                                            {% for p in portfolio %}
                                                                <li style=\"background-image: url({{ p.guid }});\"
                                                                    class=\"aimg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('profile_delete_portfolio', {'id':p.id}) }}\"
                                                                   class=\"delete_port ld-over-inverse\"
                                                                   style=\"color:#fff\">Supprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </li>
                                                            {% endfor %}
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <h6 class=\"control-label col-md-3\">{{ 'general.add-portfolio'|trans }}</h6>
                                                <div class=\"col-md-8\">
                                                    <div class=\"row\">
                                                        <div id=\"coba\" class=\"row\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-12 mt-2\">
                                <h5>{{ 'profil-utilisateur.formulaire-profil.video'|trans }}</h5>
                                <div class=\"p-2\">
                                    <div class=\"border border-dark p-2\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 d-flex justify-content-center\">
                                                <ul class=\"videos-ul\">
                                                    {% for v in imgid %}
                                                        {% if v != '' %}
                                                            <li style=\"background-image: url('https://img.youtube.com/vi/{{ v }}/0.jpg');\"
                                                                class=\"aimg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('profile_delete_video',{'id':v}) }}\"
                                                               class=\"delete_port ld-over-inverse\" style=\"color:#fff\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </li>
                                                        {% endif %}
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                        <div id=\"newVideos\" class=\"row mt-3\">
                                            <div class=\"col-md-3\">
                                                <h6>{{ 'general.add-youtube-link'|trans }}</h6>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <div id=\"newVideosRow\" class=\"row\">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"md-form\">
                                                            <input type=\"text\"
                                                                   pattern=\"^(http(s)?:\\/\\/)?((w){3}.)?youtu(be|.be)?(\\.com)?\\/.+\"
                                                                   class=\"form-control border p-2\" name=\"new_vid[]\"
                                                                   placeholder=\"Add new YouTube video link\">
                                                        </div>
                                                        <a id=\"addScnt\" href=\"#\"
                                                           class=\"btn btn-md btn-warning\">{{ 'general.add'|trans }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offset-md-6 col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <button id=\"send\" type=\"submit\"
                                                class=\"btn btn-md btn-success ld-over-inverse \">{{ 'profil-utilisateur.formulaire-modification-profil.bouton-modifier'|trans }}
                                            <i class=\"ld ld-ring ld-spin\"></i>
                                        </button>
                                    </div>
                                    <div class=\"col\">
                                        <button id=\"annulerModif\" type=\"button\" class=\"btn btn-md btn-warning\">{{ 'profil-utilisateur.formulaire-modification-profil.bouton-annuler'|trans }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Fin des modifs -->
                    <!-- Crop modal -->
                    <div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Redimensionner votre image et enregistrer</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"img-container px-3\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\" style=\"margin: inherit;\">
                                                <img src=\"\" id=\"sample_image\" />
                                            </div>
                                            <div class=\"col-md-4 image-bloc\">
                                                <div class=\"preview\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-warning cancel\" data-dismiss=\"modal\"><b>Annuler</b></button>
                                    <button type=\"button\" id=\"crop\" class=\"btn btn-primary approve\"><b>Enregistrer</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Crop modal -->
                </div>
            </div>

            {% include(\"partials/project.html.twig\") %}
            {% include(\"partials/otherPagesVideoModal.html.twig\") %}
        </main>
    </div>
{% endblock %}
\t{% block footer %}
        {{ parent() }}<!-- Modal for supprimer -->
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
                                <h5 class=\"modal-title\"
                                    id=\"exampleModalPreviewLabel\">{{ 'profil-utilisateur.liens.effacer-compte'|trans }}</h5>
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
        <input id=\"hornsUrlDelete\" hidden value=\"{{ path('profile_delete_profil',{id:id}) }}\"/>
        <input id=\"hornsUrlDeleteAll\" hidden value=\"{{ path('profile_delete_profil_all',{id:id}) }}\"/>
    {% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/camroll/camroll_slider.js') }}\">
    </script><!-- jQuery plugin for spartan image picker -->
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/js/spartan-image-picker/spartan-multi-image-picker-min.js') }}\">
    </script><!-- jQuery plugin for input tags -->
    <script src=\"{{ prerender(asset('assets/js/tagsinput/jQuery.tagify.min.js')) }}\"></script>
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script><!-- jQuery plugin for datepicker -->
    <script src=\"{{ asset('assets/js/gijgo-js/gijgo.min.2.js') }}\"></script>
    <script src=\"{{ asset('assets/phone/js/intlTelInput.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
    <!-- Tinymce editor -->
    <script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>

    <!-- Crop cdn -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js\" integrity=\"sha512-6lplKUSl86rUVprDIjiW8DuOniNX8UDoRATqZSds/7t6zCQZfaCe3e5zcGaQwxa8Kpn5RTM9Fvl3X2lLV4grPQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <script>
        function getUnique(array) {
            var uniqueArray = [];
            // Loop through array values
            for (i = 0; i < array.length; i++) {
                if (uniqueArray.indexOf(array[i]) === -1) {
                    uniqueArray.push(array[i]);
                }
            }
            return uniqueArray;
        }

        function validateEmail(email) {
            var re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(email);
        }

        function validatePhoneNumber(phone) {
            var re = /^(\\+|00)[0-9]{1,3}[0-9 ]{4,20}(?:x.+)?\$/;
            return re.test(phone);
        }

        // pattern=\"^(6|2)[. ]{0,1}[0-9 .]{8,13}(?:x.+)?\$\"

        //Accordeon1 and 2

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
        //End Accordeon1
        \$(document).ready(function () {
            let docWidth = document.documentElement.offsetWidth;
            tinymce.init({
                selector: 'textarea#description',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,{% if app.request.locale=='fr' %}
                language: 'fr_FR',{% endif %}
            });
            tinymce.init({
                selector: 'textarea#reference',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,{% if app.request.locale=='fr' %}
                language: 'fr_FR',{% endif %}
            });

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                }
            });


            \$(function () {
                \$('.lazy').lazy();
            });

            \$(\"[for=tel]\").addClass(\"active\");
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
                center: true,
                /* responsive:{
                              480:{
                                  items:2
                              },
                              600:{
                                  items:2
                              }
                          }*/
            });


// add/remove new video in the update section
            let scntDiv = \$('#newVideosRow');
            let i = \$('#newVideosRow .col-md-4').length + 1;

            \$('#addScnt').on('click', function () {
                \$('<div class=\"col-md-4\"><div class=\"md-form\"> <input type=\"url\" class=\"form-control border p-2\" name=\"new_vid[]\" placeholder=\"{{ \"general.add-youtube-link\"|trans }}\"><div class=\"valid-feedback\">OK!</div><div class=\"invalid-feedback\">Ce champ contient une erreur!</div></div> <a class=\"btn btn-md btn-danger\" id=\"retirerSec\">         {{ \"general.supprimer\"|trans }}</a></div>').appendTo(scntDiv);
                i++;
            });

            \$('#newVideosRow').on('click', '#retirerSec', function () {
                \$(this).parents('.col-md-4').remove();
                i--;
            });

// add new portfolio images
            \$(\"#coba\").spartanMultiImagePicker({
                fieldName: 'file[]',
                status: false,
                loaderIcon: '<i class=\"fas fa-sync fa-spin\"></i>',
                maxFileSize: '1048576',
                url: \$(\"#containerForPortfolio\").attr(\"addPortfolioUrl\"),
                additionalParam: {
                    name: 'portfolios[]'
                },
                onSizeErr: function (index, file) {
                    toastr.clear();
                    toastr.warning(\"{{ 'systeme.requetes.taille_fichier'|trans }}\");
                },
                onRemoveRow: function (index) {
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

// first thing turn Hide \"Update section\" input field
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

            \$(\"div[role='wrapper']\").append(\"<div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");


// Validate fields
// Date format
            \$('.inputNaissance').datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome',
                format: 'mm/dd/yyyy',
                label: false
            });
// First Name
            \$(\"#first_name\").change(function () {
                let first_name = \$(\"#first_name\").val();
                if (isNaN(first_name)) {
                    \$(\"#first_name\").removeClass(\"is-invalid\");
                    \$(\"#first_name\").addClass(\"is-valid\");
                } else {
                    \$(\"#first_name\").removeClass(\"is-valid\");
                    \$(\"#first_name\").addClass(\"is-invalid\");
                }
            });

// Last Name
            \$(\"#last_name\").change(function () {
                let last_name = \$(\"#last_name\").val();
                if (isNaN(last_name)) {
                    \$(\"#last_name\").removeClass(\"is-invalid\");
                    \$(\"#last_name\").addClass(\"is-valid\");
                } else {
                    \$(\"#last_name\").removeClass(\"is-valid\");
                    \$(\"#last_name\").addClass(\"is-invalid\");
                }
            });

            \$(\"#sexe\").change(function () {
                let sexe = \$(\"#sexe\").val();
                if (isNaN(sexe)) {
                    \$(\"#sexe\").removeClass(\"is-invalid\");
                    \$(\"#sexe\").addClass(\"is-valid\");
                } else {
                    \$(\"#sexe\").removeClass(\"is-valid\");
                    \$(\"#sexe\").addClass(\"is-invalid\");
                }
            });


            \$(\"#email\").keyup(function () {
                let email = \$(\"#email\").val();
                if (validateEmail(email)) {
                    \$(\"#email\").removeClass(\"is-invalid\");
                    \$(\"#email\").addClass(\"is-valid\");
                } else {
                    \$(\"#email\").removeClass(\"is-valid\");
                    \$(\"#email\").addClass(\"is-invalid\");
                }
            });

            \$(\"#telephone\").keyup(function () {
                let phone = \$(\"#telephone\").val().replace(/\\s|[a-zA-Z]/g, \"\");
                \$(\"#telephone\").val(phone);
                if (validatePhoneNumber(phone)) {
                    \$(\"#telephone\").removeClass(\"is-invalid\");
                    \$(\"#telephone\").addClass(\"is-valid\");
                } else {
                    \$(\"#telephone\").removeClass(\"is-valid\");
                    \$(\"#telephone\").addClass(\"is-invalid\");
                }
            });

            \$(\"#bdaytime\").change(function () {
                let bdaytime = \$(\"#bdaytime\").val().replace(/\\s|[a-zA-Z]/g, \"\");
                \$(\"#bdaytime\").val(bdaytime);
                if (bdaytime != '') {
                    \$(\"#bdaytime\").removeClass(\"is-invalid\");
                    \$(\"#bdaytime\").addClass(\"is-valid\");
                } else {
                    \$(\"#bdaytime\").removeClass(\"is-valid\");
                    \$(\"#bdaytime\").addClass(\"is-invalid\");
                }
            });

            \$(\"#birth_place\").change(function () {
                let birth_place = \$(\"#birth_place\").val();
                if (isNaN(birth_place)) {
                    \$(\"#birth_place\").removeClass(\"is-invalid\");
                    \$(\"#birth_place\").addClass(\"is-valid\");
                } else {
                    \$(\"#birth_place\").removeClass(\"is-valid\");
                    \$(\"#birth_place\").addClass(\"is-invalid\");
                }
            });

            \$(\"#raison_sociale\").keyup(function () {
                let nom = \$(\"#raison_sociale\").val();
                if (isNaN(nom)) {
                    \$(\"#raison_sociale\").removeClass(\"is-invalid\");
                    \$(\"#raison_sociale\").addClass(\"is-valid\");
                } else {
                    \$(\"#raison_sociale\").removeClass(\"is-valid\");
                    \$(\"#raison_sociale\").addClass(\"is-invalid\");
                }
            });

            \$(\"#siret\").keyup(function () {
                let nom = \$(\"#siret\").val();
                if (isNaN(nom)) {
                    \$(\"#siret\").removeClass(\"is-invalid\");
                    \$(\"#siret\").addClass(\"is-valid\");
                } else {
                    \$(\"#siret\").removeClass(\"is-valid\");
                    \$(\"#siret\").addClass(\"is-invalid\");
                }
            });

            \$(\"#tva\").change(function () {
                let nom = \$(\"#tva\").val();
                if (isNaN(nom)) {
                    \$(\"#tva\").removeClass(\"is-invalid\");
                    \$(\"#tva\").addClass(\"is-valid\");
                } else {
                    \$(\"#tva\").removeClass(\"is-valid\");
                    \$(\"#tva\").addClass(\"is-invalid\");
                }
            });
//Code postal livraison et domicile
            \$(\"#codePostal_livraison\").keyup(function () {
                let codePostal_livraison = \$(\"#codePostal_livraison\").val().replace(/\\s/g, \"\");
                \$(\"#codePostal_livraison\").val(codePostal_livraison);
                if (codePostal_livraison != '') {
                    \$(\"#codePostal_livraison\").removeClass(\"is-invalid\");
                    \$(\"#codePostal_livraison\").addClass(\"is-valid\");
                } else {
                    \$(\"#codePostal_livraison\").removeClass(\"is-valid\");
                    \$(\"#codePostal_livraison\").addClass(\"is-invalid\");
                }
            });

            \$(\"#codePostal_domicile\").keyup(function () {
                let codePostal_domicile = \$(\"#codePostal_domicile\").val().replace(/\\s/g, \"\");
                \$(\"#codePostal_domicile\").val(codePostal_domicile);
                if (codePostal_domicile != '') {
                    \$(\"#codePostal_domicile\").removeClass(\"is-invalid\");
                    \$(\"#codePostal_domicile\").addClass(\"is-valid\");
                    \$(\"#codePostal_livraison\").val(codePostal_domicile);
                    \$(\"[for=codePostal_livraison]\").addClass(\"active\");
                } else {
                    \$(\"#codePostal_domicile\").removeClass(\"is-valid\");
                    \$(\"#codePostal_domicile\").addClass(\"is-invalid\");
                }
            });

            \$(\"#ville_domicile\").keyup(function () {
                \$(\"#ville_livraison\").val(\$(\"#ville_domicile\").val());
                \$(\"[for=ville_livraison]\").addClass(\"active\");
            });

            \$(\"#region_domicile\").keyup(function () {
                \$(\"#region_livraison\").val(\$(\"#region_domicile\").val());
                \$(\"[for=region_livraison]\").addClass(\"active\");
            });

            \$(\"#numeroNomRue_domicile\").keyup(function () {
                \$(\"#numeroNomRue_livraison\").val(\$(\"#numeroNomRue_domicile\").val());
                \$(\"[for=numeroNomRue_livraison]\").addClass(\"active\");
            });

            \$(\"#numeroNomRue_domicile\").keyup(function () {
                \$(\"#numeroNomRue_livraison\").val(\$(\"#numeroNomRue_domicile\").val());
                \$(\"[for=numeroNomRue_livraison]\").addClass(\"active\");
            });

            let \$modal = \$('#modal');
            let image = document.getElementById('sample_image');
            let crop_image = \"\";
            let cropper;

            document.getElementById('imageUpload').addEventListener('change', function (event) {
                let fileInput = event.target;
                let file = fileInput.files[0];
                let files = event.target.files;
                let message_size = '';
                if (fileInput.files.length !== 0 && file.size > 1048576) {
                    fileInput.value = \"\";
                    message_size = \"{{ 'systeme.requetes.taille_fichier_avatar'|trans }}\";
                    toastr.warning(message_size);
                }else if(fileInput.files.length !== 0 && file.size < 1048576){
                    //Handle crop
                    let done = function(url){
                        image.src = url;
                        \$modal.modal('show');
                    };
                    const reader = new FileReader();
                    reader.onload = function(event)
                    {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                }
            });

            \$modal.on('shown.bs.modal', function() {
                let cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    preview:'.preview'
                });
            }).on('hidden.bs.modal', function(){
                cropper.destroy();
                cropper = null;
                \$('#imageUpload').val('');
            });

            \$('#crop').click(function(){
                canvas = cropper.getCroppedCanvas({
                    width:400,
                    height:400
                });

                canvas.toBlob(function(blob){
                    url = URL.createObjectURL(blob);
                    let reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function(){
                        let base64data = reader.result;

                        \$('#blah').html('<img class=\"img-fluid m-auto avatar-preview\" id=\"avatar-preview\" style=\"max-height:400px\" width=\"100%\" src=\"' + url  + '\" >');
                        crop_image = base64data;
                        \$modal.modal('hide');
                    };
                });
            });

            // input tags
            \$('#competencesModif').tagify();

            \$('#updateProfile').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#crop_image').val(crop_image);
                \$('#telephone').val(\$('#telephone').val().replace(/\\s/g, ''));

                \$('#send').addClass('running');
                toastr.info(\"{{ 'systeme.requetes.requete-en-cours'|trans }}\");

                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        console.log(response);
                        if (response.result == 1) {
                            toastr.clear();
                            toastr.success(\"{{ 'systeme.requetes.succes'|trans }}\");
                            window.location = \"\";
                        }
                        if (response.result == 2) {
                            toastr.clear();
                            toastr.error('noticeErrorDate', 'La date de naissance n\\'est pas conforme au format attentu; Veuillez mettre a jour votre profil.');
                            window.location = \"\";
                        } else if (response.result == 0) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error(\"{{ 'systeme.requetes.erreur'|trans }}\");
                        }
                    },
                    error: function (response) {
                        //console.log(response);
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"{{ 'general.error'|trans }}\");
                    }
                });
                return false;
            });

            \$(document).on('click', '.delete_port', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                let t = \$(this);
                let urlPath = \$(this).attr('href');
                swal({
                    title: \"Suppression de l'objet\",
                    text: \"Attention l'objet sera Supprimé et n'apparaitra plus sur le site\",
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
                            success: function (response) {
                                if (response == 1) {
                                    swal(\"suppression terminée\", \"\", \"success\");
                                    t.parents('li').hide();
                                } else {
                                    swal(\"erreur de suppression\", \"\", \"error\");
                                }
                            },
                            error: function (response) {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
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
                    type: 'POST',
                    success: function (response) {
                        if (response > 0) {
                            toastr.clear();
                            toastr.success(\"{{ 'systeme.compte.succes'|trans }}\");
                            window.setTimeout(function () {
                                window.location = \"{{ path('app_login') }}\";
                            }, 200);
                        }
                    },
                    error: function (response) {
                        toastr.clear();
                        toastr.error(\"{{ 'systeme.compte.error'|trans }}\");
                    }
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
                \"showDuration\": \"1600\",
                \"closeDuration\": \"1600\",
                \"timeOut\": \"2000\",
                \"extendedTimeOut\": \"2200\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let input = document.querySelector(\"#telephone\");
            window.intlTelInput(input, {
                autoHideDialCode: true,
                initialCountry: \"fr\",
                nationalMode: false,
                formatOnDisplay: false,
                // separateDialCode: true,
                utilsScript: \"/assets/phone/js/utils.js\"
            });

        });
    </script>
{% endblock %}
", "profile/index.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/index.html.twig");
    }
}
