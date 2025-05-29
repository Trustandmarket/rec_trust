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

/* registration/check_email.html.twig */
class __TwigTemplate_4c6ec85ca038cace331deabca49cb0aa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/check_email.html.twig"));

        // line 1
        yield "
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Activer Compte | Trust & Market</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

    <style>
      body{ ";
        // line 16
        if ((Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "verifier_email_creation_compte_image"]) != "
")) {
            // line 17
            yield "\t\t\tbackground: url(";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "verifier_email_creation_compte_image"]);
            yield ") no-repeat center center fixed;
\t\t";
        } else {
            // line 18
            yield " background: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/john-raptis.png")), "html", null, true);
            yield ") no-repeat center center fixed;
\t\t";
        }
        // line 20
        yield "\t        -webkit-background-size: cover;
\t        -moz-background-size: cover;
\t        -o-background-size: cover;
\t        background-size: cover;
\t  }
      .white-t{
        color: #fff;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .registration-ok {
        width: 100%;
        max-width: 600px;
        padding: 15px;
        margin: auto;
      }
      .btn-primary {
        background: #f17c30 !important;
        border: none
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
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/floating-labels.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  </head>
  <body>
    
    <div class=\"registration-ok\">

      <div class=\"text-center mb-5\">
        <img class=\"mb-4\" src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/success-icon.png"), "html", null, true);
        yield "\" alt=\"\" width=\"72\" height=\"72\">
        <h1 class=\"h3 mb-3 font-weight-normal white-t\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("verification-email.message-accueil"), "html", null, true);
        yield "</h1>
        <p class=\"white-t\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("verification-email.conseil"), "html", null, true);
        yield "</p>
      </div>

      <div class=\"text-center\">
          <a class=\"btn btn-lg btn-primary btn-lg mt-5\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("verification-email.bouton-accueil"), "html", null, true);
        yield "</a>
      </div>
    </div>

<!-- jQuery -->
<script src=\"./assets/js/jquery-3.4.1.min.js\"></script>
<!-- Bootstrap Js -->
<script src=\"./assets/js/bootstrap.min.js\"></script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/check_email.html.twig";
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
        return array (  151 => 74,  144 => 70,  140 => 69,  136 => 68,  126 => 61,  83 => 20,  77 => 18,  71 => 17,  68 => 16,  62 => 13,  56 => 10,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Activer Compte | Trust & Market</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">

    <style>
      body{ {% if include('Seo/Meta/security_image.html.twig', {code: 'verifier_email_creation_compte_image'}) != \"\\n\" %}
\t\t\tbackground: url({{ include('Seo/Meta/security_image.html.twig', {code: 'verifier_email_creation_compte_image'}) }}) no-repeat center center fixed;
\t\t{% else %} background: url({{ absolute_url(asset('assets/img/john-raptis.png'))}}) no-repeat center center fixed;
\t\t{% endif %}
\t        -webkit-background-size: cover;
\t        -moz-background-size: cover;
\t        -o-background-size: cover;
\t        background-size: cover;
\t  }
      .white-t{
        color: #fff;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .registration-ok {
        width: 100%;
        max-width: 600px;
        padding: 15px;
        margin: auto;
      }
      .btn-primary {
        background: #f17c30 !important;
        border: none
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
    <link href=\"{{ asset('assets/css/floating-labels.css')}}\" rel=\"stylesheet\">
  </head>
  <body>
    
    <div class=\"registration-ok\">

      <div class=\"text-center mb-5\">
        <img class=\"mb-4\" src=\"{{ asset('assets/img/success-icon.png')}}\" alt=\"\" width=\"72\" height=\"72\">
        <h1 class=\"h3 mb-3 font-weight-normal white-t\">{{'verification-email.message-accueil'|trans}}</h1>
        <p class=\"white-t\">{{'verification-email.conseil'|trans}}</p>
      </div>

      <div class=\"text-center\">
          <a class=\"btn btn-lg btn-primary btn-lg mt-5\" href=\"{{path('home')}}\">{{'verification-email.bouton-accueil'|trans}}</a>
      </div>
    </div>

<!-- jQuery -->
<script src=\"./assets/js/jquery-3.4.1.min.js\"></script>
<!-- Bootstrap Js -->
<script src=\"./assets/js/bootstrap.min.js\"></script>
</body>
</html>
", "registration/check_email.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/registration/check_email.html.twig");
    }
}
