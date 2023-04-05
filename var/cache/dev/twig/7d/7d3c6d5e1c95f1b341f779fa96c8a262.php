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

/* micro_post/_post.html.twig */
class __TwigTemplate_a2fc068380388067d16fb240f70923f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post.html.twig"));

        // line 1
        echo "<div class=\"mb-4\">
    <div class=\"text-2xl\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_show", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\">
        ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
    </a>
    </div>
    <div class=\"text-xl dark:text-gray-400\">
        ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8), "html", null, true);
        echo "
    </div>
    <div class=\"text-gray-500 dark:text-gray-400\">
        ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "created", [], "any", false, false, false, 11), "M j, Y"), "html", null, true);
        echo "
    </div>
    <div>
        <a href=\"#\">
            Like <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">0</span>
        </a>
    </div>
    <div class=\"text-sm text-gray-500 dark:text-gray-400\">
        <a href=\"#\">user#gmail.com</a>
    </div>
    <div>
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_edit", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\">Edit</a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "micro_post/_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  64 => 11,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mb-4\">
    <div class=\"text-2xl\">
        <a href=\"{{path('app_micro_post_show',{post: post.id})}}\">
        {{ post.title }}
    </a>
    </div>
    <div class=\"text-xl dark:text-gray-400\">
        {{post.text}}
    </div>
    <div class=\"text-gray-500 dark:text-gray-400\">
        {{post.created | date(\"M j, Y\")}}
    </div>
    <div>
        <a href=\"#\">
            Like <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">0</span>
        </a>
    </div>
    <div class=\"text-sm text-gray-500 dark:text-gray-400\">
        <a href=\"#\">user#gmail.com</a>
    </div>
    <div>
        <a href=\"{{path('app_micro_post_edit',{post: post.id})}}\">Edit</a>
    </div>
</div>", "micro_post/_post.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post.html.twig");
    }
}
