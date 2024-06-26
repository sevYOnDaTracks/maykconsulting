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

/* administration/top-bar.html.twig */
class __TwigTemplate_16ac61cad8210422b56aa63f3ac218ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/top-bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/top-bar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-light navbar-expand bg-white shadow custom-navbar topbar static-top\">
\t<div class=\"container-fluid\">
\t\t<button class=\"btn btn-link d-md-none rounded-circle me-3\" id=\"sidebarToggleTop\" type=\"button\">
\t\t\t<i class=\"fas fa-bars\"></i>
\t\t</button>
\t\t";
        // line 12
        echo "\t\t<ul
\t\t\tclass=\"navbar-nav flex-nowrap ms-auto\">
\t\t\t";
        // line 30
        echo "\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" data-bs-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<span class=\"badge bg-dark badge-counter\">
\t\t\t\t\t\t\t2</span>
\t\t\t\t\t\t<i class=\"fas fa-solid fa-layer-group\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-list animated--grow-in\">
\t\t\t\t\t\t<h6 class=\"dropdown-header bg-dark border-dark\">Mes proccédures en cours</h6>
\t\t\t\t\t\t";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "garantFinancier", [], "any", false, false, false, 39)) {
            // line 40
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-dark icon-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-check text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\">Demandé le : ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "garantFinancier", [], "any", false, false, false, 47), "dateDemande", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<p class=\"\">Garant Financier </p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
            echo "\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\"></span>
\t\t\t\t\t\t\t\t\t<strong class=\"\">Garant Financier : Aucune procédure </strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "hebergement", [], "any", false, false, false, 61)) {
            // line 62
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-dark icon-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-building text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\">Demandé le : ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "hebergement", [], "any", false, false, false, 69), "dateDemande", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<p class=\"\">Hebergement </p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
            echo "\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\"></span>
\t\t\t\t\t\t\t\t\t<strong class=\"\">Hébergement : Aucune procédure </strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 89
            echo "\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" href=\"/administration/publicMessage\">
\t\t\t\t\t\t";
            // line 92
            if (((isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 92, $this->source); })()) != 0)) {
                // line 93
                echo "\t\t\t\t\t\t\t<span class=\"badge bg-danger badge-counter\">";
                echo twig_escape_filter($this->env, (isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 93, $this->source); })()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 95
            echo "
\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 113
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"shadow dropdown-list dropdown-menu dropdown-menu-end\" aria-labelledby=\"alertsDropdown\"></div>
\t\t\t</li>
\t\t\t";
        }
        // line 117
        echo "\t\t\t";
        // line 118
        echo "\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" data-bs-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<span class=\"d-none d-lg-inline me-2 text-dark small\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "lastName", [], "any", false, false, false, 122), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down fa-sm fa-fw me-2 text-gray-700 \"></i>
\t\t\t\t\t\t</span><img class=\"border rounded-circle img-profile\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t<div class=\"dropdown-menu shadow dropdown-menu-end animated--grow-in\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Profil</a>
\t\t\t\t\t\t";
        // line 130
        echo "\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">
\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Se deconnecter</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/top-bar.html.twig";
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
        return array (  193 => 130,  188 => 126,  183 => 124,  178 => 122,  174 => 121,  169 => 118,  167 => 117,  161 => 113,  156 => 95,  150 => 93,  148 => 92,  143 => 89,  141 => 88,  134 => 83,  122 => 75,  113 => 69,  102 => 62,  99 => 61,  87 => 53,  78 => 47,  67 => 40,  65 => 39,  54 => 30,  50 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-light navbar-expand bg-white shadow custom-navbar topbar static-top\">
\t<div class=\"container-fluid\">
\t\t<button class=\"btn btn-link d-md-none rounded-circle me-3\" id=\"sidebarToggleTop\" type=\"button\">
\t\t\t<i class=\"fas fa-bars\"></i>
\t\t</button>
\t\t{# <form class=\"d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><input class=\"bg-light form-control border-0 small\" type=\"text\" placeholder=\"Search for ...\"><button class=\"btn btn-primary py-0\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form> #}
\t\t<ul
\t\t\tclass=\"navbar-nav flex-nowrap ms-auto\">
\t\t\t{# <li class=\"nav-item dropdown d-sm-none no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" data-bs-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end p-3 animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"me-auto navbar-search w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><input class=\"bg-light form-control border-0 small\" type=\"text\" placeholder=\"Search for ...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary py-0\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" data-bs-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<span class=\"badge bg-dark badge-counter\">
\t\t\t\t\t\t\t2</span>
\t\t\t\t\t\t<i class=\"fas fa-solid fa-layer-group\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-list animated--grow-in\">
\t\t\t\t\t\t<h6 class=\"dropdown-header bg-dark border-dark\">Mes proccédures en cours</h6>
\t\t\t\t\t\t{% if app.user.garantFinancier %}
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{path('app_garant')}}\">
\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-dark icon-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-check text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\">Demandé le : {{app.user.garantFinancier.dateDemande | date('d/m/Y') }}</span>
\t\t\t\t\t\t\t\t\t<p class=\"\">Garant Financier </p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{path('app_garant')}}\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\"></span>
\t\t\t\t\t\t\t\t\t<strong class=\"\">Garant Financier : Aucune procédure </strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if app.user.hebergement %}
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{path('app_hebergement')}}\">
\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-dark icon-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-building text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\">Demandé le : {{app.user.hebergement.dateDemande | date('d/m/Y') }}</span>
\t\t\t\t\t\t\t\t\t<p class=\"\">Hebergement </p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{path('app_hebergement')}}\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\"></span>
\t\t\t\t\t\t\t\t\t<strong class=\"\">Hébergement : Aucune procédure </strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</li>
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" href=\"/administration/publicMessage\">
\t\t\t\t\t\t{%  if nombreEntitesMessage != 0 %}
\t\t\t\t\t\t\t<span class=\"badge bg-danger badge-counter\">{{ nombreEntitesMessage }}</span>
\t\t\t\t\t\t{%  endif %}

\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t{# <div class=\"dropdown-menu dropdown-menu-end dropdown-list animated--grow-in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">alerts center</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image me-3\"><img class=\"rounded-circle\" src=\"{{ asset('assets/img/avatars/avatar4.jpeg') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-success status-indicator\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Hi there! I am wondering if you can help me with a problem I've been having.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-gray-500 mb-0\">Emily Fowler - 58m</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t</div>
\t\t\t\t<div class=\"shadow dropdown-list dropdown-menu dropdown-menu-end\" aria-labelledby=\"alertsDropdown\"></div>
\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{# <div class=\"d-none d-sm-block topbar-divider\"></div> #}
\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" data-bs-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<span class=\"d-none d-lg-inline me-2 text-dark small\">{{ app.user.name }}
\t\t\t\t\t\t\t{{ app.user.lastName }}
\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down fa-sm fa-fw me-2 text-gray-700 \"></i>
\t\t\t\t\t\t</span><img class=\"border rounded-circle img-profile\" src=\"{{ asset('assets/images/logo.png') }}\"></a>
\t\t\t\t\t<div class=\"dropdown-menu shadow dropdown-menu-end animated--grow-in\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_user_profil') }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Profil</a>
\t\t\t\t\t\t{# <a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Settings</a> #}
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">
\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Se deconnecter</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>
", "administration/top-bar.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/top-bar.html.twig");
    }
}
