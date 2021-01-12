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

/* default.html.twig */
class __TwigTemplate_61a2549b39c784a6826fe02b809ff2a90a2ead6660698cea28923bc88df4ea09 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
<section>

    <div class=\"container\">
        <div class=\"row\">
            <h1 class=\"v-title mb-0\">Voies</h1>
            <h1 class=\"v-title\">citoyennes</h1>


            <div class=\"v-box\">

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates!</p>
                <button class=\"v-box-plus\">En savoir plus</button>
            </div>

            <div class=\"v-theme\">
                <p class=\"v-theme-p\">Thème 1</p>
            </div>

            <div class=\"v-theme2\">
            <p class=\"v-theme-p\">Thème 2</p>
            </div>
            <div class=\"v-theme3\">
                <p class=\"v-theme-p\">Thème 3</p>
            </div>

        </div>

        <div class=\"row\">
            <div class=\"v-theme\">
                <p class=\"v-theme-p\">Thème 1</p>
            </div>

            <div class=\"v-theme2\">
                <p class=\"v-theme-p\">Thème 2</p>
            </div>
            <div class=\"v-theme3\">
                <p class=\"v-theme-p\">Thème 3</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"v-theme\">
                <p class=\"v-theme-p\">Thème 1</p>
            </div>

            <div class=\"v-theme2\">
                <p class=\"v-theme-p\">Thème 2</p>
            </div>
            <div class=\"v-theme3\">
                <p class=\"v-theme-p\">Thème 3</p>
            </div>
        </div>
    </div>


</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  29 => 1,);
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

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque aut cum deserunt dolorem eligendi error labore libero, mollitia, officia officiis porro quibusdam repudiandae saepe sequi soluta suscipit voluptates!</p>
                <button class=\"v-box-plus\">En savoir plus</button>
            </div>

            <div class=\"v-theme\">
                <p class=\"v-theme-p\">Thème 1</p>
            </div>

            <div class=\"v-theme2\">
            <p class=\"v-theme-p\">Thème 2</p>
            </div>
            <div class=\"v-theme3\">
                <p class=\"v-theme-p\">Thème 3</p>
            </div>

        </div>

        <div class=\"row\">
            <div class=\"v-theme\">
                <p class=\"v-theme-p\">Thème 1</p>
            </div>

            <div class=\"v-theme2\">
                <p class=\"v-theme-p\">Thème 2</p>
            </div>
            <div class=\"v-theme3\">
                <p class=\"v-theme-p\">Thème 3</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"v-theme\">
                <p class=\"v-theme-p\">Thème 1</p>
            </div>

            <div class=\"v-theme2\">
                <p class=\"v-theme-p\">Thème 2</p>
            </div>
            <div class=\"v-theme3\">
                <p class=\"v-theme-p\">Thème 3</p>
            </div>
        </div>
    </div>


</section>
{% endblock %}

", "default.html.twig", "/Users/antoinequarroz/Sites/expoFemme/user/themes/expo/templates/default.html.twig");
    }
}
