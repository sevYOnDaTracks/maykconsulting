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
\t\t<i class=\"fas fa-money-check\"></i>
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["failed-add-justificatif"], "method", false, false, false, 33))) {
            // line 34
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["failed-add-justificatif"], "method", false, false, false, 35)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tAucun justificatif de paiement reçu !
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 42
        echo "
\t";
        // line 43
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 43))) {
            // line 44
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 45)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre demande n'a pas été soumise ! Veuillez entrer des fichiers valides
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 52
        echo "
\t";
        // line 53
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "isVerified", [], "any", false, false, false, 53)) {
            // line 54
            echo "\t\t<div class=\"alert alert-danger animate__animated animate__fadeInLeft \">
\t\t\t";
            // line 55
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 55)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre compte n'est pas vérifié ! Veuillez verifier vos mails afin de cliquez sur le lien d'activation. Verfiez aussi les spams
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 61
        echo "

\t";
        // line 63
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "garantFinancier", [], "any", false, false, false, 63))) {
            // line 64
            echo "\t\t<br>


\t\t<div class=\"card animate__animated animate__fadeInLeft\">
\t\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\t\tGarant financier
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title \">Soumettre une demande</h5>
\t\t\t\t<p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de garant financier puis de la soumettre par la suite .</p>
\t\t\t\t<div align=\"center\">\t<button type=\"button\" class=\"btn btn-dark\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button> </div>
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
            // line 88
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
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
\t\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 111
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "passport", [], "any", false, false, false, 111)) {
                // line 112
                echo "
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
\t\t\t\t\t\t\t\t\t<input name=\"pathPassport\" type=\"file\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            } else {
                // line 119
                echo "\t\t\t\t\t\t\t\t<div class=\"mb-3 text-dark\">
\t\t\t\t\t\t\t\t\tVotre Passport : Nous l'avons déja
\t\t\t\t\t\t\t\t\t<a target=\"blank\" href=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "getPassport", [], "method", false, false, false, 121))), "html", null, true);
                echo "\" class=\" ml-3\">ici</a>
\t\t\t\t\t\t\t\t\t. Vous pouvez toujours le remplacer dans l'onglet
\t\t\t\t\t\t\t\t\t<a target=\"blank\" href=\"";
                // line 123
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\">Mon Profil
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 127
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
            // line 158
            echo "
\t\t";
            // line 159
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "garantFinancier", [], "any", false, false, false, 159), "statutDemande", [], "any", false, false, false, 159) == 0)) {
                // line 160
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

\t\t\t\t\t<a style=\"text-align: center\" href=\"";
                // line 176
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_test");
                echo "\" class=\"btn btn-dark \">
\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\tTélecharger le devis</a>

\t\t\t\t</div>
\t\t\t</div>


\t\t";
            }
            // line 185
            echo "
\t\t";
            // line 186
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "garantFinancier", [], "any", false, false, false, 186), "statutDemande", [], "any", false, false, false, 186) == 1)) {
                // line 187
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
            // line 211
            echo "
\t\t";
            // line 212
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "garantFinancier", [], "any", false, false, false, 212), "statutDemande", [], "any", false, false, false, 212) == 2)) {
                // line 213
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
                // line 238
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "user", [], "any", false, false, false, 238), "getGarantFinancier", [], "any", false, false, false, 238), "getGarantFile", [], "method", false, false, false, 238))), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "user", [], "any", false, false, false, 238), "getName", [], "method", false, false, false, 238), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant :
\t\t\t\t\t\t<strong class=\"text-info fw-bold text-xs text-uppercase\">";
                // line 243
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [], "any", false, false, false, 243), "garantFinancier", [], "any", false, false, false, 243), "pays", [], "any", false, false, false, 243), "html", null, true);
                echo "</strong>.</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t";
            }
            // line 249
            echo "
