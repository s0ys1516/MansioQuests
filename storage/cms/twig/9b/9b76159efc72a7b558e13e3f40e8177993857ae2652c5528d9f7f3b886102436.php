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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\komanda.htm */
class __TwigTemplate_f3b26bede0e4061da2038dd260311483f4bc663dbaef387a6628f861e639a94a extends \Twig\Template
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
        $context['__cms_partial_params']['bgClass'] = "team"        ;
        $context['__cms_partial_params']['title'] = "Наша команда"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/first-screen"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<section class=\"division\">
\t<div class=\"container\">
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Администрация</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tДмитрий Алимов
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tГенеральный директор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Дмитрий Алимов\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberAdminDA\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tАндрей Петрухин
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tКоммерческий директор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Andrey_Petruhin.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Andrey_Petruhin.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Андрей Петрухин коммерческий директор в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tКонстантин Ким
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tДиректор по маркетингу
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Konstantin_Kim.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Konstantin_Kim.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Константин Ким директор по маркетингу в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Отдел продаж</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tЕкатерина Дмитренко
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tМаркетолог
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Marketolog_Ekaterina_Dmitrenko.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Marketolog_Ekaterina_Dmitrenko.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Екатерина Дмитренко\"
\t\t\t\t\t\t\t\twidth=\"418\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberED\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tИрина Ермолова
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tМенеджер проектов
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Irina_Ermolova.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Irina_Ermolova.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Ирина Ермолова менеджер проектов в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li><li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tЕгор Копцев
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tМенеджер проектов
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Egor_Koptsev.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Egor_Koptsev.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Копцев Егор менеджер проектов в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">
\t\t\t\tАрхитектурный отдел
\t\t\t</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tПрейс Всеволод
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tВедущий Архитектор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Vsevolod_Preis.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 207
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Vsevolod_Preis.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Прейс Всеволод – ведущий архитектор Mansio group\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 223
        echo "\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tЕлизавета Труб
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tВедущий Архитектор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Елизавета Труб\"
\t\t\t\t\t\t\t\twidth=\"418\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberET\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 254
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tПолина Авсеева
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tАрхитектор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 272
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Arkhitektor_Polina_Avseeva.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 275
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Arkhitektor_Polina_Avseeva.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Полина Авсеева\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberArchitectPA\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 288
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">
\t\t\t\tКонструкторский отдел
\t\t\t</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСергей Багин
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tКонструктор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 313
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Konstruktor_Sergej_Bagin.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 316
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Konstruktor_Sergej_Bagin.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Сергей Багин\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberConstructorSB\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 329
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">Иван Авсеев</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tПомощник конструктора
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 348
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.img");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Иван Авсеев\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberConstructorIA\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 361
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Проектный отдел</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t";
        // line 384
        echo "\t\t\t\t\t\t\t";
        // line 385
        echo "\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 395
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">
\t\t\t\tСтроительный отдел
\t\t\t</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tВладимир Короткин
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">Прораб</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"";
        // line 418
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Prorab_Vladimir_Korotkin.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
        // line 421
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Prorab_Vladimir_Korotkin.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Владимир Короткин\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberBuilderVK\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 434
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tИлья Филлипов
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">Прораб</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 451
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Viktor_Balan.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"";
        // line 456
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Viktor_Balan.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Илья Филлипов прораб в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Клиентский отдел</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t";
        // line 481
        echo "\t\t\t\t\t\t\t";
        // line 482
        echo "\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 492
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t";
        // line 510
        echo "\t\t\t\t\t\t\t";
        // line 511
        echo "\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 521
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t";
        // line 539
        echo "\t\t\t\t\t\t\t";
        // line 540
        echo "\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 550
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Отдел снабжения</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tНаталья Филлипова
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">Руководитель отдела снабжения</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"";
        // line 572
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Tatyana_Svetlakova.webp");
        echo " 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"";
        // line 577
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person/Tatyana_Svetlakova.jpg");
        echo "\"
\t\t\t\t\t\t\t\talt=\"Наталья Филлипова руководитель отдела снабжения в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t";
        // line 597
        echo "\t\t\t\t\t\t\t";
        // line 598
        echo "\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 608
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t";
        // line 626
        echo "\t\t\t\t\t\t\t";
        // line 627
        echo "\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"";
        // line 637
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</section>

