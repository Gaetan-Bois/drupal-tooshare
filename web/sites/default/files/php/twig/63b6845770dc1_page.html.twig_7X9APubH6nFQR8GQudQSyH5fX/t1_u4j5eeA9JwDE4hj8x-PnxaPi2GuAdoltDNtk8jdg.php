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

/* themes/custom/gaetan_theme/templates/page.html.twig */
class __TwigTemplate_b6591cf3dc48da806ee027b52c897cd3fce0837c30951d2462dc1309153333ba extends \Twig\Template
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
        echo "<div id=\"nav-bar\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
    <a href=\"";
        // line 4
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 4, $this->source), "html", null, true);
        echo "\" class=\"logo-wrapper\">
      <img src=\"";
        // line 5
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 5, $this->source), "html", null, true);
        echo "\" alt=\"\" class=\"logo\">
      ";
        // line 6
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 6, $this->source), "html", null, true);
        echo "
    </a>
  </div>
</div>
<div class=\"header\">
  <div class=\"container\">
    ";
        // line 12
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  </div>
</div>
<div class=\"download-block\">
  <div class=\"container\">
    ";
        // line 17
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "download", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
        // line 20
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
";
        // line 21
        echo $this->extensions['Drupal\twig_extender\TwigExtenderService']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gaetan_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  78 => 20,  72 => 17,  64 => 12,  55 => 6,  51 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gaetan_theme/templates/page.html.twig", "/var/www/html/web/themes/custom/gaetan_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
