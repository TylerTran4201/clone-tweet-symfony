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

/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_fab037565a8ed3742357a39bce48ac57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        // line 1
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 1, "1398240031")->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Tất Cả Bài Viết 
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
            {% block content %}
                Lượt Thích
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
            {% block content %}
                Theo Dõi
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_follows') }}              
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_fab037565a8ed3742357a39bce48ac57___1398240031 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tabs' => [$this, 'block_tabs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "shared/_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "micro_post/_post_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        // line 3
        echo "        ";
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 3, "488733263")->display(twig_array_merge($context, ["route" => "app_micro_post"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 12, "194733452")->display(twig_array_merge($context, ["route" => "app_micro_post_topliked", "classes" => "ml-2"]));
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 21, "1092692151")->display(twig_array_merge($context, ["route" => "app_micro_post_follows", "classes" => "ml-2"]));
        // line 29
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Tất Cả Bài Viết 
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
            {% block content %}
                Lượt Thích
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
            {% block content %}
                Theo Dõi
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_follows') }}              
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_fab037565a8ed3742357a39bce48ac57___488733263 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "micro_post/_post_tabs.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "                Tất Cả Bài Viết 
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 8
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 8,  288 => 7,  277 => 5,  267 => 4,  244 => 3,  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Tất Cả Bài Viết 
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
            {% block content %}
                Lượt Thích
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
            {% block content %}
                Theo Dõi
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_follows') }}              
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_fab037565a8ed3742357a39bce48ac57___194733452 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "micro_post/_post_tabs.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "                Lượt Thích
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 17
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_topliked");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 17,  426 => 16,  415 => 14,  405 => 13,  382 => 12,  298 => 8,  288 => 7,  277 => 5,  267 => 4,  244 => 3,  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Tất Cả Bài Viết 
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
            {% block content %}
                Lượt Thích
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
            {% block content %}
                Theo Dõi
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_follows') }}              
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_fab037565a8ed3742357a39bce48ac57___1092692151 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "micro_post/_post_tabs.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "                Theo Dõi
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 26
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_follows");
        echo "              
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "micro_post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 26,  564 => 25,  553 => 23,  543 => 22,  520 => 21,  436 => 17,  426 => 16,  415 => 14,  405 => 13,  382 => 12,  298 => 8,  288 => 7,  277 => 5,  267 => 4,  244 => 3,  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Tất Cả Bài Viết 
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
            {% block content %}
                Lượt Thích
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
            {% block content %}
                Theo Dõi
            {% endblock %}
            {% block path %}
                {{ path('app_micro_post_follows') }}              
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}
