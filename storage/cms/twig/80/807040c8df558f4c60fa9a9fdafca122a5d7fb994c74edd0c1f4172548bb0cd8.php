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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\vakansii.htm */
class __TwigTemplate_5c926c0b4248bde9a2681c2d82e3c52d36a71c3500139338f42b4757c045fe7d extends \Twig\Template
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
        $context['__cms_partial_params']['bgClass'] = "vacancy"        ;
        $context['__cms_partial_params']['title'] = "Вакансии"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/first-screen"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"container\">
        <div class=\"tabs  vacancy\">
          <ul class=\"tabs__list nav nav-tabs bemParent__tabs-list\" id=\"navTabsList\" role=\"tablist\">
            <li class=\"tabs__list-item bemParent__tab-wrap\" role=\"presentation\">

              <button class=\"tabs__btn active bemParent__tab\" id=\"officeTab\" type=\"button\" role=\"tab\"
                aria-controls=\"officePane\" aria-selected=\"true\" data-bs-toggle=\"tab\" data-bs-target=\"#officePane\">
                Офисные вакансии
              </button>
            </li>
            <li class=\"tabs__list-item bemParent__tab-wrap\" role=\"presentation\">

              <button class=\"tabs__btn bemParent__tab\" id=\"builderTab\" type=\"button\" role=\"tab\"
                aria-controls=\"builderPane\" aria-selected=\"true\" data-bs-toggle=\"tab\" data-bs-target=\"#builderPane\">
                Бригадам и&nbsp;прорабам
              </button>
            </li>

          </ul>

          <div class=\"vacancy__tabs-content\">
            <section class=\"tabs__pane active\" id=\"officePane\" role=\"tabpanel\" aria-labelledby=\"officeTab\">
              <h2 class=\"visually-hidden\">Вакансии в штат компании Mansio Group</h2>
              <div class=\"bemParent__section\">
              \t
              \t";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/vacancy-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "
              </div>
            </section>

            <section class=\"tabs__pane\" id=\"builderPane\" role=\"tabpanel\" aria-labelledby=\"builderTab\">
              <div class=\"bemParent__section\">
                <ul class=\"vacancy-list\">
                    <li class=\"vacancy-list__item\">
                      <b class=\"vacancy__title\">Прораб (загородное домостроение)</b>
                      <div class=\"vacancy-list__dsc\">
                        <ul>
                          <li>Организацией и&nbsp;руководством производственно-хозяйственной деятельности на&nbsp;объекта;</li>
                          <li>Производством строительно-монтажных работ в&nbsp;соответствии с&nbsp;проектной документацией, строительными
                            нормами и правилами, техническими условиями и&nbsp;другими нормативными документами;</li>
                          <li>Соблюдением норм точности и&nbsp;правил ведения строительных работ на&nbsp;объекте, утвержденных
                            в&nbsp;компании;
                          </li>
                          <li>Соблюдением технологической последовательности производства строительно-монтажных работ на&nbsp;участке;
                          </li>
                          <li>Получением технической документации на&nbsp;строительство объектов;</li>
                          <li>Ведением учета выполненных работ, оформление технической документации;</li>
                          <li>Участием в&nbsp;сдаче заказчикам законченных строительством объектов, отдельных этапов и&nbsp;комплексов
                            работ по
                            возводимым объектам;</li>
                          <li>Инструктажем рабочих, непосредственно на&nbsp;рабочем месте по&nbsp;технике безопасности выполняемых работ
                          </li>
                          <li>Применением технологической оснастки (лесов, подмостей, защитных приспособлений, креплений стенок котлованов
                            и
                            траншей, подкосов, кондукторов и&nbsp;других устройств), транспортных средств и&nbsp;средств защиты
                            работников;</li>
                          <li>Контролем за&nbsp;качеством и&nbsp;безопасностью выполняемых работ;</li>
                          <li>Контролем техники безопасности и&nbsp;принятия мер к&nbsp;устранению выявленных недостатков, нарушений
                            правил
                            производственной санитарии, соблюдение рабочими инструкций по&nbsp;охране труда;
                          <li>Обеспечением соблюдения работниками производственной и&nbsp;трудовой дисциплины.</li>
                        </ul>
                      </div>
                      ";
        // line 66
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Подробнее о&nbsp;вакансии"        ;
        $context['__cms_partial_params']['mod'] = "blue"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancy4"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "                      
                      ";
        // line 68
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Оставить отклик"        ;
        $context['__cms_partial_params']['mod'] = "borders"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancyResponse"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "
                    </li>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\vakansii.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 69,  127 => 68,  124 => 67,  116 => 66,  77 => 29,  73 => 28,  45 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'sections/first-screen' bgClass='vacancy' title='Вакансии' %}

