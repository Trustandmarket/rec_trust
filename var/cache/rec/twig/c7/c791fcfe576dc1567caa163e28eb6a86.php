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

/* descriptiveContent.html.twig */
class __TwigTemplate_2c1b9f06f4d6cc4b683f1b0bf76f348a extends Template
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
            'pageTitle' => [$this, 'block_pageTitle'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "descriptiveContent.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        yield "\">
<head>
    ";
        // line 4
        yield from $this->loadTemplate("tag-google.html.twig", "descriptiveContent.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "    ";
        yield from $this->loadTemplate("hotjar.html.twig", "descriptiveContent.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo_tm.svg"), "html", null, true);
        yield "\"/>
    <link rel=\"icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_new.svg")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg"), "html", null, true);
        yield "\"/>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/topBtn.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
    ";
        // line 21
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 26
        yield "
    <title> ";
        // line 27
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " </title>

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 143
        yield "
    ";
        // line 144
        yield from $this->loadTemplate("pixelFacebook.html.twig", "descriptiveContent.html.twig", 144)->unwrap()->yield($context);
        // line 145
        yield "    ";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "descriptiveContent.html.twig", 145)->unwrap()->yield($context);
        // line 146
        yield "    ";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "descriptiveContent.html.twig", 146)->unwrap()->yield($context);
        // line 147
        yield "</head>
<body style=\"width: 100%\">
";
        // line 149
        yield from $this->loadTemplate("facebook-support.html.twig", "descriptiveContent.html.twig", 149)->unwrap()->yield($context);
        // line 150
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 169
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 173
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 176
        yield "
";
        // line 177
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 22
        yield "        <!-- No Index for dev -->
        ";
        // line 23
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "descriptiveContent.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "        <!-- No Index for dev -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 30
        yield "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
        <!-- Your custom styles (optional) -->
        <link href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 37
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "descriptiveContent.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "        <style>
            #yourproject-iconed-link {
                display: block;
                position: fixed;
                width: 100px;
                height: 100px;
                background: url(\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/project-icon.png"), "html", null, true);
        yield "\") no-repeat center center transparent;
                bottom: 80px;
                right: 20px;
                z-index: 9999999999;
                background-size: cover;
                cursor: pointer;
                font-size: 0;
            }

            .view {
                height: 100%;
                background: url(";
        // line 55
        if (array_key_exists("contenu", $context)) {
            // line 56
            yield "\t\t\t";
            if (CoreExtension::inFilter("wp-content", CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 56, $this->source); })()), "guid", [], "any", false, false, false, 56))) {
                // line 57
                yield "\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 57, $this->source); })()), "guid", [], "any", false, false, false, 57), "html", null, true);
                yield "
\t\t\t";
            } else {
                // line 59
                yield "\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/a-propos/a-propos-header.jpg"), "html", null, true);
                yield "
