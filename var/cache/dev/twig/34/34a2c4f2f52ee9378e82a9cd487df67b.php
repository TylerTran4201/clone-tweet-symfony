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

/* base.html.twig */
class __TwigTemplate_1994b88eb54d9194f6b9a3ce24409026 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'bread' => [$this, 'block_bread'],
            'body' => [$this, 'block_body'],
            'show' => [$this, 'block_show'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2) != null)) {
            // line 3
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "theme", [], "any", false, false, false, 3) == "dark")) {
                // line 4
                echo "                class=\"dark\"
                style=\"background: linear-gradient(to right, #613110, #822224, #8f244c, #7a3164);\"
            ";
            } else {
                // line 7
                echo "                style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
            ";
            }
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
        ";
        }
        // line 11
        echo ">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0\" />        ";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script>
            tailwind.config = {
                darkMode: 'class'
            }
        </script>
    </head>
    <body class=\"text-gray-800 m-10 dark:text-white\">
        <div class=\"bg-white shadow-2xl bg-opacity-80 dark:bg-gray-700 dark:bg-opacity-80 rounded p-3 w-full mx-auto mb-4 flex sm:justify-between items-center\">
            <div class=\"text-xl font-medium flex items-center\">
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "\">
                    <span class=\"material-symbols-outlined text-5xl max-sm:text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-pink-600\"
                    >compost</span>
                </a>
                <div class=\"max-sm:hidden flex items-center\">
                    ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "attributes", [], "any", false, false, false, 39), "get", [0 => "_route"], "method", false, false, false, 39) != "app_micro_post")) {
            // line 40
            echo "                        <span class=\"material-symbols-outlined\"> arrow_forward </span>
                    ";
        }
        // line 42
        echo "                    ";
        $this->displayBlock('bread', $context, $blocks);
        // line 44
        echo "                </div>
            </div>

            <div class=\"text-right\">
                <div class=\"text-sm text-gray-500 dark:text-gray-400 flex items-center max-sm:text-xs max-sm:font-medium\">
                    ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 50
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_WATCH")) {
                // line 51
                echo "                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
                // line 52
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
                echo "\">Manage Dashboard</a>
                        </div>
                    ";
            }
            // line 55
            echo "                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_add");
            echo "\">Add New</a>
                        </div>
                        ";
            // line 59
            echo "                        <div class=\"ml-2 dropdown dropdown-end\">
                            <label tabindex=\"0\" class=\"cursor-pointer\">";
            // line 60
            echo twig_include($this->env, $context, "shared/_avatar.html.twig", ["profile" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "userProfile", [], "any", false, false, false, 60), "size" => 9]);
            echo "</label>
                            <ul tabindex=\"0\" class=\"w-60 dropdown-content menu p-1 shadow bg-gray-300 bg-opacity-95 dark:bg-gray-700 dark:bg-opacity-90 text-sm rounded-box\">
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"><span class=\"material-symbols-outlined\"> person </span>Trang Cá Nhân</a></li>
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile");
            echo "\"><span class=\"material-symbols-outlined\"> settings </span>Cài Đặt Hồ Sơ</a></li>
                                
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_theme");
            echo "\">
                                    ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "theme", [], "any", false, false, false, 66) == "dark")) {
                // line 67
                echo "                                        <span class=\"material-symbols-outlined\"> light_mode </span>Light Mode
                                    ";
            } else {
                // line 69
                echo "                                        <span class=\"material-symbols-outlined\"> dark_mode </span>Dark Mode
                                    ";
            }
            // line 71
            echo "                                </a></li>
                                
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><span class=\"material-symbols-outlined\"> logout </span>Đăng Xuất</a></li>
                            </ul>
                        </div>
                    ";
        } else {
            // line 77
            echo "                        <div>
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Đăng Nhập</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Đăng Ký</a>
                        </div>
                    ";
        }
        // line 84
        echo "                </div>
            </div>
        </div>
        <div class=\"w-full md:w-2/3 mx-auto\">
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            echo "            <div class=\"rounded-md p-2 border-green-300 bg-green-50 border dark:border-green-600 dark:bg-green-700 dark:text-white mb-4\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "        </div>
    </body>
    ";
        // line 96
        $this->displayBlock('show', $context, $blocks);
        // line 98
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 43
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_show($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        // line 97
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 97,  351 => 96,  341 => 93,  331 => 92,  321 => 43,  311 => 42,  298 => 21,  288 => 20,  275 => 18,  265 => 17,  246 => 14,  235 => 98,  233 => 96,  229 => 94,  227 => 92,  224 => 91,  215 => 89,  211 => 88,  205 => 84,  199 => 81,  193 => 78,  190 => 77,  183 => 73,  179 => 71,  175 => 69,  171 => 67,  169 => 66,  165 => 65,  160 => 63,  156 => 62,  151 => 60,  148 => 59,  143 => 56,  140 => 55,  134 => 52,  131 => 51,  128 => 50,  126 => 49,  119 => 44,  116 => 42,  112 => 40,  110 => 39,  102 => 34,  89 => 23,  86 => 20,  83 => 17,  78 => 14,  73 => 11,  69 => 10,  66 => 9,  62 => 7,  57 => 4,  54 => 3,  52 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html {% if app.user != null %}
            {% if app.user.theme == \"dark\" %}
                class=\"dark\"
                style=\"background: linear-gradient(to right, #613110, #822224, #8f244c, #7a3164);\"
            {% else %}
                style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
            {% endif %}
        {% else %}
            style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\"
        {% endif %}>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0\" />        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
        <link href=\"https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script>
            tailwind.config = {
                darkMode: 'class'
            }
        </script>
    </head>
    <body class=\"text-gray-800 m-10 dark:text-white\">
        <div class=\"bg-white shadow-2xl bg-opacity-80 dark:bg-gray-700 dark:bg-opacity-80 rounded p-3 w-full mx-auto mb-4 flex sm:justify-between items-center\">
            <div class=\"text-xl font-medium flex items-center\">
                <a href=\"{{ path('app_micro_post') }}\">
                    <span class=\"material-symbols-outlined text-5xl max-sm:text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-pink-600\"
                    >compost</span>
                </a>
                <div class=\"max-sm:hidden flex items-center\">
                    {% if app.request.attributes.get('_route') != 'app_micro_post' %}
                        <span class=\"material-symbols-outlined\"> arrow_forward </span>
                    {% endif %}
                    {% block bread %}
                    {% endblock %}
                </div>
            </div>

            <div class=\"text-right\">
                <div class=\"text-sm text-gray-500 dark:text-gray-400 flex items-center max-sm:text-xs max-sm:font-medium\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% if is_granted('ROLE_ADMIN_WATCH') %}
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_admin') }}\">Manage Dashboard</a>
                        </div>
                    {% endif %}
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_micro_post_add') }}\">Add New</a>
                        </div>
                        {# dropdown #}
                        <div class=\"ml-2 dropdown dropdown-end\">
                            <label tabindex=\"0\" class=\"cursor-pointer\">{{ include('shared/_avatar.html.twig',{profile: app.user.userProfile, size: 9})}}</label>
                            <ul tabindex=\"0\" class=\"w-60 dropdown-content menu p-1 shadow bg-gray-300 bg-opacity-95 dark:bg-gray-700 dark:bg-opacity-90 text-sm rounded-box\">
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"{{ path('app_profile', {id: app.user.id}) }}\"><span class=\"material-symbols-outlined\"> person </span>Trang Cá Nhân</a></li>
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"{{ path('app_settings_profile') }}\"><span class=\"material-symbols-outlined\"> settings </span>Cài Đặt Hồ Sơ</a></li>
                                
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"{{ path('app_settings_theme') }}\">
                                    {% if app.user.theme == \"dark\" %}
                                        <span class=\"material-symbols-outlined\"> light_mode </span>Light Mode
                                    {% else %}
                                        <span class=\"material-symbols-outlined\"> dark_mode </span>Dark Mode
                                    {% endif %}
                                </a></li>
                                
                                <li class=\"hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-200\"><a href=\"{{ path('app_logout') }}\"><span class=\"material-symbols-outlined\"> logout </span>Đăng Xuất</a></li>
                            </ul>
                        </div>
                    {% else %}
                        <div>
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_login') }}\">Đăng Nhập</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_register') }}\">Đăng Ký</a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"w-full md:w-2/3 mx-auto\">
        {% for message in app.flashes('success') %}
            <div class=\"rounded-md p-2 border-green-300 bg-green-50 border dark:border-green-600 dark:bg-green-700 dark:text-white mb-4\">{{ message }}</div>
        {% endfor %}

        {% block body %}
        {% endblock %}
        </div>
    </body>
    {% block show %}
    {% endblock %}
</html>
", "base.html.twig", "E:\\clone-tweet\\templates\\base.html.twig");
    }
}
