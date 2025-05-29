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

/* registration/register.html.twig */
class __TwigTemplate_981b89e1917c3177e093b9a1c876b11a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
    <meta name=\"title\" content=\"";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\"/>
    <link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register")), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register")), "html", null, true);
        yield "\">

    ";
        // line 11
        yield "    <meta property=\"og:title\" content=\"";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta property=\"og:description\"
          content=\"";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]);
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register")), "html", null, true);
        yield "\">
    ";
        // line 18
        yield "
    ";
        // line 20
        yield "    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta name=\"twitter:description\"
          content=\"";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta name=\"twitter:image\" content=\"";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]);
        yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "register"]);
        yield "\">
    ";
        // line 28
        yield "
    ";
        // line 30
        yield "    <script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\",
\t\t\"description\": \"";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\",
\t\t\"publisher\": {
\t\t\t\"@type\": \"RegisterPage\",
\t\t\t\"name\": \"Trust&Market\"
   \t\t }
\t}

    </script>
    ";
        // line 44
        yield "
    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust & Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 51
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "register"]);
        yield "\">
    <style>
        body {
        ";
        // line 56
        if ((Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]) != "
")) {
            yield " background: url(";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]);
            yield ") no-repeat center center fixed;
        ";
        } else {
            // line 57
            yield " background: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/john-raptis.png")), "html", null, true);
            yield ") no-repeat center center fixed;
        ";
        }
        // line 58
        yield " -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), 'form_start', ["attr" => ["class" => "form-signin"]]);
        yield "

    <div class=\"text-center mb-4\">
        <a href='/'>
            <img class=\"mb-4\" src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg")), "html", null, true);
        yield "\" alt=\"logo\" width=\"72\" height=\"72\">
        </a>
        <h1 class=\"h3 mb-3 font-weight-normal white-t\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.titre"), "html", null, true);
        yield "</h1>
    </div>

    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "flashbag", [], "any", false, false, false, 86), "get", ["register_recaptcha_error"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 87
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "    <div class=\"form-label-group\">
        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "first_name", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control input-custom", "type" => "text", "id" => "inputPrenom", "name" => "first_name", "required" => "required", "autofocus" => "autofocus"]]);
        yield "
        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "first_name", [], "any", false, false, false, 91), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.nom")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "first_name", [], "any", false, false, false, 92), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "last_name", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control input-custom", "type" => "text", "id" => "inputNom", "name" => "last_name", "required" => "required"]]);
        yield "
        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "last_name", [], "any", false, false, false, 97), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.prenom")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "last_name", [], "any", false, false, false, 98), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "email_canonical", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control input-custom", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email"), "value" => ""]]);
        yield "
        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "email_canonical", [], "any", false, false, false, 103), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email")) ? [] : ["label" => $_label_]));
        yield "

        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "email_canonical", [], "any", false, false, false, 105), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        <select id=\"inputUtilisateur\" name=\"role_user\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.categorie-utilisateur"), "html", null, true);
        yield "</option>
            <option value=\"ROLE_ABONNE\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.abonne"), "html", null, true);
        yield "</option>
            <option value=\"ROLE_AUTO_ENTREPRENEUR\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.auto-entrepreneur"), "html", null, true);
        yield "</option>
            <option value=\"ROLE_SOCIETE\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.societe"), "html", null, true);
        yield "</option>
        </select>
    </div>

    <div class=\"form-label-group\">
        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "dateNaissance", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control input-custom", "style" => "background-color: transparent;", "type" => "text", "id" => "dateNaissance", "name" => "dateNaissance", "required" => "required", "autocomplete" => "off", "readonly" => "readonly"]]);
        yield "
        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 119, $this->source); })()), "dateNaissance", [], "any", false, false, false, 119), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        <select id=\"nationalite\" name=\"nationalite\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>Nationalite...</option>
            ";
        // line 125
        yield from $this->loadTemplate("Tools/CountryRegister.html.twig", "registration/register.html.twig", 125)->unwrap()->yield($context);
        // line 126
        yield "        </select>
    </div>

    <div class=\"form-label-group\">
        <select id=\"residence\" name=\"residence\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>Pays de residence...</option>
            ";
        // line 132
        yield from $this->loadTemplate("Tools/CountryRegister.html.twig", "registration/register.html.twig", 132)->unwrap()->yield($context);
        yield "</select>
    </div>

    <div class=\"form-label-group\">
        ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "plainPassword", [], "any", false, false, false, 136), "first", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control input-custom", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.passe"), "type" => "password", "id" => "inputPassword", "value" => ""]]);
        yield "
        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), "plainPassword", [], "any", false, false, false, 137), "first", [], "any", false, false, false, 137), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.passe")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 138, $this->source); })()), "plainPassword", [], "any", false, false, false, 138), "first", [], "any", false, false, false, 138), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 142, $this->source); })()), "plainPassword", [], "any", false, false, false, 142), "second", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "form-control input-custom", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.confirmation"), "type" => "password", "id" => "inputPassword2", "value" => ""]]);
        yield "
        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 143, $this->source); })()), "plainPassword", [], "any", false, false, false, 143), "second", [], "any", false, false, false, 143), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.confirmation")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 144, $this->source); })()), "plainPassword", [], "any", false, false, false, 144), "second", [], "any", false, false, false, 144), 'errors');
        yield "
    </div>

    <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\" data-action=\"TRUST_REGISTER\"></div>
    <br/>

    <div class=\"checkbox mb-3 cgu\">
        <label>
            <input type=\"checkbox\" required name=\"agreeTerms\"
                   id=\"agreeTerms\">&nbsp;";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.condition-utilisation"), "html", null, true);
        yield "
            <a class=\"special-below-link\" style=\"text-decoration: underline\" target=\"_blank\"
               href=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => "nos-conditions", "id" => "conditions-generales-dutilisation"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.accepter-condition"), "html", null, true);
        yield "</a>
        </label>
        <label>
            <input type=\"checkbox\" name=\"_email_newsletter\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.newsletter"), "html", null, true);
        yield "
    </div>

    <div class=\"text-center\">
        <button class=\"btn btn-lg btn-primary btn-md registration-button\" type=\"submit\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.titre"), "html", null, true);
        yield "
        </button>
    </div>

    <p class=\"mt-3 mb-3 text-muted text-center\">
        <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"special-below-link\">&larr;&nbsp;<span
                    class=\"special-link\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accueil"), "html", null, true);
        yield "</span>
        </a>&nbsp;|&nbsp;<a class=\"special-below-link\" href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
            <span class=\"special-link\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.connecte"), "html", null, true);
        yield "</span>&nbsp;&rarr;</a>
        <br><a href=\"/fr/register\" class=\"special-below-link\"><img src=\"/assets/img/fr.svg\" alt=\"Langue francaise\" height='12'>Fr</a>
        <!-- |<a href=\"/fr/register\" class=\"special-below-link\"><img src=\"/assets/img/gb.svg\" alt=\"Langue Anglaise\" height='12'>En</a> -->
    </p>

    ";
        // line 175
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 175, $this->source); })()), 'form_end');
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- jQuery plugin for spartan image picker -->

    <script>
        \$(document).ready(function () {
            \$(\"#registration_form_dateNaissance\").datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome',
                editable: true,
                format: 'mm/dd/yyyy'
            });
            \$(\"div[role='wrapper']\").append(\"<label for='registration_form_dateNaissance'>Date de naissance</label>\");

            function validateDateNaisance(val) {
                let re = /^\\d{2}\\/\\d{2}\\/\\d{4}\$/;
                return re.test(val);
            }

        });

        ";
        // line 205
        yield "
        window.addEventListener('load', () => {
            const \$recaptcha = document.querySelector('#g-recaptcha-response');
            if (\$recaptcha) {
                \$recaptcha.setAttribute('required', 'required');
            }
        })
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
        return "registration/register.html.twig";
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
        return array (  523 => 205,  497 => 179,  487 => 178,  476 => 175,  468 => 170,  464 => 169,  460 => 168,  456 => 167,  448 => 162,  441 => 158,  433 => 155,  428 => 153,  416 => 144,  412 => 143,  408 => 142,  401 => 138,  397 => 137,  393 => 136,  386 => 132,  378 => 126,  376 => 125,  367 => 119,  363 => 118,  355 => 113,  351 => 112,  347 => 111,  343 => 110,  335 => 105,  330 => 103,  326 => 102,  319 => 98,  315 => 97,  311 => 96,  304 => 92,  300 => 91,  296 => 90,  293 => 89,  284 => 87,  280 => 86,  274 => 83,  269 => 81,  261 => 77,  251 => 76,  227 => 58,  221 => 57,  213 => 56,  207 => 53,  203 => 52,  198 => 51,  188 => 50,  170 => 48,  160 => 44,  149 => 35,  145 => 34,  139 => 30,  136 => 28,  132 => 26,  128 => 25,  124 => 24,  119 => 22,  115 => 20,  112 => 18,  108 => 16,  103 => 14,  99 => 13,  93 => 11,  88 => 8,  84 => 7,  80 => 6,  76 => 5,  71 => 4,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
    {{ parent() }}
    <meta name=\"title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'creer-un-compte'}) }}\">
    <meta name=\"description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'creer-un-compte'}) }}\"/>
    <link rel=\"canonical\" href=\"{{ absolute_url(path('app_register')) }}\">
    <link rel=\"shortlink\" href=\"{{ absolute_url(path('app_register')) }}\">

    {# OG CONTENT #}
    <meta property=\"og:title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'creer-un-compte'}) }}\">
    <meta property=\"og:description\"
          content=\"{{ include('Seo/Meta/description.html.twig', {code: 'creer-un-compte'}) }}\">
    <meta property=\"og:image\" content=\"{{ include('Seo/Meta/security_image.html.twig', {code: 'register_image'}) }}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ absolute_url(path('app_register')) }}\">
    {# END OG CONTENT #}

    {# Twitter CARD #}
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'creer-un-compte'}) }}\">
    <meta name=\"twitter:description\"
          content=\"{{ include('Seo/Meta/description.html.twig', {code: 'creer-un-compte'}) }}\">
    <meta name=\"twitter:image\" content=\"{{ include('Seo/Meta/security_image.html.twig', {code: 'register_image'}) }}\">
    <meta name=\"twitter:image:alt\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'register'}) }}\">
    {# END Twitter Card #}

    {# JSON LD #}
    <script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"{{ include('Seo/Meta/title.html.twig', {code: 'creer-un-compte'}) }}\",
\t\t\"description\": \"{{ include('Seo/Meta/description.html.twig', {code: 'creer-un-compte'}) }}\",
\t\t\"publisher\": {
\t\t\t\"@type\": \"RegisterPage\",
\t\t\t\"name\": \"Trust&Market\"
   \t\t }
\t}

    </script>
    {# END JSON LD #}

    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
{% endblock %}

{% block title %}Trust & Market | {{ include('Seo/Meta/title.html.twig', {code: 'creer-un-compte'}) }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">
    <meta name=\"description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'register'}) }}\">
    <style>
        body {
        {% if include('Seo/Meta/security_image.html.twig', {code: 'register_image'}) != \"\\n\" %} background: url({{ include('Seo/Meta/security_image.html.twig', {code: 'register_image'}) }}) no-repeat center center fixed;
        {% else %} background: url({{ absolute_url(asset('assets/img/john-raptis.png'))}}) no-repeat center center fixed;
        {% endif %} -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
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
    </style>
{% endblock %}

{% block body %}
    {{ form_start(registrationForm, { 'attr': {'class': 'form-signin'}}) }}

    <div class=\"text-center mb-4\">
        <a href='/'>
            <img class=\"mb-4\" src=\"{{ prerender(asset('assets/img/logo_tm.svg')) }}\" alt=\"logo\" width=\"72\" height=\"72\">
        </a>
        <h1 class=\"h3 mb-3 font-weight-normal white-t\">{{ \"inscription.titre\"|trans }}</h1>
    </div>

    {% for message in app.session.flashbag.get('register_recaptcha_error') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
    {% endfor %}
    <div class=\"form-label-group\">
        {{ form_widget(registrationForm.first_name , {'attr':{'class':'form-control input-custom','type':'text', 'id':'inputPrenom','name':'first_name','required':'required', 'autofocus':'autofocus'}}) }}
        {{ form_label(registrationForm.first_name, 'inscription.nom'|trans) }}
        {{ form_errors(registrationForm.first_name) }}
    </div>

    <div class=\"form-label-group\">
        {{ form_widget(registrationForm.last_name , {'attr':{'class':'form-control input-custom','type':'text', 'id':'inputNom','name':'last_name','required':'required'}}) }}
        {{ form_label(registrationForm.last_name, 'inscription.prenom'|trans) }}
        {{ form_errors(registrationForm.last_name) }}
    </div>

    <div class=\"form-label-group\">
        {{ form_widget(registrationForm.email_canonical , {'attr':{'class':'form-control input-custom', 'placeholder':'general.email'|trans, 'value':''}}) }}
        {{ form_label(registrationForm.email_canonical, 'general.email'|trans) }}

        {{ form_errors(registrationForm.email_canonical) }}
    </div>

    <div class=\"form-label-group\">
        <select id=\"inputUtilisateur\" name=\"role_user\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>{{ 'inscription.categorie-utilisateur'|trans }}</option>
            <option value=\"ROLE_ABONNE\">{{ 'inscription.abonne'|trans }}</option>
            <option value=\"ROLE_AUTO_ENTREPRENEUR\">{{ 'inscription.auto-entrepreneur'|trans }}</option>
            <option value=\"ROLE_SOCIETE\">{{ 'inscription.societe'|trans }}</option>
        </select>
    </div>

    <div class=\"form-label-group\">
        {{ form_widget(registrationForm.dateNaissance , {'attr':{'class':'form-control input-custom','style':'background-color: transparent;','type':'text', 'id':'dateNaissance','name':'dateNaissance','required':'required', 'autocomplete':'off','readonly':'readonly'}}) }}
        {{ form_errors(registrationForm.dateNaissance) }}
    </div>

    <div class=\"form-label-group\">
        <select id=\"nationalite\" name=\"nationalite\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>Nationalite...</option>
            {% include 'Tools/CountryRegister.html.twig' %}
        </select>
    </div>

    <div class=\"form-label-group\">
        <select id=\"residence\" name=\"residence\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>Pays de residence...</option>
            {% include 'Tools/CountryRegister.html.twig' %}</select>
    </div>

    <div class=\"form-label-group\">
        {{ form_widget(registrationForm.plainPassword.first , {'attr':{'class':'form-control input-custom', 'placeholder':'inscription.passe'|trans,'type':'password','id':'inputPassword','value':''}}) }}
        {{ form_label(registrationForm.plainPassword.first, 'inscription.passe'|trans) }}
        {{ form_errors(registrationForm.plainPassword.first) }}
    </div>

    <div class=\"form-label-group\">
        {{ form_widget(registrationForm.plainPassword.second , {'attr':{'class':'form-control input-custom', 'placeholder':'inscription.confirmation'|trans,'type':'password','id':'inputPassword2','value':''}}) }}
        {{ form_label(registrationForm.plainPassword.second, 'inscription.confirmation'|trans) }}
        {{ form_errors(registrationForm.plainPassword.second) }}
    </div>

    <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\" data-action=\"TRUST_REGISTER\"></div>
    <br/>

    <div class=\"checkbox mb-3 cgu\">
        <label>
            <input type=\"checkbox\" required name=\"agreeTerms\"
                   id=\"agreeTerms\">&nbsp;{{ 'inscription.condition-utilisation'|trans }}
            <a class=\"special-below-link\" style=\"text-decoration: underline\" target=\"_blank\"
               href=\"{{path('page_navigation',{idPage:'nos-conditions',id:'conditions-generales-dutilisation'})}}\">{{ 'inscription.accepter-condition'|trans }}</a>
        </label>
        <label>
            <input type=\"checkbox\" name=\"_email_newsletter\">{{ 'inscription.newsletter'|trans }}
    </div>

    <div class=\"text-center\">
        <button class=\"btn btn-lg btn-primary btn-md registration-button\" type=\"submit\">{{ 'inscription.titre'|trans }}
        </button>
    </div>

    <p class=\"mt-3 mb-3 text-muted text-center\">
        <a href=\"{{ path('home') }}\" class=\"special-below-link\">&larr;&nbsp;<span
                    class=\"special-link\">{{ 'general.accueil'|trans }}</span>
        </a>&nbsp;|&nbsp;<a class=\"special-below-link\" href=\"{{ path('app_login') }}\">
            <span class=\"special-link\">{{ 'inscription.connecte'|trans }}</span>&nbsp;&rarr;</a>
        <br><a href=\"/fr/register\" class=\"special-below-link\"><img src=\"/assets/img/fr.svg\" alt=\"Langue francaise\" height='12'>Fr</a>
        <!-- |<a href=\"/fr/register\" class=\"special-below-link\"><img src=\"/assets/img/gb.svg\" alt=\"Langue Anglaise\" height='12'>En</a> -->
    </p>

    {{ form_end(registrationForm) }}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <!-- jQuery plugin for spartan image picker -->

    <script>
        \$(document).ready(function () {
            \$(\"#registration_form_dateNaissance\").datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome',
                editable: true,
                format: 'mm/dd/yyyy'
            });
            \$(\"div[role='wrapper']\").append(\"<label for='registration_form_dateNaissance'>Date de naissance</label>\");

            function validateDateNaisance(val) {
                let re = /^\\d{2}\\/\\d{2}\\/\\d{4}\$/;
                return re.test(val);
            }

        });

        {# function validateEmail(email) {
            var re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(email);
        } #}

        window.addEventListener('load', () => {
            const \$recaptcha = document.querySelector('#g-recaptcha-response');
            if (\$recaptcha) {
                \$recaptcha.setAttribute('required', 'required');
            }
        })
    </script>

{% endblock %}
", "registration/register.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/registration/register.html.twig");
    }
}
