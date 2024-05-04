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

/* registration/register.html.twig */
class __TwigTemplate_64747d168e1b089173db258bea434527 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register
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
        $this->loadTemplate("welcome/partials/nav-bar-home.html.twig", "registration/register.html.twig", 7)->display($context);
        // line 8
        echo "\t<section class=\"py-5\">
\t\t<div class=\"container py-5 \">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body text-center d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 15
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Tout commence par un début !</h5>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-2\">Voici le formulaire d'inscription ...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bs-icon-xl bs-icon-circle bs-icon-primary shadow bg-dark bs-icon my-4\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewbox=\"0 0 16 16\" class=\"bi bi-person\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
\t\t\t\t\t\t\t<div class=\"mb-3\">

\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select text-dark\" placeholder=\"test\" name=\"schoolLevel\" required>
\t\t\t\t\t\t\t\t\t\t\t\t<option selected >Niveau d'étude actuel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 1\">BAC +1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 2\">BAC +2</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 3\">BAC +3</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 4\">BAC +4</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 5\">BAC +5</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">

\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"input-username\" name=\"email\" placeholder=\"Email\" required>
\t\t\t\t\t\t\t\t\t";
        // line 43
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-username\" name=\"name\" placeholder=\"Nom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-username\" name=\"lastName\" placeholder=\"Prenoms\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"input-username\" name=\"dateOfBirth\" placeholder=\"Date de naissance\" required>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-username\" name=\"phone\" placeholder=\"Télephone\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"input-username\" name=\"plainPassword\" placeholder=\"Mot de passe\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-dark shadow d-block w-100\" type=\"submit\">Je m'inscris</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"text-muted\">Avez-vous déja un compte ?&nbsp;<a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous </a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</form>
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
        return "registration/register.html.twig";
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
        return array (  164 => 63,  142 => 43,  123 => 26,  112 => 17,  103 => 15,  99 => 14,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register
{% endblock %}

{% block body %}
{% include \"welcome/partials/nav-bar-home.html.twig\" %}
\t<section class=\"py-5\">
\t\t<div class=\"container py-5 \">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body text-center d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t{% for flash_error in app.flashes('verify_email_error') %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ flash_error }}</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Tout commence par un début !</h5>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-2\">Voici le formulaire d'inscription ...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bs-icon-xl bs-icon-circle bs-icon-primary shadow bg-dark bs-icon my-4\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewbox=\"0 0 16 16\" class=\"bi bi-person\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_register') }}\">
\t\t\t\t\t\t\t<div class=\"mb-3\">

\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select text-dark\" placeholder=\"test\" name=\"schoolLevel\" required>
\t\t\t\t\t\t\t\t\t\t\t\t<option selected >Niveau d'étude actuel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 1\">BAC +1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 2\">BAC +2</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 3\">BAC +3</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 4\">BAC +4</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BAC + 5\">BAC +5</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">

\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"input-username\" name=\"email\" placeholder=\"Email\" required>
\t\t\t\t\t\t\t\t\t{# {{ form_row(registrationForm.email, { 'attr': { 'class': 'form-control', 'placeholder': 'Email' } }) }} #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-username\" name=\"name\" placeholder=\"Nom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-username\" name=\"lastName\" placeholder=\"Prenoms\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"input-username\" name=\"dateOfBirth\" placeholder=\"Date de naissance\" required>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-username\" name=\"phone\" placeholder=\"Télephone\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"input-username\" name=\"plainPassword\" placeholder=\"Mot de passe\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-dark shadow d-block w-100\" type=\"submit\">Je m'inscris</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"text-muted\">Avez-vous déja un compte ?&nbsp;<a href=\"{{path('app_login')}}\">Connectez-vous </a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>


{% endblock %}
", "registration/register.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/registration/register.html.twig");
    }
}
