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
class __TwigTemplate_ac1bdaea4fb53d4418471654229c6a25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_admin_manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_admin_manage.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/user_admin_manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Quản Lý Bài Viết";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 6
        echo "Quản Lý Admin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 36, $this->source); })()));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start');
        echo "
    <div class=\"\">
        <div>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Username (email)"]);
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'errors');
        echo " 
        </div>
        <div>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Password"]);
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  250 => 84,  236 => 73,  232 => 72,  228 => 71,  222 => 68,  218 => 67,  214 => 66,  208 => 63,  204 => 61,  194 => 52,  186 => 49,  180 => 47,  172 => 45,  170 => 44,  163 => 40,  159 => 39,  155 => 38,  146 => 37,  142 => 36,  114 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin_base.html.twig' %}

{% block title %}Quản Lý Bài Viết{% endblock %}

{% block bread %}
Quản Lý Admin
{% endblock %}

{% block body %}
{{ include('admin/_manage_tabs.html.twig') }}
{{ include('admin/_user_manage_tabs.html.twig') }}

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
          {% for user in users %}
            <tr class=\"font-normal border-b dark:border-neutral-500 text-gray-900 {% if user.isBanned() %} bg-red-100 dark:bg-red-200 {% elseif user.isVerified() == false %} dark:bg-yellow-700 {% endif %} \">
                <td class=\"whitespace-nowrap  px-6 py-4 font-medium\">{{ user.id }}</td>
                <td class=\"whitespace-nowrap  px-6 py-4\">{{ user.email }}</td>
                <td class=\"whitespace-nowrap  px-6 py-4\"><a href=\"{{ path('app_set_role_admin',{id: user.id})}}\" class=\"hover:underline hover:text-indigo-500\"><span class=\"material-symbols-outlined inline-block align-middle\">
                                                             edit
                                                             </span>Phân quyền</a></td>
                <td class=\"whitespace-nowrap  px-6 py-4\">
                {% if user.isBanned() %}
                    <a class=\"hover:underline\" href=\" {{ path('app_user_unlock',{id: user.id}) }} \" > Đã khóa đến ({{user.bannedUntil | date(\"j M, Y\")}})</a>
                    {% else %}
                    <a class=\"hover:underline\" href=\"{{ path('app_user_lock',{id:user.id}) }}\"> Hoạt Động</a>
                {% endif %}
                </td>
            </tr>
          {% endfor %}
  
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{# Modal #}
<div class=\"modal\" id=\"AddAdmin\">
  <div class=\"modal-box bg-white shadow rounded\">
{{ form_start(form) }}
    <div class=\"\">
        <div>
            {{ form_label(form.email, 'Username (email)', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800'}}) }}
            {{ form_widget(form.email, {'attr': {'class': 'bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}})}}
            {{ form_errors(form.email) }} 
        </div>
        <div>
            {{ form_label(form.password, 'Password', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800'}}) }}
            {{ form_widget(form.password, {'attr': {'class': 'bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}})}}
            {{ form_errors(form.password) }}
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mt-8\">
            <button type=\"submit\"
                    class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                    Add
            </button>
             <a href=\"#\" class=\"block w-full bg-transparent hover:bg-indigo-500 text-indigo-700 hover:text-white border border-indigo-500 hover:border-transparent rounded p-2 mt-4 mb-2 text-center\"> Hủy</a>
        </div>
    </div>
{{ form_end(form) }}
  </div>
</div>
{% endblock %}", "admin/user_admin_manage.html.twig", "E:\\clone-tweet\\templates\\admin\\user_admin_manage.html.twig");
    }
}
