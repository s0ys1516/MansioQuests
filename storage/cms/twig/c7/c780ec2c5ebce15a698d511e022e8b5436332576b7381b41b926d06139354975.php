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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\vacancy-list.htm */
class __TwigTemplate_4a4e85334e5845b2167bb1960e5bcf3fb223c291eece93fa98a9b22c81ae3f37 extends \Twig\Template
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
        echo "<ul class=\"vacancy-list\">

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Архитектор/инженер-архитектор/инженер-строитель с опытом проектирования малоэтажных
      каменных домов и коттеджей!</b>
    <div class=\"vacancy-list__dsc\">
      <ul>
        <li>Разработка проектной/рабочей документации с&nbsp;помощью <b>AUTODESK REVIT</b></li>
        <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений при
          конструктивной необходимости</li>
        <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
        <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
      </ul>
    </div>
    ";
        // line 15
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Подробнее о&nbsp;вакансии"        ;
        $context['__cms_partial_params']['mod'] = "blue"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancy1"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Оставить отклик"        ;
        $context['__cms_partial_params']['mod'] = "borders"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancyResponse"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "  </li>

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Ведущий архитектор/инженер-архитектор/инженер-строитель с опытом проектирования
      малоэтажных каменных домов и коттеджей!</b>
    <div class=\"vacancy-list__dsc\">
      <ul>
        <li>Разработка проектной/рабочей документации с помощью <b>AUTODESK REVIT</b></li>
        <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений при
          конструктивной необходимости</li>
        <li>Организация работы отдела архитектуры, набор сотрудников, руководство,</li>
        <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
        <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
      </ul>
    </div>
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Подробнее о&nbsp;вакансии"        ;
        $context['__cms_partial_params']['mod'] = "blue"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancy2"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Оставить отклик"        ;
        $context['__cms_partial_params']['mod'] = "borders"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancyResponse"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "  </li>

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Конструктор</b>
    <div class=\"vacancy-list__dsc\">
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
    </div>
    ";
        // line 52
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Подробнее о&nbsp;вакансии"        ;
        $context['__cms_partial_params']['mod'] = "blue"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancy3"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Оставить отклик"        ;
        $context['__cms_partial_params']['mod'] = "borders"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancyResponse"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "  </li>

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Сметчик</b>
    <div class=\"vacancy-list__dsc\">
      <ul>
        <li>Составление смет в&nbsp;коммерческих расценках под индивидуальный проект дома на
          строительные и&nbsp;отделочные работы на&nbsp;основе проектных данных (эскизы, проекты,
          чертежи);</li>
        <li>Составление сметных расчетов без проектной документации по&nbsp;приблизительным количественным показателям
          (спецификации) и&nbsp;др.</li>
        <li>Проверка правильности составления смет расходов подрядными организациями;</li>
        <li>Расчет себестоимости обслуживания объектов по&nbsp;ФОТ</li>
        <li>Формирование смет для клиентов в&nbsp;Excel</li>
        <li>Ведение отчета план-факт по&nbsp;маржинальности объектов, составление отчетов с&nbsp;причинами несоответствия
          факта плану
        </li>
        <li>Взаимодействие с&nbsp;поставщиками и&nbsp;подрядчиками</li>
      </ul>
    </div>
    ";
        // line 74
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Подробнее о&nbsp;вакансии"        ;
        $context['__cms_partial_params']['mod'] = "blue"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancy5"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Оставить отклик"        ;
        $context['__cms_partial_params']['mod'] = "borders"        ;
        $context['__cms_partial_params']['bemElement'] = "vacancy-list__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancyResponse"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\vacancy-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 76,  173 => 75,  165 => 74,  143 => 54,  134 => 53,  126 => 52,  106 => 34,  97 => 33,  89 => 32,  72 => 17,  63 => 16,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"vacancy-list\">

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Архитектор/инженер-архитектор/инженер-строитель с опытом проектирования малоэтажных
      каменных домов и коттеджей!</b>
    <div class=\"vacancy-list__dsc\">
      <ul>
        <li>Разработка проектной/рабочей документации с&nbsp;помощью <b>AUTODESK REVIT</b></li>
        <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений при
          конструктивной необходимости</li>
        <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
        <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
      </ul>
    </div>
    {% partial 'elements/btn' text='Подробнее о&nbsp;вакансии' mod='blue' bemElement='vacancy-list__btn' modal='vacancy1' %}
    {% partial 'elements/btn' text='Оставить отклик' mod='borders' bemElement='vacancy-list__btn' modal='vacancyResponse' %}
  </li>

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Ведущий архитектор/инженер-архитектор/инженер-строитель с опытом проектирования
      малоэтажных каменных домов и коттеджей!</b>
    <div class=\"vacancy-list__dsc\">
      <ul>
        <li>Разработка проектной/рабочей документации с помощью <b>AUTODESK REVIT</b></li>
        <li>Применение типовых технологических решений, используемых в&nbsp;компании и&nbsp;разработка новых решений при
          конструктивной необходимости</li>
        <li>Организация работы отдела архитектуры, набор сотрудников, руководство,</li>
        <li>Выявление современных тенденций архитектуры, разработка концепции развития отдела</li>
        <li>Ответственность за&nbsp;результаты и&nbsp;сроки</li>
      </ul>
    </div>
    {% partial 'elements/btn' text='Подробнее о&nbsp;вакансии' mod='blue' bemElement='vacancy-list__btn' modal='vacancy2' %}
    {% partial 'elements/btn' text='Оставить отклик' mod='borders' bemElement='vacancy-list__btn' modal='vacancyResponse' %}
  </li>

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Конструктор</b>
    <div class=\"vacancy-list__dsc\">
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
    </div>
    {% partial 'elements/btn' text='Подробнее о&nbsp;вакансии' mod='blue' bemElement='vacancy-list__btn' modal='vacancy3' %}
    {% partial 'elements/btn' text='Оставить отклик' mod='borders' bemElement='vacancy-list__btn' modal='vacancyResponse' %}
  </li>

  <li class=\"vacancy-list__item\">
    <b class=\"vacancy__title\">Сметчик</b>
    <div class=\"vacancy-list__dsc\">
      <ul>
        <li>Составление смет в&nbsp;коммерческих расценках под индивидуальный проект дома на
          строительные и&nbsp;отделочные работы на&nbsp;основе проектных данных (эскизы, проекты,
          чертежи);</li>
        <li>Составление сметных расчетов без проектной документации по&nbsp;приблизительным количественным показателям
          (спецификации) и&nbsp;др.</li>
        <li>Проверка правильности составления смет расходов подрядными организациями;</li>
        <li>Расчет себестоимости обслуживания объектов по&nbsp;ФОТ</li>
        <li>Формирование смет для клиентов в&nbsp;Excel</li>
        <li>Ведение отчета план-факт по&nbsp;маржинальности объектов, составление отчетов с&nbsp;причинами несоответствия
          факта плану
        </li>
        <li>Взаимодействие с&nbsp;поставщиками и&nbsp;подрядчиками</li>
      </ul>
    </div>
    {% partial 'elements/btn' text='Подробнее о&nbsp;вакансии' mod='blue' bemElement='vacancy-list__btn' modal='vacancy5' %}
    {% partial 'elements/btn' text='Оставить отклик' mod='borders' bemElement='vacancy-list__btn' modal='vacancyResponse' %}
  </li>
</ul>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\vacancy-list.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 15);
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
