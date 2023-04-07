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

/* admin/user_manage.html.twig */
class __TwigTemplate_3fbe65400099934520687d776da72771 extends Template
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
        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/user_manage.html.twig", 1);
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
        echo "Quản Lý Người Dùng
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo twig_include($this->env, $context, "admin/_manage_tabs.html.twig");
        echo "
";
        // line 11
        echo twig_include($this->env, $context, "admin/_user_manage_tabs.html.twig");
        echo "

<div class=\"flex flex-col\">
";
        // line 14
        $context["user_click"] = "hello";
        // line 15
        echo "  <div class=\"overflow-x-auto sm:-mx-6 lg:-mx-8\">
    <div class=\"inline-block min-w-full py-2 sm:px-6 lg:px-8\">
      <div class=\"overflow-hidden\">
        <table class=\"min-w-full text-center text-sm font-light bg-gray-200 bg-opacity-80\">
          <thead
            class=\"border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900\">
            <tr>
              <th scope=\"col\" class=\" px-6 py-4\">#</th>
              <th scope=\"col\" class=\" px-6 py-4\">Email</th>
              <th scope=\"col\" class=\" px-6 py-4\">Tình Trạng Xác Minh</th>
              <th scope=\"col\" class=\" px-6 py-4\">Hoạt Động</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "            <tr class=\"font-normal border-b dark:border-neutral-500 text-gray-900 ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 30)) {
                echo " bg-red-100 dark:bg-red-200 ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "method", false, false, false, 30) == false)) {
                echo " dark:bg-amber-400 ";
            }
            echo " \">
                <td class=\"whitespace-nowrap  px-6 py-4 font-medium\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td class=\"whitespace-nowrap  px-6 py-4\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td class=\"whitespace-nowrap  px-6 py-4\">
                ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "method", false, false, false, 34)) {
                // line 35
                echo "                    <span class=\"text-green-500 font-bold material-symbols-outlined\"> task_alt </span>
                    ";
            } else {
                // line 36
                echo " 
                    <span class=\"text-red-500 font-bold material-symbols-outlined\"> cancel </span>
                ";
            }
            // line 38
            echo "</td>
                <td class=\"whitespace-nowrap  px-6 py-4\">
                ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 40)) {
                // line 41
                echo "                    <a class=\"hover:underline\" href=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_unlock", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo " \" > Đã khóa đến (";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "bannedUntil", [], "any", false, false, false, 41), "j M, Y"), "html", null, true);
                echo ")</a>
                    ";
            } else {
                // line 43
                echo "                    <a class=\"hover:underline\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_lock", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\"> Hoạt Động</a>
                ";
            }
            // line 45
            echo "                </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
";
        // line 56
        echo "<div class=\"modal\" id=\"lock-modal\">
  <div class=\"modal-box text-gray-100\">
    <h3 class=\"font-bold text-lg\">Thông Báo</h3>
    <p class=\"py-4\">Xác nhận khóa tài khoản</p>
    <div class=\"modal-action flex justify-between\">
        <label for=\"my-modal\" class=\"btn bg-red-500\"><a class=\"text-gray-100\" href=\"#\">Khóa</a></label>
        <label for=\"my-modal\" class=\"btn\"><a href=\"#\">Hủy Bỏ</a></label>
    </div>
  </div>
</div>

  

";
        // line 70
        echo "<div class=\"modal\" id=\"lock-modal\">
  <div class=\"modal-box text-gray-100\">
    <h3 class=\"font-bold text-lg\">Thông Báo</h3>
    <p class=\"py-4\">Xác nhận mở tài khoản</p>
    <div class=\"modal-action flex justify-between\">
        <label for=\"my-modal\" class=\"btn bg-green-500\"><a class=\"text-gray-100\" href=\"#\">Mở Khóa</a></label>
        <label for=\"my-modal\" class=\"btn\"><a href=\"#\">Hủy Bỏ</a></label>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/user_manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 70,  166 => 56,  157 => 48,  149 => 45,  143 => 43,  135 => 41,  133 => 40,  129 => 38,  124 => 36,  120 => 35,  118 => 34,  113 => 32,  109 => 31,  100 => 30,  96 => 29,  80 => 15,  78 => 14,  72 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user_manage.html.twig", "E:\\clone-tweet\\templates\\admin\\user_manage.html.twig");
    }
}
