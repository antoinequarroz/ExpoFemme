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

/* thematique.html.twig */
class __TwigTemplate_2ed5c3cc30459939d5771d2988b8e6ac758b45b88842d86d108ea0f3ccf68f24 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "thematique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "colors", []));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 6
            echo "        <section style=\"background: ";
            echo $this->getAttribute($context["color"], "background", []);
            echo "\">

        <div class=\"container row\">
            <nav class=\"nav-lang nav-lang-short ml-auto\">
                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"";
            // line 11
            echo "/suffrageFeminin/fr";
            echo "\" aria-label=\"Français\" class=\"text-dark\">FR</a>
                </button>

                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"";
            // line 15
            echo "/suffrageFeminin/de";
            echo "\" aria-label=\"Deutsch\" class=\"text-dark\">DE</a>
                </button>
            </nav>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"align-right mt-3\">
                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"500\">
                    <a href=\"/\" style=\"color: rgba(0,0,0)\">Retour</a>
                </button>
                </div>

                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "titres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["titre"]) {
            // line 30
            echo "                <h1 class=\"display-1 mb-5\" data-aos=\"fade-right\">";
            echo $this->getAttribute($context["titre"], "theme", []);
            echo "</h1>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>

        <div class=\"container\" data-aos=\"fade-left\">
            <div class=\"row\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "header", []), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "                    <div class=\"v-box v-box-shadow\">
                <p class=\"fs-4\">";
            // line 39
            echo $this->getAttribute($context["page"], "description", []);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>

        <div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"row\">
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 48
            echo "                <div class=\"col-sm-3 col-sm-4 mt-5\">
                    <div class=\"card-group\">
                        <div class=\"card\">
                            <img src=\"";
            // line 51
            echo ($context["base_url_simple"] ?? null);
            echo "/user/themes/expoFemme/images/";
            echo $this->getAttribute($context["image"], "image", []);
            echo "\" class=\"card-img-top\" alt=\"...\">
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
            </div>
        </div>

    </section>
";
    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "thematique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 62,  152 => 55,  140 => 51,  135 => 48,  131 => 47,  124 => 42,  115 => 39,  112 => 38,  108 => 37,  101 => 32,  92 => 30,  88 => 29,  78 => 21,  66 => 15,  59 => 11,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
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

    {% for color in header.colors %}
        <section style=\"background: {{color.background}}\">

        <div class=\"container row\">
            <nav class=\"nav-lang nav-lang-short ml-auto\">
                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"{{ '/suffrageFeminin/fr' }}\" aria-label=\"Français\" class=\"text-dark\">FR</a>
                </button>

                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"{{ '/suffrageFeminin/de' }}\" aria-label=\"Deutsch\" class=\"text-dark\">DE</a>
                </button>
            </nav>
        </div>

    {% endfor %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"align-right mt-3\">
                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"500\">
                    <a href=\"/\" style=\"color: rgba(0,0,0)\">Retour</a>
                </button>
                </div>

                {% for titre in page.header.titres %}
                <h1 class=\"display-1 mb-5\" data-aos=\"fade-right\">{{ titre.theme }}</h1>
                {% endfor %}
            </div>
        </div>

        <div class=\"container\" data-aos=\"fade-left\">
            <div class=\"row\">
                {% for page in page.header.pages %}
                    <div class=\"v-box v-box-shadow\">
                <p class=\"fs-4\">{{ page.description }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"row\">
                    {% for image in page.header.images %}
                <div class=\"col-sm-3 col-sm-4 mt-5\">
                    <div class=\"card-group\">
                        <div class=\"card\">
                            <img src=\"{{ base_url_simple }}/user/themes/expoFemme/images/{{ image.image }}\" class=\"card-img-top\" alt=\"...\">
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>

    </section>
{% endblock %}

{% block footer %}
{% endblock %}", "thematique.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/thematique.html.twig");
    }
}
