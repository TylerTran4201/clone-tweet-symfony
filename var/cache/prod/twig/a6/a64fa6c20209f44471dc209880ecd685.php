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

/* settings_profile/_profile_form.html.twig */
class __TwigTemplate_a9cfae28c6f4c1f45c38ee55e7ea08df extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 1), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Tên của bạn"]);
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 dark:text-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "

";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "bio", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Bio"]);
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "bio", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 dark:text-gray-200  border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "twitterUsername", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Twitter username"]);
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "twitterUsername", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200  dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
    </div>

    <div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "websiteUrl", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Website URL"]);
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "websiteUrl", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
    </div>
</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Công ty"]);
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "  
    </div>

    <div>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Địa chỉ"]);
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
    </div>
</div>
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateOfBirth", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Ngày sinh"]);
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateOfBirth", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings_profile/_profile_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  102 => 30,  96 => 27,  92 => 26,  85 => 22,  81 => 21,  72 => 15,  68 => 14,  61 => 10,  57 => 9,  50 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings_profile/_profile_form.html.twig", "E:\\clone-tweet\\templates\\settings_profile\\_profile_form.html.twig");
    }
}
