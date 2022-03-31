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

/* base.html.twig */
class __TwigTemplate_0608e58b6f39bdbbc8e51fab10d5a981c0417185007791cb2c62e016a56ffe7d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Salon spécialiste des Soins et de la Beauté des Mains, des Pieds et de leurs Ongles à Rennes\">
    <title>Salon beauté et esthétique de Rennes</title>

    <!--Bootstrap CSS  -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <!--Mon CSS perso -->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <!--Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/LDB.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!--Google font-->
    <link href=\"https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Lato&family=Pinyon+Script&family=Roboto&display=swap\" rel=\"stylesheet\">
    <!--CDN de fontawesome -->
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\">
    <!--Animate css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
    <!--AOS cdn -->
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
</head>
<body>

<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container\">
            <a class=\"navbar-brand \" href=\"\"></a>
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/LDB2.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"75\" height=\"75\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse \" id=\"navbarColor03\">
                <ul class=\"navbar-nav me-auto \">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_home");
        echo "\">Accueil
                            <span class=\"visually-hidden\">(current)</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#propos\">A propos</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#prestation\">Prestation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#blog\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#meteo\">Meteo</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#contact\">Contact</a>
                    </li>

                    ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65)) {
            // line 66
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list");
                echo "\">Dashboard</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 71
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                echo "\">Deconnexion</a>
                            </li>
                        ";
            }
            // line 74
            echo "
                    ";
        }
        // line 76
        echo "
                </ul>

            </div>
        </div>
        <a href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><i class=\"fab fa-2x fa-facebook\"></i></a>
    </nav>


</header>


<div class=\"container-fluid\">

    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            echo "        <div class=\"alert alert-success\">
            ";
            // line 92
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "

    ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
</div>


<a id=\"back-to-top\" href=\"#top\" title=\"Revenir début\"><i class=\"fas fa-angle-double-up\"></i></a>
<footer class=\"row justify-content-center\">

    <div class=\"row justify-content-around col-12 col-md-8\" >

        <div class=\"col-md-3 text-start\">
            <h6>HALINH beaute</h6>
            <img class=\"img-fluid\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/LDB2.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"80\" height=\"80\">
            <br><br>
            <p>2022 Tout droit réservé </p>
        </div>

        <div class=\"col-md-3 text-start\">
            <h6>Contact Info</h6>
            <br>
            <p>Tel : 01 02 03 04 05</p>
            <p>Adresse : rue de Paris, 35000 Rennes</p>
            <p>Email : LDB@gmail.com</p>
        </div>

        <div class=\"col-md-3 text-start\">
            <h6>Horaires d'ouverture</h6>
            <br>
            <p>Lundi au samedi 9h30-13h / 14h-19h</p>
            <p><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions légales</a></p>

        </div>

    </div>

</footer>

<script src=\"js/script.js\"></script>
<script>AOS.init();
</script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 97,  233 => 14,  229 => 13,  210 => 126,  190 => 109,  177 => 98,  175 => 97,  171 => 95,  162 => 92,  159 => 91,  155 => 90,  139 => 76,  135 => 74,  129 => 71,  123 => 68,  120 => 67,  117 => 66,  115 => 65,  89 => 42,  78 => 34,  58 => 17,  55 => 16,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\projet5\\templates\\base.html.twig");
    }
}
