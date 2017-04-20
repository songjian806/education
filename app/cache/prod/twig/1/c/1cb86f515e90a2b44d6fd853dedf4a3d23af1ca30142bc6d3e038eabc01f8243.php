<?php

/* ClassroomBundle:ClassroomManage:menu.html.twig */
class __TwigTemplate_1cb86f515e90a2b44d6fd853dedf4a3d23af1ca30142bc6d3e038eabc01f8243 extends Twig_Template
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
        if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
            // line 2
            echo "  <ul class=\"list-group\">
    <li class=\"list-group-item ";
            // line 3
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "main")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理首页"), "html", null, true);
            echo "</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">";
            // line 9
            echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")) . $this->env->getExtension('translator')->trans("设置")), "html", null, true);
            echo "</li>
    <li class=\"list-group-item ";
            // line 10
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
            echo " ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array()))) {
                echo "<span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未完善"), "html", null, true);
                echo "</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 13
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "price")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 16
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("封面图片"), "html", null, true);
            echo " ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array()))) {
                echo "<span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未设置"), "html", null, true);
                echo "</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 19
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "service")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_service", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("服务设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 22
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "headTeacher")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_headteacher", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("班主任设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 25
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teachers")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_teachers", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 28
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "assistant")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_assistants", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("助教设置"), "html", null, true);
            echo "</a>
    </li>

    ";
            // line 32
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
                // line 33
                echo "      <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "plan")) {
                    echo "active";
                }
                echo "\">
        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_plan", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习计划"), "html", null, true);
                echo "</a>
      </li>
    ";
            }
            // line 37
            echo "  </ul>
";
        }
        // line 39
        echo "
<ul class=\"list-group\">
  <li class=\"list-group-heading\">";
        // line 41
        echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")) . $this->env->getExtension('translator')->trans("管理")), "html", null, true);
        echo "</li>
  ";
        // line 42
        if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
            // line 43
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "courses")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
            echo "</a></li>
    <li class=\"list-group-item ";
            // line 44
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员管理"), "html", null, true);
            echo "</a>
    </li>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if ((isset($context["canHandle"]) ? $context["canHandle"] : null)) {
            // line 50
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testpaper-check")) {
                echo " active ";
            }
            echo "\">
      <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷批阅"), "html", null, true);
            echo "</a>
    </li>
   
    ";
            // line 54
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                // line 55
                echo "      <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "homework-check")) {
                    echo " active ";
                }
                echo "\">
        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_homework", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业批改"), "html", null, true);
                echo "</a>
      </li>
    ";
            }
            // line 59
            echo "  ";
        }
        // line 60
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 60,  241 => 59,  233 => 56,  226 => 55,  224 => 54,  216 => 51,  209 => 50,  207 => 49,  204 => 48,  196 => 45,  190 => 44,  179 => 43,  177 => 42,  173 => 41,  169 => 39,  165 => 37,  157 => 34,  150 => 33,  148 => 32,  140 => 29,  134 => 28,  127 => 26,  121 => 25,  114 => 23,  108 => 22,  101 => 20,  95 => 19,  82 => 17,  76 => 16,  69 => 14,  63 => 13,  50 => 11,  44 => 10,  40 => 9,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
