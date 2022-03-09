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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\global\header.htm */
class __TwigTemplate_d77303dc198d84e75055c432115f434374d1dad595029e3435693fe50b9009e6 extends \Twig\Template
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
        echo "<header class=\"header\" id=\"pageHeader\">
\t<div class=\"header__wrapper\">
\t\t<a class=\"header__logo\"
\t\t";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "url", [], "any", false, false, true, 4) != "/")) {
            // line 5
            echo "\t\t\thref=\"";
            echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->appFilter("/"), "html", null, true);
            echo "\" aria-label=\"Переход на главную\"
\t\t";
        }
        // line 6
        echo ">
\t\t\t<svg width=\"169\">
\t\t\t\t<use xlink:href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
\t\t\t</svg>
\t\t</a>
\t\t<div id=\"pageMenuWrapper\" class=\"header__inner\">
\t\t\t<nav class=\"header__nav\">
\t\t\t\t<a class=\"header__link
\t\t\t\t";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "id", [], "any", false, false, true, 14) == "catalog")) {
            echo "header__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "id", [], "any", false, false, true, 14) != "catalog")) {
            // line 15
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("catalog");
            echo "\" ";
        }
        echo ">Проекты</a>

\t\t\t\t<a class=\"header__link
\t\t\t\t";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) == "uslugi")) {
            echo "header__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) != "uslugi")) {
            // line 19
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("uslugi");
            echo "\" ";
        }
        echo ">Услуги</a>

\t\t\t\t<a class=\"header__link
\t\t\t\t";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) == "tehnologii")) {
            echo "header__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) != "tehnologii")) {
            // line 23
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tehnologii");
            echo "\" ";
        }
        echo ">Технологии</a>

\t\t\t\t<a class=\"header__link
\t\t\t\t";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 26), "id", [], "any", false, false, true, 26) == "o-nas")) {
            echo "header__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 26), "id", [], "any", false, false, true, 26) != "o-nas")) {
            // line 27
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("o-nas");
            echo "\" ";
        }
        echo ">О нас</a>
\t\t\t\t\t
\t\t\t\t<a class=\"header__link
\t\t\t\t";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) == "kontakty")) {
            echo "header__link--active";
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) != "kontakty")) {
            // line 31
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("kontakty");
            echo "\" ";
        }
        echo ">Контакты</a>
\t\t\t</nav>
\t\t\t<!-- <a class=\"header__login\" href=\"##\">
        <svg>
          <use xlink:href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#login");
        echo "\"></use>
        </svg>
        Войти
      </a> -->
\t\t\t<div class=\"header__social  socials\">
\t\t\t\t<a class=\"socials__link\" href=\"https://t.me/mansio_group\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon  socials__icon--tg\" width=\"27\" height=\"23\">
\t\t\t\t\t\t<use xlink:href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#telegram");
        echo "\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\"
\t\t\t\t\thref=\"https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20\"
\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon  socials__icon--wa\" width=\"23\" height=\"23\">
\t\t\t\t\t\t<use xlink:href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#whatsapp");
        echo "\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\" href=\"https://www.instagram.com/mansio_group.ru/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t<use xlink:href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#instagram");
        echo "\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\" href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\"
\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t<use xlink:href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#facebook");
        echo "\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\" href=\"https://vm.tiktok.com/ZSeSrcbk3/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t<use xlink:href=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#tik-tok");
        echo "\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"header__contacts\">
\t\t\t\t<a class=\"header__phone\" href=\"tel:+74951820242\" rel=\"nofollow\">+7 (495) 182-02-42</a>
\t\t\t\t<button class=\"header__consultation\" type=\"button\" data-modal=\"back-call\">Получить консультацию</button>
\t\t\t</div>
\t\t</div>
\t\t<button id=\"menuBtn\" class=\"menu\" type=\"button\" aria-label=\"Переключатель отображения меню\" aria-pressed=\"false\">
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t</button>

