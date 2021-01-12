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

/* forms/fields/section/section.html.twig */
class __TwigTemplate_6d6411447f612d4aa382ec5060f20a41fb7f0da3b6551bc215ca14f27dc39968 extends \Twig\Template
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
        // line 1
        if ((twig_test_empty($this->getAttribute(($context["field"] ?? null), "security", [])) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute(($context["field"] ?? null), "security", []))))) {
            // line 2
            echo "    ";
            $context["tag"] = (($this->getAttribute(($context["field"] ?? null), "tag", [])) ? ($this->getAttribute(($context["field"] ?? null), "tag", [])) : ("p"));
            // line 3
            echo "    ";
            $context["style"] = (($this->getAttribute(($context["field"] ?? null), "style", [])) ? ($this->getAttribute(($context["field"] ?? null), "style", [])) : (null));
            // line 4
            echo "    ";
            if (($this->getAttribute(($context["field"] ?? null), "title", []) || $this->getAttribute(($context["field"] ?? null), "underline", []))) {
                // line 5
                echo "    <h1 ";
                if ( !$this->getAttribute(($context["field"] ?? null), "underline", [])) {
                    echo "class=\"no_underline\"";
                }
                echo ">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
                }
                echo "</h1>
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            if ($this->getAttribute(($context["field"] ?? null), "text", [])) {
                // line 9
                echo "    <";
                echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
                echo "  ";
                if (($context["style"] ?? null)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                    echo "\" ";
                }
                echo ">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", []));
                } else {
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", []));
                }
                echo "</>
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
                // line 13
                echo "        <div class=\"form-section ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", []), "html", null, true);
                echo "\">
        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 15
                    echo "            ";
                    if ($this->getAttribute($context["field"], "type", [])) {
                        // line 16
                        echo "                ";
                        $context["value"] = (($this->getAttribute($context["field"], "name", [])) ? ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", [])));
                        // line 17
                        echo "                ";
                        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/section/section.html.twig", 17)->display($context);
                        // line 18
                        echo "            ";
                    }
                    // line 19
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </div>
    ";
            }
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 22,  131 => 20,  117 => 19,  114 => 18,  111 => 17,  108 => 16,  105 => 15,  88 => 14,  83 => 13,  81 => 12,  78 => 11,  60 => 9,  58 => 8,  55 => 7,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if field.security is empty or authorize(array(field.security)) %}
    {% set tag = field.tag ?: 'p' %}
    {% set style = field.style ?: null %}
    {% if field.title or field.underline %}
    <h1 {% if not field.underline %}class=\"no_underline\"{% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.title|tu }}{% else %}{{ field.title|t }}{% endif %}</h1>
    {% endif %}

    {% if field.text %}
    <{{ tag }}  {% if style %} style=\"{{ style }}\" {% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.text|tu|raw }}{% else %}{{ field.text|t|raw }}{% endif %}</>
    {% endif %}

    {% if field.fields %}
        <div class=\"form-section {{ field.field_classes }}\">
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = field.name ? data.value(field.name) : data.toArray %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endif %}
", "forms/fields/section/section.html.twig", "/Users/antoinequarroz/Sites/expoFemme/user/plugins/admin-power-tools/admin/templates/forms/fields/section/section.html.twig");
    }
}
