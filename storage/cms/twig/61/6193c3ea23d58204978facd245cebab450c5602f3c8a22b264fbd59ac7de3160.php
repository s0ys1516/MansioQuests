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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\global\footer.htm */
class __TwigTemplate_a5da0b12834da3e94305468bfa889e0287df5a02035bda95b9eb86f06d0e944e extends \Twig\Template
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
        echo "<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"footer__inner\">
\t\t\t<div class=\"footer__name\">
\t\t\t\t<a class=\"footer__logo\" ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "url", [], "any", false, false, true, 5) != "/")) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->appFilter("/"), "html", null, true);
            echo "\" aria-label=\"Переход на главную\"
\t\t\t\t\t";
        }
        // line 6
        echo ">
\t\t\t\t\t<svg>
\t\t\t\t\t\t<use xlink:href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<p class=\"footer__title\">Строим дома бизнес-класса в Москве и Московской области</p>
\t\t\t\t<div class=\"footer__bank\">
\t\t\t\t\t<span>ООО «МАНСИО ГРУПП»</span>
\t\t\t\t\t<span>ИНН 7727435818</span>
\t\t\t\t\t<span>ОГРН 1197746734767</span>
\t\t\t\t</div>
\t\t\t\t<a class=\"footer__policy\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/downloads/privacy.pdf");
        echo "\" download>Политика конфиденциальности</a>
\t\t\t\t<p style=\"font-size:12px;\">Информация, представленная на сайте, не является публичной офертой.</p>
\t\t\t</div>
\t\t\t<div class=\"footer__center\">
\t\t\t\t<nav class=\"footer__nav\">
\t\t\t\t\t<a class=\"footer__link ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) == "catalog")) {
            echo "footer__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) != "catalog")) {
            // line 23
            echo " href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("catalog");
            echo "\" ";
        }
        echo ">Проекты</a>

\t\t\t\t\t<a class=\"footer__link ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 25), "id", [], "any", false, false, true, 25) == "uslugi")) {
            echo "footer__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 25), "id", [], "any", false, false, true, 25) != "uslugi")) {
            // line 26
            echo " href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("uslugi");
            echo "\" ";
        }
        echo ">Услуги</a>

\t\t\t\t\t<a class=\"footer__link ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 28), "id", [], "any", false, false, true, 28) == "tehnologii")) {
            echo "footer__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["this"] ?? null), "page", [], "any", false, false, true, 29), "id", [], "any", false, false, true, 29) != "tehnologii")) {
            echo " href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tehnologii");
            echo "\" ";
        }
        echo ">Технологии</a>

\t\t\t\t\t<a class=\"footer__link ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "id", [], "any", false, false, true, 31) == "o-nas")) {
            echo "footer__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "id", [], "any", false, false, true, 31) != "o-nas")) {
            // line 32
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("o-nas");
            echo "\" ";
        }
        echo ">О нас</a>

\t\t\t\t\t<a class=\"footer__link ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 34), "id", [], "any", false, false, true, 34) == "vakansii")) {
            echo "footer__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 34), "id", [], "any", false, false, true, 34) != "vakansii")) {
            // line 35
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("vakansii");
            echo "\" ";
        }
        echo ">Вакансии</a>

\t\t\t\t\t<a class=\"footer__link ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 37), "id", [], "any", false, false, true, 37) == "kontakty")) {
            echo "footer__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 37), "id", [], "any", false, false, true, 37) != "kontakty")) {
            // line 38
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("kontakty");
            echo "\" ";
        }
        echo ">Контакты</a>
\t\t\t\t</nav>
\t\t\t\t<!-- <div class=\"footer__login\">
          <a href=\"##\">
            <svg>
              <use xlink:href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#login");
        echo "\"></use>
            </svg>
            Войти в личный кабинет
          </a>
        </div> -->
