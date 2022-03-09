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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\uslugi.htm */
class __TwigTemplate_3402766df6e174a69e439ae9f4e93a93f3c2d29085abb0b4d7ff3e961d9fc22b extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = "Услуги"        ;
        $context['__cms_partial_params']['bgClass'] = "services"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/first-screen"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<section class=\"about-item  about-item--brand\">
  <div class=\"about-item__inner\">
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/brand-flag"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Mansio Group</h2>
      <p><b>&mdash;&nbsp;cтроительная компания полного цикла.</b></p>
      <p>Выполняем все виды работ от&nbsp;проектирования до&nbsp;ландшафтного дизайна и&nbsp;комплектации мебелью. Один
        подрядчик на&nbsp;все виды работ&nbsp;&mdash; <b style=\"text-transform: uppercase;\">единый центр
          ответственности!</b>
      </p>
      <ul style=\"margin-bottom: 25px;\">
        <li>Архитектурный стиль определяет конструктив;</li>
        <li>Ландшафтный дизайн выполняется в&nbsp;гармонии с&nbsp;фасадами;</li>
        <li>Дизайн фасада и&nbsp;интерьера взаимно дополняют друг друга;</li>
        <li>Дизайн интерьера связан с&nbsp;монтажом всех коммуникаций;</li>
        <li>Видеонаблюдение в&nbsp;режиме реального времени.</li>
      </ul>
      <p><b style=\"text-transform: uppercase;\">Результат:</b></p>
      <ul>
        <li>Участок, экстерьер и&nbsp;интерьер дома выглядят единым целым;</li>
        <li>Продуманы все детали;</li>
        <li>Ваш дом готов для комфортного проживания.</li>
      </ul>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-1.webp");
        echo " 1x\" type=\"image/webp\">
      <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-1.jpg");
        echo "\" width=\"884\"
        alt=\"Небольшая строительная монтажная фирма\" loading=\"lazy\">
    </picture>
  </div>
</section>

";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
<section class=\"contacts\">
  <div class=\"contacts__bg\">
    <div class=\"container\">
      <div class=\"contacts__window\">
        <div class=\"action-call\">
          <div class=\"brand-flag\">
            <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
              <use xlink:href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
            </svg>
          </div>
          <div class=\"action-call__inner\">
            <div class=\"person  action-call__person\">
              <div class=\"person__name-wrap\">
                <p class=\"person__name\">Александра Бикова</p>
                <p class=\"person__sub-name\">Проектный консультант</p>
              </div>
              <div class=\"person__foto-wrap action-call__person-foto\">
                <picture>
                  <source srcset=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.webp");
        echo " 1x\" type=\"image/webp\">
                  <img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.png");
        echo "\" alt=\"Александра Бикова\" width=\"704\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Проконсультируем вас <br>по&nbsp;любой услуге!</div>
              <p class=\"action-call__dsc\">
                Менеджер свяжется с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведет исчерпывающую консультацию</p>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"824449\", hash: \"82b1de926fdb7586c319326cd6a0c87f\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_824449\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640600534\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/call2action_about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\uslugi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 75,  144 => 74,  123 => 56,  119 => 55,  105 => 44,  95 => 36,  91 => 35,  82 => 29,  78 => 28,  54 => 6,  50 => 5,  45 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'sections/first-screen' title='Услуги' bgClass='services' %}

<section class=\"about-item  about-item--brand\">
  <div class=\"about-item__inner\">
    {% partial 'elements/brand-flag' %}
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Mansio Group</h2>
      <p><b>&mdash;&nbsp;cтроительная компания полного цикла.</b></p>
      <p>Выполняем все виды работ от&nbsp;проектирования до&nbsp;ландшафтного дизайна и&nbsp;комплектации мебелью. Один
        подрядчик на&nbsp;все виды работ&nbsp;&mdash; <b style=\"text-transform: uppercase;\">единый центр
          ответственности!</b>
      </p>
      <ul style=\"margin-bottom: 25px;\">
        <li>Архитектурный стиль определяет конструктив;</li>
        <li>Ландшафтный дизайн выполняется в&nbsp;гармонии с&nbsp;фасадами;</li>
        <li>Дизайн фасада и&nbsp;интерьера взаимно дополняют друг друга;</li>
        <li>Дизайн интерьера связан с&nbsp;монтажом всех коммуникаций;</li>
        <li>Видеонаблюдение в&nbsp;режиме реального времени.</li>
      </ul>
      <p><b style=\"text-transform: uppercase;\">Результат:</b></p>
      <ul>
        <li>Участок, экстерьер и&nbsp;интерьер дома выглядят единым целым;</li>
        <li>Продуманы все детали;</li>
        <li>Ваш дом готов для комфортного проживания.</li>
      </ul>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"{{ 'assets/images/content/about-content-1.webp'|theme }} 1x\" type=\"image/webp\">
      <img src=\"{{ 'assets/images/content/about-content-1.jpg'|theme }}\" width=\"884\"
        alt=\"Небольшая строительная монтажная фирма\" loading=\"lazy\">
    </picture>
  </div>
</section>

{% partial 'sections/services' %}

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
                <p class=\"person__name\">Александра Бикова</p>
                <p class=\"person__sub-name\">Проектный консультант</p>
              </div>
              <div class=\"person__foto-wrap action-call__person-foto\">
                <picture>
                  <source srcset=\"{{ 'assets/images/content/manager-w.webp'|theme }} 1x\" type=\"image/webp\">
                  <img src=\"{{ 'assets/images/content/manager-w.png'|theme }}\" alt=\"Александра Бикова\" width=\"704\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Проконсультируем вас <br>по&nbsp;любой услуге!</div>
              <p class=\"action-call__dsc\">
                Менеджер свяжется с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведет исчерпывающую консультацию</p>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"824449\", hash: \"82b1de926fdb7586c319326cd6a0c87f\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_824449\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640600534\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      {% partial 'elements/call2action_about' %}
    </div>
  </div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\uslugi.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("theme" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
