<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\thread.tpl.html.twig */
class __TwigTemplate_d75eb8361a9e88f30f9ce5ddba67ca304789b4bdd430025f03f8a53c69d993fc extends Twig_Template
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
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "content", array());
        // line 8
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadUserId", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadUserNickname", array()), "html", null, true);
        echo "</a>
      ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在课程"), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "courseId", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getPurifyHtml($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "courseTitle", array())), "html", null, true);
        echo "</a>
      ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表了"), "html", null, true);
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadType", array()) == "question")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问题"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
        }
        // line 11
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
        echo "\"  target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getPurifyHtml($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadTitle", array())), "html", null, true);
        echo "</a>。
    </div>
    <div class=\"notification-footer\">
     ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\thread.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  51 => 11,  44 => 10,  36 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
