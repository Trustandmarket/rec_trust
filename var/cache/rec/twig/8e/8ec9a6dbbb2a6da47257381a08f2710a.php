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

/* admin/ParcoursUtilisateur/Experiences/list.html.twig */
class __TwigTemplate_41b313acaa5abb63ff4e96e893e49cca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ParcoursUtilisateur/Experiences/list.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/ParcoursUtilisateur/Experiences/list.html.twig", 1);
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
        yield "    Parcours utilisateur - Expériences
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
    <style>
        #main-menu {
            font-size: 14px;
        }
    </style>
    <div class=\"content\">
        <div class=\"animated fadeIn\">
            <div class=\"clearfix\"></div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"box-title\">Parcours utilisateur - Expériences";
        // line 33
        yield "                            </h4>
                        </div>
                        <div class=\"card-body--\">
                            <div class=\"table-stats order-table ov-h\">
                                <table class=\"table \">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Ville</th>
                                        <th>Email</th>
                                        <th>Statut</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["experiences"]) || array_key_exists("experiences", $context) ? $context["experiences"] : (function () { throw new RuntimeError('Variable "experiences" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 51
            yield "                                        <tr style=\"background-color: #F7F7F7;font-weight: bold;\">
                                            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                            <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "exp_type_experience", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                            <td>";
            // line 54
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "exp_type_experience", [], "any", false, false, false, 54)) == "musique")) {
                // line 55
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "exp_ville", [], "any", false, false, false, 55), "html", null, true);
                yield "
                                                ";
            } else {
                // line 57
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "exp_lieu_evt", [], "any", false, false, false, 57), "html", null, true);
                yield "
                                                ";
            }
            // line 58
            yield "</td>
                                            <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "user", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                                            <td>";
            // line 60
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "status", [], "any", false, false, false, 60)) == "draft")) {
                // line 61
                yield "                                                    <button class=\"btn btn-round btn-warning\">En Brouillon</button>
                                                ";
            } else {
                // line 63
                yield "                                                    <button class=\"btn btn-round btn-success\">Terminée</button>
                                                ";
            }
            // line 64
            yield "</td>
                                            <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "created_at", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                                            <td>
                                                <a class=\"badge badge-pending post-details my-1 apercuExp\"
                                                   attr-id=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\" href=\"\" title=\"Details du post\">
                                                    <i class=\"fa fa-eye \"></i>
                                                </a>
                                                ";
            // line 71
            $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\ParcoursUtilisateur\\Experiences\\WpPostsCrudController"], "method", false, false, false, 71), "setAction", ["edit"], "method", false, false, false, 71), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 71)], "method", false, false, false, 71);
            // line 72
            yield "                                                <a class=\"badge badge-pending update my-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "\"
                                                   title=\"Modifier le post\">
                                                    <i class=\"fa fa-edit \"></i>
                                                </a>
                                                <a class=\"red delete my-1\"
                                                   href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_delete_get", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\"
                                                   title=\"Supprimer l'experience'\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class=\"modal fade alert-dismissible in\" id=\"apercuModal\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Expérience <span class=\"apercuTitre\"></span></h5>
                </div>
                <div class=\"modal-body\">
                    <div class=\"recap_choix\">
                        <div class=\"inline_choix musique_choose\">
                            <h4>Ville:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"villeValue\">Paris 15ème</p>
                        </div>
                        <div class=\"inline_choix musique_choose\">
                            <h4>Style musical:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"universValue\">Paris 15ème</p>
                        </div>
                        <div class=\"inline_choix divertissement_choose\">
                            <h4>Votre évènement:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"nomEvtValue\">Paris 15ème</p>
                        </div>
                        <div class=\"inline_choix divertissement_choose\">
                            <h4>Le lieu:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"lieuValue\">Pop / Folk</p>
                        </div>
                        <div class=\"inline_choix divertissement_choose\">
                            <h4>Nombre de participants:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"participantValue\">Pop / Folk</p>
                        </div>
                        <div style=\"margin-top: 2rem;\">
                            <h4>Liste de vos besoins:</h4>
                            <div class=\"besoinValue\" style=\"margin-top: 1.7rem;\">
                                <p style=\"font-weight: 300;margin-bottom: 1rem;\">Pop / Folk</p>
                            </div>
                        </div>
                        <div style=\"margin-top: 3rem;\">
                            <h4>Les options retenues:</h4>
                            <div class=\"optionValue\" style=\"margin-top: 1.7rem;\">
                                <p style=\"font-weight: 300;margin-bottom: 1rem;\">Pop / Folk</p>
                            </div>
                        </div>
                        <div style=\"margin-top: 3rem;\">
                            <h4>Vos précisions pour une offre sur mesure:</h4>
                            <textarea class=\"precisionValue field_precisions_2 form-control\" name=\"precisions_2\"
                                      id=\"precisions_2\" class=\"form-control\" cols=\"30\" rows=\"5\"
                                      placeholder=\"Donnez-nous des détails pour nous permettre de personnaliser votre offre : nombre de musiciens, la durée de 'enregistrement studio, nombre de titres pour le mixage...\"></textarea>
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-round btn-secondary close fermerModalApercu p-2\"
                            data-dismiss=\"modal\">Masquer
                    </button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 153
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\">

        \$(document).on('click', '.delete', function (e) {
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Suppression de l'experience\",
                text: \"Attention l'expérience sera Supprimée et n'apparaitra plus sur votre site\",
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
                            //console.log(reponse);
                            if (reponse == 1) {
                                swal(\"Suppression terminée\", \"\", \"success\");
                                t.parents('tr').hide();
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


        \$('.apercuExp').on('click', function (e) {
            e.preventDefault();
            var id = \$(this).attr('attr-id');
            //\$(this).append('<span class=\"spinner-grow\"></span>');
            \$.ajax({
                url: \"/";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "locale", [], "any", false, false, false, 210), "html", null, true);
        yield "/admin/parcours_utilisateur/experiences/details/\" + id,
                type: 'GET',
                success: function (data) {
                    data = JSON.parse(data)
                    console.log(data);
                    \$(\"#apercuModal\").fadeTo(\"slow\", 1, function () {
                        if (data.exp_type_experience == \"Musique\") {
                            \$('.apercuTitre').text(data.exp_type_experience + \" - \" + data.exp_ville + \" - \" + data.exp_univers)
                            \$('.villeValue').text(data.exp_ville)
                            \$('.universValue').text(data.exp_univers)
                            \$('.musique_choose').fadeIn()
                            \$('.divertissement_choose').fadeOut()
                        } else {
                            \$('.apercuTitre').text(data.exp_type_experience + \" - \" + data.exp_nom_evt + \" - \" + data.exp_lieu_evt)
                            \$('.nomEvtValue').text(data.exp_nom_evt)
                            \$('.lieuValue').text(data.exp_lieu_evt)
                            \$('.participantValue').text(+data.exp_participants_evt)
                            \$('.musique_choose').fadeOut()
                            \$('.divertissement_choose').fadeIn()
                        }

                        \$('.besoinValue').empty();
                        if (data.exp_besoins && data.exp_besoins.length > 0) {
                            data.exp_besoins.forEach((element) => {
                                \$('.besoinValue').append('<p style=\"font-weight: 300;margin-bottom: 1rem;\">' + element.metaValue + '</p>');
                            })
                        }

                        \$('.optionValue').empty();
                        if (data.exp_options && data.exp_options.length > 0) {
                            data.exp_options.forEach((element) => {
                                \$('.optionValue').append('<p style=\"font-weight: 300;margin-bottom: 1rem;\">' + element.metaValue + '</p>');
                            })
                        }

                        \$('.precisionValue').val(data.exp_precisions)
                    });
                },
                error: function (error) {
                    \$('.spinner-grow').remove();
                }
            });
        })

        \$(\".fermerModalApercu\").click(function () {
            \$(\"#apercuModal\").fadeTo(\"slow\", 0, function () {
                \$(\"#apercuModal\").css(\"display\", \"none\");
                \$(\".modal-backdrop\").css(\"display\", \"none\");
            });
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
        return "admin/ParcoursUtilisateur/Experiences/list.html.twig";
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
        return array (  377 => 210,  324 => 160,  320 => 159,  312 => 153,  302 => 152,  227 => 84,  214 => 77,  205 => 72,  203 => 71,  197 => 68,  191 => 65,  188 => 64,  184 => 63,  180 => 61,  178 => 60,  174 => 59,  171 => 58,  165 => 57,  159 => 55,  157 => 54,  153 => 53,  149 => 52,  146 => 51,  142 => 50,  123 => 33,  107 => 17,  103 => 16,  99 => 15,  94 => 14,  88 => 7,  78 => 6,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}
    Parcours utilisateur - Expériences
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
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
    <style>
        #main-menu {
            font-size: 14px;
        }
    </style>
    <div class=\"content\">
        <div class=\"animated fadeIn\">
            <div class=\"clearfix\"></div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"box-title\">Parcours utilisateur - Expériences{# <a class=\"badge badge-complete right1\" href=\"{{path('marketing_experiences_create_get')}}\" title=\"Ajouter une opération\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t</a> #}
                            </h4>
                        </div>
                        <div class=\"card-body--\">
                            <div class=\"table-stats order-table ov-h\">
                                <table class=\"table \">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Ville</th>
                                        <th>Email</th>
                                        <th>Statut</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for m in experiences %}
                                        <tr style=\"background-color: #F7F7F7;font-weight: bold;\">
                                            <td>{{ m.id }}</td>
                                            <td>{{ m.exp_type_experience }}</td>
                                            <td>{% if m.exp_type_experience|lower == 'musique' %}
                                                    {{ m.exp_ville }}
                                                {% else %}
                                                    {{ m.exp_lieu_evt }}
                                                {% endif %}</td>
                                            <td>{{ m.user }}</td>
                                            <td>{% if m.status|lower == 'draft' %}
                                                    <button class=\"btn btn-round btn-warning\">En Brouillon</button>
                                                {% else %}
                                                    <button class=\"btn btn-round btn-success\">Terminée</button>
                                                {% endif %}</td>
                                            <td>{{ m.created_at }}</td>
                                            <td>
                                                <a class=\"badge badge-pending post-details my-1 apercuExp\"
                                                   attr-id=\"{{ m.id }}\" href=\"\" title=\"Details du post\">
                                                    <i class=\"fa fa-eye \"></i>
                                                </a>
                                                {% set url = ea_url().setController('App\\\\Controller\\\\Admin\\\\ParcoursUtilisateur\\\\Experiences\\\\WpPostsCrudController').setAction('edit').setEntityId(m.id) %}
                                                <a class=\"badge badge-pending update my-1\" href=\"{{ url }}\"
                                                   title=\"Modifier le post\">
                                                    <i class=\"fa fa-edit \"></i>
                                                </a>
                                                <a class=\"red delete my-1\"
                                                   href=\"{{ path('post_delete_get', {id : m.id}) }}\"
                                                   title=\"Supprimer l'experience'\">
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
    <!-- Modal -->
    <div class=\"modal fade alert-dismissible in\" id=\"apercuModal\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Expérience <span class=\"apercuTitre\"></span></h5>
                </div>
                <div class=\"modal-body\">
                    <div class=\"recap_choix\">
                        <div class=\"inline_choix musique_choose\">
                            <h4>Ville:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"villeValue\">Paris 15ème</p>
                        </div>
                        <div class=\"inline_choix musique_choose\">
                            <h4>Style musical:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"universValue\">Paris 15ème</p>
                        </div>
                        <div class=\"inline_choix divertissement_choose\">
                            <h4>Votre évènement:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"nomEvtValue\">Paris 15ème</p>
                        </div>
                        <div class=\"inline_choix divertissement_choose\">
                            <h4>Le lieu:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"lieuValue\">Pop / Folk</p>
                        </div>
                        <div class=\"inline_choix divertissement_choose\">
                            <h4>Nombre de participants:&nbsp;</h4>
                            <p style=\"font-weight: 300;\" class=\"participantValue\">Pop / Folk</p>
                        </div>
                        <div style=\"margin-top: 2rem;\">
                            <h4>Liste de vos besoins:</h4>
                            <div class=\"besoinValue\" style=\"margin-top: 1.7rem;\">
                                <p style=\"font-weight: 300;margin-bottom: 1rem;\">Pop / Folk</p>
                            </div>
                        </div>
                        <div style=\"margin-top: 3rem;\">
                            <h4>Les options retenues:</h4>
                            <div class=\"optionValue\" style=\"margin-top: 1.7rem;\">
                                <p style=\"font-weight: 300;margin-bottom: 1rem;\">Pop / Folk</p>
                            </div>
                        </div>
                        <div style=\"margin-top: 3rem;\">
                            <h4>Vos précisions pour une offre sur mesure:</h4>
                            <textarea class=\"precisionValue field_precisions_2 form-control\" name=\"precisions_2\"
                                      id=\"precisions_2\" class=\"form-control\" cols=\"30\" rows=\"5\"
                                      placeholder=\"Donnez-nous des détails pour nous permettre de personnaliser votre offre : nombre de musiciens, la durée de 'enregistrement studio, nombre de titres pour le mixage...\"></textarea>
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-round btn-secondary close fermerModalApercu p-2\"
                            data-dismiss=\"modal\">Masquer
                    </button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block body_javascript %}
    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/sweetalert/sweetalert.min.js') }}\"></script>
    <script type=\"text/javascript\">

        \$(document).on('click', '.delete', function (e) {
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Suppression de l'experience\",
                text: \"Attention l'expérience sera Supprimée et n'apparaitra plus sur votre site\",
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
                            //console.log(reponse);
                            if (reponse == 1) {
                                swal(\"Suppression terminée\", \"\", \"success\");
                                t.parents('tr').hide();
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


        \$('.apercuExp').on('click', function (e) {
            e.preventDefault();
            var id = \$(this).attr('attr-id');
            //\$(this).append('<span class=\"spinner-grow\"></span>');
            \$.ajax({
                url: \"/{{ app.request.locale }}/admin/parcours_utilisateur/experiences/details/\" + id,
                type: 'GET',
                success: function (data) {
                    data = JSON.parse(data)
                    console.log(data);
                    \$(\"#apercuModal\").fadeTo(\"slow\", 1, function () {
                        if (data.exp_type_experience == \"Musique\") {
                            \$('.apercuTitre').text(data.exp_type_experience + \" - \" + data.exp_ville + \" - \" + data.exp_univers)
                            \$('.villeValue').text(data.exp_ville)
                            \$('.universValue').text(data.exp_univers)
                            \$('.musique_choose').fadeIn()
                            \$('.divertissement_choose').fadeOut()
                        } else {
                            \$('.apercuTitre').text(data.exp_type_experience + \" - \" + data.exp_nom_evt + \" - \" + data.exp_lieu_evt)
                            \$('.nomEvtValue').text(data.exp_nom_evt)
                            \$('.lieuValue').text(data.exp_lieu_evt)
                            \$('.participantValue').text(+data.exp_participants_evt)
                            \$('.musique_choose').fadeOut()
                            \$('.divertissement_choose').fadeIn()
                        }

                        \$('.besoinValue').empty();
                        if (data.exp_besoins && data.exp_besoins.length > 0) {
                            data.exp_besoins.forEach((element) => {
                                \$('.besoinValue').append('<p style=\"font-weight: 300;margin-bottom: 1rem;\">' + element.metaValue + '</p>');
                            })
                        }

                        \$('.optionValue').empty();
                        if (data.exp_options && data.exp_options.length > 0) {
                            data.exp_options.forEach((element) => {
                                \$('.optionValue').append('<p style=\"font-weight: 300;margin-bottom: 1rem;\">' + element.metaValue + '</p>');
                            })
                        }

                        \$('.precisionValue').val(data.exp_precisions)
                    });
                },
                error: function (error) {
                    \$('.spinner-grow').remove();
                }
            });
        })

        \$(\".fermerModalApercu\").click(function () {
            \$(\"#apercuModal\").fadeTo(\"slow\", 0, function () {
                \$(\"#apercuModal\").css(\"display\", \"none\");
                \$(\".modal-backdrop\").css(\"display\", \"none\");
            });
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
", "admin/ParcoursUtilisateur/Experiences/list.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/ParcoursUtilisateur/Experiences/list.html.twig");
    }
}
