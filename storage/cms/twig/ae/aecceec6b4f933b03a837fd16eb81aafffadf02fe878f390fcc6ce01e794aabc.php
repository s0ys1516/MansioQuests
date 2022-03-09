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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\sections\tech.htm */
class __TwigTemplate_8e5b444745aeb7a5510da659680364b738a2bc0cdc63bc72765cfe36f114721e extends \Twig\Template
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
        echo "<section class=\"tech\">
  <h2 class=\"visually-hidden\">Статьи о технологиях Mansio group</h2>
  <ul class=\"tech__list\">
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Строительство из&nbsp;газоблока</h3>
        <picture class=\"article-card__picture\">
          <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tech-card.jpg");
        echo "\" alt=\"Строительство из газоблока\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"";
        // line 10
        echo RainLab\Pages\Classes\Page::url("stroitelstvo-iz-gazobloka");
        echo "\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Строительство из&nbsp;кирпича</h3>
        <picture class=\"article-card__picture\">
          <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tech-card-2.jpg");
        echo "\" alt=\"Строительство из кирпича\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"";
        // line 19
        echo RainLab\Pages\Classes\Page::url("stroitelstvo-iz-kirpicha");
        echo "\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Строительство монолитное</h3>
        <picture class=\"article-card__picture\">
          <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tech-card-3.jpg");
        echo "\" alt=\"Строительство монолитное\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"";
        // line 28
        echo RainLab\Pages\Classes\Page::url("stroitelstvo-monolitnoe");
        echo "\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Коммерческое строительство</h3>
        <picture class=\"article-card__picture\">
          <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tech-card-4.jpg");
        echo "\" alt=\"Коммерческое строительство\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"";
        // line 37
        echo RainLab\Pages\Classes\Page::url("kommercheskoe-stroitelstvo");
        echo "\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Все о&nbsp;проектах и&nbsp;архитектуре</h3>
        <picture class=\"article-card__picture\">
          <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tech-card-5.jpg");
        echo "\" alt=\"Все о проектах и архитектуре\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"";
        // line 46
        echo RainLab\Pages\Classes\Page::url("vse-o-proektah-i-arhitekture");
        echo "\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Описание этапов строительства</h3>
        <picture class=\"article-card__picture\">
          <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tech-card-6.jpg");
        echo "\" alt=\"Описание этапов строительства\">
        </picture>
         <a class=\"btn  btn--white  article-card__btn\" href=\"";
        // line 55
        echo RainLab\Pages\Classes\Page::url("etapy-stroitelstva-kamennogo-doma");
        echo "\">Открыть страницу</a>
      </article>
    </li>
  </ul>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\tech.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  123 => 53,  113 => 46,  108 => 44,  98 => 37,  93 => 35,  83 => 28,  78 => 26,  68 => 19,  63 => 17,  53 => 10,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"tech\">
  <h2 class=\"visually-hidden\">Статьи о технологиях Mansio group</h2>
  <ul class=\"tech__list\">
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Строительство из&nbsp;газоблока</h3>
        <picture class=\"article-card__picture\">
          <img src=\"{{ 'assets/images/tech-card.jpg'|theme }}\" alt=\"Строительство из газоблока\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"{{'stroitelstvo-iz-gazobloka'|staticPage}}\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Строительство из&nbsp;кирпича</h3>
        <picture class=\"article-card__picture\">
          <img src=\"{{ 'assets/images/tech-card-2.jpg'|theme }}\" alt=\"Строительство из кирпича\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"{{'stroitelstvo-iz-kirpicha'|staticPage}}\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Строительство монолитное</h3>
        <picture class=\"article-card__picture\">
          <img src=\"{{ 'assets/images/tech-card-3.jpg'|theme }}\" alt=\"Строительство монолитное\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"{{'stroitelstvo-monolitnoe'|staticPage}}\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Коммерческое строительство</h3>
        <picture class=\"article-card__picture\">
          <img src=\"{{ 'assets/images/tech-card-4.jpg'|theme }}\" alt=\"Коммерческое строительство\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"{{'kommercheskoe-stroitelstvo'|staticPage}}\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Все о&nbsp;проектах и&nbsp;архитектуре</h3>
        <picture class=\"article-card__picture\">
          <img src=\"{{ 'assets/images/tech-card-5.jpg'|theme }}\" alt=\"Все о проектах и архитектуре\">
        </picture>
        <a class=\"btn  btn--white  article-card__btn\" href=\"{{'vse-o-proektah-i-arhitekture'|staticPage}}\">Открыть страницу</a>
      </article>
    </li>
    <li class=\"tech__item\">
      <article class=\"article-card\">
        <h3 class=\"article-card__title\">Описание этапов строительства</h3>
        <picture class=\"article-card__picture\">
          <img src=\"{{ 'assets/images/tech-card-6.jpg'|theme }}\" alt=\"Описание этапов строительства\">
        </picture>
         <a class=\"btn  btn--white  article-card__btn\" href=\"{{'etapy-stroitelstva-kamennogo-doma'|staticPage}}\">Открыть страницу</a>
      </article>
    </li>
  </ul>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\tech.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 8, "staticPage" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
