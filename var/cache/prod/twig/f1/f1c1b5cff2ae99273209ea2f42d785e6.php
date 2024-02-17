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

/* administration/garant/management.html.twig */
class __TwigTemplate_99054cc8836221872687f8aa9835cc5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/garant/management.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t<div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\" mb-0 text-uppercase text-dark fw-bold animate__animated animate__fadeInLeft\">Mes dossiers : Garant financier
\t\t</h3>
\t\t<a class=\"btn btn-primary btn-sm d-none d-sm-inline-block animate__animated animate__fadeInRight\" role=\"button\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_data");
        echo "\">
\t\t\t<i class=\"fas fa-download fa-sm text-white-50\"></i>&nbsp;Generer un rapport</a>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInLeft\">
\t\t\t<div class=\"card shadow border-start-primary py-2\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"row align-items-center no-gutters\">
\t\t\t\t\t\t<div class=\"col me-2\">
\t\t\t\t\t\t\t<div class=\"text-uppercase text-warning fw-bold text-xs mb-1\">
\t\t\t\t\t\t\t\t<span>En attentes de paiement</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, ($context["enAttenteDePaiement"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<i class=\"fas fa-hourglass-half fa-2x text-gray-300\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInRight\">
\t\t\t<div class=\"card shadow border-start-success py-2\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"row align-items-center no-gutters\">
\t\t\t\t\t\t<div class=\"col me-2\">
\t\t\t\t\t\t\t<div class=\"text-uppercase text-primary fw-bold text-xs mb-1\">
\t\t\t\t\t\t\t\t<span>En cours</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span> ";
        // line 42
        echo twig_escape_filter($this->env, ($context["nombreEncours"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<i class=\"fas fa-sync fa-2x text-gray-300\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInLeft\">
\t\t\t<div class=\"card shadow border-start-warning py-2\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"row align-items-center no-gutters\">
\t\t\t\t\t\t<div class=\"col me-2\">
\t\t\t\t\t\t\t<div class=\"text-uppercase text-success fw-bold text-xs mb-1\">
\t\t\t\t\t\t\t\t<span>Validées</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span>";
        // line 61
        echo twig_escape_filter($this->env, ($context["nombreTerminee"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up fa-2x text-gray-300\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInRight\">
\t\t\t<div class=\"card shadow border-start-success py-2\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"row align-items-center no-gutters\">
\t\t\t\t\t\t<div class=\"col me-2\">
\t\t\t\t\t\t\t<div class=\"text-uppercase text-danger fw-bold text-xs mb-1\">
\t\t\t\t\t\t\t\t<span>Annulées</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span>";
        // line 80
        echo twig_escape_filter($this->env, ($context["nombreCloturer"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt fa-2x text-gray-300\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<br>
\t";
        // line 93
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-mail-send"], "method", false, false, false, 93))) {
            // line 94
            echo "\t\t<div class=\"alert alert-success animate__animated animate__fadeInLeft\">
\t\t\t";
            // line 95
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-mail-send"], "method", false, false, false, 95)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre mail a été envoyé avec succes !
\t\t\t</div>
\t\t</div>
\t\t<br>

\t";
        }
        // line 103
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-edit"], "method", false, false, false, 103))) {
            // line 104
            echo "\t\t<div class=\"alert alert-success animate__animated animate__fadeInTop\">
\t\t\t";
            // line 105
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-edit"], "method", false, false, false, 105)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tModification effectué avec succes !
\t\t\t</div>
\t\t</div>
\t\t<br>

\t";
        }
        // line 113
        echo "
\t<div class=\"card shadow \">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-warning m-0  fw-bold text-xs text-uppercase \">Liste des demandes en attente de paiement
\t\t\t</p>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["garantsEnAttentes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 134
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 136), "getName", [], "method", false, false, false, 136), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 137), "getEmail", [], "method", false, false, false, 137), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 138), "getPhone", [], "method", false, false, false, 138), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 139
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 139), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 141
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 141), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 145), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 149), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 154), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 162
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 165), "getEmail", [], "method", false, false, false, 165), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 188), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 193), "getName", [], "method", false, false, false, 193), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 194), "getLastName", [], "method", false, false, false, 194), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 199)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 204), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 204), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 213), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 219), "html", null, true);
            echo " \" selected>En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 229
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 229)) {
                // line 230
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 234))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 239
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 245
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 246
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 246)) {
                // line 247
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 250
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 250))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 257
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 263
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 266), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['garantUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t</div>

\t<br>

\t<div class=\"card shadow \">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-primary m-0 fw-bold text-xs text-uppercase  \">Liste des demandes en cours de traitement
\t\t\t</p>
\t\t</div>
\t\t<div class=\"card-body\">
        <div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["garantEnCours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 315
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 316), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 317), "getName", [], "method", false, false, false, 317), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 318), "getEmail", [], "method", false, false, false, 318), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 319), "getPhone", [], "method", false, false, false, 319), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 320
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 320), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 322
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 322), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 326), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 330), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 335), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 343
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 346), "getEmail", [], "method", false, false, false, 346), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 369), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 374
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 374), "getName", [], "method", false, false, false, 374), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 375
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 375), "getLastName", [], "method", false, false, false, 375), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 380
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 380)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 385), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 385), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 394), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 400
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 400), "html", null, true);
            echo " \" selected>En cours de traitement</option>
                                                                        <option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 411
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 411)) {
                // line 412
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 416
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 416))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 421
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 427
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 428
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 428)) {
                // line 429
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 432
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 432))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 439
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 445
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 448
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 448), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['garantUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
        </div>

\t</div>


\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-success m-0 fw-bold text-xs text-uppercase \">Liste des demandes terminés
\t\t\t</p>
\t\t</div>
\t\t<div class=\"card-body\">
        
        <div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["garantTermine"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 499
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 500
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 500), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 501
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 501), "getName", [], "method", false, false, false, 501), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 502
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 502), "getEmail", [], "method", false, false, false, 502), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 503
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 503), "getPhone", [], "method", false, false, false, 503), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 504
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 504), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 506
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 506), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 510), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 514
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 514), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 519
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 519), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 527
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 530
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 530), "getEmail", [], "method", false, false, false, 530), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 553
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 553), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 558
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 558), "getName", [], "method", false, false, false, 558), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 559
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 559), "getLastName", [], "method", false, false, false, 559), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 564
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 564)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 569
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 569), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 569), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 578
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 578), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 584
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 584), "html", null, true);
            echo " \" selected>Traitement terminé</option>
                                                                        <option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 595
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 595)) {
                // line 596
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 600
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 600))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 605
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 611
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 612
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 612)) {
                // line 613
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 616
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 616))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 623
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 629
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 632
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 632), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['garantUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 652
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
        </div>

\t</div>

\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-danger m-0 fw-bold text-xs text-uppercase \">Liste des demandes annulées (clôturer)
\t\t\t</p>
\t\t</div>
\t\t<div class=\"card-body\">
        <div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
                    ";
        // line 680
        if ((twig_length_filter($this->env, ($context["garantsCloturer"] ?? null)) > 0)) {
            // line 681
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["garantsCloturer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
                // line 682
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 683
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 683), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 684
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 684), "getName", [], "method", false, false, false, 684), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 685
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 685), "getEmail", [], "method", false, false, false, 685), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 686
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 686), "getPhone", [], "method", false, false, false, 686), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 687
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 687), "d-m-Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
                // line 689
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 689), "H:i:"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
                // line 693
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 693), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
                // line 697
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 697), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
                // line 702
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 702), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 710
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
                // line 713
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 713), "getEmail", [], "method", false, false, false, 713), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
                // line 736
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 736), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 741
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 741), "getName", [], "method", false, false, false, 741), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 742
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 742), "getLastName", [], "method", false, false, false, 742), "html", null, true);
                echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 747
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 747)]), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 752
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 752), "html", null, true);
                echo " \" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 752), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
                // line 761
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 761), "html", null, true);
                echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 767
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 767), "html", null, true);
                echo " \" selected>Demande clôturer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 777
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 777)) {
                    // line 778
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 782
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 782))), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 787
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 793
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 794
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 794)) {
                    // line 795
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 798
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 798))), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 805
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 811
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
                // line 814
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 814), "html", null, true);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['garantUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 834
            echo "
                        ";
        } else {
            // line 836
            echo "
                        

                        ";
        }
        // line 840
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
                
