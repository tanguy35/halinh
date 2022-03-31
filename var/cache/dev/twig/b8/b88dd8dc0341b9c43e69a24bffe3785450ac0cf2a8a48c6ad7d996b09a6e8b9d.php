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
class __TwigTemplate_6c0228614846537653239ca64aa57b9c37b8460a785ae0e671441f630f4ea211 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Salon spécialiste des Soins et de la Beauté des Mains, des Pieds et de leurs Ongles à Rennes\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--Bootstrap CSS  -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <!--Mon CSS perso -->
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <!--Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 16
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
            <img src=\"img/LDB2.png\" alt=\"logo\" width=\"75\" height=\"75\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse \" id=\"navbarColor03\">
                <ul class=\"navbar-nav me-auto \">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_home");
        echo "\">Accueil
                            <span class=\"visually-hidden\">(current)</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#prestation\">Prestation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#blog\">Blog</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#contact\">Contact</a>
                    </li>

                    ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 59
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list");
                echo "\">Dashboard</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 63
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                echo "\">Deconnexion</a>
                            </li>
                        ";
            }
            // line 66
            echo "
                    ";
        } else {
            // line 68
            echo "
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_register");
            echo "\">Inscription</a>
                        </li>
                    ";
        }
        // line 77
        echo "
                </ul>

            </div>
        </div>
        <a href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><i class=\"fab fa-2x fa-facebook\"></i></a>
    </nav>


</header>


<div class=\"container-fluid\">

    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 92
            echo "        <div class=\"alert alert-success\">
            ";
            // line 93
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
</div>


<a id=\"back-to-top\" href=\"#top\" title=\"Revenir début\"><i class=\"fas fa-angle-double-up\"></i></a>
<footer class=\"row justify-content-center\" id=\"contact\">

    <div class=\"row justify-content-around col-12 col-md-8\" >

        <div class=\"col-md-3 text-center\">
            <h6>L'heure de beaute</h6>
            <img class=\"img-fluid\" src=\"img/LDB2.png\" alt=\"logo\" width=\"80\" height=\"80\">
            <br><br>
            <p>2021 Tous droits réservé </p>
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Salon beauté et esthétique de Rennes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  285 => 97,  272 => 13,  262 => 12,  243 => 8,  192 => 98,  190 => 97,  187 => 96,  178 => 93,  175 => 92,  171 => 91,  155 => 77,  149 => 74,  142 => 70,  138 => 68,  134 => 66,  128 => 63,  122 => 60,  119 => 59,  116 => 58,  114 => 57,  95 => 41,  67 => 16,  64 => 15,  62 => 12,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Salon spécialiste des Soins et de la Beauté des Mains, des Pieds et de leurs Ongles à Rennes\">
    <title>{% block title %}Salon beauté et esthétique de Rennes{% endblock %}</title>
    <!--Bootstrap CSS  -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <!--Mon CSS perso -->
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% endblock %}
    <!--Favicon-->
    <link rel=\"shortcut icon\" href=\"{{ asset('img/LDB.png') }}\" type=\"image/x-icon\">
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
            <img src=\"img/LDB2.png\" alt=\"logo\" width=\"75\" height=\"75\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse \" id=\"navbarColor03\">
                <ul class=\"navbar-nav me-auto \">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"{{ path('main_home') }}\">Accueil
                            <span class=\"visually-hidden\">(current)</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#prestation\">Prestation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#blog\">Blog</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#contact\">Contact</a>
                    </li>

                    {% if app.user %}
                        {% if is_granted(\"ROLE_ADMIN\") %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('admin_list') }}\">Dashboard</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('logout') }}\">Deconnexion</a>
                            </li>
                        {% endif %}

                    {% else %}

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('login') }}\">Connexion</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('user_register') }}\">Inscription</a>
                        </li>
                    {% endif %}

                </ul>

            </div>
        </div>
        <a href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><i class=\"fab fa-2x fa-facebook\"></i></a>
    </nav>


</header>


<div class=\"container-fluid\">

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    {% block body %}{% endblock %}

</div>


<a id=\"back-to-top\" href=\"#top\" title=\"Revenir début\"><i class=\"fas fa-angle-double-up\"></i></a>
<footer class=\"row justify-content-center\" id=\"contact\">

    <div class=\"row justify-content-around col-12 col-md-8\" >

        <div class=\"col-md-3 text-center\">
            <h6>L'heure de beaute</h6>
            <img class=\"img-fluid\" src=\"img/LDB2.png\" alt=\"logo\" width=\"80\" height=\"80\">
            <br><br>
            <p>2021 Tous droits réservé </p>
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

        </div>

    </div>

</footer>

<script src=\"js/script.js\"></script>
<script>AOS.init();
</script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "base.html.twig", "D:\\projet5\\templates\\base.html.twig");
    }
}
