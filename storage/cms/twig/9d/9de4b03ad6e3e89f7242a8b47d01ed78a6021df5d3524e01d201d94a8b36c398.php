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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\kreditovanie-row.htm */
class __TwigTemplate_9f9839c19c86ab2c18f1527cc91b5a6d1c6086ac654a79f6bba6af7c0b425ad4 extends \Twig\Template
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
        echo "<div class=\"promo container  container--xxl\">
<div class=\"promo__inner\">
\t\t<p class=\"promo__title\">Кредитные продукты Банков партнеров Mansio Group для строительства дома в&nbsp;2022&nbsp;г.</p>
\t\t<p class=\"promo__subtitle\">«Строим, не ограничивая вашу финансовую свободу!»</p>
\t\t<div class=\"promo__row\">
\t\t\t<div class=\"carousel glide\">
\t\t\t\t<div class=\"glide__track\" data-glide-el=\"track\">
\t\t\t\t\t<ul class=\"glide__slides\">
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"dom-rf\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"125\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#bank_dom-rf");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"sber\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"180\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#bank_sber");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"pochta-bank\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"100\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#bank_pb");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"rosselkhoz\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"194\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#bank_rs");
        echo "\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 40
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['href'] = "/kreditovanie"        ;
        $context['__cms_partial_params']['text'] = "Перейти в раздел кредитование"        ;
        $context['__cms_partial_params']['bemElement'] = "promo__btn"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\kreditovanie-row.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  92 => 40,  82 => 33,  72 => 26,  62 => 19,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"promo container  container--xxl\">
<div class=\"promo__inner\">
\t\t<p class=\"promo__title\">Кредитные продукты Банков партнеров Mansio Group для строительства дома в&nbsp;2022&nbsp;г.</p>
\t\t<p class=\"promo__subtitle\">«Строим, не ограничивая вашу финансовую свободу!»</p>
\t\t<div class=\"promo__row\">
\t\t\t<div class=\"carousel glide\">
\t\t\t\t<div class=\"glide__track\" data-glide-el=\"track\">
\t\t\t\t\t<ul class=\"glide__slides\">
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"dom-rf\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"125\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#bank_dom-rf'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"sber\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"180\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#bank_sber'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"pochta-bank\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"100\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#bank_pb'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t<button class=\"modal-btn\" data-modal=\"back-call\" type=\"button\" data-bank=\"rosselkhoz\">
\t\t\t\t\t\t\t\t<svg class=\"bank-logo\" width=\"194\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#bank_rs'|theme }}\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% partial 'elements/btn' href='/kreditovanie' text='Перейти в раздел кредитование' bemElement='promo__btn' %}
\t\t</div>
\t</div>
</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\kreditovanie-row.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 40);
        static $filters = array("theme" => 12);
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
