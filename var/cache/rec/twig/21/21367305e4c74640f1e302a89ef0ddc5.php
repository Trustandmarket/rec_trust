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

/* annonces/listeResultat.html.twig */
class __TwigTemplate_c9fe058411dcd88bb0d9aeb6e0eb0449 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/listeResultat.html.twig"));

        // line 2
        $context["page_sub_name"] = "Annonces";
        // line 3
        if ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 3, $this->source); })()))) {
            $context["page_sub_name"] = (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 3, $this->source); })());
        } else {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 5
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 5) == (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 5, $this->source); })()))) {
                    // line 6
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 6) != ""))) {
                        // line 7
                        $context["page_sub_name"] = CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 7);
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 8
$context["prestation"], "name", [], "any", false, false, false, 8) != "")) {
                        $context["page_sub_name"] = CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 8);
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "annonces/listeResultat.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <link rel=\"icon\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <meta name=\"title\" content=\"Trust &amp; Market | ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_sub_name"]) || array_key_exists("page_sub_name", $context) ? $context["page_sub_name"] : (function () { throw new RuntimeError('Variable "page_sub_name" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\">
    <meta name=\"description\"
          content=\"";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 27) == (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 27, $this->source); })()))) {
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 27), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27), "html", null, true);
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " - ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_categories"]) || array_key_exists("sous_categories", $context) ? $context["sous_categories"] : (function () { throw new RuntimeError('Variable "sous_categories" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 27) == (isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 27, $this->source); })()))) {
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 27), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27), "html", null, true);
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "\">
    <link rel=\"canonical\"
          href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 29, $this->source); })()), "services_proposes" => (isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 29, $this->source); })()), "code_postal_ville" => (isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 29, $this->source); })()), "noPage" => (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 29, $this->source); })())])), "html", null, true);
        yield "\">
    <link rel=\"shortlink\"
          href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 31, $this->source); })()), "services_proposes" => (isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 31, $this->source); })()), "code_postal_ville" => (isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 31, $this->source); })()), "noPage" => (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 31, $this->source); })())])), "html", null, true);
        yield "\">
    ";
        // line 33
        yield "    <meta property=\"og:title\" content=\"Trust &amp; Market |\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_sub_name"]) || array_key_exists("page_sub_name", $context) ? $context["page_sub_name"] : (function () { throw new RuntimeError('Variable "page_sub_name" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "toutes-annonces"]);
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\">
    <meta propery=\"og:type\" content=\"website\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_sub_name"]) || array_key_exists("page_sub_name", $context) ? $context["page_sub_name"] : (function () { throw new RuntimeError('Variable "page_sub_name" does not exist.', 40, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 42
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mon-profil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 51
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

        .card-footer {
            text-align: end;
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

        .p-pop-titre1,
        .p-pop-titre2 {
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

        .keyword_search {
            width: 100%;
            background-color: #ffffff;
            position: relative;
            border-radius: 4rem;
            padding: 10px;
            margin-top: 2rem;
            border: 1px solid #262626;
        }

        .keyword_search .search__box {
            width: 85%;
            background: none;
            resize: none;
            color: #000;
            font-size: 13px;
            border-radius: 2rem;
            outline: none;
            border: none;
            position: relative;
            transition: all .75s ease-in;
            cursor: pointer;
            margin-top: 0px !important;
            text-align: left !important;
            text-align-last: left !important;
            touch-action: manipulation;
        }

        .keyword_search .search__icon {
            cursor: pointer;
            position: absolute;
            color: #ff7e10;
            padding: 0.7rem;
            border-radius: 50%;
            background-color: #262626;
            top: 3px;
        }

        .keyword_search .show {
            width: 85%;
            border: 1px solid #ff7e10;
        }


        .btn-wish {
            background: transparent;
            border: none;
            /* margin: 87px; */
            /* font-size: 88px; */
            outline: none;
            color: grey;
        }

        .btnh1-display {
            display: flex;
            justify-content: end;
        }

        .btn i:hover {
            cursor: pointer;
        }

        button:focus {
            outline: none;
        }

        .overlay .btnh1-display {
            position: absolute;
            top: 10%;
            left: 92%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-size: 16px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        @media only screen and (max-width: 768px) {
            #custom-filter {
                padding-right: 15px !important;
                padding-left: 15px !important;
            }

        }

        .autocompleteResult {
            background: white;
            position: absolute;
            z-index: 1;
            height: 200px;
            overflow-y: auto;
            overflow-x: clip;
            width: 90%;
            border: 1px solid gray;
            border-radius: 8px;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .resultIndex a {
            width: 100%;
            height: 100%;
            display: block;
            margin: 0;
            padding: 0;
        }

        .resultIndex {
            border-bottom: 1px solid gray;
            cursor: pointer;
            padding: 10px;
        }

        .resultIndex:hover {
            background: #000;
            color: #fff;
        }

        .imgSearchResult {
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 50%;
            margin-right: 1rem;
            object-fit: cover;
        }
        .breadcrumb-h1, .breadcrumb-h2, .breadcrumb-h3 {
            font-size: inherit;  /* Keeps the font size the same as the surrounding text */
            margin: 0;  /* Removes any extra margins that come with heading tags */
            font-weight: inherit;  /* Keeps the font weight the same as the surrounding text */
            display: inline;  /* Ensures the headings behave like inline text */
        }


    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 254
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 257
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

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 260
        yield "    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"mt-5\">
                <div class=\"row\">
                    <div class=\"col-md-3 py-4 mb-4 custom-filter\" id=\"custom-filter\">
                        <h3>";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.titre", [], "liste_annonces");
        yield "</h3>
                        <div class=\"container\">
                            <form action=\"\" id=\"filtreForm\">
                                <select name=\"type_prestation\" id=\"type_prestation2\"
                                        class=\"browser-default custom-select mr-2 mb-2\">
                                    <option value=\"\">";
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.prestation", [], "liste_annonces");
        yield "</option>
                                    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 272, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 273
            yield "                                        <option ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 273) == (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 273, $this->source); })()))) {
                yield "selected='selected'";
            }
            // line 274
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 274), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "request", [], "any", false, false, false, 274), "locale", [], "any", false, false, false, 274) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 274) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 274), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 274), "html", null, true);
            }
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "                                </select>
                                <select name=\"services_proposes\" id=\"services_proposes2\"
                                        class=\"browser-default custom-select mr-2 mb-2\">
                                    <option value=\"\">";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.service", [], "liste_annonces");
        yield "</option>
                                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_categories"]) || array_key_exists("sous_categories", $context) ? $context["sous_categories"] : (function () { throw new RuntimeError('Variable "sous_categories" does not exist.', 280, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 281
            yield "                                        <option ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 281) == (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 281, $this->source); })()))) {
                yield "selected='selected'";
            }
            // line 282
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 282), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "request", [], "any", false, false, false, 282), "locale", [], "any", false, false, false, 282) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 282) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 282), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 282), "html", null, true);
            }
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        yield "                                </select>
                                <input type=\"text\"
                                       value=\"";
        // line 286
        if (((isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 286, $this->source); })()) != "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 286, $this->source); })()), "html", null, true);
        }
        yield "\"
                                       class=\"form-control\" name=\"code_postal_ville\" id=\"code_postal_ville2\"
                                       placeholder=\"Code postal et/ou Ville\">
                                <input hidden value=\"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 289, $this->source); })()), "html", null, true);
        yield "\" id=\"noPage\" class=\"noPage\" name=\"noPage\"/>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <button class=\"btn btn-lg btn-primary waves-effect waves-light col-md-12 search-normal-btn\"
                                                type=\"sumbit\">";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.soumettre", [], "liste_annonces");
        yield "</button>
                                        <button class=\"btn btn-lg btn-primary waves-effect waves-light col-md-12 search-icon-btn\"
                                                type=\"sumbit\">
                                            <i class=\"fas fa-search\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class=\"autocomplete_keyword_search\">
                            <div class=\"keyword_search\">
                                <input type=\"text\" id=\"box\" placeholder=\"Recherche par mots-clés...\"
                                       class=\"search__box\"/>
                                <i class=\"fas fa-search search__icon\" id=\"icon\" onclick=\"toggleShow()\"></i>
                            </div>
                            <div class=\"autocompleteResult\">

                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" id=\"listeAnnonces\">
                        ";
        // line 315
        if ((array_key_exists("p_empty_search_text", $context) && (isset($context["p_empty_search_text"]) || array_key_exists("p_empty_search_text", $context) ? $context["p_empty_search_text"] : (function () { throw new RuntimeError('Variable "p_empty_search_text" does not exist.', 315, $this->source); })()))) {
            // line 316
            yield "                            ";
            if ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 316, $this->source); })()))) {
                // line 317
                yield "                                ";
                $context["p_empty_search_text"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["p_empty_search_text"]) || array_key_exists("p_empty_search_text", $context) ? $context["p_empty_search_text"] : (function () { throw new RuntimeError('Variable "p_empty_search_text" does not exist.', 317, $this->source); })()), "postContent", [], "any", false, false, false, 317);
                // line 318
                yield "                                ";
                $context["replaced_p_empty_search_text"] = Twig\Extension\CoreExtension::replace((isset($context["p_empty_search_text"]) || array_key_exists("p_empty_search_text", $context) ? $context["p_empty_search_text"] : (function () { throw new RuntimeError('Variable "p_empty_search_text" does not exist.', 318, $this->source); })()), ["nom_commercial" => (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 318, $this->source); })())]);
                // line 319
                yield "                                <div class=\"filter-text mr-2\"
                                     style=\"margin-top: -2rem;margin-bottom: 2rem;\">";
                // line 320
                yield (isset($context["replaced_p_empty_search_text"]) || array_key_exists("replaced_p_empty_search_text", $context) ? $context["replaced_p_empty_search_text"] : (function () { throw new RuntimeError('Variable "replaced_p_empty_search_text" does not exist.', 320, $this->source); })());
                yield "</div>
                            ";
            } else {
                // line 322
                yield "                                <div class=\"filter-text mr-2\"
                                     style=\"margin-top: -2rem;margin-bottom: 2rem;\">";
                // line 323
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["p_empty_search_text"]) || array_key_exists("p_empty_search_text", $context) ? $context["p_empty_search_text"] : (function () { throw new RuntimeError('Variable "p_empty_search_text" does not exist.', 323, $this->source); })()), "postContent", [], "any", false, false, false, 323);
                yield "</div>
                            ";
            }
            // line 325
            yield "                        ";
        }
        // line 326
        yield "                        <!-- list des prestations -->
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <!-- First breadcrumb gets <h1> -->
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        yield "\">
                                        <h1 class=\"breadcrumb-h1\">";
        // line 332
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.annonce", [], "liste_annonces");
        yield "</h1>
                                    </a>
                                </li>

                                <!-- If type_prestation exists, it gets <h2> -->
                                ";
        // line 337
        if (((isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 337, $this->source); })()) != "")) {
            // line 338
            yield "                                    <li class=\"breadcrumb-item ";
            if (((isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 338, $this->source); })()) == "")) {
                yield "active";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 338, $this->source); })()), "html", null, true);
            }
            yield "\" aria-current=\"page\">
                                        <a href=\"";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 339, $this->source); })()), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "\">
                                            ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 340, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 341
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 341) == (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 341, $this->source); })()))) {
                    // line 342
                    yield "                                                    <h2 class=\"breadcrumb-h2\">
                                                        ";
                    // line 343
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "locale", [], "any", false, false, false, 343) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 343) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 343), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 343), "html", null, true);
                    }
                    // line 344
                    yield "                                                    </h2>
                                                ";
                }
                // line 346
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            yield "                                        </a>
                                    </li>

                                    <!-- If services_proposes exists, it gets <h3> -->
                                    ";
            // line 351
            if (((isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 351, $this->source); })()) != "")) {
                // line 352
                yield "                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                            <a href=\"#\">
                                                ";
                // line 354
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_categories"]) || array_key_exists("sous_categories", $context) ? $context["sous_categories"] : (function () { throw new RuntimeError('Variable "sous_categories" does not exist.', 354, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                    // line 355
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 355) == (isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 355, $this->source); })()))) {
                        // line 356
                        yield "                                                        <h3 class=\"breadcrumb-h3\">
                                                            ";
                        // line 357
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 357, $this->source); })()), "request", [], "any", false, false, false, 357), "locale", [], "any", false, false, false, 357) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 357) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 357), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 357), "html", null, true);
                        }
                        // line 358
                        yield "                                                        </h3>
                                                    ";
                    }
                    // line 360
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                yield "                                            </a>
                                        </li>
                                    ";
            }
            // line 364
            yield "                                ";
        } elseif ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 364, $this->source); })()))) {
            // line 365
            yield "                                    <!-- If no type_prestation, nom_commercial gets <h2> -->
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"#\"><h2 class=\"breadcrumb-h2\">";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 367, $this->source); })()), "html", null, true);
            yield "</h2></a>
                                    </li>
                                ";
        }
        // line 370
        yield "                            </ol>


                        </nav>
                        <div class=\"row mb-12\">
                            ";
        // line 375
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/listeResultat.html.twig", 375)->unwrap()->yield($context);
        // line 376
        yield "                            <div class=\"col-md-8 text-right\">
                                <form action=\"\" class=\"form-inline float-right\">
                                    <h6 class=\"filter-text mr-2\">";
        // line 378
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.titre", [], "liste_annonces");
        yield "</h6>
                                    <select name=\"prix\" id=\"triPrix\" class=\"browser-default custom-select mr-2 mb-2\">
                                        <option value=\"all\">";
        // line 380
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.prix", [], "liste_annonces");
        yield "</option>
                                        <option value=\"0\">";
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.croissant", [], "liste_annonces");
        yield "</option>
                                        <option value=\"1\">";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.decroissant", [], "liste_annonces");
        yield "</option>
                                    </select>&nbsp;
                                    <select name=\"date-dajout\" id=\"triDate\"
                                            class=\"browser-default custom-select mr-2 mb-2\">
                                        <option value=\"all\">";
        // line 386
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.date-ajout", [], "liste_annonces");
        yield "</option>
                                        <option value=\"1\">";
        // line 387
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "
                                            &gt;
                                            ";
        // line 389
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "</option>
                                        <option value=\"0\">";
        // line 390
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "
                                            &lt;
                                            ";
        // line 392
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class=\"mt-3 row isotope owl-theme\">
                            ";
        // line 398
        if ( !(null === (isset($context["listeAnnonces"]) || array_key_exists("listeAnnonces", $context) ? $context["listeAnnonces"] : (function () { throw new RuntimeError('Variable "listeAnnonces" does not exist.', 398, $this->source); })()))) {
            // line 399
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listeAnnonces"]) || array_key_exists("listeAnnonces", $context) ? $context["listeAnnonces"] : (function () { throw new RuntimeError('Variable "listeAnnonces" does not exist.', 399, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                // line 400
                yield "                                    <div class=\"col-lg-4 col-md-6 col-sm-6 mb-5 clearfix isotope-grid\">
                                        <!-- Card -->
                                        <div class=\"card\">
                                            <!-- Card image -->
                                            ";
                // line 404
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 404))) {
                    // line 405
                    yield "                                                <div class=\"view overlay isotope-item\"
                                                     style=\"height:160px; border-bottom: 4px solid #f17b30\">
                                                    <img loading=\"lazy\" class=\"card-img-top lazy\" width=\"100%\"
                                                         src=\"";
                    // line 408
                    if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 408))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 408), 0, [], "any", false, false, false, 408), "guid", [], "any", false, false, false, 408), ["www." => ""]), "html", null, true);
                    } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 408))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 408), 0, [], "any", false, false, false, 408), "guid", [], "any", false, false, false, 408), ["www." => ""]), "html", null, true);
                    } else {
                        yield "https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg";
                    }
                    yield "\"
                                                         alt=\"Card image cap\">
                                                    <div class=\"btnh1-display\">
                                                        <button class=\"btn-wish btnh1\" data-id=\"";
                    // line 411
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 411), "html", null, true);
                    yield "\">
                                                            ";
                    // line 412
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 412), (isset($context["text_wishlist"]) || array_key_exists("text_wishlist", $context) ? $context["text_wishlist"] : (function () { throw new RuntimeError('Variable "text_wishlist" does not exist.', 412, $this->source); })()))) {
                        yield "<i style=\"color: red;\"
                                                                                                 class=\"fas fa-heart\"></i> ";
                    } else {
                        // line 414
                        yield "                                                                <i class=\"far fa-heart\"></i> ";
                    }
                    yield "</button>
                                                    </div>
                                                    <a href=\"";
                    // line 416
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 416) != "")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 416)]), "html", null, true);
                    }
                    yield "\">
                                                        <div class=\"mask rgba-white-slight\"></div>
                                                    </a>
                                                </div>
                                            ";
                }
                // line 421
                yield "                                            <!-- Card content -->
                                            <div class=\"card-body\">
                                                <!-- Title -->
                                                <h4 class=\"card-title fs-18\">
                                                    ";
                // line 425
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 425, $this->source); })()), "request", [], "any", false, false, false, 425), "locale", [], "any", false, false, false, 425) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 425) != ""))) {
                    // line 426
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 426), "html", null, true);
                    yield "
                                                    ";
                } else {
                    // line 428
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre", [], "any", false, false, false, 428), "html", null, true);
                    yield "
                                                    ";
                }
                // line 430
                yield "                                                </h4>
                                                <!-- Category -->
                                                <h5 class=\"card-sub-title fs-15\">
                                                    <a href=\"";
                // line 433
                if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 433)) == "produits")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield " ";
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 433), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield " ";
                }
                yield "\">
                                                        ";
                // line 434
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "request", [], "any", false, false, false, 434), "locale", [], "any", false, false, false, 434) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 434) != ""))) {
                    // line 435
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 435), "html", null, true);
                    yield "
                                                        ";
                } else {
                    // line 437
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 437), "html", null, true);
                    yield "
                                                        ";
                }
                // line 439
                yield "                                                    </a>
                                                </h5>
                                                <!-- Sub Category -->
                                                <h5 class=\"card-sub-category fs-18\">
                                                    <a href=\"";
                // line 443
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 443), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorieSlug", [], "any", false, false, false, 443), "code_postal_ville" => ""]), "html", null, true);
                yield "\">
                                                        ";
                // line 444
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "request", [], "any", false, false, false, 444), "locale", [], "any", false, false, false, 444) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 444) != ""))) {
                    // line 445
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 445), "html", null, true);
                    yield "
                                                        ";
                } else {
                    // line 447
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie", [], "any", false, false, false, 447), "html", null, true);
                    yield "
                                                        ";
                }
                // line 449
                yield "                                                    </a>
                                                </h5>
                                                <!-- Price -->
                                                <p class=\"annonce-price fs-24 mb-0\">
                                                    <span data-stars=\"";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 453), 0), "html", null, true);
                yield "\"
                                                          class=\"number\">";
                // line 454
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 454), "html", null, true);
                yield "</span>
                                                    ";
                // line 455
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 455) != null)) {
                    // line 456
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 456), "html", null, true);
                } else {
                    yield "€
                                                    ";
                }
                // line 458
                yield "                                                </p>
                                            </div>
                                            <div class=\"card-footer bg-transparent\">
                                                <a target=\"_blank\" href=\"";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 461), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_author", [], "any", false, false, false, 461)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 461), "html", null, true);
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
            // line 467
            yield "                            ";
        }
        // line 468
        yield "                        </div>
                        ";
        // line 469
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/listeResultat.html.twig", 469)->unwrap()->yield($context);
        // line 470
        yield "                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Main Layout-->

    ";
        // line 477
        yield from $this->loadTemplate("partials/project.html.twig", "annonces/listeResultat.html.twig", 477)->unwrap()->yield($context);
        // line 478
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "annonces/listeResultat.html.twig", 478)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 482
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 483
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 487
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 488
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 493
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
    <!-- RateIt Js -->
    <script type=\"text/javascript\" src=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/rateit/jquery.rateit.min.js"), "html", null, true);
        yield "\"></script>

    <script>
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) { // console.log(el);
                }
            });

            function toggleShow() {
                var el = document.getElementById(\"box\");
                el.classList.toggle(\"show\");
            }

            \$(document).click(function (event) {
                var \$target = \$(event.target);
                if (!\$target.closest('.autocompleteResult').length && \$('.autocompleteResult').is(\":visible\")) {
                    ";
        // line 524
        yield "                    \$('.autocompleteResult').css('display', 'none');
                }
            });

            \$('.search__box').on('keyup', function (e) {
                const value = \$(this).val();
                \$('.autocompleteResult').empty();
                \$('.autocompleteResult').css('display', 'flex');
                \$('.autocompleteResult').html(`En cours...`);
                const data = new FormData();
                data.append(\"term\", value);
                \$.ajax({
                    url: \"";
        // line 536
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        yield "\",
                    type: \"POST\",
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (data) {
                        //console.log(data);
                        \$('.autocompleteResult').empty();
                        \$('.autocompleteResult').css('display', 'block');
                        if (data.length > 0) {
                            data.forEach(
                                element => {
                                    \$('.autocompleteResult').append(`
\t\t\t\t\t\t\t<div class=\"resultIndex\">
\t\t\t\t\t\t\t\t<a href=\"/fr/annonces/details/\${element.slug}\"><img src=\"\${element.image}\" class=\"imgSearchResult\">\${element.name}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t`)
                                });
                        } else {
                            \$('.autocompleteResult').css('display', 'none');
                        }
                    },
                    error: function (error) {
                        \$('.autocompleteResult').empty();
                        \$('.autocompleteResult').css('display', 'none');
                    }
                })
            })
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


// Set card title and card-body equal height
            let maxHeightbody = 0;
// card body
            \$(\".card-body\").each(function () {
                if (\$(this).height() > maxHeightbody) {
                    maxHeightbody = \$(this).height();
                }
            });
            \$(\".card-body\").height(maxHeightbody);
// Modification des données newsletter de l'utilisateur
            \$('#triPrix').on('change', function (e) {
                if (\$('#triPrix').val() == 0) {
//console.log(\$('#triPrix').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                dsb = parseInt(\$(b).find('.number').eq(0).text());
                            return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                        }));
                    });
                } else { // console.log(\$('#triPrix').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                dsb = parseInt(\$(b).find('.number').eq(0).text());
                            return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                        }));
                    });
                }

            });

            \$('#triDate').on('change', function (e) {

                if (\$('#triDate').val() == 0) { // console.log(\$('#triDate').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                            return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                        }));
                    });
                } else { // console.log(\$('#triDate').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                            return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                        }));
                    });
                }
            });

