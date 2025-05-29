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

/* annonces/liste_resultat_content.html.twig */
class __TwigTemplate_d101d3b4fc97f42099e570351cbc8cc0 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/liste_resultat_content.html.twig"));

        // line 1
        yield "<!-- list des profil -->
<!-- list des prestations -->

";
        // line 4
        if ((isset($context["p_empty_search_text"]) || array_key_exists("p_empty_search_text", $context) ? $context["p_empty_search_text"] : (function () { throw new RuntimeError('Variable "p_empty_search_text" does not exist.', 4, $this->source); })())) {
            // line 5
            yield "    <div class=\"filter-text mr-2\"
         style=\"margin-top: -2rem;margin-bottom: 3rem;\">";
            // line 6
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["p_empty_search_text"]) || array_key_exists("p_empty_search_text", $context) ? $context["p_empty_search_text"] : (function () { throw new RuntimeError('Variable "p_empty_search_text" does not exist.', 6, $this->source); })()), "postContent", [], "any", false, false, false, 6);
            yield "</div>
";
        }
        // line 8
        yield "<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <!-- First breadcrumb gets <h1> -->
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        yield "\">
                <h1 class=\"breadcrumb-h1\">";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.annonce", [], "liste_annonces");
        yield "</h1>
            </a>
        </li>

        <!-- If type_prestation exists, it gets <h2> -->
        ";
        // line 18
        if (((isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 18, $this->source); })()) != "")) {
            // line 19
            yield "            <li class=\"breadcrumb-item\" aria-current=\"page\">
                <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 20, $this->source); })()), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "\">
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 22
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 22) == (isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 22, $this->source); })()))) {
                    // line 23
                    yield "                            <h2 class=\"breadcrumb-h2\">
                                ";
                    // line 24
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 24) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 24), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 24), "html", null, true);
                    }
                    // line 25
                    yield "                            </h2>
                        ";
                }
                // line 27
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                </a>
            </li>
        ";
        }
        // line 31
        yield "
        <!-- If services_proposes exists, it gets <h3> -->
        ";
        // line 33
        if (((isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 33, $this->source); })()) != "")) {
            // line 34
            yield "            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                <a href=\"#\">
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_categories"]) || array_key_exists("sous_categories", $context) ? $context["sous_categories"] : (function () { throw new RuntimeError('Variable "sous_categories" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 37
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 37) == (isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 37, $this->source); })()))) {
                    // line 38
                    yield "                            <h3 class=\"breadcrumb-h3\">
                                ";
                    // line 39
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "locale", [], "any", false, false, false, 39) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 39) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 39), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 39), "html", null, true);
                    }
                    // line 40
                    yield "                            </h3>
                        ";
                }
                // line 42
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                </a>
            </li>
        ";
        }
        // line 46
        yield "    </ol>

</nav>
<div class=\"row mb-4\">
    ";
        // line 50
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/liste_resultat_content.html.twig", 50)->unwrap()->yield($context);
        // line 51
        yield "    <div class=\"col-md-8 text-right\">
        <form action=\"\" class=\"form-inline float-right\">
            <h6 class=\"filter-text mr-2\">";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.titre", [], "liste_annonces");
        yield "</h6>
            <select name=\"prix\" id=\"triPrix\" class=\"browser-default custom-select mr-2 mb-2\">
                <option value=\"all\">";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.prix", [], "liste_annonces");
        yield "</option>
                <option value=\"0\">";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.croissant", [], "liste_annonces");
        yield "</option>
                <option value=\"1\">";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.decroissant", [], "liste_annonces");
        yield "</option>
            </select>&nbsp;
            <select name=\"date-dajout\" id=\"triDate\" class=\"browser-default custom-select mr-2 mb-2\">
                <option value=\"all\">";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.date-ajout", [], "liste_annonces");
        yield "</option>
                <option value=\"1\">";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "
                    &gt; ";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "</option>
                <option value=\"0\">";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "
                    &lt; ";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "</option>
            </select>
        </form>
    </div>
