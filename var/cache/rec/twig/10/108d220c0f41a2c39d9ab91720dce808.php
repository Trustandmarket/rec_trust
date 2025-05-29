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

/* cssTemplates/mediaHomeQuery.css.twig */
class __TwigTemplate_8d4acfbb12bfdc90001d79c7b931ff06 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cssTemplates/mediaHomeQuery.css.twig"));

        // line 1
        yield "<style >
    .ui-widget-content{
      max-height: 400px;
      width: 335px;
      overflow-y: auto;
      overflow-x: hidden;
      z-index: 2000;
    }

    .new-srch.active {
      display: inline-block;
    }

    .new-srch {
      display: none;
      width: 100%;
      border: 0.1em solid #e0e0e0;
      border-top: 0;
      padding: 1em 1em 1em 1em;

      background: #fff;
    }
    .new-srch .field-section {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .custom-item {
      border: 0.09em solid #e0e0e0;
      border-radius: 0.2em;
      padding: 0.3em 0.5em;
      font-family: 'Palanquin Dark', sans-serif;
      color: #000;
      font-size: 0.8em;
      cursor: pointer;
    
      min-width: 70px;
      width: 150px;
      word-break: break-word;
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-bottom: 2px;

      position: relative;
    }
    .input-type-prestation, .input-type-besoins {
      position: absolute;
      left: 0px;
      visibility: hidden;
    }

    .type-prestatation, .ville-region {
      width: 150px;
    }
    .dates-fld {
      width:158px;
    }
    .date_range_picker {
      width:100%;
      height:100%;
      left:0px;
      border: none;
    }
    .date_range_picker::placeholder {
      color: #000;
    }
    .date_range_picker:focus {
      outline: none;
    }

    .ville-region::placeholder{
      color: #000;
    }
    .ville-region:focus{
      border: 0.09em solid #e0e0e0;
      outline: none;
    }
    .btn--container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-bottom: 2px;
    }

    .btn--go{
      margin-left: 2em;
      color: #fff;
      background: #000;

      padding: 0.5em 1.5em;
      font-family: 'Palanquin Dark', sans-serif;
      font-size: 0.8em;
      cursor: pointer;
    }

    /**
    * dropdown pour type de prestation
    */
    .type-prestation-dropdown {
      display: none;
      position: absolute;
      width: 130%;
      text-align: left;
      background: #fff;
      border: 0.09em solid #e0e0e0;
      top: 100%;
      left: 0px;
      height: 100px;
      z-index: 2;
      overflow: hidden;
    }
    .type-prestation-dropdown .prestation-scroll-item {
      width: 110%;
      height: 100%;
      overflow-y: scroll;
    }
    .type-prestation-dropdown .prestation-scroll-item .item-option {
      margin-bottom: 2px;
      max-width: 95%;
      padding: 0.2em 0.5em;
    }

    .type-prestation-dropdown .prestation-scroll-item .item-option:hover {
      background: #f17c30;
      color: #fff;
    }
    .type-prestatation:hover .type-prestation-dropdown {
      display: inline-block;
    }

    /**
    * dropdown pour type de besoins
    */
    .besoin-fld-dropdown {
      display: none;
      position: absolute;
      width: 260px;
      text-align: left;
      background: #fff;
      border: 0.09em solid #e0e0e0;
      top: 100%;
      left: 0px;
      height: 100px;
      z-index: 2;
      overflow: hidden;
    }
    .besoin-fld-dropdown .besoin-fld-scroll-item {
      width: 110%;
      height: 100%;
      overflow-y: scroll;
    }
    .besoin-fld-dropdown .besoin-fld-scroll-item .item-option {
      margin-bottom: 2px;
      max-width: 95%;
      padding: 0.2em 0.5em;
    }
    .besoin-fld-dropdown .besoin-fld-scroll-item .item-option:hover {
      background: #f17c30;
      color: #fff;
    }
    .besoin-fld:hover .besoin-fld-dropdown {
      display: inline-block;
    }

    #custom-filter .btn.btn-lg {
      padding: 0.5em 1em;
    }

    #custom-filter{
      border:1px solid #f17c30;
      background: white;
    }

    #custom-filter .container{
      margin-top: 0;
      padding-top: 10px;
      padding-bottom: 50px;
      border:none;
    }

    .custom-form-color {
        margin-left: 4vw;
    }

    .box-prestation {
        height: 150px;
        object-fit: cover;
    }

      @media only screen and (min-width : 320px) and (max-device-width: 375px) {
      /**.col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      }
      */
    /**  #custom-filter-mob
      {
          display: none;
      }*/
      #shopping-bag {
          text-align: center;
          padding-right: 38px;
          vertical-align: middle;
      }
    }

      @media only screen and (min-width : 375px) and (max-device-width: 500px) {
     /** .col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      }*/
      /**#custom-filter-mob
      {
          display: none;
      }*/
      #shopping-bag {
        width: 100px !important;
          text-align: center;
          padding-right: 38px;
          vertical-align: middle;
      
      }
      
    }


     @media only screen and (min-width : 425px) and (max-device-width: 595px) {
     /** .col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      } */
      /**#custom-filter-mob
      {
          display: none;
      }*/
      #shopping-bag {
          width: 60px !important;
          text-align: center;
          padding-right: 56px;
          vertical-align: middle;
      }
    }

      @media only screen and (min-width : 768px) {
      .col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      }
    /**  #custom-filter-mob
      {
          display: none;
      }*/
    }

   /*  header{
      height: auto !important;
    } */

    @media only screen and (min-width : 1024px) {
      #custom-filter{
        margin-top: 5rem !important;
      }
      #imageHolder{
        overflow: inherit !important;
      }
      
  /**  #custom-filter-mob
    {
        display: none;
    }*/
    }
    @media only screen and (max-width : 1199px) {
      .btn--container.pl-2{
        padding-left: unset !important;
      }
      .btn--go {
        margin-left: unset;
      }
      #custom-filter-mob
      {
          display: none;
      }
    }
    @media only screen and (max-width : 545px) {
      .besoin-fld-dropdown{
        left: unset;
        right: 0px;
      }
     /** #custom-filter
      {
          display: none;
      }
      
      #custom-filter-mob
      {
          display: block;
}*/

      .btn.btn-lg {
          padding: 1rem 3.4rem;
          font-size: 0.88rem;
      }
    }
    /* iPhone X ----------- */
    @media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
    /* Styles */

      .py-5 {
          padding-top: 17rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 161% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        /*margin-left: -1.2em !important;*/
      }
    }
    /* Galaxy Note III ----------- */
    @media only screen and (min-device-width: 640px) and (max-device-height: 360px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
    /* Styles */

      #custom-filter .btn.btn-lg {
        margin-left: -1.05em !important;
      }
    }
    /* Blackberry playbook ----------- */
    @media only screen and (min-device-width: 600px) and (max-device-height: 1024px) and (orientation : portrait){
      .col-md-3 {
      flex: 0 0 100%;
      max-width: 100%;
      }
     /** #custom-filter-mob
      {
          display: none;
      }*/
      #custom-filter
      {
      border: 1px solid #f17c30;
      background: white;
      }
      #shopping-bag {
          width: 60px !important;
          text-align: center;
          padding-right: 56px;
          vertical-align: middle;
      }

      .mt-5, .my-5 {
        margin-top: 36rem!important;
      }

    }

    /* Galaxy SIII ----------- */
    @media only screen and (min-device-width: 640px) and (max-device-height: 360px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 161% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        margin-left: -1.2em !important;
      }
    }
    /* Pixel 2 XL----------- */
    @media only screen and (min-device-width: 823px) and (max-device-height: 411px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3.5){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 161% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        /*margin-left: -1.2em !important;*/
      }
    }
    /* Pixel 2 ----------- */
    @media only screen and (min-device-width: 731px) and (max-device-height: 411px) and (orientation : landscape){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 153% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        /*margin-left: -1.2em !important;*/
      }
    }
    /* iPhone   6 ----------- */
    @media only screen and (min-device-width: 667px) and (max-device-height: 375px) and (orientation : landscape){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 153% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        margin-left: -1.2em !important;
      }
    }
    /* iPhone   5 ----------- */
    @media only screen and (min-device-width: 568px) and (max-device-height: 320px) and (orientation : landscape){
    /* Styles */

      .py-5 {
          padding-top: 17rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 178% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        margin-left: -1.7em !important;
      }
    }




   @media (max-device-width: 924px){
      #custom-filter{
        margin-top: 56vw !important;
      }

      .link-card-actu{
        margin-left: 0rem!important;
      }

    .fullBackground{
          background-size: cover !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter{
      margin-top: 56vw !important;
      margin-left: 1.92rem!important;
      position: relative;
      }

     #imageHolder{
        ";
        // line 478
        yield "        height: auto;
      }

      ";
        // line 484
        yield "
      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }

    }

    @media (max-device-width: 860px){
      .fullBackground{
          background-size: contain !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter{
      margin-top: 6vw !important;
      margin-left: 1.92rem!important;
      position: relative;
      }

      #imageHolder{
        ";
        // line 511
        yield "        height: auto;
      }

      ";
        // line 517
        yield "
      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }



    }

