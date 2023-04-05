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

/* micro_post/_form.html.twig */
class __TwigTemplate_1b66428a2f82b3f75cf21746db4743fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_form.html.twig"));

        // line 1
        echo "<div class=\"p-4 bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 rounded\">
  ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
        <div>";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'errors');
        echo "</div>

        <div>
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Vui lòng nhập tiêu đề"]);
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), 'errors');
        echo "
        </div>

        <div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "text", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Vui lòng nhập nội dung bài viết"]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "text", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "text", [], "any", false, false, false, 14), 'errors');
        echo "
        </div>

        <div class=\"flex items-center mt-4\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "extraPrivacy", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray border text-indigo-300 mr-2"]]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "extraPrivacy", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Tôi muốn thêm quyền riêng tư"]);
        echo "
        </div>
        <div class=\"text-gray-400 darK:text-gray-500 mb-4 text-sm\">
            Bài viết này chỉ thấy bởi những người mà bạn đã theo dõi
        </div>

        <div class=\"grid justify-items-center\">
            <button type=\"submit\" class=\"text-base font-medium rounded-md py-1 px-4 text-gray-100 bg-indigo-500 hover:bg-indigo-600\">Save!</button>
        </div>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "micro_post/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  90 => 19,  86 => 18,  79 => 14,  75 => 13,  71 => 12,  64 => 8,  60 => 7,  56 => 6,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"p-4 bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 rounded\">
  {{ form_start(form) }}
        <div>{{ form_errors(form) }}</div>

        <div>
            {{ form_label(form.title,'Vui lòng nhập tiêu đề',{'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
            {{ form_widget(form.title, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}})}}
            {{ form_errors(form.title) }}
        </div>

        <div>
            {{ form_label(form.text, 'Vui lòng nhập nội dung bài viết', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800 dark:text-gray-200'}}) }}
            {{ form_widget(form.text, {'attr': {'class': 'bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}}) }}
            {{ form_errors(form.text) }}
        </div>

        <div class=\"flex items-center mt-4\">
            {{ form_widget(form.extraPrivacy, {'attr': {'class': 'h-4 w-4 rounded border-gray border text-indigo-300 mr-2'}}) }}
            {{ form_label(form.extraPrivacy, 'Tôi muốn thêm quyền riêng tư',{'label_attr': {'class': 'text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        </div>
        <div class=\"text-gray-400 darK:text-gray-500 mb-4 text-sm\">
            Bài viết này chỉ thấy bởi những người mà bạn đã theo dõi
        </div>

        <div class=\"grid justify-items-center\">
            <button type=\"submit\" class=\"text-base font-medium rounded-md py-1 px-4 text-gray-100 bg-indigo-500 hover:bg-indigo-600\">Save!</button>
        </div>
    {{ form_end(form) }}
</div>", "micro_post/_form.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_form.html.twig");
    }
}
