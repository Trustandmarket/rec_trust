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

/* profile/autocomplete.html.twig */
class __TwigTemplate_4c663010879f0bffd3fb33b09393e939 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/autocomplete.html.twig"));

        // line 1
        yield "
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">

<style media=\"screen\">

.autocomplete-suggestions { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: 1px solid #999; background: #FFF; cursor: pointer; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); }
.autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
.autocomplete-no-suggestion { padding: 2px 5px;}
.autocomplete-selected { background: #F0F0F0; }
.autocomplete-suggestions strong { font-weight: bold; color: #F17C30; }
.autocomplete-group { padding: 2px 5px; font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }
.ui-state-active h4,
.ui-state-active h4:visited {
    color: #26004d ;
    font-size: 14px
}
.ui-widget-content{
  height: auto;
  max-height: 300px;
  min-width:220px;
  overflow-y: auto;
  overflow-x: hidden;
}
.ui-menu-item{
    height: 55px;
    border: 1px solid #ececf9;
}
.ui-widget-content .ui-state-active {
    background-color: white ;
    border: none !important;
}
.ui-widget-content a:hover {
  color: #333333;
}


.list_item_container {
    width:100%;
    height: 55px;
    float: left;
}
.list_item_container:hover {
  background-color: #0070B9;
  color: #fff;
}
.ui-widget-content .ui-state-active .list_item_container {
    background-color: #f5f5f5;
}

.image {
    height: 50px;
    width: 50px;
    float: left;
      padding-bottom:5px
}
.image img{

    width: 40px;
    height : 40px;
    border-radius: 100%;

}
.label{
  font-size: 14px;
    width: 85%;
    margin-left: 5px;
    text-align: left;
    padding-left: 5px;
    padding-top: 15px

}
.label strong {
  width: 100%
}

</style>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script type=\"text/javascript\">

  \$(document).ready(function(){
//recupération de tous les champs du formulaires qui possèdent la classe 'keywords'

 //recherche d'un lieu
 \$.each(\$(\".search_devis\"), function(key, place) {
   \$(place).autocomplete({
     source: \"/fr/recherche-user\",
     select: function( event, ui ) {
       console.log(ui.item);
      \$(\".search_devis\").val(ui.item.firstName+\" \"+ui.item.lastName+\" \"+ui.item.email);
      \$(\"#idClient\").val(ui.item.id);
      console.log(ui.item.id);
      console.log(\$(\"#idClient\").val());
      \$('.lds-ring').hide();
      return false;
    },
    search: function( event, ui ) {\$('.lds-ring').show();},
    close: function( event, ui ) {\$('.lds-ring').hide();},
    response: function( event, ui ) {\$('.lds-ring').hide();}
  }).data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
    \$('.lds-ring').hide();
    console.log(item);
    var inner_html = '<div class=\"list_item_container\"><strong style=\"font-size:14px;overflow: hidden;text-overflow: ellipsis; \">' + item.firstName + \" \" + item.lastName + \" \" + item.email +'</strong></div>';
    return \$( \"<li></li>\" )
    .attr( \"data-value\", item.firstName )
    .append(inner_html)
    .appendTo( ul );
  };
});


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
        return "profile/autocomplete.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">

<style media=\"screen\">

.autocomplete-suggestions { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: 1px solid #999; background: #FFF; cursor: pointer; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); }
.autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
.autocomplete-no-suggestion { padding: 2px 5px;}
.autocomplete-selected { background: #F0F0F0; }
.autocomplete-suggestions strong { font-weight: bold; color: #F17C30; }
.autocomplete-group { padding: 2px 5px; font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }
.ui-state-active h4,
.ui-state-active h4:visited {
    color: #26004d ;
    font-size: 14px
}
.ui-widget-content{
  height: auto;
  max-height: 300px;
  min-width:220px;
  overflow-y: auto;
  overflow-x: hidden;
}
.ui-menu-item{
    height: 55px;
    border: 1px solid #ececf9;
}
.ui-widget-content .ui-state-active {
    background-color: white ;
    border: none !important;
}
.ui-widget-content a:hover {
  color: #333333;
}


.list_item_container {
    width:100%;
    height: 55px;
    float: left;
}
.list_item_container:hover {
  background-color: #0070B9;
  color: #fff;
}
.ui-widget-content .ui-state-active .list_item_container {
    background-color: #f5f5f5;
}

.image {
    height: 50px;
    width: 50px;
    float: left;
      padding-bottom:5px
}
.image img{

    width: 40px;
    height : 40px;
    border-radius: 100%;

}
.label{
  font-size: 14px;
    width: 85%;
    margin-left: 5px;
    text-align: left;
    padding-left: 5px;
    padding-top: 15px

}
.label strong {
  width: 100%
}

</style>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script type=\"text/javascript\">

  \$(document).ready(function(){
//recupération de tous les champs du formulaires qui possèdent la classe 'keywords'

 //recherche d'un lieu
 \$.each(\$(\".search_devis\"), function(key, place) {
   \$(place).autocomplete({
     source: \"/fr/recherche-user\",
     select: function( event, ui ) {
       console.log(ui.item);
      \$(\".search_devis\").val(ui.item.firstName+\" \"+ui.item.lastName+\" \"+ui.item.email);
      \$(\"#idClient\").val(ui.item.id);
      console.log(ui.item.id);
      console.log(\$(\"#idClient\").val());
      \$('.lds-ring').hide();
      return false;
    },
    search: function( event, ui ) {\$('.lds-ring').show();},
    close: function( event, ui ) {\$('.lds-ring').hide();},
    response: function( event, ui ) {\$('.lds-ring').hide();}
  }).data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
    \$('.lds-ring').hide();
    console.log(item);
    var inner_html = '<div class=\"list_item_container\"><strong style=\"font-size:14px;overflow: hidden;text-overflow: ellipsis; \">' + item.firstName + \" \" + item.lastName + \" \" + item.email +'</strong></div>';
    return \$( \"<li></li>\" )
    .attr( \"data-value\", item.firstName )
    .append(inner_html)
    .appendTo( ul );
  };
});


});
</script>", "profile/autocomplete.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/profile/autocomplete.html.twig");
    }
}
