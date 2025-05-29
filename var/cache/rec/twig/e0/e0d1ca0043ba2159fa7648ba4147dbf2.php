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

/* generalLayout.html.twig */
class __TwigTemplate_a96b8a4163548bf49dea856681e3faf6 extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generalLayout.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "getLocale", [], "method", false, false, false, 3), "html", null, true);
        yield "\">
\t<head>
\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t";
        // line 6
        yield from $this->loadTemplate("tag-google.html.twig", "generalLayout.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "\t\t";
        yield from $this->loadTemplate("hotjar.html.twig", "generalLayout.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<!-- No Index for dev -->
\t\t";
        // line 12
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "generalLayout.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "\t\t<!-- No Index for dev -->
\t\t";
        // line 14
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 15
        yield "\t\t<title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
\t\t";
        // line 16
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 44
        yield "\t";
        yield from $this->loadTemplate("pixelFacebook.html.twig", "generalLayout.html.twig", 44)->unwrap()->yield($context);
        // line 45
        yield "\t";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "generalLayout.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "\t";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "generalLayout.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "\t</head>
\t<body class=\"homeLayout\">
        ";
        // line 49
        yield from $this->loadTemplate("facebook-support.html.twig", "generalLayout.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 56
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 59
        yield "
";
        // line 60
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 63
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 339
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
        yield "\t\t\t<!-- Font Awesome -->
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
\t\t\t<link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
\t\t\t<link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t\t";
        // line 30
        yield from $this->loadTemplate("cssTemplates/mediaHomeQuery.css.twig", "generalLayout.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield "\t\t\t";
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "generalLayout.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "
            <style>
                @media only screen and (max-width: 768px) {
                    .homeLayout main.py-5 {
                        padding-top: 3rem !important;
                        position: relative;
                        top: 0rem;
                    }   
                }
            </style>

\t\t";
        
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
        yield "\t\t\t<header style=\"height: auto;\">
\t\t\t\t";
        // line 52
        yield from $this->loadTemplate("header-new-design.html.twig", "generalLayout.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "</header>
<!--Main Navigation-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        yield "\t";
        yield from $this->loadTemplate("footer.html.twig", "generalLayout.html.twig", 61)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        yield "<!-- JQuery -->
";
        // line 66
        yield "<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap tooltips -->
";
        // line 69
        yield "<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
";
        // line 72
        yield "<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
";
        // line 75
        yield "<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
<!-- Lazy load -->
<!-- cdnjs for lazy load -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

<script src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
";
        // line 84
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lazysizes.min.js"), "html", null, true);
        yield "\" async></script>
<!-- Images End -->
<script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
";
        // line 87
        yield from $this->loadTemplate("partials/js/top_button.html.twig", "generalLayout.html.twig", 87)->unwrap()->yield($context);
        // line 88
        yield "<!-- Latest compiled and minified JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
\t";
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "environment", [], "any", false, false, false, 90) == "prod")) {
            // line 91
            yield "\t\t";
            yield from $this->loadTemplate("partials/js/cookie.js.twig", "generalLayout.html.twig", 91)->unwrap()->yield($context);
            // line 92
            yield "\t";
        }
        // line 93
        yield "<script>
\t\$(document).on(\"click\", \".linkContent\", function (e) {
\t\t\$('.floatingMenu').fadeToggle();
\t});

\t\$(\".closeBtnModal\").click(function (e) {
\t\te.preventDefault();
\t\t\$(\"#newsletterModal\").modal('toggle');
\t});

\t\$(document).click(function (event) {
        var target = \$(event.target);
        if (!target.closest('.linkContent').length && \$('.linkContent').is(':visible')) {
            \$('.floatingMenu').fadeOut();
        }
    });
\t\$('.searchSelectPicker').selectpicker();

\t\$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
\t\tevent.preventDefault();
\t\tvar oldTexte = \$(this).text()
\t\t\$(this).text(\"En cours...\")
\t\tvar whichForm = \$(this).attr('attr-form')
\t\tvar typePrestation = \$('.'+whichForm).find('select[name=\"type_prestation\"]').val()
\t\tconsole.log(typePrestation);
\t\tif (typePrestation == \"\") {
\t\t\t\$(this).text(oldTexte)
\t\t\ttoastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
\t\t}else{
\t\t\t\$(this).text(oldTexte)
\t\t\t\$('.'+whichForm).submit();
\t\t}
    });

