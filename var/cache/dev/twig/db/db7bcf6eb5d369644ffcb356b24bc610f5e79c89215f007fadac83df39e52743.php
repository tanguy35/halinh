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

/* admin/dashboard.html.twig */
class __TwigTemplate_a2e4097344270a2e6a51b1aab44d5eb4ded2491655dd4af6a3fcf8dc1b2baaef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"container\">
        <h1>Admin dashboard</h1>

        <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new");
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-2x fa-arrow-circle-down\"></i></a>
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-2x fa-list-alt \"></i></a>

        <table class=\"table\">
            <thead>
            <tr class=\"active\">
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Categorie</th>
                <th scope=\"col\">Poster</th>
";
        // line 22
        echo "                <th scope=\"col\" >Action</th>
            </tr>

            </thead>
            <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "categories", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30)), "html", null, true);
            echo "</td>
                    <td class=\"image-admin\"><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["article"], "poster", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"w-100\"></td>
";
            // line 33
            echo "
                    <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a></td>
                    <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></a></td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>

    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 39,  144 => 35,  140 => 34,  137 => 33,  131 => 31,  127 => 30,  123 => 29,  120 => 28,  116 => 27,  109 => 22,  98 => 13,  94 => 12,  88 => 8,  78 => 7,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block title %}Admin dashboard{% endblock %}

{% block body %}

    <div class=\"container\">
        <h1>Admin dashboard</h1>

        <a href=\"{{ path('admin_new') }}\" class=\"btn btn-success\"><i class=\"fas fa-2x fa-arrow-circle-down\"></i></a>
        <a href=\"{{ path('categorie_new') }}\" class=\"btn btn-success\"><i class=\"fas fa-2x fa-list-alt \"></i></a>

        <table class=\"table\">
            <thead>
            <tr class=\"active\">
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Categorie</th>
                <th scope=\"col\">Poster</th>
{#                <th scope=\"col\">Content</th>#}
                <th scope=\"col\" >Action</th>
            </tr>

            </thead>
            <tbody>
            {%  for article in articles %}
                <tr>
                    <td>{{ article.id }}</td>
                    <td>{{ article.categories.nom | capitalize }}</td>
                    <td class=\"image-admin\"><img src=\"{{asset(\"img/\"~article.poster)}}\" alt=\"{{ article.titre }}\" class=\"w-100\"></td>
{#                    <td>{{ article.content | raw }}</td>#}

                    <td><a href=\"{{ path('admin_update', {'id': article.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a></td>
                    <td><a href=\"{{ path('admin_delete', {'id': article.id}) }}\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></a></td>

                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>



{% endblock %}", "admin/dashboard.html.twig", "D:\\projet5\\templates\\admin\\dashboard.html.twig");
    }
}
