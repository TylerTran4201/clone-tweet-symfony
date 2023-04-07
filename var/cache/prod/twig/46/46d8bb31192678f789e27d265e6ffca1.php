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

/* admin/_manage_tabs.html.twig */
class __TwigTemplate_7385b9d38a91c7815d1f5d76f2eb1046 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("admin/_manage_tabs.html.twig", "admin/_manage_tabs.html.twig", 1, "510909601")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/_manage_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_manage_tabs.html.twig");
    }
}


/* admin/_manage_tabs.html.twig */
class __TwigTemplate_7385b9d38a91c7815d1f5d76f2eb1046___510909601 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tabs' => [$this, 'block_tabs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "shared/_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "admin/_manage_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        $this->loadTemplate("admin/_manage_tabs.html.twig", "admin/_manage_tabs.html.twig", 3, "1474324805")->display(twig_array_merge($context, ["route" => "app_statistical_manage"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("admin/_manage_tabs.html.twig", "admin/_manage_tabs.html.twig", 12, "992513745")->display(twig_array_merge($context, ["route" => "app_user_manage", "classes" => "ml-2"]));
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("admin/_manage_tabs.html.twig", "admin/_manage_tabs.html.twig", 21, "1555962452")->display(twig_array_merge($context, ["route" => "app_post_manage", "classes" => "ml-2"]));
        // line 29
        echo "    ";
    }

    public function getTemplateName()
    {
        return "admin/_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  102 => 21,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_manage_tabs.html.twig");
    }
}


/* admin/_manage_tabs.html.twig */
class __TwigTemplate_7385b9d38a91c7815d1f5d76f2eb1046___1474324805 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "admin/_manage_tabs.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                Thống Kê
            ";
    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistical_manage");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "admin/_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 8,  170 => 7,  165 => 5,  161 => 4,  150 => 3,  104 => 29,  102 => 21,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_manage_tabs.html.twig");
    }
}


/* admin/_manage_tabs.html.twig */
class __TwigTemplate_7385b9d38a91c7815d1f5d76f2eb1046___992513745 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "admin/_manage_tabs.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                Quản Lý Người Dùng
            ";
    }

    // line 16
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_manage");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "admin/_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 17,  243 => 16,  238 => 14,  234 => 13,  223 => 12,  174 => 8,  170 => 7,  165 => 5,  161 => 4,  150 => 3,  104 => 29,  102 => 21,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_manage_tabs.html.twig");
    }
}


/* admin/_manage_tabs.html.twig */
class __TwigTemplate_7385b9d38a91c7815d1f5d76f2eb1046___1555962452 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "admin/_manage_tabs.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                Quản Lý Bài Viết
            ";
    }

    // line 25
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_manage");
        echo "              
            ";
    }

    public function getTemplateName()
    {
        return "admin/_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 26,  316 => 25,  311 => 23,  307 => 22,  296 => 21,  247 => 17,  243 => 16,  238 => 14,  234 => 13,  223 => 12,  174 => 8,  170 => 7,  165 => 5,  161 => 4,  150 => 3,  104 => 29,  102 => 21,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_manage_tabs.html.twig");
    }
}
