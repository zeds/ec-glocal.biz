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

/* __string_template__5797afc286554b2a49d0fce432186bb7be6c1eab1bb2fe21d0288e9ec823ee3e */
class __TwigTemplate_6e44ed4930501f63a33c55a45707fe52dfbb153dfde1eccdf15d3bbd4c8d9636 extends \Twig\Template
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
        echo "<table width=\"100%;\" style=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\"><img src=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_path", []);
        echo "\" width=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_x", []);
        echo "\" height=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_y", []);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["c"] ?? null), "name", []);
        echo "\">
            </td>
            <td width=\"34%\" style=\"padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">";
        // line 12
        echo $this->getAttribute(($context["o"] ?? null), "invoice_id_text", []);
        echo "</span>
                </p>

                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 16
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "timestamp", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 19
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute(($context["p"] ?? null), "payment", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 22
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "shippings_method", []);
        echo "
                </p>
                ";
        // line 24
        if ($this->getAttribute(($context["o"] ?? null), "tracking_number", [])) {
            // line 25
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 26
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute(($context["o"] ?? null), "tracking_number", []);
            echo "
                </p>
                ";
        }
        // line 29
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["o"] ?? null), "shipping", []), 0, []), "delivery_date", [])) {
            // line 30
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
\t\t\t\t\t<span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 31
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "jp_delivery_date");
            echo "</span>  ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["o"] ?? null), "shipping", []), 0, []), "delivery_date", []);
            echo "
\t\t\t\t</p>
                ";
        }
        // line 34
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["o"] ?? null), "shipping", []), 0, []), "delivery_timing", [])) {
            // line 35
            echo "\t\t\t\t<p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
\t\t\t\t\t<span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 36
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "jp_shipping_delivery_time");
            echo "</span>  ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["o"] ?? null), "shipping", []), 0, []), "delivery_timing", []);
            echo "
\t\t\t\t</p>
                ";
        }
        // line 39
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=\"2\">
        <table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td style=\"vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;\" width=\"30%\">
                <h1 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;\">";
        // line 51
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "store");
        echo "</h1>
                <p style=\"margin: 0px; padding-bottom: 10px;\"><strong>";
        // line 52
        echo $this->getAttribute(($context["c"] ?? null), "name", []);
        echo "</strong>
                </p>
                ";
        // line 54
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "company_address");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"36%\">
                ";
        // line 57
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "bill_to");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"34%\">
                ";
        // line 60
        if ($this->getAttribute(($context["pickup_point"] ?? null), "is_selected", [])) {
            // line 61
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 63
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 65
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 73
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 82
        if ($this->getAttribute(($context["o"] ?? null), "notes", [])) {
            // line 83
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 84
            echo $this->getAttribute(($context["o"] ?? null), "notes", []);
            echo "
                                ";
        }
        // line 86
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;\">
                <tbody>
                <tr style=\" vertical-align: top;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 91
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "subtotal");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 93
        echo $this->getAttribute(($context["o"] ?? null), "display_subtotal", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 97
        echo $this->getAttribute(($context["o"] ?? null), "tax_name", []);
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 99
        echo $this->getAttribute(($context["o"] ?? null), "tax_total", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 103
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 105
        echo $this->getAttribute(($context["o"] ?? null), "display_shipping_cost", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 109
        if ($this->getAttribute(($context["o"] ?? null), "payment_surcharge", [])) {
            // line 110
            echo "                        <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment_surcharge");
            echo " </div> ";
        }
        // line 111
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 112
        if ($this->getAttribute(($context["o"] ?? null), "payment_surcharge", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "payment_surcharge", []);
            echo " ";
        }
        echo "<br>
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\">";
        // line 116
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 117
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 118
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "coupon_code", []);
            echo " ";
        }
        // line 119
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 122
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 123
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 124
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "discount", []);
            echo " ";
        }
        // line 125
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 128
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 129
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 130
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "subtotal_discount", []);
            echo " ";
        }
        // line 131
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: 600;\">
                    <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 134
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "total");
        echo "
                    </td>
                    <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 136
        echo $this->getAttribute(($context["o"] ?? null), "total", []);
        echo "
                    </td>
                </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__5797afc286554b2a49d0fce432186bb7be6c1eab1bb2fe21d0288e9ec823ee3e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 136,  330 => 134,  325 => 131,  319 => 130,  316 => 129,  310 => 128,  305 => 125,  299 => 124,  296 => 123,  290 => 122,  285 => 119,  279 => 118,  276 => 117,  270 => 116,  259 => 112,  256 => 111,  251 => 110,  249 => 109,  242 => 105,  237 => 103,  230 => 99,  225 => 97,  218 => 93,  213 => 91,  206 => 86,  201 => 84,  196 => 83,  194 => 82,  182 => 73,  172 => 65,  166 => 63,  160 => 61,  158 => 60,  152 => 57,  146 => 54,  141 => 52,  137 => 51,  123 => 39,  115 => 36,  112 => 35,  109 => 34,  101 => 31,  98 => 30,  95 => 29,  87 => 26,  84 => 25,  82 => 24,  75 => 22,  67 => 19,  59 => 16,  52 => 12,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5797afc286554b2a49d0fce432186bb7be6c1eab1bb2fe21d0288e9ec823ee3e", "");
    }
}