<section class=\"about-item about-item--pale-grey\">
\t<div class=\"about-item__inner\">
\t\t<div class=\"about-item__text\">
\t\t\t<h2 class=\"about-item__title\">
\t\t\t\tCтаньте частью нашей<br />
\t\t\t\tдружной команды!
\t\t\t</h2>
\t\t\t<p>Люди&nbsp;&mdash; наш важнейший ресурс.</p>
\t\t\t<p>
\t\t\t\tМы&nbsp;публикуем вакансии как для опытных специалистов, так и&nbsp;для
\t\t\t\tтех, кто находится в&nbsp;начале карьерного пути. Если
\t\t\t\tвы&nbsp;планируете карьеру в&nbsp;<span class=\"logo-brand\">MANSIO</span
\t\t\t\t>, помимо профильного образования мы&nbsp;ожидаем увидеть в&nbsp;вас
\t\t\t\tстремление развиваться и&nbsp;повышать профессиональные навыки,
\t\t\t\tчестность и&nbsp;прямоту, умение брать ответственность
\t\t\t\tи&nbsp;добросовестно выполнять работу. Мы, в&nbsp;свою очередь,
\t\t\t\tпредлагаем работу в&nbsp;сплоченном коллективе с&nbsp;возможностью расти
\t\t\t\tи&nbsp;предлагать к&nbsp;реализации собственные идеи!
\t\t\t</p>
\t\t\t<p>
\t\t\t\tОтправьте своё резюме и&nbsp;станьте частью команды
\t\t\t\t<span class=\"logo-brand\">MANSIO GROUP</span>!
\t\t\t</p>
\t\t\t<div class=\"about-item__btn-wrap\">
\t\t\t\t";
        // line 670
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Отправить резюме"        ;
        $context['__cms_partial_params']['mod'] = "blue"        ;
        $context['__cms_partial_params']['bemElement'] = "about-item__btn"        ;
        $context['__cms_partial_params']['modal'] = "vacancyResponse"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 671
        echo " ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Смотреть вакансии"        ;
        $context['__cms_partial_params']['bemElement'] = "about-item__btn"        ;
        $context['__cms_partial_params']['href'] = "/vacancy"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 674
        echo "\t\t\t</div>
\t\t</div>
\t\t<picture class=\"about-item__picture\">
\t\t\t<source
\t\t\t\tsrcset=\"";
        // line 678
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/content-team.webp");
        echo "\"
\t\t\t\ttype=\"image/webp\" />
\t\t\t<img
\t\t\t\tsrc=\"";
        // line 681
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/content-team.jpg");
        echo "\"
