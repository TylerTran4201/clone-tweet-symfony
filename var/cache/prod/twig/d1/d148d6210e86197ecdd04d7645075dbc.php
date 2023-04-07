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
class __TwigTemplate_df59c5ffe5061cc2f35fec843795d239 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2) != null)) {
            // line 3
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3), "theme", [], "any", false, false, false, 3) == "dark")) {
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
                ";
        // line 40
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", [0 => "_route"], "method", false, false, false, 40) != "app_admin") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", [0 => "_route"], "method", false, false, false, 40) != "app_statistical_manage"))) {
            // line 41
            echo "                    <span class=\"material-symbols-outlined\"> arrow_forward </span>
                ";
        }
        // line 43
        echo "                ";
        $this->displayBlock('bread', $context, $blocks);
        // line 45
        echo "            </div>

            <div class=\"text-right\">
                <div class=\"text-sm text-gray-500 dark:text-gray-400 flex\">
                    <div>
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile");
        echo "\">Profile Setting</a>
                    </div>
                    <div class=\"ml-2\">
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "\">Diễn Đàn</a>
                    </div>
                    <div class=\"ml-2\">
                        <a class=\"hover:text-indigo-500 hover:underline hover:font-semibold\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"w-full md:w-2/3 mx-auto\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            echo "            <div class=\"rounded-md p-2 border-green-300 bg-green-50 border dark:border-green-600 dark:bg-green-700 dark:text-white mb-4\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        </div>   
    </body>
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin Page";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
    }

    // line 43
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                ";
    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            ";
        echo twig_include($this->env, $context, "admin/_manage_tabs.html.twig");
        echo "
        ";
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
        return array (  206 => 67,  202 => 66,  198 => 44,  194 => 43,  187 => 23,  183 => 22,  176 => 19,  172 => 18,  165 => 14,  159 => 69,  156 => 66,  147 => 64,  143 => 63,  133 => 56,  127 => 53,  121 => 50,  114 => 45,  111 => 43,  107 => 41,  105 => 40,  98 => 36,  85 => 25,  83 => 22,  80 => 21,  77 => 18,  71 => 14,  66 => 11,  62 => 10,  59 => 9,  55 => 7,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin_base.html.twig", "E:\\clone-tweet\\templates\\admin\\admin_base.html.twig");
    }
}
