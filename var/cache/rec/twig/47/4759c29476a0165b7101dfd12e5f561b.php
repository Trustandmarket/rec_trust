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

/* admin/Marketing/Actualites/edit_actualite.html.twig */
class __TwigTemplate_b3152fd81f7a2f9b9d3bebfa7930c5ae extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Marketing/Actualites/edit_actualite.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Marketing/Actualites/edit_actualite.html.twig", 1);
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
        yield "\tModifier une Actualite
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
\t<link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
\t<style>
\t/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: \"\";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.form-group label{
\tflex: none;
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

html, body, header, .view {
    height: 3%;
}
</style>
\t<div class=\"content\">
\t\t<div class=\"animated fadeIn\">
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h4 class=\"box-title\">Modifier une Actualite</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<form action=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_actualite_update");
        yield "\" method=\"POST\" id=\"save_actualite\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"titre\">Titre</label>
\t\t\t\t\t\t\t\t\t\t<input value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "html", null, true);
        yield "\" name=\"id\" id=\"id\" hidden />
\t\t\t\t\t\t\t\t\t\t<input value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 104, $this->source); })()), "postTitle", [], "any", false, false, false, 104), "html", null, true);
        yield "\" class=\"form-control\" type=\"text\" name=\"titre\" id=\"titre\" required/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"statut\">Statut</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"statut\" id=\"statut\" required class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 110, $this->source); })()), "postStatus", [], "any", false, false, false, 110) == "publish")) {
            yield "selected";
        }
        yield " value=\"publish\">Publier</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 111
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 111, $this->source); })()), "postStatus", [], "any", false, false, false, 111) == "draft")) {
            yield "selected";
        }
        yield " value=\"draft\">Brouillon</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t\t<label style=\"text-align:left;\" class=\"col-md-3\" for=\"description\">Description</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"col-md-12 form-control border-form-control\" name=\"description\" id=\"description\" >";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 118, $this->source); })()), "postContent", [], "any", false, false, false, 118), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"type\">Type</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"type\" id=\"type\" required class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 125, $this->source); })()), "pingStatus", [], "any", false, false, false, 125) == "annonce")) {
            yield "selected";
        }
        yield " value=\"annonce\">Annonce ou Produit</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 126
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 126, $this->source); })()), "pingStatus", [], "any", false, false, false, 126) == "blog")) {
            yield "selected";
        }
        yield " value=\"blog\">Article du Blog</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 127
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 127, $this->source); })()), "pingStatus", [], "any", false, false, false, 127) == "ops_speciale")) {
            yield "selected";
        }
        yield " value=\"ops_speciale\">Opération speciale</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 128, $this->source); })()), "pingStatus", [], "any", false, false, false, 128) == "promo_com")) {
            yield "selected";
        }
        yield " value=\"promo_com\">Promo & Com</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 129, $this->source); })()), "pingStatus", [], "any", false, false, false, 129) == "univers_trust")) {
            yield "selected";
        }
        yield " value=\"univers_trust\">Univers Trust</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Rechercher le contenu</label>
\t\t\t\t\t\t\t\t\t\t<input value=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 135, $this->source); })()), "toPing", [], "any", false, false, false, 135), "html", null, true);
        yield "\" name=\"recherche_contenu\" id=\"recherche_contenu\" required class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<input hidden value=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 136, $this->source); })()), "guid", [], "any", false, false, false, 136), "html", null, true);
        yield "\" id=\"recherche_contenu_url\" name=\"recherche_contenu_url\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"send\" class=\"btn btn-success waves-effect waves-light ld-over-inverse \">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.categorie.enregistrer"), "html", null, true);
        yield "<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
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

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 152
        yield "<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
";
        // line 154
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<!-- Tinymce editor -->
\t<script type=\"text/javascript\" src='";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
<script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\ttinymce.init({
\t\tselector: 'textarea#description',
\t\theight: 350,
\t\tplugins: [
\t\t'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
\t\t],

\t\ttoolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
\t\tbrowser_spellcheck: true,
\t\tcontextmenu: false,";
        // line 171
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 171, $this->source); })()) == "fr")) {
            // line 172
            yield "\t\tlanguage : 'fr_FR',";
        }
        // line 173
        yield "\t\t});
