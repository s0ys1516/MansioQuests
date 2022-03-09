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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\pages\404.htm */
class __TwigTemplate_611c48ed11ec27252d5686dc87d45848a05149c00332c50d603461c0c6a06323 extends \Twig\Template
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
        echo "<div class=\"first-screen  first-screen--thankyou\">
    <div class=\"container\">
        <div class=\"first-screen__inner\">
            <h1 class=\"first-screen__title\">Страница не найдена</h1>
            <p>Сожалем, но похоже мы потеряли эту страницу</p>
            <p>Мы можем помочь найти нужную информацию</p>
            <p>Позвоните нам по номеру  <a href='tel:+74951820242'>+7 (495)
                    182-02-42</a> или напишите в&nbsp;мессенджер: <a
                    href='https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20'
                    target=\"_blank\">Whatsapp</a> или <a href='https://t.me/mansio_group' target=\"_blank\">Telegram</a>
            </p>
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Вернуться на главную"        ;
        $context['__cms_partial_params']['href'] = "/"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"first-screen  first-screen--thankyou\">
    <div class=\"container\">
        <div class=\"first-screen__inner\">
            <h1 class=\"first-screen__title\">Страница не найдена</h1>
            <p>Сожалем, но похоже мы потеряли эту страницу</p>
            <p>Мы можем помочь найти нужную информацию</p>
            <p>Позвоните нам по номеру  <a href='tel:+74951820242'>+7 (495)
                    182-02-42</a> или напишите в&nbsp;мессенджер: <a
                    href='https://wa.me/79175432263?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20'
                    target=\"_blank\">Whatsapp</a> или <a href='https://t.me/mansio_group' target=\"_blank\">Telegram</a>
            </p>
            {% partial 'elements/btn' text='Вернуться на главную' href='/' %}
        </div>
    </div>
</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\pages\\404.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 12);
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
