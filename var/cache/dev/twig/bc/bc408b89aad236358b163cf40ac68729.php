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

/* administration/base.html.twig */
class __TwigTemplate_88e1d480cb06e6ccbd3dd36c3ddefda5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/consulting.png"), "html", null, true);
        echo "\">
\t\t";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "\t</head>
\t<body id=\"page-top\" class=\"\">
\t\t<div id=\"wrapper\" class=\"sidebar-toggled\">
\t\t\t<nav class=\"navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 \" id=\"sidebar\" style=\"background: black;\">
\t\t\t\t<div class=\"container-fluid d-flex flex-column p-0\">
\t\t\t\t\t<a class=\"navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0\" href=\"/administration\">
\t\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t\t\t\t<i class=\"fas fa-school\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">
\t\t\t\t\t\t\t<span style=\"text-align: left;font-size: 13px;\">MAYK CONSULTING</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<hr class=\"sidebar-divider my-0\">
\t\t\t\t\t<ul class=\"navbar-nav text-light\" id=\"accordionSidebar\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t<span>Accueil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration/user_profil\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t<span>Mon profil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 56
        echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-building\"></i>
\t\t\t\t\t\t\t\t<span>Hébergement</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-money-check\"></i>
\t\t\t\t\t\t\t\t<span>Garant Financier</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 69
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration/user_list\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-friends\"></i>
\t\t\t\t\t\t\t\t\t<span>Gestions des utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration/publicMessage\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t<span>Messagerie publique
\t\t\t\t\t\t\t\t\t\t";
            // line 79
            if ((isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 79, $this->source); })())) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 81
                echo twig_escape_filter($this->env, (isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 81, $this->source); })()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown1\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book\"></i>
\t\t\t\t\t\t\t\t\t<span>Administration</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
";
            // line 96
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_management");
            echo "\">Hébergement</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_management");
            echo "\">Garant Financier</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t\t<button class=\"btn rounded-circle border-0\" id=\"sidebarToggle\" type=\"button\"></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"d-flex flex-column\" id=\"content-wrapper\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t";
        // line 113
        $this->loadTemplate("administration/top-bar.html.twig", "administration/base.html.twig", 113)->display($context);
        // line 114
        echo "\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "\t\t\t\t\t\t<footer class=\"bg-white sticky-footer\">
\t\t\t\t\t\t\t<div class=\"container my-auto\">
\t\t\t\t\t\t\t\t<div class=\"text-center my-auto copyright\">
\t\t\t\t\t\t\t\t\t<span>Copyright © Mayk-consulting</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</footer>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"border rounded d-inline scroll-to-top\" href=\"#page-top\">
\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t</a>
\t\t</div>
\t\t";
        // line 131
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin -
\t\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/bootstrap/css/bootstrap1.min.css"), "html", null, true);
        echo "\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/fonts/fontawesome-all.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
\t\t\t<style>
\t\t\t\t.custom-navbar {
\t\t\t\t\theight: 50px; /* Réglez la hauteur selon vos préférences */
\t\t\t\t}
\t\t\t</style>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/js/theme1.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/bootstrap/js/bootstrap1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/js/bs-init.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/base.html.twig";
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
        return array (  311 => 134,  307 => 133,  302 => 132,  292 => 131,  274 => 116,  256 => 15,  250 => 13,  240 => 12,  228 => 8,  216 => 7,  204 => 136,  202 => 131,  186 => 117,  184 => 116,  180 => 114,  178 => 113,  168 => 105,  160 => 100,  154 => 97,  151 => 96,  139 => 83,  134 => 81,  131 => 80,  129 => 79,  117 => 69,  115 => 68,  107 => 63,  98 => 57,  95 => 56,  66 => 23,  64 => 12,  60 => 11,  57 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
\t\t<title>
\t\t\t{% block title %}Admin -
\t\t\t\t{{ app.user.name }}
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"{{ asset('assets/images/consulting.png') }}\">
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/admin/assets/bootstrap/css/bootstrap1.min.css') }}\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/admin/assets/fonts/fontawesome-all.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
\t\t\t<style>
\t\t\t\t.custom-navbar {
\t\t\t\t\theight: 50px; /* Réglez la hauteur selon vos préférences */
\t\t\t\t}
\t\t\t</style>
\t\t{% endblock %}
\t</head>
\t<body id=\"page-top\" class=\"\">
\t\t<div id=\"wrapper\" class=\"sidebar-toggled\">
\t\t\t<nav class=\"navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 \" id=\"sidebar\" style=\"background: black;\">
\t\t\t\t<div class=\"container-fluid d-flex flex-column p-0\">
\t\t\t\t\t<a class=\"navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0\" href=\"/administration\">
\t\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t\t\t\t<i class=\"fas fa-school\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">
\t\t\t\t\t\t\t<span style=\"text-align: left;font-size: 13px;\">MAYK CONSULTING</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<hr class=\"sidebar-divider my-0\">
\t\t\t\t\t<ul class=\"navbar-nav text-light\" id=\"accordionSidebar\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t<span>Accueil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration/user_profil\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t<span>Mon profil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{#\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration/parcours\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bookmark\"></i>
\t\t\t\t\t\t\t\t<span>Mon parcours</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_hebergement') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-building\"></i>
\t\t\t\t\t\t\t\t<span>Hébergement</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_garant') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-money-check\"></i>
\t\t\t\t\t\t\t\t<span>Garant Financier</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration/user_list\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-friends\"></i>
\t\t\t\t\t\t\t\t\t<span>Gestions des utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration/publicMessage\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t<span>Messagerie publique
\t\t\t\t\t\t\t\t\t\t{% if nombreEntitesMessage %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ nombreEntitesMessage }}</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown1\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book\"></i>
\t\t\t\t\t\t\t\t\t<span>Administration</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
{#\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/administration\">Admission</a>
\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_hebergement_management')}}\">Hébergement</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_garant_management')}}\">Garant Financier</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t\t<button class=\"btn rounded-circle border-0\" id=\"sidebarToggle\" type=\"button\"></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"d-flex flex-column\" id=\"content-wrapper\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t{% include 'administration/top-bar.html.twig' %}
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t\t\t<footer class=\"bg-white sticky-footer\">
\t\t\t\t\t\t\t<div class=\"container my-auto\">
\t\t\t\t\t\t\t\t<div class=\"text-center my-auto copyright\">
\t\t\t\t\t\t\t\t\t<span>Copyright © Mayk-consulting</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</footer>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"border rounded d-inline scroll-to-top\" href=\"#page-top\">
\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t</a>
\t\t</div>
\t\t{% block javascripts %}
\t\t\t<script src=\"{{ asset('assets/admin/assets/js/theme1.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/admin/assets/bootstrap/js/bootstrap1.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/admin/assets/js/bs-init.js') }}\"></script>
\t\t{% endblock %}
\t</body>
</html>
", "administration/base.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/base.html.twig");
    }
}
