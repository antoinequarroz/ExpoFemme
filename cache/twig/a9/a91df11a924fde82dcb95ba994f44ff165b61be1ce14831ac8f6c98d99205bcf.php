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

/* partials/base.html.twig */
class __TwigTemplate_73b378e356a919a011ea8cc9e8d36f2a382c5999ed634be09dcad1a818f09873 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('assets', $context, $blocks);
        // line 47
        echo "</head>



<body id=\"top\" class=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('bottom', $context, $blocks);
        // line 75
        echo "
</body>
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>

</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png"));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"));
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />



";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 98], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", 1 => 99], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 97], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 96], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap", 1 => 95], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/flickity@2/dist/flickity.min.css", 1 => 94], "method");
        // line 30
        echo "

";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        // line 35
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 36
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/script.js", 1 => 98], "method");
        // line 37
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js", 1 => 99], "method");
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js", 1 => 97], "method");
        // line 39
        echo "

";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 43
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 45
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        // line 54
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "        </div>
    </section>
";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        // line 57
        echo "

        ";
    }

    // line 64
    public function block_footer($context, array $blocks = [])
    {
        // line 65
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">

        </div>
    </div>
";
    }

    // line 72
    public function block_bottom($context, array $blocks = [])
    {
        // line 73
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 73,  245 => 72,  236 => 65,  233 => 64,  227 => 57,  224 => 56,  218 => 60,  216 => 56,  212 => 54,  209 => 53,  202 => 45,  197 => 44,  194 => 43,  183 => 39,  180 => 38,  177 => 37,  174 => 36,  171 => 35,  168 => 34,  162 => 30,  159 => 29,  156 => 28,  153 => 27,  150 => 26,  147 => 25,  144 => 24,  141 => 23,  138 => 22,  128 => 15,  124 => 14,  120 => 12,  118 => 11,  107 => 7,  104 => 6,  101 => 5,  88 => 75,  86 => 72,  83 => 71,  81 => 64,  78 => 63,  76 => 53,  71 => 51,  65 => 47,  63 => 43,  60 => 42,  58 => 34,  55 => 33,  53 => 22,  50 => 21,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ (grav.language.getActive ?: grav.config.site.default_lang)|e }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}


    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png')|e }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true)|e }}\" />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />



{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 98) %}
    {% do assets.addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', 99) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 97) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 96) %}
    {% do assets.addCss('theme://css/custom.css', 100) %}
    {% do assets.addCss('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap', 95) %}
    {% do assets.addCss('https://unpkg.com/flickity@2/dist/flickity.min.css', 94) %}


{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
    {% do assets.addJs('theme://js/script.js', 98) %}
    {% do assets.addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', 99) %}
    {% do assets.addJs('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', 97) %}


{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>



<body id=\"top\" class=\"{{ page.header.body_classes|e }}\">

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}


        {% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">

        </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>

</html>
", "partials/base.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/partials/base.html.twig");
    }
}
