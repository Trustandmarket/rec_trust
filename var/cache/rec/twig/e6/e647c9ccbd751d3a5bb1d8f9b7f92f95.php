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

/* admin/dashboard.html.twig */
class __TwigTemplate_ca57d11c88e9c6c3b9795fb1b6bca5cf extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'main' => [$this, 'block_main'],
            'content_footer' => [$this, 'block_content_footer'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.dashboard"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/normalize.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/themify-icons.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/bootstrap.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/pe-icon-7-filled.css"), "html", null, true);
        yield "\" />
<link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/weather/css/weather-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/calendar/fullcalendar.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
";
        // line 15
        yield "<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/charts/chartist.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/lib/vector-map/jqvmap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/more.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/style_admin.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<style>
.menu {font-size: 14px;}
</style>
<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-4\">
                            <i class=\"pe-7f-users\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.users"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-1\">
                            <i class=\"pe-7f-speaker\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 50, $this->source); })())), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.annonce"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-2\">
                            <i class=\"pe-7f-cart\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })())), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.orders"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-3\">
                            <i class=\"pe-7f-pen\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 85, $this->source); })())), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.article"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"box-title\">Evolution des annonces / commandes au cours de l'année ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card-body\">
                            <div id=\"traffic-chart\" class=\"traffic-chart\"></div>
                            <b style=\"color: #f48684;\"> Annonces</b> |
                            <b style=\"color: #93cf96;\">Commandes</b>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\"></div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        // line 119
        yield "    Made with 🤍 by Kbr-Global Tech Team
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 123
        yield "<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
";
        // line 125
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/popper.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/plugins.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/main.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/chartist/chartist.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/chartist/chartist-plugin-legend.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/flot-chart/jquery.flot.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/flot-chart/jquery.flot.pie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/flot-chart/jquery.flot.spline.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/moment/moment.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/calendar/fullcalendar.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/calendar/fullcalendar-init.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
var year=";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ";

