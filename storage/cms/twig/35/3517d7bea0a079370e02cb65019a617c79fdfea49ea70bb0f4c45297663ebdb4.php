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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\tehnologii.htm */
class __TwigTemplate_220e554b31be0e39b2a432993eebadd4a5d8e80811e665ae8e253caf67eab20c extends \Twig\Template
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
        $context["dsc"] = "<p style=\"text-transform: uppercase;\">Высокое качество и надежность домов компании «<span
    class=\"logo-brand\">MANSIO
    GROUP</span>» обусловлено использованием:</p>
<ul>
  <li>Надежных и&nbsp;проверенных годами технологий строительства</li>
  <li>Только качественных строительных материалов крупных заводов-изготовителей</li>
</ul>";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = "Технологии строительства"        ;
        $context['__cms_partial_params']['bgClass'] = "tech"        ;
        $context['__cms_partial_params']['dsc'] = ($context["dsc"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/first-screen"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/tech"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "<section class=\"contacts\">
  <div class=\"contacts__bg\">
    <div class=\"container\">
      <div class=\"contacts__window\">
        <div class=\"action-call\">
          <div class=\"brand-flag\">
            <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
              <use xlink:href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
            </svg>
          </div>
          <div class=\"action-call__inner\">
            <div class=\"person  action-call__person\">
              <div class=\"person__name-wrap\">
                <p class=\"person__name\">Александра Бикова</p>
                <p class=\"person__sub-name\">Проектный консультант</p>
              </div>
              <div class=\"person__foto-wrap action-call__person-foto\">
                <picture>
                  <source srcset=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.webp");
        echo " 1x\" type=\"image/webp\">
                  <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/manager-w.png");
        echo "\" alt=\"Александра Бикова\" width=\"704\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Остались вопросы? <br>Мы&nbsp;проконсультируем Вас!</div>
              <p class=\"action-call__dsc\">
                Менеджер свяжется с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведет исчерпывающую консультацию</p>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"824449\", hash: \"82b1de926fdb7586c319326cd6a0c87f\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_824449\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640600534\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/call2action_about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\tehnologii.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 49,  109 => 48,  88 => 30,  84 => 29,  70 => 18,  61 => 11,  57 => 10,  54 => 9,  47 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dsc = '<p style=\"text-transform: uppercase;\">Высокое качество и надежность домов компании «<span
    class=\"logo-brand\">MANSIO
    GROUP</span>» обусловлено использованием:</p>
<ul>
  <li>Надежных и&nbsp;проверенных годами технологий строительства</li>
  <li>Только качественных строительных материалов крупных заводов-изготовителей</li>
</ul>' %}
{% partial 'sections/first-screen' title='Технологии строительства' bgClass='tech' dsc=dsc %}

{% partial 'sections/tech' %}
<section class=\"contacts\">
  <div class=\"contacts__bg\">
    <div class=\"container\">
      <div class=\"contacts__window\">
        <div class=\"action-call\">
          <div class=\"brand-flag\">
            <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
              <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme }}\"></use>
            </svg>
          </div>
          <div class=\"action-call__inner\">
            <div class=\"person  action-call__person\">
              <div class=\"person__name-wrap\">
                <p class=\"person__name\">Александра Бикова</p>
                <p class=\"person__sub-name\">Проектный консультант</p>
              </div>
              <div class=\"person__foto-wrap action-call__person-foto\">
                <picture>
                  <source srcset=\"{{ 'assets/images/content/manager-w.webp'|theme }} 1x\" type=\"image/webp\">
                  <img src=\"{{ 'assets/images/content/manager-w.png'|theme }}\" alt=\"Александра Бикова\" width=\"704\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Остались вопросы? <br>Мы&nbsp;проконсультируем Вас!</div>
              <p class=\"action-call__dsc\">
                Менеджер свяжется с&nbsp;вами в&nbsp;кратчайшие сроки и&nbsp;проведет исчерпывающую консультацию</p>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"824449\", hash: \"82b1de926fdb7586c319326cd6a0c87f\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_824449\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640600534\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      {% partial 'elements/call2action_about' %}
    </div>
  </div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\tehnologii.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 8);
        static $filters = array("theme" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
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
