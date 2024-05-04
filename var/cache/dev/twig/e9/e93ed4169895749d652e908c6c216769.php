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

/* administration/hebergement/management.html.twig */
class __TwigTemplate_bf1b38c528b7f531d0f43bdf3d5d9d55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/hebergement/management.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/hebergement/management.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/hebergement/management.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
        <h3 class=\" mb-0 text-uppercase text-dark fw-bold animate__animated animate__fadeInLeft\">Mes dossiers : Hébergement
        </h3>
        <a class=\"btn btn-dark btn-sm d-none d-sm-inline-block animate__animated animate__fadeInRight\" role=\"button\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_data_hebergement");
        echo "\">
            <i class=\"fas fa-download fa-sm text-white-50\"></i>&nbsp;Generer un rapport</a>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInLeft\">
            <div class=\"card shadow border-start-primary py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-warning fw-bold text-xs mb-1\">
                                <span>En attentes de paiement</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["enAttenteDePaiement"]) || array_key_exists("enAttenteDePaiement", $context) ? $context["enAttenteDePaiement"] : (function () { throw new RuntimeError('Variable "enAttenteDePaiement" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-hourglass-half fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInRight\">
            <div class=\"card shadow border-start-success py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-primary fw-bold text-xs mb-1\">
                                <span>En cours</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nombreEncours"]) || array_key_exists("nombreEncours", $context) ? $context["nombreEncours"] : (function () { throw new RuntimeError('Variable "nombreEncours" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-sync fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInLeft\">
            <div class=\"card shadow border-start-warning py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-success fw-bold text-xs mb-1\">
                                <span>Validées</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
                                <span>";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["nombreTerminee"]) || array_key_exists("nombreTerminee", $context) ? $context["nombreTerminee"] : (function () { throw new RuntimeError('Variable "nombreTerminee" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-thumbs-up fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInRight\">
            <div class=\"card shadow border-start-success py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-danger fw-bold text-xs mb-1\">
                                <span>Annulées</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
                                <span>";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["nombreCloturer"]) || array_key_exists("nombreCloturer", $context) ? $context["nombreCloturer"] : (function () { throw new RuntimeError('Variable "nombreCloturer" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-trash-alt fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    ";
        // line 94
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 94))) {
            // line 95
            echo "        <div class=\"alert alert-success animate__animated animate__fadeInLeft\">
            ";
            // line 96
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 96)), "html", null, true);
            echo "
            <div align=\"center\">
                Votre mail a été envoyé avec succes !
            </div>
        </div>
        <br>

    ";
        }
        // line 104
        echo "
    ";
        // line 105
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 105))) {
            // line 106
            echo "        <div class=\"alert alert-success animate__animated animate__fadeInTop\">
            ";
            // line 107
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 107)), "html", null, true);
            echo "
            <div align=\"center\">
                Modification effectué avec succes !
            </div>
        </div>
        <br>

    ";
        }
        // line 115
        echo "    <div class=\"card shadow \">
        <div class=\"card-header py-3\">
            <p class=\"text-warning m-0  fw-bold text-xs text-uppercase \">Liste des demandes en attente de paiement
            </p>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
                <table class=\"table my-0\" id=\"dataTable\">
                    <thead>
                    <tr>
                        <th>Demandeur</th>
                        <th>Pays</th>
                        <th>Téléphone</th>
                        <th>Date demande</th>
                        <th>Payé ?</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["EnAttentes"]) || array_key_exists("EnAttentes", $context) ? $context["EnAttentes"] : (function () { throw new RuntimeError('Variable "EnAttentes" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergementEnAttente"]) {
            // line 135
            echo "                    <tr>
                        <td>
                            ";
            // line 137
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 137), "avatar", [], "any", false, false, false, 137))) {
                // line 138
                echo "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 138), "avatar", [], "any", false, false, false, 138))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 138), "getName", [], "method", false, false, false, 138), "html", null, true);
                echo "
                            ";
            } else {
                // line 140
                echo "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                ";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 141), "getName", [], "method", false, false, false, 141), "html", null, true);
                echo "
                            ";
            }
            // line 143
            echo "                        </td>
                        <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getPays", [], "method", false, false, false, 144), "html", null, true);
            echo "</td>
                        <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 145), "getPhone", [], "method", false, false, false, 145), "html", null, true);
            echo "</td>
                        <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getDateDemande", [], "method", false, false, false, 146), "d/m/Y"), "html", null, true);
            echo "
                            à
                            ";
            // line 148
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getDateDemande", [], "method", false, false, false, 148), "H:i"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getJustificatifPaiement", [], "method", false, false, false, 150)) {
                // line 151
                echo "                                <span style=\"color: #00b779; \">Oui</span>
                            ";
            } else {
                // line 153
                echo "                                <span style=\"color: #bb2d3b\">Non</span>
                            ";
            }
            // line 155
            echo "                        </td>
                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_envoyez_mail");
            echo "\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "any", false, false, false, 177), "getEmail", [], "method", false, false, false, 177), "html", null, true);
            echo "\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
                                                    <textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
                                                </div>

                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                <i class=\"fas fa-paper-plane\"></i>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class=\"modal fade\" id=\"exampleModal";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 200), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 style=\"text-align: center\" class=\"modal-title fs-5  text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 205), "getName", [], "method", false, false, false, 205), "html", null, true);
            echo "
                                                    ";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 206), "getLastName", [], "method", false, false, false, 206), "html", null, true);
            echo "</strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 211)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">

                                                <table class=\"table table-borderless\">
                                                    <tr>
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                        <td>
                                                            <select name=\"pays\" id=\"pays\" class=\"form-select\">
                                                                <option value=\"";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getPays", [], "method", false, false, false, 218), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getPays", [], "method", false, false, false, 218), "html", null, true);
            echo "</option>
                                                                <option value=\"France\">France</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
                                                        <td>
                                                            <input value=\"";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getVilleEtude", [], "method", false, false, false, 226), "html", null, true);
            echo "\" name=\"ville\" id=\"ville\" type=\"text\" class=\"form-control\">
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                        <td>
                                                            <select name=\"statutDemande\" id=\"statutDemande\" class=\"form-select\">
                                                                <option value=\"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getStatutDemande", [], "method", false, false, false, 233), "html", null, true);
            echo "\" selected>En attente de paiement</option>
                                                                <option value=\"1\">En cours de traitement</option>
                                                                <option value=\"3\">Clôturer la demande</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Fichier Hebergement </th>
                                                        <td>
                                                            ";
            // line 242
            if ( !twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getHebergementFile", [], "method", false, false, false, 242)) {
                // line 243
                echo "                                                                <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                <span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents d'hebergement au client un seul PDF qui regroupe Tout </span>
                                                            ";
            } else {
                // line 246
                echo "                                                                <div class=\"fw-bold text-xs  mb-2\">
                                                                    <a href=\"";
                // line 247
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getHebergementFile", [], "method", false, false, false, 247))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 247), "getName", [], "method", false, false, false, 247), "html", null, true);
                echo "_HebergementFile\">
                                                                        Télécharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            }
            // line 252
            echo "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                        <td>
                                                            ";
            // line 257
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 257), "getPassport", [], "method", false, false, false, 257)) {
                // line 258
                echo "                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"";
                // line 259
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 259), "getPassport", [], "method", false, false, false, 259))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 259), "getName", [], "method", false, false, false, 259), "html", null, true);
                echo "_Passeport\">
                                                                        Télecharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            } else {
                // line 264
                echo "                                                                <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                            ";
            }
            // line 266
            echo "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                        <td>
                                                            ";
            // line 271
            if (twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getPathAdmissionFile", [], "any", false, false, false, 271)) {
                // line 272
                echo "                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"";
                // line 273
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "pathAdmissionFile", [], "any", false, false, false, 273))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 273), "getName", [], "method", false, false, false, 273), "html", null, true);
                echo "_Attestation_Admission\">
                                                                        Télecharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            } else {
                // line 278
                echo "                                                                <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                            ";
            }
            // line 280
            echo "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                        <td>
                                                            ";
            // line 285
            if (twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getJustificatifPaiement", [], "any", false, false, false, 285)) {
                // line 286
                echo "                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"";
                // line 287
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "justificatifPaiement", [], "any", false, false, false, 287))), "html", null, true);
                echo "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 287), "getName", [], "method", false, false, false, 287), "html", null, true);
                echo "_justificatifPaiement\">
                                                                        Télécharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            } else {
                // line 292
                echo "                                                                <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                            ";
            }
            // line 294
            echo "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                        <td>
                                                            <span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 299
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getLastUpdate", [], "method", false, false, false, 299), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getLastUpdate", [], "method", false, false, false, 299), "H:m:s"), "html", null, true);
            echo "</span>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergementEnAttente"], "getInformations", [], "method", false, false, false, 306), "html", null, true);
            echo "</textarea>
                                                </div>


                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer
                                                        <i class=\"fas fa-save\"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div>
            </td>
            </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hebergementEnAttente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "            </tbody>
            </table>
        </div>
    </div>

    </div>

   <br>

    <div class=\"card shadow \">
        <div class=\"card-header py-3\">
            <p class=\"text-primary m-0 fw-bold text-xs text-uppercase  \">Liste des demandes en cours de traitement
            </p>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
                <table class=\"table my-0\" id=\"dataTable\">
                    <thead>
                    <tr>
                        <th>Demandeur</th>
                        <th>Pays</th>
                        <th>Téléphone</th>
                        <th>Date demande</th>
                        <th>Payé ?</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["EnCours"]) || array_key_exists("EnCours", $context) ? $context["EnCours"] : (function () { throw new RuntimeError('Variable "EnCours" does not exist.', 357, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 358
            echo "                    <tr>
                        <td>
                            ";
            // line 360
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 360), "avatar", [], "any", false, false, false, 360))) {
                // line 361
                echo "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "user", [], "any", false, false, false, 361), "avatar", [], "any", false, false, false, 361))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 361), "getName", [], "method", false, false, false, 361), "html", null, true);
                echo "
                            ";
            } else {
                // line 363
                echo "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                ";
                // line 364
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 364), "getName", [], "method", false, false, false, 364), "html", null, true);
                echo "
                            ";
            }
            // line 366
            echo "                        </td>
                        <td>";
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 367), "html", null, true);
            echo "</td>
                        <td>";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 368), "getPhone", [], "method", false, false, false, 368), "html", null, true);
            echo "</td>
                        <td>";
            // line 369
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 369), "d-m-Y"), "html", null, true);
            echo "
                            à
                            ";
            // line 371
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 371), "H:i"), "html", null, true);
            echo "
                        </td>
                        <th>";
            // line 373
            if (twig_get_attribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "method", false, false, false, 373)) {
                // line 374
                echo "                                <span style=\"color: #00b779; \">Oui</span>
                            ";
            } else {
                // line 376
                echo "                                <span style=\"color: #bb2d3b\">Non</span>
                            ";
            }
            // line 377
            echo "</th>

                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 380), "html", null, true);
            echo "\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 384), "html", null, true);
            echo "\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa";
            // line 389
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 389), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"";
            // line 397
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_envoyez_mail");
            echo "\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 400
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "any", false, false, false, 400), "getEmail", [], "method", false, false, false, 400), "html", null, true);
            echo "\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
                                                    <textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
                                                </div>

                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                <i class=\"fas fa-paper-plane\"></i>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class=\"modal fade\" id=\"exampleModal";
            // line 423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 423), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>";
            // line 428
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 428), "getName", [], "method", false, false, false, 428), "html", null, true);
            echo "
                                                    ";
            // line 429
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 429), "getLastName", [], "method", false, false, false, 429), "html", null, true);
            echo "<strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"";
            // line 434
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 434)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">

                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-borderless\">
                                                        <tr>
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                            <td>
                                                                <select name=\"pays\" class=\"form-select\">
                                                                    <option value=\"";
            // line 442
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 442), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 442), "html", null, true);
            echo "</option>
                                                                    <option value=\"France\">France</option>
                                                                    <option value=\"Canada\">Canada</option>on>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
                                                            <td>
                                                                <input value=\"";
            // line 451
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getVilleEtude", [], "method", false, false, false, 451), "html", null, true);
            echo "\" name=\"ville\" type=\"text\" class=\"form-control\">
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                            <td>
                                                                <select name=\"statutDemande\" class=\"form-select\">
                                                                    <option value=\"";
            // line 458
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getStatutDemande", [], "method", false, false, false, 458), "html", null, true);
            echo "\" selected>En cours de traitement</option>
                                                                    <option value=\"0\">En attente de paiement</option>
                                                                    <option value=\"2\">Traitement terminé</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Hebergement File </th>
                                                            <td>
                                                                ";
            // line 467
            if ( !twig_get_attribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 467)) {
                // line 468
                echo "                                                                    <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                    <span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents d'hebergement au client un seul PDF qui regroupe Tout </span>
                                                                ";
            } else {
                // line 471
                echo "                                                                    <div class=\"fw-bold text-xs  mb-2\">
                                                                        <a href=\"";
                // line 472
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . twig_get_attribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 472))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 472), "getName", [], "method", false, false, false, 472), "html", null, true);
                echo "_HebergementFile\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            }
            // line 477
            echo "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                            <td>
                                                                ";
            // line 482
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 482), "getPassport", [], "method", false, false, false, 482)) {
                // line 483
                echo "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 484
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 484), "getPassport", [], "method", false, false, false, 484))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 484), "getName", [], "method", false, false, false, 484), "html", null, true);
                echo "_Passeport\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 489
                echo "                                                                    <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                                ";
            }
            // line 491
            echo "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                            <td>
                                                                ";
            // line 496
            if (twig_get_attribute($this->env, $this->source, $context["hebergement"], "getPathAdmissionFile", [], "any", false, false, false, 496)) {
                // line 497
                echo "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 498
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . twig_get_attribute($this->env, $this->source, $context["hebergement"], "pathAdmissionFile", [], "any", false, false, false, 498))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 498), "getName", [], "method", false, false, false, 498), "html", null, true);
                echo "_Attestation_Admission\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 503
                echo "                                                                    <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                                ";
            }
            // line 505
            echo "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                            <td>
                                                                ";
            // line 510
            if (twig_get_attribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "any", false, false, false, 510)) {
                // line 511
                echo "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 512
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . twig_get_attribute($this->env, $this->source, $context["hebergement"], "justificatifPaiement", [], "any", false, false, false, 512))), "html", null, true);
                echo "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 512), "getName", [], "method", false, false, false, 512), "html", null, true);
                echo "_justificatifPaiement\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 517
                echo "                                                                    <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                                ";
            }
            // line 519
            echo "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                            <td>
                                                                <span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 524
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 524), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 524), "H:m:s"), "html", null, true);
            echo "</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>



                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 533
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "getInformations", [], "method", false, false, false, 533), "html", null, true);
            echo "</textarea>
                                                </div>


                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer
                                                        <i class=\"fas fa-save\"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            </td>
            </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 553
        echo "            </tbody>
            </table>
        </div>
    </div>

    </div>

