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

/* experience/envoyez_commentaires.html.twig */
class __TwigTemplate_42f3fa3e3c2c94d85ace1a786970618b extends Template
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

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "descriptiveContent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience/envoyez_commentaires.html.twig"));

        $this->parent = $this->loadTemplate("descriptiveContent.html.twig", "experience/envoyez_commentaires.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <meta name=\"title\" content=\"";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires")), "html", null, true);
        yield "\">

    ";
        // line 10
        yield "    <meta property=\"og:title\" content=\"";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta property=\"og:description\"
          content=\"";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta property=\"og:image\"
          content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires")), "html", null, true);
        yield "\">
    ";
        // line 18
        yield "
    ";
        // line 20
        yield "    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta name=\"twitter:description\"
          content=\"";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta name=\"twitter:image\"
          content=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    ";
        // line 29
        yield "
    ";
        // line 31
        yield "    <script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\",
\t\t\"description\": \"";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
        yield "\",
\t\t\"sameAs\": [
\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t]
\t}


    </script>
    ";
        // line 49
        yield "    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trust &amp; Market |";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 54
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">


    <link href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-feedback.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css\"
          integrity=\"sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==\"
          crossorigin=\"anonymous\"/>

    <style>
        .chat-menu a {
            border-radius: 50%;
            background-color: transparent;
            width: 100%;
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 55px !important;
            z-index: -999999;
            opacity: 0;
        }
    </style>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 93
        yield "    <div id=\"imageHolder\" class=\"view intro-2\">
        <div class=\"full-bg-img\">
            <div class=\"mask rgba-purple-light flex-center\">
                <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                    <h2 class=\"page-title\">
                        AIDE
                    </h2>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 109
        yield "    <!--Main Layout-->
    <main class=\"text-center mt-5\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"list-group text-left\">
                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sous_menu"]) || array_key_exists("sous_menu", $context) ? $context["sous_menu"] : (function () { throw new RuntimeError('Variable "sous_menu" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
            // line 117
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "id", [], "any", false, false, false, 117) != 3742)) {
                // line 118
                yield "                                <li class=\"list-group-item list-group-flush \">
                                    <a class=\"prestation-list-item\"
                                       href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => "aide", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postName", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\">
                                        ";
                // line 121
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "locale", [], "any", false, false, false, 121) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 121) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 121), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postTitle", [], "any", false, false, false, 121), "html", null, true);
                }
                // line 122
                yield "                                    </a>
                                </li>
                            ";
            }
            // line 125
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "                        <li class=\"list-group-item current-menu-item\">
                            <a class=\"prestation-list-item\" href=\"#\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.titre-menu"), "html", null, true);
        yield "</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-9 text-left\">
                    <h4>";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.titre-bloc"), "html", null, true);
        yield "</h4>
                    ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133)) {
            // line 134
            yield "                        <p class=\"sub-head\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.sous-titre-bloc"), "html", null, true);
            yield "
                        <strong style=\"font-weight: 800\">Trust &amp; Market</strong>.
                    ";
        } else {
            // line 137
            yield "                        <p class=\"not-logged-msg\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.condition"), "html", null, true);
            yield "</p>
                    ";
        }
        // line 139
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139)) {
            // line 140
            yield "                        <div class=\"feedback-div\">
                            <form method=\"POST\" class=\"form\" id=\"sendCommentEmail\"
                                  action=\"";
            // line 142
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_sendFeedbacks");
            yield "\">
                                <div class=\"feedback-box p-4\">
                                    <h5 style=\"font-size: 1.2rem; color: #333\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.label-menu-deroulant"), "html", null, true);
            yield "
                                        *</h5>
                                    <select required name=\"sujet\" id=\"remarkObject\"
                                            class=\"browser-default custom-select col-8 form-control rounded\">
                                        <option value=\"\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.choisir"), "html", null, true);
            yield "</option>
                                        <option value=\"Compte utilisateur\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.compte"), "html", null, true);
            yield "</option>
                                        <option value=\"Réservation/paiement\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.reservation"), "html", null, true);
            yield "</option>
                                        <option value=\"Annulation/Remboursement\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.annulation"), "html", null, true);
            yield "</option>
                                        <option value=\"Versement\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.versement"), "html", null, true);
            yield "</option>
                                        <option value=\"Design et Ergonomie\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.design"), "html", null, true);
            yield "</option>
                                        <option value=\"Technologique\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.technologie"), "html", null, true);
            yield "</option>
                                        <option value=\"Expériences utilisateurs\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.experience"), "html", null, true);
            yield "</option>
                                        <option value=\"Services aux utilisateurs\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.service"), "html", null, true);
            yield "</option>
                                        <option value=\"Bugs application\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.bug"), "html", null, true);
            yield "</option>
                                        <option value=\"Divers\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.divers"), "html", null, true);
            yield "</option>
                                    </select>

                                    <h5 class=\"mt-3\" style=\"font-size: 1.2rem; color:#333\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.texte"), "html", null, true);
            yield "
                                        *</h5>
                                    <textarea name=\"votre-message\" id=\"remarkMessage\" cols=\"80\" rows=\"10\"
                                              class=\"form-control mb-3\" placeholder=\"...\" required=\"\"></textarea>


                                    <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\"
                                         data-action=\"TRUST_FEEDBACKS\"></div>
                                </div>

                                <div class=\"row below-form px-4\">
                                    ";
            // line 173
            yield "                                    <div class=\"col-md-6 text-right\">
                                        <input type=\"submit\" id=\"contacterNousButton\"
                                               value=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.envoyer"), "html", null, true);
            yield "\"
                                               class=\"btn btn-orange btn-md btn-primary rounded text-capitalize\">
                                    </div>
                                </div>
                            </form>
                        </div>
                    ";
        } else {
            // line 182
            yield "                        <a class=\"nav-link\"
                           href=\"";
            // line 183
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.lien-inscription-connexion"), "html", null, true);
            yield "
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    ";
        }
        // line 187
        yield "                </div>
            </div>
        </div>
        ";
        // line 190
        yield from $this->loadTemplate("partials/project.html.twig", "experience/envoyez_commentaires.html.twig", 190)->unwrap()->yield($context);
        // line 191
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "experience/envoyez_commentaires.html.twig", 191)->unwrap()->yield($context);
        // line 192
        yield "    </main>
    <!--Main Layout-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 198
        yield "        ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 203
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

        <!-- jQuery plugin for datepicker -->
        <script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
        <script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>

        <script>
            \$(document).ready(function () {
                var docWidth = document.documentElement.offsetWidth;

                [].forEach.call(document.querySelectorAll('*'), function (el) {
                    if (el.offsetWidth > docWidth) {
                        console.log(el);
                    }
                });
// Hambuger menu icon
                \$('.animated-button-icon').on('click', function () {
                    \$('.animated-icon2').toggleClass('open');
                });

// Recherche avancer
                \$(\"#recherche-avancer\").click(function () {
                    \$(\"#sectionAvancer\").toggleClass('d-none');
                });

// first thing turn Hide Menu Search bar
                \$(\"#searchMenu\").hide();
// toggle menu search bar on/off
                \$(\"#searchMenuShowHide\").click(function () {
                    \$(\"#searchMenu\").toggle(\"slide\");
                });

// first thing turn Hide \"Autre besoin\" input field
                \$(\"#autresBesoins\").hide();
// toggle menu search bar on/off
                \$(\"#autres\").click(function () {
                    \$(\"#autresBesoins\").toggle(\"slide\");
                });


// For comments add

                \$('#sendCommentEmail').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                    e.preventDefault();

                    \$('#contacterNousButton').addClass('running');
                    toastr.info(\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.requete-en-cours"), "html", null, true);
        yield "\");

                    let \$form = \$(this);
                    let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                    let data = (formdata !== null) ? formdata : \$form.serialize();


                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function (response) {
                        console.log(response)
                            if (response == 1) {
                                toastr.clear();
                                toastr.success('";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.succes"), "html", null, true);
        yield "');
                                window.location = \"\";
                            } else if (response == 0) {
                                \$('#contacterNousButton').removeClass('running');
                                toastr.clear();
                                toastr.error('";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.erreur"), "html", null, true);
        yield "');
                            }
                        },
                        error: function (response) {
                            \$('#contacterNousButton').removeClass('running');
                            toastr.clear();
                            toastr.error('";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.erreur"), "html", null, true);
        yield "');
                        }
                    });
                    return false;

                });

            });
            window.addEventListener('load', () => {
                const \$recaptcha = document.querySelector('#g-recaptcha-response');
                if (\$recaptcha) {
                    \$recaptcha.setAttribute('required', 'required');
                }
            })

            toastr.options = {
                \"closeButton\": true,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-center\",
                \"preventDuplicates\": false,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"1000\",
                \"timeOut\": \"12000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }
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
        return "experience/envoyez_commentaires.html.twig";
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
        return array (  626 => 280,  617 => 274,  609 => 269,  589 => 252,  544 => 210,  537 => 206,  530 => 203,  520 => 202,  508 => 198,  498 => 197,  487 => 192,  484 => 191,  482 => 190,  477 => 187,  468 => 183,  465 => 182,  455 => 175,  451 => 173,  437 => 161,  431 => 158,  427 => 157,  423 => 156,  419 => 155,  415 => 154,  411 => 153,  407 => 152,  403 => 151,  399 => 150,  395 => 149,  391 => 148,  384 => 144,  379 => 142,  375 => 140,  372 => 139,  366 => 137,  359 => 134,  357 => 133,  353 => 132,  345 => 127,  342 => 126,  336 => 125,  331 => 122,  325 => 121,  321 => 120,  317 => 118,  314 => 117,  310 => 116,  301 => 109,  291 => 108,  271 => 93,  261 => 92,  228 => 65,  222 => 62,  218 => 61,  214 => 60,  208 => 57,  201 => 54,  191 => 53,  173 => 51,  164 => 49,  149 => 36,  145 => 35,  139 => 31,  136 => 29,  132 => 27,  128 => 26,  123 => 24,  118 => 22,  114 => 20,  111 => 18,  107 => 16,  102 => 14,  97 => 12,  91 => 10,  86 => 7,  82 => 6,  78 => 5,  73 => 4,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'descriptiveContent.html.twig' %}

{% block head %}
    {{ parent() }}
    <meta name=\"title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'retours-experience'}) }}\">
    <meta name=\"description\" content=\"{{ include('Seo/Meta/description.html.twig', {code: 'retours-experience'}) }}\">
    <link rel=\"canonical\" href=\"{{ absolute_url(path('experience_envoyez_commentaires')) }}\">

    {# OG CONTENT #}
    <meta property=\"og:title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'retours-experience'}) }}\">
    <meta property=\"og:description\"
          content=\"{{ include('Seo/Meta/description.html.twig', {code: 'retours-experience'}) }}\">
    <meta property=\"og:image\"
          content=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ absolute_url(path('experience_envoyez_commentaires')) }}\">
    {# END OG CONTENT #}

    {# Twitter CARD #}
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'retours-experience'}) }}\">
    <meta name=\"twitter:description\"
          content=\"{{ include('Seo/Meta/description.html.twig', {code: 'retours-experience'}) }}\">
    <meta name=\"twitter:image\"
          content=\"{{ absolute_url(asset('assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png')) }}\">
    <meta name=\"twitter:image:alt\" content=\"{{ include('Seo/Meta/title.html.twig', {code: 'retours-experience'}) }}\">
    {# END Twitter Card #}

    {# JSON LD #}
    <script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"{{ include('Seo/Meta/title.html.twig', {code: 'retours-experience'}) }}\",
\t\t\"description\": \"{{ include('Seo/Meta/description.html.twig', {code: 'retours-experience'}) }}\",
\t\t\"sameAs\": [
\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t]
\t}


    </script>
    {# END JSON LD #}
    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
{% endblock %}
{% block title %}Trust &amp; Market |{{ include('Seo/Meta/title.html.twig', {code: 'retours-experience'}) }}{% endblock %}

{% block style %}
    {{ parent() }}

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/gijgo-css/gijgo.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Your custom styles (optional) -->
    <link href=\"{{ asset('assets/css/result.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/custome.css') }} \" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\">


    <link href=\"{{ asset('assets/css/style-feedback.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css\"
          integrity=\"sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==\"
          crossorigin=\"anonymous\"/>

    <style>
        .chat-menu a {
            border-radius: 50%;
            background-color: transparent;
            width: 100%;
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 55px !important;
            z-index: -999999;
            opacity: 0;
        }
    </style>


{% endblock %}


{% block navigation %}
    <div id=\"imageHolder\" class=\"view intro-2\">
        <div class=\"full-bg-img\">
            <div class=\"mask rgba-purple-light flex-center\">
                <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                    <h2 class=\"page-title\">
                        AIDE
                    </h2>
                </div>
            </div>
        </div>
    </div>

{% endblock %}


{% block body %}
    <!--Main Layout-->
    <main class=\"text-center mt-5\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"list-group text-left\">
                        {% for m1 in sous_menu %}
                            {% if m1.id != 3742 %}
                                <li class=\"list-group-item list-group-flush \">
                                    <a class=\"prestation-list-item\"
                                       href=\"{{ path('page_navigation', {idPage: \"aide\", id: m1.postName}) }}\">
                                        {% if app.request.locale == 'en' and m1.postExcerpt != '' %}{{ m1.postExcerpt }}{% else %}{{ m1.postTitle }}{% endif %}
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                        <li class=\"list-group-item current-menu-item\">
                            <a class=\"prestation-list-item\" href=\"#\">{{ 'feedback.titre-menu'|trans }}</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-9 text-left\">
                    <h4>{{ 'feedback.titre-bloc'|trans }}</h4>
                    {% if app.user %}
                        <p class=\"sub-head\">{{ 'feedback.sous-titre-bloc'|trans }}
                        <strong style=\"font-weight: 800\">Trust &amp; Market</strong>.
                    {% else %}
                        <p class=\"not-logged-msg\">{{ 'feedback.condition'|trans }}</p>
                    {% endif %}
                    {% if app.user %}
                        <div class=\"feedback-div\">
                            <form method=\"POST\" class=\"form\" id=\"sendCommentEmail\"
                                  action=\"{{ path('experience_sendFeedbacks') }}\">
                                <div class=\"feedback-box p-4\">
                                    <h5 style=\"font-size: 1.2rem; color: #333\">{{ 'feedback.label-menu-deroulant'|trans }}
                                        *</h5>
                                    <select required name=\"sujet\" id=\"remarkObject\"
                                            class=\"browser-default custom-select col-8 form-control rounded\">
                                        <option value=\"\">{{ 'feedback.menu-deroulant.choisir'|trans }}</option>
                                        <option value=\"Compte utilisateur\">{{ 'feedback.menu-deroulant.compte'|trans }}</option>
                                        <option value=\"Réservation/paiement\">{{ 'feedback.menu-deroulant.reservation'|trans }}</option>
                                        <option value=\"Annulation/Remboursement\">{{ 'feedback.menu-deroulant.annulation'|trans }}</option>
                                        <option value=\"Versement\">{{ 'feedback.menu-deroulant.versement'|trans }}</option>
                                        <option value=\"Design et Ergonomie\">{{ 'feedback.menu-deroulant.design'|trans }}</option>
                                        <option value=\"Technologique\">{{ 'feedback.menu-deroulant.technologie'|trans }}</option>
                                        <option value=\"Expériences utilisateurs\">{{ 'feedback.menu-deroulant.experience'|trans }}</option>
                                        <option value=\"Services aux utilisateurs\">{{ 'feedback.menu-deroulant.service'|trans }}</option>
                                        <option value=\"Bugs application\">{{ 'feedback.menu-deroulant.bug'|trans }}</option>
                                        <option value=\"Divers\">{{ 'feedback.menu-deroulant.divers'|trans }}</option>
                                    </select>

                                    <h5 class=\"mt-3\" style=\"font-size: 1.2rem; color:#333\">{{ 'feedback.texte'|trans }}
                                        *</h5>
                                    <textarea name=\"votre-message\" id=\"remarkMessage\" cols=\"80\" rows=\"10\"
                                              class=\"form-control mb-3\" placeholder=\"...\" required=\"\"></textarea>


                                    <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\"
                                         data-action=\"TRUST_FEEDBACKS\"></div>
                                </div>

                                <div class=\"row below-form px-4\">
                                    {#<div class=\"col-md-6 text-left\">* {{ 'feedback.menu-deroulant.infos'|trans }}</div>#}
                                    <div class=\"col-md-6 text-right\">
                                        <input type=\"submit\" id=\"contacterNousButton\"
                                               value=\"{{ 'feedback.envoyer'|trans }}\"
                                               class=\"btn btn-orange btn-md btn-primary rounded text-capitalize\">
                                    </div>
                                </div>
                            </form>
                        </div>
                    {% else %}
                        <a class=\"nav-link\"
                           href=\"{{ path('app_login') }}\">{{ 'home.menu.lien-inscription-connexion'|trans }}
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
        {% include(\"partials/project.html.twig\") %}
        {% include(\"partials/otherPagesVideoModal.html.twig\") %}
    </main>
    <!--Main Layout-->

{% endblock %}

\t{% block footer %}
        {{ parent() }}

    {% endblock %}

\t{% block javascripts %}
        {{ parent() }}

        <!-- jQuery plugin for datepicker -->
        <script src=\"{{ asset('assets/js/gijgo-js/gijgo.min.2.js') }}\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
        <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>

        <script>
            \$(document).ready(function () {
                var docWidth = document.documentElement.offsetWidth;

                [].forEach.call(document.querySelectorAll('*'), function (el) {
                    if (el.offsetWidth > docWidth) {
                        console.log(el);
                    }
                });
// Hambuger menu icon
                \$('.animated-button-icon').on('click', function () {
                    \$('.animated-icon2').toggleClass('open');
                });

// Recherche avancer
                \$(\"#recherche-avancer\").click(function () {
                    \$(\"#sectionAvancer\").toggleClass('d-none');
                });

// first thing turn Hide Menu Search bar
                \$(\"#searchMenu\").hide();
// toggle menu search bar on/off
                \$(\"#searchMenuShowHide\").click(function () {
                    \$(\"#searchMenu\").toggle(\"slide\");
                });

// first thing turn Hide \"Autre besoin\" input field
                \$(\"#autresBesoins\").hide();
// toggle menu search bar on/off
                \$(\"#autres\").click(function () {
                    \$(\"#autresBesoins\").toggle(\"slide\");
                });


// For comments add

                \$('#sendCommentEmail').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                    e.preventDefault();

                    \$('#contacterNousButton').addClass('running');
                    toastr.info(\"{{ 'systeme.email.requete-en-cours'|trans }}\");

                    let \$form = \$(this);
                    let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                    let data = (formdata !== null) ? formdata : \$form.serialize();


                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function (response) {
                        console.log(response)
                            if (response == 1) {
                                toastr.clear();
                                toastr.success('{{ 'systeme.email.succes'|trans }}');
                                window.location = \"\";
                            } else if (response == 0) {
                                \$('#contacterNousButton').removeClass('running');
                                toastr.clear();
                                toastr.error('{{ 'systeme.email.erreur'|trans }}');
                            }
                        },
                        error: function (response) {
                            \$('#contacterNousButton').removeClass('running');
                            toastr.clear();
                            toastr.error('{{ 'systeme.email.erreur'|trans }}');
                        }
                    });
                    return false;

                });

            });
            window.addEventListener('load', () => {
                const \$recaptcha = document.querySelector('#g-recaptcha-response');
                if (\$recaptcha) {
                    \$recaptcha.setAttribute('required', 'required');
                }
            })

            toastr.options = {
                \"closeButton\": true,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-center\",
                \"preventDuplicates\": false,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"1000\",
                \"timeOut\": \"12000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }
        </script>

    {% endblock %}
", "experience/envoyez_commentaires.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/experience/envoyez_commentaires.html.twig");
    }
}
