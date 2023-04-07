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

/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_dfba316d46fe86703833bd38c9bd07cf extends Template
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
        $this->loadTemplate("settings_profile/_settings_profile_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 1, "269176752")->display($context);
    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings_profile/_settings_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\settings_profile\\_settings_profile_tabs.html.twig");
    }
}


/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_dfba316d46fe86703833bd38c9bd07cf___269176752 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        $this->loadTemplate("settings_profile/_settings_profile_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 3, "1754805349")->display(twig_array_merge($context, ["route" => "app_settings_profile"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("settings_profile/_settings_profile_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 12, "1875225153")->display(twig_array_merge($context, ["route" => "app_settings_profile_image", "classes" => "ml-2"]));
        // line 20
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings_profile/_settings_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\settings_profile\\_settings_profile_tabs.html.twig");
    }
}


/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_dfba316d46fe86703833bd38c9bd07cf___1754805349 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                Cài Đặt Thông Tin Tài Khoản
            ";
    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 8,  166 => 7,  161 => 5,  157 => 4,  146 => 3,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings_profile/_settings_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\settings_profile\\_settings_profile_tabs.html.twig");
    }
}


/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_dfba316d46fe86703833bd38c9bd07cf___1875225153 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                Cài Đặt Thông Tin Hình Ảnh
            ";
    }

    // line 16
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile_image");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 17,  239 => 16,  234 => 14,  230 => 13,  219 => 12,  170 => 8,  166 => 7,  161 => 5,  157 => 4,  146 => 3,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings_profile/_settings_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\settings_profile\\_settings_profile_tabs.html.twig");
    }
}
