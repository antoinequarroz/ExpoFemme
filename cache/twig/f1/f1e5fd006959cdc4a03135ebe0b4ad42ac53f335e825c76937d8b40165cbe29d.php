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
class __TwigTemplate_e8b1a7d53cf331d08967adc103757a5b016c3ce18d79fe1a02ba8846693d33ed extends \Twig\Template
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

        <div class=\"container row\">
        <nav class=\"nav-lang nav-lang-short ml-auto\">
                    <button class=\"btn btn-outline-dark btn-lg\">
                        <a href=\"";
        // line 9
        echo "/";
        echo "suffrageFeminin/fr\" aria-label=\"Français\" class=\"text-dark\">FR</a>
                    </button>

                <button class=\"btn btn-outline-dark btn-lg\">
                    <a href=\"";
        // line 13
        echo "/";
        echo "suffrageFeminin/de\" aria-label=\"Deutsch\" class=\"text-dark\">DE</a>
                </button>
        </nav>
        </div>

        <div class=\"container\" >
            <div class=\"row\">
                <h1 class=\"v-h1\" data-aos=\"fade-right\" data-aos-delay=\"700\">Voies <br> citoyennes</h1>
                <h2 class=\"v-h2 mb-5\" data-aos=\"fade-left\" data-aos-delay=\"700\">50 ans du suffrage féminin</h2>


                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "paragraphes", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 25
            echo "                <div class=\"v-box v-box-shadow\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"700\">
                    <p class=\"fs-4\">";
            // line 26
            echo $this->getAttribute($context["para"], "description", []);
            echo "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>

        <div class=\"container\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"row\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cards", []));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 35
            echo "                ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $context["card"]);
            echo "
            <div class=\"col-sm-3 col-sm-4 mt-5\">
                            <a href=\"";
            // line 37
            echo $this->getAttribute($context["card"], "uri", []);
            echo "\" class=\"card link-trapeze-horizontal text-dark\" style=\"box-shadow: 10px -10px ";
            echo $this->getAttribute($context["card"], "color", []);
            echo ";\">
                                <div class=\"card-body\">
                                    <picture class=\"card-img-top\">
                                        <img src=\"";
            // line 40
            echo ($context["base_url_simple"] ?? null);
            echo "/user/themes/expoFemme/images/";
            echo $this->getAttribute($context["card"], "image", []);
            echo "\" class=\"img-fluid\" title=\"";
            echo $this->getAttribute($context["card"], "title", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["card"], "title", []);
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
        echo "
            </div>
        </div>
    </section>

";
    }

    // line 57
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
        return array (  149 => 57,  140 => 50,  128 => 44,  124 => 43,  112 => 40,  104 => 37,  98 => 35,  94 => 34,  87 => 29,  78 => 26,  75 => 25,  71 => 24,  57 => 13,  50 => 9,  43 => 4,  40 => 3,  30 => 1,);
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

        <div class=\"container row\">
        <nav class=\"nav-lang nav-lang-short ml-auto\">
                    <button class=\"btn btn-outline-dark btn-lg\">
                        <a href=\"{{ '/' }}suffrageFeminin/fr\" aria-label=\"Français\" class=\"text-dark\">FR</a>
                    </button>

                <button class=\"btn btn-outline-dark btn-lg\">
                    <a href=\"{{ '/' }}suffrageFeminin/de\" aria-label=\"Deutsch\" class=\"text-dark\">DE</a>
                </button>
        </nav>
        </div>

        <div class=\"container\" >
            <div class=\"row\">
                <h1 class=\"v-h1\" data-aos=\"fade-right\" data-aos-delay=\"700\">Voies <br> citoyennes</h1>
                <h2 class=\"v-h2 mb-5\" data-aos=\"fade-left\" data-aos-delay=\"700\">50 ans du suffrage féminin</h2>


                {% for para in page.header.paragraphes %}
                <div class=\"v-box v-box-shadow\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"700\">
                    <p class=\"fs-4\">{{ para.description }}</p>
                </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"container\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"row\">
            {% for card in page.header.cards %}
                {{ dump(card) }}
            <div class=\"col-sm-3 col-sm-4 mt-5\">
                            <a href=\"{{ card.uri }}\" class=\"card link-trapeze-horizontal text-dark\" style=\"box-shadow: 10px -10px {{ card.color }};\">
                                <div class=\"card-body\">
                                    <picture class=\"card-img-top\">
                                        <img src=\"{{ base_url_simple }}/user/themes/expoFemme/images/{{ card.image }}\" class=\"img-fluid\" title=\"{{ card.title }}\" alt=\"{{ card.title }}\" />
                                    </picture>

                                        <h3 class=\"card-title\" style=\"overflow-wrap: initial;\">{{ card.title }}</h3>
                                        <p class=\"card-text\">{{ card.text }}</p>

                                </div>
                            </a>
                    </div>
            {% endfor %}

            </div>
        </div>
    </section>

{% endblock %}

{% block footer %}
{% endblock %}", "theme.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/theme.html.twig");
    }
}
