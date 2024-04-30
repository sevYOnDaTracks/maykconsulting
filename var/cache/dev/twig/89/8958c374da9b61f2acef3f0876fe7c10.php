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

/* administration/garant/index.html.twig */
class __TwigTemplate_31d1d85986030251752999695a266221 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/garant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/garant/index.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/garant/index.html.twig", 1);
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

        echo "Volet Garant -
\t";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
\t\tGarant financier
\t\t<i class=\"fas fa-money-bill\"></i>
\t</h1>

\t";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success-add-garant"], "method", false, false, false, 13))) {
            // line 14
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success-add-garant"], "method", false, false, false, 15)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre demande a été soumise  avec succcess !
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 22
        echo "
\t";
        // line 23
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["success-add-justificatif"], "method", false, false, false, 23))) {
            // line 24
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["success-add-justificatif"], "method", false, false, false, 25)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre justificatif a été envoyé avec succcess !
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 32
        echo "
\t";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 33))) {
            // line 34
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 35)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre demande n'a pas été soumise ! Veuillez entrer des fichiers valides
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 42
        echo "
\t";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "isVerified", [], "any", false, false, false, 43)) {
            // line 44
            echo "\t\t<div class=\"alert alert-danger animate__animated animate__fadeInLeft \">
\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 45)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre compte n'est pas vérifié ! Veuillez verifier vos mails afin de cliquez sur le lien d'activation. Verfiez aussi les spams
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 51
        echo "

\t";
        // line 53
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "garantFinancier", [], "any", false, false, false, 53))) {
            // line 54
            echo "\t\t<br>


\t\t<div class=\"card animate__animated animate__fadeInLeft\">
\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\tGarant financier
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title \">Soumettre une demande</h5>
\t\t\t\t<p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de garant financier puis de la soumettre par la suite .</p>
\t\t\t\t<button type=\"button\" class=\"btn btn-dark\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_new");
            echo "\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t<strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf ou au format image et lisible .<br>
\t\t\t\t\t\t\t\t\t<p class=\"text-dark\">* Lien utile pour convertion :
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t<option selected>Choisissez le pays !</option>
\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t<option value=\"Maroc\">Maroc</option>
\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
\t\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 103
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "passport", [], "any", false, false, false, 103)) {
                // line 104
                echo "
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
\t\t\t\t\t\t\t\t\t<input name=\"pathPassport\" type=\"file\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t\t\t\t<div class=\"mb-3 text-dark\">
\t\t\t\t\t\t\t\t\tVotre Passport : Nous l'avons déja
\t\t\t\t\t\t\t\t\t<a target=\"blank\" href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "getPassport", [], "method", false, false, false, 113))), "html", null, true);
                echo "\" class=\" ml-3\">ici</a>
\t\t\t\t\t\t\t\t\t. Vous pouvez toujours le remplacer dans l'onglet
\t\t\t\t\t\t\t\t\t<a target=\"blank\" href=\"";
                // line 115
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\">Mon Profil
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 119
            echo "
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
\t\t\t\t\t\t\t\t<input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"Facultatif ...\"></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check mb-3\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
\t\t\t\t\t\t\t\t<label class=\"form-check-label text-dark\" for=\"invalidCheck\">
\t\t\t\t\t\t\t\t\tJe certifie l'authenticité de mes documents et des informations que j'ai fournis
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\tVous devez accepter nos conditions.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark\">Soumettre</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 150
            echo "
\t\t";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "garantFinancier", [], "any", false, false, false, 151), "statutDemande", [], "any", false, false, false, 151) == 0)) {
                // line 152
                echo "
\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark\">
\t\t\t\t\t\t<strong class=\"text-danger fw-bold text-xs text-uppercase\">
\t\t\t\t\t\t\tEn attente de paiement</strong>
\t\t\t\t\t\t<div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" style=\"width: 25%\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVeuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

\t\t\t\t\t<a href=\"";
                // line 168
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_test");
                echo "\" class=\"btn btn-danger \">
\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\tTélecharger le devis</a>

\t\t\t\t</div>
\t\t\t</div>


\t\t";
            }
            // line 177
            echo "
