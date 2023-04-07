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

/* admin/user_admin_manage.html.twig */
class __TwigTemplate_539955ed1d39f61393c3da9671662935 extends Template
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
        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/user_admin_manage.html.twig", 1);
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
        echo "Quản Lý Admin
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

<!-- The button to open modal -->
<a href=\"#AddAdmin\" class=\"btn max-w-min bg-green-700 border-0 hover:bg-green-900\">
    <span class=\"material-symbols-outlined\">
        person_add
    </span>Add
</a>

  <div class=\"overflow-x-auto sm:-mx-6 lg:-mx-8\">
    <div class=\"inline-block min-w-full py-2 sm:px-6 lg:px-8\">
      <div class=\"overflow-hidden\">
        <table class=\"min-w-full text-center text-sm font-light bg-gray-200 bg-opacity-80\">
          <thead
            class=\"border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900\">
            <tr>
              <th scope=\"col\" class=\" px-6 py-4\">#</th>
              <th scope=\"col\" class=\" px-6 py-4\">Email</th>
              <th scope=\"col\" class=\" px-6 py-4\">Quyền</th>
              <th scope=\"col\" class=\" px-6 py-4\">Hoạt Động</th>
            </tr>
          </thead>
          <tbody class=\"\">
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "            <tr class=\"font-normal border-b dark:border-neutral-500 text-gray-900 ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 37)) {
                echo " bg-red-100 dark:bg-red-200 ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "method", false, false, false, 37) == false)) {
                echo " dark:bg-yellow-700 ";
            }
            echo " \">
                <td class=\"whitespace-nowrap  px-6 py-4 font-medium\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td class=\"whitespace-nowrap  px-6 py-4\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td class=\"whitespace-nowrap  px-6 py-4\"><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_set_role_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"hover:underline hover:text-indigo-500\"><span class=\"material-symbols-outlined inline-block align-middle\">
                                                             edit
                                                             </span>Phân quyền</a></td>
                <td class=\"whitespace-nowrap  px-6 py-4\">
                ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 44)) {
                // line 45
                echo "                    <a class=\"hover:underline\" href=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_unlock", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo " \" > Đã khóa đến (";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "bannedUntil", [], "any", false, false, false, 45), "j M, Y"), "html", null, true);
                echo ")</a>
                    ";
            } else {
                // line 47
                echo "                    <a class=\"hover:underline\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_lock", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"> Hoạt Động</a>
                ";
            }
            // line 49
            echo "                </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

";
        // line 61
        echo "<div class=\"modal\" id=\"AddAdmin\">
  <div class=\"modal-box bg-white shadow rounded\">
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"\">
        <div>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Username (email)"]);
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 68), 'errors');
        echo " 
        </div>
        <div>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Password"]);
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 73), 'errors');
        echo "
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mt-8\">
            <button type=\"submit\"
                    class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                    Add
            </button>
             <a href=\"#\" class=\"block w-full bg-transparent hover:bg-indigo-500 text-indigo-700 hover:text-white border border-indigo-500 hover:border-transparent rounded p-2 mt-4 mb-2 text-center\"> Hủy</a>
        </div>
    </div>
";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/user_admin_manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 84,  194 => 73,  190 => 72,  186 => 71,  180 => 68,  176 => 67,  172 => 66,  166 => 63,  162 => 61,  152 => 52,  144 => 49,  138 => 47,  130 => 45,  128 => 44,  121 => 40,  117 => 39,  113 => 38,  104 => 37,  100 => 36,  72 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user_admin_manage.html.twig", "E:\\clone-tweet\\templates\\admin\\user_admin_manage.html.twig");
    }
}
