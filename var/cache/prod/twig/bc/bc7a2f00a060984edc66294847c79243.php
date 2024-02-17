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

/* welcome/contact_us.html.twig */
class __TwigTemplate_297bcd2d77f1f9f819d01804e0bc991e extends Template
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
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<section id=\"contact_us\">
\t\t<div class=\"container py-5\">
\t\t\t<div
\t\t\t\tclass=\"row mb-5\">
\t\t\t\t";
        // line 7
        echo "\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 7))) {
            // line 8
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 9
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 9)), "html", null, true);
            echo "
                            <div align=\"center\">
                                Votre message a été envoyé avec succès !
                            </div>
                        </div>
                    ";
        }
        // line 15
        echo "\t\t\t\t<div class=\"col-md-8 col-xl-6 text-center mx-auto\">
\t\t\t\t\t<p class=\"fw-bold text-success mb-2\">Contacts</p>
\t\t\t\t\t<h2 class=\"fw-bold\">Laissez-nous un message ?</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<form class=\"p-3 p-xl-4\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"mb-3\"><input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nom\"></div>
\t\t\t\t\t\t\t<div class=\"mb-3\"><input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\"></div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"6\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary shadow d-block w-100\" type=\"submit\">Envoyer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start\">
\t\t\t\t\t<div class=\"d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center p-3\">
\t\t\t\t\t\t\t<div class=\"bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewbox=\"0 0 16 16\" class=\"bi bi-telephone\">
\t\t\t\t\t\t\t\t\t<path d=\"M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t<h6 class=\"fw-bold mb-0\">Téléphone</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">+33 7 62 68 12 47</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex align-items-center p-3\">
\t\t\t\t\t\t\t<div class=\"bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewbox=\"0 0 16 16\" class=\"bi bi-envelope\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t<h6 class=\"fw-bold mb-0\">Email</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">maykconsulting@gmail.com</p>
\t\t\t\t\t\t\t</div>
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
        return "welcome/contact_us.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  66 => 15,  57 => 9,  54 => 8,  51 => 7,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome/contact_us.html.twig", "/Users/sevyondatracks/Desktop/symfony-6-3-webapp-1/templates/welcome/contact_us.html.twig");
    }
}