\t\t";
            // line 178
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "garantFinancier", [], "any", false, false, false, 178), "statutDemande", [], "any", false, false, false, 178) == 1)) {
                // line 179
                echo "
\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark\">
\t\t\t\t\t\t<strong class=\"text-primary fw-bold text-xs text-uppercase\">En cours de traitement
\t\t\t\t\t\t</strong>
\t\t\t\t\t\t<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 50%\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVeuillez patientez s'il vous plait. Nous traitons votre demande . Elle s'etend généralement sur une période de
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t3 à 5 jours
\t\t\t\t\t\t</strong>
\t\t\t\t\t\touvrés</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t";
            }
            // line 203
            echo "
\t\t";
            // line 204
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204), "garantFinancier", [], "any", false, false, false, 204), "statutDemande", [], "any", false, false, false, 204) == 2)) {
                // line 205
                echo "
\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
\t\t\t\t\t\t<strong class=\"text-success\">Traitement terminée</strong>
\t\t\t\t\t\t<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" style=\"width: 100%\">Terminée</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p>Félicitations
\t\t\t\t\t\t<i class=\"fas fa-thumbs-up text-success\"></i>
\t\t\t\t\t\tLe traitement de votre demande est terminée. Les documents sont disponible .</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\ttéléchargement
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
\t\t\t\t\t\t<strong class=\"\">Documents :</strong>
\t\t\t\t\t\t<a href=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230), "getGarantFinancier", [], "any", false, false, false, 230), "getGarantFile", [], "method", false, false, false, 230))), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230), "getName", [], "method", false, false, false, 230), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant :
\t\t\t\t\t\t<strong class=\"text-info fw-bold text-xs text-uppercase\">";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "user", [], "any", false, false, false, 235), "garantFinancier", [], "any", false, false, false, 235), "pays", [], "any", false, false, false, 235), "html", null, true);
                echo "</strong>.</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t";
            }
            // line 241
            echo "
\t\t";
            // line 242
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "user", [], "any", false, false, false, 242), "garantFinancier", [], "any", false, false, false, 242), "statutDemande", [], "any", false, false, false, 242) == 3)) {
                // line 243
                echo "
\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-warning fw-bold text-xs text-uppercase\" align\"center\">
\t\t\t\t\t\t<strong class=\"text-warning\">Demande clôturer</strong>
\t\t\t\t\t\t<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" style=\"width: 100%\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"\">Votre demande a été clôturer. Vous ne pouvez plus effectuer de demande. Veuillez contacter l'administrateur en cas de doute .</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t";
            }
            // line 261
            echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t\t<div class=\"card-header fw-bold text-xs text-uppercase\">
\t\t\t\t\t\tMes informations communiquées
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Contenu de la première carte ici -->


\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tPour votre demande de garant financier soumise le
\t\t\t\t\t\t\t<strong class=\"text-dark\">
\t\t\t\t\t\t\t\t";
            // line 276
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276), "garantFinancier", [], "any", false, false, false, 276), "getDateDemande", [], "method", false, false, false, 276), "d-m-Y"), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t";
            // line 278
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "user", [], "any", false, false, false, 278), "garantFinancier", [], "any", false, false, false, 278), "getDateDemande", [], "method", false, false, false, 278), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t\tvous nous avez communiqué les informations suivantes :</p>