\t\t\t\twidth=\"885\"
\t\t\t\talt=\"Небольшая строительная монтажная фирма\"
\t\t\t\tloading=\"lazy\" />
\t\t</picture>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\komanda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  869 => 681,  863 => 678,  857 => 674,  849 => 671,  841 => 670,  805 => 637,  793 => 627,  791 => 626,  771 => 608,  759 => 598,  757 => 597,  735 => 577,  727 => 572,  702 => 550,  690 => 540,  688 => 539,  668 => 521,  656 => 511,  654 => 510,  634 => 492,  622 => 482,  620 => 481,  593 => 456,  585 => 451,  565 => 434,  549 => 421,  543 => 418,  517 => 395,  505 => 385,  503 => 384,  478 => 361,  462 => 348,  456 => 345,  437 => 329,  421 => 316,  415 => 313,  387 => 288,  371 => 275,  365 => 272,  344 => 254,  328 => 241,  322 => 238,  305 => 223,  297 => 207,  291 => 204,  261 => 177,  253 => 172,  230 => 152,  222 => 147,  200 => 128,  184 => 115,  178 => 112,  150 => 87,  142 => 82,  118 => 61,  110 => 56,  88 => 37,  72 => 24,  66 => 21,  45 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'sections/first-screen' bgClass='team' title='Наша команда' %}
<section class=\"division\">
\t<div class=\"container\">
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Администрация</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tДмитрий Алимов
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tГенеральный директор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Generalnyj_direktor_Dmitrij_Alimov.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Дмитрий Алимов\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberAdminDA\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tАндрей Петрухин
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tКоммерческий директор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/person/Andrey_Petruhin.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/person/Andrey_Petruhin.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Андрей Петрухин коммерческий директор в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tКонстантин Ким
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tДиректор по маркетингу
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/person/Konstantin_Kim.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/person/Konstantin_Kim.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Константин Ким директор по маркетингу в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Отдел продаж</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tЕкатерина Дмитренко
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tМаркетолог
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Marketolog_Ekaterina_Dmitrenko.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Marketolog_Ekaterina_Dmitrenko.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Екатерина Дмитренко\"
\t\t\t\t\t\t\t\twidth=\"418\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberED\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tИрина Ермолова
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tМенеджер проектов
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/person/Irina_Ermolova.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/person/Irina_Ermolova.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Ирина Ермолова менеджер проектов в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li><li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tЕгор Копцев
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tМенеджер проектов
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/person/Egor_Koptsev.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/person/Egor_Koptsev.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Копцев Егор менеджер проектов в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">
\t\t\t\tАрхитектурный отдел
\t\t\t</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tПрейс Всеволод
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tВедущий Архитектор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Vsevolod_Preis.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Vsevolod_Preis.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Прейс Всеволод – ведущий архитектор Mansio group\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t{# <button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button> #}
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tЕлизавета Труб
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tВедущий Архитектор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Vedushhij_Arkhitektor_Elizaveta_Trub.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Елизавета Труб\"
\t\t\t\t\t\t\t\twidth=\"418\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberET\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tПолина Авсеева
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tАрхитектор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Arkhitektor_Polina_Avseeva.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Arkhitektor_Polina_Avseeva.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Полина Авсеева\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberArchitectPA\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">
\t\t\t\tКонструкторский отдел
\t\t\t</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСергей Багин
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tКонструктор
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Konstruktor_Sergej_Bagin.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Konstruktor_Sergej_Bagin.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Сергей Багин\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberConstructorSB\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">Иван Авсеев</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tПомощник конструктора
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Pomoshnik_konstruktora_Ivan_Avseev.img'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Иван Авсеев\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberConstructorIA\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Проектный отдел</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t{# <source srcset=\".webp 1x\" type=\"image/webp\" /> #}
\t\t\t\t\t\t\t{# <img src=\".jpg\" alt=\"Скоро представим\" width=\"370\" /> #}
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">
\t\t\t\tСтроительный отдел
\t\t\t</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tВладимир Короткин
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">Прораб</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrcset=\"{{ 'assets/images/person/Prorab_Vladimir_Korotkin.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{ 'assets/images/person/Prorab_Vladimir_Korotkin.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Владимир Короткин\"
\t\t\t\t\t\t\t\twidth=\"500\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"memberBuilderVK\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tИлья Филлипов
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">Прораб</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/person/Viktor_Balan.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/person/Viktor_Balan.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Илья Филлипов прораб в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Клиентский отдел</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t{# <source srcset=\".webp 1x\" type=\"image/webp\" /> #}
\t\t\t\t\t\t\t{# <img src=\".jpg\" alt=\"Скоро представим\" width=\"370\" /> #}
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t{# <source srcset=\".webp 1x\" type=\"image/webp\" /> #}
\t\t\t\t\t\t\t{# <img src=\".jpg\" alt=\"Скоро представим\" width=\"370\" /> #}
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t{# <source srcset=\".webp 1x\" type=\"image/webp\" /> #}
\t\t\t\t\t\t\t{# <img src=\".jpg\" alt=\"Скоро представим\" width=\"370\" /> #}
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"division__team\">
\t\t\t<h2 class=\"division__title\">Отдел снабжения</h2>
\t\t\t<ul class=\"division__list\">
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tНаталья Филлипова
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">Руководитель отдела снабжения</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t<source
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-srcset=\"{{ 'assets/images/person/Tatyana_Svetlakova.webp'|theme }} 1x\"
\t\t\t\t\t\t\t\ttype=\"image/webp\" />
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"lazy\"
\t\t\t\t\t\t\t\tsrc=\"data:image/gif;base64,R0lGODlhHQA0AIAAAP///wAAACH5BAEAAAEALAAAAAAdADQAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6VgAAOw==\"
\t\t\t\t\t\t\t\tdata-src=\"{{ 'assets/images/person/Tatyana_Svetlakova.jpg'|theme }}\"
\t\t\t\t\t\t\t\talt=\"Наталья Филлипова руководитель отдела снабжения в MANSIO GROUP\"
\t\t\t\t\t\t\t\twidth=\"420\" />
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t{# <source srcset=\".webp 1x\" type=\"image/webp\" /> #}
\t\t\t\t\t\t\t{# <img src=\".jpg\" alt=\"Скоро представим\" width=\"370\" /> #}
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li class=\"card card--modal division__member\">
\t\t\t\t\t<a class=\"card__link-wrapper\">
\t\t\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t\t\t<dt class=\"card__title\">
\t\t\t\t\t\t\t\t\tСкоро представим
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"card__subtitle\">
\t\t\t\t\t\t\t\t\tСо всеми должностями
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<picture class=\"card__picture\">
\t\t\t\t\t\t\t{# <source srcset=\".webp 1x\" type=\"image/webp\" /> #}
\t\t\t\t\t\t\t{# <img src=\".jpg\" alt=\"Скоро представим\" width=\"370\" /> #}
\t\t\t\t\t\t</picture>
\t\t\t\t\t</a>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"btn btn--white card__modal-btn\"
\t\t\t\t\t\tdata-modal=\"@@memberModal\"
\t\t\t\t\t\ttype=\"button\">
\t\t\t\t\t\tОткрыть профиль
\t\t\t\t\t\t<span
\t\t\t\t\t\t\t><svg>
\t\t\t\t\t\t\t\t<use
\t\t\t\t\t\t\t\t\txlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use></svg
\t\t\t\t\t\t></span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</section>

<section class=\"about-item about-item--pale-grey\">
\t<div class=\"about-item__inner\">
\t\t<div class=\"about-item__text\">
\t\t\t<h2 class=\"about-item__title\">
\t\t\t\tCтаньте частью нашей<br />
\t\t\t\tдружной команды!
\t\t\t</h2>
\t\t\t<p>Люди&nbsp;&mdash; наш важнейший ресурс.</p>
\t\t\t<p>
\t\t\t\tМы&nbsp;публикуем вакансии как для опытных специалистов, так и&nbsp;для
\t\t\t\tтех, кто находится в&nbsp;начале карьерного пути. Если
\t\t\t\tвы&nbsp;планируете карьеру в&nbsp;<span class=\"logo-brand\">MANSIO</span
\t\t\t\t>, помимо профильного образования мы&nbsp;ожидаем увидеть в&nbsp;вас
\t\t\t\tстремление развиваться и&nbsp;повышать профессиональные навыки,
\t\t\t\tчестность и&nbsp;прямоту, умение брать ответственность
\t\t\t\tи&nbsp;добросовестно выполнять работу. Мы, в&nbsp;свою очередь,
\t\t\t\tпредлагаем работу в&nbsp;сплоченном коллективе с&nbsp;возможностью расти
\t\t\t\tи&nbsp;предлагать к&nbsp;реализации собственные идеи!
\t\t\t</p>
\t\t\t<p>
\t\t\t\tОтправьте своё резюме и&nbsp;станьте частью команды
\t\t\t\t<span class=\"logo-brand\">MANSIO GROUP</span>!
\t\t\t</p>
\t\t\t<div class=\"about-item__btn-wrap\">
\t\t\t\t{% partial 'elements/btn' text='Отправить резюме' mod='blue'
\t\t\t\tbemElement='about-item__btn' modal='vacancyResponse' %} {% partial
\t\t\t\t'elements/btn' text='Смотреть вакансии' bemElement='about-item__btn'
\t\t\t\thref='/vacancy' %}
\t\t\t</div>
\t\t</div>
\t\t<picture class=\"about-item__picture\">
\t\t\t<source
\t\t\t\tsrcset=\"{{ 'assets/images/content/content-team.webp'|theme }}\"
\t\t\t\ttype=\"image/webp\" />
\t\t\t<img
\t\t\t\tsrc=\"{{ 'assets/images/content/content-team.jpg'|theme }}\"
\t\t\t\twidth=\"885\"
\t\t\t\talt=\"Небольшая строительная монтажная фирма\"
\t\t\t\tloading=\"lazy\" />
\t\t</picture>
\t</div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\komanda.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("theme" => 21);
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