</div>
<div class=\"row isotope owl-theme\">
    ";
        // line 70
        if ( !(null === (isset($context["listeAnnonces"]) || array_key_exists("listeAnnonces", $context) ? $context["listeAnnonces"] : (function () { throw new RuntimeError('Variable "listeAnnonces" does not exist.', 70, $this->source); })()))) {
            // line 71
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listeAnnonces"]) || array_key_exists("listeAnnonces", $context) ? $context["listeAnnonces"] : (function () { throw new RuntimeError('Variable "listeAnnonces" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                // line 72
                yield "            <div class=\"col-md-4 mb-5 clearfix isotope-grid\">
                <!-- Card -->
                <div class=\"card\">
                    <!-- Card image -->
                    ";
                // line 76
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 76))) {
                    // line 77
                    yield "                        <div class=\"view overlay isotope-item\" style=\"height:160px; border-bottom: 4px solid #f17b30\">
                            <img loading=\"lazy\" class=\"card-img-top\" width=\"100%\"
                                 src=\"";
                    // line 79
                    if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 79))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 79), 0, [], "any", false, false, false, 79), "guid", [], "any", false, false, false, 79), ["www." => ""]), "html", null, true);
                    } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 79))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 79), 0, [], "any", false, false, false, 79), "guid", [], "any", false, false, false, 79), ["www." => ""]), "html", null, true);
                    } else {
                        yield "https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg";
                    }
                    yield "\"
                                 alt=\"Card image cap\">
                            <div class=\"btnh1-display\">
                                <button class=\"btn-wish btnh1\" data-id=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 82), "html", null, true);
                    yield "\">
                                    ";
                    // line 83
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 83), (isset($context["text_wishlist"]) || array_key_exists("text_wishlist", $context) ? $context["text_wishlist"] : (function () { throw new RuntimeError('Variable "text_wishlist" does not exist.', 83, $this->source); })()))) {
                        yield "<i style=\"color: red;\"
                                                                         class=\"fas fa-heart\"></i> ";
                    } else {
                        // line 85
                        yield "                                        <i class=\"far fa-heart\"></i> ";
                    }
                    yield "</button>
                            </div>
                            <a href=\"";
                    // line 87
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 87) != "")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 87)]), "html", null, true);
                    }
                    yield "\">
                                <div class=\"mask rgba-white-slight\"></div>
                            </a>
                        </div>
                    ";
                }
                // line 92
                yield "                    <!-- Card content -->
                    <div class=\"card-body\">
                        <!-- Title -->
                        <h4 class=\"card-title fs-18\">";
                // line 95
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "locale", [], "any", false, false, false, 95) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 95) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 95), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre", [], "any", false, false, false, 95), "html", null, true);
                }
                yield "</h4>
                        <!-- Category -->
                        <h5 class=\"card-sub-title fs-15\"><a
                                    href=\"";
                // line 98
                if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 98)) == "produits")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 99), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 100
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "locale", [], "any", false, false, false, 100) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 100) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 100), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 100), "html", null, true);
                }
                yield "</a>
                        </h5>
                        <!-- Sub Category -->
                        <h5 class=\"card-sub-category fs-18\">
                            <a href=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 104), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorieSlug", [], "any", false, false, false, 104), "code_postal_ville" => ""]), "html", null, true);
                yield "\"> ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "locale", [], "any", false, false, false, 104) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 104) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 104), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie", [], "any", false, false, false, 104), "html", null, true);
                }
                yield "</a>
                        </h5>
                        <!-- Price -->
                        <p class=\"annonce-price fs-24\"><span data-stars=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 107), 0), "html", null, true);
                yield "\" class=\"number\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 107), "html", null, true);
                yield "</span> ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 107) != null)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 107), "html", null, true);
                } else {
                    yield "€";
                }
                // line 108
                yield "                        </p>
                    </div>
                    <div class=\"card-footer bg-transparent\">
                        <a target=\"_blank\" href=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 111), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_author", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 111), "html", null, true);
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
            // line 117
            yield "    ";
        }
        // line 118
        yield "</div>
