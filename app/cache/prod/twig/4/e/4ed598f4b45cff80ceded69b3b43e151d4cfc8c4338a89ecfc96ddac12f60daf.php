<?php

/* TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig */
class __TwigTemplate_4ed598f4b45cff80ceded69b3b43e151d4cfc8c4338a89ecfc96ddac12f60daf extends Twig_Template
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
        echo "<ul class=\"subfield-list 
  ";
        // line 2
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip") && $this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled"))) {
            // line 3
            echo "    five-subfield 
  ";
        } else {
            // line 5
            echo "    four-subfield
  ";
        }
        // line 7
        echo "  clearfix\">
  <li>
    <div class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录用户"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("loginCount", $context)) ? (_twig_default_filter((isset($context["loginCount"]) ? $context["loginCount"] : null), "0")) : ("0")), "html", null, true);
        echo "</span>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在线总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["onlineCount"]) ? $context["onlineCount"] : null), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增注册"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["todayRegisterNum"]) ? $context["todayRegisterNum"] : null), "html", null, true);
        echo "</span>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalRegisterNum"]) ? $context["totalRegisterNum"] : null), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增学员"), "html", null, true);
        echo "</div>
    <span class=\"number\"> ";
        // line 20
        echo twig_escape_filter($this->env, ((isset($context["todayCourseMemberNum"]) ? $context["todayCourseMemberNum"] : null) + (isset($context["todayClassroomMemberNum"]) ? $context["todayClassroomMemberNum"] : null)), "html", null, true);
        echo "</span>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("总人次"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((isset($context["totalCourseMemberNum"]) ? $context["totalCourseMemberNum"] : null) + (isset($context["totalClassroomMemberNum"]) ? $context["totalClassroomMemberNum"] : null)), "html", null, true);
        echo "</p>
  </li>
  ";
        // line 23
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip") && $this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled"))) {
            // line 24
            echo "    <li>
      <div class=\"title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增会员"), "html", null, true);
            echo "</div>
      <span class=\"number\">";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["todayVipNum"]) ? $context["todayVipNum"] : null), "html", null, true);
            echo "</span>
      <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("总数"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["totalVipNum"]) ? $context["totalVipNum"] : null), "html", null, true);
            echo "</p>
    </li>
  ";
        }
        // line 30
        echo "  <li>
    <div class=\"title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未回复回答"), "html", null, true);
        echo "</div>
    <span class=\"number\">
      ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["todayThreadUnAnswerNum"]) ? $context["todayThreadUnAnswerNum"] : null), "html", null, true);
        echo "
    </span>
    <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalThreadNum"]) ? $context["totalThreadNum"] : null), "html", null, true);
        echo "</p>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  112 => 33,  107 => 31,  104 => 30,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  83 => 23,  76 => 21,  72 => 20,  68 => 19,  60 => 16,  56 => 15,  52 => 14,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