\t\t\t</div>
        
        
        </div>

\t</div>

<br><br>
</div></div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/garant/management.html.twig";
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
        return array (  1277 => 840,  1271 => 836,  1267 => 834,  1241 => 814,  1236 => 811,  1228 => 805,  1218 => 798,  1213 => 795,  1211 => 794,  1208 => 793,  1200 => 787,  1192 => 782,  1186 => 778,  1184 => 777,  1171 => 767,  1162 => 761,  1148 => 752,  1140 => 747,  1132 => 742,  1128 => 741,  1120 => 736,  1094 => 713,  1088 => 710,  1077 => 702,  1069 => 697,  1062 => 693,  1055 => 689,  1050 => 687,  1046 => 686,  1042 => 685,  1038 => 684,  1034 => 683,  1031 => 682,  1026 => 681,  1024 => 680,  994 => 652,  968 => 632,  963 => 629,  955 => 623,  945 => 616,  940 => 613,  938 => 612,  935 => 611,  927 => 605,  919 => 600,  913 => 596,  911 => 595,  897 => 584,  888 => 578,  874 => 569,  866 => 564,  858 => 559,  854 => 558,  846 => 553,  820 => 530,  814 => 527,  803 => 519,  795 => 514,  788 => 510,  781 => 506,  776 => 504,  772 => 503,  768 => 502,  764 => 501,  760 => 500,  757 => 499,  753 => 498,  721 => 468,  695 => 448,  690 => 445,  682 => 439,  672 => 432,  667 => 429,  665 => 428,  662 => 427,  654 => 421,  646 => 416,  640 => 412,  638 => 411,  624 => 400,  615 => 394,  601 => 385,  593 => 380,  585 => 375,  581 => 374,  573 => 369,  547 => 346,  541 => 343,  530 => 335,  522 => 330,  515 => 326,  508 => 322,  503 => 320,  499 => 319,  495 => 318,  491 => 317,  487 => 316,  484 => 315,  480 => 314,  450 => 286,  424 => 266,  419 => 263,  411 => 257,  401 => 250,  396 => 247,  394 => 246,  391 => 245,  383 => 239,  375 => 234,  369 => 230,  367 => 229,  354 => 219,  345 => 213,  331 => 204,  323 => 199,  315 => 194,  311 => 193,  303 => 188,  277 => 165,  271 => 162,  260 => 154,  252 => 149,  245 => 145,  238 => 141,  233 => 139,  229 => 138,  225 => 137,  221 => 136,  217 => 135,  214 => 134,  210 => 133,  188 => 113,  177 => 105,  174 => 104,  171 => 103,  160 => 95,  157 => 94,  155 => 93,  139 => 80,  117 => 61,  95 => 42,  73 => 23,  55 => 8,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/garant/management.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/administration/garant/management.html.twig");
    }
}