\t\t\t</div>
\t\t\t<div class=\"footer__contacts\">
\t\t\t\t<address class=\"footer__wrap\">
\t\t\t\t\t<div class=\"footer__item  footer__item--two-col\">
\t\t\t\t\t\t<div class=\"footer__item-wrap\">
\t\t\t\t\t\t\t<div class=\"footer__text\">
\t\t\t\t\t\t\t\t<a class=\"footer__phone\" href=\"tel:+74951820242\">
\t\t\t\t\t\t\t\t\t<svg width=\"18\" class=\"phone-icon\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#contacts-icon-2");
        echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t+7 (495) 182-02-42
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button type=\"button\" data-modal=\"back-call\">Получить консультацию</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer__social  socials  socials--bg-white\">
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://t.me/mansio_group\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon  socials__icon--tg\" width=\"27\" height=\"23\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#telegram");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\"
\t\t\t\t\t\t\t\thref=\"https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20\"
\t\t\t\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon  socials__icon--wa\" width=\"23\" height=\"23\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#whatsapp");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://www.instagram.com/mansio_group.ru/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#instagram");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\"
\t\t\t\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#facebook");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://vm.tiktok.com/ZSeSrcbk3/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#tik-tok");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer__item\">
\t\t\t\t\t\t<div class=\"footer__item-wrap\">
\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#reviews-slider-icon-2");
        echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"footer__text\">
\t\t\t\t\t\t\t\t<div class=\"footer__subtitle\">Адрес:</div>
\t\t\t\t\t\t\t\t<span>Рублево-Успенское шоссе 1 км, д 6, офис 512</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer__item\">
\t\t\t\t\t\t<div class=\"footer__item-wrap\">
\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#footer-icon-1");
        echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"footer__text\">
\t\t\t\t\t\t\t\t<div class=\"footer__subtitle\">Электронная почта:</div>
\t\t\t\t\t\t\t\t<a style=\"color: inherit\" href=\"mailto:";
        // line 112
        echo call_user_func_array($this->env->getFunction('html_email')->getCallable(), ["email", "info@mansio-group.ru"]);
        echo "\">info@mansio-group.ru</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</address>
\t\t\t\t";
        // line 117
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Обратный звонок"        ;
        $context['__cms_partial_params']['modal'] = "back-call"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 118
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5KQWSGF\" height=\"0\" width=\"0\"
\t\tstyle=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 118,  267 => 117,  259 => 112,  252 => 108,  238 => 97,  227 => 89,  219 => 84,  210 => 78,  202 => 73,  192 => 66,  179 => 56,  163 => 43,  152 => 38,  146 => 37,  138 => 35,  132 => 34,  124 => 32,  118 => 31,  109 => 29,  104 => 28,  96 => 26,  90 => 25,  82 => 23,  76 => 22,  68 => 17,  56 => 8,  52 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"footer__inner\">
\t\t\t<div class=\"footer__name\">
\t\t\t\t<a class=\"footer__logo\" {% if this.page.url !='/' %} href=\"{{ '/'|app }}\" aria-label=\"Переход на главную\"
\t\t\t\t\t{% endif %}>
\t\t\t\t\t<svg>
\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme }}\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<p class=\"footer__title\">Строим дома бизнес-класса в Москве и Московской области</p>
\t\t\t\t<div class=\"footer__bank\">
\t\t\t\t\t<span>ООО «МАНСИО ГРУПП»</span>
\t\t\t\t\t<span>ИНН 7727435818</span>
\t\t\t\t\t<span>ОГРН 1197746734767</span>
\t\t\t\t</div>
\t\t\t\t<a class=\"footer__policy\" href=\"{{ 'assets/downloads/privacy.pdf'|theme }}\" download>Политика конфиденциальности</a>
\t\t\t\t<p style=\"font-size:12px;\">Информация, представленная на сайте, не является публичной офертой.</p>
\t\t\t</div>
\t\t\t<div class=\"footer__center\">
\t\t\t\t<nav class=\"footer__nav\">
\t\t\t\t\t<a class=\"footer__link {% if this.page.id == 'catalog' %}footer__link--active{% endif %}\" {% if this.page.id
\t\t\t\t\t\t!='catalog' %} href=\"{{ 'catalog'|page }}\" {% endif %}>Проекты</a>

