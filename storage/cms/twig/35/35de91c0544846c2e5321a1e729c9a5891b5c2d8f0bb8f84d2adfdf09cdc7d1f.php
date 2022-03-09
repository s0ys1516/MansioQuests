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

/* C:\OpenServer\domains\mansio\plugins/pandaprofit/projects/components/filterprojects/default.htm */
class __TwigTemplate_7886a95dfdeae05e3fceb86e80738f4a7065402a69f1d138f932f73bab8e99cb extends \Twig\Template
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
        $context["projects"] = twig_get_attribute($this->env, $this->source, ($context["filterprojects"] ?? null), "projects", [], "any", false, false, true, 1);
        // line 2
        $context["categorys"] = twig_get_attribute($this->env, $this->source, ($context["filterprojects"] ?? null), "categorys", [], "any", false, false, true, 2);
        // line 3
        echo "
<div class=\"filter\" id=\"beforeCatalog\">
\t<div class=\"filter__panel\">
\t\t<button class=\"filter__btn\" id='filterShow' type=\"button\">
\t\t\tПоказать фильтр
\t\t\t<svg>
\t\t\t\t<use xlink:href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
\t\t\t</svg>
\t\t</button>
\t</div>
\t<div id=\"filterContent\" class=\"filter__inner\">
\t\t<div class=\"container\">
\t\t\t<form method=\"GET\" action=\"";
        // line 15
        echo url("projects");
        echo "\">
\t\t\t\t<div id=\"projectsFilterContent\" class=\"row\">
\t\t\t\t\t<div class=\"col-md-w-50\">
\t\t\t\t\t\t<label for=\"projectsFilterCategorySelect\" class=\"form-label\">Категории</label>
\t\t\t\t\t\t<select id=\"projectsFilterCategorySelect\" class=\"form-select form-select-lg mb-3\" name=\"category\">
\t\t\t\t\t\t\t<option value=\"\">Выберите категорию</option>
\t\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["category"], 22, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["category"], 22, $this->source), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- nav -->
\t\t\t\t<div class=\"filter__nav\">
\t\t\t\t\t<button class=\"filter__btn filter__btn--show\" id='filterHide' type=\"button\">
\t\t\t\t\t\tСкрыть фильтр
\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"filter__submit  btn  btn--blue\" type=\"submit\">
\t\t\t\t\t\tПрименить фильтры
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite_auto.svg#arrows");
        echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<section class=\"catalog\" id=\"sectionCatalog\">
\t<h2 class=\"visually-hidden\">Каталог домов</h2>

\t<ul class=\"catalog__list\">
\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 53
            echo "\t\t<li class=\" card  card--catalog catalog__item\">
