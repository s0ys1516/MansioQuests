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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\o-nas.htm */
class __TwigTemplate_ee3855df30fb609c6b24230421075ac652a7a52630adaf90eccedfa210fdb00c extends \Twig\Template
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
        $context['__cms_partial_params']['title'] = "О&nbsp;компании Mansio Group"        ;
        $context['__cms_partial_params']['bgClass'] = "about"        ;
        $context['__cms_partial_params']['dsc'] = ($context["dsc"] ?? null)        ;
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
      <p>Современная технологичная компания, которая проектирует и строит под ключ каменные дома для частного и
        коммерческого использования.</p>
      <p>История компании началась с небольшой строительной монтажной фирмы, которая выполняла государственные
        контракты. В 2019 году мы выполнили несколько проектов по строительству частных домов. В результате начали
        поступать заказы по частному строительству по рекомендациям заказчиков своим друзьям и близким.</p>
      <p>Спрос рождает предложение, поэтому было принято решение о выделении в отдельную структуру и развитии
        строительной проектной компании, которая получила название <span class=\"logo-brand\">MANSIO GROUP</span>.</p>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-1.webp");
        echo " 1x\" type=\"image/webp\">
      <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-1.jpg");
        echo "\" width=\"884\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
<section class=\"about-item  about-item--invert\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Mansio сегодня</h2>
      <p class=\"about-item__lead\"><span class=\"logo-brand\">MANSIO GROUP</span> сегодня обладает ресурсами, позволяющими
        окружать клиентов заботой, вниманием и&nbsp;уверенностью в&nbsp;том, что процесс проектирования
        и&nbsp;строительства может быть простым и&nbsp;комфортным.</p>
      <p>Компания имеет полный штат квалифицированных специалистов: архитекторов, конструкторов, инженеров, дизайнеров,
        службу инженеров технического надзора и&nbsp;бригады строителей, что позволяет выполнить комплекс
        от&nbsp;проектирования до&nbsp;ландшафтного дизайна и&nbsp;комплектации мебелью.</p>
      <p>Все усилия команды нацелены на&nbsp;то, чтобы процесс строительства проходил комфортно и&nbsp;не&nbsp;отнимал
        ресурсы клиента на&nbsp;поиск специалистов, подбор материалов, контроль работ на&nbsp;участке.
        Мы&nbsp;развеиваем стереотип о&nbsp;том, что строительство дома&nbsp;&mdash; это сложная и&nbsp;нервная
        процедура для заказчика.</p>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-2.webp");
        echo "\" type=\"image/webp\">
      <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-2.jpg");
        echo "\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
<section class=\"about-item  about-item--md-pb-0\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Наш постулат</h2>
      <ul>
        <li>
          <b class=\"text-metalic-blue\">Архитектура&nbsp;&mdash;</b> внимание к деталям, применение современных архитектурных и дизайнерских
          решений
        </li>
        <li>
          <b class=\"text-metalic-blue\">Строительство&nbsp;&mdash;</b> соблюдение технологий, все строительные и монтажные процессы соответствуют
          строительным нормам и правилам
        </li>
        <li>
          <b class=\"text-metalic-blue\">Тройной контроль качества&nbsp;&mdash;</b> бригадир, инженер проекта, инженер технадзора. Иногда
          на объекты приезжают представители заводов производителей строительных материалов
        </li>
      </ul>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-3.webp");
        echo "\" type=\"image/webp\">
      <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-3.jpg");
        echo "\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/row-alert"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "<section class=\"about-item  about-item--md-pb-0\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Как происходит процесс сотрудничества с&nbsp;нами</h2>
      <p>Мы&nbsp;сделали процесс взаимодействия с&nbsp;нами максимально комфортным.</p>
      <p>На&nbsp;каждом этапе вас сопровождает персональный менеджер, который контролирует работу профильных
        специалистов и&nbsp;всегда в&nbsp;курсе, что происходит на&nbsp;вашем объекте.</p>
      <p>Отчеты, вопросы, важную информацию по&nbsp;ходу строительства менеджер отправляет вам на&nbsp;почту или
        в&nbsp;удобный мессенджер.</p>
      <p>Помимо этого, есть возможность 24/7 следить за&nbsp;ходом работ на&nbsp;объекте по&nbsp;камерам
        видеонаблюдения.</p>
        ";
        // line 83
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['href'] = "/cotrudnichestvo"        ;
        $context['__cms_partial_params']['text'] = "Подробнее о&nbsp;сотрудничестве"        ;
        $context['__cms_partial_params']['mod'] = "blue"        ;
        $context['__cms_partial_params']['bemElement'] = "about-item__btn"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-4.webp");
        echo "\" type=\"image/webp\">
      <img src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/about-content-4.jpg");
        echo "\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
