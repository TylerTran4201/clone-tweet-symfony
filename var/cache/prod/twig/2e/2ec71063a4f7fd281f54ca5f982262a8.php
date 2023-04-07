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

/* shared/_tabs.html.twig */
class __TwigTemplate_1a71843f4cb45e04b4c9953f96cff1d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tabs' => [$this, 'block_tabs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"bg-white shadow-2xl rounded p-2 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 flex border-b border-gray-300 dark:border-gray-600 w-full mb-8 mt-8\">
    ";
        // line 2
        $this->displayBlock('tabs', $context, $blocks);
        // line 5
        echo "</div>";
    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        
    ";
    }

    public function getTemplateName()
    {
        return "shared/_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 3,  47 => 2,  43 => 5,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared/_tabs.html.twig", "E:\\clone-tweet\\templates\\shared\\_tabs.html.twig");
    }
}
