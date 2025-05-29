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

/* headerMenuSite.html.twig */
class __TwigTemplate_dee40dbf9196280c70414d3ef949207a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerMenuSite.html.twig"));

        // line 1
        yield "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t";
        // line 3
        yield "\t<style>
\t\t.floatingMenu{
\t\t\tposition: absolute;
\t\t\tbackground: white;
\t\t\tborder: 1px solid orange;
\t\t\tborder-radius: 10px;
\t\t\tpadding-block: 10px;
\t\t\ttop: 70px;
\t\t\twidth: 180px;
\t\t\tright: 100px;
\t\t\tdisplay: none;
\t\t}
\t\t.floatingMenu li{
\t\t\tpadding-inline: 10px;
\t\t}
\t\t.floatingMenu a{
\t\t\tfont-family: 'Palanquin',sans-serif;
\t\t\tcolor: black;
\t\t}
\t\t.floatingMenu a:hover{
\t\t\tcolor: #f17c30;
\t\t\ttext-decoration: none;
\t\t}
\t\t.logoButtonHeader div#navbarSupportedContent{
\t\t\tdisplay: none !important;
\t\t}
\t\t.nav-link {
\t\t\tfont-family: 'Source Sans Pro', sans-serif;
\t\t\tfont-size: 18px;
    \t}
\t\t
\t\tnav.navbar-expand-lg>div#navbarSupportedContent .toHideOnDesktop{
\t\t\tdisplay: none !important;
\t\t}
\t\t@media only screen and (max-width: 768px) {
\t\t\t.linkContent {
\t\t\t\t";
        // line 40
        yield "\t\t\t}
\t\t\t.floatingMenu{
\t\t\t\tz-index: 1;
\t\t\t\tright: 12px;
    \t\t\ttop: 70px;
\t\t\t}
\t\t\t.minify-menu{
\t\t\t\tdisplay: none !important;
\t\t\t}

\t\t\tnav.navbar-expand-lg>div#navbarSupportedContent, .resteMenu{
\t\t\t\tdisplay: none !important;
\t\t\t}
\t\t\t.logoButtonHeader div#navbarSupportedContent{
\t\t\t\tdisplay: block !important;
\t\t\t}
\t\t\t.mobilePositionHeader{
\t\t\t\tdisplay: flex;
\t\t\t\twidth: 100%;
\t\t\t\tjustify-content: flex-end;
\t\t\t}
\t\t\t.logoButtonHeader div#navbarSupportedContent .lang-selector:hover::after{
\t\t\t\tbackground-color: transparent;
\t\t\t}
\t\t}
\t\t.notification-new-marker{
\t\t\tbackground-color: red;
\t\t\twidth: 10px;
\t\t\theight: 10px;
\t\t\tborder-radius: 50%;
\t\t\tposition: absolute;
\t\t\ttop: 4px;
\t\t\tright: 7px;
\t\t}
\t</style>
\t<ul class=\"nav navbar-nav nav-flex-icons ml-auto mx-2 minify-menu\">
\t\t<li class=\"nav-item \"><a class=\"nav-link\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => "la-solution-trust-market"]);
        yield "\" aria-haspopup=\"true\">Solution</a>
\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_souscription");
        yield "\">Tarifs pros</a></li>
\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"https://meet.brevo.com/trustandmarket\" target=\"_blank\">Prendre rdv</a></li>
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-musique", "code_postal_ville" => "", "noPage" => 1]), "html", null, true);
        yield "\">
\t\t\t\t<i class=\"fa fa-search\" style=\"font-size: 24px;\"></i> <!-- Magnifying glass icon -->
\t\t\t</a>
    \t</li>
