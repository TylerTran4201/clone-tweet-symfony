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

/* admin/post_manage.html.twig */
class __TwigTemplate_643de750a7d4c2d751c172402da2a39f extends Template
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
        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/post_manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Quản Lý Bài Viết";
    }

    // line 5
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "Quản Lý Bài Viết
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo twig_include($this->env, $context, "admin/_manage_tabs.html.twig");
        echo "

<div class=\"flex flex-col\">
  <div class=\"overflow-x-auto sm:-mx-6 lg:-mx-8\">
    <div class=\"inline-block min-w-full py-2 sm:px-6 lg:px-8\">
      <div class=\"overflow-hidden\">
        <table class=\"min-w-full text-center text-sm font-light bg-gray-200 bg-opacity-80\">
          <thead
            class=\"border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900\">
            <tr>
              <th scope=\"col\" class=\" px-6 py-4\">#</th>
              <th scope=\"col\" class=\" px-6 py-4\">Tiêu Đề</th>
              <th scope=\"col\" class=\" px-6 py-4\">Tài Khoản</th>
              <th scope=\"col\" class=\" px-6 py-4\">Ngày Tạo</th>
              <th scope=\"col\" class=\" px-6 py-4\">Giới Hạn</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "            <tr class=\"font-normal border-b dark:border-neutral-500 text-gray-900\">
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium text-indigo-500 underline\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_show", ["post" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                </td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">
                   ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 35), "userProfile", [], "any", false, false, false, 35) != null)) {
                // line 36
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 36), "userProfile", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36) != null)) {
                    // line 37
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 37), "userProfile", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 39
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 39), "email", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                        ";
                }
                // line 41
                echo "                    ";
            } else {
                // line 42
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
                echo "
                   ";
            }
            // line 44
            echo "                </td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created", [], "any", false, false, false, 45), "j M, Y"), "html", null, true);
            echo "</td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">
                    ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["post"], "isExtraPrivacy", [], "method", false, false, false, 47)) {
                // line 48
                echo "                        Có
                        ";
            } else {
                // line 50
                echo "                        Không
                    ";
            }
            // line 52
            echo "                        
                </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/post_manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  153 => 52,  149 => 50,  145 => 48,  143 => 47,  138 => 45,  135 => 44,  129 => 42,  126 => 41,  120 => 39,  114 => 37,  111 => 36,  109 => 35,  101 => 32,  96 => 30,  93 => 29,  89 => 28,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/post_manage.html.twig", "E:\\clone-tweet\\templates\\admin\\post_manage.html.twig");
    }
}
