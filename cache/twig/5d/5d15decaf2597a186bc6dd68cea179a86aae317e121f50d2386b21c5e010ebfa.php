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

/* forms/field.html.twig */
class __TwigTemplate_c4083f9a8d2031cf513e20966bad6bc141ab32026368a71fbc7f9181255e5d93 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 2
            echo "
";
            // line 3
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 4
                echo "    ";
                $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
                // line 5
                echo "    ";
                $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) &&  !(null === ($context["originalValue"] ?? null)));
                // line 6
                echo "    ";
                $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) &&  !($context["toggleableChecked"] ?? null));
                // line 7
                echo "    ";
                $context["default"] = $this->getAttribute(($context["field"] ?? null), "default", []);
                // line 8
                echo "    ";
                $context["value"] = (($context["value"]) ?? (null));
                // line 9
                echo "    ";
                $context["has_value"] =  !(($context["value"] ?? null) === null);
                // line 10
                echo "    ";
                if ( !($context["has_value"] ?? null)) {
                    // line 11
                    echo "        ";
                    $context["value"] = ($context["default"] ?? null);
                    // line 12
                    echo "    ";
                }
                // line 13
                echo "
    ";
                // line 14
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 15
                    echo "        ";
                    $context["value"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->toYamlFilter(($context["value"] ?? null));
                    // line 16
                    echo "    ";
                }
            }
            // line 18
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 19
            $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 20
            $context["show_label"] = ( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false));
            // line 21
            echo "
";
            // line 22
            $this->displayBlock('field', $context, $blocks);
            // line 122
            echo "
";
        }
    }

    // line 22
    public function block_field($context, array $blocks = [])
    {
        // line 23
        echo "    <div class=\"form-field grid";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
            echo " form-field-toggleable";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "outerclasses", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", []), "html", null, true);
        echo "\">
        ";
        // line 24
        $this->displayBlock('contents', $context, $blocks);
        // line 120
        echo "    </div>
";
    }

    // line 24
    public function block_contents($context, array $blocks = [])
    {
        // line 25
        echo "            ";
        if (($context["show_label"] ?? null)) {
            // line 26
            echo "            <div class=\"form-label";
            if ( !($context["vertical"] ?? null)) {
                echo " block size-1-3";
            }
            echo "\">
                ";
            // line 27
            if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
                // line 28
                echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
                echo "\"
                               ";
                // line 31
                if (($context["toggleableChecked"] ?? null)) {
                    echo "value=\"1\"";
                }
                // line 32
                echo "                               name=\"toggleable_";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\"
                               ";
                // line 33
                if (($context["toggleableChecked"] ?? null)) {
                    echo "checked=\"checked\"";
                }
                // line 34
                echo "                        >
                        <label for=\"toggleable_";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
                echo "\"></label>
                    </span>
                ";
            }
            // line 38
            echo "                <label";
            echo (($this->getAttribute(($context["field"] ?? null), "toggleable", [])) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . "\"")) : (""));
            echo ">
                ";
            // line 39
            $this->displayBlock('label', $context, $blocks);
            // line 55
            echo "                </label>
                ";
            // line 56
            if ($this->getAttribute(($context["field"] ?? null), "sublabel", [])) {
                // line 57
                echo "                <div class=\"form-sublabel\">
                    ";
                // line 58
                if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                    // line 59
                    echo "                        ";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "sublabel", [])), false);
                    echo "
                    ";
                } else {
                    // line 61
                    echo "                        ";
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "sublabel", []));
                    echo "
                    ";
                }
                // line 63
                echo "                </div>
                ";
            }
            // line 65
            echo "            </div>
            ";
        }
        // line 67
        echo "            <div class=\"form-data";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 68
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 73
        echo "            >
                ";
        // line 74
        $this->displayBlock('group', $context, $blocks);
        // line 107
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 108
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 110
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 111
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 113
                echo "                                ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 115
            echo "                        </span>
                    </div>
                ";
        }
        // line 118
        echo "            </div>
        ";
    }

    // line 39
    public function block_label($context, array $blocks = [])
    {
        // line 40
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 41
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 42
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", [])), false), "html");
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "</span>
                        ";
            } else {
                // line 44
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", [])), "html");
                echo "\">";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", []));
                echo "</span>
                        ";
            }
            // line 46
            echo "                    ";
        } else {
            // line 47
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 48
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "
                        ";
            } else {
                // line 50
                echo "                            ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", []));
                echo "
                        ";
            }
            // line 52
            echo "                    ";
        }
        // line 53
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 68
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 69
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 74
    public function block_group($context, array $blocks = [])
    {
        // line 75
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 106
        echo "                ";
    }

    // line 75
    public function block_input($context, array $blocks = [])
    {
        // line 76
        echo "                        <div class=\"form-input-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
                            ";
        // line 77
        $this->displayBlock('prepend', $context, $blocks);
        // line 78
        echo "                            ";
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter(($context["value"] ?? null))));
        // line 79
        echo "                            <input
                                ";
        // line 81
        echo "                                name=\"";
        echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
        echo "\"
                                value=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
                                ";
        // line 83
        if ($this->getAttribute(($context["field"] ?? null), "key", [])) {
            // line 84
            echo "                                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["field_name"] ?? null))), "html", null, true);
            echo "\"
                                ";
        }
        // line 86
        echo "                                ";
        // line 87
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 102
        echo "                            />
                            ";
        // line 103
        $this->displayBlock('append', $context, $blocks);
        // line 104
        echo "                        </div>
                    ";
    }

    // line 77
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 87
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 88
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 89
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 90
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 91
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 92
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 93
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 94
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 95
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 96
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 97
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 98
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []), "html", null, true);
            echo "\"";
        }
        // line 99
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", []))), "html", null, true);
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 100
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "title", []))), "html", null, true);
            echo "\" ";
        }
        // line 101
        echo "                                ";
    }

    // line 103
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 103,  476 => 101,  470 => 100,  463 => 99,  456 => 98,  451 => 97,  444 => 96,  439 => 95,  434 => 94,  429 => 93,  422 => 92,  417 => 91,  410 => 90,  403 => 89,  396 => 88,  393 => 87,  388 => 77,  383 => 104,  381 => 103,  378 => 102,  375 => 87,  373 => 86,  367 => 84,  365 => 83,  361 => 82,  356 => 81,  353 => 79,  350 => 78,  348 => 77,  341 => 76,  338 => 75,  334 => 106,  331 => 75,  328 => 74,  322 => 71,  318 => 70,  313 => 69,  310 => 68,  303 => 53,  300 => 52,  294 => 50,  288 => 48,  285 => 47,  282 => 46,  274 => 44,  266 => 42,  263 => 41,  260 => 40,  257 => 39,  252 => 118,  247 => 115,  241 => 113,  235 => 111,  233 => 110,  227 => 108,  224 => 107,  222 => 74,  219 => 73,  217 => 68,  210 => 67,  206 => 65,  202 => 63,  196 => 61,  190 => 59,  188 => 58,  185 => 57,  183 => 56,  180 => 55,  178 => 39,  173 => 38,  167 => 35,  164 => 34,  160 => 33,  155 => 32,  151 => 31,  147 => 30,  141 => 28,  139 => 27,  132 => 26,  129 => 25,  126 => 24,  121 => 120,  119 => 24,  105 => 23,  102 => 22,  96 => 122,  94 => 22,  91 => 21,  89 => 20,  87 => 19,  85 => 18,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set originalValue = originalValue is defined ? originalValue : value %}
    {% set toggleableChecked = field.toggleable and originalValue is not null %}
    {% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
    {% set default = field.default %}
    {% set value = value ?? null %}
    {% set has_value = value is not same as(null) %}
    {% if not has_value %}
        {% set value = default %}
    {% endif %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|toYaml %}
    {% endif %}
{% endif %}
{% set vertical = field.style == 'vertical' %}
{% set field_name = (scope ~ field.name)|fieldName %}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false ) %}

