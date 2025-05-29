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

/* profile/js/annulerCommande.js.twig */
class __TwigTemplate_9f18874fdcfadf2ebde676a7f1afa2b2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/js/annulerCommande.js.twig"));

        // line 1
        yield "<script>
\$(document).on('click', '.annulerCommande', function (e) { // On emp�che le navigateur de soumettre le formulaire
    e.preventDefault();
    var t = \$(this);
    var urlPath = \$(this).attr('href');
    swal({
        title: \"Annulation de la reservation\",
        text: \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.confirmer_annulation"), "js", null, true);
        yield "\",
        type: \"info\",
        showCancelButton: true,
        confirmButtonClass: \"btn-danger\",
        confirmButtonText: \"Annuler Reservation\",
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
                swal(\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.succes"), "js", null, true);
        yield "\", \"\", \"success\");
                window.setTimeout(function () {
                window.location = \"\";
            }, 1000);
                t.parents('li').hide();
            } else {
                swal(\"commande.annuler.erreur'|trans }}\", \"\", \"error\");
            };
        },
    error: function (reponse) {
    swal(\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.erreur"), "js", null, true);
        yield "\", \"\", \"error\");
    }
});
} else {
    swal.close();
}
});
});
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
        return "profile/js/annulerCommande.js.twig";
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
        return array (  86 => 34,  73 => 24,  54 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script>
\$(document).on('click', '.annulerCommande', function (e) { // On emp�che le navigateur de soumettre le formulaire
    e.preventDefault();
    var t = \$(this);
    var urlPath = \$(this).attr('href');
    swal({
        title: \"Annulation de la reservation\",
        text: \"{{'commande.annuler.confirmer_annulation'|trans}}\",
        type: \"info\",
        showCancelButton: true,
        confirmButtonClass: \"btn-danger\",
        confirmButtonText: \"Annuler Reservation\",
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
                swal(\"{{'commande.annuler.succes'|trans}}\", \"\", \"success\");
                window.setTimeout(function () {
                window.location = \"\";
            }, 1000);
                t.parents('li').hide();
            } else {
                swal(\"commande.annuler.erreur'|trans }}\", \"\", \"error\");
            };
        },
    error: function (reponse) {
    swal(\"{{'commande.annuler.erreur'|trans }}\", \"\", \"error\");
    }
});
} else {
    swal.close();
}
});
});
</script>
", "profile/js/annulerCommande.js.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/js/annulerCommande.js.twig");
    }
}
