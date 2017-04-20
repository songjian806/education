<?php

/* TopxiaAdminBundle:EduCloud:cloud-sms.html.twig */
class __TwigTemplate_be8eb0d82af5d0df9e6d660d8005b8bb2ed2183ef4e8ad52c1a6c0f1df0ccfa1 extends Twig_Template
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
        echo "<div class=\"col-md-6\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云短信包状态"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" style=\"height: 250px; padding:40px\">
    ";
        // line 7
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "enableBuy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "enableBuy", array()), 0)) : (0)) != 1)) {
            // line 8
            echo "      <div class=\"edu-verticalmiddle\">
        <div class=\"edu-verticalmiddle-content text-muted\"><i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i><a class=\"mhm\" href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "sms"));
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云短信包，享受更优惠的短信服务"), "html", null, true);
            echo "</div> 
      </div>
    ";
        } else {
            // line 12
            echo "      <p class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("剩余短信:%remainCount%条  ", array("%remainCount%" => (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "remainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "remainCount", array()), 0)) : (0)))), "html", null, true);
            echo "      
        <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "sms"));
            echo "\" target=\"_blank\" style=\"margin-left:20px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
            echo "</a>
      </p>
      ";
            // line 15
            if (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array()), null)) : (null)) == "used") && (0 < $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "sms", array()), "remainCount", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "sms", array()), "remainCount", array()) < 100))) {
                // line 16
                echo "        <p class=\"text-warning text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云短信包剩余不足100条短信，请尽快续购"), "html", null, true);
                echo "</p>
      ";
            }
            // line 18
            echo "      ";
            if ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array()), null)) : (null)) == "used") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "sms", array()), "remainCount", array()) <= 0))) {
                // line 19
                echo "        <p class=\"text-danger text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云短信包已用完，请尽快续购"), "html", null, true);
                echo "</p>
      ";
            }
            // line 21
            echo "    ";
        }
        // line 22
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-sms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  74 => 21,  68 => 19,  65 => 18,  59 => 16,  57 => 15,  50 => 13,  45 => 12,  35 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
