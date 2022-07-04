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

/* __string_template__ddae7f0b3538bf556f8c150b586b8f3f3f192d8f514f5ed8c51c982d1b2b2634 */
class __TwigTemplate_1bb167f4b41dd73867ef07d051195886d45f7804a8ddb3c7416ca2171c542ca0 extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "change_order_status_default_subj", ["[order]" => $this->getAttribute(($context["order_info"] ?? null), "order_id", []), "[status]" => $this->getAttribute(($context["order_status"] ?? null), "description", [])]);
    }

    public function getTemplateName()
    {
        return "__string_template__ddae7f0b3538bf556f8c150b586b8f3f3f192d8f514f5ed8c51c982d1b2b2634";
    }

    public function isTraitable()
    {
        return false;
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
        return new Source("{{ company_name }}: {{ __(\"change_order_status_default_subj\", {\"[order]\": order_info.order_id, \"[status]\": order_status.description}) }}", "__string_template__ddae7f0b3538bf556f8c150b586b8f3f3f192d8f514f5ed8c51c982d1b2b2634", "");
    }
}