/* @media (min-device-width: 861px) and (max-device-width: 1024px){

      .fullBackground{
          background-size: contain !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter {
      margin-left: 1.92rem!important;
      position: relative;
      width: 256px;
      max-width: 100%;
      margin-top: 5rem !important;
      margin-bottom: 5rem;
  }

    a.link-card-actu{
      width: 90% !important;
    }

      #imageHolder{
        ";
        // line 554
        yield "        height: auto;
      }

      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }

    } */

@media (min-device-width: 861px) and (max-device-width: 1024px){
  #custom-filter {
    margin-left: 1.92rem!important;
    position: relative;
    width: 290px !important;
    max-width: 100% !important;
    margin-top: 5rem !important;
    ";
        // line 574
        if ( !array_key_exists("actualite", $context)) {
            yield " margin-bottom: 5rem !important; ";
        }
        // line 575
        yield "  }
  a.link-card-actu {
      width: 275px !important;
  }
}
@media (max-width: 820px){
      a.link-card-actu{
        width: 88% !important;
      }
      #custom-filter {
        margin-top: 64vw !important;
        margin-left: 0rem!important;
        position: relative;
        width: 92% !important;
    }
}
@media (max-width: 376px){
      a.link-card-actu{
        width: 85% !important;
        margin-left: 0rem !important;
      }
}

