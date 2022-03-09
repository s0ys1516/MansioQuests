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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\call2action_about.htm */
class __TwigTemplate_86dfdd1ff4690c63f8f81b5019105c75fb4ef5e22534b4d5a190f311ddab1d70 extends \Twig\Template
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
        echo "<div class=\"contacts-about\">
        <div class=\"contacts-about__content\">
          <h2 class=\"contacts-about__title\">Узнайте больше о нашем подходе!</h2>
          <a class=\"contacts-about__link\" href=\"/about\">
            Перейти в раздел о нас
            <svg>
              <use xlink:href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
            </svg>
          </a>
          <a class=\"btn  btn--white contacts-about__btn\" data-modal=\"registration-for-viewing\">Посетить готовые объекты и&nbsp;пообщаться с&nbsp;их&nbsp;владельцами</a>
        </div>
        <picture class=\"contacts-about__foto\">
          <source srcset=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/text-about.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/text-about.jpg");
        echo "\" width=\"470\" alt=\"Фотография счастливых клиентов\" loading=\"lazy\">
        </picture>
      </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\call2action_about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  56 => 13,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contacts-about\">
        <div class=\"contacts-about__content\">
          <h2 class=\"contacts-about__title\">Узнайте больше о нашем подходе!</h2>
          <a class=\"contacts-about__link\" href=\"/about\">
            Перейти в раздел о нас
            <svg>
              <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
            </svg>
          </a>
          <a class=\"btn  btn--white contacts-about__btn\" data-modal=\"registration-for-viewing\">Посетить готовые объекты и&nbsp;пообщаться с&nbsp;их&nbsp;владельцами</a>
        </div>
        <picture class=\"contacts-about__foto\">
          <source srcset=\"{{ 'assets/images/content/text-about.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/content/text-about.jpg'|theme }}\" width=\"470\" alt=\"Фотография счастливых клиентов\" loading=\"lazy\">
        </picture>
      </div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\call2action_about.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 7);
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
