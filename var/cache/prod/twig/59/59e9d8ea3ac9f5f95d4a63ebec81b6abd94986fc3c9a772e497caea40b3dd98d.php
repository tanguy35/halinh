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

/* categories/new.html.twig */
class __TwigTemplate_0bafb3180b9caf574598f4ff1b9e4ad09b7f5e0f5cc69537853b629104e87201 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "categories/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Categorie";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"container\">
        <h1>Categorie</h1>

        ";
        // line 12
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["formCategorie"] ?? null), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 13
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCategorie"] ?? null), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formCategorie"] ?? null), 'widget');
        echo "
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCategorie"] ?? null), 'form_end');
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "categories/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  82 => 14,  77 => 13,  75 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "categories/new.html.twig", "D:\\projet5\\templates\\categories\\new.html.twig");
    }
}
