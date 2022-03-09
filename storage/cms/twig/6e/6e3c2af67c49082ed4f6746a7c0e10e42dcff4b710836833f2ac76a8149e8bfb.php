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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\vacancyresponse\default.htm */
class __TwigTemplate_0c5a55198b40baae2e3e35a4329c909d236a47ed5219aefded725d0f3a269933 extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 1, $this->source), "html", null, true);
        echo "::onFormSubmit\" class=\"contacts-form__form\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 5, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"input-wrapper\">
        <svg width=\"18\" height=\"18\">
            <use xlink:href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#contacts-icon-1");
        echo "\"></use>
        </svg>
        <input type=\"text\" id=\"nameApplicant\" name=\"nameApplicant\" class=\"form-input\"
            placeholder=\"Как к вам обращаться?\">
        <label for=\"nameApplicant\">Введите ваше имя:</label>
    </div>


    <div class=\"input-wrapper\">
        <svg width=\"18\" height=\"18\">
            <use xlink:href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#contacts-icon-2");
        echo "\"></use>
        </svg>
        <input type=\"tel\" id=\"telApplicant\" name=\"telApplicant\" class=\"form-input\" placeholder=\"Ваш номер телефона?\" required>
        <label for=\"telApplicant\">Введите номер телефона:</label>
    </div>

    <div class=\"form-group\">
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn--blue\">
        Отправить отклик
        <span><svg>
                <use xlink:href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
            </svg></span>
    </button>

</form>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\vacancyresponse\\default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  84 => 27,  80 => 26,  70 => 19,  57 => 9,  50 => 5,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"{{ __SELF__ }}::onFormSubmit\" class=\"contacts-form__form\">

    {{ form_token() }}

    <div id=\"{{ __SELF__ }}_forms_flash\"></div>

    <div class=\"input-wrapper\">
        <svg width=\"18\" height=\"18\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#contacts-icon-1'|theme}}\"></use>
        </svg>
        <input type=\"text\" id=\"nameApplicant\" name=\"nameApplicant\" class=\"form-input\"
            placeholder=\"Как к вам обращаться?\">
        <label for=\"nameApplicant\">Введите ваше имя:</label>
    </div>


    <div class=\"input-wrapper\">
        <svg width=\"18\" height=\"18\">
            <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#contacts-icon-2'|theme}}\"></use>
        </svg>
        <input type=\"tel\" id=\"telApplicant\" name=\"telApplicant\" class=\"form-input\" placeholder=\"Ваш номер телефона?\" required>
        <label for=\"telApplicant\">Введите номер телефона:</label>
    </div>

    <div class=\"form-group\">
        {% partial '@recaptcha' %}
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn--blue\">
        Отправить отклик
        <span><svg>
                <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
            </svg></span>
    </button>

</form>", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\vacancyresponse\\default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 26);
        static $filters = array("escape" => 1, "theme" => 9);
        static $functions = array("form_token" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape', 'theme'],
                ['form_token']
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
