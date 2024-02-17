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
class __TwigTemplate_80bdf55835806664742f9bdb537c52e6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["verify_email_error"], "method", false, false, false, 14));
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
\t\t\t\t\t\t\t<div class=\"bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewbox=\"0 0 16 16\" class=\"bi bi-person\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
\t\t\t\t\t\t\t<div class=\"mb-3\">

\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select text-dark\" placeholder=\"test\" name=\"schoolLevel\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected>Niveau d'étude actuel</option>
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
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"input-username\" name=\"dateOfBirth\" placeholder=\"\" required>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-username\" name=\"phone\" placeholder=\"Télephone\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"input-username\" name=\"plainPassword\" placeholder=\"Mot de passe\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary shadow d-block w-100\" type=\"submit\">Je m'inscris</button>
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
        return array (  134 => 63,  112 => 43,  93 => 26,  82 => 17,  73 => 15,  69 => 14,  61 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/registration/register.html.twig");
    }
}
