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

/* admin/Statistical.html.twig */
class __TwigTemplate_c1755e8670e786f0dc351d7e4f045f31 extends Template
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
        return "admin/admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/Statistical.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Thống Kê";
    }

    // line 5
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "-> Thống Kê
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo twig_include($this->env, $context, "admin/_manage_tabs.html.twig");
        echo "
<div class=\"grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4\">
  <div class=\"min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70\">
    <div class=\"p-4 flex items-center\">
      <div
        class=\"p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4\">
        <svg fill=\"currentColor\" viewBox=\"0 0 20 20\" class=\"w-5 h-5\">
          <path
            d=\"M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z\"
          ></path>
        </svg>
      </div>
      <div>
        <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
          Người sử dụng
        </p>
        <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
          ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["users"] ?? null)), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>

  <div class=\"min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70\">
    <div class=\"p-4 flex items-center\">
      <div
        class=\"p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4\">
        <svg fill=\"currentColor\" viewBox=\"0 0 20 20\" class=\"w-5 h-5\">
          <path
            fill-rule=\"evenodd\"
            d=\"M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z\"
            clip-rule=\"evenodd\"
          ></path>
        </svg>
      </div>
      <div>
        <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
          Bài post
        </p>
        <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
          ";
        // line 50
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["posts"] ?? null)), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>

  <div
    class=\"min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70\">
    <div class=\"p-4 flex items-center\">
      <div
        class=\"p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4\">
        <svg fill=\"currentColor\" viewBox=\"0 0 20 20\" class=\"w-5 h-5\">
          <path
            d=\"M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z\"
          ></path>
        </svg>
      </div>
      <div>
        <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
            Comments
        </p>
        <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
          ";
        // line 72
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>
  
";
    }

    public function getTemplateName()
    {
        return "admin/Statistical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 72,  114 => 50,  88 => 27,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/Statistical.html.twig", "E:\\clone-tweet\\templates\\admin\\Statistical.html.twig");
    }
}
