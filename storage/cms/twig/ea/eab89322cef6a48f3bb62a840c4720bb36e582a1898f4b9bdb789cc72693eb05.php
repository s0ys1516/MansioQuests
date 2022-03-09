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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\global\scripts.htm */
class __TwigTemplate_b4b0bf72c7139174119dba4e4118a6dfdfcf262b290c47951eb389dac0fb551e extends \Twig\Template
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
        // line 4
        echo "<!-- ";
        echo " -->
";
        // line 6
        echo "

<script src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/vendor.min.js");
        echo "\"></script>
<script src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/main.min.js");
        echo "\"></script>

";
        // line 11
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js?v=winter"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js?v=winter"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js?v=winter"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css?v=winter">'.PHP_EOL;
        unset($_minify);
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  56 => 11,  51 => 9,  47 => 8,  43 => 6,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# <script src=\"{{ 'assets/javascript/vendor/modernizr-webp.js'|theme }}\"></script> #}
{# <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script> #}
{# <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script> #}
<!-- {# <script src=\"{{ 'node_modules/glightbox/dist/js/glightbox.min.js'|theme }}\"></script> #} -->
{# <script src=\"{{ 'assets/javascript/vendor.js'|theme }}\"></script> #}


<script src=\"{{ 'assets/dist/vendor.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/dist/main.min.js'|theme }}\"></script>

{% framework extras %}
{% scripts %}", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\scripts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("framework" => 11, "scripts" => 12);
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework', 'scripts'],
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
