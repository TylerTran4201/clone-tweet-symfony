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
class __TwigTemplate_7d7a91080b6ce9866885ef349110ab72 extends Template
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
        echo "<div class=\"p-4 bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 rounded\">
  ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div>";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</div>

        <div>
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Vui lòng nhập tiêu đề"]);
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 dark:text-gray-200 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 8), 'errors');
        echo "
        </div>

        <div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "text", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800 dark:text-gray-200"], "label" => "Vui lòng nhập nội dung bài viết"]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "text", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "bg-gray-200 bg-opacity-40 dark:bg-gray-500 dark:bg-opacity-40 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "text", [], "any", false, false, false, 14), 'errors');
        echo "
        </div>

        <div class=\"flex items-center mt-4\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "extraPrivacy", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray border text-indigo-300 mr-2"]]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "extraPrivacy", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Tôi muốn thêm quyền riêng tư"]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
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
        return array (  96 => 28,  84 => 19,  80 => 18,  73 => 14,  69 => 13,  65 => 12,  58 => 8,  54 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "micro_post/_form.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_form.html.twig");
    }
}
