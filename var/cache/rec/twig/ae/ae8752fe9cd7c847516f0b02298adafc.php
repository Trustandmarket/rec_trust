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

/* admin/ParcoursUtilisateur/UniversTrust/details.html.twig */
class __TwigTemplate_59430167b3e97733466133bccef28de2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ParcoursUtilisateur/UniversTrust/details.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/ParcoursUtilisateur/UniversTrust/details.html.twig", 1);
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
        yield "\tParcours utilisateur - Details Experiences
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
\t<link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/img-picker/image-picker.css"), "html", null, true);
        yield "\">
\t<link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">
\t<link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/file-input-font/font/font-fileuploader.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<!-- file input styles -->
\t<link href=\"";
        // line 22
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
\t\t\t\t\t\t\t<h4 class=\"box-title\">Details Experience</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Libelle</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 123, $this->source); })()), "titre", [], "any", false, false, false, 123), "html", null, true);
        yield " </div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Youtube</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 128, $this->source); })()), "youtube", [], "any", false, false, false, 128), "html", null, true);
        yield " </div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Titre Meta</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 133, $this->source); })()), "meta_titre", [], "any", false, false, false, 133), "html", null, true);
        yield " </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Meta description</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 138, $this->source); })()), "meta_description", [], "any", false, false, false, 138), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 label-perso\">URL</label>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 143, $this->source); })()), "slug", [], "any", false, false, false, 143)])), "html", null, true);
        yield "\" target=\"_blank\" class=\"container border border-info rounded p-2 col-md-9\" id=\"url\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 143, $this->source); })()), "slug", [], "any", false, false, false, 143)])), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"description\">Contenu textuel</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\">";
        // line 150
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 150, $this->source); })()), "contenu", [], "any", false, false, false, 150);
        yield "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"chapeau\" >Liens rapides</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\" id=\"chapeau\">";
        // line 154
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 154, $this->source); })()), "lien_acces_rapides", [], "any", false, false, false, 154);
        yield "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"chapeau\" >Image de couverture</label>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 161, $this->source); })()), "image_couverture", [], "any", false, false, false, 161), "html", null, true);
        yield "\" alt=\"\" style=\"width:100px; height:100px; border-radius:10px\">
\t\t\t\t\t\t\t\t</div>
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

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 173
        yield from $this->yieldParentBlock("body_javascript", $context, $blocks);
        yield "

<!-- jQuery plugin for camroll slider -->
<script type=\"text/javascript\" src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js")), "html", null, true);
        yield "\"></script>
<!-- jQuery plugin for spartan image picker -->
<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
<script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
</script><script src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/img-picker/image-picker.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/spartan-image-picker/spartan-multi-image-picker-min.js"), "html", null, true);
        yield "\"></script>

<!-- Tinymce editor -->
<script type=\"text/javascript\" src='";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
<script src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\">
\t\tfunction copyToClipboard(text) {
\t\t\tvar inputc = document.body.appendChild(document.createElement(\"input\"));
\t\t\tinputc.value = document.getElementById('url').textContent;
\t\t\tinputc.focus();
\t\t\tinputc.select();
\t\t\tdocument.execCommand('copy');
\t\t\tinputc.parentNode.removeChild(inputc);
\t\t\talert(\"URL Copiee avec succes.\");
\t\t}
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
        return "admin/ParcoursUtilisateur/UniversTrust/details.html.twig";
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
        return array (  360 => 189,  356 => 188,  352 => 187,  346 => 184,  342 => 183,  338 => 182,  329 => 176,  323 => 173,  313 => 172,  295 => 161,  285 => 154,  278 => 150,  266 => 143,  258 => 138,  250 => 133,  242 => 128,  234 => 123,  130 => 22,  125 => 20,  121 => 19,  117 => 18,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  91 => 11,  88 => 7,  78 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
\tParcours utilisateur - Details Experiences
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
\t\t\t\t\t\t\t<h4 class=\"box-title\">Details Experience</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Libelle</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">{{ops.titre}} </div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Youtube</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">{{ops.youtube}} </div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Titre Meta</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">{{ops.meta_titre}} </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-12 label-perso\">Meta description</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-2\">{{ops.meta_description}}</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 label-perso\">URL</label>
\t\t\t\t\t\t\t\t\t<a href=\"{{absolute_url(path('marketing_details_univers_trust',{slug: ops.slug}))}}\" target=\"_blank\" class=\"container border border-info rounded p-2 col-md-9\" id=\"url\">{{absolute_url(path('marketing_details_univers_trust',{slug: ops.slug}))}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"description\">Contenu textuel</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\">{{ops.contenu|raw}}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"chapeau\" >Liens rapides</label>
\t\t\t\t\t\t\t\t\t<div class=\"container border border-info rounded p-3\" id=\"chapeau\">{{ops.lien_acces_rapides|raw}}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-6 label-perso\" for=\"chapeau\" >Image de couverture</label>
\t\t\t\t\t\t\t\t\t<img src=\"{{ops.image_couverture}}\" alt=\"\" style=\"width:100px; height:100px; border-radius:10px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
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
<script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
</script><script src=\"{{ prerender(asset('assets/js/gijgo-js/gijgo.min.2.js')) }}\"></script>
<script src=\"{{asset('assets/js/img-picker/image-picker.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('assets/js/spartan-image-picker/spartan-multi-image-picker-min.js') }}\"></script>

<!-- Tinymce editor -->
<script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
<script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
<script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
<script type=\"text/javascript\">
\t\tfunction copyToClipboard(text) {
\t\t\tvar inputc = document.body.appendChild(document.createElement(\"input\"));
\t\t\tinputc.value = document.getElementById('url').textContent;
\t\t\tinputc.focus();
\t\t\tinputc.select();
\t\t\tdocument.execCommand('copy');
\t\t\tinputc.parentNode.removeChild(inputc);
\t\t\talert(\"URL Copiee avec succes.\");
\t\t}
</script>

{% endblock body_javascript %}
", "admin/ParcoursUtilisateur/UniversTrust/details.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/ParcoursUtilisateur/UniversTrust/details.html.twig");
    }
}
