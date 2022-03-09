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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\sections\contacts_info.htm */
class __TwigTemplate_8cfee6d2608b432bd6494d3383fbfc786cafb26889c640971552b7f5ea7b33fd extends \Twig\Template
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
        echo "<div class=\"info\">
   <div class=\"container\">
      <div class=\"info__inner\">
         <div class=\"info__desc\">Реквизиты и карточка компании</div>
         <div class=\"info__title\">Для заказчиков и партнеров мы подготовили полную юридическую информацию о нашей компании</div>
         <div class=\"info__content\">
            <div class=\"info__text\">
               <div class=\"info__logo\">
                  <svg>
                     <use xlink:href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#logo");
        echo "\"></use>
                  </svg>
               </div>
               <span>ООО «МАНСИО ГРУПП»</span>
               <span>ИНН 7727435818</span>
               <span>ОГРН 1197746734767</span>
               <div class=\"info__address\">Рублево-Успенское шоссе 1 км, д 6, офис 512</div>
            </div>
            <div class=\"info__download\">
               <div class=\"info__wrap\">
                  <span>Для удобства, <a class=\"js-no-smoothState\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/downloads/Mansio-Group_card.pdf");
        echo "\" download=\"\">скачайте</a> реквизиты одним файлом</span>
                  <svg>
                     <use xlink:href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#pdf");
        echo "\"></use>
                  </svg>
               </div>
               <a class=\"info__btn  js-no-smoothState\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/downloads/Mansio-Group_card.pdf");
        echo "\" download>
                  СКАЧАТЬ РЕКВИЗИТЫ В PDF
                  <span>
                     <svg>
                        <use xlink:href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\contacts_info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  74 => 25,  68 => 22,  63 => 20,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"info\">
   <div class=\"container\">
      <div class=\"info__inner\">
         <div class=\"info__desc\">Реквизиты и карточка компании</div>
         <div class=\"info__title\">Для заказчиков и партнеров мы подготовили полную юридическую информацию о нашей компании</div>
         <div class=\"info__content\">
            <div class=\"info__text\">
               <div class=\"info__logo\">
                  <svg>
                     <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#logo'|theme }}\"></use>
                  </svg>
               </div>
               <span>ООО «МАНСИО ГРУПП»</span>
               <span>ИНН 7727435818</span>
               <span>ОГРН 1197746734767</span>
               <div class=\"info__address\">Рублево-Успенское шоссе 1 км, д 6, офис 512</div>
            </div>
            <div class=\"info__download\">
               <div class=\"info__wrap\">
                  <span>Для удобства, <a class=\"js-no-smoothState\" href=\"{{ 'assets/downloads/Mansio-Group_card.pdf'|theme}}\" download=\"\">скачайте</a> реквизиты одним файлом</span>
                  <svg>
                     <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#pdf'|theme }}\"></use>
                  </svg>
               </div>
               <a class=\"info__btn  js-no-smoothState\" href=\"{{ 'assets/downloads/Mansio-Group_card.pdf'|theme}}\" download>
                  СКАЧАТЬ РЕКВИЗИТЫ В PDF
                  <span>
                     <svg>
                        <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\contacts_info.htm", "");
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
