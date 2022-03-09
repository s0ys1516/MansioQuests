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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\content\static-pages\index.htm */
class __TwigTemplate_eb08e5deb63771a60e064a269295e9a62946a4d9d1133a462c26ac9391ad5809 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('approachMain'        );
        // line 2
        echo "<h2>Mansio сервис</h2>

<p>Мы готовы к общению в удобное для вас время, в том числе по вечерам и в выходные.</p>

<p>Первую консультацию даем по телефону или в мессенджере. На вторую консультацию приглашаем в наш офис или организовываем выезд специалистов в удобную вам локацию. По итогу консультаций готовим подробное предложение с объемом, сроками и стоимостью работ.</p>

<p>В договоре отражаем оговоренные цены, при его подписании закрепляем за вами персонального менеджера, который будет всегда на связи и проконтролирует все этапы строительства дома.</p>

<p>В ходе реализации проекта важная информация будет представлена в вашем личном кабинете и продублирована в удобный мессенджер.</p>

<p>У вас будет доступ к:</p>

<ul>
\t<li>Юридической и проектной документации;</li>
\t<li>Отчетам по этапам;</li>
\t<li>Графику оплат;</li>
\t<li>Срокам исполнения работ;</li>
\t<li>Камерам видеонаблюдения 24/7</li>
</ul>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 23
        echo "
";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('productTabDsc1'        );
        // line 25
        echo "<p>Строим дома из&nbsp;теплой керамики Porotherm крупнейшего мирового производителя Wienerberger&nbsp;AG.</p>

<p>Porotherm&nbsp;— это современное исполнение «красного кирпича». Мы подробно рассказываем о его преимуществах на своем YouTube-канале.</p>

<p>Кирпичные блоки Porotherm отличаются повышенной прочностью и&nbsp;высокими тепло- и&nbsp;звукоизоляционными свойствами. На данный момент это один из лучших материалов для строительства дома на рынке.</p>

";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 32
        echo "
";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('productTabDsc2'        );
        // line 34
        echo "<p>Отдаем предпочтение газобетонным блокам автоклавного твердения YTONG®, также используем в строительстве газоблок других проверенных производителей.</p>

<p>Газоблок произвоится из натуральных компонентов и во всем мире признан экологически чистым, нетоксичным строительным материалом.</p>

<p>В Германии блоки YTONG® являются обладателем сертификата IBU немецкого Института Строительства и окружающей среды, а также международного знака NaturePlus.</p>

";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 41
        echo "
";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('productTabDsc3'        );
        // line 43
        echo "<p>Проектируем и&nbsp;строим дома из&nbsp;классического кирпича.</p>

<p>Классический кирпич – материал, давно завоевавший доверие потребителей. Однако, при строительстве дома классическим кирпичом важно учитывать много технических аспектов.</p>

<p>Подробнее о нюансах строительства из классического кирпича мы расскажем на встрече в MANSIO GROUP.</p>

";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 50
        echo "
";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('productTabDsc4'        );
        // line 52
        echo "<p>Монолитная технология строительства дает возможность реализовать самые смелые и&nbsp;сложные архитектурные решения (арки, эркеры, колонны, овальные и&nbsp;многоугольные детали конструкции).</p>

<p>Монолитное строительство позволяет возводить дома повышенной устойчивости, которые стойко перенесут сильные ураганы и землетрясения.</p>

<p>Также <span class=\"logo-brand\">MANSIO GROUP</span> проектирует и строит бункеры для частных лиц по монолитной технологии.</p>

<p>В последние годы данная тенденция в&nbsp;частном строительстве набирает популярность.</p>

";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\content\\static-pages\\index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  115 => 52,  113 => 51,  110 => 50,  108 => 42,  100 => 43,  98 => 42,  95 => 41,  93 => 33,  85 => 34,  83 => 33,  80 => 32,  78 => 24,  70 => 25,  68 => 24,  65 => 23,  63 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put approachMain %}
<h2>Mansio сервис</h2>

<p>Мы готовы к общению в удобное для вас время, в том числе по вечерам и в выходные.</p>

<p>Первую консультацию даем по телефону или в мессенджере. На вторую консультацию приглашаем в наш офис или организовываем выезд специалистов в удобную вам локацию. По итогу консультаций готовим подробное предложение с объемом, сроками и стоимостью работ.</p>

<p>В договоре отражаем оговоренные цены, при его подписании закрепляем за вами персонального менеджера, который будет всегда на связи и проконтролирует все этапы строительства дома.</p>

<p>В ходе реализации проекта важная информация будет представлена в вашем личном кабинете и продублирована в удобный мессенджер.</p>

<p>У вас будет доступ к:</p>

<ul>
\t<li>Юридической и проектной документации;</li>
\t<li>Отчетам по этапам;</li>
\t<li>Графику оплат;</li>
\t<li>Срокам исполнения работ;</li>
\t<li>Камерам видеонаблюдения 24/7</li>
</ul>

{% endput %}

{% put productTabDsc1 %}
<p>Строим дома из&nbsp;теплой керамики Porotherm крупнейшего мирового производителя Wienerberger&nbsp;AG.</p>

<p>Porotherm&nbsp;— это современное исполнение «красного кирпича». Мы подробно рассказываем о его преимуществах на своем YouTube-канале.</p>

<p>Кирпичные блоки Porotherm отличаются повышенной прочностью и&nbsp;высокими тепло- и&nbsp;звукоизоляционными свойствами. На данный момент это один из лучших материалов для строительства дома на рынке.</p>

{% endput %}

{% put productTabDsc2 %}
<p>Отдаем предпочтение газобетонным блокам автоклавного твердения YTONG®, также используем в строительстве газоблок других проверенных производителей.</p>

<p>Газоблок произвоится из натуральных компонентов и во всем мире признан экологически чистым, нетоксичным строительным материалом.</p>

<p>В Германии блоки YTONG® являются обладателем сертификата IBU немецкого Института Строительства и окружающей среды, а также международного знака NaturePlus.</p>

{% endput %}

{% put productTabDsc3 %}
<p>Проектируем и&nbsp;строим дома из&nbsp;классического кирпича.</p>

<p>Классический кирпич – материал, давно завоевавший доверие потребителей. Однако, при строительстве дома классическим кирпичом важно учитывать много технических аспектов.</p>

<p>Подробнее о нюансах строительства из классического кирпича мы расскажем на встрече в MANSIO GROUP.</p>

{% endput %}

{% put productTabDsc4 %}
<p>Монолитная технология строительства дает возможность реализовать самые смелые и&nbsp;сложные архитектурные решения (арки, эркеры, колонны, овальные и&nbsp;многоугольные детали конструкции).</p>

<p>Монолитное строительство позволяет возводить дома повышенной устойчивости, которые стойко перенесут сильные ураганы и землетрясения.</p>

<p>Также <span class=\"logo-brand\">MANSIO GROUP</span> проектирует и строит бункеры для частных лиц по монолитной технологии.</p>

<p>В последние годы данная тенденция в&nbsp;частном строительстве набирает популярность.</p>

{% endput %}", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\content\\static-pages\\index.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
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
