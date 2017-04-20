<?php

/* TopxiaWebBundle:Common:weixin-share.html.twig */
class __TwigTemplate_a7b1541c589a6c1ede32e320478dc1f4d515cac89eb6d70fa9c5e1cd977f8865 extends Twig_Template
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
        $context["wxconfig"] = $this->env->getExtension('topxia_web_twig')->weixinConfig();
        // line 2
        if (((array_key_exists("wxconfig", $context)) ? (_twig_default_filter((isset($context["wxconfig"]) ? $context["wxconfig"] : null), null)) : (null))) {
            // line 3
            echo "\t";
            $this->env->getExtension('topxia_web_twig')->loadScript("common/weixin-share");
            // line 4
            echo "\t<div class=\"hidden jweixin-data\" 
\t\tdata-config=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["wxconfig"]) ? $context["wxconfig"] : null), "html", null, true);
            echo "\"
 \t\tdata-title=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\" 
 \t\tdata-desc='";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["desc"]) ? $context["desc"] : null), "html", null, true);
            echo "'
 \t\tdata-link=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\" 
 \t\tdata-img-url=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["imgUrl"]) ? $context["imgUrl"] : null), "html", null, true);
            echo "\" 
 \t\tdata-type=\"";
            // line 10
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "")) : ("")), "html", null, true);
            echo "\" 
 \t\tdata-data-url=\"";
            // line 11
            echo twig_escape_filter($this->env, ((array_key_exists("dataUrl", $context)) ? (_twig_default_filter((isset($context["dataUrl"]) ? $context["dataUrl"] : null), "")) : ("")), "html", null, true);
            echo "\">
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:weixin-share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