\t\t";
            // line 250
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 250, $this->source); })()), "user", [], "any", false, false, false, 250), "garantFinancier", [], "any", false, false, false, 250), "statutDemande", [], "any", false, false, false, 250) == 3)) {
                // line 251
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
            // line 269
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
            // line 284
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284), "garantFinancier", [], "any", false, false, false, 284), "getDateDemande", [], "method", false, false, false, 284), "d-m-Y"), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t";
            // line 286
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "user", [], "any", false, false, false, 286), "garantFinancier", [], "any", false, false, false, 286), "getDateDemande", [], "method", false, false, false, 286), "H:i"), "html", null, true);
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
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "user", [], "any", false, false, false, 297), "garantFinancier", [], "any", false, false, false, 297), "getPays", [], "method", false, false, false, 297), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "garantFinancier", [], "any", false, false, false, 301), "getVilleEtude", [], "method", false, false, false, 301), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 306
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "passport", [], "any", false, false, false, 306)) {
                // line 307
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Vous devez joindre le justificatif de paiement pour le traitement de votre dossier ici !.</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Rendez-vous dans le menu
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 311
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\" target=\"_blank\">Mon profil</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tafin d'y joindre le ou les documents demandés.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 314
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "user", [], "any", false, false, false, 314), "passport", [], "any", false, false, false, 314))), "html", null, true);
                echo "\" class=\"btn btn-dark btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "user", [], "any", false, false, false, 314), "name", [], "any", false, false, false, 314), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 319
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">Attestation d'acceptation</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 324
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 324, $this->source); })()), "user", [], "any", false, false, false, 324), "garantFinancier", [], "any", false, false, false, 324), "getPathAdmissionFile", [], "method", false, false, false, 324) == null)) {
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">Vous n'avez joint aucune attestation d'acceptation. Les pièces jointes sont obligatoires.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 329
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "user", [], "any", false, false, false, 329), "garantFinancier", [], "any", false, false, false, 329), "pathAdmissionFile", [], "any", false, false, false, 329))), "html", null, true);
                echo "\" class=\"btn btn-dark btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "user", [], "any", false, false, false, 329), "name", [], "any", false, false, false, 329), "html", null, true);
                echo "_attestation_acceptation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 334
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\tJustificatif de paiement
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 341
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "user", [], "any", false, false, false, 341), "garantFinancier", [], "any", false, false, false, 341), "justificatifPaiement", [], "any", false, false, false, 341)) {
                // line 342
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342), "garantFinancier", [], "any", false, false, false, 342), "justificatifPaiement", [], "any", false, false, false, 342))), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342), "name", [], "any", false, false, false, 342), "html", null, true);
                echo "__paiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 347
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAucun justificatif
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 350
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 362
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 362, $this->source); })()), "user", [], "any", false, false, false, 362), "garantFinancier", [], "any", false, false, false, 362), "getStatutDemande", [], "method", false, false, false, 362) == 0)) {
                // line 363
                echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<form action=\"";
                // line 364
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 364, $this->source); })()), "user", [], "any", false, false, false, 364), "garantFinancier", [], "any", false, false, false, 364), "id", [], "any", false, false, false, 364)]), "html", null, true);
                echo "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande de garant financier ?')\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 365
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 365, $this->source); })()), "user", [], "any", false, false, false, 365), "garantFinancier", [], "any", false, false, false, 365), "id", [], "any", false, false, false, 365))), "html", null, true);
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
            // line 375
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
            // line 388
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_justificatif_paiement");
            echo "\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"justificatif\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 391
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "user", [], "any", false, false, false, 391), "getGarantFinancier", [], "method", false, false, false, 391), "getJustificatifPaiement", [], "method", false, false, false, 391)) {
                echo "\t\t
\t\t\t\t\t\t\t<p class=\" alert alert-danger text-center\">Vous devez joindre le justificatif de paiement ici ! (WU , Ria ...)  ou par mail : <u>maykconsulting@gmail.com</u> </p>
\t\t\t\t\t\t\t";
            } else {
                // line 394
                echo "<p class=\" alert alert-success text-center\">Nous avons reçu votre justificatif de paiement . </p>
\t\t\t\t\t\t\t";
            }
            // line 396
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
            // line 417
            echo "

\t\t<br>


\t";
        }
        // line 423
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
        return array (  662 => 423,  654 => 417,  642 => 396,  638 => 394,  632 => 391,  626 => 388,  611 => 375,  598 => 365,  594 => 364,  591 => 363,  589 => 362,  575 => 350,  570 => 347,  559 => 342,  557 => 341,  548 => 334,  537 => 329,  531 => 325,  529 => 324,  522 => 319,  511 => 314,  505 => 311,  499 => 307,  497 => 306,  489 => 301,  482 => 297,  468 => 286,  463 => 284,  446 => 269,  426 => 251,  424 => 250,  421 => 249,  412 => 243,  402 => 238,  375 => 213,  373 => 212,  370 => 211,  344 => 187,  342 => 186,  339 => 185,  327 => 176,  309 => 160,  307 => 159,  304 => 158,  271 => 127,  264 => 123,  259 => 121,  255 => 119,  246 => 112,  244 => 111,  218 => 88,  192 => 64,  190 => 63,  186 => 61,  177 => 55,  174 => 54,  172 => 53,  169 => 52,  159 => 45,  156 => 44,  154 => 43,  151 => 42,  141 => 35,  138 => 34,  136 => 33,  133 => 32,  123 => 25,  120 => 24,  118 => 23,  115 => 22,  105 => 15,  102 => 14,  100 => 13,  93 => 8,  83 => 7,  71 => 4,  59 => 3,  36 => 1,);
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
\t\t<i class=\"fas fa-money-check\"></i>
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

\t{% if app.flashes('failed-add-justificatif') is not empty %}
\t\t<div class=\"alert alert-danger\">
\t\t\t{{ app.flashes('failed-add-justificatif')|first }}
\t\t\t<div align=\"center\">
\t\t\t\tAucun justificatif de paiement reçu !
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
\t\t\t\t<div align=\"center\">\t<button type=\"button\" class=\"btn btn-dark\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button> </div>
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

\t\t\t\t\t<a style=\"text-align: center\" href=\"{{ path('app_facture_test')}}\" class=\"btn btn-dark \">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Vous devez joindre le justificatif de paiement pour le traitement de votre dossier ici !.</strong>
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
\t\t\t\t\t\t\t<p class=\" alert alert-danger text-center\">Vous devez joindre le justificatif de paiement ici ! (WU , Ria ...)  ou par mail : <u>maykconsulting@gmail.com</u> </p>
\t\t\t\t\t\t\t{% else %}
<p class=\" alert alert-success text-center\">Nous avons reçu votre justificatif de paiement . </p>
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
