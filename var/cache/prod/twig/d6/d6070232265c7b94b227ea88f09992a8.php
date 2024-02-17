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
class __TwigTemplate_6da3844cf185b383feab8d41f7e18420 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/consulting.png"), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>
<body id=\"page-top\" class=\"\">
<div id=\"wrapper\" class=\"sidebar-toggled\">
    <nav class=\"navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 \" id=\"sidebar\" style=\"background: rgb(0, 0, 62);\">
        <div class=\"container-fluid d-flex flex-column p-0\">
            <a class=\"navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0\" href=\"/administration\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-school\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">
                    <span style=\"text-align: left;font-size: 13px;\">MAYK CONSULTING</span>
                </div>
            </a>
            <hr class=\"sidebar-divider my-0\">
            <ul class=\"navbar-nav text-light\" id=\"accordionSidebar\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/administration\">
                        <i class=\"fas fa-home\"></i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/administration/user_profil\">
                        <i class=\"fas fa-user\"></i>
                        <span>Mon profil</span>
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown2\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-book\"></i>
                        <span>Mes procédures</span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown2\">
                        <li>
                            <a class=\"dropdown-item\" href=\"/administration\">Admission</a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
        echo "\">Garant Financier</a>
                        </li>
                    </ul>
                </li>
\t\t\t\t";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "                 <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/administration/user_list\">
                            <i class=\"fas fa-user-friends\"></i>
                            <span>Liste des utilisateurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/administration/publicMessage\">
                            <i class=\"fas fa-envelope\"></i>
                            <span >Messagerie publique ";
            // line 72
            if (($context["nombreEntitesMessage"] ?? null)) {
                echo " <span class=\"badge bg-danger\"> ";
                echo twig_escape_filter($this->env, ($context["nombreEntitesMessage"] ?? null), "html", null, true);
                echo "</span> ";
            }
            echo "</span>
                        </a>
                    </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown1\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-book\"></i>
                        <span>Administration</span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
                        <li>
                            <a class=\"dropdown-item\" href=\"/administration\">Admission</a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"/administration\">Hébergement</a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant_management");
            echo "\">Garant Financier</a>
                        </li>
                    </ul>
                </li>
\t\t\t\t";
        }
        // line 94
        echo "            </ul>
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"btn rounded-circle border-0\" id=\"sidebarToggle\" type=\"button\"></button>
            </div>
        </div>
    </nav>
    <div class=\"d-flex flex-column\" id=\"content-wrapper\">
        <div id=\"content\">
            ";
        // line 102
        $this->loadTemplate("administration/top-bar.html.twig", "administration/base.html.twig", 102)->display($context);
        // line 103
        echo "            <div class=\"container-fluid\">
                <br>
                ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "                <footer class=\"bg-white sticky-footer\">
                    <div class=\"container my-auto\">
                        <div class=\"text-center my-auto copyright\">
                            <span>Copyright © Mayk-consulting</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <a class=\"border rounded d-inline scroll-to-top\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>
</div>
";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/bootstrap/css/bootstrap1.min.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/fonts/fontawesome-all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
        <style>
            .custom-navbar {
                height: 50px; /* Réglez la hauteur selon vos préférences */
            }
        </style>
    ";
    }

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 120
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/js/theme1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/bootstrap/js/bootstrap1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/assets/js/bs-init.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  242 => 123,  238 => 122,  233 => 121,  229 => 120,  223 => 105,  211 => 13,  205 => 11,  201 => 10,  193 => 7,  187 => 125,  185 => 120,  169 => 106,  167 => 105,  163 => 103,  161 => 102,  151 => 94,  143 => 89,  119 => 72,  108 => 63,  106 => 62,  99 => 58,  60 => 21,  58 => 10,  54 => 9,  51 => 8,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/base.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/administration/base.html.twig");
    }
}
