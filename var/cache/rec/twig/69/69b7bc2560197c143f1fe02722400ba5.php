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

/* admin/Marketing/OpsSpeciales/details_ops_speciales.html.twig */
class __TwigTemplate_5a84aa927aa4d3742eb1fab68f0187eb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Marketing/OpsSpeciales/details_ops_speciales.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Marketing/OpsSpeciales/details_ops_speciales.html.twig", 1);
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
        yield "\tDetails Opération spéciale
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
\t<link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/img-picker/image-picker.css"), "html", null, true);
        yield "\">
\t<link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">
\t<link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/file-input-font/font/font-fileuploader.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<!-- file input styles -->
\t<link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">
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


.file_upload {
    min-width: 200px;
    width: 100%;
    height: 200px
}

.created-announce-elements{
\tdisplay: flex;
}

.label-perso{
\ttext-align:left !important;
\tfont-size:1.5rem !important;
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
\t\t\t\t\t\t\t<h4 class=\"box-title\">Details d'une opération speciale</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Libelle</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 124, $this->source); })()), "titre", [], "any", false, false, false, 124), "html", null, true);
        yield " </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Meta description</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 129, $this->source); })()), "meta_description", [], "any", false, false, false, 129), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">URL</label>
\t\t\t\t\t\t\t\t\t\t<button class=\"container border border-info rounded p-2\" id=\"url\" onclick=\"copyToClipboard()\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_ops_speciales", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 134, $this->source); })()), "slug", [], "any", false, false, false, 134)])), "html", null, true);
        yield "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row created-announce-elements\" id=\"created-announce-elements\">
\t\t\t\t\t\t\t\t\t";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 140, $this->source); })()), "articles", [], "any", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 141
            yield "\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-3 announce-list m-2 p-2\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 141), "html", null, true);
            yield "\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 142), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "postName", [], "any", false, false, false, 142), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Annonce ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 144), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "postTitle", [], "any", false, false, false, 145), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Prix: ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "toPing", [], "any", false, false, false, 146), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Vendu par: ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "postExcerpt", [], "any", false, false, false, 147), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title btn ";
            // line 148
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pinged", [], "any", false, false, false, 148) == 1)) {
                yield "btn-success";
            } else {
                yield "btn-warning";
            }
            yield "\">";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pinged", [], "any", false, false, false, 148) == 1)) {
                // line 149
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\tLivrable";
            } else {
                yield "Non Livrable";
            }
            yield "</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"description\">Description</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\">";
        // line 158
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 158, $this->source); })()), "description", [], "any", false, false, false, 158);
        yield "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"chapeau\" >Chap&ocirc;</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\" id=\"chapeau\">";
        // line 162
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 162, $this->source); })()), "chapeau", [], "any", false, false, false, 162);
        yield "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cat_afficher\" class=\"label-perso\">Categories d'annonces a afficher</label>
\t\t\t\t\t\t\t\t\t\t";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 168
            yield "\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input disabled class=\"form-check-input\" type=\"checkbox\" name=\"cat_afficher\" ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 169, $this->source); })()), "categorie", [], "any", false, false, false, 169));
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 170
                yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 170) == CoreExtension::getAttribute($this->env, $this->source, $context["item2"], "TermId", [], "any", false, false, false, 170))) {
                    yield "checked";
                }
                // line 171
                yield "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item2'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "\t\t\t\t\t\t\t\t\t\t\t id=\"cat_afficher";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 172), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 172), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label mx-3 opacity-100\" for=\"cat_afficher\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 174), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
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

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 189
        yield from $this->yieldParentBlock("body_javascript", $context, $blocks);
        yield "

<!-- jQuery plugin for camroll slider -->
<script type=\"text/javascript\" src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js")), "html", null, true);
        yield "\"></script>
<!-- jQuery plugin for spartan image picker -->
<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
";
        // line 196
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
</script><script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/img-picker/image-picker.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/spartan-image-picker/spartan-multi-image-picker-min.js"), "html", null, true);
        yield "\"></script>

