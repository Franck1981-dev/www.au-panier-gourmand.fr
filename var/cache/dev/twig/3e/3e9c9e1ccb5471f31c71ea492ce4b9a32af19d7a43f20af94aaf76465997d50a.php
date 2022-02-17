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

/* cart/index.html.twig */
class __TwigTemplate_c164ef1429efab781839df8d1e7b3263bae72ea129b23676b58c2b51c84ddb1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Votre panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<h1>Votre panier:</h1>

<div class=\"shipping\">
    <div class=\"shippingTitle\">
        <h2>Veuillez choisir votre lieu de livraison:</h2>
    </div>
    <div class=\"dateShipping\">
        <label class=\"date\">Date de livraison souhaitée:</label>
        <input type=\"date\" id=\"start\" name=\"trip-start\" value=\"now\" min=\"2021-01-01\" max=\"2050-12-31\">
    </div>
    <div class=\"shippingLocation\">
        <label for=\"location-select\">Lieu de livraison:</label>
        <select name=\"locations\" id=\"location-select\">
            <option value=\"\">-- --</option>
            <option value=\"Lissac\">Lissac</option>
            <option value=\"Canté\">Canté</option>
            <option value=\"Saint Quirc\">Saint Quirc</option>
            <option value=\"Labatut\">Labatut</option>
        </select>
    </div>
</div>

<table class=\"table\">
    <thead>
        <tr>
            <th>Produit</th>
            <th class=\"text-center\">Visuel</th>
            <th class=\"text-center\">Prix</th>
            <th class=\"text-center\">Quantité</th>
            <th class=\"text-center\">Total</th>
            <th class=\"text-center\">Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataCart"]) || array_key_exists("dataCart", $context) ? $context["dataCart"] : (function () { throw new RuntimeError('Variable "dataCart" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 38
            echo "        <tr>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
            <td class=\"text-center\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 40), "image", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
            <td class=\"text-center\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41), "html", null, true);
            echo " €</td>
            <td class=\"text-center\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
            <td class=\"text-center\">";
            // line 43
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43)), "html", null, true);
            echo " €</td>
            <td class=\"text-center\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"plus\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"minus\">
                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"delete\">
                    <i class=\"fas fa-times-circle\"></i>
                </a>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "        <tr>
            <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"3\">
                <U>Total</U>
            </td>
            <td class=\"text-end\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " €</td>
            <td>
                <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
        echo "\" class=\"deleteAll\">
                    <i class=\"fas fa-trash-alt\"></i>
                </a>
            </td>
        </tr>
    </tfoot>
</table>

<div class=\"container\">
    <div id=\"Checkout\" class=\"inline\">
        <h1>Paiement de la commande</h1>
        <div class=\"card-row\">
            <span class=\"visa\"></span>
            <span class=\"mastercard\"></span>
            <span class=\"amex\"></span>
            <span class=\"discover\"></span>
        </div>
        <form>
            <div class=\"form-group\">
                <label for=\"PaymentAmount\">Total commande</label>
                <div class=\"amount-placeholder\">
                    <span>";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 90, $this->source); })()), "html", null, true);
        echo " €</span>
                </div>
            </div>
            <div class=\"form-group\">
                <label or=\"NameOnCard\">Nom</label>
                <input id=\"NameOnCard\" class=\"form-control\" type=\"text\" maxlength=\"255\"></input>
            </div>
            <div class=\"form-group\">
                <label for=\"CreditCardNumber\">N° carte</label>
                <input id=\"CreditCardNumber\" class=\"null card-image form-control\" type=\"text\"></input>
            </div>
            <div class=\"expiry-date-group form-group\">
                <label for=\"ExpiryDate\">Date expiration</label>
                <input id=\"ExpiryDate\" class=\"form-control\" type=\"text\" placeholder=\"MM / YY\" maxlength=\"7\"></input>
            </div>
            <div class=\"security-code-group form-group\">
                <label for=\"SecurityCode\">Code sécurité</label>
                <div class=\"input-container\">
                    <input id=\"SecurityCode\" class=\"form-control\" type=\"text\"></input>
                    <i id=\"cvc\" class=\"fa fa-question-circle\"></i>
                </div>
                <div class=\"cvc-preview-container two-card hide  m-2\">
                    <div class=\"amex-cvc-preview\"></div>
                    <div class=\"visa-mc-dis-cvc-preview\"></div>
                </div>
            </div>
            <div class=\"zip-code-group form-group\">
                <label for=\"ZIPCode\">Code postal</label>
                <div class=\"input-container\">
                    <input id=\"ZIPCode\" class=\"form-control\" type=\"text\" maxlength=\"10\"></input>
                    <a tabindex=\"0\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"left\" data-content=\"Enter the ZIP/Postal code for your credit card billing address.\"><i class=\"fa fa-question-circle\"></i></a>
                </div>
            </div>
            <a id=\"PayButton\" class=\"btn btn-block btn-success submit-button mt-2\" type=\"submit\">
                <span class=\"submit-button-lock\"></span>
                <span class=\"align-middle\">Paiement ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 125, $this->source); })()), "html", null, true);
        echo " €</span>
            </a>
        </form>
    </div>
</div>
<div class=\"return\">
    <a href=\" ";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \" class=\"p-3 text-center \">Retour à l'accueil</a></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 131,  259 => 125,  221 => 90,  197 => 69,  192 => 67,  184 => 61,  175 => 57,  164 => 51,  158 => 48,  152 => 45,  147 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  128 => 38,  123 => 37,  86 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Votre panier{% endblock %} {% block body %}

