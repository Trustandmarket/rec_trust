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

/* profile/js/rechercheSousCategories.html.twig */
class __TwigTemplate_e5a8ff00b739047f670e7855c4994770 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/js/rechercheSousCategories.html.twig"));

        // line 1
        yield "<script>
\$(document).on('change', '.categorie', function (e) {
// On empeche le navigateur de soumettre le formulaire
  e.preventDefault();
  \$('.prestations').attr('disabled',\"disabled\");
  \$('.prestations').attr('name', \"previous\");
  // var url1='/profile/sous_categorie/";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", ["_locale"], "method", false, false, false, 7), "html", null, true);
        yield "?id='+\$(this).val();
  //console.log(\$(this).val());
  var url1 = \$(this).attr('myUrl');
  console.log(url1);
  if(url1 != \"\"){
    toastr.info(\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.recherche-sous-categories"), "html", null, true);
        yield "\");
    \$.ajax({
      url: url1,
      type: 'get',
      success: function (reponse) {
        toastr.clear();
        \$(\"#devis-input-data\").css('display', 'none');
        \$('#sous_categorie_sous').html(reponse);
        //\$(\"#msform\").attr('action',\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        yield "\")
      },
      error: function (reponse) {
        toastr.clear();
      }
    });
  }
  if( url1 == \"\" ){
    /*console.log('test');*/
    \$(\"#sous_categorie_sous\").html('');
    \$(\"#devis-input-data\").css('display', 'block');
    \$(\"#msform\").attr('action',\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_ajouter_devis");
        yield "\");
  }else{
    \$(\"#msform\").attr('action',\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        yield "\");
  }
});
</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/js/rechercheSousCategories.html.twig";
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
        return array (  91 => 33,  86 => 31,  72 => 20,  61 => 12,  53 => 7,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script>
\$(document).on('change', '.categorie', function (e) {
// On empeche le navigateur de soumettre le formulaire
  e.preventDefault();
  \$('.prestations').attr('disabled',\"disabled\");
  \$('.prestations').attr('name', \"previous\");
  // var url1='/profile/sous_categorie/{{app.request.get('_locale')}}?id='+\$(this).val();
  //console.log(\$(this).val());
  var url1 = \$(this).attr('myUrl');
  console.log(url1);
  if(url1 != \"\"){
    toastr.info(\"{{'home.formulaire-champs.recherche-sous-categories'|trans}}\");
    \$.ajax({
      url: url1,
      type: 'get',
      success: function (reponse) {
        toastr.clear();
        \$(\"#devis-input-data\").css('display', 'none');
        \$('#sous_categorie_sous').html(reponse);
        //\$(\"#msform\").attr('action',\"{{path('profile_ajouter_annonce')}}\")
      },
      error: function (reponse) {
        toastr.clear();
      }
    });
  }
  if( url1 == \"\" ){
    /*console.log('test');*/
    \$(\"#sous_categorie_sous\").html('');
    \$(\"#devis-input-data\").css('display', 'block');
    \$(\"#msform\").attr('action',\"{{path('devis_ajouter_devis')}}\");
  }else{
    \$(\"#msform\").attr('action',\"{{path('profile_ajouter_annonce')}}\");
  }
});
</script>", "profile/js/rechercheSousCategories.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/js/rechercheSousCategories.html.twig");
    }
}
