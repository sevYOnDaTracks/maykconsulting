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
\t\t<a class=\"btn btn-dark btn-sm d-none d-sm-inline-block animate__animated animate__fadeInRight\" role=\"button\" href=\"";
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
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["nombreEncours"]) || array_key_exists("nombreEncours", $context) ? $context["nombreEncours"] : (function () { throw new RuntimeError('Variable "nombreEncours" does not exist.', 43, $this->source); })()), "html", null, true);
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
        // line 62
        echo twig_escape_filter($this->env, (isset($context["nombreTerminee"]) || array_key_exists("nombreTerminee", $context) ? $context["nombreTerminee"] : (function () { throw new RuntimeError('Variable "nombreTerminee" does not exist.', 62, $this->source); })()), "html", null, true);
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
        // line 81
        echo twig_escape_filter($this->env, (isset($context["nombreCloturer"]) || array_key_exists("nombreCloturer", $context) ? $context["nombreCloturer"] : (function () { throw new RuntimeError('Variable "nombreCloturer" does not exist.', 81, $this->source); })()), "html", null, true);
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
        // line 94
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 94))) {
            // line 95
            echo "\t\t<div class=\"alert alert-success animate__animated animate__fadeInLeft\">
\t\t\t";
            // line 96
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 96)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tVotre mail a été envoyé avec succes !
\t\t\t</div>
\t\t</div>
\t\t<br>

\t";
        }
        // line 104
        echo "\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 104))) {
            // line 105
            echo "\t\t<div class=\"alert alert-success animate__animated animate__fadeInTop\">
\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 106)), "html", null, true);
            echo "
\t\t\t<div align=\"center\">
\t\t\t\tModification effectué avec succes !
\t\t\t</div>
\t\t</div>
\t\t<br>

\t";
        }
        // line 114
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
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garantsEnAttentes"]) || array_key_exists("garantsEnAttentes", $context) ? $context["garantsEnAttentes"] : (function () { throw new RuntimeError('Variable "garantsEnAttentes" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 135
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 137), "getName", [], "method", false, false, false, 137), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 138), "getEmail", [], "method", false, false, false, 138), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 139), "getPhone", [], "method", false, false, false, 139), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 140
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 140), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 142
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 142), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 146), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 150), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 155), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 163
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 166), "getEmail", [], "method", false, false, false, 166), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
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
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 189), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 194), "getName", [], "method", false, false, false, 194), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 195), "getLastName", [], "method", false, false, false, 195), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 205), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 205), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 214), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 220), "html", null, true);
            echo " \" selected>En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 230
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 230)) {
                // line 231
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 235))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 240
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 246
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 247
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 247)) {
                // line 248
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 251
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 251))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 258
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 264
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Dernière modification : <span class=\"text-danger\">";
            // line 266
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 266), "d-m-Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 266), "H:m:s"), "html", null, true);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 270), "html", null, true);
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
        // line 290
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
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garantEnCours"]) || array_key_exists("garantEnCours", $context) ? $context["garantEnCours"] : (function () { throw new RuntimeError('Variable "garantEnCours" does not exist.', 318, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 319
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 320), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 321
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 321), "getName", [], "method", false, false, false, 321), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 322), "getEmail", [], "method", false, false, false, 322), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 323), "getPhone", [], "method", false, false, false, 323), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 324
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 324), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 326
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 326), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 330), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 334), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 339), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 347
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 350), "getEmail", [], "method", false, false, false, 350), "html", null, true);
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
            // line 373
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 373), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 378
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 378), "getName", [], "method", false, false, false, 378), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 379), "getLastName", [], "method", false, false, false, 379), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 384
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 384)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 389
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 389), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 389), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 398), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 404
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 404), "html", null, true);
            echo " \" selected>En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 415
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 415)) {
                // line 416
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 420
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 420))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 425
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 431
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 432
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 432)) {
                // line 433
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 436
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 436))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 443
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 449
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 452
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 452), "html", null, true);
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
        // line 472
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t</div>


\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-success m-0 fw-bold text-xs text-uppercase \">Liste des demandes terminés
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
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garantTermine"]) || array_key_exists("garantTermine", $context) ? $context["garantTermine"] : (function () { throw new RuntimeError('Variable "garantTermine" does not exist.', 502, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 503
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 504
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 504), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 505
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 505), "getName", [], "method", false, false, false, 505), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 506
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 506), "getEmail", [], "method", false, false, false, 506), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 507), "getPhone", [], "method", false, false, false, 507), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 508
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 508), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 510
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 510), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 514
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 514), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 518
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 518), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 523
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 523), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 531
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 534
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 534), "getEmail", [], "method", false, false, false, 534), "html", null, true);
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
            // line 557
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 557), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 562
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 562), "getName", [], "method", false, false, false, 562), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 563
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 563), "getLastName", [], "method", false, false, false, 563), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 568
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 568)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 573
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 573), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 573), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 582
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 582), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 588), "html", null, true);
            echo " \" selected>Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 599
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 599)) {
                // line 600
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 604
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 604))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 609
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 615
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 616
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 616)) {
                // line 617
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 620
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 620))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 627
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 633
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 636
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 636), "html", null, true);
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
        // line 656
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t</div>

