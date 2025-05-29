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

/* admin/Articles/Articles/edit.html.twig */
class __TwigTemplate_eed312544aeb96a17d6f4d50e715428a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Articles/Articles/edit.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Articles/Articles/edit.html.twig", 1);
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

        yield "Modification de l'article";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        yield "    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\"
          integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    ";
        // line 12
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/dropzone.css"), "html", null, true);
        yield "\">
    <script type=\"text/javascript\" src='";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/date/dist/datepicker.min.css"), "html", null, true);
        yield "\">

    <script>
        tinymce.init({
            selector: 'textarea#description',
            height: 350,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
            ],

            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
            browser_spellcheck: true,
            contextmenu: false,";
        // line 29
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 29, $this->source); })()) == "fr")) {
            // line 30
            yield "            language: 'fr_FR',";
        }
        // line 31
        yield "        });
    </script>
    <style>
        .tox-statusbar__branding {
            display: none;
        }
        label[for=\"meta_desc\"] {
            flex: none;
            padding-bottom: 1em;
            font-size: initial;
        }
    </style>

    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-10\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Modification de l'article</h4>
                    </div>
                    <div class=\"card-body card-block\">
                        <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\" id=\"success\"
                             style=\"display:none\">
                            <i class=\"fa fa-check\"></i>
                            <i class=\"fa fa-check\"></i>
                            Article modifié avec succès<br>
                            <a href=\"?entity=Article&action=list&menuIndex=4&submenuIndex=0\" style=\"margin-left:50px\">
                                <span class=\"badge badge-pill badge-info\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.all-post"), "html", null, true);
        yield "</span>
                            </a>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>

                        <form action=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_post");
        yield "\" method=\"post\" class=\"\" id=\"article\">
                            <div class=\"form-group\">
                                <input type=\"text\" id=\"titre\" required name=\"titre\"
                                       value=\"";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "locale", [], "any", false, false, false, 69) == "fr")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 69, $this->source); })()), "postTitle", [], "any", false, false, false, 69), "html", null, true);
        } else {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contenu_en"]) || array_key_exists("contenu_en", $context) ? $context["contenu_en"] : (function () { throw new RuntimeError('Variable "contenu_en" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 69) == "postExcerpt")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 69), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield "\"
                                       placeholder=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.titre"), "html", null, true);
        yield "\" class=\"form-control\">
                                <input type=\"hidden\" name=\"id\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "\" id=\"id\">
                            </div>
                            <div class=\"form-group\">
                                <select name=\"categorie\" required class=\"form-control\">
                                    <option disabled>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.categorie"), "html", null, true);
        yield "</option>
                                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 77
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 77), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation"]) || array_key_exists("relation", $context) ? $context["relation"] : (function () { throw new RuntimeError('Variable "relation" does not exist.', 77, $this->source); })()), "termTaxonomyId", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 77))) {
                yield " selected ";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 77), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                </select>
                            </div>
                            <input type=\"hidden\" name=\"idImage\" value=\"";
        // line 81
        if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 81, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
        }
        yield "\"
                                   id=\"idImage\">

                            <div class=\"form-group\">
                                <select name=\"status\" required class=\"form-control\">
                                    <option disabled>Status</option>
                                    <option value=\"draft\" ";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 87, $this->source); })()), "postStatus", [], "any", false, false, false, 87) == "draft")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.draft"), "html", null, true);
        yield "</option>
                                    <option value=\"publish\" ";
        // line 88
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 88, $this->source); })()), "postStatus", [], "any", false, false, false, 88) == "publish")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.publish"), "html", null, true);
        yield "</option>
                                    <option value=\"trash\" ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 89, $this->source); })()), "postStatus", [], "any", false, false, false, 89) == "trash")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.trash"), "html", null, true);
        yield "</option>

                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"meta_desc\">Méta description</label>
                                <textarea name=\"meta_desc\" class=\"form-control border-form-control\" rows=\"3\" cols=\"70\"
                                          id=\"meta_desc\">";
        // line 96
        if ( !(null === (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 96, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta_desc"]) || array_key_exists("meta_desc", $context) ? $context["meta_desc"] : (function () { throw new RuntimeError('Variable "meta_desc" does not exist.', 96, $this->source); })()), "getMetaValue", [], "any", false, false, false, 96)), "html", null, true);
        }
        yield "</textarea>
                            </div>

                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t<textarea name=\"description1\" placeholder=\"\" class=\"form-control\" rows=\"8\" cols=\"80\"
                                          id=\"description\">
\t\t\t\t\t\t\t\t\t";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "locale", [], "any", false, false, false, 102) == "fr")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 102, $this->source); })()), "postContent", [], "any", false, false, false, 102), "html", null, true);
        } else {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contenu_en"]) || array_key_exists("contenu_en", $context) ? $context["contenu_en"] : (function () { throw new RuntimeError('Variable "contenu_en" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 102) == "postContentFiltered")) {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 102);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 103
        yield "\t\t\t\t\t\t\t\t</textarea>
                            </div>
                            <textarea name=\"description\" style=\"display:none\" class=\"form-control border-form-control\"
                                      rows=\"3\" cols=\"70\" id=\"article1\"></textarea>

                            <div class=\"form-group \">
                                ";
        // line 109
        if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 109, $this->source); })())) {
            // line 110
            yield "                                    <p>Image de couverture actuel
                                        <br>
                                        <img src=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 112, $this->source); })()), "guid", [], "any", false, false, false, 112), "html", null, true);
            yield "\" alt=\"\"
                                             style=\"width:100px; height:100px; border-radius:10px\">
                                    </p><br>
                                ";
        }
        // line 116
        yield "                                <div class=\"dropzone mt-2\" style=\"width:100%\"></div>
                            </div>

                            <div class=\"form-actions form-group\">
                                <button type=\"submit\" id=\"send\"
                                        class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.post"), "html", null, true);
        yield "
                                    <i class=\"ld ld-ring ld-spin\"></i>
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

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 134
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/dropzone.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/date/dist/datepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\">
        let idImage = \$(\"#idImage\").val();
        let id = \$(\"#id\").val();
        let myDropzone = new Dropzone(\"div.dropzone\", {
            url: \"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload");
        yield "\",
            paramName: \"file\", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            uploadMultiple: true,
            parallelUploads: 1, // use it with uploadMultiple
            maxFiles: 1,
            autoProcessQueue: false,
            addRemoveLinks: true,
            acceptedFiles: \"image/*\",
            dictDefaultMessage: \"Modifié l'image de couverture\",
            dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
            dictRemoveFile: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.remove"), "html", null, true);
        yield "\",
            success: function (file, response) {
                suc = 1;
            }
        });


        \$('#article').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            let temp = tinymce.activeEditor.getContent();
            \$('#article1').val(temp);
            if (\$('#domaine').val() != '' && \$('#libelle').val() != '' && \$('#description').val() != '') {
                \$('#send').addClass('running');
                toastr.info('Envoie des données en cours...');

                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize() + '&description=' + temp;

                if (myDropzone.files != \"\") {
                    myDropzone.processQueue();
                    myDropzone.on(\"successmultiple\", function (file, response) {
                        \$.ajax({
                            url: \$form.attr('action'),
                            type: \$form.attr('method'),
                            contentType: false,
                            processData: false,
                            data: data,
                            success: function (response) {
                                if (response > 0) {
                                    toastr.clear();
                                    toastr.success('Article modifié avec succès');
                                    \$('#success').show();
                                    \$('html,body').scrollTop(0);
                                    window.location = document.referrer;
                                } else if (response == 0) {
                                    \$('#send').removeClass('running');
                                    toastr.clear();
                                    toastr.error('Une erreur survenue');
                                }
                            },
                            error: function (response) {
                                \$('#send').removeClass('running');
                                toastr.clear();
                                toastr.error('Une erreur survenue');
                            }
                        });

                    });
                } else {
                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function (response) {

                            if (response > 0) {
                                toastr.clear();
                                toastr.success('Article modifié avec succès');
// \$('#article').hide();
                                \$('#success').show();
                                \$('html,body').scrollTop(0);
                                //window.location = document.referrer;
                            } else if (response == 0) {
                                \$('#send').removeClass('running');
                                toastr.clear();
                                toastr.error('";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" erreur "), "html", null, true);
        yield "');
                            }
                        },
                        error: function (response) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error('";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" erreur "), "html", null, true);
        yield "');
                        }
                    });
                }
            }
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
        \$('[data-toggle=\"datepicker\"]').datepicker({
            language: '";
        // line 258
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 258, $this->source); })()) == "fr")) {
            yield "fr-Fr";
        } else {
            yield "en-GB";
        }
        yield "',
            format: 'dd/mm/yyyy',
            startDate: '";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 260, $this->source); })()), "d/m/Y", false), "html", null, true);
        yield "',
            autoHide: true
        });
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
        return "admin/Articles/Articles/edit.html.twig";
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
        return array (  515 => 260,  506 => 258,  477 => 232,  468 => 226,  397 => 158,  383 => 147,  375 => 142,  371 => 141,  367 => 140,  359 => 134,  349 => 133,  329 => 121,  322 => 116,  315 => 112,  311 => 110,  309 => 109,  301 => 103,  286 => 102,  275 => 96,  261 => 89,  253 => 88,  245 => 87,  234 => 81,  230 => 79,  215 => 77,  211 => 76,  207 => 75,  200 => 71,  196 => 70,  179 => 69,  173 => 66,  163 => 59,  133 => 31,  130 => 30,  128 => 29,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  92 => 12,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% block page_title %}Modification de l'article{% endblock %}

