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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
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
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 137
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 137), "avatar", [], "any", false, false, false, 137))) {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "avatar", [], "any", false, false, false, 138))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 138), "getName", [], "method", false, false, false, 138), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 140
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 141), "getName", [], "method", false, false, false, 141), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 144), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 145), "getPhone", [], "method", false, false, false, 145), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 146
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 146), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 148
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 148), "H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 150
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "method", false, false, false, 150)) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color: #00b779; \">Oui</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color: #bb2d3b\">Non</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 177), "getEmail", [], "method", false, false, false, 177), "html", null, true);
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
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 200), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"text-align: center\" class=\"modal-title fs-5  text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 205), "getName", [], "method", false, false, false, 205), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 206), "getLastName", [], "method", false, false, false, 206), "html", null, true);
            echo "</strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 211)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" id=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 218), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 218), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 228), "html", null, true);
            echo "\" name=\"ville\" id=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" id=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 235), "html", null, true);
            echo "\" selected>En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 244
            if ( !twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 244)) {
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 249
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 249))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 249), "getName", [], "method", false, false, false, 249), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 254
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 259
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 259), "getPassport", [], "method", false, false, false, 259)) {
                // line 260
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 261), "getPassport", [], "method", false, false, false, 261))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 261), "getName", [], "method", false, false, false, 261), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélecharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 266
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 268
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 273
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 273)) {
                // line 274
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 275
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 275))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 275), "getName", [], "method", false, false, false, 275), "html", null, true);
                echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélecharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 280
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 282
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 287
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "any", false, false, false, 287)) {
                // line 288
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 289
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "justificatifPaiement", [], "any", false, false, false, 289))), "html", null, true);
                echo "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 289), "getName", [], "method", false, false, false, 289), "html", null, true);
                echo "_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 294
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 296
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 301
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 301), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 301), "H:m:s"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 308), "html", null, true);
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
        // line 328
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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garantEnCours"]) || array_key_exists("garantEnCours", $context) ? $context["garantEnCours"] : (function () { throw new RuntimeError('Variable "garantEnCours" does not exist.', 356, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 357
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 359
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 359), "avatar", [], "any", false, false, false, 359))) {
                // line 360
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 360, $this->source); })()), "avatar", [], "any", false, false, false, 360))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 360), "getName", [], "method", false, false, false, 360), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 362
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t";
                // line 363
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 363), "getName", [], "method", false, false, false, 363), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 365
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 366), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 367), "getPhone", [], "method", false, false, false, 367), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 368
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 368), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 370
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 370), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<th>";
            // line 372
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "method", false, false, false, 372)) {
                // line 373
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color: #00b779; \">Oui</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 375
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color: #bb2d3b\">Non</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 376
            echo "</th>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 379), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 383), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 388), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 396
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 399
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 399), "getEmail", [], "method", false, false, false, 399), "html", null, true);
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
            // line 422
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 422), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 427
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 427), "getName", [], "method", false, false, false, 427), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 428
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 428), "getLastName", [], "method", false, false, false, 428), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 433
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 433)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 441
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 441), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 441), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"";
            // line 451
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 451), "html", null, true);
            echo "\" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 458
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 458), "html", null, true);
            echo "\" selected>En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 467
            if ( !twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 467)) {
                // line 468
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 471
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs  mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 472
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 472))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 472), "getName", [], "method", false, false, false, 472), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 477
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 482
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 482), "getPassport", [], "method", false, false, false, 482)) {
                // line 483
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 484
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 484), "getPassport", [], "method", false, false, false, 484))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 484), "getName", [], "method", false, false, false, 484), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 489
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 491
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 496
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 496)) {
                // line 497
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 498
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 498))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 498), "getName", [], "method", false, false, false, 498), "html", null, true);
                echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 503
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 505
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 510
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "any", false, false, false, 510)) {
                // line 511
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 512
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "justificatifPaiement", [], "any", false, false, false, 512))), "html", null, true);
                echo "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 512), "getName", [], "method", false, false, false, 512), "html", null, true);
                echo "_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 517
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 519
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 524
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 524), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 524), "H:m:s"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 533
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 533), "html", null, true);
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
        // line 553
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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 583
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garantTermine"]) || array_key_exists("garantTermine", $context) ? $context["garantTermine"] : (function () { throw new RuntimeError('Variable "garantTermine" does not exist.', 583, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
            // line 584
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 586
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 586), "avatar", [], "any", false, false, false, 586))) {
                // line 587
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 587, $this->source); })()), "avatar", [], "any", false, false, false, 587))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 587), "getName", [], "method", false, false, false, 587), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 589
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t";
                // line 590
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 590), "getName", [], "method", false, false, false, 590), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 592
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 593
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "any", false, false, false, 593), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 594
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 594), "getPhone", [], "method", false, false, false, 594), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 595
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 595), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 597
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 597), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 599
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "method", false, false, false, 599)) {
                // line 600
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color: #00b779; \">Oui</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 602
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color: #bb2d3b\">Non</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 603
            echo "</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 606
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 606), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 610
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 610), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 615
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 615), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 623
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 626
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 626), "getEmail", [], "method", false, false, false, 626), "html", null, true);
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
            // line 649
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 649), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 654
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 654), "getName", [], "method", false, false, false, 654), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 655
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 655), "getLastName", [], "method", false, false, false, 655), "html", null, true);
            echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 660
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 660)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 668
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 668), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 668), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"";
            // line 678
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 678), "html", null, true);
            echo "\" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 685
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 685), "html", null, true);
            echo "\" selected>Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"O\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 695
            if ( !twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 695)) {
                // line 696
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 699
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs  mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 700
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 700))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 700), "getName", [], "method", false, false, false, 700), "html", null, true);
                echo "_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 705
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 710
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 710), "getPassport", [], "method", false, false, false, 710)) {
                // line 711
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 712
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 712), "getPassport", [], "method", false, false, false, 712))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 712), "getName", [], "method", false, false, false, 712), "html", null, true);
                echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 717
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 719
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 724
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 724)) {
                // line 725
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 726
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 726))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 726), "getName", [], "method", false, false, false, 726), "html", null, true);
                echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 731
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 733
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 738
            if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "any", false, false, false, 738)) {
                // line 739
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 740
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "justificatifPaiement", [], "any", false, false, false, 740))), "html", null, true);
                echo "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 740), "getName", [], "method", false, false, false, 740), "html", null, true);
                echo "_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 745
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 747
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 752
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 752), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 752), "H:m:s"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 761
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 761), "html", null, true);
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
        // line 781
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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 809
        if ((twig_length_filter($this->env, (isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 809, $this->source); })())) > 0)) {
            // line 810
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["garantsCloturer"]) || array_key_exists("garantsCloturer", $context) ? $context["garantsCloturer"] : (function () { throw new RuntimeError('Variable "garantsCloturer" does not exist.', 810, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["garantUser"]) {
                // line 811
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 813
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 813), "avatar", [], "any", false, false, false, 813))) {
                    // line 814
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 814, $this->source); })()), "avatar", [], "any", false, false, false, 814))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 814), "getName", [], "method", false, false, false, 814), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 816
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 817
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 817), "getName", [], "method", false, false, false, 817), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 819
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 820
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 820), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 821
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 821), "getPhone", [], "method", false, false, false, 821), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 822
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 822), "d-m-Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t";
                // line 824
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getDateDemande", [], "method", false, false, false, 824), "H:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</td>
<td>";
                // line 826
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "method", false, false, false, 826)) {
                    // line 827
                    echo "\t\t<span style=\"color: #00b779; \">Oui</span>
\t";
                } else {
                    // line 829
                    echo "\t\t<span style=\"color: #bb2d3b\">Non</span>
\t";
                }
                // line 830
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
                // line 832
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 832), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>

