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

/* base.html.twig */
class __TwigTemplate_7f9cf3b81eac4051a4c568f6824d5237 extends Template
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
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  ";
        // line 6
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 10
        yield "    <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        yield "\">
    <title>";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

 ";
        // line 16
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 119
        yield "\t";
        // line 120
        yield "    ";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "base.html.twig", 120)->unwrap()->yield($context);
        // line 121
        yield "    ";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "base.html.twig", 121)->unwrap()->yield($context);
        // line 122
        yield "</head>
<body class=\"\">
    ";
        // line 124
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 126
        yield "  <!-- jQuery -->
  <script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.4.1.min.js"), "html", null, true);
        yield "\"></script>
  <!-- jQuery plugin for datepicker -->
 ";
        // line 130
        yield " <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
  <!-- Bootstrap Js -->
  <script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

  <!-- Datepicker config -->
  <script>
      \$(document).ready(function(){
          \$('#inputNaissance').datepicker({
              uiLibrary: 'bootstrap4',
              size: 'large',
              showRightIcon: false,
              iconsLibrary: 'fontawesome'
          });

          \$(\"div[role='wrapper']\").append(\"<label for='inputNaissance'>Date de naissance</label><div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");
      });
  </script>
  ";
        // line 147
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 149
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.titre"), "html", null, true);
        yield " | Trust & Market ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        yield "    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/style.css"), "html", null, true);
        yield "\">

        <style>
      body{
        background: url(";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/john-raptis.png")), "html", null, true);
        yield ") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .white-t{
        color: #fff;
      }
      .float-r {
        float: right;
      }
      .cgu{
          color:#ddd;
          font-size: 12.5px;
      }

      .special-link{
        text-decoration: underline;
        color: #fff;
      }
      .special-link:hover{
        text-decoration: underline;
        color: #f17c30;
      }

      .special-below-link{
        color:#fff;
      }
      .special-below-link:hover{
        text-decoration: none;
        color:#f17c30;
      }

      .registration-button{
        background: #f17c30;
        border: none;
        font-size:15px;
      }
      .registration-button:hover{
        color:#f17c30;
        background: #fff;
        border: none;
      }

      .input-custom{
        background-color: rgba(0, 0, 0, 0.15);
        color:#ddd;
      }
      .input-custom:focus{
        background-color: rgba(0, 0, 0, 0.15);
        border-color: #fff;
        color: #fff;
      }

    select option {
        margin: 40px;
        background: rgba(0, 0, 0, 0.3);
        color: #fff;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    }

      .inputNaissance::placeholder{
          color: #ddd;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        body{
            background-size: auto;
        }
      }
    </style>
        <!-- Custom styles for this template -->
    <link href=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/floating-labels.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 125
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  329 => 148,  319 => 147,  311 => 125,  301 => 124,  290 => 116,  199 => 28,  192 => 24,  185 => 20,  180 => 17,  170 => 16,  151 => 11,  135 => 9,  125 => 149,  123 => 147,  105 => 132,  99 => 130,  94 => 127,  91 => 126,  89 => 124,  85 => 122,  82 => 121,  79 => 120,  77 => 119,  75 => 16,  67 => 11,  62 => 10,  60 => 9,  55 => 6,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/bundles/layout.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  {# {% include 'tag-google.html.twig' %} #}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    {% block head %}{% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/img/favicon.ico') }}\">
    <title>{% block title %} {{'connexion.titre'|trans}} | Trust & Market {% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

 {% block stylesheets %}
    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\"> -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">
    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/gijgo-css/style.css') }}\">

        <style>
      body{
        background: url({{ absolute_url(asset('assets/img/john-raptis.png'))}}) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .white-t{
        color: #fff;
      }
      .float-r {
        float: right;
      }
      .cgu{
          color:#ddd;
          font-size: 12.5px;
      }

      .special-link{
        text-decoration: underline;
        color: #fff;
      }
      .special-link:hover{
        text-decoration: underline;
        color: #f17c30;
      }

      .special-below-link{
        color:#fff;
      }
      .special-below-link:hover{
        text-decoration: none;
        color:#f17c30;
      }

      .registration-button{
        background: #f17c30;
        border: none;
        font-size:15px;
      }
      .registration-button:hover{
        color:#f17c30;
        background: #fff;
        border: none;
      }

      .input-custom{
        background-color: rgba(0, 0, 0, 0.15);
        color:#ddd;
      }
      .input-custom:focus{
        background-color: rgba(0, 0, 0, 0.15);
        border-color: #fff;
        color: #fff;
      }

    select option {
        margin: 40px;
        background: rgba(0, 0, 0, 0.3);
        color: #fff;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    }

      .inputNaissance::placeholder{
          color: #ddd;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        body{
            background-size: auto;
        }
      }
    </style>
        <!-- Custom styles for this template -->
    <link href=\"{{absolute_url(asset('assets/css/floating-labels.css')) }}\" rel=\"stylesheet\">

    {% endblock %}
\t{# {% include \"pixelFacebook.html.twig\" %} #}
    {% include 'scriptautomatisationBrevo.html.twig' %}
    {% include 'scriptchatBrevo.html.twig' %}
</head>
<body class=\"\">
    {% block body %}
    {% endblock %}
  <!-- jQuery -->
  <script src=\"{{ asset('assets/js/jquery-3.4.1.min.js') }}\"></script>
  <!-- jQuery plugin for datepicker -->
 {#  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js\" integrity=\"sha512-T62eI76S3z2X8q+QaoTTn7FdKOVGjzKPjKNHw+vdAGQdcDMbxZUAKwRcGCPt0vtSbRuxNWr/BccUKYJo634ygQ==\" crossorigin=\"anonymous\"></script> #}
 <script type=\"text/javascript\" src=\"{{ asset('assets/js/gijgo-js/gijgo.min.2.js') }}\"></script>
  <!-- Bootstrap Js -->
  <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

  <!-- Datepicker config -->
  <script>
      \$(document).ready(function(){
          \$('#inputNaissance').datepicker({
              uiLibrary: 'bootstrap4',
              size: 'large',
              showRightIcon: false,
              iconsLibrary: 'fontawesome'
          });

          \$(\"div[role='wrapper']\").append(\"<label for='inputNaissance'>Date de naissance</label><div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");
      });
  </script>
  {% block javascripts %}
  {% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/base.html.twig");
    }
}