\t\t\t";
            }
            // line 61
            yield "\t\t\t";
        }
        yield ") no-repeat left top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            /* .view {
                height: 100%;
                background: url(../img/a-propos/a-propos-header.jpg) no-repeat left top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            } */

            .image-header {
                width: 35px;
                height: 35px;
                object-fit: cover;
            }

            #dialoguons {
                bottom: 85px;
                right: 10%;
                position: fixed;
                z-index: 9999999999;
                background: white;
                border: 1px solid black;
                width: 19%;
                display: none;
            }

            @media only screen and (max-width: 500px) {
                #dialoguons {
                    width: 70%;
                }
            }

            @media only screen and (min-width: 501px) {
                #dialoguons {
                    width: 40%;
                }
            }

            @media only screen and (min-width: 769) and (max-width: 1024px) {
                #dialoguons {
                    width: 30%;
                }
            }

            @media only screen and (min-width: 1025px) {
                #dialoguons {
                    width: 19%;
                }
            }

            .p-pop-up1 {
                margin-bottom: 2rem;
            }

            .p-pop-titre1, .p-pop-titre2 {
                font-family: \"Palanquin Dark\";
            }

            .p-pop-content1 {
                background: #53b4a6;
                color: white;
                padding: 10px;
                text-decoration: none;
                font-family: \"Source Sans Pro\";
            }

            .p-pop-content2 {
                background: black;
                color: white;
                padding: 10px;
                text-decoration: none;
                font-family: \"Source Sans Pro\";
            }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 151
        yield "    <!--Main Navigation-->
    <header style=\"\">
        ";
        // line 153
        yield from $this->loadTemplate("header-new-design.html.twig", "descriptiveContent.html.twig", 153)->unwrap()->yield($context);
        // line 154
        yield "        <div id=\"imageHolder\" class=\"view intro-2\">
            <div class=\"full-bg-img\">
                <div class=\"mask rgba-purple-light flex-center\">
                    <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                        <h2 class=\"page-title\" style=\"color: #fff;\">
                            ";
        // line 159
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 162
        yield "                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 160
        yield "                                ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "locale", [], "any", false, false, false, 160) == "en") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 160, $this->source); })()), "postExcerpt", [], "any", false, false, false, 160) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 160, $this->source); })()), "postExcerpt", [], "any", false, false, false, 160)), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 160, $this->source); })()), "getPostTitle", [], "any", false, false, false, 160)), "html", null, true);
        }
        // line 161
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 170
        yield "    ";
        yield from $this->loadTemplate("partials/project.html.twig", "descriptiveContent.html.twig", 170)->unwrap()->yield($context);
        // line 171
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "descriptiveContent.html.twig", 171)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 174
        yield "    ";
        yield from $this->loadTemplate("footer.html.twig", "descriptiveContent.html.twig", 174)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        yield "    <!-- JQuery -->
    ";
        // line 180
        yield "    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap tooltips -->
    ";
        // line 183
        yield "    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"
            async></script>
    <!-- Bootstrap core JavaScript -->
    ";
        // line 187
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    ";
        // line 191
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
    <!-- Lazy load -->
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\" async></script>
    <script src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\" async></script>
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
    ";
        // line 203
        yield from $this->loadTemplate("partials/js/top_button.html.twig", "descriptiveContent.html.twig", 203)->unwrap()->yield($context);
        // line 204
        yield "
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>

    ";
        // line 208
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 208, $this->source); })()), "environment", [], "any", false, false, false, 208) == "prod")) {
            // line 209
            yield "    ";
            yield from $this->loadTemplate("partials/js/cookie.js.twig", "descriptiveContent.html.twig", 209)->unwrap()->yield($context);
            // line 210
            yield "    ";
        }
        // line 211
        yield "    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        });

        ";
        // line 216
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "descriptiveContent.html.twig", 216)->unwrap()->yield($context);
        // line 217
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

        grecaptcha.ready(function () {
            grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                document.getElementById(\"recaptchaResponse\").value = token;
            });
        });
        // Script to create user for newsletter

        \$('#newsletterForm').on('submit', function (e) {
            e.preventDefault();
            console.log(\$('#recaptchaResponse').val());


            if (\$('#recaptchaResponse').val()) {

                toastr.info('";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.attente"), "html", null, true);
        yield "');
                var \$form = \$(this);
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    success: function (reponse) {

                        if (reponse == 1) {
                            toastr.clear();
                            \$('#body').hide();
                            \$('#succes').show();
                            \$('html,body').scrollTop(0);
                            \$('#send').removeClass('running');
                            toastr.success('";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.succes"), "html", null, true);
        yield "');
                            \$('#newsletterModal').modal('toggle');
                        } else if (reponse == 0) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.email_occupe"), "html", null, true);
        yield "');
                        }
                    },
                    error: function (reponse) {
                        toastr.clear();
                        \$('#send').removeClass('running');
                        toastr.error('";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.echec"), "html", null, true);
        yield "');
                    }
                });
                return false;

            } else {
                toastr.warning('robot');
            }
        });
    </script>
    <script>
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });

            \$(\"#yourproject-iconed-link, #fermeur\").click(function (e) {
                e.preventDefault();
                \$(\"#dialoguons\").fadeToggle(\"slow\", \"linear\");
            });

