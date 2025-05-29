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

/* admin/Livraisons/GererCriteres/all_criteres_type.html.twig */
class __TwigTemplate_3c70223e138345c70d17685455aaf1ef extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'main' => [$this, 'block_main'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Livraisons/GererCriteres/all_criteres_type.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Livraisons/GererCriteres/all_criteres_type.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 3
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.type-de-livraison"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        yield "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\" integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t";
        // line 11
        yield "\t<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
\t<div class=\"content\">

\t\t<div class=\"animated fadeIn\">
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h4 class=\"box-title\">Gerer les criteres<a class=\"badge badge-complete right1 \" data-toggle=\"modal\" data-target=\"#add-category\" href=\"\" title=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.categorie.add-categorie"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body--\">
\t\t\t\t\t\t\t<div class=\"table-stats order-table ov-h\">
\t\t\t\t\t\t\t\t<table class=\"table \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.nom-critere"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.texte-critere"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.condition-inferieure"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.condition-superieure"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["criteres"]) || array_key_exists("criteres", $context) ? $context["criteres"] : (function () { throw new RuntimeError('Variable "criteres" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 43
            yield "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: #F7F7F7;font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "locale", [], "any", false, false, false, 45) == "fr")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 45), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 45), "html", null, true);
            }
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "locale", [], "any", false, false, false, 46) == "fr")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postContent", [], "any", false, false, false, 46), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postContentFiltered", [], "any", false, false, false, 46), "html", null, true);
            }
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "toPing", [], "any", false, false, false, 47), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postStatus", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "guid", [], "any", false, false, false, 48), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "pinged", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 50
            $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Livraisons\\GererCriteres\\WpPostsCrudController"], "method", false, false, false, 50), "setAction", ["edit"], "method", false, false, false, 50), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 50)], "method", false, false, false, 50);
            // line 51
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"badge badge-pending update\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "\" title=\"Modifier le post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit \"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
            $context["delete_livraison"] = true;
            // line 55
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 56
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 56) == CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postParent", [], "any", false, false, false, 56))) {
                    // line 57
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["delete_livraison"] = false;
                    // line 58
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 59
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["delete_livraison"]) || array_key_exists("delete_livraison", $context) ? $context["delete_livraison"] : (function () { throw new RuntimeError('Variable "delete_livraison" does not exist.', 60, $this->source); })())) {
                // line 61
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\" red delete\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_delete_get", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                yield "\" title=\"Supprimer le menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 65
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal fade none-border\" id=\"add-category\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t\t\t<strong>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.categorie.add-critere"), "html", null, true);
        yield "</strong>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form action=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new_critere_type");
        yield "\" method=\"post\" id=\"register\">
\t\t\t\t\t\t<input hidden name=\"state\" id=\"state\" value=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 88, $this->source); })()), "html", null, true);
        yield "\" />
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.nom-critere"), "html", null, true);
        yield "\" type=\"text\" name=\"crit_name\" id=\"crit_name\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.texte-critere"), "html", null, true);
        yield "\" type=\"text\" name=\"crit_texte\" id=\"crit_texte\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<select name=\"int_inf\" id=\"int_inf\" required class=\"form-control\">
                                    <option value=\"\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.condition-inferieure"), "html", null, true);
        yield "</option>
                                    <option value=\"=\">=</option>
                                    <option value=\">\">></option>
                                    <option value=\">=\">>=</option>
                                    </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.valeur-inferieure"), "html", null, true);
        yield "\" type=\"number\" name=\"val_inf\" id=\"val_inf\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<select name=\"int_sup\" id=\"int_sup\" required class=\"form-control\">
                                    <option value=\"\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.condition-superieure"), "html", null, true);
        yield "</option>
                                    <option value=\"<\">&lt;</option>
                                    <option value=\"<=\">&lt;=</option>
                                    <option value=\"=\">=</option>
                                    </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.livraison.valeur-superieure"), "html", null, true);
        yield "\" type=\"number\" name=\"val_sup\" id=\"val_sup\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"send\" class=\"btn btn-success waves-effect waves-light ld-over-inverse \">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.categorie.send"), "html", null, true);
        yield "<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 141
        yield "<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
