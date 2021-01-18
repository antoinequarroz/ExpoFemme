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

/* partials/navigation.html.twig */
class __TwigTemplate_a323371e7e922b860fd06fba109395a70ef03e2660641ad2290440f2c03a68e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        echo "
<ul>
    ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 27
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 30
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("selected") : (""));
                // line 31
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, ($context["current_page"] ?? null));
                echo "\">
                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []));
                echo "\">
                    ";
                // line 33
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []));
                    echo "\"></i>";
                }
                // line 34
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []));
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 40
            echo "        <li>
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []));
            echo "\">
                ";
            // line 42
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []));
                echo "\"></i>";
            }
            // line 43
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []));
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("selected") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "            <li class=\"has-children ";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null));
                    echo "\">
                <a href=\"";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []));
                    echo "\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []));
                        echo "\"></i>";
                    }
                    // line 8
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []));
                    echo "
                </a>
                <ul>
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 15
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null));
                    echo "\">
                <a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []));
                    echo "\">
                    ";
                    // line 17
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []));
                        echo "\"></i>";
                    }
                    // line 18
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []));
                    echo "
                </a>
            </li>
        ";
                }
                // line 22
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 22,  180 => 18,  174 => 17,  170 => 16,  165 => 15,  158 => 11,  151 => 8,  145 => 7,  141 => 6,  136 => 5,  133 => 4,  130 => 3,  125 => 2,  113 => 1,  108 => 47,  97 => 43,  91 => 42,  87 => 41,  84 => 40,  79 => 39,  76 => 38,  65 => 34,  59 => 33,  55 => 32,  50 => 31,  47 => 30,  42 => 29,  36 => 27,  34 => 26,  30 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"has-children {{ current_page|e }}\">
                <a href=\"{{ p.url|e }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon|e }}\"></i>{% endif %}
                    {{ p.menu|e }}
                </a>
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"{{ current_page|e }}\">
                <a href=\"{{ p.url|e }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon|e }}\"></i>{% endif %}
                    {{ p.menu|e }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul>
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
            <li class=\"{{ current_page|e }}\">
                <a href=\"{{ page.url|e }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon|e }}\"></i>{% endif %}
                    {{ page.menu|e }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li>
            <a href=\"{{ mitem.url|e }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon|e }}\"></i>{% endif %}
                {{ mitem.text|e }}
            </a>
        </li>
    {% endfor %}
</ul>
", "partials/navigation.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/templates/partials/navigation.html.twig");
    }
}
