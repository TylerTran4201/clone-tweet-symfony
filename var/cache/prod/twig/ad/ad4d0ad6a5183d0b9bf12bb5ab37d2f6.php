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

/* follower/_follow_button.html.twig */
class __TwigTemplate_3d7b3f5ce8b4ca452a6a606475df85cc extends Template
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 2), "follows", [], "any", true, true, false, 2) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2), "follows", [], "any", false, false, false, 2), "contains", [0 => ($context["userToFollow"] ?? null)], "method", false, false, false, 2))) {
                // line 3
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_follow", ["id" => twig_get_attribute($this->env, $this->source, ($context["userToFollow"] ?? null), "id", [], "any", false, false, false, 3)]), "html", null, true);
                echo "\"
    class=\"text-base font-medium rounded-md py-1 px-4 text-gray-100 bg-indigo-500 hover:bg-indigo-600\">
        Follow
    </a>    
    ";
            } else {
                // line 8
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unfollow", ["id" => twig_get_attribute($this->env, $this->source, ($context["userToFollow"] ?? null), "id", [], "any", false, false, false, 8)]), "html", null, true);
                echo "\"
    class=\"text-base font-medium border-2 border-indigo-500 rounded-md py-2 px-8 text-indigo-500 hover:bg-indigo-500 hover:text-gray-100\">
        Unfollow
    </a>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "follower/_follow_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "follower/_follow_button.html.twig", "E:\\clone-tweet\\templates\\follower\\_follow_button.html.twig");
    }
}
