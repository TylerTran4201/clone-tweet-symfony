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

/* profile/_profile_header.html.twig */
class __TwigTemplate_bdf765a9da599d13825eb332ff97407a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_header.html.twig"));

        // line 1
        echo "<div class=\" \">
    <div class=\"bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 rounded py-3 px-4\">
        <div class=\"mt-2 flex items-center\">
            ";
        // line 4
        echo twig_include($this->env, $context, "shared/_avatar.html.twig", ["profile" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "userProfile", [], "any", false, false, false, 4), "size" => 32]);
        echo "
            <div class=\"ml-16 text-2xl\">
                ";
        // line 6
        echo twig_include($this->env, $context, "follower/_follow_button.html.twig", ["userToFollow" => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })())]);
        echo "
            </div>
        </div>
        <div class=\"text-2xl\">";
        // line 9
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 9), "name", [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 9), "name", [], "any", false, false, false, 9)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 9), "name", [], "any", false, false, false, 9)) : (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9))), "html", null, true);
        echo "</div>
        <div class=\"text-lg text-gray-500 dark:text-gray-400 font-normal\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>

        ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "userProfile", [], "any", false, false, false, 12) != null)) {
            // line 13
            echo "        <div class=\"text-base text-gray-800 dark:text-gray-400 font-normal\">
            ";
            // line 14
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 14), "bio", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 14), "bio", [], "any", false, false, false, 14)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 14), "bio", [], "any", false, false, false, 14), "html", null, true))) : (print ("No bio")));
            echo "
        </div>

        <div class=\"flex\">
            <div class=\"text-base text-gray-500 dark:text-gray-400 font-normal\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z\" clip-rule=\"evenodd\" />
                </svg> ";
            // line 21
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 21), "location", [], "any", true, true, false, 21) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 21), "location", [], "any", false, false, false, 21)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 21), "location", [], "any", false, false, false, 21), "html", null, true))) : (print ("Unknown")));
            echo "
            </div>
            <div class=\"text-base text-gray-500 dark:text-gray-400 font-normal ml-4\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z\" clip-rule=\"evenodd\" />
                </svg> ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "userProfile", [], "any", false, false, false, 26), "dateOfBirth", [], "any", false, false, false, 26)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "userProfile", [], "any", false, false, false, 26), "dateOfBirth", [], "any", false, false, false, 26), "M j, Y"), "html", null, true);
            } else {
                echo "Unknown";
            }
            // line 27
            echo "            </div>
        </div>
        ";
        }
        // line 30
        echo "    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  97 => 27,  91 => 26,  83 => 21,  73 => 14,  70 => 13,  68 => 12,  63 => 10,  59 => 9,  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\" \">
    <div class=\"bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 rounded py-3 px-4\">
        <div class=\"mt-2 flex items-center\">
            {{ include('shared/_avatar.html.twig',{profile: user.userProfile, size: 32})}}
            <div class=\"ml-16 text-2xl\">
                {{ include('follower/_follow_button.html.twig', {userToFollow: user}) }}
            </div>
        </div>
        <div class=\"text-2xl\">{{ user.userProfile.name ?? user.email }}</div>
        <div class=\"text-lg text-gray-500 dark:text-gray-400 font-normal\">{{ user.email }}</div>

        {% if user.userProfile != null %}
        <div class=\"text-base text-gray-800 dark:text-gray-400 font-normal\">
            {{ user.userProfile.bio ?? 'No bio' }}
        </div>

        <div class=\"flex\">
            <div class=\"text-base text-gray-500 dark:text-gray-400 font-normal\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z\" clip-rule=\"evenodd\" />
                </svg> {{ user.userProfile.location ?? 'Unknown' }}
            </div>
            <div class=\"text-base text-gray-500 dark:text-gray-400 font-normal ml-4\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z\" clip-rule=\"evenodd\" />
                </svg> {% if user.userProfile.dateOfBirth %}{{ user.userProfile.dateOfBirth | date(\"M j, Y\") }}{% else %}Unknown{% endif %}
            </div>
        </div>
        {% endif %}
    </div>
</div>", "profile/_profile_header.html.twig", "E:\\clone-tweet\\templates\\profile\\_profile_header.html.twig");
    }
}
