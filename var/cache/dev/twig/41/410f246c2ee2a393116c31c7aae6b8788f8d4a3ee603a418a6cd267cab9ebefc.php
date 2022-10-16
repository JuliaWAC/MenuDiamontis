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

/* pages/ingredient/index.html.twig */
class __TwigTemplate_d6a5b9b4f6c0cf8eea1c1b61c86c2f194c35d05106ebc8ae8878c7ffb3904ecb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/ingredient/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bistrot - Ingredient";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class='container mt-4'>
        ";
        // line 7
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 7, $this->source); })()), "items", [], "any", false, false, false, 7) === [])) {
            // line 8
            echo "        <h1>Ingrédients</h1>

        <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary mb-3 mt-4\">Ajouter un ingrédient</a>

        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "            <div class='alert alert-success mt-4'>
                ";
                // line 14
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
            <div class='count mt-4'>
                <h4>Il y a ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 19, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 19), "html", null, true);
            echo " ingrédients au total.</h4>
            </div>

        <table class=\"table mt-4\">
            <thead>
                <tr>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Date de création</th>
                <th scope=\"col\">Edition</th>
                <th scope=\"col\">Suppression</th>
                </tr>
            </thead>
            <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 35
                echo "                        <tr>
                        <th scope=\"row\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "</th>
                        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "price", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Editer</a>
                        </td>
                        <td>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
                        </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </tbody>
        </table>
        <div class=\"navigation d-flex justify-content-center mt-4\">
            ";
            // line 51
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 51, $this->source); })()));
            echo "
        </div>
        ";
        } else {
            // line 54
            echo "            <h1>Il n'y a pas d'ingrédients.</h1>
        ";
        }
        // line 56
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/ingredient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 56,  191 => 54,  185 => 51,  180 => 48,  170 => 44,  164 => 41,  159 => 39,  155 => 38,  151 => 37,  147 => 36,  144 => 35,  140 => 34,  122 => 19,  118 => 17,  109 => 14,  106 => 13,  102 => 12,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bistrot - Ingredient{% endblock %}

{% block body %}
    <div class='container mt-4'>
        {% if not ingredients.items is same as ([]) %}
        <h1>Ingrédients</h1>

        <a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary mb-3 mt-4\">Ajouter un ingrédient</a>

        {% for message in app.flashes('success') %}
            <div class='alert alert-success mt-4'>
                {{ message }}
            </div>
        {% endfor %}

            <div class='count mt-4'>
                <h4>Il y a {{ ingredients.getTotalItemCount }} ingrédients au total.</h4>
            </div>

        <table class=\"table mt-4\">
            <thead>
                <tr>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Date de création</th>
                <th scope=\"col\">Edition</th>
                <th scope=\"col\">Suppression</th>
                </tr>
            </thead>
            <tbody>
                    {% for ingredient in ingredients %}
                        <tr>
                        <th scope=\"row\">{{ ingredient.id }}</th>
                        <td>{{ ingredient.name }}</td>
                        <td>{{ ingredient.price }}</td>
                        <td>{{ ingredient.createdAt|date('d/m/Y') }}</td>
                        <td>
                            <a href=\"{{ path('ingredient.edit', {'id': ingredient.id}) }}\" class=\"btn btn-info\">Editer</a>
                        </td>
                        <td>
                            <a href=\"{{ path('ingredient.delete', {'id': ingredient.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                        </td>
                        </tr>
                    {% endfor %}
            </tbody>
        </table>
        <div class=\"navigation d-flex justify-content-center mt-4\">
            {{ knp_pagination_render(ingredients) }}
        </div>
        {% else %}
            <h1>Il n'y a pas d'ingrédients.</h1>
        {% endif %}
    </div>
{% endblock %}
", "pages/ingredient/index.html.twig", "/Users/julia/Documents/MenuDiamontis/menudiamontis/templates/pages/ingredient/index.html.twig");
    }
}