<h1>Votre panier:</h1>

<div class=\"shipping\">
    <div class=\"shippingTitle\">
        <h2>Veuillez choisir votre lieu de livraison:</h2>
    </div>
    <div class=\"dateShipping\">
        <label class=\"date\">Date de livraison souhaitée:</label>
        <input type=\"date\" id=\"start\" name=\"trip-start\" value=\"now\" min=\"2021-01-01\" max=\"2050-12-31\">
    </div>
    <div class=\"shippingLocation\">
        <label for=\"location-select\">Lieu de livraison:</label>
        <select name=\"locations\" id=\"location-select\">
            <option value=\"\">-- --</option>
            <option value=\"Lissac\">Lissac</option>
            <option value=\"Canté\">Canté</option>
            <option value=\"Saint Quirc\">Saint Quirc</option>
            <option value=\"Labatut\">Labatut</option>
        </select>
    </div>
</div>

<table class=\"table\">
    <thead>
        <tr>
            <th>Produit</th>
            <th class=\"text-center\">Visuel</th>
            <th class=\"text-center\">Prix</th>
            <th class=\"text-center\">Quantité</th>
            <th class=\"text-center\">Total</th>
            <th class=\"text-center\">Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for element in dataCart %}
        <tr>
            <td>{{ element.product.name }}</td>
            <td class=\"text-center\">{{ element.product.image }}</td>
            <td class=\"text-center\">{{ element.product.price }} €</td>
            <td class=\"text-center\">{{ element.quantity }}</td>
            <td class=\"text-center\">{{ element.quantity * element.product.price }} €</td>
            <td class=\"text-center\">
                <a href=\"{{path('cart_add', {id: element.product.id})}}\" class=\"plus\">
                    <i class=\"fas fa-plus-circle\"></i>
                </a>
                <a href=\"{{path('cart_remove', {id: element.product.id})}}\" class=\"minus\">
                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"{{path('cart_delete', {id: element.product.id})}}\" class=\"delete\">
                    <i class=\"fas fa-times-circle\"></i>
                </a>
            </td>
        </tr>
        {% else %}
        <tr>
            <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
        </tr>
        {% endfor %}
    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"3\">
                <U>Total</U>
            </td>
            <td class=\"text-end\">{{ total }} €</td>
            <td>
                <a href=\"{{ path( 'cart_delete_all') }}\" class=\"deleteAll\">
                    <i class=\"fas fa-trash-alt\"></i>
                </a>
            </td>
        </tr>
    </tfoot>
</table>

<div class=\"container\">
    <div id=\"Checkout\" class=\"inline\">
        <h1>Paiement de la commande</h1>
        <div class=\"card-row\">
            <span class=\"visa\"></span>
            <span class=\"mastercard\"></span>
            <span class=\"amex\"></span>
            <span class=\"discover\"></span>
        </div>
        <form>
            <div class=\"form-group\">
                <label for=\"PaymentAmount\">Total commande</label>
                <div class=\"amount-placeholder\">
                    <span>{{ total }} €</span>
                </div>
            </div>
            <div class=\"form-group\">
                <label or=\"NameOnCard\">Nom</label>
                <input id=\"NameOnCard\" class=\"form-control\" type=\"text\" maxlength=\"255\"></input>
            </div>
            <div class=\"form-group\">
                <label for=\"CreditCardNumber\">N° carte</label>
                <input id=\"CreditCardNumber\" class=\"null card-image form-control\" type=\"text\"></input>
            </div>
            <div class=\"expiry-date-group form-group\">
                <label for=\"ExpiryDate\">Date expiration</label>
                <input id=\"ExpiryDate\" class=\"form-control\" type=\"text\" placeholder=\"MM / YY\" maxlength=\"7\"></input>
            </div>
            <div class=\"security-code-group form-group\">
                <label for=\"SecurityCode\">Code sécurité</label>
                <div class=\"input-container\">
                    <input id=\"SecurityCode\" class=\"form-control\" type=\"text\"></input>
                    <i id=\"cvc\" class=\"fa fa-question-circle\"></i>
                </div>
                <div class=\"cvc-preview-container two-card hide  m-2\">
                    <div class=\"amex-cvc-preview\"></div>
                    <div class=\"visa-mc-dis-cvc-preview\"></div>
                </div>
            </div>
            <div class=\"zip-code-group form-group\">
                <label for=\"ZIPCode\">Code postal</label>
                <div class=\"input-container\">
                    <input id=\"ZIPCode\" class=\"form-control\" type=\"text\" maxlength=\"10\"></input>
                    <a tabindex=\"0\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"left\" data-content=\"Enter the ZIP/Postal code for your credit card billing address.\"><i class=\"fa fa-question-circle\"></i></a>
                </div>
            </div>
            <a id=\"PayButton\" class=\"btn btn-block btn-success submit-button mt-2\" type=\"submit\">
                <span class=\"submit-button-lock\"></span>
                <span class=\"align-middle\">Paiement {{ total }} €</span>
            </a>
        </form>
    </div>
</div>
<div class=\"return\">
    <a href=\" {{ path( 'home') }} \" class=\"p-3 text-center \">Retour à l'accueil</a></div>{% endblock %}", "cart/index.html.twig", "/home/user/Bureau/www.au-panier-gourmand.fr/www.au-panier-gourmand.fr/templates/cart/index.html.twig");
    }
}
