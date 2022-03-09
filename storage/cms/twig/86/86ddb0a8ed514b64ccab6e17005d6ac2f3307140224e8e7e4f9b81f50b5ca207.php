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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\benefits-list.htm */
class __TwigTemplate_e93339c73b2b416bf84fb098bbbb0053b86a524c5b37755e9b50bc63fdc55c3d extends \Twig\Template
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
        echo "<ul class=\"benefits-list\">
  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#intro-icon-1");
        echo "\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">11 лет в отрасли</div>
    <div class=\"benefits-list__item-subtitle\">Строим дома в Москве</div>
  </li>

  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#intro-icon-2");
        echo "\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">Контроль качества</div>
    <div class=\"benefits-list__item-subtitle\">Независимый технадзор</div>
  </li>

  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#intro-icon-3");
        echo "\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">Гарантия 15 лет</div>
    <div class=\"benefits-list__item-subtitle\">Установленная в договоре</div>
  </li>

  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#intro-icon-4");
        echo "\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">Поэтапная оплата</div>
    <div class=\"benefits-list__item-subtitle\">Прозрачная смета</div>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\benefits-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  71 => 25,  58 => 15,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"benefits-list\">
  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#intro-icon-1'|theme }}\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">11 лет в отрасли</div>
    <div class=\"benefits-list__item-subtitle\">Строим дома в Москве</div>
  </li>

  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#intro-icon-2'|theme }}\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">Контроль качества</div>
    <div class=\"benefits-list__item-subtitle\">Независимый технадзор</div>
  </li>

  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#intro-icon-3'|theme }}\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">Гарантия 15 лет</div>
    <div class=\"benefits-list__item-subtitle\">Установленная в договоре</div>
  </li>

  <li class=\"benefits-list__item\">
    <div class=\"benefits-list__item-icon\">
      <svg width=\"51\">
        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#intro-icon-4'|theme }}\"></use>
      </svg>
    </div>
    <div class=\"benefits-list__item-title\">Поэтапная оплата</div>
    <div class=\"benefits-list__item-subtitle\">Прозрачная смета</div>
  </li>
</ul>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\benefits-list.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5);
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
