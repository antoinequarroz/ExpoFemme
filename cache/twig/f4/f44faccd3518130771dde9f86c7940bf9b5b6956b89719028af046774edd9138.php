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
class __TwigTemplate_e488c71f36d7d6c8e8aa359d7f93ab021f1b978ae134d37203225c640467c5fb extends \Twig\Template
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
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('assets', $context, $blocks);
        // line 52
        echo "</head>



<body id=\"top\" class=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "
<footer>
    ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "</footer>

";
        // line 73
        $this->displayBlock('bottom', $context, $blocks);
        // line 76
        echo "
</body>

    <script defer src=\"/your-path-to-fontawesome/js/brands.js\"></script>
    <script defer src=\"/your-path-to-fontawesome/js/solid.js\"></script>
    <script defer src=\"/your-path-to-fontawesome/js/fontawesome.js\"></script>
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>
<script src=\"./node_modules/sal.js/dist/sal.js\"></script>

<script>
    sal()
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/50_picto.png"));
        echo "\" sizes=\"152x152\"/>
    <link rel=\"canonical\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"));
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
    <link rel=\"stylesheet\" href=\"./node_modules/sal.js/dist/sal.css\">
    <link href=\"/your-path-to-fontawesome/css/all.css\" rel=\"stylesheet\">



";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 98], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", 1 => 99], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 97], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 96], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 90], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap", 1 => 95], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/flickity@2/dist/flickity.min.css", 1 => 94], "method");
        // line 32
        echo "


";
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 39
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/script.js", 1 => 98], "method");
        // line 40
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js", 1 => 99], "method");
        // line 41
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js", 1 => 97], "method");
        // line 42
        echo "



";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 48
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 50
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        // line 59
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "        </div>
    </section>
";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        // line 62
        echo "
        ";
    }

    // line 69
    public function block_footer($context, array $blocks = [])
    {
        // line 70
        echo "    ";
    }

    // line 73
    public function block_bottom($context, array $blocks = [])
    {
        // line 74
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
        return array (  260 => 74,  257 => 73,  253 => 70,  250 => 69,  245 => 62,  242 => 61,  236 => 64,  234 => 61,  230 => 59,  227 => 58,  220 => 50,  215 => 49,  212 => 48,  199 => 42,  196 => 41,  193 => 40,  190 => 39,  187 => 38,  184 => 37,  177 => 32,  174 => 31,  171 => 30,  168 => 29,  165 => 28,  162 => 27,  159 => 26,  156 => 25,  153 => 24,  141 => 15,  137 => 14,  133 => 12,  131 => 11,  120 => 7,  117 => 6,  114 => 5,  90 => 76,  88 => 73,  84 => 71,  82 => 69,  78 => 67,  76 => 58,  71 => 56,  65 => 52,  63 => 48,  60 => 47,  58 => 37,  55 => 36,  53 => 24,  50 => 23,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
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


    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/50_picto.png')|e }}\" sizes=\"152x152\"/>
    <link rel=\"canonical\" href=\"{{ page.url(true, true)|e }}\" />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
    <link rel=\"stylesheet\" href=\"./node_modules/sal.js/dist/sal.css\">
    <link href=\"/your-path-to-fontawesome/css/all.css\" rel=\"stylesheet\">



{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 98) %}
    {% do assets.addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', 99) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 97) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 96) %}
    {% do assets.addCss('theme://css/custom.css', 90) %}
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

<footer>
    {% block footer %}
    {% endblock %}
</footer>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>

    <script defer src=\"/your-path-to-fontawesome/js/brands.js\"></script>
    <script defer src=\"/your-path-to-fontawesome/js/solid.js\"></script>
    <script defer src=\"/your-path-to-fontawesome/js/fontawesome.js\"></script>
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>
<script src=\"./node_modules/sal.js/dist/sal.js\"></script>

<script>
    sal()
</script>



</html>
", "partials/base.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/partials/base.html.twig");
    }
}
