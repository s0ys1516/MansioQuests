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

/* C:\OpenServer\domains\mansio\themes\mansio-theme\partials\global\meta.htm */
class __TwigTemplate_c9d3c8b1aaeb0f1fbb14111c0f144358a7a139ee16457fad1ca610b966ca7bdc extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Mansio Group — ";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "meta_title", [], "any", false, false, true, 3)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "meta_title", [], "any", false, false, true, 3)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "title", [], "any", false, false, true, 3))), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "meta_description", [], "any", false, false, true, 4)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "meta_description", [], "any", false, false, true, 4)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4))), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "meta_title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/apple-touch-icon.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/favicon-32x32.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/favicon-16x16.png");
        echo "\">
<link rel=\"manifest\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/site.webmanifest");
        echo "\" crossorigin=\"use-credentials\">
<link rel=\"mask-icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#0c1e2c\">
<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/favicon.ico");
        echo "\">
<meta name=\"msapplication-TileColor\" content=\"#2b5797\">
<meta name=\"msapplication-config\" content=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/browserconfig.xml");
        echo "\">
<meta name=\"theme-color\" content=\"#0c1e2c\">

<link rel=\"preload\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/Commissioner-Medium.woff2");
        echo "\" as=\"font\" crossorigin=\"anonymous\">

";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@framework.extras", 1 => "assets/dist/main.min.css"]);
        // line 24
        echo "\" rel=\"stylesheet\">

<script>
\tdocument.documentElement.className = document.documentElement.className.replace('no-js', 'js');

