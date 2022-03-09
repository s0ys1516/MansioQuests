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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\sections\first-screen.htm */
class __TwigTemplate_c965642182983217005f5027f1c2ad9e9b32657335fcdf6fb4b18279a0977d83 extends \Twig\Template
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
        echo "<div class=\"first-screen  ";
        ((($context["bgClass"] ?? null)) ? (print (twig_escape_filter($this->env, ("first-screen--" . ($context["bgClass"] ?? null)), "html", null, true))) : (print ("")));
        echo "\" id=\"pageFirstScreen\">
  <div class=\"container\">
    <div class=\"first-screen__inner\">
      <h1 class=\"first-screen__title\">";
        // line 4
        echo $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source);
        echo "</h1>
      ";
        // line 5
        echo $this->sandbox->ensureToStringAllowed(($context["dsc"] ?? null), 5, $this->source);
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\first-screen.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"first-screen  {{ bgClass ? 'first-screen--' ~ bgClass }}\" id=\"pageFirstScreen\">
  <div class=\"container\">
    <div class=\"first-screen__inner\">
      <h1 class=\"first-screen__title\">{{ title|raw }}</h1>
      {{ dsc|raw }}
    </div>
  </div>
</div>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\sections\\first-screen.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "raw" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw'],
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
