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
            echo "\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
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
            // line 229
            if ( !twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 229)) {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents de garant Financier :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 235
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGarant Financier :

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 238))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 238), "getName", [], "method", false, false, false, 238), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 244
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 244), "getPassport", [], "method", false, false, false, 244)) {
                // line 245
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 249
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 249), "getPassport", [], "method", false, false, false, 249))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 249), "getName", [], "method", false, false, false, 249), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 254
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 260
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 261
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 261)) {
                // line 262
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 265))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 265), "getName", [], "method", false, false, false, 265), "html", null, true);
                echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 272
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 278
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Dernière modification :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
            // line 281
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 281), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 283
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 283), "H:m:s"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 288), "html", null, true);
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
        // line 308
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
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garantEnCours"]) || array_key_exists("garantEnCours", $context) ? $context["garantEnCours"] : (function () { throw new RuntimeError('Variable "garantEnCours" does not exist.', 336, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 337
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 338), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 339), "getName", [], "method", false, false, false, 339), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 340), "getEmail", [], "method", false, false, false, 340), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 341), "getPhone", [], "method", false, false, false, 341), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 342
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 342), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 344
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 344), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 348), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 352
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 352), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 357
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 357), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 365
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 368), "getEmail", [], "method", false, false, false, 368), "html", null, true);
            echo "\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
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
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 391), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 396
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 396), "getName", [], "method", false, false, false, 396), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 397
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 397), "getLastName", [], "method", false, false, false, 397), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 402
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 402)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 407
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 407), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 407), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 416
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 416), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 422
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 422), "html", null, true);
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
            // line 432
            if ( !twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 432)) {
                // line 433
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents de garant Financier :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 438
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGarant Financier :

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 441
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 441))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 441), "getName", [], "method", false, false, false, 441), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 446
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 446), "getPassport", [], "method", false, false, false, 446)) {
                // line 447
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 451
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 451), "getPassport", [], "method", false, false, false, 451))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 451), "getName", [], "method", false, false, false, 451), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 456
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 462
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 463
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 463)) {
                // line 464
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 467
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 467))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 467), "getName", [], "method", false, false, false, 467), "html", null, true);
                echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 474
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 480
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 483), "html", null, true);
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
        // line 503
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
        // line 533
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garantTermine"]) || array_key_exists("garantTermine", $context) ? $context["garantTermine"] : (function () { throw new RuntimeError('Variable "garantTermine" does not exist.', 533, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 534
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 535
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 535), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 536
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 536), "getName", [], "method", false, false, false, 536), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 537
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 537), "getEmail", [], "method", false, false, false, 537), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 538
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 538), "getPhone", [], "method", false, false, false, 538), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 539
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 539), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 541
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 541), "H:i:"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 545
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 545), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 549
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 549), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 554
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 554), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 562
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 565
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 565), "getEmail", [], "method", false, false, false, 565), "html", null, true);
            echo "\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
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
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 588), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 593
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 593), "getName", [], "method", false, false, false, 593), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 594
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 594), "getLastName", [], "method", false, false, false, 594), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 599
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 599)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 604
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 604), "html", null, true);
            echo " \" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 604), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
            // line 613
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 613), "html", null, true);
            echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 619
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 619), "html", null, true);
            echo " \" selected>Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 630
            if ( !twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 630)) {
                // line 631
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents de garant Financier :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 636
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGarant Financier :

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 639
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 639))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 639), "getName", [], "method", false, false, false, 639), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 644
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 645
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 645), "getPassport", [], "method", false, false, false, 645)) {
                // line 646
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 650
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 650), "getPassport", [], "method", false, false, false, 650))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 650), "getName", [], "method", false, false, false, 650), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 655
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 661
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 662
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 662)) {
                // line 663
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 666
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 666))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 666), "getName", [], "method", false, false, false, 666), "html", null, true);
                echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 673
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 679
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 682
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 682), "html", null, true);
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
        // line 702
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
        // line 730
        if ((twig_length_filter($this->env, (isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 730, $this->source); })())) > 0)) {
            // line 731
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 731, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
                // line 732
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 733
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 733), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 734
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 734), "getName", [], "method", false, false, false, 734), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 735
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 735), "getEmail", [], "method", false, false, false, 735), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 736
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 736), "getPhone", [], "method", false, false, false, 736), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 737
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 737), "d-m-Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t";
                // line 739
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 739), "H:i:"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tGMT</td>

\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
                // line 743
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 743), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
                // line 747
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 747), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
                // line 752
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 752), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 760
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
                // line 763
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 763), "getEmail", [], "method", false, false, false, 763), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
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
                // line 786
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 786), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 791
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 791), "getName", [], "method", false, false, false, 791), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 792
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 792), "getLastName", [], "method", false, false, false, 792), "html", null, true);
                echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 797
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 797)]), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 802
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 802), "html", null, true);
                echo " \" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 802), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Ville :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<Input value=\"";
                // line 811
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 811), "html", null, true);
                echo " \" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Etat de la demande :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select form-select mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 817
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 817), "html", null, true);
                echo " \" selected>Demande clôturer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 827
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 827), "getPassport", [], "method", false, false, false, 827)) {
                    // line 828
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 832
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 832), "getPassport", [], "method", false, false, false, 832))), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-sm \" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 832), "getName", [], "method", false, false, false, 832), "html", null, true);
                    echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 837
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint de passport
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 843
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 844
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 844)) {
                    // line 845
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAttestation d'admission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 848
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 848))), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-sm\" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 848), "getName", [], "method", false, false, false, 848), "html", null, true);
                    echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 855
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 861
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
                // line 864
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 864), "html", null, true);
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
            // line 884
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 886
            echo "

