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
class __TwigTemplate_c041c0cda6947164b065c73e86405aa4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/user_profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/user_profil.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/user_profil.html.twig", 1);
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
        echo "\t<br>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow mb-3\">
\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t<p class=\"text-secondary m-0 fw-bold\" align=\"center\">MES INFORMATIONS PERSONNELLES</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "isVerified", [], "any", false, false, false, 14)) {
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success-modification-user"], "method", false, false, false, 21))) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["success-modification-user"], "method", false, false, false, 23)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre modification a été effectuée !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["success-delete-cni"], "method", false, false, false, 29))) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", ["success-delete-cni"], "method", false, false, false, 31)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre CNI a été rétirée avec success !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["success-importdocument-user"], "method", false, false, false, 37))) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["success-delete-cni"], "method", false, false, false, 39)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre importation s'est effectuée sans soucis !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["success-delete-avatar"], "method", false, false, false, 45))) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["success-delete-avatar"], "method", false, false, false, 47)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre photo d'identité a été retirée !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "avatar", [], "any", false, false, false, 53) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "passport", [], "any", false, false, false, 53))) {
            // line 54
            echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\" text-center alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t<strong>Tous les documents demandés doivent être joints à défaut nous ne pourrions traiter vos demandes  !</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité :
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_avatar");
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre avatar ? Cette action est irréversible.');\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "getAvatar", [], "method", false, false, false, 68)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "avatar", [], "any", false, false, false, 70))), "html", null, true);
            echo "\" alt=\"Avatar\" class=\"img-fluid rounded-circle\" style=\"max-width: 120px\" ;>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "getAvatar", [], "method", false, false, false, 76))), "html", null, true);
            echo "\" class=\"btn btn-warning\" download=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "getName", [], "method", false, false, false, 76) . "_Photo"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<p>Aucune photo</p>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_avatar"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 90
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
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "getEmail", [], "method", false, false, false, 101), "html", null, true);
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
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "getName", [], "method", false, false, false, 112), "html", null, true);
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
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "getLastName", [], "method", false, false, false, 121), "html", null, true);
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
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "getPhone", [], "method", false, false, false, 130), "html", null, true);
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
        // line 139
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "getDateOfBirth", [], "method", false, false, false, 139), "Y-m-d"), "html", null, true);
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
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152), "getSchoolLevel", [], "method", false, false, false, 152), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 1\">BAC +1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 2\">BAC +2</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 3\">BAC +3</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 4\">BAC +4</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 5\">BAC +5</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark\" style=\"width:100%;\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t\t\tEnregistrer
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
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

