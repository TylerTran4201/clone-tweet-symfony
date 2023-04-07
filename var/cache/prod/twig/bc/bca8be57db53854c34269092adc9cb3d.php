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

/* admin/_user_manage_tabs.html.twig */
class __TwigTemplate_bb80ae113b9c78334e4d1f13fbba0845 extends Template
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
        $this->loadTemplate("admin/_user_manage_tabs.html.twig", "admin/_user_manage_tabs.html.twig", 1, "449628159")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/_user_manage_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_user_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_user_manage_tabs.html.twig");
    }
}


/* admin/_user_manage_tabs.html.twig */
class __TwigTemplate_bb80ae113b9c78334e4d1f13fbba0845___449628159 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "admin/_user_manage_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        $this->loadTemplate("admin/_user_manage_tabs.html.twig", "admin/_user_manage_tabs.html.twig", 3, "1678082414")->display(twig_array_merge($context, ["route" => "app_user_manage"]));
        // line 11
        echo "
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "            ";
            $this->loadTemplate("admin/_user_manage_tabs.html.twig", "admin/_user_manage_tabs.html.twig", 13, "516412609")->display(twig_array_merge($context, ["route" => "app_user_admin_manage", "classes" => "ml-2"]));
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        ";
        // line 23
        $this->loadTemplate("admin/_user_manage_tabs.html.twig", "admin/_user_manage_tabs.html.twig", 23, "372370662")->display(twig_array_merge($context, ["route" => "app_user_profile_manage", "classes" => "ml-2"]));
        // line 31
        echo "    ";
    }

    public function getTemplateName()
    {
        return "admin/_user_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  108 => 23,  105 => 22,  102 => 21,  99 => 13,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_user_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_user_manage_tabs.html.twig");
    }
}


/* admin/_user_manage_tabs.html.twig */
class __TwigTemplate_bb80ae113b9c78334e4d1f13fbba0845___1678082414 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "admin/_user_manage_tabs.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                Tài Khoản
            ";
    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_manage");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "admin/_user_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 8,  176 => 7,  171 => 5,  167 => 4,  156 => 3,  110 => 31,  108 => 23,  105 => 22,  102 => 21,  99 => 13,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_user_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_user_manage_tabs.html.twig");
    }
}


/* admin/_user_manage_tabs.html.twig */
class __TwigTemplate_bb80ae113b9c78334e4d1f13fbba0845___516412609 extends Template
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
        // line 13
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "admin/_user_manage_tabs.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                    Admin
                ";
    }

    // line 17
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_admin_manage");
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "admin/_user_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 18,  249 => 17,  244 => 15,  240 => 14,  229 => 13,  180 => 8,  176 => 7,  171 => 5,  167 => 4,  156 => 3,  110 => 31,  108 => 23,  105 => 22,  102 => 21,  99 => 13,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_user_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_user_manage_tabs.html.twig");
    }
}


/* admin/_user_manage_tabs.html.twig */
class __TwigTemplate_bb80ae113b9c78334e4d1f13fbba0845___372370662 extends Template
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
        // line 23
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "admin/_user_manage_tabs.html.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                Thông Tin
            ";
    }

    // line 27
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile_manage");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "admin/_user_manage_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 28,  322 => 27,  317 => 25,  313 => 24,  302 => 23,  253 => 18,  249 => 17,  244 => 15,  240 => 14,  229 => 13,  180 => 8,  176 => 7,  171 => 5,  167 => 4,  156 => 3,  110 => 31,  108 => 23,  105 => 22,  102 => 21,  99 => 13,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_user_manage_tabs.html.twig", "E:\\clone-tweet\\templates\\admin\\_user_manage_tabs.html.twig");
    }
}
