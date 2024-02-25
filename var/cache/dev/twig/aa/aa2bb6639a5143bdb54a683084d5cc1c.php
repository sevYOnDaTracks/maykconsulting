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

/* welcome/partials/nav-bar-home.html.twig */
class __TwigTemplate_7ea5070f56a99a15331cc1745c3f6a87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/partials/nav-bar-home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/partials/nav-bar-home.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3\" style=\"max-width: 100%; height: auto;\" id=\"mainNav\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand d-flex align-items-center\" href=\"/\">
\t\t\t<span class=\"bs-icon-sm bs-icon-circle shadow d-flex justify-content-center align-items-center me-2 bs-icon\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"128\" height=\"128\" style=\"max-width: 100%; height: auto;\">
\t\t\t</span>
\t\t\t<span>Mayk - Consulting&nbsp;</span>
\t\t</a>

\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navcol-1\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navcol-1\">
\t\t\t<ul class=\"navbar-nav mx-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        echo "\">Acceuil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#pricing\">Tarif</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#contact_us\">Contact</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration\">Administration</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t</ul>
\t\t\t";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "\t\t\t\t<a class=\"btn btn-dark btn-sm shadow\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" role=\"button\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"-32 0 512 512\" width=\"1em\" height=\"1em\" fill=\"currentColor\" class=\"fs-4\">
\t\t\t\t\t\t<path d=\"M352 128C352 198.7 294.7 256 224 256C153.3 256 96 198.7 96 128C96 57.31 153.3 0 224 0C294.7 0 352 57.31 352 128zM209.1 359.2L176 304H272L238.9 359.2L272.2 483.1L311.7 321.9C388.9 333.9 448 400.7 448 481.3C448 498.2 434.2 512 417.3 512H30.72C13.75 512 0 498.2 0 481.3C0 400.7 59.09 333.9 136.3 321.9L175.8 483.1L209.1 359.2z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>

\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t<a class=\"btn btn-danger btn-sm shadow\" href=\"/logout\">Déconnexion</a>
\t\t\t";
        }
        // line 46
        echo "\t\t</div>
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
        return "welcome/partials/nav-bar-home.html.twig";
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
        return array (  115 => 46,  111 => 44,  100 => 37,  98 => 36,  95 => 35,  89 => 32,  85 => 30,  82 => 29,  76 => 25,  74 => 24,  63 => 16,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3\" style=\"max-width: 100%; height: auto;\" id=\"mainNav\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand d-flex align-items-center\" href=\"/\">
\t\t\t<span class=\"bs-icon-sm bs-icon-circle shadow d-flex justify-content-center align-items-center me-2 bs-icon\">
\t\t\t\t<img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"Logo\" width=\"128\" height=\"128\" style=\"max-width: 100%; height: auto;\">
\t\t\t</span>
\t\t\t<span>Mayk - Consulting&nbsp;</span>
\t\t</a>

\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navcol-1\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navcol-1\">
\t\t\t<ul class=\"navbar-nav mx-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('welcome') }}\">Acceuil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#pricing\">Tarif</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#contact_us\">Contact</a>
\t\t\t\t</li>
\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration\">Administration</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t{% if not app.user %}

\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t\t{% if not app.user %}
\t\t\t\t<a class=\"btn btn-dark btn-sm shadow\" href=\"{{ path('app_login') }}\" role=\"button\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"-32 0 512 512\" width=\"1em\" height=\"1em\" fill=\"currentColor\" class=\"fs-4\">
\t\t\t\t\t\t<path d=\"M352 128C352 198.7 294.7 256 224 256C153.3 256 96 198.7 96 128C96 57.31 153.3 0 224 0C294.7 0 352 57.31 352 128zM209.1 359.2L176 304H272L238.9 359.2L272.2 483.1L311.7 321.9C388.9 333.9 448 400.7 448 481.3C448 498.2 434.2 512 417.3 512H30.72C13.75 512 0 498.2 0 481.3C0 400.7 59.09 333.9 136.3 321.9L175.8 483.1L209.1 359.2z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>

\t\t\t{% else %}
\t\t\t\t<a class=\"btn btn-danger btn-sm shadow\" href=\"/logout\">Déconnexion</a>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</nav>
", "welcome/partials/nav-bar-home.html.twig", "/Users/sevyondatracks/Desktop/maykconsulting/templates/welcome/partials/nav-bar-home.html.twig");
    }
}