\t\t\t<a class=\"card__link-wrapper\" href=\"/project/";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t<dt class=\"card__title\">";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</dt>
\t\t\t\t\t\t<dd class=\"card__subtitle\">";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "type", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo " </dd>
\t\t\t\t\t</dl>
\t\t\t\t</div>
\t\t\t\t<div class=\"card__picture\">
\t\t\t\t\t<img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "main_image", [], "any", false, false, true, 62), "thumb", [0 => 950, 1 => ($context["auto"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "main_image", [], "any", false, false, true, 62), "title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "\" width=\"950\">
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"card__info-pane  card-pane\">
\t\t\t\t<dl class=\"card-pane__name-wrapper\">
\t\t\t\t\t<dt class=\"card__title  card-pane__title\">";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</dt>
\t\t\t\t\t<dd class=\"card__subtitle  card-pane__subtitle\">";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "type", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"card-pane__property-list\">
\t\t\t\t\t<div class=\"card-pane__property\">
\t\t\t\t\t\t<dt>Площадь:</dt>
\t\t\t\t\t\t<dd>";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "square", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "&nbsp;м2</dd>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-pane__property\">
\t\t\t\t\t\t<dt>Этажность</dt>
\t\t\t\t\t\t<dd>";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "floors", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</dd>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-pane__property  card-pane__property--label\">
\t\t\t\t\t\t<dt>Материал</dt>
\t\t\t\t\t\t<dd>";
            // line 81
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "material", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "</dd>
\t\t\t\t\t</div>
\t\t\t\t</dl>
\t\t\t\t<a href=\"/project/";
            // line 84
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "\" class=\"btn  card-pane__btn\">Открыть проект</a>
\t\t\t</div>
\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "\t\t<li class=\"no-data\">Проекты не найдены</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t</ul>
</section>
";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\plugins/pandaprofit/projects/components/filterprojects/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 90,  196 => 88,  187 => 84,  181 => 81,  174 => 77,  167 => 73,  159 => 68,  155 => 67,  145 => 62,  138 => 58,  134 => 57,  128 => 54,  125 => 53,  120 => 52,  104 => 39,  94 => 32,  84 => 24,  73 => 22,  69 => 21,  60 => 15,  51 => 9,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set projects = filterprojects.projects %}
{% set categorys = filterprojects.categorys %}

<div class=\"filter\" id=\"beforeCatalog\">
\t<div class=\"filter__panel\">
\t\t<button class=\"filter__btn\" id='filterShow' type=\"button\">
\t\t\tПоказать фильтр
\t\t\t<svg>
\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use>
\t\t\t</svg>
\t\t</button>
\t</div>
\t<div id=\"filterContent\" class=\"filter__inner\">
\t\t<div class=\"container\">
\t\t\t<form method=\"GET\" action=\"{{ url('projects') }}\">
\t\t\t\t<div id=\"projectsFilterContent\" class=\"row\">
\t\t\t\t\t<div class=\"col-md-w-50\">
\t\t\t\t\t\t<label for=\"projectsFilterCategorySelect\" class=\"form-label\">Категории</label>
\t\t\t\t\t\t<select id=\"projectsFilterCategorySelect\" class=\"form-select form-select-lg mb-3\" name=\"category\">
\t\t\t\t\t\t\t<option value=\"\">Выберите категорию</option>
\t\t\t\t\t\t\t{% for category in categorys %}
\t\t\t\t\t\t\t<option value=\"{{category}}\">{{category}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- nav -->
\t\t\t\t<div class=\"filter__nav\">
\t\t\t\t\t<button class=\"filter__btn filter__btn--show\" id='filterHide' type=\"button\">
\t\t\t\t\t\tСкрыть фильтр
\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"filter__submit  btn  btn--blue\" type=\"submit\">
\t\t\t\t\t\tПрименить фильтры
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ 'assets/images/sprite_auto.svg#arrows'|theme}}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<section class=\"catalog\" id=\"sectionCatalog\">
\t<h2 class=\"visually-hidden\">Каталог домов</h2>

\t<ul class=\"catalog__list\">
\t\t{% for project in projects %}
\t\t<li class=\" card  card--catalog catalog__item\">
\t\t\t<a class=\"card__link-wrapper\" href=\"/project/{{project.slug}}\">
\t\t\t\t<div class=\"card__content\">
\t\t\t\t\t<dl class=\"card__headline\">
\t\t\t\t\t\t<dt class=\"card__title\">{{ project.title }}</dt>
\t\t\t\t\t\t<dd class=\"card__subtitle\">{{ project.type }} </dd>
\t\t\t\t\t</dl>
\t\t\t\t</div>
\t\t\t\t<div class=\"card__picture\">
\t\t\t\t\t<img src=\"{{ project.main_image.thumb(950,auto) }}\" alt=\"{{ project.main_image.title }}\" width=\"950\">
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"card__info-pane  card-pane\">
\t\t\t\t<dl class=\"card-pane__name-wrapper\">
\t\t\t\t\t<dt class=\"card__title  card-pane__title\">{{ project.title }}</dt>
\t\t\t\t\t<dd class=\"card__subtitle  card-pane__subtitle\">{{ project.type }}</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"card-pane__property-list\">
\t\t\t\t\t<div class=\"card-pane__property\">
\t\t\t\t\t\t<dt>Площадь:</dt>
\t\t\t\t\t\t<dd>{{ project.square }}&nbsp;м2</dd>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-pane__property\">
\t\t\t\t\t\t<dt>Этажность</dt>
\t\t\t\t\t\t<dd>{{ project.floors }}</dd>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-pane__property  card-pane__property--label\">
\t\t\t\t\t\t<dt>Материал</dt>
\t\t\t\t\t\t<dd>{{ project.material }}</dd>
\t\t\t\t\t</div>
\t\t\t\t</dl>
\t\t\t\t<a href=\"/project/{{project.slug}}\" class=\"btn  card-pane__btn\">Открыть проект</a>
\t\t\t</div>
\t\t</li>
\t\t{% else %}
\t\t<li class=\"no-data\">Проекты не найдены</li>
\t\t{% endfor %}
\t</ul>
</section>
", "C:\\OpenServer\\domains\\mansio\\plugins/pandaprofit/projects/components/filterprojects/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 21);
        static $filters = array("theme" => 9, "escape" => 22);
        static $functions = array("url" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['theme', 'escape'],
                ['url']
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
