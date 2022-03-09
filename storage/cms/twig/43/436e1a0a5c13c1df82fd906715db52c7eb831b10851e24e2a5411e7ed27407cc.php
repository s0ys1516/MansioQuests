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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\layouts\default.htm */
class __TwigTemplate_0d469432e165b1e678857a77e6b3fc1109b9405240a488f84adf5ba51031c377 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\" class=\"no-js\">

<head>
\t";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>

<body id=\"pageBody\">
\t<div id=\"siteWrapper\" class=\"wrapper\">
\t\t<!-- Header -->
\t\t";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
\t\t<!-- Content -->
\t\t<main id=\"pageMain\">
\t\t\t";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 16
        echo "\t\t</main>

\t\t<!-- Footer -->
\t\t";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "\t</div>

\t<div class=\"modal modal--preload modal--discuss  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
        <div class=\"action-call__inner\">
          <div class=\"person  action-call__person\">
            <div class=\"person__name-wrap\">
              <p class=\"person__name\">Илларионов Илья Николаевич</p>
              <p class=\"person__sub-name\">Главный архитектор</p>
            </div>
            <div class=\"person__foto-wrap action-call__person-foto\">
              <picture>
                <source srcset=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.webp");
        echo " 1x\" type=\"image/webp\">
                <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.png");
        echo "\" width=\"651\"
                  alt=\"Фотография Главный архитектор Илларионов Илья Николаевич\">
              </picture>
            </div>
          </div>
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">Запишитесь на&nbsp;встречу<br>с&nbsp;архитектором Mansio Group</div>
            <p class=\"action-call__dsc\">Наш архитектор выслушает ваши пожелания, даст рекомендации и&nbsp;ответит
              на&nbsp;все вопросы</p>
            <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
              <script>
                ! function (a, m, o, c, r, m) {
                  a[o + c] = a[o + c] || {
                    setMeta: function (p) {
                      this.params = (this.params || []).concat([p])
                    }
                  }, a[o + r] = a[o + r] || function (f) {
                    a[o + r].f = (a[o + r].f || []).concat([f])
                  }, a[o + r]({
                    id: \"841105\",
                    hash: \"7996435f3912dc70d4a8cb313cf6b826\",
                    locale: \"ru\"
                  })
                }(window, 0, \"amo_forms_\", \"params\", \"load\");
              </script>
              <script id=\"amoforms_script_841105\" async=\"async\" charset=\"utf-8\"
                src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1632903968\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--registration-for-viewing  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 89
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
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.webp");
        echo " 1x\" type=\"image/webp\">
                <img src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.png");
        echo "\" width=\"704\"
                  alt=\"Фотография Проектный консультант Александра Бикова\">
              </picture>
            </div>
          </div>
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">Запись на&nbsp;просмотр строящихся<br>или готовых домов Mansio Group</div>
            <p class=\"action-call__dsc\">Мы&nbsp;свяжемся с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведем экскурсию
              по&nbsp;нашим объекта</p>
            <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
              <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:\"823750\",hash:\"e76b0394838a458bc0c9c429b22b83e2\",locale:\"ru\"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,\"amo_forms_\",\"params\",\"load\",\"loaded\");</script><script id=\"amoforms_script_823750\" async=\"async\" charset=\"utf-8\" src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1643030013\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--already-have   modal--fit-content   \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
        <div class=\"action-call__inner\">
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">У&nbsp;вас есть готовый проект?<br>Присылайте нам его.</div>
            <p class=\"action-call__dsc\">Проведем тщательную экспертизу, рассчитаем точную смету и&nbsp;сроки
              строительства</p>
            <div class=\"action-call__form-wrap  \">
              <script>
                ! function (a, m, o, c, r, m) {
                  a[o + c] = a[o + c] || {
                    setMeta: function (p) {
                      this.params = (this.params || []).concat([p])
                    }
                  }, a[o + r] = a[o + r] || function (f) {
                    a[o + r].f = (a[o + r].f || []).concat([f])
                  }, a[o + r]({
                    id: \"824437\",
                    hash: \"bc1d3d7136b6a981ba531b07a2f4df4f\",
                    locale: \"ru\"
                  })
                }(window, 0, \"amo_forms_\", \"params\", \"load\");
              </script>
              <script id=\"amoforms_script_824437\" async=\"async\" charset=\"utf-8\"
                src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629710154\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload  modal--back-call  modal--fit-content\">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
        <div class=\"action-call__inner\">
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">Мы&nbsp;вам перезвоним</div>
            <p class=\"action-call__dsc\">В&nbsp;ближайшее время с&nbsp;вами свяжется персональный менеджер и&nbsp;ответит
              на&nbsp;интересующие вопросы</p>
            <div class=\"action-call__form-wrap  \">
              <script>
                ! function (a, m, o, c, r, m) {
                  a[o + c] = a[o + c] || {
                    setMeta: function (p) {
                      this.params = (this.params || []).concat([p])
                    }
                  }, a[o + r] = a[o + r] || function (f) {
                    a[o + r].f = (a[o + r].f || []).concat([f])
                  }, a[o + r]({
                    id: \"824308\",
                    hash: \"eb4c8a02bc8d0e34f40c0bf6717e14c2\",
                    locale: \"ru\"
                  })
                }(window, 0, \"amo_forms_\", \"params\", \"load\");
              </script>
              <script id=\"amoforms_script_824308\" async=\"async\" charset=\"utf-8\"
                src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629695953\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>

<div class=\"modal modal--preload modal--vacancyResponse   modal--fit-content   \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div style=\"padding: 20px\">
        <!-- TODO: вставить форму -->
       ";
        // line 227
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("vacancyResponse"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 228
        echo "      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 232
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy1  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Архитектор/инженер-архитектор/инженер-строитель с&nbsp;опытом проектирования
          малоэтажных
          каменных домов и&nbsp;коттеджей!</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Разработка проектной/рабочей документации с&nbsp;помощью <b>AUTODESK REVIT</b></li>
          <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений
            при
            конструктивной необходимости</li>
          <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
          <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Образование высшее, (инженер-архитектор, инженер-строитель)</li>
          <li>Опыт работы не&nbsp;менее 5&nbsp;лет в&nbsp;должности архитектора, инженера-проектировщика или конструктор
            (желательно именно в области малоэтажного монолитного&nbsp;/ каменного домостроения).</li>
          <li>Знание программном комплексе Revit (Autodesk) обязательно</li>
          <li>Коммуникабельность, целеустремленность, высокая трудоспособность</li>
          <li>Умение работать в&nbsp;сжатые сроки</li>
          <li>Приветствуется креативность и&nbsp;творческий подход</li>
          <li>Резюме предоставлять с&nbsp;портфолио.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 279
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy2  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Ведущий архитектор/инженер-архитектор/инженер-строитель с опытом проектирования
          малоэтажных
          каменных домов и коттеджей!</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Разработка проектной/рабочей документации с помощью <b>AUTODESK REVIT</b></li>
          <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений
            при
            конструктивной необходимости</li>
          <li>Организация работы отдела архитектуры, набор сотрудников, руководство,</li>
          <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
          <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Образование высшее, (инженер-архитектор, инженер-строитель)</li>
          <li>Опыт работы не&nbsp;менее 5&nbsp;лет в&nbsp;должности архитектора, инженера-проектировщика или конструктор
            (желательно именно в области малоэтажного монолитного&nbsp;/ каменного домостроения).</li>
          <li>Знание <b>программном комплексе Revit (Autodesk) обязательно</b></li>
          <li>Коммуникабельность, целеустремленность, высокая трудоспособность</li>
          <li>Умение работать в&nbsp;сжатые сроки</li>
          <li>Приветствуется креативность и&nbsp;творческий подход</li>
          <li>Резюме предоставлять с&nbsp;портфолио.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 327
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy3  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Конструктор</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Разработка проектных решений конструкций зданий.</li>
          <li>Оформление расчетно-пояснительной записки и&nbsp;графической части.</li>
          <li>Выполнение расчетов с&nbsp;применением современных программных средств.</li>
          <li>Расчет схем зданий (SCAD, ЛИРА и&nbsp;пр. продукты САПР).</li>
          <li>Рассмотрение и&nbsp;анализ проектной документации субподрядчиков.</li>
          <li>Составление замечаний и&nbsp;рекомендаций.</li>
          <li>Разработка рабочей документации с&nbsp;помощью <b>AUTODESK REVIT</b>.</li>
          <li>Выполнение поставленных задач главного инженера.</li>
          <li>Взаимодействие с&nbsp;производственно-техническим отделом.</li>
          <li>Ответственность за&nbsp;результаты и&nbsp;сроки.</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Опыт работы в&nbsp;проектировании строений из&nbsp;газобетона, теплой керамики и&nbsp;кирпича.</li>
          <li>Высшее профильное образование ПГС.</li>
          <li>Знание нормативной документации в&nbsp;сфере проектирования (разделы КЖ, КМ, КД), и&nbsp;соблюдение
            требований СП.</li>
          <li>Практический опыт конструктивных расчетов.</li>
          <li>Работа в&nbsp;программах MS&nbsp;Office, AutoCad, Revit, ЛИРА, ПК&nbsp;SCAD.</li>
          <li>Умение работать в&nbsp;сжатые сроки.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 375
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy4  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Прораб (загородное домостроение)</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Организацией и&nbsp;руководством производственно-хозяйственной деятельности на&nbsp;объекта;</li>
          <li>Производством строительно-монтажных работ в&nbsp;соответствии с&nbsp;проектной документацией,
            строительными нормами и правилами, техническими условиями и&nbsp;другими нормативными документами;</li>
          <li>Соблюдением норм точности и&nbsp;правил ведения строительных работ на&nbsp;объекте, утвержденных
            в&nbsp;компании;</li>
          <li>Соблюдением технологической последовательности производства строительно-монтажных работ на&nbsp;участке;
          </li>
          <li>Получением технической документации на&nbsp;строительство объектов;</li>
          <li>Ведением учета выполненных работ, оформление технической документации;</li>
          <li>Участием в&nbsp;сдаче заказчикам законченных строительством объектов, отдельных этапов и&nbsp;комплексов
            работ по возводимым объектам;</li>
          <li>Инструктажем рабочих, непосредственно на&nbsp;рабочем месте по&nbsp;технике безопасности выполняемых работ
          </li>
          <li>Применением технологической оснастки (лесов, подмостей, защитных приспособлений, креплений стенок
            котлованов и траншей, подкосов, кондукторов и&nbsp;других устройств), транспортных средств и&nbsp;средств
            защиты работников;</li>
          <li>Контролем за&nbsp;качеством и&nbsp;безопасностью выполняемых работ;</li>
          <li>Контролем техники безопасности и&nbsp;принятия мер к&nbsp;устранению выявленных недостатков, нарушений
            правил производственной санитарии, соблюдение рабочими инструкций по&nbsp;охране труда;
          <li>Обеспечением соблюдения работниками производственной и&nbsp;трудовой дисциплины.</li>
        </ul>
        <h4>Требование:</h4>
        <ul>
          <li>Образование высшее (ПГС);</li>
          <li>Наличие инструмента для проведения полного спектра работ;</li>
          <li>Опыт работы прорабом по&nbsp;производству общестроительных работ не&nbsp;менее 5&nbsp;лет;</li>
          <li>Опыт работы в&nbsp;деревянном домостроении от&nbsp;5&nbsp;лет;</li>
          <li>Опыт работ с&nbsp;газоблоком, керамическим блоком (porotherm);</li>
          <li>Знание правил по&nbsp;ОТ и&nbsp;ТБ;</li>
          <li>Знание СНиП, нормативных документов в&nbsp;строительстве.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>Разъездной характер работ по&nbsp;Московской области;</li>
          <li>Возможность профессионального и&nbsp;карьерного роста;</li>
          <li>Тренинги по&nbsp;улучшению профессиональных навыков;</li>
          <li>Выплата премий за&nbsp;подачу и&nbsp;внедрение собственных идей, направленных на&nbsp;повышение качества
            работы компании;</li>
          <li>Оплата внешних курсов, тренингов, семинаров по&nbsp;повышению квалификации;</li>
          <li>Регулярные корпоративные мероприятия, проводимые полностью за&nbsp;счёт компании;</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 434
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy5  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Сметчик</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Составление смет в&nbsp;коммерческих расценках под индивидуальный проект дома на
            строительные и&nbsp;отделочные работы на&nbsp;основе проектных данных (эскизы, проекты,
            чертежи);</li>
          <li>Составление сметных расчетов без проектной документации по&nbsp;приблизительным количественным показателям
            (спецификации) и&nbsp;др.</li>
          <li>Проверка правильности составления смет расходов подрядными организациями;</li>
          <li>Расчет себестоимости обслуживания объектов по&nbsp;ФОТ</li>
          <li>Формирование смет для клиентов в&nbsp;Excel</li>
          <li>Ведение отчета план-факт по&nbsp;маржинальности объектов, составление отчетов с&nbsp;причинами
            несоответствия
            факта плану
          </li>
          <li>Взаимодействие с&nbsp;поставщиками и&nbsp;подрядчиками</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Высшее образование&nbsp;&mdash; строительное, техническое, экономическое + доп.сметное</li>
          <li>Обязательное знание ПО: MS&nbsp;Office (Excel, Word)</li>
          <li>Знание AutoCAD, ArchiCAD (приветствуется)</li>
          <li>Умение читать проектную и&nbsp;техническую документацию, определять объемы работ
            и&nbsp;материалов по&nbsp;чертежам</li>
          <li>Опыт работы по&nbsp;составлению смет на&nbsp;строительные и&nbsp;отделочные работы в&nbsp;сфере
            загородного домостроения не&nbsp;менее 2&nbsp;лет</li>
          <li>Опыт работы с&nbsp;каменными домами (приветствуется)</li>
          <li>Знание проектно-сметной документации</li>
          <li>Знание строительных процессов и&nbsp;технологий производства работ</li>
          <li>Ответственность, исполнительность, дисциплинированность, внимательность,
            самостоятельность, аккуратность, стрессоустойчивость, нацеленность на&nbsp;результат</li>
          <li>Работа в&nbsp;команде</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет
            компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 492
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberED  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"";
        // line 504
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Marketolog_Ekaterina_Dmitrenko.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 505
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Marketolog_Ekaterina_Dmitrenko.jpg");
        echo "\"
            alt=\"Ведущий Архитектор Mansio group — Елизавета Труб\" width=\"418\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Екатерина Дмитренко</dt>
            <dd class=\"member__dd  member__dd--post\">Маркетолог</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 523
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 530
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberET  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"";
        // line 542
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 543
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.jpg");
        echo "\"
            alt=\"Ведущий Архитектор Mansio group — Елизавета Труб\" width=\"418\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Елизавета Труб</dt>
            <dd class=\"member__dd  member__dd--post\">Ведущий Архитектор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 561
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 568
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberAdminDA  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"";
        // line 580
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 581
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.jpg");
        echo "\"
            alt=\"Генеральный директор Mansio group — Дмитрий Алимов\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Дмитрий Алимов</dt>
            <dd class=\"member__dd  member__dd--post\">Генеральный директор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 599
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 606
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberArchitectPA  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"";
        // line 618
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Arkhitektor_Polina_Avseeva.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 619
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Arkhitektor_Polina_Avseeva.jpg");
        echo "\" alt=\"Архитектор Mansio group — Полина Авсеева\"
            width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Полина Авсеева</dt>
            <dd class=\"member__dd  member__dd--post\">Архитектор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 637
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 644
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberBuilderVK  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"";
        // line 656
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Prorab_Vladimir_Korotkin.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 657
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Prorab_Vladimir_Korotkin.jpg");
        echo "\" alt=\"Прораб Mansio group — Владимир Короткин\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Владимир Короткин</dt>
            <dd class=\"member__dd  member__dd--post\">Прораб</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 674
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 681
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberConstructorIA  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"";
        // line 693
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 694
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.jpg");
        echo "\"
            alt=\"Помощник конструктора Mansio group — Иван Авсеев\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Иван Авсеев</dt>
            <dd class=\"member__dd  member__dd--post\">Помощник конструктора</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 712
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 719
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberConstructorSB  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"";
        // line 731
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Konstruktor_Sergej_Bagin.webp");
        echo " 1x\" type=\"image/webp\">
          <img src=\"";
        // line 732
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Konstruktor_Sergej_Bagin.jpg");
        echo "\" alt=\"Конструктор Mansio group — Сергей Багин\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Сергей Багин</dt>
            <dd class=\"member__dd  member__dd--post\">Конструктор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"";
        // line 749
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"";
        // line 756
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
\t<!-- Scripts -->
\t";
        // line 763
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 764
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\layouts\\default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  968 => 764,  964 => 763,  954 => 756,  944 => 749,  924 => 732,  920 => 731,  905 => 719,  895 => 712,  874 => 694,  870 => 693,  855 => 681,  845 => 674,  825 => 657,  821 => 656,  806 => 644,  796 => 637,  775 => 619,  771 => 618,  756 => 606,  746 => 599,  725 => 581,  721 => 580,  706 => 568,  696 => 561,  675 => 543,  671 => 542,  656 => 530,  646 => 523,  625 => 505,  621 => 504,  606 => 492,  545 => 434,  483 => 375,  432 => 327,  381 => 279,  331 => 232,  325 => 228,  321 => 227,  305 => 214,  268 => 180,  252 => 167,  215 => 133,  199 => 120,  177 => 101,  173 => 100,  159 => 89,  143 => 76,  105 => 41,  101 => 40,  87 => 29,  76 => 20,  72 => 19,  67 => 16,  65 => 15,  60 => 12,  56 => 11,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\" class=\"no-js\">

<head>
\t{% partial 'global/meta' %}
</head>

<body id=\"pageBody\">
\t<div id=\"siteWrapper\" class=\"wrapper\">
\t\t<!-- Header -->
\t\t{% partial 'global/header' %}

\t\t<!-- Content -->
\t\t<main id=\"pageMain\">
\t\t\t{% page %}
\t\t</main>

\t\t<!-- Footer -->
\t\t{% partial 'global/footer' %}
\t</div>

\t<div class=\"modal modal--preload modal--discuss  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
        <div class=\"action-call__inner\">
          <div class=\"person  action-call__person\">
            <div class=\"person__name-wrap\">
              <p class=\"person__name\">Илларионов Илья Николаевич</p>
              <p class=\"person__sub-name\">Главный архитектор</p>
            </div>
            <div class=\"person__foto-wrap action-call__person-foto\">
              <picture>
                <source srcset=\"{{ 'assets/images/content/manager.webp'|theme }} 1x\" type=\"image/webp\">
                <img src=\"{{ 'assets/images/content/manager.png'|theme }}\" width=\"651\"
                  alt=\"Фотография Главный архитектор Илларионов Илья Николаевич\">
              </picture>
            </div>
          </div>
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">Запишитесь на&nbsp;встречу<br>с&nbsp;архитектором Mansio Group</div>
            <p class=\"action-call__dsc\">Наш архитектор выслушает ваши пожелания, даст рекомендации и&nbsp;ответит
              на&nbsp;все вопросы</p>
            <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
              <script>
                ! function (a, m, o, c, r, m) {
                  a[o + c] = a[o + c] || {
                    setMeta: function (p) {
                      this.params = (this.params || []).concat([p])
                    }
                  }, a[o + r] = a[o + r] || function (f) {
                    a[o + r].f = (a[o + r].f || []).concat([f])
                  }, a[o + r]({
                    id: \"841105\",
                    hash: \"7996435f3912dc70d4a8cb313cf6b826\",
                    locale: \"ru\"
                  })
                }(window, 0, \"amo_forms_\", \"params\", \"load\");
              </script>
              <script id=\"amoforms_script_841105\" async=\"async\" charset=\"utf-8\"
                src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1632903968\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--registration-for-viewing  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
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
                <img src=\"{{ 'assets/images/content/manager-w.png'|theme }}\" width=\"704\"
                  alt=\"Фотография Проектный консультант Александра Бикова\">
              </picture>
            </div>
          </div>
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">Запись на&nbsp;просмотр строящихся<br>или готовых домов Mansio Group</div>
            <p class=\"action-call__dsc\">Мы&nbsp;свяжемся с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведем экскурсию
              по&nbsp;нашим объекта</p>
            <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
              <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:\"823750\",hash:\"e76b0394838a458bc0c9c429b22b83e2\",locale:\"ru\"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,\"amo_forms_\",\"params\",\"load\",\"loaded\");</script><script id=\"amoforms_script_823750\" async=\"async\" charset=\"utf-8\" src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1643030013\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--already-have   modal--fit-content   \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
        <div class=\"action-call__inner\">
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">У&nbsp;вас есть готовый проект?<br>Присылайте нам его.</div>
            <p class=\"action-call__dsc\">Проведем тщательную экспертизу, рассчитаем точную смету и&nbsp;сроки
              строительства</p>
            <div class=\"action-call__form-wrap  \">
              <script>
                ! function (a, m, o, c, r, m) {
                  a[o + c] = a[o + c] || {
                    setMeta: function (p) {
                      this.params = (this.params || []).concat([p])
                    }
                  }, a[o + r] = a[o + r] || function (f) {
                    a[o + r].f = (a[o + r].f || []).concat([f])
                  }, a[o + r]({
                    id: \"824437\",
                    hash: \"bc1d3d7136b6a981ba531b07a2f4df4f\",
                    locale: \"ru\"
                  })
                }(window, 0, \"amo_forms_\", \"params\", \"load\");
              </script>
              <script id=\"amoforms_script_824437\" async=\"async\" charset=\"utf-8\"
                src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629710154\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload  modal--back-call  modal--fit-content\">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"action-call\">
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
        <div class=\"action-call__inner\">
          <div class=\"action-call__right-col\">
            <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
            <div class=\"contacts-form__title\">Мы&nbsp;вам перезвоним</div>
            <p class=\"action-call__dsc\">В&nbsp;ближайшее время с&nbsp;вами свяжется персональный менеджер и&nbsp;ответит
              на&nbsp;интересующие вопросы</p>
            <div class=\"action-call__form-wrap  \">
              <script>
                ! function (a, m, o, c, r, m) {
                  a[o + c] = a[o + c] || {
                    setMeta: function (p) {
                      this.params = (this.params || []).concat([p])
                    }
                  }, a[o + r] = a[o + r] || function (f) {
                    a[o + r].f = (a[o + r].f || []).concat([f])
                  }, a[o + r]({
                    id: \"824308\",
                    hash: \"eb4c8a02bc8d0e34f40c0bf6717e14c2\",
                    locale: \"ru\"
                  })
                }(window, 0, \"amo_forms_\", \"params\", \"load\");
              </script>
              <script id=\"amoforms_script_824308\" async=\"async\" charset=\"utf-8\"
                src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629695953\"></script>
            </div>
          </div>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>

<div class=\"modal modal--preload modal--vacancyResponse   modal--fit-content   \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div style=\"padding: 20px\">
        <!-- TODO: вставить форму -->
       {% component 'vacancyResponse' %}
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy1  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Архитектор/инженер-архитектор/инженер-строитель с&nbsp;опытом проектирования
          малоэтажных
          каменных домов и&nbsp;коттеджей!</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Разработка проектной/рабочей документации с&nbsp;помощью <b>AUTODESK REVIT</b></li>
          <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений
            при
            конструктивной необходимости</li>
          <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
          <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Образование высшее, (инженер-архитектор, инженер-строитель)</li>
          <li>Опыт работы не&nbsp;менее 5&nbsp;лет в&nbsp;должности архитектора, инженера-проектировщика или конструктор
            (желательно именно в области малоэтажного монолитного&nbsp;/ каменного домостроения).</li>
          <li>Знание программном комплексе Revit (Autodesk) обязательно</li>
          <li>Коммуникабельность, целеустремленность, высокая трудоспособность</li>
          <li>Умение работать в&nbsp;сжатые сроки</li>
          <li>Приветствуется креативность и&nbsp;творческий подход</li>
          <li>Резюме предоставлять с&nbsp;портфолио.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy2  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Ведущий архитектор/инженер-архитектор/инженер-строитель с опытом проектирования
          малоэтажных
          каменных домов и коттеджей!</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Разработка проектной/рабочей документации с помощью <b>AUTODESK REVIT</b></li>
          <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений
            при
            конструктивной необходимости</li>
          <li>Организация работы отдела архитектуры, набор сотрудников, руководство,</li>
          <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
          <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Образование высшее, (инженер-архитектор, инженер-строитель)</li>
          <li>Опыт работы не&nbsp;менее 5&nbsp;лет в&nbsp;должности архитектора, инженера-проектировщика или конструктор
            (желательно именно в области малоэтажного монолитного&nbsp;/ каменного домостроения).</li>
          <li>Знание <b>программном комплексе Revit (Autodesk) обязательно</b></li>
          <li>Коммуникабельность, целеустремленность, высокая трудоспособность</li>
          <li>Умение работать в&nbsp;сжатые сроки</li>
          <li>Приветствуется креативность и&nbsp;творческий подход</li>
          <li>Резюме предоставлять с&nbsp;портфолио.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy3  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Конструктор</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Разработка проектных решений конструкций зданий.</li>
          <li>Оформление расчетно-пояснительной записки и&nbsp;графической части.</li>
          <li>Выполнение расчетов с&nbsp;применением современных программных средств.</li>
          <li>Расчет схем зданий (SCAD, ЛИРА и&nbsp;пр. продукты САПР).</li>
          <li>Рассмотрение и&nbsp;анализ проектной документации субподрядчиков.</li>
          <li>Составление замечаний и&nbsp;рекомендаций.</li>
          <li>Разработка рабочей документации с&nbsp;помощью <b>AUTODESK REVIT</b>.</li>
          <li>Выполнение поставленных задач главного инженера.</li>
          <li>Взаимодействие с&nbsp;производственно-техническим отделом.</li>
          <li>Ответственность за&nbsp;результаты и&nbsp;сроки.</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Опыт работы в&nbsp;проектировании строений из&nbsp;газобетона, теплой керамики и&nbsp;кирпича.</li>
          <li>Высшее профильное образование ПГС.</li>
          <li>Знание нормативной документации в&nbsp;сфере проектирования (разделы КЖ, КМ, КД), и&nbsp;соблюдение
            требований СП.</li>
          <li>Практический опыт конструктивных расчетов.</li>
          <li>Работа в&nbsp;программах MS&nbsp;Office, AutoCad, Revit, ЛИРА, ПК&nbsp;SCAD.</li>
          <li>Умение работать в&nbsp;сжатые сроки.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy4  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Прораб (загородное домостроение)</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Организацией и&nbsp;руководством производственно-хозяйственной деятельности на&nbsp;объекта;</li>
          <li>Производством строительно-монтажных работ в&nbsp;соответствии с&nbsp;проектной документацией,
            строительными нормами и правилами, техническими условиями и&nbsp;другими нормативными документами;</li>
          <li>Соблюдением норм точности и&nbsp;правил ведения строительных работ на&nbsp;объекте, утвержденных
            в&nbsp;компании;</li>
          <li>Соблюдением технологической последовательности производства строительно-монтажных работ на&nbsp;участке;
          </li>
          <li>Получением технической документации на&nbsp;строительство объектов;</li>
          <li>Ведением учета выполненных работ, оформление технической документации;</li>
          <li>Участием в&nbsp;сдаче заказчикам законченных строительством объектов, отдельных этапов и&nbsp;комплексов
            работ по возводимым объектам;</li>
          <li>Инструктажем рабочих, непосредственно на&nbsp;рабочем месте по&nbsp;технике безопасности выполняемых работ
          </li>
          <li>Применением технологической оснастки (лесов, подмостей, защитных приспособлений, креплений стенок
            котлованов и траншей, подкосов, кондукторов и&nbsp;других устройств), транспортных средств и&nbsp;средств
            защиты работников;</li>
          <li>Контролем за&nbsp;качеством и&nbsp;безопасностью выполняемых работ;</li>
          <li>Контролем техники безопасности и&nbsp;принятия мер к&nbsp;устранению выявленных недостатков, нарушений
            правил производственной санитарии, соблюдение рабочими инструкций по&nbsp;охране труда;
          <li>Обеспечением соблюдения работниками производственной и&nbsp;трудовой дисциплины.</li>
        </ul>
        <h4>Требование:</h4>
        <ul>
          <li>Образование высшее (ПГС);</li>
          <li>Наличие инструмента для проведения полного спектра работ;</li>
          <li>Опыт работы прорабом по&nbsp;производству общестроительных работ не&nbsp;менее 5&nbsp;лет;</li>
          <li>Опыт работы в&nbsp;деревянном домостроении от&nbsp;5&nbsp;лет;</li>
          <li>Опыт работ с&nbsp;газоблоком, керамическим блоком (porotherm);</li>
          <li>Знание правил по&nbsp;ОТ и&nbsp;ТБ;</li>
          <li>Знание СНиП, нормативных документов в&nbsp;строительстве.</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>Разъездной характер работ по&nbsp;Московской области;</li>
          <li>Возможность профессионального и&nbsp;карьерного роста;</li>
          <li>Тренинги по&nbsp;улучшению профессиональных навыков;</li>
          <li>Выплата премий за&nbsp;подачу и&nbsp;внедрение собственных идей, направленных на&nbsp;повышение качества
            работы компании;</li>
          <li>Оплата внешних курсов, тренингов, семинаров по&nbsp;повышению квалификации;</li>
          <li>Регулярные корпоративные мероприятия, проводимые полностью за&nbsp;счёт компании;</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--vacancy5  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <article class=\"vacancy__modal-content\">
        <h3 class=\"vacancy__title\">Сметчик</h3>
        <h4>Обязанности:</h4>
        <ul>
          <li>Составление смет в&nbsp;коммерческих расценках под индивидуальный проект дома на
            строительные и&nbsp;отделочные работы на&nbsp;основе проектных данных (эскизы, проекты,
            чертежи);</li>
          <li>Составление сметных расчетов без проектной документации по&nbsp;приблизительным количественным показателям
            (спецификации) и&nbsp;др.</li>
          <li>Проверка правильности составления смет расходов подрядными организациями;</li>
          <li>Расчет себестоимости обслуживания объектов по&nbsp;ФОТ</li>
          <li>Формирование смет для клиентов в&nbsp;Excel</li>
          <li>Ведение отчета план-факт по&nbsp;маржинальности объектов, составление отчетов с&nbsp;причинами
            несоответствия
            факта плану
          </li>
          <li>Взаимодействие с&nbsp;поставщиками и&nbsp;подрядчиками</li>
        </ul>
        <h4>Требования:</h4>
        <ul>
          <li>Высшее образование&nbsp;&mdash; строительное, техническое, экономическое + доп.сметное</li>
          <li>Обязательное знание ПО: MS&nbsp;Office (Excel, Word)</li>
          <li>Знание AutoCAD, ArchiCAD (приветствуется)</li>
          <li>Умение читать проектную и&nbsp;техническую документацию, определять объемы работ
            и&nbsp;материалов по&nbsp;чертежам</li>
          <li>Опыт работы по&nbsp;составлению смет на&nbsp;строительные и&nbsp;отделочные работы в&nbsp;сфере
            загородного домостроения не&nbsp;менее 2&nbsp;лет</li>
          <li>Опыт работы с&nbsp;каменными домами (приветствуется)</li>
          <li>Знание проектно-сметной документации</li>
          <li>Знание строительных процессов и&nbsp;технологий производства работ</li>
          <li>Ответственность, исполнительность, дисциплинированность, внимательность,
            самостоятельность, аккуратность, стрессоустойчивость, нацеленность на&nbsp;результат</li>
          <li>Работа в&nbsp;команде</li>
        </ul>
        <h4>Условия:</h4>
        <ul>
          <li>График работы: с&nbsp;10.00 до&nbsp;19.00&nbsp;/ 5/2</li>
          <li>Заработная плата рассматривается по&nbsp;результатам собеседования</li>
          <li>Возможность карьерного роста</li>
          <li>Возможность посещения профильных курсов повышения квалификации за&nbsp;счет
            компании</li>
          <li>Молодой дружный коллектив</li>
          <li>Трудоустройство согласно ТК&nbsp;РФ</li>
        </ul>
      </article>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberED  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"{{ 'assets/images/person/Marketolog_Ekaterina_Dmitrenko.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/person/Marketolog_Ekaterina_Dmitrenko.jpg'|theme }}\"
            alt=\"Ведущий Архитектор Mansio group — Елизавета Труб\" width=\"418\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Екатерина Дмитренко</dt>
            <dd class=\"member__dd  member__dd--post\">Маркетолог</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberET  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"{{ 'assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.jpg'|theme }}\"
            alt=\"Ведущий Архитектор Mansio group — Елизавета Труб\" width=\"418\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Елизавета Труб</dt>
            <dd class=\"member__dd  member__dd--post\">Ведущий Архитектор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказала 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberAdminDA  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"{{ 'assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.jpg'|theme }}\"
            alt=\"Генеральный директор Mansio group — Дмитрий Алимов\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Дмитрий Алимов</dt>
            <dd class=\"member__dd  member__dd--post\">Генеральный директор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberArchitectPA  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"{{ 'assets/images/person/Arkhitektor_Polina_Avseeva.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/person/Arkhitektor_Polina_Avseeva.jpg'|theme }}\" alt=\"Архитектор Mansio group — Полина Авсеева\"
            width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Полина Авсеева</dt>
            <dd class=\"member__dd  member__dd--post\">Архитектор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberBuilderVK  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"{{ 'assets/images/person/Prorab_Vladimir_Korotkin.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/person/Prorab_Vladimir_Korotkin.jpg'|theme }}\" alt=\"Прораб Mansio group — Владимир Короткин\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Владимир Короткин</dt>
            <dd class=\"member__dd  member__dd--post\">Прораб</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberConstructorIA  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"{{ 'assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.jpg'|theme }}\"
            alt=\"Помощник конструктора Mansio group — Иван Авсеев\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Иван Авсеев</dt>
            <dd class=\"member__dd  member__dd--post\">Помощник конструктора</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
<div class=\"modal modal--preload modal--memberConstructorSB  modal--responsive    \">
  <div class=\"modal__wrapper\">
    <div class=\"modal__overlay\"></div>
    <div class=\"modal__content\">
      <div class=\"member\">
        <picture class=\"member__picture\">
          <source srcset=\"{{ 'assets/images/person/Konstruktor_Sergej_Bagin.webp'|theme }} 1x\" type=\"image/webp\">
          <img src=\"{{ 'assets/images/person/Konstruktor_Sergej_Bagin.jpg'|theme }}\" alt=\"Конструктор Mansio group — Сергей Багин\" width=\"500\">
        </picture>
        <div class=\"member__text-wrapper\">
          <p class=\"member__caption\">Профиль сотрудника</p>
          <dl class=\"member__dl\">
            <dt class=\"member__dt  member__dt--name\">Сергей Багин</dt>
            <dd class=\"member__dd  member__dd--post\">Конструктор</dd>
            <dt class=\"member__dt  member__dt--email\">email:</dt>
            <dd class=\"member__dd\"><a>📧 email адрес засекретили</a></dd>
            <dt class=\"member__dt\">Информация</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
            <dt class=\"member__dt\">Образование</dt>
            <dd class=\"member__dd\">О себе пока не рассказал 😟</dd>
          </dl>
        </div>
        <div class=\"brand-flag\">
          <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
          </svg>
        </div>
      </div>
      <!-- TODO: стилизовать -->
      <button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
        <svg width=\"15\" height=\"15\">
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
        </svg>
      </button>
    </div>
  </div>
</div>
\t<!-- Scripts -->
\t{% partial 'global/scripts' %}

</body>

</html>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\layouts\\default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 5, "page" => 15, "component" => 227);
        static $filters = array("theme" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page', 'component'],
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