// Tri des pro
            \$('#relevance').on('change', function (e) {
                var relevanceData = \$('#relevance').val();
                switch (relevanceData) {
                    case '1':
                        break;
                    case '2':
                    case '3':
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.tri-date-pro').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.tri-date-pro').eq(0).text());
                                return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    case '4':
// console.log(\$('#relevance').val());
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.prix-indicatif').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.prix-indicatif').eq(0).text());
                                return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    case '5':
// console.log(\$('#relevance').val());
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.prix-indicatif').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.prix-indicatif').eq(0).text());
                                return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    default:
                }
            });

// Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });

            // like user profile
            \$('.like-btn').on('click', function () {
                \$(this).toggleClass('userhas-like');
            });

            \$('#filtreForm').on('submit', function (e) {
                e.preventDefault();
                if (\$.trim(\$('#type_prestation2').val()) == \"\") {
                    toastr.error('Le type de prestation est obligatoire');
                    return;
                }

                let url = \"";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_filtre_recherche_xhr", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 686, $this->source); })()), "request", [], "any", false, false, false, 686), "get", ["_locale"], "method", false, false, false, 686)]), "html", null, true);
        yield "\";
                let type_prestation = \$('#type_prestation2').val();
                let sous_categorie = \$('#services_proposes2').val();
                let code_postal_ville = \$('#code_postal_ville2').val();
                let noPage = \$('#noPage').val();
                let page = \"resultat\";

                \$.ajax({
                    url: url,
                    method: \"post\",
                    data: {
                        type_prestation: type_prestation,
                        services_proposes: sous_categorie,
                        code_postal_ville: code_postal_ville,
                        noPage: noPage,
                        page: page
                    },
                    success: function (data) {
//console.log(data.html);
                        if (data.html) {
                            \$('#listeAnnonces').html(data.html);
                        }
                        let maxHeightTitle = 0;
                        let maxHeightbody = 0;
                        \$(\".card-body\").each(function () {
                            if (\$(this).height() > maxHeightbody) {
                                maxHeightbody = \$(this).height();
                            }
                        });
                        \$(\".card-body\").height(maxHeightbody);
                        \$('#triPrix').on('change', function (e) {
                            if (\$('#triPrix').val() == 0) {
//console.log(\$('#triPrix').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.number').eq(0).text());
                                        return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                                    }));
                                });
                            } else { // console.log(\$('#triPrix').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.number').eq(0).text());
                                        return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                                    }));
                                });
                            }

                        });

                        \$('#triDate').on('change', function (e) {

                            if (\$('#triDate').val() == 0) { // console.log(\$('#triDate').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                                        return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                                    }));
                                });
                            } else { // console.log(\$('#triDate').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                                        return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                                    }));
                                });
                            }
                        });
