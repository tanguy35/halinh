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

/* main/list.html.twig */
class __TwigTemplate_ecef8f69199f649990fef7048a34c04926a5de44f9ce5986445bfc396a2ac0c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/list.html.twig", 1);
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
        echo "    <section class=\"container-fluid \" id=\"bienvenue\">
        <div id=\"apropos\" class=\" h-100 row align-items-center justify-content-center text-center\" >

            <div>
                <h1 data-aos=\"fade-left\" data-aos-duration=\"3000\">HALINH BEAUTE</h1>
                <h2 data-aos=\"fade-right\" data-aos-duration=\"2000\">Institut de beaute a Rennes</h2>
                <h3 data-aos=\"fade-left\" data-aos-duration=\"2000\">Bienvenue</h3>
            </div>

        </div>
    </section>


    <div class=\"container-fluid\">
        <!-- GRANDE SECTION -->
        <section class=\"row col-12  align-items-center justify-content-center\" id=\"positionColonne\">

            <div class=\"cadre\" ></div>
            <div class=\"col-12 col-sm-6 col-md-4 image\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/magasin.jpg"), "html", null, true);
        echo "\" alt=\"photo maquillage\">
            </div>

            <div class=\"col-12 col-sm-6 col-md-4 discover\" id=\"propos\">

                <h3 >A propos</h3>
                <h4>Notre experience</h4>
                <p >Poussez la porte de l’institut, c’est arriver dans un lieu sympathique à l’ambiance chaleureuse. Vous êtes accueillie par une équipe souriante et dynamique à l’image du salon. Passionnées par leur métier, ces professionnelles sont aux petits soins pour répondre à vos souhaits.

                    Ainsi laissez-vous tenter par une manucure ou une beauté des pieds pour un moment de détente intense. Le visage et le corps ne sont pas en reste. Que ce soit pour un soin qui sublime votre visage ou pour une épilation, tout est fait pour prendre soin de vous ! De même pour une beauté complète, optez pour les forfaits sélectionnés par votre équipe au savoir-faire indiscutable. Tous nos produits de grande marque sont signés OPI pour préserver votre beauté naturelle.</p>

            </div>

        </section> <!--.row-->

        <section class=\"row col-12\" id=\"menu\">

            <div class=\"col-md-2 aside1 img-fluid\" ></div> <!--ASIDE GAUCHE-->

            <div class=\"col-12 col-md-8 \">

                <br><br><br>

                <h2 class=\"text-center\" id=\"prestation\">PRESTATIONS</h2>

                <br><br><br>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th><p>Beauté des mains, des pieds</p></th>
                        <th>prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Pose extension gel french ou couleurs  </td>
                        <td>50 € </td>
                    </tr>
                    <tr>
                        <td>Réparation d'un ongle cassé  </td>
                        <td>05 € </td>
                    </tr>
                    <tr>
                        <td>Remplissage french ou couleur  </td>
                        <td>25 € </td>
                    </tr>
                    <tr>
                        <td>Pose gel pieds french ou couleur  </td>
                        <td>30 € </td>
                    </tr>
                    <tr>
                        <td>Depose d'ongles gel  </td>
                        <td>15 € </td>
                    </tr>
                    <tr>
                        <td>Decoration sur ongle par doigt  </td>
                        <td>Devis</td>
                    </tr>

                    </tbody>
                </table>

                <br><br><br>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th><p>Beauté du regard</p></th>
                        <th>prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Pose cils volume russe  </td>
                        <td>90 € </td>
                    </tr>
                    <tr>
                        <td>Entretien moins de 3 semaines  </td>
                        <td>30 € </td>
                    </tr>
                    <tr>
                        <td>Retouche après 3 ou 4 semaines  </td>
                        <td>40 € </td>
                    </tr>
                    <tr>
                        <td>Pose complète cils à cils  </td>
                        <td>70 € </td>
                    </tr>
                    <tr>
                        <td>Réhaussement de cils  </td>
                        <td>40 € </td>
                    </tr>
                    <tr>
                        <td>Après 4 semaines : pose complète ou supplémentaire  </td>
                        <td>Devis

                        </td>
                    </tr>

                    </tbody>
                </table>

                <br><br><br>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th><p>Maquillage semi-permanent</p></th>
                        <th>prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Microblading sourcils(technique manuelle)  </td>
                        <td>200 € </td>
                    </tr>
                    <tr>
                        <td>Dermopigmentation sourcils(au dermographe électrique)  </td>
                        <td>230 € </td>
                    </tr>
                    <tr>
                        <td>Entretien sourcil permanent  </td>
                        <td>Devis </td>
                    </tr>


                    </tbody>
                </table>

            </div>

            <div class=\"col-md-2 aside2 img-fluid\"></div> <!--ASIDE DROITE-->

        </section> <!--row-->

        <section class=\"row\" id=\"blog\">
            <h2 class=\"text-center\">Blog</h2>

            ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 166, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 167
            echo "
                <div class=\"col-md-4 mt-5 text-center\">

                    <div class=\"card animediv\" >

                        <img class=\"animate card-img-top\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["article"], "poster", [], "any", false, false, false, 172))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 172), "html", null, true);
            echo "\">

                        <div class=\"card-body\">

                            <h5 class=\"card-title\">";
            // line 176
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 176)), "html", null, true);
            echo "</h5>

