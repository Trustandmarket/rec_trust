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

/* partials/project.html.twig */
class __TwigTemplate_fb2ef6c03cc034eaeb5f2e48f1c1b584 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/project.html.twig"));

        // line 1
        yield "<style>
    .playVideoButton {
        display: block;
        position: fixed;
        width: 100px;
        height: 100px;
        bottom: 150px;
        right: 20px;
        z-index: 9999999999;
        cursor: pointer;
        font-size: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f17c30;
    }

    .playVideoButton i {
        font-size: 60px;
    }

    #topBtn {
        bottom: 60px;
    }

    .p-pop-up1 {
        margin-bottom: 2rem;
    }

    .p-pop-titre1,
    .p-pop-titre2 {
        font-family: \"Palanquin Dark\";
    }

    .p-pop-content1 {
        background: #53b4a6;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-family: \"Source Sans Pro\";
    }

    .p-pop-content2 {
        background: black;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-family: \"Source Sans Pro\";
    }

    @media only screen and (max-width: 500px) {
        #dialoguons {
            width: 70%;
        }
    }

    @media only screen and (min-width: 501px) {
        #dialoguons {
            width: 40%;
        }
    }

    @media only screen and (min-width: 769) and (max-width: 1024px) {
        #dialoguons {
            width: 30%;
        }
    }

    @media only screen and (min-width: 1025px) {
        #dialoguons {
            width: 19%;
        }
    }
    
</style>
<div>
    ";
        // line 109
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/project.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  123 => 109,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    .playVideoButton {
        display: block;
        position: fixed;
        width: 100px;
        height: 100px;
        bottom: 150px;
        right: 20px;
        z-index: 9999999999;
        cursor: pointer;
        font-size: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f17c30;
    }

    .playVideoButton i {
        font-size: 60px;
    }

    #topBtn {
        bottom: 60px;
    }

    .p-pop-up1 {
        margin-bottom: 2rem;
    }

    .p-pop-titre1,
    .p-pop-titre2 {
        font-family: \"Palanquin Dark\";
    }

    .p-pop-content1 {
        background: #53b4a6;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-family: \"Source Sans Pro\";
    }

    .p-pop-content2 {
        background: black;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-family: \"Source Sans Pro\";
    }

    @media only screen and (max-width: 500px) {
        #dialoguons {
            width: 70%;
        }
    }

    @media only screen and (min-width: 501px) {
        #dialoguons {
            width: 40%;
        }
    }

    @media only screen and (min-width: 769) and (max-width: 1024px) {
        #dialoguons {
            width: 30%;
        }
    }

    @media only screen and (min-width: 1025px) {
        #dialoguons {
            width: 19%;
        }
    }
    
</style>
<div>
    {# {{path('project_index')}} #}
{#     <div id=\"dialoguons\">
        <div class=\"\" style=\"background:#ed7c3d;padding:5px;\">
            <div class=\"col-md-12\">
                <h5 style=\"color:#fff; font-family:Palanquin Dark; font-style:normal\">
                    <center>Expérience Trust & Market</center>
                </h5>
            </div>
            <div class=\"col-md-1\" style=\"position:absolute;top: 0rem;right: 0;cursor:pointer;\" id=\"fermeur\">
                <span style=\"color:#fff;\">X</span>
            </div>
        </div>
        <div style=\"padding:20px;\">
            <p align=\"center\" class=\"p-pop-up1\">
                <span class=\"p-pop-titre1\">{{ 'projet-pop-up.titre1'|trans }}</span><br><br><br>
                <a target='_blank' class=\"p-pop-content1\"
                   href=\"{{ path('annonces_listeAnnonces', {type_prestation: 'photographe',services_proposes: '',code_postal_ville: ''}) }}\">{{ 'projet-pop-up.sous-titre1'|trans }}</a>
            </p>
            <p align=\"center\">
                <span class=\"p-pop-titre2\">{{ 'projet-pop-up.titre2'|trans }}</span><br><br><br>
                <a target='_blank' class=\"p-pop-content2\"
                   href=\"{{ path('experiences_index') }}\">{{ 'projet-pop-up.sous-titre2'|trans }}</a>
            </p>
        </div>
    </div> 
    {% if youtube_url is defined %}
        {% if youtube_url.autoload == 'yes' %}
            <p class=\"playVideoButton\">
                <i class=\"fas fa-play\"></i>
            </p>{% endif %}
    {% endif %}
    <a href=\"{{ path('experiences_index') }}\" id=\"yourproject-iconed-link\">{{ 'general.projet'|trans }}</a>#}
</div>
", "partials/project.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/partials/project.html.twig");
    }
}
