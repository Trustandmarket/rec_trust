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

/* profile/creerAnnonces.html.twig */
class __TwigTemplate_4c67ddef6d0ed252e25b37fcacd97b0a extends Template
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
            'annonce' => [$this, 'block_annonce'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/creerAnnonces.html.twig"));

        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/creerAnnonces.html.twig", 1);
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
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

  <link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
  sizes=\"32x32\" />
  <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
  sizes=\"192x192\" />
  <link rel=\"apple-touch-icon-precomposed\"
  href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\" />
  <meta name=\"msapplication-TileImage\"
  content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\" />
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

        yield "Trust &amp; Market | Profil Annonces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_annonce(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "annonce"));

        yield " active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 22
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
<!-- Gijgo datepicker css -->
<link rel=\"stylesheet\" href=\" ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">

<link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/img-picker/image-picker.css"), "html", null, true);
        yield "\">
<link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-annonces.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">

<link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">

<!-- file input fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
<link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/file-input-font/font/font-fileuploader.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<!-- file input styles -->
<link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">
  <script type=\"text/javascript\" src='";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
<style>
  .image_picker_image {
    width: 100px;
    height: 100px
  }

  .tox-statusbar__branding {
    display: none;
  }

  .fletter-caps {
    text-transform: lowercase;
  }

  .position-brouillon {
    position: fixed-top;
  }

  .fletter-caps::first-letter {
    text-transform: capitalize;
  }

  .btn-primary {
    background-color: #eb6918 !important;
    color: #fff;
    font-size: 0.8rem !important;
  }

  .btn-primary:not([disabled]):not(.disabled):active {
    background-color: #eb6918 !important;
  }

  /* preload*/
  .lds-ring {
    height: 10px;
    margin-top: 10px;
    z-index: 999;
  }

  .lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 10px;
    height: 10px;
    margin-right: 40px;
    margin: 6px;
    border: 6px solid #717373;
    border-radius: 50%;
    animation: lds-ring 0.4s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #717373 transparent transparent transparent;
  }

  .lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
  }

  .lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
  }

  .lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
  }

  @keyframes lds-ring {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @media (max-width: 575.98px) {
    main, .container {
      margin-top: 70px;
    }
  }

  @media (min-width: 576px) and (max-width: 767.98px) {
    main, .container {
      margin-top: 100px;
    }
  }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 135
        yield "  ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 139
        yield "  ";
        yield from $this->yieldParentBlock("navigation", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 143
        yield "<div class=\"flex-fill container\">
  <main class=\"\">
    <div class=\"container mt-2 pt-4\">
      ";
        // line 146
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/creerAnnonces.html.twig", 146)->unwrap()->yield($context);
        // line 147
        yield "      <div class=\"mt-2\">
        <!-- Modif des infos -->
        <div id=\"modifInfo\">
          <div class=\"row\">
            <div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>

            ";
        // line 158
        yield from $this->loadTemplate("annonces/sousMenuAnnonces.html.twig", "profile/creerAnnonces.html.twig", 158)->unwrap()->yield($context);
        // line 159
        yield "
            <div class=\"col-md-8 mb-2\">
              <!-- multistep form -->
              <form id=\"msform\" action=\"";
        // line 162
        if ((((array_key_exists("nom_prenom_email", $context) && array_key_exists("nom_prenom_email", $context)) && array_key_exists("client", $context)) && ((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 162, $this->source); })()) != ""))) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_ajouter_devis");
            yield "
                ";
        } elseif (((        // line 163
array_key_exists("editedData", $context) && array_key_exists("state", $context)) && ((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 163, $this->source); })()) == "edition"))) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_editer_annonce");
            yield "
                ";
        } else {
            // line 164
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        }
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <!-- progressbar -->
                <ul id=\"progressbar\">
                  <li class=\"active\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-prestations"), "html", null, true);
        yield "</li>
                  <li>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-adresse"), "html", null, true);
        yield "</li>
                  <li>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-service"), "html", null, true);
        yield "</li>
                  <li>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-photos-videos"), "html", null, true);
        yield "</li>
                  <li>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-prix"), "html", null, true);
        yield "</li>
                  <li>";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-conditions"), "html", null, true);
        yield "</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.type-de-prestations"), "html", null, true);
        yield "*
                      </h2>
                      <h3 class=\"fs-subtitle\">
                        ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix"), "html", null, true);
        yield "</h3>
                      <!-- Default unchecked -->
                      ";
        // line 184
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 185
            yield "                      ";
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 185)) == "produits")) {
                // line 186
                yield "                        <div class=\"custom-control custom-radio mb-2\">
                          <input type=\"radio\" ";
                // line 187
                if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 187, $this->source); })()), "post_type", [], "any", false, false, false, 187) != "devis")) && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 187) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 187, $this->source); })()), "categorieParent", [], "any", false, false, false, 187)))) {
                    yield "checked";
                }
                // line 188
                yield "                            myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 188)]), "html", null, true);
                yield "\"
                            class=\"custom-control-input categorie\" id=\"cat";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 189), "html", null, true);
                yield "\" name=\"categorieParent\"
                            value=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 190), "html", null, true);
                yield "\" ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "getAbonnements", [], "method", false, false, false, 190)) == 0)) {
                    yield "disabled";
                } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "getAbonnements", [], "method", false, false, false, 190)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 191
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "getAbonnements", [], "method", false, false, false, 191)), "isAbonnementActif", [], "method", false, false, false, 191)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "getAbonnements", [], "method", false, false, false, 191)), "getOffre", [], "method", false, false, false, 191), "isReferencement", [], "method", false, false, false, 191))) {
                } else {
                    yield "disabled";
                }
                yield "/>
                          <label class=\"custom-control-label\" for=\"cat";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 192), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "request", [], "any", false, false, false, 192), "locale", [], "any", false, false, false, 192) == "en") && (CoreExtension::getAttribute($this->env, $this->source,                 // line 193
$context["c"], "content", [], "any", false, false, false, 193) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 193), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 193), "html", null, true);
                }
                yield "</label>
                        </div>
                      ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 195