";
            // line 179
            echo "
                            <a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">En savoir plus</a>

                        </div>

                    </div>

                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "
        </section><!--Row Blog-->

        <section id=\"meteo\" class=\"mt-3 mb-3\">

            <div class=\"container\">

                <div class=\"row justify-content-center\">
                    <h2 class=\"text-center\">METEO</h2>

                    <div class=\"col-12 text-center\">
                        <span id=\"ville\">Paris</span>

                        <div id=\"temperature\">
                            <span id=\"temperature-indice\">
                            xx.x
                            </span> °C
                        </div>
                    </div>
                    <p id=\"changer\" class=\"btn btn-primary\">Changer de ville</p>
                </div>

            </div>

        </section><!--Meteo-->

    </div>
    <h2 class=\"text-center\" id=\"contact\">Contact</h2>


    <div class=\"container-fluid d-flex align-items center col-12 text-center\" id=\"googlemap\">

        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42619.24570080961!2d-1.7234738316586826!3d48.11596753403908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2fa7d69085%3A0x40ca5cd36e4ab30!2sRennes!5e0!3m2!1sfr!2sfr!4v1626178568480!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>

    </div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 189,  278 => 180,  275 => 179,  270 => 176,  261 => 172,  254 => 167,  250 => 166,  108 => 27,  87 => 8,  77 => 7,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block title %}{% endblock %}

