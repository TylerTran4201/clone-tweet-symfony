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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<html>
 <head>
        <meta charset=\"UTF-8\">
        <title>Đăng Ký</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
    </head>
<body style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 11
            echo "    <div class=\"rounded-md p-2 border-red-300 bg-red-50 border dark:border-red-600 dark:bg-red-700 dark:text-white mb-4\" role=\"alert\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div class=\"h-auto w-full py-16 px-4\">
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'form_start');
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
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Username (email)"]);
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'errors');
        echo "
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mt-4\">
                    <div>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Password"]);
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), "first", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'errors');
        echo "
                    </div>
                    <div>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), "second", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Repeated Password"]);
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), "second", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"]]);
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"flex items-center mt-4 mb-4\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "agreeTerms", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray border text-indigo-300 mr-2"]]);
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "agreeTerms", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "text-sm font-medium leading-none text-gray-800"], "label" => "Agree to terms"]);
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
        // line 64
        echo twig_include($this->env, $context, "/settings_profile/_profile_form.html.twig", ["form" => twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "userProfile", [], "any", false, false, false, 64)]);
        echo "

                    <div class=\"mt-8\">
                        <button type=\"submit\"
                                style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
                                class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Register</button>
                    </div>
                    <p tabindex=\"0\" class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">Đã có tài khoản? <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"   class=\"hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer\">Đăng Nhập</a></p>
                </div>
            </div>  
    </div>
";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  174 => 75,  167 => 71,  157 => 64,  139 => 49,  135 => 48,  128 => 44,  124 => 43,  120 => 42,  114 => 39,  110 => 38,  106 => 37,  99 => 33,  95 => 32,  91 => 31,  73 => 16,  70 => 15,  61 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
 <head>
        <meta charset=\"UTF-8\">
        <title>Đăng Ký</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
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
</html>
", "registration/register.html.twig", "E:\\clone-tweet\\templates\\registration\\register.html.twig");
    }
}