// Tri des pro
                    },
                    error: function (xhr) {
                        console.error(xhr);
                    }
                });
            });

            \$('#type_prestation2').on('change', function () {
                let lang = \$('#page_lang').val();
                let id = \$(this).val();
                let url = \"";
        // line 769
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_get_sous_categories_xhr", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 769, $this->source); })()), "request", [], "any", false, false, false, 769), "get", ["_locale"], "method", false, false, false, 769)]), "html", null, true);
        yield "\";

                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        type_prestation: id
                    },
                    success: function (data) {
                        \$('#services_proposes2').empty();
                        \$('#services_proposes2').append(\"<option value='all' disabled='disabled' selected='selected'> ";
        // line 779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.services-proposes"), "html", null, true);
        yield "</option>\");

                        if (data.sous_categories) {
                            data.sous_categories.forEach(function (e) {
                                if (lang == 'fr') {
                                    \$('#services_proposes2').append(\"<option value='\" + e.slug + \"'>\" + e.name + \"</option>\");
                                } else {
                                    \$('#services_proposes2').append(\"<option value='\" + e.slug + \"'>\" + e.content + \"</option>\");
                                }
                            });
                        }
                    },
                    error: function (xhr) {
                        console.error(xhr);
                    }
                });
            });

            // First Like Button
            \$(document).on('click', '.btnh1', function () {
                let element = \$(this);
                //Enregistrer dans la wishlist
                let url = \"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_add_remove_to_user_wishlist", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 801, $this->source); })()), "request", [], "any", false, false, false, 801), "get", ["_locale"], "method", false, false, false, 801)]), "html", null, true);
        yield "\";
                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        annonce_id: \$(this).attr('data-id')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.color == 'red') {
                            element.children().removeClass(\"far\");
                            element.children().addClass(\"fas\");
                            element.children().css('color', 'red');
                        } else if (response.color == 'black') {
                            element.children().removeClass(\"fas\");
                            element.children().addClass(\"far\");
                            element.children().css('color', 'grey');
                        } else if (response.status == 401) {
                            window.location = \"";
        // line 819
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\";
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });
            /*document.addEventListener('gesturestart', function (e) {
                e.preventDefault();
            });*/
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
        return "annonces/listeResultat.html.twig";
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
        return array (  1428 => 819,  1407 => 801,  1382 => 779,  1369 => 769,  1283 => 686,  1130 => 536,  1116 => 524,  1094 => 504,  1080 => 493,  1075 => 491,  1070 => 489,  1065 => 488,  1055 => 487,  1043 => 483,  1033 => 482,  1024 => 478,  1022 => 477,  1013 => 470,  1011 => 469,  1008 => 468,  1005 => 467,  991 => 461,  986 => 458,  979 => 456,  977 => 455,  973 => 454,  969 => 453,  963 => 449,  957 => 447,  951 => 445,  949 => 444,  945 => 443,  939 => 439,  933 => 437,  927 => 435,  925 => 434,  915 => 433,  910 => 430,  904 => 428,  898 => 426,  896 => 425,  890 => 421,  880 => 416,  874 => 414,  869 => 412,  865 => 411,  853 => 408,  848 => 405,  846 => 404,  840 => 400,  835 => 399,  833 => 398,  824 => 392,  819 => 390,  815 => 389,  810 => 387,  806 => 386,  799 => 382,  795 => 381,  791 => 380,  786 => 378,  782 => 376,  780 => 375,  773 => 370,  767 => 367,  763 => 365,  760 => 364,  755 => 361,  749 => 360,  745 => 358,  739 => 357,  736 => 356,  733 => 355,  729 => 354,  725 => 352,  723 => 351,  717 => 347,  711 => 346,  707 => 344,  701 => 343,  698 => 342,  695 => 341,  691 => 340,  687 => 339,  679 => 338,  677 => 337,  669 => 332,  665 => 331,  658 => 326,  655 => 325,  650 => 323,  647 => 322,  642 => 320,  639 => 319,  636 => 318,  633 => 317,  630 => 316,  628 => 315,  603 => 293,  596 => 289,  588 => 286,  584 => 284,  569 => 282,  564 => 281,  560 => 280,  556 => 279,  551 => 276,  536 => 274,  531 => 273,  527 => 272,  523 => 271,  515 => 266,  507 => 260,  497 => 259,  481 => 257,  470 => 254,  460 => 253,  251 => 51,  247 => 50,  243 => 49,  239 => 48,  234 => 46,  229 => 44,  223 => 42,  213 => 41,  195 => 40,  184 => 35,  180 => 34,  175 => 33,  171 => 31,  166 => 29,  133 => 27,  128 => 25,  122 => 22,  117 => 20,  111 => 17,  106 => 15,  101 => 14,  91 => 13,  83 => 1,  73 => 8,  71 => 7,  69 => 6,  67 => 5,  63 => 4,  59 => 3,  57 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'otherLayout.html.twig' %}
    {% set page_sub_name = \"Annonces\" %}
    {% if nom_commercial is defined and nom_commercial %} {% set page_sub_name =  nom_commercial %}{% else %}
        {% for prestation in prestations %}
            {% if prestation.slug == type_prestation %}
                {% if app.request.locale == 'en' and prestation.name != '' %}
                    {% set page_sub_name = prestation.content %}
                {% elseif prestation.name != '' %}{% set page_sub_name = prestation.name %}
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endif %}
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <meta name=\"title\" content=\"Trust &amp; Market | {{ page_sub_name }}\">
    <meta name=\"description\"
          content=\"{% for prestation in prestations %}{% if prestation.slug == type_prestation %}{% if app.request.locale == 'en' and prestation.name != '' %}{{ prestation.content }}{% else %}{{ prestation.name }}{% endif %}{% endif %}{% endfor %} - {% for prestation in sous_categories %}{% if prestation.slug == services_proposes %}{% if app.request.locale == 'en' and prestation.name != '' %}{{ prestation.content }}{% else %}{{ prestation.name }}{% endif %}{% endif %}{% endfor %}\">
    <link rel=\"canonical\"
          href=\"{{ absolute_url(path('annonces_listeAnnonces',{type_prestation:type_prestation,services_proposes: services_proposes, code_postal_ville: code_postal_ville, noPage: noPage})) }}\">
    <link rel=\"shortlink\"
          href=\"{{ absolute_url(path('annonces_listeAnnonces',{type_prestation:type_prestation,services_proposes: services_proposes, code_postal_ville: code_postal_ville, noPage: noPage})) }}\">
    {# OG CONTENT #}
    <meta property=\"og:title\" content=\"Trust &amp; Market |\t{{ page_sub_name }}\">
    <meta property=\"og:description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'toutes-annonces'}) }}\">
    <meta property=\"og:image\" content=\"{{ asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png') }}\">
    <meta propery=\"og:type\" content=\"website\">
    {# END OG CONTENT #}
{% endblock %}

{% block title %}Trust &amp; Market | {{ page_sub_name }}{% endblock %}
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

        .card-footer {
            text-align: end;
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

        .p-pop-titre1,
        .p-pop-titre2 {
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

        .keyword_search {
            width: 100%;
            background-color: #ffffff;
            position: relative;
            border-radius: 4rem;
            padding: 10px;
            margin-top: 2rem;
            border: 1px solid #262626;
        }

        .keyword_search .search__box {
            width: 85%;
            background: none;
            resize: none;
            color: #000;
            font-size: 13px;
            border-radius: 2rem;
            outline: none;
            border: none;
            position: relative;
            transition: all .75s ease-in;
            cursor: pointer;
            margin-top: 0px !important;
            text-align: left !important;
            text-align-last: left !important;
            touch-action: manipulation;
        }

        .keyword_search .search__icon {
            cursor: pointer;
            position: absolute;
            color: #ff7e10;
            padding: 0.7rem;
            border-radius: 50%;
            background-color: #262626;
            top: 3px;
        }

        .keyword_search .show {
            width: 85%;
            border: 1px solid #ff7e10;
        }


        .btn-wish {
            background: transparent;
            border: none;
            /* margin: 87px; */
            /* font-size: 88px; */
            outline: none;
            color: grey;
        }

        .btnh1-display {
            display: flex;
            justify-content: end;
        }

        .btn i:hover {
            cursor: pointer;
        }

        button:focus {
            outline: none;
        }

        .overlay .btnh1-display {
            position: absolute;
            top: 10%;
            left: 92%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-size: 16px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        @media only screen and (max-width: 768px) {
            #custom-filter {
                padding-right: 15px !important;
                padding-left: 15px !important;
            }

        }

        .autocompleteResult {
            background: white;
            position: absolute;
            z-index: 1;
            height: 200px;
            overflow-y: auto;
            overflow-x: clip;
            width: 90%;
            border: 1px solid gray;
            border-radius: 8px;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .resultIndex a {
            width: 100%;
            height: 100%;
            display: block;
            margin: 0;
            padding: 0;
        }

        .resultIndex {
            border-bottom: 1px solid gray;
            cursor: pointer;
            padding: 10px;
        }

        .resultIndex:hover {
            background: #000;
            color: #fff;
        }

        .imgSearchResult {
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 50%;
            margin-right: 1rem;
            object-fit: cover;
        }
        .breadcrumb-h1, .breadcrumb-h2, .breadcrumb-h3 {
            font-size: inherit;  /* Keeps the font size the same as the surrounding text */
            margin: 0;  /* Removes any extra margins that come with heading tags */
            font-weight: inherit;  /* Keeps the font weight the same as the surrounding text */
            display: inline;  /* Ensures the headings behave like inline text */
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
            <div class=\"mt-5\">
                <div class=\"row\">
                    <div class=\"col-md-3 py-4 mb-4 custom-filter\" id=\"custom-filter\">
                        <h3>{{ 'form.titre'|trans({}, 'liste_annonces')|raw }}</h3>
                        <div class=\"container\">
                            <form action=\"\" id=\"filtreForm\">
                                <select name=\"type_prestation\" id=\"type_prestation2\"
                                        class=\"browser-default custom-select mr-2 mb-2\">
                                    <option value=\"\">{{ 'form.prestation'|trans({}, 'liste_annonces')|raw }}</option>
                                    {% for prestation in prestations %}
                                        <option {% if prestation.slug == type_prestation %}selected='selected'{% endif %}
                                                value=\"{{ prestation.slug }}\">{% if app.request.locale == 'en' and prestation.name != '' %}{{ prestation.content }}{% else %}{{ prestation.name }}{% endif %}</option>
                                    {% endfor %}
                                </select>
                                <select name=\"services_proposes\" id=\"services_proposes2\"
                                        class=\"browser-default custom-select mr-2 mb-2\">
                                    <option value=\"\">{{ 'form.service'|trans({}, 'liste_annonces')|raw }}</option>
                                    {% for prestation in sous_categories %}
                                        <option {% if prestation.slug == type_prestation %}selected='selected'{% endif %}
                                                value=\"{{ prestation.slug }}\">{% if app.request.locale == 'en' and prestation.name != '' %}{{ prestation.content }}{% else %}{{ prestation.name }}{% endif %}</option>
                                    {% endfor %}
                                </select>
                                <input type=\"text\"
                                       value=\"{% if code_postal_ville != '' %}{{ code_postal_ville }}{% endif %}\"
                                       class=\"form-control\" name=\"code_postal_ville\" id=\"code_postal_ville2\"
                                       placeholder=\"Code postal et/ou Ville\">
                                <input hidden value=\"{{ noPage }}\" id=\"noPage\" class=\"noPage\" name=\"noPage\"/>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <button class=\"btn btn-lg btn-primary waves-effect waves-light col-md-12 search-normal-btn\"
                                                type=\"sumbit\">{{ 'form.soumettre'|trans({}, 'liste_annonces')|raw }}</button>
                                        <button class=\"btn btn-lg btn-primary waves-effect waves-light col-md-12 search-icon-btn\"
                                                type=\"sumbit\">
                                            <i class=\"fas fa-search\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class=\"autocomplete_keyword_search\">
                            <div class=\"keyword_search\">
                                <input type=\"text\" id=\"box\" placeholder=\"Recherche par mots-clés...\"
                                       class=\"search__box\"/>
                                <i class=\"fas fa-search search__icon\" id=\"icon\" onclick=\"toggleShow()\"></i>
                            </div>
                            <div class=\"autocompleteResult\">

                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" id=\"listeAnnonces\">
                        {% if p_empty_search_text is defined and p_empty_search_text %}
                            {% if nom_commercial is defined and nom_commercial %}
                                {% set p_empty_search_text = p_empty_search_text.postContent %}
                                {% set replaced_p_empty_search_text = p_empty_search_text|replace({'nom_commercial': nom_commercial}) %}
                                <div class=\"filter-text mr-2\"
                                     style=\"margin-top: -2rem;margin-bottom: 2rem;\">{{ replaced_p_empty_search_text|raw }}</div>
                            {% else %}
                                <div class=\"filter-text mr-2\"
                                     style=\"margin-top: -2rem;margin-bottom: 2rem;\">{{ p_empty_search_text.postContent|raw }}</div>
                            {% endif %}
                        {% endif %}
                        <!-- list des prestations -->
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <!-- First breadcrumb gets <h1> -->
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('annonces_listeAnnonces', {type_prestation: '',services_proposes: '',code_postal_ville: ''}) }}\">
                                        <h1 class=\"breadcrumb-h1\">{{ 'filtres.annonce'|trans({}, 'liste_annonces')|raw }}</h1>
                                    </a>
                                </li>

                                <!-- If type_prestation exists, it gets <h2> -->
                                {% if type_prestation != '' %}
                                    <li class=\"breadcrumb-item {% if services_proposes == '' %}active{{ services_proposes }}{% endif %}\" aria-current=\"page\">
                                        <a href=\"{{ path('annonces_listeAnnonces', {type_prestation: type_prestation,services_proposes: '',code_postal_ville: ''}) }}\">
                                            {% for prestation in prestations %}
                                                {% if prestation.slug == type_prestation %}
                                                    <h2 class=\"breadcrumb-h2\">
                                                        {% if app.request.locale == 'en' and prestation.name != '' %}{{ prestation.content }}{% else %}{{ prestation.name }}{% endif %}
                                                    </h2>
                                                {% endif %}
                                            {% endfor %}
                                        </a>
                                    </li>

                                    <!-- If services_proposes exists, it gets <h3> -->
                                    {% if services_proposes != '' %}
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                            <a href=\"#\">
                                                {% for prestation in sous_categories %}
                                                    {% if prestation.slug == services_proposes %}
                                                        <h3 class=\"breadcrumb-h3\">
                                                            {% if app.request.locale == 'en' and prestation.name != '' %}{{ prestation.content }}{% else %}{{ prestation.name }}{% endif %}
                                                        </h3>
                                                    {% endif %}
                                                {% endfor %}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% elseif nom_commercial is defined and nom_commercial %}
                                    <!-- If no type_prestation, nom_commercial gets <h2> -->
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"#\"><h2 class=\"breadcrumb-h2\">{{ nom_commercial }}</h2></a>
                                    </li>
                                {% endif %}
                            </ol>


                        </nav>
                        <div class=\"row mb-12\">
                            {% include \"annonces/partialDynamicPagination.html.twig\" %}
                            <div class=\"col-md-8 text-right\">
                                <form action=\"\" class=\"form-inline float-right\">
                                    <h6 class=\"filter-text mr-2\">{{ 'filtres.titre'|trans({}, 'liste_annonces')|raw }}</h6>
                                    <select name=\"prix\" id=\"triPrix\" class=\"browser-default custom-select mr-2 mb-2\">
                                        <option value=\"all\">{{ 'filtres.prix'|trans({}, 'liste_annonces')|raw }}</option>
                                        <option value=\"0\">{{ 'filtres.croissant'|trans({}, 'liste_annonces')|raw }}</option>
                                        <option value=\"1\">{{ 'filtres.decroissant'|trans({}, 'liste_annonces')|raw }}</option>
                                    </select>&nbsp;
                                    <select name=\"date-dajout\" id=\"triDate\"
                                            class=\"browser-default custom-select mr-2 mb-2\">
                                        <option value=\"all\">{{ 'filtres.date-ajout'|trans({}, 'liste_annonces')|raw }}</option>
                                        <option value=\"1\">{{ 'filtres.recent'|trans({}, 'liste_annonces')|raw }}
                                            &gt;
                                            {{ 'filtres.ancien'|trans({}, 'liste_annonces')|raw }}</option>
                                        <option value=\"0\">{{ 'filtres.ancien'|trans({}, 'liste_annonces')|raw }}
                                            &lt;
                                            {{ 'filtres.recent'|trans({}, 'liste_annonces')|raw }}</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class=\"mt-3 row isotope owl-theme\">
                            {% if listeAnnonces is not null %}
                                {% for liste in listeAnnonces %}
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
                                                    <div class=\"btnh1-display\">
                                                        <button class=\"btn-wish btnh1\" data-id=\"{{ liste.id }}\">
                                                            {% if liste.id in text_wishlist %}<i style=\"color: red;\"
                                                                                                 class=\"fas fa-heart\"></i> {% else %}
                                                                <i class=\"far fa-heart\"></i> {% endif %}</button>
                                                    </div>
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
                                                <a target=\"_blank\" href=\"{{ path('annonces_listeAnnoncesCommercial', {nom_commercial: liste.nom_commercial, id_commercial: liste.post_author}) }}\">{{ liste.nom_commercial }}</a>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                {% endfor %}
                            {% endif %}
                        </div>
                        {% include \"annonces/partialDynamicPagination.html.twig\" %}
                    </div>
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
    <!-- RateIt Js -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/rateit/jquery.rateit.min.js') }}\"></script>

    <script>
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) { // console.log(el);
                }
            });

            function toggleShow() {
                var el = document.getElementById(\"box\");
                el.classList.toggle(\"show\");
            }

            \$(document).click(function (event) {
                var \$target = \$(event.target);
                if (!\$target.closest('.autocompleteResult').length && \$('.autocompleteResult').is(\":visible\")) {
                    {# \$('.autocompleteResult').empty(); #}
                    \$('.autocompleteResult').css('display', 'none');
                }
            });

            \$('.search__box').on('keyup', function (e) {
                const value = \$(this).val();
                \$('.autocompleteResult').empty();
                \$('.autocompleteResult').css('display', 'flex');
                \$('.autocompleteResult').html(`En cours...`);
                const data = new FormData();
                data.append(\"term\", value);
                \$.ajax({
                    url: \"{{ path('recherche') }}\",
                    type: \"POST\",
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (data) {
                        //console.log(data);
                        \$('.autocompleteResult').empty();
                        \$('.autocompleteResult').css('display', 'block');
                        if (data.length > 0) {
                            data.forEach(
                                element => {
                                    \$('.autocompleteResult').append(`
\t\t\t\t\t\t\t<div class=\"resultIndex\">
\t\t\t\t\t\t\t\t<a href=\"/fr/annonces/details/\${element.slug}\"><img src=\"\${element.image}\" class=\"imgSearchResult\">\${element.name}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t`)
                                });
                        } else {
                            \$('.autocompleteResult').css('display', 'none');
                        }
                    },
                    error: function (error) {
                        \$('.autocompleteResult').empty();
                        \$('.autocompleteResult').css('display', 'none');
                    }
                })
            })
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


// Set card title and card-body equal height
            let maxHeightbody = 0;
// card body
            \$(\".card-body\").each(function () {
                if (\$(this).height() > maxHeightbody) {
                    maxHeightbody = \$(this).height();
                }
            });
            \$(\".card-body\").height(maxHeightbody);
// Modification des données newsletter de l'utilisateur
            \$('#triPrix').on('change', function (e) {
                if (\$('#triPrix').val() == 0) {
//console.log(\$('#triPrix').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                dsb = parseInt(\$(b).find('.number').eq(0).text());
                            return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                        }));
                    });
                } else { // console.log(\$('#triPrix').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                dsb = parseInt(\$(b).find('.number').eq(0).text());
                            return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                        }));
                    });
                }

            });

            \$('#triDate').on('change', function (e) {

                if (\$('#triDate').val() == 0) { // console.log(\$('#triDate').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                            return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                        }));
                    });
                } else { // console.log(\$('#triDate').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                            return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                        }));
                    });
                }
            });

