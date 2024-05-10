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

/* administration/hebergement/index.html.twig */
class __TwigTemplate_c307f2d35d6cdcede3883179688b687f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "administration/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/hebergement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/hebergement/index.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/hebergement/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Volet Hebergement - ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


    <h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
        Hébergement
        <i class=\"fas fa-building\"></i>
    </h1>
    ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success-add-hebergement"], "method", false, false, false, 16))) {
            // line 17
            yield "        <div class=\"alert alert-success\">
            ";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success-add-garant"], "method", false, false, false, 18)), "html", null, true);
            yield "
            <div align=\"center\">
                Votre demande a été soumise  avec succcess !
            </div>
        </div>

    ";
        }
        // line 25
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["failed-add-justificatif"], "method", false, false, false, 25))) {
            // line 26
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["failed-add-justificatif"], "method", false, false, false, 27)), "html", null, true);
            yield "
            <div align=\"center\">
                Aucun justificatif de paiement reçu !
            </div>
        </div>

    ";
        }
        // line 34
        yield "
    ";
        // line 35
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["success-add-justificatif"], "method", false, false, false, 35))) {
            // line 36
            yield "        <div class=\"alert alert-success\">
            ";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["success-add-justificatif"], "method", false, false, false, 37)), "html", null, true);
            yield "
            <div align=\"center\">
                Votre justificatif a été envoyé avec succcess !
            </div>
        </div>

    ";
        }
        // line 44
        yield "    ";
        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "hebergement", [], "any", false, false, false, 44))) {
            // line 45
            yield "    <br>


    <div class=\"card animate__animated animate__fadeInLeft\">
        <div class=\"card-header  fw-bold text-xs text-uppercase\">
            Hebergement
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title \">Soumettre une demande</h5>
            <p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de document de logement puis de la soumettre par la suite . </p> <p> Attention nous ne vous fournissons que des documents officiel.Il sera donc preferable d'envisagé d'avoir une alternative une fois votre arrivé en france. Ces documents vous aiderons à avoir votre Visa Etude</p>
            <div align=\"center\">   <button type=\"button\" class=\"btn btn-dark text-center \" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button> </div>
        </div>
    </div>


    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">

                    <form method=\"post\" action=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_new");
            yield "\" enctype=\"multipart/form-data\">
                        <p class=\"text-danger\">
                            <strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf ou au format image et lisible .<br>
                                <p class=\"text-dark\">* Lien utile pour convertion :
                                    <a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a>
                                </p>
                            </strong>
                        </p>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
                            <select name=\"pays\" class=\"form-select form-select mb-3\">
                                <option selected>Choisissez le pays !</option>
                                <option value=\"France\">France</option>
                                <option value=\"Canada\">Canada</option>
                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
                            <Input name=\"ville\" type=\"text\" class=\"form-control\" required>
                        </div>

                        ";
            // line 92
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "passport", [], "any", false, false, false, 92)) {
                // line 93
                yield "
                            <div class=\"mb-3\">
                                <label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
                                <input name=\"pathPassport\" type=\"file\" class=\"form-control\">
                            </div>

                        ";
            } else {
                // line 100
                yield "                            <div class=\"mb-3 text-dark\">
                                Votre Passport : Nous l'avons déja
                                <a target=\"blank\" href=\"";
                // line 102
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "getPassport", [], "method", false, false, false, 102))), "html", null, true);
                yield "\" class=\" ml-3\">ici</a>
                                . Vous pouvez toujours le remplacer dans l'onglet
                                <a target=\"blank\" href=\"";
                // line 104
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                yield "\">Mon Profil
                                </a>
                            </div>
                        ";
            }
            // line 108
            yield "
                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
                            <input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
                            <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"Facultatif ...\"></textarea>
                        </div>

                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
                            <label class=\"form-check-label text-dark\" for=\"invalidCheck\">
                                Je certifie l'authenticité de mes documents et des informations que j'ai fournis
                            </label>
                            <div class=\"invalid-feedback\">
                                Vous devez accepter nos conditions.
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-dark\">Soumettre</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 139
            yield "
    ";
            // line 140
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "hebergement", [], "any", false, false, false, 140), "statutDemande", [], "any", false, false, false, 140) == 0)) {
                // line 141
                yield "
        <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
            <div class=\"card-header  fw-bold text-xs text-uppercase\">
                Etat de la demande
            </div>
            <div class=\"card-body\">
                <p class=\"text-dark\">
                    <strong class=\"text-danger fw-bold text-xs text-uppercase\">
                        En attente de paiement</strong>
                <div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    <div class=\"progress-bar bg-danger\" style=\"width: 25%\"></div>
                </div>
                </p>
                <p>
                    Veuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

                <a style=\"text-align: center\" href=\"";
                // line 157
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_hebergement");
                yield "\" class=\"btn btn-dark \">
                    <i class=\"fas fa-download\"></i>
                    Télecharger le devis</a>

            </div>
        </div>
        ";
            }
            // line 164
            yield "
        ";
            // line 165
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165), "hebergement", [], "any", false, false, false, 165), "statutDemande", [], "any", false, false, false, 165) == 1)) {
                // line 166
                yield "
            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    Etat de la demande
                </div>
                <div class=\"card-body\">
                    <p class=\"text-dark\">
                        <strong class=\"text-primary fw-bold text-xs text-uppercase\">En cours de traitement
                        </strong>
                    <div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <div class=\"progress-bar bg-primary\" style=\"width: 50%\"></div>
                    </div>
                    </p>
                    <p>
                        Veuillez patientez s'il vous plait. Nous traitons votre demande . Elle s'etend généralement sur une période de
                        <strong>
                            3 à 5 jours
                        </strong>
                        ouvrés</p>
                </div>
            </div>


        ";
            }
            // line 190
            yield "
        ";
            // line 191
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "hebergement", [], "any", false, false, false, 191), "statutDemande", [], "any", false, false, false, 191) == 2)) {
                // line 192
                yield "
            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    Etat de la demande
                </div>
                <div class=\"card-body\">
                    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
                    <strong class=\"text-success\">Traitement terminée</strong>
                    <div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <div class=\"progress-bar bg-success\" style=\"width: 100%\">Terminée</div>
                    </div>
                    </p>
                    <p>Félicitations
                        <i class=\"fas fa-thumbs-up text-success\"></i>
                        Le traitement de votre demande est terminée. Les documents sont disponible .</p>
                </div>
            </div>

            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    téléchargement
                </div>
                <div class=\"card-body\">
                    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
                    <strong class=\"\">Documents :</strong>
                    <a href=\"";
                // line 217
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "hebergement", [], "any", false, false, false, 217), "getHebergementFile", [], "method", false, false, false, 217))), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "getName", [], "method", false, false, false, 217), "html", null, true);
                yield "_GarantFile\">
                        <i class=\"fas fa-download\"></i>
                    </a>
                    </p>
                    <p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant :
                        <strong class=\"text-info fw-bold text-xs text-uppercase\">";
                // line 222
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "user", [], "any", false, false, false, 222), "hebergement", [], "any", false, false, false, 222), "pays", [], "any", false, false, false, 222), "html", null, true);
                yield "</strong>.</p>
                </div>
            </div>


        ";
            }
            // line 228
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228), "hebergement", [], "any", false, false, false, 228), "statutDemande", [], "any", false, false, false, 228) == 3)) {
                // line 229
                yield "
            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    Etat de la demande
                </div>
                <div class=\"card-body\">
                    <p class=\"text-warning fw-bold text-xs text-uppercase\" align\"center\">
                    <strong class=\"text-warning\">Demande clôturer</strong>
                    <div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <div class=\"progress-bar bg-warning\" style=\"width: 100%\"></div>
                    </div>
                    </p>
                    <p class=\"\">Votre demande a été clôturer. Vous ne pouvez plus effectuer de demande. Veuillez contacter l'administrateur en cas de doute .</p>
                </div>
            </div>


        ";
            }
            // line 247
            yield "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                    <div class=\"card-header fw-bold text-xs text-uppercase\">
                        Mes informations communiquées
                    </div>
                    <div
                            class=\"card-body\">
                        <!-- Contenu de la première carte ici -->


                        <p>
                            Pour votre demande de garant financier soumise le
                            <strong class=\"text-dark\">
                                ";
            // line 261
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "user", [], "any", false, false, false, 261), "hebergement", [], "any", false, false, false, 261), "getDateDemande", [], "method", false, false, false, 261), "d-m-Y"), "html", null, true);
            yield "</strong>
                            à
                            ";
            // line 263
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "user", [], "any", false, false, false, 263), "hebergement", [], "any", false, false, false, 263), "getDateDemande", [], "method", false, false, false, 263), "H:i"), "html", null, true);
            yield "
                            vous nous avez communiqué les informations suivantes :</p>


                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <th scope=\"row\">Pays</th>
                                            <td>";
            // line 274
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "user", [], "any", false, false, false, 274), "hebergement", [], "any", false, false, false, 274), "getPays", [], "method", false, false, false, 274), "html", null, true);
            yield "</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Ville</th>
                                            <td>";
            // line 278
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "user", [], "any", false, false, false, 278), "hebergement", [], "any", false, false, false, 278), "getVilleEtude", [], "method", false, false, false, 278), "html", null, true);
            yield "</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Passport</th>
                                            <td>
                                                ";
            // line 283
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "user", [], "any", false, false, false, 283), "passport", [], "any", false, false, false, 283)) {
                // line 284
                yield "                                                    <p class=\"text-danger\">
                                                        <strong>Vous devez joindre le justificatif de paiement pour le traitement de votre dossier ici !.</strong>
                                                    </p>
                                                    <p>Rendez-vous dans le menu
                                                        <a href=\"";
                // line 288
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                yield "\" target=\"_blank\">Mon profil</a>
                                                        afin d'y joindre le ou les documents demandés.</p>
                                                ";
            } else {
                // line 291
                yield "                                                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "passport", [], "any", false, false, false, 291))), "html", null, true);
                yield "\" class=\"btn btn-dark btn-sm\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true);
                yield "_Passeport\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
            }
            // line 296
            yield "                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Attestation d'acceptation</th>
                                            <td>
                                                ";
            // line 301
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "hebergement", [], "any", false, false, false, 301), "getPathAdmissionFile", [], "method", false, false, false, 301) == null)) {
                // line 302
                yield "                                                    <p class=\"text-danger\">Vous n'avez joint aucune attestation d'acceptation. Les pièces jointes sont obligatoires.</p>
                                                    <label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
                                                    <input class=\"form-control\" type=\"file\" id=\"formFile\">
                                                ";
            } else {
                // line 306
                yield "                                                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "hebergement", [], "any", false, false, false, 306), "pathAdmissionFile", [], "any", false, false, false, 306))), "html", null, true);
                yield "\" class=\"btn btn-dark btn-sm\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "name", [], "any", false, false, false, 306), "html", null, true);
                yield "_attestation_acceptation\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
            }
            // line 311
            yield "                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">
                                                Justificatif de paiement
                                            </th>
                                            <td>
                                                ";
            // line 318
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "user", [], "any", false, false, false, 318), "hebergement", [], "any", false, false, false, 318), "justificatifPaiement", [], "any", false, false, false, 318)) {
                // line 319
                yield "                                                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "hebergement", [], "any", false, false, false, 319), "justificatifPaiement", [], "any", false, false, false, 319))), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "name", [], "any", false, false, false, 319), "html", null, true);
                yield "__paiement\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
            } else {
                // line 324
                yield "
                                                    Aucun justificatif
                                                ";
            }
            // line 327
            yield "                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        ";
            // line 339
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 339, $this->source); })()), "user", [], "any", false, false, false, 339), "hebergement", [], "any", false, false, false, 339), "getStatutDemande", [], "method", false, false, false, 339) == 0)) {
                // line 340
                yield "                            <br>
                            <form action=\"";
                // line 341
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "user", [], "any", false, false, false, 341), "hebergement", [], "any", false, false, false, 341), "id", [], "any", false, false, false, 341)]), "html", null, true);
                yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande d\\'hébergement ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 342
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342), "hebergement", [], "any", false, false, false, 342), "id", [], "any", false, false, false, 342))), "html", null, true);
                yield "\">
                                <div align=\"center\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                        Annuler

                                    </button>
                                </div>
                            </form>
                        ";
            }
            // line 352
            yield "                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                    <div class=\"card-header  fw-bold text-xs text-uppercase\">
                        Documents relatifs à la demande
                    </div>
                    <div
                            class=\"card-body\">
                        <!-- Contenu de la deuxième carte ici -->
                        Joindre un justificatif de paiement (Western Union , Ria ...)
                        <br><br>
                        <form method=\"post\" action=\"";
            // line 365
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_justificatif_paiement");
            yield "\" enctype=\"multipart/form-data\">
                            <input class=\"form-control\" type=\"file\" name=\"justificatif\">
                            <br>
                            ";
            // line 368
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 368, $this->source); })()), "user", [], "any", false, false, false, 368), "getHebergement", [], "method", false, false, false, 368), "getJustificatifPaiement", [], "method", false, false, false, 368)) {
                // line 369
                yield "                                <p class=\" alert alert-danger text-center\">Vous devez joindre le justificatif de paiement ici ! (WU , Ria ...)  ou par mail : <u>maykconsulting@gmail.com</u> </p>
                            ";
            } else {
                // line 371
                yield "                                <p class=\" alert alert-success text-center\">Nous avons reçu votre justificatif de paiement . </p>
                            ";
            }
            // line 373
            yield "                            <button type=\"submit\" class=\"btn btn-dark\" style=\"width:100%\">
                                <i class=\"fas fa-upload\"></i>
                                Soumettre</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 394
            yield "

        <br>
    ";
        }
        // line 398
        yield "    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/hebergement/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  618 => 398,  612 => 394,  600 => 373,  596 => 371,  592 => 369,  590 => 368,  584 => 365,  569 => 352,  556 => 342,  552 => 341,  549 => 340,  547 => 339,  533 => 327,  528 => 324,  517 => 319,  515 => 318,  506 => 311,  495 => 306,  489 => 302,  487 => 301,  480 => 296,  469 => 291,  463 => 288,  457 => 284,  455 => 283,  447 => 278,  440 => 274,  426 => 263,  421 => 261,  405 => 247,  385 => 229,  382 => 228,  373 => 222,  363 => 217,  336 => 192,  334 => 191,  331 => 190,  305 => 166,  303 => 165,  300 => 164,  290 => 157,  272 => 141,  270 => 140,  267 => 139,  234 => 108,  227 => 104,  222 => 102,  218 => 100,  209 => 93,  207 => 92,  181 => 69,  155 => 45,  152 => 44,  142 => 37,  139 => 36,  137 => 35,  134 => 34,  124 => 27,  121 => 26,  118 => 25,  108 => 18,  105 => 17,  103 => 16,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block title %}Volet Hebergement - {{ app.user.name }}{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


    <h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
        Hébergement
        <i class=\"fas fa-building\"></i>
    </h1>
    {% if app.flashes('success-add-hebergement') is not empty %}
        <div class=\"alert alert-success\">
            {{ app.flashes('success-add-garant')|first }}
            <div align=\"center\">
                Votre demande a été soumise  avec succcess !
            </div>
        </div>

    {% endif %}
    {% if app.flashes('failed-add-justificatif') is not empty %}
        <div class=\"alert alert-danger\">
            {{ app.flashes('failed-add-justificatif')|first }}
            <div align=\"center\">
                Aucun justificatif de paiement reçu !
            </div>
        </div>

    {% endif %}

    {% if app.flashes('success-add-justificatif') is not empty %}
        <div class=\"alert alert-success\">
            {{ app.flashes('success-add-justificatif')|first }}
            <div align=\"center\">
                Votre justificatif a été envoyé avec succcess !
            </div>
        </div>

    {% endif %}
    {% if app.user.hebergement is  null %}
    <br>


    <div class=\"card animate__animated animate__fadeInLeft\">
        <div class=\"card-header  fw-bold text-xs text-uppercase\">
            Hebergement
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title \">Soumettre une demande</h5>
            <p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de document de logement puis de la soumettre par la suite . </p> <p> Attention nous ne vous fournissons que des documents officiel.Il sera donc preferable d'envisagé d'avoir une alternative une fois votre arrivé en france. Ces documents vous aiderons à avoir votre Visa Etude</p>
            <div align=\"center\">   <button type=\"button\" class=\"btn btn-dark text-center \" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button> </div>
        </div>
    </div>


    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">

                    <form method=\"post\" action=\"{{ path('app_hebergement_new') }}\" enctype=\"multipart/form-data\">
                        <p class=\"text-danger\">
                            <strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf ou au format image et lisible .<br>
                                <p class=\"text-dark\">* Lien utile pour convertion :
                                    <a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a>
                                </p>
                            </strong>
                        </p>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
                            <select name=\"pays\" class=\"form-select form-select mb-3\">
                                <option selected>Choisissez le pays !</option>
                                <option value=\"France\">France</option>
                                <option value=\"Canada\">Canada</option>
                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
                            <Input name=\"ville\" type=\"text\" class=\"form-control\" required>
                        </div>

                        {% if not  app.user.passport %}

                            <div class=\"mb-3\">
                                <label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
                                <input name=\"pathPassport\" type=\"file\" class=\"form-control\">
                            </div>

                        {% else %}
                            <div class=\"mb-3 text-dark\">
                                Votre Passport : Nous l'avons déja
                                <a target=\"blank\" href=\"{{ asset('uploads/passport/' ~ app.user.getPassport()) }}\" class=\" ml-3\">ici</a>
                                . Vous pouvez toujours le remplacer dans l'onglet
                                <a target=\"blank\" href=\"{{ path('app_user_profil')}}\">Mon Profil
                                </a>
                            </div>
                        {% endif %}

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
                            <input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
                            <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"Facultatif ...\"></textarea>
                        </div>

                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
                            <label class=\"form-check-label text-dark\" for=\"invalidCheck\">
                                Je certifie l'authenticité de mes documents et des informations que j'ai fournis
                            </label>
                            <div class=\"invalid-feedback\">
                                Vous devez accepter nos conditions.
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-dark\">Soumettre</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {% else %}

    {% if app.user.hebergement.statutDemande == 0 %}

        <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
            <div class=\"card-header  fw-bold text-xs text-uppercase\">
                Etat de la demande
            </div>
            <div class=\"card-body\">
                <p class=\"text-dark\">
                    <strong class=\"text-danger fw-bold text-xs text-uppercase\">
                        En attente de paiement</strong>
                <div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    <div class=\"progress-bar bg-danger\" style=\"width: 25%\"></div>
                </div>
                </p>
                <p>
                    Veuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

                <a style=\"text-align: center\" href=\"{{ path('app_facture_hebergement')}}\" class=\"btn btn-dark \">
                    <i class=\"fas fa-download\"></i>
                    Télecharger le devis</a>

            </div>
        </div>
        {% endif %}

        {% if app.user.hebergement.statutDemande == 1 %}

            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    Etat de la demande
                </div>
                <div class=\"card-body\">
                    <p class=\"text-dark\">
                        <strong class=\"text-primary fw-bold text-xs text-uppercase\">En cours de traitement
                        </strong>
                    <div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <div class=\"progress-bar bg-primary\" style=\"width: 50%\"></div>
                    </div>
                    </p>
                    <p>
                        Veuillez patientez s'il vous plait. Nous traitons votre demande . Elle s'etend généralement sur une période de
                        <strong>
                            3 à 5 jours
                        </strong>
                        ouvrés</p>
                </div>
            </div>


        {% endif %}

        {% if app.user.hebergement.statutDemande == 2 %}

            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    Etat de la demande
                </div>
                <div class=\"card-body\">
                    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
                    <strong class=\"text-success\">Traitement terminée</strong>
                    <div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <div class=\"progress-bar bg-success\" style=\"width: 100%\">Terminée</div>
                    </div>
                    </p>
                    <p>Félicitations
                        <i class=\"fas fa-thumbs-up text-success\"></i>
                        Le traitement de votre demande est terminée. Les documents sont disponible .</p>
                </div>
            </div>

            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    téléchargement
                </div>
                <div class=\"card-body\">
                    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
                    <strong class=\"\">Documents :</strong>
                    <a href=\"{{ asset('uploads/hebergement/' ~ app.user.hebergement.getHebergementFile() ) }}\" class=\"btn btn-success btn-sm\" download=\"{{ app.user.getName()}}_GarantFile\">
                        <i class=\"fas fa-download\"></i>
                    </a>
                    </p>
                    <p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant :
                        <strong class=\"text-info fw-bold text-xs text-uppercase\">{{ app.user.hebergement.pays }}</strong>.</p>
                </div>
            </div>


        {% endif %}
        {% if app.user.hebergement.statutDemande == 3 %}

            <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                <div class=\"card-header  fw-bold text-xs text-uppercase\">
                    Etat de la demande
                </div>
                <div class=\"card-body\">
                    <p class=\"text-warning fw-bold text-xs text-uppercase\" align\"center\">
                    <strong class=\"text-warning\">Demande clôturer</strong>
                    <div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <div class=\"progress-bar bg-warning\" style=\"width: 100%\"></div>
                    </div>
                    </p>
                    <p class=\"\">Votre demande a été clôturer. Vous ne pouvez plus effectuer de demande. Veuillez contacter l'administrateur en cas de doute .</p>
                </div>
            </div>


        {% endif %}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                    <div class=\"card-header fw-bold text-xs text-uppercase\">
                        Mes informations communiquées
                    </div>
                    <div
                            class=\"card-body\">
                        <!-- Contenu de la première carte ici -->


                        <p>
                            Pour votre demande de garant financier soumise le
                            <strong class=\"text-dark\">
                                {{app.user.hebergement.getDateDemande() |date('d-m-Y')}}</strong>
                            à
                            {{app.user.hebergement.getDateDemande() |date('H:i')}}
                            vous nous avez communiqué les informations suivantes :</p>


                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <th scope=\"row\">Pays</th>
                                            <td>{{ app.user.hebergement.getPays() }}</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Ville</th>
                                            <td>{{ app.user.hebergement.getVilleEtude() }}</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Passport</th>
                                            <td>
                                                {% if not app.user.passport %}
                                                    <p class=\"text-danger\">
                                                        <strong>Vous devez joindre le justificatif de paiement pour le traitement de votre dossier ici !.</strong>
                                                    </p>
                                                    <p>Rendez-vous dans le menu
                                                        <a href=\"{{ path('app_user_profil') }}\" target=\"_blank\">Mon profil</a>
                                                        afin d'y joindre le ou les documents demandés.</p>
                                                {% else %}
                                                    <a href=\"{{ asset('uploads/passport/' ~ app.user.passport) }}\" class=\"btn btn-dark btn-sm\" download=\"{{ app.user.name }}_Passeport\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Attestation d'acceptation</th>
                                            <td>
                                                {% if app.user.hebergement.getPathAdmissionFile() == null %}
                                                    <p class=\"text-danger\">Vous n'avez joint aucune attestation d'acceptation. Les pièces jointes sont obligatoires.</p>
                                                    <label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
                                                    <input class=\"form-control\" type=\"file\" id=\"formFile\">
                                                {% else %}
                                                    <a href=\"{{ asset('uploads/attestation/' ~ app.user.hebergement.pathAdmissionFile) }}\" class=\"btn btn-dark btn-sm\" download=\"{{ app.user.name }}_attestation_acceptation\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">
                                                Justificatif de paiement
                                            </th>
                                            <td>
                                                {% if app.user.hebergement.justificatifPaiement %}
                                                    <a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ app.user.hebergement.justificatifPaiement) }}\" class=\"btn btn-success btn-sm\" download=\"{{ app.user.name }}__paiement\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                {% else %}

                                                    Aucun justificatif
                                                {% endif %}
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        {% if app.user.hebergement.getStatutDemande() == 0 %}
                            <br>
                            <form action=\"{{ path('app_hebergement_delete', {'id': app.user.hebergement.id}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande d\\'hébergement ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ app.user.hebergement.id) }}\">
                                <div align=\"center\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                        Annuler

                                    </button>
                                </div>
                            </form>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
                    <div class=\"card-header  fw-bold text-xs text-uppercase\">
                        Documents relatifs à la demande
                    </div>
                    <div
                            class=\"card-body\">
                        <!-- Contenu de la deuxième carte ici -->
                        Joindre un justificatif de paiement (Western Union , Ria ...)
                        <br><br>
                        <form method=\"post\" action=\"{{ path('app_hebergement_justificatif_paiement') }}\" enctype=\"multipart/form-data\">
                            <input class=\"form-control\" type=\"file\" name=\"justificatif\">
                            <br>
                            {% if  not  app.user.getHebergement().getJustificatifPaiement() %}
                                <p class=\" alert alert-danger text-center\">Vous devez joindre le justificatif de paiement ici ! (WU , Ria ...)  ou par mail : <u>maykconsulting@gmail.com</u> </p>
                            {% else %}
                                <p class=\" alert alert-success text-center\">Nous avons reçu votre justificatif de paiement . </p>
                            {% endif %}
                            <button type=\"submit\" class=\"btn btn-dark\" style=\"width:100%\">
                                <i class=\"fas fa-upload\"></i>
                                Soumettre</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        {# <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\t\tHistorique de la demande
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Contenu de la deuxième carte ici -->

\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div> #}


        <br>
    {%  endif %}
    </div>
    </div>
{% endblock %}
", "administration/hebergement/index.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/hebergement/index.html.twig");
    }
}
