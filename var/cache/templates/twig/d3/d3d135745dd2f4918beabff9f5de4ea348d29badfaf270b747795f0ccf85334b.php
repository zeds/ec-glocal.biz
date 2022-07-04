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

/* __string_template__d70ffab4510854d5ea93dd9881cd1f4f2fa073ae0e38c3016aaa28b37af2054e */
class __TwigTemplate_3d7d7165a8879b617b639bdc2b47d849e9f1ef26633422be59ef1e6508024679 extends \Twig\Template
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
        $context["parts"] = [0 => $this->getAttribute(($context["c"] ?? null), "city", [])];
        // line 2
        if ($this->getAttribute(($context["c"] ?? null), "state_descr", [])) {
            // line 3
            echo "    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
            $context["parts"] = twig_array_merge(($context["parts"] ?? null), [0 => $this->getAttribute(($context["c"] ?? null), "state_descr", [])]);
            echo "</p>
";
        }
        // line 5
        echo "
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">〒";
        // line 6
        echo $this->getAttribute(($context["c"] ?? null), "zipcode", []);
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 7
        echo $this->getAttribute(($context["c"] ?? null), "state_descr", []);
        echo $this->getAttribute(($context["c"] ?? null), "city", []);
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 8
        echo $this->getAttribute(($context["c"] ?? null), "address", []);
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\"><bdi>";
        // line 9
        echo $this->getAttribute(($context["c"] ?? null), "phone", []);
        echo " </bdi></p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 10
        echo $this->getAttribute(($context["c"] ?? null), "users_department", []);
        echo " </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 11
        echo $this->getAttribute(($context["c"] ?? null), "website", []);
        echo " </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__d70ffab4510854d5ea93dd9881cd1f4f2fa073ae0e38c3016aaa28b37af2054e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  56 => 9,  52 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d70ffab4510854d5ea93dd9881cd1f4f2fa073ae0e38c3016aaa28b37af2054e", "");
    }
}