\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
                // line 836
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 836), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
                // line 841
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 841), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 849
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_envoyez_mail");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
                // line 852
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "any", false, false, false, 852), "getEmail", [], "method", false, false, false, 852), "html", null, true);
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
                // line 875
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 875), "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-xl modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 880
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 880), "getName", [], "method", false, false, false, 880), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 881
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 881), "getLastName", [], "method", false, false, false, 881), "html", null, true);
                echo "<strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 886
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["garantUser"], "id", [], "any", false, false, false, 886)]), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 894
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 894), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPays", [], "method", false, false, false, 894), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"";
                // line 904
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getVilleEtude", [], "method", false, false, false, 904), "html", null, true);
                echo "\" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 911
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getStatutDemande", [], "method", false, false, false, 911), "html", null, true);
                echo "\" selected>Demande clôturée</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Traitement terminé</option>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 923
                if ( !twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 923)) {
                    // line 924
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 927
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 928
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/garant/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "getGarantFile", [], "method", false, false, false, 928))), "html", null, true);
                    echo "\" class=\"btn btn-light text-xs btn-sm \" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 928), "getName", [], "method", false, false, false, 928), "html", null, true);
                    echo "_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 933
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 938
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 938), "getPassport", [], "method", false, false, false, 938)) {
                    // line 939
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 940
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 940), "getPassport", [], "method", false, false, false, 940))), "html", null, true);
                    echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 940), "getName", [], "method", false, false, false, 940), "html", null, true);
                    echo "_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 945
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 947
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 952
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getPathAdmissionFile", [], "any", false, false, false, 952)) {
                    // line 953
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 954
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "pathAdmissionFile", [], "any", false, false, false, 954))), "html", null, true);
                    echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 954), "getName", [], "method", false, false, false, 954), "html", null, true);
                    echo "_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 959
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 961
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 966
                if (twig_get_attribute($this->env, $this->source, $context["garantUser"], "getJustificatifPaiement", [], "any", false, false, false, 966)) {
                    // line 967
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 968
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, $context["garantUser"], "justificatifPaiement", [], "any", false, false, false, 968))), "html", null, true);
                    echo "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getUser", [], "method", false, false, false, 968), "getName", [], "method", false, false, false, 968), "html", null, true);
                    echo "_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 973
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 975
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">";
                // line 980
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 980), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getLastUpdate", [], "method", false, false, false, 980), "H:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
                // line 989
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["garantUser"], "getInformations", [], "method", false, false, false, 989), "html", null, true);
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
            // line 1009
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 1011
            echo "

