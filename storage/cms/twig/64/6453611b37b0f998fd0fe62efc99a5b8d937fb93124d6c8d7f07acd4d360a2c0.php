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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\sections\contacts_connection.htm */
class __TwigTemplate_13fb13f638e2d70f64c1c7707085a21dd10c32d0503dfe41618e7484478b2365 extends \Twig\Template
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
        echo "<div class=\"connection\">
  <div class=\"container\">
    <div class=\"connection__inner\">
      <div class=\"connection__header\">
        <div class=\"connection__title\">Свяжитесь с нами</div>
        <div class=\"connection__desc\">Если вам нужна консультация, свяжитесь с нами: отправьте электронное письмо, напишите в удобный мессенджер или позвоните, Вы получите ответ в ближайшее время!</div>
      </div>
      <address class=\"connection__content\">
        <div class=\"connection__item\">
          <div class=\"connection__icon\">
            <svg width=\"28\">
              <use xlink:href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#connection-icon-1");
        echo "\"></use>
            </svg>
          </div>
          <div class=\"connection__subtitle\">Телефон</div>
          <p>Офис:<a href=\"tel:+74951820242\">+7 (495) 182-02-42</a></p>

          <div class=\"connection__socials  socials  socials--bg-white\">

            <a href=\"https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20\"
              target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#whatsapp");
        echo "\"></use>
              </svg>
            </a>

            <a href=\"https://t.me/mansio_group\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#telegram");
        echo "\"></use>
              </svg>
            </a>

            <a href=\"https://www.instagram.com/mansio_group.ru/\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#instagram");
        echo "\"></use>
              </svg>
            </a>

            <a href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#facebook");
        echo "\"></use>
              </svg>
            </a>

            <a href=\"https://vk.com/mansiogroupru\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#vk");
        echo "\"></use>
              </svg>
            </a>

            <a class=\"socials__link\" href=\"https://www.youtube.com/channel/UCwk0EXMdvmPlQdPBP9AX9MQ\" target=\"_blank\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#youtube");
        echo "\"></use>
              </svg>
            </a>

            <a href=\"https://vm.tiktok.com/ZSeSrcbk3/\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#tik-tok");
        echo "\"></use>
              </svg>
            </a>
          </div>
        </div>
        <div class=\"connection__item\">
          <div class=\"connection__icon\">
            <svg width=\"28\">
              <use xlink:href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#connection-icon-2");
        echo "\"></use>
            </svg>
          </div>
          <div class=\"connection__subtitle\">Адрес</div>
          <p class=\"connection__address\">143082, Россия, Рублево-Успенское шоссе 1 км, д 6, офис 512</p>
        </div>
        <div class=\"connection__item\">
          <div class=\"connection__icon\">
            <svg width=\"28\">
              <use xlink:href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#connection-icon-3");
        echo "\"></use>
            </svg>
          </div>
          <div class=\"connection__subtitle\">Почта</div>
          <p><a href=\"mailto:manager@mansio.ru\">info@mansio-group.ru</a></p>
        </div>
      </address>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\contacts_connection.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 76,  131 => 67,  120 => 59,  111 => 53,  102 => 47,  93 => 41,  84 => 35,  75 => 29,  66 => 23,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"connection\">
  <div class=\"container\">
    <div class=\"connection__inner\">
      <div class=\"connection__header\">
        <div class=\"connection__title\">Свяжитесь с нами</div>
        <div class=\"connection__desc\">Если вам нужна консультация, свяжитесь с нами: отправьте электронное письмо, напишите в удобный мессенджер или позвоните, Вы получите ответ в ближайшее время!</div>
      </div>
      <address class=\"connection__content\">
        <div class=\"connection__item\">
          <div class=\"connection__icon\">
            <svg width=\"28\">
              <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#connection-icon-1'|theme }}\"></use>
            </svg>
          </div>
          <div class=\"connection__subtitle\">Телефон</div>
          <p>Офис:<a href=\"tel:+74951820242\">+7 (495) 182-02-42</a></p>

          <div class=\"connection__socials  socials  socials--bg-white\">

            <a href=\"https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20\"
              target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#whatsapp'|theme }}\"></use>
              </svg>
            </a>

            <a href=\"https://t.me/mansio_group\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#telegram'|theme }}\"></use>
              </svg>
            </a>

            <a href=\"https://www.instagram.com/mansio_group.ru/\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#instagram'|theme }}\"></use>
              </svg>
            </a>

            <a href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#facebook'|theme }}\"></use>
              </svg>
            </a>

            <a href=\"https://vk.com/mansiogroupru\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#vk'|theme }}\"></use>
              </svg>
            </a>

            <a class=\"socials__link\" href=\"https://www.youtube.com/channel/UCwk0EXMdvmPlQdPBP9AX9MQ\" target=\"_blank\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#youtube'|theme }}\"></use>
              </svg>
            </a>

            <a href=\"https://vm.tiktok.com/ZSeSrcbk3/\" target=\"_blank\" class=\"socials__link\">
              <svg class=\"socials__icon\">
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#tik-tok'|theme }}\"></use>
              </svg>
            </a>
          </div>
        </div>
        <div class=\"connection__item\">
          <div class=\"connection__icon\">
            <svg width=\"28\">
              <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#connection-icon-2'|theme }}\"></use>
            </svg>
          </div>
          <div class=\"connection__subtitle\">Адрес</div>
          <p class=\"connection__address\">143082, Россия, Рублево-Успенское шоссе 1 км, д 6, офис 512</p>
        </div>
        <div class=\"connection__item\">
          <div class=\"connection__icon\">
            <svg width=\"28\">
              <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#connection-icon-3'|theme }}\"></use>
            </svg>
          </div>
          <div class=\"connection__subtitle\">Почта</div>
          <p><a href=\"mailto:manager@mansio.ru\">info@mansio-group.ru</a></p>
        </div>
      </address>
    </div>
  </div>
</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\contacts_connection.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
