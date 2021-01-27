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

/* flex-objects/types/pages/buttons/copy.html.twig */
class __TwigTemplate_886a9f69fe207d4ef137c4b54cf281a13a1bf10a3292ea93816243c39184648c extends \Twig\Template
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
        echo "<a class=\"button disable-after-click\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["route"] ?? null), "withoutParams", [], "method"), "withGravParam", [0 => "task", 1 => "copy"], "method"), "getUri", [], "method"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
        echo "\" class=\"page-copy\" >
    <i class=\"fa fa-copy\"></i> ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"button disable-after-click\" href=\"{{ uri.addNonce(route.withoutParams().withGravParam('task', 'copy').getUri(), 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" >
    <i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}
</a>
", "flex-objects/types/pages/buttons/copy.html.twig", "/Users/antoinequarroz/Sites/suffrageFeminin/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/copy.html.twig");
    }
}
