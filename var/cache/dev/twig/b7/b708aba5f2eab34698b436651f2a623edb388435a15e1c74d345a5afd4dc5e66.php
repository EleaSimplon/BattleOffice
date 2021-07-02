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

/* landing_page/partials/paypal.html.twig */
class __TwigTemplate_cf5d695b02c7f506636af735ad978c8a9f3ec998c0bbdb4165ffb5c1fb8b0160 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/paypal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/paypal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing_page/partials/paypal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Procéder au paiement</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        <h5 class=\"center\">Veuillez remplir tous les champs</h5>
                        <form method=\"POST\" action=\"\">
                            <div class=\"input-field col s12 l6\">
                                <label for=\"name\">Entrez le nom présent sur la carte: </label>
                                <input type=\"text\" name=\"name\" id=\"name\" required>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <label for=\"prix\">";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "produit", [], "any", false, false, false, 24), "prixPromo", [], "any", false, false, false, 24) / 100) . 0), "html", null, true);
        echo " €</label>
                                <input type=\"text\" name=\"prix\" id=\"price\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "produit", [], "any", false, false, false, 25), "prixPromo", [], "any", false, false, false, 25) / 100) . 0), "html", null, true);
        echo "\" disabled=\"disabled\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Payez en toute sécurité avec Paypal</h5>
                            <div class=\"input-field col s12\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" required>
                            </div>
                            <div class=\"input-field col s12\">
                                ";
        // line 35
        echo "                               <div id=\"smart-button-container\">
                                    <div style=\"text-align: center;\">
                                        <div id=\"paypal-button-container\"></div>
                                    </div>
                                </div>
                            </div>
                                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landing_page");
        echo "\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"https://www.paypal.com/sdk/js?client-id=AVmow_Vzhgnod7gRNInFlNNdq8B8GQLxAqxtKV0wapFCykNyeubK4EUxsMyKKkJblT8nmNVnj1-_KqhN&currency=EUR\" data-sdk-integration-source=\"button-factory\"></script>
    
    <script>
        paypal.Buttons({

            createOrder: function(data, actions) {
                let amount = document.querySelector('#price').value 
                console.log(amount);
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: amount
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name)
                    document.querySelector('#payment-form').submit()
                });
            }
        }).render('#paypal-button-container'); // Display payment options on your web page
    </script>

    <script>

        const baseRequest = {
            apiVersion: 2,
            apiVersionMinor: 0
        };

        const tokenizationSpecification = {
            type: 'PAYMENT_GATEWAY',
            parameters: {
                'gateway': 'example',
                'gatewayMerchantId': 'exampleGatewayMerchantId'
            }
        };

        const allowedCardNetworks = [\"AMEX\", \"DISCOVER\", \"INTERAC\", \"JCB\", \"MASTERCARD\", \"VISA\"];

        const allowedCardAuthMethods = [\"PAN_ONLY\", \"CRYPTOGRAM_3DS\"];

        const baseCardPaymentMethod = {
            type: 'CARD',
            parameters: {
                allowedAuthMethods: allowedCardAuthMethods,
                allowedCardNetworks: allowedCardNetworks
            }
        };

        const cardPaymentMethod = Object.assign(
            {tokenizationSpecification: tokenizationSpecification},
            baseCardPaymentMethod
        );


    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "landing_page/partials/paypal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  146 => 54,  136 => 53,  116 => 41,  108 => 35,  96 => 25,  92 => 24,  72 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {# ************** SECTION FORM STRIPE **************#}
    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Procéder au paiement</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        <h5 class=\"center\">Veuillez remplir tous les champs</h5>
                        <form method=\"POST\" action=\"\">
                            <div class=\"input-field col s12 l6\">
                                <label for=\"name\">Entrez le nom présent sur la carte: </label>
                                <input type=\"text\" name=\"name\" id=\"name\" required>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <label for=\"prix\">{{ (order.produit.prixPromo / 100) ~ 0 }} €</label>
                                <input type=\"text\" name=\"prix\" id=\"price\" value=\"{{ (order.produit.prixPromo / 100) ~ 0 }}\" disabled=\"disabled\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Payez en toute sécurité avec Paypal</h5>
                            <div class=\"input-field col s12\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" required>
                            </div>
                            <div class=\"input-field col s12\">
                                {# CARD PAYPAL #}
                               <div id=\"smart-button-container\">
                                    <div style=\"text-align: center;\">
                                        <div id=\"paypal-button-container\"></div>
                                    </div>
                                </div>
                            </div>
                                <a href=\"{{ path ('landing_page') }}\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

{% endblock %}


{% block javascripts %}
    {# PAYPAL SCRIPT #}
    <script src=\"https://www.paypal.com/sdk/js?client-id=AVmow_Vzhgnod7gRNInFlNNdq8B8GQLxAqxtKV0wapFCykNyeubK4EUxsMyKKkJblT8nmNVnj1-_KqhN&currency=EUR\" data-sdk-integration-source=\"button-factory\"></script>
    
    <script>
        paypal.Buttons({

            createOrder: function(data, actions) {
                let amount = document.querySelector('#price').value 
                console.log(amount);
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: amount
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name)
                    document.querySelector('#payment-form').submit()
                });
            }
        }).render('#paypal-button-container'); // Display payment options on your web page
    </script>

    <script>

        const baseRequest = {
            apiVersion: 2,
            apiVersionMinor: 0
        };

        const tokenizationSpecification = {
            type: 'PAYMENT_GATEWAY',
            parameters: {
                'gateway': 'example',
                'gatewayMerchantId': 'exampleGatewayMerchantId'
            }
        };

        const allowedCardNetworks = [\"AMEX\", \"DISCOVER\", \"INTERAC\", \"JCB\", \"MASTERCARD\", \"VISA\"];

        const allowedCardAuthMethods = [\"PAN_ONLY\", \"CRYPTOGRAM_3DS\"];

        const baseCardPaymentMethod = {
            type: 'CARD',
            parameters: {
                allowedAuthMethods: allowedCardAuthMethods,
                allowedCardNetworks: allowedCardNetworks
            }
        };

        const cardPaymentMethod = Object.assign(
            {tokenizationSpecification: tokenizationSpecification},
            baseCardPaymentMethod
        );


    </script>

{% endblock %}", "landing_page/partials/paypal.html.twig", "/shared/httpd/NerfShop/templates/landing_page/partials/paypal.html.twig");
    }
}
