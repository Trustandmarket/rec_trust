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

/* profile/partials/annonces_tag.html.twig */
class __TwigTemplate_3c50c3e4f281116c2391d7322d561e53 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/partials/annonces_tag.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 2
            yield "\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('";
            // line 3
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 3), 0, [], "any", false, false, false, 3)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 3), 0, [], "any", false, false, false, 3), "guid", [], "any", false, false, false, 3), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 3), 0, [], "any", false, false, false, 3), "guid", [], "any", false, false, false, 3), "html", null, true);
            }
            yield "')\"></div>
\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t<h3>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 5), "html", null, true);
            yield "
\t\t\t\t";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 6), "html", null, true);
            yield "</h3>
\t\t\t<p class=\"fs-14\">
\t\t\t\t";
            // line 8
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "locale", [], "any", false, false, false, 8) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 8) != ""))) {
                // line 9
                yield "\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 9), "html", null, true);
                yield "
\t\t\t\t";
            } else {
                // line 11
                yield "\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 11), "html", null, true);
                yield "
\t\t\t\t";
            }
            // line 13
            yield "\t\t\t</p>
\t\t\t<h3>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 14), "html", null, true);
            yield "
\t\t\t\t";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 15), "html", null, true);
            yield "</h3>
\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 18)), "html", null, true);
            yield ",
\t\t\t\t";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 19), "html", null, true);
            yield ",
\t\t\t\t";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 20), "html", null, true);
            yield "</span>
\t\t\t<br>
\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 24)), "html", null, true);
            yield "
\t\t\t\t-
\t\t\t\t";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 26)), "html", null, true);
            yield "
\t\t\t\t(";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 27)), "html", null, true);
            yield "
\t\t\t\tdates dispo.)</span>
\t\t\t<div class=\"pt-4\">
\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t<a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"btn-group mt-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t";
            // line 43
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 43)) > 8) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 43, $this->source); })()) == "publish"))) {
                // line 44
                yield "\t\t\t\t\t\t\t<a href=\"";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 44)) > 8)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 44)]), "html", null, true);
                }
                yield "\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.voir_annonce"), "html", null, true);
                yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 49
            yield "\t\t\t\t\t</div>

\t\t\t\t\t<div ";
            // line 51
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorieParentType", [], "any", false, false, false, 51) == "product_cat") && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 51, $this->source); })()) == "publish"))) {
                yield " hidden ";
            } else {
                yield " fa-minus ";
            }
            yield " class=\"btn-group mt-2 ml-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t<a id=\"mise_en_rupture\" href=\"";
            // line 52
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 52)) > 8)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_rupture", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 52)]), "html", null, true);
            }
            yield "\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t<i class=\"fas ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 53) == 0)) {
                yield "fa-plus";
            } else {
                yield "fa-minus";
            }
            yield "\"></i>
\t\t\t\t\t\t\t";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 54) == 0)) {
                // line 55
                yield "\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.produit_disponible"), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            } else {
                // line 57
                yield "\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.rupture"), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            // line 59
            yield "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return "profile/partials/annonces_tag.html.twig";
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
        return array (  215 => 67,  202 => 59,  196 => 57,  190 => 55,  188 => 54,  180 => 53,  174 => 52,  166 => 51,  162 => 49,  156 => 46,  148 => 44,  146 => 43,  137 => 37,  129 => 32,  121 => 27,  117 => 26,  112 => 24,  105 => 20,  101 => 19,  97 => 18,  91 => 15,  87 => 14,  84 => 13,  78 => 11,  72 => 9,  70 => 8,  65 => 6,  61 => 5,  52 => 3,  49 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for a in annonces %}
\t<div class=\"row mt-3\" style=\"min-height: 200px\">
\t\t<div class=\"col-md-4 annonce-img\" style=\"background: url('{% if a.gallery.0 %}{{a.gallery.0.guid}}{% else %}{{a.images_secondaires.0.guid}}{% endif %}')\"></div>
\t\t<div class=\"col-md-8 py-2 annonce-detail\">
\t\t\t<h3>{{a.first_name}}
\t\t\t\t{{a.last_name}}</h3>
\t\t\t<p class=\"fs-14\">
\t\t\t\t{% if app.request.locale == 'en' and a.titre_en != '' %}
\t\t\t\t\t{{a.titre_en}}
\t\t\t\t{% else %}
\t\t\t\t\t{{a.titre}}
\t\t\t\t{% endif %}
\t\t\t</p>
\t\t\t<h3>{{ a.price }}
\t\t\t\t{{a.devise}}</h3>
\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t{{a.pays|country_name}},
\t\t\t\t{{a.etat}},
\t\t\t\t{{a.ville}}</span>
\t\t\t<br>
\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t{{a.calendrier|first}}
\t\t\t\t-
\t\t\t\t{{a.calendrier|last}}
\t\t\t\t({{a.calendrier|length}}
\t\t\t\tdates dispo.)</span>
\t\t\t<div class=\"pt-4\">
\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t\t<a class=\"btn btn-bg-primary btn-sm editer\" href=\"{{path('profile_EditDraftAnnounce',{id:a.id})}}\">
\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t\t<a href=\"{{path('profile_deleteDraftAnnounce',{id:a.id})}}\" class=\"btn btn-bg-primary btn-sm editer supprimer\">
\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"btn-group mt-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t{% if a.slug|length > 8 and tag == 'publish'  %}
\t\t\t\t\t\t\t<a href=\"{% if a.slug|length > 8 %}{{path('annonces_detailsAnnonce',{id:a.slug})}}{% endif %}\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t{{'general.voir_annonce'|trans}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div {% if a.categorieParentType == 'product_cat' and tag == 'publish' %} hidden {% else %} fa-minus {% endif %} class=\"btn-group mt-2 ml-2\" role=\"group\" aria-label=\"Thirth group\">
\t\t\t\t\t\t<a id=\"mise_en_rupture\" href=\"{% if a.slug|length > 8 %}{{path('annonces_rupture',{slug:a.slug})}}{% endif %}\" class=\"btn btn-bg-primary btn-sm \">
\t\t\t\t\t\t\t<i class=\"fas {% if a.rupture == 0 %}fa-plus{% else %}fa-minus{% endif %}\"></i>
\t\t\t\t\t\t\t{% if a.rupture == 0 %}
\t\t\t\t\t\t\t\t{{'general.produit_disponible'|trans}}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{'general.rupture'|trans}}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
{% endfor %}

", "profile/partials/annonces_tag.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/partials/annonces_tag.html.twig");
    }
}
