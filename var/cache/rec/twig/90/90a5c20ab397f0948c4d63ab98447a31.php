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

/* newsletter/subscribe.html.twig */
class __TwigTemplate_2f42e95756ed875d5a6defd200561962 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/subscribe.html.twig"));

        $this->parent = $this->loadTemplate("otherLayout.html.twig", "newsletter/subscribe.html.twig", 1);
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
    <meta name=\"title\"
          content=\"Trust &amp; Market | ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <meta name=\"description\"
          content=\"";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter")), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter");
        yield "\">
    ";
        // line 20
        yield "    <meta property=\"og:title\"
          content=\"Trust &amp; Market |\t";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <meta property=\"og:description\"
          content=\"";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <meta property=\"og:image\"
          content=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\">
    <meta propery=\"og:type\" content=\"website\">
    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 32
        yield "    Trust &amp; Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 36
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mon-profil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <style>

        .pagination .page-item.active .page-link {
            background-color: #f17b30;
        }

        .page-title {
            font-family: 'Palanquin Dark';
            font-weight: bold;
        }

        .newsletter-form {
            width: 50%;
        }

        .newsletter-form, label {
            font-family: 'Source Sans Pro';
        }

        #submit-button {
            font-size: large;
            font-weight: bold;
        }

        .container {
            position: relative;
        }

        .vertical-center {
            margin-top: 6rem;
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 55px !important;
            z-index: -999999;
            opacity: 0;
        }

        /* For Desktop View */
        @media screen and (min-width: 1024px) {
            #dialoguons {
                width: 19%;
            }

            .newsletter-form {
                width: 50%;
            }
        }

        /* For Tablet View */
        @media screen and (min-device-width: 768px)
        and (max-device-width: 1024px) {
            #dialoguons {
                width: 30%;
            }

            .newsletter-form {
                width: 70%;
            }

            .playVideoButton {
                width: 70px !important;
                height: 70px !important;
            }

            .vertical-center {
                margin-top: 5rem;
            }
        }

        /* For Mobile Portrait View */
        @media screen and (max-device-width: 480px)
        and (orientation: portrait) {
            #dialoguons {
                width: 70%;
            }

            .newsletter-form {
                width: 90%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }

            .vertical-center {
                margin-top: 4rem;
            }
        }

        /* For Mobile Landscape View */
        @media screen and (max-device-width: 640px)
        and (orientation: landscape) {
            #dialoguons {
                width: 40%;
            }

            .newsletter-form {
                width: 85%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For Mobile Phones Portrait or Landscape View */
        @media screen
        and (max-device-width: 640px) {
            #dialoguons {
                width: 40%;
            }

            .newsletter-form {
                width: 85%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 4 Portrait or Landscape View */
        @media screen and (min-device-width: 320px)
        and (-webkit-min-device-pixel-ratio: 2) {
            #dialoguons {
                width: 60%;
            }

            .newsletter-form {
                width: 70%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 5 Portrait or Landscape View */
        @media (device-height: 568px)
        and (device-width: 320px)
        and (-webkit-min-device-pixel-ratio: 2) {
            #dialoguons {
                width: 70%;
            }

            .newsletter-form {
                width: 90%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 6 and 6 plus Portrait or Landscape View */
        @media (min-device-height: 667px)
        and (min-device-width: 375px)
        and (-webkit-min-device-pixel-ratio: 3) {
            #dialoguons {
                width: 60%;
            }

            .newsletter-form {
                width: 70%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 237
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 240
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

    // line 242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 243
        yield "    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"vertical-center\">
                <h1 class=\"col-md-8 d-flex justify-content-center text-center m-auto page-title\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.titre-page"), "html", null, true);
        yield "</h1>
                <div class=\"row d-flex justify-content-center m-auto\">
                    <form class=\"mt-5 newsletter-form\" id=\"newsletterForm\" action=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletterUser");
        yield "\"
                          method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">E-mail*</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                   aria-describedby=\"emailHelp\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"prenom\">Prénom*</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" required>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" required>
                            <label class=\"form-check-label\" for=\"exampleCheck1\">J'accepte de recevoir des emails, étant
                                entendu que je peux facilement me désinscrire de ses communications a tout moment après
                                mon inscription.</label>
                        </div>

                        <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\"
                             data-action=\"TRUST_NEWSLETTER\"></div>
                        <br/>
                        <div class=\"d-flex justify-content-center mt-3\">
                            <button type=\"submit\" id=\"submit-button\" class=\"btn btn-primary btn-round px-5\">Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--Main Layout-->

    ";
        // line 281
        yield from $this->loadTemplate("partials/project.html.twig", "newsletter/subscribe.html.twig", 281)->unwrap()->yield($context);
        // line 282
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "newsletter/subscribe.html.twig", 282)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 286
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 287
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 291
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 292
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>

    <script>
        \$(document).ready(function () {
            // Script to create user for newsletter
            \$('#newsletterForm').on('submit', function (e) {
                e.preventDefault();
                toastr.info(\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.attente"), "html", null, true);
        yield "\");
                let \$form = \$(this);
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    success: function (response) {
                        console.log(response);
                        if (response == 1) {
                            toastr.clear();
                            \$('#body').hide();
                            \$('#succes').show();
                            \$('html,body').scrollTop(0);
                            \$('#send').removeClass('running');
                            window.location.replace(\"";
        // line 327
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter_success");
        yield "\");
                        } else if (response == 2) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.email_occupe"), "html", null, true);
        yield "');
                        } else if (response == 0) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.robot"), "html", null, true);
        yield "');
                        }
                    },
                    error: function (response) {
                        toastr.clear();
                        \$('#send').removeClass('running');
                        toastr.error('";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.echec"), "html", null, true);
        yield "');
                    }
                });
            });

            window.addEventListener('load', () => {
                const \$recaptcha = document.querySelector('#g-recaptcha-response');
                if (\$recaptcha) {
                    \$recaptcha.setAttribute('required', 'required');
                }
            })
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
        return "newsletter/subscribe.html.twig";
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
        return array (  609 => 341,  600 => 335,  593 => 331,  586 => 327,  569 => 313,  550 => 297,  545 => 295,  540 => 293,  535 => 292,  525 => 291,  513 => 287,  503 => 286,  494 => 282,  492 => 281,  457 => 249,  452 => 247,  446 => 243,  436 => 242,  420 => 240,  409 => 237,  399 => 236,  202 => 46,  198 => 45,  194 => 44,  190 => 43,  185 => 41,  180 => 39,  173 => 36,  163 => 35,  152 => 32,  142 => 31,  130 => 25,  125 => 23,  120 => 21,  117 => 20,  113 => 18,  109 => 17,  105 => 16,  100 => 14,  95 => 12,  90 => 10,  84 => 7,  79 => 5,  74 => 4,  64 => 3,  47 => 1,);
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
    <meta name=\"title\"
          content=\"Trust &amp; Market | {{ include('Seo/Meta/title.html.twig', {code: 'enregistrement-newsletter'}) }}\">
    <meta name=\"description\"
          content=\"{{ include('Seo/Meta/description.html.twig', {code: 'enregistrement-newsletter'}) }}\">
    <link rel=\"canonical\" href=\"{{ absolute_url(path('app_newsletter')) }}\">
    <link rel=\"shortlink\" href=\"{{ path('app_newsletter') }}\">
    {# OG CONTENT #}
    <meta property=\"og:title\"
          content=\"Trust &amp; Market |\t{{ include('Seo/Meta/title.html.twig', {code: 'enregistrement-newsletter'}) }}\">
    <meta property=\"og:description\"
          content=\"{{ include('Seo/Meta/description.html.twig', {code: 'enregistrement-newsletter'}) }}\">
    <meta property=\"og:image\"
          content=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png') }}\">
    <meta propery=\"og:type\" content=\"website\">
    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
    {# END OG CONTENT #}
{% endblock %}

{% block title %}
    Trust &amp; Market | {{ include('Seo/Meta/title.html.twig', {code: 'enregistrement-newsletter'}) }}
{% endblock %}

{% block style %}
    {{ parent() }}

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" {{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
    <!-- Custom css for camroll -->
    <link href=\"{{ asset('assets/css/camroll/camroll_slider.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/css/custome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/mon-profil.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/css/result.css') }}\" rel=\"stylesheet\">
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <style>

        .pagination .page-item.active .page-link {
            background-color: #f17b30;
        }

        .page-title {
            font-family: 'Palanquin Dark';
            font-weight: bold;
        }

        .newsletter-form {
            width: 50%;
        }

        .newsletter-form, label {
            font-family: 'Source Sans Pro';
        }

        #submit-button {
            font-size: large;
            font-weight: bold;
        }

        .container {
            position: relative;
        }

        .vertical-center {
            margin-top: 6rem;
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 55px !important;
            z-index: -999999;
            opacity: 0;
        }

        /* For Desktop View */
        @media screen and (min-width: 1024px) {
            #dialoguons {
                width: 19%;
            }

            .newsletter-form {
                width: 50%;
            }
        }

        /* For Tablet View */
        @media screen and (min-device-width: 768px)
        and (max-device-width: 1024px) {
            #dialoguons {
                width: 30%;
            }

            .newsletter-form {
                width: 70%;
            }

            .playVideoButton {
                width: 70px !important;
                height: 70px !important;
            }

            .vertical-center {
                margin-top: 5rem;
            }
        }

        /* For Mobile Portrait View */
        @media screen and (max-device-width: 480px)
        and (orientation: portrait) {
            #dialoguons {
                width: 70%;
            }

            .newsletter-form {
                width: 90%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }

            .vertical-center {
                margin-top: 4rem;
            }
        }

        /* For Mobile Landscape View */
        @media screen and (max-device-width: 640px)
        and (orientation: landscape) {
            #dialoguons {
                width: 40%;
            }

            .newsletter-form {
                width: 85%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For Mobile Phones Portrait or Landscape View */
        @media screen
        and (max-device-width: 640px) {
            #dialoguons {
                width: 40%;
            }

            .newsletter-form {
                width: 85%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 4 Portrait or Landscape View */
        @media screen and (min-device-width: 320px)
        and (-webkit-min-device-pixel-ratio: 2) {
            #dialoguons {
                width: 60%;
            }

            .newsletter-form {
                width: 70%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 5 Portrait or Landscape View */
        @media (device-height: 568px)
        and (device-width: 320px)
        and (-webkit-min-device-pixel-ratio: 2) {
            #dialoguons {
                width: 70%;
            }

            .newsletter-form {
                width: 90%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 6 and 6 plus Portrait or Landscape View */
        @media (min-device-height: 667px)
        and (min-device-width: 375px)
        and (-webkit-min-device-pixel-ratio: 3) {
            #dialoguons {
                width: 60%;
            }

            .newsletter-form {
                width: 70%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
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
    <main class=\"\">
        <div class=\"container\">
            <div class=\"vertical-center\">
                <h1 class=\"col-md-8 d-flex justify-content-center text-center m-auto page-title\">{{ 'newsletter.titre-page'|trans }}</h1>
                <div class=\"row d-flex justify-content-center m-auto\">
                    <form class=\"mt-5 newsletter-form\" id=\"newsletterForm\" action=\"{{ path('newsletterUser') }}\"
                          method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">E-mail*</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                   aria-describedby=\"emailHelp\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"prenom\">Prénom*</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" required>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" required>
                            <label class=\"form-check-label\" for=\"exampleCheck1\">J'accepte de recevoir des emails, étant
                                entendu que je peux facilement me désinscrire de ses communications a tout moment après
                                mon inscription.</label>
                        </div>

                        <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\"
                             data-action=\"TRUST_NEWSLETTER\"></div>
                        <br/>
                        <div class=\"d-flex justify-content-center mt-3\">
                            <button type=\"submit\" id=\"submit-button\" class=\"btn btn-primary btn-round px-5\">Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--Main Layout-->

    {% include(\"partials/project.html.twig\") %}
    {% include(\"partials/otherPagesVideoModal.html.twig\") %}
{% endblock %}


{% block footer %}
    {{ parent() }}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <!-- jQuery plugin for datepicker -->
    <script src=\"{{ prerender(asset('assets/js/gijgo-js/gijgo.min.2.js')) }}\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/camroll/camroll_slider.js') }}\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>

    <script>
        \$(document).ready(function () {
            // Script to create user for newsletter
            \$('#newsletterForm').on('submit', function (e) {
                e.preventDefault();
                toastr.info(\"{{ 'newsletter.attente'|trans }}\");
                let \$form = \$(this);
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    success: function (response) {
                        console.log(response);
                        if (response == 1) {
                            toastr.clear();
                            \$('#body').hide();
                            \$('#succes').show();
                            \$('html,body').scrollTop(0);
                            \$('#send').removeClass('running');
                            window.location.replace(\"{{ path('app_newsletter_success') }}\");
                        } else if (response == 2) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('{{ 'newsletter.email_occupe'|trans }}');
                        } else if (response == 0) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('{{ 'newsletter.robot'|trans }}');
                        }
                    },
                    error: function (response) {
                        toastr.clear();
                        \$('#send').removeClass('running');
                        toastr.error('{{ 'newsletter.echec'|trans }}');
                    }
                });
            });

            window.addEventListener('load', () => {
                const \$recaptcha = document.querySelector('#g-recaptcha-response');
                if (\$recaptcha) {
                    \$recaptcha.setAttribute('required', 'required');
                }
            })
        });
    </script>


{% endblock %}
", "newsletter/subscribe.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/newsletter/subscribe.html.twig");
    }
}
