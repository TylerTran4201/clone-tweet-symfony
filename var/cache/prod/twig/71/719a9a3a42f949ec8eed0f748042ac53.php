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
class __TwigTemplate_82f540aca69ffbf7d52d55ad84e73fbc extends Template
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
        echo "<div class=\"bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 w-4/5 shadow-2xl rounded mb-4 p-7\">
    <div class=\"text-2xl flex justify-between\">
        <div>
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_show", ["post" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\">
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</a>
        </div>
        <div>
        ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8) != null)) {
            // line 9
            echo "            <div class=\"dropdown\">
            <label tabindex=\"0\" class=\"m-1 w-10 rounded hover:bg-gray-800 hover:bg-opacity-50 flex items-center\">
               <span class=\"material-symbols-outlined cursor-pointer text-4xl\"> more_horiz </span>
            </label>

                <ul tabindex=\"0\" class=\"dropdown-content menu p-2 shadow bg-gray-300 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 text-sm rounded-box w-40\">
                <!-- The button to open modal -->
                ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "isAdmin", [], "any", false, false, false, 16) == 1)) {
                // line 17
                echo "                <li class=\"hover:bg-gray-700 hover:bg-opacity-75\">
                    <label for=\"my-modal\" class=\"text-red-500\">Xóa Bài</label>
                </li>
                ";
            }
            // line 21
            echo "                <li class=\"hover:bg-gray-700 hover:bg-opacity-75\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_edit", ["post" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"mr-2\">Chỉnh sửa</a>
                </li>
            </ul>

            </div>
            ";
        }
        // line 28
        echo "                <!-- Put this part before </body> tag -->
                <input type=\"checkbox\" id=\"my-modal\" class=\"modal-toggle\" />
                <div class=\"modal\">
                <div class=\"modal-box bg-gray-200 dark:bg-gray-700 rounded\">
                    <h3 class=\"font-bold text-lg\">Thông Báo</h3>
                    <p class=\"py-4\">Xác Nhận Xóa Bài</p>
                    <div class=\"modal-action flex justify-between\">
                    <label for=\"my-modal\" class=\"btn bg-red-500\"><a class=\"text-yellow-100\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_delete", ["post" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Xóa</a></label>
                    <label for=\"my-modal\" class=\"btn\">Hủy Bỏ</label>
                    </div>
                </div>
                </div>

        </div>
    </div>
    <div class=\"text-xl dark:text-gray-200 border p-2 border-gray-600 rounded-md\">
        ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "text", [], "any", false, false, false, 44);
        echo "
    </div>
    <div class=\"text-gray-500 dark:text-gray-200\">
        ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created", [], "any", false, false, false, 47), "M j, Y"), "html", null, true);
        echo "
    </div>
    <div>
    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "likedBy", [], "any", false, false, false, 50), "contains", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50)], "method", false, false, false, 50)) {
            // line 51
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unlike", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-red-500\"> favorite </span>
            <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "likedBy", [], "any", false, false, false, 53), "count", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
        </a>
        ";
        } else {
            // line 56
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_like", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-gray-500\"> favorite </span>
            <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "likedBy", [], "any", false, false, false, 58), "count", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        // line 61
        echo "    </div>
    <div class=\"text-sm text-gray-500 dark:text-gray-200\">
        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "</a>
    </div>
    <div class=\"flex\">
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_comment", ["post" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-gray-500 mr-2 dark:text-gray-200\"> comment </span>
            comment
            <span class=\"ml-2 px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "comments", [], "any", false, false, false, 69), "count", [], "any", false, false, false, 69), "html", null, true);
        echo "</span></a>
    </div>
</div>";
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
        return array (  160 => 69,  154 => 66,  146 => 63,  142 => 61,  136 => 58,  130 => 56,  124 => 53,  118 => 51,  116 => 50,  110 => 47,  104 => 44,  92 => 35,  83 => 28,  74 => 22,  71 => 21,  65 => 17,  63 => 16,  54 => 9,  52 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "micro_post/_post.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post.html.twig");
    }
}
