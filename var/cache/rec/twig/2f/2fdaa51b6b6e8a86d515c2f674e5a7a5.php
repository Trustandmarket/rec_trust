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

/* profile/sous_categorie.html.twig */
class __TwigTemplate_28d1ddce83483fb278c65f78bd4e3e3e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/sous_categorie.html.twig"));

        // line 1
        if (((isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 1, $this->source); })()) == 0)) {
            // line 2
            yield "<div class=\"annonces-input-data\" style=\"display:block;\">
\t \t<h2 class=\"fs-title\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.type-de-prestations"), "html", null, true);
            yield "*</h2>
\t\t<h3 class=\"fs-subtitle\">";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix"), "html", null, true);
            yield "</h3>
\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 6
                yield "

\t<div class=\"custom-control custom-radio mb-2\">
\t    <input type=\"radio\" class=\"custom-control-input souscategorie\" id=\"cat";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 9), "html", null, true);
                yield "\"  name=\"souscategorie\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 9), "html", null, true);
                yield "\" required>
\t    <label class=\"custom-control-label\" for=\"cat";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 10), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 10) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 10), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 10), "html", null, true);
                }
                yield "</label>
\t</div>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 15
        yield "</div>
";
        // line 16
        if (((isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 16, $this->source); })()) == 1)) {
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 18
                yield "<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 18), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "locale", [], "any", false, false, false, 18) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 18) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 18), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 18), "html", null, true);
                }
                yield "</option>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/sous_categorie.html.twig";
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
        return array (  99 => 18,  95 => 17,  93 => 16,  90 => 15,  73 => 10,  67 => 9,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if option ==0 %}
<div class=\"annonces-input-data\" style=\"display:block;\">
\t \t<h2 class=\"fs-title\">{{'profil-utilisateur.formulaire-creer-annonce.type-de-prestations'|trans}}*</h2>
\t\t<h3 class=\"fs-subtitle\">{{'profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix'|trans}}</h3>
\t{% for c in categorie %}


\t<div class=\"custom-control custom-radio mb-2\">
\t    <input type=\"radio\" class=\"custom-control-input souscategorie\" id=\"cat{{c.termTaxonomyId}}\"  name=\"souscategorie\" value=\"{{c.termTaxonomyId}}\" required>
\t    <label class=\"custom-control-label\" for=\"cat{{c.termTaxonomyId}}\">{% if app.request.locale == 'en' and c.content != '' %}{{c.content}}{% else %}{{c.name}}{% endif %}</label>
\t</div>

\t{% endfor %}
{% endif %}
</div>
{% if option ==1 %}
{% for c in categorie %}
<option value=\"{{c.termTaxonomyId}}\">{% if app.request.locale == 'en' and c.content != '' %}{{c.content}}{% else %}{{c.name}}{% endif %}</option>
  {% endfor %}
{% endif %}
", "profile/sous_categorie.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/sous_categorie.html.twig");
    }
}
