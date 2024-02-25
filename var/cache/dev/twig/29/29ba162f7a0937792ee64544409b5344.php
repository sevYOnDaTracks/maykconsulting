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

/* administration/messagePublic/index.html.twig */
class __TwigTemplate_397dc885f2ec7f571dd617e861c06c7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/messagePublic/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/messagePublic/index.html.twig"));

        $this->parent = $this->loadTemplate("administration/base.html.twig", "administration/messagePublic/index.html.twig", 1);
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
        echo "\t<h2>Boite aux lettres publique
\t\t<i class=\"fas fa-envelope\"></i>
\t</h2>
\t<br>
\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-primary m-0 fw-bold text-uppercase\">Liste des messages</p>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success-delete-message"], "method", false, false, false, 13))) {
            // line 14
            echo "\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success-delete-message"], "method", false, false, false, 15)), "html", null, true);
            echo "
\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\tVotre message a été supprimé avec success !
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 21
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 text-nowrap\">
\t\t\t\t\t<div id=\"dataTable_length\" class=\"dataTables_length\" aria-controls=\"dataTable\">
\t\t\t\t\t\t<label class=\"form-label\">Show&nbsp;<select class=\"d-inline-block form-select form-select-sm\">
\t\t\t\t\t\t\t\t<option value=\"10\" selected=\"\">10</option>
\t\t\t\t\t\t\t</select>&nbsp;</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"text-md-end dataTables_filter\" id=\"dataTable_filter\">
\t\t\t\t\t\t<label class=\"form-label\"><input type=\"search\" class=\"form-control form-control-sm\" aria-controls=\"dataTable\" placeholder=\"Search\"></label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Sender Name</th>
\t\t\t\t\t\t\t<th>Adresse email</th>
\t\t\t\t\t\t\t<th>Date, Heure de réception</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
                    ";
        // line 46
        if ( !(isset($context["publicMessage_list"]) || array_key_exists("publicMessage_list", $context) ? $context["publicMessage_list"] : (function () { throw new RuntimeError('Variable "publicMessage_list" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "            <tr>
                <td colspan=\"4\">Aucun Message actuellement !</td>
            </tr>
                        ";
        }
        // line 51
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicMessage_list"]) || array_key_exists("publicMessage_list", $context) ? $context["publicMessage_list"] : (function () { throw new RuntimeError('Variable "publicMessage_list" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "                        
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderName", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "dateTimeReception", [], "any", false, false, false, 56), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "dateTimeReception", [], "any", false, false, false, 58), "H:i:s "), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t</button>

                                    <div class=\"modal fade\" id=\"staticBackdrop";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" data-bs-backdrop=\"staticS\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"staticBackdropLabel\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 69), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderName", [], "any", false, false, false, 69), "html", null, true);
            echo " </h1>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
                    
\t\t\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderMessage", [], "any", false, false, false, 74), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Fermer </button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-target=\"#exampleModalToggle";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\" data-bs-toggle=\"modal\"><i class=\"fas fa-reply\"></i> Repondre</button>


\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>


\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 92), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Confirmation</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSouhaitez-vous réellement supprimer le message de
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 106), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 111))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModalToggle";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 118), "html", null, true);
            echo "\" aria-hidden=\"true\" aria-labelledby=\"exampleModalToggleLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 118), "html", null, true);
            echo "\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"exampleModalToggleLabel2\">Repondre à : ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 122), "html", null, true);
            echo " </h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
\t  <div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Email :</label>
  <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "SenderEmail", [], "any", false, false, false, 128), "html", null, true);
            echo "\" required>
</div>

<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Objet :</label>
  <input type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"\" required>
</div>

<div class=\"mb-3\">
 <label for=\"exampleFormControlInput1\" class=\"form-label\">Message :</label>
  <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"4\"></textarea>
</div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-danger\" data-bs-target=\"#staticBackdrop";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 142), "html", null, true);
            echo "\" data-bs-toggle=\"modal\"><i class=\"fas fa-arrow-left\"></i></button>
\t\t<button class=\"btn btn-primary\" type=\"submit\"><i class=\"fas fa-envelope\"></i></button>
      </div>
    </div>
  </div>
</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<br>
\t\t</div>
\t\t</div>

\t\t
\t\t</div>
\t\t<!-- Button trigger modal -->


