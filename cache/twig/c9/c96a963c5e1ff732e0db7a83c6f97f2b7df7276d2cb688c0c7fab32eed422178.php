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

/* home.html.twig */
class __TwigTemplate_d895ab623168f22a1bcffb9896609007d1668dd33cba6f9de12679b7db991081 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<section>
    <div class=\"container\">
    <div class=\"row\">
    <h1 class=\"v-title mb-0\">Voies</h1>
    <h1 class=\"v-title\">citoyennes</h1>


    <div class=\"v-box\">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates!df</p>
        <button class=\"v-box-plus\">En savoir plus</button>
    </div>

    <div class=\"row display-flex\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "
            <div class=\"col col-md-4 col-xl-3\">
                <a href=\"";
            // line 21
            echo $this->getAttribute($context["page"], "url", []);
            echo "\" class=\"card link-trapeze-horizontal\">
                    <div class=\"card-body\">
                        <picture class=\"card-img-top\">
                            <img src=\"";
            // line 24
            echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []);
            echo "\" class=\"img-fluid\" title=\"";
            echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "headline", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["page"], "title", []);
            echo "\" />
                        </picture>
                        <h3 class=\"card-title\" style=\"overflow-wrap: initial;\">";
            // line 26
            echo $this->getAttribute($context["page"], "title", []);
            echo "</h3>
                        <p class=\"card-text\">";
            // line 27
            echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "headline", []);
            echo "</p>
                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
    </div>
    </div>
</section>

    <style>
        .row.display-flex {
            display: flex;
            flex-wrap: wrap;
        }
        .row.display-flex > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  85 => 27,  81 => 26,  72 => 24,  66 => 21,  62 => 19,  58 => 18,  42 => 4,  39 => 3,  29 => 1,);
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
<section>
    <div class=\"container\">
    <div class=\"row\">
    <h1 class=\"v-title mb-0\">Voies</h1>
    <h1 class=\"v-title\">citoyennes</h1>


    <div class=\"v-box\">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates!df</p>
        <button class=\"v-box-plus\">En savoir plus</button>
    </div>

    <div class=\"row display-flex\">
        {% for page in page.children %}

            <div class=\"col col-md-4 col-xl-3\">
                <a href=\"{{ page.url }}\" class=\"card link-trapeze-horizontal\">
                    <div class=\"card-body\">
                        <picture class=\"card-img-top\">
                            <img src=\"{{ page.header.image }}\" class=\"img-fluid\" title=\"{{ page.header.headline }}\" alt=\"{{ page.title }}\" />
                        </picture>
                        <h3 class=\"card-title\" style=\"overflow-wrap: initial;\">{{ page.title }}</h3>
                        <p class=\"card-text\">{{ page.header.headline }}</p>
                    </div>
                </a>
            </div>
        {% endfor %}
    </div>
    </div>
    </div>
</section>

    <style>
        .row.display-flex {
            display: flex;
            flex-wrap: wrap;
        }
        .row.display-flex > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }
    </style>
{% endblock %}", "home.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expo/templates/home.html.twig");
    }
}