\t\t\t\t\t<a class=\"footer__link {% if this.page.id == 'uslugi' %}footer__link--active{% endif %}\" {% if this.page.id
\t\t\t\t\t\t!='uslugi' %} href=\"{{ 'uslugi'|page }}\" {% endif %}>Услуги</a>

\t\t\t\t\t<a class=\"footer__link {% if this.page.id == 'tehnologii' %}footer__link--active{% endif %}\" {% if
\t\t\t\t\t\tthis.page.id !='tehnologii' %} href=\"{{ 'tehnologii'|page }}\" {% endif %}>Технологии</a>

\t\t\t\t\t<a class=\"footer__link {% if this.page.id == 'o-nas' %}footer__link--active{% endif %}\" {% if this.page.id
\t\t\t\t\t\t!='o-nas' %}href=\"{{ 'o-nas'|page }}\" {% endif %}>О нас</a>

\t\t\t\t\t<a class=\"footer__link {% if this.page.id == 'vakansii' %}footer__link--active{% endif %}\" {% if this.page.id
\t\t\t\t\t\t!='vakansii' %}href=\"{{ 'vakansii'|page }}\" {% endif %}>Вакансии</a>

\t\t\t\t\t<a class=\"footer__link {% if this.page.id == 'kontakty' %}footer__link--active{% endif %}\" {% if this.page.id
\t\t\t\t\t\t!='kontakty' %}href=\"{{ 'kontakty'|page }}\" {% endif %}>Контакты</a>
\t\t\t\t</nav>
\t\t\t\t<!-- <div class=\"footer__login\">
          <a href=\"##\">
            <svg>
              <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#login'|theme }}\"></use>
            </svg>
            Войти в личный кабинет
          </a>
        </div> -->
\t\t\t</div>
\t\t\t<div class=\"footer__contacts\">
\t\t\t\t<address class=\"footer__wrap\">
\t\t\t\t\t<div class=\"footer__item  footer__item--two-col\">
\t\t\t\t\t\t<div class=\"footer__item-wrap\">
\t\t\t\t\t\t\t<div class=\"footer__text\">
\t\t\t\t\t\t\t\t<a class=\"footer__phone\" href=\"tel:+74951820242\">
\t\t\t\t\t\t\t\t\t<svg width=\"18\" class=\"phone-icon\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#contacts-icon-2'|theme }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t+7 (495) 182-02-42
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button type=\"button\" data-modal=\"back-call\">Получить консультацию</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer__social  socials  socials--bg-white\">
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://t.me/mansio_group\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon  socials__icon--tg\" width=\"27\" height=\"23\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#telegram'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\"
\t\t\t\t\t\t\t\thref=\"https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20\"
\t\t\t\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon  socials__icon--wa\" width=\"23\" height=\"23\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#whatsapp'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://www.instagram.com/mansio_group.ru/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#instagram'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\"
\t\t\t\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#facebook'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"socials__link\" href=\"https://vm.tiktok.com/ZSeSrcbk3/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#tik-tok'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer__item\">
\t\t\t\t\t\t<div class=\"footer__item-wrap\">
\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#reviews-slider-icon-2'|theme }}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"footer__text\">
\t\t\t\t\t\t\t\t<div class=\"footer__subtitle\">Адрес:</div>
\t\t\t\t\t\t\t\t<span>Рублево-Успенское шоссе 1 км, д 6, офис 512</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer__item\">
\t\t\t\t\t\t<div class=\"footer__item-wrap\">
\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#footer-icon-1'|theme }}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"footer__text\">
\t\t\t\t\t\t\t\t<div class=\"footer__subtitle\">Электронная почта:</div>
\t\t\t\t\t\t\t\t<a style=\"color: inherit\" href=\"mailto:{{ html_email('info@mansio-group.ru') }}\">info@mansio-group.ru</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</address>
\t\t\t\t{% partial 'elements/btn' text='Обратный звонок' modal='back-call' %}
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5KQWSGF\" height=\"0\" width=\"0\"
\t\tstyle=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "partial" => 117);
        static $filters = array("escape" => 5, "app" => 5, "theme" => 8, "page" => 23);
        static $functions = array("html_email" => 112);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['escape', 'app', 'theme', 'page'],
                ['html_email']
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