@media (max-width: 767px){
      #custom-filter{
        margin-top: 45vw !important;
      }


      .fullBackground{
          background-size: contain !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter{
      margin-top: 56vw !important;
      margin-left: 1.92rem!important;
      position: relative;
      }

      #imageHolder{/* 
        ";
        // line 618
        yield " */
        height: auto;
      }

      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }

@media (max-width: 1016px){
        .fullBackground{
          background-size: contain !important;
      }
  }

@media (max-width: 375px){
    .link-card-actu, #custom-filter{
       margin-left: 0.7rem !important;
    }
}


  @media only screen and (min-width: 768px) {
      #custom-filter{
      margin-top: 0vw !important;
    }
}

@media (max-width: 450px){
      #custom-filter{
        width: 94% !important;
        margin-left: 0rem !important;
      }
      a.link-card-actu{
        width: 86% !important;
        margin-left: 0rem !important;
      }
}


  </style>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cssTemplates/mediaHomeQuery.css.twig";
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
        return array (  670 => 618,  625 => 575,  621 => 574,  599 => 554,  561 => 517,  556 => 511,  528 => 484,  523 => 478,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style >
    .ui-widget-content{
      max-height: 400px;
      width: 335px;
      overflow-y: auto;
      overflow-x: hidden;
      z-index: 2000;
    }

    .new-srch.active {
      display: inline-block;
    }

    .new-srch {
      display: none;
      width: 100%;
      border: 0.1em solid #e0e0e0;
      border-top: 0;
      padding: 1em 1em 1em 1em;

      background: #fff;
    }
    .new-srch .field-section {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .custom-item {
      border: 0.09em solid #e0e0e0;
      border-radius: 0.2em;
      padding: 0.3em 0.5em;
      font-family: 'Palanquin Dark', sans-serif;
      color: #000;
      font-size: 0.8em;
      cursor: pointer;
    
      min-width: 70px;
      width: 150px;
      word-break: break-word;
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-bottom: 2px;

      position: relative;
    }
    .input-type-prestation, .input-type-besoins {
      position: absolute;
      left: 0px;
      visibility: hidden;
    }

    .type-prestatation, .ville-region {
      width: 150px;
    }
    .dates-fld {
      width:158px;
    }
    .date_range_picker {
      width:100%;
      height:100%;
      left:0px;
      border: none;
    }
    .date_range_picker::placeholder {
      color: #000;
    }
    .date_range_picker:focus {
      outline: none;
    }

    .ville-region::placeholder{
      color: #000;
    }
    .ville-region:focus{
      border: 0.09em solid #e0e0e0;
      outline: none;
    }
    .btn--container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-bottom: 2px;
    }

    .btn--go{
      margin-left: 2em;
      color: #fff;
      background: #000;

      padding: 0.5em 1.5em;
      font-family: 'Palanquin Dark', sans-serif;
      font-size: 0.8em;
      cursor: pointer;
    }

    /**
    * dropdown pour type de prestation
    */
    .type-prestation-dropdown {
      display: none;
      position: absolute;
      width: 130%;
      text-align: left;
      background: #fff;
      border: 0.09em solid #e0e0e0;
      top: 100%;
      left: 0px;
      height: 100px;
      z-index: 2;
      overflow: hidden;
    }
    .type-prestation-dropdown .prestation-scroll-item {
      width: 110%;
      height: 100%;
      overflow-y: scroll;
    }
    .type-prestation-dropdown .prestation-scroll-item .item-option {
      margin-bottom: 2px;
      max-width: 95%;
      padding: 0.2em 0.5em;
    }

    .type-prestation-dropdown .prestation-scroll-item .item-option:hover {
      background: #f17c30;
      color: #fff;
    }
    .type-prestatation:hover .type-prestation-dropdown {
      display: inline-block;
    }

    /**
    * dropdown pour type de besoins
    */
    .besoin-fld-dropdown {
      display: none;
      position: absolute;
      width: 260px;
      text-align: left;
      background: #fff;
      border: 0.09em solid #e0e0e0;
      top: 100%;
      left: 0px;
      height: 100px;
      z-index: 2;
      overflow: hidden;
    }
    .besoin-fld-dropdown .besoin-fld-scroll-item {
      width: 110%;
      height: 100%;
      overflow-y: scroll;
    }
    .besoin-fld-dropdown .besoin-fld-scroll-item .item-option {
      margin-bottom: 2px;
      max-width: 95%;
      padding: 0.2em 0.5em;
    }
    .besoin-fld-dropdown .besoin-fld-scroll-item .item-option:hover {
      background: #f17c30;
      color: #fff;
    }
    .besoin-fld:hover .besoin-fld-dropdown {
      display: inline-block;
    }

    #custom-filter .btn.btn-lg {
      padding: 0.5em 1em;
    }

    #custom-filter{
      border:1px solid #f17c30;
      background: white;
    }

    #custom-filter .container{
      margin-top: 0;
      padding-top: 10px;
      padding-bottom: 50px;
      border:none;
    }

    .custom-form-color {
        margin-left: 4vw;
    }

    .box-prestation {
        height: 150px;
        object-fit: cover;
    }

      @media only screen and (min-width : 320px) and (max-device-width: 375px) {
      /**.col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      }
      */
    /**  #custom-filter-mob
      {
          display: none;
      }*/
      #shopping-bag {
          text-align: center;
          padding-right: 38px;
          vertical-align: middle;
      }
    }

      @media only screen and (min-width : 375px) and (max-device-width: 500px) {
     /** .col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      }*/
      /**#custom-filter-mob
      {
          display: none;
      }*/
      #shopping-bag {
        width: 100px !important;
          text-align: center;
          padding-right: 38px;
          vertical-align: middle;
      
      }
      
    }


     @media only screen and (min-width : 425px) and (max-device-width: 595px) {
     /** .col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      } */
      /**#custom-filter-mob
      {
          display: none;
      }*/
      #shopping-bag {
          width: 60px !important;
          text-align: center;
          padding-right: 56px;
          vertical-align: middle;
      }
    }

      @media only screen and (min-width : 768px) {
      .col-md-3 {
      flex: 0 0 25%;
      max-width: 30%;
      }
    /**  #custom-filter-mob
      {
          display: none;
      }*/
    }

   /*  header{
      height: auto !important;
    } */

    @media only screen and (min-width : 1024px) {
      #custom-filter{
        margin-top: 5rem !important;
      }
      #imageHolder{
        overflow: inherit !important;
      }
      
  /**  #custom-filter-mob
    {
        display: none;
    }*/
    }
    @media only screen and (max-width : 1199px) {
      .btn--container.pl-2{
        padding-left: unset !important;
      }
      .btn--go {
        margin-left: unset;
      }
      #custom-filter-mob
      {
          display: none;
      }
    }
    @media only screen and (max-width : 545px) {
      .besoin-fld-dropdown{
        left: unset;
        right: 0px;
      }
     /** #custom-filter
      {
          display: none;
      }
      
      #custom-filter-mob
      {
          display: block;
}*/

      .btn.btn-lg {
          padding: 1rem 3.4rem;
          font-size: 0.88rem;
      }
    }
    /* iPhone X ----------- */
    @media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
    /* Styles */

      .py-5 {
          padding-top: 17rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 161% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        /*margin-left: -1.2em !important;*/
      }
    }
    /* Galaxy Note III ----------- */
    @media only screen and (min-device-width: 640px) and (max-device-height: 360px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
    /* Styles */

      #custom-filter .btn.btn-lg {
        margin-left: -1.05em !important;
      }
    }
    /* Blackberry playbook ----------- */
    @media only screen and (min-device-width: 600px) and (max-device-height: 1024px) and (orientation : portrait){
      .col-md-3 {
      flex: 0 0 100%;
      max-width: 100%;
      }
     /** #custom-filter-mob
      {
          display: none;
      }*/
      #custom-filter
      {
      border: 1px solid #f17c30;
      background: white;
      }
      #shopping-bag {
          width: 60px !important;
          text-align: center;
          padding-right: 56px;
          vertical-align: middle;
      }

      .mt-5, .my-5 {
        margin-top: 36rem!important;
      }

    }

    /* Galaxy SIII ----------- */
    @media only screen and (min-device-width: 640px) and (max-device-height: 360px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 161% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        margin-left: -1.2em !important;
      }
    }
    /* Pixel 2 XL----------- */
    @media only screen and (min-device-width: 823px) and (max-device-height: 411px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3.5){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 161% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        /*margin-left: -1.2em !important;*/
      }
    }
    /* Pixel 2 ----------- */
    @media only screen and (min-device-width: 731px) and (max-device-height: 411px) and (orientation : landscape){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 153% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        /*margin-left: -1.2em !important;*/
      }
    }
    /* iPhone   6 ----------- */
    @media only screen and (min-device-width: 667px) and (max-device-height: 375px) and (orientation : landscape){
    /* Styles */

      .py-5 {
          padding-top: 16rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 153% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        margin-left: -1.2em !important;
      }
    }
    /* iPhone   5 ----------- */
    @media only screen and (min-device-width: 568px) and (max-device-height: 320px) and (orientation : landscape){
    /* Styles */

      .py-5 {
          padding-top: 17rem!important;
          /* margin-top: 250px; */
      }
      .view {
          height: 178% !important;
      }
      #custom-filter .container h4{
        font-size: 1rem !important;
      }
      #custom-filter .btn.btn-lg {
        margin-left: -1.7em !important;
      }
    }




   @media (max-device-width: 924px){
      #custom-filter{
        margin-top: 56vw !important;
      }

      .link-card-actu{
        margin-left: 0rem!important;
      }

    .fullBackground{
          background-size: cover !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter{
      margin-top: 56vw !important;
      margin-left: 1.92rem!important;
      position: relative;
      }

     #imageHolder{
        {# height: calc(56vw + 442px) #}
        height: auto;
      }

      {# .bloc-texte-home{
        width: 31% !important;
      } #}

      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }

    }

    @media (max-device-width: 860px){
      .fullBackground{
          background-size: contain !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter{
      margin-top: 6vw !important;
      margin-left: 1.92rem!important;
      position: relative;
      }

      #imageHolder{
        {# height: calc(56vw + 442px) #}
        height: auto;
      }

      {# .bloc-texte-home{
        width: 40.5% !important;
      } #}

      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }



    }

