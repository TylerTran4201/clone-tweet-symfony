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

/* follower/_follower_list.html.twig */
class __TwigTemplate_2cd0ce8580b140c103da48d493bab598 extends Template
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
        if ((twig_length_filter($this->env, ($context["users"] ?? null)) > 0)) {
            // line 2
            echo "  <div class=\"grid grid-cols-1 xl:grid-cols-2 gap-4 \">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["otherUser"]) {
                // line 4
                echo "    <div class=\"flex justify-between items-center bg-gray-200 bg-opacity-75 dark:bg-gray-700 dark:bg-opacity-75 p-3 rounded\">
      <div>
        <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["otherUser"], "id", [], "any", false, false, false, 6)]), "html", null, true);
                echo "\">
          <div class=\"text-lg\">
            ";
                // line 8
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["other"] ?? null), "userProfile", [], "any", false, true, false, 8), "name", [], "any", true, true, false, 8) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["other"] ?? null), "userProfile", [], "any", false, true, false, 8), "name", [], "any", false, false, false, 8)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["other"] ?? null), "userProfile", [], "any", false, true, false, 8), "name", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, $context["otherUser"], "email", [], "any", false, false, false, 8))), "html", null, true);
                echo "
          </div>
          <div class=\"text-gray-500\">
            ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["otherUser"], "email", [], "any", false, false, false, 11), "html", null, true);
                echo "
          </div>
        </a>
      </div>
      <div>
        ";
                // line 16
                echo twig_include($this->env, $context, "follower/_follow_button.html.twig", ["userToFollow" => $context["otherUser"]]);
                echo "
      </div>
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otherUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "  </div>
";
        } else {
            // line 22
            echo "<div class=\"w-full text-center\">
  <div class=\"font-bold text-gray-600 dark:text-gray-400\">
    Nothing to show
  </div>
  <div class=\"text-gray-400 dark:text-gray-500\">
    The list is currently empty
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "follower/_follower_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  100 => 20,  82 => 16,  74 => 11,  68 => 8,  63 => 6,  59 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "follower/_follower_list.html.twig", "E:\\clone-tweet\\templates\\follower\\_follower_list.html.twig");
    }
}
