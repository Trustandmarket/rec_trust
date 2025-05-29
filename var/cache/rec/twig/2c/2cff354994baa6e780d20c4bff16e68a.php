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

/* annonces/partialDynamicPagination.html.twig */
class __TwigTemplate_e3ba2eb71c34d14e664fbba257731299 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/partialDynamicPagination.html.twig"));

        // line 1
        yield "                                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["listeAnnonces"]) || array_key_exists("listeAnnonces", $context) ? $context["listeAnnonces"] : (function () { throw new RuntimeError('Variable "listeAnnonces" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "\t\t\t\t\t\t\t\t<div class=\"col-md-4\" id=\"dynamicPagination>
\t\t\t\t\t\t\t\t\t<nav aria-label=\"...\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 6
            if ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 6, $this->source); })()))) {
                // line 7
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link ";
                if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 7, $this->source); })()) == 1)) {
                    yield "disabled";
                }
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                 // line 8
(isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 8, $this->source); })()), "id_commercial" => (isset($context["id_commercial"]) || array_key_exists("id_commercial", $context) ? $context["id_commercial"] : (function () { throw new RuntimeError('Variable "id_commercial" does not exist.', 8, $this->source); })()), "noPage" => (                // line 9
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 9, $this->source); })()) - 1)]), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   tabindex=\"-1\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 12
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link ";
                if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 12, $this->source); })()) == 1)) {
                    yield "disabled";
                }
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                 // line 13
(isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 13, $this->source); })()), "services_proposes" =>                 // line 14
(isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 14, $this->source); })()), "code_postal_ville" =>                 // line 15
(isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 15, $this->source); })()), "noPage" => (                // line 16
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 16, $this->source); })()) - 1)]), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   tabindex=\"-1\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 19
            yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 20
            if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 20, $this->source); })()) > 1)) {
                // line 21
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 22
                if ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 22, $this->source); })()))) {
                    // line 23
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                     // line 24
(isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 24, $this->source); })()), "id_commercial" => (isset($context["id_commercial"]) || array_key_exists("id_commercial", $context) ? $context["id_commercial"] : (function () { throw new RuntimeError('Variable "id_commercial" does not exist.', 24, $this->source); })()), "noPage" => 1]), "html", null, true);
                    // line 25
                    yield "\">1<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 27
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                     // line 28
(isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 28, $this->source); })()), "services_proposes" =>                     // line 29
(isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 29, $this->source); })()), "code_postal_ville" =>                     // line 30
(isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 30, $this->source); })()), "noPage" => 1]), "html", null, true);
                    // line 31
                    yield "\">1<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 33
                yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 35
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 35, $this->source); })()) > 2)) {
                // line 36
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 40
            yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 41
            if ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 41, $this->source); })()))) {
                // line 42
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                 // line 43
(isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 43, $this->source); })()), "id_commercial" => (isset($context["id_commercial"]) || array_key_exists("id_commercial", $context) ? $context["id_commercial"] : (function () { throw new RuntimeError('Variable "id_commercial" does not exist.', 43, $this->source); })()), "noPage" =>                 // line 44
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 44, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 44, $this->source); })()), "html", null, true);
                yield "<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 46
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                 // line 47
(isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 47, $this->source); })()), "services_proposes" =>                 // line 48
(isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 48, $this->source); })()), "code_postal_ville" =>                 // line 49
(isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 49, $this->source); })()), "noPage" =>                 // line 50
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 50, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 50, $this->source); })()), "html", null, true);
                yield "<span class=\"sr-only\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
            if ((((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 54, $this->source); })()) - (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 54, $this->source); })())) > 1)) {
                // line 55
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 59
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 59, $this->source); })()) - (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 59, $this->source); })())) > 0)) {
                // line 60
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 61
                if ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 61, $this->source); })()))) {
                    // line 62
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                     // line 63
(isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 63, $this->source); })()), "id_commercial" => (isset($context["id_commercial"]) || array_key_exists("id_commercial", $context) ? $context["id_commercial"] : (function () { throw new RuntimeError('Variable "id_commercial" does not exist.', 63, $this->source); })()), "noPage" =>                     // line 64
(isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 64, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 64, $this->source); })()), "html", null, true);
                    yield "<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 66
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                     // line 67
(isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 67, $this->source); })()), "services_proposes" =>                     // line 68
(isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 68, $this->source); })()), "code_postal_ville" =>                     // line 69
(isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 69, $this->source); })()), "noPage" =>                     // line 70
(isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 70, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield "<span class=\"sr-only\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 73
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 76
            yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item ";
            if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 76, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 76, $this->source); })()))) {
                yield "disabled";
            }
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 77
            if ((array_key_exists("nom_commercial", $context) && (isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 77, $this->source); })()))) {
                // line 78
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                 // line 79
(isset($context["nom_commercial"]) || array_key_exists("nom_commercial", $context) ? $context["nom_commercial"] : (function () { throw new RuntimeError('Variable "nom_commercial" does not exist.', 79, $this->source); })()), "id_commercial" => (isset($context["id_commercial"]) || array_key_exists("id_commercial", $context) ? $context["id_commercial"] : (function () { throw new RuntimeError('Variable "id_commercial" does not exist.', 79, $this->source); })()), "noPage" => (                // line 80
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 80, $this->source); })()) + 1)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
                yield "<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 82
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                 // line 83
(isset($context["type_prestation"]) || array_key_exists("type_prestation", $context) ? $context["type_prestation"] : (function () { throw new RuntimeError('Variable "type_prestation" does not exist.', 83, $this->source); })()), "services_proposes" =>                 // line 84
(isset($context["services_proposes"]) || array_key_exists("services_proposes", $context) ? $context["services_proposes"] : (function () { throw new RuntimeError('Variable "services_proposes" does not exist.', 84, $this->source); })()), "code_postal_ville" =>                 // line 85
(isset($context["code_postal_ville"]) || array_key_exists("code_postal_ville", $context) ? $context["code_postal_ville"] : (function () { throw new RuntimeError('Variable "code_postal_ville" does not exist.', 85, $this->source); })()), "noPage" => (                // line 86
(isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 86, $this->source); })()) + 1)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t";
        }
        // line 94
        yield "\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/partialDynamicPagination.html.twig";
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
        return array (  245 => 94,  238 => 89,  230 => 86,  229 => 85,  228 => 84,  227 => 83,  225 => 82,  218 => 80,  217 => 79,  215 => 78,  213 => 77,  206 => 76,  201 => 73,  193 => 70,  192 => 69,  191 => 68,  190 => 67,  188 => 66,  181 => 64,  180 => 63,  178 => 62,  176 => 61,  173 => 60,  170 => 59,  164 => 55,  162 => 54,  159 => 53,  151 => 50,  150 => 49,  149 => 48,  148 => 47,  146 => 46,  139 => 44,  138 => 43,  136 => 42,  134 => 41,  131 => 40,  125 => 36,  122 => 35,  118 => 33,  114 => 31,  112 => 30,  111 => 29,  110 => 28,  108 => 27,  104 => 25,  102 => 24,  100 => 23,  98 => 22,  95 => 21,  93 => 20,  90 => 19,  85 => 17,  81 => 16,  80 => 15,  79 => 14,  78 => 13,  72 => 12,  67 => 10,  63 => 9,  62 => 8,  56 => 7,  54 => 6,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("                                {% if listeAnnonces|length > 0 %}
\t\t\t\t\t\t\t\t<div class=\"col-md-4\" id=\"dynamicPagination>
\t\t\t\t\t\t\t\t\t<nav aria-label=\"...\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if nom_commercial is defined and nom_commercial %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link {% if noPage == 1 %}disabled{% endif %}\" href=\"{{path('annonces_listeAnnoncesCommercial',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{nom_commercial: nom_commercial, id_commercial: id_commercial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: noPage-1})}}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   tabindex=\"-1\">{{'filtres.precedent'|trans({}, 'liste_annonces') }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link {% if noPage == 1 %}disabled{% endif %}\" href=\"{{path('annonces_listeAnnonces',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{type_prestation: type_prestation,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tservices_proposes: services_proposes,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcode_postal_ville: code_postal_ville,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: noPage-1})}}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   tabindex=\"-1\">{{'filtres.precedent'|trans({}, 'liste_annonces') }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% if noPage > 1  %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if nom_commercial is defined and nom_commercial %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnoncesCommercial',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{nom_commercial: nom_commercial, id_commercial: id_commercial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: 1})}}\">1<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnonces',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{type_prestation: type_prestation,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tservices_proposes: services_proposes,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcode_postal_ville: code_postal_ville,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: 1})}}\">1<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if noPage > 2  %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if nom_commercial is defined and nom_commercial %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnoncesCommercial',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{nom_commercial: nom_commercial, id_commercial: id_commercial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: noPage})}}\">{{ noPage }}<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnonces',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{type_prestation: type_prestation,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tservices_proposes: services_proposes,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcode_postal_ville: code_postal_ville,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: noPage})}}\">{{noPage}}<span class=\"sr-only\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% if pages - noPage > 1  %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if pages - noPage > 0  %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if nom_commercial is defined and nom_commercial %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnoncesCommercial',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{nom_commercial: nom_commercial, id_commercial: id_commercial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: pages})}}\">{{ pages }}<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnonces',
\t\t\t\t\t\t\t\t\t\t\t\t\t{type_prestation: type_prestation,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tservices_proposes: services_proposes,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcode_postal_ville: code_postal_ville,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: pages})}}\">{{pages}}<span class=\"sr-only\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item {% if noPage == pages %}disabled{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if nom_commercial is defined and nom_commercial %}
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnoncesCommercial',
\t\t\t\t\t\t\t\t\t\t\t\t\t{nom_commercial: nom_commercial, id_commercial: id_commercial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: noPage+1})}}\">{{'filtres.suivant'|trans({}, 'liste_annonces') }}<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{path('annonces_listeAnnonces',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{type_prestation: type_prestation,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tservices_proposes: services_proposes,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcode_postal_ville: code_postal_ville,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnoPage: noPage+1})}}\">{{'filtres.suivant'|trans({}, 'liste_annonces') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t", "annonces/partialDynamicPagination.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/annonces/partialDynamicPagination.html.twig");
    }
}
