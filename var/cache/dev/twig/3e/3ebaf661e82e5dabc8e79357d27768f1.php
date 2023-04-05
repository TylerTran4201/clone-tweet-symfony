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

/* admin/user_profile_manage.html.twig */
class __TwigTemplate_9f7699e312b37b506333168b11144520 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_profile_manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_profile_manage.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/user_profile_manage.html.twig", 1);
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

        echo "Quản Lý Hồ Sơ";
        
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
        echo "Quản Lý Hồ Sơ
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
  <div class=\"overflow-x-auto sm:-mx-6 lg:-mx-8\">
    <div class=\"inline-block min-w-full py-2 sm:px-6 lg:px-8\">
      <div class=\"overflow-hidden\">
        <table class=\"min-w-full text-center text-sm font-light bg-gray-200 bg-opacity-80\">
          <thead
            class=\"border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900\">
            <tr>
              <th scope=\"col\" class=\" px-6 py-4\">#</th>
              <th scope=\"col\" class=\" px-6 py-4\">Email</th>
              <th scope=\"col\" class=\" px-6 py-4\">Họ Tên</th>
              <th scope=\"col\" class=\" px-6 py-4\">Tên Tài Khoản</th>
              <th scope=\"col\" class=\" px-6 py-4\">Trang Tài Khoản</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "            <tr class=\"font-normal border-b dark:border-neutral-500 text-gray-900 ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 30)) {
                echo " bg-red-100 dark:bg-red-500";
            }
            echo "\">
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
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 34) != null)) {
                // line 35
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35) != null)) {
                    // line 36
                    echo "                      ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 38
                    echo "                      <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                  ";
                }
                // line 40
                echo "                ";
            } else {
                // line 41
                echo "                  <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                ";
            }
            // line 43
            echo "                </td>
                <td class=\"whitespace-nowrap  px-6 py-4\">
                ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 45) != null)) {
                // line 46
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 46), "twitterUsername", [], "any", false, false, false, 46) != null)) {
                    // line 47
                    echo "                      ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 47), "twitterUsername", [], "any", false, false, false, 47), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 49
                    echo "                      <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                  ";
                }
                // line 51
                echo "                ";
            } else {
                // line 52
                echo "                  <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                ";
            }
            // line 54
            echo "                </td>
                 <th scope=\"col\" class=\" px-6 py-4\">
                 <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                 <span class=\"material-symbols-outlined\"> quick_reference </span>
                 </a>
                 </th>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user_profile_manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 62,  207 => 56,  203 => 54,  199 => 52,  196 => 51,  192 => 49,  186 => 47,  183 => 46,  181 => 45,  177 => 43,  173 => 41,  170 => 40,  166 => 38,  160 => 36,  157 => 35,  155 => 34,  150 => 32,  146 => 31,  139 => 30,  135 => 29,  114 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin_base.html.twig' %}

{% block title %}Quản Lý Hồ Sơ{% endblock %}

{% block bread %}
Quản Lý Hồ Sơ
{% endblock %}

{% block body %}
{{ include('admin/_manage_tabs.html.twig') }}
{{ include('admin/_user_manage_tabs.html.twig') }}

<div class=\"flex flex-col\">
  <div class=\"overflow-x-auto sm:-mx-6 lg:-mx-8\">
    <div class=\"inline-block min-w-full py-2 sm:px-6 lg:px-8\">
      <div class=\"overflow-hidden\">
        <table class=\"min-w-full text-center text-sm font-light bg-gray-200 bg-opacity-80\">
          <thead
            class=\"border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900\">
            <tr>
              <th scope=\"col\" class=\" px-6 py-4\">#</th>
              <th scope=\"col\" class=\" px-6 py-4\">Email</th>
              <th scope=\"col\" class=\" px-6 py-4\">Họ Tên</th>
              <th scope=\"col\" class=\" px-6 py-4\">Tên Tài Khoản</th>
              <th scope=\"col\" class=\" px-6 py-4\">Trang Tài Khoản</th>
            </tr>
          </thead>
          <tbody>
          {% for user in users %}
            <tr class=\"font-normal border-b dark:border-neutral-500 text-gray-900 {% if user.isBanned() %} bg-red-100 dark:bg-red-500{% endif %}\">
                <td class=\"whitespace-nowrap  px-6 py-4 font-medium\">{{ user.id }}</td>
                <td class=\"whitespace-nowrap  px-6 py-4\">{{ user.email }}</td>
                <td class=\"whitespace-nowrap  px-6 py-4\">
                {% if user.userProfile != null%}
                  {% if user.userProfile.name != null %}
                      {{ user.userProfile.name }}
                  {% else %}
                      <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                  {% endif %}
                {% else %}
                  <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                {% endif %}
                </td>
                <td class=\"whitespace-nowrap  px-6 py-4\">
                {% if user.userProfile != null%}
                  {% if user.userProfile.twitterUsername != null %}
                      {{ user.userProfile.twitterUsername }}
                  {% else %}
                      <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                  {% endif %}
                {% else %}
                  <span class=\"text-orange-500 dark:font-medium\">Chưa Có</span>
                {% endif %}
                </td>
                 <th scope=\"col\" class=\" px-6 py-4\">
                 <a href=\"{{ path('app_profile',{id: user.id})}}\">
                 <span class=\"material-symbols-outlined\"> quick_reference </span>
                 </a>
                 </th>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "admin/user_profile_manage.html.twig", "E:\\clone-tweet\\templates\\admin\\user_profile_manage.html.twig");
    }
}