\t\t\t\t\t\t";
        }
        // line 1014
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
        return array (  1664 => 1014,  1659 => 1011,  1655 => 1009,  1629 => 989,  1615 => 980,  1608 => 975,  1604 => 973,  1594 => 968,  1591 => 967,  1589 => 966,  1582 => 961,  1578 => 959,  1568 => 954,  1565 => 953,  1563 => 952,  1556 => 947,  1552 => 945,  1542 => 940,  1539 => 939,  1537 => 938,  1530 => 933,  1520 => 928,  1517 => 927,  1512 => 924,  1510 => 923,  1495 => 911,  1485 => 904,  1470 => 894,  1459 => 886,  1451 => 881,  1447 => 880,  1439 => 875,  1413 => 852,  1407 => 849,  1396 => 841,  1388 => 836,  1381 => 832,  1377 => 830,  1373 => 829,  1369 => 827,  1367 => 826,  1362 => 824,  1357 => 822,  1353 => 821,  1349 => 820,  1346 => 819,  1341 => 817,  1338 => 816,  1330 => 814,  1328 => 813,  1324 => 811,  1319 => 810,  1317 => 809,  1287 => 781,  1261 => 761,  1247 => 752,  1240 => 747,  1236 => 745,  1226 => 740,  1223 => 739,  1221 => 738,  1214 => 733,  1210 => 731,  1200 => 726,  1197 => 725,  1195 => 724,  1188 => 719,  1184 => 717,  1174 => 712,  1171 => 711,  1169 => 710,  1162 => 705,  1152 => 700,  1149 => 699,  1144 => 696,  1142 => 695,  1129 => 685,  1119 => 678,  1104 => 668,  1093 => 660,  1085 => 655,  1081 => 654,  1073 => 649,  1047 => 626,  1041 => 623,  1030 => 615,  1022 => 610,  1015 => 606,  1010 => 603,  1006 => 602,  1002 => 600,  1000 => 599,  995 => 597,  990 => 595,  986 => 594,  982 => 593,  979 => 592,  974 => 590,  971 => 589,  963 => 587,  961 => 586,  957 => 584,  953 => 583,  921 => 553,  895 => 533,  881 => 524,  874 => 519,  870 => 517,  860 => 512,  857 => 511,  855 => 510,  848 => 505,  844 => 503,  834 => 498,  831 => 497,  829 => 496,  822 => 491,  818 => 489,  808 => 484,  805 => 483,  803 => 482,  796 => 477,  786 => 472,  783 => 471,  778 => 468,  776 => 467,  764 => 458,  754 => 451,  739 => 441,  728 => 433,  720 => 428,  716 => 427,  708 => 422,  682 => 399,  676 => 396,  665 => 388,  657 => 383,  650 => 379,  645 => 376,  641 => 375,  637 => 373,  635 => 372,  630 => 370,  625 => 368,  621 => 367,  617 => 366,  614 => 365,  609 => 363,  606 => 362,  598 => 360,  596 => 359,  592 => 357,  588 => 356,  558 => 328,  532 => 308,  520 => 301,  513 => 296,  509 => 294,  499 => 289,  496 => 288,  494 => 287,  487 => 282,  483 => 280,  473 => 275,  470 => 274,  468 => 273,  461 => 268,  457 => 266,  447 => 261,  444 => 260,  442 => 259,  435 => 254,  425 => 249,  422 => 248,  417 => 245,  415 => 244,  403 => 235,  393 => 228,  378 => 218,  368 => 211,  360 => 206,  356 => 205,  348 => 200,  322 => 177,  316 => 174,  305 => 166,  297 => 161,  290 => 157,  286 => 155,  282 => 153,  278 => 151,  276 => 150,  271 => 148,  266 => 146,  262 => 145,  258 => 144,  255 => 143,  250 => 141,  247 => 140,  239 => 138,  237 => 137,  233 => 135,  229 => 134,  207 => 114,  196 => 106,  193 => 105,  190 => 104,  179 => 96,  176 => 95,  174 => 94,  158 => 81,  136 => 62,  114 => 43,  91 => 23,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for garantUser in garantsEnAttentes %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().avatar is not empty %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\">{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getPays() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d/m/Y')}}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i')}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if garantUser.getJustificatifPaiement() %}
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #00b779; \">Oui</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #bb2d3b\">Non</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"text-align: center\" class=\"modal-title fs-5  text-dark text-center\" id=\"exampleModalLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{garantUser.getUser().getLastName() }}</strong></h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_garant_update', {'id': garantUser.id}) }}\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" id=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getPays() }}\" selected>{{ garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"{{ garantUser.getVilleEtude() }}\" name=\"ville\" id=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" id=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getStatutDemande() }}\" selected>En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not garantUser.getGarantFile() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs text-uppercase mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ garantUser.getGarantFile() ) }}\" class=\"btn btn-light btn-sm \" download=\"{{ garantUser.getUser().getName() }}_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().getPassport() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélecharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getPathAdmissionFile %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélecharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getJustificatifPaiement %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ garantUser.justificatifPaiement) }}\" class=\"btn btn-light text-xs btn-sm\" download=\"{{ garantUser.getUser().getName() }}_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">{{ garantUser.getLastUpdate() | date('d/m/Y') }} à {{ garantUser.getLastUpdate() | date('H:m:s') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>


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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for garantUser in garantEnCours %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().avatar is not empty %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\">{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getPays() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i')}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<th>{% if garantUser.getJustificatifPaiement() %}
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #00b779; \">Oui</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #bb2d3b\">Non</span>
\t\t\t\t\t\t\t\t\t{% endif %}</th>

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

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getPays() }}\" selected>{{ garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"{{ garantUser.getVilleEtude() }}\" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getStatutDemande() }}\" selected>En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not garantUser.getGarantFile() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs  mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ garantUser.getGarantFile() ) }}\" class=\"btn btn-light btn-sm text-xs\" download=\"{{ garantUser.getUser().getName() }}_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().getPassport() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getPathAdmissionFile %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getJustificatifPaiement %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ garantUser.justificatifPaiement) }}\" class=\"btn btn-light text-xs btn-sm\" download=\"{{ garantUser.getUser().getName() }}_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">{{ garantUser.getLastUpdate() | date('d/m/Y') }} à {{ garantUser.getLastUpdate() | date('H:m:s') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for garantUser in garantTermine %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().avatar is not empty %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\">{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getPays }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i')}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{% if garantUser.getJustificatifPaiement() %}
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #00b779; \">Oui</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #bb2d3b\">Non</span>
\t\t\t\t\t\t\t\t\t{% endif %}</td>

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

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getPays() }}\" selected>{{ garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"{{ garantUser.getVilleEtude() }}\" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getStatutDemande() }}\" selected>Traitement terminé</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"O\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Clôturer la demande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not garantUser.getGarantFile() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs  mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ garantUser.getGarantFile() ) }}\" class=\"btn btn-light btn-sm text-xs\" download=\"{{ garantUser.getUser().getName() }}_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().getPassport() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getPathAdmissionFile %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getJustificatifPaiement %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ garantUser.justificatifPaiement) }}\" class=\"btn btn-light text-xs btn-sm\" download=\"{{ garantUser.getUser().getName() }}_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">{{ garantUser.getLastUpdate() | date('d/m/Y') }} à {{ garantUser.getLastUpdate() | date('H:m:s') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
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
\t\t\t\t\t\t\t<th>Demandeur</th>
\t\t\t\t\t\t\t<th>Pays</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t<th>Date demande</th>
\t\t\t\t\t\t\t<th>Payé ?</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% if garantsCloturer|length > 0 %}
\t\t\t\t\t\t\t{% for garantUser in garantsCloturer %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().avatar is not empty %}
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\">{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t\t{{ garantUser.getUser().getName() }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.getPays() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.getUser().getPhone() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ garantUser.getDateDemande() | date('d-m-Y')}}
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t{{ garantUser.getDateDemande() | date('H:i')}}
\t\t\t\t\t\t\t\t\t</td>
<td>{% if garantUser.getJustificatifPaiement() %}
\t\t<span style=\"color: #00b779; \">Oui</span>
\t{% else %}
\t\t<span style=\"color: #bb2d3b\">Non</span>
\t{% endif %}</td>
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

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pays\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getPays() }}\" selected>{{ garantUser.getPays() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Us\">Us</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"{{ garantUser.getVilleEtude() }}\" name=\"ville\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"statutDemande\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ garantUser.getStatutDemande() }}\" selected>Demande clôturée</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">En attente de paiement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">En cours de traitement</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Traitement terminé</option>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Garant Financier </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not garantUser.getGarantFile() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"garantFile\" class=\"form-control-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents de garant au client un seul PDF qui regroupe Tout </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/garant/' ~ garantUser.getGarantFile() ) }}\" class=\"btn btn-light text-xs btn-sm \" download=\"{{ garantUser.getUser().getName() }}_GarantFile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getUser().getPassport() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/passport/' ~ garantUser.getUser().getPassport() ) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Passeport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getPathAdmissionFile %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/attestation/' ~ garantUser.pathAdmissionFile) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ garantUser.getUser().getName() }}_Attestation_Admission\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if garantUser.getJustificatifPaiement %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-xs \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ garantUser.justificatifPaiement) }}\" class=\"btn btn-light text-xs btn-sm\" download=\"{{ garantUser.getUser().getName() }}_justificatifPaiement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTélécharger <i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger text-xs text-uppercase fw-bold\">{{ garantUser.getLastUpdate() | date('d/m/Y') }} à {{ garantUser.getLastUpdate() | date('H:m:s') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



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
", "administration/garant/management.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/garant/management.html.twig");
    }
}
