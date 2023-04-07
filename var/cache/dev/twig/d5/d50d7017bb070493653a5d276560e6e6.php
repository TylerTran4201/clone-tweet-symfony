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

/* hello/index.html.twig */
class __TwigTemplate_b33a23ec078a5faed985411cde8a87a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <title>
      Home Page - Clone Tweet
    </title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0\" />        ";
        // line 14
        echo "    <script src=\"https://cdn.tailwindcss.com\"></script>
    <!--Replace with your tailwind.css once created-->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700\" rel=\"stylesheet\" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
  </head>
  <body class=\"leading-normal tracking-normal text-white gradient\" style=\"font-family: 'Source Sans Pro', sans-serif;\">
    <!--Nav-->
    <nav id=\"header\" class=\"fixed w-full z-30 top-0 text-white\">
      <div class=\"w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2\">
        <div class=\"pl-4 \">
          <a class=\"flex items-center toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl\" href=\"#\">
            <!--Icon from: http://www.potlabicons.com/ -->
             <span class=\"material-symbols-outlined fill-current inline text-5xl\"
            >compost</span>
            <span>CLONE TWEET</span>
          </a>
        </div>
        <div class=\"block lg:hidden pr-4\">
          <button id=\"nav-toggle\" class=\"flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out\">
            <svg class=\"fill-current h-6 w-6\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
              <title>Menu</title>
              <path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\" />
            </svg>
          </button>
        </div>
        <div class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20\" id=\"nav-content\">
          <ul class=\"list-reset lg:flex justify-end flex-1 items-center\">
            <li class=\"mr-3\">
              <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"  
                class=\"mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4\">Đăng nhập</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class=\"border-b border-gray-100 opacity-25 my-0 py-0\" />
    </nav>
    <!--Hero-->
    <div class=\"pt-24\">
      <div class=\"container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center\">
        <!--Left Col-->
        <div class=\"flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left\">
          <p class=\"uppercase tracking-loose w-full\">Bạn cần có một nơi đăng bài viết ?</p>
          <h1 class=\"my-4 text-5xl font-bold leading-tight\">
            Một nơi an toàn để sử dụng như một nhật ký công khai.
          </h1>
          <p class=\"leading-normal text-2xl mb-8\">
            Tham gia, vào một trường lành mạnh cho những bài post!
          </p>
          <a class=\"z-10 mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4\"
              href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        echo "\">
            Tham Gia
          </a>
        </div>
        <!--Right Col-->
        <div class=\"w-full md:w-3/5 py-6 text-center\">
          <img class=\"w-full md:w-4/5 z-50\"  />
        </div>
      </div>
    </div>
    <div class=\"relative -mt-12 lg:-mt-24\">
      <svg viewBox=\"0 0 1428 174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
          <g transform=\"translate(-2.000000, 44.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
            <path d=\"M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496\" opacity=\"0.100000001\"></path>
            <path
              d=\"M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z\"
              opacity=\"0.100000001\"
            ></path>
            <path d=\"M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z\" id=\"Path-4\" opacity=\"0.200000003\"></path>
          </g>
          <g transform=\"translate(-4.000000, 76.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">

          </g>
        </g>
      </svg>
    </div>
    <!-- jQuery if you need it
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById(\"header\");
      var navcontent = document.getElementById(\"nav-content\");
      var navaction = document.getElementById(\"navAction\");
      var brandname = document.getElementById(\"brandname\");
      var toToggle = document.querySelectorAll(\".toggleColour\");

      document.addEventListener(\"scroll\", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add(\"bg-white\");
          navaction.classList.remove(\"bg-white\");
          navaction.classList.add(\"gradient\");
          navaction.classList.remove(\"text-gray-800\");
          navaction.classList.add(\"text-white\");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add(\"text-gray-800\");
            toToggle[i].classList.remove(\"text-white\");
          }
          header.classList.add(\"shadow\");
          navcontent.classList.remove(\"bg-gray-100\");
          navcontent.classList.add(\"bg-white\");
        } else {
          header.classList.remove(\"bg-white\");
          navaction.classList.remove(\"gradient\");
          navaction.classList.add(\"bg-white\");
          navaction.classList.remove(\"text-white\");
          navaction.classList.add(\"text-gray-800\");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add(\"text-white\");
            toToggle[i].classList.remove(\"text-gray-800\");
          }

          header.classList.remove(\"shadow\");
          navcontent.classList.remove(\"bg-white\");
          navcontent.classList.add(\"bg-gray-100\");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById(\"nav-content\");
      var navMenu = document.getElementById(\"nav-toggle\");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains(\"hidden\")) {
              navMenuDiv.classList.remove(\"hidden\");
            } else {
              navMenuDiv.classList.add(\"hidden\");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add(\"hidden\");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "hello/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 68,  92 => 47,  57 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <title>
      Home Page - Clone Tweet
    </title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0\" />        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <!--Replace with your tailwind.css once created-->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700\" rel=\"stylesheet\" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
  </head>
  <body class=\"leading-normal tracking-normal text-white gradient\" style=\"font-family: 'Source Sans Pro', sans-serif;\">
    <!--Nav-->
    <nav id=\"header\" class=\"fixed w-full z-30 top-0 text-white\">
      <div class=\"w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2\">
        <div class=\"pl-4 \">
          <a class=\"flex items-center toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl\" href=\"#\">
            <!--Icon from: http://www.potlabicons.com/ -->
             <span class=\"material-symbols-outlined fill-current inline text-5xl\"
            >compost</span>
            <span>CLONE TWEET</span>
          </a>
        </div>
        <div class=\"block lg:hidden pr-4\">
          <button id=\"nav-toggle\" class=\"flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out\">
            <svg class=\"fill-current h-6 w-6\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
              <title>Menu</title>
              <path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\" />
            </svg>
          </button>
        </div>
        <div class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20\" id=\"nav-content\">
          <ul class=\"list-reset lg:flex justify-end flex-1 items-center\">
            <li class=\"mr-3\">
              <a href=\"{{ path('app_login') }}\"  
                class=\"mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4\">Đăng nhập</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class=\"border-b border-gray-100 opacity-25 my-0 py-0\" />
    </nav>
    <!--Hero-->
    <div class=\"pt-24\">
      <div class=\"container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center\">
        <!--Left Col-->
        <div class=\"flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left\">
          <p class=\"uppercase tracking-loose w-full\">Bạn cần có một nơi đăng bài viết ?</p>
          <h1 class=\"my-4 text-5xl font-bold leading-tight\">
            Một nơi an toàn để sử dụng như một nhật ký công khai.
          </h1>
          <p class=\"leading-normal text-2xl mb-8\">
            Tham gia, vào một trường lành mạnh cho những bài post!
          </p>
          <a class=\"z-10 mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4\"
              href=\"{{ path('app_micro_post') }}\">
            Tham Gia
          </a>
        </div>
        <!--Right Col-->
        <div class=\"w-full md:w-3/5 py-6 text-center\">
          <img class=\"w-full md:w-4/5 z-50\"  />
        </div>
      </div>
    </div>
    <div class=\"relative -mt-12 lg:-mt-24\">
      <svg viewBox=\"0 0 1428 174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
          <g transform=\"translate(-2.000000, 44.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
            <path d=\"M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496\" opacity=\"0.100000001\"></path>
            <path
              d=\"M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z\"
              opacity=\"0.100000001\"
            ></path>
            <path d=\"M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z\" id=\"Path-4\" opacity=\"0.200000003\"></path>
          </g>
          <g transform=\"translate(-4.000000, 76.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">

          </g>
        </g>
      </svg>
    </div>
    <!-- jQuery if you need it
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById(\"header\");
      var navcontent = document.getElementById(\"nav-content\");
      var navaction = document.getElementById(\"navAction\");
      var brandname = document.getElementById(\"brandname\");
      var toToggle = document.querySelectorAll(\".toggleColour\");

      document.addEventListener(\"scroll\", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add(\"bg-white\");
          navaction.classList.remove(\"bg-white\");
          navaction.classList.add(\"gradient\");
          navaction.classList.remove(\"text-gray-800\");
          navaction.classList.add(\"text-white\");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add(\"text-gray-800\");
            toToggle[i].classList.remove(\"text-white\");
          }
          header.classList.add(\"shadow\");
          navcontent.classList.remove(\"bg-gray-100\");
          navcontent.classList.add(\"bg-white\");
        } else {
          header.classList.remove(\"bg-white\");
          navaction.classList.remove(\"gradient\");
          navaction.classList.add(\"bg-white\");
          navaction.classList.remove(\"text-white\");
          navaction.classList.add(\"text-gray-800\");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add(\"text-white\");
            toToggle[i].classList.remove(\"text-gray-800\");
          }

          header.classList.remove(\"shadow\");
          navcontent.classList.remove(\"bg-white\");
          navcontent.classList.add(\"bg-gray-100\");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById(\"nav-content\");
      var navMenu = document.getElementById(\"nav-toggle\");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains(\"hidden\")) {
              navMenuDiv.classList.remove(\"hidden\");
            } else {
              navMenuDiv.classList.add(\"hidden\");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add(\"hidden\");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
", "hello/index.html.twig", "E:\\clone-tweet\\templates\\hello\\index.html.twig");
    }
}