$context["c"], "name", [], "any", false, false, false, 195)) == "packs production")) {
                // line 196
                yield "                        <div class=\"custom-control custom-radio mb-2\">
                          <input type=\"radio\" ";
                // line 197
                if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 197, $this->source); })()), "post_type", [], "any", false, false, false, 197) != "devis")) && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 197) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 197, $this->source); })()), "categorieParent", [], "any", false, false, false, 197)))) {
                    yield "checked";
                }
                // line 198
                yield "                            myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 198)]), "html", null, true);
                yield "\"
                            class=\"custom-control-input categorie\" id=\"cat";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 199), "html", null, true);
                yield "\" name=\"categorieParent\"
                            value=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 200), "html", null, true);
                yield "\" ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "getAbonnements", [], "method", false, false, false, 200)) == 0)) {
                    yield "disabled";
                } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "getAbonnements", [], "method", false, false, false, 200)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 201
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "getAbonnements", [], "method", false, false, false, 201)), "isAbonnementActif", [], "method", false, false, false, 201)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "getAbonnements", [], "method", false, false, false, 201)), "getOffre", [], "method", false, false, false, 201), "isPacksProduction", [], "method", false, false, false, 201))) {
                } else {
                    yield "disabled";
                }
                yield "/>
                          <label class=\"custom-control-label\" for=\"cat";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 202), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "request", [], "any", false, false, false, 202), "locale", [], "any", false, false, false, 202) == "en") && (CoreExtension::getAttribute($this->env, $this->source,                 // line 203
$context["c"], "content", [], "any", false, false, false, 203) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 203), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 203), "html", null, true);
                }
                yield "</label>
                        </div>
                      ";
            } else {
                // line 206
                yield "                      <div class=\"custom-control custom-radio mb-2\">
                        <input type=\"radio\" ";
                // line 207
                if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 207, $this->source); })()), "post_type", [], "any", false, false, false, 207) != "devis")) && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 207) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 207, $this->source); })()), "categorieParent", [], "any", false, false, false, 207)))) {
                    yield "checked";
                }
                // line 208
                yield "                          myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 208)]), "html", null, true);
                yield "\"
                          class=\"custom-control-input categorie\" id=\"cat";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 209), "html", null, true);
                yield "\" name=\"categorieParent\"
                          value=\"";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 210), "html", null, true);
                yield "\"/>
                        <label class=\"custom-control-label\" for=\"cat";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 211), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "request", [], "any", false, false, false, 211), "locale", [], "any", false, false, false, 211) == "en") && (CoreExtension::getAttribute($this->env, $this->source,                 // line 212
$context["c"], "content", [], "any", false, false, false, 212) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 212), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 212), "html", null, true);
                }
                yield "</label>
                      </div>
                      ";
            }
            // line 215
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "                      ";
        // line 217
        yield "                      <div class=\"custom-control custom-radio mb-2\">
                        <input type=\"radio\" ";
        // line 218
        if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 218, $this->source); })()), "post_type", [], "any", false, false, false, 218) == "devis"))) {
            yield "checked";
        }
        // line 219
        yield " myUrl=\"\" class=\"custom-control-input categorie\" id=\"cat0\" name=\"categorieParent\" value=\"devis\"
                                ";
        // line 220
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "getAbonnements", [], "method", false, false, false, 220)) == 0)) {
            yield "disabled";
        } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "getAbonnements", [], "method", false, false, false, 220)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 221
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221), "getAbonnements", [], "method", false, false, false, 221)), "isAbonnementActif", [], "method", false, false, false, 221)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221), "getAbonnements", [], "method", false, false, false, 221)), "getOffre", [], "method", false, false, false, 221), "isCreerDevis", [], "method", false, false, false, 221))) {
        } else {
            yield "disabled";
        }
        yield "/>
                        <label class=\"custom-control-label\" for=\"cat0\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.creer-un-devis"), "html", null, true);
        yield "</label>
                        ";
        // line 224
        yield "                      </div>
                    </div>
                    ";
        // line 227
        yield "                    <div id=\"prestProposee\" class=\"col-md-6 text-left\">
                      <div id=\"sous_categorie\">
                        <div id=\"sous_categorie_sous\">
                          ";
        // line 230
        if (array_key_exists("editedData", $context)) {
            yield " ";
            // line 231
            yield "                          <h2 class=\"fs-title\">
                            ";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.type-de-prestations"), "html", null, true);
            yield "*</h2>
                          <h3 class=\"fs-subtitle\">
                            ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix"), "html", null, true);
            yield "</h3>
                          <div class=\"custom-control custom-radio mb-2\">
                            ";
            // line 237
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 237, $this->source); })()), "post_type", [], "any", false, false, false, 237) != "devis")) {
                // line 238
                yield "                            <input type=\"radio\" checked myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 238, $this->source); })()), "IdSousCategorie", [], "any", false, false, false, 238)]), "html", null, true);
                yield "\"
                              class=\"custom-control-input categorie\" id=\"cat";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 239, $this->source); })()), "IdSousCategorie", [], "any", false, false, false, 239), "html", null, true);
                yield "\"
                              name=\"categorie\" value=\"";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 240, $this->source); })()), "IdSousCategorie", [], "any", false, false, false, 240), "html", null, true);
                yield "\" required>
                            <label class=\"custom-control-label\" for=\"cat";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 241, $this->source); })()), "IdSousCategorie", [], "any", false, false, false, 241), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 241, $this->source); })()), "sousCategorie", [], "any", false, false, false, 241), "html", null, true);
                yield "</label>
                            ";
            }
            // line 243
            yield "                            ";
            // line 244
            yield "                          </div>
                          ";
        }
        // line 246
        yield "                        </div>

                        <div class=\"devis-input-data\" id=\"devis-input-data\"
                          style=\"";
        // line 249
        if (( !array_key_exists("nom_prenom_email", $context) || ((isset($context["nom_prenom_email"]) || array_key_exists("nom_prenom_email", $context) ? $context["nom_prenom_email"] : (function () { throw new RuntimeError('Variable "nom_prenom_email" does not exist.', 249, $this->source); })()) == ""))) {
            yield "display:none;";
        } else {
        }
        yield "\">
                          <h2 class=\"fs-title\">
                            ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-trouver-client"), "html", null, true);
        yield "</h2>
                          <div class=\"\" style=\"position: relative;margin-top:0.5rem;margin-bottom: 1.5rem;\">
                            <input autocomplete=\"off\" type=\"text\" id=\"nom_prenom\" name=\"nom_prenom\"
                              class=\"form-control search_devis\"
                              value=\"";
        // line 255
        if ((array_key_exists("nom_prenom_email", $context) && ((isset($context["nom_prenom_email"]) || array_key_exists("nom_prenom_email", $context) ? $context["nom_prenom_email"] : (function () { throw new RuntimeError('Variable "nom_prenom_email" does not exist.', 255, $this->source); })()) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nom_prenom_email"]) || array_key_exists("nom_prenom_email", $context) ? $context["nom_prenom_email"] : (function () { throw new RuntimeError('Variable "nom_prenom_email" does not exist.', 255, $this->source); })()), "html", null, true);
            yield " ";
        }
        yield "\"
                              placeholder=\"Chercher par nom prénom ou son email\" />
                            <div class=\"lds-ring\" style=\"display:none;height:0px;margin-top:0px;\">
                              <div></div>
                              <div></div>
                              <div></div>
                              <div></div>
                            </div>
                            <input hidden=\"hidden\" type=\"text\" value=\"";
        // line 263
        if ((array_key_exists("client", $context) && ((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 263, $this->source); })()) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 263, $this->source); })()), "html", null, true);
            yield " ";
        }
        yield "\"
                              name=\"idClient\" id=\"idClient\">
                          </div>
                          <h2 class=\"fs-title\">
                            ";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.dates-horaires-prestations"), "html", null, true);
        yield "</h2>
                          <div style=\"position: relative;margin-top:0.5rem;margin-bottom: 1.5rem;\">
                            <input required=\"required\" type=\"text\"
                              value=\"";
        // line 270
        if ((array_key_exists("dates_horaires", $context) && ((isset($context["dates_horaires"]) || array_key_exists("dates_horaires", $context) ? $context["dates_horaires"] : (function () { throw new RuntimeError('Variable "dates_horaires" does not exist.', 270, $this->source); })()) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dates_horaires"]) || array_key_exists("dates_horaires", $context) ? $context["dates_horaires"] : (function () { throw new RuntimeError('Variable "dates_horaires" does not exist.', 270, $this->source); })()), "html", null, true);
            yield " ";
        } else {
        }
        yield "\"
                              id=\"dates_horaires\" name=\"dates_horaires\" class=\"form-control\">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" ";
        // line 277
        if (array_key_exists("editedData", $context)) {
        } else {
            yield "disabled";
        }
        yield " name=\"previous\"
                    class=\"next action-button prestations\"
                    value=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset>
                  <h3 class=\"fs-subtitle text-left\">
                    ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.presence-reseau-sociaux"), "html", null, true);
        yield "</h3>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-pays"), "html", null, true);
        yield "*</h2>
                      <select class=\"browser-default custom-select\" name=\"pays\" required>
                        ";
        // line 288
        if ((array_key_exists("editedDataPays", $context) && ((isset($context["editedDataPays"]) || array_key_exists("editedDataPays", $context) ? $context["editedDataPays"] : (function () { throw new RuntimeError('Variable "editedDataPays" does not exist.', 288, $this->source); })()) != ""))) {
            // line 289
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataPays"]) || array_key_exists("editedDataPays", $context) ? $context["editedDataPays"] : (function () { throw new RuntimeError('Variable "editedDataPays" does not exist.', 289, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["editedDataPays"]) || array_key_exists("editedDataPays", $context) ? $context["editedDataPays"] : (function () { throw new RuntimeError('Variable "editedDataPays" does not exist.', 289, $this->source); })())), "html", null, true);
            yield "</option>
                        ";
        }
        // line 291
        yield "                        ";
        yield from $this->loadTemplate("country.html.twig", "profile/creerAnnonces.html.twig", 291)->unwrap()->yield($context);
        // line 292
        yield "                      </select>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"addressePostale\" ";
        // line 294
        if ((array_key_exists("editedDataAdressePostale", $context) && (        // line 295
(isset($context["editedDataAdressePostale"]) || array_key_exists("editedDataAdressePostale", $context) ? $context["editedDataAdressePostale"] : (function () { throw new RuntimeError('Variable "editedDataAdressePostale" does not exist.', 295, $this->source); })()) != ""))) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataAdressePostale"]) || array_key_exists("editedDataAdressePostale", $context) ? $context["editedDataAdressePostale"] : (function () { throw new RuntimeError('Variable "editedDataAdressePostale" does not exist.', 295, $this->source); })()), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        // line 296
        yield " name=\"adresse_postale\" class=\"form-control\"
                          placeholder=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-adresse"), "html", null, true);
        yield "*\" />
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"precisions\" name=\"precision\" class=\"form-control\" ";
        // line 300
        if ((        // line 301
array_key_exists("editedDataPrecision", $context) && ((isset($context["editedDataPrecision"]) || array_key_exists("editedDataPrecision", $context) ? $context["editedDataPrecision"] : (function () { throw new RuntimeError('Variable "editedDataPrecision" does not exist.', 301, $this->source); })()) != ""))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataPrecision"]) || array_key_exists("editedDataPrecision", $context) ? $context["editedDataPrecision"] : (function () { throw new RuntimeError('Variable "editedDataPrecision" does not exist.', 301, $this->source); })()), "html", null, true);
            yield "\"
                          ";
        } else {
            // line 302
            yield "value=\"\" ";
        }
        // line 303
        yield "                          placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-localisation"), "html", null, true);
        yield "\">
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"codePostale\" ";
        // line 306
        if ((array_key_exists("editedDataCodePostale", $context) && (        // line 307
(isset($context["editedDataCodePostale"]) || array_key_exists("editedDataCodePostale", $context) ? $context["editedDataCodePostale"] : (function () { throw new RuntimeError('Variable "editedDataCodePostale" does not exist.', 307, $this->source); })()) != ""))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataCodePostale"]) || array_key_exists("editedDataCodePostale", $context) ? $context["editedDataCodePostale"] : (function () { throw new RuntimeError('Variable "editedDataCodePostale" does not exist.', 307, $this->source); })()), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        // line 308
        yield "                          name=\"code_postal\" class=\"form-control\"
                          placeholder=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-code-postal"), "html", null, true);
        yield "*\" />
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"ville\" ";
        // line 312
        if ((array_key_exists("editedDataVille", $context) && ((isset($context["editedDataVille"]) || array_key_exists("editedDataVille", $context) ? $context["editedDataVille"] : (function () { throw new RuntimeError('Variable "editedDataVille" does not exist.', 312, $this->source); })()) != ""))) {
            // line 313
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataVille"]) || array_key_exists("editedDataVille", $context) ? $context["editedDataVille"] : (function () { throw new RuntimeError('Variable "editedDataVille" does not exist.', 313, $this->source); })()), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        yield " name=\"ville\"
                          class=\"form-control\"
                          placeholder=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-ville"), "html", null, true);
        yield "*\" />
                      </div>
                    </div>
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.equipements"), "html", null, true);
        yield "</h2>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" ";
        // line 321
        if ((array_key_exists("editedDataWifi", $context) && ((isset($context["editedDataWifi"]) || array_key_exists("editedDataWifi", $context) ? $context["editedDataWifi"] : (function () { throw new RuntimeError('Variable "editedDataWifi" does not exist.', 321, $this->source); })()) != ""))) {
            yield "checked";
        }
        // line 322
        yield " id=\"wifi\" name=\"wifi\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"wifi\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.case-a-cocher-wi-fi"), "html", null, true);
        yield "</label>
                      </div>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" ";
        // line 327
        if ((array_key_exists("editedDataCafe", $context) && ((isset($context["editedDataCafe"]) || array_key_exists("editedDataCafe", $context) ? $context["editedDataCafe"] : (function () { throw new RuntimeError('Variable "editedDataCafe" does not exist.', 327, $this->source); })()) != ""))) {
            yield "checked";
        }
        // line 328
        yield " id=\"cafeThe\" name=\"cafe\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"cafeThe\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.case-a-cocher-cafe"), "html", null, true);
        yield "</label>
                      </div>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" ";
        // line 333
        if ((array_key_exists("editedDataBureau", $context) && ((isset($context["editedDataBureau"]) || array_key_exists("editedDataBureau", $context) ? $context["editedDataBureau"] : (function () { throw new RuntimeError('Variable "editedDataBureau" does not exist.', 333, $this->source); })()) != ""))) {
            yield "checked";
        }
        // line 334
        yield " id=\"bureauEspace\" name=\"bureau\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"bureauEspace\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.case-a-cocher-bureau"), "html", null, true);
        yield "</label>
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" ";
        // line 339
        if ((array_key_exists("editedDataCafe", $context) && ((isset($context["editedDataCafe"]) || array_key_exists("editedDataCafe", $context) ? $context["editedDataCafe"] : (function () { throw new RuntimeError('Variable "editedDataCafe" does not exist.', 339, $this->source); })()) != ""))) {
            // line 340
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataCafe"]) || array_key_exists("editedDataCafe", $context) ? $context["editedDataCafe"] : (function () { throw new RuntimeError('Variable "editedDataCafe" does not exist.', 340, $this->source); })()), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        yield " class=\"form-control\"
                          name=\"autre_equipement\"
                          placeholder=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.autres"), "html", null, true);
        yield "\">
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                    value=\"";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 348
        if ((((((((array_key_exists("editedDataPays", $context) && ((isset($context["editedDataPays"]) || array_key_exists("editedDataPays", $context) ? $context["editedDataPays"] : (function () { throw new RuntimeError('Variable "editedDataPays" does not exist.', 348, $this->source); })()) != "")) &&         // line 349
array_key_exists("editedDataAdressePostale", $context)) && ((isset($context["editedDataAdressePostale"]) || array_key_exists("editedDataAdressePostale", $context) ? $context["editedDataAdressePostale"] : (function () { throw new RuntimeError('Variable "editedDataAdressePostale" does not exist.', 349, $this->source); })()) != "")) && array_key_exists("editedDataCodePostale", $context)) && (        // line 350
(isset($context["editedDataCodePostale"]) || array_key_exists("editedDataCodePostale", $context) ? $context["editedDataCodePostale"] : (function () { throw new RuntimeError('Variable "editedDataCodePostale" does not exist.', 350, $this->source); })()) != "")) && array_key_exists("editedDataVille", $context)) && ((isset($context["editedDataVille"]) || array_key_exists("editedDataVille", $context) ? $context["editedDataVille"] : (function () { throw new RuntimeError('Variable "editedDataVille" does not exist.', 350, $this->source); })()) != ""))) {
        } else {
            // line 351
            yield "disabled";
        }
        yield " name=\"suivant\" class=\"next action-button adresse\"
                    value=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset class=\"mb-4\">
                  <h2 class=\"fs-title text-left\">
                    ";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.entete-nom-service"), "html", null, true);
        yield "*</h2>
                  <div class=\"md-form\">
                    <input type=\"text\" id=\"nom\" class=\"form-control\" ";
        // line 358
        if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source,         // line 359
(isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 359, $this->source); })()), "post_title", [], "any", false, false, false, 359) != ""))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 359, $this->source); })()), "post_title", [], "any", false, false, false, 359), "html", null, true);
            yield "\" ";
        } else {
            yield "value=\"\" ";
        }
        // line 360
        yield "                      name=\"titre\"
                      placeholder=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.champs-titre-service"), "html", null, true);
        yield "\" />
                  </div>
                  <h2 class=\"fs-title text-left\">
                    ";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.entete-description-service"), "html", null, true);
        yield "*</h2>
                  <!-- <h3 class=\"fs-subtitle\">Brève description de vos techniques, votre matériel, vos compétences...</h3> -->
                  <div class=\"form-group text-left\">
                    <label
                      for=\"briefDesc\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.champs-description-service"), "html", null, true);
        yield "</label>
                    <textarea class=\"form-control\" name=\"description\" id=\"description\" rows=\"5\">";
        // line 369
        if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 369, $this->source); })()), "post_content", [], "any", false, false, false, 369) != ""))) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 369, $this->source); })()), "post_content", [], "any", false, false, false, 369);
        } else {
        }
        yield "</textarea>
                  </div>

                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"  value=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 373
        if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 373, $this->source); })()), "post_title", [], "any", false, false, false, 373) != "")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 373, $this->source); })()), "post_content", [], "any", false, false, false, 373) != ""))) {
        } else {
            yield "disabled";
        }
        yield " name=\"next\" class=\"next action-button nom\"
                    value=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-12\">
                      <h2 class=\"fs-title text-left\">
                        ";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.entete-portfolio"), "html", null, true);
        yield "</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.contrainte-ajout-portfolio"), "html", null, true);
        yield "</h3>
                      <select id=\"photos\" class=\"image-picker show-html\" name=\"portfolio[]\" data-limit=\"\"
                        multiple=\"multiple\">
                        <option selected value=\"\" hidden></option>
                        ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["portfolio"]) || array_key_exists("portfolio", $context) ? $context["portfolio"] : (function () { throw new RuntimeError('Variable "portfolio" does not exist.', 386, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 387
            yield "                        <option ";
            if ((array_key_exists("editedData", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 387, $this->source); })()), "gallery", [], "any", false, false, false, 387))) {
                yield " ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source,                 // line 388
(isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 388, $this->source); })()), "gallery", [], "any", false, false, false, 388));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    yield " ";
                    if (($context["v"] && (CoreExtension::getAttribute($this->env, $this->source, $context["v"], "guid", [], "any", false, false, false, 388) == CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 388)))) {
                        yield "selected ";
                    }
                    yield " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 389
            yield "                          data-img-src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 389), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 389), "html", null, true);
            yield "\"></option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        yield "                      </select>
                    </div>
                    <div class=\"col-md-12\">
                      <h2 class=\"fs-title text-left\">
                      ";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.telecharger-image"), "html", null, true);
        yield "</h2>
                      ";
        // line 396
        if ((array_key_exists("imagesSecondaires", $context) && Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["imagesSecondaires"]) || array_key_exists("imagesSecondaires", $context) ? $context["imagesSecondaires"] : (function () { throw new RuntimeError('Variable "imagesSecondaires" does not exist.', 396, $this->source); })())))) {
            // line 397
            yield "                        <div class=\"row mb-2\">
                        ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["imagesSecondaires"]) || array_key_exists("imagesSecondaires", $context) ? $context["imagesSecondaires"] : (function () { throw new RuntimeError('Variable "imagesSecondaires" does not exist.', 398, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 399
                yield "                          ";
                if ($context["p"]) {
                    // line 400
                    yield "                          <div class=\"card col-md-3 m-1 card_images\">
                            <img class=\"card-img-top\" src=\"";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 401), "html", null, true);
                    yield "\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                              <p><a href=\"";
                    // line 403
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_images_secondaires", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 403), "postId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 403, $this->source); })()), "id", [], "any", false, false, false, 403)]), "html", null, true);
                    yield "\" class=\"delete_port ld-over-inverse\">Supprimer<i class=\"ld ld-ring ld-spin\"></i></a></p>
                            </div>
                          </div>
                          ";
                }
                // line 407
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            yield "                      </div>
                      ";
        }
        // line 410
        yield "                      <div id=\"coba\" class=\"row\"></div>
                    </div>

                    <div class=\"col-md-12 mt-4\">
                      <h2 class=\"fs-title text-left\">
                        ";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.entete-video"), "html", null, true);
        yield "</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.contrainte-ajout-video"), "html", null, true);
        yield "</h3>
                      <select id=\"videos\" class=\"image-picker show-html\" name=\"videos[]\" data-limit=\"\"
                        multiple=\"multiple\">
                        ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["imgid"]) || array_key_exists("imgid", $context) ? $context["imgid"] : (function () { throw new RuntimeError('Variable "imgid" does not exist.', 420, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 421
            yield "                          <option ";
            if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 421, $this->source); })()), "videos", [], "any", false, false, false, 421) != null))) {
                yield " ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source,                 // line 422
(isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 422, $this->source); })()), "videos", [], "any", false, false, false, 422));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    yield " ";
                    if (($context["a"] == $context["v"])) {
                        yield "selected ";
                    }
                    yield " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield " ";
            }
            // line 423
            yield "                            data-img-src=\"https://img.youtube.com/vi/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
            yield "/0.jpg\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
            yield "\">
                          </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        yield "                      </select>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 430
        if ((array_key_exists("editedData", $context) && (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 430, $this->source); })()), "gallery", [], "any", false, false, false, 430)) != null))) {
        } elseif ((array_key_exists("imagesSecondaires", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["imagesSecondaires"]) || array_key_exists("imagesSecondaires", $context) ? $context["imagesSecondaires"] : (function () { throw new RuntimeError('Variable "imagesSecondaires" does not exist.', 430, $this->source); })())) > 0))) {
        } else {
            yield "disabled";
        }
        yield " name=\"next\" class=\"next action-button portfolio\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>

                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-12 text-left\">
                      <h2 class=\"fs-title\">
                        ";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-5.entete-prix-prestation"), "html", null, true);
        yield "*</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-5.description-prix-prestation"), "html", null, true);
        yield "</h3>
                      <div class=\"md-form\">
                        <select name=\"devise\" id=\"devise\" class=\"form-control\">
                          ";
        // line 442
        if ((array_key_exists("editedDataDevise", $context) && ((isset($context["editedDataDevise"]) || array_key_exists("editedDataDevise", $context) ? $context["editedDataDevise"] : (function () { throw new RuntimeError('Variable "editedDataDevise" does not exist.', 442, $this->source); })()) != ""))) {
            // line 443
            yield "                          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataDevise"]) || array_key_exists("editedDataDevise", $context) ? $context["editedDataDevise"] : (function () { throw new RuntimeError('Variable "editedDataDevise" does not exist.', 443, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataDevise"]) || array_key_exists("editedDataDevise", $context) ? $context["editedDataDevise"] : (function () { throw new RuntimeError('Variable "editedDataDevise" does not exist.', 443, $this->source); })()), "html", null, true);
            yield "</option>
                          ";
        } else {
        }
        // line 445
        yield "                          ";
        yield from $this->loadTemplate("profile/deviseList.html.twig", "profile/creerAnnonces.html.twig", 445)->unwrap()->yield($context);
        // line 446
        yield "                        </select>
                      </div>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-5.entete-prix-ttc"), "html", null, true);
        yield "</h3>
                      <div class=\"md-form\">
                        <input type=\"text\" data-type=\"currency\" ";
        // line 451
        if ((array_key_exists("editedDataPrix", $context) && ((isset($context["editedDataPrix"]) || array_key_exists("editedDataPrix", $context) ? $context["editedDataPrix"] : (function () { throw new RuntimeError('Variable "editedDataPrix" does not exist.', 451, $this->source); })()) != ""))) {
            // line 452
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editedDataPrix"]) || array_key_exists("editedDataPrix", $context) ? $context["editedDataPrix"] : (function () { throw new RuntimeError('Variable "editedDataPrix" does not exist.', 452, $this->source); })()), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"0\" ";
        }
        yield " id=\"prix\" name=\"prix\"
                          class=\"form-control prix-prestation\" placeholder=\"\" />
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                    value=\"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 459
        if ((array_key_exists("editedDataPrix", $context) && ((isset($context["editedDataPrix"]) || array_key_exists("editedDataPrix", $context) ? $context["editedDataPrix"] : (function () { throw new RuntimeError('Variable "editedDataPrix" does not exist.', 459, $this->source); })()) != ""))) {
        } else {
            yield "disabled";
        }
        // line 460
        yield " name=\"previous\" class=\"next action-button devise\"
                    value=\"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset>
                  <div id=\"body\">
                    <h2 class=\"fs-title text-left mb-4\">
                      ";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-6.entete-legislation-et-conditions-utilisation"), "html", null, true);
        yield "
                    </h2>
                    <p class=\"text-left\">";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-6.texte"), "html", null, true);
        yield "</p>
                    <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                      value=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                    <input type=\"submit\" id=\"send\" class=\"submit action-button\"
                      value=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-6.bouton-accepter"), "html", null, true);
        yield "\" />
                  </div>
                  <div id=\"succes\" style=\"display:none\">
                    <div hiddden class=\"col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">
                      <strong>Felicitation!</strong> Votre annonce à été publier avec succès
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                      </button>
                    </div>
                  </div>
                </fieldset>

                ";
        // line 484
        if (array_key_exists("editedData", $context)) {
            // line 485
            yield "                <input id=\"state\" name=\"state\" hidden value=\"";
            if (((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 485, $this->source); })()) == "edition")) {
                yield "edition";
            } elseif ((            // line 486
(isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 486, $this->source); })()) == "creation")) {
                yield "creation";
            } elseif (((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 486, $this->source); })()) == "brouillon")) {
                yield "brouillon";
            }
            yield "\"
                  class=\"state\" />
                <input id=\"idPostEdited\" name=\"idPostEdited\" hidden value=\"";
            // line 488
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 488, $this->source); })()), "id", [], "any", false, false, false, 488), "html", null, true);
            yield "\" class=\"state\" />
                ";
        } else {
            // line 490
            yield "                <input id=\"state\" name=\"state\" hidden value=\"creation\" class=\"state\" />";
        }
        // line 491
        yield "              </form>

              <div class=\"text-left \">
                <button ";
        // line 494
        if (array_key_exists("editedData", $context)) {
        } else {
            yield "disabled";
        }
        // line 495
        yield "                  class=\"position-brouillon m-0 pl-3 pr-3 btn btn-md btn-primary fletter-caps brouillon\">Sauvegarder en
                  brouillon, publier plus tard</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin des modifs -->
      </div>
    </div>
    ";
        // line 504
        yield from $this->loadTemplate("partials/project.html.twig", "profile/creerAnnonces.html.twig", 504)->unwrap()->yield($context);
        // line 505
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/creerAnnonces.html.twig", 505)->unwrap()->yield($context);
        // line 506
        yield "  </main>
  ";
        // line 509
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 514
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 515
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 519
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 520
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

