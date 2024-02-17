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

        echo "Finance -
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

  ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success-add-garant"], "method", false, false, false, 13))) {
            // line 14
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success-add-garant"], "method", false, false, false, 15)), "html", null, true);
            echo "
                            <div align=\"center\">
                                Votre demande a été soumise  avec succcess !
                            </div>
                        </div>

    ";
        }
        // line 22
        echo "
      ";
        // line 23
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 23))) {
            // line 24
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 25
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 25)), "html", null, true);
            echo "
                            <div align=\"center\">
                                Votre demande n'a pas été soumise ! Veuillez entrer des fichiers valides
                            </div>
                        </div>

    ";
        }
        // line 32
        echo "
   ";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "isVerified", [], "any", false, false, false, 33)) {
            // line 34
            echo "<div class=\"alert alert-danger animate__animated animate__fadeInLeft \">
                            ";
            // line 35
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["error-creation-demande"], "method", false, false, false, 35)), "html", null, true);
            echo "
                            <div align=\"center\">
                                Votre compte n'est pas vérifié ! Veuillez verifier vos mails afin de cliquez sur le lien d'activation. Verfiez aussi les spams
                            </div>
                        </div>
   ";
        }
        // line 41
        echo "
    

    ";
        // line 44
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "garantFinancier", [], "any", false, false, false, 44))) {
            // line 45
            echo "<br>


\t<div class=\"card animate__animated animate__fadeInLeft\">
\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\tGarant financier
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title \">Soumettre une demande</h5>
\t\t\t<p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de garant financier puis de la soumettre par la suite .</p>
\t\t\t<button type=\"button\" class=\"btn btn-dark\" data-bs-toggle=\"modal\" style=\" background-color: rgb(0, 0, 62);\" data-bs-target=\"#exampleModal\">Je demande !</button>
\t\t</div>
\t</div>


\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<form method=\"post\" action=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_new");
            echo "\"  enctype=\"multipart/form-data\">
<p class=\"text-danger\"><strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf .<br> <p class=\"text-dark\">* Lien utile pour convertion :  <a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a> </p></strong></p>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\"  >
\t\t\t\t\t\t\t\t<option selected>Choisissez le pays !</option>
\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

            <div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\"   required>
\t\t\t\t\t\t</div>

 <div class=\"mb-3\">
 <label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
  <input name=\"pathPassport\" type=\"file\" class=\"form-control\" >
  </div>

 <div class=\"mb-3\">
 <label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
  <input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\" >
  </div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\"  placeholder=\"Facultatif ...\"></textarea>
\t\t\t\t\t\t</div>

            <div class=\"form-check mb-3\">
      <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
      <label class=\"form-check-label text-dark\" for=\"invalidCheck\">
        Je certifie l'authenticité de mes documents et des informations que j'ai fournis
      </label>
      <div class=\"invalid-feedback\">
        Vous devez accepter nos conditions.
      </div>
    </div>

\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Soumettre</button>
\t\t\t\t</div>
        </form>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        } else {
            // line 122
            echo "  
  ";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "garantFinancier", [], "any", false, false, false, 123), "statutDemande", [], "any", false, false, false, 123) == 0)) {
                // line 124
                echo "
<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark\"> <strong class=\"text-danger fw-bold text-xs text-uppercase\">  En attente de paiement</strong>
<div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-danger\" style=\"width: 25%\"> </div>
</div></p>
<p> Veuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

<a href=\"";
                // line 136
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_test");
                echo "\"  class=\"btn btn-danger \"><i class=\"fas fa-download\">  </i> Télecharger le devis</a>

  </div>
</div>


    ";
            }
            // line 143
            echo "
  ";
            // line 144
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "user", [], "any", false, false, false, 144), "garantFinancier", [], "any", false, false, false, 144), "statutDemande", [], "any", false, false, false, 144) == 1)) {
                // line 145
                echo "
<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark\"> <strong class=\"text-primary fw-bold text-xs text-uppercase\">En cours de traitement </strong>
<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-primary\" style=\"width: 50%\"></div>
</div></p>
<p> Veuillez patientez s'il vous plait. Nous traitons votre demande .</p>
  </div>
</div>


    ";
            }
            // line 161
            echo "
    ";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "garantFinancier", [], "any", false, false, false, 162), "statutDemande", [], "any", false, false, false, 162) == 2)) {
                // line 163
                echo "
<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\"> <strong class=\"text-success\" >Traitement terminée</strong>
<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-success\" style=\"width: 100%\">Terminée</div>
</div></p>
<p>Félicitations <i class=\"fas fa-thumbs-up text-success\"></i> Le traitement de votre demande est terminée. Les documents sont disponible .</p>
  </div>
</div>

