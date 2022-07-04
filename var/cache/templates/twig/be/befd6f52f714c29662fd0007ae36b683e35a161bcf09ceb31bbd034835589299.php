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

/* __string_template__1ac60095aae67e322c1e72f4b252dd1d93e7e70f56aa1a135a5fa81ed1cda65e */
class __TwigTemplate_c4ba7161a1a6d16e25bb5f8d1ae4f41626cd71d1ae26fee7d47f70fa813e33f5 extends \Twig\Template
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
        if (($context["is_vendor_to_admin"] ?? null)) {
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_communication.subject_email", ["[message_from]" => ($context["message_author"] ?? null)]);
        } else {
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_communication.new_message.title", ["[customer]" => ($context["message_author"] ?? null), "[company_name]" => ($context["company_name"] ?? null)]);
        }
    }

    public function getTemplateName()
    {
        return "__string_template__1ac60095aae67e322c1e72f4b252dd1d93e7e70f56aa1a135a5fa81ed1cda65e";
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
        return new Source("", "__string_template__1ac60095aae67e322c1e72f4b252dd1d93e7e70f56aa1a135a5fa81ed1cda65e", "");
    }
}
