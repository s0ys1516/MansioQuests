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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\layouts\home.htm */
class __TwigTemplate_3aa164ea3f9fea2ee8f26756bf71d77da081c08fc3721681ab293722dd2cdf98 extends \Twig\Template
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
\t<head>
\t\t";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "\t</head>

\t<body id=\"pageBody\">
\t\t<div id=\"siteWrapper\" class=\"wrapper\">
\t\t\t<!-- Header -->
\t\t\t";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "\t\t\t<!-- Content -->
\t\t\t<main id=\"pageMain\">
\t\t\t\t";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "\t\t\t\t";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['headline'] = "Проектируем и строим"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/we-do"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "\t\t\t\t<section class=\"approach\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"approach__inner\">
\t\t\t\t\t\t\t<!-- <div class=\"approach__nav\">
\t\t\t\t\t\t        @@include('../btn/btn.html', {
\t\t\t\t\t\t        \"text\": \"Смотреть все проекты\",
\t\t\t\t\t\t        \"mod\": \"blue\",
\t\t\t\t\t\t        \"href\": \"/projects.html\"
\t\t\t\t\t\t        })
\t\t\t\t\t\t        <span>или</span>
\t\t\t\t\t\t        <a class=\"approach__link\">
\t\t\t\t\t\t          <svg>
\t\t\t\t\t\t            <use xlink:href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#pdf");
        echo "\"></use>