<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    téléchargement
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\"> <strong class=\"\" >Documents :</strong> <a href=\"\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-download\"></i></a>
</p>
<p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant : <strong class=\"text-info fw-bold text-xs text-uppercase\">";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "garantFinancier", [], "any", false, false, false, 184), "pays", [], "any", false, false, false, 184), "html", null, true);
                echo "</strong>.</p>
  </div>
</div>


    ";
            }
            // line 190
            echo "
    ";
            // line 191
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "garantFinancier", [], "any", false, false, false, 191), "statutDemande", [], "any", false, false, false, 191) == 3)) {
                // line 192
                echo "
    <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-warning fw-bold text-xs text-uppercase\" align\"center\"> <strong class=\"text-warning\" >Demande clôturer</strong>
<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-warning\" style=\"width: 100%\"></div>
</div></p>
<p class=\"\">Votre demande a été clôturer. Vous ne pouvez plus effectuer de demande. Veuillez contacter l'administrateur en cas de doute .</p>
  </div>
</div>




    ";
            }
            // line 210
            echo "

<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Mes informations communiqués 
  </div>
  <div class=\"card-body\">

<p> Pour votre demande de garant financier soumise le <strong class=\"text-dark\">  ";
            // line 218
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "garantFinancier", [], "any", false, false, false, 218), "getDateDemande", [], "method", false, false, false, 218), "d-m-Y"), "html", null, true);
            echo "</strong> à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "garantFinancier", [], "any", false, false, false, 218), "getDateDemande", [], "method", false, false, false, 218), "H:i"), "html", null, true);
            echo "  vous nous avez communiqué les informations suivantes :</p>
 


   <div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Pays </label>
\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\"  value=\"";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224), "garantFinancier", [], "any", false, false, false, 224), "getPays", [], "method", false, false, false, 224), "html", null, true);
            echo "\" disabled >
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Ville </label>
\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\"  value=\"";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229), "garantFinancier", [], "any", false, false, false, 229), "getVilleEtude", [], "method", false, false, false, 229), "html", null, true);
            echo "\" disabled >
\t\t\t\t\t\t</div>

 <div class=\"mb-1\">
 <label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase text-dark\">Documents joints  :  </label>
</div>


\t\t\t\t\t\t";
            // line 237
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "user", [], "any", false, false, false, 237), "garantFinancier", [], "any", false, false, false, 237), "pathPassport", [], "any", false, false, false, 237) == null)) {
                // line 238
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t <div class=\"mb-3\">
\t\t\t\t\t\t <p class=\"text-danger\">Vous n'avez joint aucun passeport . Les pieces jointes sont obligatoires</p>
<label for=\"formFile\" class=\"form-label\">Passport</label>
  <input class=\"form-control\" type=\"file\" id=\"formFile\">
  </div>
  ";
            } else {
                // line 245
                echo "<br>





    <strong class=\"fw-bold text-xs text-uppercase\">Passport  </strong>

  <a href=\"";
                // line 253
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "user", [], "any", false, false, false, 253), "garantFinancier", [], "any", false, false, false, 253), "pathPassport", [], "any", false, false, false, 253))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a> <br>
  
    ";
            }
            // line 258
            echo "
";
            // line 259
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "user", [], "any", false, false, false, 259), "garantFinancier", [], "any", false, false, false, 259), "getPathAdmissionFile", [], "any", false, false, false, 259) == null)) {
                // line 260
                echo "<div class=\"mb-3\"><br>
\t\t\t\t\t\t <p class=\"text-danger\"> Vous n'avez joint aucune attestation d'acceptation . Les pieces jointes sont obligatoires</p>
<label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
  <input class=\"form-control\" type=\"file\" id=\"formFile\">
  </div>
 ";
            } else {
                // line 266
                echo "<br>


    <strong class=\"fw-bold text-xs text-uppercase \">Attestation   </strong>

  <a href=\"";
                // line 271
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "garantFinancier", [], "any", false, false, false, 271), "pathAdmissionFile", [], "any", false, false, false, 271))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation_acceptation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a><br>

  

 ";
            }
            // line 278
            echo "
 ";
            // line 279
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "user", [], "any", false, false, false, 279), "garantFinancier", [], "any", false, false, false, 279), "getStatutDemande", [], "method", false, false, false, 279) == 0)) {
                // line 280
                echo " <br>
<form action=\"";
                // line 281
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281), "garantFinancier", [], "any", false, false, false, 281), "id", [], "any", false, false, false, 281)]), "html", null, true);
                echo "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande de garant financier ?')\">
    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 282
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "user", [], "any", false, false, false, 282), "garantFinancier", [], "any", false, false, false, 282), "id", [], "any", false, false, false, 282))), "html", null, true);
                echo "\">
   <div align=\"right\"> <button type=\"submit\"  class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button></div>
</form>

";
            }
            // line 287
            echo "


  </div>
