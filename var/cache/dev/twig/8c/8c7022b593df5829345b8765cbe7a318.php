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

/* administration/top-bar.html.twig */
class __TwigTemplate_09d7734976afb1f0d0b8a4be2e9c39ef extends Template
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
        yield "<nav class=\"navbar navbar-light navbar-expand bg-white shadow custom-navbar topbar static-top\">
\t<div class=\"container-fluid\">
\t\t<button class=\"btn btn-link d-md-none rounded-circle me-3\" id=\"sidebarToggleTop\" type=\"button\">
\t\t\t<i class=\"fas fa-bars\"></i>
\t\t</button>
\t\t";
        // line 12
        yield "\t\t<ul
\t\t\tclass=\"navbar-nav flex-nowrap ms-auto\">
\t\t\t";
        // line 30
        yield "\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
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
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "garantFinancier", [], "any", false, false, false, 39)) {
            // line 40
            yield "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
            yield "\">
\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-dark icon-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-check text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\">Demandé le : ";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "garantFinancier", [], "any", false, false, false, 47), "dateDemande", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t<p class=\"\">Garant Financier </p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 53
            yield "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
            yield "\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\"></span>
\t\t\t\t\t\t\t\t\t<strong class=\"\">Garant Financier : Aucune procédure </strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 61
        yield "\t\t\t\t\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "hebergement", [], "any", false, false, false, 61)) {
            // line 62
            yield "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
            yield "\">
\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-dark icon-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-building text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\">Demandé le : ";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "hebergement", [], "any", false, false, false, 69), "dateDemande", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t<p class=\"\">Hebergement </p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 75
            yield "\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
            yield "\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"small text-gray-500\"></span>
\t\t\t\t\t\t\t\t\t<strong class=\"\">Hébergement : Aucune procédure </strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 83
        yield "
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 89
            yield "\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" href=\"/administration/publicMessage\">
\t\t\t\t\t\t";
            // line 92
            if (((isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 92, $this->source); })()) != 0)) {
                // line 93
                yield "\t\t\t\t\t\t\t<span class=\"badge bg-danger badge-counter\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 93, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t\t";
            }
            // line 95
            yield "
\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 113
            yield "\t\t\t\t</div>
\t\t\t\t<div class=\"shadow dropdown-list dropdown-menu dropdown-menu-end\" aria-labelledby=\"alertsDropdown\"></div>
\t\t\t</li>
\t\t\t";
        }
        // line 117
        yield "\t\t\t";
        // line 118
        yield "\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" data-bs-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<span class=\"d-none d-lg-inline me-2 text-dark small\">";
        // line 121
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), "html", null, true);
        yield "
\t\t\t\t\t\t\t";
        // line 122
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "lastName", [], "any", false, false, false, 122), "html", null, true);
        yield "
\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down fa-sm fa-fw me-2 text-gray-700 \"></i>
\t\t\t\t\t\t</span><img class=\"border rounded-circle img-profile\" src=\"";
        // line 124
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\"></a>
\t\t\t\t\t<div class=\"dropdown-menu shadow dropdown-menu-end animated--grow-in\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        yield "\">
\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Profil</a>
\t\t\t\t\t\t";
        // line 130
        yield "\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
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

        return; yield '';
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
        return array (  194 => 130,  189 => 126,  184 => 124,  179 => 122,  175 => 121,  170 => 118,  168 => 117,  162 => 113,  157 => 95,  151 => 93,  149 => 92,  144 => 89,  142 => 88,  135 => 83,  123 => 75,  114 => 69,  103 => 62,  100 => 61,  88 => 53,  79 => 47,  68 => 40,  66 => 39,  55 => 30,  51 => 12,  44 => 1,);
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
