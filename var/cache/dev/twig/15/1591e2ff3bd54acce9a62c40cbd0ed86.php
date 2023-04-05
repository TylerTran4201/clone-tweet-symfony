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
class __TwigTemplate_3d6b9240dbe3e258f74177564d3cd0e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        echo "<html style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\">
<head>
        <meta charset=\"UTF-8\">
        <title>Login Page</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body>
<div class=\"h-auto w-full py-16 px-4\">
<form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"POST\">
    <div class=\"flex flex-col items-center justify-center\">
        
        ";
        // line 15
        echo "        <div class=\"bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16\">
            <p tabindex=\"0\" class=\"focus:outline-none text-2xl font-extrabold leading-6 text-gray-800\">Đăng nhập tài khoản của bạn</p>
            <p tabindex=\"0\" class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">Chưa có tài khoản? <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"   class=\"hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer\">Đăng ký ở đây</a></p>
            <div class=\"w-full flex items-center justify-between py-5\">
                  <hr class=\"w-full bg-gray-400\">
                  <p class=\"text-base font-medium leading-4 px-2.5 text-gray-400\">OR</p>
                  <hr class=\"w-full bg-gray-400  \">
                </div>
                <div>
                    <label id=\"email\" class=\"text-sm font-medium leading-none text-gray-800\">
                        Email
                    </label>
                    <input aria-labelledby=\"email\"
                          type=\"text\"
                          name=\"_username\" 
                          value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"
                          placeholder=\"Email\"
                          class=\"bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2\"/>
                </div>
                <div class=\"mt-6  w-full\">
                    <label for=\"pass\" class=\"text-sm font-medium leading-none text-gray-800\">
                        Password
                    </label>
                    <div class=\"relative flex items-center justify-center\">
                      <input id=\"pass\"
                            type=\"password\"
                            name=\"_password\"
                            placeholder=\"Password\"
                            class=\"bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2\"/>
                    </div>
                    <input type=\"hidden\" name=\"_target_path\" value=\"/micro-post\"/>
                </div>
                <div class=\"mt-8\">
                    <button role=\"button\"
                            type=\"submit\"
                            style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
                            class=\"focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full\">Đăng Nhập</button>
                </div>
        </div>
    </div>
</form>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  81 => 30,  65 => 17,  61 => 15,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\">
<head>
        <meta charset=\"UTF-8\">
        <title>Login Page</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body>
<div class=\"h-auto w-full py-16 px-4\">
<form action=\"{{path('app_login')}}\" method=\"POST\">
    <div class=\"flex flex-col items-center justify-center\">
        
        {# <img src=\"https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg1.svg\" alt=\"logo\"> #}
        <div class=\"bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16\">
            <p tabindex=\"0\" class=\"focus:outline-none text-2xl font-extrabold leading-6 text-gray-800\">Đăng nhập tài khoản của bạn</p>
            <p tabindex=\"0\" class=\"focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500\">Chưa có tài khoản? <a href=\"{{path('app_register')}}\"   class=\"hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer\">Đăng ký ở đây</a></p>
            <div class=\"w-full flex items-center justify-between py-5\">
                  <hr class=\"w-full bg-gray-400\">
                  <p class=\"text-base font-medium leading-4 px-2.5 text-gray-400\">OR</p>
                  <hr class=\"w-full bg-gray-400  \">
                </div>
                <div>
                    <label id=\"email\" class=\"text-sm font-medium leading-none text-gray-800\">
                        Email
                    </label>
                    <input aria-labelledby=\"email\"
                          type=\"text\"
                          name=\"_username\" 
                          value=\"{{lastUsername}}\"
                          placeholder=\"Email\"
                          class=\"bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2\"/>
                </div>
                <div class=\"mt-6  w-full\">
                    <label for=\"pass\" class=\"text-sm font-medium leading-none text-gray-800\">
                        Password
                    </label>
                    <div class=\"relative flex items-center justify-center\">
                      <input id=\"pass\"
                            type=\"password\"
                            name=\"_password\"
                            placeholder=\"Password\"
                            class=\"bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2\"/>
                    </div>
                    <input type=\"hidden\" name=\"_target_path\" value=\"/micro-post\"/>
                </div>
                <div class=\"mt-8\">
                    <button role=\"button\"
                            type=\"submit\"
                            style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
                            class=\"focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full\">Đăng Nhập</button>
                </div>
        </div>
    </div>
</form>
</div>
</body>
</html>", "login/index.html.twig", "E:\\clone-tweet\\templates\\login\\index.html.twig");
    }
}
