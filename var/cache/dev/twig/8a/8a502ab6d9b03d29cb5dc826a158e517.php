<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* administration/hebergement/management.html.twig */
class __TwigTemplate_a3d08160dd7197f11c504f2d8676c441 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "
    <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
        <h3 class=\" mb-0 text-uppercase text-dark fw-bold animate__animated animate__fadeInLeft\">Mes dossiers : Hébergement
        </h3>
        <a class=\"btn btn-dark btn-sm d-none d-sm-inline-block animate__animated animate__fadeInRight\" role=\"button\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_data_hebergement");
        yield "\">
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["enAttenteDePaiement"]) || array_key_exists("enAttenteDePaiement", $context) ? $context["enAttenteDePaiement"] : (function () { throw new RuntimeError('Variable "enAttenteDePaiement" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "</span>
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nombreEncours"]) || array_key_exists("nombreEncours", $context) ? $context["nombreEncours"] : (function () { throw new RuntimeError('Variable "nombreEncours" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</span>
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nombreTerminee"]) || array_key_exists("nombreTerminee", $context) ? $context["nombreTerminee"] : (function () { throw new RuntimeError('Variable "nombreTerminee" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "</span>
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nombreCloturer"]) || array_key_exists("nombreCloturer", $context) ? $context["nombreCloturer"] : (function () { throw new RuntimeError('Variable "nombreCloturer" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "</span>
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
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 94))) {
            // line 95
            yield "        <div class=\"alert alert-success animate__animated animate__fadeInLeft\">
            ";
            // line 96
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 96)), "html", null, true);
            yield "
            <div align=\"center\">
                Votre mail a été envoyé avec succes !
            </div>
        </div>
        <br>

    ";
        }
        // line 104
        yield "
    ";
        // line 105
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 105))) {
            // line 106
            yield "        <div class=\"alert alert-success animate__animated animate__fadeInTop\">
            ";
            // line 107
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "flashes", ["success-edit"], "method", false, false, false, 107)), "html", null, true);
            yield "
            <div align=\"center\">
                Modification effectué avec succes !
            </div>
        </div>
        <br>

    ";
        }
        // line 115
        yield "    <div class=\"card shadow \">
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["EnAttentes"]) || array_key_exists("EnAttentes", $context) ? $context["EnAttentes"] : (function () { throw new RuntimeError('Variable "EnAttentes" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergementEnAttente"]) {
            // line 135
            yield "                    <tr>
                        <td>
                            ";
            // line 137
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 137), "avatar", [], "any", false, false, false, 137))) {
                // line 138
                yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 138), "avatar", [], "any", false, false, false, 138))), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 138), "getName", [], "method", false, false, false, 138), "html", null, true);
                yield "
                            ";
            } else {
                // line 140
                yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                ";
                // line 141
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 141), "getName", [], "method", false, false, false, 141), "html", null, true);
                yield "
                            ";
            }
            // line 143
            yield "                        </td>
                        <td>";
            // line 144
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getPays", [], "method", false, false, false, 144), "html", null, true);
            yield "</td>
                        <td>";
            // line 145
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 145), "getPhone", [], "method", false, false, false, 145), "html", null, true);
            yield "</td>
                        <td>";
            // line 146
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getDateDemande", [], "method", false, false, false, 146), "d/m/Y"), "html", null, true);
            yield "
                            à
                            ";
            // line 148
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getDateDemande", [], "method", false, false, false, 148), "H:i"), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 150
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getJustificatifPaiement", [], "method", false, false, false, 150)) {
                // line 151
                yield "                                <span style=\"color: #00b779; \">Oui</span>
                            ";
            } else {
                // line 153
                yield "                                <span style=\"color: #bb2d3b\">Non</span>
                            ";
            }
            // line 155
            yield "                        </td>
                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 157
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 157), "html", null, true);
            yield "\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 161
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 161), "html", null, true);
            yield "\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa";
            // line 166
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 166), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"";
            // line 174
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_envoyez_mail");
            yield "\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 177
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "any", false, false, false, 177), "getEmail", [], "method", false, false, false, 177), "html", null, true);
            yield "\" required>
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 200), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 style=\"text-align: center\" class=\"modal-title fs-5  text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>";
            // line 205
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 205), "getName", [], "method", false, false, false, 205), "html", null, true);
            yield "
                                                    ";
            // line 206
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 206), "getLastName", [], "method", false, false, false, 206), "html", null, true);
            yield "</strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"";
            // line 211
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "id", [], "any", false, false, false, 211)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\">

                                                <table class=\"table table-borderless\">
                                                    <tr>
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                        <td>
                                                            <select name=\"pays\" id=\"pays\" class=\"form-select\">
                                                                <option value=\"";
            // line 218
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getPays", [], "method", false, false, false, 218), "html", null, true);
            yield "\" selected>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getPays", [], "method", false, false, false, 218), "html", null, true);
            yield "</option>
                                                                <option value=\"France\">France</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
                                                        <td>
                                                            <input value=\"";
            // line 226
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getVilleEtude", [], "method", false, false, false, 226), "html", null, true);
            yield "\" name=\"ville\" id=\"ville\" type=\"text\" class=\"form-control\">
                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                        <td>
                                                            <select name=\"statutDemande\" id=\"statutDemande\" class=\"form-select\">
                                                                <option value=\"";
            // line 233
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getStatutDemande", [], "method", false, false, false, 233), "html", null, true);
            yield "\" selected>En attente de paiement</option>
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
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getHebergementFile", [], "method", false, false, false, 242)) {
                // line 243
                yield "                                                                <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                <span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents d'hebergement au client un seul PDF qui regroupe Tout </span>
                                                            ";
            } else {
                // line 246
                yield "                                                                <div class=\"fw-bold text-xs  mb-2\">
                                                                    <a href=\"";
                // line 247
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getHebergementFile", [], "method", false, false, false, 247))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 247), "getName", [], "method", false, false, false, 247), "html", null, true);
                yield "_HebergementFile\">
                                                                        Télécharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            }
            // line 252
            yield "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                        <td>
                                                            ";
            // line 257
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 257), "getPassport", [], "method", false, false, false, 257)) {
                // line 258
                yield "                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"";
                // line 259
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 259), "getPassport", [], "method", false, false, false, 259))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 259), "getName", [], "method", false, false, false, 259), "html", null, true);
                yield "_Passeport\">
                                                                        Télecharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            } else {
                // line 264
                yield "                                                                <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                            ";
            }
            // line 266
            yield "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                        <td>
                                                            ";
            // line 271
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getPathAdmissionFile", [], "any", false, false, false, 271)) {
                // line 272
                yield "                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"";
                // line 273
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "pathAdmissionFile", [], "any", false, false, false, 273))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 273), "getName", [], "method", false, false, false, 273), "html", null, true);
                yield "_Attestation_Admission\">
                                                                        Télecharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            } else {
                // line 278
                yield "                                                                <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                            ";
            }
            // line 280
            yield "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                        <td>
                                                            ";
            // line 285
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getJustificatifPaiement", [], "any", false, false, false, 285)) {
                // line 286
                yield "                                                                <div class=\"fw-bold text-xs \">
                                                                    <a href=\"";
                // line 287
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "justificatifPaiement", [], "any", false, false, false, 287))), "html", null, true);
                yield "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getUser", [], "method", false, false, false, 287), "getName", [], "method", false, false, false, 287), "html", null, true);
                yield "_justificatifPaiement\">
                                                                        Télécharger <i class=\"fas fa-download\"></i>
                                                                    </a>
                                                                </div>
                                                            ";
            } else {
                // line 292
                yield "                                                                <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                            ";
            }
            // line 294
            yield "                                                        </td>
                                                    </tr>
                                                    <tr style=\"padding-top: 20px;\">
                                                        <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                        <td>
                                                            <span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 299
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getLastUpdate", [], "method", false, false, false, 299), "d/m/Y"), "html", null, true);
            yield " à ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getLastUpdate", [], "method", false, false, false, 299), "H:m:s"), "html", null, true);
            yield "</span>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 306
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergementEnAttente"], "getInformations", [], "method", false, false, false, 306), "html", null, true);
            yield "</textarea>
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
        yield "            </tbody>
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["EnCours"]) || array_key_exists("EnCours", $context) ? $context["EnCours"] : (function () { throw new RuntimeError('Variable "EnCours" does not exist.', 357, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 358
            yield "                    <tr>
                        <td>
                            ";
            // line 360
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 360), "avatar", [], "any", false, false, false, 360))) {
                // line 361
                yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "user", [], "any", false, false, false, 361), "avatar", [], "any", false, false, false, 361))), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 361), "getName", [], "method", false, false, false, 361), "html", null, true);
                yield "
                            ";
            } else {
                // line 363
                yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                ";
                // line 364
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 364), "getName", [], "method", false, false, false, 364), "html", null, true);
                yield "
                            ";
            }
            // line 366
            yield "                        </td>
                        <td>";
            // line 367
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 367), "html", null, true);
            yield "</td>
                        <td>";
            // line 368
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 368), "getPhone", [], "method", false, false, false, 368), "html", null, true);
            yield "</td>
                        <td>";
            // line 369
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 369), "d-m-Y"), "html", null, true);
            yield "
                            à
                            ";
            // line 371
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 371), "H:i"), "html", null, true);
            yield "
                        </td>
                        <th>";
            // line 373
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "method", false, false, false, 373)) {
                // line 374
                yield "                                <span style=\"color: #00b779; \">Oui</span>
                            ";
            } else {
                // line 376
                yield "                                <span style=\"color: #bb2d3b\">Non</span>
                            ";
            }
            // line 377
            yield "</th>

                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 380
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 380), "html", null, true);
            yield "\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 384
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 384), "html", null, true);
            yield "\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa";
            // line 389
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 389), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"";
            // line 397
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_envoyez_mail");
            yield "\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 400
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "any", false, false, false, 400), "getEmail", [], "method", false, false, false, 400), "html", null, true);
            yield "\" required>
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 423), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>";
            // line 428
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 428), "getName", [], "method", false, false, false, 428), "html", null, true);
            yield "
                                                    ";
            // line 429
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 429), "getLastName", [], "method", false, false, false, 429), "html", null, true);
            yield "<strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"";
            // line 434
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 434)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\">

                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-borderless\">
                                                        <tr>
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                            <td>
                                                                <select name=\"pays\" class=\"form-select\">
                                                                    <option value=\"";
            // line 442
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 442), "html", null, true);
            yield "\" selected>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 442), "html", null, true);
            yield "</option>
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getVilleEtude", [], "method", false, false, false, 451), "html", null, true);
            yield "\" name=\"ville\" type=\"text\" class=\"form-control\">
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                            <td>
                                                                <select name=\"statutDemande\" class=\"form-select\">
                                                                    <option value=\"";
            // line 458
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getStatutDemande", [], "method", false, false, false, 458), "html", null, true);
            yield "\" selected>En cours de traitement</option>
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
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 467)) {
                // line 468
                yield "                                                                    <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                    <span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents d'hebergement au client un seul PDF qui regroupe Tout </span>
                                                                ";
            } else {
                // line 471
                yield "                                                                    <div class=\"fw-bold text-xs  mb-2\">
                                                                        <a href=\"";
                // line 472
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 472))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 472), "getName", [], "method", false, false, false, 472), "html", null, true);
                yield "_HebergementFile\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            }
            // line 477
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                            <td>
                                                                ";
            // line 482
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 482), "getPassport", [], "method", false, false, false, 482)) {
                // line 483
                yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 484
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 484), "getPassport", [], "method", false, false, false, 484))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 484), "getName", [], "method", false, false, false, 484), "html", null, true);
                yield "_Passeport\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 489
                yield "                                                                    <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                                ";
            }
            // line 491
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                            <td>
                                                                ";
            // line 496
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPathAdmissionFile", [], "any", false, false, false, 496)) {
                // line 497
                yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 498
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "pathAdmissionFile", [], "any", false, false, false, 498))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 498), "getName", [], "method", false, false, false, 498), "html", null, true);
                yield "_Attestation_Admission\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 503
                yield "                                                                    <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                                ";
            }
            // line 505
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                            <td>
                                                                ";
            // line 510
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "any", false, false, false, 510)) {
                // line 511
                yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 512
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "justificatifPaiement", [], "any", false, false, false, 512))), "html", null, true);
                yield "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 512), "getName", [], "method", false, false, false, 512), "html", null, true);
                yield "_justificatifPaiement\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 517
                yield "                                                                    <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                                ";
            }
            // line 519
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                            <td>
                                                                <span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 524
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 524), "d/m/Y"), "html", null, true);
            yield " à ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 524), "H:m:s"), "html", null, true);
            yield "</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>



                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 533
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getInformations", [], "method", false, false, false, 533), "html", null, true);
            yield "</textarea>
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
        yield "            </tbody>
            </table>
        </div>
    </div>

    </div>

    <br>

    <div class=\"card shadow\">
        <div class=\"card-header py-3\">
            <p class=\"text-success m-0 fw-bold text-xs text-uppercase \">Liste des demandes terminés
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
        // line 582
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Termine"]) || array_key_exists("Termine", $context) ? $context["Termine"] : (function () { throw new RuntimeError('Variable "Termine" does not exist.', 582, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 583
            yield "                    <tr>
                        <td>
                            ";
            // line 585
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 585), "avatar", [], "any", false, false, false, 585))) {
                // line 586
                yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "user", [], "any", false, false, false, 586), "avatar", [], "any", false, false, false, 586))), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 586), "getName", [], "method", false, false, false, 586), "html", null, true);
                yield "
                            ";
            } else {
                // line 588
                yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                ";
                // line 589
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 589), "getName", [], "method", false, false, false, 589), "html", null, true);
                yield "
                            ";
            }
            // line 591
            yield "                        </td>
                        <td>";
            // line 592
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "any", false, false, false, 592), "html", null, true);
            yield "</td>
                        <td>";
            // line 593
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 593), "getPhone", [], "method", false, false, false, 593), "html", null, true);
            yield "</td>
                        <td>";
            // line 594
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 594), "d-m-Y"), "html", null, true);
            yield "
                            à
                            ";
            // line 596
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 596), "H:i"), "html", null, true);
            yield "
                        </td>
                        <td>";
            // line 598
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "method", false, false, false, 598)) {
                // line 599
                yield "                                <span style=\"color: #00b779; \">Oui</span>
                            ";
            } else {
                // line 601
                yield "                                <span style=\"color: #bb2d3b\">Non</span>
                            ";
            }
            // line 602
            yield "</td>

                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 605
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 605), "html", null, true);
            yield "\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 609
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 609), "html", null, true);
            yield "\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa";
            // line 614
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 614), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"";
            // line 622
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_envoyez_mail");
            yield "\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
            // line 625
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "any", false, false, false, 625), "getEmail", [], "method", false, false, false, 625), "html", null, true);
            yield "\" required>
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
            // line 648
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 648), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>";
            // line 653
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 653), "getName", [], "method", false, false, false, 653), "html", null, true);
            yield "
                                                    ";
            // line 654
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 654), "getLastName", [], "method", false, false, false, 654), "html", null, true);
            yield "<strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"";
            // line 659
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 659)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" >

                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-borderless\">
                                                        <tr>
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                            <td>
                                                                <select name=\"pays\" class=\"form-select\">
                                                                    <option value=\"";
            // line 667
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 667), "html", null, true);
            yield "\" selected>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 667), "html", null, true);
            yield "</option>
                                                                    <option value=\"France\">France</option>
                                                                    <option value=\"Canada\">Canada</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
                                                            <td>
                                                                <input value=\"";
            // line 676
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getVilleEtude", [], "method", false, false, false, 676), "html", null, true);
            yield "\" name=\"ville\" type=\"text\" class=\"form-control\">
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                            <td>
                                                                <select name=\"statutDemande\" class=\"form-select\">
                                                                    <option value=\"";
            // line 683
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getStatutDemande", [], "method", false, false, false, 683), "html", null, true);
            yield "\" selected>Traitement terminé</option>
                                                                    <option value=\"O\">En attente de paiement</option>
                                                                    <option value=\"1\">En cours de traitement</option>
                                                                    <option value=\"3\">Clôturer la demande</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Hébergement </th>
                                                            <td>
                                                                ";
            // line 693
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 693)) {
                // line 694
                yield "                                                                    <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                    <span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents d'hébergement au client un seul PDF qui regroupe Tout </span>
                                                                ";
            } else {
                // line 697
                yield "                                                                    <div class=\"fw-bold text-xs  mb-2\">
                                                                        <a href=\"";
                // line 698
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 698))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 698), "getName", [], "method", false, false, false, 698), "html", null, true);
                yield "_HebergementFile\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            }
            // line 703
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                            <td>
                                                                ";
            // line 708
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 708), "getPassport", [], "method", false, false, false, 708)) {
                // line 709
                yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 710
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 710), "getPassport", [], "method", false, false, false, 710))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 710), "getName", [], "method", false, false, false, 710), "html", null, true);
                yield "_Passeport\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 715
                yield "                                                                    <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                                ";
            }
            // line 717
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                            <td>
                                                                ";
            // line 722
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPathAdmissionFile", [], "any", false, false, false, 722)) {
                // line 723
                yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 724
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "pathAdmissionFile", [], "any", false, false, false, 724))), "html", null, true);
                yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 724), "getName", [], "method", false, false, false, 724), "html", null, true);
                yield "_Attestation_Admission\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 729
                yield "                                                                    <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                                ";
            }
            // line 731
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                            <td>
                                                                ";
            // line 736
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "any", false, false, false, 736)) {
                // line 737
                yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                // line 738
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "justificatifPaiement", [], "any", false, false, false, 738))), "html", null, true);
                yield "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 738), "getName", [], "method", false, false, false, 738), "html", null, true);
                yield "_justificatifPaiement\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
            } else {
                // line 743
                yield "                                                                    <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                                ";
            }
            // line 745
            yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                            <td>
                                                                <span class=\"text-danger text-xs text-uppercase fw-bold\">";
            // line 750
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 750), "d/m/Y"), "html", null, true);
            yield " à ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 750), "H:m:s"), "html", null, true);
            yield "</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>



                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
            // line 759
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getInformations", [], "method", false, false, false, 759), "html", null, true);
            yield "</textarea>
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
        // line 779
        yield "            </tbody>
            </table>
        </div>
    </div>

    </div>

    <br>

    <div class=\"card shadow\">
        <div class=\"card-header py-3\">
            <p class=\"text-danger m-0 fw-bold text-xs text-uppercase \">Liste des demandes annulées (clôturer)
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
        // line 807
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["Cloturer"]) || array_key_exists("Cloturer", $context) ? $context["Cloturer"] : (function () { throw new RuntimeError('Variable "Cloturer" does not exist.', 807, $this->source); })())) > 0)) {
            // line 808
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Cloturer"]) || array_key_exists("Cloturer", $context) ? $context["Cloturer"] : (function () { throw new RuntimeError('Variable "Cloturer" does not exist.', 808, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
                // line 809
                yield "                    <tr>
                        <td>
                            ";
                // line 811
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 811), "avatar", [], "any", false, false, false, 811))) {
                    // line 812
                    yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "user", [], "any", false, false, false, 812), "avatar", [], "any", false, false, false, 812))), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 812), "getName", [], "method", false, false, false, 812), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 814
                    yield "                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                ";
                    // line 815
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 815), "getName", [], "method", false, false, false, 815), "html", null, true);
                    yield "
                            ";
                }
                // line 817
                yield "                        </td>
                        <td>";
                // line 818
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 818), "html", null, true);
                yield "</td>
                        <td>";
                // line 819
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 819), "getPhone", [], "method", false, false, false, 819), "html", null, true);
                yield "</td>
                        <td>";
                // line 820
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 820), "d-m-Y"), "html", null, true);
                yield "
                            à
                            ";
                // line 822
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getDateDemande", [], "method", false, false, false, 822), "H:i"), "html", null, true);
                yield "
                        </td>
                        <td>";
                // line 824
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "method", false, false, false, 824)) {
                    // line 825
                    yield "                                <span style=\"color: #00b779; \">Oui</span>
                            ";
                } else {
                    // line 827
                    yield "                                <span style=\"color: #bb2d3b\">Non</span>
                            ";
                }
                // line 828
                yield "</td>
                        <td>
                            <button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
                // line 830
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 830), "html", null, true);
                yield "\">
                                <i class=\"fas fa-edit\"></i>

                            </button>
                            <button class=\"btn btn-info\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
                // line 834
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 834), "html", null, true);
                yield "\">
                                <i class=\"fas fa-reply\"></i>
                            </button>


                            <div class=\"modal fade\" id=\"exampleModa";
                // line 839
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 839), "html", null, true);
                yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title  fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Envoyez message</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form method=\"post\" action=\"";
                // line 847
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_envoyez_mail");
                yield "\">
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark \">Envoyez à :</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"recipient-name2\" value=\"";
                // line 850
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "any", false, false, false, 850), "getEmail", [], "method", false, false, false, 850), "html", null, true);
                yield "\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"recipient-name\" class=\"col-form-label text-dark\">Objet :</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\" name=\"objet\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"message-text\" class=\"col-form-label text-dark\">Message:</label>
                                                    <textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
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
                // line 873
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 873), "html", null, true);
                yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header text-center\">
                                            <h1 class=\"modal-title fs-5 text-dark text-center\" id=\"exampleModalLabel\">
                                                <strong>";
                // line 878
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 878), "getName", [], "method", false, false, false, 878), "html", null, true);
                yield "
                                                    ";
                // line 879
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 879), "getLastName", [], "method", false, false, false, 879), "html", null, true);
                yield "<strong></h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">

                                            <form method=\"post\" action=\"";
                // line 884
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 884)]), "html", null, true);
                yield "\" enctype=\"multipart/form-data\">

                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-borderless\">
                                                        <tr>
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                            <td>
                                                                <select name=\"pays\" class=\"form-select\">
                                                                    <option value=\"";
                // line 892
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 892), "html", null, true);
                yield "\" selected>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPays", [], "method", false, false, false, 892), "html", null, true);
                yield "</option>
                                                                    <option value=\"France\">France</option>
                                                                    <option value=\"Canada\">Canada</option>
                                                                    <option value=\"Us\">Us</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Ville</th>
                                                            <td>
                                                                <input value=\"";
                // line 902
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getVilleEtude", [], "method", false, false, false, 902), "html", null, true);
                yield "\" name=\"ville\" type=\"text\" class=\"form-control\">
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">État de la demande</th>
                                                            <td>
                                                                <select name=\"statutDemande\" class=\"form-select\">
                                                                    <option value=\"";
                // line 909
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getStatutDemande", [], "method", false, false, false, 909), "html", null, true);
                yield "\" selected>Demande clôturée</option>
                                                                    <option value=\"0\">En attente de paiement</option>
                                                                    <option value=\"1\">En cours de traitement</option>
                                                                    <option value=\"2\">Traitement terminé</option>


                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Hébergement </th>
                                                            <td>
                                                                ";
                // line 921
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 921)) {
                    // line 922
                    yield "                                                                    <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                    <span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents d'hébergement au client un seul PDF qui regroupe Tout </span>
                                                                ";
                } else {
                    // line 925
                    yield "                                                                    <div class=\"fw-bold text-xs mb-2\">
                                                                        <a href=\"";
                    // line 926
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/hebergement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getHebergementFile", [], "method", false, false, false, 926))), "html", null, true);
                    yield "\" class=\"btn btn-light text-xs btn-sm \" download=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 926), "getName", [], "method", false, false, false, 926), "html", null, true);
                    yield "_HebergementFile\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
                }
                // line 931
                yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Passport</th>
                                                            <td>
                                                                ";
                // line 936
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 936), "getPassport", [], "method", false, false, false, 936)) {
                    // line 937
                    yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                    // line 938
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 938), "getPassport", [], "method", false, false, false, 938))), "html", null, true);
                    yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 938), "getName", [], "method", false, false, false, 938), "html", null, true);
                    yield "_Passeport\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
                } else {
                    // line 943
                    yield "                                                                    <p class=\"text-danger text-xs text-uppercase\">* L'utilisateur n'a pas joint de passport</p>
                                                                ";
                }
                // line 945
                yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Attestation d'admission</th>
                                                            <td>
                                                                ";
                // line 950
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getPathAdmissionFile", [], "any", false, false, false, 950)) {
                    // line 951
                    yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                    // line 952
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "pathAdmissionFile", [], "any", false, false, false, 952))), "html", null, true);
                    yield "\" class=\"btn btn-light btn-sm text-xs \" download=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 952), "getName", [], "method", false, false, false, 952), "html", null, true);
                    yield "_Attestation_Admission\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
                } else {
                    // line 957
                    yield "                                                                    <p class=\"text-danger\">* L'utilisateur n'a pas joint d'attestation d'acceptation</p>
                                                                ";
                }
                // line 959
                yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Justificatif de paiement </th>
                                                            <td>
                                                                ";
                // line 964
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getJustificatifPaiement", [], "any", false, false, false, 964)) {
                    // line 965
                    yield "                                                                    <div class=\"fw-bold text-xs \">
                                                                        <a href=\"";
                    // line 966
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/justificatif-de-paiement/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "justificatifPaiement", [], "any", false, false, false, 966))), "html", null, true);
                    yield "\" class=\"btn btn-light text-xs btn-sm\" download=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getUser", [], "method", false, false, false, 966), "getName", [], "method", false, false, false, 966), "html", null, true);
                    yield "_justificatifPaiement\">
                                                                            Télécharger <i class=\"fas fa-download\"></i>
                                                                        </a>
                                                                    </div>
                                                                ";
                } else {
                    // line 971
                    yield "                                                                    <input type=\"file\" name=\"justificatifPaiement\" class=\"form-control-sm \">
                                                                ";
                }
                // line 973
                yield "                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th><label for=\"lastUpdate\" class=\"form-label fw-bold text-xs text-uppercase text-black\">Dernière modification :</label></th>
                                                            <td>
                                                                <span class=\"text-danger text-xs text-uppercase fw-bold\">";
                // line 978
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 978), "d/m/Y"), "html", null, true);
                yield " à ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getLastUpdate", [], "method", false, false, false, 978), "H:m:s"), "html", null, true);
                yield "</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>



                                                <div class=\"\">
                                                    <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"L'utilisateur n'a rien écrit comme message ..\" disabled>";
                // line 987
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "getInformations", [], "method", false, false, false, 987), "html", null, true);
                yield "</textarea>
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
            // line 1007
            yield "
            ";
        } else {
            // line 1009
            yield "

            ";
        }
        // line 1012
        yield "            </tbody>
            </table>

        </div>


    </div>

    </div>

    <br><br>
