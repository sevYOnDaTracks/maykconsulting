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

/* login/index.html.twig */
class __TwigTemplate_312a96ced725096e4cc61d857cae0ec2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLogin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->loadTemplate("welcome/partials/nav-bar-home.html.twig", "login/index.html.twig", 7)->display($context);
        // line 8
        echo "\t<section class=\"py-4\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\" align=\"center\">
\t\t\t\t\t\t\t<div>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17))) {
            // line 18
            echo "\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19)), "html", null, true);
            echo "
\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\tVotre compte a été activé avec succes !
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["success-registration"], "method", false, false, false, 25))) {
            // line 26
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["success"], "method", false, false, false, 27)), "html", null, true);
            echo "
\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\tVous avez reçu un mail de verification dans votre boite mail indiqué ! Vérifier également les spams afin de valider votre compte
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body text-center d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t";
        // line 37
        echo "

\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Welcome Back !</h5>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-2\">Ravie de vous revoir !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewbox=\"0 0 16 16\" class=\"bi bi-person\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form class=\"mt-4 pt-2\" action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-floating form-floating-custom mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"input-username\" name=\"_username\" placeholder=\"Enter your email\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t\t<label for=\"input-username\">Email</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-floating-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-users-alt\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-floating form-floating-custom mb-3 auth-pass-inputgroup\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password-input\" placeholder=\"Enter Password\" name=\"_password\" required>
\t\t\t\t\t\t\t\t\t<label for=\"password-input\">Password</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-floating-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-padlock\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-check form-check-primary font-size-16 py-1\">
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"auth-resetpassword-basic\" class=\"text-muted text-decoration-underline font-size-14\">Forgot your password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary w-100\" type=\"submit\">Log In</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mt-4 pt-3 text-center\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Don't have an account?
\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold text-decoration-underline\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Signup Now</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<!-- end form -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/index.html.twig";
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
        return array (  193 => 75,  183 => 68,  162 => 50,  157 => 48,  144 => 37,  139 => 33,  130 => 27,  127 => 26,  124 => 25,  115 => 19,  112 => 18,  109 => 17,  103 => 14,  100 => 13,  98 => 12,  92 => 8,  90 => 7,  80 => 6,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/login/index.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}
\tLogin
{% endblock %}
{% block body %}
{% include \"welcome/partials/nav-bar-home.html.twig\" %}
\t<section class=\"py-4\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger\" align=\"center\">
\t\t\t\t\t\t\t<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if app.flashes('success') is not empty %}
\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t{{ app.flashes('success')|first }}
\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\tVotre compte a été activé avec succes !
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if app.flashes('success-registration') is not empty %}
\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t{{ app.flashes('success')|first }}
\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\tVous avez reçu un mail de verification dans votre boite mail indiqué ! Vérifier également les spams afin de valider votre compte
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body text-center d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t{# Affichage des erreurs de validation #}


\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Welcome Back !</h5>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-2\">Ravie de vous revoir !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewbox=\"0 0 16 16\" class=\"bi bi-person\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form class=\"mt-4 pt-2\" action=\"{{ path('app_login') }}\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-floating form-floating-custom mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"input-username\" name=\"_username\" placeholder=\"Enter your email\" value=\"{{ last_username }}\" required>
\t\t\t\t\t\t\t\t\t<label for=\"input-username\">Email</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-floating-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-users-alt\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-floating form-floating-custom mb-3 auth-pass-inputgroup\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password-input\" placeholder=\"Enter Password\" name=\"_password\" required>
\t\t\t\t\t\t\t\t\t<label for=\"password-input\">Password</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-floating-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-padlock\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-check form-check-primary font-size-16 py-1\">
\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"auth-resetpassword-basic\" class=\"text-muted text-decoration-underline font-size-14\">Forgot your password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary w-100\" type=\"submit\">Log In</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mt-4 pt-3 text-center\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Don't have an account?
\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold text-decoration-underline\" href=\"{{ path('app_register') }}\">Signup Now</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<!-- end form -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "login/index.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/login/index.html.twig");
    }
}
