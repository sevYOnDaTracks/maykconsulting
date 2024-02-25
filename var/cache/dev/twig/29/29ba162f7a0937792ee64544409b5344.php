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
        echo "\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 21))) {
            // line 22
            echo "\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["success-mail-send"], "method", false, false, false, 23)), "html", null, true);
            echo "
\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\tVotre mail a été envoyé avec success !
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 29
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
        // line 54
        if ( !(isset($context["publicMessage_list"]) || array_key_exists("publicMessage_list", $context) ? $context["publicMessage_list"] : (function () { throw new RuntimeError('Variable "publicMessage_list" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "            <tr>
                <td colspan=\"4\">Aucun Message actuellement !</td>
            </tr>
                        ";
        }
        // line 59
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicMessage_list"]) || array_key_exists("publicMessage_list", $context) ? $context["publicMessage_list"] : (function () { throw new RuntimeError('Variable "publicMessage_list" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 60
            echo "                        
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderName", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "dateTimeReception", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "dateTimeReception", [], "any", false, false, false, 66), "H:i:s "), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t</button>

                                    <div class=\"modal fade\" id=\"staticBackdrop";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" data-bs-backdrop=\"staticS\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"staticBackdropLabel\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 77), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderName", [], "any", false, false, false, 77), "html", null, true);
            echo " </h1>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
                    
\t\t\t\t\t\t";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderMessage", [], "any", false, false, false, 82), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Fermer </button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-target=\"#exampleModalToggle";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\" data-bs-toggle=\"modal\"><i class=\"fas fa-reply\"></i> Repondre</button>


\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>


\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 105), "html", null, true);
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
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 114), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 119))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModalToggle";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" aria-hidden=\"true\" aria-labelledby=\"exampleModalToggleLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"exampleModalToggleLabel2\">Repondre à : ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderEmail", [], "any", false, false, false, 130), "html", null, true);
            echo " </h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
\t  <form method=\"post\" action=\"";
            // line 134
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_message_envoyez_mail");
            echo "\">
\t  <div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Email :</label>
  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\" value=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "SenderEmail", [], "any", false, false, false, 137), "html", null, true);
            echo "\" required>
</div>

<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Objet :</label>
  <input type=\"text\" class=\"form-control\" name=\"object\" id=\"exampleFormControlInput1\" placeholder=\"Entrez l'objet ici !\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "senderObject", [], "any", false, false, false, 142), "html", null, true);
            echo "\" required>
</div>

<div class=\"mb-3\">
 <label for=\"exampleFormControlInput1\" class=\"form-label\">Message :</label>
  <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" name=\"message\" rows=\"4\"></textarea>
</div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-danger\" data-bs-target=\"#staticBackdrop";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 151), "html", null, true);
            echo "\" data-bs-toggle=\"modal\"><i class=\"fas fa-arrow-left\"></i></button>
\t\t<button class=\"btn btn-primary\" type=\"submit\"><i class=\"fas fa-envelope\"></i></button>
      </div>
\t  </form>
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
        // line 164
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
        return array (  321 => 164,  302 => 151,  290 => 142,  282 => 137,  276 => 134,  269 => 130,  260 => 126,  250 => 119,  246 => 118,  239 => 114,  227 => 105,  219 => 100,  202 => 86,  195 => 82,  185 => 77,  178 => 73,  171 => 69,  165 => 66,  160 => 64,  156 => 63,  152 => 62,  148 => 60,  143 => 59,  137 => 55,  135 => 54,  108 => 29,  99 => 23,  96 => 22,  93 => 21,  84 => 15,  81 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
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
\t\t\t{% if app.flashes('success-mail-send') is not empty %}
\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t{{ app.flashes('success-mail-send')|first }}
\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\tVotre mail a été envoyé avec success !
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
\t  <form method=\"post\" action=\"{{ path('app_public_message_envoyez_mail')}}\">
\t  <div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Email :</label>
  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\" value=\"{{message.SenderEmail}}\" required>
</div>

<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Objet :</label>
  <input type=\"text\" class=\"form-control\" name=\"object\" id=\"exampleFormControlInput1\" placeholder=\"Entrez l'objet ici !\" value=\"{{message.senderObject}}\" required>
</div>

<div class=\"mb-3\">
 <label for=\"exampleFormControlInput1\" class=\"form-label\">Message :</label>
  <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" name=\"message\" rows=\"4\"></textarea>
</div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-danger\" data-bs-target=\"#staticBackdrop{{message.id}}\" data-bs-toggle=\"modal\"><i class=\"fas fa-arrow-left\"></i></button>
\t\t<button class=\"btn btn-primary\" type=\"submit\"><i class=\"fas fa-envelope\"></i></button>
      </div>
\t  </form>
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
