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

/* security/login.html.twig */
class __TwigTemplate_0f983a7908b8733c1ec4253ca8fa9022b95a45ecb651cb9bf0d5d7bbc2f812d4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "login";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"container\">
        <h1 class=\"mt-3\">Connexion</h1>
        ";
        // line 12
        if (($context["error"] ?? null)) {
            // line 13
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 15
        echo "
        <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">

            <div class=\"form-group\">
                <label for=\"username\">Email:</label>
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\"/>
            </div>
            <button class=\"btn btn-primary mt-3\" type=\"submit\">login</button>
        </form>
    </div>




";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  85 => 16,  82 => 15,  76 => 13,  74 => 12,  70 => 10,  66 => 9,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "D:\\projet5\\templates\\security\\login.html.twig");
    }
}
