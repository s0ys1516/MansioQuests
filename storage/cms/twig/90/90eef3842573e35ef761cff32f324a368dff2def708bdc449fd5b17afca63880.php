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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\sections\we-do.htm */
class __TwigTemplate_4e4eafe66e5da9ecd946d7f4c5fbca30d41a8704ebfbe2a99a727f55854803f9 extends \Twig\Template
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
        echo "<section class=\"we-do\" id=\"we-do\">
  ";
        // line 2
        if (($context["headline"] ?? null)) {
            // line 3
            echo "  <div class=\"container\">
    ";
            // line 4
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['text'] = ($context["headline"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/headline"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "  </div>
  ";
        }
        // line 7
        echo "  <div class=\"we-do__content\">

    <article class=\"we-do__item  we-do__item--bg-first\">
      <svg class=\"we-do__item-icon\" width=\"55\">
        <use xlink:href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#typical-3");
        echo "\"></use>
      </svg>
      <h3 class=\"we-do__item-title\">Типовые проекты</h3>
      <ul class=\"we-do__item-list\">
        <li>Приступаем к строительству сразу</li>
        <li>Оптимизированный расход материалов</li>
        <li>Стоимость м2 в типовых проектах ниже</li>
      </ul>
      <a class=\"we-do__item-link\" href=\"/projects?category=%D0%A2%D0%B8%D0%BF%D0%BE%D0%B2%D0%BE%D0%B9+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82\">
        Подробнее
        <svg width=\"12\">
          <use xlink:href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
        </svg>
      </a>
    </article>
    <article class=\"we-do__item  we-do__item--bg-second\">
      <svg class=\"we-do__item-icon\" width=\"55\">
        <use xlink:href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#author-3");
        echo "\"></use>
      </svg>
      <h3 class=\"we-do__item-title\">Авторские проекты</h3>
      <ul class=\"we-do__item-list\">
        <li>Акцент на индивидуальность</li>
        <li>Дома большой площади</li>
        <li>Особенности пятна застройки</li>
      </ul>
      <a class=\"we-do__item-link\" href=\"/projects?category=%D0%90%D0%B2%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82\">
        Подробнее
        <svg width=\"12\">
          <use xlink:href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
        </svg>
      </a>
    </article>

    <article class=\"we-do__item  we-do__item--bg-third\">
      <svg class=\"we-do__item-icon\" width=\"55\">
        <use xlink:href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#commercial-3");
        echo "\"></use>
      </svg>
      <h3 class=\"we-do__item-title\">Коммерческие проекты</h3>
      <ul class=\"we-do__item-list\">
        <li>Создание экономически выгодных проектов</li>
        <li>Сооветствие вашему бюджету</li>
        <li>Оперативное строительство</li>
      </ul>
      <a class=\"we-do__item-link\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->appFilter("/projects"), "html", null, true);
        echo "\">
        Подробнее
        <svg width=\"12\">
          <use xlink:href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
        </svg>
      </a>
    </article>

  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\we-do.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 57,  120 => 54,  109 => 46,  99 => 39,  85 => 28,  76 => 22,  62 => 11,  56 => 7,  52 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"we-do\" id=\"we-do\">
  {% if headline %}
  <div class=\"container\">
    {% partial 'elements/headline' text=headline %}
  </div>
  {% endif %}
  <div class=\"we-do__content\">

    <article class=\"we-do__item  we-do__item--bg-first\">
      <svg class=\"we-do__item-icon\" width=\"55\">
        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#typical-3'|theme }}\"></use>
      </svg>
      <h3 class=\"we-do__item-title\">Типовые проекты</h3>
      <ul class=\"we-do__item-list\">
        <li>Приступаем к строительству сразу</li>
        <li>Оптимизированный расход материалов</li>
        <li>Стоимость м2 в типовых проектах ниже</li>
      </ul>
      <a class=\"we-do__item-link\" href=\"/projects?category=%D0%A2%D0%B8%D0%BF%D0%BE%D0%B2%D0%BE%D0%B9+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82\">
        Подробнее
        <svg width=\"12\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
        </svg>
      </a>
    </article>
    <article class=\"we-do__item  we-do__item--bg-second\">
      <svg class=\"we-do__item-icon\" width=\"55\">
        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#author-3'|theme }}\"></use>
      </svg>
      <h3 class=\"we-do__item-title\">Авторские проекты</h3>
      <ul class=\"we-do__item-list\">
        <li>Акцент на индивидуальность</li>
        <li>Дома большой площади</li>
        <li>Особенности пятна застройки</li>
      </ul>
      <a class=\"we-do__item-link\" href=\"/projects?category=%D0%90%D0%B2%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82\">
        Подробнее
        <svg width=\"12\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
        </svg>
      </a>
    </article>

    <article class=\"we-do__item  we-do__item--bg-third\">
      <svg class=\"we-do__item-icon\" width=\"55\">
        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#commercial-3'|theme }}\"></use>
      </svg>
      <h3 class=\"we-do__item-title\">Коммерческие проекты</h3>
      <ul class=\"we-do__item-list\">
        <li>Создание экономически выгодных проектов</li>
        <li>Сооветствие вашему бюджету</li>
        <li>Оперативное строительство</li>
      </ul>
      <a class=\"we-do__item-link\" href=\"{{'/projects'|app}}\">
        Подробнее
        <svg width=\"12\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
        </svg>
      </a>
    </article>

  </div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\we-do.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "partial" => 4);
        static $filters = array("theme" => 11, "escape" => 54, "app" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['theme', 'escape', 'app'],
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