{% block main %}
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\"
          integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    {#<link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/bootstrap.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/more.css') }}\"> #}
    <link rel=\"stylesheet\" href=\"{{ asset('toastr/toastr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading-btn.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/loading.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/css/dropzone.css') }}\">
    <script type=\"text/javascript\" src='{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}'></script>
    <link rel=\"stylesheet\" href=\"{{ asset('admin/date/dist/datepicker.min.css') }}\">

    <script>
        tinymce.init({
            selector: 'textarea#description',
            height: 350,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
            ],

            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
            browser_spellcheck: true,
            contextmenu: false,{% if lang=='fr' %}
            language: 'fr_FR',{% endif %}
        });
    </script>
    <style>
        .tox-statusbar__branding {
            display: none;
        }
        label[for=\"meta_desc\"] {
            flex: none;
            padding-bottom: 1em;
            font-size: initial;
        }
    </style>

    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-10\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Modification de l'article</h4>
                    </div>
                    <div class=\"card-body card-block\">
                        <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\" id=\"success\"
                             style=\"display:none\">
                            <i class=\"fa fa-check\"></i>
                            <i class=\"fa fa-check\"></i>
                            Article modifié avec succès<br>
                            <a href=\"?entity=Article&action=list&menuIndex=4&submenuIndex=0\" style=\"margin-left:50px\">
                                <span class=\"badge badge-pill badge-info\">{{ 'admin.menu.all-post'|trans }}</span>
                            </a>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>

                        <form action=\"{{ path('admin_edit_post') }}\" method=\"post\" class=\"\" id=\"article\">
                            <div class=\"form-group\">
                                <input type=\"text\" id=\"titre\" required name=\"titre\"
                                       value=\"{% if app.request.locale == \"fr\" %}{{ article.postTitle }}{% else %}{% for item in contenu_en %}{% if item.field == \"postExcerpt\" %}{{ item.content }}{% endif %}{% endfor %}{% endif %}\"
                                       placeholder=\"{{ 'admin.article.titre'|trans }}\" class=\"form-control\">
                                <input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\" id=\"id\">
                            </div>
                            <div class=\"form-group\">
                                <select name=\"categorie\" required class=\"form-control\">
                                    <option disabled>{{ 'admin.article.categorie'|trans }}</option>
                                    {% for c in categorie %}
                                        <option value=\"{{ c.termTaxonomyId }}\" {% if relation.termTaxonomyId == c.termTaxonomyId %} selected {% endif %}>{{ c.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <input type=\"hidden\" name=\"idImage\" value=\"{% if img %}{{ img.id }}{% endif %}\"
                                   id=\"idImage\">

                            <div class=\"form-group\">
                                <select name=\"status\" required class=\"form-control\">
                                    <option disabled>Status</option>
                                    <option value=\"draft\" {% if article.postStatus == 'draft' %} selected {% endif %}>{{ 'admin.annonce.draft'|trans }}</option>
                                    <option value=\"publish\" {% if article.postStatus == 'publish' %} selected {% endif %}>{{ 'admin.annonce.publish'|trans }}</option>
                                    <option value=\"trash\" {% if article.postStatus == 'trash' %} selected {% endif %}>{{ 'admin.annonce.trash'|trans }}</option>

                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"meta_desc\">Méta description</label>
                                <textarea name=\"meta_desc\" class=\"form-control border-form-control\" rows=\"3\" cols=\"70\"
                                          id=\"meta_desc\">{% if meta_desc is not null %}{{ meta_desc.getMetaValue|trim }}{% endif %}</textarea>
                            </div>

                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t<textarea name=\"description1\" placeholder=\"\" class=\"form-control\" rows=\"8\" cols=\"80\"
                                          id=\"description\">
