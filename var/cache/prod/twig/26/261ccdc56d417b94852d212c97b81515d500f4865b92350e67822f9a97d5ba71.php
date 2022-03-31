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

/* user/register.html.twig */
class __TwigTemplate_a3ba576dca0c13633f48f20971bae33a7db6ad5dbd9705db6fa6b77063d4f0bf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "

    <div class=\"container\">

        <h1> ";
        // line 17
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "</h1>

        ";
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 20
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <button type=\"submit\" class=\"btn btn-primary mb-3\">S'inscrire</button>
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "



    </div>
";
    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  88 => 22,  82 => 20,  80 => 19,  75 => 17,  69 => 13,  65 => 12,  59 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/register.html.twig", "D:\\projet5\\templates\\user\\register.html.twig");
    }
}