\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 65,  178 => 60,  169 => 54,  161 => 49,  151 => 42,  141 => 35,  131 => 31,  125 => 30,  116 => 27,  110 => 26,  101 => 23,  95 => 22,  86 => 19,  80 => 18,  71 => 15,  65 => 14,  56 => 8,  52 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\" id=\"pageHeader\">
\t<div class=\"header__wrapper\">
\t\t<a class=\"header__logo\"
\t\t{% if this.page.url !='/' %}
\t\t\thref=\"{{ '/'|app }}\" aria-label=\"Переход на главную\"
\t\t{% endif %}>
\t\t\t<svg width=\"169\">
\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme }}\"></use>
\t\t\t</svg>
\t\t</a>
\t\t<div id=\"pageMenuWrapper\" class=\"header__inner\">
\t\t\t<nav class=\"header__nav\">
\t\t\t\t<a class=\"header__link
\t\t\t\t{% if this.page.id == 'catalog' %}header__link--active{% endif %}\" {% if this.page.id !='catalog'
\t\t\t\t\t%}href=\"{{ 'catalog'|page }}\" {% endif %}>Проекты</a>

\t\t\t\t<a class=\"header__link
\t\t\t\t{% if this.page.id == 'uslugi' %}header__link--active{% endif %}\" {% if this.page.id !='uslugi'
\t\t\t\t\t%}href=\"{{ 'uslugi'|page }}\" {% endif %}>Услуги</a>

\t\t\t\t<a class=\"header__link
\t\t\t\t{% if this.page.id == 'tehnologii' %}header__link--active{% endif %}\" {% if this.page.id !='tehnologii'
\t\t\t\t\t%}href=\"{{ 'tehnologii'|page }}\" {% endif %}>Технологии</a>

\t\t\t\t<a class=\"header__link
\t\t\t\t{% if this.page.id == 'o-nas' %}header__link--active{% endif %}\" {% if this.page.id !='o-nas'
\t\t\t\t\t%}href=\"{{ 'o-nas'|page }}\" {% endif %}>О нас</a>
\t\t\t\t\t
\t\t\t\t<a class=\"header__link
\t\t\t\t{% if this.page.id == 'kontakty' %}header__link--active{% endif %}\" {% if this.page.id !='kontakty'
\t\t\t\t\t%}href=\"{{ 'kontakty'|page }}\" {% endif %}>Контакты</a>
\t\t\t</nav>
\t\t\t<!-- <a class=\"header__login\" href=\"##\">
        <svg>
          <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#login'|theme }}\"></use>
        </svg>
        Войти
      </a> -->
\t\t\t<div class=\"header__social  socials\">
\t\t\t\t<a class=\"socials__link\" href=\"https://t.me/mansio_group\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon  socials__icon--tg\" width=\"27\" height=\"23\">
\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#telegram'|theme }}\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\"
\t\t\t\t\thref=\"https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20\"
\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon  socials__icon--wa\" width=\"23\" height=\"23\">
\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#whatsapp'|theme }}\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\" href=\"https://www.instagram.com/mansio_group.ru/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#instagram'|theme }}\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\" href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\"
\t\t\t\t\ttarget=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#facebook'|theme }}\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"socials__link\" href=\"https://vm.tiktok.com/ZSeSrcbk3/\" target=\"_blank\" rel=\"nofollow\">
\t\t\t\t\t<svg class=\"socials__icon\">
\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#tik-tok'|theme }}\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"header__contacts\">
\t\t\t\t<a class=\"header__phone\" href=\"tel:+74951820242\" rel=\"nofollow\">+7 (495) 182-02-42</a>
\t\t\t\t<button class=\"header__consultation\" type=\"button\" data-modal=\"back-call\">Получить консультацию</button>
\t\t\t</div>
\t\t</div>
\t\t<button id=\"menuBtn\" class=\"menu\" type=\"button\" aria-label=\"Переключатель отображения меню\" aria-pressed=\"false\">
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t</button>

\t</div>
</header>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 5, "app" => 5, "theme" => 8, "page" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'app', 'theme', 'page'],
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
