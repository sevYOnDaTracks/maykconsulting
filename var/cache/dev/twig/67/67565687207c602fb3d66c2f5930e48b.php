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

/* administration/hebergement/index.html.twig */
class __TwigTemplate_fdfd8726a5cb1395326fcd733a6a8e60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/hebergement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/hebergement/index.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/hebergement/index.html.twig", 1);
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

        echo "Volet Hebergement - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    <h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
        Hébergement
        <i class=\"fas fa-building\"></i>
    </h1>
    ";
        // line 14
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "hebergement", [], "any", false, false, false, 14))) {
            // line 15
            echo "    <br>


    <div class=\"card animate__animated animate__fadeInLeft\">
        <div class=\"card-header  fw-bold text-xs text-uppercase\">
            Hebergement
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title \">Soumettre une demande</h5>
            <p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de document de logement puis de la soumettre par la suite . Attention nous ne vous fournissons que des documents officiel.Il sera donc preferable d'envisagé d'avoir une alternative une fois votre arrivé en france. Ces documents vous aiderons à avoir votre Visa Etude</p>
            <button type=\"button\" class=\"btn btn-dark text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button>
        </div>
    </div>


    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">

                    <form method=\"post\" action=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_new");
            echo "\" enctype=\"multipart/form-data\">
                        <p class=\"text-danger\">
                            <strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf ou au format image et lisible .<br>
                                <p class=\"text-dark\">* Lien utile pour convertion :
                                    <a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a>
                                </p>
                            </strong>
                        </p>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
                            <select name=\"pays\" class=\"form-select form-select mb-3\">
                                <option selected>Choisissez le pays !</option>
                                <option value=\"France\">France</option>
                                <option value=\"Canada\">Canada</option>
                                <option value=\"Maroc\">Maroc</option>
                                <option value=\"USA\">USA</option>
                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
                            <Input name=\"ville\" type=\"text\" class=\"form-control\" required>
                        </div>

                        ";
            // line 64
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "passport", [], "any", false, false, false, 64)) {
                // line 65
                echo "
                            <div class=\"mb-3\">
                                <label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
                                <input name=\"pathPassport\" type=\"file\" class=\"form-control\">
                            </div>

                        ";
            } else {
                // line 72
                echo "                            <div class=\"mb-3 text-dark\">
                                Votre Passport : Nous l'avons déja
                                <a target=\"blank\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "getPassport", [], "method", false, false, false, 74))), "html", null, true);
                echo "\" class=\" ml-3\">ici</a>
                                . Vous pouvez toujours le remplacer dans l'onglet
                                <a target=\"blank\" href=\"";
                // line 76
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\">Mon Profil
                                </a>
                            </div>
                        ";
            }
            // line 80
            echo "
                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
                            <input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
                            <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"Facultatif ...\"></textarea>
                        </div>

                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
                            <label class=\"form-check-label text-dark\" for=\"invalidCheck\">
                                Je certifie l'authenticité de mes documents et des informations que j'ai fournis
                            </label>
                            <div class=\"invalid-feedback\">
                                Vous devez accepter nos conditions.
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-dark\">Soumettre</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 111
            echo "
    ";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "hebergement", [], "any", false, false, false, 112), "statutDemande", [], "any", false, false, false, 112) == 0)) {
                // line 113
                echo "
        <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
            <div class=\"card-header  fw-bold text-xs text-uppercase\">
                Etat de la demande
            </div>
            <div class=\"card-body\">
                <p class=\"text-dark\">
                    <strong class=\"text-danger fw-bold text-xs text-uppercase\">
                        En attente de paiement</strong>
                <div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    <div class=\"progress-bar bg-danger\" style=\"width: 25%\"></div>
                </div>
                </p>
                <p>
                    Veuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

                <a style=\"text-align: center\" href=\"";
                // line 129
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_hebergement");
                echo "\" class=\"btn btn-dark \">
                    <i class=\"fas fa-download\"></i>
                    Télecharger le devis</a>

            </div>
        </div>
        ";
            }
            // line 136
            echo "
    ";
        }
        // line 138
        echo "    </div>
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
        return "administration/hebergement/index.html.twig";
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
        return array (  252 => 138,  248 => 136,  238 => 129,  220 => 113,  218 => 112,  215 => 111,  182 => 80,  175 => 76,  170 => 74,  166 => 72,  157 => 65,  155 => 64,  127 => 39,  101 => 15,  99 => 14,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block title %}Volet Hebergement - {{ app.user.name }}{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    <h1 align=\"center\" class=\"text-uppercase text-xl text-uppercase  fw-bold animate__animated animate__fadeInLeft\">
        Hébergement
        <i class=\"fas fa-building\"></i>
    </h1>
    {% if app.user.hebergement is  null %}
    <br>


    <div class=\"card animate__animated animate__fadeInLeft\">
        <div class=\"card-header  fw-bold text-xs text-uppercase\">
            Hebergement
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title \">Soumettre une demande</h5>
            <p class=\"card-text\">En cliquant sur ce bouton vous auriez la possibilité de créer une demande de document de logement puis de la soumettre par la suite . Attention nous ne vous fournissons que des documents officiel.Il sera donc preferable d'envisagé d'avoir une alternative une fois votre arrivé en france. Ces documents vous aiderons à avoir votre Visa Etude</p>
            <button type=\"button\" class=\"btn btn-dark text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je demande !</button>
        </div>
    </div>


    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5 fw-bold text-xs text-uppercase text-dark\" id=\"exampleModalLabel\" align=\"center\">Formulaire de demande</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">

                    <form method=\"post\" action=\"{{ path('app_garant_new') }}\" enctype=\"multipart/form-data\">
                        <p class=\"text-danger\">
                            <strong>Toutes les informations sont obligatoires . Excepté du champ \"Autres informations\" . Pour les pieces jointes nous prenons uniquement les fichiers de type pdf ou au format image et lisible .<br>
                                <p class=\"text-dark\">* Lien utile pour convertion :
                                    <a href=\"https://www.ilovepdf.com/fr\" target=\"blank\">IlovePDF</a>
                                </p>
                            </strong>
                        </p>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Le pays souhaité :</label>
                            <select name=\"pays\" class=\"form-select form-select mb-3\">
                                <option selected>Choisissez le pays !</option>
                                <option value=\"France\">France</option>
                                <option value=\"Canada\">Canada</option>
                                <option value=\"Maroc\">Maroc</option>
                                <option value=\"USA\">USA</option>
                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">La ville :</label>
                            <Input name=\"ville\" type=\"text\" class=\"form-control\" required>
                        </div>

                        {% if not  app.user.passport %}

                            <div class=\"mb-3\">
                                <label for=\"recipient-name\" class=\"col-form-label\">Votre Passeport  :</label>
                                <input name=\"pathPassport\" type=\"file\" class=\"form-control\">
                            </div>

                        {% else %}
                            <div class=\"mb-3 text-dark\">
                                Votre Passport : Nous l'avons déja
                                <a target=\"blank\" href=\"{{ asset('uploads/passport/' ~ app.user.getPassport()) }}\" class=\" ml-3\">ici</a>
                                . Vous pouvez toujours le remplacer dans l'onglet
                                <a target=\"blank\" href=\"{{ path('app_user_profil')}}\">Mon Profil
                                </a>
                            </div>
                        {% endif %}

                        <div class=\"mb-3\">
                            <label for=\"recipient-name\" class=\"col-form-label\">Votre Attestation d'acceptation :</label>
                            <input name=\"pathAttestationAdmission\" type=\"file\" class=\"form-control\" id=\"inputGroupFile01\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"message-text\" class=\"col-form-label\">Autres informations :</label>
                            <textarea name=\"othersInformations\" class=\"form-control\" placeholder=\"Facultatif ...\"></textarea>
                        </div>

                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
                            <label class=\"form-check-label text-dark\" for=\"invalidCheck\">
                                Je certifie l'authenticité de mes documents et des informations que j'ai fournis
                            </label>
                            <div class=\"invalid-feedback\">
                                Vous devez accepter nos conditions.
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-dark\">Soumettre</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {% else %}

    {% if app.user.hebergement.statutDemande == 0 %}

        <div class=\"card shadow mb-3 animate__animated animate__fadeInLeft\">
            <div class=\"card-header  fw-bold text-xs text-uppercase\">
                Etat de la demande
            </div>
            <div class=\"card-body\">
                <p class=\"text-dark\">
                    <strong class=\"text-danger fw-bold text-xs text-uppercase\">
                        En attente de paiement</strong>
                <div class=\"progress\" role=\"progressbar\" aria-label=\"Success example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    <div class=\"progress-bar bg-danger\" style=\"width: 25%\"></div>
                </div>
                </p>
                <p>
                    Veuillez effectuer le paiement afin que nous puissions traité votre demande .</p>

                <a style=\"text-align: center\" href=\"{{ path('app_facture_hebergement')}}\" class=\"btn btn-dark \">
                    <i class=\"fas fa-download\"></i>
                    Télecharger le devis</a>

            </div>
        </div>
        {% endif %}

    {%  endif %}
    </div>
    </div>
{% endblock %}
", "administration/hebergement/index.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/hebergement/index.html.twig");
    }
}
