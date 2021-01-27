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
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('assets', $context, $blocks);
        // line 54
        echo "</head>



<body id=\"top\" class=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
<footer>
    ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "</footer>

";
        // line 75
        $this->displayBlock('bottom', $context, $blocks);
        // line 78
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
<script src=\"https://cdn.plyr.io/3.6.3/plyr.js\"></script>
<script src=\"path/to/plyr.js\"></script>
<script>
    const player = new Plyr('#player');
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
    <link rel=\"stylesheet\" href=\"path/to/plyr.css\" />



";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 98], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", 1 => 99], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 97], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 96], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 90], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/plyr.css", 1 => 89], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap", 1 => 95], "method");
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/flickity@2/dist/flickity.min.css", 1 => 94], "method");
        // line 34
        echo "


";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 41
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/script.js", 1 => 98], "method");
        // line 42
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js", 1 => 99], "method");
        // line 43
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js", 1 => 97], "method");
        // line 44
        echo "



";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 50
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 52
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        // line 61
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "        </div>
    </section>
";
    }

    // line 63
    public function block_content($context, array $blocks = [])
    {
        // line 64
        echo "
        ";
    }

    // line 71
    public function block_footer($context, array $blocks = [])
    {
        // line 72
        echo "    ";
    }

    // line 75
    public function block_bottom($context, array $blocks = [])
    {
        // line 76
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
        return array (  268 => 76,  265 => 75,  261 => 72,  258 => 71,  253 => 64,  250 => 63,  244 => 66,  242 => 63,  238 => 61,  235 => 60,  228 => 52,  223 => 51,  220 => 50,  207 => 44,  204 => 43,  201 => 42,  198 => 41,  195 => 40,  192 => 39,  185 => 34,  182 => 33,  179 => 32,  176 => 31,  173 => 30,  170 => 29,  167 => 28,  164 => 27,  161 => 26,  158 => 25,  145 => 15,  141 => 14,  137 => 12,  135 => 11,  124 => 7,  121 => 6,  118 => 5,  90 => 78,  88 => 75,  84 => 73,  82 => 71,  78 => 69,  76 => 60,  71 => 58,  65 => 54,  63 => 50,  60 => 49,  58 => 39,  55 => 38,  53 => 25,  50 => 24,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
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
    <link rel=\"stylesheet\" href=\"path/to/plyr.css\" />



{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 98) %}
    {% do assets.addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', 99) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 97) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 96) %}
    {% do assets.addCss('theme://css/custom.css', 90) %}
    {% do assets.addCss('theme://css/plyr.css', 89) %}
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
<script src=\"https://cdn.plyr.io/3.6.3/plyr.js\"></script>
<script src=\"path/to/plyr.js\"></script>
<script>
    const player = new Plyr('#player');
</script>


</html>
", "partials/base.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/partials/base.html.twig");
    }
}
