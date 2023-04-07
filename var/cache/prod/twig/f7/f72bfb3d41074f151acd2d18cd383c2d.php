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

/* shared/_tab.html.twig */
class __TwigTemplate_ff377ba34aa471a56478d4906483a923 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'path' => [$this, 'block_path'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1) == ($context["route"] ?? null))) {
            echo "text-indigo-600 dark:text-indigo-300 border-b-2 border-indigo-500 dark:border-indigo-300";
        } else {
            // line 2
            echo "    text-gray-600 dark:text-gray-400";
        }
        echo " pb-2 ";
        if (array_key_exists("classes", $context)) {
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        }
        echo "\">
    <a href=\"";
        // line 3
        $this->displayBlock('path', $context, $blocks);
        echo "\">
        ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "    </a>
</div>";
    }

    // line 3
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
    }

    public function getTemplateName()
    {
        return "shared/_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 5,  70 => 4,  64 => 3,  59 => 6,  57 => 4,  53 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared/_tab.html.twig", "E:\\clone-tweet\\templates\\shared\\_tab.html.twig");
    }
}
