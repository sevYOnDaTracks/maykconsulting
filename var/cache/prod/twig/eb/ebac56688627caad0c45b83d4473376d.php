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
class __TwigTemplate_d36b5f1fab3d8ea089d6e47b751d4986 extends Template
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
        echo "<nav class=\"navbar navbar-light navbar-expand bg-white shadow custom-navbar topbar static-top\" >
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<button class=\"btn btn-link d-md-none rounded-circle me-3\" id=\"sidebarToggleTop\" type=\"button\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
        // line 12
        echo "\t\t\t\t\t\t\t<ul class=\"navbar-nav flex-nowrap ms-auto\">
\t\t\t\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t\t\t\t ";
        // line 53
        echo "\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" href=\"/administration/publicMessage\">
                                            ";
        // line 56
        if ((($context["nombreEntitesMessage"] ?? null) != 0)) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger badge-counter\">";
            echo twig_escape_filter($this->env, ($context["nombreEntitesMessage"] ?? null), "html", null, true);
            echo "</span>
                                             ";
        }
        // line 59
        echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"shadow dropdown-list dropdown-menu dropdown-menu-end\" aria-labelledby=\"alertsDropdown\"></div>
\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t\t";
        // line 81
        echo "\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t<div class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle nav-link\" aria-expanded=\"false\" data-bs-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline me-2 text-dark small\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 85), "lastName", [], "any", false, false, false, 85), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down fa-sm fa-fw me-2 text-gray-700 \"></i>
\t\t\t\t\t\t\t\t\t\t\t</span><img class=\"border rounded-circle img-profile\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu shadow dropdown-menu-end animated--grow-in\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Profil</a>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 93
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400\"></i>&nbsp;Se deconnecter</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>";
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
        return array (  96 => 93,  91 => 89,  86 => 87,  81 => 85,  77 => 84,  72 => 81,  67 => 77,  62 => 59,  56 => 57,  54 => 56,  49 => 53,  47 => 29,  44 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/top-bar.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/administration/top-bar.html.twig");
    }
}
