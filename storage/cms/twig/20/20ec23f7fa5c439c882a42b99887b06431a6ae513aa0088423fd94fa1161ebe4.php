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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\map.htm */
class __TwigTemplate_ec4bcc4c4c6b8c70a27aa7bbcd030e15d013931a1bd8b27278996b96a890e918 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"map\">
   <div class=\"container\">
      <address class=\"map__inner\">
         <p class=\"map__title\">Увидимся в офисе <span class=\"logo-brand\">MANSIO GROUP</span>!</p>
         <p class=\"map__subtitle\">Адрес:</p>
         <p>Рублево-Успенское шоссе 1 км, д 6, офис 512</p>
         <p class=\"map__subtitle\">Телефон:</p>
         <a class=\"map__phone\" href=\"tel:+74951820242\">+7 (495) 182-02-42</a>
         <a class=\"map__btn\" href=\"https://yandex.ru/maps/213/moscow/?ll=37.417883%2C55.792476&mode=routes&rtext=~55.765017%2C37.364122&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.364%252C55.765%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B0%25D1%258F%2520%25D0%25BE%25D0%25B1%25D0%25BB%25D0%25B0%25D1%2581%25D1%2582%25D1%258C%252C%2520%25D0%259E%25D0%25B4%25D0%25B8%25D0%25BD%25D1%2586%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25B3%25D0%25BE%25D1%2580%25D0%25BE%25D0%25B4%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B9%2520%25D0%25BE%25D0%25BA%25D1%2580%25D1%2583%25D0%25B3%252C%2520%25D0%25B4%25D0%25B5%25D1%2580%25D0%25B5%25D0%25B2%25D0%25BD%25D1%258F%2520%25D0%25A0%25D0%25B0%25D0%25B7%25D0%25B4%25D0%25BE%25D1%2580%25D1%258B%252C%2520%25D0%25A0%25D1%2583%25D0%25B1%25D0%25BB%25D1%2591%25D0%25B2%25D0%25BE-%25D0%25A3%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BD%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B5%2520%25D1%2588%25D0%25BE%25D1%2581%25D1%2581%25D0%25B5%252C%25201-%25D0%25B9%2520%25D0%25BA%25D0%25B8%25D0%25BB%25D0%25BE%25D0%25BC%25D0%25B5%25D1%2582%25D1%2580%252C%25201&z=11.4\" target=\"_blank\">
            Проложить маршрут
            <span>
               <svg>
                  <use xlink:href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
               </svg>
            </span>
         </a>
      </address>
   </div>
   <iframe src=\"https://yandex.ru/map-widget/v1/?um=constructor%3A5bde8917b755ffd5956425a070f41d2a429c277f7471eed5b2b80dd3fc7e6d0e\" frameborder=\"0\"></iframe>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\map.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"map\">
   <div class=\"container\">
      <address class=\"map__inner\">
         <p class=\"map__title\">Увидимся в офисе <span class=\"logo-brand\">MANSIO GROUP</span>!</p>
         <p class=\"map__subtitle\">Адрес:</p>
         <p>Рублево-Успенское шоссе 1 км, д 6, офис 512</p>
         <p class=\"map__subtitle\">Телефон:</p>
         <a class=\"map__phone\" href=\"tel:+74951820242\">+7 (495) 182-02-42</a>
         <a class=\"map__btn\" href=\"https://yandex.ru/maps/213/moscow/?ll=37.417883%2C55.792476&mode=routes&rtext=~55.765017%2C37.364122&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.364%252C55.765%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B0%25D1%258F%2520%25D0%25BE%25D0%25B1%25D0%25BB%25D0%25B0%25D1%2581%25D1%2582%25D1%258C%252C%2520%25D0%259E%25D0%25B4%25D0%25B8%25D0%25BD%25D1%2586%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25B3%25D0%25BE%25D1%2580%25D0%25BE%25D0%25B4%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B9%2520%25D0%25BE%25D0%25BA%25D1%2580%25D1%2583%25D0%25B3%252C%2520%25D0%25B4%25D0%25B5%25D1%2580%25D0%25B5%25D0%25B2%25D0%25BD%25D1%258F%2520%25D0%25A0%25D0%25B0%25D0%25B7%25D0%25B4%25D0%25BE%25D1%2580%25D1%258B%252C%2520%25D0%25A0%25D1%2583%25D0%25B1%25D0%25BB%25D1%2591%25D0%25B2%25D0%25BE-%25D0%25A3%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BD%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B5%2520%25D1%2588%25D0%25BE%25D1%2581%25D1%2581%25D0%25B5%252C%25201-%25D0%25B9%2520%25D0%25BA%25D0%25B8%25D0%25BB%25D0%25BE%25D0%25BC%25D0%25B5%25D1%2582%25D1%2580%252C%25201&z=11.4\" target=\"_blank\">
            Проложить маршрут
            <span>
               <svg>
                  <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
               </svg>
            </span>
         </a>
      </address>
   </div>
   <iframe src=\"https://yandex.ru/map-widget/v1/?um=constructor%3A5bde8917b755ffd5956425a070f41d2a429c277f7471eed5b2b80dd3fc7e6d0e\" frameborder=\"0\"></iframe>
</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\map.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