\t\t<!-- Modal -->
\t\t
</div><!-- Modal -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/messagePublic/index.html.twig";
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
        return array (  298 => 154,  280 => 142,  263 => 128,  254 => 122,  245 => 118,  235 => 111,  231 => 110,  224 => 106,  212 => 97,  204 => 92,  187 => 78,  180 => 74,  170 => 69,  163 => 65,  156 => 61,  150 => 58,  145 => 56,  141 => 55,  137 => 54,  133 => 52,  128 => 51,  122 => 47,  120 => 46,  93 => 21,  84 => 15,  81 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'administration/base.html.twig' %}

{% block body %}
\t<h2>Boite aux lettres publique
\t\t<i class=\"fas fa-envelope\"></i>
\t</h2>
\t<br>
\t<div class=\"card shadow\">
\t\t<div class=\"card-header py-3\">
\t\t\t<p class=\"text-primary m-0 fw-bold text-uppercase\">Liste des messages</p>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t{% if app.flashes('success-delete-message') is not empty %}
\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t{{ app.flashes('success-delete-message')|first }}
\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\tVotre message a été supprimé avec success !
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 text-nowrap\">
\t\t\t\t\t<div id=\"dataTable_length\" class=\"dataTables_length\" aria-controls=\"dataTable\">
\t\t\t\t\t\t<label class=\"form-label\">Show&nbsp;<select class=\"d-inline-block form-select form-select-sm\">
\t\t\t\t\t\t\t\t<option value=\"10\" selected=\"\">10</option>
\t\t\t\t\t\t\t</select>&nbsp;</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"text-md-end dataTables_filter\" id=\"dataTable_filter\">
\t\t\t\t\t\t<label class=\"form-label\"><input type=\"search\" class=\"form-control form-control-sm\" aria-controls=\"dataTable\" placeholder=\"Search\"></label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"table-responsive table mt-2\" id=\"dataTable\" role=\"grid\" aria-describedby=\"dataTable_info\">
\t\t\t\t<table class=\"table my-0\" id=\"dataTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Sender Name</th>
\t\t\t\t\t\t\t<th>Adresse email</th>
\t\t\t\t\t\t\t<th>Date, Heure de réception</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
                    {% if  not publicMessage_list %}
            <tr>
                <td colspan=\"4\">Aucun Message actuellement !</td>
            </tr>
                        {% endif %}
\t\t\t\t\t\t{% for message in publicMessage_list %}
                        
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ message.senderName }}</td>
\t\t\t\t\t\t\t\t<td>{{ message.senderEmail }}</td>
\t\t\t\t\t\t\t\t<td>{{ message.dateTimeReception|date('d-m-Y') }}
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t{{ message.dateTimeReception|date('H:i:s ') }}</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop{{message.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t</button>

                                    <div class=\"modal fade\" id=\"staticBackdrop{{message.id}}\" data-bs-backdrop=\"staticS\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"staticBackdropLabel\">{{message.senderEmail}} - {{ message.senderName }} </h1>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
                    
\t\t\t\t\t\t{{ message.senderMessage }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Fermer </button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-target=\"#exampleModalToggle{{ message.id }}\" data-bs-toggle=\"modal\"><i class=\"fas fa-reply\"></i> Repondre</button>


\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>


\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ message.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{ message.id }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Confirmation</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSouhaitez-vous réellement supprimer le message de
\t\t\t\t\t\t\t\t\t\t\t\t\t{{message.senderEmail}} 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_message_delete', {'id': message.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ message.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModalToggle{{ message.id }}\" aria-hidden=\"true\" aria-labelledby=\"exampleModalToggleLabel{{ message.id }}\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"exampleModalToggleLabel2\">Repondre à : {{ message.senderEmail}} </h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
\t  <div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Email :</label>
  <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\" value=\"{{message.SenderEmail}}\" required>
</div>

<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Objet :</label>
  <input type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"\" required>
</div>

<div class=\"mb-3\">
 <label for=\"exampleFormControlInput1\" class=\"form-label\">Message :</label>
  <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"4\"></textarea>
</div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-danger\" data-bs-target=\"#staticBackdrop{{message.id}}\" data-bs-toggle=\"modal\"><i class=\"fas fa-arrow-left\"></i></button>
\t\t<button class=\"btn btn-primary\" type=\"submit\"><i class=\"fas fa-envelope\"></i></button>
      </div>
    </div>
  </div>
</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<br>
\t\t</div>
\t\t</div>

\t\t
\t\t</div>
\t\t<!-- Button trigger modal -->


\t\t<!-- Modal -->
\t\t
</div><!-- Modal -->{% endblock %}
", "administration/messagePublic/index.html.twig", "/Users/sevyondatracks/Desktop/maykconsulting/templates/administration/messagePublic/index.html.twig");
    }
}
