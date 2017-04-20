<?php

/* TopxiaAdminBundle:EduCloud:cloud-im.html.twig */
class __TwigTemplate_aa269b42752270d9ab57e146b32fbfa24bc2fa9977112ed6f863bcb9ebe0a14c extends Twig_Template
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
      <h3 class=\"panel-title\">即时聊天状态</h3>
    </div>
    <div class=\"panel-body\" style=\"height: 250px; padding:40px\">
    ";
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->getSetting("app_im.enabled")) {
            // line 8
            echo "      <p class=\"text-muted\">已开启</p>
      <p class=\"text-muted\">截止目前共发送：";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imUsedTotal"]) ? $context["imUsedTotal"] : null), "count", array()), "html", null, true);
            echo " 条</p>
    ";
        } else {
            // line 11
            echo "      <p class=\"text-muted\">未开启</p>
    ";
        }
        // line 13
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-im.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  37 => 11,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