\t\t\t\t\t\t";
        }
        // line 889
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
        return array (  1401 => 889,  1396 => 886,  1392 => 884,  1366 => 864,  1361 => 861,  1353 => 855,  1341 => 848,  1336 => 845,  1334 => 844,  1331 => 843,  1323 => 837,  1313 => 832,  1307 => 828,  1305 => 827,  1292 => 817,  1283 => 811,  1269 => 802,  1261 => 797,  1253 => 792,  1249 => 791,  1241 => 786,  1215 => 763,  1209 => 760,  1198 => 752,  1190 => 747,  1183 => 743,  1176 => 739,  1171 => 737,  1167 => 736,  1163 => 735,  1159 => 734,  1155 => 733,  1152 => 732,  1147 => 731,  1145 => 730,  1115 => 702,  1089 => 682,  1084 => 679,  1076 => 673,  1064 => 666,  1059 => 663,  1057 => 662,  1054 => 661,  1046 => 655,  1036 => 650,  1030 => 646,  1028 => 645,  1025 => 644,  1015 => 639,  1010 => 636,  1003 => 631,  1001 => 630,  987 => 619,  978 => 613,  964 => 604,  956 => 599,  948 => 594,  944 => 593,  936 => 588,  910 => 565,  904 => 562,  893 => 554,  885 => 549,  878 => 545,  871 => 541,  866 => 539,  862 => 538,  858 => 537,  854 => 536,  850 => 535,  847 => 534,  843 => 533,  811 => 503,  785 => 483,  780 => 480,  772 => 474,  760 => 467,  755 => 464,  753 => 463,  750 => 462,  742 => 456,  732 => 451,  726 => 447,  723 => 446,  713 => 441,  708 => 438,  701 => 433,  699 => 432,  686 => 422,  677 => 416,  663 => 407,  655 => 402,  647 => 397,  643 => 396,  635 => 391,  609 => 368,  603 => 365,  592 => 357,  584 => 352,  577 => 348,  570 => 344,  565 => 342,  561 => 341,  557 => 340,  553 => 339,  549 => 338,  546 => 337,  542 => 336,  512 => 308,  486 => 288,  478 => 283,  473 => 281,  468 => 278,  460 => 272,  448 => 265,  443 => 262,  441 => 261,  438 => 260,  430 => 254,  420 => 249,  414 => 245,  412 => 244,  409 => 243,  399 => 238,  394 => 235,  387 => 230,  385 => 229,  373 => 220,  364 => 214,  350 => 205,  342 => 200,  334 => 195,  330 => 194,  322 => 189,  296 => 166,  290 => 163,  279 => 155,  271 => 150,  264 => 146,  257 => 142,  252 => 140,  248 => 139,  244 => 138,  240 => 137,  236 => 136,  233 => 135,  229 => 134,  207 => 114,  196 => 106,  193 => 105,  190 => 104,  179 => 96,  176 => 95,  174 => 94,  158 => 81,  136 => 62,  114 => 43,  91 => 23,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if not  garantUser.getGarantFile() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents de garant Financier :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGarant Financier :

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ garantUser.getGarantFile() ) }}\" class=\"btn btn-warning btn-sm \" download=\"{{garantUser.getUser().getName()}}_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getUser().getPassport() %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-warning btn-sm \" download=\"{{garantUser.getUser().getName()}}_Passeport\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"{{garantUser.getUser().getName()}}_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%    else        %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a pas joint d'attestation d'acceptation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%   endif  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Dernière modification :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">{{garantUser.getLastUpdate() | date('d-m-Y')  }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{garantUser.getLastUpdate() | date('H:m:s')  }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
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

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_update', {'id': garantUser.id}) }}\" enctype=\"multipart/form-data\">

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if not  garantUser.getGarantFile() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents de garant Financier :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGarant Financier :

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ garantUser.getGarantFile() ) }}\" class=\"btn btn-warning btn-sm \" download=\"{{garantUser.getUser().getName()}}_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getUser().getPassport() %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-warning btn-sm \" download=\"{{garantUser.getUser().getName()}}_Passeport\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"{{garantUser.getUser().getName()}}_Attestation_Admission\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if not  garantUser.getGarantFile() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label fw-bold text-xs text-uppercase\">Documents de garant Financier :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGarant Financier :

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ garantUser.getGarantFile() ) }}\" class=\"btn btn-warning btn-sm \" download=\"{{garantUser.getUser().getName()}}_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getUser().getPassport() %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-warning btn-sm \" download=\"{{garantUser.getUser().getName()}}_Passeport\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"{{garantUser.getUser().getName()}}_Attestation_Admission\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ garantUser.getUser.getEmail() }}\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
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

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if garantUser.getUser().getPassport() %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassport

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-warning btn-sm \" download=\"{{garantUser.getUser().getName()}}_Passeport\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-warning btn-sm\" download=\"{{garantUser.getUser().getName()}}_Attestation_Admission\">
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
