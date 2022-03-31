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

/* admin/form.html.twig */
class __TwigTemplate_6889ae2400f41f394a604f50f03ac3a1708810d0554249da6324463a8759c52b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"container\">
        ";
        // line 11
        if (array_key_exists("update", $context)) {
            // line 12
            echo "            <h1>Modification des articles</h1>
            ";
            // line 13
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["formUpdate"] ?? null), [0 => "bootstrap_5_layout.html.twig"], true);
            // line 14
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formUpdate"] ?? null), 'form_start');
            echo "
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formUpdate"] ?? null), 'widget');
            echo "
            <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
            ";
            // line 17
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formUpdate"] ?? null), 'form_end');
            echo "

        ";
        } else {
            // line 20
            echo "            <h1>Insertion des articles</h1>
            ";
            // line 21
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_5_layout.html.twig"], true);
            // line 22
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
            ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

        ";
        }
        // line 28
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  111 => 25,  106 => 23,  101 => 22,  99 => 21,  96 => 20,  90 => 17,  85 => 15,  80 => 14,  78 => 13,  75 => 12,  73 => 11,  70 => 10,  66 => 9,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/form.html.twig", "D:\\projet5\\templates\\admin\\form.html.twig");
    }
}
