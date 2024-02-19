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
            if ((isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 72, $this->source); })())) {
                echo " <span class=\"badge bg-danger\"> ";
                echo twig_escape_filter($this->env, (isset($context["nombreEntitesMessage"]) || array_key_exists("nombreEntitesMessage", $context) ? $context["nombreEntitesMessage"] : (function () { throw new RuntimeError('Variable "nombreEntitesMessage" does not exist.', 72, $this->source); })()), "html", null, true);
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

        echo "Admin - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
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

    // line 120
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        return array (  296 => 123,  292 => 122,  287 => 121,  277 => 120,  259 => 105,  241 => 13,  235 => 11,  225 => 10,  205 => 7,  193 => 125,  191 => 120,  175 => 106,  173 => 105,  169 => 103,  167 => 102,  157 => 94,  149 => 89,  125 => 72,  114 => 63,  112 => 62,  105 => 58,  66 => 21,  64 => 10,  60 => 9,  57 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>
        {% block title %}Admin - {{ app.user.name }}{% endblock %}
    </title>
    <link rel=\"icon\" href=\"{{ asset('assets/images/consulting.png') }}\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/assets/bootstrap/css/bootstrap1.min.css') }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/assets/fonts/fontawesome-all.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
        <style>
            .custom-navbar {
                height: 50px; /* Réglez la hauteur selon vos préférences */
            }
        </style>
    {% endblock %}
</head>
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
                            <a class=\"dropdown-item\" href=\"{{ path('app_garant') }}\">Garant Financier</a>
                        </li>
                    </ul>
                </li>
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
                 <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/administration/user_list\">
                            <i class=\"fas fa-user-friends\"></i>
                            <span>Liste des utilisateurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/administration/publicMessage\">
                            <i class=\"fas fa-envelope\"></i>
                            <span >Messagerie publique {% if nombreEntitesMessage %} <span class=\"badge bg-danger\"> {{ nombreEntitesMessage }}</span> {% endif %}</span>
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
                            <a class=\"dropdown-item\" href=\"{{ path('app_garant_management')}}\">Garant Financier</a>
                        </li>
                    </ul>
                </li>
\t\t\t\t{% endif %}
            </ul>
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"btn rounded-circle border-0\" id=\"sidebarToggle\" type=\"button\"></button>
            </div>
        </div>
    </nav>
    <div class=\"d-flex flex-column\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include 'administration/top-bar.html.twig' %}
            <div class=\"container-fluid\">
                <br>
                {% block body %}{% endblock %}
                <footer class=\"bg-white sticky-footer\">
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
{% block javascripts %}
    <script src=\"{{ asset('assets/admin/assets/js/theme1.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/assets/bootstrap/js/bootstrap1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/assets/js/bs-init.js') }}\"></script>
{% endblock %}
</body>
</html>
", "administration/base.html.twig", "/Users/sevyondatracks/Desktop/maykconsulting/templates/administration/base.html.twig");
    }
}