</div>
<br>
 




    ";
        }
        // line 299
        echo "
\t

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
        return array (  486 => 299,  472 => 287,  464 => 282,  460 => 281,  457 => 280,  455 => 279,  452 => 278,  442 => 271,  435 => 266,  427 => 260,  425 => 259,  422 => 258,  414 => 253,  404 => 245,  395 => 238,  393 => 237,  382 => 229,  374 => 224,  363 => 218,  353 => 210,  333 => 192,  331 => 191,  328 => 190,  319 => 184,  296 => 163,  294 => 162,  291 => 161,  273 => 145,  271 => 144,  268 => 143,  258 => 136,  244 => 124,  242 => 123,  239 => 122,  183 => 69,  157 => 45,  155 => 44,  150 => 41,  141 => 35,  138 => 34,  136 => 33,  133 => 32,  123 => 25,  120 => 24,  118 => 23,  115 => 22,  105 => 15,  102 => 14,  100 => 13,  93 => 8,  83 => 7,  71 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block title %}Finance -
\t{{ app.user.name}}
{% endblock %}

{% block body %}
\t<h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
\t\tGarant financier
\t\t<i class=\"fas fa-money-bill\"></i>
\t</h1>

  {% if app.flashes('success-add-garant') is not empty %}
                        <div class=\"alert alert-success\">
                            {{ app.flashes('success-add-garant')|first }}
                            <div align=\"center\">
                                Votre demande a été soumise  avec succcess !
                            </div>
                        </div>

    {% endif %}

      {% if app.flashes('error-creation-demande') is not empty %}
                        <div class=\"alert alert-danger\">
                            {{ app.flashes('error-creation-demande')|first }}
                            <div align=\"center\">
                                Votre demande n'a pas été soumise ! Veuillez entrer des fichiers valides
                            </div>
                        </div>

    {% endif %}

   {% if not app.user.isVerified %}
<div class=\"alert alert-danger animate__animated animate__fadeInLeft \">
                            {{ app.flashes('error-creation-demande')|first }}
                            <div align=\"center\">
                                Votre compte n'est pas vérifié ! Veuillez verifier vos mails afin de cliquez sur le lien d'activation. Verfiez aussi les spams
                            </div>
                        </div>
   {%  endif %}

    

    {% if app.user.garantFinancier is  null %}
<br>


\t<div class=\"card animate__animated animate__fadeInLeft\">
\t\t<div class=\"card-header  fw-bold text-xs text-uppercase\">
\t\t\tGarant financier
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title \">Soumettre une demande</h5>
\t\t\t<p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de garant financier puis de la soumettre par la suite .</p>
\t\t\t<button type=\"button\" class=\"btn btn-dark\" data-bs-toggle=\"modal\" style=\" background-color: rgb(0, 0, 62);\" data-bs-target=\"#exampleModal\">Je demande !</button>
\t\t</div>
\t</div>


\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_new') }}\"  enctype=\"multipart/form-data\">
<p class=\"text-danger\"><strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf .<br> <p class=\"text-dark\">* Lien utile pour convertion :  <a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a> </p></strong></p>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\"  >
\t\t\t\t\t\t\t\t<option selected>Choisissez le pays !</option>
\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

            <div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\"   required>
\t\t\t\t\t\t</div>

 <div class=\"mb-3\">
 <label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
  <input name=\"pathPassport\" type=\"file\" class=\"form-control\" >
  </div>

 <div class=\"mb-3\">
 <label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
  <input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\" >
  </div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\"  placeholder=\"Facultatif ...\"></textarea>
\t\t\t\t\t\t</div>

            <div class=\"form-check mb-3\">
      <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
      <label class=\"form-check-label text-dark\" for=\"invalidCheck\">
        Je certifie l'authenticité de mes documents et des informations que j'ai fournis
      </label>
      <div class=\"invalid-feedback\">
        Vous devez accepter nos conditions.
      </div>
    </div>

\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Soumettre</button>
\t\t\t\t</div>
        </form>
\t\t\t</div>
\t\t</div>
\t</div>
    {% else %}
  
  {% if app.user.garantFinancier.statutDemande == 0 %}

<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark\"> <strong class=\"text-danger fw-bold text-xs text-uppercase\">  En attente de paiement</strong>
<div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-danger\" style=\"width: 25%\"> </div>
</div></p>
<p> Veuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

<a href=\"{{ path('app_facture_test')}}\"  class=\"btn btn-danger \"><i class=\"fas fa-download\">  </i> Télecharger le devis</a>

  </div>
</div>


    {% endif %}

  {% if app.user.garantFinancier.statutDemande == 1 %}

