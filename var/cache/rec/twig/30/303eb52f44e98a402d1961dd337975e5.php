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

/* annonces/sousMenuAnnonces.html.twig */
class __TwigTemplate_1c695f667bf730931cf442010cc97da9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/sousMenuAnnonces.html.twig"));

        // line 1
        yield "<div class=\"col-md-4 mb-2\">
\t<ul class=\"list-group text-left px-1\">
\t\t<li class=\"list-group-item\">
\t\t\t<a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annonces");
        yield "\" class=\"prestation-list-item list-grp-head\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-titre"), "html", null, true);
        yield "</a>
\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 7
        if (((isset($context["reservationsDevisEnAttenteCount"]) || array_key_exists("reservationsDevisEnAttenteCount", $context) ? $context["reservationsDevisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttenteCount" does not exist.', 7, $this->source); })()) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservation-devis-en-attente"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-annulees\">(";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsDevisEnAttenteCount"]) || array_key_exists("reservationsDevisEnAttenteCount", $context) ? $context["reservationsDevisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "reservationsDevisEnAttenteCount" does not exist.', 9, $this->source); })()), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 14
        if (((isset($context["reservationsEnCoursCount"]) || array_key_exists("reservationsEnCoursCount", $context) ? $context["reservationsEnCoursCount"] : (function () { throw new RuntimeError('Variable "reservationsEnCoursCount" does not exist.', 14, $this->source); })()) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservations-en-cours"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-en-cours"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-cours\">(";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsEnCoursCount"]) || array_key_exists("reservationsEnCoursCount", $context) ? $context["reservationsEnCoursCount"] : (function () { throw new RuntimeError('Variable "reservationsEnCoursCount" does not exist.', 16, $this->source); })()), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 20
        if (((isset($context["reservationsTermineesCount"]) || array_key_exists("reservationsTermineesCount", $context) ? $context["reservationsTermineesCount"] : (function () { throw new RuntimeError('Variable "reservationsTermineesCount" does not exist.', 20, $this->source); })()) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservations-terminees"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-terminees"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-term\">(";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsTermineesCount"]) || array_key_exists("reservationsTermineesCount", $context) ? $context["reservationsTermineesCount"] : (function () { throw new RuntimeError('Variable "reservationsTermineesCount" does not exist.', 22, $this->source); })()), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 26
        if (((isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 26, $this->source); })()) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservations-annulees"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-annulees"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-annulees\">(";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 28, $this->source); })()), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "roles", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 34
            yield "\t\t\t";
            if ((($context["r"] == "ROLE_AUTO_ENTREPRENEUR") || ($context["r"] == "ROLE_SOCIETE"))) {
                // line 35
                yield "\t\t\t\t<li class=\"list-group-item  current-menu-item\">
\t\t\t\t\t<a class=\"list-grp-head\" href=\"";
                // line 36
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annonces");
                yield "\">
\t\t\t\t\t\t";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-titre"), "html", null, true);
                yield "</a>
