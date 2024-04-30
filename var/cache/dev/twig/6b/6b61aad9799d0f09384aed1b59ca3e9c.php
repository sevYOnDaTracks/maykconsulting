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

/* administration/index.html.twig */
class __TwigTemplate_23ba80c566ba32cf821ef96f7c6849ba extends Template
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
        return "administration/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/index.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/index.html.twig", 1);
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
        echo "\t<h1 align=\"center\" class=\"text-dark animate__animated animate__fadeInLeft\">
\t\tHello
\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
\t\t!
\t</h1>
\t";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "isVerified", [], "any", false, false, false, 9)) {
            // line 10
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t<div align=\"center\">
\t\t\t\tvotre compte n'est pas vérifié.\tVous avez reçu un mail de verification dans votre boite mail indiqué ! Vérifier également les spams
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 16
        echo "\t<br>

\t<div class=\"card text-center animate__animated animate__fadeInLeft mb-4\">
\t\t<div class=\"card-header bg-black text-white text-uppercase fw-bolder\">
\t\t\tAccedez aux demandes
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"card-text\">En choisissant l'une des options suivantes, vous accéderez au service que vous souhaitez.</p>
\t\t\t";
        // line 25
        echo "\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
        echo "\" class=\"btn btn-light\">Hebergement <i class=\"fas fa-home\"></i></a>
\t\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
        echo "\" class=\"btn btn-light\">Garant Financier <i class=\"fas fa-money-bill\"></i></a>
\t\t</div>
\t</div>
";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "garantFinancier", [], "any", false, false, false, 29) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "garantFinancier", [], "any", false, false, false, 29), "statutDemande", [], "any", false, false, false, 29) == 0))) {
            echo " <div class=\" animate__animated animate__fadeInLeft alert alert-danger\">Vous avez actuellement une demande de garant financier avec le statut : <strong> EN ATTENTE DE PAIMENT </strong>  </div>  ";
        }
        // line 30
        echo "
\t";
        // line 85
        echo "<br><br>

</div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/index.html.twig";
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
        return array (  116 => 85,  113 => 30,  109 => 29,  103 => 26,  98 => 25,  88 => 16,  80 => 10,  78 => 9,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block body %}
\t<h1 align=\"center\" class=\"text-dark animate__animated animate__fadeInLeft\">
\t\tHello
\t\t{{ app.user.name }}
\t\t!
\t</h1>
\t{% if not app.user.isVerified %}
\t\t<div class=\"alert alert-danger\">
\t\t\t<div align=\"center\">
\t\t\t\tvotre compte n'est pas vérifié.\tVous avez reçu un mail de verification dans votre boite mail indiqué ! Vérifier également les spams
\t\t\t</div>
\t\t</div>
\t{% endif %}
\t<br>

\t<div class=\"card text-center animate__animated animate__fadeInLeft mb-4\">
\t\t<div class=\"card-header bg-black text-white text-uppercase fw-bolder\">
\t\t\tAccedez aux demandes
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"card-text\">En choisissant l'une des options suivantes, vous accéderez au service que vous souhaitez.</p>
\t\t\t{# <a href=\"{{path('app_admission')}}\" class=\"btn btn-light\">Admission <i class=\"fas fa-book-open\"></i></a>#}
\t\t\t<a href=\"{{path('app_hebergement')}}\" class=\"btn btn-light\">Hebergement <i class=\"fas fa-home\"></i></a>
\t\t\t<a href=\"{{path('app_garant')}}\" class=\"btn btn-light\">Garant Financier <i class=\"fas fa-money-bill\"></i></a>
\t\t</div>
\t</div>
{% if  app.user.garantFinancier and app.user.garantFinancier.statutDemande == 0 %} <div class=\" animate__animated animate__fadeInLeft alert alert-danger\">Vous avez actuellement une demande de garant financier avec le statut : <strong> EN ATTENTE DE PAIMENT </strong>  </div>  {% endif %}

\t{# <div
\t\tclass=\"card mb-3 animate__animated animate__fadeInLeft\">
\t\t{# <img src=\" \" class=\"card-img-top\" alt=\"...\"> 
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title fw-bold text-sm text-uppercase\">Ravie de vous revoir !</h5>
            {%  if not app.user.garantFinancier %}
\t\t\t<p class=\"card-text\">
\t\t\t\tIl me semble que vous n'avez aucune proccedure en cours. Ne vous inquietez pas ! Sur notre platforme vous pouvez effectué votre demande d'admission,d'hébergement ou une demande de garant financier !
\t\t\t</p>
            {%  else  %}
<p class=\"card-text\">
\t\t\t\tGéniale tu as une proccédure de garant financier en cours ! <br><br>
                <a class=\"btn btn-dark \" href=\"{{ path('app_garant')}}\">Consulter</a>
\t\t\t</p>
            {% endif %}
\t\t\t<p class=\"card-text\">
\t\t\t\t<small class=\"text-body-secondary\"></small>
\t\t\t</p>
\t\t</div>
\t</div>

<div class=\"row animate__animated animate__fadeInLeft\">
    <div class=\"col-md-4\">
        <div class=\"card\">
             <img src=\"/assets/images/admission.jpeg\" class=\"card-img-top img-fluid\"  alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\"><strong>Admission</strong></h5>
                <p class=\"card-text\">Pour votre demande d'admission , Cliquez ici !</p>
                <div align=\"center\">  <a href=\"{{path('app_admission')}}\" class=\"btn btn-dark btn-block\" style=\"width:100%;\">Consulter</a></div>
            </div>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"card\">
             <img src=\"/assets/images/logement.jpeg\" class=\"card-img-top img-fluid\"  alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-center \"><strong>Logement</strong></h5>
                <p class=\"card-text\">Pour votre demande de logement , Cliquez ici !</p>
               <div align=\"center\">  <a href=\"#\" class=\"btn btn-dark btn-block\" style=\"width:100%; \">Consulter</a></div>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\">
             <img src=\"/assets/images/argent.jpeg\" class=\"card-img-top img-fluid\"  alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\"><strong>Garant financier</strong></h5>
                <p class=\"card-text\">Pour votre demande de garant , Cliquez ici !</p>
                <div align=\"center\">  <a href=\"{{ path('app_garant')}}\" class=\"btn btn-dark btn-block\" style=\"width:100%; \">Consulter</a></div>
            </div>
        </div>
    </div> 
</div>#}
<br><br>

</div></div>{% endblock %}
", "administration/index.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/administration/index.html.twig");
    }
}
