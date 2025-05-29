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

/* otherLayout.html.twig */
class __TwigTemplate_c50588ebc6d17acb81b5505be5384c9b extends Template
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

        $this->parent = false;

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

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "otherLayout.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        yield "\">

<head>
    ";
        // line 5
        yield from $this->loadTemplate("tag-google.html.twig", "otherLayout.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    ";
        yield from $this->loadTemplate("hotjar.html.twig", "otherLayout.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_new.svg")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg"), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg"), "html", null, true);
        yield "\"/>
    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 16
        yield "    <title>
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 19
        yield "    </title>
    ";
        // line 20
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 46
        yield "    ";
        yield from $this->loadTemplate("pixelFacebook.html.twig", "otherLayout.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "    ";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "otherLayout.html.twig", 47)->unwrap()->yield($context);
        // line 48
        yield "    ";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "otherLayout.html.twig", 48)->unwrap()->yield($context);
        // line 49
        yield "</head>

<body style=\"width: 100%\">
";
        // line 52
        yield from $this->loadTemplate("facebook-support.html.twig", "otherLayout.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 59
        yield "
";
        // line 60
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 65
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 68
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 289
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 14
        yield "        ";
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "otherLayout.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market
        ";
        
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
        yield "        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Material Design Bootstrap -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        ";
        // line 29
        yield "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css\"
              integrity=\"sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==\"
              crossorigin=\"anonymous\"/>
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

        <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 37
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "otherLayout.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "        <style>
            .image-header {
                width: 35px;
                height: 35px;
                object-fit: cover;
            }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 54
        yield "    <header>
        ";
        // line 55
        yield from $this->loadTemplate("header-new-design.html.twig", "otherLayout.html.twig", 55)->unwrap()->yield($context);
        // line 56
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "otherLayout.html.twig", 56)->unwrap()->yield($context);
        // line 57
        yield "    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 60
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

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_index");
        yield "\" target=\"_blank\" id=\"yourproject-iconed-link\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.projet"), "html", null, true);
        yield "</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 66
        yield "    ";
        yield from $this->loadTemplate("footer.html.twig", "otherLayout.html.twig", 66)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        yield "    <!-- JQuery -->
    ";
        // line 71
        yield "    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
            integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap tooltips -->
    ";
        // line 75
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    ";
        // line 79
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    ";
        // line 83
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
    <!-- Lazy load -->
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

    <script src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 95
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lazysizes.min.js"), "html", null, true);
        yield "\" async></script>
    <!-- Images End -->
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
    ";
        // line 98
        yield from $this->loadTemplate("partials/js/top_button.html.twig", "otherLayout.html.twig", 98)->unwrap()->yield($context);
        // line 99
        yield "    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <!-- <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js\"></script> -->

    ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "environment", [], "any", false, false, false, 105) == "prod")) {
            // line 106
            yield "        ";
            yield from $this->loadTemplate("partials/js/cookie.js.twig", "otherLayout.html.twig", 106)->unwrap()->yield($context);
            // line 107
            yield "    ";
        }
        // line 108
        yield "    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        })

        ";
        // line 113
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "otherLayout.html.twig", 113)->unwrap()->yield($context);
        // line 114
        yield "
        \$(\".closeBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#newsletterModal\").modal('toggle');
        });

        \$(document).click(function (event) {
            var target = \$(event.target);
            if (!target.closest('.linkContent').length && \$('.linkContent').is(':visible')) {
                \$('.floatingMenu').fadeOut();
            }
        });
        \$('.searchSelectPicker').selectpicker();

        \$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
            event.preventDefault();
            var oldTexte = \$(this).text()
            \$(this).text(\"En cours...\")
            var whichForm = \$(this).attr('attr-form')
            var typePrestation = \$('.' + whichForm).find('select[name=\"type_prestation\"]').val()
            console.log(typePrestation);
            if (typePrestation == \"\") {
                \$(this).text(oldTexte)
                toastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
            } else {
                \$(this).text(oldTexte)
                \$('.' + whichForm).submit();
            }
        });

        if (\$(window).width() <= 922) {
            \$('.block_conjoint').insertAfter('.search-title-mob')
            \$('.searchDiv').insertAfter('.block_conjoint')
            \$('.link-card-actu').insertAfter('.searchDiv')
        }

        window.onresize = function () {
            if (window.innerWidth <= 922) {
                \$('.block_conjoint').insertAfter('.search-title-mob')
                \$('.searchDiv').insertAfter('.block_conjoint')
                \$('.link-card-actu').insertAfter('.searchDiv')
            } else {
                \$('.block_conjoint').insertAfter('.titreFromTitreFilter')
                \$('.searchDiv').insertAfter('.logoButtonHeader')
                \$('.link-card-actu').insertAfter('.titre_filter')
            }
        }
    </script>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });

            /**
             * Manipulate data from data-id and data-name attributes in \"Types de prestation\"
             */
            \$('.prestation-i').on('click', function (e) {
                e.preventDefault();
                var pres_id = \$(this).attr('data-id');
                var pres_name = \$(this).attr('data-name');

                \$('.type-pres-span').html(pres_name);
                \$('.input-type-prestation').val(pres_id);

                var url1 = '";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "request", [], "any", false, false, false, 185), "get", ["_locale"], "method", false, false, false, 185), "html", null, true);
        yield "/home/sous_categorie1?id=' + pres_id;
                toastr.info(\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.recherche-sous-categories"), "html", null, true);
        yield "\");
                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
                        console.log(reponse);

                        \$('.besoin-fld-scroll-item').html(reponse);
                    },
                    error: function (reponse) {
                        toastr.clear();
                    }

                });

            });

            \$(document).on('click', '.besoins-i', function () {
                var pres_id = \$(this).attr('data-id');
                var pres_name = \$(this).attr('data-name');

                \$('.besoins-span-text').html(pres_name);
                \$('.input-type-besoins').val(pres_id);
                var b = \$('.input-type-besoins').val();
                console.log(pres_id + \" \" + pres_name + \" \" + b);
            });


// Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });

// Hambuger menu icon
            \$('.animated-button-icon').on('click', function () {
                \$('.animated-icon2').toggleClass('open');
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

            \$(document).on('change', '.categorieParent', function (e) {

                e.preventDefault();
                var url1 = '";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "request", [], "any", false, false, false, 243), "get", ["_locale"], "method", false, false, false, 243), "html", null, true);
        yield "/home/sous_categorie?id=' + \$(this).val();
                toastr.info(\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.recherche-sous-categories"), "html", null, true);
        yield "\");

                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
                        console.log(reponse);
                        \$('.sous_category').removeAttr('disabled');

                        \$('.sous_category').html(reponse);
                    },
                    error: function (reponse) {
                        toastr.clear();
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
        // line 286
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "otherLayout.html.twig", 286)->unwrap()->yield($context);
        // line 287
        yield "    ";
        yield from $this->loadTemplate("ws/script.html.twig", "otherLayout.html.twig", 287)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "otherLayout.html.twig";
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
        return array (  583 => 287,  581 => 286,  536 => 244,  532 => 243,  472 => 186,  468 => 185,  395 => 114,  393 => 113,  386 => 108,  383 => 107,  380 => 106,  378 => 105,  370 => 99,  368 => 98,  361 => 95,  357 => 93,  353 => 92,  342 => 83,  337 => 79,  332 => 75,  327 => 71,  324 => 69,  314 => 68,  305 => 66,  295 => 65,  282 => 63,  272 => 62,  256 => 60,  247 => 57,  244 => 56,  242 => 55,  239 => 54,  229 => 53,  214 => 38,  212 => 37,  208 => 36,  204 => 35,  196 => 29,  187 => 21,  177 => 20,  159 => 17,  151 => 15,  148 => 14,  138 => 13,  128 => 289,  126 => 68,  124 => 65,  122 => 62,  119 => 61,  117 => 60,  114 => 59,  112 => 53,  110 => 52,  105 => 49,  102 => 48,  99 => 47,  96 => 46,  94 => 20,  91 => 19,  89 => 17,  86 => 16,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  67 => 7,  64 => 6,  62 => 5,  56 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">

<head>
    {% include 'tag-google.html.twig' %}
    {% include 'hotjar.html.twig' %}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" href=\"{{ absolute_url(asset('assets/img/logo_new.svg')) }}\" sizes=\"32x32\"/>
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/img/logo_tm.svg') }}\"/>
    <meta name=\"msapplication-TileImage\" content=\"{{ asset('assets/img/logo_tm.svg') }}\"/>
    {% block head %}
        {% include(\"Seo/Meta/noindex.html.twig\") %}
    {% endblock %}
    <title>
        {% block title %}Trust &amp; Market
        {% endblock %}
    </title>
    {% block style %}
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Material Design Bootstrap -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        {# <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\"> #}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css\"
              integrity=\"sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==\"
              crossorigin=\"anonymous\"/>
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

        <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
        <link href=\"{{ absolute_url(asset('assets/css/footer.css')) }}\" rel=\"stylesheet\">
        {% include 'cssTemplates/chat.css.twig' %}
        <style>
            .image-header {
                width: 35px;
                height: 35px;
                object-fit: cover;
            }
        </style>
    {% endblock %}
    {% include \"pixelFacebook.html.twig\" %}
    {% include 'scriptautomatisationBrevo.html.twig' %}
    {% include 'scriptchatBrevo.html.twig' %}
</head>

<body style=\"width: 100%\">
{% include 'facebook-support.html.twig' %}
{% block header %}
    <header>
        {% include(\"header-new-design.html.twig\") %}
        {% include(\"partials/otherPagesVideoModal.html.twig\") %}
    </header>
{% endblock %}

{% block navigation %}{% endblock %}

{% block body %}
    <a href=\"{{ path('project_index') }}\" target=\"_blank\" id=\"yourproject-iconed-link\">{{ 'general.projet'|trans }}</a>
{% endblock %}
{% block footer %}
    {% include(\"footer.html.twig\") %}
{% endblock %}
{% block javascripts %}
    <!-- JQuery -->
    {# <script type=\"text/javascript\" src=\"{{ prerender(asset('assets/js/jquery-3.4.1.min.js')) }}\"></script> #}
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
            integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap tooltips -->
    {# <script type=\"text/javascript\" src=\"{{ asset('assets/js/popper.min.js') }}\"></script> #}
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    {# <script type=\"text/javascript\" src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script> #}
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    {# <script type=\"text/javascript\" src=\"{{ asset('assets/js/mdb.min.js') }}\"></script> #}
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
    <!-- Lazy load -->
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/fullclip.min.js') }}\"></script>
    {# <script src=\"{{ asset('assets/js/gijgo-js/gijgo.min.2.js') }}\"></script> #}
    <script src=\"{{ asset('assets/js/lazysizes.min.js') }}\" async></script>
    <!-- Images End -->
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
    {% include \"partials/js/top_button.html.twig\" %}
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <!-- <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js\"></script> -->

    {% if app.environment == 'prod' %}
        {% include 'partials/js/cookie.js.twig' %}
    {% endif %}
    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        })

        {% include(\"partials/js/videoButton.js.twig\") %}

        \$(\".closeBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#newsletterModal\").modal('toggle');
        });

        \$(document).click(function (event) {
            var target = \$(event.target);
            if (!target.closest('.linkContent').length && \$('.linkContent').is(':visible')) {
                \$('.floatingMenu').fadeOut();
            }
        });
        \$('.searchSelectPicker').selectpicker();

        \$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
            event.preventDefault();
            var oldTexte = \$(this).text()
            \$(this).text(\"En cours...\")
            var whichForm = \$(this).attr('attr-form')
            var typePrestation = \$('.' + whichForm).find('select[name=\"type_prestation\"]').val()
            console.log(typePrestation);
            if (typePrestation == \"\") {
                \$(this).text(oldTexte)
                toastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
            } else {
                \$(this).text(oldTexte)
                \$('.' + whichForm).submit();
            }
        });

        if (\$(window).width() <= 922) {
            \$('.block_conjoint').insertAfter('.search-title-mob')
            \$('.searchDiv').insertAfter('.block_conjoint')
            \$('.link-card-actu').insertAfter('.searchDiv')
        }

        window.onresize = function () {
            if (window.innerWidth <= 922) {
                \$('.block_conjoint').insertAfter('.search-title-mob')
                \$('.searchDiv').insertAfter('.block_conjoint')
                \$('.link-card-actu').insertAfter('.searchDiv')
            } else {
                \$('.block_conjoint').insertAfter('.titreFromTitreFilter')
                \$('.searchDiv').insertAfter('.logoButtonHeader')
                \$('.link-card-actu').insertAfter('.titre_filter')
            }
        }
    </script>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });

            /**
             * Manipulate data from data-id and data-name attributes in \"Types de prestation\"
             */
            \$('.prestation-i').on('click', function (e) {
                e.preventDefault();
                var pres_id = \$(this).attr('data-id');
                var pres_name = \$(this).attr('data-name');

                \$('.type-pres-span').html(pres_name);
                \$('.input-type-prestation').val(pres_id);

                var url1 = '{{ app.request.get(\"_locale\") }}/home/sous_categorie1?id=' + pres_id;
                toastr.info(\"{{ 'home.formulaire-champs.recherche-sous-categories'|trans }}\");
                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
                        console.log(reponse);

                        \$('.besoin-fld-scroll-item').html(reponse);
                    },
                    error: function (reponse) {
                        toastr.clear();
                    }

                });

            });

            \$(document).on('click', '.besoins-i', function () {
                var pres_id = \$(this).attr('data-id');
                var pres_name = \$(this).attr('data-name');

                \$('.besoins-span-text').html(pres_name);
                \$('.input-type-besoins').val(pres_id);
                var b = \$('.input-type-besoins').val();
                console.log(pres_id + \" \" + pres_name + \" \" + b);
            });


// Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });

// Hambuger menu icon
            \$('.animated-button-icon').on('click', function () {
                \$('.animated-icon2').toggleClass('open');
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

            \$(document).on('change', '.categorieParent', function (e) {

                e.preventDefault();
                var url1 = '{{ app.request.get(\"_locale\") }}/home/sous_categorie?id=' + \$(this).val();
                toastr.info(\"{{ 'home.formulaire-champs.recherche-sous-categories'|trans }}\");

                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
                        console.log(reponse);
                        \$('.sous_category').removeAttr('disabled');

                        \$('.sous_category').html(reponse);
                    },
                    error: function (reponse) {
                        toastr.clear();
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


    {% include \"partials/js/searchForm.html.twig\" %}
    {% include 'ws/script.html.twig' %}
{% endblock %}
</body>
</html>
", "otherLayout.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/otherLayout.html.twig");
    }
}