// Tri des pro
            \$('#relevance').on('change', function (e) {
                var relevanceData = \$('#relevance').val();
                switch (relevanceData) {
                    case '1':
                        break;
                    case '2':
                    case '3':
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.tri-date-pro').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.tri-date-pro').eq(0).text());
                                return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    case '4':
// console.log(\$('#relevance').val());
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.prix-indicatif').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.prix-indicatif').eq(0).text());
                                return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    case '5':
// console.log(\$('#relevance').val());
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.prix-indicatif').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.prix-indicatif').eq(0).text());
                                return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    default:
                }
            });

// Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });

            // like user profile
            \$('.like-btn').on('click', function () {
                \$(this).toggleClass('userhas-like');
            });

            \$('#filtreForm').on('submit', function (e) {
                e.preventDefault();
                if (\$.trim(\$('#type_prestation2').val()) == \"\") {
                    toastr.error('Le type de prestation est obligatoire');
                    return;
                }

                let url = \"{{ path('annonces_filtre_recherche_xhr',{ _locale : app.request.get('_locale') }) }}\";
                let type_prestation = \$('#type_prestation2').val();
                let sous_categorie = \$('#services_proposes2').val();
                let code_postal_ville = \$('#code_postal_ville2').val();
                let noPage = \$('#noPage').val();
                let page = \"resultat\";

                \$.ajax({
                    url: url,
                    method: \"post\",
                    data: {
                        type_prestation: type_prestation,
                        services_proposes: sous_categorie,
                        code_postal_ville: code_postal_ville,
                        noPage: noPage,
                        page: page
                    },
                    success: function (data) {
//console.log(data.html);
                        if (data.html) {
                            \$('#listeAnnonces').html(data.html);
                        }
                        let maxHeightTitle = 0;
                        let maxHeightbody = 0;
                        \$(\".card-body\").each(function () {
                            if (\$(this).height() > maxHeightbody) {
                                maxHeightbody = \$(this).height();
                            }
                        });
                        \$(\".card-body\").height(maxHeightbody);
                        \$('#triPrix').on('change', function (e) {
                            if (\$('#triPrix').val() == 0) {
//console.log(\$('#triPrix').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.number').eq(0).text());
                                        return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                                    }));
                                });
                            } else { // console.log(\$('#triPrix').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.number').eq(0).text());
                                        return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                                    }));
                                });
                            }

                        });

                        \$('#triDate').on('change', function (e) {

                            if (\$('#triDate').val() == 0) { // console.log(\$('#triDate').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                                        return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                                    }));
                                });
                            } else { // console.log(\$('#triDate').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                                        return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                                    }));
                                });
                            }
                        });
