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
class __TwigTemplate_540d62a1d3f3e5b6fdcbd049429d19d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_profile_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_profile_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Tên của bạn"]);
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 dark:text-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "

";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "bio", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Bio"]);
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "bio", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 dark:text-gray-200  border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "twitterUsername", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Twitter username"]);
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "twitterUsername", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200  dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
    </div>

    <div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "websiteUrl", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Website URL"]);
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "websiteUrl", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
    </div>
</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "company", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Công ty"]);
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "company", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "  
    </div>

    <div>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "location", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Địa chỉ"]);
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "location", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
    </div>
</div>
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Ngày sinh"]);
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  112 => 31,  108 => 30,  102 => 27,  98 => 26,  91 => 22,  87 => 21,  78 => 15,  74 => 14,  67 => 10,  63 => 9,  56 => 5,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_label(form.name, 'Tên của bạn', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
{{ form_widget(form.name, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 dark:text-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}

{{ form_label(form.bio, 'Bio', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
{{ form_widget(form.bio, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 dark:text-gray-200  border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        {{ form_label(form.twitterUsername, 'Twitter username', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
        {{ form_widget(form.twitterUsername, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:text-gray-200  dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}
    </div>

    <div>
        {{ form_label(form.websiteUrl, 'Website URL', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
        {{ form_widget(form.websiteUrl, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}
    </div>
</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        {{ form_label(form.company, 'Công ty', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
        {{ form_widget(form.company, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}  
    </div>

    <div>
        {{ form_label(form.location, 'Địa chỉ', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
        {{ form_widget(form.location, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}
    </div>
</div>
{{ form_label(form.dateOfBirth, 'Ngày sinh', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
{{ form_widget(form.dateOfBirth, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:text-gray-200 dark:bg-gray-500 dark:bg-opacity-40 border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}
", "settings_profile/_profile_form.html.twig", "E:\\clone-tweet\\templates\\settings_profile\\_profile_form.html.twig");
    }
}
