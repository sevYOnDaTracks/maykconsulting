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
class __TwigTemplate_58f913c22885a2f140789d26333efafe extends Template
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
        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1 align=\"center\">
\t\tHello
\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
\t\t!
\t</h1>
\t";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "isVerified", [], "any", false, false, false, 9)) {
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

\t<div
\t\tclass=\"card mb-3 animate__animated animate__fadeInLeft\">
\t\t";
        // line 21
        echo "\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title fw-bold text-sm text-uppercase\">Ravie de vous revoir !</h5>
\t\t\t<p class=\"card-text\">
\t\t\t\tIl me semble que vous n'avez aucune proccedure en cours. Ne vous inquietez pas ! Sur notre platforme vous pouvez effectué votre demande d'admission,d'hébergement ou une demande de garant financier !
\t\t\t</p>
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
                <div align=\"center\">  <a href=\"#\" class=\"btn btn-dark btn-block\" style=\"width:100%; background-color: rgb(0, 0, 62);\">Consulter</a></div>
            </div>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"card\">
             <img src=\"/assets/images/logement.jpeg\" class=\"card-img-top img-fluid\"  alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-center \"><strong>Logement</strong></h5>
                <p class=\"card-text\">Pour votre demande de logement , Cliquez ici !</p>
               <div align=\"center\">  <a href=\"#\" class=\"btn btn-dark btn-block\" style=\"width:100%; background-color: rgb(0, 0, 62);\">Consulter</a></div>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\">
             <img src=\"/assets/images/argent.jpeg\" class=\"card-img-top img-fluid\"  alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\"><strong>Garant financier</strong></h5>
                <p class=\"card-text\">Pour votre demande de garant , Cliquez ici !</p>
                <div align=\"center\">  <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garant");
        echo "\" class=\"btn btn-dark btn-block\" style=\"width:100%; background-color: rgb(0, 0, 62);\">Consulter</a></div>
            </div>
        </div>
    </div>
</div>
<br><br>

</div></div>";
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
        return array (  117 => 60,  76 => 21,  70 => 16,  62 => 10,  60 => 9,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/index.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/administration/index.html.twig");
    }
}