";
        // line 119
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/liste_resultat_content.html.twig", 119)->unwrap()->yield($context);
        // line 120
        yield "<!-- list des prestations -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/liste_resultat_content.html.twig";
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
        return array (  358 => 120,  356 => 119,  353 => 118,  350 => 117,  336 => 111,  331 => 108,  321 => 107,  309 => 104,  297 => 100,  292 => 99,  286 => 98,  276 => 95,  271 => 92,  261 => 87,  255 => 85,  250 => 83,  246 => 82,  234 => 79,  230 => 77,  228 => 76,  222 => 72,  217 => 71,  215 => 70,  206 => 64,  202 => 63,  198 => 62,  194 => 61,  190 => 60,  184 => 57,  180 => 56,  176 => 55,  171 => 53,  167 => 51,  165 => 50,  159 => 46,  154 => 43,  148 => 42,  144 => 40,  138 => 39,  135 => 38,  132 => 37,  128 => 36,  124 => 34,  122 => 33,  118 => 31,  113 => 28,  107 => 27,  103 => 25,  97 => 24,  94 => 23,  91 => 22,  87 => 21,  83 => 20,  80 => 19,  78 => 18,  70 => 13,  66 => 12,  60 => 8,  55 => 6,  52 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- list des profil -->
<!-- list des prestations -->

{% if p_empty_search_text %}
    <div class=\"filter-text mr-2\"
         style=\"margin-top: -2rem;margin-bottom: 3rem;\">{{ p_empty_search_text.postContent|raw }}</div>
{% endif %}
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
            <li class=\"breadcrumb-item\" aria-current=\"page\">
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
        {% endif %}

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
    </ol>

</nav>
<div class=\"row mb-4\">
    {% include \"annonces/partialDynamicPagination.html.twig\" %}
    <div class=\"col-md-8 text-right\">
        <form action=\"\" class=\"form-inline float-right\">
            <h6 class=\"filter-text mr-2\">{{ 'filtres.titre'|trans({}, 'liste_annonces')|raw }}</h6>
            <select name=\"prix\" id=\"triPrix\" class=\"browser-default custom-select mr-2 mb-2\">
                <option value=\"all\">{{ 'filtres.prix'|trans({}, 'liste_annonces')|raw }}</option>
                <option value=\"0\">{{ 'filtres.croissant'|trans({}, 'liste_annonces')|raw }}</option>
                <option value=\"1\">{{ 'filtres.decroissant'|trans({}, 'liste_annonces')|raw }}</option>
            </select>&nbsp;
            <select name=\"date-dajout\" id=\"triDate\" class=\"browser-default custom-select mr-2 mb-2\">
                <option value=\"all\">{{ 'filtres.date-ajout'|trans({}, 'liste_annonces')|raw }}</option>
                <option value=\"1\">{{ 'filtres.recent'|trans({}, 'liste_annonces')|raw }}
                    &gt; {{ 'filtres.ancien'|trans({}, 'liste_annonces')|raw }}</option>
                <option value=\"0\">{{ 'filtres.ancien'|trans({}, 'liste_annonces')|raw }}
                    &lt; {{ 'filtres.recent'|trans({}, 'liste_annonces')|raw }}</option>
            </select>
        </form>
    </div>
</div>
<div class=\"row isotope owl-theme\">
    {% if listeAnnonces is not null %}
        {% for liste in listeAnnonces %}
            <div class=\"col-md-4 mb-5 clearfix isotope-grid\">
                <!-- Card -->
                <div class=\"card\">
                    <!-- Card image -->
                    {% if liste.gallery is not null %}
                        <div class=\"view overlay isotope-item\" style=\"height:160px; border-bottom: 4px solid #f17b30\">
                            <img loading=\"lazy\" class=\"card-img-top\" width=\"100%\"
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
                        <h4 class=\"card-title fs-18\">{% if app.request.locale == 'en' and liste.titre_en != '' %}{{ liste.titre_en }}{% else %}{{ liste.titre }}{% endif %}</h4>
                        <!-- Category -->
                        <h5 class=\"card-sub-title fs-15\"><a
                                    href=\"{% if liste.categorieParent|lower == 'produits' %}{{ path('annonces_listeAnnonces',{type_prestation:'produits',services_proposes: '',code_postal_ville: ''}) }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}{{ path('annonces_listeAnnonces', {type_prestation: liste.categorieParentSlug,services_proposes: '',code_postal_ville: ''}) }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}\">{% if app.request.locale == 'en' and liste.categorieParent_en != '' %}{{ liste.categorieParent_en }}{% else %}{{ liste.categorieParent }}{% endif %}</a>
                        </h5>
                        <!-- Sub Category -->
                        <h5 class=\"card-sub-category fs-18\">
                            <a href=\"{{ path('annonces_listeAnnonces', {type_prestation: liste.categorieParentSlug,services_proposes: liste.sousCategorieSlug,code_postal_ville: ''}) }}\"> {% if app.request.locale == 'en' and liste.sousCategorie_en != '' %}{{ liste.sousCategorie_en }}{% else %}{{ liste.sousCategorie }}{% endif %}</a>
                        </h5>
                        <!-- Price -->
                        <p class=\"annonce-price fs-24\"><span data-stars=\"{{ liste.price|round(0) }}\" class=\"number\">{{ liste.price }}</span> {% if liste.devise != null %}{{ liste.devise }}{% else %}€{% endif %}
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
<!-- list des prestations -->", "annonces/liste_resultat_content.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/annonces/liste_resultat_content.html.twig");
    }
}