// Date fields
            \$('.date_debut').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'dd-mm-yyyy',
                showRightIcon: false,
                iconsLibrary: 'fontawesome'
            });

            \$('.date_fin').datepicker({
                uiLibrary: 'bootstrap4',
                showRightIcon: false,
                format: 'dd-mm-yyyy',
                iconsLibrary: 'fontawesome'
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

// background image slider
            \$('.fullBackground').fullClip({
                images: ['img/home-slider/home-slider-o1.png', 'img/home-slider/home-slider-o2.png',
\t\t\t\t\t'img/home-slider/home-slider-o3.png', 'img/home-slider/home-slider-o4.png', 'img/home-slider/home-slider-o5.png',
                    'img/home-slider/home-slider-o6.png', 'img/home-slider/home-slider-o7.png',
                    'img/home-slider/home-slider-o8.png', 'img/home-slider/home-slider-o9.png',
                    'img/home-slider/home-slider-o11.png', 'img/home-slider/home-slider-o12.png'],
                transitionTime: 1000,
                wait: 3000
            });
            \$(document).on('change', '.categorieParent', function (e) { // On empeche le navigateur de soumettre le formulaire

                e.preventDefault();
                var url1 = '";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 365, $this->source); })()), "request", [], "any", false, false, false, 365), "get", ["_locale"], "method", false, false, false, 365), "html", null, true);
        yield "/home/sous_categorie?id=' + \$(this).val();
                toastr.info('Recherche des sous catégories...');
                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
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
        // line 404
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "descriptiveContent.html.twig", 404)->unwrap()->yield($context);
        // line 405
        yield "    <!-- End Lazy load -->
    ";
        // line 406
        yield from $this->loadTemplate("ws/script.html.twig", "descriptiveContent.html.twig", 406)->unwrap()->yield($context);
        // line 407
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "descriptiveContent.html.twig";
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
        return array (  733 => 407,  731 => 406,  728 => 405,  726 => 404,  684 => 365,  603 => 287,  594 => 281,  586 => 276,  569 => 262,  522 => 217,  520 => 216,  513 => 211,  510 => 210,  507 => 209,  505 => 208,  499 => 204,  497 => 203,  492 => 201,  488 => 200,  477 => 191,  472 => 187,  467 => 183,  463 => 180,  460 => 178,  450 => 177,  441 => 174,  431 => 173,  422 => 171,  419 => 170,  409 => 169,  401 => 161,  394 => 160,  384 => 159,  370 => 162,  368 => 159,  361 => 154,  359 => 153,  355 => 151,  345 => 150,  254 => 61,  248 => 59,  242 => 57,  239 => 56,  237 => 55,  223 => 44,  215 => 38,  213 => 37,  209 => 36,  205 => 35,  201 => 34,  196 => 32,  192 => 30,  182 => 29,  165 => 27,  156 => 24,  154 => 23,  151 => 22,  141 => 21,  133 => 177,  130 => 176,  128 => 173,  126 => 169,  124 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 144,  107 => 143,  105 => 29,  100 => 27,  97 => 26,  95 => 21,  89 => 18,  79 => 11,  75 => 10,  71 => 9,  66 => 6,  63 => 5,  61 => 4,  56 => 2,  53 => 1,);
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
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/logo_tm.svg') }}\"/>
    <link rel=\"icon\" href=\"{{ absolute_url(asset('assets/img/logo_new.svg')) }}\" sizes=\"32x32\"/>
    <meta name=\"msapplication-TileImage\" content=\"{{ asset('assets/img/logo_tm.svg') }}\"/>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/topBtn.css') }} \" rel=\"stylesheet\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
    {% block head %}
        <!-- No Index for dev -->
        {% include(\"Seo/Meta/noindex.html.twig\") %}
        <!-- No Index for dev -->
    {% endblock %}

    <title> {% block title %}Trust &amp; Market{% endblock %} </title>

    {% block style %}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
        <!-- Your custom styles (optional) -->
        <link href=\"{{ asset('assets/css/custome.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/result.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ absolute_url(asset('assets/css/footer.css')) }}\" rel=\"stylesheet\">
        {% include 'cssTemplates/chat.css.twig' %}
        <style>
            #yourproject-iconed-link {
                display: block;
                position: fixed;
                width: 100px;
                height: 100px;
                background: url(\"{{ asset('assets/img/project-icon.png') }}\") no-repeat center center transparent;
                bottom: 80px;
                right: 20px;
                z-index: 9999999999;
                background-size: cover;
                cursor: pointer;
                font-size: 0;
            }

            .view {
                height: 100%;
                background: url({% if contenu is defined %}
\t\t\t{% if 'wp-content' in contenu.guid %}
\t\t\t{{contenu.guid}}
\t\t\t{% else %}
\t\t\t{{asset('assets/img/a-propos/a-propos-header.jpg')}}
\t\t\t{% endif %}
\t\t\t{% endif %}) no-repeat left top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            /* .view {
                height: 100%;
                background: url(../img/a-propos/a-propos-header.jpg) no-repeat left top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            } */

            .image-header {
                width: 35px;
                height: 35px;
                object-fit: cover;
            }

            #dialoguons {
                bottom: 85px;
                right: 10%;
                position: fixed;
                z-index: 9999999999;
                background: white;
                border: 1px solid black;
                width: 19%;
                display: none;
            }

            @media only screen and (max-width: 500px) {
                #dialoguons {
                    width: 70%;
                }
            }

            @media only screen and (min-width: 501px) {
                #dialoguons {
                    width: 40%;
                }
            }

            @media only screen and (min-width: 769) and (max-width: 1024px) {
                #dialoguons {
                    width: 30%;
                }
            }

            @media only screen and (min-width: 1025px) {
                #dialoguons {
                    width: 19%;
                }
            }

            .p-pop-up1 {
                margin-bottom: 2rem;
            }

            .p-pop-titre1, .p-pop-titre2 {
                font-family: \"Palanquin Dark\";
            }

            .p-pop-content1 {
                background: #53b4a6;
                color: white;
                padding: 10px;
                text-decoration: none;
                font-family: \"Source Sans Pro\";
            }

            .p-pop-content2 {
                background: black;
                color: white;
                padding: 10px;
                text-decoration: none;
                font-family: \"Source Sans Pro\";
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
    <!--Main Navigation-->
    <header style=\"\">
        {% include(\"header-new-design.html.twig\") %}
        <div id=\"imageHolder\" class=\"view intro-2\">
            <div class=\"full-bg-img\">
                <div class=\"mask rgba-purple-light flex-center\">
                    <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                        <h2 class=\"page-title\" style=\"color: #fff;\">
                            {% block pageTitle %}
                                {% if app.request.locale == 'en' and contenu.postExcerpt != '' %}{{ contenu.postExcerpt|upper }}{% else %}{{ contenu.getPostTitle|upper }}{% endif %}
                            {% endblock %}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
{% endblock %}
{% block body %}
    {% include(\"partials/project.html.twig\") %}
    {% include(\"partials/otherPagesVideoModal.html.twig\") %}
{% endblock %}
{% block footer %}
    {% include(\"footer.html.twig\") %}
{% endblock %}

{% block javascripts %}
    <!-- JQuery -->
    {# <script type=\"text/javascript\" src=\"{{ prerender(asset('assets/js/jquery-3.4.1.min.js')) }}\"></script> #}
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap tooltips -->
    {# <script type=\"text/javascript\" src=\"{{ asset('assets/js/popper.min.js') }}\"></script> #}
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"
            async></script>
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
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{ asset('toastr/toastr.min.js') }}\" async></script>
    <script src=\"{{ asset('assets/js/gijgo-js/gijgo.min.2.js') }}\" async></script>
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
    {% include \"partials/js/top_button.html.twig\" %}

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>

    {% if app.environment == 'prod' %}
    {% include 'partials/js/cookie.js.twig' %}
    {% endif %}
    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        });

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

        grecaptcha.ready(function () {
            grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                document.getElementById(\"recaptchaResponse\").value = token;
            });
        });
        // Script to create user for newsletter

        \$('#newsletterForm').on('submit', function (e) {
            e.preventDefault();
            console.log(\$('#recaptchaResponse').val());


            if (\$('#recaptchaResponse').val()) {

                toastr.info('{{ 'newsletter.attente'|trans }}');
                var \$form = \$(this);
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    success: function (reponse) {

                        if (reponse == 1) {
                            toastr.clear();
                            \$('#body').hide();
                            \$('#succes').show();
                            \$('html,body').scrollTop(0);
                            \$('#send').removeClass('running');
                            toastr.success('{{ 'newsletter.succes'|trans }}');
                            \$('#newsletterModal').modal('toggle');
                        } else if (reponse == 0) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('{{ 'newsletter.email_occupe'|trans }}');
                        }
                    },
                    error: function (reponse) {
                        toastr.clear();
                        \$('#send').removeClass('running');
                        toastr.error('{{ 'newsletter.echec'|trans }}');
                    }
                });
                return false;

            } else {
                toastr.warning('robot');
            }
        });
    </script>
    <script>
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });

            \$(\"#yourproject-iconed-link, #fermeur\").click(function (e) {
                e.preventDefault();
                \$(\"#dialoguons\").fadeToggle(\"slow\", \"linear\");
            });

// Date fields
            \$('.date_debut').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'dd-mm-yyyy',
                showRightIcon: false,
                iconsLibrary: 'fontawesome'
            });

            \$('.date_fin').datepicker({
                uiLibrary: 'bootstrap4',
                showRightIcon: false,
                format: 'dd-mm-yyyy',
                iconsLibrary: 'fontawesome'
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

// background image slider
            \$('.fullBackground').fullClip({
                images: ['img/home-slider/home-slider-o1.png', 'img/home-slider/home-slider-o2.png',
\t\t\t\t\t'img/home-slider/home-slider-o3.png', 'img/home-slider/home-slider-o4.png', 'img/home-slider/home-slider-o5.png',
                    'img/home-slider/home-slider-o6.png', 'img/home-slider/home-slider-o7.png',
                    'img/home-slider/home-slider-o8.png', 'img/home-slider/home-slider-o9.png',
                    'img/home-slider/home-slider-o11.png', 'img/home-slider/home-slider-o12.png'],
                transitionTime: 1000,
                wait: 3000
            });
            \$(document).on('change', '.categorieParent', function (e) { // On empeche le navigateur de soumettre le formulaire

                e.preventDefault();
                var url1 = '{{ app.request.get(\"_locale\") }}/home/sous_categorie?id=' + \$(this).val();
                toastr.info('Recherche des sous catégories...');
                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
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
    <!-- End Lazy load -->
    {% include 'ws/script.html.twig' %}

{% endblock %}
", "descriptiveContent.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/descriptiveContent.html.twig");
    }
}