\t\t\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 40
                if (((isset($context["annoncesBrouillonCount"]) || array_key_exists("annoncesBrouillonCount", $context) ? $context["annoncesBrouillonCount"] : (function () { throw new RuntimeError('Variable "annoncesBrouillonCount" does not exist.', 40, $this->source); })()) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-en-brouillon"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-brouillon"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-brll\">(";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesBrouillonCount"]) || array_key_exists("annoncesBrouillonCount", $context) ? $context["annoncesBrouillonCount"] : (function () { throw new RuntimeError('Variable "annoncesBrouillonCount" does not exist.', 42, $this->source); })()), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 47
                if (((isset($context["annoncesModerationCount"]) || array_key_exists("annoncesModerationCount", $context) ? $context["annoncesModerationCount"] : (function () { throw new RuntimeError('Variable "annoncesModerationCount" does not exist.', 47, $this->source); })()) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-en-moderation"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-moderation"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-mod\">(";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesModerationCount"]) || array_key_exists("annoncesModerationCount", $context) ? $context["annoncesModerationCount"] : (function () { throw new RuntimeError('Variable "annoncesModerationCount" does not exist.', 49, $this->source); })()), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 54
                if (((isset($context["annoncesRejeteesCount"]) || array_key_exists("annoncesRejeteesCount", $context) ? $context["annoncesRejeteesCount"] : (function () { throw new RuntimeError('Variable "annoncesRejeteesCount" does not exist.', 54, $this->source); })()) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-rejetees"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-rejetees"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-rej\">(";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesRejeteesCount"]) || array_key_exists("annoncesRejeteesCount", $context) ? $context["annoncesRejeteesCount"] : (function () { throw new RuntimeError('Variable "annoncesRejeteesCount" does not exist.', 56, $this->source); })()), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 61
                if (((isset($context["annoncesPublieesCount"]) || array_key_exists("annoncesPublieesCount", $context) ? $context["annoncesPublieesCount"] : (function () { throw new RuntimeError('Variable "annoncesPublieesCount" does not exist.', 61, $this->source); })()) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-publiees"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-publiees"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">(";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annoncesPublieesCount"]) || array_key_exists("annoncesPublieesCount", $context) ? $context["annoncesPublieesCount"] : (function () { throw new RuntimeError('Variable "annoncesPublieesCount" does not exist.', 63, $this->source); })()), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 68
                if (((isset($context["devisEnAttenteCount"]) || array_key_exists("devisEnAttenteCount", $context) ? $context["devisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "devisEnAttenteCount" does not exist.', 68, $this->source); })()) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "devis-en-attente"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">(";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devisEnAttenteCount"]) || array_key_exists("devisEnAttenteCount", $context) ? $context["devisEnAttenteCount"] : (function () { throw new RuntimeError('Variable "devisEnAttenteCount" does not exist.', 70, $this->source); })()), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 75
                if (((isset($context["devisEnBrouillonCount"]) || array_key_exists("devisEnBrouillonCount", $context) ? $context["devisEnBrouillonCount"] : (function () { throw new RuntimeError('Variable "devisEnBrouillonCount" does not exist.', 75, $this->source); })()) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "devis-en-brouillon"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-brouillon"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">(";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devisEnBrouillonCount"]) || array_key_exists("devisEnBrouillonCount", $context) ? $context["devisEnBrouillonCount"] : (function () { throw new RuntimeError('Variable "devisEnBrouillonCount" does not exist.', 77, $this->source); })()), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"prestation-list-item list-grp-head ";
                // line 83
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "getAbonnements", [], "method", false, false, false, 83)) == 0)) {
                } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "getAbonnements", [], "method", false, false, false, 83)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 84
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "getAbonnements", [], "method", false, false, false, 84)), "isAbonnementActif", [], "method", false, false, false, 84)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 85
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "getAbonnements", [], "method", false, false, false, 85)), "getOffre", [], "method", false, false, false, 85), "isCreerAnnonce", [], "method", false, false, false, 85))) {
                } else {
                    yield "disabled";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_creerAnnonces");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-publier"), "html", null, true);
                yield "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</li>