<!-- jQuery plugin for datepicker -->
<script src=\"";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/img-picker/image-picker.min.js")), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
  <script type=\"text/javascript\" src='";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
<!-- jQuery plugin for spartan image picker -->
<script type=\"text/javascript\" src=\"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/spartan-image-picker/spartan-multi-image-picker-min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>

<script>
  var verify_images = 0;
  \$(document).ready(function () {

    tinymce.init({
      selector: 'textarea#description',
      height: 350,
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
      ],

      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
      browser_spellcheck: true,
      contextmenu: false,
      language: 'fr_FR'
    });

    var docWidth = document.documentElement.offsetWidth;

    [].forEach.call(
      document.querySelectorAll('*'),
      function (el) {
        if (el.offsetWidth > docWidth) {
          // console.log(el);
        }
      }
    );
    //Hambuger menu icon
    \$('.animated-button-icon').on('click', function () {
      \$('.animated-icon2').toggleClass('open');
    });
    //first thing turn Hide Menu Search bar
    \$(\"#searchMenu\").hide();
    //toggle menu search bar on/off
    \$(\"#searchMenuShowHide\").click(function () {
      \$(\"#searchMenu\").toggle(\"slide\");
    });

    // Initialize the object
    \$(\"#photos\").imagepicker();
    \$(\"#videos\").imagepicker();
    // Retrieve the picker
    \$(\"#photos\").data('picker');
    \$(\"#videos\").data('picker');

    //multiple datepicker
    \$('.date').datepicker({
      multidate: true,
      format: 'dd-mm-yyyy'
    });


    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    \$(\".next\").click(function () {
      ";
        // line 593
        if (((array_key_exists("imagesSecondaires", $context) && Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["imagesSecondaires"]) || array_key_exists("imagesSecondaires", $context) ? $context["imagesSecondaires"] : (function () { throw new RuntimeError('Variable "imagesSecondaires" does not exist.', 593, $this->source); })()))) || (array_key_exists("editedData", $context) && (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["editedData"]) || array_key_exists("editedData", $context) ? $context["editedData"] : (function () { throw new RuntimeError('Variable "editedData" does not exist.', 593, $this->source); })()), "gallery", [], "any", false, false, false, 593)) != null)))) {
            // line 594
            yield "        verify_images = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["imagesSecondaires"]) || array_key_exists("imagesSecondaires", $context) ? $context["imagesSecondaires"] : (function () { throw new RuntimeError('Variable "imagesSecondaires" does not exist.', 594, $this->source); })())), "html", null, true);
            yield ";
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      ";
        }
        // line 598
        yield "      if (animating) return false;
      animating = true;

      current_fs = \$(this).parent();
      next_fs = \$(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      \$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in \"now\"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = (now * 50) + \"%\";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale(' + scale + ')',
            'position': 'absolute'
          });
          next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });

    \$(\".previous\").click(function () {
      if (animating) return false;
      animating = true;

      current_fs = \$(this).parent();
      previous_fs = \$(this).parent().prev();

      //de-activate current step on progressbar
      \$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in \"now\"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = ((1 - now) * 50) + \"%\";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({ 'left': left });
          previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });
  });

  // add new portfolio images
  \$(\"#coba\").spartanMultiImagePicker({
    fieldName: 'files_annonce[]',
    status: false,
    loaderIcon: '<i class=\"fas fa-sync fa-spin\"></i>',
    maxFileSize: '1048576',
    //url: \$(\"#containerForPortfolio\").attr(\"addPortfolioUrl\"),
    additionalParam: {
      name: 'files_annonce[]'
    },
    onSizeErr: function (index, file) {
      toastr.clear();
      toastr.warning(\"";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.taille_fichier"), "html", null, true);
        yield "\");
    },
    onAddRow: function(index) {
      verify_images += 1;
      if (verify_images > 1) {
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      } else {
        \$('.portfolio').attr('disabled', \"disabled\");
        \$('.portfolio').attr('name', \"previous\");
      }
    },
    onRemoveRow: function (index) {
      verify_images -= 1;
      if (verify_images > 1) {
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      } else {
        \$('.portfolio').attr('disabled', \"disabled\");
        \$('.portfolio').attr('name', \"previous\");
      }
    }
  });

  \$(document).on('change', '.categorie', function (e) {
    //  console.log('categorie test');
    /* if ( \$(\".categorie\").val() == \"0\") {
        \$('#msform').attr('action', \"";
        // line 710
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_ajouter_devis");
        yield "\");
     }
     else{
        \$('#msform').attr('action', \" ";
        // line 713
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        yield "\");
     }*/
  });

  \$(document).on('change', '.souscategorie', function (e) {
    \$('.prestations').attr('name', \"next\");
    \$('.prestations').removeAttr('disabled');
  });

  \$(document).on('change', '#nom_prenom', function (e) {
    if (\$(\"#nom_prenom\").val() != \"\") {
      \$('.prestations').removeAttr('disabled');
    }
    if (\$(\"#nom_prenom\").val() == \"\") {
      \$('.prestations').attr('disabled', 'disabled');
    }
  });

  \$(document).on('blur', '#addressePostale, #codePostale, #ville', function (e) {
    if (\$('#addressePostale').val() != '' && \$('#codePostale').val() != '' && \$('#ville').val() != '') {
      \$('.adresse').attr('name', \"next\");
      \$('.adresse').removeAttr('disabled');
      \$('.brouillon').removeAttr('disabled');
    } else {
      \$('.adresse').attr('disabled', \"disabled\");
      \$('.adresse').attr('name', \"previous\");
      \$('.brouillon').attr('disabled', \"disabled\");
    }

  });

  \$(document).on('blur', '#nom', function (e) {
    if (\$('#nom').val() != '') {
      \$('.nom').attr('name', \"next\");
      \$('.nom').removeAttr('disabled');
    } else {
      \$('.nom').attr('disabled', \"disabled\");
      \$('.nom').attr('name', \"previous\");
    }

  });

  \$(document).on('change', '#photos', function (e) {
    if (\$('#photos').val() != '' || \$(this).files.length + document.getElementsByClassName('card_images').length > 0) {
      \$('.portfolio').attr('name', \"next\");
      \$('.portfolio').removeAttr('disabled');
    } else {
      \$('.portfolio').attr('disabled', \"disabled\");
      \$('.portfolio').attr('name', \"previous\");
    }
  });

  \$(\"input[name^=files_annonce]\").change(function() {
    if(document.getElementsByClassName('card_images')){verify_images = \$(this).files.length + document.getElementsByClassName('card_images').length;
    }else{verify_images = \$(this).files.length;}
    console.log(document.getElementsByClassName('card_images').length);
  })

  \$(document).on('change', '.input[name^=files_annonce]', function (e) {
    if (\$('#photos').val() != '' || verify_images != 0) {
      \$('.portfolio').attr('name', \"next\");
      \$('.portfolio').removeAttr('disabled');
    } else {
      \$('.portfolio').attr('disabled', \"disabled\");
      \$('.portfolio').attr('name', \"previous\");
    }
  });

  \$(document).on('blur', '#prix', function (e) {
    if (\$('#devise').val() != '' && \$('#prix').val() != '') {
      \$('.devise').attr('name', \"next\");
      \$('.devise').removeAttr('disabled');
    } else {
      \$('.devise').attr('disabled', \"disabled\");
      \$('.devise').attr('name', \"previous\");
    }

  });

  //Format price
  \$(\"input[data-type='currency']\").on({
    keyup: function () {
      var myFloat = \$(\"#prix\").val().replace(/[^0-9\\.{1,2}]+/g, \"\");
      \$(\"#prix\").val(myFloat);

    },
    blur: function () {
      if (\$(this).val() == '') {
        \$(this).val(0);
      }
    },
    focus: function () {
      let s = \$(this).val();
      while (s.charAt(0) === '0') {
        s = s.substr(1);
        \$(this).val(s);
      }
    }
  });

  \$('#dates_horaires').daterangepicker({
    autoUpdateInput: true,
    locale: {
      cancelLabel: 'Clear'
    }
  }, function (start, end, label) {
    //   console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
  });

  
\$(document).on('click', '.delete_port', function (e) { // On emp�che le navigateur de soumettre le formulaire
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
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
success: function (reponse) {
if (reponse == 1) {

  verify_images -= 1;
swal(\"suppression terminée\", \"\", \"success\");
t.closest('.card').hide();
} else {

swal(\"erreur de suppression\", \"\", \"error\");

}
},
error: function (reponse) {
swal(\"erreur de suppression\", \"\", \"error\");
}

});

} else {
swal.close();
}
});
return false; 
});

</script>
";
        // line 871
        yield from $this->loadTemplate("profile/js/rechercheSousCategories.html.twig", "profile/creerAnnonces.html.twig", 871)->unwrap()->yield($context);
        // line 872
        yield from $this->loadTemplate("profile/js/creerDevisAnnonce.html.twig", "profile/creerAnnonces.html.twig", 872)->unwrap()->yield($context);
        // line 873
        yield from $this->loadTemplate("profile/js/brouillonDevisAnnonce.html.twig", "profile/creerAnnonces.html.twig", 873)->unwrap()->yield($context);
        // line 874
        yield "
<script>
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
  };

</script>
";
        // line 895
        yield from $this->loadTemplate("profile/autocomplete.html.twig", "profile/creerAnnonces.html.twig", 895)->unwrap()->yield($context);
        // line 896
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
        return "profile/creerAnnonces.html.twig";
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
        return array (  1770 => 896,  1768 => 895,  1745 => 874,  1743 => 873,  1741 => 872,  1739 => 871,  1578 => 713,  1572 => 710,  1542 => 683,  1455 => 598,  1447 => 594,  1445 => 593,  1379 => 530,  1374 => 528,  1369 => 526,  1365 => 525,  1361 => 524,  1357 => 523,  1351 => 520,  1341 => 519,  1330 => 515,  1320 => 514,  1310 => 509,  1307 => 506,  1304 => 505,  1302 => 504,  1291 => 495,  1286 => 494,  1281 => 491,  1278 => 490,  1273 => 488,  1264 => 486,  1260 => 485,  1258 => 484,  1243 => 472,  1238 => 470,  1233 => 468,  1228 => 466,  1220 => 461,  1217 => 460,  1212 => 459,  1208 => 458,  1194 => 452,  1192 => 451,  1187 => 449,  1182 => 446,  1179 => 445,  1170 => 443,  1168 => 442,  1162 => 439,  1157 => 437,  1141 => 430,  1137 => 429,  1132 => 426,  1120 => 423,  1106 => 422,  1101 => 421,  1097 => 420,  1091 => 417,  1086 => 415,  1079 => 410,  1075 => 408,  1069 => 407,  1062 => 403,  1057 => 401,  1054 => 400,  1051 => 399,  1047 => 398,  1044 => 397,  1042 => 396,  1038 => 395,  1032 => 391,  1021 => 389,  1008 => 388,  1003 => 387,  999 => 386,  992 => 382,  987 => 380,  978 => 374,  971 => 373,  967 => 372,  958 => 369,  954 => 368,  947 => 364,  941 => 361,  938 => 360,  930 => 359,  929 => 358,  924 => 356,  917 => 352,  912 => 351,  909 => 350,  908 => 349,  907 => 348,  903 => 347,  895 => 342,  885 => 340,  883 => 339,  877 => 336,  873 => 334,  869 => 333,  863 => 330,  859 => 328,  855 => 327,  849 => 324,  845 => 322,  841 => 321,  836 => 319,  829 => 315,  819 => 313,  817 => 312,  811 => 309,  808 => 308,  800 => 307,  799 => 306,  792 => 303,  789 => 302,  782 => 301,  781 => 300,  775 => 297,  772 => 296,  764 => 295,  763 => 294,  759 => 292,  756 => 291,  748 => 289,  746 => 288,  741 => 286,  735 => 283,  728 => 279,  720 => 277,  705 => 270,  699 => 267,  688 => 263,  673 => 255,  666 => 251,  658 => 249,  653 => 246,  649 => 244,  647 => 243,  640 => 241,  636 => 240,  632 => 239,  627 => 238,  624 => 237,  619 => 234,  614 => 232,  611 => 231,  608 => 230,  603 => 227,  599 => 224,  595 => 222,  588 => 221,  585 => 220,  582 => 219,  578 => 218,  575 => 217,  573 => 216,  567 => 215,  557 => 212,  554 => 211,  550 => 210,  546 => 209,  541 => 208,  537 => 207,  534 => 206,  524 => 203,  521 => 202,  514 => 201,  509 => 200,  505 => 199,  500 => 198,  496 => 197,  493 => 196,  491 => 195,  482 => 193,  479 => 192,  472 => 191,  467 => 190,  463 => 189,  458 => 188,  454 => 187,  451 => 186,  448 => 185,  443 => 184,  438 => 181,  432 => 178,  423 => 172,  419 => 171,  415 => 170,  411 => 169,  407 => 168,  403 => 167,  396 => 164,  390 => 163,  385 => 162,  380 => 159,  378 => 158,  365 => 147,  363 => 146,  358 => 143,  348 => 142,  337 => 139,  327 => 138,  316 => 135,  306 => 134,  208 => 42,  204 => 41,  199 => 39,  192 => 35,  188 => 34,  184 => 33,  179 => 31,  175 => 30,  171 => 29,  166 => 27,  162 => 26,  157 => 24,  152 => 22,  142 => 21,  125 => 20,  108 => 18,  96 => 13,  91 => 11,  85 => 8,  80 => 6,  75 => 4,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'profileTemplate.html.twig' %}

{% block head %}
{{parent()}}

  <link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png')) }}\"
  sizes=\"32x32\" />
  <link rel=\"icon\" href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png')) }}\"
  sizes=\"192x192\" />
  <link rel=\"apple-touch-icon-precomposed\"
  href=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png')) }}\" />
  <meta name=\"msapplication-TileImage\"
  content=\"{{ preload(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\" />
  <meta name=\"robots\" content=\"noindex\">

{% endblock %}

{% block title %}Trust &amp; Market | Profil Annonces{% endblock %}

{% block annonce %} active{% endblock %}
{% block style %}
{{parent()}}
<!-- Gijgo datepicker css -->
<link rel=\"stylesheet\" href=\" {{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">

<link href=\"{{ preload(asset('assets/css/custome.css'))}}\" rel=\"stylesheet\">
<link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"{{ asset('assets/css/img-picker/image-picker.css')}}\">
<link href=\"{{ asset('assets/css/style-annonces.css')}}\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">

<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">

<!-- file input fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
<link href=\"{{asset('assets/font/file-input-font/font/font-fileuploader.css')}}\" rel=\"stylesheet\">
<!-- file input styles -->
<link href=\"{{asset('assets/css/file-input-css/jquery.fileuploader.min.css')}}\" media=\"all\" rel=\"stylesheet\">
  <script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
<style>
  .image_picker_image {
    width: 100px;
    height: 100px
  }

  .tox-statusbar__branding {
    display: none;
  }

  .fletter-caps {
    text-transform: lowercase;
  }

  .position-brouillon {
    position: fixed-top;
  }

  .fletter-caps::first-letter {
    text-transform: capitalize;
  }

  .btn-primary {
    background-color: #eb6918 !important;
    color: #fff;
    font-size: 0.8rem !important;
  }

  .btn-primary:not([disabled]):not(.disabled):active {
    background-color: #eb6918 !important;
  }

  /* preload*/
  .lds-ring {
    height: 10px;
    margin-top: 10px;
    z-index: 999;
  }

  .lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 10px;
    height: 10px;
    margin-right: 40px;
    margin: 6px;
    border: 6px solid #717373;
    border-radius: 50%;
    animation: lds-ring 0.4s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #717373 transparent transparent transparent;
  }

  .lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
  }

  .lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
  }

  .lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
  }

  @keyframes lds-ring {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @media (max-width: 575.98px) {
    main, .container {
      margin-top: 70px;
    }
  }

  @media (min-width: 576px) and (max-width: 767.98px) {
    main, .container {
      margin-top: 100px;
    }
  }

</style>
{% endblock %}


{% block header %}
  {{parent()}}
{% endblock %}

{% block navigation %}
  {{parent()}}
{% endblock %}

{% block body %}
<div class=\"flex-fill container\">
  <main class=\"\">
    <div class=\"container mt-2 pt-4\">
      {% include 'menuProfile.html.twig' %}
      <div class=\"mt-2\">
        <!-- Modif des infos -->
        <div id=\"modifInfo\">
          <div class=\"row\">
            <div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>

            {% include 'annonces/sousMenuAnnonces.html.twig' %}

            <div class=\"col-md-8 mb-2\">
              <!-- multistep form -->
              <form id=\"msform\" action=\"{% if nom_prenom_email is defined and nom_prenom_email is defined and client is defined and client != \"\" %}{{path('devis_ajouter_devis')}}
                {% elseif editedData is defined and state is defined and state == 'edition' %}{{path('profile_editer_annonce')}}
                {% else %}{{path('profile_ajouter_annonce')}}{% endif %}\" method=\"post\" enctype=\"multipart/form-data\">
                <!-- progressbar -->
                <ul id=\"progressbar\">
                  <li class=\"active\">{{'profil-utilisateur.formulaire-creer-annonce.onglet-prestations'|trans}}</li>
                  <li>{{'profil-utilisateur.formulaire-creer-annonce.onglet-adresse'|trans}}</li>
                  <li>{{'profil-utilisateur.formulaire-creer-annonce.onglet-service'|trans}}</li>
                  <li>{{'profil-utilisateur.formulaire-creer-annonce.onglet-photos-videos'|trans}}</li>
                  <li>{{'profil-utilisateur.formulaire-creer-annonce.onglet-prix'|trans}}</li>
                  <li>{{'profil-utilisateur.formulaire-creer-annonce.onglet-conditions'|trans}}</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">{{'profil-utilisateur.formulaire-creer-annonce.type-de-prestations'|trans}}*
                      </h2>
                      <h3 class=\"fs-subtitle\">
                        {{'profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix'|trans}}</h3>
                      <!-- Default unchecked -->
                      {# {{dump(editedData)}} #}
                      {% for c in categorie %}
                      {% if c.name|lower == 'produits' %}
                        <div class=\"custom-control custom-radio mb-2\">
                          <input type=\"radio\" {% if editedData is defined and editedData.post_type !=\"devis\" and c.name==editedData.categorieParent %}checked{% endif %}
                            myUrl=\"{{path('profile_liste_sous_categorie',{'id':c.termTaxonomyId})}}\"
                            class=\"custom-control-input categorie\" id=\"cat{{c.termTaxonomyId}}\" name=\"categorieParent\"
                            value=\"{{c.termTaxonomyId}}\" {% if app.user.getAbonnements()|length == 0 %}disabled{% elseif app.user.getAbonnements()|length > 0
                            and app.user.getAbonnements()|last.isAbonnementActif() and app.user.getAbonnements()|last.getOffre().isReferencement() %}{% else %}disabled{% endif %}/>
                          <label class=\"custom-control-label\" for=\"cat{{c.termTaxonomyId}}\">{% if app.request.locale ==
                            'en' and c.content != '' %}{{c.content}}{% else %}{{c.name}}{% endif %}</label>
                        </div>
                      {% elseif c.name|lower == 'packs production' %}
                        <div class=\"custom-control custom-radio mb-2\">
                          <input type=\"radio\" {% if editedData is defined and editedData.post_type !=\"devis\" and c.name==editedData.categorieParent %}checked{% endif %}
                            myUrl=\"{{path('profile_liste_sous_categorie',{'id':c.termTaxonomyId})}}\"
                            class=\"custom-control-input categorie\" id=\"cat{{c.termTaxonomyId}}\" name=\"categorieParent\"
                            value=\"{{c.termTaxonomyId}}\" {% if app.user.getAbonnements()|length == 0 %}disabled{% elseif app.user.getAbonnements()|length > 0
                            and app.user.getAbonnements()|last.isAbonnementActif() and app.user.getAbonnements()|last.getOffre().isPacksProduction() %}{% else %}disabled{% endif %}/>
                          <label class=\"custom-control-label\" for=\"cat{{c.termTaxonomyId}}\">{% if app.request.locale ==
                            'en' and c.content != '' %}{{c.content}}{% else %}{{c.name}}{% endif %}</label>
                        </div>
                      {% else %}
                      <div class=\"custom-control custom-radio mb-2\">
                        <input type=\"radio\" {% if editedData is defined and editedData.post_type !=\"devis\" and c.name==editedData.categorieParent %}checked{% endif %}
                          myUrl=\"{{path('profile_liste_sous_categorie',{'id':c.termTaxonomyId})}}\"
                          class=\"custom-control-input categorie\" id=\"cat{{c.termTaxonomyId}}\" name=\"categorieParent\"
                          value=\"{{c.termTaxonomyId}}\"/>
                        <label class=\"custom-control-label\" for=\"cat{{c.termTaxonomyId}}\">{% if app.request.locale ==
                          'en' and c.content != '' %}{{c.content}}{% else %}{{c.name}}{% endif %}</label>
                      </div>
                      {% endif %}
                      {% endfor %}
                      {# For Devis Process #}
                      <div class=\"custom-control custom-radio mb-2\">
                        <input type=\"radio\" {% if editedData is defined and editedData.post_type==\"devis\" %}checked{%
                          endif %} myUrl=\"\" class=\"custom-control-input categorie\" id=\"cat0\" name=\"categorieParent\" value=\"devis\"
                                {% if app.user.getAbonnements()|length == 0 %}disabled{% elseif app.user.getAbonnements()|length > 0
                                  and app.user.getAbonnements()|last.isAbonnementActif() and app.user.getAbonnements()|last.getOffre().isCreerDevis() %}{% else %}disabled{% endif %}/>
                        <label class=\"custom-control-label\" for=\"cat0\">{{'profil-utilisateur.formulaire-creer-annonce.creer-un-devis'|trans}}</label>
                        {# For Devis Process #}
                      </div>
                    </div>
                    {# {{ dump(nom_prenom_email) }} #}
                    <div id=\"prestProposee\" class=\"col-md-6 text-left\">
                      <div id=\"sous_categorie\">
                        <div id=\"sous_categorie_sous\">
                          {% if editedData is defined %} {# is defined and nom_prenom_email == \"\" #}
                          <h2 class=\"fs-title\">
                            {{'profil-utilisateur.formulaire-creer-annonce.type-de-prestations'|trans}}*</h2>
                          <h3 class=\"fs-subtitle\">
                            {{'profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix'|trans}}</h3>
                          <div class=\"custom-control custom-radio mb-2\">
                            {# {% if nom_prenom_email != \"\" %} #}
                            {% if editedData.post_type != 'devis' %}
                            <input type=\"radio\" checked myUrl=\"{{path('profile_liste_sous_categorie',{'id':editedData.IdSousCategorie})}}\"
                              class=\"custom-control-input categorie\" id=\"cat{{editedData.IdSousCategorie}}\"
                              name=\"categorie\" value=\"{{editedData.IdSousCategorie}}\" required>
                            <label class=\"custom-control-label\" for=\"cat{{editedData.IdSousCategorie}}\">{{editedData.sousCategorie}}</label>
                            {% endif %}
                            {# {% endif %} #}
                          </div>
                          {% endif %}
                        </div>

                        <div class=\"devis-input-data\" id=\"devis-input-data\"
                          style=\"{% if nom_prenom_email is not defined or nom_prenom_email == \"\" %}display:none;{% else %}{% endif %}\">
                          <h2 class=\"fs-title\">
                            {{'profil-utilisateur.formulaire-creer-annonce.champs-trouver-client'|trans}}</h2>
                          <div class=\"\" style=\"position: relative;margin-top:0.5rem;margin-bottom: 1.5rem;\">
                            <input autocomplete=\"off\" type=\"text\" id=\"nom_prenom\" name=\"nom_prenom\"
                              class=\"form-control search_devis\"
                              value=\"{% if nom_prenom_email is defined and nom_prenom_email != \"\" %} {{ nom_prenom_email }} {% endif %}\"
                              placeholder=\"Chercher par nom prénom ou son email\" />
                            <div class=\"lds-ring\" style=\"display:none;height:0px;margin-top:0px;\">
                              <div></div>
                              <div></div>
                              <div></div>
                              <div></div>
                            </div>
                            <input hidden=\"hidden\" type=\"text\" value=\"{% if client is defined and client != \"\" %} {{ client }} {% endif %}\"
                              name=\"idClient\" id=\"idClient\">
                          </div>
                          <h2 class=\"fs-title\">
                            {{'profil-utilisateur.formulaire-creer-annonce.dates-horaires-prestations'|trans}}</h2>
                          <div style=\"position: relative;margin-top:0.5rem;margin-bottom: 1.5rem;\">
                            <input required=\"required\" type=\"text\"
                              value=\"{% if dates_horaires is defined and dates_horaires != \"\" %} {{ dates_horaires }} {% else %}{% endif %}\"
                              id=\"dates_horaires\" name=\"dates_horaires\" class=\"form-control\">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" {% if editedData is defined %}{% else %}disabled{% endif %} name=\"previous\"
                    class=\"next action-button prestations\"
                    value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-suivant'|trans}}\" />
                </fieldset>
                <fieldset>
                  <h3 class=\"fs-subtitle text-left\">
                    {{'profil-utilisateur.formulaire-creer-annonce.presence-reseau-sociaux'|trans}}</h3>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">{{'profil-utilisateur.formulaire-creer-annonce.champs-pays'|trans}}*</h2>
                      <select class=\"browser-default custom-select\" name=\"pays\" required>
                        {% if editedDataPays is defined and editedDataPays != '' %}
                        <option value=\"{{editedDataPays}}\">{{editedDataPays|country_name}}</option>
                        {% endif %}
                        {% include 'country.html.twig' %}
                      </select>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"addressePostale\" {% if editedDataAdressePostale is defined and
                          editedDataAdressePostale !='' %} value=\"{{editedDataAdressePostale}}\" {% else %} value=\"\" {%
                          endif %} name=\"adresse_postale\" class=\"form-control\"
                          placeholder=\"{{'profil-utilisateur.formulaire-creer-annonce.champs-adresse'|trans}}*\" />
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"precisions\" name=\"precision\" class=\"form-control\" {% if
                          editedDataPrecision is defined and editedDataPrecision !='' %}value=\"{{editedDataPrecision}}\"
                          {% else %}value=\"\" {% endif %}
                          placeholder=\"{{'profil-utilisateur.formulaire-creer-annonce.champs-localisation'|trans}}\">
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"codePostale\" {% if editedDataCodePostale is defined and
                          editedDataCodePostale !='' %}value=\"{{editedDataCodePostale}}\" {% else %} value=\"\" {% endif %}
                          name=\"code_postal\" class=\"form-control\"
                          placeholder=\"{{'profil-utilisateur.formulaire-creer-annonce.champs-code-postal'|trans}}*\" />
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"ville\" {% if editedDataVille is defined and editedDataVille !=''
                          %}value=\"{{editedDataVille}}\" {% else %} value=\"\" {% endif %} name=\"ville\"
                          class=\"form-control\"
                          placeholder=\"{{'profil-utilisateur.formulaire-creer-annonce.champs-ville'|trans}}*\" />
                      </div>
                    </div>
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">{{'profil-utilisateur.formulaire-creer-annonce.equipements'|trans}}</h2>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" {% if editedDataWifi is defined and editedDataWifi !='' %}checked{% endif
                          %} id=\"wifi\" name=\"wifi\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"wifi\">{{'profil-utilisateur.formulaire-creer-annonce.case-a-cocher-wi-fi'|trans}}</label>
                      </div>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" {% if editedDataCafe is defined and editedDataCafe !='' %}checked{% endif
                          %} id=\"cafeThe\" name=\"cafe\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"cafeThe\">{{'profil-utilisateur.formulaire-creer-annonce.case-a-cocher-cafe'|trans}}</label>
                      </div>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" {% if editedDataBureau is defined and editedDataBureau !='' %}checked{%
                          endif %} id=\"bureauEspace\" name=\"bureau\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"bureauEspace\">{{'profil-utilisateur.formulaire-creer-annonce.case-a-cocher-bureau'|trans}}</label>
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" {% if editedDataCafe is defined and editedDataCafe !=''
                          %}value=\"{{editedDataCafe}}\" {% else %} value=\"\" {% endif %} class=\"form-control\"
                          name=\"autre_equipement\"
                          placeholder=\"{{'profil-utilisateur.formulaire-creer-annonce.autres'|trans}}\">
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                    value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-precedent'|trans}}\" />
                  <input type=\"button\" {% if editedDataPays is defined and editedDataPays !='' and
                    editedDataAdressePostale is defined and editedDataAdressePostale !='' and editedDataCodePostale is
                    defined and editedDataCodePostale !='' and editedDataVille is defined and editedDataVille !='' %}{%
                    else %}disabled{% endif %} name=\"suivant\" class=\"next action-button adresse\"
                    value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-suivant'|trans}}\" />
                </fieldset>
                <fieldset class=\"mb-4\">
                  <h2 class=\"fs-title text-left\">
                    {{'profil-utilisateur.formulaire-creer-annonce-3.entete-nom-service'|trans}}*</h2>
                  <div class=\"md-form\">
                    <input type=\"text\" id=\"nom\" class=\"form-control\" {% if editedData is defined and
                      editedData.post_title !='' %}value=\"{{editedData.post_title}}\" {% else %}value=\"\" {% endif %}
                      name=\"titre\"
                      placeholder=\"{{'profil-utilisateur.formulaire-creer-annonce-3.champs-titre-service'|trans}}\" />
                  </div>
                  <h2 class=\"fs-title text-left\">
                    {{'profil-utilisateur.formulaire-creer-annonce-3.entete-description-service'|trans}}*</h2>
                  <!-- <h3 class=\"fs-subtitle\">Brève description de vos techniques, votre matériel, vos compétences...</h3> -->
                  <div class=\"form-group text-left\">
                    <label
                      for=\"briefDesc\">{{'profil-utilisateur.formulaire-creer-annonce-3.champs-description-service'|trans}}</label>
                    <textarea class=\"form-control\" name=\"description\" id=\"description\" rows=\"5\">{% if editedData is defined and editedData.post_content != '' %}{{editedData.post_content|raw}}{% else %}{% endif %}</textarea>
                  </div>

                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"  value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-precedent'|trans}}\" />
                  <input type=\"button\" {% if editedData is defined and editedData.post_title !='' and editedData.post_content !='' %}{% else %}disabled{% endif %} name=\"next\" class=\"next action-button nom\"
                    value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-suivant'|trans}}\" />
                </fieldset>
                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-12\">
                      <h2 class=\"fs-title text-left\">
                        {{'profil-utilisateur.formulaire-creer-annonce-4.entete-portfolio'|trans}}</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        {{'profil-utilisateur.formulaire-creer-annonce-4.contrainte-ajout-portfolio'|trans}}</h3>
                      <select id=\"photos\" class=\"image-picker show-html\" name=\"portfolio[]\" data-limit=\"\"
                        multiple=\"multiple\">
                        <option selected value=\"\" hidden></option>
                        {% for p in portfolio %}
                        <option {% if editedData is defined and editedData.gallery %} {% for v in
                          editedData.gallery %} {% if v and v.guid==p.guid %}selected {% endif %} {% endfor %}{% endif %}
                          data-img-src=\"{{p.guid}}\" value=\"{{p.id}}\"></option>
                        {% endfor %}
                      </select>
                    </div>
                    <div class=\"col-md-12\">
                      <h2 class=\"fs-title text-left\">
                      {{'profil-utilisateur.formulaire-creer-annonce-4.telecharger-image'|trans}}</h2>
                      {% if imagesSecondaires is defined and imagesSecondaires|first %}
                        <div class=\"row mb-2\">
                        {% for p in imagesSecondaires %}
                          {% if p %}
                          <div class=\"card col-md-3 m-1 card_images\">
                            <img class=\"card-img-top\" src=\"{{p.guid}}\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                              <p><a href=\"{{path('profile_delete_images_secondaires', {'id':p.id, 'postId':editedData.id})}}\" class=\"delete_port ld-over-inverse\">Supprimer<i class=\"ld ld-ring ld-spin\"></i></a></p>
                            </div>
                          </div>
                          {% endif %}
                        {% endfor %}
                      </div>
                      {% endif %}
                      <div id=\"coba\" class=\"row\"></div>
                    </div>

                    <div class=\"col-md-12 mt-4\">
                      <h2 class=\"fs-title text-left\">
                        {{'profil-utilisateur.formulaire-creer-annonce-4.entete-video'|trans}}</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        {{'profil-utilisateur.formulaire-creer-annonce-4.contrainte-ajout-video'|trans}}</h3>
                      <select id=\"videos\" class=\"image-picker show-html\" name=\"videos[]\" data-limit=\"\"
                        multiple=\"multiple\">
                        {% for v in imgid %}
                          <option {% if editedData is defined and editedData.videos !=null %} {% for a in
                            editedData.videos %} {% if a==v %}selected {% endif %} {% endfor %} {% endif %}
                            data-img-src=\"https://img.youtube.com/vi/{{v}}/0.jpg\" value=\"{{v}}\">
                          </option>
                        {% endfor %}
                      </select>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-precedent'|trans}}\" />
                  <input type=\"button\" {% if editedData is defined and editedData.gallery|first != null %}{% elseif imagesSecondaires is defined and imagesSecondaires|length > 0 %}{% else %}disabled{% endif %} name=\"next\" class=\"next action-button portfolio\" value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-suivant'|trans}}\" />
                </fieldset>

                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-12 text-left\">
                      <h2 class=\"fs-title\">
                        {{'profil-utilisateur.formulaire-creer-annonce-5.entete-prix-prestation'|trans}}*</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        {{'profil-utilisateur.formulaire-creer-annonce-5.description-prix-prestation'|trans}}</h3>
                      <div class=\"md-form\">
                        <select name=\"devise\" id=\"devise\" class=\"form-control\">
                          {% if editedDataDevise is defined and editedDataDevise != '' %}
                          <option value=\"{{editedDataDevise}}\">{{editedDataDevise}}</option>
                          {% else %}{% endif %}
                          {% include 'profile/deviseList.html.twig' %}
                        </select>
                      </div>
                      <h3 class=\"fs-subtitle text-left\">
                        {{'profil-utilisateur.formulaire-creer-annonce-5.entete-prix-ttc'|trans}}</h3>
                      <div class=\"md-form\">
                        <input type=\"text\" data-type=\"currency\" {% if editedDataPrix is defined and editedDataPrix !=''
                          %} value=\"{{editedDataPrix}}\" {% else %} value=\"0\" {% endif %} id=\"prix\" name=\"prix\"
                          class=\"form-control prix-prestation\" placeholder=\"\" />
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                    value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-precedent'|trans}}\" />
                  <input type=\"button\" {% if editedDataPrix is defined and editedDataPrix !='' %}{% else %}disabled{%
                    endif %} name=\"previous\" class=\"next action-button devise\"
                    value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-suivant'|trans}}\" />
                </fieldset>
                <fieldset>
                  <div id=\"body\">
                    <h2 class=\"fs-title text-left mb-4\">
                      {{'profil-utilisateur.formulaire-creer-annonce-6.entete-legislation-et-conditions-utilisation'|trans}}
                    </h2>
                    <p class=\"text-left\">{{'profil-utilisateur.formulaire-creer-annonce-6.texte'|trans}}</p>
                    <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                      value=\"{{'profil-utilisateur.formulaire-creer-annonce.bouton-precedent'|trans}}\" />
                    <input type=\"submit\" id=\"send\" class=\"submit action-button\"
                      value=\"{{'profil-utilisateur.formulaire-creer-annonce-6.bouton-accepter'|trans}}\" />
                  </div>
                  <div id=\"succes\" style=\"display:none\">
                    <div hiddden class=\"col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">
                      <strong>Felicitation!</strong> Votre annonce à été publier avec succès
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                      </button>
                    </div>
                  </div>
                </fieldset>

                {% if editedData is defined %}
                <input id=\"state\" name=\"state\" hidden value=\"{% if state == \"edition\" %}edition{% elseif
                  state == \"creation\" %}creation{% elseif state==\"brouillon\" %}brouillon{% endif %}\"
                  class=\"state\" />
                <input id=\"idPostEdited\" name=\"idPostEdited\" hidden value=\"{{editedData.id}}\" class=\"state\" />
                {% else %}
                <input id=\"state\" name=\"state\" hidden value=\"creation\" class=\"state\" />{% endif %}
              </form>

              <div class=\"text-left \">
                <button {% if editedData is defined %}{% else %}disabled{% endif %}
                  class=\"position-brouillon m-0 pl-3 pr-3 btn btn-md btn-primary fletter-caps brouillon\">Sauvegarder en
                  brouillon, publier plus tard</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin des modifs -->
      </div>
    </div>
    {% include(\"partials/project.html.twig\") %}
    {% include(\"partials/otherPagesVideoModal.html.twig\") %}
  </main>
  {# {{dump(categorie.0.name)}}
  {{dump(editedData.categorieParent)}} #}

</div>
{% endblock %}


{% block footer %}
{{parent()}}

{% endblock %}

{% block javascripts %}
{{parent()}}

<!-- jQuery plugin for datepicker -->
<script src=\"{{ prerender(asset('assets/js/gijgo-js/gijgo.min.2.js')) }}\"></script>
<script src=\"{{ prerender(asset('assets/js/img-picker/image-picker.min.js')) }}\"></script>
<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
  <script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
<!-- jQuery plugin for spartan image picker -->
<script type=\"text/javascript\" src=\"{{asset('assets/js/spartan-image-picker/spartan-multi-image-picker-min.js') }}\"></script>

<script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>

<script>
  var verify_images = 0;
  \$(document).ready(function () {

    tinymce.init({
      selector: 'textarea#description',
      height: 350,
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
      ],

      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
      browser_spellcheck: true,
      contextmenu: false,
      language: 'fr_FR'
    });

    var docWidth = document.documentElement.offsetWidth;

    [].forEach.call(
      document.querySelectorAll('*'),
      function (el) {
        if (el.offsetWidth > docWidth) {
          // console.log(el);
        }
      }
    );
    //Hambuger menu icon
    \$('.animated-button-icon').on('click', function () {
      \$('.animated-icon2').toggleClass('open');
    });
    //first thing turn Hide Menu Search bar
    \$(\"#searchMenu\").hide();
    //toggle menu search bar on/off
    \$(\"#searchMenuShowHide\").click(function () {
      \$(\"#searchMenu\").toggle(\"slide\");
    });

    // Initialize the object
    \$(\"#photos\").imagepicker();
    \$(\"#videos\").imagepicker();
    // Retrieve the picker
    \$(\"#photos\").data('picker');
    \$(\"#videos\").data('picker');

    //multiple datepicker
    \$('.date').datepicker({
      multidate: true,
      format: 'dd-mm-yyyy'
    });


    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    \$(\".next\").click(function () {
      {% if imagesSecondaires is defined and imagesSecondaires|first or editedData is defined and editedData.gallery|first != null %}
        verify_images = {{ imagesSecondaires|length }};
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      {% endif %}
      if (animating) return false;
      animating = true;

      current_fs = \$(this).parent();
      next_fs = \$(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      \$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in \"now\"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = (now * 50) + \"%\";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale(' + scale + ')',
            'position': 'absolute'
          });
          next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });

    \$(\".previous\").click(function () {
      if (animating) return false;
      animating = true;

      current_fs = \$(this).parent();
      previous_fs = \$(this).parent().prev();

      //de-activate current step on progressbar
      \$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in \"now\"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = ((1 - now) * 50) + \"%\";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({ 'left': left });
          previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });
  });

  // add new portfolio images
  \$(\"#coba\").spartanMultiImagePicker({
    fieldName: 'files_annonce[]',
    status: false,
    loaderIcon: '<i class=\"fas fa-sync fa-spin\"></i>',
    maxFileSize: '1048576',
    //url: \$(\"#containerForPortfolio\").attr(\"addPortfolioUrl\"),
    additionalParam: {
      name: 'files_annonce[]'
    },
    onSizeErr: function (index, file) {
      toastr.clear();
      toastr.warning(\"{{'systeme.requetes.taille_fichier'|trans}}\");
    },
    onAddRow: function(index) {
      verify_images += 1;
      if (verify_images > 1) {
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      } else {
        \$('.portfolio').attr('disabled', \"disabled\");
        \$('.portfolio').attr('name', \"previous\");
      }
    },
    onRemoveRow: function (index) {
      verify_images -= 1;
      if (verify_images > 1) {
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      } else {
        \$('.portfolio').attr('disabled', \"disabled\");
        \$('.portfolio').attr('name', \"previous\");
      }
    }
  });

  \$(document).on('change', '.categorie', function (e) {
    //  console.log('categorie test');
    /* if ( \$(\".categorie\").val() == \"0\") {
        \$('#msform').attr('action', \"{{path('devis_ajouter_devis')}}\");
     }
     else{
        \$('#msform').attr('action', \" {{path('profile_ajouter_annonce')}}\");
     }*/
  });

  \$(document).on('change', '.souscategorie', function (e) {
    \$('.prestations').attr('name', \"next\");
    \$('.prestations').removeAttr('disabled');
  });

  \$(document).on('change', '#nom_prenom', function (e) {
    if (\$(\"#nom_prenom\").val() != \"\") {
      \$('.prestations').removeAttr('disabled');
    }
    if (\$(\"#nom_prenom\").val() == \"\") {
      \$('.prestations').attr('disabled', 'disabled');
    }
  });

  \$(document).on('blur', '#addressePostale, #codePostale, #ville', function (e) {
    if (\$('#addressePostale').val() != '' && \$('#codePostale').val() != '' && \$('#ville').val() != '') {
      \$('.adresse').attr('name', \"next\");
      \$('.adresse').removeAttr('disabled');
      \$('.brouillon').removeAttr('disabled');
    } else {
      \$('.adresse').attr('disabled', \"disabled\");
      \$('.adresse').attr('name', \"previous\");
      \$('.brouillon').attr('disabled', \"disabled\");
    }

  });

  \$(document).on('blur', '#nom', function (e) {
    if (\$('#nom').val() != '') {
      \$('.nom').attr('name', \"next\");
      \$('.nom').removeAttr('disabled');
    } else {
      \$('.nom').attr('disabled', \"disabled\");
      \$('.nom').attr('name', \"previous\");
    }

  });

  \$(document).on('change', '#photos', function (e) {
    if (\$('#photos').val() != '' || \$(this).files.length + document.getElementsByClassName('card_images').length > 0) {
      \$('.portfolio').attr('name', \"next\");
      \$('.portfolio').removeAttr('disabled');
    } else {
      \$('.portfolio').attr('disabled', \"disabled\");
      \$('.portfolio').attr('name', \"previous\");
    }
  });

  \$(\"input[name^=files_annonce]\").change(function() {
    if(document.getElementsByClassName('card_images')){verify_images = \$(this).files.length + document.getElementsByClassName('card_images').length;
    }else{verify_images = \$(this).files.length;}
    console.log(document.getElementsByClassName('card_images').length);
  })

  \$(document).on('change', '.input[name^=files_annonce]', function (e) {
    if (\$('#photos').val() != '' || verify_images != 0) {
      \$('.portfolio').attr('name', \"next\");
      \$('.portfolio').removeAttr('disabled');
    } else {
      \$('.portfolio').attr('disabled', \"disabled\");
      \$('.portfolio').attr('name', \"previous\");
    }
  });

  \$(document).on('blur', '#prix', function (e) {
    if (\$('#devise').val() != '' && \$('#prix').val() != '') {
      \$('.devise').attr('name', \"next\");
      \$('.devise').removeAttr('disabled');
    } else {
      \$('.devise').attr('disabled', \"disabled\");
      \$('.devise').attr('name', \"previous\");
    }

  });

  //Format price
  \$(\"input[data-type='currency']\").on({
    keyup: function () {
      var myFloat = \$(\"#prix\").val().replace(/[^0-9\\.{1,2}]+/g, \"\");
      \$(\"#prix\").val(myFloat);

    },
    blur: function () {
      if (\$(this).val() == '') {
        \$(this).val(0);
      }
    },
    focus: function () {
      let s = \$(this).val();
      while (s.charAt(0) === '0') {
        s = s.substr(1);
        \$(this).val(s);
      }
    }
  });

  \$('#dates_horaires').daterangepicker({
    autoUpdateInput: true,
    locale: {
      cancelLabel: 'Clear'
    }
  }, function (start, end, label) {
    //   console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
  });

  
\$(document).on('click', '.delete_port', function (e) { // On emp�che le navigateur de soumettre le formulaire
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
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
success: function (reponse) {
if (reponse == 1) {

  verify_images -= 1;
swal(\"suppression terminée\", \"\", \"success\");
t.closest('.card').hide();
} else {

swal(\"erreur de suppression\", \"\", \"error\");

}
},
error: function (reponse) {
swal(\"erreur de suppression\", \"\", \"error\");
}

});

} else {
swal.close();
}
});
return false; 
});

</script>
{% include 'profile/js/rechercheSousCategories.html.twig' %}
{% include 'profile/js/creerDevisAnnonce.html.twig' %}
{% include 'profile/js/brouillonDevisAnnonce.html.twig' %}

<script>
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
  };

</script>
{% include 'profile/autocomplete.html.twig' %}

{% endblock %}", "profile/creerAnnonces.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/creerAnnonces.html.twig");
    }
}