\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 289, $this->source); })()), "user", [], "any", false, false, false, 289), "garantFinancier", [], "any", false, false, false, 289), "getPays", [], "method", false, false, false, 289), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "user", [], "any", false, false, false, 293), "garantFinancier", [], "any", false, false, false, 293), "getVilleEtude", [], "method", false, false, false, 293), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 298
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "user", [], "any", false, false, false, 298), "passport", [], "any", false, false, false, 298)) {
                // line 299
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Vous n'avez joint aucun passeport. Les pièces jointes sont obligatoires pour le traitement de votre dossier.</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Rendez-vous dans le menu
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 303
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\" target=\"_blank\">Mon profil</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tafin d'y joindre le ou les documents demandés.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 306
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "passport", [], "any", false, false, false, 306))), "html", null, true);
                echo "\" class=\"btn btn-dark btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "name", [], "any", false, false, false, 306), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 311
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Attestation d'acceptation</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 316
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316), "garantFinancier", [], "any", false, false, false, 316), "getPathAdmissionFile", [], "method", false, false, false, 316) == null)) {
                // line 317
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">Vous n'avez joint aucune attestation d'acceptation. Les pièces jointes sont obligatoires.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 321
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "user", [], "any", false, false, false, 321), "garantFinancier", [], "any", false, false, false, 321), "pathAdmissionFile", [], "any", false, false, false, 321))), "html", null, true);
                echo "\" class=\"btn btn-dark btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "user", [], "any", false, false, false, 321), "name", [], "any", false, false, false, 321), "html", null, true);
                echo "_attestation_acceptation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 326
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\tJustificatif de paiement
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 333
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 333, $this->source); })()), "user", [], "any", false, false, false, 333), "garantFinancier", [], "any", false, false, false, 333), "justificatifPaiement", [], "any", false, false, false, 333)) {
                // line 334
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "user", [], "any", false, false, false, 334), "garantFinancier", [], "any", false, false, false, 334), "justificatifPaiement", [], "any", false, false, false, 334))), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "user", [], "any", false, false, false, 334), "name", [], "any", false, false, false, 334), "html", null, true);
                echo "__paiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 339
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAucun justificatif
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 342
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 354
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 354, $this->source); })()), "user", [], "any", false, false, false, 354), "garantFinancier", [], "any", false, false, false, 354), "getStatutDemande", [], "method", false, false, false, 354) == 0)) {
                // line 355
                echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<form action=\"";
                // line 356
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 356, $this->source); })()), "user", [], "any", false, false, false, 356), "garantFinancier", [], "any", false, false, false, 356), "id", [], "any", false, false, false, 356)]), "html", null, true);
                echo "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande de garant financier ?')\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 357
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 357, $this->source); })()), "user", [], "any", false, false, false, 357), "garantFinancier", [], "any", false, false, false, 357), "id", [], "any", false, false, false, 357))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\tAnnuler

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            // line 367
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\t\tDocuments relatifs à la demande
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Contenu de la deuxième carte ici -->
\t\t\t\t\t\tJoindre un justificatif de paiement (Western Union , Ria ...)
\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 380
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_justificatif_paiement");
            echo "\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"justificatif\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 383
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 383, $this->source); })()), "user", [], "any", false, false, false, 383), "getGarantFinancier", [], "method", false, false, false, 383), "getJustificatifPaiement", [], "method", false, false, false, 383)) {
                echo "\t\t
\t\t\t\t\t\t\t<p class=\" alert alert-danger text-center\">Vous n'avez joint aucun justificatif de paiement pour l'instant . </p>\t
\t\t\t\t\t\t\t";
            } else {
                // line 386
                echo "<p class=\" alert alert-success text-center\">Justificatif reçu . </p>\t
\t\t\t\t\t\t\t";
            }
            // line 388
            echo "\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark\" style=\"width:100%\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-upload\"></i>
\t\t\t\t\t\t\t\tSoumettre</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
            // line 409
            echo "

\t\t<br>


\t";
        }
        // line 415
        echo "

</div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/garant/index.html.twig";
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
        return array (  646 => 415,  638 => 409,  626 => 388,  622 => 386,  616 => 383,  610 => 380,  595 => 367,  582 => 357,  578 => 356,  575 => 355,  573 => 354,  559 => 342,  554 => 339,  543 => 334,  541 => 333,  532 => 326,  521 => 321,  515 => 317,  513 => 316,  506 => 311,  495 => 306,  489 => 303,  483 => 299,  481 => 298,  473 => 293,  466 => 289,  452 => 278,  447 => 276,  430 => 261,  410 => 243,  408 => 242,  405 => 241,  396 => 235,  386 => 230,  359 => 205,  357 => 204,  354 => 203,  328 => 179,  326 => 178,  323 => 177,  311 => 168,  293 => 152,  291 => 151,  288 => 150,  255 => 119,  248 => 115,  243 => 113,  239 => 111,  230 => 104,  228 => 103,  200 => 78,  174 => 54,  172 => 53,  168 => 51,  159 => 45,  156 => 44,  154 => 43,  151 => 42,  141 => 35,  138 => 34,  136 => 33,  133 => 32,  123 => 25,  120 => 24,  118 => 23,  115 => 22,  105 => 15,  102 => 14,  100 => 13,  93 => 8,  83 => 7,  71 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block title %}Volet Garant -
\t{{ app.user.name}}
{% endblock %}

{% block body %}
\t<h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
\t\tGarant financier
\t\t<i class=\"fas fa-money-bill\"></i>
\t</h1>

