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

/* micro_Post/_post.html.twig */
class __TwigTemplate_04c9555afe102a7215ad7416ff9a1c3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_Post/_post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_Post/_post.html.twig"));

        // line 1
        echo "<div class=\"bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 lg:w-4/5 sm:w-full shadow-2xl rounded mb-4 p-7\">
    <div class=\"text-2xl flex justify-between\">
        <div class=\"max-sm:text-xl max-sm:font-semibold\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_show", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\">
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</a>
        </div>
        <div>
        ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8) != null)) {
            // line 9
            echo "            <div class=\"dropdown\">
            <label tabindex=\"0\" class=\"m-1 w-10 rounded hover:bg-gray-800 hover:bg-opacity-50 flex items-center max-sm:hover:bg-transparent\">
               <span class=\"material-symbols-outlined cursor-pointer text-4xl max-sm:text-2xl max-sm:font-semibold\"> more_horiz </span>
            </label>

            <ul tabindex=\"0\" class=\"dropdown-content menu p-2 shadow bg-gray-300 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 text-sm rounded-box w-40 max-sm:w-28 max-sm:text-sm max-sm:font-medium\">
                <!-- The button to open modal -->
                ";
            // line 16
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "isAdmin", [], "any", false, false, false, 16) == 1) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDIT") == false))) {
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_edit", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_delete", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Xóa</a></label>
                    <label for=\"my-modal\" class=\"btn\">Hủy Bỏ</label>
                    </div>
                </div>
                </div>

        </div>
    </div>
    <div class=\"text-xl dark:text-gray-200 border p-2 border-gray-600 rounded-md max-sm:text-sm max-sm:font-normal\">
        ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "text", [], "any", false, false, false, 44);
        echo "
    </div>
    <div class=\"text-gray-500 dark:text-gray-200\">
        ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 47, $this->source); })()), "created", [], "any", false, false, false, 47), "M j, Y"), "html", null, true);
        echo "
    </div>
    <div>
    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 50, $this->source); })()), "likedBy", [], "any", false, false, false, 50), "contains", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)], "method", false, false, false, 50)) {
            // line 51
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unlike", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-red-500\"> favorite </span>
            <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 53, $this->source); })()), "likedBy", [], "any", false, false, false, 53), "count", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
        </a>
        ";
        } else {
            // line 56
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-gray-500\"> favorite </span>
            <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 58, $this->source); })()), "likedBy", [], "any", false, false, false, 58), "count", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        // line 61
        echo "    </div>
    <div class=\"text-sm text-gray-500 dark:text-gray-200\">
        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 63, $this->source); })()), "author", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 63, $this->source); })()), "author", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "</a>
    </div>
    <div class=\"flex\">
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_comment", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-gray-500 mr-2 dark:text-gray-200\"> comment </span>
            comment
            <span class=\"ml-2 px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 69, $this->source); })()), "comments", [], "any", false, false, false, 69), "count", [], "any", false, false, false, 69), "html", null, true);
        echo "</span></a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "micro_Post/_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 69,  160 => 66,  152 => 63,  148 => 61,  142 => 58,  136 => 56,  130 => 53,  124 => 51,  122 => 50,  116 => 47,  110 => 44,  98 => 35,  89 => 28,  80 => 22,  77 => 21,  71 => 17,  69 => 16,  60 => 9,  58 => 8,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 lg:w-4/5 sm:w-full shadow-2xl rounded mb-4 p-7\">
    <div class=\"text-2xl flex justify-between\">
        <div class=\"max-sm:text-xl max-sm:font-semibold\">
            <a href=\"{{path('app_micro_post_show',{post: post.id})}}\">
            {{ post.title }}</a>
        </div>
        <div>
        {% if app.user != null %}
            <div class=\"dropdown\">
            <label tabindex=\"0\" class=\"m-1 w-10 rounded hover:bg-gray-800 hover:bg-opacity-50 flex items-center max-sm:hover:bg-transparent\">
               <span class=\"material-symbols-outlined cursor-pointer text-4xl max-sm:text-2xl max-sm:font-semibold\"> more_horiz </span>
            </label>

            <ul tabindex=\"0\" class=\"dropdown-content menu p-2 shadow bg-gray-300 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 text-sm rounded-box w-40 max-sm:w-28 max-sm:text-sm max-sm:font-medium\">
                <!-- The button to open modal -->
                {% if app.user.isAdmin == 1 or  is_granted('ROLE_EDIT') == false %}
                <li class=\"hover:bg-gray-700 hover:bg-opacity-75\">
                    <label for=\"my-modal\" class=\"text-red-500\">Xóa Bài</label>
                </li>
                {% endif %}
                <li class=\"hover:bg-gray-700 hover:bg-opacity-75\">
                    <a href=\"{{path('app_micro_post_edit',{post: post.id})}}\" class=\"mr-2\">Chỉnh sửa</a>
                </li>
            </ul>

            </div>
            {% endif %}
                <!-- Put this part before </body> tag -->
                <input type=\"checkbox\" id=\"my-modal\" class=\"modal-toggle\" />
                <div class=\"modal\">
                <div class=\"modal-box bg-gray-200 dark:bg-gray-700 rounded\">
                    <h3 class=\"font-bold text-lg\">Thông Báo</h3>
                    <p class=\"py-4\">Xác Nhận Xóa Bài</p>
                    <div class=\"modal-action flex justify-between\">
                    <label for=\"my-modal\" class=\"btn bg-red-500\"><a class=\"text-yellow-100\" href=\"{{ path('app_micro_post_delete',{post: post.id}) }}\">Xóa</a></label>
                    <label for=\"my-modal\" class=\"btn\">Hủy Bỏ</label>
                    </div>
                </div>
                </div>

        </div>
    </div>
    <div class=\"text-xl dark:text-gray-200 border p-2 border-gray-600 rounded-md max-sm:text-sm max-sm:font-normal\">
        {{post.text | raw}}
    </div>
    <div class=\"text-gray-500 dark:text-gray-200\">
        {{post.created | date(\"M j, Y\")}}
    </div>
    <div>
    {% if post.likedBy.contains(app.user) %}
        <a href=\"{{ path('app_unlike',{id: post.id}) }}\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-red-500\"> favorite </span>
            <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{ post.likedBy.count }}</span>
        </a>
        {% else %}
        <a href=\"{{ path('app_like',{id: post.id})}}\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-gray-500\"> favorite </span>
            <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{ post.likedBy.count }}</span>
        </a>
    {% endif %}
    </div>
    <div class=\"text-sm text-gray-500 dark:text-gray-200\">
        <a href=\"{{path('app_profile',{ id: post.author.id })}}\">{{post.author.email}}</a>
    </div>
    <div class=\"flex\">
        <a href=\"{{path('app_micro_post_comment',{post: post.id})}}\" class=\"flex items-center\">
            <span class=\"material-symbols-outlined text-gray-500 mr-2 dark:text-gray-200\"> comment </span>
            comment
            <span class=\"ml-2 px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{post.comments.count}}</span></a>
    </div>
</div>", "micro_Post/_post.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post.html.twig");
    }
}
