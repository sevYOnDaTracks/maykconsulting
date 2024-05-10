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

/* welcome/pricing.html.twig */
class __TwigTemplate_679b9d9b143b06f510da86a169dcbc3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/pricing.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        yield "\t<section id=\"pricing\">
    <br>
    <br>
\t\t\t\t\t<p class=\"fw-bold text-success text-center mt-4 animate__animated animate__fadeInLeft\">Nos tarifs</p>
<div class=\"container animate__animated animate__fadeInLeft py-2 py-xl-3\">
    <div class=\"row gy-4 gy-xl-0 row-cols-1 row-cols-md-2 row-cols-xl-2 d-xl-flex align-items-xl-center gutter-y\">
        <div class=\"col\">
            <div class=\"card border-primary border-2\">
                <div class=\"card-body text-center p-4\"><span class=\"badge rounded-pill bg-dark position-absolute top-0 start-50 translate-middle text-uppercase\">Standard</span>
                    <h6 class=\"text-muted card-subtitle\">Un seul service à la fois à partir de : </h6>
                    <h6 class=\"display-6 fw-bold card-title\"> 150 000 FCFA</h6>
                </div>
                <div class=\"card-footer p-4\">
                    <div>
                        <ul class=\"list-unstyled\">
                            <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Admission ou logement ou Garant financier</span></li>
                           <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Serivce client H24 <i class=\"fas fa-users\"></i></span></li>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                        </ul>
                    </div><button  type=\"button\" class=\"btn btn-dark btn-block\" style=\"width:100% ;\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal2\">Plus d'informations +</button>
                </div>
            </div>
        </div>

         <div class=\"col\">
            <div class=\"card border-primary border-2\">
                <div class=\"card-body text-center p-4\"><span class=\"badge rounded-pill bg-success position-absolute top-0 start-50 translate-middle text-uppercase\">VIP</span>
                    <h6 class=\"text-muted card-subtitle\">Nous nous occupons de tout et à partir de :</h6>
                    <h6 class=\"display-6 fw-bold card-title text-success\">500 000 FCFA</h6>
                </div>
                <div class=\"card-footer p-4\">
                    <div>
                        <ul class=\"list-unstyled\">
                            <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Admissions </span></li>
                          <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Logement </span></li>
                        <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Garant financier </span></li>
                                    <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Proccédure de visa pour étude </span></li>
                                   <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Serivce client H24 <i class=\"fas fa-users\"></i></span></li>
                        </ul>
                    </div><button  type=\"button\" class=\"btn btn-dark btn-block\" style=\"width:100% ;\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Plus d'informations +</button>
                </div>
            </div>
        </div>
    </div>
</div>
\t</section>
    <!-- Button trigger modal -->
<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Informations</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <p>Reviens plutard .</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-dark\" data-bs-dismiss=\"modal\">J'ai compris</button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal 2 -->
    <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel2\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel2\">Informations</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>Pour l'instant nous ne prenons en charge que le canada et la France .</p>
                    <p>Admission pour le Canada 🇨🇦 : 500 000 FCFA (Charges comprises) </p>
                    <p></p>
                    <p>Admission pour la France 🇫🇷 : 150 000 FCFA.</p>
                    <p></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-dark\" data-bs-dismiss=\"modal\">J'ai compris</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "welcome/pricing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
\t<section id=\"pricing\">
    <br>
    <br>
\t\t\t\t\t<p class=\"fw-bold text-success text-center mt-4 animate__animated animate__fadeInLeft\">Nos tarifs</p>
<div class=\"container animate__animated animate__fadeInLeft py-2 py-xl-3\">
    <div class=\"row gy-4 gy-xl-0 row-cols-1 row-cols-md-2 row-cols-xl-2 d-xl-flex align-items-xl-center gutter-y\">
        <div class=\"col\">
            <div class=\"card border-primary border-2\">
                <div class=\"card-body text-center p-4\"><span class=\"badge rounded-pill bg-dark position-absolute top-0 start-50 translate-middle text-uppercase\">Standard</span>
                    <h6 class=\"text-muted card-subtitle\">Un seul service à la fois à partir de : </h6>
                    <h6 class=\"display-6 fw-bold card-title\"> 150 000 FCFA</h6>
                </div>
                <div class=\"card-footer p-4\">
                    <div>
                        <ul class=\"list-unstyled\">
                            <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Admission ou logement ou Garant financier</span></li>
                           <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Serivce client H24 <i class=\"fas fa-users\"></i></span></li>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                        </ul>
                    </div><button  type=\"button\" class=\"btn btn-dark btn-block\" style=\"width:100% ;\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal2\">Plus d'informations +</button>
                </div>
            </div>
        </div>

         <div class=\"col\">
            <div class=\"card border-primary border-2\">
                <div class=\"card-body text-center p-4\"><span class=\"badge rounded-pill bg-success position-absolute top-0 start-50 translate-middle text-uppercase\">VIP</span>
                    <h6 class=\"text-muted card-subtitle\">Nous nous occupons de tout et à partir de :</h6>
                    <h6 class=\"display-6 fw-bold card-title text-success\">500 000 FCFA</h6>
                </div>
                <div class=\"card-footer p-4\">
                    <div>
                        <ul class=\"list-unstyled\">
                            <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Admissions </span></li>
                          <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Logement </span></li>
                        <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Garant financier </span></li>
                                    <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Proccédure de visa pour étude </span></li>
                                   <li class=\"d-flex mb-2\"><span class=\"bs-icon-xs bs-icon-rounded bg-dark bs-icon me-2\"><svg class=\"bi bi-check-lg text-white\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"></path>
                                    </svg></span><span>Serivce client H24 <i class=\"fas fa-users\"></i></span></li>
                        </ul>
                    </div><button  type=\"button\" class=\"btn btn-dark btn-block\" style=\"width:100% ;\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Plus d'informations +</button>
                </div>
            </div>
        </div>
    </div>
</div>
\t</section>
    <!-- Button trigger modal -->
<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Informations</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <p>Reviens plutard .</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-dark\" data-bs-dismiss=\"modal\">J'ai compris</button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal 2 -->
    <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel2\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel2\">Informations</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>Pour l'instant nous ne prenons en charge que le canada et la France .</p>
                    <p>Admission pour le Canada 🇨🇦 : 500 000 FCFA (Charges comprises) </p>
                    <p></p>
                    <p>Admission pour la France 🇫🇷 : 150 000 FCFA.</p>
                    <p></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-dark\" data-bs-dismiss=\"modal\">J'ai compris</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "welcome/pricing.html.twig", "/Users/sevyondatracks/Documents/maykconsulting/templates/welcome/pricing.html.twig");
    }
}
