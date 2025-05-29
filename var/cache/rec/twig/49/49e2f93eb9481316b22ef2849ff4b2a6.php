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

/* admin/Marketing/Actualites/all_actualite.html.twig */
class __TwigTemplate_6225d95ebc68737f8342acb285b2c060 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Marketing/Actualites/all_actualite.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Marketing/Actualites/all_actualite.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 3
        yield "    Marketing - Actualites
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        yield "    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\"
          integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    ";
        // line 14
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <div class=\"content\">
        <style>
            #main-menu {
                font-size: 14px;
            }
        </style>
        <div class=\"animated fadeIn\">
            <div class=\"clearfix\"></div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            ";
        // line 30
        $context["url_new"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\Actualites\\WpPostsCrudController"], "method", false, false, false, 30), "setAction", ["new"], "method", false, false, false, 30);
        // line 31
        yield "                            <h4 class=\"box-title\">Marketing - Actualites<a class=\"badge badge-complete right1\"
                                                                           href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_new"]) || array_key_exists("url_new", $context) ? $context["url_new"] : (function () { throw new RuntimeError('Variable "url_new" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\"
                                                                           title=\"Ajouter une actualite\">
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </h4>
                        </div>
                        <div class=\"card-body--\">
                            <div class=\"table-stats order-table ov-h\">
                                <table class=\"table \">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Url</th>
                                        <th>Etat</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 52
            yield "                                        <tr style=\"background-color: #F7F7F7;font-weight: bold;\">
                                            <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                            <td>";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 54);
            yield "</td>
                                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "guid", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                            <td>";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postStatus", [], "any", false, false, false, 56) == "publish")) {
                // line 57
                yield "                                                    <button class=\"btn btn-round btn-success\">Afficher
                                                    </button>";
            } else {
                // line 59
                yield "                                                    <button class=\"btn btn-round btn-warning\">En brouillon</button>
                                                ";
            }
            // line 60
            yield "</td>
                                            <td>
                                                <a class=\"badge badge-pending post-details my-1\"
                                                   data-description=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postContent", [], "any", false, false, false, 63), "html", null, true);
            yield "\" data-guid=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "guid", [], "any", false, false, false, 63), "html", null, true);
            yield "\"
                                                   data-title=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 64), "html", null, true);
            yield "\"
                                                   data-type=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "pingStatus", [], "any", false, false, false, 65)), "html", null, true);
            yield "--";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "toPing", [], "any", false, false, false, 65), "html", null, true);
            yield "\"
                                                   data-etat=\"";
            // line 66
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postStatus", [], "any", false, false, false, 66) == 1)) {
                yield "Afficher";
            } else {
                yield "Masquer";
            }
            yield "\"
                                                   data-toggle=\"modal\" data-target=\"#details-post\" href=\"\"
                                                   title=\"Details du post\">
                                                    <i class=\"fa fa-eye \"></i>
                                                </a>
                                                ";
            // line 71
            $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\Actualites\\WpPostsCrudController"], "method", false, false, false, 71), "setAction", ["edit"], "method", false, false, false, 71), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 71)], "method", false, false, false, 71);
            // line 72
            yield "                                                <a class=\"badge badge-pending update my-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "\"
                                                   title=\"Modifier le post\">
                                                    <i class=\"fa fa-edit \"></i>
                                                </a>
                                                ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postStatus", [], "any", false, false, false, 76) == "draft")) {
                // line 77
                yield "                                                    <a class=\"red delete my-1\"
                                                       href=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_delete_get", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\"
                                                       title=\"Supprimer le menu\">
                                                        <i class=\"fa fa-trash\"></i>
                                                    </a>
                                                ";
            }
            // line 83
            yield "                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade none-border\" id=\"details-post\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">
                            <strong>Details de l'actualite</strong>
                        </h4>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"new_critere_type\">
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Titre</div>
                                    <div class=\"col-md-12\" id=\"modal_titre\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">URL</div>
                                    <div class=\"col-md-12\" id=\"modal_guid\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Type</div>
                                    <div class=\"col-md-12\" id=\"modal_type\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Etat</div>
                                    <div class=\"col-md-12\" id=\"modal_etat\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Description</div>
                                    <div class=\"col-md-12\" id=\"modal_description\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 151
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    ";
        // line 154
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\">


        \$(document).ready(function () {
            \$(document).on('click', '.post-details', function (e) {
                \$('#modal_titre').empty().append(\$(this).data('title'));
                \$('#modal_guid').empty().append(\$(this).data('guid'));
                \$('#modal_type').empty().append(\$(this).data('type'));
                \$('#modal_etat').empty().append(\$(this).data('etat'));
                \$('#modal_description').empty().append(\$(this).data('description'));
            })
        })

        \$(document).on('click', '.delete', function (e) {
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Suppression de l'actualite\",
                text: \"Attention l'actualite sera Supprimée et n'apparaitra plus sur votre site\",
                type: \"info\",
                showCancelButton: true,
                confirmButtonClass: \"btn-danger\",
                confirmButtonText: \"Supprimer\",
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
                                swal(\"Suppression terminée\", \"\", \"success\");
                                t.parents('tr').hide();
                            } else if (reponse == 2) {
                                swal(\"La catégorie contient des produits\", \"\", \"warning\");
                            } else {
                                swal(\"Erreur de suppression\", \"\", \"error\");
                            }

                        },
                        error: function (reponse) {
                            swal(\"Erreur de suppression\", \"\", \"error\");
                        }
                    });
                } else {
                    swal.close();
                }
            });
            return false;
        });

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
        return "admin/Marketing/Actualites/all_actualite.html.twig";
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
        return array (  336 => 158,  332 => 157,  327 => 154,  323 => 151,  313 => 150,  243 => 86,  235 => 83,  227 => 78,  224 => 77,  222 => 76,  214 => 72,  212 => 71,  200 => 66,  194 => 65,  190 => 64,  184 => 63,  179 => 60,  175 => 59,  171 => 57,  169 => 56,  165 => 55,  161 => 54,  157 => 53,  154 => 52,  150 => 51,  128 => 32,  125 => 31,  123 => 30,  107 => 17,  103 => 16,  99 => 15,  94 => 14,  88 => 7,  78 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
    Marketing - Actualites
{% endblock %}

{% block content %}
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\"
          integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    {#<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/more.css') }}\"> #}
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
    <div class=\"content\">
        <style>
            #main-menu {
                font-size: 14px;
            }
        </style>
        <div class=\"animated fadeIn\">
            <div class=\"clearfix\"></div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            {% set url_new = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\Actualites\\\\WpPostsCrudController').setAction('new') %}
                            <h4 class=\"box-title\">Marketing - Actualites<a class=\"badge badge-complete right1\"
                                                                           href=\"{{ url_new }}\"
                                                                           title=\"Ajouter une actualite\">
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </h4>
                        </div>
                        <div class=\"card-body--\">
                            <div class=\"table-stats order-table ov-h\">
                                <table class=\"table \">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Url</th>
                                        <th>Etat</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for m in actualites %}
                                        <tr style=\"background-color: #F7F7F7;font-weight: bold;\">
                                            <td>{{ m.id }}</td>
                                            <td>{{ m.postTitle|raw }}</td>
                                            <td>{{ m.guid }}</td>
                                            <td>{% if m.postStatus == 'publish' %}
                                                    <button class=\"btn btn-round btn-success\">Afficher
                                                    </button>{% else %}
                                                    <button class=\"btn btn-round btn-warning\">En brouillon</button>
                                                {% endif %}</td>
                                            <td>
                                                <a class=\"badge badge-pending post-details my-1\"
                                                   data-description=\"{{ m.postContent }}\" data-guid=\"{{ m.guid }}\"
                                                   data-title=\"{{ m.postTitle }}\"
                                                   data-type=\"{{ m.pingStatus|upper }}--{{ m.toPing }}\"
                                                   data-etat=\"{% if m.postStatus == 1 %}Afficher{% else %}Masquer{% endif %}\"
                                                   data-toggle=\"modal\" data-target=\"#details-post\" href=\"\"
                                                   title=\"Details du post\">
                                                    <i class=\"fa fa-eye \"></i>
                                                </a>
                                                {% set url = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\Actualites\\\\WpPostsCrudController').setAction('edit').setEntityId(m.id) %}
                                                <a class=\"badge badge-pending update my-1\" href=\"{{ url }}\"
                                                   title=\"Modifier le post\">
                                                    <i class=\"fa fa-edit \"></i>
                                                </a>
                                                {% if m.postStatus == 'draft' %}
                                                    <a class=\"red delete my-1\"
                                                       href=\"{{ path('post_delete_get', {id : m.id}) }}\"
                                                       title=\"Supprimer le menu\">
                                                        <i class=\"fa fa-trash\"></i>
                                                    </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade none-border\" id=\"details-post\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">
                            <strong>Details de l'actualite</strong>
                        </h4>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"new_critere_type\">
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Titre</div>
                                    <div class=\"col-md-12\" id=\"modal_titre\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">URL</div>
                                    <div class=\"col-md-12\" id=\"modal_guid\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Type</div>
                                    <div class=\"col-md-12\" id=\"modal_type\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Etat</div>
                                    <div class=\"col-md-12\" id=\"modal_etat\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"col-md-12\">Description</div>
                                    <div class=\"col-md-12\" id=\"modal_description\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
{% endblock %}

{% block body_javascript %}
    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    {# <script src=\"{{ asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}\" type=\"text/javascript\"></script> #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
    <script type=\"text/javascript\">


        \$(document).ready(function () {
            \$(document).on('click', '.post-details', function (e) {
                \$('#modal_titre').empty().append(\$(this).data('title'));
                \$('#modal_guid').empty().append(\$(this).data('guid'));
                \$('#modal_type').empty().append(\$(this).data('type'));
                \$('#modal_etat').empty().append(\$(this).data('etat'));
                \$('#modal_description').empty().append(\$(this).data('description'));
            })
        })

        \$(document).on('click', '.delete', function (e) {
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Suppression de l'actualite\",
                text: \"Attention l'actualite sera Supprimée et n'apparaitra plus sur votre site\",
                type: \"info\",
                showCancelButton: true,
                confirmButtonClass: \"btn-danger\",
                confirmButtonText: \"Supprimer\",
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
                                swal(\"Suppression terminée\", \"\", \"success\");
                                t.parents('tr').hide();
                            } else if (reponse == 2) {
                                swal(\"La catégorie contient des produits\", \"\", \"warning\");
                            } else {
                                swal(\"Erreur de suppression\", \"\", \"error\");
                            }

                        },
                        error: function (reponse) {
                            swal(\"Erreur de suppression\", \"\", \"error\");
                        }
                    });
                } else {
                    swal.close();
                }
            });
            return false;
        });

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

{% endblock body_javascript %}
", "admin/Marketing/Actualites/all_actualite.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Marketing/Actualites/all_actualite.html.twig");
    }
}
