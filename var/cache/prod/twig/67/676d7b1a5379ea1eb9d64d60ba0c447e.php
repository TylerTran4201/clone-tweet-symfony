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

/* settings_profile/profile_image.html.twig */
class __TwigTemplate_cf61c551a46aa7d5907c173e2641ded2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bread' => [$this, 'block_bread'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "settings_profile/profile_image.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Cài Đặt Ảnh Cá Nhân";
    }

    // line 5
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "Cài đặt thông tin hình ảnh
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo twig_include($this->env, $context, "settings_profile/_settings_profile_tabs.html.twig");
        echo "
    <div class=\"grid justify-items-center bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 rounded p-3\">
        <div class=\"flex items-center\">
        ";
        // line 13
        echo twig_include($this->env, $context, "shared/_avatar.html.twig", ["size" => 32, "profile" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "userProfile", [], "any", false, false, false, 13)]);
        echo "
            <div class=\"ml-16\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "profileImage", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "shadow-sm border-transparent bg-gray-300 hover:bg-gray-400 dark:bg-gray-700 dark:hover:bg-gray-900 cursor-pointer rounded-md border p-2"], "label" => "Change"]);
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "profileImage", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "profileImage", [], "any", false, false, false, 18), 'errors');
        echo "
            </div>
        </div>
        <div class=>
            <button type=\"submit\" class=\"block w-auto shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Save Changes</button>
        </div>

        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "settings_profile/profile_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  75 => 13,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings_profile/profile_image.html.twig", "E:\\clone-tweet\\templates\\settings_profile\\profile_image.html.twig");
    }
}
