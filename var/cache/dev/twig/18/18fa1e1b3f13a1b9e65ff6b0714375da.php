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
class __TwigTemplate_05e208f15c3544d45a9b816ebd4da3db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/garant/management.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/garant/management.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/garant/management.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["enAttenteDePaiement"]) || array_key_exists("enAttenteDePaiement", $context) ? $context["enAttenteDePaiement"] : (function () { throw new RuntimeError('Variable "enAttenteDePaiement" does not exist.', 23, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["nombreEncours"]) || array_key_exists("nombreEncours", $context) ? $context["nombreEncours"] : (function () { throw new RuntimeError('Variable "nombreEncours" does not exist.', 42, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["nombreTerminee"]) || array_key_exists("nombreTerminee", $context) ? $context["nombreTerminee"] : (function () { throw new RuntimeError('Variable "nombreTerminee" does not exist.', 61, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["nombreCloturer"]) || array_key_exists("nombreCloturer", $context) ? $context["nombreCloturer"] : (function () { throw new RuntimeError('Variable "nombreCloturer" does not exist.', 80, $this->source); })()), "html", null, true);
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 93))) {
            // line 94
            echo "\t\t<div class=\"alert alert-success animate__animated animate__fadeInLeft\">
\t\t\t";
            // line 95
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 95)), "html", null, true);
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 103))) {
            // line 104
            echo "\t\t<div class=\"alert alert-success animate__animated animate__fadeInTop\">
\t\t\t";
            // line 105
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 105)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["garantsEnAttentes"]) || array_key_exists("garantsEnAttentes", $context) ? $context["garantsEnAttentes"] : (function () { throw new RuntimeError('Variable "garantsEnAttentes" does not exist.', 133, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["garantEnCours"]) || array_key_exists("garantEnCours", $context) ? $context["garantEnCours"] : (function () { throw new RuntimeError('Variable "garantEnCours" does not exist.', 314, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["garantTermine"]) || array_key_exists("garantTermine", $context) ? $context["garantTermine"] : (function () { throw new RuntimeError('Variable "garantTermine" does not exist.', 498, $this->source); })()));
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
        if ((twig_length_filter($this->env, (isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 680, $this->source); })())) > 0)) {
            // line 681
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 681, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1295 => 840,  1289 => 836,  1285 => 834,  1259 => 814,  1254 => 811,  1246 => 805,  1236 => 798,  1231 => 795,  1229 => 794,  1226 => 793,  1218 => 787,  1210 => 782,  1204 => 778,  1202 => 777,  1189 => 767,  1180 => 761,  1166 => 752,  1158 => 747,  1150 => 742,  1146 => 741,  1138 => 736,  1112 => 713,  1106 => 710,  1095 => 702,  1087 => 697,  1080 => 693,  1073 => 689,  1068 => 687,  1064 => 686,  1060 => 685,  1056 => 684,  1052 => 683,  1049 => 682,  1044 => 681,  1042 => 680,  1012 => 652,  986 => 632,  981 => 629,  973 => 623,  963 => 616,  958 => 613,  956 => 612,  953 => 611,  945 => 605,  937 => 600,  931 => 596,  929 => 595,  915 => 584,  906 => 578,  892 => 569,  884 => 564,  876 => 559,  872 => 558,  864 => 553,  838 => 530,  832 => 527,  821 => 519,  813 => 514,  806 => 510,  799 => 506,  794 => 504,  790 => 503,  786 => 502,  782 => 501,  778 => 500,  775 => 499,  771 => 498,  739 => 468,  713 => 448,  708 => 445,  700 => 439,  690 => 432,  685 => 429,  683 => 428,  680 => 427,  672 => 421,  664 => 416,  658 => 412,  656 => 411,  642 => 400,  633 => 394,  619 => 385,  611 => 380,  603 => 375,  599 => 374,  591 => 369,  565 => 346,  559 => 343,  548 => 335,  540 => 330,  533 => 326,  526 => 322,  521 => 320,  517 => 319,  513 => 318,  509 => 317,  505 => 316,  502 => 315,  498 => 314,  468 => 286,  442 => 266,  437 => 263,  429 => 257,  419 => 250,  414 => 247,  412 => 246,  409 => 245,  401 => 239,  393 => 234,  387 => 230,  385 => 229,  372 => 219,  363 => 213,  349 => 204,  341 => 199,  333 => 194,  329 => 193,  321 => 188,  295 => 165,  289 => 162,  278 => 154,  270 => 149,  263 => 145,  256 => 141,  251 => 139,  247 => 138,  243 => 137,  239 => 136,  235 => 135,  232 => 134,  228 => 133,  206 => 113,  195 => 105,  192 => 104,  189 => 103,  178 => 95,  175 => 94,  173 => 93,  157 => 80,  135 => 61,  113 => 42,  91 => 23,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}


