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
class __TwigTemplate_40f391bf3a852094a3a5bca1d6528c70e0e862352048e5d4906930f2372768f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin dashboard";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div class=\"container\">
        <h1 class=\"mt-3\">Admin dashboard</h1>

        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-2x fa-arrow-circle-down\"></i></a>
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-2x fa-list-alt \"></i></a>
    <div>
        <table class=\"table\">
            <thead>
            <tr class=\"active\">
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Categorie</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Poster</th>
                <th scope=\"col\" >Action</th>
            </tr>

            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "                <tr>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "categories", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32)), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td class=\"image-admin\"><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["article"], "poster", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"w-100\"></td>

                    <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a></td>
                    <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></a></td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </div>

    </div>



";
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
        return array (  137 => 41,  127 => 37,  123 => 36,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  101 => 30,  97 => 29,  80 => 15,  76 => 14,  70 => 10,  66 => 9,  59 => 7,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard.html.twig", "D:\\projet5\\templates\\admin\\dashboard.html.twig");
    }
}
