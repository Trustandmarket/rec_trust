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

/* admin/Marketing/OpsSpeciales/all_ops_speciales.html.twig */
class __TwigTemplate_30d905f1d9c238087b4870df3540d1f4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Marketing/OpsSpeciales/all_ops_speciales.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Marketing/OpsSpeciales/all_ops_speciales.html.twig", 1);
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
        yield "    Marketing - Opérations spéciales
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
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
                    <div class=\"card\">
                        <div class=\"card-header\">
                            ";
        // line 31
        $context["url_new"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\OpsSpeciales\\WpPostsCrudController"], "method", false, false, false, 31), "setAction", ["new"], "method", false, false, false, 31);
        // line 32
        yield "                            <h4 class=\"box-title\">Marketing - Opérations spéciales<a class=\"badge badge-complete right1\"
                                                                                     href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_new"]) || array_key_exists("url_new", $context) ? $context["url_new"] : (function () { throw new RuntimeError('Variable "url_new" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\"
                                                                                     title=\"Ajouter une opération\">
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
                                        <th>Nombre d'articles</th>
                                        <th>Prix total<small><sup>(Sans frais de livraison)</sup></small></th>
                                        <th>Categories d'annonces <small><sup>(affichee)</sup></small></th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ops"]) || array_key_exists("ops", $context) ? $context["ops"] : (function () { throw new RuntimeError('Variable "ops" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 54
            yield "                                        <tr style=\"background-color: #F7F7F7;font-weight: bold;\">
                                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "titre", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "articles", [], "any", false, false, false, 57)), "html", null, true);
            yield "</td>
                                            <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "prix", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                                            <td>";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "categorie", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 60
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 60)), "html", null, true);
                yield "<br>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "</td>
                                            <td>
                                                ";
            // line 63
            $context["url_detail"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\OpsSpeciales\\WpPostsCrudController"], "method", false, false, false, 63), "setAction", ["detail"], "method", false, false, false, 63), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 63)], "method", false, false, false, 63);
            // line 64
            yield "                                                <a class=\"badge badge-pending post-details my-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_detail"]) || array_key_exists("url_detail", $context) ? $context["url_detail"] : (function () { throw new RuntimeError('Variable "url_detail" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "\"
                                                   title=\"Details du post\">
                                                    <i class=\"fa fa-eye \"></i>
                                                </a>
                                                ";
            // line 68
            $context["url_edit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\Marketing\\OpsSpeciales\\WpPostsCrudController"], "method", false, false, false, 68), "setAction", ["edit"], "method", false, false, false, 68), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 68)], "method", false, false, false, 68);
            // line 69
            yield "                                                <a class=\"badge badge-pending update my-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_edit"]) || array_key_exists("url_edit", $context) ? $context["url_edit"] : (function () { throw new RuntimeError('Variable "url_edit" does not exist.', 69, $this->source); })()), "html", null, true);
            yield "\"
                                                   title=\"Modifier le post\">
                                                    <i class=\"fa fa-edit \"></i>
                                                </a>
                                                <a class=\"red delete my-1\"
                                                   href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_delete_get", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\"
                                                   title=\"Supprimer l'operation\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 95
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    ";
        // line 98
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 102
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
                title: \"Suppression de l'opération spéciale\",
                text: \"Attention l'opération spéciale et ses articles seront Supprimées et n'apparaitront plus sur votre site\",
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
                            console.log(reponse);
                            if (reponse == 1) {
                                swal(\"Suppression terminée\", \"\", \"success\");
                                t.parents('tr').hide();
                            } else if (reponse == 2) {
                                swal(\"La catégorie contient des paiements\", \"\", \"warning\");
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
        return "admin/Marketing/OpsSpeciales/all_ops_speciales.html.twig";
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
        return array (  271 => 102,  267 => 101,  262 => 98,  258 => 95,  248 => 94,  229 => 81,  216 => 74,  207 => 69,  205 => 68,  197 => 64,  195 => 63,  191 => 61,  182 => 60,  178 => 59,  174 => 58,  170 => 57,  166 => 56,  162 => 55,  159 => 54,  155 => 53,  132 => 33,  129 => 32,  127 => 31,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  94 => 14,  88 => 7,  78 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
    Marketing - Opérations spéciales
{% endblock %}

{% block main %}
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\"
          integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    {#<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/more.css') }}\"> #}
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
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
                    <div class=\"card\">
                        <div class=\"card-header\">
                            {% set url_new = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\OpsSpeciales\\\\WpPostsCrudController').setAction('new') %}
                            <h4 class=\"box-title\">Marketing - Opérations spéciales<a class=\"badge badge-complete right1\"
                                                                                     href=\"{{ url_new }}\"
                                                                                     title=\"Ajouter une opération\">
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
                                        <th>Nombre d'articles</th>
                                        <th>Prix total<small><sup>(Sans frais de livraison)</sup></small></th>
                                        <th>Categories d'annonces <small><sup>(affichee)</sup></small></th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for m in ops %}
                                        <tr style=\"background-color: #F7F7F7;font-weight: bold;\">
                                            <td>{{ m.id }}</td>
                                            <td>{{ m.titre }}</td>
                                            <td>{{ m.articles|length }}</td>
                                            <td>{{ m.prix }}</td>
                                            <td>{% for item in m.categorie %}
                                                    {{ item.slug|upper }}<br>
                                                {% endfor %}</td>
                                            <td>
                                                {% set url_detail = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\OpsSpeciales\\\\WpPostsCrudController').setAction('detail').setEntityId(m.id) %}
                                                <a class=\"badge badge-pending post-details my-1\" href=\"{{ url_detail }}\"
                                                   title=\"Details du post\">
                                                    <i class=\"fa fa-eye \"></i>
                                                </a>
                                                {% set url_edit = ea_url().setController('App\\\\Controller\\\\Admin\\\\Marketing\\\\OpsSpeciales\\\\WpPostsCrudController').setAction('edit').setEntityId(m.id) %}
                                                <a class=\"badge badge-pending update my-1\" href=\"{{ url_edit }}\"
                                                   title=\"Modifier le post\">
                                                    <i class=\"fa fa-edit \"></i>
                                                </a>
                                                <a class=\"red delete my-1\"
                                                   href=\"{{ path('post_delete_get', {id : m.id}) }}\"
                                                   title=\"Supprimer l'operation\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </a>
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
                title: \"Suppression de l'opération spéciale\",
                text: \"Attention l'opération spéciale et ses articles seront Supprimées et n'apparaitront plus sur votre site\",
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
                            console.log(reponse);
                            if (reponse == 1) {
                                swal(\"Suppression terminée\", \"\", \"success\");
                                t.parents('tr').hide();
                            } else if (reponse == 2) {
                                swal(\"La catégorie contient des paiements\", \"\", \"warning\");
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

{% endblock %}
", "admin/Marketing/OpsSpeciales/all_ops_speciales.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Marketing/OpsSpeciales/all_ops_speciales.html.twig");
    }
}