<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark\"> <strong class=\"text-primary fw-bold text-xs text-uppercase\">En cours de traitement </strong>
<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-primary\" style=\"width: 50%\"></div>
</div></p>
<p> Veuillez patientez s'il vous plait. Nous traitons votre demande .</p>
  </div>
</div>


    {% endif %}

    {% if app.user.garantFinancier.statutDemande == 2 %}

<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\"> <strong class=\"text-success\" >Traitement terminée</strong>
<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-success\" style=\"width: 100%\">Terminée</div>
</div></p>
<p>Félicitations <i class=\"fas fa-thumbs-up text-success\"></i> Le traitement de votre demande est terminée. Les documents sont disponible .</p>
  </div>
</div>

<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    téléchargement
  </div>
  <div class=\"card-body\">
    <p class=\"text-dark fw-bold text-xs text-uppercase\" align\"center\"> <strong class=\"\" >Documents :</strong> <a href=\"\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-download\"></i></a>
</p>
<p>Il s'agit d'un document PDF unifié qui contient tous les documents dont vous avez besoin pour votre demande de visa pour le pays suivant : <strong class=\"text-info fw-bold text-xs text-uppercase\">{{ app.user.garantFinancier.pays }}</strong>.</p>
  </div>
</div>


    {% endif %}

    {% if app.user.garantFinancier.statutDemande == 3 %}

    <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Etat de la demande
  </div>
  <div class=\"card-body\">
    <p class=\"text-warning fw-bold text-xs text-uppercase\" align\"center\"> <strong class=\"text-warning\" >Demande clôturer</strong>
<div class=\"progress \" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">
  <div class=\"progress-bar bg-warning\" style=\"width: 100%\"></div>
</div></p>
<p class=\"\">Votre demande a été clôturer. Vous ne pouvez plus effectuer de demande. Veuillez contacter l'administrateur en cas de doute .</p>
  </div>
</div>




    {% endif %}


<div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
<div class=\"card-header  fw-bold text-xs text-uppercase\">
    Mes informations communiqués 
  </div>
  <div class=\"card-body\">

<p> Pour votre demande de garant financier soumise le <strong class=\"text-dark\">  {{app.user.garantFinancier.getDateDemande() |date('d-m-Y')}}</strong> à {{app.user.garantFinancier.getDateDemande() |date('H:i')}}  vous nous avez communiqué les informations suivantes :</p>
 


   <div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Pays </label>
\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\"  value=\"{{ app.user.garantFinancier.getPays()}}\" disabled >
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Ville </label>
\t\t\t\t\t\t\t<Input name=\"ville\" type=\"text\" class=\"form-control\"  value=\"{{ app.user.garantFinancier.getVilleEtude()}}\" disabled >
\t\t\t\t\t\t</div>

 <div class=\"mb-1\">
 <label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase text-dark\">Documents joints  :  </label>
</div>


\t\t\t\t\t\t{% if app.user.garantFinancier.pathPassport == null %}
\t\t\t\t\t\t
\t\t\t\t\t\t <div class=\"mb-3\">
\t\t\t\t\t\t <p class=\"text-danger\">Vous n'avez joint aucun passeport . Les pieces jointes sont obligatoires</p>
<label for=\"formFile\" class=\"form-label\">Passport</label>
  <input class=\"form-control\" type=\"file\" id=\"formFile\">
  </div>
  {% else %}
<br>





    <strong class=\"fw-bold text-xs text-uppercase\">Passport  </strong>

  <a href=\"{{ asset('uploads/passport/' ~ app.user.garantFinancier.pathPassport) }}\" class=\"btn btn-warning btn-sm\" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a> <br>
  
    {% endif %}

{% if app.user.garantFinancier.getPathAdmissionFile == null %}
<div class=\"mb-3\"><br>
\t\t\t\t\t\t <p class=\"text-danger\"> Vous n'avez joint aucune attestation d'acceptation . Les pieces jointes sont obligatoires</p>
<label for=\"formFile\" class=\"form-label\">Attestation d'acceptation</label>
  <input class=\"form-control\" type=\"file\" id=\"formFile\">
  </div>
 {% else %}
<br>


    <strong class=\"fw-bold text-xs text-uppercase \">Attestation   </strong>

  <a href=\"{{ asset('uploads/attestation/' ~ app.user.garantFinancier.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"attestation_acceptation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a><br>

  

 {% endif %}

 {% if app.user.garantFinancier.getStatutDemande() == 0 %}
 <br>
<form action=\"{{ path('app_garant_delete', {'id': app.user.garantFinancier.id}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette demande de garant financier ?')\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ app.user.garantFinancier.id) }}\">
   <div align=\"right\"> <button type=\"submit\"  class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button></div>
</form>

{% endif %}



  </div>
</div>
<br>
 




    {% endif %}

\t

</div></div>{% endblock %}
", "administration/garant/index.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/administration/garant/index.html.twig");
    }
}