\t</ul>
\t<div class=\"c1grjlav crawnjq dir dir-ltr mobilePositionHeader\" style=\"position: relative;\">
\t\t<div class=\"linkContent\" style=\"display: flex;background: white;padding: 7px;justify-content:space-between;align-items:center;border-radius: 28px;\" type=\"button\">
\t\t\t<div class=\" dir dir-ltr\">
\t\t\t\t<svg viewBox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\"
\t\t\t\t\trole=\"presentation\" focusable=\"false\"
\t\t\t\t\tstyle=\"display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;\">
\t\t\t\t\t<g fill=\"none\" fill-rule=\"nonzero\">
\t\t\t\t\t\t<path d=\"m2 16h28\"></path>
\t\t\t\t\t\t<path d=\"m2 24h28\"></path>
\t\t\t\t\t\t<path d=\"m2 8h28\"></path>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t";
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98)) {
            // line 99
            yield "\t\t\t\t";
            $context["newmessages"] = $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ChatController::iHaveNewMessages"));
            // line 100
            yield "\t\t\t\t<p class=\"";
            if (CoreExtension::inFilter("yes", (isset($context["newmessages"]) || array_key_exists("newmessages", $context) ? $context["newmessages"] : (function () { throw new RuntimeError('Variable "newmessages" does not exist.', 100, $this->source); })()))) {
                yield "notification-new-marker";
            }
            yield "\"></p>
\t\t\t\t<img src=\"";
            // line 101
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "get", ["avatar"], "method", false, false, false, 101) != "")) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "get", ["avatar"], "method", false, false, false, 101), "html", null, true);
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            }
            yield "\" class=\"image-header rounded-circle z-depth-0\" alt=\"avatar image\" height=\"30\" style=\"margin-left:15px;width: 1.5rem;height: 1.5rem;\">
\t\t\t";
        } else {
            // line 103
            yield "\t\t\t\t<img src=\"/assets/img/profile/avatar-profile.png\" class=\"image-header rounded-circle z-depth-0\" alt=\"avatar image\" height=\"30\" style=\"margin-left:15px;width: 1.5rem;height: 1.5rem;\">
\t\t\t";
        }
        // line 105
        yield "\t\t</div>
\t\t
\t</div>
\t<div class=\"floatingMenu\">
\t\t";
        // line 109
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109)) {
            // line 110
            yield "\t\t\t";
            // line 111
            yield "\t\t\t<ul style=\"list-style: none;padding: 0;\">
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_chat", ["channel" => ""]);
            yield "\"><i class=\"fas fa-envelope ";
            if (CoreExtension::inFilter("yes", (isset($context["newmessages"]) || array_key_exists("newmessages", $context) ? $context["newmessages"] : (function () { throw new RuntimeError('Variable "newmessages" does not exist.', 113, $this->source); })()))) {
                yield "new-message";
            }
            yield "\"></i> Messagerie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"";
            // line 116
            if (((CoreExtension::inFilter("ROLE_SUPER_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "roles", [], "any", false, false, false, 116)) || CoreExtension::inFilter("ROLE_CONTRIBUTEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "roles", [], "any", false, false, false, 116))) || CoreExtension::inFilter("ROLE_COMMERCE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "roles", [], "any", false, false, false, 116)))) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            } else {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_dashboard");
                yield " ";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.dashboard"), "html", null, true);
            yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_profile");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.profil"), "html", null, true);
            yield "</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 121
            if ((((CoreExtension::inFilter("ROLE_AUTO_ENTREPRENEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "roles", [], "any", false, false, false, 121)) || CoreExtension::inFilter("ROLE_CONTRIBUTEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "roles", [], "any", false, false, false, 121))) || CoreExtension::inFilter("ROLE_COMMERCE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "roles", [], "any", false, false, false, 121))) || CoreExtension::inFilter("ROLE_SOCIETE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "roles", [], "any", false, false, false, 121)))) {
                // line 122
                yield "\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"";
                // line 123
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement");
                yield "\">Abonnements</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 126
            yield "\t\t\t\t
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_parameters");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.parametres"), "html", null, true);
            yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2 toHideOnDesktop\">
\t\t\t\t\t<a href=\"";
            // line 131
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => "la-solution-trust-market"]);
            yield "\">Solution</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2 toHideOnDesktop\">
\t\t\t\t\t<a href=\"";
            // line 134
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_souscription");
            yield "\">Tarifs pros</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2 toHideOnDesktop\">
\t\t\t\t\t<a href=\"https://meet.brevo.com/trustandmarket\" target=\"_blank\">Prendre rdv</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"";
            // line 140
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_favoris");
            yield "\">Favoris</a>