\t<div class=\"row mb-3\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow mb-3\">
\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t<p class=\"text-secondary m-0 fw-bold\" align=\"center\">IMPORTER DES DOCUMENTS</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update_document");
        echo "\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t";
        // line 207
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "user", [], "any", false, false, false, 207), "avatar", [], "any", false, false, false, 207)) {
            // line 208
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 216
        echo "\t\t\t\t\t\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216), "cni", [], "any", false, false, false, 216)) {
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Carte nationale d'identité (CNI)
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"cni\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 225
            echo "\t\t\t\t\t\t\t\t\t\t";
            // line 241
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 242
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 243
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [], "any", false, false, false, 243), "passport", [], "any", false, false, false, 243)) {
            // line 244
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Passport
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"passport\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 252
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 253
        echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t";
        // line 254
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "user", [], "any", false, false, false, 254), "avatar", [], "any", false, false, false, 254) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "user", [], "any", false, false, false, 254), "passport", [], "any", false, false, false, 254)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "user", [], "any", false, false, false, 254), "cni", [], "any", false, false, false, 254))) {
            // line 255
            echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\" text-center alert alert-success\">
\t\t\t\t\t\t\t\t\t\t<strong>Tous les documents demandés ont été renseignés , Merci <i class=\"fas fa-thumbs-up\"></i> !</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 261
        echo "\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white border-secondary btn-block\" style=\"width : 100%\">
\t\t\t\t\t\t\t\t\t\tImporter
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow mb-3\">
\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t<p class=\"text-secondary m-0 fw-bold\" align=\"center\">RECAPITUALTIF DE MES DOCUMENTS</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th scope=\"row\">Photo d'identité </th>
                        <td>
                            <div class=\"mb-3\">
                                ";
        // line 287
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "user", [], "any", false, false, false, 287), "avatar", [], "any", false, false, false, 287)) {
            // line 288
            echo "                                    <form method=\"POST\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_avatar");
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre avatar ? Cette action est irréversible.');\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></button>
                                        <a href=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "user", [], "any", false, false, false, 290), "getAvatar", [], "method", false, false, false, 290))), "html", null, true);
            echo "\" class=\"btn btn-light btn-sm ml-3\" download=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "user", [], "any", false, false, false, 290), "getName", [], "method", false, false, false, 290) . "_Photo"), "html", null, true);
            echo "\"><i class=\"fas fa-download\"></i></a>
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 291
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_avatar"), "html", null, true);
            echo "\">
                                    </form>
                                ";
        } else {
            // line 294
            echo "                                    <p class=\"text-danger\">A joindre</p>
                                ";
        }
        // line 296
        echo "                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Carte Nationale d'identité </th>
                        <td>
                            <div class=\"mb-3\">
                                ";
        // line 303
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "user", [], "any", false, false, false, 303), "cni", [], "any", false, false, false, 303)) {
            // line 304
            echo "                                    <form method=\"POST\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_cni");
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre CNI ? Cette action est irréversible.');\">
                                        ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 305, $this->source); })()), "user", [], "any", false, false, false, 305), "getCni", [], "method", false, false, false, 305)) {
                // line 306
                echo "                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></button>
                                            <a href=\"";
                // line 307
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cni/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "user", [], "any", false, false, false, 307), "getCni", [], "method", false, false, false, 307))), "html", null, true);
                echo "\" class=\"btn btn-secondary btn-sm ml-3\" download=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "user", [], "any", false, false, false, 307), "getName", [], "method", false, false, false, 307) . "_CNI"), "html", null, true);
                echo "\"><i class=\"fas fa-eye\"></i></a>
                                        ";
            } else {
                // line 309
                echo "                                            <p>Aucune CNI</p>
                                        ";
            }
            // line 311
            echo "                                        <input type=\"hidden\" name=\"_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("app_delete_cni"), "html", null, true);
            echo "\">
                                    </form>
                                ";
        } else {
            // line 314
            echo "                                    <p class=\"\" >Facultatif (Obligatoire si vous n'avez pas encore de passport)</p>
                                ";
        }
        // line 316
        echo "                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Passport </th>
                        <td>
                            <div class=\"mb-3\">
                                ";
        // line 323
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 323, $this->source); })()), "user", [], "any", false, false, false, 323), "passport", [], "any", false, false, false, 323)) {
            // line 324
            echo "                                    <form method=\"POST\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_passport");
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre passport ? Cette action est irréversible.');\">
                                        ";
            // line 325
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "user", [], "any", false, false, false, 325), "getPassport", [], "method", false, false, false, 325)) {
                // line 326
                echo "                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></button>
                                            <a href=\"";
                // line 327
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/passport/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 327, $this->source); })()), "user", [], "any", false, false, false, 327), "getPassport", [], "method", false, false, false, 327))), "html", null, true);
                echo "\" class=\"btn btn-light btn-sm ml-3\" download=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 327, $this->source); })()), "user", [], "any", false, false, false, 327), "getName", [], "method", false, false, false, 327) . "_Passport"), "html", null, true);
                echo "\"><i class=\"fas fa-download\"></i></a>
                                        ";
            } else {
                // line 329
                echo "                                            <p>Aucun Passport</p>
                                        ";
            }
            // line 331
            echo "                                        <input type=\"hidden\" name=\"_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("app_delete_passport"), "html", null, true);
            echo "\">
                                    </form>
                                ";
        } else {
            // line 334
            echo "                                    <p class=\"text-danger\">A joindre</p>
                                ";
        }
        // line 336
        echo "                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t
