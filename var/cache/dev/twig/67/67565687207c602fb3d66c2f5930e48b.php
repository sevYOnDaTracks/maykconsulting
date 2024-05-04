<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* administration/hebergement/index.html.twig */
class __TwigTemplate_fdfd8726a5cb1395326fcd733a6a8e60 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Volet Hebergement - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


    <h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
        Hébergement
        <i class=\"fas fa-building\"></i>
    </h1>
    ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success-add-hebergement"], "method", false, false, false, 16))) {
            // line 17
            echo "        <div class=\"alert alert-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success-add-garant"], "method", false, false, false, 18)), "html", null, true);
            echo "
            <div align=\"center\">
                Votre demande a été soumise  avec succcess !
            </div>
        </div>

    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["failed-add-justificatif"], "method", false, false, false, 25))) {
            // line 26
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 27
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["failed-add-justificatif"], "method", false, false, false, 27)), "html", null, true);
            echo "
            <div align=\"center\">
                Aucun justificatif de paiement reçu !
            </div>
        </div>

    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["success-add-justificatif"], "method", false, false, false, 35))) {
            // line 36
            echo "        <div class=\"alert alert-success\">
            ";
            // line 37
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["success-add-justificatif"], "method", false, false, false, 37)), "html", null, true);
            echo "
            <div align=\"center\">
                Votre justificatif a été envoyé avec succcess !
            </div>
        </div>

    ";
        }
        // line 44
        echo "    ";
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "hebergement", [], "any", false, false, false, 44))) {
            // line 45
            echo "    <br>


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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_new");
            echo "\" enctype=\"multipart/form-data\">
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
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "passport", [], "any", false, false, false, 92)) {
                // line 93
                echo "
                            <div class=\"mb-3\">
                                <label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
                                <input name=\"pathPassport\" type=\"file\" class=\"form-control\">
                            </div>

                        ";
            } else {
                // line 100
                echo "                            <div class=\"mb-3 text-dark\">
                                Votre Passport : Nous l'avons déja
                                <a target=\"blank\" href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "getPassport", [], "method", false, false, false, 102))), "html", null, true);
                echo "\" class=\" ml-3\">ici</a>
                                . Vous pouvez toujours le remplacer dans l'onglet
                                <a target=\"blank\" href=\"";
                // line 104
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\">Mon Profil
                                </a>
                            </div>
                        ";
            }
            // line 108
            echo "
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
            echo "
    ";
            // line 140
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "hebergement", [], "any", false, false, false, 140), "statutDemande", [], "any", false, false, false, 140) == 0)) {
                // line 141
                echo "
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
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_hebergement");
                echo "\" class=\"btn btn-dark \">
                    <i class=\"fas fa-download\"></i>
                    Télecharger le devis</a>

            </div>
        </div>
        ";
            }
            // line 164
            echo "
        ";
            // line 165
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165), "hebergement", [], "any", false, false, false, 165), "statutDemande", [], "any", false, false, false, 165) == 1)) {
                // line 166
                echo "
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
            echo "
        ";
            // line 191
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "hebergement", [], "any", false, false, false, 191), "statutDemande", [], "any", false, false, false, 191) == 2)) {
                // line 192
                echo "
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "hebergement", [], "any", false, false, false, 217), "getHebergementFile", [], "method", false, false, false, 217))), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "getName", [], "method", false, false, false, 217), "html", null, true);
                echo "_GarantFile\">
                        <i class=\"fas fa-download\"></i>
                    </a>
                    </p>
                    <p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant :
                        <strong class=\"text-info fw-bold text-xs text-uppercase\">";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "user", [], "any", false, false, false, 222), "hebergement", [], "any", false, false, false, 222), "pays", [], "any", false, false, false, 222), "html", null, true);
                echo "</strong>.</p>
                </div>
            </div>


        ";
            }
            // line 228
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228), "hebergement", [], "any", false, false, false, 228), "statutDemande", [], "any", false, false, false, 228) == 3)) {
                // line 229
                echo "
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
            echo "        <div class=\"row\">
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "user", [], "any", false, false, false, 261), "hebergement", [], "any", false, false, false, 261), "getDateDemande", [], "method", false, false, false, 261), "d-m-Y"), "html", null, true);
            echo "</strong>
                            à
                            ";
            // line 263
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "user", [], "any", false, false, false, 263), "hebergement", [], "any", false, false, false, 263), "getDateDemande", [], "method", false, false, false, 263), "H:i"), "html", null, true);
            echo "
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "user", [], "any", false, false, false, 274), "hebergement", [], "any", false, false, false, 274), "getPays", [], "method", false, false, false, 274), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Ville</th>
                                            <td>";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "user", [], "any", false, false, false, 278), "hebergement", [], "any", false, false, false, 278), "getVilleEtude", [], "method", false, false, false, 278), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Passport</th>
                                            <td>
                                                ";
            // line 283
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "user", [], "any", false, false, false, 283), "passport", [], "any", false, false, false, 283)) {
                // line 284
                echo "                                                    <p class=\"text-danger\">
                                                        <strong>Vous devez joindre le justificatif de paiement pour le traitement de votre dossier ici !.</strong>
                                                    </p>
                                                    <p>Rendez-vous dans le menu
                                                        <a href=\"";
                // line 288
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\" target=\"_blank\">Mon profil</a>
                                                        afin d'y joindre le ou les documents demandés.</p>
                                                ";
            } else {
                // line 291
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "passport", [], "any", false, false, false, 291))), "html", null, true);
                echo "\" class=\"btn btn-dark btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true);
                echo "_Passeport\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
            }
            // line 296
            echo "                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Attestation d'acceptation</th>
                                            <td>
                                                ";
            // line 301
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "hebergement", [], "any", false, false, false, 301), "getPathAdmissionFile", [], "method", false, false, false, 301) == null)) {
                // line 302
                echo "                                                    <p class=\"text-danger\">Vous n'avez joint aucune attestation d'acceptation. Les pièces jointes sont obligatoires.</p>
                                                    <label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
                                                    <input class=\"form-control\" type=\"file\" id=\"formFile\">
                                                ";
            } else {
                // line 306
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "hebergement", [], "any", false, false, false, 306), "pathAdmissionFile", [], "any", false, false, false, 306))), "html", null, true);
                echo "\" class=\"btn btn-dark btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "name", [], "any", false, false, false, 306), "html", null, true);
                echo "_attestation_acceptation\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
            }
            // line 311
            echo "                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">
                                                Justificatif de paiement
                                            </th>
                                            <td>
                                                ";
            // line 318
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "user", [], "any", false, false, false, 318), "hebergement", [], "any", false, false, false, 318), "justificatifPaiement", [], "any", false, false, false, 318)) {
                // line 319
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "hebergement", [], "any", false, false, false, 319), "justificatifPaiement", [], "any", false, false, false, 319))), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "name", [], "any", false, false, false, 319), "html", null, true);
                echo "__paiement\">
                                                        Voir
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
            } else {
                // line 324
                echo "
                                                    Aucun justificatif
                                                ";
            }
            // line 327
            echo "                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        ";
            // line 339
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 339, $this->source); })()), "user", [], "any", false, false, false, 339), "hebergement", [], "any", false, false, false, 339), "getStatutDemande", [], "method", false, false, false, 339) == 0)) {
                // line 340
                echo "                            <br>
                            <form action=\"";
                // line 341
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "user", [], "any", false, false, false, 341), "hebergement", [], "any", false, false, false, 341), "id", [], "any", false, false, false, 341)]), "html", null, true);
                echo "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande d\\'hébergement ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 342
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342), "hebergement", [], "any", false, false, false, 342), "id", [], "any", false, false, false, 342))), "html", null, true);
                echo "\">
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
            echo "                    </div>
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_justificatif_paiement");
            echo "\" enctype=\"multipart/form-data\">
                            <input class=\"form-control\" type=\"file\" name=\"justificatif\">
                            <br>
                            ";
            // line 368
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 368, $this->source); })()), "user", [], "any", false, false, false, 368), "getHebergement", [], "method", false, false, false, 368), "getJustificatifPaiement", [], "method", false, false, false, 368)) {
                // line 369
                echo "                                <p class=\" alert alert-danger text-center\">Vous devez joindre le justificatif de paiement ici ! (WU , Ria ...)  ou par mail : <u>maykconsulting@gmail.com</u> </p>
                            ";
            } else {
                // line 371
                echo "                                <p class=\" alert alert-success text-center\">Nous avons reçu votre justificatif de paiement . </p>
                            ";
            }
            // line 373
            echo "                            <button type=\"submit\" class=\"btn btn-dark\" style=\"width:100%\">
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
            echo "

        <br>
    ";
        }
        // line 398
        echo "    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  616 => 398,  610 => 394,  598 => 373,  594 => 371,  590 => 369,  588 => 368,  582 => 365,  567 => 352,  554 => 342,  550 => 341,  547 => 340,  545 => 339,  531 => 327,  526 => 324,  515 => 319,  513 => 318,  504 => 311,  493 => 306,  487 => 302,  485 => 301,  478 => 296,  467 => 291,  461 => 288,  455 => 284,  453 => 283,  445 => 278,  438 => 274,  424 => 263,  419 => 261,  403 => 247,  383 => 229,  380 => 228,  371 => 222,  361 => 217,  334 => 192,  332 => 191,  329 => 190,  303 => 166,  301 => 165,  298 => 164,  288 => 157,  270 => 141,  268 => 140,  265 => 139,  232 => 108,  225 => 104,  220 => 102,  216 => 100,  207 => 93,  205 => 92,  179 => 69,  153 => 45,  150 => 44,  140 => 37,  137 => 36,  135 => 35,  132 => 34,  122 => 27,  119 => 26,  116 => 25,  106 => 18,  103 => 17,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