/* @media (min-device-width: 861px) and (max-device-width: 1024px){

      .fullBackground{
          background-size: contain !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter {
      margin-left: 1.92rem!important;
      position: relative;
      width: 256px;
      max-width: 100%;
      margin-top: 5rem !important;
      margin-bottom: 5rem;
  }

    a.link-card-actu{
      width: 90% !important;
    }

      #imageHolder{
        {# height: calc(15vw + 442px) #}
        height: auto;
      }

      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }

    } */

@media (min-device-width: 861px) and (max-device-width: 1024px){
  #custom-filter {
    margin-left: 1.92rem!important;
    position: relative;
    width: 290px !important;
    max-width: 100% !important;
    margin-top: 5rem !important;
    {% if actualite is not defined %} margin-bottom: 5rem !important; {% endif %}
  }
  a.link-card-actu {
      width: 275px !important;
  }
}
@media (max-width: 820px){
      a.link-card-actu{
        width: 88% !important;
      }
      #custom-filter {
        margin-top: 64vw !important;
        margin-left: 0rem!important;
        position: relative;
        width: 92% !important;
    }
}
@media (max-width: 376px){
      a.link-card-actu{
        width: 85% !important;
        margin-left: 0rem !important;
      }
}

@media (max-width: 767px){
      #custom-filter{
        margin-top: 45vw !important;
      }


      .fullBackground{
          background-size: contain !important; 
          background-repeat: no-repeat !important; 
          background-position-y: top !important; 
          background-color: white !important;
      }

    #custom-filter{
      margin-top: 56vw !important;
      margin-left: 1.92rem!important;
      position: relative;
      }

      #imageHolder{/* 
        {# height: calc(56vw + 442px) #} */
        height: auto;
      }

      #background-img{
        position: relative;
      }

      header{
        height: auto;
      }

@media (max-width: 1016px){
        .fullBackground{
          background-size: contain !important;
      }
  }

@media (max-width: 375px){
    .link-card-actu, #custom-filter{
       margin-left: 0.7rem !important;
    }
}


  @media only screen and (min-width: 768px) {
      #custom-filter{
      margin-top: 0vw !important;
    }
}

@media (max-width: 450px){
      #custom-filter{
        width: 94% !important;
        margin-left: 0rem !important;
      }
      a.link-card-actu{
        width: 86% !important;
        margin-left: 0rem !important;
      }
}


  </style>", "cssTemplates/mediaHomeQuery.css.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/cssTemplates/mediaHomeQuery.css.twig");
    }
}
