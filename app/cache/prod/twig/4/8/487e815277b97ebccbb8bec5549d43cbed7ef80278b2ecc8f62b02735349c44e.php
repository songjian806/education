<?php

/* TopxiaAdminBundle:EduCloud:cloud-im-chart.html.twig */
class __TwigTemplate_487e815277b97ebccbb8bec5549d43cbed7ef80278b2ecc8f62b02735349c44e extends Twig_Template
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
  <input id=\"imUsedInfo\"  type=\"hidden\" value='";
        // line 3
        if ($this->env->getExtension('topxia_web_twig')->getSetting("app_im.enabled")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chartInfo"]) ? $context["chartInfo"] : null), "imUsedInfo", array()), "html", null, true);
        } else {
            echo "[]";
        }
        echo "'>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      ";
        // line 7
        echo "      <h3 class=\"panel-title\">即时聊天使用情况（最近7天）</h3>
    </div>
    <div class=\"panel-body\" id=\"im-data-tab\" style=\"height: 250px;\">
    ";
        // line 10
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("app_im.enabled")) {
            // line 11
            echo "      <div class=\"edu-verticalmiddle\">
        <div class=\"edu-verticalmiddle-content text-muted\">
          <p class=\"text-danger\">您的即时聊天服务未开启，去<a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("admin_app_im");
            echo "\">开启</a></p>
        </div>
      </div>
    ";
        }
        // line 17
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-im-chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  44 => 13,  40 => 11,  38 => 10,  33 => 7,  23 => 3,  19 => 1,);
    }
}
