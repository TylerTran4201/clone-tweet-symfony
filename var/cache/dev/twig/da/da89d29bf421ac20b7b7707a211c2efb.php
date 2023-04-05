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
class __TwigTemplate_5b63feb93a5e6cbd44d5c8f40932a4e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post_manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post_manage.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/post_manage.html.twig", 1);
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
        echo "Quản Lý Bài Viết
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
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 28, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  204 => 56,  195 => 52,  191 => 50,  187 => 48,  185 => 47,  180 => 45,  177 => 44,  171 => 42,  168 => 41,  162 => 39,  156 => 37,  153 => 36,  151 => 35,  143 => 32,  138 => 30,  135 => 29,  131 => 28,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin_base.html.twig' %}

{% block title %}Quản Lý Bài Viết{% endblock %}

{% block bread %}
Quản Lý Bài Viết
{% endblock %}

{% block body %}
{{ include('admin/_manage_tabs.html.twig') }}

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
          {% for post in posts %}
            <tr class=\"font-normal border-b dark:border-neutral-500 text-gray-900\">
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">{{ post.id }}</td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium text-indigo-500 underline\">
                    <a href=\"{{ path('app_micro_post_show',{post: post.id}) }}\">{{post.title}}</a>
                </td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">
                   {% if post.author.userProfile != null %}
                        {% if post.author.userProfile.name != null %}
                            {{post.author.userProfile.name}}
                        {% else %}
                            {{ post.author.email }}
                        {% endif %}
                    {% else %}
                            {{ post.author.email }}
                   {% endif %}
                </td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">{{ post.created | date(\"j M, Y\") }}</td>
                <td class=\"whitespace-nowrap px-6 py-4 font-medium\">
                    {% if post.isExtraPrivacy() %}
                        Có
                        {% else %}
                        Không
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
{% endblock %}", "admin/post_manage.html.twig", "E:\\clone-tweet\\templates\\admin\\post_manage.html.twig");
    }
}
