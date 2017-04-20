<?php

/* ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig */
class __TwigTemplate_90f963ddb9efda1be0482dcb2bbf72a031c34ec65c4bcba30b08d5ae443031f3 extends Twig_Template
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
        $context["isAuditor"] = ((array_key_exists("isAuditor", $context)) ? (_twig_default_filter((isset($context["isAuditor"]) ? $context["isAuditor"] : null), false)) : (false));
        // line 2
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false)) {
            // line 3
            echo "  ";
            if (((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                // line 4
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 6
                echo "    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 7
                    echo "      ";
                    if ( !(isset($context["isAuditor"]) ? $context["isAuditor"] : null)) {
                        // line 8
                        echo "        <a class=\"btn btn-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("进去逛逛"), "html", null, true);
                        echo "</a>
      ";
                    }
                    // line 10
                    echo "      <a class=\"btn btn-primary btn-lg\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入购买"), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 12
                    echo "      <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无法购买"), "html", null, true);
                    echo "</button>
    ";
                }
                // line 14
                echo "  ";
            }
        } else {
            // line 16
            echo "  ";
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0) && (( !(isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array()) == 0)) || twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "not_login", 2 => "member_expired", 3 => "level_low"))))) {
                // line 17
                echo "    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 18
                    echo "      ";
                    if ( !(isset($context["isAuditor"]) ? $context["isAuditor"] : null)) {
                        // line 19
                        echo "        <a class=\"btn btn-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("进去逛逛"), "html", null, true);
                        echo "</a>
      ";
                    }
                    // line 21
                    echo "      <a class=\"btn btn-primary btn-lg\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入购买"), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 23
                    echo "      <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无法购买"), "html", null, true);
                    echo "</button>
    ";
                }
                // line 25
                echo "  ";
            } elseif (twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "member_expired"))) {
                // line 26
                echo "    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_buy");
                echo "\"  class=\"btn btn-primary btn-lg\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                echo "</a>

  ";
            } elseif ((            // line 28
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "level_low")) {
                // line 29
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_upgrade", array("level" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                echo "</a>

  ";
            } elseif ((            // line 31
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                // line 32
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_vip_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                echo "</a>

  ";
            } else {
                // line 35
                echo "    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 36
                    echo "      <a  class=\"btn btn-primary btn-lg\"  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
        ";
                    // line 37
                    if ((((isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0))) {
                        // line 38
                        echo "        data-toggle=\"tooltip\"
        data-placement=\"top\"
        title=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您之前已购买了本%name%的所有收费课程，可免费学习！", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                        echo "\"
        ";
                    }
                    // line 42
                    echo "      >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费加入"), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 44
                    echo "    <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无法购买"), "html", null, true);
                    echo "</button>
    ";
                }
                // line 46
                echo "  ";
            }
        }
        // line 48
        echo "


";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 48,  166 => 46,  158 => 44,  152 => 42,  147 => 40,  143 => 38,  141 => 37,  136 => 36,  133 => 35,  124 => 32,  122 => 31,  114 => 29,  112 => 28,  104 => 26,  101 => 25,  93 => 23,  85 => 21,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  64 => 14,  56 => 12,  48 => 10,  40 => 8,  37 => 7,  34 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
