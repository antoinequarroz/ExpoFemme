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

/* partials/modal-reset.html.twig */
class __TwigTemplate_794500debdc78d7176700f2029692f982b7fcef6c364d27ea82803796bfd0a39 extends \Twig\Template
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
        echo "<div class=\"remodal\" data-remodal-id=\"reset-local\" data-remodal-options=\"hashTracking: false\">

    <h1>Git Sync - Reset Local Copy</h1>
    <div class=\"step-0\">
        <div class=\"panel\">
            <p>By proceeding with the reset, all your local changes, if any, will be reverted to the repository state.</p>

            <p>
                Are you sure you want to continue?
            </p>
        </div>
    </div>
    <div class=\"button-bar\">
        <a class=\"button secondary\" data-remodal-action=\"cancel\" href=\"#\">No</a>
        <a class=\"button\" data-gitsync-action=\"reset-local\" href=\"#\"> Yes</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\" data-remodal-id=\"reset-local\" data-remodal-options=\"hashTracking: false\">

    <h1>Git Sync - Reset Local Copy</h1>
    <div class=\"step-0\">
        <div class=\"panel\">
            <p>By proceeding with the reset, all your local changes, if any, will be reverted to the repository state.</p>

            <p>
                Are you sure you want to continue?
            </p>
        </div>
    </div>
    <div class=\"button-bar\">
        <a class=\"button secondary\" data-remodal-action=\"cancel\" href=\"#\">No</a>
        <a class=\"button\" data-gitsync-action=\"reset-local\" href=\"#\"> Yes</a>
    </div>
</div>
", "partials/modal-reset.html.twig", "/Users/antoinequarroz/Sites/expoFemme/user/plugins/git-sync/templates/partials/modal-reset.html.twig");
    }
}