\t</div>
</div><!-- Modal -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  553 => 336,  549 => 334,  542 => 331,  538 => 329,  531 => 327,  528 => 326,  526 => 325,  521 => 324,  519 => 323,  510 => 316,  506 => 314,  499 => 311,  495 => 309,  488 => 307,  485 => 306,  483 => 305,  478 => 304,  476 => 303,  467 => 296,  463 => 294,  457 => 291,  451 => 290,  445 => 288,  443 => 287,  415 => 261,  407 => 255,  405 => 254,  402 => 253,  399 => 252,  389 => 244,  387 => 243,  384 => 242,  381 => 241,  379 => 225,  369 => 217,  366 => 216,  356 => 208,  354 => 207,  350 => 206,  293 => 152,  277 => 139,  265 => 130,  253 => 121,  241 => 112,  227 => 101,  213 => 90,  202 => 83,  198 => 81,  188 => 76,  179 => 70,  176 => 69,  174 => 68,  170 => 67,  161 => 60,  153 => 54,  150 => 53,  141 => 47,  138 => 46,  135 => 45,  126 => 39,  123 => 38,  120 => 37,  111 => 31,  108 => 30,  105 => 29,  96 => 23,  93 => 22,  90 => 21,  82 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block body %}
\t<br>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow mb-3\">
\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t<p class=\"text-secondary m-0 fw-bold\" align=\"center\">MES INFORMATIONS PERSONNELLES</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t{% if not app.user.isVerified %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tvotre compte n'est pas vérifié.\tVous avez reçu un mail de verification dans votre boite mail indiqué ! Vérifier également les spams
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.flashes('success-modification-user') is not empty %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t{{ app.flashes('success-modification-user')|first }}
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre modification a été effectuée !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.flashes('success-delete-cni') is not empty %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t{{ app.flashes('success-delete-cni')|first }}
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre CNI a été rétirée avec success !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.flashes('success-importdocument-user') is not empty %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t{{ app.flashes('success-delete-cni')|first }}
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre importation s'est effectuée sans soucis !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.flashes('success-delete-avatar') is not empty %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t{{ app.flashes('success-delete-avatar')|first }}
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\tVotre photo d'identité a été retirée !
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if not  app.user.avatar  or  not app.user.passport     %}
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\" text-center alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t<strong>Tous les documents demandés doivent être joints à défaut nous ne pourrions traiter vos demandes  !</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité :
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ path('app_delete_avatar') }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre avatar ? Cette action est irréversible.');\">
\t\t\t\t\t\t\t\t\t\t\t{% if app.user.getAvatar() %}
\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" alt=\"Avatar\" class=\"img-fluid rounded-circle\" style=\"max-width: 120px\" ;>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/avatars/' ~ app.user.getAvatar()) }}\" class=\"btn btn-warning\" download=\"{{ app.user.getName() ~ '_Photo' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<p>Aucune photo</p>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_avatar') }}\">
\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ path('app_user_profil') }}\" enctype=\"multipart/form-data\">


\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control text-dark\" type=\"email\" id=\"email\" placeholder=\"user@example.com\" value=\"{{ app.user.getEmail() }}\" name=\"email\" disabled>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"first_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Nom</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"first_name\" placeholder=\"John\" value=\"{{ app.user.getName() }}\" name=\"name\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Prenoms
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Doe\" value=\"{{ app.user.getLastName() }}\" name=\"lastName\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Numéro de téléphone
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"{{ app.user.getPhone() }}\" name=\"phone\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Date de Naissance
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"date\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"{{ app.user.getDateOfBirth()|date('Y-m-d') }}\" name=\"dateOfBirth\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.getSchoolLevel() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 1\">BAC +1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 2\">BAC +2</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 3\">BAC +3</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 4\">BAC +4</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 5\">BAC +5</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark\" style=\"width:100%;\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t\t\tEnregistrer
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
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

