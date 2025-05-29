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

/* profile/js/brouillonDevisAnnonce.html.twig */
class __TwigTemplate_acdfdd4b6d7d3d4ada8f297bef81bc85 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/js/brouillonDevisAnnonce.html.twig"));

        // line 1
        yield "<script>
    \$('.brouillon').on('click', function (e) {
        \$('#state').val('brouillon');
        if (\$('#nom').val() == '') {
            \$('#nom').val('--');
        }
        if (\$('#description').val() == '') {
            \$('#description').val('--');
        }

        let \$form = \$('#msform');
        let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
        let data = (formdata !== null) ? formdata : \$form.serialize();

        \$('#state').val('brouillon');
        \$.ajax({
            url: \$form.attr('action'),
            type: \$form.attr('method'),
            processData: false,
            contentType: false,
            data: data,
            success: function (response) {

                if (response > 0) {
                    toastr.clear();
                    \$('#body').hide();
                    \$('#succes').show();
                    \$('html,body').scrollTop(0);
                    \$('#send').removeClass('running');
                    toastr.clear();
                    toastr.success('Sauvegarde effectué avec succes');
                    if (\$(\"#nom_prenom_email\").length) {
                        if (\$('#nom_prenom_email').val().trim() != \"\") {
                            window.setTimeout(function () {
                                window.location = \"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "devis-en-brouillon"]);
        yield "\";
                            }, 1000);
                        }
                    } else {
                        window.setTimeout(function () {
                            window.location = \"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-en-brouillon"]);
        yield "\";
                        }, 1000);
                    }
                }
            },
            error: function (response) {
                toastr.clear();
                \$('#send').removeClass('running');
                if (\$(\"#nom_prenom_email\").length) {
                    if (\$('#nom_prenom_email').val != \"\") {
                        toastr.error('Erreur lors de la Sauvegarde du devis');
                    }
                } else {
                    toastr.error('Erreur lors de la Sauvegarde de l\\'annonce');
                }
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
        return "profile/js/brouillonDevisAnnonce.html.twig";
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
        return array (  89 => 40,  81 => 35,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script>
    \$('.brouillon').on('click', function (e) {
        \$('#state').val('brouillon');
        if (\$('#nom').val() == '') {
            \$('#nom').val('--');
        }
        if (\$('#description').val() == '') {
            \$('#description').val('--');
        }

        let \$form = \$('#msform');
        let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
        let data = (formdata !== null) ? formdata : \$form.serialize();

        \$('#state').val('brouillon');
        \$.ajax({
            url: \$form.attr('action'),
            type: \$form.attr('method'),
            processData: false,
            contentType: false,
            data: data,
            success: function (response) {

                if (response > 0) {
                    toastr.clear();
                    \$('#body').hide();
                    \$('#succes').show();
                    \$('html,body').scrollTop(0);
                    \$('#send').removeClass('running');
                    toastr.clear();
                    toastr.success('Sauvegarde effectué avec succes');
                    if (\$(\"#nom_prenom_email\").length) {
                        if (\$('#nom_prenom_email').val().trim() != \"\") {
                            window.setTimeout(function () {
                                window.location = \"{{ path('profile_annoncesTag',{tag:'devis-en-brouillon'}) }}\";
                            }, 1000);
                        }
                    } else {
                        window.setTimeout(function () {
                            window.location = \"{{ path('profile_annoncesTag',{tag:'annonces-en-brouillon'}) }}\";
                        }, 1000);
                    }
                }
            },
            error: function (response) {
                toastr.clear();
                \$('#send').removeClass('running');
                if (\$(\"#nom_prenom_email\").length) {
                    if (\$('#nom_prenom_email').val != \"\") {
                        toastr.error('Erreur lors de la Sauvegarde du devis');
                    }
                } else {
                    toastr.error('Erreur lors de la Sauvegarde de l\\'annonce');
                }
            }
        });
    });
</script>
", "profile/js/brouillonDevisAnnonce.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/js/brouillonDevisAnnonce.html.twig");
    }
}
