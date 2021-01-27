<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* theme.html.twig */
class __TwigTemplate_65a8bdc544c52f6834b59fb000126905ea9b45ca20514d27e1a77f6b65de6986 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"v-background\">

        <div class=\"container row \">
        <nav class=\"nav-lang nav-lang-short ml-auto mt-3\">
                    <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                        <a href=\"";
        // line 9
        echo ($context["base_url_simple"] ?? null);
        echo "/fr\" aria-label=\"Français\" class=\"text-dark\">FR</a>
                    </button>

                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"";
        // line 13
        echo ($context["base_url_simple"] ?? null);
        echo "/de\" aria-label=\"Deutsch\" class=\"text-dark\">DE</a>
                </button>
        </nav>
        </div>

        <div class=\"container\" >
            <div class=\"row\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "titres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["titre"]) {
            // line 21
            echo "                    <h1 class=\"v-h1 m-1\" data-aos=\"fade-right\" data-aos-delay=\"700\">";
            echo $this->getAttribute($context["titre"], "firsttitle", []);
            echo " <br> ";
            echo $this->getAttribute($context["titre"], "secondtitle", []);
            echo "</h1>
                    <h2 class=\"v-h2 mb-5\" data-aos=\"fade-left\" data-aos-delay=\"700\">";
            // line 22
            echo $this->getAttribute($context["titre"], "thirdtitle", []);
            echo "</h2>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "paragraphes", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 26
            echo "                <div class=\"v-box\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"700\">
                    <p class=\"fs-4\">";
            // line 27
            echo $this->getAttribute($context["para"], "description", []);
            echo "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
        </div>

        <div class=\"container\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"row\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cards", []));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 36
            echo "            <div class=\"col-sm-3 col-sm-4 mt-5\">
                            <a href=\"";
            // line 37
            echo $this->getAttribute($context["card"], "url", []);
            echo "\" class=\"card link-trapeze-horizontal text-dark\" style=\"box-shadow: 10px -10px ";
            echo $this->getAttribute($context["card"], "color", []);
            echo "\">
                                <div class=\"card-body\" style=\"height: auto\">
                                    <picture class=\"card-img-top\">
                                        <img src=\"";
            // line 40
            echo ($context["base_url_simple"] ?? null);
            echo "/user/themes/expoFemme/images/";
            echo $this->getAttribute($context["card"], "image", []);
            echo "\" class=\"img-fluid\" title=\"";
            echo $this->getAttribute($context["card"], "copyright", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["card"], "copyright", []);
            echo "\" />
                                    </picture>

                                        <h3 class=\"card-title\" style=\"overflow-wrap: initial;\">";
            // line 43
            echo $this->getAttribute($context["card"], "title", []);
            echo "</h3>
                                        <p class=\"card-text\">";
            // line 44
            echo $this->getAttribute($context["card"], "text", []);
            echo "</p>

                                </div>
                            </a>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
        </div>

        <hr>
        <div class=\"col-12 text-center\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "entreprises", []));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 56
            echo "                <a href=\"";
            echo $this->getAttribute($context["entreprise"], "lien", []);
            echo "\">
            <img src=\"";
            // line 57
            echo ($context["base_url_simple"] ?? null);
            echo "/user/themes/expoFemme/images/";
            echo $this->getAttribute($context["entreprise"], "image", []);
            echo "\" height=\"";
            echo $this->getAttribute($context["entreprise"], "taille", []);
            echo "px\" alt=\"Arsenaux\">
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
    </section>
";
    }

    // line 64
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  184 => 60,  171 => 57,  166 => 56,  162 => 55,  155 => 50,  143 => 44,  139 => 43,  127 => 40,  119 => 37,  116 => 36,  112 => 35,  105 => 30,  96 => 27,  93 => 26,  89 => 25,  86 => 24,  78 => 22,  71 => 21,  67 => 20,  57 => 13,  50 => 9,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <section class=\"v-background\">

        <div class=\"container row \">
        <nav class=\"nav-lang nav-lang-short ml-auto mt-3\">
                    <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                        <a href=\"{{ base_url_simple }}/fr\" aria-label=\"Français\" class=\"text-dark\">FR</a>
                    </button>

                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"{{ base_url_simple }}/de\" aria-label=\"Deutsch\" class=\"text-dark\">DE</a>
                </button>
        </nav>
        </div>

        <div class=\"container\" >
            <div class=\"row\">
                {% for titre in page.header.titres %}
                    <h1 class=\"v-h1 m-1\" data-aos=\"fade-right\" data-aos-delay=\"700\">{{ titre.firsttitle}} <br> {{ titre.secondtitle }}</h1>
                    <h2 class=\"v-h2 mb-5\" data-aos=\"fade-left\" data-aos-delay=\"700\">{{titre.thirdtitle}}</h2>
                {% endfor %}

                {% for para in page.header.paragraphes %}
                <div class=\"v-box\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"700\">
                    <p class=\"fs-4\">{{ para.description }}</p>
                </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"container\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"row\">
            {% for card in page.header.cards %}
            <div class=\"col-sm-3 col-sm-4 mt-5\">
                            <a href=\"{{ card.url }}\" class=\"card link-trapeze-horizontal text-dark\" style=\"box-shadow: 10px -10px {{ card.color }}\">
                                <div class=\"card-body\" style=\"height: auto\">
                                    <picture class=\"card-img-top\">
                                        <img src=\"{{ base_url_simple }}/user/themes/expoFemme/images/{{ card.image }}\" class=\"img-fluid\" title=\"{{ card.copyright }}\" alt=\"{{ card.copyright }}\" />
                                    </picture>

                                        <h3 class=\"card-title\" style=\"overflow-wrap: initial;\">{{ card.title }}</h3>
                                        <p class=\"card-text\">{{ card.text }}</p>

                                </div>
                            </a>
                    </div>
            {% endfor %}
            </div>
        </div>

        <hr>
        <div class=\"col-12 text-center\">
            {% for entreprise in page.header.entreprises %}
                <a href=\"{{ entreprise.lien }}\">
            <img src=\"{{ base_url_simple }}/user/themes/expoFemme/images/{{ entreprise.image }}\" height=\"{{ entreprise.taille }}px\" alt=\"Arsenaux\">
                </a>
            {% endfor %}
        </div>
    </section>
{% endblock %}

{% block footer %}
{% endblock %}
", "theme.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/theme.html.twig");
    }
}
