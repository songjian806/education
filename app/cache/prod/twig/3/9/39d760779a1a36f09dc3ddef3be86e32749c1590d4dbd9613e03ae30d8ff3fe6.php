<?php

/* TopxiaAdminBundle:EduCloud:cloud-sms-chart.html.twig */
class __TwigTemplate_39d760779a1a36f09dc3ddef3be86e32749c1590d4dbd9613e03ae30d8ff3fe6 extends Twig_Template
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
        echo "
<div class=\"col-md-6\">
  <input id=\"smsUsedInfo\"  type=\"hidden\" value='";
        // line 3
        if ((($this->getAttribute((isset($context["chartInfo"]) ? $context["chartInfo"] : null), "smsUsedInfo", array()) && ($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled") == "1")) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array()), null)) : (null)) != "stoped"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chartInfo"]) ? $context["chartInfo"] : null), "smsUsedInfo", array()), "html", null, true);
        } else {
            echo "[]";
        }
        echo "'>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <p class=\"pull-right\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_cloud_sms_account");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("明细"), "html", null, true);
        echo "</a></p>\t
      <h3 class=\"panel-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云短信使用情况（最近7天）"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" id=\"sms-data-tab\" style=\"height: 250px;\">
    ";
        // line 10
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "sms", array(), "any", false, true), "status", array()), null)) : (null)) == "stoped")) {
            // line 11
            echo "      <div class=\"edu-verticalmiddle\">
        <div class=\"edu-verticalmiddle-content text-muted\">
            <p class=\"text-danger\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云短信服务已被禁用"), "html", null, true);
            echo "</p>
          <p class=\"text-danger\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请联系客服人员："), "html", null, true);
            echo "0571-86819929</p>
        </div>
      </div>
    ";
        } elseif ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "0") == "0")) {
            // line 18
            echo "      <div class=\"edu-verticalmiddle\">
        <div class=\"edu-verticalmiddle-content text-muted\">
          <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_sms");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启"), "html", null, true);
            echo "</a>
          ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云短信，享受优质的短信发送服务"), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 25
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-sms-chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  72 => 21,  66 => 20,  62 => 18,  55 => 14,  51 => 13,  47 => 11,  45 => 10,  39 => 7,  33 => 6,  23 => 3,  19 => 1,);
    }
}
