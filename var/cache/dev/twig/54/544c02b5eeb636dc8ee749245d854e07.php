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

/* facture/garant.html.twig */
class __TwigTemplate_5cf89e257e9f548ad1a906737c916289 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/garant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/garant.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <title>Devis - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .total-rouge {
            color: red;
        }
    </style>
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
        </div>
        <h1>Devis - Garant financier pour : <div class=\"text-danger\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</div> </h1><br>
       <br> <br> 
        <table class=\"table\">
            <tr>
                <th>Numéro de facture</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "XGF </td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_facture"]) || array_key_exists("date_facture", $context) ? $context["date_facture"] : (function () { throw new RuntimeError('Variable "date_facture" does not exist.', 55, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Client</th>
                <td> <strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "lastName", [], "any", false, false, false, 59), "html", null, true);
        echo " <strong></td>
            </tr>
            <tr>
                <th>Total à payer :</th>
                <td class=\"total-rouge\"> <strong> 350 000 FCFA</strong></td>

            </tr>
        </table>
<br>
 <p align=\"center\">Dépôt par <strong> Western Union , Ria , MoneyGram ...  </strong>à affectuer vers  : </p>

 <br>

        <table class=\"table\">
            <tr>
                <th>Nom</th>
                <td> <strong> BAKAYOKO </strong></td>
            </tr>
            <tr>
                <th>Prenoms</th>
                <td>Mariame </td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>90 Chaussée Jules César , Eaubonne</td>
            </tr>
            <tr>
                <th>Numéro de téléphone :</th>
                <td>+33 7 49 72 64 06</td>
            </tr>
        </table>
     
        <img align=\"right\" src=\"data:image/png;base64,";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["image_content"]) || array_key_exists("image_content", $context) ? $context["image_content"] : (function () { throw new RuntimeError('Variable "image_content" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\" style=\"width: 200px; height: 200px;\">
        
        <p align=\"left\"><strong>By Mayk Consulting Services<strong></p> 
       
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "facture/garant.html.twig";
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
        return array (  152 => 91,  115 => 59,  108 => 55,  101 => 51,  93 => 46,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <title>Devis - {{ app.user.name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .total-rouge {
            color: red;
        }
    </style>
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
        </div>
        <h1>Devis - Garant financier pour : <div class=\"text-danger\">{{ app.user.name }}</div> </h1><br>
       <br> <br> 
        <table class=\"table\">
            <tr>
                <th>Numéro de facture</th>
                <td>{{ app.user.id }}XGF </td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ date_facture | date('d-m-Y') }}</td>
            </tr>
            <tr>
                <th>Client</th>
                <td> <strong> {{ app.user.name }} {{ app.user.lastName }} <strong></td>
            </tr>
            <tr>
                <th>Total à payer :</th>
                <td class=\"total-rouge\"> <strong> 350 000 FCFA</strong></td>

            </tr>
        </table>
<br>
 <p align=\"center\">Dépôt par <strong> Western Union , Ria , MoneyGram ...  </strong>à affectuer vers  : </p>

 <br>

        <table class=\"table\">
            <tr>
                <th>Nom</th>
                <td> <strong> BAKAYOKO </strong></td>
            </tr>
            <tr>
                <th>Prenoms</th>
                <td>Mariame </td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>90 Chaussée Jules César , Eaubonne</td>
            </tr>
            <tr>
                <th>Numéro de téléphone :</th>
                <td>+33 7 49 72 64 06</td>
            </tr>
        </table>
     
        <img align=\"right\" src=\"data:image/png;base64,{{ image_content }}\" style=\"width: 200px; height: 200px;\">
        
        <p align=\"left\"><strong>By Mayk Consulting Services<strong></p> 
       
    </div>
</body>
</html>
", "facture/garant.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/facture/garant.html.twig");
    }
}
