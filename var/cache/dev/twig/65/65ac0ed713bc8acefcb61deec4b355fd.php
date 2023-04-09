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

/* registration/register.html.twig */
class __TwigTemplate_4813da6c84f3aae4938fe498013fac61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'show' => [$this, 'block_show'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "InitDarkMode.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("InitDarkMode.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_show($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        // line 3
        echo "<head>
        <meta charset=\"UTF-8\">
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "
</head>
<body style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\">
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 12
            echo "    <div class=\"rounded-md p-2 border-red-300 bg-red-50 border dark:border-red-600 dark:bg-red-700 dark:text-white mb-4\" role=\"alert\">
        ";
            // line 13
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "<div class=\"h-auto w-full py-16 px-4\">
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    <div class=\"flex flex-col items-center justify-center\">
            <h1 class=\"text-5xl font-bold text-gray-200 text-center\">Register</h1>
            <div class=\"bg-white shadow rounded lg:w-2/3 md:w-2/3 w-full p-10 mt-16\">
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-xl font-extrabold leading-6 text-gray-800\">
                    Thông tin cơ bản
                </p>
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">
                    Nhập thông tin đăng nhập của bạn
                </p>
                <div class=\"w-full flex items-center justify-between py-5\">
                    <hr class=\"w-full bg-gray-400\"></div>
                    <div>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Username (email)"]);
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        echo "
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mt-4\">
                    <div>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), "first", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Password"]);
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), 'errors');
        echo "
                    </div>
                    <div>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), "second", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Repeated Password"]);
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), "second", [], "any", false, false, false, 45), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"flex items-center mt-4 mb-4\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "agreeTerms", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray border text-indigo-300 mr-2"]]);
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "agreeTerms", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Agree to terms"]);
        echo "
                </div>
            </div>
            <div class=\"bg-white shadow rounded lg:w-2/3 md:w-2/3 w-full p-10 mt-4\">
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-xl font-extrabold leading-6 text-gray-800\">
                    Hồ sơ của bạn
                </p>
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">
                    Nhập thêm chi tiết (không bắt buộc) về bản thân bạn. Bạn có thể làm điều đó sau.
                </p>
                <div class=\"w-full flex items-center justify-between py-5\">
                    <hr class=\"w-full bg-gray-400\"></div>

                    ";
        // line 65
        echo twig_include($this->env, $context, "/settings_profile/_profile_form.html.twig", ["form" => twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "userProfile", [], "any", false, false, false, 65)]);
        echo "

                    <div class=\"mt-8\">
                        <button type=\"submit\"
                                style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
                                class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Register</button>
                    </div>
                    <p tabindex=\"0\" class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">Đã có tài khoản? <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"   class=\"hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer\">Đăng Nhập</a></p>
                </div>
            </div>  
    </div>
";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
</div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Đăng Ký
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 6,  214 => 5,  200 => 76,  193 => 72,  183 => 65,  165 => 50,  161 => 49,  154 => 45,  150 => 44,  146 => 43,  140 => 40,  136 => 39,  132 => 38,  125 => 34,  121 => 33,  117 => 32,  99 => 17,  96 => 16,  87 => 13,  84 => 12,  80 => 11,  75 => 8,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InitDarkMode.html.twig' %}
{% block show %}
<head>
        <meta charset=\"UTF-8\">
        {% block title %}
            Đăng Ký
        {% endblock %}

</head>
<body style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\">
{% for flash_error in app.flashes('verify_email_error') %}
    <div class=\"rounded-md p-2 border-red-300 bg-red-50 border dark:border-red-600 dark:bg-red-700 dark:text-white mb-4\" role=\"alert\">
        {{ flash_error }}
    </div>
{% endfor %}
<div class=\"h-auto w-full py-16 px-4\">
{{ form_start(registrationForm) }}
    <div class=\"flex flex-col items-center justify-center\">
            <h1 class=\"text-5xl font-bold text-gray-200 text-center\">Register</h1>
            <div class=\"bg-white shadow rounded lg:w-2/3 md:w-2/3 w-full p-10 mt-16\">
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-xl font-extrabold leading-6 text-gray-800\">
                    Thông tin cơ bản
                </p>
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">
                    Nhập thông tin đăng nhập của bạn
                </p>
                <div class=\"w-full flex items-center justify-between py-5\">
                    <hr class=\"w-full bg-gray-400\"></div>
                    <div>
                        {{ form_label(registrationForm.email, 'Username (email)', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800'}}) }}
                        {{ form_widget(registrationForm.email, {'attr': {'class': 'bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}})}}
                        {{ form_errors(registrationForm.email) }}
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mt-4\">
                    <div>
                        {{ form_label(registrationForm.plainPassword.first, 'Password', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800'}}) }}
                        {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}})}}
                        {{ form_errors(registrationForm.plainPassword.first) }}
                    </div>
                    <div>
                        {{ form_label(registrationForm.plainPassword.second, 'Repeated Password', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800'}}) }}
                        {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2'}})}}
                        {{ form_errors(registrationForm.plainPassword.second) }}
                    </div>
                </div>
                <div class=\"flex items-center mt-4 mb-4\">
                    {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'h-4 w-4 rounded border-gray border text-indigo-300 mr-2'}}) }}
                    {{ form_label(registrationForm.agreeTerms, 'Agree to terms', {'label_attr': {'class': 'text-sm font-medium leading-none text-gray-800'}}) }}
                </div>
            </div>
            <div class=\"bg-white shadow rounded lg:w-2/3 md:w-2/3 w-full p-10 mt-4\">
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-xl font-extrabold leading-6 text-gray-800\">
                    Hồ sơ của bạn
                </p>
                <p tabindex=\"0\"
                    class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">
                    Nhập thêm chi tiết (không bắt buộc) về bản thân bạn. Bạn có thể làm điều đó sau.
                </p>
                <div class=\"w-full flex items-center justify-between py-5\">
                    <hr class=\"w-full bg-gray-400\"></div>

                    {{ include ('/settings_profile/_profile_form.html.twig',{ form: registrationForm.userProfile }) }}

                    <div class=\"mt-8\">
                        <button type=\"submit\"
                                style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
                                class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Register</button>
                    </div>
                    <p tabindex=\"0\" class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">Đã có tài khoản? <a href=\"{{ path('app_login') }}\"   class=\"hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer\">Đăng Nhập</a></p>
                </div>
            </div>  
    </div>
{{ form_end(registrationForm) }}
</div>
</body>
{% endblock %}", "registration/register.html.twig", "E:\\clone-tweet\\templates\\registration\\register.html.twig");
    }
}