\t{% if app.flashes('success-add-garant') is not empty %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{ app.flashes('success-add-garant')|first }}
\t\t\t<div align=\"center\">
\t\t\t\tVotre demande a été soumise  avec succcess !
\t\t\t</div>
\t\t</div>

\t{% endif %}

\t{% if app.flashes('success-add-justificatif') is not empty %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{ app.flashes('success-add-justificatif')|first }}
\t\t\t<div align=\"center\">
\t\t\t\tVotre justificatif a été envoyé avec succcess !
\t\t\t</div>
\t\t</div>

\t{% endif %}

\t{% if app.flashes('error-creation-demande') is not empty %}
\t\t<div class=\"alert alert-danger\">
\t\t\t{{ app.flashes('error-creation-demande')|first }}
\t\t\t<div align=\"center\">
\t\t\t\tVotre demande n'a pas été soumise ! Veuillez entrer des fichiers valides
\t\t\t</div>
\t\t</div>

\t{% endif %}

\t{% if not app.user.isVerified %}
\t\t<div class=\"alert alert-danger animate__animated animate__fadeInLeft \">
\t\t\t{{ app.flashes('error-creation-demande')|first }}
\t\t\t<div align=\"center\">
\t\t\t\tVotre compte n'est pas vérifié ! Veuillez verifier vos mails afin de cliquez sur le lien d'activation. Verfiez aussi les spams
\t\t\t</div>
\t\t</div>
\t{%  endif %}


\t{% if app.user.garantFinancier is  null %}
\t\t<br>


\t\t<div class=\"card animate__animated animate__fadeInLeft\">
\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\tGarant financier
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title \">Soumettre une demande</h5>
\t\t\t\t<p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de garant financier puis de la soumettre par la suite .</p>
\t\t\t\t<button type=\"button\" class=\"btn btn-dark\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_new') }}\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t<strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf ou au format image et lisible .<br>
\t\t\t\t\t\t\t\t\t<p class=\"text-dark\">* Lien utile pour convertion :
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t<option selected>Choisissez le pays !</option>
\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t<option value=\"Maroc\">Maroc</option>
\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
\t\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% if not  app.user.passport %}

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
\t\t\t\t\t\t\t\t\t<input name=\"pathPassport\" type=\"file\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"mb-3 text-dark\">
\t\t\t\t\t\t\t\t\tVotre Passport : Nous l'avons déja
\t\t\t\t\t\t\t\t\t<a target=\"blank\" href=\"{{ asset('uploads/passport/' ~ app.user.getPassport()) }}\" class=\" ml-3\">ici</a>
\t\t\t\t\t\t\t\t\t. Vous pouvez toujours le remplacer dans l'onglet
\t\t\t\t\t\t\t\t\t<a target=\"blank\" href=\"{{ path('app_user_profil')}}\">Mon Profil
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
\t\t\t\t\t\t\t\t<input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"Facultatif ...\"></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check mb-3\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
\t\t\t\t\t\t\t\t<label class=\"form-check-label text-dark\" for=\"invalidCheck\">
\t\t\t\t\t\t\t\t\tJe certifie l'authenticité de mes documents et des informations que j'ai fournis
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\tVous devez accepter nos conditions.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark\">Soumettre</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% else %}

\t\t{% if app.user.garantFinancier.statutDemande == 0 %}

\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark\">
\t\t\t\t\t\t<strong class=\"text-danger fw-bold text-xs text-uppercase\">
\t\t\t\t\t\t\tEn attente de paiement</strong>
\t\t\t\t\t\t<div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" style=\"width: 25%\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVeuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

\t\t\t\t\t<a href=\"{{ path('app_facture_test')}}\" class=\"btn btn-danger \">
\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\tTélecharger le devis</a>

\t\t\t\t</div>
\t\t\t</div>


\t\t{% endif %}

\t\t{% if app.user.garantFinancier.statutDemande == 1 %}

\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark\">
\t\t\t\t\t\t<strong class=\"text-primary fw-bold text-xs text-uppercase\">En cours de traitement
\t\t\t\t\t\t</strong>
\t\t\t\t\t\t<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 50%\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVeuillez patientez s'il vous plait. Nous traitons votre demande . Elle s'etend généralement sur une période de
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t3 à 5 jours
\t\t\t\t\t\t</strong>
\t\t\t\t\t\touvrés</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t{% endif %}

\t\t{% if app.user.garantFinancier.statutDemande == 2 %}