\t<div class=\"row mb-3\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow mb-3\">
\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t<p class=\"text-secondary m-0 fw-bold\" align=\"center\">IMPORTER DES DOCUMENTS</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ path('user_update_document') }}\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t{% if not app.user.avatar %}
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if not app.user.cni %}
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Carte nationale d'identité (CNI)
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"cni\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{# <form method=\"POST\" action=\"{{ path('app_delete_cni') }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre CNI ? Cette action est irréversible.');\">
\t\t\t\t\t\t\t\t\t\t\t{% if app.user.getCni() %}
\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"start\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/cni/' ~ app.user.getCni()) }}\" class=\"btn btn-warning\" download=\"{{ app.user.getName() ~ '_CNI' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<p>Aucune CNI</p>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('app_delete_cni') }}\">
\t\t\t\t\t\t\t\t\t\t</form> #}
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t{% if not app.user.passport %}
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Passport
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"passport\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t{% if app.user.avatar and app.user.passport and app.user.cni %}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\" text-center alert alert-success\">
\t\t\t\t\t\t\t\t\t\t<strong>Tous les documents demandés ont été renseignés , Merci <i class=\"fas fa-thumbs-up\"></i> !</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white border-secondary btn-block\" style=\"width : 100%\">
\t\t\t\t\t\t\t\t\t\tImporter
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow mb-3\">
\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t<p class=\"text-secondary m-0 fw-bold\" align=\"center\">RECAPITUALTIF DE MES DOCUMENTS</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th scope=\"row\">Photo d'identité </th>
                        <td>
                            <div class=\"mb-3\">
                                {% if app.user.avatar %}
                                    <form method=\"POST\" action=\"{{ path('app_delete_avatar') }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre avatar ? Cette action est irréversible.');\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></button>
                                        <a href=\"{{ asset('uploads/avatars/' ~ app.user.getAvatar()) }}\" class=\"btn btn-light btn-sm ml-3\" download=\"{{ app.user.getName() ~ '_Photo' }}\"><i class=\"fas fa-download\"></i></a>
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_avatar') }}\">
                                    </form>
                                {% else %}
                                    <p class=\"text-danger\">A joindre</p>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Carte Nationale d'identité </th>
                        <td>
                            <div class=\"mb-3\">
                                {% if app.user.cni %}
                                    <form method=\"POST\" action=\"{{ path('app_delete_cni') }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre CNI ? Cette action est irréversible.');\">
                                        {% if app.user.getCni() %}
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></button>
                                            <a href=\"{{ asset('uploads/cni/' ~ app.user.getCni()) }}\" class=\"btn btn-secondary btn-sm ml-3\" download=\"{{ app.user.getName() ~ '_CNI' }}\"><i class=\"fas fa-eye\"></i></a>
                                        {% else %}
                                            <p>Aucune CNI</p>
                                        {% endif %}
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('app_delete_cni') }}\">
                                    </form>
                                {% else %}
                                    <p class=\"\" >Facultatif (Obligatoire si vous n'avez pas encore de passport)</p>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Passport </th>
                        <td>
                            <div class=\"mb-3\">
                                {% if app.user.passport %}
                                    <form method=\"POST\" action=\"{{ path('app_delete_passport') }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre passport ? Cette action est irréversible.');\">
                                        {% if app.user.getPassport() %}
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></button>
                                            <a href=\"{{ asset('uploads/passport/' ~ app.user.getPassport()) }}\" class=\"btn btn-light btn-sm ml-3\" download=\"{{ app.user.getName() ~ '_Passport' }}\"><i class=\"fas fa-download\"></i></a>
                                        {% else %}
                                            <p>Aucun Passport</p>
                                        {% endif %}
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('app_delete_passport') }}\">
                                    </form>
                                {% else %}
                                    <p class=\"text-danger\">A joindre</p>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t
\t</div>
</div><!-- Modal -->{% endblock %}
", "administration/user_profil.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/user_profil.html.twig");
    }
}