let traffic = document.getElementById('traffic-chart')
            // Traffic Chart using chartist
            console.log(traffic.length)
              var j=f=m=a=ma=ju=jul=au=sep=oc=no=de=0;
              var j1=f1=m1=a1=ma1=ju1=jul1=au1=sep1=oc1=no1=de1=0;

              ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 148
            yield "              if (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 148), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 148), "m"), "html", null, true);
            yield "==1) {j+=1;}
              if (";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 149), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 149), "m"), "html", null, true);
            yield "==2) {f+=1;}
              if (";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 150), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 150), "m"), "html", null, true);
            yield "==3) {m+=1;}
              if (";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 151), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 151), "m"), "html", null, true);
            yield "==4) {a+=1;}
              if (";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 152), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 152), "m"), "html", null, true);
            yield "==5) {ma+=1;}
              if (";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 153), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 153), "m"), "html", null, true);
            yield "==6) {ju+=1;}
              if (";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 154), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 154), "m"), "html", null, true);
            yield "==7) {jul+=1;}
              if (";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 155), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 155), "m"), "html", null, true);
            yield "==8) {au+=1;}
              if (";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 156), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 156), "m"), "html", null, true);
            yield "==9) {sep+=1;}
              if (";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 157), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 157), "m"), "html", null, true);
            yield "==10) {oc+=1;}
              if (";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 158), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 158), "m"), "html", null, true);
            yield "==11) {no+=1;}
              if (";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 159), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 159), "m"), "html", null, true);
            yield "==12) {de+=1;}
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "
              ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 163
            yield "              if (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 163), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 163), "m"), "html", null, true);
            yield "==1) {j1+=1;}
              if (";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 164), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 164), "m"), "html", null, true);
            yield "==2) {f1+=1;}
              if (";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 165), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 165), "m"), "html", null, true);
            yield "==3) {m1+=1;}
              if (";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 166), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 166), "m"), "html", null, true);
            yield "==4) {a1+=1;}
              if (";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 167), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 167), "m"), "html", null, true);
            yield "==5) {ma1+=1;}
              if (";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 168), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 168), "m"), "html", null, true);
            yield "==6) {ju1+=1;}
              if (";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 169), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 169), "m"), "html", null, true);
            yield "==7) {jul1+=1;}
              if (";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 170), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 170), "m"), "html", null, true);
            yield "==8) {au1+=1;}
              if (";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 171), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 171), "m"), "html", null, true);
            yield "==9) {sep1+=1;}
              if (";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 172), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 172), "m"), "html", null, true);
            yield "==10) {oc1+=1;}
              if (";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 173), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 173), "m"), "html", null, true);
            yield "==11) {no1+=1;}
              if (";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 174), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 174), "m"), "html", null, true);
            yield "==12) {de1+=1;}
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                  series: [
                    [j, f, m, a, ma, ju, jul, au, sep, oc, no, de],
                    [j1, f1, m1, a1, ma1, ju1, jul1, au1, sep1, oc1, no1, de1]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            // Traffic Chart using chartist End




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
        return "admin/dashboard.html.twig";
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
        return array (  522 => 176,  512 => 174,  506 => 173,  500 => 172,  494 => 171,  488 => 170,  482 => 169,  476 => 168,  470 => 167,  464 => 166,  458 => 165,  452 => 164,  445 => 163,  441 => 162,  438 => 161,  428 => 159,  422 => 158,  416 => 157,  410 => 156,  404 => 155,  398 => 154,  392 => 153,  386 => 152,  380 => 151,  374 => 150,  368 => 149,  361 => 148,  357 => 147,  346 => 139,  341 => 137,  337 => 136,  333 => 135,  329 => 134,  325 => 133,  321 => 132,  317 => 131,  313 => 130,  308 => 128,  304 => 127,  300 => 126,  295 => 125,  292 => 123,  282 => 122,  273 => 119,  263 => 118,  237 => 99,  221 => 86,  217 => 85,  198 => 69,  194 => 68,  174 => 51,  170 => 50,  151 => 34,  147 => 33,  129 => 18,  125 => 17,  121 => 16,  116 => 15,  112 => 13,  108 => 12,  104 => 11,  100 => 10,  96 => 9,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}

{% block page_title %}
    {{'admin.menu.dashboard'|trans}}
{% endblock %}

{% block main %}
<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/normalize.css') }}\" />
<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/themify-icons.css') }}\" />
<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\" />
<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/pe-icon-7-filled.css') }}\" />
<link href=\"{{ asset('admin/assets/weather/css/weather-icons.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('admin/assets/calendar/fullcalendar.css') }}\" rel=\"stylesheet\" />
{# <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/style.css') }}\" /> #}
<link href=\"{{ asset('admin/assets/css/charts/chartist.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('admin/assets/css/lib/vector-map/jqvmap.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('admin/assets/css/more.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('admin/assets/css/style_admin.css') }}\" rel=\"stylesheet\" />
<style>
.menu {font-size: 14px;}
</style>
<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-4\">
                            <i class=\"pe-7f-users\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">{{users}}</span></div>
                                <div class=\"stat-heading\">{{\"admin.dashboard.users\"|trans}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-1\">
                            <i class=\"pe-7f-speaker\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">{{post|length}}</span></div>
                                <div class=\"stat-heading\">{{\"admin.dashboard.annonce\"|trans}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-2\">
                            <i class=\"pe-7f-cart\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">{{order|length}}</span></div>
                                <div class=\"stat-heading\">{{\"admin.dashboard.orders\"|trans}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-3\">
                            <i class=\"pe-7f-pen\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">{{article|length}}</span></div>
                                <div class=\"stat-heading\">{{\"admin.dashboard.article\"|trans}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"box-title\">Evolution des annonces / commandes au cours de l'année {{'now'|date('Y')}}</h4>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card-body\">
                            <div id=\"traffic-chart\" class=\"traffic-chart\"></div>
                            <b style=\"color: #f48684;\"> Annonces</b> |
                            <b style=\"color: #93cf96;\">Commandes</b>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\"></div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block content_footer %}
    Made with 🤍 by Kbr-Global Tech Team
{% endblock %}

{% block body_javascript %}
<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
{# <script src=\"{{ asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}\" type=\"text/javascript\"></script> #}
<script src=\"{{ asset('admin/assets/js/popper.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/plugins.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/main.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/lib/chart-js/Chart.bundle.js') }}\" type=\"text/javascript\"></script>

<script src=\"{{ asset('admin/assets/js/lib/chartist/chartist.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/lib/chartist/chartist-plugin-legend.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/lib/flot-chart/jquery.flot.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/lib/flot-chart/jquery.flot.pie.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/lib/flot-chart/jquery.flot.spline.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/js/lib/moment/moment.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/calendar/fullcalendar.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('admin/assets/calendar/fullcalendar-init.js') }}\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
var year={{'now'|date('Y')}};

let traffic = document.getElementById('traffic-chart')
            // Traffic Chart using chartist
            console.log(traffic.length)
              var j=f=m=a=ma=ju=jul=au=sep=oc=no=de=0;
              var j1=f1=m1=a1=ma1=ju1=jul1=au1=sep1=oc1=no1=de1=0;

              {% for r in order %}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==1) {j+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==2) {f+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==3) {m+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==4) {a+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==5) {ma+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==6) {ju+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==7) {jul+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==8) {au+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==9) {sep+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==10) {oc+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==11) {no+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==12) {de+=1;}
              {% endfor %}

              {% for r in post %}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==1) {j1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==2) {f1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==3) {m1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==4) {a1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==5) {ma1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==6) {ju1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==7) {jul1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==8) {au1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==9) {sep1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==10) {oc1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==11) {no1+=1;}
              if ({{r.postDate|date('Y')}}==year && {{r.postDate|date('m')}}==12) {de1+=1;}
              {% endfor %}
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                  series: [
                    [j, f, m, a, ma, ju, jul, au, sep, oc, no, de],
                    [j1, f1, m1, a1, ma1, ju1, jul1, au1, sep1, oc1, no1, de1]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            // Traffic Chart using chartist End




    </script>
{% endblock body_javascript %}", "admin/dashboard.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/dashboard.html.twig");
    }
}
