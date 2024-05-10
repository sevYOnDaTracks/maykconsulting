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

/* administration/base.html.twig */
class __TwigTemplate_37858a1ee1c92159bc70cbacecfc780c extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
\t\t<title>
\t\t\t";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 10
        yield "\t\t</title>
\t\t<link rel=\"icon\" href=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/consulting.png"), "html", null, true);
        yield "\">
\t\t";
        // line 12
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 23
        yield "\t</head>
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
        yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
        yield "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-building\"></i>
\t\t\t\t\t\t\t\t<span>Hébergement</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
        yield "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-money-check\"></i>
\t\t\t\t\t\t\t\t<span>Garant Financier</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 69
            yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
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
                yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 81
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 81, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 83
            yield "\t\t\t\t\t\t\t\t\t</span>
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
            yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_management");
            yield "\">Hébergement</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 100
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_management");
            yield "\">Garant Financier</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 105
        yield "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t\t<button class=\"btn rounded-circle border-0\" id=\"sidebarToggle\" type=\"button\"></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"d-flex flex-column\" id=\"content-wrapper\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t";
        // line 113
        yield from         $this->loadTemplate("administration/top-bar.html.twig", "administration/base.html.twig", 113)->unwrap()->yield($context);
        // line 114
        yield "\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 116
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 117
        yield "\t\t\t\t\t\t<footer class=\"bg-white sticky-footer\">
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
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 136
        yield "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Admin -
\t\t\t\t";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "\t\t\t<link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/bootstrap/css/bootstrap1.min.css"), "html", null, true);
        yield "\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/fonts/fontawesome-all.min.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
\t\t\t<style>
\t\t\t\t.custom-navbar {
\t\t\t\t\theight: 50px; /* Réglez la hauteur selon vos préférences */
\t\t\t\t}
\t\t\t</style>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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

        return; yield '';
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
        yield "\t\t\t<script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/js/theme1.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 133
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/bootstrap/js/bootstrap1.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 134
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/js/bs-init.js"), "html", null, true);
        yield "\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        return array (  316 => 134,  312 => 133,  307 => 132,  297 => 131,  278 => 116,  259 => 15,  253 => 13,  243 => 12,  230 => 8,  218 => 7,  205 => 136,  203 => 131,  187 => 117,  185 => 116,  181 => 114,  179 => 113,  169 => 105,  161 => 100,  155 => 97,  152 => 96,  140 => 83,  135 => 81,  132 => 80,  130 => 79,  118 => 69,  116 => 68,  108 => 63,  99 => 57,  96 => 56,  67 => 23,  65 => 12,  61 => 11,  58 => 10,  56 => 7,  48 => 1,);
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