";
        // line 143
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t<script src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
\t<script type=\"text/javascript\">

\$('#register').on('submit', function (e) {
e.preventDefault();
if (\$('#cat_name').val() != '') {
\$('#send').addClass('running');
var \$form = \$(this);
\$.ajax({
url: \$form.attr('action'),
type: \$form.attr('method'),
data: \$form.serialize(),
success: function (reponse) {
if (reponse > 0) {
toastr.clear();
\$('#send').removeClass('running');
toastr.success('Ajout Terminé');
window.location = '';
} else if (reponse == 0) {
toastr.clear();
\$('#send').removeClass('running');
toastr.error('Erreur d\\'ajout');
}
},
error: function (reponse) {
toastr.clear();
\$('#send').removeClass('running');
toastr.error('Erreur d\\'ajout');
}
});
}
return false;
});

\$(document).on('click', '.delete', function (e) {
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
swal({
title: \"Suppression du critere\",
text: \"Attention le critere sera Supprimée et n'apparaitra plus sur votre site\",
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
swal(\"Suppression terminée\", \"\", \"success\");
t.parents('tr').hide();
} else if (reponse == 2) {
swal(\"La catégorie contient des produits\", \"\", \"warning\");
} else {
swal(\"Erreur de suppression\", \"\", \"error\");
};
},
error: function (reponse) {
swal(\"Erreur de suppression\", \"\", \"error\");
}
});
} else {
swal.close();
}
});
return false;
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
\"timeOut\": \"12000\",
\"extendedTimeOut\": \"1000\",
\"showEasing\": \"swing\",
\"hideEasing\": \"linear\",
\"showMethod\": \"fadeIn\",
\"hideMethod\": \"fadeOut\"
}
\t</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/Livraisons/GererCriteres/all_criteres_type.html.twig";
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
        return array (  368 => 145,  364 => 144,  361 => 143,  358 => 141,  348 => 140,  327 => 127,  319 => 122,  309 => 115,  300 => 109,  290 => 102,  281 => 96,  273 => 91,  267 => 88,  263 => 87,  256 => 83,  240 => 69,  231 => 65,  223 => 61,  220 => 60,  214 => 59,  211 => 58,  208 => 57,  205 => 56,  200 => 55,  198 => 54,  191 => 51,  189 => 50,  182 => 48,  176 => 47,  168 => 46,  160 => 45,  156 => 43,  152 => 42,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  118 => 23,  106 => 14,  102 => 13,  98 => 12,  93 => 11,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
\t{{'admin.menu.type-de-livraison'|trans}}
{% endblock %}

{% block main %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\" integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t{# <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/style.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/more.css') }}\"> #}
\t<link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
\t<div class=\"content\">

\t\t<div class=\"animated fadeIn\">
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h4 class=\"box-title\">Gerer les criteres<a class=\"badge badge-complete right1 \" data-toggle=\"modal\" data-target=\"#add-category\" href=\"\" title=\"{{'admin.categorie.add-categorie'|trans}}\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body--\">
\t\t\t\t\t\t\t<div class=\"table-stats order-table ov-h\">
\t\t\t\t\t\t\t\t<table class=\"table \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t\t<th>{{'admin.livraison.nom-critere'|trans}}</th>
\t\t\t\t\t\t\t\t\t\t\t<th>{{'admin.livraison.texte-critere'|trans}}</th>
\t\t\t\t\t\t\t\t\t\t\t<th>{{'admin.livraison.condition-inferieure'|trans}}</th>
\t\t\t\t\t\t\t\t\t\t\t<th>{{'admin.livraison.condition-superieure'|trans}}</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for m in criteres %}
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: #F7F7F7;font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{% if app.request.locale == \"fr\" %}{{m.postTitle}}{% else %}{{m.postExcerpt}}{% endif %}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{% if app.request.locale == \"fr\" %}{{m.postContent}}{% else %}{{m.postContentFiltered}}{% endif %}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{m.toPing}} {{m.postStatus}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{m.guid}} {{m.pinged}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{% set url = ea_url().setController('App\\\\Controller\\\\Admin\\\\Livraisons\\\\GererCriteres\\\\WpPostsCrudController').setAction('edit').setEntityId(m.id) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"badge badge-pending update\" href=\"{{url}}\" title=\"Modifier le post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit \"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set delete_livraison = true %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for n in livraisons %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if m.id == n.postParent %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set delete_livraison = false %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if delete_livraison %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\" red delete\" href=\"{{path('post_delete_get', {'id':m.id})}}\" title=\"Supprimer le menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal fade none-border\" id=\"add-category\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t\t\t<strong>{{'admin.categorie.add-critere'|trans}}</strong>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form action=\"{{path('admin_new_critere_type')}}\" method=\"post\" id=\"register\">
\t\t\t\t\t\t<input hidden name=\"state\" id=\"state\" value=\"{{state}}\" />
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"{{'admin.livraison.nom-critere'|trans}}\" type=\"text\" name=\"crit_name\" id=\"crit_name\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"{{'admin.livraison.texte-critere'|trans}}\" type=\"text\" name=\"crit_texte\" id=\"crit_texte\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<select name=\"int_inf\" id=\"int_inf\" required class=\"form-control\">
                                    <option value=\"\">{{'admin.livraison.condition-inferieure'|trans}}</option>
                                    <option value=\"=\">=</option>
                                    <option value=\">\">></option>
                                    <option value=\">=\">>=</option>
                                    </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"{{'admin.livraison.valeur-inferieure'|trans}}\" type=\"number\" name=\"val_inf\" id=\"val_inf\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<select name=\"int_sup\" id=\"int_sup\" required class=\"form-control\">
                                    <option value=\"\">{{'admin.livraison.condition-superieure'|trans}}</option>
                                    <option value=\"<\">&lt;</option>
                                    <option value=\"<=\">&lt;=</option>
                                    <option value=\"=\">=</option>
                                    </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"{{'admin.livraison.valeur-superieure'|trans}}\" type=\"number\" name=\"val_sup\" id=\"val_sup\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"send\" class=\"btn btn-success waves-effect waves-light ld-over-inverse \">{{'admin.categorie.send'|trans}}<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>
{% endblock %}
{% block body_javascript %}
<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
{# <script src=\"{{ asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}\" type=\"text/javascript\"></script> #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
\t<script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
\t<script type=\"text/javascript\">

\$('#register').on('submit', function (e) {
e.preventDefault();
if (\$('#cat_name').val() != '') {
\$('#send').addClass('running');
var \$form = \$(this);
\$.ajax({
url: \$form.attr('action'),
type: \$form.attr('method'),
data: \$form.serialize(),
success: function (reponse) {
if (reponse > 0) {
toastr.clear();
\$('#send').removeClass('running');
toastr.success('Ajout Terminé');
window.location = '';
} else if (reponse == 0) {
toastr.clear();
\$('#send').removeClass('running');
toastr.error('Erreur d\\'ajout');
}
},
error: function (reponse) {
toastr.clear();
\$('#send').removeClass('running');
toastr.error('Erreur d\\'ajout');
}
});
}
return false;
});

\$(document).on('click', '.delete', function (e) {
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
swal({
title: \"Suppression du critere\",
text: \"Attention le critere sera Supprimée et n'apparaitra plus sur votre site\",
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
swal(\"Suppression terminée\", \"\", \"success\");
t.parents('tr').hide();
} else if (reponse == 2) {
swal(\"La catégorie contient des produits\", \"\", \"warning\");
} else {
swal(\"Erreur de suppression\", \"\", \"error\");
};
},
error: function (reponse) {
swal(\"Erreur de suppression\", \"\", \"error\");
}
});
} else {
swal.close();
}
});
return false;
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
\"timeOut\": \"12000\",
\"extendedTimeOut\": \"1000\",
\"showEasing\": \"swing\",
\"hideEasing\": \"linear\",
\"showMethod\": \"fadeIn\",
\"hideMethod\": \"fadeOut\"
}
\t</script>

{% endblock body_javascript %}
", "admin/Livraisons/GererCriteres/all_criteres_type.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Livraisons/GererCriteres/all_criteres_type.html.twig");
    }
}
