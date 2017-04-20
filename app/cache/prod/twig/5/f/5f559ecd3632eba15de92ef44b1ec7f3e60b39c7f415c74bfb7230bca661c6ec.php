<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\default.tpl.html.twig */
class __TwigTemplate_5f559ecd3632eba15de92ef44b1ec7f3e60b39c7f415c74bfb7230bca661c6ec extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 7
        echo $this->env->getExtension('topxia_web_twig')->getPurifyHtml($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "content", array()), "message", array()));
        echo "
    </div>
    <div class=\"notification-footer\">
     ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\default.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  27 => 7,  19 => 1,);
    }
}
