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

/* follower/_follow_button.html.twig */
class __TwigTemplate_90b853de735f8453fa2184082a55feba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "follower/_follow_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "follower/_follow_button.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 2), "follows", [], "any", true, true, false, 2) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "follows", [], "any", false, false, false, 2), "contains", [0 => (isset($context["userToFollow"]) || array_key_exists("userToFollow", $context) ? $context["userToFollow"] : (function () { throw new RuntimeError('Variable "userToFollow" does not exist.', 2, $this->source); })())], "method", false, false, false, 2))) {
                // line 3
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_follow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userToFollow"]) || array_key_exists("userToFollow", $context) ? $context["userToFollow"] : (function () { throw new RuntimeError('Variable "userToFollow" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
                echo "\"
    class=\"text-base font-medium rounded-md py-1 px-4 text-gray-100 bg-indigo-500 hover:bg-indigo-600\">
        Follow
    </a>    
    ";
            } else {
                // line 8
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unfollow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userToFollow"]) || array_key_exists("userToFollow", $context) ? $context["userToFollow"] : (function () { throw new RuntimeError('Variable "userToFollow" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
                echo "\"
    class=\"text-base font-medium border-2 border-indigo-500 rounded-md py-2 px-8 text-indigo-500 hover:bg-indigo-500 hover:text-gray-100\">
        Unfollow
    </a>
    ";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "follower/_follow_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    {% if app.user.follows is defined and not app.user.follows.contains(userToFollow) %}
    <a href=\"{{ path('app_follow',{ id: userToFollow.id }) }}\"
    class=\"text-base font-medium rounded-md py-1 px-4 text-gray-100 bg-indigo-500 hover:bg-indigo-600\">
        Follow
    </a>    
    {% else %}
    <a href=\"{{ path('app_unfollow',{ id: userToFollow.id }) }}\"
    class=\"text-base font-medium border-2 border-indigo-500 rounded-md py-2 px-8 text-indigo-500 hover:bg-indigo-500 hover:text-gray-100\">
        Unfollow
    </a>
    {% endif %}
{% endif %}", "follower/_follow_button.html.twig", "E:\\clone-tweet\\templates\\follower\\_follow_button.html.twig");
    }
}