<!-- TODO: Сделать нативную форму -->
<!-- @@include('../row-form/row-form.html', {
  \"title\": \"Мы&nbsp;готовы к&nbsp;сотрудничеству!\",
  \"subtitle\": \"Обратитесь к&nbsp;нашим специалистам за&nbsp;консультацией\",
  \"buttonText\": \"Назначить встречу\"
}) -->
<section class=\"about-item about-item--blue\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Наша команда</h2>
      <p><span class=\"logo-brand\">MANSIO GROUP</span> обладает важным ресурсом&nbsp;&mdash; большой и&nbsp;дружной
        командой профессионалов своего любимого дела, ориентированных на&nbsp;результат и&nbsp;высокое качество
        предоставляемых услуг.</p>
      <p>Архитекторы, дизайнеры, инженеры и&nbsp;строители MANSIO обладают профильным образованием и&nbsp;опытом работы
        не&nbsp;менее 5&nbsp;лет. Специалисты разных структур работают сообща, учитывают задачи друг друга
        и&nbsp;своевременно обсуждают актуальные вопросы.</p>
      <p>По&nbsp;итогу клиент получает дом, в&nbsp;котором всё продумано до&nbsp;мельчайших деталей.</p>
      ";
        // line 109
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['href'] = "/team"        ;
        $context['__cms_partial_params']['text'] = "Подробнее о&nbsp;сотрудниках"        ;
        $context['__cms_partial_params']['bemElement'] = "about-item__btn"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/team.webp");
        echo "\" type=\"image/webp\">
      <img src=\" ";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/team.jpg");
        echo "\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\" loading=\"lazy\">
    </picture>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\o-nas.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 113,  209 => 112,  205 => 110,  198 => 109,  173 => 87,  169 => 86,  165 => 84,  157 => 83,  144 => 72,  140 => 71,  132 => 66,  128 => 65,  100 => 40,  96 => 39,  72 => 18,  68 => 17,  55 => 6,  51 => 5,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'sections/first-screen' title='О&nbsp;компании Mansio Group' bgClass='about' dsc=dsc %}

<section class=\"about-item  about-item--brand\">
  <div class=\"about-item__inner\">
    {% partial 'elements/brand-flag' %}
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Mansio Group</h2>
      <p>Современная технологичная компания, которая проектирует и строит под ключ каменные дома для частного и
        коммерческого использования.</p>
      <p>История компании началась с небольшой строительной монтажной фирмы, которая выполняла государственные
        контракты. В 2019 году мы выполнили несколько проектов по строительству частных домов. В результате начали
        поступать заказы по частному строительству по рекомендациям заказчиков своим друзьям и близким.</p>
      <p>Спрос рождает предложение, поэтому было принято решение о выделении в отдельную структуру и развитии
        строительной проектной компании, которая получила название <span class=\"logo-brand\">MANSIO GROUP</span>.</p>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"{{ 'assets/images/content/about-content-1.webp'|theme }} 1x\" type=\"image/webp\">
      <img src=\"{{ 'assets/images/content/about-content-1.jpg'|theme }}\" width=\"884\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
<section class=\"about-item  about-item--invert\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Mansio сегодня</h2>
      <p class=\"about-item__lead\"><span class=\"logo-brand\">MANSIO GROUP</span> сегодня обладает ресурсами, позволяющими
        окружать клиентов заботой, вниманием и&nbsp;уверенностью в&nbsp;том, что процесс проектирования
        и&nbsp;строительства может быть простым и&nbsp;комфортным.</p>
      <p>Компания имеет полный штат квалифицированных специалистов: архитекторов, конструкторов, инженеров, дизайнеров,
        службу инженеров технического надзора и&nbsp;бригады строителей, что позволяет выполнить комплекс
        от&nbsp;проектирования до&nbsp;ландшафтного дизайна и&nbsp;комплектации мебелью.</p>
      <p>Все усилия команды нацелены на&nbsp;то, чтобы процесс строительства проходил комфортно и&nbsp;не&nbsp;отнимал
        ресурсы клиента на&nbsp;поиск специалистов, подбор материалов, контроль работ на&nbsp;участке.
        Мы&nbsp;развеиваем стереотип о&nbsp;том, что строительство дома&nbsp;&mdash; это сложная и&nbsp;нервная
        процедура для заказчика.</p>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"{{ 'assets/images/content/about-content-2.webp'|theme }}\" type=\"image/webp\">
      <img src=\"{{ 'assets/images/content/about-content-2.jpg'|theme }}\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
