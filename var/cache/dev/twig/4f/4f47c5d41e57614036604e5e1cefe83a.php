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
class __TwigTemplate_d595b3da2fd4e3badaf187bd495970f7 extends Template
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
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 1, "2063536541")->display($context);
        
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
\t{% block tabs %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
\t\t\t{% block content %}
\t\t\t\tTất Cả Bài Viết
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tLượt Thích
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_topliked') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTheo Dõi
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_follows') }}
\t\t\t{% endblock %}
\t\t{% endembed %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_search', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTìm kiếm
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_search') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t{% endblock %}
{% endembed %}
", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_d595b3da2fd4e3badaf187bd495970f7___2063536541 extends Template
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
        echo "\t\t";
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 3, "487367572")->display(twig_array_merge($context, ["route" => "app_micro_post"]));
        // line 11
        echo "
\t\t";
        // line 12
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 12, "162714851")->display(twig_array_merge($context, ["route" => "app_micro_post_topliked", "classes" => "ml-2"]));
        // line 20
        echo "
\t\t";
        // line 21
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 21, "1702754488")->display(twig_array_merge($context, ["route" => "app_micro_post_follows", "classes" => "ml-2"]));
        // line 29
        echo "\t\t";
        $this->loadTemplate("micro_post/_post_tabs.html.twig", "micro_post/_post_tabs.html.twig", 29, "678715047")->display(twig_array_merge($context, ["route" => "app_micro_post_search", "classes" => "ml-2"]));
        // line 37
        echo "
\t";
        
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
        return array (  176 => 37,  173 => 29,  171 => 21,  168 => 20,  166 => 12,  163 => 11,  160 => 3,  150 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
\t{% block tabs %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
\t\t\t{% block content %}
\t\t\t\tTất Cả Bài Viết
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tLượt Thích
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_topliked') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTheo Dõi
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_follows') }}
\t\t\t{% endblock %}
\t\t{% endembed %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_search', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTìm kiếm
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_search') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t{% endblock %}
{% endembed %}
", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_d595b3da2fd4e3badaf187bd495970f7___487367572 extends Template
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
        echo "\t\t\t\tTất Cả Bài Viết
\t\t\t";
        
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
        echo "\t\t\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "
\t\t\t";
        
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
        return array (  322 => 8,  312 => 7,  301 => 5,  291 => 4,  268 => 3,  176 => 37,  173 => 29,  171 => 21,  168 => 20,  166 => 12,  163 => 11,  160 => 3,  150 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
\t{% block tabs %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
\t\t\t{% block content %}
\t\t\t\tTất Cả Bài Viết
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tLượt Thích
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_topliked') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTheo Dõi
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_follows') }}
\t\t\t{% endblock %}
\t\t{% endembed %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_search', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTìm kiếm
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_search') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t{% endblock %}
{% endembed %}
", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_d595b3da2fd4e3badaf187bd495970f7___162714851 extends Template
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
        echo "\t\t\t\tLượt Thích
\t\t\t";
        
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
        echo "\t\t\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_topliked");
        echo "
\t\t\t";
        
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
        return array (  470 => 17,  460 => 16,  449 => 14,  439 => 13,  416 => 12,  322 => 8,  312 => 7,  301 => 5,  291 => 4,  268 => 3,  176 => 37,  173 => 29,  171 => 21,  168 => 20,  166 => 12,  163 => 11,  160 => 3,  150 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
\t{% block tabs %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
\t\t\t{% block content %}
\t\t\t\tTất Cả Bài Viết
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tLượt Thích
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_topliked') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTheo Dõi
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_follows') }}
\t\t\t{% endblock %}
\t\t{% endembed %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_search', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTìm kiếm
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_search') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t{% endblock %}
{% endembed %}
", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_d595b3da2fd4e3badaf187bd495970f7___1702754488 extends Template
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
        echo "\t\t\t\tTheo Dõi
\t\t\t";
        
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
        echo "\t\t\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_follows");
        echo "
\t\t\t";
        
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
        return array (  618 => 26,  608 => 25,  597 => 23,  587 => 22,  564 => 21,  470 => 17,  460 => 16,  449 => 14,  439 => 13,  416 => 12,  322 => 8,  312 => 7,  301 => 5,  291 => 4,  268 => 3,  176 => 37,  173 => 29,  171 => 21,  168 => 20,  166 => 12,  163 => 11,  160 => 3,  150 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
\t{% block tabs %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
\t\t\t{% block content %}
\t\t\t\tTất Cả Bài Viết
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tLượt Thích
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_topliked') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTheo Dõi
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_follows') }}
\t\t\t{% endblock %}
\t\t{% endembed %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_search', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTìm kiếm
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_search') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t{% endblock %}
{% endembed %}
", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}


/* micro_post/_post_tabs.html.twig */
class __TwigTemplate_d595b3da2fd4e3badaf187bd495970f7___678715047 extends Template
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
        // line 29
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "micro_post/_post_tabs.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "\t\t\t\tTìm kiếm
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 34
        echo "\t\t\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_search");
        echo "
\t\t\t";
        
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
        return array (  766 => 34,  756 => 33,  745 => 31,  735 => 30,  712 => 29,  618 => 26,  608 => 25,  597 => 23,  587 => 22,  564 => 21,  470 => 17,  460 => 16,  449 => 14,  439 => 13,  416 => 12,  322 => 8,  312 => 7,  301 => 5,  291 => 4,  268 => 3,  176 => 37,  173 => 29,  171 => 21,  168 => 20,  166 => 12,  163 => 11,  160 => 3,  150 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
\t{% block tabs %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
\t\t\t{% block content %}
\t\t\t\tTất Cả Bài Viết
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked' , classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tLượt Thích
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_topliked') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_follows', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTheo Dõi
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_follows') }}
\t\t\t{% endblock %}
\t\t{% endembed %}
\t\t{% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_search', classes:\"ml-2\"} %}
\t\t\t{% block content %}
\t\t\t\tTìm kiếm
\t\t\t{% endblock %}
\t\t\t{% block path %}
\t\t\t\t{{ path('app_micro_post_search') }}
\t\t\t{% endblock %}
\t\t{% endembed %}

\t{% endblock %}
{% endembed %}
", "micro_post/_post_tabs.html.twig", "E:\\clone-tweet\\templates\\micro_post\\_post_tabs.html.twig");
    }
}
