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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\kontakty.htm */
class __TwigTemplate_a174c8e16c01ce4df35011abb1249d308823786ad3b3f96d1b7e59bdae9279cf extends \Twig\Template
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
        $context['__cms_partial_params']['title'] = "Контакты"        ;
        $context['__cms_partial_params']['bgClass'] = "contacts"        ;
        $context['__cms_partial_params']['dsc'] = ($context["dsc"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/first-screen"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/contacts_connection"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/contacts_info"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/map"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "
<section class=\"contacts\">
  <div class=\"contacts__bg\">
    <div class=\"container\">
      <div class=\"contacts__window\">
        <div class=\"action-call\">
          <div class=\"brand-flag\">
            <svg class=\"brand-flag__logo\" width=\"103\" height=\"16\">
              <use xlink:href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
            </svg>
          </div>
          <div class=\"action-call__inner\">
            <div class=\"person  action-call__person\">
              <div class=\"person__name-wrap  visually-hidden\">
                <p class=\"person__name\">Полина Авсеева</p>
                <p class=\"person__sub-name\">Архитектор</p>
              </div>
              <div class=\"action-call__person-foto  action-call__person-foto--middle\">
                <picture>
                  <source srcset=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/architect-polina.webp");
        echo " 1x\" type=\"image/webp\">
                  <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/content/architect-polina.png");
        echo "\" alt=\"Полина Авсеева\" width=\"443\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Наши специалисты оперативно изучат обращение, свяжутся с&nbsp;вами и&nbsp;ответят на&nbsp;интересующие вопросы</div>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"824473\", hash: \"229bc93141dbd97270bacd314cfb1290\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_824473\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640606437\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/call2action_social"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\kontakty.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  114 => 44,  95 => 28,  91 => 27,  77 => 16,  67 => 8,  63 => 7,  60 => 6,  56 => 5,  53 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'sections/first-screen' title='Контакты' bgClass='contacts' dsc=dsc %}

{% partial 'sections/contacts_connection' %}

{% partial 'sections/contacts_info' %}

{% partial 'elements/map' %}

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
              <div class=\"person__name-wrap  visually-hidden\">
                <p class=\"person__name\">Полина Авсеева</p>
                <p class=\"person__sub-name\">Архитектор</p>
              </div>
              <div class=\"action-call__person-foto  action-call__person-foto--middle\">
                <picture>
                  <source srcset=\"{{ 'assets/images/content/architect-polina.webp'|theme }} 1x\" type=\"image/webp\">
                  <img src=\"{{ 'assets/images/content/architect-polina.png'|theme }}\" alt=\"Полина Авсеева\" width=\"443\">
                </picture>
              </div>
            </div>
            <div class=\"action-call__right-col\">
              <!-- <span class=\"contacts-form__subject\">Форма заявки</span> -->
              <div class=\"contacts-form__title\">Наши специалисты оперативно изучат обращение, свяжутся с&nbsp;вами и&nbsp;ответят на&nbsp;интересующие вопросы</div>
              <div class=\"action-call__form-wrap  action-call__form-wrap--fit\">
                <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: \"824473\", hash: \"229bc93141dbd97270bacd314cfb1290\", locale: \"ru\" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, \"amo_forms_\", \"params\", \"load\", \"loaded\");</script>
                <script id=\"amoforms_script_824473\" async=\"async\" charset=\"utf-8\"
                  src=\"https://forms.amocrm.ru/forms/assets/js/amoforms.js?1640606437\"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      {% partial 'elements/call2action_social' %}
    </div>
  </div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\kontakty.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("theme" => 16);
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
