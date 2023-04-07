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

/* shared/_avatar.html.twig */
class __TwigTemplate_9bb6488520bb3d68828e175fc49f467d extends Template
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
        if ((($context["profile"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "image", [], "any", false, false, false, 1))) {
            // line 2
            echo "<img src=\"";
            echo twig_escape_filter($this->env, (($context["profiles"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "image", [], "any", false, false, false, 2)), "html", null, true);
            echo "\"
    class=\"inline-block h-";
            // line 3
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo " w-";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo " rounded-full ring-2 ring-white dark:ring-gray-600\"/>
";
        } else {
            // line 5
            echo "    <div class=\"inline-block bg-gray-200 dark:bg-gray-700 rounded-full text-3xl h-";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo " w-";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo " ring-2 ring-white dark:ring-gray-600 \"></div>
";
        }
        // line 6
        echo " ";
    }

    public function getTemplateName()
    {
        return "shared/_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  51 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared/_avatar.html.twig", "E:\\clone-tweet\\templates\\shared\\_avatar.html.twig");
    }
}
