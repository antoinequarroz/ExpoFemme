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

/* scolaire.html.twig */
class __TwigTemplate_5f3804e3a02c30315409c7adfcf74ae41a555939609ecbc7e52d86c896c1b911 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "scolaire.html.twig", 1);
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
                <div class=\"align-right mt-3\">
                    <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"500\">
                        <a href=\"";
        // line 23
        echo ($context["base_url_simple"] ?? null);
        echo "\" style=\"color: rgba(0,0,0)\">Retour</a>
                    </button>
                </div>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "titres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["titre"]) {
            // line 27
            echo "            <h1 class=\"display-1 mb-5\" data-aos=\"fade-right\">";
            echo $this->getAttribute($context["titre"], "titre", []);
            echo "</h1>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 35
            echo "                    <p>";
            echo $this->getAttribute($context["page"], "description", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "liens", []));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 43
            echo "                    <p>";
            echo $this->getAttribute($context["lien"], "mail", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "fichier", []));
        foreach ($context['_seq'] as $context["_key"] => $context["fichiers"]) {
            // line 50
            echo "                <div class=\"col-sm-3 col-sm-4 mt-5\">
                <a href=\"";
            // line 51
            echo ($context["base_url_simple"] ?? null);
            echo "/user/themes/expoFemme/pdf/";
            echo $this->getAttribute($context["fichiers"], "pdf", []);
            echo "\" target=\"_blank\">
                    <div class=\"card\" style=\"background-color: #faca30\">
                        <div class=\"card-body text-center\">
                            <img src=\"";
            // line 54
            echo ($context["base_url_simple"] ?? null);
            echo "/user/themes/expoFemme/images/svg/pdf.svg\" style=\"height: 100px\" alt=\"svg\" class=\"mt-2\">
                            <p class=\"card-text mt-5\" style=\"color: black\">
                                ";
            // line 56
            echo $this->getAttribute($context["fichiers"], "text", []);
            echo "

                            </p>
                        </div>
                    </div>
                </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichiers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </div>
        </div>

    </section>



";
    }

    // line 73
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "scolaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  169 => 64,  155 => 56,  150 => 54,  142 => 51,  139 => 50,  135 => 49,  129 => 45,  120 => 43,  116 => 42,  109 => 37,  100 => 35,  96 => 34,  89 => 29,  80 => 27,  76 => 26,  70 => 23,  57 => 13,  50 => 9,  43 => 4,  40 => 3,  30 => 1,);
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
                <div class=\"align-right mt-3\">
                    <button class=\"btn btn-outline-dark btn-lg\" style=\"background: rgba(0,0,0,0)\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"500\">
                        <a href=\"{{ base_url_simple }}\" style=\"color: rgba(0,0,0)\">Retour</a>
                    </button>
                </div>
        {% for titre in header.titres %}
            <h1 class=\"display-1 mb-5\" data-aos=\"fade-right\">{{ titre.titre }}</h1>
        {% endfor %}
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                {% for page in header.pages %}
                    <p>{{ page.description }}</p>
                {% endfor %}
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                {% for lien in header.liens %}
                    <p>{{ lien.mail }}</p>
                {% endfor %}
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                {% for fichiers in header.fichier %}
                <div class=\"col-sm-3 col-sm-4 mt-5\">
                <a href=\"{{ base_url_simple }}/user/themes/expoFemme/pdf/{{ fichiers.pdf }}\" target=\"_blank\">
                    <div class=\"card\" style=\"background-color: #faca30\">
                        <div class=\"card-body text-center\">
                            <img src=\"{{ base_url_simple }}/user/themes/expoFemme/images/svg/pdf.svg\" style=\"height: 100px\" alt=\"svg\" class=\"mt-2\">
                            <p class=\"card-text mt-5\" style=\"color: black\">
                                {{ fichiers.text}}

                            </p>
                        </div>
                    </div>
                </a>
                </div>
                {% endfor %}
            </div>
        </div>

    </section>



{% endblock %}

{% block footer %}
{% endblock %}", "scolaire.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/scolaire.html.twig");
    }
}