\t\t
\t\ttinymce.init({
\t\tselector: 'input#titre',
\t\theight: 250,
\t\tplugins: [
\t\t'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
\t\t],

\t\ttoolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
\t\tbrowser_spellcheck: true,
\t\tcontextmenu: false,";
        // line 184
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 184, $this->source); })()) == "fr")) {
            // line 185
            yield "\t\tlanguage : 'fr_FR',";
        }
        // line 186
        yield "\t\t});

\t\t\$(\"#recherche_contenu\").autocomplete({
\t\tsource: \"/";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "request", [], "any", false, false, false, 189), "get", ["_locale"], "method", false, false, false, 189), "html", null, true);
        yield "/admin/recherche_element\" + '?type=' + \$(\"#type\").val(),
\t\tfocus: function (event, ui) {
\t\t//\$( \"#recherche_contenu\").val( ui.item.title ); // uncomment this line if you want to select value to search box
\t\treturn false;
\t\t},
\t\tselect: function (event, ui) {
\t\t//Complete linput masque
\t\tlet temp = tinymce.get(\"description\").getContent();
\t\t\$('#description').val(temp);
\t\ttemp = tinymce.get(\"titre\").getContent();
\t\t\$('#titre').val(temp);
\t\t\t\$(\"#recherche_contenu\").val(ui.item.name);
\t\t\t\$(\"#recherche_contenu_url\").val(ui.item.url);
\t\t\treturn false;
\t\t},
\t\tsearch: function (event, ui) {
\t\t\$('#ui-id-1').css(\"background-color\",\"rgb(255 87 34 / 21%)\");
\t\t},
\t\tclose: function (event, ui) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\t}
\t\t}).data(\"ui-autocomplete\")._renderItem = function (ul, item) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\t
\t\tvar inner_html = `<a class=\"redirect_link\" style=\"font-size:14px;color:#f17c30;\" href=\"#\">
\t\t\t\t<div style=\" width:100%;height: 50px;float: left;\"><div style=\"height: 50px;width: 15%;float: left;padding: 5px;\">
\t\t\t\t<img style=\"width:40px;height:40px\"src=\"` + item.image + `\" ></div>
\t\t\t\t<div style=\"font-size: 11px;width: 85%;margin-left: 5px;text-align: left;padding: 10px;font-size:10px;\">` + item.name + `</div></div></a>`;
\t\t\t\tconsole.log(item);
\t\treturn \$(\"<li></li>\").data(\"item.autocomplete\", item).append(inner_html).appendTo(ul);
\t\t};

\t\$(document).on('change', '#type', function (e) {
\t\tlet temp = tinymce.get(\"description\").getContent();
\t\t\$('#description').val(temp);
\t\ttemp = tinymce.get(\"titre\").getContent();
\t\t\$('#titre').val(temp);
\t\t\$(\"#recherche_contenu\").autocomplete({
\t\tsource: \"/";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "request", [], "any", false, false, false, 227), "get", ["_locale"], "method", false, false, false, 227), "html", null, true);
        yield "/admin/recherche_element\" + '?type=' + \$(\"#type\").val(),
\t\tfocus: function (event, ui) {
\t\t//\$( \"#recherche_contenu\").val( ui.item.title ); // uncomment this line if you want to select value to search box
\t\treturn false;
\t\t},
\t\tselect: function (event, ui) {
\t\tlet temp = tinymce.get(\"description\").getContent();
\t\t\$('#description').val(temp);
\t\ttemp = tinymce.get(\"titre\").getContent();
\t\t\$('#titre').val(temp);
\t\t\t\$(\"#recherche_contenu\").val(ui.item.name);
\t\t\t\$(\"#recherche_contenu_url\").val(ui.item.url);
\t\t\t
\t\t\treturn false;
\t\t},
\t\tsearch: function (event, ui) {
\t\t\$('#ui-id-1').css(\"background-color\",\"rgb(255 87 34 / 21%)\");
\t\t},
\t\tclose: function (event, ui) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\t}
\t\t}).data(\"ui-autocomplete\")._renderItem = function (ul, item) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\tvar inner_html = `<a class=\"redirect_link\" style=\"font-size:14px;color:#f17c30;\" href=\"#\">
\t\t\t\t<div style=\" width:100%;height: 50px;float: left;\"><div style=\"height: 50px;width: 15%;float: left;padding: 5px;\">
\t\t\t\t<img style=\"width:40px;height:40px\"src=\"` + item.image + `\" ></div>
\t\t\t\t<div style=\"font-size: 11px;width: 85%;margin-left: 5px;text-align: left;padding: 10px;font-size:10px;\">` + item.name + `</div></div></a>`;
\t\t\t\t
\t\treturn \$(\"<li></li>\").data(\"item.autocomplete\", item).append(inner_html).appendTo(ul);
\t\t};
\t\t});

\t\$(document).on('click', '.delete', function (e) {
\te.preventDefault();
\tvar t = \$(this);
\tvar urlPath = \$(this).attr('href');
\tswal({
\ttitle: \"Suppression de la categorie\",
\ttext: \"Attention la catégorie sera Supprimée et n'apparaitra plus sur votre site\",
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
\tif (reponse == 1) {
\tswal(\"Suppression terminée\", \"\", \"success\");
\tt.parents('tr').hide();
\t} else if (reponse == 2) {
\tswal(\"La catégorie contient des produits\", \"\", \"warning\");
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

\ttoastr.options = {
\t\"closeButton\": true,
\t\"debug\": false,
\t\"newestOnTop\": false,
\t\"progressBar\": true,
\t\"positionClass\": \"toast-top-center\",
\t\"preventDuplicates\": false,
\t\"onclick\": null,
\t\"showDuration\": \"300\",
\t\"hideDuration\": \"1000\",
\t\"timeOut\": \"12000\",
\t\"extendedTimeOut\": \"1000\",
\t\"showEasing\": \"swing\",
\t\"hideEasing\": \"linear\",
\t\"showMethod\": \"fadeIn\",
\t\"hideMethod\": \"fadeOut\"
\t}
\t})
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
        return "admin/Marketing/Actualites/edit_actualite.html.twig";
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
        return array (  418 => 227,  377 => 189,  372 => 186,  369 => 185,  367 => 184,  354 => 173,  351 => 172,  349 => 171,  334 => 159,  330 => 158,  326 => 157,  321 => 154,  318 => 152,  308 => 151,  289 => 140,  282 => 136,  278 => 135,  267 => 129,  261 => 128,  255 => 127,  249 => 126,  243 => 125,  233 => 118,  221 => 111,  215 => 110,  206 => 104,  202 => 103,  195 => 99,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  91 => 11,  88 => 7,  78 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
\tModifier une Actualite
{% endblock %}

{% block content %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\" integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t{#<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\">
 \t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/style.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/more.css') }}\"> #}
\t<link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
\t<link href=\"{{ asset('assets/css/custome.css') }} \" rel=\"stylesheet\">
\t<style>
\t/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: \"\";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.form-group label{
\tflex: none;
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

html, body, header, .view {
    height: 3%;
}
</style>
\t<div class=\"content\">
\t\t<div class=\"animated fadeIn\">
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h4 class=\"box-title\">Modifier une Actualite</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<form action=\"{{path('marketing_actualite_update')}}\" method=\"POST\" id=\"save_actualite\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"titre\">Titre</label>
\t\t\t\t\t\t\t\t\t\t<input value=\"{{actualite.id}}\" name=\"id\" id=\"id\" hidden />
\t\t\t\t\t\t\t\t\t\t<input value=\"{{actualite.postTitle}}\" class=\"form-control\" type=\"text\" name=\"titre\" id=\"titre\" required/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"statut\">Statut</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"statut\" id=\"statut\" required class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option {% if actualite.postStatus == 'publish' %}selected{% endif %} value=\"publish\">Publier</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if actualite.postStatus == 'draft' %}selected{% endif %} value=\"draft\">Brouillon</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t\t<label style=\"text-align:left;\" class=\"col-md-3\" for=\"description\">Description</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"col-md-12 form-control border-form-control\" name=\"description\" id=\"description\" >{{actualite.postContent}}</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"type\">Type</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"type\" id=\"type\" required class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option {% if actualite.pingStatus == 'annonce' %}selected{% endif %} value=\"annonce\">Annonce ou Produit</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if actualite.pingStatus == 'blog' %}selected{% endif %} value=\"blog\">Article du Blog</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if actualite.pingStatus == 'ops_speciale' %}selected{% endif %} value=\"ops_speciale\">Opération speciale</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if actualite.pingStatus == 'promo_com' %}selected{% endif %} value=\"promo_com\">Promo & Com</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if actualite.pingStatus == 'univers_trust' %}selected{% endif %} value=\"univers_trust\">Univers Trust</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Rechercher le contenu</label>
\t\t\t\t\t\t\t\t\t\t<input value=\"{{actualite.toPing}}\" name=\"recherche_contenu\" id=\"recherche_contenu\" required class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<input hidden value=\"{{actualite.guid}}\" id=\"recherche_contenu_url\" name=\"recherche_contenu_url\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"send\" class=\"btn btn-success waves-effect waves-light ld-over-inverse \">{{'admin.categorie.enregistrer'|trans}}<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
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
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<!-- Tinymce editor -->
\t<script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
<script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\ttinymce.init({
\t\tselector: 'textarea#description',
\t\theight: 350,
\t\tplugins: [
\t\t'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
\t\t],

\t\ttoolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
\t\tbrowser_spellcheck: true,
\t\tcontextmenu: false,{% if lang=='fr' %}
\t\tlanguage : 'fr_FR',{% endif %}
\t\t});
\t\t
\t\ttinymce.init({
\t\tselector: 'input#titre',
\t\theight: 250,
\t\tplugins: [
\t\t'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
\t\t],

\t\ttoolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
\t\tbrowser_spellcheck: true,
\t\tcontextmenu: false,{% if lang=='fr' %}
\t\tlanguage : 'fr_FR',{% endif %}
\t\t});

\t\t\$(\"#recherche_contenu\").autocomplete({
\t\tsource: \"/{{ app.request.get(\"_locale\") }}/admin/recherche_element\" + '?type=' + \$(\"#type\").val(),
\t\tfocus: function (event, ui) {
\t\t//\$( \"#recherche_contenu\").val( ui.item.title ); // uncomment this line if you want to select value to search box
\t\treturn false;
\t\t},
\t\tselect: function (event, ui) {
\t\t//Complete linput masque
\t\tlet temp = tinymce.get(\"description\").getContent();
\t\t\$('#description').val(temp);
\t\ttemp = tinymce.get(\"titre\").getContent();
\t\t\$('#titre').val(temp);
\t\t\t\$(\"#recherche_contenu\").val(ui.item.name);
\t\t\t\$(\"#recherche_contenu_url\").val(ui.item.url);
\t\t\treturn false;
\t\t},
\t\tsearch: function (event, ui) {
\t\t\$('#ui-id-1').css(\"background-color\",\"rgb(255 87 34 / 21%)\");
\t\t},
\t\tclose: function (event, ui) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\t}
\t\t}).data(\"ui-autocomplete\")._renderItem = function (ul, item) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\t
\t\tvar inner_html = `<a class=\"redirect_link\" style=\"font-size:14px;color:#f17c30;\" href=\"#\">
\t\t\t\t<div style=\" width:100%;height: 50px;float: left;\"><div style=\"height: 50px;width: 15%;float: left;padding: 5px;\">
\t\t\t\t<img style=\"width:40px;height:40px\"src=\"` + item.image + `\" ></div>
\t\t\t\t<div style=\"font-size: 11px;width: 85%;margin-left: 5px;text-align: left;padding: 10px;font-size:10px;\">` + item.name + `</div></div></a>`;
\t\t\t\tconsole.log(item);
\t\treturn \$(\"<li></li>\").data(\"item.autocomplete\", item).append(inner_html).appendTo(ul);
\t\t};

\t\$(document).on('change', '#type', function (e) {
\t\tlet temp = tinymce.get(\"description\").getContent();
\t\t\$('#description').val(temp);
\t\ttemp = tinymce.get(\"titre\").getContent();
\t\t\$('#titre').val(temp);
\t\t\$(\"#recherche_contenu\").autocomplete({
\t\tsource: \"/{{ app.request.get(\"_locale\") }}/admin/recherche_element\" + '?type=' + \$(\"#type\").val(),
\t\tfocus: function (event, ui) {
\t\t//\$( \"#recherche_contenu\").val( ui.item.title ); // uncomment this line if you want to select value to search box
\t\treturn false;
\t\t},
\t\tselect: function (event, ui) {
\t\tlet temp = tinymce.get(\"description\").getContent();
\t\t\$('#description').val(temp);
\t\ttemp = tinymce.get(\"titre\").getContent();
\t\t\$('#titre').val(temp);
\t\t\t\$(\"#recherche_contenu\").val(ui.item.name);
\t\t\t\$(\"#recherche_contenu_url\").val(ui.item.url);
\t\t\t
\t\t\treturn false;
\t\t},
\t\tsearch: function (event, ui) {
\t\t\$('#ui-id-1').css(\"background-color\",\"rgb(255 87 34 / 21%)\");
\t\t},
\t\tclose: function (event, ui) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\t}
\t\t}).data(\"ui-autocomplete\")._renderItem = function (ul, item) {
\t\t\$('.ui-helper-hidden-accessible').hide();
\t\tvar inner_html = `<a class=\"redirect_link\" style=\"font-size:14px;color:#f17c30;\" href=\"#\">
\t\t\t\t<div style=\" width:100%;height: 50px;float: left;\"><div style=\"height: 50px;width: 15%;float: left;padding: 5px;\">
\t\t\t\t<img style=\"width:40px;height:40px\"src=\"` + item.image + `\" ></div>
\t\t\t\t<div style=\"font-size: 11px;width: 85%;margin-left: 5px;text-align: left;padding: 10px;font-size:10px;\">` + item.name + `</div></div></a>`;
\t\t\t\t
\t\treturn \$(\"<li></li>\").data(\"item.autocomplete\", item).append(inner_html).appendTo(ul);
\t\t};
\t\t});

\t\$(document).on('click', '.delete', function (e) {
\te.preventDefault();
\tvar t = \$(this);
\tvar urlPath = \$(this).attr('href');
\tswal({
\ttitle: \"Suppression de la categorie\",
\ttext: \"Attention la catégorie sera Supprimée et n'apparaitra plus sur votre site\",
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
\tif (reponse == 1) {
\tswal(\"Suppression terminée\", \"\", \"success\");
\tt.parents('tr').hide();
\t} else if (reponse == 2) {
\tswal(\"La catégorie contient des produits\", \"\", \"warning\");
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

\ttoastr.options = {
\t\"closeButton\": true,
\t\"debug\": false,
\t\"newestOnTop\": false,
\t\"progressBar\": true,
\t\"positionClass\": \"toast-top-center\",
\t\"preventDuplicates\": false,
\t\"onclick\": null,
\t\"showDuration\": \"300\",
\t\"hideDuration\": \"1000\",
\t\"timeOut\": \"12000\",
\t\"extendedTimeOut\": \"1000\",
\t\"showEasing\": \"swing\",
\t\"hideEasing\": \"linear\",
\t\"showMethod\": \"fadeIn\",
\t\"hideMethod\": \"fadeOut\"
\t}
\t})
</script>

{% endblock body_javascript %}
", "admin/Marketing/Actualites/edit_actualite.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Marketing/Actualites/edit_actualite.html.twig");
    }
}
