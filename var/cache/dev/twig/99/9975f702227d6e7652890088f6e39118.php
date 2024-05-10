<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* administration/index.html.twig */
class __TwigTemplate_6f04b47d02b31fe60ceab4c54a597e23 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "\t<h1 align=\"center\" class=\"text-dark animate__animated animate__fadeInLeft\">
\t\tHello
\t\t";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "
\t\t!
\t</h1>
\t";
        // line 9
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "isVerified", [], "any", false, false, false, 9)) {
            // line 10
            yield "\t\t<div class=\"alert alert-danger\">
\t\t\t<div align=\"center\">
\t\t\t\tvotre compte n'est pas vérifié.\tVous avez reçu un mail de verification dans votre boite mail indiqué ! Vérifier également les spams
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 16
        yield "\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "garantFinancier", [], "any", false, false, false, 16) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "garantFinancier", [], "any", false, false, false, 16), "statutDemande", [], "any", false, false, false, 16) == 0))) {
            yield " <div class=\" animate__animated animate__fadeInLeft alert alert-danger text-center\">Vous avez actuellement une demande de garant financier avec le statut : <strong> EN ATTENTE DE PAIMENT </strong> <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
            yield "\" class=\"text-black\">Cliquez ici pour voir !</a> </div>  ";
        }
        // line 17
        yield "\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "hebergement", [], "any", false, false, false, 17) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "hebergement", [], "any", false, false, false, 17), "statutDemande", [], "any", false, false, false, 17) == 0))) {
            yield " <div class=\" animate__animated animate__fadeInLeft alert alert-warning text-center\">Vous avez actuellement une demande d'hebergement avec le statut : <strong> EN ATTENTE DE PAIMENT </strong> <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
            yield "\" class=\"text-black\">Cliquez ici pour voir !</a> </div>  ";
        }
        // line 18
        yield "\t<br>

\t<div class=\"card text-center animate__animated animate__fadeInLeft mb-4\">
\t\t<div class=\"card-header bg-black text-white text-uppercase fw-bolder\">
\t\t\tAccedez aux demandes
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"card-text text-black\">Que souhaitez-vous comme prestation ?</p>
\t\t\t";
        // line 27
        yield "\t\t\t<a style=\"width: 170px\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement");
        yield "\" class=\"btn btn-light\">Hebergement <i class=\"fas fa-building\"></i></a> <br><br>
\t\t\t<a style=\"width: 170px\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
        yield "\" class=\"btn btn-light\">Garant Financier <i class=\"fas fa-money-bill\"></i></a>
\t\t</div>
\t</div>

\t<div class=\"card text-center animate__animated animate__fadeInLeft mb-4\">
\t\t<div class=\"card-header bg-black text-white text-uppercase fw-bolder\">
\t\t\tGérer mon profil
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t";
        // line 37
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "avatar", [], "any", false, false, false, 37)) {
            yield "\t<div class=\"alert alert-warning\">Hey nous n'avons toujours pas reçu ta photo d'identité</div> ";
        }
        // line 38
        yield "\t\t\t<p class=\"card-text text-black\">Souhaitez-vous gérer vos informations ? C'est par ici  !</p>
\t\t\t<a style=\"width: 170px\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        yield "\" class=\"btn btn-light\"><i class=\"fas fa-user\"></i></a> <br><br>
\t\t</div>
\t</div>

\t<div class=\"card animate__animated animate__fadeInRight mb-4\">
\t\t<div class=\"card-body text-black text-center\">
\t\t\tPour toutes questions veuillez nous contacter par mail sur : <strong>maykconsulting@gmail.com</strong>
\t\t</div>
\t</div>

\t";
        // line 103
        yield "<br><br>

</div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        return array (  150 => 103,  137 => 39,  134 => 38,  130 => 37,  118 => 28,  113 => 27,  103 => 18,  96 => 17,  89 => 16,  81 => 10,  79 => 9,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
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
\t{% if  app.user.garantFinancier and app.user.garantFinancier.statutDemande == 0 %} <div class=\" animate__animated animate__fadeInLeft alert alert-danger text-center\">Vous avez actuellement une demande de garant financier avec le statut : <strong> EN ATTENTE DE PAIMENT </strong> <a href=\"{{ path('app_garant') }}\" class=\"text-black\">Cliquez ici pour voir !</a> </div>  {% endif %}
\t{% if  app.user.hebergement and app.user.hebergement.statutDemande == 0 %} <div class=\" animate__animated animate__fadeInLeft alert alert-warning text-center\">Vous avez actuellement une demande d'hebergement avec le statut : <strong> EN ATTENTE DE PAIMENT </strong> <a href=\"{{ path('app_hebergement') }}\" class=\"text-black\">Cliquez ici pour voir !</a> </div>  {% endif %}
\t<br>

\t<div class=\"card text-center animate__animated animate__fadeInLeft mb-4\">
\t\t<div class=\"card-header bg-black text-white text-uppercase fw-bolder\">
\t\t\tAccedez aux demandes
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"card-text text-black\">Que souhaitez-vous comme prestation ?</p>
\t\t\t{# <a href=\"{{path('app_admission')}}\" class=\"btn btn-light\">Admission <i class=\"fas fa-book-open\"></i></a>#}
\t\t\t<a style=\"width: 170px\" href=\"{{path('app_hebergement')}}\" class=\"btn btn-light\">Hebergement <i class=\"fas fa-building\"></i></a> <br><br>
\t\t\t<a style=\"width: 170px\" href=\"{{path('app_garant')}}\" class=\"btn btn-light\">Garant Financier <i class=\"fas fa-money-bill\"></i></a>
\t\t</div>
\t</div>

\t<div class=\"card text-center animate__animated animate__fadeInLeft mb-4\">
\t\t<div class=\"card-header bg-black text-white text-uppercase fw-bolder\">
\t\t\tGérer mon profil
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t{% if not app.user.avatar %}\t<div class=\"alert alert-warning\">Hey nous n'avons toujours pas reçu ta photo d'identité</div> {%  endif %}
\t\t\t<p class=\"card-text text-black\">Souhaitez-vous gérer vos informations ? C'est par ici  !</p>
\t\t\t<a style=\"width: 170px\" href=\"{{path('app_user_profil')}}\" class=\"btn btn-light\"><i class=\"fas fa-user\"></i></a> <br><br>
\t\t</div>
\t</div>

\t<div class=\"card animate__animated animate__fadeInRight mb-4\">
\t\t<div class=\"card-body text-black text-center\">
\t\t\tPour toutes questions veuillez nous contacter par mail sur : <strong>maykconsulting@gmail.com</strong>
\t\t</div>
\t</div>

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
