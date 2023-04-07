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
class __TwigTemplate_2b3fd91c19bcaf3828acdddd57bed438 extends Template
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
        // line 1
        echo "<div class=\" \">
    <div class=\"bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 rounded py-3 px-4\">
        <div class=\"mt-2 flex items-center\">
            ";
        // line 4
        echo twig_include($this->env, $context, "shared/_avatar.html.twig", ["profile" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, false, false, 4), "size" => 32]);
        echo "
            ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) != twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 5))) {
            // line 6
            echo "                <div class=\"ml-16 text-2xl\">
                    ";
            // line 7
            echo twig_include($this->env, $context, "follower/_follow_button.html.twig", ["userToFollow" => ($context["user"] ?? null)]);
            echo "
                </div>
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"text-2xl\">";
        // line 11
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 11), "name", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 11), "name", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 11), "name", [], "any", false, false, false, 11)) : (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 11))), "html", null, true);
        echo "</div>
        <div class=\"text-lg text-gray-500 dark:text-gray-400 font-normal\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>

        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, false, false, 14) != null)) {
            // line 15
            echo "        <div class=\"text-base text-gray-800 dark:text-gray-400 font-normal\">
            ";
            // line 16
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 16), "bio", [], "any", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 16), "bio", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 16), "bio", [], "any", false, false, false, 16), "html", null, true))) : (print ("No bio")));
            echo "
        </div>

        <div class=\"flex\">
            <div class=\"text-base text-gray-500 dark:text-gray-400 font-normal\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z\" clip-rule=\"evenodd\" />
                </svg> ";
            // line 23
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 23), "location", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 23), "location", [], "any", false, false, false, 23)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, true, false, 23), "location", [], "any", false, false, false, 23), "html", null, true))) : (print ("Unknown")));
            echo "
            </div>
            <div class=\"text-base text-gray-500 dark:text-gray-400 font-normal ml-4\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z\" clip-rule=\"evenodd\" />
                </svg> ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, false, false, 28), "dateOfBirth", [], "any", false, false, false, 28)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userProfile", [], "any", false, false, false, 28), "dateOfBirth", [], "any", false, false, false, 28), "M j, Y"), "html", null, true);
            } else {
                echo "Unknown";
            }
            // line 29
            echo "            </div>
        </div>
        ";
        }
        // line 32
        echo "    </div>
</div>";
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
        return array (  103 => 32,  98 => 29,  92 => 28,  84 => 23,  74 => 16,  71 => 15,  69 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 7,  48 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/_profile_header.html.twig", "E:\\clone-tweet\\templates\\profile\\_profile_header.html.twig");
    }
}
