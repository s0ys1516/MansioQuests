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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\call2action_social.htm */
class __TwigTemplate_6f2e0407011c2a022b0170a1e39968abab59d7b0cda7d4ef197cbd6df937bd81 extends \Twig\Template
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
        echo "<div class=\"contacts__social\">

  <div class=\"contacts__social-title\">Подписывайтесь на&nbsp;наши соцсети и&nbsp;будьте в&nbsp;курсе событий, а&nbsp;также самых выгодных предложений</div>

  <div class=\"socials\">

    <a href=\"https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20\"
      target=\"_blank\" class=\"socials__link\">
      <svg class=\"socials__icon\">
        <use xlink:href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#whatsapp");
        echo "\"></use>
      </svg>
    </a>

    <a href=\"https://t.me/mansio_group\" target=\"_blank\" class=\"socials__link\">
      <svg class=\"socials__icon\">
        <use xlink:href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#telegram");
        echo "\"></use>
      </svg>
    </a>

    <a href=\"https://www.instagram.com/mansio_group.ru/\" target=\"_blank\" class=\"socials__link\">
      <svg class=\"socials__icon\">
        <use xlink:href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#instagram");
        echo "\"></use>
      </svg>
    </a>

    <a href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\" target=\"_blank\"
      class=\"socials__link\">
      <svg class=\"socials__icon\">
        <use xlink:href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#facebook");
        echo "\"></use>
      </svg>
    </a>

    <a href=\"https://vk.com/mansiogroupru\" target=\"_blank\" class=\"socials__link\">
      <svg class=\"socials__icon\">
        <use xlink:href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#vk");
        echo "\"></use>
      </svg>
    </a>

    <a class=\"socials__link\" href=\"https://www.youtube.com/channel/UCwk0EXMdvmPlQdPBP9AX9MQ\" target=\"_blank\">
      <svg class=\"socials__icon\">
        <use xlink:href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#youtube");
        echo "\"></use>
      </svg>
    </a>

    <a href=\"https://vm.tiktok.com/ZSeSrcbk3/\" target=\"_blank\" class=\"socials__link\">
      <svg class=\"socials__icon\">
        <use xlink:href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#tik-tok");
        echo "\"></use>
      </svg>
    </a>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\call2action_social.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  96 => 41,  87 => 35,  78 => 29,  68 => 22,  59 => 16,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contacts__social\">

  <div class=\"contacts__social-title\">Подписывайтесь на&nbsp;наши соцсети и&nbsp;будьте в&nbsp;курсе событий, а&nbsp;также самых выгодных предложений</div>

  <div class=\"socials\">

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

    <a href=\"https://business.facebook.com/Mansio-Строительство-домов-103324025394478/\" target=\"_blank\"
      class=\"socials__link\">
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

</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\call2action_social.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 10);
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