<div class=\"container\">
        <div class=\"tabs  vacancy\">
          <ul class=\"tabs__list nav nav-tabs bemParent__tabs-list\" id=\"navTabsList\" role=\"tablist\">
            <li class=\"tabs__list-item bemParent__tab-wrap\" role=\"presentation\">

              <button class=\"tabs__btn active bemParent__tab\" id=\"officeTab\" type=\"button\" role=\"tab\"
                aria-controls=\"officePane\" aria-selected=\"true\" data-bs-toggle=\"tab\" data-bs-target=\"#officePane\">
                Офисные вакансии
              </button>
            </li>
            <li class=\"tabs__list-item bemParent__tab-wrap\" role=\"presentation\">

              <button class=\"tabs__btn bemParent__tab\" id=\"builderTab\" type=\"button\" role=\"tab\"
                aria-controls=\"builderPane\" aria-selected=\"true\" data-bs-toggle=\"tab\" data-bs-target=\"#builderPane\">
                Бригадам и&nbsp;прорабам
              </button>
            </li>

          </ul>

          <div class=\"vacancy__tabs-content\">
            <section class=\"tabs__pane active\" id=\"officePane\" role=\"tabpanel\" aria-labelledby=\"officeTab\">
              <h2 class=\"visually-hidden\">Вакансии в штат компании Mansio Group</h2>
              <div class=\"bemParent__section\">
              \t
              \t{% partial 'elements/vacancy-list' %}

              </div>
            </section>

            <section class=\"tabs__pane\" id=\"builderPane\" role=\"tabpanel\" aria-labelledby=\"builderTab\">
              <div class=\"bemParent__section\">
                <ul class=\"vacancy-list\">
                    <li class=\"vacancy-list__item\">
                      <b class=\"vacancy__title\">Прораб (загородное домостроение)</b>
                      <div class=\"vacancy-list__dsc\">
                        <ul>
                          <li>Организацией и&nbsp;руководством производственно-хозяйственной деятельности на&nbsp;объекта;</li>
                          <li>Производством строительно-монтажных работ в&nbsp;соответствии с&nbsp;проектной документацией, строительными
                            нормами и правилами, техническими условиями и&nbsp;другими нормативными документами;</li>
                          <li>Соблюдением норм точности и&nbsp;правил ведения строительных работ на&nbsp;объекте, утвержденных
                            в&nbsp;компании;
                          </li>
                          <li>Соблюдением технологической последовательности производства строительно-монтажных работ на&nbsp;участке;
                          </li>
                          <li>Получением технической документации на&nbsp;строительство объектов;</li>
                          <li>Ведением учета выполненных работ, оформление технической документации;</li>
                          <li>Участием в&nbsp;сдаче заказчикам законченных строительством объектов, отдельных этапов и&nbsp;комплексов
                            работ по
                            возводимым объектам;</li>
                          <li>Инструктажем рабочих, непосредственно на&nbsp;рабочем месте по&nbsp;технике безопасности выполняемых работ
                          </li>
                          <li>Применением технологической оснастки (лесов, подмостей, защитных приспособлений, креплений стенок котлованов
                            и
                            траншей, подкосов, кондукторов и&nbsp;других устройств), транспортных средств и&nbsp;средств защиты
                            работников;</li>
                          <li>Контролем за&nbsp;качеством и&nbsp;безопасностью выполняемых работ;</li>
                          <li>Контролем техники безопасности и&nbsp;принятия мер к&nbsp;устранению выявленных недостатков, нарушений
                            правил
                            производственной санитарии, соблюдение рабочими инструкций по&nbsp;охране труда;
                          <li>Обеспечением соблюдения работниками производственной и&nbsp;трудовой дисциплины.</li>
                        </ul>
                      </div>
                      {% partial 'elements/btn' text='Подробнее о&nbsp;вакансии' mod='blue' bemElement='vacancy-list__btn' modal='vacancy4' %}
                      
                      {% partial 'elements/btn' text='Оставить отклик' mod='borders' bemElement='vacancy-list__btn' modal='vacancyResponse' %}

                    </li>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\vakansii.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
