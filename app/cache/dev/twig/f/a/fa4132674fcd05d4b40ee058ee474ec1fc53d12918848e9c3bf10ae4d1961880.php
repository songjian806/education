<?php

/* @theme/jianmo/block/bottom_info.template.html.twig */
class __TwigTemplate_fa4132674fcd05d4b40ee058ee474ec1fc53d12918848e9c3bf10ae4d1961880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["self_macro"] = $this;
        // line 2
        echo "
<div class=\"col-md-8 footer-main clearfix\">
  ";
        // line 4
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["firstColumnText"]) ? $context["firstColumnText"] : $this->getContext($context, "firstColumnText"))), (isset($context["firstColumnLinks"]) ? $context["firstColumnLinks"] : $this->getContext($context, "firstColumnLinks")));
        echo "
  ";
        // line 5
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["secondColumnText"]) ? $context["secondColumnText"] : $this->getContext($context, "secondColumnText"))), (isset($context["secondColumnLinks"]) ? $context["secondColumnLinks"] : $this->getContext($context, "secondColumnLinks")));
        echo "
  ";
        // line 6
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["thirdColumnText"]) ? $context["thirdColumnText"] : $this->getContext($context, "thirdColumnText"))), (isset($context["thirdColumnLinks"]) ? $context["thirdColumnLinks"] : $this->getContext($context, "thirdColumnLinks")));
        echo "
  ";
        // line 7
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["fourthColumnText"]) ? $context["fourthColumnText"] : $this->getContext($context, "fourthColumnText"))), (isset($context["fourthColumnLinks"]) ? $context["fourthColumnLinks"] : $this->getContext($context, "fourthColumnLinks")), "hidden-xs");
        echo "
  ";
        // line 8
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["fifthColumnText"]) ? $context["fifthColumnText"] : $this->getContext($context, "fifthColumnText"))), (isset($context["fifthColumnLinks"]) ? $context["fifthColumnLinks"] : $this->getContext($context, "fifthColumnLinks")), "hidden-xs");
        echo "
</div>

<div class=\"col-md-4 footer-logo hidden-sm hidden-xs\">
  <a class=\"\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "href", array()), "")) : ("")), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "target", array()), "")) : ("")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "alt", array()), "")) : ("")), "html", null, true);
        echo "\"></a>
  <div class=\"footer-sns\">
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : $this->getContext($context, "weibo")), 0, array(), "array"), "href", array())) {
            // line 15
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "href", array()), "javascript:;")) : ("javascript:;")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "target", array()), "")) : ("")), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-weibo\"></i></a>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["weixin"]) ? $context["weixin"] : $this->getContext($context, "weixin")), 0, array(), "array"), "src", array())) {
            // line 18
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-weixin\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["weixin"]) ? $context["weixin"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["weixin"]) ? $context["weixin"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
            echo "\" alt=\"\">  
      </div>
    </a>
    ";
        }
        // line 25
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["apple"]) ? $context["apple"] : $this->getContext($context, "apple")), 0, array(), "array"), "src", array())) {
            // line 26
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-apple\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["apple"]) ? $context["apple"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["apple"]) ? $context["apple"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
            echo "\" alt=\"\"> 
      </div>
    </a>
    ";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["android"]) ? $context["android"] : $this->getContext($context, "android")), 0, array(), "array"), "src", array())) {
            // line 34
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-android\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["android"]) ? $context["android"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["android"]) ? $context["android"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
            echo "\" alt=\"\"> 
      </div>
    </a>
    ";
        }
        // line 41
        echo "  </div>
</div>


";
    }

    // line 45
    public function getfooter_div($__title__ = null, $__links__ = null, $__className__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "links" => $__links__,
            "className" => $__className__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "<div class=\"link-item ";
            if ((isset($context["className"]) ? $context["className"] : $this->getContext($context, "className"))) {
                echo twig_escape_filter($this->env, (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "html", null, true);
            }
            echo "\">
  <h3>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["title"]) ? $context["title"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["title"]) ? $context["title"] : null), "value", array()), "")) : ("")), "html", null, true);
            echo "</h3>
  <ul>
    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("links", $context)) ? (_twig_default_filter((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), null)) : (null)));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 50
                echo "      <li>
        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "href", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "target", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "value", array()), "html", null, true);
                echo "</a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  </ul>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/bottom_info.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  155 => 51,  152 => 50,  148 => 49,  143 => 47,  136 => 46,  122 => 45,  114 => 41,  107 => 37,  102 => 34,  99 => 33,  92 => 29,  87 => 26,  84 => 25,  77 => 21,  72 => 18,  69 => 17,  61 => 15,  59 => 14,  48 => 12,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