\tif(\$(window).width() <= 922){
\t\t\$('.block_conjoint').insertAfter('.search-title-mob')
\t\t\$('.searchDiv').insertAfter('.block_conjoint')
\t\t\$('.link-card-actu').insertAfter('.searchDiv')
\t}

\twindow.onresize = function() {
\t\tif (window.innerWidth <= 922) {  
\t\t\t\$('.block_conjoint').insertAfter('.search-title-mob')
\t\t\t\$('.searchDiv').insertAfter('.block_conjoint')
\t\t\t\$('.link-card-actu').insertAfter('.searchDiv')
\t\t}else{
\t\t\t\$('.block_conjoint').insertAfter('.titreFromTitreFilter')
\t\t\t\$('.searchDiv').insertAfter('.logoButtonHeader')
\t\t\t\$('.link-card-actu').insertAfter('.titre_filter')
\t\t}
\t}
\t

\tgrecaptcha.ready(function () {
\t\tgrecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2',{action:'homepage'}).then(function(token){
\t\t\tdocument.getElementById(\"recaptchaResponse\").value = token;
\t\t});
\t});

\t// Script to create user for newsletter

\$('#newsletterForm').on('submit', function (e) {
\te.preventDefault();
\tconsole.log('newsletter');
\tconsole.log(\$('#recaptchaResponse').val());
if(\$('#recaptchaResponse').val()){

\ttoastr.info(\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.attente"), "html", null, true);
        yield "\");
\tvar \$form = \$(this);
\t\$.ajax({
\turl: \$form.attr('action'),
\ttype: \$form.attr('method'),
\tdata: \$form.serialize(),
\tsuccess: function (reponse) {
\tconsole.log(reponse);
\tif (reponse == 1) {
\t\ttoastr.clear();
\t\t\$('#body').hide();
\t\t\$('#succes').show();
\t\t\$('html,body').scrollTop(0);
\t\t\$('#send').removeClass('running');
\t\ttoastr.success('";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.succes"), "html", null, true);
        yield "');
\t\t\$('#newsletterModal').modal('toggle');
\t} else if (reponse == 2) {
\t\ttoastr.clear();
\t\t\$('#send').removeClass('running');
\t\ttoastr.warning('";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.email_occupe"), "html", null, true);
        yield "');
\t\t}
\t\telse if (reponse == 0) {
\t\ttoastr.clear();
\t\t\$('#send').removeClass('running');
\t\ttoastr.warning('";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.robot"), "html", null, true);
        yield "');
\t\t}
\t},
\terror: function (reponse) {
\t\ttoastr.clear();
\t\t\$('#send').removeClass('running');
\t\ttoastr.error('";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.echec"), "html", null, true);
        yield "');
\t\t}
\t});
\treturn false;
\t}else{
\t\ttoastr.warning('robot');
\t}
});
</script>

      
<script type=\"text/javascript\">
\t\$(document).ready(function () {
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});

/**
\t* On click event on searchbar to add class active to advance search and click outside the box to close advance section
\t*/
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
\t\t* Manipulate data from data-id and data-name attributes in \"Types de prestation\"
\t\t*/
\$('.prestation-i').on('click', function (e) {
e.preventDefault();
var pres_id = \$(this).attr('data-id');
var pres_name = \$(this).attr('data-name');

\$('.type-pres-span').html(pres_name);
\$('.input-type-prestation').val(pres_id);

var url1 ='";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "get", ["_locale"], "method", false, false, false, 235), "html", null, true);
        yield "/home/sous_categorie1?id=' + pres_id;
toastr.info(\"";
        // line 236
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
\t\$('.lazy').lazy();
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
var url1 ='";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "get", ["_locale"], "method", false, false, false, 293), "html", null, true);
        yield "/home/sous_categorie?id=' + \$(this).val();
toastr.info(\"";
        // line 294
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
        // line 336
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "generalLayout.html.twig", 336)->unwrap()->yield($context);
        // line 337
        yield from $this->loadTemplate("ws/script.html.twig", "generalLayout.html.twig", 337)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "generalLayout.html.twig";
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
        return array (  619 => 337,  617 => 336,  572 => 294,  568 => 293,  508 => 236,  504 => 235,  456 => 190,  447 => 184,  439 => 179,  431 => 174,  414 => 160,  345 => 93,  342 => 92,  339 => 91,  337 => 90,  333 => 88,  331 => 87,  324 => 84,  320 => 82,  316 => 81,  308 => 75,  304 => 72,  300 => 69,  296 => 66,  293 => 64,  283 => 63,  274 => 61,  264 => 60,  255 => 57,  245 => 56,  235 => 53,  233 => 52,  230 => 51,  220 => 50,  201 => 32,  198 => 31,  196 => 30,  192 => 29,  188 => 28,  183 => 26,  179 => 25,  174 => 23,  166 => 17,  156 => 16,  139 => 15,  123 => 14,  113 => 339,  111 => 63,  109 => 60,  106 => 59,  104 => 56,  101 => 50,  99 => 49,  95 => 47,  92 => 46,  89 => 45,  86 => 44,  84 => 16,  79 => 15,  77 => 14,  74 => 13,  72 => 12,  66 => 8,  63 => 7,  61 => 6,  55 => 3,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/generalLayout.html.twig #}
<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">
\t<head>
\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t{% include 'tag-google.html.twig' %}
\t\t{% include 'hotjar.html.twig' %}
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<!-- No Index for dev -->
\t\t{% include(\"Seo/Meta/noindex.html.twig\") %}
\t\t<!-- No Index for dev -->
\t\t{% block head %}{% endblock %}
\t\t<title>{% block title %}Trust &amp; Market{% endblock %}</title>
\t\t{% block style %}
\t\t\t<!-- Font Awesome -->
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
\t\t\t<link href=\"{{ asset('assets/css/result.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/css/custome.css') }}\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
\t\t\t<link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ absolute_url(asset('assets/css/footer.css')) }}\" rel=\"stylesheet\">
\t\t\t{% include 'cssTemplates/mediaHomeQuery.css.twig' %}
\t\t\t{% include 'cssTemplates/chat.css.twig' %}

            <style>
                @media only screen and (max-width: 768px) {
                    .homeLayout main.py-5 {
                        padding-top: 3rem !important;
                        position: relative;
                        top: 0rem;
                    }   
                }
            </style>

\t\t{% endblock %}
\t{% include \"pixelFacebook.html.twig\" %}
\t{% include 'scriptautomatisationBrevo.html.twig' %}
\t{% include 'scriptchatBrevo.html.twig' %}
\t</head>
\t<body class=\"homeLayout\">
        {% include 'facebook-support.html.twig' %}
\t\t{% block header %}
\t\t\t<header style=\"height: auto;\">
\t\t\t\t{% include(\"header-new-design.html.twig\") %}
</header>
<!--Main Navigation-->
{% endblock %}
{% block body %}

{% endblock %}

{% block footer %}
\t{% include(\"footer.html.twig\") %}
{% endblock %}
{% block javascripts %}
<!-- JQuery -->
{# <script type=\"text/javascript\" src=\"{{ prerender(asset('assets/js/jquery-3.4.1.min.js')) }}\"></script> #}
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap tooltips -->
{# <script type=\"text/javascript\" src=\"{{ asset('assets/js/popper.min.js') }}\"></script> #}
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
{# <script type=\"text/javascript\" src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script> #}
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
{# <script type=\"text/javascript\" src=\"{{ asset('assets/js/mdb.min.js') }}\"></script> #}
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
<!-- Lazy load -->
<!-- cdnjs for lazy load -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/fullclip.min.js') }}\"></script>
{# <script src=\"{{ asset('assets/js/gijgo-js/gijgo.min.2.js') }}\"></script> #}
<script src=\"{{ asset('assets/js/lazysizes.min.js') }}\" async></script>
<!-- Images End -->
<script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
{% include \"partials/js/top_button.html.twig\" %}
<!-- Latest compiled and minified JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
\t{% if app.environment == 'prod' %}
\t\t{% include 'partials/js/cookie.js.twig' %}
\t{% endif %}
<script>
\t\$(document).on(\"click\", \".linkContent\", function (e) {
\t\t\$('.floatingMenu').fadeToggle();
\t});

\t\$(\".closeBtnModal\").click(function (e) {
\t\te.preventDefault();
\t\t\$(\"#newsletterModal\").modal('toggle');
\t});

\t\$(document).click(function (event) {
        var target = \$(event.target);
        if (!target.closest('.linkContent').length && \$('.linkContent').is(':visible')) {
            \$('.floatingMenu').fadeOut();
        }
    });
\t\$('.searchSelectPicker').selectpicker();

\t\$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
\t\tevent.preventDefault();
\t\tvar oldTexte = \$(this).text()
\t\t\$(this).text(\"En cours...\")
\t\tvar whichForm = \$(this).attr('attr-form')
\t\tvar typePrestation = \$('.'+whichForm).find('select[name=\"type_prestation\"]').val()
\t\tconsole.log(typePrestation);
\t\tif (typePrestation == \"\") {
\t\t\t\$(this).text(oldTexte)
\t\t\ttoastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
\t\t}else{
\t\t\t\$(this).text(oldTexte)
\t\t\t\$('.'+whichForm).submit();
\t\t}
    });

\tif(\$(window).width() <= 922){
\t\t\$('.block_conjoint').insertAfter('.search-title-mob')
\t\t\$('.searchDiv').insertAfter('.block_conjoint')
\t\t\$('.link-card-actu').insertAfter('.searchDiv')
\t}

\twindow.onresize = function() {
\t\tif (window.innerWidth <= 922) {  
\t\t\t\$('.block_conjoint').insertAfter('.search-title-mob')
\t\t\t\$('.searchDiv').insertAfter('.block_conjoint')
\t\t\t\$('.link-card-actu').insertAfter('.searchDiv')
\t\t}else{
\t\t\t\$('.block_conjoint').insertAfter('.titreFromTitreFilter')
\t\t\t\$('.searchDiv').insertAfter('.logoButtonHeader')
\t\t\t\$('.link-card-actu').insertAfter('.titre_filter')
\t\t}
\t}
\t

\tgrecaptcha.ready(function () {
\t\tgrecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2',{action:'homepage'}).then(function(token){
\t\t\tdocument.getElementById(\"recaptchaResponse\").value = token;
\t\t});
\t});

\t// Script to create user for newsletter

\$('#newsletterForm').on('submit', function (e) {
\te.preventDefault();
\tconsole.log('newsletter');
\tconsole.log(\$('#recaptchaResponse').val());
if(\$('#recaptchaResponse').val()){

\ttoastr.info(\"{{'newsletter.attente'|trans }}\");
\tvar \$form = \$(this);
\t\$.ajax({
\turl: \$form.attr('action'),
\ttype: \$form.attr('method'),
\tdata: \$form.serialize(),
\tsuccess: function (reponse) {
\tconsole.log(reponse);
\tif (reponse == 1) {
\t\ttoastr.clear();
\t\t\$('#body').hide();
\t\t\$('#succes').show();
\t\t\$('html,body').scrollTop(0);
\t\t\$('#send').removeClass('running');
\t\ttoastr.success('{{'newsletter.succes'|trans}}');
\t\t\$('#newsletterModal').modal('toggle');
\t} else if (reponse == 2) {
\t\ttoastr.clear();
\t\t\$('#send').removeClass('running');
\t\ttoastr.warning('{{'newsletter.email_occupe'|trans}}');
\t\t}
\t\telse if (reponse == 0) {
\t\ttoastr.clear();
\t\t\$('#send').removeClass('running');
\t\ttoastr.warning('{{'newsletter.robot'|trans}}');
\t\t}
\t},
\terror: function (reponse) {
\t\ttoastr.clear();
\t\t\$('#send').removeClass('running');
\t\ttoastr.error('{{'newsletter.echec'|trans}}');
\t\t}
\t});
\treturn false;
\t}else{
\t\ttoastr.warning('robot');
\t}
});
</script>

      
<script type=\"text/javascript\">
\t\$(document).ready(function () {
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});

/**
\t* On click event on searchbar to add class active to advance search and click outside the box to close advance section
\t*/
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
\t\t* Manipulate data from data-id and data-name attributes in \"Types de prestation\"
\t\t*/
\$('.prestation-i').on('click', function (e) {
e.preventDefault();
var pres_id = \$(this).attr('data-id');
var pres_name = \$(this).attr('data-name');

\$('.type-pres-span').html(pres_name);
\$('.input-type-prestation').val(pres_id);

var url1 ='{{ app.request.get(\"_locale\") }}/home/sous_categorie1?id=' + pres_id;
toastr.info(\"{{'home.formulaire-champs.recherche-sous-categories'|trans}}\");
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
\t\$('.lazy').lazy();
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
var url1 ='{{ app.request.get(\"_locale\") }}/home/sous_categorie?id=' + \$(this).val();
toastr.info(\"{{'home.formulaire-champs.recherche-sous-categories'|trans}}\");

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
", "generalLayout.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/generalLayout.html.twig");
    }
}