{% block body %}
    <section class=\"container-fluid \" id=\"bienvenue\">
        <div id=\"apropos\" class=\" h-100 row align-items-center justify-content-center text-center\" >

            <div>
                <h1 data-aos=\"fade-left\" data-aos-duration=\"3000\">HALINH BEAUTE</h1>
                <h2 data-aos=\"fade-right\" data-aos-duration=\"2000\">Institut de beaute a Rennes</h2>
                <h3 data-aos=\"fade-left\" data-aos-duration=\"2000\">Bienvenue</h3>
            </div>

        </div>
    </section>


    <div class=\"container-fluid\">
        <!-- GRANDE SECTION -->
        <section class=\"row col-12  align-items-center justify-content-center\" id=\"positionColonne\">

            <div class=\"cadre\" ></div>
            <div class=\"col-12 col-sm-6 col-md-4 image\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
                <img src=\"{{ asset(\"img/magasin.jpg\") }}\" alt=\"photo maquillage\">
            </div>

            <div class=\"col-12 col-sm-6 col-md-4 discover\" id=\"propos\">

                <h3 >A propos</h3>
                <h4>Notre experience</h4>
                <p >Poussez la porte de l’institut, c’est arriver dans un lieu sympathique à l’ambiance chaleureuse. Vous êtes accueillie par une équipe souriante et dynamique à l’image du salon. Passionnées par leur métier, ces professionnelles sont aux petits soins pour répondre à vos souhaits.

                    Ainsi laissez-vous tenter par une manucure ou une beauté des pieds pour un moment de détente intense. Le visage et le corps ne sont pas en reste. Que ce soit pour un soin qui sublime votre visage ou pour une épilation, tout est fait pour prendre soin de vous ! De même pour une beauté complète, optez pour les forfaits sélectionnés par votre équipe au savoir-faire indiscutable. Tous nos produits de grande marque sont signés OPI pour préserver votre beauté naturelle.</p>

            </div>

        </section> <!--.row-->

        <section class=\"row col-12\" id=\"menu\">

            <div class=\"col-md-2 aside1 img-fluid\" ></div> <!--ASIDE GAUCHE-->

            <div class=\"col-12 col-md-8 \">

                <br><br><br>

                <h2 class=\"text-center\" id=\"prestation\">PRESTATIONS</h2>

                <br><br><br>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th><p>Beauté des mains, des pieds</p></th>
                        <th>prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Pose extension gel french ou couleurs  </td>
                        <td>50 € </td>
                    </tr>
                    <tr>
                        <td>Réparation d'un ongle cassé  </td>
                        <td>05 € </td>
                    </tr>
                    <tr>
                        <td>Remplissage french ou couleur  </td>
                        <td>25 € </td>
                    </tr>
                    <tr>
                        <td>Pose gel pieds french ou couleur  </td>
                        <td>30 € </td>
                    </tr>
                    <tr>
                        <td>Depose d'ongles gel  </td>
                        <td>15 € </td>
                    </tr>
                    <tr>
                        <td>Decoration sur ongle par doigt  </td>
                        <td>Devis</td>
                    </tr>

                    </tbody>
                </table>

                <br><br><br>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th><p>Beauté du regard</p></th>
                        <th>prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Pose cils volume russe  </td>
                        <td>90 € </td>
                    </tr>
                    <tr>
                        <td>Entretien moins de 3 semaines  </td>
                        <td>30 € </td>
                    </tr>
                    <tr>
                        <td>Retouche après 3 ou 4 semaines  </td>
                        <td>40 € </td>
                    </tr>
                    <tr>
                        <td>Pose complète cils à cils  </td>
                        <td>70 € </td>
                    </tr>
                    <tr>
                        <td>Réhaussement de cils  </td>
                        <td>40 € </td>
                    </tr>
                    <tr>
                        <td>Après 4 semaines : pose complète ou supplémentaire  </td>
                        <td>Devis

                        </td>
                    </tr>

                    </tbody>
                </table>

                <br><br><br>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th><p>Maquillage semi-permanent</p></th>
                        <th>prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Microblading sourcils(technique manuelle)  </td>
                        <td>200 € </td>
                    </tr>
                    <tr>
                        <td>Dermopigmentation sourcils(au dermographe électrique)  </td>
                        <td>230 € </td>
                    </tr>
                    <tr>
                        <td>Entretien sourcil permanent  </td>
                        <td>Devis </td>
                    </tr>


                    </tbody>
                </table>

            </div>

            <div class=\"col-md-2 aside2 img-fluid\"></div> <!--ASIDE DROITE-->

        </section> <!--row-->

        <section class=\"row\" id=\"blog\">
            <h2 class=\"text-center\">Blog</h2>

            {% for article in articles %}

                <div class=\"col-md-4 mt-5 text-center\">

                    <div class=\"card animediv\" >

                        <img class=\"animate card-img-top\" src=\"{{asset(\"img/\"~article.poster)}}\" alt=\"{{ article.titre }}\">

                        <div class=\"card-body\">

                            <h5 class=\"card-title\">{{ article.titre | capitalize }}</h5>

{#                            <p class=\"card-text\">{{ article.content | raw | striptags  | u.truncate(100, '...') }}</p>#}

                            <a href=\"{{ path('detail', { 'id': article.id }) }}\" class=\"btn btn-primary\">En savoir plus</a>

                        </div>

                    </div>

                </div>

            {% endfor %}

        </section><!--Row Blog-->

        <section id=\"meteo\" class=\"mt-3 mb-3\">

            <div class=\"container\">

                <div class=\"row justify-content-center\">
                    <h2 class=\"text-center\">METEO</h2>

                    <div class=\"col-12 text-center\">
                        <span id=\"ville\">Paris</span>

                        <div id=\"temperature\">
                            <span id=\"temperature-indice\">
                            xx.x
                            </span> °C
                        </div>
                    </div>
                    <p id=\"changer\" class=\"btn btn-primary\">Changer de ville</p>
                </div>

            </div>

        </section><!--Meteo-->

    </div>
    <h2 class=\"text-center\" id=\"contact\">Contact</h2>


    <div class=\"container-fluid d-flex align-items center col-12 text-center\" id=\"googlemap\">

        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42619.24570080961!2d-1.7234738316586826!3d48.11596753403908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2fa7d69085%3A0x40ca5cd36e4ab30!2sRennes!5e0!3m2!1sfr!2sfr!4v1626178568480!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>

    </div>






{% endblock %}
", "main/list.html.twig", "D:\\projet5\\templates\\main\\list.html.twig");
    }
}
