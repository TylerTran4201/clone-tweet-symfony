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

/* admin/admin_base.html.twig */
class __TwigTemplate_2fa91ba62af4511b6babd2ec17f91534 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
        ";
        // line 18
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script>
            tailwind.config = {
                darkMode: 'class'
            }
        </script>
    </head>
    <body class=\"text-gray-800 m-10 dark:text-white\">
        <div class=\"bg-white shadow-2xl bg-opacity-80 dark:bg-gray-700 dark:bg-opacity-80 rounded p-3 w-full mx-auto mb-4 flex justify-between items-center\">
            <div class=\"text-xl font-medium flex items-center\">
                <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                    <span class=\"material-symbols-outlined text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-pink-600\"
                    >compost</span>
                </a>
                <div class=\"max-sm:hidden flex items-center\">
                    ";
        // line 41
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41) != "app_admin") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41) != "app_statistical_manage"))) {
            // line 42
            echo "                        <span class=\"material-symbols-outlined\"> arrow_forward </span>
                    ";
        }
        // line 44
        echo "                    ";
        $this->displayBlock('bread', $context, $blocks);
        // line 46
        echo "                </div>
            </div>

            <div class=\"text-right\">
                <div class=\"text-sm text-gray-500 dark:text-gray-400 flex max-sm:text-xs max-sm:font-medium\">
                    <div>
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile");
        echo "\">Profile Setting</a>
                    </div>
                    <div class=\"ml-2\">
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "\">Diễn Đàn</a>
                    </div>
                    <div class=\"ml-2\">
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"w-full md:w-2/3 mx-auto\">
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            echo "            <div class=\"rounded-md p-2 border-green-300 bg-green-50 border dark:border-green-600 dark:bg-green-700 dark:text-white mb-4\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        </div>   
    </body>
</html>";
        
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

        echo "Admin Page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 45
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "            ";
        echo twig_include($this->env, $context, "admin/_manage_tabs.html.twig");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 69,  264 => 68,  254 => 45,  244 => 44,  231 => 23,  221 => 22,  208 => 19,  198 => 18,  179 => 14,  167 => 71,  164 => 68,  155 => 66,  151 => 65,  141 => 58,  135 => 55,  129 => 52,  121 => 46,  118 => 44,  114 => 42,  112 => 41,  104 => 36,  91 => 25,  89 => 22,  86 => 21,  83 => 18,  77 => 14,  72 => 11,  68 => 10,  65 => 9,  61 => 7,  56 => 4,  53 => 3,  51 => 2,  48 => 1,);
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
        <title>{% block title %}Admin Page{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
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
        <div class=\"bg-white shadow-2xl bg-opacity-80 dark:bg-gray-700 dark:bg-opacity-80 rounded p-3 w-full mx-auto mb-4 flex justify-between items-center\">
            <div class=\"text-xl font-medium flex items-center\">
                <a href=\"{{ path('app_admin') }}\">
                    <span class=\"material-symbols-outlined text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-pink-600\"
                    >compost</span>
                </a>
                <div class=\"max-sm:hidden flex items-center\">
                    {% if app.request.attributes.get('_route') != 'app_admin' and app.request.attributes.get('_route') != 'app_statistical_manage' %}
                        <span class=\"material-symbols-outlined\"> arrow_forward </span>
                    {% endif %}
                    {% block bread %}
                    {% endblock %}
                </div>
            </div>

            <div class=\"text-right\">
                <div class=\"text-sm text-gray-500 dark:text-gray-400 flex max-sm:text-xs max-sm:font-medium\">
                    <div>
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_settings_profile') }}\">Profile Setting</a>
                    </div>
                    <div class=\"ml-2\">
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_micro_post') }}\">Diễn Đàn</a>
                    </div>
                    <div class=\"ml-2\">
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"w-full md:w-2/3 mx-auto\">
        {% for message in app.flashes('success') %}
            <div class=\"rounded-md p-2 border-green-300 bg-green-50 border dark:border-green-600 dark:bg-green-700 dark:text-white mb-4\">{{ message }}</div>
        {% endfor %}
        {% block body %}
            {{ include('admin/_manage_tabs.html.twig') }}
        {% endblock %}
        </div>   
    </body>
</html>", "admin/admin_base.html.twig", "E:\\clone-tweet\\templates\\admin\\admin_base.html.twig");
    }
}