</div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        return array (  1665 => 1012,  1660 => 1009,  1656 => 1007,  1630 => 987,  1616 => 978,  1609 => 973,  1605 => 971,  1595 => 966,  1592 => 965,  1590 => 964,  1583 => 959,  1579 => 957,  1569 => 952,  1566 => 951,  1564 => 950,  1557 => 945,  1553 => 943,  1543 => 938,  1540 => 937,  1538 => 936,  1531 => 931,  1521 => 926,  1518 => 925,  1513 => 922,  1511 => 921,  1496 => 909,  1486 => 902,  1471 => 892,  1460 => 884,  1452 => 879,  1448 => 878,  1440 => 873,  1414 => 850,  1408 => 847,  1397 => 839,  1389 => 834,  1382 => 830,  1378 => 828,  1374 => 827,  1370 => 825,  1368 => 824,  1363 => 822,  1358 => 820,  1354 => 819,  1350 => 818,  1347 => 817,  1342 => 815,  1339 => 814,  1331 => 812,  1329 => 811,  1325 => 809,  1320 => 808,  1318 => 807,  1288 => 779,  1262 => 759,  1248 => 750,  1241 => 745,  1237 => 743,  1227 => 738,  1224 => 737,  1222 => 736,  1215 => 731,  1211 => 729,  1201 => 724,  1198 => 723,  1196 => 722,  1189 => 717,  1185 => 715,  1175 => 710,  1172 => 709,  1170 => 708,  1163 => 703,  1153 => 698,  1150 => 697,  1145 => 694,  1143 => 693,  1130 => 683,  1120 => 676,  1106 => 667,  1095 => 659,  1087 => 654,  1083 => 653,  1075 => 648,  1049 => 625,  1043 => 622,  1032 => 614,  1024 => 609,  1017 => 605,  1012 => 602,  1008 => 601,  1004 => 599,  1002 => 598,  997 => 596,  992 => 594,  988 => 593,  984 => 592,  981 => 591,  976 => 589,  973 => 588,  965 => 586,  963 => 585,  959 => 583,  955 => 582,  924 => 553,  898 => 533,  884 => 524,  877 => 519,  873 => 517,  863 => 512,  860 => 511,  858 => 510,  851 => 505,  847 => 503,  837 => 498,  834 => 497,  832 => 496,  825 => 491,  821 => 489,  811 => 484,  808 => 483,  806 => 482,  799 => 477,  789 => 472,  786 => 471,  781 => 468,  779 => 467,  767 => 458,  757 => 451,  743 => 442,  732 => 434,  724 => 429,  720 => 428,  712 => 423,  686 => 400,  680 => 397,  669 => 389,  661 => 384,  654 => 380,  649 => 377,  645 => 376,  641 => 374,  639 => 373,  634 => 371,  629 => 369,  625 => 368,  621 => 367,  618 => 366,  613 => 364,  610 => 363,  602 => 361,  600 => 360,  596 => 358,  592 => 357,  562 => 329,  533 => 306,  521 => 299,  514 => 294,  510 => 292,  500 => 287,  497 => 286,  495 => 285,  488 => 280,  484 => 278,  474 => 273,  471 => 272,  469 => 271,  462 => 266,  458 => 264,  448 => 259,  445 => 258,  443 => 257,  436 => 252,  426 => 247,  423 => 246,  418 => 243,  416 => 242,  404 => 233,  394 => 226,  381 => 218,  371 => 211,  363 => 206,  359 => 205,  351 => 200,  325 => 177,  319 => 174,  308 => 166,  300 => 161,  293 => 157,  289 => 155,  285 => 153,  281 => 151,  279 => 150,  274 => 148,  269 => 146,  265 => 145,  261 => 144,  258 => 143,  253 => 141,  250 => 140,  242 => 138,  240 => 137,  236 => 135,  232 => 134,  211 => 115,  200 => 107,  197 => 106,  195 => 105,  192 => 104,  181 => 96,  178 => 95,  176 => 94,  159 => 80,  137 => 61,  115 => 42,  92 => 22,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
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

    <br>

    <div class=\"card shadow\">
        <div class=\"card-header py-3\">
            <p class=\"text-success m-0 fw-bold text-xs text-uppercase \">Liste des demandes terminés
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
                    {% for hebergement in Termine %}
                    <tr>
                        <td>
                            {% if hebergement.getUser().avatar is not empty %}
                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ hebergement.user.avatar) }}\">{{ hebergement.getUser().getName() }}
                            {% else %}
                                <img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
                                {{ hebergement.getUser().getName() }}
                            {% endif %}
                        </td>
                        <td>{{ hebergement.getPays }}</td>
                        <td>{{ hebergement.getUser().getPhone() }}</td>
                        <td>{{ hebergement.getDateDemande() | date('d-m-Y')}}
                            à
                            {{ hebergement.getDateDemande() | date('H:i')}}
                        </td>
                        <td>{% if hebergement.getJustificatifPaiement() %}
                                <span style=\"color: #00b779; \">Oui</span>
                            {% else %}
                                <span style=\"color: #bb2d3b\">Non</span>
                            {% endif %}</td>

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

                                            <form method=\"post\" action=\"{{ path('app_hebergement_update', {'id': hebergement.id}) }}\" enctype=\"multipart/form-data\" >

                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-borderless\">
                                                        <tr>
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Pays</th>
                                                            <td>
                                                                <select name=\"pays\" class=\"form-select\">
                                                                    <option value=\"{{ hebergement.getPays() }}\" selected>{{ hebergement.getPays() }}</option>
                                                                    <option value=\"France\">France</option>
                                                                    <option value=\"Canada\">Canada</option>
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
                                                                    <option value=\"{{ hebergement.getStatutDemande() }}\" selected>Traitement terminé</option>
                                                                    <option value=\"O\">En attente de paiement</option>
                                                                    <option value=\"1\">En cours de traitement</option>
                                                                    <option value=\"3\">Clôturer la demande</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Hébergement </th>
                                                            <td>
                                                                {% if not hebergement.getHebergementFile() %}
                                                                    <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                    <span class=\"text-primary bg-light text-center text-xs fw-bold text-xs\"> Ici pour affecter les documents d'hébergement au client un seul PDF qui regroupe Tout </span>
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

    <br>

    <div class=\"card shadow\">
        <div class=\"card-header py-3\">
            <p class=\"text-danger m-0 fw-bold text-xs text-uppercase \">Liste des demandes annulées (clôturer)
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
                    {% if Cloturer|length > 0 %}
                    {% for hebergement in Cloturer %}
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
                        <td>{% if hebergement.getJustificatifPaiement() %}
                                <span style=\"color: #00b779; \">Oui</span>
                            {% else %}
                                <span style=\"color: #bb2d3b\">Non</span>
                            {% endif %}</td>
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
                                                    <textarea class=\"form-control\" name=\"message\" id=\"message-text\" style=\"height: 200px;\"></textarea>
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
                                                                    <option value=\"Canada\">Canada</option>
                                                                    <option value=\"Us\">Us</option>
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
                                                                    <option value=\"{{ hebergement.getStatutDemande() }}\" selected>Demande clôturée</option>
                                                                    <option value=\"0\">En attente de paiement</option>
                                                                    <option value=\"1\">En cours de traitement</option>
                                                                    <option value=\"2\">Traitement terminé</option>


                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"padding-top: 20px;\">
                                                            <th class=\"form-label fw-bold text-xs text-uppercase text-black\">Hébergement </th>
                                                            <td>
                                                                {% if not hebergement.getHebergementFile() %}
                                                                    <input type=\"file\" name=\"hebergementFile\" class=\"form-control-sm\">
                                                                    <span class=\"text-primary bg-light text-center text- fw-bold text-xs\"> Ici pour affecter les documents d'hébergement au client un seul PDF qui regroupe Tout </span>
                                                                {% else %}
                                                                    <div class=\"fw-bold text-xs mb-2\">
                                                                        <a href=\"{{ asset('uploads/hebergement/' ~ hebergement.getHebergementFile() ) }}\" class=\"btn btn-light text-xs btn-sm \" download=\"{{ hebergement.getUser().getName() }}_HebergementFile\">
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

            {% else %}


            {% endif %}
            </tbody>
            </table>

        </div>


    </div>

    </div>

    <br><br>
</div>

</div>

{%  endblock %}", "administration/hebergement/management.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/hebergement/management.html.twig");
    }
}