<!-- Tinymce editor -->
<script type=\"text/javascript\" src='";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
<script src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
<script>
\t\tfunction copyToClipboard(text) {
\t\t\tvar inputc = document.body.appendChild(document.createElement(\"input\"));
\t\t\tinputc.value = document.getElementById('url').textContent;
\t\t\tinputc.focus();
\t\t\tinputc.select();
\t\t\tdocument.execCommand('copy');
\t\t\tinputc.parentNode.removeChild(inputc);
\t\t\talert(\"URL Copiee avec succes.\");
\t\t}
\t\$(document).ready(function () {
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
        return "admin/Marketing/OpsSpeciales/details_ops_speciales.html.twig";
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
        return array (  441 => 204,  437 => 203,  433 => 202,  427 => 199,  423 => 198,  419 => 197,  416 => 196,  410 => 192,  404 => 189,  394 => 188,  378 => 178,  368 => 174,  360 => 172,  354 => 171,  349 => 170,  345 => 169,  342 => 168,  338 => 167,  330 => 162,  323 => 158,  316 => 153,  303 => 149,  295 => 148,  291 => 147,  287 => 146,  283 => 145,  279 => 144,  272 => 142,  267 => 141,  263 => 140,  254 => 134,  246 => 129,  238 => 124,  134 => 23,  129 => 21,  125 => 20,  121 => 19,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  91 => 11,  88 => 7,  78 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
\tDetails Opération spéciale
{% endblock %}

{% block main %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\" integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t{#<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\">
 \t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/style.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/more.css') }}\"> #}
\t<link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
\t<link href=\"{{asset('assets/css/camroll/camroll_slider.css')}}\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"{{ asset('assets/css/custome.css') }} \" rel=\"stylesheet\">
\t
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/img-picker/image-picker.css')}}\">
\t<link href=\"{{asset('assets/css/file-input-css/jquery.fileuploader.min.css')}}\" media=\"all\" rel=\"stylesheet\">
\t<link href=\"{{asset('assets/font/file-input-font/font/font-fileuploader.css')}}\" rel=\"stylesheet\">
\t<!-- file input styles -->
\t<link href=\"{{asset('assets/css/file-input-css/jquery.fileuploader.min.css')}}\" media=\"all\" rel=\"stylesheet\">
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


.file_upload {
    min-width: 200px;
    width: 100%;
    height: 200px
}

.created-announce-elements{
\tdisplay: flex;
}

.label-perso{
\ttext-align:left !important;
\tfont-size:1.5rem !important;
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
\t\t\t\t\t\t\t<h4 class=\"box-title\">Details d'une opération speciale</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Libelle</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">{{ops.titre}} </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Meta description</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">{{ops.meta_description}}</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">URL</label>
\t\t\t\t\t\t\t\t\t\t<button class=\"container border border-info rounded p-2\" id=\"url\" onclick=\"copyToClipboard()\">{{absolute_url(path('marketing_details_ops_speciales',{slug: ops.slug}))}}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 row created-announce-elements\" id=\"created-announce-elements\">
\t\t\t\t\t\t\t\t\t{% for item in ops.articles %}
\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-3 announce-list m-2 p-2\" data-id=\"{{item.id}}\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"{{item.guid}}\" alt=\"{{item.postName}}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Annonce {{item.id}}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{item.postTitle}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Prix: {{item.toPing}}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Vendu par: {{item.postExcerpt}}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title btn {% if item.pinged == 1 %}btn-success{% else %}btn-warning{% endif %}\">{% if item.pinged == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\tLivrable{% else %}Non Livrable{% endif %}</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"description\">Description</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\">{{ops.description|raw}}</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"chapeau\" >Chap&ocirc;</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\" id=\"chapeau\">{{ops.chapeau|raw}}</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cat_afficher\" class=\"label-perso\">Categories d'annonces a afficher</label>
\t\t\t\t\t\t\t\t\t\t{% for item in categories %}
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input disabled class=\"form-check-input\" type=\"checkbox\" name=\"cat_afficher\" {% for item2 in ops.categorie %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if item.termTaxonomyId == item2.TermId %}checked{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t id=\"cat_afficher{{item.termTaxonomyId}}\" value=\"{{item.termTaxonomyId}}\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label mx-3 opacity-100\" for=\"cat_afficher\">
\t\t\t\t\t\t\t\t\t\t\t\t{{item.name}}
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

{% block body_javascript %}
{{parent()}}

<!-- jQuery plugin for camroll slider -->
<script type=\"text/javascript\" src=\"{{ prerender(asset('assets/js/camroll/camroll_slider.js')) }}\"></script>
<!-- jQuery plugin for spartan image picker -->
<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
{# <script src=\"{{ asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}\" type=\"text/javascript\"></script> #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
</script><script src=\"{{ prerender(asset('assets/js/gijgo-js/gijgo.min.2.js')) }}\"></script>
<script src=\"{{asset('assets/js/img-picker/image-picker.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('assets/js/spartan-image-picker/spartan-multi-image-picker-min.js') }}\"></script>

<!-- Tinymce editor -->
<script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
<script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
<script>
\t\tfunction copyToClipboard(text) {
\t\t\tvar inputc = document.body.appendChild(document.createElement(\"input\"));
\t\t\tinputc.value = document.getElementById('url').textContent;
\t\t\tinputc.focus();
\t\t\tinputc.select();
\t\t\tdocument.execCommand('copy');
\t\t\tinputc.parentNode.removeChild(inputc);
\t\t\talert(\"URL Copiee avec succes.\");
\t\t}
\t\$(document).ready(function () {
\t})
</script>

{% endblock body_javascript %}
", "admin/Marketing/OpsSpeciales/details_ops_speciales.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Marketing/OpsSpeciales/details_ops_speciales.html.twig");
    }
}
