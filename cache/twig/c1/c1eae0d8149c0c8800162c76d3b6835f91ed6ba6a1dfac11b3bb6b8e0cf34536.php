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

/* mediation.html.twig */
class __TwigTemplate_e04e5b49443fecfe6fbbf324da38b5abb5b8e317edb19cacd6cf9789616a7ac2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "mediation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"v-background\">

        <div class=\"container\">
            <div class=\"row\">

                <div data-flickity='{\"pageDots\": false,\"cellAlign\": \"left\", \"wrapAround\": true, \"imagesLoaded\": true}'>
                    <div class=\"col-12 col-md-4 px-1\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 12
            echo "                        <img src=\"";
            echo $this->getAttribute($context["image"], "image", []);
            echo "\" class=\"img-fluid\" alt=\"";
            echo $this->getAttribute($context["image"], "title", []);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 21
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "mediation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  67 => 14,  56 => 12,  52 => 11,  43 => 4,  40 => 3,  30 => 1,);
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

                <div data-flickity='{\"pageDots\": false,\"cellAlign\": \"left\", \"wrapAround\": true, \"imagesLoaded\": true}'>
                    <div class=\"col-12 col-md-4 px-1\">
                        {% for image in page.header.images %}
                        <img src=\"{{ image.image }}\" class=\"img-fluid\" alt=\"{{ image.title }}\">
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block footer %}
{% endblock %}", "mediation.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/mediation.html.twig");
    }
}
