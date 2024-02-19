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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_9fec19fe168ef4bdd53e843481125d47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/confirmation_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1 >Bonjour ! Pourrais tu confirmer ton email s'il te plait ?</h1>

<p>
   C'est simple il suffit juste de cliquer sur le lien suivant : <br><br>
    <a href=\"";
        // line 8
        echo (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 8, $this->source); })());
        echo "\">Confirm my Email</a>.
    Ce lien expirera dans ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 9, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 9, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        echo ".
</p>

<p>
    Cordialement !

</p>

<p>
    Mayk-consulting Services ! <br>
    
    
</p>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
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
        return array (  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1 >Bonjour ! Pourrais tu confirmer ton email s'il te plait ?</h1>

<p>
   C'est simple il suffit juste de cliquer sur le lien suivant : <br><br>
    <a href=\"{{ signedUrl|raw }}\">Confirm my Email</a>.
    Ce lien expirera dans {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.
</p>

<p>
    Cordialement !

</p>

<p>
    Mayk-consulting Services ! <br>
    
    
</p>

{% endblock %}
", "registration/confirmation_email.html.twig", "/Users/sevyondatracks/Desktop/maykconsulting/templates/registration/confirmation_email.html.twig");
    }
}
