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

/* ws/script.html.twig */
class __TwigTemplate_a6f0a4f3ccaa63b76618d09533b1c32d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ws/script.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            yield "<script async>
    \$(document).ready(function(){
        var refresHaveINewMessagesId = setInterval(function(){ haveINewMessages(); }, 10000);
        var haveINewMessages = function(){
            \$.ajax({
                url : \"";
            // line 7
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_i_have_new_messages_xhr");
            yield "\",
                method : \"get\",
                dataType : \"json\",
                success : function(data){
                    if(data.statut== 'yes'){
                        \$('.chat-menu i').addClass('new-message');
                    }
                    else{
                        \$('.chat-menu i').removeClass('new-message');
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown){
                    if(textStatus == 'timeout') {
                        console.error(\"Vous n'êtes pas connectés\");
                    }
                    else{
                        console.error(\"Une erreur s'est produite avec le serveur\");
                    }
                }
            });
        }
        
    });

</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ws/script.html.twig";
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
        return array (  54 => 7,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if app.user %}
<script async>
    \$(document).ready(function(){
        var refresHaveINewMessagesId = setInterval(function(){ haveINewMessages(); }, 10000);
        var haveINewMessages = function(){
            \$.ajax({
                url : \"{{ path('chat_i_have_new_messages_xhr') }}\",
                method : \"get\",
                dataType : \"json\",
                success : function(data){
                    if(data.statut== 'yes'){
                        \$('.chat-menu i').addClass('new-message');
                    }
                    else{
                        \$('.chat-menu i').removeClass('new-message');
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown){
                    if(textStatus == 'timeout') {
                        console.error(\"Vous n'êtes pas connectés\");
                    }
                    else{
                        console.error(\"Une erreur s'est produite avec le serveur\");
                    }
                }
            });
        }
        
    });

</script>
{% endif %}", "ws/script.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/ws/script.html.twig");
    }
}
