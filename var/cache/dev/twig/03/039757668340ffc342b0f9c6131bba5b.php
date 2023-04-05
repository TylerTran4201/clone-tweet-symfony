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

/* login/index.html.twig */
class __TwigTemplate_e7f96cf1a47b531d576c1006beaf9013 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bread' => [$this, 'block_bread'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 4
        echo "-> Login
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"POST\">
        <div>
            <label class=\"block text-sm text_gray-700 dark:text-gray-300 font-medium\">Email</label>
            <input 
            type=\"text\" 
            name=\"_username\" 
            value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" 
            class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\"/>
        </div>
        <div>
            <label class=\"block text-sm text_gray-700 dark:text-gray-300 font-medium\">Password</label>
            <input 
            type=\"password\" 
            name=\"_password\" 
            class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\"/>
        </div>
        <input type=\"hidden\" name=\"_target_path\" value=\"/micro-post\"/>
        <div>
            <button 
            type=\"submit\" 
            class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Đăng Nhập</button>
        </div>
    </form>
      <div class=\"mt-2 text-center text-gray-600 darK:text-gray-400\">
        Chưa  đăng ký tài khoản ? <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Đăng ký ở đây</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  100 => 14,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bread %}
-> Login
{% endblock %}

{% block body %}
    <form action=\"{{path('app_login')}}\" method=\"POST\">
        <div>
            <label class=\"block text-sm text_gray-700 dark:text-gray-300 font-medium\">Email</label>
            <input 
            type=\"text\" 
            name=\"_username\" 
            value=\"{{lastUsername}}\" 
            class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\"/>
        </div>
        <div>
            <label class=\"block text-sm text_gray-700 dark:text-gray-300 font-medium\">Password</label>
            <input 
            type=\"password\" 
            name=\"_password\" 
            class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\"/>
        </div>
        <input type=\"hidden\" name=\"_target_path\" value=\"/micro-post\"/>
        <div>
            <button 
            type=\"submit\" 
            class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Đăng Nhập</button>
        </div>
    </form>
      <div class=\"mt-2 text-center text-gray-600 darK:text-gray-400\">
        Chưa  đăng ký tài khoản ? <a href=\"{{path('app_register')}}\">Đăng ký ở đây</a>
    </div>
{% endblock %}", "login/index.html.twig", "E:\\clone-tweet\\templates\\login\\index.html.twig");
    }
}
