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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\row-alert.htm */
class __TwigTemplate_472a74013a88493fe867263a918bac95c7503c6e98995e0cebc03ccebfd4808e extends \Twig\Template
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
        echo "<div class=\"row-section  row-section--alert\">
  <div class=\"row-section__inner\">
    <p>Наша компания готова выполнить услуги по&nbsp;отдельности, но&nbsp;мы&nbsp;<span
          style=\"text-decoration: underline;\">настоятельно рекомендуем комплексный подход!</span> </p>
    <p style=\"margin-bottom: 1em;\">Комплексный подход является выгодным, в&nbsp;первую очередь, для заказчика. Наши специалисты: архитекторы, инженеры, дизайнеры, строители работают над проектом совместно, чтобы сразу учитывать нужды и&nbsp;задачи друг друга.</p>
    <p><b style=\"text-transform: uppercase;\">Результат: </b> Заказчик получает одно гармонично целое,
      а&nbsp;не&nbsp;набор элементов, не&nbsp;согласованных между собой.</p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\row-alert.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row-section  row-section--alert\">
  <div class=\"row-section__inner\">
    <p>Наша компания готова выполнить услуги по&nbsp;отдельности, но&nbsp;мы&nbsp;<span
          style=\"text-decoration: underline;\">настоятельно рекомендуем комплексный подход!</span> </p>
    <p style=\"margin-bottom: 1em;\">Комплексный подход является выгодным, в&nbsp;первую очередь, для заказчика. Наши специалисты: архитекторы, инженеры, дизайнеры, строители работают над проектом совместно, чтобы сразу учитывать нужды и&nbsp;задачи друг друга.</p>
    <p><b style=\"text-transform: uppercase;\">Результат: </b> Заказчик получает одно гармонично целое,
      а&nbsp;не&nbsp;набор элементов, не&nbsp;согласованных между собой.</p>
  </div>
</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\row-alert.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