\t\t\t\t</li>
\t\t\t\t<p class=\"toHideOnDesktop\"></p>
\t\t\t\t<hr class=\"toHideOnDesktop\">
\t\t\t\t<li class=\"nav-item dropdown lang-selector toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownLang\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "get", ["_locale"], "method", false, false, false, 146) == "fr")) {
                // line 147
                yield "\t\t\t\t\t\t\t<span class=\"flag-icon flag-icon-fr\"></span>
\t\t\t\t\t\t\tFR
\t\t\t\t\t\t";
            } else {
                // line 150
                yield "\t\t\t\t\t\t\t";
                // line 152
                yield "\t\t\t\t\t\t";
            }
            // line 153
            yield "\t\t
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li id=\"shopping-link\" class=\"nav-item toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 157
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_panier_user");
            yield "\">
\t\t\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t\t\t<i id=\"shopping-bag\" class=\"fas fa-shopping-bag fa-lg\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-over badge-warning\" id=\"panier\">
\t\t\t\t\t\t\t";
            // line 161
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AnnoncesController::getPanierNumber"));
            yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<hr class=\"my-4\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 168
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.deconnexion"), "html", null, true);
            yield "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t";
        } else {
            // line 172
            yield "\t\t\t";
            // line 173
            yield "\t\t\t<ul style=\"list-style: none;padding: 0;\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 175
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 178
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"toHideOnDesktop\">
\t\t\t\t\t<a href=\"";
            // line 182
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_univers_trust", ["slug" => "la-solution-trust-market"]);
            yield "\">Solution</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"toHideOnDesktop\">
\t\t\t\t\t<a href=\"";
            // line 185
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_souscription");
            yield "\">Tarifs pros</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"toHideOnDesktop\">
\t\t\t\t\t<a href=\"https://meet.brevo.com/trustandmarket\" target=\"_blank\">Prendre rdv</a>
\t\t\t\t</li>
\t\t\t\t<p class=\"toHideOnDesktop\"></p>
\t\t\t\t<hr class=\"toHideOnDesktop\">
\t\t\t\t<li class=\"nav-item dropdown lang-selector toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownLang\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t";
            // line 194
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "request", [], "any", false, false, false, 194), "get", ["_locale"], "method", false, false, false, 194) == "fr")) {
                // line 195
                yield "\t\t\t\t\t\t\t<span class=\"flag-icon flag-icon-fr\"></span>
\t\t\t\t\t\t\tFR
\t\t\t\t\t\t";
            } else {
                // line 198
                yield "\t\t\t\t\t\t\t";
                // line 200
                yield "\t\t\t\t\t\t";
            }
            // line 201
            yield "\t\t
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li id=\"shopping-link\" class=\"nav-item toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 205
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_panier_user");
            yield "\">
\t\t\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t\t\t<i id=\"shopping-bag\" class=\"fas fa-shopping-bag fa-lg\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-over badge-warning\" id=\"panier\">
\t\t\t\t\t\t\t";
            // line 209
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AnnoncesController::getPanierNumber"));
            yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t";
        }
        // line 216
        yield "\t</div>
\t<ul class=\"nav navbar-nav nav-flex-icons ml-auto resteMenu\">
\t\t<li class=\"nav-item dropdown lang-selector\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownLang\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t";
        // line 220
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "request", [], "any", false, false, false, 220), "get", ["_locale"], "method", false, false, false, 220) == "fr")) {
            // line 221
            yield "\t\t\t\t\t<span class=\"flag-icon flag-icon-fr\"></span>
\t\t\t\t\tFR
\t\t\t\t";
        } else {
            // line 224
            yield "\t\t\t\t\t";
            // line 226
            yield "\t\t\t\t";
        }
        // line 227
        yield "
\t\t\t</a>
\t\t</li>
\t\t<li id=\"shopping-link\" class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"";
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_panier_user");
        yield "\">