<section class=\"about-item  about-item--md-pb-0\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Наш постулат</h2>
      <ul>
        <li>
          <b class=\"text-metalic-blue\">Архитектура&nbsp;&mdash;</b> внимание к деталям, применение современных архитектурных и дизайнерских
          решений
        </li>
        <li>
          <b class=\"text-metalic-blue\">Строительство&nbsp;&mdash;</b> соблюдение технологий, все строительные и монтажные процессы соответствуют
          строительным нормам и правилам
        </li>
        <li>
          <b class=\"text-metalic-blue\">Тройной контроль качества&nbsp;&mdash;</b> бригадир, инженер проекта, инженер технадзора. Иногда
          на объекты приезжают представители заводов производителей строительных материалов
        </li>
      </ul>
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"{{ 'assets/images/content/about-content-3.webp'|theme }}\" type=\"image/webp\">
      <img src=\"{{ 'assets/images/content/about-content-3.jpg'|theme }}\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
{% partial 'elements/row-alert' %}
<section class=\"about-item  about-item--md-pb-0\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Как происходит процесс сотрудничества с&nbsp;нами</h2>
      <p>Мы&nbsp;сделали процесс взаимодействия с&nbsp;нами максимально комфортным.</p>
      <p>На&nbsp;каждом этапе вас сопровождает персональный менеджер, который контролирует работу профильных
        специалистов и&nbsp;всегда в&nbsp;курсе, что происходит на&nbsp;вашем объекте.</p>
      <p>Отчеты, вопросы, важную информацию по&nbsp;ходу строительства менеджер отправляет вам на&nbsp;почту или
        в&nbsp;удобный мессенджер.</p>
      <p>Помимо этого, есть возможность 24/7 следить за&nbsp;ходом работ на&nbsp;объекте по&nbsp;камерам
        видеонаблюдения.</p>
        {% partial 'elements/btn' href=\"/cotrudnichestvo\" text='Подробнее о&nbsp;сотрудничестве' mod='blue' bemElement='about-item__btn' %}
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"{{ 'assets/images/content/about-content-4.webp'|theme }}\" type=\"image/webp\">
      <img src=\"{{ 'assets/images/content/about-content-4.jpg'|theme }}\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\"
        loading=\"lazy\">
    </picture>
  </div>
</section>
<!-- TODO: Сделать нативную форму -->
<!-- @@include('../row-form/row-form.html', {
  \"title\": \"Мы&nbsp;готовы к&nbsp;сотрудничеству!\",
  \"subtitle\": \"Обратитесь к&nbsp;нашим специалистам за&nbsp;консультацией\",
  \"buttonText\": \"Назначить встречу\"
}) -->
<section class=\"about-item about-item--blue\">
  <div class=\"about-item__inner\">
    <div class=\"about-item__text\">
      <h2 class=\"about-item__title\">Наша команда</h2>
      <p><span class=\"logo-brand\">MANSIO GROUP</span> обладает важным ресурсом&nbsp;&mdash; большой и&nbsp;дружной
        командой профессионалов своего любимого дела, ориентированных на&nbsp;результат и&nbsp;высокое качество
        предоставляемых услуг.</p>
      <p>Архитекторы, дизайнеры, инженеры и&nbsp;строители MANSIO обладают профильным образованием и&nbsp;опытом работы
        не&nbsp;менее 5&nbsp;лет. Специалисты разных структур работают сообща, учитывают задачи друг друга
        и&nbsp;своевременно обсуждают актуальные вопросы.</p>
      <p>По&nbsp;итогу клиент получает дом, в&nbsp;котором всё продумано до&nbsp;мельчайших деталей.</p>
      {% partial 'elements/btn' href=\"/team\" text='Подробнее о&nbsp;сотрудниках' bemElement='about-item__btn' %}
    </div>
    <picture class=\"about-item__picture\">
      <source srcset=\"{{ 'assets/images/content/team.webp'|theme }}\" type=\"image/webp\">
      <img src=\" {{ 'assets/images/content/team.jpg'|theme }}\" width=\"885\" alt=\"Небольшая строительная монтажная фирма\" loading=\"lazy\">
    </picture>
    </div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\o-nas.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("theme" => 17);
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
