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

        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"v-h1\">Voies <br> citoyennes</h1>
                <h2 class=\"v-h2 mb-5\">50 ans du suffrage féminin</h2>


                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "paragraphes", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 13
            echo "                <div class=\"v-box v-box-shadow\">
                    <p class=\"fs-4\">";
            // line 14
            echo $this->getAttribute($context["para"], "description", []);
            echo "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cards", []));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 23
            echo "            <div class=\"col-sm-3 col-sm-4 mt-5\">
                            <a href=\"";
            // line 24
            echo $this->getAttribute($context["card"], "uri", []);
            echo "\" class=\"card link-trapeze-horizontal\">
                                <div class=\"card-body\">
                                    <picture class=\"card-img-top\">
                                        <img src=\"";
            // line 27
            echo $this->getAttribute($context["card"], "image", []);
            echo "\" class=\"img-fluid\" title=\"";
            echo $this->getAttribute($context["card"], "title", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["card"], "title", []);
            echo "\" />
                                    </picture>

                                        <h3 class=\"card-title\" style=\"overflow-wrap: initial;\">";
            // line 30
            echo $this->getAttribute($context["card"], "title", []);
            echo "</h3>
                                        <p class=\"card-text\">";
            // line 31
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
        // line 37
        echo "            </div>
        </div>


    </section>
";
    }

    // line 44
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
        return array (  124 => 44,  115 => 37,  103 => 31,  99 => 30,  89 => 27,  83 => 24,  80 => 23,  76 => 22,  69 => 17,  60 => 14,  57 => 13,  53 => 12,  43 => 4,  40 => 3,  30 => 1,);
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

        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"v-h1\">Voies <br> citoyennes</h1>
                <h2 class=\"v-h2 mb-5\">50 ans du suffrage féminin</h2>


                {% for para in page.header.paragraphes %}
                <div class=\"v-box v-box-shadow\">
                    <p class=\"fs-4\">{{ para.description }}</p>
                </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
            {% for card in page.header.cards %}
            <div class=\"col-sm-3 col-sm-4 mt-5\">
                            <a href=\"{{ card.uri }}\" class=\"card link-trapeze-horizontal\">
                                <div class=\"card-body\">
                                    <picture class=\"card-img-top\">
                                        <img src=\"{{ card.image }}\" class=\"img-fluid\" title=\"{{ card.title }}\" alt=\"{{ card.title }}\" />
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
