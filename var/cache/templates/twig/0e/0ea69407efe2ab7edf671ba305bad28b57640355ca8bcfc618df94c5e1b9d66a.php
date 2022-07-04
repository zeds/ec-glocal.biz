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

/* __string_template__3485a50e6ecdf1f9830d544c5999dec4f147aac2df153752cb6171060d04ac7a */
class __TwigTemplate_1bcb621c27c07b09e0ba13d78ff166f46f62b22546daffbac3f6035e84f43fe4 extends \Twig\Template
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
        echo "<table>
<tbody>
<tr>
    <td rowspan=\"2\" style=\"padding-right: 20px; font-family: Helvetica, Arial, sans-serif;\" width=\"20%\">";
        // line 4
        echo $this->getAttribute(($context["p"] ?? null), "image", []);
        echo "
    </td>
    <td style=\"vertical-align: middle; text-align: left;\" width=\"80%\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: 600;\"><a href=\"";
        // line 6
        echo $this->getAttribute(($context["p"] ?? null), "product_url", []);
        echo "\">";
        echo $this->getAttribute(($context["p"] ?? null), "name", []);
        echo "</a></strong></span>
    </td>
</tr>
<tr>
    <td style=\"vertical-align: top; text-align: left; font-family: Helvetica, Arial, sans-serif;\"><span style=\"font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
        // line 10
        if ($this->getAttribute(($context["p"] ?? null), "product_code", [])) {
            echo $this->getAttribute(($context["p"] ?? null), "product_code", []);
            echo "<br> ";
        }
        if ($this->getAttribute(($context["p"] ?? null), "options", [])) {
            echo $this->getAttribute(($context["p"] ?? null), "options", []);
        }
        echo "</span>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__3485a50e6ecdf1f9830d544c5999dec4f147aac2df153752cb6171060d04ac7a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3485a50e6ecdf1f9830d544c5999dec4f147aac2df153752cb6171060d04ac7a", "");
    }
}
