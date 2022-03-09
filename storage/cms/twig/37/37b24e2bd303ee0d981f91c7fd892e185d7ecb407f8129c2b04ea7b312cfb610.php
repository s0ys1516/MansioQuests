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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\catalog.htm */
class __TwigTemplate_69dbe9ce698f4dd8d642e8ad48c424dd3f16d9dbdb4f779a7016f14168bb166e extends \Twig\Template
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
        // line 2
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = "Проекты"        ;
        $context['__cms_partial_params']['bgClass'] = "projects"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/first-screen"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
<!-- TODO: написать нативный обработчик форм -->
<!-- @@include('../components/row-form/row-form.html', {
        \"title\": \"У&nbsp;вас есть свой проект?\",
        \"subtitle\": \"Загрузите его для расчета. Проведем профессиональную экспертизу и&nbsp;сделаем подробную смету.\",
        \"buttonText\": \"Рассчитать стоимость\"
      }) -->
";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/kreditovanie-row"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("filterprojects"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "
<section class=\"contacts\">
  <div class=\"contacts__bg\">
    <div class=\"container\">
      <div class=\"contacts__window\">
        <div class=\"action-call\">
          <div class=\"brand-flag\">
            <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
              <use xlink:href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
            </svg>
          </div>
          <div class=\"action-call__inner\">
            <div class=\"person  action-call__person\">
              <div class=\"person__name-wrap\">
                <p class=\"person__name\">Илларионов
                  Илья
                  Николаевич</p>
                <p class=\"person__sub-name\">Главный
                  архитектор</p>
              </div>
              <div class=\"person__foto-wrap action-call__person-foto\">
                <picture>
                  <source srcset=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.webp");
        echo " 1x\" type=\"image/webp\">
                  <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.png");
        echo "\"
                    alt=\"Фотография Главный архитектор Илларионов Илья Николаевич\" width=\"651\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Организуем встречу с&nbsp;нашим<br>архитектором, на
                которой&nbsp;вы<span>:</span></div>
              <ul class=\"contacts-form__list\">
                <li>
                  Определите назначение дома
                  <svg>
                    <use xlink:href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
                  </svg>
                </li>
                <li>
                  Выберите архитектурный стиль
                  <svg>
                    <use xlink:href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
                  </svg>
                </li>
                <li>
                  Определите желаемую площадь дома
                  <svg>
                    <use xlink:href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
                  </svg>
                </li>
                <li>
                  Посмотрите образцы материалов
                  <svg>
                    <use xlink:href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
                  </svg>
                </li>
                <li>
                  Получите полную техническую консультацию
                  <svg>
                    <use xlink:href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
                  </svg>
                </li>
              </ul>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"823744\", hash: \"3e5bddc0ee041117a0393f68b52f5c00\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_823744\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640586666\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/call2action_about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 87,  161 => 86,  145 => 73,  136 => 67,  127 => 61,  118 => 55,  109 => 49,  93 => 36,  89 => 35,  72 => 21,  62 => 13,  58 => 12,  54 => 11,  45 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% partial 'sections/first-screen' title='Проекты' bgClass='projects'  %}
{# {% partial 'sections/we-do' %} #}

<!-- TODO: написать нативный обработчик форм -->
<!-- @@include('../components/row-form/row-form.html', {
        \"title\": \"У&nbsp;вас есть свой проект?\",
        \"subtitle\": \"Загрузите его для расчета. Проведем профессиональную экспертизу и&nbsp;сделаем подробную смету.\",
        \"buttonText\": \"Рассчитать стоимость\"
      }) -->
{% partial 'elements/kreditovanie-row' %}
{% component 'filterprojects' %}

<section class=\"contacts\">
  <div class=\"contacts__bg\">
    <div class=\"container\">
      <div class=\"contacts__window\">
        <div class=\"action-call\">
          <div class=\"brand-flag\">
            <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
              <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme }}\"></use>
            </svg>
          </div>
          <div class=\"action-call__inner\">
            <div class=\"person  action-call__person\">
              <div class=\"person__name-wrap\">
                <p class=\"person__name\">Илларионов
                  Илья
                  Николаевич</p>
                <p class=\"person__sub-name\">Главный
                  архитектор</p>
              </div>
              <div class=\"person__foto-wrap action-call__person-foto\">
                <picture>
                  <source srcset=\"{{ 'assets/images/content/manager.webp'|theme }} 1x\" type=\"image/webp\">
                  <img src=\"{{ 'assets/images/content/manager.png'|theme }}\"
                    alt=\"Фотография Главный архитектор Илларионов Илья Николаевич\" width=\"651\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Организуем встречу с&nbsp;нашим<br>архитектором, на
                которой&nbsp;вы<span>:</span></div>
              <ul class=\"contacts-form__list\">
                <li>
                  Определите назначение дома
                  <svg>
                    <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
                  </svg>
                </li>
                <li>
                  Выберите архитектурный стиль
                  <svg>
                    <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
                  </svg>
                </li>
                <li>
                  Определите желаемую площадь дома
                  <svg>
                    <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
                  </svg>
                </li>
                <li>
                  Посмотрите образцы материалов
                  <svg>
                    <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
                  </svg>
                </li>
                <li>
                  Получите полную техническую консультацию
                  <svg>
                    <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
                  </svg>
                </li>
              </ul>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"823744\", hash: \"3e5bddc0ee041117a0393f68b52f5c00\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_823744\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640586666\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      {% partial 'elements/call2action_about' %}
    </div>
  </div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\catalog.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 2, "component" => 12);
        static $filters = array("theme" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component'],
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
