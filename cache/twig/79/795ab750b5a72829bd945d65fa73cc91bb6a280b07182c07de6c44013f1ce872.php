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
        echo "    <section class=\"v-background\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"align-right\">
                <button class=\"btn\">
                    <a href=\"/\">Retour</a>
                </button>
                </div>

                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "titres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["titre"]) {
            // line 15
            echo "                <h1 class=\"display-1 mb-5\">";
            echo $this->getAttribute($context["titre"], "theme", []);
            echo "</h1>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "header", []), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 23
            echo "                    <div class=\"v-box v-box-shadow\">
                <p class=\"fs-4\">";
            // line 24
            echo $this->getAttribute($context["page"], "description", []);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
        </div>

        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-sm-2 col-sm-3\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 0));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "                    <div class=\"card-group\">
                        <div class=\"card\">
                            <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div>
            </div>
        </div>

    </section>
";
    }

    // line 47
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
        return array (  123 => 47,  114 => 40,  103 => 34,  99 => 33,  91 => 27,  82 => 24,  79 => 23,  75 => 22,  68 => 17,  59 => 15,  55 => 14,  43 => 4,  40 => 3,  30 => 1,);
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
                <div class=\"align-right\">
                <button class=\"btn\">
                    <a href=\"/\">Retour</a>
                </button>
                </div>

                {% for titre in page.header.titres %}
                <h1 class=\"display-1 mb-5\">{{ titre.theme }}</h1>
                {% endfor %}
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                {% for page in page.header.pages %}
                    <div class=\"v-box v-box-shadow\">
                <p class=\"fs-4\">{{ page.description }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-sm-2 col-sm-3\">
                    {% for i in 0..0 %}
                    <div class=\"card-group\">
                        <div class=\"card\">
                            <img src=\"...\" class=\"card-img-top\" alt=\"...\">
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
