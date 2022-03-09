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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\sections\intro.htm */
class __TwigTemplate_192cf79b6f3757d7256c00bbf7ead4e1fbc7eda99208fdf7dd9aed90b6c90909 extends \Twig\Template
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
        echo "<section class=\"intro\" id=\"pageFirstScreen\">
\t<div class=\"container\">
\t\t<div class=\"intro__inner\">

\t\t\t<h1 class=\"intro__title\">Строим дома по <span>авторским проектам</span> с заботой и вниманием к деталям</h1>
\t\t\t<p class=\"intro__subtitle\">Хотите обсудить проект вашего будущего дома?</p>

\t\t\t";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Обсудить проект"        ;
        $context['__cms_partial_params']['modal'] = "discuss"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
\t\t</div>
\t\t";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/benefits-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  58 => 11,  54 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"intro\" id=\"pageFirstScreen\">
\t<div class=\"container\">
\t\t<div class=\"intro__inner\">

\t\t\t<h1 class=\"intro__title\">Строим дома по <span>авторским проектам</span> с заботой и вниманием к деталям</h1>
\t\t\t<p class=\"intro__subtitle\">Хотите обсудить проект вашего будущего дома?</p>

\t\t\t{% partial 'elements/btn' text='Обсудить проект' modal='discuss' %}

\t\t</div>
\t\t{% partial 'elements/benefits-list' %}
\t</div>
</section>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\intro.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 8);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