\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
\t\t\t\t\t\t<strong class=\"text-success\">Traitement terminée</strong>
\t\t\t\t\t\t<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" style=\"width: 100%\">Terminée</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p>Félicitations
\t\t\t\t\t\t<i class=\"fas fa-thumbs-up text-success\"></i>
\t\t\t\t\t\tLe traitement de votre demande est terminée. Les documents sont disponible .</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\ttéléchargement
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\">
\t\t\t\t\t\t<strong class=\"\">Documents :</strong>
\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ app.user.getGarantFinancier.getGarantFile() ) }}\" class=\"btn btn-success btn-sm\" download=\"{{ app.user.getName()}}_GarantFile\">
\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant :
\t\t\t\t\t\t<strong class=\"text-info fw-bold text-xs text-uppercase\">{{ app.user.garantFinancier.pays }}</strong>.</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t{% endif %}

\t\t{% if app.user.garantFinancier.statutDemande == 3 %}

\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\tEtat de la demande
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"text-warning fw-bold text-xs text-uppercase\" align\"center\">
\t\t\t\t\t\t<strong class=\"text-warning\">Demande clôturer</strong>
\t\t\t\t\t\t<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" style=\"width: 100%\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"\">Votre demande a été clôturer. Vous ne pouvez plus effectuer de demande. Veuillez contacter l'administrateur en cas de doute .</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t{% endif %}

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t\t<div class=\"card-header fw-bold text-xs text-uppercase\">
\t\t\t\t\t\tMes informations communiquées
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Contenu de la première carte ici -->


\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tPour votre demande de garant financier soumise le
\t\t\t\t\t\t\t<strong class=\"text-dark\">
\t\t\t\t\t\t\t\t{{app.user.garantFinancier.getDateDemande() |date('d-m-Y')}}</strong>
\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t{{app.user.garantFinancier.getDateDemande() |date('H:i')}}
\t\t\t\t\t\t\tvous nous avez communiqué les informations suivantes :</p>


\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ app.user.garantFinancier.getPays() }}</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ app.user.garantFinancier.getVilleEtude() }}</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not app.user.passport %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Vous n'avez joint aucun passeport. Les pièces jointes sont obligatoires pour le traitement de votre dossier.</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Rendez-vous dans le menu
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_profil') }}\" target=\"_blank\">Mon profil</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tafin d'y joindre le ou les documents demandés.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ app.user.passport) }}\" class=\"btn btn-dark btn-sm\" download=\"{{ app.user.name }}_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Attestation d'acceptation</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.garantFinancier.getPathAdmissionFile() == null %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">Vous n'avez joint aucune attestation d'acceptation. Les pièces jointes sont obligatoires.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ app.user.garantFinancier.pathAdmissionFile) }}\" class=\"btn btn-dark btn-sm\" download=\"{{ app.user.name }}_attestation_acceptation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\tJustificatif de paiement
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.garantFinancier.justificatifPaiement %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ app.user.garantFinancier.justificatifPaiement) }}\" class=\"btn btn-success btn-sm\" download=\"{{ app.user.name }}__paiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tAucun justificatif
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if app.user.garantFinancier.getStatutDemande() == 0 %}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<form action=\"{{ path('app_garant_delete', {'id': app.user.garantFinancier.id}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande de garant financier ?')\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ app.user.garantFinancier.id) }}\">
\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\tAnnuler

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\t\tDocuments relatifs à la demande
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Contenu de la deuxième carte ici -->
\t\t\t\t\t\tJoindre un justificatif de paiement (Western Union , Ria ...)
\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_justificatif_paiement') }}\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"justificatif\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{% if  not  app.user.getGarantFinancier().getJustificatifPaiement() %}\t\t
\t\t\t\t\t\t\t<p class=\" alert alert-danger text-center\">Vous n'avez joint aucun justificatif de paiement pour l'instant . </p>\t
\t\t\t\t\t\t\t{% else %}
<p class=\" alert alert-success text-center\">Justificatif reçu . </p>\t
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark\" style=\"width:100%\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-upload\"></i>
\t\t\t\t\t\t\t\tSoumettre</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{# <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
\t\t\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\t\t\tHistorique de la demande 
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Contenu de la deuxième carte ici -->
\t\t\t\t\t\t
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div> #}


\t\t<br>


\t{% endif %}


</div></div>{% endblock %}
", "administration/garant/index.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/garant/index.html.twig");
    }
}
