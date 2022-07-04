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

/* __string_template__026fc07c7dfb2ece65e3a8b060873f2742ac59611e5206797c70dfca36d82427 */
class __TwigTemplate_2ddbb4cdd2d8021c963b0428d80d5850c3a78c97b2ea156a0695c8278cb6c624 extends \Twig\Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <strong>";
        // line 3
        echo $this->getAttribute(($context["u"] ?? null), "s_firstname", []);
        echo " ";
        echo $this->getAttribute(($context["u"] ?? null), "s_lastname", []);
        echo "</strong> ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "dear");
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        〒";
        // line 6
        echo $this->getAttribute(($context["u"] ?? null), "s_zipcode", []);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 9
        echo $this->getAttribute(($context["u"] ?? null), "s_state_descr", []);
        echo $this->getAttribute(($context["u"] ?? null), "s_city", []);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 12
        echo $this->getAttribute(($context["u"] ?? null), "s_address", []);
        echo " <br>";
        echo $this->getAttribute(($context["u"] ?? null), "s_address_2", []);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <bdi>";
        // line 15
        echo $this->getAttribute(($context["u"] ?? null), "s_phone", []);
        echo "</bdi>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__026fc07c7dfb2ece65e3a8b060873f2742ac59611e5206797c70dfca36d82427";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  59 => 12,  52 => 9,  46 => 6,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__026fc07c7dfb2ece65e3a8b060873f2742ac59611e5206797c70dfca36d82427", "");
    }
}
