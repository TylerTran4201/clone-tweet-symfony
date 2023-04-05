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
class __TwigTemplate_09040df093e21a241b39bd4b0c7da893 extends Template
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
        <div class=\"bg-white shadow-2xl bg-opacity-80 dark:bg-gray-700 dark:bg-opacity-80 rounded p-3 w-full mx-auto mb-4 flex justify-between items-center\">
            <div class=\"text-xl font-medium flex items-center\">
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "\">
                    <span class=\"material-symbols-outlined text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-pink-600\"
                    >compost</span>
                </a>
                ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", [0 => "_route"], "method", false, false, false, 38) != "app_micro_post")) {
            // line 39
            echo "                    <span class=\"material-symbols-outlined\"> arrow_forward </span>
                ";
        }
        // line 41
        echo "                ";
        $this->displayBlock('bread', $context, $blocks);
        // line 43
        echo "            </div>

            <div class=\"text-right\">
                <div class=\"text-sm text-gray-500 dark:text-gray-400 flex items-center\">
                    ";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 48
            echo "                        <div>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">";
            echo twig_include($this->env, $context, "shared/_avatar.html.twig", ["profile" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "userProfile", [], "any", false, false, false, 49), "size" => 9]);
            echo "</a>
                        </div>
                    ";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_WATCH")) {
                // line 52
                echo "                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
                echo "\">Manage Dashboard</a>
                        </div>
                    ";
            }
            // line 56
            echo "                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_add");
            echo "\">Add New</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile");
            echo "\">Profile Settings</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                        </div>
                    ";
        } else {
            // line 66
            echo "                        <div>
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
                        </div>
                    ";
        }
        // line 73
        echo "                </div>
            </div>
        </div>
        <div class=\"w-full md:w-2/3 mx-auto\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 78
            echo "            <div class=\"rounded-md p-2 border-green-300 bg-green-50 border dark:border-green-600 dark:bg-green-700 dark:text-white mb-4\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        </div>
    </body>
    ";
        // line 85
        $this->displayBlock('show', $context, $blocks);
        // line 87
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

    // line 41
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 42
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_show($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        // line 86
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
        return array (  339 => 86,  329 => 85,  319 => 82,  309 => 81,  299 => 42,  289 => 41,  276 => 21,  266 => 20,  253 => 18,  243 => 17,  224 => 14,  213 => 87,  211 => 85,  207 => 83,  205 => 81,  202 => 80,  193 => 78,  189 => 77,  183 => 73,  177 => 70,  171 => 67,  168 => 66,  162 => 63,  156 => 60,  150 => 57,  147 => 56,  141 => 53,  138 => 52,  136 => 51,  129 => 49,  126 => 48,  124 => 47,  118 => 43,  115 => 41,  111 => 39,  109 => 38,  102 => 34,  89 => 23,  86 => 20,  83 => 17,  78 => 14,  73 => 11,  69 => 10,  66 => 9,  62 => 7,  57 => 4,  54 => 3,  52 => 2,  49 => 1,);
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
        <div class=\"bg-white shadow-2xl bg-opacity-80 dark:bg-gray-700 dark:bg-opacity-80 rounded p-3 w-full mx-auto mb-4 flex justify-between items-center\">
            <div class=\"text-xl font-medium flex items-center\">
                <a href=\"{{ path('app_micro_post') }}\">
                    <span class=\"material-symbols-outlined text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-pink-600\"
                    >compost</span>
                </a>
                {% if app.request.attributes.get('_route') != 'app_micro_post' %}
                    <span class=\"material-symbols-outlined\"> arrow_forward </span>
                {% endif %}
                {% block bread %}
                {% endblock %}
            </div>

            <div class=\"text-right\">
                <div class=\"text-sm text-gray-500 dark:text-gray-400 flex items-center\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <div>
                            <a href=\"{{ path('app_profile',{ id:app.user.id }) }}\">{{ include('shared/_avatar.html.twig',{profile: app.user.userProfile, size: 9})}}</a>
                        </div>
                    {% if is_granted('ROLE_ADMIN_WATCH') %}
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_admin') }}\">Manage Dashboard</a>
                        </div>
                    {% endif %}
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_micro_post_add') }}\">Add New</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_settings_profile') }}\">Profile Settings</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_logout') }}\">Logout</a>
                        </div>
                    {% else %}
                        <div>
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_login') }}\">Login</a>
                        </div>
                        <div class=\"ml-2\">
                            <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"{{ path('app_register') }}\">Register</a>
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
