<?php

/* TopxiaAdminBundle:EduCloud:cloud-storage-chart.html.twig */
class __TwigTemplate_5dfa4ba8c2f25a7404b7cb03efa16bbdda3c05d817cfbe73c7a78e3bcc3b8dae extends Twig_Template
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
  <input id=\"videoUsedInfo\"  type=\"hidden\" value='";
        // line 3
        if (($this->getAttribute((isset($context["chartInfo"]) ? $context["chartInfo"] : null), "videoUsedInfo", array()) && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chartInfo"]) ? $context["chartInfo"] : null), "videoUsedInfo", array()), "html", null, true);
        } else {
            echo "[]";
        }
        echo "'> 
  <div class=\"panel panel-default\" style=\"position: relative;\">
    <div class=\"panel-heading\">
      <p class=\"pull-right\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_cloud_video_account");
        echo "\" target=\"_blank\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("明细"), "html", null, true);
        echo "</a></p>\t
      <h3 class=\"panel-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频使用情况（最近7个月）"), "html", null, true);
        if ((($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "tlp", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "tlp", array()), 0)) : (0))) {
            echo "<div class=\"icon-security\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已开通tlp加固服务"), "html", null, true);
            echo "\"></div> ";
        }
        echo "</h3>
    </div>
    <div class=\"panel-body\" id=\"storage-data-tab\" style=\"height: 250px;\">
      ";
        // line 10
        if ( !(($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "tlp", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "tlp", array()), 1)) : (1))) {
            // line 11
            echo "      <div class=\"edu-alert\" role=\"alert\">
        <div class=\"icon-security\"></div> 
        ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("TLP安全加固服务，防盗播、防恶意下载"), "html", null, true);
            echo "，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_cloud_tlp");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情"), "html", null, true);
            echo "</a>
      </div>
      ";
        }
        // line 16
        echo "      ";
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode"), "local") == "local")) {
            // line 17
            echo "      <div class=\"edu-verticalmiddle\">
        <div class=\"edu-verticalmiddle-content text-muted\">
          ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("尚未启用云视频服务，"), "html", null, true);
            echo "
          <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即启用"), "html", null, true);
            echo "</a>
        </div>
      </div>
      ";
        }
        // line 24
        echo "    </div>
    
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-storage-chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  77 => 20,  73 => 19,  69 => 17,  66 => 16,  56 => 13,  52 => 11,  50 => 10,  39 => 7,  33 => 6,  23 => 3,  19 => 1,);
    }
}
