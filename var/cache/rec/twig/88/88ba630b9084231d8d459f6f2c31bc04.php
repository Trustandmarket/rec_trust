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

/* admin/Marketing/PromoComs/all_promo_com.html.twig */
class __TwigTemplate_83e45f15a0c06089157deffcc637dc30 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Marketing/PromoComs/all_promo_com.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Marketing/PromoComs/all_promo_com.html.twig", 1);
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
        yield "\tMarketing -Promos & Com
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
\t\t\t\t\t\t";
        // line 23
        $context["url_new"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\PromoComs\\WpPostsCrudController"], "method", false, false, false, 23), "setAction", ["new"], "method", false, false, false, 23);
        // line 24
        yield "\t\t\t\t\t\t\t<h4 class=\"box-title\">Marketing - Promos et Com<a class=\"badge badge-complete right1\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_new"]) || array_key_exists("url_new", $context) ? $context["url_new"] : (function () { throw new RuntimeError('Variable "url_new" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" title=\"Ajouter une promo-com\">
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
\t\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre d'articles</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Categories d'annonces <small><sup>(affichee)</sup></small></th>
\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 43
            yield "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: #F7F7F7;font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "titre", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "articles", [], "any", false, false, false, 46)), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "categorie", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 48)), "html", null, true);
                yield "<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 51
            $context["url_detail"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\PromoComs\\WpPostsCrudController"], "method", false, false, false, 51), "setAction", ["detail"], "method", false, false, false, 51), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 51)], "method", false, false, false, 51);
            // line 52
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"badge badge-pending post-details my-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_detail"]) || array_key_exists("url_detail", $context) ? $context["url_detail"] : (function () { throw new RuntimeError('Variable "url_detail" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "\" title=\"Details du post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye \"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 55
            $context["url_edit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\PromoComs\\WpPostsCrudController"], "method", false, false, false, 55), "setAction", ["edit"], "method", false, false, false, 55), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 55)], "method", false, false, false, 55);
            // line 56
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"badge badge-pending update my-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_edit"]) || array_key_exists("url_edit", $context) ? $context["url_edit"] : (function () { throw new RuntimeError('Variable "url_edit" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "\" title=\"Modifier le post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit \"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"red delete my-1\" href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_delete_get", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" title=\"Supprimer l'operation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 78
        yield "<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
";
        // line 80
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t<script src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
\t<script type=\"text/javascript\">

\t
\t\$(document).ready(function () {
\t\t\$(document).on('click', '.post-details', function (e) {
\t\t\t\$('#modal_titre').empty().append(\$(this).data('title'));
\t\t\t\$('#modal_guid').empty().append(\$(this).data('guid'));
\t\t\t\$('#modal_type').empty().append(\$(this).data('type'));
\t\t\t\$('#modal_etat').empty().append(\$(this).data('etat'));
\t\t\t\$('#modal_description').empty().append(\$(this).data('description'));
\t\t})
\t})

\t\$(document).on('click', '.delete', function (e) {
\te.preventDefault();
\tvar t = \$(this);
\tvar urlPath = \$(this).attr('href');
\tswal({
\ttitle: \"Suppression de l'opération spéciale\",
\ttext: \"Attention l'opération spéciale et ses articles seront Supprimées et n'apparaitront plus sur votre site\",
\ttype: \"info\",
\tshowCancelButton: true,
\tconfirmButtonClass: \"btn-danger\",
\tconfirmButtonText: \"Supprimer\",
\tcancelButtonText: \"Annuler\",
\tcloseOnConfirm: false,
\tcloseOnCancel: false,
\tshowLoaderOnConfirm: true
\t}, function (isConfirm) {
\tif (isConfirm) {
\t\$.ajax({
\turl: urlPath,
\ttype: 'GET',
\tsuccess: function (reponse) {
\t\tconsole.log(reponse);
\tif (reponse == 1) {
\tswal(\"Suppression terminée\", \"\", \"success\");
\tt.parents('tr').hide();
\t} else if (reponse == 2) {
\tswal(\"La catégorie contient des paiements\", \"\", \"warning\");
\t} else {
\tswal(\"Erreur de suppression\", \"\", \"error\");
\t};
\t},
\terror: function (reponse) {
\tswal(\"Erreur de suppression\", \"\", \"error\");
\t}
\t});
\t} else {
\tswal.close();
\t}
\t});
\treturn false;
\t});

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
        return "admin/Marketing/PromoComs/all_promo_com.html.twig";
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
        return array (  245 => 82,  241 => 81,  238 => 80,  235 => 78,  225 => 77,  206 => 65,  194 => 59,  187 => 56,  185 => 55,  178 => 52,  176 => 51,  172 => 49,  163 => 48,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  144 => 43,  140 => 42,  118 => 24,  116 => 23,  104 => 14,  100 => 13,  96 => 12,  91 => 11,  88 => 7,  78 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
\tMarketing -Promos & Com
{% endblock %}

{% block main %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\" integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t{#<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\">
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
\t\t\t\t\t\t{% set url_new = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\PromoComs\\\\WpPostsCrudController').setAction('new') %}
\t\t\t\t\t\t\t<h4 class=\"box-title\">Marketing - Promos et Com<a class=\"badge badge-complete right1\" href=\"{{url_new}}\" title=\"Ajouter une promo-com\">
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
\t\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre d'articles</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Categories d'annonces <small><sup>(affichee)</sup></small></th>
\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for m in ops %}
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: #F7F7F7;font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{m.id}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{m.titre}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{m.articles|length}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{% for item in m.categorie %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{item.slug|upper}}<br>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{% set url_detail = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\PromoComs\\\\WpPostsCrudController').setAction('detail').setEntityId(m.id) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"badge badge-pending post-details my-1\" href=\"{{url_detail}}\" title=\"Details du post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye \"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% set url_edit = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\PromoComs\\\\WpPostsCrudController').setAction('edit').setEntityId(m.id) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"badge badge-pending update my-1\" href=\"{{url_edit}}\" title=\"Modifier le post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit \"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"red delete my-1\" href=\"{{path('post_delete_get', {id : m.id})}}\" title=\"Supprimer l'operation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
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


\t</div>
{% endblock %}
{% block body_javascript %}
<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
{# <script src=\"{{ asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}\" type=\"text/javascript\"></script> #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
\t<script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
\t<script type=\"text/javascript\">

\t
\t\$(document).ready(function () {
\t\t\$(document).on('click', '.post-details', function (e) {
\t\t\t\$('#modal_titre').empty().append(\$(this).data('title'));
\t\t\t\$('#modal_guid').empty().append(\$(this).data('guid'));
\t\t\t\$('#modal_type').empty().append(\$(this).data('type'));
\t\t\t\$('#modal_etat').empty().append(\$(this).data('etat'));
\t\t\t\$('#modal_description').empty().append(\$(this).data('description'));
\t\t})
\t})

\t\$(document).on('click', '.delete', function (e) {
\te.preventDefault();
\tvar t = \$(this);
\tvar urlPath = \$(this).attr('href');
\tswal({
\ttitle: \"Suppression de l'opération spéciale\",
\ttext: \"Attention l'opération spéciale et ses articles seront Supprimées et n'apparaitront plus sur votre site\",
\ttype: \"info\",
\tshowCancelButton: true,
\tconfirmButtonClass: \"btn-danger\",
\tconfirmButtonText: \"Supprimer\",
\tcancelButtonText: \"Annuler\",
\tcloseOnConfirm: false,
\tcloseOnCancel: false,
\tshowLoaderOnConfirm: true
\t}, function (isConfirm) {
\tif (isConfirm) {
\t\$.ajax({
\turl: urlPath,
\ttype: 'GET',
\tsuccess: function (reponse) {
\t\tconsole.log(reponse);
\tif (reponse == 1) {
\tswal(\"Suppression terminée\", \"\", \"success\");
\tt.parents('tr').hide();
\t} else if (reponse == 2) {
\tswal(\"La catégorie contient des paiements\", \"\", \"warning\");
\t} else {
\tswal(\"Erreur de suppression\", \"\", \"error\");
\t};
\t},
\terror: function (reponse) {
\tswal(\"Erreur de suppression\", \"\", \"error\");
\t}
\t});
\t} else {
\tswal.close();
\t}
\t});
\treturn false;
\t});

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
</script>

{% endblock body_javascript %}
", "admin/Marketing/PromoComs/all_promo_com.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Marketing/PromoComs/all_promo_com.html.twig");
    }
}
