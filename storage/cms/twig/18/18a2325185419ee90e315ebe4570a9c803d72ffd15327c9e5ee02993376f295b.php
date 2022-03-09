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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\elements\btn.htm */
class __TwigTemplate_104687a0b8e2be9dd5a15ac201e21cf30f9b848e7063c04ca2d3dea1226dc04c extends \Twig\Template
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
        // line 10
        if (($context["href"] ?? null)) {
            // line 11
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["href"] ?? null), 11, $this->source), "html", null, true);
            echo "\" class=\"btn
    ";
            // line 12
            ((($context["mod"] ?? null)) ? (print (twig_escape_filter($this->env, ("btn--" . ($context["mod"] ?? null)), "html", null, true))) : (print ("")));
            echo "
    ";
            // line 13
            ((($context["bemElement"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["bemElement"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
    ";
            // line 14
            echo ((($context["download"] ?? null)) ? ("download") : (""));
            echo ">
  ";
            // line 15
            echo $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 15, $this->source);
            echo "
  <span><svg>
      <use xlink:href=\"";
            // line 17
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
            echo "\"></use>
    </svg></span>
</a>
";
        } else {
            // line 21
            echo "<button class=\"btn
    ";
            // line 22
            ((($context["mod"] ?? null)) ? (print (twig_escape_filter($this->env, ("btn--" . ($context["mod"] ?? null)), "html", null, true))) : (print ("")));
            echo "
    ";
            // line 23
            ((($context["bemElement"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["bemElement"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
    ";
            // line 24
            if (($context["modal"] ?? null)) {
                // line 25
                echo "    data-modal=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal"] ?? null), 25, $this->source), "html", null, true);
                echo "\"
    ";
            }
            // line 27
            echo "    type=\"button\">
  ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 28, $this->source);
            echo "
  <span><svg>
      <use xlink:href=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
            echo "\"></use>
    </svg></span>
</button>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\btn.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  92 => 28,  89 => 27,  83 => 25,  81 => 24,  77 => 23,  73 => 22,  70 => 21,  63 => 17,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  41 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\thref: link URL
\tmod: class modificator name
\tbemElement: full name class BEM-element
\tdownoload: boolean parametr
\ttext: text inner tag
\tmodal: key in data-modal attr

 #}
{% if href %}
<a href=\"{{ href }}\" class=\"btn
    {{ mod ? 'btn--' ~ mod }}
    {{ bemElement ? bemElement }}\"
    {{ download ? 'download' }}>
  {{ text|raw }}
  <span><svg>
      <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
    </svg></span>
</a>
{% else %}
<button class=\"btn
    {{ mod ? 'btn--' ~ mod }}
    {{ bemElement ? bemElement }}\"
    {% if modal %}
    data-modal=\"{{ modal }}\"
    {% endif %}
    type=\"button\">
  {{ text|raw }}
  <span><svg>
      <use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme }}\"></use>
    </svg></span>
</button>
{% endif %}", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\elements\\btn.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 11, "raw" => 15, "theme" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'theme'],
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
