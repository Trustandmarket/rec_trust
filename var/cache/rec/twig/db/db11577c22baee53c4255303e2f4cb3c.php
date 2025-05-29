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

/* profile/partials/pagination_bloc_reservations_annulees.html.twig */
class __TwigTemplate_75f9feb8a418a88b8ec47e829667d23e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/partials/pagination_bloc_reservations_annulees.html.twig"));

        // line 1
        yield "<nav aria-label=\" ...\">
\t\t<ul class=\"pagination\">
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link ";
        // line 4
        if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 4, $this->source); })()) == 1)) {
            yield "disabled";
        }
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => ((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 4, $this->source); })()) - 1), "nombreDeLignes" =>         // line 5
(isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 5, $this->source); })()), "tag" => "wc-cancelled"]), "html", null, true);
        yield "\" tabindex=\"-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
        yield "</a>
\t\t\t</li>
\t\t\t";
        // line 7
        if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 7, $this->source); })()) > 1)) {
            // line 8
            yield "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => 1, "nombreDeLignes" =>             // line 10
(isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 10, $this->source); })()), "tag" => "wc-cancelled"]), "html", null, true);
            yield "\">1<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 14
        yield "\t\t\t";
        if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 14, $this->source); })()) > 2)) {
            // line 15
            yield "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 20
        yield "\t\t\t<li class=\"page-item active\">
\t\t\t\t<a class=\"page-link\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 21, $this->source); })()), "nombreDeLignes" =>         // line 22
(isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 22, $this->source); })()), "tag" => "wc-cancelled"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "<span class=\"sr-only\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 25
        if ((((isset($context["pages_reservations_cancelled"]) || array_key_exists("pages_reservations_cancelled", $context) ? $context["pages_reservations_cancelled"] : (function () { throw new RuntimeError('Variable "pages_reservations_cancelled" does not exist.', 25, $this->source); })()) - (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 25, $this->source); })())) > 1)) {
            // line 26
            yield "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</li>
\t\t";
        }
        // line 32
        yield "\t\t";
        if ((((isset($context["pages_reservations_cancelled"]) || array_key_exists("pages_reservations_cancelled", $context) ? $context["pages_reservations_cancelled"] : (function () { throw new RuntimeError('Variable "pages_reservations_cancelled" does not exist.', 32, $this->source); })()) - (isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 32, $this->source); })())) > 0)) {
            // line 33
            yield "\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => (isset($context["pages_reservations_cancelled"]) || array_key_exists("pages_reservations_cancelled", $context) ? $context["pages_reservations_cancelled"] : (function () { throw new RuntimeError('Variable "pages_reservations_cancelled" does not exist.', 34, $this->source); })()), "nombreDeLignes" =>             // line 35
(isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 35, $this->source); })()), "tag" => "wc-cancelled"]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages_reservations_cancelled"]) || array_key_exists("pages_reservations_cancelled", $context) ? $context["pages_reservations_cancelled"] : (function () { throw new RuntimeError('Variable "pages_reservations_cancelled" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "<span class=\"sr-only\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 39
        yield "\t\t<li class=\"page-item ";
        if (((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 39, $this->source); })()) == (isset($context["pages_reservations_cancelled"]) || array_key_exists("pages_reservations_cancelled", $context) ? $context["pages_reservations_cancelled"] : (function () { throw new RuntimeError('Variable "pages_reservations_cancelled" does not exist.', 39, $this->source); })()))) {
            yield "disabled";
        }
        yield "\">
\t\t\t<a class=\"page-link\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => ((isset($context["noPage"]) || array_key_exists("noPage", $context) ? $context["noPage"] : (function () { throw new RuntimeError('Variable "noPage" does not exist.', 40, $this->source); })()) + 1), "nombreDeLignes" =>         // line 41
(isset($context["reservationsAnnuleesCount"]) || array_key_exists("reservationsAnnuleesCount", $context) ? $context["reservationsAnnuleesCount"] : (function () { throw new RuntimeError('Variable "reservationsAnnuleesCount" does not exist.', 41, $this->source); })()), "tag" => "wc-cancelled"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
        yield "
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/partials/pagination_bloc_reservations_annulees.html.twig";
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
        return array (  131 => 41,  130 => 40,  123 => 39,  114 => 35,  113 => 34,  110 => 33,  107 => 32,  99 => 26,  97 => 25,  89 => 22,  88 => 21,  85 => 20,  78 => 15,  75 => 14,  68 => 10,  67 => 9,  64 => 8,  62 => 7,  55 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav aria-label=\" ...\">
\t\t<ul class=\"pagination\">
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link {% if noPage == 1 %}disabled{% endif %}\" href=\"{{path('profile_listeAnnoncesPagine', {noPage: noPage-1,
\t\t\t\tnombreDeLignes: reservationsAnnuleesCount, tag: 'wc-cancelled'})}}\" tabindex=\"-1\">{{'filtres.precedent'|trans({}, 'liste_annonces') }}</a>
\t\t\t</li>
\t\t\t{% if noPage > 1  %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{path('profile_listeAnnoncesPagine', {noPage: 1,
\t\t\t\t\tnombreDeLignes: reservationsAnnuleesCount, tag: 'wc-cancelled'})}}\">1<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{% if noPage > 2  %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t<li class=\"page-item active\">
\t\t\t\t<a class=\"page-link\" href=\"{{path('profile_listeAnnoncesPagine', {noPage: noPage,
\t\t\t\tnombreDeLignes: reservationsAnnuleesCount, tag: 'wc-cancelled'})}}\">{{noPage}}<span class=\"sr-only\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t{% if pages_reservations_cancelled - noPage > 1  %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</li>
\t\t{% endif %}
\t\t{% if pages_reservations_cancelled - noPage > 0  %}
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"{{path('profile_listeAnnoncesPagine', {noPage: pages_reservations_cancelled,
\t\t\t\tnombreDeLignes: reservationsAnnuleesCount, tag: 'wc-cancelled'})}}\">{{pages_reservations_cancelled}}<span class=\"sr-only\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}
\t\t<li class=\"page-item {% if noPage == pages_reservations_cancelled %}disabled{% endif %}\">
\t\t\t<a class=\"page-link\" href=\"{{path('profile_listeAnnoncesPagine', {noPage: noPage+1,
\t\t\tnombreDeLignes: reservationsAnnuleesCount, tag: 'wc-cancelled'})}}\">{{'filtres.suivant'|trans({}, 'liste_annonces') }}
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>", "profile/partials/pagination_bloc_reservations_annulees.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/partials/pagination_bloc_reservations_annulees.html.twig");
    }
}