// Tri des pro
                    },
                    error: function (xhr) {
                        console.error(xhr);
                    }
                });
            });

            \$('#type_prestation2').on('change', function () {
                let lang = \$('#page_lang').val();
                let id = \$(this).val();
                let url = \"{{ path('annonces_get_sous_categories_xhr',{ _locale : app.request.get('_locale') }) }}\";

                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        type_prestation: id
                    },
                    success: function (data) {
                        \$('#services_proposes2').empty();
                        \$('#services_proposes2').append(\"<option value='all' disabled='disabled' selected='selected'> {{ 'home.formulaire-champs.services-proposes'|trans }}</option>\");

                        if (data.sous_categories) {
                            data.sous_categories.forEach(function (e) {
                                if (lang == 'fr') {
                                    \$('#services_proposes2').append(\"<option value='\" + e.slug + \"'>\" + e.name + \"</option>\");
                                } else {
                                    \$('#services_proposes2').append(\"<option value='\" + e.slug + \"'>\" + e.content + \"</option>\");
                                }
                            });
                        }
                    },
                    error: function (xhr) {
                        console.error(xhr);
                    }
                });
            });

            // First Like Button
            \$(document).on('click', '.btnh1', function () {
                let element = \$(this);
                //Enregistrer dans la wishlist
                let url = \"{{ path('annonces_add_remove_to_user_wishlist',{ _locale : app.request.get('_locale') }) }}\";
                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        annonce_id: \$(this).attr('data-id')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.color == 'red') {
                            element.children().removeClass(\"far\");
                            element.children().addClass(\"fas\");
                            element.children().css('color', 'red');
                        } else if (response.color == 'black') {
                            element.children().removeClass(\"fas\");
                            element.children().addClass(\"far\");
                            element.children().css('color', 'grey');
                        } else if (response.status == 401) {
                            window.location = \"{{ path('app_login') }}\";
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });
            /*document.addEventListener('gesturestart', function (e) {
                e.preventDefault();
            });*/
        });
    </script>


{% endblock %}
", "annonces/listeResultat.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/annonces/listeResultat.html.twig");
    }
}
