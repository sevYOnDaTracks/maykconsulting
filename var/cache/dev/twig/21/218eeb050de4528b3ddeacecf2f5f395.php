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

/* administration/users_list.html.twig */
class __TwigTemplate_1a6ebf3979f2fb5028264ddd387c5e77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/users_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/users_list.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/users_list.html.twig", 1);
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
        echo "\t<h2>Liste des comptes</h2>
\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-primary m-0 fw-bold text-uppercase\">Liste des comptes</p>
\t\t</div>
\t\t";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success-delete-user"], "method", false, false, false, 11))) {
            // line 12
            echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success-delete-user"], "method", false, false, false, 13)), "html", null, true);
            echo "
\t\t\t\t<div align=\"center\">
\t\t\t\t\tUn utilisateur a été supprimé !
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 19
        echo "\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success-modification-user"], "method", false, false, false, 19))) {
            // line 20
            echo "\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success-modification-user"], "method", false, false, false, 21)), "html", null, true);
            echo "
\t\t\t\t<div align=\"center\">
\t\t\t\t\tUtilisateur modifié avec success !
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["error-delete-user"], "method", false, false, false, 27))) {
            // line 28
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["error-delete-user"], "method", false, false, false, 29)), "html", null, true);
            echo "
\t\t\t\t<div align=\"center\">
\t\t\t\t\tVous ne pouvez pas supprimer votre propre compte !!
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 35
        echo "\t\t<div class=\"card-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 text-nowrap\">
\t\t\t\t\t<div id=\"dataTable_length\" class=\"dataTables_length\" aria-controls=\"dataTable\">
\t\t\t\t\t\t<label class=\"form-label\">Show&nbsp;<select class=\"d-inline-block form-select form-select-sm\">
\t\t\t\t\t\t\t\t<option value=\"10\" selected=\"\">10</option>
\t\t\t\t\t\t\t</select>&nbsp;</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"text-md-end dataTables_filter\" id=\"dataTable_filter\">
\t\t\t\t\t\t<label class=\"form-label\"><input type=\"search\" class=\"form-control form-control-sm\" aria-controls=\"dataTable\" placeholder=\"Search\"></label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Adresse email</th>
\t\t\t\t\t\t\t<th>Niveau d'étude</th>
\t\t\t\t\t\t\t<th>Rôle</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users_list"]) || array_key_exists("users_list", $context) ? $context["users_list"] : (function () { throw new RuntimeError('Variable "users_list" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 63
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 65
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 65))) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 66))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 66), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "schoolLevel", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 76));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($context["role"] == "ROLE_USER")) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\tUtilisateur
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\tStaff
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 83
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 83)) {
                    echo ",
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title text-dark fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Informations du compte :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 100), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 114
            if (twig_get_attribute($this->env, $this->source, $context["user"], "getAvatar", [], "method", false, false, false, 114)) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 116))), "html", null, true);
                echo "\" alt=\"Avatar\" class=\"img-fluid rounded-circle\" style=\"max-width: 120px\" ;>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 120
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_avatar");
                echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre avatar ? Cette action est irréversible.');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_avatar"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 127)), "html", null, true);
                echo "\" class=\"btn btn-warning \" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 127), "html", null, true);
                echo "_profil.png\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 134
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Aucune photo</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control text-dark\" type=\"email\" id=\"email\" placeholder=\"user@example.com\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 153), "html", null, true);
            echo "\" name=\"email\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"first_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Nom</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"first_name\" placeholder=\"John\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getName", [], "method", false, false, false, 164), "html", null, true);
            echo "\" name=\"name\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Prenoms
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Doe\" value=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getLastName", [], "method", false, false, false, 173), "html", null, true);
            echo "\" name=\"lastName\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Numéro de téléphone
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPhone", [], "method", false, false, false, 182), "html", null, true);
            echo "\" name=\"phone\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Date de Naissance
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"date\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getDateOfBirth", [], "method", false, false, false, 191), "Y-m-d"), "html", null, true);
            echo "\" name=\"dateOfBirth\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Niveau d'etude actuel
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select text-dark\" aria-label=\"Defaultselectexample\" name=\"schoolLevel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getSchoolLevel", [], "method", false, false, false, 204), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 1\">BAC +1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 2\">BAC +2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 3\">BAC +3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 4\">BAC +4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 5\">BAC +5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 212
            if (twig_get_attribute($this->env, $this->source, $context["user"], "getAvatar", [], "method", false, false, false, 212)) {
                // line 213
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 215
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a joint aucune photo
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 226
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 243), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 248), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Confirmation</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSouhaitez-vous réellement supprimer l'utilisateur
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 257), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 258), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 262)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 263))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">supprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "\t\t</tbody>
\t</table>
</div>
<br></div></div></div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/users_list.html.twig";
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
        return array (  516 => 279,  494 => 263,  490 => 262,  483 => 258,  479 => 257,  467 => 248,  459 => 243,  440 => 226,  427 => 215,  423 => 213,  421 => 212,  410 => 204,  394 => 191,  382 => 182,  370 => 173,  358 => 164,  344 => 153,  331 => 143,  322 => 136,  318 => 134,  306 => 127,  301 => 125,  293 => 120,  286 => 116,  283 => 115,  281 => 114,  264 => 100,  260 => 99,  251 => 93,  244 => 89,  239 => 86,  225 => 85,  220 => 83,  217 => 82,  213 => 80,  209 => 78,  206 => 77,  189 => 76,  184 => 74,  179 => 72,  176 => 71,  171 => 69,  168 => 68,  160 => 66,  158 => 65,  154 => 63,  150 => 62,  121 => 35,  112 => 29,  109 => 28,  106 => 27,  97 => 21,  94 => 20,  91 => 19,  82 => 13,  79 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block body %}
