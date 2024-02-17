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
class __TwigTemplate_cc44689001d9d937369369f185745a0e extends Template
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
\t\t\t\t\t<a class=\"nav-link\" href=\"#contact_us\">Contact</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/administration\">Administration</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 32
        echo "\t\t\t</ul>
\t\t\t";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t<a class=\"btn btn-primary btn-sm shadow\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" role=\"button\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"-32 0 512 512\" width=\"1em\" height=\"1em\" fill=\"currentColor\" class=\"fs-4\">
\t\t\t\t\t\t<path d=\"M352 128C352 198.7 294.7 256 224 256C153.3 256 96 198.7 96 128C96 57.31 153.3 0 224 0C294.7 0 352 57.31 352 128zM209.1 359.2L176 304H272L238.9 359.2L272.2 483.1L311.7 321.9C388.9 333.9 448 400.7 448 481.3C448 498.2 434.2 512 417.3 512H30.72C13.75 512 0 498.2 0 481.3C0 400.7 59.09 333.9 136.3 321.9L175.8 483.1L209.1 359.2z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>

\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t<a class=\"btn btn-danger btn-sm shadow\" href=\"/logout\">Déconnexion</a>
\t\t\t";
        }
        // line 43
        echo "\t\t</div>
\t</div>
</nav>
";
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
        return array (  106 => 43,  102 => 41,  91 => 34,  89 => 33,  86 => 32,  80 => 29,  76 => 27,  73 => 26,  67 => 22,  65 => 21,  57 => 16,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome/partials/nav-bar-home.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/welcome/partials/nav-bar-home.html.twig");
    }
}
