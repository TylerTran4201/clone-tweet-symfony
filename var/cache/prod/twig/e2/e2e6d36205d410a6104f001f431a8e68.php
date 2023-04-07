<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profile/follows.html.twig */
class __TwigTemplate_b59ebc3ca4c42c6dad030eb511b0950d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bread' => [$this, 'block_bread'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "profile/follows.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tài Khoản Người Dùng -> Đang Theo Dõi";
    }

    // line 5
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "Tài Khoản Người Dùng <span class=\"material-symbols-outlined\"> arrow_forward </span> Đang Theo Dõi
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo twig_include($this->env, $context, "profile/_profile_header.html.twig");
        echo "
";
        // line 11
        echo twig_include($this->env, $context, "profile/_profile_tabs.html.twig");
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "follower/_follower_list.html.twig", ["users" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "follows", [], "any", false, false, false, 12)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "profile/follows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  72 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/follows.html.twig", "E:\\clone-tweet\\templates\\profile\\follows.html.twig");
    }
}
