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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\sections\services.htm */
class __TwigTemplate_9fe06c1566fa984b52f4927baac80b46eca2e8ff90daf3e05b10ea93933f9a0e extends \Twig\Template
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
        echo "<section class=\"services  ";
        echo ((($context["main"] ?? null)) ? ("services--main") : (""));
        echo "\">
  <h2 class=\"visually-hidden\">Перечень услуг Mansio group</h2>
  ";
        // line 3
        if ((($context["main"] ?? null) != true)) {
            // line 4
            echo "  <div class=\"services__item\">
    <picture class=\"services__foto  js-picture\">
      <source srcset=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-18.webp");
            echo " 1x\" />
      <img class=\"js-picture__img  js-picture__img--mid-scroll\" src=\"";
            // line 7
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-18.webp");
            echo "\"
        alt=\"##\" width=\"875\" />
    </picture>
    <div class=\"services__content\">
      <div class=\"services__desc\">
        Создаем красивый и&nbsp;функциональный дом в&nbsp;рамках вашего бюджета
      </div>
      <div class=\"services__title\">Архитектурное проектирование</div>
      <div class=\"services__subtitle\">
        При архитектурном проектировании мы&nbsp;продумываем:
      </div>
      <ul class=\"services__list\">
        <li>Размер и&nbsp;форму жилья;</li>
        <li>Количество и&nbsp;расположение входных дверей;</li>
        <li>Этажность строения;</li>
        <li>Материал, из&nbsp;которого будет строиться дом;</li>
        <li>Наличие котельной, пристроенного к&nbsp;дому гаража и&nbsp;других объектов;</li>
        <li>Устройство санузлов;</li>
        <li>Количество и&nbsp;величину окон;</li>
        <li>Наличие проходных комнат и&nbsp;др.</li>
      </ul>
      <div class=\"services__btns-wrapper\">
        ";
            // line 29
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['modal'] = "already-have"            ;
            $context['__cms_partial_params']['text'] = "У&nbsp;меня уже есть проект"            ;
            $context['__cms_partial_params']['bemElement'] = "services__btn"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 30
            echo "        <a class=\"btn  btn--blue  services__btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->appFilter("individualnoe-proektirovanie"), "html", null, true);
            echo "\">Подробнее</a>
      </div>
    </div>
  </div>
  <!-- item 2 -->
  <div class=\"services__item\">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 38
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-19.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 40
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-19.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">
        Проектирование <br />
        инженерных коммуникаций
      </div>
      <ul class=\"services__list\">
        <li>Отопление и&nbsp;вентиляция</li>
        <li>Водоснабжение и&nbsp;канализация</li>
        <li>Электроснабжение</li>
        <li>Слаботочные системы</li>
        <li>&laquo;Умный дом&raquo;</li>
      </ul>
      ";
            // line 55
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['text'] = "Подробнее"            ;
            $context['__cms_partial_params']['href'] = ""            ;
            $context['__cms_partial_params']['mod'] = "blue"            ;
            $context['__cms_partial_params']['bemElement'] = "services__btn"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 56
            echo "    </div>
  </div>
  <!-- item 3 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 62
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-20.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 64
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-20.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Строительство</div>
      <ul class=\"services__list\">
        <li>
          После утверждения проекта строительство нового дома осуществляется подразделениями компании.
        </li>
        <li>Тройной контроль качества: прораб, инженер, технадзор.</li>
        <li>Учитываем СНИПы, ГОСТЫ, градостроительные нормы.</li>
      </ul>
      <a class=\"btn  btn--blue  services__btn\" href=\"";
            // line 76
            echo RainLab\Pages\Classes\Page::url("stroitelstvo");
            echo "\">Подробнее</a>
    </div>
  </div>
  <!-- item 4 -->
  <div class=\"services__item \">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 83
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-21.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 85
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-21.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">ДИЗАЙН ИНТЕРЬЕРА</div>
      <div class=\"services__quote\">
        Пройдитесь по&nbsp;своему дому ещё до&nbsp;начала ремонта
        и&nbsp;оцените, насколько вам комфортно?
      </div>
      <div class=\"services__subtitle\">
        С&nbsp;помощью 3D-визуализации вы&nbsp;можете:
      </div>
      <ul class=\"services__list\">
        <li>Формирование концепции дизайн-проекта</li>
        <li>Разработка и утверждение рабочей документации</li>
        <li>Комплектация объекта под ключ</li>
        <li>Сопровождение на всех этапах реализации дизайн-проекта</li>
        <li>Подробные ведомости с указанием всех параметров и цен</li>
      </ul>
      <p class=\"services__feedback\">
        <svg class=\"services__icon\" width=\"48\">
          <use xlink:href=\"";
            // line 106
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#project-icon-2");
            echo "\"></use>
        </svg>
        <span>После интервью заказчика с&nbsp;нашим дизайнером, мы&nbsp;формируем
          техническое задание и&nbsp;детальный сценарий эксплуатации каждого
          помещения.</span>
      </p>
      <a class=\"btn  btn--blue  services__btn\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->appFilter("dizajn-interera"), "html", null, true);
            echo "\">Подробнее</a>
    </div>
  </div>
  <!-- item 5 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 119
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-22.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 121
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-22.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Отделочные работы</div>
      <ul class=\"services__list\">
        <li>Квалифицированные мастера с многолетним опытом работы</li>
        <li>
          Качественные строительные материалы от&nbsp;производителей и
          официальных дилеров;
        </li>
        <li>
          Отчет о&nbsp;проделанной работе в&nbsp;личном кабинете или
          мессенджере.
        </li>
      </ul>
      <a class=\"btn  btn--blue  services__btn\" href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->appFilter("otdelochnye-raboty"), "html", null, true);
            echo "\">Подробнее</a>
    </div>
  </div>
  <!-- item 6 -->
  <div class=\"services__item\">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 144
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-24.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 146
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-24.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Комплектация мебелью</div>
      <ul class=\"services__list\">
        <li>
          Скидка при комплектации объекта от&nbsp;производителя, как оптовый
          покупатель;
        </li>
        <li>
          Экономия вашего времени на&nbsp;поездки и&nbsp;разговоры
          с&nbsp;поставщиками;
        </li>
        <li>Отсутствие транспортных расходов;</li>
        <li>Точное соответствие дизайн-проекту.</li>
      </ul>
      <a class=\"btn  btn--blue  services__btn\" href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->appFilter("komplektaciya-mebelyu"), "html", null, true);
            echo "\">Подробнее</a>
    </div>

  </div>
  <!-- item 7 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 171
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-25.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 173
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-25.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Ландшафтный дизайн</div>
      <div class=\"services__text\">
        <span>Наша цель – создать комфортное и гармоничное пространство для жизни, где участок, экстерьер и интерьер
          являются единым целым.</span>
        <span>При разработке ландшафтного дизайна учитываем архитектурный стиль дома, концепцию дизайна интерьера,
          пожелания заказчика и индивидуальные особенности, такие, как наличие домашних питомцев и аллергия на
          растения.</span>
      </div>
      ";
            // line 185
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['text'] = "Подробнее"            ;
            $context['__cms_partial_params']['href'] = ""            ;
            $context['__cms_partial_params']['mod'] = "blue"            ;
            $context['__cms_partial_params']['bemElement'] = "services__btn"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 186
            echo "    </div>
  </div>
  ";
        }
        // line 189
        echo "  ";
        if (($context["main"] ?? null)) {
            // line 190
            echo "  <div class=\"services__item\">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 193
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-26.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 195
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-26.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">
        Под ваш проект <br />
        создается проектная группа <br />
        из&nbsp;специалистов:
      </div>
      <ul class=\"services__list\">
        <li>Архитекторы;</li>
        <li>Конструкторы;</li>
        <li>Инженеры;</li>
        <li>Дизайнеры;</li>
        <li>Ландшафтные дизайнеры;</li>
        <li>Комплектовщики.</li>
      </ul>
    </div>

  </div>
  <!-- item 9 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"";
            // line 219
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-27.webp");
            echo " 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"";
            // line 221
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-27.webp");
            echo "\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__desc\">Для обсуждения деталей вашего проекта</div>
      <div class=\"services__title\">
        Создаем общий чат <br />
        в&nbsp;удобном мессенджере
      </div>
      <div class=\"services__subtitle\">
        В&nbsp;режиме реального времени вы&nbsp;сможете увидеть:
      </div>
      <ul class=\"services__list\">
        <li>Эскизы;</li>
        <li>Наброски;</li>
        <li>Технические решения;</li>
      </ul>
      <div class=\"services__feedback\">
        <div class=\"services__icon\">
          <svg>
            <use xlink:href=\"";
            // line 241
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#project-icon-1");
            echo "\"></use>
          </svg>
        </div>
        <span>Специалисты готовы ответить на&nbsp;любой ваш вопрос в&nbsp;режиме
          реального времени.</span>
      </div>
    </div>
  </div>
  ";
        }
        // line 250
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 250,  387 => 241,  364 => 221,  359 => 219,  332 => 195,  327 => 193,  322 => 190,  319 => 189,  314 => 186,  306 => 185,  291 => 173,  286 => 171,  275 => 163,  255 => 146,  250 => 144,  240 => 137,  221 => 121,  216 => 119,  206 => 112,  197 => 106,  173 => 85,  168 => 83,  158 => 76,  143 => 64,  138 => 62,  130 => 56,  122 => 55,  104 => 40,  99 => 38,  87 => 30,  80 => 29,  55 => 7,  51 => 6,  47 => 4,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"services  {{ main ? 'services--main' }}\">
  <h2 class=\"visually-hidden\">Перечень услуг Mansio group</h2>
  {% if main != true %}
  <div class=\"services__item\">
    <picture class=\"services__foto  js-picture\">
      <source srcset=\"{{ 'assets/images/content/layer-18.webp'|theme }} 1x\" />
      <img class=\"js-picture__img  js-picture__img--mid-scroll\" src=\"{{ 'assets/images/content/layer-18.webp'|theme }}\"
        alt=\"##\" width=\"875\" />
    </picture>
    <div class=\"services__content\">
      <div class=\"services__desc\">
        Создаем красивый и&nbsp;функциональный дом в&nbsp;рамках вашего бюджета
      </div>
      <div class=\"services__title\">Архитектурное проектирование</div>
      <div class=\"services__subtitle\">
        При архитектурном проектировании мы&nbsp;продумываем:
      </div>
      <ul class=\"services__list\">
        <li>Размер и&nbsp;форму жилья;</li>
        <li>Количество и&nbsp;расположение входных дверей;</li>
        <li>Этажность строения;</li>
        <li>Материал, из&nbsp;которого будет строиться дом;</li>
        <li>Наличие котельной, пристроенного к&nbsp;дому гаража и&nbsp;других объектов;</li>
        <li>Устройство санузлов;</li>
        <li>Количество и&nbsp;величину окон;</li>
        <li>Наличие проходных комнат и&nbsp;др.</li>
      </ul>
      <div class=\"services__btns-wrapper\">
        {% partial 'elements/btn' modal='already-have' text='У&nbsp;меня уже есть проект' bemElement='services__btn' %}
        <a class=\"btn  btn--blue  services__btn\" href=\"{{'individualnoe-proektirovanie'|app}}\">Подробнее</a>
      </div>
    </div>
  </div>
  <!-- item 2 -->
  <div class=\"services__item\">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-19.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-19.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">
        Проектирование <br />
        инженерных коммуникаций
      </div>
      <ul class=\"services__list\">
        <li>Отопление и&nbsp;вентиляция</li>
        <li>Водоснабжение и&nbsp;канализация</li>
        <li>Электроснабжение</li>
        <li>Слаботочные системы</li>
        <li>&laquo;Умный дом&raquo;</li>
      </ul>
      {% partial 'elements/btn' text='Подробнее' href='' mod='blue' bemElement='services__btn' %}
    </div>
  </div>
  <!-- item 3 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-20.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-20.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Строительство</div>
      <ul class=\"services__list\">
        <li>
          После утверждения проекта строительство нового дома осуществляется подразделениями компании.
        </li>
        <li>Тройной контроль качества: прораб, инженер, технадзор.</li>
        <li>Учитываем СНИПы, ГОСТЫ, градостроительные нормы.</li>
      </ul>
      <a class=\"btn  btn--blue  services__btn\" href=\"{{'stroitelstvo'|staticPage}}\">Подробнее</a>
    </div>
  </div>
  <!-- item 4 -->
  <div class=\"services__item \">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-21.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-21.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">ДИЗАЙН ИНТЕРЬЕРА</div>
      <div class=\"services__quote\">
        Пройдитесь по&nbsp;своему дому ещё до&nbsp;начала ремонта
        и&nbsp;оцените, насколько вам комфортно?
      </div>
      <div class=\"services__subtitle\">
        С&nbsp;помощью 3D-визуализации вы&nbsp;можете:
      </div>
      <ul class=\"services__list\">
        <li>Формирование концепции дизайн-проекта</li>
        <li>Разработка и утверждение рабочей документации</li>
        <li>Комплектация объекта под ключ</li>
        <li>Сопровождение на всех этапах реализации дизайн-проекта</li>
        <li>Подробные ведомости с указанием всех параметров и цен</li>
      </ul>
      <p class=\"services__feedback\">
        <svg class=\"services__icon\" width=\"48\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#project-icon-2'|theme }}\"></use>
        </svg>
        <span>После интервью заказчика с&nbsp;нашим дизайнером, мы&nbsp;формируем
          техническое задание и&nbsp;детальный сценарий эксплуатации каждого
          помещения.</span>
      </p>
      <a class=\"btn  btn--blue  services__btn\" href=\"{{'dizajn-interera'|app}}\">Подробнее</a>
    </div>
  </div>
  <!-- item 5 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-22.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-22.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Отделочные работы</div>
      <ul class=\"services__list\">
        <li>Квалифицированные мастера с многолетним опытом работы</li>
        <li>
          Качественные строительные материалы от&nbsp;производителей и
          официальных дилеров;
        </li>
        <li>
          Отчет о&nbsp;проделанной работе в&nbsp;личном кабинете или
          мессенджере.
        </li>
      </ul>
      <a class=\"btn  btn--blue  services__btn\" href=\"{{'otdelochnye-raboty'|app}}\">Подробнее</a>
    </div>
  </div>
  <!-- item 6 -->
  <div class=\"services__item\">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-24.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-24.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Комплектация мебелью</div>
      <ul class=\"services__list\">
        <li>
          Скидка при комплектации объекта от&nbsp;производителя, как оптовый
          покупатель;
        </li>
        <li>
          Экономия вашего времени на&nbsp;поездки и&nbsp;разговоры
          с&nbsp;поставщиками;
        </li>
        <li>Отсутствие транспортных расходов;</li>
        <li>Точное соответствие дизайн-проекту.</li>
      </ul>
      <a class=\"btn  btn--blue  services__btn\" href=\"{{'komplektaciya-mebelyu'|app}}\">Подробнее</a>
    </div>

  </div>
  <!-- item 7 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-25.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-25.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">Ландшафтный дизайн</div>
      <div class=\"services__text\">
        <span>Наша цель – создать комфортное и гармоничное пространство для жизни, где участок, экстерьер и интерьер
          являются единым целым.</span>
        <span>При разработке ландшафтного дизайна учитываем архитектурный стиль дома, концепцию дизайна интерьера,
          пожелания заказчика и индивидуальные особенности, такие, как наличие домашних питомцев и аллергия на
          растения.</span>
      </div>
      {% partial 'elements/btn' text='Подробнее' href='' mod='blue' bemElement='services__btn' %}
    </div>
  </div>
  {% endif %}
  {% if main %}
  <div class=\"services__item\">
    <div class=\"services__foto services__foto--right\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-26.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-26.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__title\">
        Под ваш проект <br />
        создается проектная группа <br />
        из&nbsp;специалистов:
      </div>
      <ul class=\"services__list\">
        <li>Архитекторы;</li>
        <li>Конструкторы;</li>
        <li>Инженеры;</li>
        <li>Дизайнеры;</li>
        <li>Ландшафтные дизайнеры;</li>
        <li>Комплектовщики.</li>
      </ul>
    </div>

  </div>
  <!-- item 9 -->
  <div class=\"services__item\">
    <div class=\"services__foto\">
      <picture class=\"js-picture\">
        <source srcset=\"{{ 'assets/images/content/layer-27.webp'|theme }} 1x\" />
        <img class=\"js-picture__img  js-picture__img--mid-scroll\"
          src=\"{{ 'assets/images/content/layer-27.webp'|theme }}\" alt=\"##\" width=\"875\" />
      </picture>
    </div>
    <div class=\"services__content\">
      <div class=\"services__desc\">Для обсуждения деталей вашего проекта</div>
      <div class=\"services__title\">
        Создаем общий чат <br />
        в&nbsp;удобном мессенджере
      </div>
      <div class=\"services__subtitle\">
        В&nbsp;режиме реального времени вы&nbsp;сможете увидеть:
      </div>
      <ul class=\"services__list\">
        <li>Эскизы;</li>
        <li>Наброски;</li>
        <li>Технические решения;</li>
      </ul>
      <div class=\"services__feedback\">
        <div class=\"services__icon\">
          <svg>
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#project-icon-1'|theme }}\"></use>
          </svg>
        </div>
        <span>Специалисты готовы ответить на&nbsp;любой ваш вопрос в&nbsp;режиме
          реального времени.</span>
      </div>
    </div>
  </div>
  {% endif %}
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "partial" => 29);
        static $filters = array("theme" => 6, "escape" => 30, "app" => 30, "staticPage" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['theme', 'escape', 'app', 'staticPage'],
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
