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

/* main/detail.html.twig */
class __TwigTemplate_95d3911af6cbe6c60a65dafe13b5967bc170b5a1df69cab6c0feaffc2fed0d0c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 5), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div class=\"container\">


        <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
        <p class=\"date\">Ecrit le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "published", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "published", [], "any", false, false, false, 15), "H:i"), "html", null, true);
        echo "  </p>
        <p>Catégorie : ";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categories", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16)), "html", null, true);
        echo "</p>


        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "poster", [], "any", false, false, false, 19))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 19)), "html", null, true);
        echo "\" class=\"card-img-top\">

        <h2>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 21), "html", null, true);
        echo "</h2>
        <p>";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 22);
        echo "</p>

        <h2>Commentaires</h2>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "commentaires", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 26
            echo "            <p><b>Commentaire écrit par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "pseudo", [], "any", false, false, false, 26), "html", null, true);
            echo "</b></p>
            <p id=\"justify\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        <h2> Ajouter un commentaire</h2>
        <p class=\"mb-3\">";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formComment"] ?? null), 'form');
        echo "</p>

    </div>


";
    }

    public function getTemplateName()
    {
        return "main/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  119 => 30,  110 => 27,  105 => 26,  101 => 25,  95 => 22,  91 => 21,  84 => 19,  78 => 16,  72 => 15,  68 => 14,  62 => 10,  58 => 9,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/detail.html.twig", "D:\\projet5\\templates\\main\\detail.html.twig");
    }
}