\t\t";
            }
            // line 90
            yield "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "</ul></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/sousMenuAnnonces.html.twig";
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
        return array (  281 => 91,  275 => 90,  260 => 85,  259 => 84,  257 => 83,  248 => 77,  244 => 76,  238 => 75,  230 => 70,  226 => 69,  220 => 68,  212 => 63,  208 => 62,  202 => 61,  194 => 56,  190 => 55,  184 => 54,  176 => 49,  172 => 48,  166 => 47,  158 => 42,  154 => 41,  148 => 40,  142 => 37,  138 => 36,  135 => 35,  132 => 34,  128 => 33,  120 => 28,  116 => 27,  110 => 26,  103 => 22,  99 => 21,  93 => 20,  86 => 16,  82 => 15,  76 => 14,  68 => 9,  64 => 8,  58 => 7,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-md-4 mb-2\">
\t<ul class=\"list-group text-left px-1\">
\t\t<li class=\"list-group-item\">
\t\t\t<a href=\"{{path('profile_annonces')}}\" class=\"prestation-list-item list-grp-head\">{{'profil-utilisateur.annonces.reservations-titre'|trans}}</a>
\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"{% if reservationsDevisEnAttenteCount != 0 %}{{path('profile_annoncesTag',{tag:'reservation-devis-en-attente'})}}{% endif %}\">
\t\t\t\t\t\t{{'profil-utilisateur.annonces.devis-en-attente'|trans}}
\t\t\t\t\t\t<span class=\"rsv-en-annulees\">({{reservationsDevisEnAttenteCount}})</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"{% if reservationsEnCoursCount != 0 %}{{path('profile_annoncesTag',{tag:'reservations-en-cours'})}}{% endif %}\">
\t\t\t\t\t\t{{'profil-utilisateur.annonces.reservations-en-cours'|trans}}
\t\t\t\t\t\t<span class=\"rsv-en-cours\">({{reservationsEnCoursCount}})</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"{% if reservationsTermineesCount != 0 %}{{path('profile_annoncesTag',{tag:'reservations-terminees'})}}{% endif %}\">
\t\t\t\t\t\t{{'profil-utilisateur.annonces.reservations-terminees'|trans}}
\t\t\t\t\t\t<span class=\"rsv-en-term\">({{reservationsTermineesCount}})</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"{% if reservationsAnnuleesCount != 0 %}{{path('profile_annoncesTag',{tag:'reservations-annulees'})}}{% endif %}\">
\t\t\t\t\t\t{{'profil-utilisateur.annonces.reservations-annulees'|trans}}
\t\t\t\t\t\t<span class=\"rsv-en-annulees\">({{reservationsAnnuleesCount}})</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t{% for r in app.user.roles %}
\t\t\t{% if r == 'ROLE_AUTO_ENTREPRENEUR' or r == 'ROLE_SOCIETE' %}
\t\t\t\t<li class=\"list-group-item  current-menu-item\">
\t\t\t\t\t<a class=\"list-grp-head\" href=\"{{path('profile_annonces')}}\">
\t\t\t\t\t\t{{'profil-utilisateur.annonces.annonces-titre'|trans}}</a>
\t\t\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"{% if annoncesBrouillonCount != 0 %}{{path('profile_annoncesTag',{'tag':'annonces-en-brouillon'})}}{% endif %}\">
\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.annonces-en-brouillon'|trans}}
\t\t\t\t\t\t\t\t<span class=\"ann-brll\">({{annoncesBrouillonCount}})</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"{% if annoncesModerationCount != 0 %}{{path('profile_annoncesTag',{'tag':'annonces-en-moderation'})}}{% endif %}\">
\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.annonces-en-moderation'|trans}}
\t\t\t\t\t\t\t\t<span class=\"ann-mod\">({{annoncesModerationCount}})</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"{% if annoncesRejeteesCount != 0 %}{{path('profile_annoncesTag',{'tag':'annonces-rejetees'})}}{% endif %}\">
\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.annonces-rejetees'|trans}}
\t\t\t\t\t\t\t\t<span class=\"ann-rej\">({{annoncesRejeteesCount}})</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"{% if annoncesPublieesCount != 0 %}{{path('profile_annoncesTag',{'tag':'annonces-publiees'})}}{% endif %}\">
\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.annonces-publiees'|trans}}
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">({{annoncesPublieesCount}})</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"{% if devisEnAttenteCount != 0 %}{{path('profile_annoncesTag',{'tag':'devis-en-attente'})}}{% endif %}\">
\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.devis-en-attente'|trans}}
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">({{devisEnAttenteCount}})</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"{% if devisEnBrouillonCount != 0 %}{{path('profile_annoncesTag',{'tag':'devis-en-brouillon'})}}{% endif %}\">
\t\t\t\t\t\t\t\t{{'profil-utilisateur.annonces.devis-en-brouillon'|trans}}
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">({{devisEnBrouillonCount}})</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"prestation-list-item list-grp-head {% if app.user.getAbonnements()|length == 0 %}{% elseif app.user.getAbonnements()|length > 0
\t\t\tand app.user.getAbonnements()|last.isAbonnementActif()
\t\t\tand app.user.getAbonnements()|last.getOffre().isCreerAnnonce() %}{% else %}disabled{% endif %}\" href=\"{{path('profile_creerAnnonces')}}\">{{'profil-utilisateur.annonces.annonces-publier'|trans}}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</li>
\t\t{% endif %}
\t{% endfor %}
</ul></div>
", "annonces/sousMenuAnnonces.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/annonces/sousMenuAnnonces.html.twig");
    }
}
