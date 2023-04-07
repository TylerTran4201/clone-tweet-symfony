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

/* error/403_page.html.twig */
class __TwigTemplate_629fd74e633c9d8eaca085e90693a3e4 extends Template
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
        echo "<html style=\"background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);\">
<head>
        <meta charset=\"UTF-8\">
        <title>Đăng Ký</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<section class=\"\">
    <div class=\"py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6\">
        <div class=\"mx-auto max-w-screen-sm text-center\">
            <h1 class=\"mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-gray-900 dark:text-primary-500\">403</h1>
            <p class=\"mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white\">Truy cập bị cấm</p>
            <p class=\"mb-4 text-lg font-light text-gray-500 dark:text-gray-400\">
            ";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
            </p>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "\" class=\"inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4\">Back to Homepage</a>
        </div>   
    </div>
</section>
</html>";
    }

    public function getTemplateName()
    {
        return "error/403_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "error/403_page.html.twig", "E:\\clone-tweet\\templates\\error\\403_page.html.twig");
    }
}