\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-danger m-0 fw-bold text-xs text-uppercase \">Liste des demandes annulées (clôturer)
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
        // line 684
        if ((twig_length_filter($this->env, (isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 684, $this->source); })())) > 0)) {
            // line 685
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 685, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
                // line 686
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 687
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 687), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 688
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 688), "getName", [], "method", false, false, false, 688), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 689
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 689), "getEmail", [], "method", false, false, false, 689), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 690
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 690), "getPhone", [], "method", false, false, false, 690), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 691
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 691), "d-m-Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t";
                // line 693
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 693), "H:i:"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
                // line 697
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 697), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
                // line 701
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 701), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
                // line 706
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 706), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 714
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
                // line 717
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 717), "getEmail", [], "method", false, false, false, 717), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
                // line 740
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 740), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 745
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 745), "getName", [], "method", false, false, false, 745), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 746
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 746), "getLastName", [], "method", false, false, false, 746), "html", null, true);
                echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 751
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 751)]), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 756
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 756), "html", null, true);
                echo " \" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 756), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
                // line 765
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 765), "html", null, true);
                echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 771
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 771), "html", null, true);
                echo " \" selected>Demande clôturer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 781
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathPassport", [], "any", false, false, false, 781)) {
                    // line 782
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 786
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathPassport", [], "any", false, false, false, 786))), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 791
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 797
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 798
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 798)) {
                    // line 799
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 802
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 802))), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 809
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 815
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
                // line 818
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 818), "html", null, true);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['garantUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 838
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 840
            echo "

\t\t\t\t\t\t";
        }
        // line 843
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>


\t\t</div>

\t</div>

\t<br><br>
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
        return array (  1303 => 843,  1298 => 840,  1294 => 838,  1268 => 818,  1263 => 815,  1255 => 809,  1245 => 802,  1240 => 799,  1238 => 798,  1235 => 797,  1227 => 791,  1219 => 786,  1213 => 782,  1211 => 781,  1198 => 771,  1189 => 765,  1175 => 756,  1167 => 751,  1159 => 746,  1155 => 745,  1147 => 740,  1121 => 717,  1115 => 714,  1104 => 706,  1096 => 701,  1089 => 697,  1082 => 693,  1077 => 691,  1073 => 690,  1069 => 689,  1065 => 688,  1061 => 687,  1058 => 686,  1053 => 685,  1051 => 684,  1021 => 656,  995 => 636,  990 => 633,  982 => 627,  972 => 620,  967 => 617,  965 => 616,  962 => 615,  954 => 609,  946 => 604,  940 => 600,  938 => 599,  924 => 588,  915 => 582,  901 => 573,  893 => 568,  885 => 563,  881 => 562,  873 => 557,  847 => 534,  841 => 531,  830 => 523,  822 => 518,  815 => 514,  808 => 510,  803 => 508,  799 => 507,  795 => 506,  791 => 505,  787 => 504,  784 => 503,  780 => 502,  748 => 472,  722 => 452,  717 => 449,  709 => 443,  699 => 436,  694 => 433,  692 => 432,  689 => 431,  681 => 425,  673 => 420,  667 => 416,  665 => 415,  651 => 404,  642 => 398,  628 => 389,  620 => 384,  612 => 379,  608 => 378,  600 => 373,  574 => 350,  568 => 347,  557 => 339,  549 => 334,  542 => 330,  535 => 326,  530 => 324,  526 => 323,  522 => 322,  518 => 321,  514 => 320,  511 => 319,  507 => 318,  477 => 290,  451 => 270,  442 => 266,  438 => 264,  430 => 258,  420 => 251,  415 => 248,  413 => 247,  410 => 246,  402 => 240,  394 => 235,  388 => 231,  386 => 230,  373 => 220,  364 => 214,  350 => 205,  342 => 200,  334 => 195,  330 => 194,  322 => 189,  296 => 166,  290 => 163,  279 => 155,  271 => 150,  264 => 146,  257 => 142,  252 => 140,  248 => 139,  244 => 138,  240 => 137,  236 => 136,  233 => 135,  229 => 134,  207 => 114,  196 => 106,  193 => 105,  190 => 104,  179 => 96,  176 => 95,  174 => 94,  158 => 81,  136 => 62,  114 => 43,  91 => 23,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}


{% block body %}
\t<div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\" mb-0 text-uppercase text-dark fw-bold animate__animated animate__fadeInLeft\">Mes dossiers : Garant financier
\t\t</h3>
\t\t<a class=\"btn btn-dark btn-sm d-none d-sm-inline-block animate__animated animate__fadeInRight\" role=\"button\" href=\"{{ path('export_data') }}\">
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
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t{{ nombreEncours }}</span>
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
\t{% if app.flashes('success-edit') is not empty %}
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
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

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Dernière modification : <span class=\"text-danger\">{{garantUser.getLastUpdate() | date('d-m-Y')  }} à {{garantUser.getLastUpdate() | date('H:m:s')  }}</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
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
\t\t</div>

\t</div>


\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-success m-0 fw-bold text-xs text-uppercase \">Liste des demandes terminés
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
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
\t\t</div>

\t</div>

\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-danger m-0 fw-bold text-xs text-uppercase \">Liste des demandes annulées (clôturer)
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
\t\t\t\t\t\t{% if garantsCloturer|length > 0 %}
\t\t\t\t\t\t\t{% for garantUser in garantsCloturer %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.id }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getName() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getEmail() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i:')}}
\t\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ garantUser.id }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ garantUser.id}}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa{{ garantUser.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_envoyez_mail')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{ garantUser.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{garantUser.getUser().getLastName() }}<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_update', {'id': garantUser.id}) }}\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getPays() }} \" selected>{{garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"{{garantUser.getVilleEtude() }} \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{garantUser.getStatutDemande() }} \" selected>Demande clôturer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathPassport %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.pathPassport) }}\" class=\"btn btn-warning btn-sm \" download=\"passeport.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getPathAdmissionFile %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"attestation.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>{{ garantUser.getInformations()}}</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{% else %}


\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>


\t\t</div>

\t</div>

\t<br><br>
</div></div>{% endblock %}
", "administration/garant/management.html.twig", "/Users/sevyondatracks/Desktop/maykconsulting/templates/administration/garant/management.html.twig");
    }
}