</div>

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
        return "administration/hebergement/management.html.twig";
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
        return array (  923 => 553,  897 => 533,  883 => 524,  876 => 519,  872 => 517,  862 => 512,  859 => 511,  857 => 510,  850 => 505,  846 => 503,  836 => 498,  833 => 497,  831 => 496,  824 => 491,  820 => 489,  810 => 484,  807 => 483,  805 => 482,  798 => 477,  788 => 472,  785 => 471,  780 => 468,  778 => 467,  766 => 458,  756 => 451,  742 => 442,  731 => 434,  723 => 429,  719 => 428,  711 => 423,  685 => 400,  679 => 397,  668 => 389,  660 => 384,  653 => 380,  648 => 377,  644 => 376,  640 => 374,  638 => 373,  633 => 371,  628 => 369,  624 => 368,  620 => 367,  617 => 366,  612 => 364,  609 => 363,  601 => 361,  599 => 360,  595 => 358,  591 => 357,  561 => 329,  532 => 306,  520 => 299,  513 => 294,  509 => 292,  499 => 287,  496 => 286,  494 => 285,  487 => 280,  483 => 278,  473 => 273,  470 => 272,  468 => 271,  461 => 266,  457 => 264,  447 => 259,  444 => 258,  442 => 257,  435 => 252,  425 => 247,  422 => 246,  417 => 243,  415 => 242,  403 => 233,  393 => 226,  380 => 218,  370 => 211,  362 => 206,  358 => 205,  350 => 200,  324 => 177,  318 => 174,  307 => 166,  299 => 161,  292 => 157,  288 => 155,  284 => 153,  280 => 151,  278 => 150,  273 => 148,  268 => 146,  264 => 145,  260 => 144,  257 => 143,  252 => 141,  249 => 140,  241 => 138,  239 => 137,  235 => 135,  231 => 134,  210 => 115,  199 => 107,  196 => 106,  194 => 105,  191 => 104,  180 => 96,  177 => 95,  175 => 94,  158 => 80,  136 => 61,  114 => 42,  91 => 22,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block body %}

    <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
        <h3 class=\" mb-0 text-uppercase text-dark fw-bold animate__animated animate__fadeInLeft\">Mes dossiers : Hébergement
        </h3>
        <a class=\"btn btn-dark btn-sm d-none d-sm-inline-block animate__animated animate__fadeInRight\" role=\"button\" href=\"{{ path('export_data_hebergement') }}\">
            <i class=\"fas fa-download fa-sm text-white-50\"></i>&nbsp;Generer un rapport</a>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInLeft\">
            <div class=\"card shadow border-start-primary py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-warning fw-bold text-xs mb-1\">
                                <span>En attentes de paiement</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t{{ enAttenteDePaiement }}</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-hourglass-half fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInRight\">
            <div class=\"card shadow border-start-success py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-primary fw-bold text-xs mb-1\">
                                <span>En cours</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t{{ nombreEncours }}</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-sync fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInLeft\">
            <div class=\"card shadow border-start-warning py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-success fw-bold text-xs mb-1\">
                                <span>Validées</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
                                <span>{{ nombreTerminee}}</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-thumbs-up fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3 mb-4 animate__animated animate__fadeInRight\">
            <div class=\"card shadow border-start-success py-2\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center no-gutters\">
                        <div class=\"col me-2\">
                            <div class=\"text-uppercase text-danger fw-bold text-xs mb-1\">
                                <span>Annulées</span>
                            </div>
                            <div class=\"text-dark fw-bold h5 mb-0\">
                                <span>{{nombreCloturer}}</span>
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-trash-alt fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    {% if app.flashes('success-mail-send') is not empty %}
        <div class=\"alert alert-success animate__animated animate__fadeInLeft\">
            {{ app.flashes('success-mail-send')|first }}
            <div align=\"center\">
                Votre mail a été envoyé avec succes !
            </div>
        </div>
        <br>

    {% endif %}

    {% if app.flashes('success-edit') is not empty %}
        <div class=\"alert alert-success animate__animated animate__fadeInTop\">
            {{ app.flashes('success-edit')|first }}
            <div align=\"center\">
                Modification effectué avec succes !
            </div>
        </div>
        <br>

    {% endif %}
    <div class=\"card shadow \">
        <div class=\"card-header py-3\">
            <p class=\"text-warning m-0  fw-bold text-xs text-uppercase \">Liste des demandes en attente de paiement
            </p>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
                <table class=\"table my-0\" id=\"dataTable\">
                    <thead>
                    <tr>
                        <th>Demandeur</th>
                        <th>Pays</th>
                        <th>Téléphone</th>
                        <th>Date demande</th>
                        <th>Payé ?</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for hebergementEnAttente in EnAttentes %}
                    <tr>
                        <td>
                            {% if hebergementEnAttente.getUser().avatar is not empty %}
                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ hebergementEnAttente.getUser().avatar) }}\">{{ hebergementEnAttente.getUser().getName() }}
                            {% else %}
                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                {{ hebergementEnAttente.getUser().getName() }}
                            {% endif %}
                        </td>
                        <td>{{ hebergementEnAttente.getPays() }}</td>
                        <td>{{ hebergementEnAttente.getUser().getPhone() }}</td>
                        <td>{{ hebergementEnAttente.getDateDemande() | date('d/m/Y')}}
                            à
                            {{ hebergementEnAttente.getDateDemande() | date('H:i')}}</td>
                        <td>
                            {% if hebergementEnAttente.getJustificatifPaiement() %}
                                <span style=\"color: #00b779; \">Oui</span>
                            {% else %}
                                <span style=\"color: #bb2d3b\">Non</span>
                            {% endif %}
                        </td>
                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ hebergementEnAttente.id }}\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ hebergementEnAttente.id}}\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa{{ hebergementEnAttente.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"{{ path('app_hebergement_envoyez_mail')}}\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ hebergementEnAttente.getUser.getEmail() }}\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
                                                    <textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
                                                </div>

                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                <i class=\"fas fa-paper-plane\"></i>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class=\"modal fade\" id=\"exampleModal{{ hebergementEnAttente.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 style=\"text-align: center\" class=\"modal-title fs-5  text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>{{hebergementEnAttente.getUser().getName() }}
                                                    {{hebergementEnAttente.getUser().getLastName() }}</strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"{{ path('app_hebergement_update', {'id': hebergementEnAttente.id}) }}\" enctype=\"multipart/form-data\">

                                                <table class=\"table table-borderless\">
                                                    <tr>
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                        <td>
                                                            <select name=\"pays\" id=\"pays\" class=\"form-select\">
                                                                <option value=\"{{ hebergementEnAttente.getPays() }}\" selected>{{ hebergementEnAttente.getPays() }}</option>
                                                                <option value=\"France\">France</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
                                                        <td>
                                                            <input value=\"{{ hebergementEnAttente.getVilleEtude() }}\" name=\"ville\" id=\"ville\" type=\"text\" class=\"form-control\">
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                        <td>
                                                            <select name=\"statutDemande\" id=\"statutDemande\" class=\"form-select\">
                                                                <option value=\"{{ hebergementEnAttente.getStatutDemande() }}\" selected>En attente de paiement</option>
                                                                <option value=\"1\">En cours de traitement</option>
                                                                <option value=\"3\">Clôturer la demande</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Fichier Hebergement </th>
                                                        <td>
                                                            {% if not hebergementEnAttente.getHebergementFile() %}
                                                                <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                <span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents d'hebergement au client un seul PDF qui regroupe Tout </span>
                                                            {% else %}
                                                                <div class=\"fw-bold text-xs  mb-2\">
                                                                    <a href=\"{{ asset('uploads/hebergement/' ~ hebergementEnAttente.getHebergementFile() ) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ hebergementEnAttente.getUser().getName() }}_HebergementFile\">
                                                                        Télécharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                        <td>
                                                            {% if hebergementEnAttente.getUser().getPassport() %}
                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"{{ asset('uploads/passport/' ~ hebergementEnAttente.getUser().getPassport() ) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ hebergementEnAttente.getUser().getName() }}_Passeport\">
                                                                        Télecharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            {% else %}
                                                                <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                        <td>
                                                            {% if hebergementEnAttente.getPathAdmissionFile %}
                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"{{ asset('uploads/attestation/' ~ hebergementEnAttente.pathAdmissionFile) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ hebergementEnAttente.getUser().getName() }}_Attestation_Admission\">
                                                                        Télecharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            {% else %}
                                                                <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                        <td>
                                                            {% if hebergementEnAttente.getJustificatifPaiement %}
                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ hebergementEnAttente.justificatifPaiement) }}\" class=\"btn btn-light text-xs btn-sm\" download=\"{{ hebergementEnAttente.getUser().getName() }}_justificatifPaiement\">
                                                                        Télécharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            {% else %}
                                                                <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                        <td>
                                                            <span class=\"text-danger text-xs text-uppercase fw-bold\">{{ hebergementEnAttente.getLastUpdate() | date('d/m/Y') }} à {{ hebergementEnAttente.getLastUpdate() | date('H:m:s') }}</span>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>{{ hebergementEnAttente.getInformations()}}</textarea>
                                                </div>


                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer
                                                        <i class=\"fas fa-save\"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div>
            </td>
            </td>
            </tr>
            {% endfor %}
            </tbody>
            </table>
        </div>
    </div>

    </div>

   <br>

    <div class=\"card shadow \">
        <div class=\"card-header py-3\">
            <p class=\"text-primary m-0 fw-bold text-xs text-uppercase  \">Liste des demandes en cours de traitement
            </p>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
                <table class=\"table my-0\" id=\"dataTable\">
                    <thead>
                    <tr>
                        <th>Demandeur</th>
                        <th>Pays</th>
                        <th>Téléphone</th>
                        <th>Date demande</th>
                        <th>Payé ?</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for hebergement in EnCours %}
                    <tr>
                        <td>
                            {% if hebergement.getUser().avatar is not empty %}
                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ hebergement.user.avatar) }}\">{{ hebergement.getUser().getName() }}
                            {% else %}
                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                {{ hebergement.getUser().getName() }}
                            {% endif %}
                        </td>
                        <td>{{ hebergement.getPays() }}</td>
                        <td>{{ hebergement.getUser().getPhone() }}</td>
                        <td>{{ hebergement.getDateDemande() | date('d-m-Y')}}
                            à
                            {{ hebergement.getDateDemande() | date('H:i')}}
                        </td>
                        <th>{% if hebergement.getJustificatifPaiement() %}
                                <span style=\"color: #00b779; \">Oui</span>
                            {% else %}
                                <span style=\"color: #bb2d3b\">Non</span>
                            {% endif %}</th>

                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ hebergement.id }}\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ hebergement.id}}\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa{{ hebergement.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"{{ path('app_hebergement_envoyez_mail')}}\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"{{ hebergement.getUser.getEmail() }}\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
                                                    <textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\" required></textarea>
                                                </div>

                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                <i class=\"fas fa-paper-plane\"></i>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class=\"modal fade\" id=\"exampleModal{{ hebergement.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>{{hebergement.getUser().getName() }}
                                                    {{hebergement.getUser().getLastName() }}<strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"{{ path('app_hebergement_update', {'id': hebergement.id}) }}\" enctype=\"multipart/form-data\">

                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-borderless\">
                                                        <tr>
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                            <td>
                                                                <select name=\"pays\" class=\"form-select\">
                                                                    <option value=\"{{ hebergement.getPays() }}\" selected>{{ hebergement.getPays() }}</option>
                                                                    <option value=\"France\">France</option>
                                                                    <option value=\"Canada\">Canada</option>on>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
                                                            <td>
                                                                <input value=\"{{ hebergement.getVilleEtude() }}\" name=\"ville\" type=\"text\" class=\"form-control\">
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                            <td>
                                                                <select name=\"statutDemande\" class=\"form-select\">
                                                                    <option value=\"{{ hebergement.getStatutDemande() }}\" selected>En cours de traitement</option>
                                                                    <option value=\"0\">En attente de paiement</option>
                                                                    <option value=\"2\">Traitement terminé</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Hebergement File </th>
                                                            <td>
                                                                {% if not hebergement.getHebergementFile() %}
                                                                    <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                    <span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents d'hebergement au client un seul PDF qui regroupe Tout </span>
                                                                {% else %}
                                                                    <div class=\"fw-bold text-xs  mb-2\">
                                                                        <a href=\"{{ asset('uploads/hebergement/' ~ hebergement.getHebergementFile() ) }}\" class=\"btn btn-light btn-sm text-xs\" download=\"{{ hebergement.getUser().getName() }}_HebergementFile\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                            <td>
                                                                {% if hebergement.getUser().getPassport() %}
                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"{{ asset('uploads/passport/' ~ hebergement.getUser().getPassport() ) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ hebergement.getUser().getName() }}_Passeport\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                {% else %}
                                                                    <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                            <td>
                                                                {% if hebergement.getPathAdmissionFile %}
                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"{{ asset('uploads/attestation/' ~ hebergement.pathAdmissionFile) }}\" class=\"btn btn-light btn-sm text-xs \" download=\"{{ hebergement.getUser().getName() }}_Attestation_Admission\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                {% else %}
                                                                    <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                            <td>
                                                                {% if hebergement.getJustificatifPaiement %}
                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"{{ asset('uploads/justificatif-de-paiement/' ~ hebergement.justificatifPaiement) }}\" class=\"btn btn-light text-xs btn-sm\" download=\"{{ hebergement.getUser().getName() }}_justificatifPaiement\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                {% else %}
                                                                    <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                            <td>
                                                                <span class=\"text-danger text-xs text-uppercase fw-bold\">{{ hebergement.getLastUpdate() | date('d/m/Y') }} à {{ hebergement.getLastUpdate() | date('H:m:s') }}</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>



                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>{{ hebergement.getInformations()}}</textarea>
                                                </div>


                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer
                                                        <i class=\"fas fa-save\"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            </td>
            </td>
            </tr>
            {% endfor %}
            </tbody>
            </table>
        </div>
    </div>

    </div>

</div>

</div>

{%  endblock %}", "administration/hebergement/management.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/hebergement/management.html.twig");
    }
}