{% block body %}
\t<div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\" mb-0 text-uppercase text-dark fw-bold animate__animated animate__fadeInLeft\">Mes dossiers : Garant financier
\t\t</h3>
\t\t<a class=\"btn btn-primary btn-sm d-none d-sm-inline-block animate__animated animate__fadeInRight\" role=\"button\" href=\"{{ path('export_data') }}\">
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
\t\t\t\t\t\t\t\t\t{{ enAttenteDePaiement }}</span>
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
\t\t\t\t\t\t\t\t<span> {{ nombreEncours }}</span>
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
\t\t\t\t\t\t\t\t<span>{{ nombreTerminee}}</span>
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
\t\t\t\t\t\t\t\t<span>{{nombreCloturer}}</span>
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
\t{% if app.flashes('success-mail-send') is not empty %}
\t\t<div class=\"alert alert-success animate__animated animate__fadeInLeft\">
\t\t\t{{ app.flashes('success-mail-send')|first }}
\t\t\t<div align=\"center\">
\t\t\t\tVotre mail a été envoyé avec succes !
\t\t\t</div>
\t\t</div>
\t\t<br>

\t{% endif %}
    {% if app.flashes('success-edit') is not empty %}
\t\t<div class=\"alert alert-success animate__animated animate__fadeInTop\">
\t\t\t{{ app.flashes('success-edit')|first }}
\t\t\t<div align=\"center\">
\t\t\t\tModification effectué avec succes !
\t\t\t</div>
\t\t</div>
\t\t<br>

\t{% endif %}

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
\t\t\t\t\t\t{% for garantUser in garantsEnAttentes %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ garantUser.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getName() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getEmail() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i:')}}
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ garantUser.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ garantUser.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa{{ garantUser.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_envoyez_mail')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\">
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

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{ garantUser.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{garantUser.getUser().getLastName() }}<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_update', {'id': garantUser.id}) }}\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getPays() }} \" selected>{{garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"{{garantUser.getVilleEtude() }} \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getStatutDemande() }} \" selected>En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathPassport %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.pathPassport) }}\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathAdmissionFile %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>{{ garantUser.getInformations()}}</textarea>
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
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
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
\t\t\t\t\t\t{% for garantUser in garantEnCours %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ garantUser.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getName() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getEmail() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i:')}}
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ garantUser.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ garantUser.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa{{ garantUser.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_envoyez_mail')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\">
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

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{ garantUser.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{garantUser.getUser().getLastName() }}<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_update', {'id': garantUser.id}) }}\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getPays() }} \" selected>{{garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"{{garantUser.getVilleEtude() }} \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getStatutDemande() }} \" selected>En cours de traitement</option>
                                                                        <option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathPassport %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.pathPassport) }}\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathAdmissionFile %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>{{ garantUser.getInformations()}}</textarea>
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
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
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
\t\t\t\t\t\t{% for garantUser in garantTermine %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ garantUser.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getName() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getEmail() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i:')}}
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ garantUser.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ garantUser.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa{{ garantUser.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_envoyez_mail')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\">
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

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{ garantUser.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{garantUser.getUser().getLastName() }}<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_update', {'id': garantUser.id}) }}\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getPays() }} \" selected>{{garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"{{garantUser.getVilleEtude() }} \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getStatutDemande() }} \" selected>Traitement terminé</option>
                                                                        <option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathPassport %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.pathPassport) }}\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathAdmissionFile %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>{{ garantUser.getInformations()}}</textarea>
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
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
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
                    {% if garantsCloturer|length > 0 %}
\t\t\t\t\t\t{% for garantUser in garantsCloturer %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ garantUser.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getName() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getEmail() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i:')}}
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ garantUser.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ garantUser.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa{{ garantUser.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_envoyez_mail')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\">
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

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{ garantUser.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{garantUser.getUser().getLastName() }}<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_update', {'id': garantUser.id}) }}\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getPays() }} \" selected>{{garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"{{garantUser.getVilleEtude() }} \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getStatutDemande() }} \" selected>Demande clôturer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathPassport %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.pathPassport) }}\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathAdmissionFile %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>{{ garantUser.getInformations()}}</textarea>
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
\t\t\t\t\t\t{% endfor %}

                        {% else %}

                        

                        {% endif %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
                
\t\t\t</div>
        
        
        </div>

\t</div>

<br><br>
</div></div>{% endblock %}
", "administration/garant/management.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/administration/garant/management.html.twig");
    }
}
