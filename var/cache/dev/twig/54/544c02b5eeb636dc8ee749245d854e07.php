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
            width: 30%;
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
            color: #b61818;
        }
    </style>
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
</head>
<body>
    <div class=\"container\">
<br><br>

        <table class=\"table\">
            <tr>
                <th>Nom & Prénoms</th>
                <td> <strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "lastName", [], "any", false, false, false, 50), "html", null, true);
        echo " </strong></td>
            </tr>
            <tr>
                <th>Pays Etude</th>
                <td class=\"total-black\">  ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["pays"]) || array_key_exists("pays", $context) ? $context["pays"] : (function () { throw new RuntimeError('Variable "pays" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville Etude</th>
                <td class=\"total-black\">  ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>






        </table>
        <br>
        <table class=\"table\">
            <tr>
                <th>Service  </th>
                <td>Garantie Financière</td>
            </tr>
            <tr>
                <th>Numéro de facture</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
        echo "XGF </td>
            </tr>
            <tr>
                <th>Date de la demande</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_facture"]) || array_key_exists("date_facture", $context) ? $context["date_facture"] : (function () { throw new RuntimeError('Variable "date_facture" does not exist.', 79, $this->source); })()), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_facture"]) || array_key_exists("date_facture", $context) ? $context["date_facture"] : (function () { throw new RuntimeError('Variable "date_facture" does not exist.', 79, $this->source); })()), "H:m:s"), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <th class=\"total-rouge\">Total à payer </th>
                ";
        // line 83
        if (((isset($context["pays"]) || array_key_exists("pays", $context) ? $context["pays"] : (function () { throw new RuntimeError('Variable "pays" does not exist.', 83, $this->source); })()) == "France")) {
            // line 84
            echo "                    <td class=\"total-rouge\"> <strong> 350 000 FCFA (Taxe non comprise)</strong></td>
                ";
        }
        // line 86
        echo "                ";
        if (((isset($context["pays"]) || array_key_exists("pays", $context) ? $context["pays"] : (function () { throw new RuntimeError('Variable "pays" does not exist.', 86, $this->source); })()) == "Canada")) {
            // line 87
            echo "                    <td class=\"total-rouge\"> <strong> 500 000 FCFA (Taxe non comprise)</strong></td>
                ";
        }
        // line 89
        echo "
            </tr>

        </table>
<br>
 <p align=\"center\">Dépôt par <strong> Western Union , Ria , MoneyGram ...  </strong>à affectuer vers  : </p> <br>
        <img align=\"center\" src=\"data:image/png;base64,";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["image_wu"]) || array_key_exists("image_wu", $context) ? $context["image_wu"] : (function () { throw new RuntimeError('Variable "image_wu" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "\" style=\"width: 110px; height: 30px; margin-left: 90px ; align-content: center; text-align : center\">
        <img align=\"center\" src=\"data:image/png;base64,";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["image_ria"]) || array_key_exists("image_ria", $context) ? $context["image_ria"] : (function () { throw new RuntimeError('Variable "image_ria" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\" style=\"width: 100px; height: 35px; margin-left: 90px ; align-content: center; align-items: center\">
        <img align=\"center\" src=\"data:image/png;base64,";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["image_mg"]) || array_key_exists("image_mg", $context) ? $context["image_mg"] : (function () { throw new RuntimeError('Variable "image_mg" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "\" style=\"width: 160px; height: 35px; margin-left: 90px ; align-content: center; align-items: end\">
 <br>
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
                <th>Pays de résidence </th>
                <td>France</td>
            </tr>
            <tr>
                <th>Numéro de téléphone </th>
                <td>+33 7 49 72 64 06</td>
            </tr>
        </table>


        <br>
        <p style=\"text-align: start; margin-top: 15px\">By Mayk Consulting le ";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_facture"]) || array_key_exists("date_facture", $context) ? $context["date_facture"] : (function () { throw new RuntimeError('Variable "date_facture" does not exist.', 125, $this->source); })()), "d/m/Y"), "html", null, true);
        echo "</p>
        <img align=\"right\" src=\"data:image/png;base64,";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["image_content"]) || array_key_exists("image_content", $context) ? $context["image_content"] : (function () { throw new RuntimeError('Variable "image_content" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "\" style=\"width: 200px; height: 80px; text-align: center; align-items: center;\">
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
        return array (  213 => 126,  209 => 125,  178 => 97,  174 => 96,  170 => 95,  162 => 89,  158 => 87,  155 => 86,  151 => 84,  149 => 83,  140 => 79,  133 => 75,  113 => 58,  106 => 54,  97 => 50,  50 => 6,  43 => 1,);
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
            width: 30%;
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
            color: #b61818;
        }
    </style>
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
</head>
<body>
    <div class=\"container\">
<br><br>

        <table class=\"table\">
            <tr>
                <th>Nom & Prénoms</th>
                <td> <strong> {{ app.user.name }} {{ app.user.lastName }} </strong></td>
            </tr>
            <tr>
                <th>Pays Etude</th>
                <td class=\"total-black\">  {{ pays }}</td>
            </tr>
            <tr>
                <th>Ville Etude</th>
                <td class=\"total-black\">  {{ ville }}</td>
            </tr>






        </table>
        <br>
        <table class=\"table\">
            <tr>
                <th>Service  </th>
                <td>Garantie Financière</td>
            </tr>
            <tr>
                <th>Numéro de facture</th>
                <td>{{ app.user.id }}XGF </td>
            </tr>
            <tr>
                <th>Date de la demande</th>
                <td>{{ date_facture | date('d/m/Y') }} à {{ date_facture | date('H:m:s') }} </td>
            </tr>
            <tr>
                <th class=\"total-rouge\">Total à payer </th>
                {% if pays == \"France\" %}
                    <td class=\"total-rouge\"> <strong> 350 000 FCFA (Taxe non comprise)</strong></td>
                {%  endif %}
                {% if pays == \"Canada\" %}
                    <td class=\"total-rouge\"> <strong> 500 000 FCFA (Taxe non comprise)</strong></td>
                {%  endif %}

            </tr>

        </table>
<br>
 <p align=\"center\">Dépôt par <strong> Western Union , Ria , MoneyGram ...  </strong>à affectuer vers  : </p> <br>
        <img align=\"center\" src=\"data:image/png;base64,{{ image_wu }}\" style=\"width: 110px; height: 30px; margin-left: 90px ; align-content: center; text-align : center\">
        <img align=\"center\" src=\"data:image/png;base64,{{ image_ria }}\" style=\"width: 100px; height: 35px; margin-left: 90px ; align-content: center; align-items: center\">
        <img align=\"center\" src=\"data:image/png;base64,{{ image_mg }}\" style=\"width: 160px; height: 35px; margin-left: 90px ; align-content: center; align-items: end\">
 <br>
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
                <th>Pays de résidence </th>
                <td>France</td>
            </tr>
            <tr>
                <th>Numéro de téléphone </th>
                <td>+33 7 49 72 64 06</td>
            </tr>
        </table>


        <br>
        <p style=\"text-align: start; margin-top: 15px\">By Mayk Consulting le {{ date_facture | date('d/m/Y') }}</p>
        <img align=\"right\" src=\"data:image/png;base64,{{ image_content }}\" style=\"width: 200px; height: 80px; text-align: center; align-items: center;\">
    </div>
</body>
</html>
", "facture/garant.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/facture/garant.html.twig");
    }
}
