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

/* profileTemplate.html.twig */
class __TwigTemplate_f11dc1a96390fa89f60b291b0da26876 extends Template
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
        return "generalLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profileTemplate.html.twig"));

        $this->parent = $this->loadTemplate("generalLayout.html.twig", "profileTemplate.html.twig", 1);
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
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    ";
        // line 9
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "profileTemplate.html.twig", 9)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
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

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 13
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css")), "html", null, true);
        yield "\">
    ";
        // line 17
        yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    ";
        // line 27
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "profileTemplate.html.twig", 27)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        yield "    <header>
        ";
        // line 33
        yield from $this->loadTemplate("header-new-design.html.twig", "profileTemplate.html.twig", 33)->unwrap()->yield($context);
        // line 34
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profileTemplate.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        yield "        ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <!-- cdnjs for lazy load -->
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"
                integrity=\"sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==\"
                crossorigin=\"anonymous\"></script>
        ";
        // line 59
        yield "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js\"
                integrity=\"sha512-mh+AjlD3nxImTUGisMpHXW03gE6F4WdQyvuFRkjecwuWLwD2yCijw4tKA3NsEFpA1C3neiKhGXPSIGSfCYPMlQ==\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
        <script>
            \$(\".closeBtnModal\").click(function (e) {
                e.preventDefault();
                \$(\"#newsletterModal\").modal('toggle');
            });
            ";
        // line 69
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "profileTemplate.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "
            \$('.searchSelectPicker').selectpicker();
            \$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
                event.preventDefault();
                let oldTexte = \$(this).text()
                \$(this).text(\"En cours...\")
                let whichForm = \$(this).attr('attr-form')
                let typePrestation = \$('.' + whichForm).find('select[name=\"type_prestation\"]').val()
                console.log(typePrestation);
                if (typePrestation == \"\") {
                    \$(this).text(oldTexte)
                    toastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
                } else {
                    \$(this).text(oldTexte)
                    \$('.' + whichForm).submit();
                }
            });

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

            });
        </script>
        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                    document.getElementById(\"recaptchaResponse\").value = token;
                });
            });
        </script>
        ";
        // line 134
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "profileTemplate.html.twig", 134)->unwrap()->yield($context);
        // line 135
        yield "        ";
        yield from $this->loadTemplate("ws/script.html.twig", "profileTemplate.html.twig", 135)->unwrap()->yield($context);
        // line 136
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profileTemplate.html.twig";
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
        return array (  342 => 136,  339 => 135,  337 => 134,  271 => 70,  269 => 69,  257 => 59,  242 => 47,  232 => 46,  221 => 43,  211 => 42,  202 => 39,  192 => 38,  183 => 35,  180 => 34,  178 => 33,  175 => 32,  165 => 31,  157 => 27,  153 => 26,  149 => 25,  143 => 22,  138 => 20,  133 => 17,  129 => 15,  123 => 13,  113 => 12,  96 => 11,  88 => 9,  84 => 8,  79 => 6,  73 => 4,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'generalLayout.html.twig' %}

{% block head %}
    {{ parent() }}
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png')) }}\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\"/>
    {% include(\"Seo/Meta/noindex.html.twig\") %}
{% endblock %}
{% block title %}Trust &amp; Market{% endblock %}
{% block style %}
    {{ parent() }}
    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"{{ preload(asset('assets/css/gijgo-css/gijgo.min.css')) }}\">
    {# <link rel=\"stylesheet\" href=\"{{ asset('assets/css/daterangepicker.css') }}\"> #}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
    <!-- Your custom styles (optional) -->
    <link href=\"{{ asset('assets/css/custome.css') }} \" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

    <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/css/footer.css')) }}\" rel=\"stylesheet\">
    {% include 'cssTemplates/chat.css.twig' %}
{% endblock %}


{% block header %}
    <header>
        {% include(\"header-new-design.html.twig\") %}
        {% include(\"partials/otherPagesVideoModal.html.twig\") %}
    </header>
{% endblock %}

\t{% block body %}

    {% endblock %}

\t{% block footer %}
        {{ parent() }}
    {% endblock %}

\t{% block javascripts %}
        {{ parent() }}
        <!-- cdnjs for lazy load -->
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"
                integrity=\"sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==\"
                crossorigin=\"anonymous\"></script>
        {# <script type=\"text/javascript\" src=\"{{asset('assets/js/daterangepicker.js')}}\"></script> #}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js\"
                integrity=\"sha512-mh+AjlD3nxImTUGisMpHXW03gE6F4WdQyvuFRkjecwuWLwD2yCijw4tKA3NsEFpA1C3neiKhGXPSIGSfCYPMlQ==\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
        <script>
            \$(\".closeBtnModal\").click(function (e) {
                e.preventDefault();
                \$(\"#newsletterModal\").modal('toggle');
            });
            {% include(\"partials/js/videoButton.js.twig\") %}

            \$('.searchSelectPicker').selectpicker();
            \$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
                event.preventDefault();
                let oldTexte = \$(this).text()
                \$(this).text(\"En cours...\")
                let whichForm = \$(this).attr('attr-form')
                let typePrestation = \$('.' + whichForm).find('select[name=\"type_prestation\"]').val()
                console.log(typePrestation);
                if (typePrestation == \"\") {
                    \$(this).text(oldTexte)
                    toastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
                } else {
                    \$(this).text(oldTexte)
                    \$('.' + whichForm).submit();
                }
            });

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

            });
        </script>
        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                    document.getElementById(\"recaptchaResponse\").value = token;
                });
            });
        </script>
        {% include \"partials/js/searchForm.html.twig\" %}
        {% include 'ws/script.html.twig' %}
    {% endblock %}
", "profileTemplate.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profileTemplate.html.twig");
    }
}