\t<h2>Liste des comptes</h2>
\t<br>

\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-primary m-0 fw-bold text-uppercase\">Liste des comptes</p>
\t\t</div>
\t\t{% if app.flashes('success-delete-user') is not empty %}
\t\t\t<div class=\"alert alert-success\">
\t\t\t\t{{ app.flashes('success-delete-user')|first }}
\t\t\t\t<div align=\"center\">
\t\t\t\t\tUn utilisateur a été supprimé !
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if app.flashes('success-modification-user') is not empty %}
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t{{ app.flashes('success-modification-user')|first }}
\t\t\t\t<div align=\"center\">
\t\t\t\t\tUtilisateur modifié avec success !
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if app.flashes('error-delete-user') is not empty %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{ app.flashes('error-delete-user')|first }}
\t\t\t\t<div align=\"center\">
\t\t\t\t\tVous ne pouvez pas supprimer votre propre compte !!
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"card-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 text-nowrap\">
\t\t\t\t\t<div id=\"dataTable_length\" class=\"dataTables_length\" aria-controls=\"dataTable\">
\t\t\t\t\t\t<label class=\"form-label\">Show&nbsp;<select class=\"d-inline-block form-select form-select-sm\">
\t\t\t\t\t\t\t\t<option value=\"10\" selected=\"\">10</option>
\t\t\t\t\t\t\t</select>&nbsp;</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"text-md-end dataTables_filter\" id=\"dataTable_filter\">
\t\t\t\t\t\t<label class=\"form-label\"><input type=\"search\" class=\"form-control form-control-sm\" aria-controls=\"dataTable\" placeholder=\"Search\"></label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Adresse email</th>
\t\t\t\t\t\t\t<th>Niveau d'étude</th>
\t\t\t\t\t\t\t<th>Rôle</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for user in users_list %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if user.avatar is not empty %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\">{{ user.name }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-2\" width=\"40\" height=\"40\" src=\"/assets/images/logo.png\">
\t\t\t\t\t\t\t\t\t\t{{ user.name }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{ user.email }}</td>

\t\t\t\t\t\t\t\t<td>{{ user.schoolLevel }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for role in user.roles %}
\t\t\t\t\t\t\t\t\t\t{% if role == \"ROLE_USER\" %}
\t\t\t\t\t\t\t\t\t\t\tUtilisateur
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\tStaff
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% if not loop.last %},
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModa{{ user.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModa{{ user.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title text-dark fw-bold text-xs text-uppercase\" id=\"exampleModalLabel\">Informations du compte :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.lastName}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.getAvatar() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" alt=\"Avatar\" class=\"img-fluid rounded-circle\" style=\"max-width: 120px\" ;>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_delete_avatar') }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer votre avatar ? Cette action est irréversible.');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_avatar') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ asset(user.avatar) }}\" class=\"btn btn-warning \" download=\"{{ user.name}}_profil.png\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Aucune photo</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ path('user_update', {'id': user.id} )}}\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control text-dark\" type=\"email\" id=\"email\" placeholder=\"user@example.com\" value=\"{{ user.getEmail() }}\" name=\"email\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"first_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Nom</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"first_name\" placeholder=\"John\" value=\"{{ user.getName() }}\" name=\"name\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Prenoms
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Doe\" value=\"{{ user.getLastName() }}\" name=\"lastName\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Numéro de téléphone
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"text\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"{{ user.getPhone() }}\" name=\"phone\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Date de Naissance
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><input class=\"form-control text-dark\" type=\"date\" id=\"last_name\" placeholder=\"Enter a valid phone number\" value=\"{{ user.getDateOfBirth()|date('Y-m-d') }}\" name=\"dateOfBirth\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Niveau d'etude actuel
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select text-dark\" aria-label=\"Defaultselectexample\" name=\"schoolLevel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.getSchoolLevel() }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 1\">BAC +1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 2\">BAC +2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 3\">BAC +3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 4\">BAC +4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 5\">BAC +5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.getAvatar() %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* L'utilisateur n'a joint aucune photo
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"last_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Photo d'identité
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ user.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{ user.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Confirmation</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSouhaitez-vous réellement supprimer l'utilisateur
\t\t\t\t\t\t\t\t\t\t\t\t\t{{user.name}}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{user.lastName}}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">supprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div>
<br></div></div></div></div>{% endblock %}
", "administration/users_list.html.twig", "/Users/sevyondatracks/Desktop/maykconsulting/templates/administration/users_list.html.twig");
    }
}
