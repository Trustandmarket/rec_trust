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
class __TwigTemplate_07a2071197f84e1d07c09e00962f0b5f extends Template
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
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Marketing/PromoComs/all_promo_com.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "\tMarketing -Promos & Com
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_new"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ops"] ?? null));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_detail"] ?? null), "html", null, true);
            yield "\" title=\"Details du post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye \"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 55
            $context["url_edit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\PromoComs\\WpPostsCrudController"], "method", false, false, false, 55), "setAction", ["edit"], "method", false, false, false, 55), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 55)], "method", false, false, false, 55);
            // line 56
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"badge badge-pending update my-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_edit"] ?? null), "html", null, true);
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
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  224 => 82,  220 => 81,  217 => 80,  214 => 78,  207 => 77,  191 => 65,  179 => 59,  172 => 56,  170 => 55,  163 => 52,  161 => 51,  157 => 49,  148 => 48,  144 => 47,  140 => 46,  136 => 45,  132 => 44,  129 => 43,  125 => 42,  103 => 24,  101 => 23,  89 => 14,  85 => 13,  81 => 12,  76 => 11,  73 => 7,  66 => 6,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/Marketing/PromoComs/all_promo_com.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Marketing/PromoComs/all_promo_com.html.twig");
    }
}