\tfunction cth(c) { document.documentElement.classList.add(c) }
\t'ontouchstart' in window ? cth('touch') : cth('no-touch');
\tif (typeof InstallTrigger !== 'undefined') cth('firefox');
\tif (/constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === \"[object SafariRemoteNotification]\" })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification))) cth('safari');
\tif (/*@cc_on!@*/false || !!document.documentMode) cth('ie');
\tif (!(/*@cc_on!@*/false || !!document.documentMode) && !!window.StyleMedia) cth('edge');
\tif (!!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime)) cth('chrome');
\tif (~navigator.appVersion.indexOf(\"Win\")) cth('windows');
\tif (~navigator.appVersion.indexOf(\"Mac\")) cth('osx');
\tif (~['iPad', 'iPhone', 'iPod'].indexOf(navigator.platform)) cth('ios');
\tif (~navigator.appVersion.indexOf(\"Linux\")) cth('linux');

\tvar isMobile = {
\t\tAndroid: function () {
\t\t\treturn navigator.userAgent.match(/Android/i);
\t\t},
\t\tBlackBerry: function () {
\t\t\treturn navigator.userAgent.match(/BlackBerry/i);
\t\t},
\t\tiOS: function () {
\t\t\treturn navigator.userAgent.match(/iPhone|iPad|iPod/i);
\t\t},
\t\tOpera: function () {
\t\t\treturn navigator.userAgent.match(/Opera Mini/i);
\t\t},
\t\tWindows: function () {
\t\t\treturn navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
\t\t},
\t\tany: function () {
\t\t\treturn (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
\t\t}
\t};

\t// if (isTouch && isMobile.any() && window.innerWidth < 1049) {
\t//   _html.classList.add(\"disable-effects\");
\t//   var b_element = document.getElementById(\"body\");
\t//   b_element.classList.remove(\"loading\");

\t//   c_mainelement = document.querySelector(\"main\");
\t//   c_mainelement.classList.add(\"page-loaded\");
\t// }

\tlet vh = window.innerHeight * 0.01;
\tdocument.documentElement.style.setProperty('--vh', `\${vh}px`);
\twindow.addEventListener('resize', () => {
\t\tlet vh = window.innerHeight * 0.01;
\t\tdocument.documentElement.style.setProperty('--vh', `\${vh}px`);
\t});
</script>


<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
\t\tw[l] = w[l] || []; w[l].push({
\t\t\t'gtm.start':
\t\t\t\tnew Date().getTime(), event: 'gtm.js'
\t\t}); var f = d.getElementsByTagName(s)[0],
\t\t\tj = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
\t\t\t\t'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
\t})(window, document, 'script', 'dataLayer', 'GTM-5KQWSGF');</script>
<!-- End Google Tag Manager -->";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 21,  93 => 20,  88 => 18,  82 => 15,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  51 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Mansio Group — {{ this.page.meta_title ? this.page.meta_title : this.page.title }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description ? this.page.meta_description : this.page.description  }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'assets/favicon/apple-touch-icon.png'|theme }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'assets/favicon/favicon-32x32.png'|theme }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'assets/favicon/favicon-16x16.png'|theme }}\">
<link rel=\"manifest\" href=\"{{ 'assets/favicon/site.webmanifest'|theme }}\" crossorigin=\"use-credentials\">
<link rel=\"mask-icon\" href=\"{{ 'assets/favicon/safari-pinned-tab.svg'|theme }}\" color=\"#0c1e2c\">
<link rel=\"shortcut icon\" href=\"{{ 'assets/favicon/favicon.ico'|theme }}\">
<meta name=\"msapplication-TileColor\" content=\"#2b5797\">
<meta name=\"msapplication-config\" content=\"{{ 'assets/favicon/browserconfig.xml'|theme }}\">
<meta name=\"theme-color\" content=\"#0c1e2c\">

<link rel=\"preload\" href=\"{{ 'assets/fonts/Commissioner-Medium.woff2'|theme }}\" as=\"font\" crossorigin=\"anonymous\">

{% styles %}
<link href=\"{{ [
\t        '@framework.extras',
\t\t\t\t\t'assets/dist/main.min.css',
\t    ]|theme }}\" rel=\"stylesheet\">

<script>
\tdocument.documentElement.className = document.documentElement.className.replace('no-js', 'js');

\tfunction cth(c) { document.documentElement.classList.add(c) }
\t'ontouchstart' in window ? cth('touch') : cth('no-touch');
\tif (typeof InstallTrigger !== 'undefined') cth('firefox');
\tif (/constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === \"[object SafariRemoteNotification]\" })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification))) cth('safari');
\tif (/*@cc_on!@*/false || !!document.documentMode) cth('ie');
\tif (!(/*@cc_on!@*/false || !!document.documentMode) && !!window.StyleMedia) cth('edge');
\tif (!!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime)) cth('chrome');
\tif (~navigator.appVersion.indexOf(\"Win\")) cth('windows');
\tif (~navigator.appVersion.indexOf(\"Mac\")) cth('osx');
\tif (~['iPad', 'iPhone', 'iPod'].indexOf(navigator.platform)) cth('ios');
\tif (~navigator.appVersion.indexOf(\"Linux\")) cth('linux');

\tvar isMobile = {
\t\tAndroid: function () {
\t\t\treturn navigator.userAgent.match(/Android/i);
\t\t},
\t\tBlackBerry: function () {
\t\t\treturn navigator.userAgent.match(/BlackBerry/i);
\t\t},
\t\tiOS: function () {
\t\t\treturn navigator.userAgent.match(/iPhone|iPad|iPod/i);
\t\t},
\t\tOpera: function () {
\t\t\treturn navigator.userAgent.match(/Opera Mini/i);
\t\t},
\t\tWindows: function () {
\t\t\treturn navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
\t\t},
\t\tany: function () {
\t\t\treturn (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
\t\t}
\t};

\t// if (isTouch && isMobile.any() && window.innerWidth < 1049) {
\t//   _html.classList.add(\"disable-effects\");
\t//   var b_element = document.getElementById(\"body\");
\t//   b_element.classList.remove(\"loading\");

\t//   c_mainelement = document.querySelector(\"main\");
\t//   c_mainelement.classList.add(\"page-loaded\");
\t// }

\tlet vh = window.innerHeight * 0.01;
\tdocument.documentElement.style.setProperty('--vh', `\${vh}px`);
\twindow.addEventListener('resize', () => {
\t\tlet vh = window.innerHeight * 0.01;
\t\tdocument.documentElement.style.setProperty('--vh', `\${vh}px`);
\t});
</script>


<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
\t\tw[l] = w[l] || []; w[l].push({
\t\t\t'gtm.start':
\t\t\t\tnew Date().getTime(), event: 'gtm.js'
\t\t}); var f = d.getElementsByTagName(s)[0],
\t\t\tj = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
\t\t\t\t'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
\t})(window, document, 'script', 'dataLayer', 'GTM-5KQWSGF');</script>
<!-- End Google Tag Manager -->", "C:\\OpenServer\\domains\\mansio\\themes\\mansio-theme\\partials\\global\\meta.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 20);
        static $filters = array("escape" => 3, "theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles'],
                ['escape', 'theme'],
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
