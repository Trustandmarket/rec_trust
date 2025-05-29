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

/* homeLayout.html.twig */
class __TwigTemplate_a4f10883a84ea33281b6890fbc3b8640 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homeLayout.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "getLocale", [], "method", false, false, false, 3), "html", null, true);
        yield "\">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    ";
        // line 6
        yield from $this->loadTemplate("tag-google.html.twig", "homeLayout.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    ";
        yield from $this->loadTemplate("hotjar.html.twig", "homeLayout.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <!-- No Index for dev -->
    ";
        // line 12
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "homeLayout.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "    <!-- No Index for dev -->
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 15
        yield "    <title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 44
        yield "    ";
        yield from $this->loadTemplate("pixelFacebook.html.twig", "homeLayout.html.twig", 44)->unwrap()->yield($context);
        // line 45
        yield "    ";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "homeLayout.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "    ";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "homeLayout.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "</head>
<body class=\"homeLayout\">
";
        // line 49
        yield from $this->loadTemplate("facebook-support.html.twig", "homeLayout.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 54
        yield "
    ";
        // line 55
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 117
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 121
        yield "
";
        // line 122
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 125
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 417
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
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

        yield "Trust &amp; Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 17
        yield "        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
        <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

        ";
        // line 30
        yield from $this->loadTemplate("cssTemplates/mediaHomeQuery.css.twig", "homeLayout.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield "        ";
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "homeLayout.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "
        <style>
            @media only screen and (max-width: 768px) {
                .homeLayout main.py-5 {
                    padding-top: 0rem !important;
                    position: relative;
                    top: -3rem;
                }
            }
        </style>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 51
        yield "<header style=\"height: 100%;\">
    ";
        // line 52
        yield from $this->loadTemplate("header-new-design.html.twig", "homeLayout.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 56
        yield "
    <div id=\"imageHolder\"
         class=\"view intro-2\" ";
        // line 58
        yield ">
        <div class=\"full-bg-img\" style=\"height: 100%;\">
            <div id=\"background-img\"
                 style=\"background-image: url('";
        // line 61
        if ((isset($context["bloc10"]) || array_key_exists("bloc10", $context) ? $context["bloc10"] : (function () { throw new RuntimeError('Variable "bloc10" does not exist.', 61, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bloc10"]) || array_key_exists("bloc10", $context) ? $context["bloc10"] : (function () { throw new RuntimeError('Variable "bloc10" does not exist.', 61, $this->source); })()), "optionValue", [], "any", false, false, false, 61), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg"), "html", null, true);
        }
        yield "');align-items: center;height: 100%;display: flex;position:relative;justify-content: start;flex-direction: column;\"
                 class=\"mask rgba-purple-light flex-center fullBackground pt-5 searchFilterDiv\">
                <div class=\"col-md-3 col-lg-3 col-xl-3 col-12 custom-filter ml-4 mt-5 mobile_filter\" id=\"custom-filter\" style=\"display:none;width: 360px;max-width: 100%;\">
                    <div class=\"bloc_blanc\">
                        <div class=\"container\" style=\"padding: 0px;\">
                            <div class=\"search-title-mob\">";
        // line 66
        if ((array_key_exists("slogan_homepage", $context) && (isset($context["slogan_homepage"]) || array_key_exists("slogan_homepage", $context) ? $context["slogan_homepage"] : (function () { throw new RuntimeError('Variable "slogan_homepage" does not exist.', 66, $this->source); })()))) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["slogan_homepage"]) || array_key_exists("slogan_homepage", $context) ? $context["slogan_homepage"] : (function () { throw new RuntimeError('Variable "slogan_homepage" does not exist.', 66, $this->source); })()), "getOptionValue", [], "any", false, false, false, 66);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.texte.slogan"), "html", null, true);
        }
        yield "</div>
                        </div>
                    </div>
                </div>
                <div class=\"titre_filter\" style=\"margin-bottom: 1rem;margin-top: 4rem; color: white\">
                    <h1 class=\"titreFromTitreFilter\" style=\"text-align: center;font-family: 'Palanquin Dark',sans-serif !important;font-size: 2rem;\">";
        // line 71
        if ((array_key_exists("slogan_homepage", $context) && (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["slogan_homepage"]) || array_key_exists("slogan_homepage", $context) ? $context["slogan_homepage"] : (function () { throw new RuntimeError('Variable "slogan_homepage" does not exist.', 71, $this->source); })()), "getOptionValue", [], "any", false, false, false, 71)) != ""))) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["slogan_homepage"]) || array_key_exists("slogan_homepage", $context) ? $context["slogan_homepage"] : (function () { throw new RuntimeError('Variable "slogan_homepage" does not exist.', 71, $this->source); })()), "getOptionValue", [], "any", false, false, false, 71);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.texte.slogan"), "html", null, true);
        }
        yield "</h1>
                ";
        // line 72
        if ((isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 72, $this->source); })())) {
            // line 73
            yield "                    <a target=\"_blank\" class=\"link-card-actu\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 73, $this->source); })()), "guid", [], "any", false, false, false, 73), "html", null, true);
            yield "\">
                        <div>
                            ";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 75, $this->source); })()), "postTitle", [], "any", false, false, false, 75);
            yield "
                            ";
            // line 76
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 76, $this->source); })()), "postContent", [], "any", false, false, false, 76);
            yield "
                        </div>
                    </a>
                ";
        }
        // line 80
        yield "
                <div class=\"container text-center white-text wow fadeInUp\">
                    <div class=\"row\">
                        <div class=\"m-auto col-md-9 col-xs-12\"></form>
                        </div>
                        <div id=\"sectionAvancer\" class=\"col-md-12 d-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Modal -->
    ";
        // line 93
        if (array_key_exists("youtube_url", $context)) {
            // line 94
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 94, $this->source); })()), "autoload", [], "any", false, false, false, 94) == "yes")) {
                // line 95
                yield "            <div class=\"modal fade\" id=\"youtubeVideoModal\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"youtubeVideoModalTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                    <div class=\"modal-content\" style=\"background-color: transparent;box-shadow: none;\">
                        <div class=\"modal-body\">
                            <span aria-hidden=\"true\" class=\"closeVideoBtnModal\">&times;</span>
                            <div class=\"hs-responsive-embed-youtube\">
                                <iframe class=\"rounded\" src=\"\" frameborder=\"0\" allowfullscreen=\"\"
                                        allow=\"autoplay\"></iframe>
                            </div>
                            <input hidden
                                   value=\"";
                // line 106
                if ((isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 106, $this->source); })())) {
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 106, $this->source); })()), "autoload", [], "any", false, false, false, 106) == "yes")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 106, $this->source); })()), "optionValue", [], "any", false, false, false, 106), "html", null, true);
                    }
                }
                yield "\"
                                   id=\"youtube_url\"/>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            // line 113
            yield "    ";
        }
        // line 114
        yield "
    <!--Main Navigation-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 118
        yield "
    ";
        // line 119
        yield from $this->loadTemplate("partials/project.html.twig", "homeLayout.html.twig", 119)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        yield "    ";
        yield from $this->loadTemplate("footer.html.twig", "homeLayout.html.twig", 123)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        yield "    <!-- JQuery -->
    ";
        // line 128
        yield "    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
            integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap tooltips -->
    ";
        // line 132
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    ";
        // line 136
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    ";
        // line 140
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
    <!-- Lazy load -->
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

    <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 152
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lazysizes.min.js"), "html", null, true);
        yield "\" async></script>
    <!-- Images End -->
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
    ";
        // line 155
        yield from $this->loadTemplate("partials/js/top_button.html.twig", "homeLayout.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>

    ";
        // line 159
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "environment", [], "any", false, false, false, 159) == "prod")) {
            // line 160
            yield "        ";
            yield from $this->loadTemplate("partials/js/cookie.js.twig", "homeLayout.html.twig", 160)->unwrap()->yield($context);
            // line 161
            yield "    ";
        }
        // line 162
        yield "
    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        })


        ";
        // line 169
        if ((isset($context["youtube_url"]) || array_key_exists("youtube_url", $context) ? $context["youtube_url"] : (function () { throw new RuntimeError('Variable "youtube_url" does not exist.', 169, $this->source); })())) {
            // line 170
            yield "        \$(\"#youtubeVideoModal\").modal(\"show\");

        \$(\".closeVideoBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#youtubeVideoModal\").modal('hide');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", \"\");
        });

        \$(\".playVideoButton i\").click(function () {
            \$(\"#youtubeVideoModal\").modal('toggle');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", 'https://www.youtube.com/embed/' + \$(\"#youtubeVideoModal #youtube_url\").val());
        });
        ";
        }
        // line 183
        yield "
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
            \$('.link-card-actu').insertAfter('searchDiv')
            //\$('.link-card-actu').insertAfter('searchFilterDiv')
        }

        window.onresize = function () {
            if (window.innerWidth <= 922) {
                \$('.block_conjoint').insertAfter('.search-title-mob')
                \$('.searchDiv').insertAfter('.block_conjoint')
                \$('.link-card-actu').insertAfter('.searchDiv')
                //\$('.link-card-actu').insertAfter('.searchFilterDiv')
            } else {
                \$('.block_conjoint').insertAfter('.titreFromTitreFilter')
                \$('.searchDiv').insertAfter('.logoButtonHeader')
                \$('.link-card-actu').insertAfter('.titre_filter')
            }
        }

        grecaptcha.ready(function () {
            grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                document.getElementById(\"recaptchaResponse\").value = token;
            });
        });
        // Script to create user for newsletter

        \$('#newsletterForm').on('submit', function (e) {
            e.preventDefault();
            if (\$('#recaptchaResponse').val()) {

                toastr.info(\"";
        // line 239
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
                            toastr.success('";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.succes"), "html", null, true);
        yield "');
                            \$('#newsletterModal').modal('toggle');
                        } else if (response == 2) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.email_occupe"), "html", null, true);
        yield "');
                        } else if (response == 0) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.robot"), "html", null, true);
        yield "');
                        }
                    },
                    error: function (response) {
                        toastr.clear();
                        \$('#send').removeClass('running');
                        toastr.error('";
        // line 268
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


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });

            /**
             * On click event on searchbar to add class active to advance search and click outside the box to close advance section
             */
            \$('#searchBar').on('click', function () {
                \$('.new-srch').addClass('active');
            });
            /****************************************/
            \$(document).mouseup(function (e) {
                if (\$(e.target).closest(\"#SearchBar-menu1 .input-group\").length === 0) {
                    \$('.new-srch').removeClass('active');
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
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 313, $this->source); })()), "request", [], "any", false, false, false, 313), "get", ["_locale"], "method", false, false, false, 313), "html", null, true);
        yield "/home/sous_categorie1?id=' + pres_id;
                toastr.info(\"";
        // line 314
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
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "request", [], "any", false, false, false, 371), "get", ["_locale"], "method", false, false, false, 371), "html", null, true);
        yield "/home/sous_categorie?id=' + \$(this).val();
                toastr.info(\"";
        // line 372
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
        // line 414
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "homeLayout.html.twig", 414)->unwrap()->yield($context);
        // line 415
        yield "    ";
        yield from $this->loadTemplate("ws/script.html.twig", "homeLayout.html.twig", 415)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "homeLayout.html.twig";
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
        return array (  769 => 415,  767 => 414,  722 => 372,  718 => 371,  658 => 314,  654 => 313,  606 => 268,  597 => 262,  590 => 258,  582 => 253,  565 => 239,  507 => 183,  492 => 170,  490 => 169,  481 => 162,  478 => 161,  475 => 160,  473 => 159,  468 => 156,  466 => 155,  459 => 152,  455 => 150,  451 => 149,  440 => 140,  435 => 136,  430 => 132,  425 => 128,  422 => 126,  412 => 125,  403 => 123,  393 => 122,  385 => 119,  382 => 118,  372 => 117,  362 => 114,  359 => 113,  345 => 106,  332 => 95,  329 => 94,  327 => 93,  312 => 80,  305 => 76,  301 => 75,  295 => 73,  293 => 72,  285 => 71,  273 => 66,  261 => 61,  256 => 58,  252 => 56,  242 => 55,  234 => 53,  232 => 52,  229 => 51,  219 => 50,  200 => 32,  197 => 31,  195 => 30,  188 => 26,  184 => 25,  179 => 23,  171 => 17,  161 => 16,  144 => 15,  128 => 14,  118 => 417,  116 => 125,  114 => 122,  111 => 121,  109 => 117,  107 => 55,  104 => 54,  102 => 50,  100 => 49,  96 => 47,  93 => 46,  90 => 45,  87 => 44,  85 => 16,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  67 => 8,  64 => 7,  62 => 6,  56 => 3,  53 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/generalLayout.html.twig #}
<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {% include 'tag-google.html.twig' %}
    {% include 'hotjar.html.twig' %}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <!-- No Index for dev -->
    {% include(\"Seo/Meta/noindex.html.twig\") %}
    <!-- No Index for dev -->
    {% block head %}{% endblock %}
    <title>{% block title %}Trust &amp; Market{% endblock %}</title>
    {% block style %}
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
        <link href=\"{{ asset('assets/css/result.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/custome.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

        {% include 'cssTemplates/mediaHomeQuery.css.twig' %}
        {% include 'cssTemplates/chat.css.twig' %}

        <style>
            @media only screen and (max-width: 768px) {
                .homeLayout main.py-5 {
                    padding-top: 0rem !important;
                    position: relative;
                    top: -3rem;
                }
            }
        </style>

    {% endblock %}
    {% include \"pixelFacebook.html.twig\" %}
    {% include 'scriptautomatisationBrevo.html.twig' %}
    {% include 'scriptchatBrevo.html.twig' %}
</head>
<body class=\"homeLayout\">
{% include 'facebook-support.html.twig' %}
{% block header %}
<header style=\"height: 100%;\">
    {% include(\"header-new-design.html.twig\") %}
    {% endblock %}

    {% block navigation %}

    <div id=\"imageHolder\"
         class=\"view intro-2\" {# style=\"background-repeat: no-repeat; background-position: center center; background-size: cover\" #}>
        <div class=\"full-bg-img\" style=\"height: 100%;\">
            <div id=\"background-img\"
                 style=\"background-image: url('{% if bloc10 %}{{ bloc10.optionValue }}{% else %}{{ asset('assets/img/prestations/cover.jpg') }}{% endif %}');align-items: center;height: 100%;display: flex;position:relative;justify-content: start;flex-direction: column;\"
                 class=\"mask rgba-purple-light flex-center fullBackground pt-5 searchFilterDiv\">
                <div class=\"col-md-3 col-lg-3 col-xl-3 col-12 custom-filter ml-4 mt-5 mobile_filter\" id=\"custom-filter\" style=\"display:none;width: 360px;max-width: 100%;\">
                    <div class=\"bloc_blanc\">
                        <div class=\"container\" style=\"padding: 0px;\">
                            <div class=\"search-title-mob\">{% if slogan_homepage is defined and slogan_homepage %}{{ slogan_homepage.getOptionValue|raw }}{% else %}{{ 'home.texte.slogan'|trans }}{% endif %}</div>
                        </div>
                    </div>
                </div>
                <div class=\"titre_filter\" style=\"margin-bottom: 1rem;margin-top: 4rem; color: white\">
                    <h1 class=\"titreFromTitreFilter\" style=\"text-align: center;font-family: 'Palanquin Dark',sans-serif !important;font-size: 2rem;\">{% if slogan_homepage is defined and slogan_homepage.getOptionValue|trim != '' %}{{ slogan_homepage.getOptionValue|raw }}{% else %}{{ 'home.texte.slogan'|trans }}{% endif %}</h1>
                {% if actualite %}
                    <a target=\"_blank\" class=\"link-card-actu\" href=\"{{ actualite.guid }}\">
                        <div>
                            {{ actualite.postTitle|raw }}
                            {{ actualite.postContent|raw }}
                        </div>
                    </a>
                {% endif %}

                <div class=\"container text-center white-text wow fadeInUp\">
                    <div class=\"row\">
                        <div class=\"m-auto col-md-9 col-xs-12\"></form>
                        </div>
                        <div id=\"sectionAvancer\" class=\"col-md-12 d-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Modal -->
    {% if youtube_url is defined %}
        {% if youtube_url.autoload == 'yes' %}
            <div class=\"modal fade\" id=\"youtubeVideoModal\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"youtubeVideoModalTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                    <div class=\"modal-content\" style=\"background-color: transparent;box-shadow: none;\">
                        <div class=\"modal-body\">
                            <span aria-hidden=\"true\" class=\"closeVideoBtnModal\">&times;</span>
                            <div class=\"hs-responsive-embed-youtube\">
                                <iframe class=\"rounded\" src=\"\" frameborder=\"0\" allowfullscreen=\"\"
                                        allow=\"autoplay\"></iframe>
                            </div>
                            <input hidden
                                   value=\"{% if youtube_url %}{% if youtube_url.autoload == 'yes' %}{{ youtube_url.optionValue }}{% endif %}{% endif %}\"
                                   id=\"youtube_url\"/>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    {% endif %}

    <!--Main Navigation-->
{% endblock %}
{% block body %}

    {% include(\"partials/project.html.twig\") %}
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

    {% if app.environment == 'prod' %}
        {% include 'partials/js/cookie.js.twig' %}
    {% endif %}

    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        })


        {% if youtube_url %}
        \$(\"#youtubeVideoModal\").modal(\"show\");

        \$(\".closeVideoBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#youtubeVideoModal\").modal('hide');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", \"\");
        });

        \$(\".playVideoButton i\").click(function () {
            \$(\"#youtubeVideoModal\").modal('toggle');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", 'https://www.youtube.com/embed/' + \$(\"#youtubeVideoModal #youtube_url\").val());
        });
        {% endif %}

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
            \$('.link-card-actu').insertAfter('searchDiv')
            //\$('.link-card-actu').insertAfter('searchFilterDiv')
        }

        window.onresize = function () {
            if (window.innerWidth <= 922) {
                \$('.block_conjoint').insertAfter('.search-title-mob')
                \$('.searchDiv').insertAfter('.block_conjoint')
                \$('.link-card-actu').insertAfter('.searchDiv')
                //\$('.link-card-actu').insertAfter('.searchFilterDiv')
            } else {
                \$('.block_conjoint').insertAfter('.titreFromTitreFilter')
                \$('.searchDiv').insertAfter('.logoButtonHeader')
                \$('.link-card-actu').insertAfter('.titre_filter')
            }
        }

        grecaptcha.ready(function () {
            grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                document.getElementById(\"recaptchaResponse\").value = token;
            });
        });
        // Script to create user for newsletter

        \$('#newsletterForm').on('submit', function (e) {
            e.preventDefault();
            if (\$('#recaptchaResponse').val()) {

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
                            toastr.success('{{ 'newsletter.succes'|trans }}');
                            \$('#newsletterModal').modal('toggle');
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
                return false;
            } else {
                toastr.warning('robot');
            }
        });
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
             * On click event on searchbar to add class active to advance search and click outside the box to close advance section
             */
            \$('#searchBar').on('click', function () {
                \$('.new-srch').addClass('active');
            });
            /****************************************/
            \$(document).mouseup(function (e) {
                if (\$(e.target).closest(\"#SearchBar-menu1 .input-group\").length === 0) {
                    \$('.new-srch').removeClass('active');
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
", "homeLayout.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/homeLayout.html.twig");
    }
}
