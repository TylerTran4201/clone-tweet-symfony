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

/* profile/_profile_tabs.html.twig */
class __TwigTemplate_238502aacfe2637257ccad6a790e7661 extends Template
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
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 1, "1420308513")->display($context);
    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\profile\\_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_238502aacfe2637257ccad6a790e7661___1420308513 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "profile/_profile_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 3, "1898842522")->display(twig_array_merge($context, ["route" => "app_profile"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 12, "1133250513")->display(twig_array_merge($context, ["route" => "app_profile_follows", "classes" => "ml-2"]));
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 21, "1499429738")->display(twig_array_merge($context, ["route" => "app_profile_followers", "classes" => "ml-2"]));
        // line 29
        echo "    ";
    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
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
        return new Source("", "profile/_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\profile\\_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_238502aacfe2637257ccad6a790e7661___1898842522 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "profile/_profile_tabs.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                Posts <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "posts", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
            ";
    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 8,  172 => 7,  165 => 5,  161 => 4,  150 => 3,  104 => 29,  102 => 21,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\profile\\_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_238502aacfe2637257ccad6a790e7661___1133250513 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "profile/_profile_tabs.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                Follows <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "follows", [], "any", false, false, false, 14), "count", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
            ";
    }

    // line 16
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_follows", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 17,  247 => 16,  240 => 14,  236 => 13,  225 => 12,  176 => 8,  172 => 7,  165 => 5,  161 => 4,  150 => 3,  104 => 29,  102 => 21,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\profile\\_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_238502aacfe2637257ccad6a790e7661___1499429738 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "profile/_profile_tabs.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                Followers <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "followers", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
            ";
    }

    // line 25
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_followers", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 26,  322 => 25,  315 => 23,  311 => 22,  300 => 21,  251 => 17,  247 => 16,  240 => 14,  236 => 13,  225 => 12,  176 => 8,  172 => 7,  165 => 5,  161 => 4,  150 => 3,  104 => 29,  102 => 21,  99 => 20,  97 => 12,  94 => 11,  91 => 3,  87 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/_profile_tabs.html.twig", "E:\\clone-tweet\\templates\\profile\\_profile_tabs.html.twig");
    }
}