\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t<i id=\"shopping-bag\" class=\"fas fa-shopping-bag fa-lg\"></i>
\t\t\t\t\t<span class=\"badge badge-over badge-warning\" id=\"panier\">
\t\t\t\t\t";
        // line 235
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AnnoncesController::getPanierNumber"));
        yield "
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "headerMenuSite.html.twig";
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
        return array (  420 => 235,  413 => 231,  407 => 227,  404 => 226,  402 => 224,  397 => 221,  395 => 220,  389 => 216,  379 => 209,  372 => 205,  366 => 201,  363 => 200,  361 => 198,  356 => 195,  354 => 194,  342 => 185,  336 => 182,  329 => 178,  323 => 175,  319 => 173,  317 => 172,  308 => 168,  298 => 161,  291 => 157,  285 => 153,  282 => 152,  280 => 150,  275 => 147,  273 => 146,  264 => 140,  255 => 134,  249 => 131,  241 => 128,  237 => 126,  231 => 123,  228 => 122,  226 => 121,  219 => 119,  206 => 116,  196 => 113,  192 => 111,  190 => 110,  188 => 109,  182 => 105,  178 => 103,  167 => 101,  160 => 100,  157 => 99,  155 => 98,  134 => 80,  128 => 77,  124 => 76,  86 => 40,  48 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t{# {{dump(header)}} #}
\t<style>
\t\t.floatingMenu{
\t\t\tposition: absolute;
\t\t\tbackground: white;
\t\t\tborder: 1px solid orange;
\t\t\tborder-radius: 10px;
\t\t\tpadding-block: 10px;
\t\t\ttop: 70px;
\t\t\twidth: 180px;
\t\t\tright: 100px;
\t\t\tdisplay: none;
\t\t}
\t\t.floatingMenu li{
\t\t\tpadding-inline: 10px;
\t\t}
\t\t.floatingMenu a{
\t\t\tfont-family: 'Palanquin',sans-serif;
\t\t\tcolor: black;
\t\t}
\t\t.floatingMenu a:hover{
\t\t\tcolor: #f17c30;
\t\t\ttext-decoration: none;
\t\t}
\t\t.logoButtonHeader div#navbarSupportedContent{
\t\t\tdisplay: none !important;
\t\t}
\t\t.nav-link {
\t\t\tfont-family: 'Source Sans Pro', sans-serif;
\t\t\tfont-size: 18px;
    \t}
\t\t
\t\tnav.navbar-expand-lg>div#navbarSupportedContent .toHideOnDesktop{
\t\t\tdisplay: none !important;
\t\t}
\t\t@media only screen and (max-width: 768px) {
\t\t\t.linkContent {
\t\t\t\t{# width: 25%; #}
\t\t\t}
\t\t\t.floatingMenu{
\t\t\t\tz-index: 1;
\t\t\t\tright: 12px;
    \t\t\ttop: 70px;
\t\t\t}
\t\t\t.minify-menu{
\t\t\t\tdisplay: none !important;
\t\t\t}

\t\t\tnav.navbar-expand-lg>div#navbarSupportedContent, .resteMenu{
\t\t\t\tdisplay: none !important;
\t\t\t}
\t\t\t.logoButtonHeader div#navbarSupportedContent{
\t\t\t\tdisplay: block !important;
\t\t\t}
\t\t\t.mobilePositionHeader{
\t\t\t\tdisplay: flex;
\t\t\t\twidth: 100%;
\t\t\t\tjustify-content: flex-end;
\t\t\t}
\t\t\t.logoButtonHeader div#navbarSupportedContent .lang-selector:hover::after{
\t\t\t\tbackground-color: transparent;
\t\t\t}
\t\t}
\t\t.notification-new-marker{
\t\t\tbackground-color: red;
\t\t\twidth: 10px;
\t\t\theight: 10px;
\t\t\tborder-radius: 50%;
\t\t\tposition: absolute;
\t\t\ttop: 4px;
\t\t\tright: 7px;
\t\t}
\t</style>
\t<ul class=\"nav navbar-nav nav-flex-icons ml-auto mx-2 minify-menu\">
\t\t<li class=\"nav-item \"><a class=\"nav-link\" href=\"{{ path('marketing_details_univers_trust', {slug:'la-solution-trust-market'}) }}\" aria-haspopup=\"true\">Solution</a>
\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_souscription')}}\">Tarifs pros</a></li>
\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"https://meet.brevo.com/trustandmarket\" target=\"_blank\">Prendre rdv</a></li>
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"{{ path('annonces_listeAnnonces', {'type_prestation': 'studio-musique', 'code_postal_ville': '', 'noPage': 1}) }}\">
\t\t\t\t<i class=\"fa fa-search\" style=\"font-size: 24px;\"></i> <!-- Magnifying glass icon -->
\t\t\t</a>
    \t</li>
