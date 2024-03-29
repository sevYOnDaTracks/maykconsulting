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

/* administration/user_profil.html.twig */
class __TwigTemplate_7647e153fd277c242d90918653e450ef extends Template
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
        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/user_profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<br>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow mb-3\">
\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t<p class=\"text-secondary m-0 fw-bold\" align=\"center\">MES INFORMATIONS</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "isVerified", [], "any", false, false, false, 14)) {
            // line 15
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tvotre compte n'est pas vérifié.\tVous avez reçu un mail de verification dans votre boite mail indiqué ! Vérifier également les spams
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-modification-user"], "method", false, false, false, 21))) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-modification-user"], "method", false, false, false, 23)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre modification a été effectuée !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-delete-avatar"], "method", false, false, false, 29))) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success-delete-avatar"], "method", false, false, false, 31)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre photo d'identité a été retirée !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité :
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_avatar");
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre avatar ? Cette action est irréversible.');\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "getAvatar", [], "method", false, false, false, 45)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "avatar", [], "any", false, false, false, 47))), "html", null, true);
            echo "\" alt=\"Avatar\" class=\"img-fluid rounded-circle\" style=\"max-width: 120px\" ;>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "getAvatar", [], "method", false, false, false, 53)), "html", null, true);
            echo "\" class=\"btn btn-warning \" download=\"avatar.png\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<p>Aucune photo</p>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_avatar"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        echo "\" enctype=\"multipart/form-data\">


\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control text-dark\" type=\"email\" id=\"email\" placeholder=\"user@example.com\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 78), "getEmail", [], "method", false, false, false, 78), "html", null, true);
        echo "\" name=\"email\" disabled>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"first_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Nom</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"first_name\" placeholder=\"John\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 89), "getName", [], "method", false, false, false, 89), "html", null, true);
        echo "\" name=\"name\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Prenoms
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Doe\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 98), "getLastName", [], "method", false, false, false, 98), "html", null, true);
        echo "\" name=\"lastName\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Numéro de téléphone
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 107), "getPhone", [], "method", false, false, false, 107), "html", null, true);
        echo "\" name=\"phone\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Date de Naissance
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"date\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 116), "getDateOfBirth", [], "method", false, false, false, 116), "Y-m-d"), "html", null, true);
        echo "\" name=\"dateOfBirth\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Niveau d'etude actuel
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select text-dark\" aria-label=\"Defaultselectexample\" name=\"schoolLevel\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 129), "getSchoolLevel", [], "method", false, false, false, 129), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 1\">BAC +1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 2\">BAC +2</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 3\">BAC +3</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 4\">BAC +4</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 5\">BAC +5</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark\" style=\"width:100%; background-color: rgb(0, 0, 62);\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t\t\tEnregistrer <i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"modal fade  \" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Confirmation
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSouhaitez-vous réellement enregistrer les modifications ?
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div><!-- Modal -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/user_profil.html.twig";
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
        return array (  232 => 129,  216 => 116,  204 => 107,  192 => 98,  180 => 89,  166 => 78,  152 => 67,  141 => 60,  137 => 58,  129 => 53,  120 => 47,  117 => 46,  115 => 45,  111 => 44,  102 => 37,  93 => 31,  90 => 30,  87 => 29,  78 => 23,  75 => 22,  72 => 21,  64 => 15,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/user_profil.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/administration/user_profil.html.twig");
    }
}