\t\t\t\t\t\t\t\t\t{% if app.request.locale == \"fr\" %}{{ article.postContent }}{% else %}{% for item in contenu_en %}{% if item.field == \"postContentFiltered\" %}{{ item.content|raw }}{% endif %}{% endfor %}{% endif %}
\t\t\t\t\t\t\t\t</textarea>
                            </div>
                            <textarea name=\"description\" style=\"display:none\" class=\"form-control border-form-control\"
                                      rows=\"3\" cols=\"70\" id=\"article1\"></textarea>

                            <div class=\"form-group \">
                                {% if img %}
                                    <p>Image de couverture actuel
                                        <br>
                                        <img src=\"{{ img.guid }}\" alt=\"\"
                                             style=\"width:100px; height:100px; border-radius:10px\">
                                    </p><br>
                                {% endif %}
                                <div class=\"dropzone mt-2\" style=\"width:100%\"></div>
                            </div>

                            <div class=\"form-actions form-group\">
                                <button type=\"submit\" id=\"send\"
                                        class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">{{ 'admin.article.post'|trans }}
                                    <i class=\"ld ld-ring ld-spin\"></i>
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
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"{{ asset('toastr/toastr.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/js/dropzone.js') }}\"></script>
    <script src=\"{{ asset('admin/date/dist/datepicker.min.js') }}\"></script>
    <script type=\"text/javascript\">
        let idImage = \$(\"#idImage\").val();
        let id = \$(\"#id\").val();
        let myDropzone = new Dropzone(\"div.dropzone\", {
            url: \"{{ path('upload') }}\",
            paramName: \"file\", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            uploadMultiple: true,
            parallelUploads: 1, // use it with uploadMultiple
            maxFiles: 1,
            autoProcessQueue: false,
            addRemoveLinks: true,
            acceptedFiles: \"image/*\",
            dictDefaultMessage: \"Modifié l'image de couverture\",
            dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
            dictRemoveFile: \"{{ 'admin.article.remove'|trans }}\",
            success: function (file, response) {
                suc = 1;
            }
        });


        \$('#article').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            let temp = tinymce.activeEditor.getContent();
            \$('#article1').val(temp);
            if (\$('#domaine').val() != '' && \$('#libelle').val() != '' && \$('#description').val() != '') {
                \$('#send').addClass('running');
                toastr.info('Envoie des données en cours...');

                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize() + '&description=' + temp;

                if (myDropzone.files != \"\") {
                    myDropzone.processQueue();
                    myDropzone.on(\"successmultiple\", function (file, response) {
                        \$.ajax({
                            url: \$form.attr('action'),
                            type: \$form.attr('method'),
                            contentType: false,
                            processData: false,
                            data: data,
                            success: function (response) {
                                if (response > 0) {
                                    toastr.clear();
                                    toastr.success('Article modifié avec succès');
                                    \$('#success').show();
                                    \$('html,body').scrollTop(0);
                                    window.location = document.referrer;
                                } else if (response == 0) {
                                    \$('#send').removeClass('running');
                                    toastr.clear();
                                    toastr.error('Une erreur survenue');
                                }
                            },
                            error: function (response) {
                                \$('#send').removeClass('running');
                                toastr.clear();
                                toastr.error('Une erreur survenue');
                            }
                        });

                    });
                } else {
                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function (response) {

                            if (response > 0) {
                                toastr.clear();
                                toastr.success('Article modifié avec succès');
// \$('#article').hide();
                                \$('#success').show();
                                \$('html,body').scrollTop(0);
                                //window.location = document.referrer;
                            } else if (response == 0) {
                                \$('#send').removeClass('running');
                                toastr.clear();
                                toastr.error('{{ ' erreur '|trans }}');
                            }
                        },
                        error: function (response) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error('{{ ' erreur '|trans }}');
                        }
                    });
                }
            }
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
        \$('[data-toggle=\"datepicker\"]').datepicker({
            language: '{% if lang=='fr' %}fr-Fr{% else %}en-GB{% endif %}',
            format: 'dd/mm/yyyy',
            startDate: '{{ d|date(\"d/m/Y\", false) }}',
            autoHide: true
        });
    </script>
{% endblock body_javascript %}
", "admin/Articles/Articles/edit.html.twig", "/var/www/vhosts/trustandmarket.com/rec.trustandmarket.com/templates/admin/Articles/Articles/edit.html.twig");
    }
}