{% block field %}
    <div class=\"form-field grid{% if vertical %} vertical{% endif %}{% if field.toggleable %} form-field-toggleable{% endif %} {{ field.outerclasses }} {{ field.field_classes }}\">
        {% block contents %}
            {% if show_label %}
            <div class=\"form-label{% if not vertical %} block size-1-3{% endif %}\">
                {% if field.toggleable %}
                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ field_name }}\">
                        <input type=\"checkbox\"
                               id=\"toggleable_{{ field.name }}\"
                               {% if toggleableChecked %}value=\"1\"{% endif %}
                               name=\"toggleable_{{ field_name }}\"
                               {% if toggleableChecked %}checked=\"checked\"{% endif %}
                        >
                        <label for=\"toggleable_{{ field.name }}\"></label>
                    </span>
                {% endif %}
                <label{{ (field.toggleable ? ' class=\"toggleable\" for=\"toggleable_' ~ field.name ~ '\"')|raw }}>
                {% block label %}
                    {% if field.help %}
                        {% if field.markdown %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|tu|markdown(false)|e('html') }}\">{{ field.label|tu|markdown(false)|raw }}</span>
                        {% else %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|tu|e('html') }}\">{{ field.label|tu|raw }}</span>
                        {% endif %}
                    {% else %}
                        {% if field.markdown %}
                            {{ field.label|tu|markdown(false)|raw }}
                        {% else %}
                            {{ field.label|tu|raw }}
                        {% endif %}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
                {% if field.sublabel %}
                <div class=\"form-sublabel\">
                    {% if field.markdown %}
                        {{ field.sublabel|tu|markdown(false)|raw }}
                    {% else %}
                        {{ field.sublabel|tu|raw }}
                    {% endif %}
                </div>
                {% endif %}
            </div>
            {% endif %}
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ toggleableChecked }}\"
                data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            {% set input_value = value is iterable ? value|join(',') : value|string %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ field_name }}\"
                                value=\"{{ input_value }}\"
                                {% if field.key %}
                                    data-key-observe=\"{{ (scope ~ field_name)|fieldName }}\"
                                {% endif %}
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|tu }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|e|tu }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|e|tu }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|tu|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|tu|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}

{% endif %}
", "forms/field.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/plugins/admin/themes/grav/templates/forms/field.html.twig");
    }
}
