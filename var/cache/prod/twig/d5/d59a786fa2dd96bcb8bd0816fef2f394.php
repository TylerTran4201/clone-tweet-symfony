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

/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_7b03d2aab795084883fc3eed963dc017 extends Template
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
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 1, "1605595803")->display($context);
    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_7b03d2aab795084883fc3eed963dc017___1605595803 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "micro_post/_post_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 3, "775658089")->display(twig_array_merge($context, ["route" => "app_micro_post"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 12, "628752345")->display(twig_array_merge($context, ["route" => "app_micro_post_topliked", "classes" => "ml-2"]));
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 21, "1209947973")->display(twig_array_merge($context, ["route" => "app_micro_post_follows", "classes" => "ml-2"]));
        // line 29
        echo "    ";
    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
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
        return new Source("", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_7b03d2aab795084883fc3eed963dc017___775658089 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "micro_post/_post_tabs.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                Tất Cả Bài Viết 
            ";
    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
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
        return new Source("", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_7b03d2aab795084883fc3eed963dc017___628752345 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "micro_post/_post_tabs.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                Lượt Thích
            ";
    }

    // line 16
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_topliked");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
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
        return new Source("", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_7b03d2aab795084883fc3eed963dc017___1209947973 extends Template
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
        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "micro_post/_post_tabs.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                Theo Dõi
            ";
    }

    // line 25
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_follows");
        echo "              
            ";
    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
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
        return new Source("", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}
