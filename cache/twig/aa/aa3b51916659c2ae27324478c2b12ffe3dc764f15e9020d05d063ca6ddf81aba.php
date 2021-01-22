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

/* dates.html.twig */
class __TwigTemplate_42fc2871374572e1dfa0962666d4ce3943d40891f7d46108b4033e85cf746791 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dates.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"v-background\">

        <div class=\"container row\">
            <nav class=\"nav-lang nav-lang-short ml-auto\">
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


        <div class=\"container\">
            <div class=\"row\">

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"align-right mt-3\">
                            <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"500\">
                                <a href=\"";
        // line 26
        echo ($context["base_url_simple"] ?? null);
        echo "\" style=\"color: rgba(0,0,0)\">Retour</a>
                            </button>
                        </div>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "titres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["titre"]) {
            // line 30
            echo "                    <h1 class=\"display-1 mb-5\" data-aos=\"fade-right\">";
            echo $this->getAttribute($context["titre"], "titre", []);
            echo "</h1>
                    <h2 class=\"display-3\">Dates clefs</h2>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
        </div>

        <div class=\"container mt-5\">
            <div class=\"row\">

                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "dates", []));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 40
            echo "                    <p><b style=\"font-size: 20px\">";
            echo $this->getAttribute($context["date"], "date", []);
            echo "</b> : ";
            echo $this->getAttribute($context["date"], "description", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>
            </div>
        </div>

    </section>
";
    }

    // line 50
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "dates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  116 => 42,  105 => 40,  101 => 39,  93 => 33,  83 => 30,  79 => 29,  73 => 26,  57 => 13,  50 => 9,  43 => 4,  40 => 3,  30 => 1,);
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
                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"{{ base_url_simple }}/fr\" aria-label=\"Français\" class=\"text-dark\">FR</a>
                </button>

                <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\">
                    <a href=\"{{ base_url_simple }}/de\" aria-label=\"Deutsch\" class=\"text-dark\">DE</a>
                </button>
            </nav>
        </div>


        <div class=\"container\">
            <div class=\"row\">

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"align-right mt-3\">
                            <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"500\">
                                <a href=\"{{ base_url_simple }}\" style=\"color: rgba(0,0,0)\">Retour</a>
                            </button>
                        </div>
                {% for titre in header.titres %}
                    <h1 class=\"display-1 mb-5\" data-aos=\"fade-right\">{{titre.titre}}</h1>
                    <h2 class=\"display-3\">Dates clefs</h2>
                {% endfor %}
            </div>
        </div>

        <div class=\"container mt-5\">
            <div class=\"row\">

                {% for date in header.dates %}
                    <p><b style=\"font-size: 20px\">{{ date.date }}</b> : {{ date.description }}</p>
                {% endfor %}
            </div>
        </div>
            </div>
        </div>

    </section>
{% endblock %}

{% block footer %}
{% endblock %}", "dates.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/dates.html.twig");
    }
}