\t\t\t\t\t\t          </svg>
\t\t\t\t\t\t          Скачать презентацию
\t\t\t\t\t\t        </a>
\t\t\t\t\t\t      </div> -->
\t\t\t\t\t\t\t<div class=\"approach__content\">
\t\t\t\t\t\t\t\t<div class=\"approach__foto\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhOQBGAIAAAP///wAAACH5BAEAAAEALAAAAAA5AEYAAAJDjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt1xnAQA7\"
\t\t\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Generalniy_direktor_dmitriy_alimov-main.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhOQBGAIAAAP///wAAACH5BAEAAAEALAAAAAA5AEYAAAJDjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt1xnAQA7\"
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Generalniy_direktor_dmitriy_alimov-main.png");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\twidth=\"570\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Генеральный директор MANSIO GROUP Дмитрий Алимов\"
\t\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"approach__text\">";
        // line 49
        $context['__placeholder_approachMain_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('approachMain', $context['__placeholder_approachMain_default_contents']);
        unset($context['__placeholder_approachMain_default_contents']);        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"product\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t<h2 class=\"headline__title\">В&nbsp;вашем доме будет <span>тепло, комфортно и&nbsp;безопасно</span></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container container--xxl\">
\t\t\t\t\t\t<div class=\"product__inner\">
\t\t\t\t\t\t\t<nav class=\"product__nav\">
\t\t\t\t\t\t\t\t<button class=\"product__btn product__btn--active\" data-product=\"tab1\" type=\"button\">
\t\t\t\t\t\t\t\t\tКерамический кирпич
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"product__btn\" data-product=\"tab2\" type=\"button\">Газобетонный блок</button>
\t\t\t\t\t\t\t\t<button class=\"product__btn\" data-product=\"tab3\" type=\"button\">Кирпич</button>
\t\t\t\t\t\t\t\t<button class=\"product__btn\" data-product=\"tab4\" type=\"button\">Монолитные конструкции</button>
\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t<div class=\"product__content product__content--active\" data-product=\"tab1\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t";
        // line 73
        $context['__placeholder_productTabDsc1_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('productTabDsc1', $context['__placeholder_productTabDsc1_default_contents']);
        unset($context['__placeholder_productTabDsc1_default_contents']);        // line 74
        echo "\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"";
        echo RainLab\Pages\Classes\Page::url("stroitelstvo-iz-kirpicha");
        echo "\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-464x619.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Teplaya-keramika.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-464x619.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Teplaya-keramika.jpg");
        echo "\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Тёплая керамика MANSIO GROUP\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Зимой тепло, летом свежо</dt>
\t\t\t\t\t\t\t\t\t\t<dd>За счет пустот, которые образуют воздушную подушку.</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Стены «дышат»</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tКерамоблоки изготовлены из глины - пористого природного материала, который не препятствует
\t\t\t\t\t\t\t\t\t\t\tвоздухообмену.
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Стойкость</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Срок службы дома более 100 лет по заключению ЦНИИСК им. В.А. Кучеренко.</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Любая архитектура</dt>
\t\t\t\t\t\t\t\t\t\t<dd>За счет малого веса и малой нагрузки на фундамент.</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Прочность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tМатериал не задерживает влагу, поэтому не теряет несущей способности ни через 10, ни через 50, ни
\t\t\t\t\t\t\t\t\t\t\tчерез 100 лет.
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"product__content\" data-product=\"tab2\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t";
        // line 124
        $context['__placeholder_productTabDsc2_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('productTabDsc2', $context['__placeholder_productTabDsc2_default_contents']);
        unset($context['__placeholder_productTabDsc2_default_contents']);        // line 125
        echo "\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"";
        echo RainLab\Pages\Classes\Page::url("stroitelstvo-iz-gazobloka");
        echo "\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-464x619.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Gazobeton.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-464x619.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Gazobeton.jpg");
        echo "\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Укладка керрамического кирпича\"
\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Энергоэффективность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Вы экономите на отоплении зимой, а летом сохраняется приятная прохлада</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Огнестойкость</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tВ составе газобетона только минеральные компоненты. Он не горит и не выделяет вредные для здоровья
\t\t\t\t\t\t\t\t\t\t\tвещества
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Высокая прочность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Высокая несущая способность благодаря автоклавной обработке</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Экологичность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tГазобетонный блок YTONG состоит исключительно из натуральных компонентов, что обеспечивает
\t\t\t\t\t\t\t\t\t\t\tполезный микроклимат внутри дома
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"product__content\" data-product=\"tab3\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t";
        // line 172
        $context['__placeholder_productTabDsc3_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('productTabDsc3', $context['__placeholder_productTabDsc3_default_contents']);
        unset($context['__placeholder_productTabDsc3_default_contents']);        // line 173
        echo "\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"";
        echo RainLab\Pages\Classes\Page::url("stroitelstvo-iz-kirpicha");
        echo "\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhAgADAIAAAP///wAAACH5BAEAAAEALAAAAAACAAMAAAICjF8AOw==\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Kirpich.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhAgADAIAAAP///wAAACH5BAEAAAEALAAAAAACAAMAAAICjF8AOw==\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Kirpich.jpg");
        echo "\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Укладка керрамического кирпича\"
\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Экологичность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tПри изготовлении кирпича используются экологически чистые материалы, что обеспечивает полезный
\t\t\t\t\t\t\t\t\t\t\tмикроклимат внутри дома
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Морозостойкость и&nbsp;прочность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tБлагодаря низкой пористости материала, он&nbsp;прослужит 100+ лет даже в&nbsp;услових низких
\t\t\t\t\t\t\t\t\t\t\tтемператур
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Огнеупорность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tУстойчивость к воздействию высоких температур. Даже в условиях попадания прямого пламени кирпичный
\t\t\t\t\t\t\t\t\t\t\tдом не поддерживает процесс горения
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Шумоизоляция</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tКирпичные стены обеспечивают высокий уровень звукоизоляции как внешних перекрытий, так и
\t\t\t\t\t\t\t\t\t\t\tвнутренних перегородок. Материал гасит практически все виды звуковой вибрации (воздушный,
\t\t\t\t\t\t\t\t\t\t\tакустический, структурный шум).
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"product__content\" data-product=\"tab4\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t";
        // line 227
        $context['__placeholder_productTabDsc4_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('productTabDsc4', $context['__placeholder_productTabDsc4_default_contents']);
        unset($context['__placeholder_productTabDsc4_default_contents']);        // line 228
        echo "\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"";
        echo RainLab\Pages\Classes\Page::url("stroitelstvo-monolitnoe");
        echo "\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"";
        // line 235
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-464x619.gif");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Monolitnye-konstrukczii.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 240
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-464x619.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/Monolitnye-konstrukczii.jpg");
        echo "\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Укладка керрамического кирпича\"
\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Прочность и сейсмоустойчивость</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tВ сейсмически опасных зонах железобетонные опоры являются обязательным условием строительства, так
\t\t\t\t\t\t\t\t\t\t\tкак монолитный каркас способен выдержать большие нагрузки
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Пожаробезопасность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tЭлектрическая разводка прокладывается внутри опалубки перед заливкой, что способствует повышению
\t\t\t\t\t\t\t\t\t\t\tпожаробезопасности здания
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Универсальность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tМонолитное строительство значительно упрощает работу проектировщиков и позволяет дизайнерам
\t\t\t\t\t\t\t\t\t\t\tсоздавать интересные проекты интерьера и экстерьера
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Долговечность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Монолитный дом прослужит от 150 лет</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"features\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"features__inner\">
\t\t\t\t\t\t\t<blockquote class=\"features__blockquote\">
\t\t\t\t\t\t\t\t<h2 class=\"features__title\">
\t\t\t\t\t\t\t\t\tКаждый квадратный сантиметр вашего дома будет комфортным для вас и вашей семьи
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<cite class=\"features__blockquote-cite\"
\t\t\t\t\t\t\t\t\t>Дмитрий Алимов<br />Генеральный директор ";
        // line 286
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "MANSIO GROUP"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/logo-brand"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 287
        echo "</cite
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<div class=\"features__content\">
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 295
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#features-icon-1");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">ВНИМАНИЕ К ДЕТАЛЯМ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>Какие у вас хобби? Кем работаете? Как любите отдыхать? Чем увлекаются ваши дети? Команда
\t\t\t\t\t\t\t\t\t\tархитекторов стремится узнать каждую деталь вашего образа жизни, чтобы спроектировать дом, в котором
\t\t\t\t\t\t\t\t\t\tкаждый м2 будет дарить комфорт</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 309
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#features-icon-2");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">АБСОЛЮТНЫЙ КОМФОРТ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>Проектируем дома, в которых не возникнет вопросов: «Где разместить друзей?», «Куда складывать
\t\t\t\t\t\t\t\t\t\tигрушки?», «Где будет спать любимый питомец?» Благодаря многолетнему опыту мы знаем, на что обратить
\t\t\t\t\t\t\t\t\t\tвнимание, чтобы продумать всё до мелочей. Мелочей, из которых и складывается гармония в доме.</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 323
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#features-icon-3");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">СОВРЕМЕННЫЕ ТЕХНОЛОГИИ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>При проектировании инженерных систем учитываем соответствующие нормы и правила, обеспечивая
\t\t\t\t\t\t\t\t\t\tнадежность и безопасность эксплуатации. При реализации инженерного проекта ориентируемся на будущий
\t\t\t\t\t\t\t\t\t\tдизайн помещений. Используем современные технологии, в том числе системы «Умного дома».</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 337
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#features-icon-4");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">ИНДИВИДУАЛЬНОСТЬ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>Благодаря дизайнерам MANSIO дом станет отражением вашего характера и стиля жизни. Словно отпечатки
\t\t\t\t\t\t\t\t\t\tпальцев, он будет олицетворять именно вас, ваш стиль, ваше настроение. Вы уникальны, и мы перенесем
\t\t\t\t\t\t\t\t\t\tэту уникальность в ваш проект.</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"contacts\" style=\"margin-top:0;\">
\t\t\t\t\t<h2 class=\"visually-hidden\">Организация встречи с нашим архитектором</h2>
\t\t\t\t\t<div class=\"contacts__bg\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"contacts__window\">
\t\t\t\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"person  action-call__person\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"person__name-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"person__name\">Илларионов Илья Николаевич</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"person__sub-name\">Главный архитектор</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"person__foto-wrap action-call__person-foto\">
\t\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrcset=\"";
        // line 371
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-651x799.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 372
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 376
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-651x799.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 377
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.png");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Фотография Главный архитектор Илларионов Илья Николаевич\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"651\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">
\t\t\t\t\t\t\t\t\t\t\t\tОрганизуем встречу с&nbsp;нашим<br />архитектором, на которой&nbsp;вы<span>:</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"contacts-form__list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tОпределите назначение дома
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 393
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tВыберите архитектурный стиль
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 399
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tОпределите желаемую площадь дома
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 405
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tПосмотрите образцы материалов
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 411
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tПолучите полную техническую консультацию
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 417
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrow-right");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"823744\", hash: \"3e5bddc0ee041117a0393f68b52f5c00\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");
\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_823744\"
\t\t\t\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640586666\"></script>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"services  services--main\">
\t\t\t\t\t<h2 class=\"visually-hidden\">Перечень услуг MANSIO GROUP</h2>
\t\t\t\t\t<div class=\"services__item\">
\t\t\t\t\t\t<div class=\"services__foto services__foto--right\">
\t\t\t\t\t\t\t<picture class=\"js-picture\">
\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\tsrcset=\"";
        // line 444
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-875x633.gif");
        echo " 1x\"
\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 445
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-26.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tclass=\"lazy js-picture__img js-picture__img--mid-scroll\"
\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 449
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-875x633.gif");
        echo "\"
\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 450
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-26.jpg");
        echo "\"
\t\t\t\t\t\t\t\t\talt=\"Фотография специалистов MANSIO GROUP\"
\t\t\t\t\t\t\t\t\twidth=\"875\" />
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"services__content\">
\t\t\t\t\t\t\t<div class=\"services__title\">
\t\t\t\t\t\t\t\tПод ваш проект <br />
\t\t\t\t\t\t\t\tсоздается проектная группа <br />
\t\t\t\t\t\t\t\tиз&nbsp;специалистов:
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"services__list\">
\t\t\t\t\t\t\t\t<li>Архитекторы;</li>
\t\t\t\t\t\t\t\t<li>Конструкторы;</li>
\t\t\t\t\t\t\t\t<li>Инженеры;</li>
\t\t\t\t\t\t\t\t<li>Дизайнеры;</li>
\t\t\t\t\t\t\t\t<li>Ландшафтные дизайнеры;</li>
\t\t\t\t\t\t\t\t<li>Комплектовщики.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 9 -->
\t\t\t\t\t<div class=\"services__item\">
\t\t\t\t\t\t<div class=\"services__foto\">
\t\t\t\t\t\t\t<picture class=\"js-picture\">
\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhBwAEAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAQAAAIEjI+pWwA7\"
\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 477
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-27.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tclass=\"lazy js-picture__img js-picture__img--mid-scroll\"
\t\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhBwAEAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAQAAAIEjI+pWwA7\"
\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 482
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/layer-27.jpg");
        echo "\"
\t\t\t\t\t\t\t\t\talt=\"Фотография специалистов MANSIO GROUP\"
\t\t\t\t\t\t\t\t\twidth=\"837\" />
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"services__content\">
\t\t\t\t\t\t\t<div class=\"services__desc\">Для обсуждения деталей вашего проекта</div>
\t\t\t\t\t\t\t<div class=\"services__title\">
\t\t\t\t\t\t\t\tСоздаем общий чат <br />
\t\t\t\t\t\t\t\tв&nbsp;удобном мессенджере
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"services__subtitle\">В&nbsp;режиме реального времени вы&nbsp;сможете увидеть:</div>
\t\t\t\t\t\t\t<ul class=\"services__list\">
\t\t\t\t\t\t\t\t<li>Эскизы;</li>
\t\t\t\t\t\t\t\t<li>Наброски;</li>
\t\t\t\t\t\t\t\t<li>Технические решения;</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"services__feedback\">
\t\t\t\t\t\t\t\t<div class=\"services__icon\">
\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 502
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#project-icon-1");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>Специалисты готовы ответить на&nbsp;любой ваш вопрос в&nbsp;режиме реального времени.</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</main>

\t\t\t<!-- Footer -->
\t\t\t";
        // line 513
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 514
        echo "\t\t</div>

\t\t";
        // line 517
        echo "\t\t<div class=\"modal modal--preload modal--discuss  modal--responsive    \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 524
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"person  action-call__person\">
\t\t\t\t\t\t\t\t<div class=\"person__name-wrap\">
\t\t\t\t\t\t\t\t\t<p class=\"person__name\">Илларионов Илья Николаевич</p>
\t\t\t\t\t\t\t\t\t<p class=\"person__sub-name\">Главный архитектор</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"person__foto-wrap action-call__person-foto\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\t\tsrcset=\"";
        // line 536
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-651x799.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 537
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 541
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholders/dummy-image-651x799.gif");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
        // line 542
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager.png");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Фотография Главный архитектор Илларионов Илья Николаевич\"
\t\t\t\t\t\t\t\t\t\t\twidth=\"651\"
\t\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">Запишитесь на&nbsp;встречу<br />с&nbsp;архитектором Mansio Group</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tНаш архитектор выслушает ваши пожелания, даст рекомендации и&nbsp;ответит на&nbsp;все вопросы
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t! function (a, m, o, c, r, m) {
\t\t\t\t\t\t\t\t\t\t\ta[o + c] = a[o + c] || {
\t\t\t\t\t\t\t\t\t\t\t\tsetMeta: function (p) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthis.params = (this.params || []).concat([p])
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r] = a[o + r] || function (f) {
\t\t\t\t\t\t\t\t\t\t\t\ta[o + r].f = (a[o + r].f || []).concat([f])
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r]({
\t\t\t\t\t\t\t\t\t\t\t\tid: \"841105\",
\t\t\t\t\t\t\t\t\t\t\t\thash: \"7996435f3912dc70d4a8cb313cf6b826\",
\t\t\t\t\t\t\t\t\t\t\t\tlocale: \"ru\"
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t}(window, 0, \"amo_forms_\", \"params\", \"load\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_841105\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1632903968\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 583
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal modal--preload modal--registration-for-viewing  modal--responsive    \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 596
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"person  action-call__person\">
\t\t\t\t\t\t\t\t<div class=\"person__name-wrap\">
\t\t\t\t\t\t\t\t\t<p class=\"person__name\">Александра Бикова</p>
\t\t\t\t\t\t\t\t\t<p class=\"person__sub-name\">Проектный консультант</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"person__foto-wrap action-call__person-foto\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source srcset=\"";
        // line 607
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.webp");
        echo " 1x\" type=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 609
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.png");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\twidth=\"704\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Фотография Проектный консультант Александра Бикова\" />
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">
\t\t\t\t\t\t\t\t\tЗапись на&nbsp;просмотр строящихся<br />или готовых домов Mansio Group
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tМы&nbsp;свяжемся с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведем экскурсию по&nbsp;нашим объекта
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:\"823750\",hash:\"e76b0394838a458bc0c9c429b22b83e2\",locale:\"ru\"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,\"amo_forms_\",\"params\",\"load\",\"loaded\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_823750\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1643030013\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 639
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal modal--preload modal--already-have   modal--fit-content   \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 652
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">У&nbsp;вас есть готовый проект?<br />Присылайте нам его.</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tПроведем тщательную экспертизу, рассчитаем точную смету и&nbsp;сроки строительства
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  \">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t! function (a, m, o, c, r, m) {
\t\t\t\t\t\t\t\t\t\t\ta[o + c] = a[o + c] || {
\t\t\t\t\t\t\t\t\t\t\t\tsetMeta: function (p) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthis.params = (this.params || []).concat([p])
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r] = a[o + r] || function (f) {
\t\t\t\t\t\t\t\t\t\t\t\ta[o + r].f = (a[o + r].f || []).concat([f])
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r]({
\t\t\t\t\t\t\t\t\t\t\t\tid: \"824437\",
\t\t\t\t\t\t\t\t\t\t\t\thash: \"bc1d3d7136b6a981ba531b07a2f4df4f\",
\t\t\t\t\t\t\t\t\t\t\t\tlocale: \"ru\"
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t}(window, 0, \"amo_forms_\", \"params\", \"load\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_824437\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629710154\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 690
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal modal--preload modal--back-call   modal--fit-content   \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 703
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">Мы&nbsp;вам перезвоним</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tВ&nbsp;ближайшее время с&nbsp;вами свяжется персональный менеджер и&nbsp;ответит на&nbsp;интересующие
\t\t\t\t\t\t\t\t\tвопросы
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  \">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t! function (a, m, o, c, r, m) {
\t\t\t\t\t\t\t\t\t\t\ta[o + c] = a[o + c] || {
\t\t\t\t\t\t\t\t\t\t\t\tsetMeta: function (p) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthis.params = (this.params || []).concat([p])
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r] = a[o + r] || function (f) {
\t\t\t\t\t\t\t\t\t\t\t\ta[o + r].f = (a[o + r].f || []).concat([f])
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r]({
\t\t\t\t\t\t\t\t\t\t\t\tid: \"824308\",
\t\t\t\t\t\t\t\t\t\t\t\thash: \"eb4c8a02bc8d0e34f40c0bf6717e14c2\",
\t\t\t\t\t\t\t\t\t\t\t\tlocale: \"ru\"
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t}(window, 0, \"amo_forms_\", \"params\", \"load\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_824308\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629695953\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 742
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#icon-close");
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Scripts -->
\t\t";
        // line 749
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 750
        echo "\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\layouts\\home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1004 => 750,  1000 => 749,  990 => 742,  948 => 703,  932 => 690,  891 => 652,  875 => 639,  842 => 609,  837 => 607,  823 => 596,  807 => 583,  763 => 542,  759 => 541,  752 => 537,  748 => 536,  733 => 524,  724 => 517,  720 => 514,  716 => 513,  702 => 502,  679 => 482,  671 => 477,  641 => 450,  637 => 449,  630 => 445,  626 => 444,  596 => 417,  587 => 411,  578 => 405,  569 => 399,  560 => 393,  541 => 377,  537 => 376,  530 => 372,  526 => 371,  511 => 359,  486 => 337,  469 => 323,  452 => 309,  435 => 295,  425 => 287,  420 => 286,  372 => 241,  368 => 240,  361 => 236,  357 => 235,  346 => 228,  344 => 227,  300 => 186,  292 => 181,  280 => 173,  278 => 172,  241 => 138,  237 => 137,  230 => 133,  226 => 132,  215 => 125,  213 => 124,  173 => 87,  169 => 86,  162 => 82,  158 => 81,  147 => 74,  145 => 73,  118 => 49,  108 => 42,  100 => 37,  87 => 27,  73 => 15,  67 => 14,  63 => 13,  59 => 11,  55 => 10,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\" class=\"no-js\">
\t<head>
\t\t{% partial 'global/meta' %}
\t</head>

\t<body id=\"pageBody\">
\t\t<div id=\"siteWrapper\" class=\"wrapper\">
\t\t\t<!-- Header -->
\t\t\t{% partial 'global/header' %}
\t\t\t<!-- Content -->
\t\t\t<main id=\"pageMain\">
\t\t\t\t{% partial 'sections/intro' %}
\t\t\t\t{% partial 'sections/we-do' headline='Проектируем и строим' %}
\t\t\t\t<section class=\"approach\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"approach__inner\">
\t\t\t\t\t\t\t<!-- <div class=\"approach__nav\">
\t\t\t\t\t\t        @@include('../btn/btn.html', {
\t\t\t\t\t\t        \"text\": \"Смотреть все проекты\",
\t\t\t\t\t\t        \"mod\": \"blue\",
\t\t\t\t\t\t        \"href\": \"/projects.html\"
\t\t\t\t\t\t        })
\t\t\t\t\t\t        <span>или</span>
\t\t\t\t\t\t        <a class=\"approach__link\">
\t\t\t\t\t\t          <svg>
\t\t\t\t\t\t            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#pdf'|theme }}\"></use>
\t\t\t\t\t\t          </svg>
\t\t\t\t\t\t          Скачать презентацию
\t\t\t\t\t\t        </a>
\t\t\t\t\t\t      </div> -->
\t\t\t\t\t\t\t<div class=\"approach__content\">
\t\t\t\t\t\t\t\t<div class=\"approach__foto\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhOQBGAIAAAP///wAAACH5BAEAAAEALAAAAAA5AEYAAAJDjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt1xnAQA7\"
\t\t\t\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/person/Generalniy_direktor_dmitriy_alimov-main.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhOQBGAIAAAP///wAAACH5BAEAAAEALAAAAAA5AEYAAAJDjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt1xnAQA7\"
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/person/Generalniy_direktor_dmitriy_alimov-main.png'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\twidth=\"570\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Генеральный директор MANSIO GROUP Дмитрий Алимов\"
\t\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"approach__text\">{% placeholder approachMain title=\"MANSIO сервис\" %}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"product\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t<h2 class=\"headline__title\">В&nbsp;вашем доме будет <span>тепло, комфортно и&nbsp;безопасно</span></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container container--xxl\">
\t\t\t\t\t\t<div class=\"product__inner\">
\t\t\t\t\t\t\t<nav class=\"product__nav\">
\t\t\t\t\t\t\t\t<button class=\"product__btn product__btn--active\" data-product=\"tab1\" type=\"button\">
\t\t\t\t\t\t\t\t\tКерамический кирпич
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"product__btn\" data-product=\"tab2\" type=\"button\">Газобетонный блок</button>
\t\t\t\t\t\t\t\t<button class=\"product__btn\" data-product=\"tab3\" type=\"button\">Кирпич</button>
\t\t\t\t\t\t\t\t<button class=\"product__btn\" data-product=\"tab4\" type=\"button\">Монолитные конструкции</button>
\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t<div class=\"product__content product__content--active\" data-product=\"tab1\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t{% placeholder productTabDsc1 title=\"Описание первого таба\" %}
\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"{{ 'stroitelstvo-iz-kirpicha'|staticPage }}\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"{{'assets/images/placeholders/dummy-image-464x619.gif'|theme}}\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"{{'assets/images/content/Teplaya-keramika.webp'|theme}} 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"{{'assets/images/placeholders/dummy-image-464x619.gif'|theme}}\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"{{'assets/images/content/Teplaya-keramika.jpg'|theme}}\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Тёплая керамика MANSIO GROUP\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Зимой тепло, летом свежо</dt>
\t\t\t\t\t\t\t\t\t\t<dd>За счет пустот, которые образуют воздушную подушку.</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Стены «дышат»</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tКерамоблоки изготовлены из глины - пористого природного материала, который не препятствует
\t\t\t\t\t\t\t\t\t\t\tвоздухообмену.
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Стойкость</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Срок службы дома более 100 лет по заключению ЦНИИСК им. В.А. Кучеренко.</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Любая архитектура</dt>
\t\t\t\t\t\t\t\t\t\t<dd>За счет малого веса и малой нагрузки на фундамент.</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Прочность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tМатериал не задерживает влагу, поэтому не теряет несущей способности ни через 10, ни через 50, ни
\t\t\t\t\t\t\t\t\t\t\tчерез 100 лет.
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"product__content\" data-product=\"tab2\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t{% placeholder productTabDsc2 title=\"Описание второго таба\" %}
\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"{{ 'stroitelstvo-iz-gazobloka'|staticPage }}\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"{{'assets/images/placeholders/dummy-image-464x619.gif'|theme}}\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"{{'assets/images/content/Gazobeton.webp'|theme}} 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"{{'assets/images/placeholders/dummy-image-464x619.gif'|theme}}\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/content/Gazobeton.jpg'|theme }}\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Укладка керрамического кирпича\"
\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Энергоэффективность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Вы экономите на отоплении зимой, а летом сохраняется приятная прохлада</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Огнестойкость</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tВ составе газобетона только минеральные компоненты. Он не горит и не выделяет вредные для здоровья
\t\t\t\t\t\t\t\t\t\t\tвещества
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Высокая прочность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Высокая несущая способность благодаря автоклавной обработке</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Экологичность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tГазобетонный блок YTONG состоит исключительно из натуральных компонентов, что обеспечивает
\t\t\t\t\t\t\t\t\t\t\tполезный микроклимат внутри дома
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"product__content\" data-product=\"tab3\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t{% placeholder productTabDsc3 title=\"Описание третьего таба\" %}
\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"{{ 'stroitelstvo-iz-kirpicha'|staticPage }}\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhAgADAIAAAP///wAAACH5BAEAAAEALAAAAAACAAMAAAICjF8AOw==\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"{{'assets/images/content/Kirpich.webp'|theme}} 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhAgADAIAAAP///wAAACH5BAEAAAEALAAAAAACAAMAAAICjF8AOw==\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/content/Kirpich.jpg'|theme }}\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Укладка керрамического кирпича\"
\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Экологичность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tПри изготовлении кирпича используются экологически чистые материалы, что обеспечивает полезный
\t\t\t\t\t\t\t\t\t\t\tмикроклимат внутри дома
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Морозостойкость и&nbsp;прочность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tБлагодаря низкой пористости материала, он&nbsp;прослужит 100+ лет даже в&nbsp;услових низких
\t\t\t\t\t\t\t\t\t\t\tтемператур
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Огнеупорность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tУстойчивость к воздействию высоких температур. Даже в условиях попадания прямого пламени кирпичный
\t\t\t\t\t\t\t\t\t\t\tдом не поддерживает процесс горения
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Шумоизоляция</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tКирпичные стены обеспечивают высокий уровень звукоизоляции как внешних перекрытий, так и
\t\t\t\t\t\t\t\t\t\t\tвнутренних перегородок. Материал гасит практически все виды звуковой вибрации (воздушный,
\t\t\t\t\t\t\t\t\t\t\tакустический, структурный шум).
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"product__content\" data-product=\"tab4\">
\t\t\t\t\t\t\t\t<div class=\"product__text\">
\t\t\t\t\t\t\t\t\t{% placeholder productTabDsc4 title=\"Описание четвертого таба\" %}
\t\t\t\t\t\t\t\t\t<a class=\"btn  btn--blue\" href=\"{{ 'stroitelstvo-monolitnoe'|staticPage }}\"
\t\t\t\t\t\t\t\t\t\t>Подробнее о материалах и технологиях</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<picture class=\"product__picture\">
\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\tsrcset=\"{{'assets/images/placeholders/dummy-image-464x619.gif'|theme}} 1x\"
\t\t\t\t\t\t\t\t\t\tdata-srcset=\"{{'assets/images/content/Monolitnye-konstrukczii.webp'|theme}} 1x\"
\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\tsrc=\"{{'assets/images/placeholders/dummy-image-464x619.gif'|theme}}\"
\t\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/content/Monolitnye-konstrukczii.jpg'|theme }}\"
\t\t\t\t\t\t\t\t\t\twidth=\"464\"
\t\t\t\t\t\t\t\t\t\talt=\"Укладка керрамического кирпича\"
\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<dl class=\"product__description-list\">
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Прочность и сейсмоустойчивость</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tВ сейсмически опасных зонах железобетонные опоры являются обязательным условием строительства, так
\t\t\t\t\t\t\t\t\t\t\tкак монолитный каркас способен выдержать большие нагрузки
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Пожаробезопасность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tЭлектрическая разводка прокладывается внутри опалубки перед заливкой, что способствует повышению
\t\t\t\t\t\t\t\t\t\t\tпожаробезопасности здания
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Универсальность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tМонолитное строительство значительно упрощает работу проектировщиков и позволяет дизайнерам
\t\t\t\t\t\t\t\t\t\t\tсоздавать интересные проекты интерьера и экстерьера
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__list-item\">
\t\t\t\t\t\t\t\t\t\t<dt class=\"product__subtitle\">Долговечность</dt>
\t\t\t\t\t\t\t\t\t\t<dd>Монолитный дом прослужит от 150 лет</dd>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"features\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"features__inner\">
\t\t\t\t\t\t\t<blockquote class=\"features__blockquote\">
\t\t\t\t\t\t\t\t<h2 class=\"features__title\">
\t\t\t\t\t\t\t\t\tКаждый квадратный сантиметр вашего дома будет комфортным для вас и вашей семьи
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<cite class=\"features__blockquote-cite\"
\t\t\t\t\t\t\t\t\t>Дмитрий Алимов<br />Генеральный директор {% partial 'elements/logo-brand' text='MANSIO GROUP'
\t\t\t\t\t\t\t\t\t%}</cite
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<div class=\"features__content\">
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#features-icon-1'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">ВНИМАНИЕ К ДЕТАЛЯМ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>Какие у вас хобби? Кем работаете? Как любите отдыхать? Чем увлекаются ваши дети? Команда
\t\t\t\t\t\t\t\t\t\tархитекторов стремится узнать каждую деталь вашего образа жизни, чтобы спроектировать дом, в котором
\t\t\t\t\t\t\t\t\t\tкаждый м2 будет дарить комфорт</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#features-icon-2'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">АБСОЛЮТНЫЙ КОМФОРТ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>Проектируем дома, в которых не возникнет вопросов: «Где разместить друзей?», «Куда складывать
\t\t\t\t\t\t\t\t\t\tигрушки?», «Где будет спать любимый питомец?» Благодаря многолетнему опыту мы знаем, на что обратить
\t\t\t\t\t\t\t\t\t\tвнимание, чтобы продумать всё до мелочей. Мелочей, из которых и складывается гармония в доме.</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#features-icon-3'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">СОВРЕМЕННЫЕ ТЕХНОЛОГИИ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>При проектировании инженерных систем учитываем соответствующие нормы и правила, обеспечивая
\t\t\t\t\t\t\t\t\t\tнадежность и безопасность эксплуатации. При реализации инженерного проекта ориентируемся на будущий
\t\t\t\t\t\t\t\t\t\tдизайн помещений. Используем современные технологии, в том числе системы «Умного дома».</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t<div class=\"features-item\">
\t\t\t\t\t\t\t\t\t<div class=\"features-item__icon\">
\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#features-icon-4'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"features-item__title\">ИНДИВИДУАЛЬНОСТЬ</div>
\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t>Благодаря дизайнерам MANSIO дом станет отражением вашего характера и стиля жизни. Словно отпечатки
\t\t\t\t\t\t\t\t\t\tпальцев, он будет олицетворять именно вас, ваш стиль, ваше настроение. Вы уникальны, и мы перенесем
\t\t\t\t\t\t\t\t\t\tэту уникальность в ваш проект.</span
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"contacts\" style=\"margin-top:0;\">
\t\t\t\t\t<h2 class=\"visually-hidden\">Организация встречи с нашим архитектором</h2>
\t\t\t\t\t<div class=\"contacts__bg\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"contacts__window\">
\t\t\t\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"person  action-call__person\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"person__name-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"person__name\">Илларионов Илья Николаевич</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"person__sub-name\">Главный архитектор</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"person__foto-wrap action-call__person-foto\">
\t\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/placeholders/dummy-image-651x799.gif'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/content/manager.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/placeholders/dummy-image-651x799.gif'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/content/manager.png'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Фотография Главный архитектор Илларионов Илья Николаевич\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"651\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">
\t\t\t\t\t\t\t\t\t\t\t\tОрганизуем встречу с&nbsp;нашим<br />архитектором, на которой&nbsp;вы<span>:</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"contacts-form__list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tОпределите назначение дома
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tВыберите архитектурный стиль
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tОпределите желаемую площадь дома
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tПосмотрите образцы материалов
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\tПолучите полную техническую консультацию
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrow-right'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"823744\", hash: \"3e5bddc0ee041117a0393f68b52f5c00\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");
\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_823744\"
\t\t\t\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640586666\"></script>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"services  services--main\">
\t\t\t\t\t<h2 class=\"visually-hidden\">Перечень услуг MANSIO GROUP</h2>
\t\t\t\t\t<div class=\"services__item\">
\t\t\t\t\t\t<div class=\"services__foto services__foto--right\">
\t\t\t\t\t\t\t<picture class=\"js-picture\">
\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/placeholders/dummy-image-875x633.gif'|theme }} 1x\"
\t\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/content/layer-26.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tclass=\"lazy js-picture__img js-picture__img--mid-scroll\"
\t\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/placeholders/dummy-image-875x633.gif'|theme }}\"
\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/content/layer-26.jpg'|theme }}\"
\t\t\t\t\t\t\t\t\talt=\"Фотография специалистов MANSIO GROUP\"
\t\t\t\t\t\t\t\t\twidth=\"875\" />
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"services__content\">
\t\t\t\t\t\t\t<div class=\"services__title\">
\t\t\t\t\t\t\t\tПод ваш проект <br />
\t\t\t\t\t\t\t\tсоздается проектная группа <br />
\t\t\t\t\t\t\t\tиз&nbsp;специалистов:
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"services__list\">
\t\t\t\t\t\t\t\t<li>Архитекторы;</li>
\t\t\t\t\t\t\t\t<li>Конструкторы;</li>
\t\t\t\t\t\t\t\t<li>Инженеры;</li>
\t\t\t\t\t\t\t\t<li>Дизайнеры;</li>
\t\t\t\t\t\t\t\t<li>Ландшафтные дизайнеры;</li>
\t\t\t\t\t\t\t\t<li>Комплектовщики.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 9 -->
\t\t\t\t\t<div class=\"services__item\">
\t\t\t\t\t\t<div class=\"services__foto\">
\t\t\t\t\t\t\t<picture class=\"js-picture\">
\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhBwAEAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAQAAAIEjI+pWwA7\"
\t\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/content/layer-27.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tclass=\"lazy js-picture__img js-picture__img--mid-scroll\"
\t\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhBwAEAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAQAAAIEjI+pWwA7\"
\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/content/layer-27.jpg'|theme }}\"
\t\t\t\t\t\t\t\t\talt=\"Фотография специалистов MANSIO GROUP\"
\t\t\t\t\t\t\t\t\twidth=\"837\" />
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"services__content\">
\t\t\t\t\t\t\t<div class=\"services__desc\">Для обсуждения деталей вашего проекта</div>
\t\t\t\t\t\t\t<div class=\"services__title\">
\t\t\t\t\t\t\t\tСоздаем общий чат <br />
\t\t\t\t\t\t\t\tв&nbsp;удобном мессенджере
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"services__subtitle\">В&nbsp;режиме реального времени вы&nbsp;сможете увидеть:</div>
\t\t\t\t\t\t\t<ul class=\"services__list\">
\t\t\t\t\t\t\t\t<li>Эскизы;</li>
\t\t\t\t\t\t\t\t<li>Наброски;</li>
\t\t\t\t\t\t\t\t<li>Технические решения;</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"services__feedback\">
\t\t\t\t\t\t\t\t<div class=\"services__icon\">
\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#project-icon-1'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>Специалисты готовы ответить на&nbsp;любой ваш вопрос в&nbsp;режиме реального времени.</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</main>

\t\t\t<!-- Footer -->
\t\t\t{% partial 'global/footer' %}
\t\t</div>

\t\t{# modals #}
\t\t<div class=\"modal modal--preload modal--discuss  modal--responsive    \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"person  action-call__person\">
\t\t\t\t\t\t\t\t<div class=\"person__name-wrap\">
\t\t\t\t\t\t\t\t\t<p class=\"person__name\">Илларионов Илья Николаевич</p>
\t\t\t\t\t\t\t\t\t<p class=\"person__sub-name\">Главный архитектор</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"person__foto-wrap action-call__person-foto\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/placeholders/dummy-image-651x799.gif'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/content/manager.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/placeholders/dummy-image-651x799.gif'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/content/manager.png'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Фотография Главный архитектор Илларионов Илья Николаевич\"
\t\t\t\t\t\t\t\t\t\t\twidth=\"651\"
\t\t\t\t\t\t\t\t\t\t\tloading=\"lazy\" />
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">Запишитесь на&nbsp;встречу<br />с&nbsp;архитектором Mansio Group</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tНаш архитектор выслушает ваши пожелания, даст рекомендации и&nbsp;ответит на&nbsp;все вопросы
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t! function (a, m, o, c, r, m) {
\t\t\t\t\t\t\t\t\t\t\ta[o + c] = a[o + c] || {
\t\t\t\t\t\t\t\t\t\t\t\tsetMeta: function (p) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthis.params = (this.params || []).concat([p])
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r] = a[o + r] || function (f) {
\t\t\t\t\t\t\t\t\t\t\t\ta[o + r].f = (a[o + r].f || []).concat([f])
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r]({
\t\t\t\t\t\t\t\t\t\t\t\tid: \"841105\",
\t\t\t\t\t\t\t\t\t\t\t\thash: \"7996435f3912dc70d4a8cb313cf6b826\",
\t\t\t\t\t\t\t\t\t\t\t\tlocale: \"ru\"
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t}(window, 0, \"amo_forms_\", \"params\", \"load\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_841105\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1632903968\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal modal--preload modal--registration-for-viewing  modal--responsive    \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"person  action-call__person\">
\t\t\t\t\t\t\t\t<div class=\"person__name-wrap\">
\t\t\t\t\t\t\t\t\t<p class=\"person__name\">Александра Бикова</p>
\t\t\t\t\t\t\t\t\t<p class=\"person__sub-name\">Проектный консультант</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"person__foto-wrap action-call__person-foto\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source srcset=\"{{ 'assets/images/content/manager-w.webp'|theme }} 1x\" type=\"image/webp\" />
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/content/manager-w.png'|theme }}\"
\t\t\t\t\t\t\t\t\t\t\twidth=\"704\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Фотография Проектный консультант Александра Бикова\" />
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">
\t\t\t\t\t\t\t\t\tЗапись на&nbsp;просмотр строящихся<br />или готовых домов Mansio Group
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tМы&nbsp;свяжемся с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведем экскурсию по&nbsp;нашим объекта
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:\"823750\",hash:\"e76b0394838a458bc0c9c429b22b83e2\",locale:\"ru\"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,\"amo_forms_\",\"params\",\"load\",\"loaded\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_823750\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1643030013\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal modal--preload modal--already-have   modal--fit-content   \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">У&nbsp;вас есть готовый проект?<br />Присылайте нам его.</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tПроведем тщательную экспертизу, рассчитаем точную смету и&nbsp;сроки строительства
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  \">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t! function (a, m, o, c, r, m) {
\t\t\t\t\t\t\t\t\t\t\ta[o + c] = a[o + c] || {
\t\t\t\t\t\t\t\t\t\t\t\tsetMeta: function (p) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthis.params = (this.params || []).concat([p])
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r] = a[o + r] || function (f) {
\t\t\t\t\t\t\t\t\t\t\t\ta[o + r].f = (a[o + r].f || []).concat([f])
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r]({
\t\t\t\t\t\t\t\t\t\t\t\tid: \"824437\",
\t\t\t\t\t\t\t\t\t\t\t\thash: \"bc1d3d7136b6a981ba531b07a2f4df4f\",
\t\t\t\t\t\t\t\t\t\t\t\tlocale: \"ru\"
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t}(window, 0, \"amo_forms_\", \"params\", \"load\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_824437\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629710154\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal modal--preload modal--back-call   modal--fit-content   \">
\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t<div class=\"modal__overlay\"></div>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<div class=\"action-call\">
\t\t\t\t\t\t<div class=\"brand-flag\">
\t\t\t\t\t\t\t<svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme}}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action-call__inner\">
\t\t\t\t\t\t\t<div class=\"action-call__right-col\">
\t\t\t\t\t\t\t\t<!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
\t\t\t\t\t\t\t\t<div class=\"contacts-form__title\">Мы&nbsp;вам перезвоним</div>
\t\t\t\t\t\t\t\t<p class=\"action-call__dsc\">
\t\t\t\t\t\t\t\t\tВ&nbsp;ближайшее время с&nbsp;вами свяжется персональный менеджер и&nbsp;ответит на&nbsp;интересующие
\t\t\t\t\t\t\t\t\tвопросы
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"action-call__form-wrap  \">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t! function (a, m, o, c, r, m) {
\t\t\t\t\t\t\t\t\t\t\ta[o + c] = a[o + c] || {
\t\t\t\t\t\t\t\t\t\t\t\tsetMeta: function (p) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthis.params = (this.params || []).concat([p])
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r] = a[o + r] || function (f) {
\t\t\t\t\t\t\t\t\t\t\t\ta[o + r].f = (a[o + r].f || []).concat([f])
\t\t\t\t\t\t\t\t\t\t\t}, a[o + r]({
\t\t\t\t\t\t\t\t\t\t\t\tid: \"824308\",
\t\t\t\t\t\t\t\t\t\t\t\thash: \"eb4c8a02bc8d0e34f40c0bf6717e14c2\",
\t\t\t\t\t\t\t\t\t\t\t\tlocale: \"ru\"
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t}(window, 0, \"amo_forms_\", \"params\", \"load\");
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\t\t\tid=\"amoforms_script_824308\"
\t\t\t\t\t\t\t\t\t\tasync=\"async\"
\t\t\t\t\t\t\t\t\t\tcharset=\"utf-8\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1629695953\"></script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TODO: стилизовать -->
\t\t\t\t\t<button class=\"modal__close-btn btn-reset\" type=\"button\" aria-label=\"Закрыть попап\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#icon-close'|theme}}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Scripts -->
\t\t{% partial 'global/scripts' %}
\t</body>
</html>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\layouts\\home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 4, "placeholder" => 49);
        static $filters = array("theme" => 27, "staticPage" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'placeholder'],
                ['theme', 'staticPage'],
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