\t</ul>
\t<div class=\"c1grjlav crawnjq dir dir-ltr mobilePositionHeader\" style=\"position: relative;\">
\t\t<div class=\"linkContent\" style=\"display: flex;background: white;padding: 7px;justify-content:space-between;align-items:center;border-radius: 28px;\" type=\"button\">
\t\t\t<div class=\" dir dir-ltr\">
\t\t\t\t<svg viewBox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\"
\t\t\t\t\trole=\"presentation\" focusable=\"false\"
\t\t\t\t\tstyle=\"display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;\">
\t\t\t\t\t<g fill=\"none\" fill-rule=\"nonzero\">
\t\t\t\t\t\t<path d=\"m2 16h28\"></path>
\t\t\t\t\t\t<path d=\"m2 24h28\"></path>
\t\t\t\t\t\t<path d=\"m2 8h28\"></path>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t{% if app.user %}
\t\t\t\t{% set newmessages = render(controller('App\\\\Controller\\\\ChatController::iHaveNewMessages')) %}
\t\t\t\t<p class=\"{% if 'yes' in newmessages %}notification-new-marker{% endif %}\"></p>
\t\t\t\t<img src=\"{% if app.session.get('avatar')!='' %} {{app.session.get('avatar')}}{% else %} {{asset('assets/img/profile/avatar-profile.png')}}{% endif %}\" class=\"image-header rounded-circle z-depth-0\" alt=\"avatar image\" height=\"30\" style=\"margin-left:15px;width: 1.5rem;height: 1.5rem;\">
\t\t\t{% else %}
\t\t\t\t<img src=\"/assets/img/profile/avatar-profile.png\" class=\"image-header rounded-circle z-depth-0\" alt=\"avatar image\" height=\"30\" style=\"margin-left:15px;width: 1.5rem;height: 1.5rem;\">
\t\t\t{% endif %}
\t\t</div>
\t\t
\t</div>
\t<div class=\"floatingMenu\">
\t\t{% if app.user %}
\t\t\t{# is non connected user #}
\t\t\t<ul style=\"list-style: none;padding: 0;\">
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"{{ path('chat_chat',{channel:''}) }}\"><i class=\"fas fa-envelope {% if 'yes' in newmessages %}new-message{% endif %}\"></i> Messagerie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"{% if 'ROLE_SUPER_ADMIN' in app.user.roles or 'ROLE_CONTRIBUTEUR' in app.user.roles or 'ROLE_COMMERCE' in app.user.roles %}{{path('admin')}}{% else %}{{ path('profile_dashboard' )}} {% endif %}\">{{'profil-utilisateur.liens.dashboard'|trans}}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"{{ path('profile_profile' )}}\">{{'profil-utilisateur.liens.profil'|trans}}</a>
\t\t\t\t</li>
\t\t\t\t{% if 'ROLE_AUTO_ENTREPRENEUR' in app.user.roles or 'ROLE_CONTRIBUTEUR' in app.user.roles or 'ROLE_COMMERCE' in app.user.roles or 'ROLE_SOCIETE' in app.user.roles %}
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"{{ path('app_abonnement') }}\">Abonnements</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"{{ path('profile_parameters' )}}\">{{'profil-utilisateur.liens.parametres'|trans}}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2 toHideOnDesktop\">
\t\t\t\t\t<a href=\"{{ path('marketing_details_univers_trust', {slug:'la-solution-trust-market'}) }}\">Solution</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2 toHideOnDesktop\">
\t\t\t\t\t<a href=\"{{path('app_souscription')}}\">Tarifs pros</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2 toHideOnDesktop\">
\t\t\t\t\t<a href=\"https://meet.brevo.com/trustandmarket\" target=\"_blank\">Prendre rdv</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mt-2\">
\t\t\t\t\t<a href=\"{{ path('annonces_favoris' )}}\">Favoris</a>
\t\t\t\t</li>
\t\t\t\t<p class=\"toHideOnDesktop\"></p>
\t\t\t\t<hr class=\"toHideOnDesktop\">
\t\t\t\t<li class=\"nav-item dropdown lang-selector toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownLang\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t{% if app.request.get('_locale')=='fr' %}
\t\t\t\t\t\t\t<span class=\"flag-icon flag-icon-fr\"></span>
\t\t\t\t\t\t\tFR
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{# <span class=\"flag-icon flag-icon-gb\"></span>
\t\t\t\t\t\t\tEN #}
\t\t\t\t\t\t{% endif %}
\t\t
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li id=\"shopping-link\" class=\"nav-item toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('annonces_panier_user')}}\">
\t\t\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t\t\t<i id=\"shopping-bag\" class=\"fas fa-shopping-bag fa-lg\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-over badge-warning\" id=\"panier\">
\t\t\t\t\t\t\t{{ render(controller('App\\\\Controller\\\\AnnoncesController::getPanierNumber')) }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<hr class=\"my-4\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">{{'profil-utilisateur.liens.deconnexion'|trans}}</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t{% else %}
\t\t\t{# is non connected user #}
\t\t\t<ul style=\"list-style: none;padding: 0;\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"toHideOnDesktop\">
\t\t\t\t\t<a href=\"{{ path('marketing_details_univers_trust', {slug:'la-solution-trust-market'}) }}\">Solution</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"toHideOnDesktop\">
\t\t\t\t\t<a href=\"{{path('app_souscription')}}\">Tarifs pros</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"toHideOnDesktop\">
\t\t\t\t\t<a href=\"https://meet.brevo.com/trustandmarket\" target=\"_blank\">Prendre rdv</a>
\t\t\t\t</li>
\t\t\t\t<p class=\"toHideOnDesktop\"></p>
\t\t\t\t<hr class=\"toHideOnDesktop\">
\t\t\t\t<li class=\"nav-item dropdown lang-selector toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownLang\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t{% if app.request.get('_locale')=='fr' %}
\t\t\t\t\t\t\t<span class=\"flag-icon flag-icon-fr\"></span>
\t\t\t\t\t\t\tFR
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{# <span class=\"flag-icon flag-icon-gb\"></span>
\t\t\t\t\t\t\tEN #}
\t\t\t\t\t\t{% endif %}
\t\t
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li id=\"shopping-link\" class=\"nav-item toHideOnDesktop\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('annonces_panier_user')}}\">
\t\t\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t\t\t<i id=\"shopping-bag\" class=\"fas fa-shopping-bag fa-lg\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-over badge-warning\" id=\"panier\">
\t\t\t\t\t\t\t{{ render(controller('App\\\\Controller\\\\AnnoncesController::getPanierNumber')) }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t{% endif %}
\t</div>
\t<ul class=\"nav navbar-nav nav-flex-icons ml-auto resteMenu\">
\t\t<li class=\"nav-item dropdown lang-selector\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownLang\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t{% if app.request.get('_locale')=='fr' %}
\t\t\t\t\t<span class=\"flag-icon flag-icon-fr\"></span>
\t\t\t\t\tFR
\t\t\t\t{% else %}
\t\t\t\t\t{# <span class=\"flag-icon flag-icon-gb\"></span>
\t\t\t\t\tEN #}
\t\t\t\t{% endif %}

\t\t\t</a>
\t\t</li>
\t\t<li id=\"shopping-link\" class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"{{path('annonces_panier_user')}}\">
\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t<i id=\"shopping-bag\" class=\"fas fa-shopping-bag fa-lg\"></i>
\t\t\t\t\t<span class=\"badge badge-over badge-warning\" id=\"panier\">
\t\t\t\t\t{{ render(controller('App\\\\Controller\\\\AnnoncesController::getPanierNumber')) }}
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>", "headerMenuSite.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/headerMenuSite.html.twig");
    }
}
