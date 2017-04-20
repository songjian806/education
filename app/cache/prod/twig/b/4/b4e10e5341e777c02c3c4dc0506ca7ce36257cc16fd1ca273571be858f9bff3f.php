<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_b4e10e5341e777c02c3c4dc0506ca7ce36257cc16fd1ca273571be858f9bff3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:CourseManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<style>
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 20
        $this->displayBlock('side', $context, $blocks);
        // line 159
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 161
        $this->displayBlock('main', $context, $blocks);
        // line 162
        echo "  </div>
</div>
";
    }

    // line 20
    public function block_side($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 22
        echo "      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程信息"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 25
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 26
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 27
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "base")), "html", null, true);
        } else {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "\">
              <span ";
        // line 30
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 33
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "detail")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 34
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "detail")), "html", null, true);
        } else {
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_detail", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 37
        echo "\">
              <span ";
        // line 38
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详细信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 41
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 42
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 43
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "picture")), "html", null, true);
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 45
        echo "\">
              <span ";
        // line 46
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 49
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "lesson")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 50
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 51
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lesson")), "html", null, true);
        } else {
            // line 52
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "\">
              <span ";
        // line 54
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 57
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 58
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "replay")) {
                echo "active";
            }
            echo "\" >
              <a href=\"";
            // line 59
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "replay")), "html", null, true);
            } else {
                // line 61
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "
            ";
            }
            // line 62
            echo "\"><span ";
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("录播管理"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 65
        echo "          <li class=\"list-group-item ";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "files")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 66
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 67
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "files")), "html", null, true);
        } else {
            // line 68
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 69
        echo "\">
              <span ";
        // line 70
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程文件"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程设置"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 77
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "price")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 78
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 79
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "price")), "html", null, true);
        } else {
            // line 80
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 81
        echo "\">
              <span ";
        // line 82
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 85
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teachers")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 86
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 87
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "teachers")), "html", null, true);
        } else {
            // line 88
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 89
        echo "\">
              <span ";
        // line 90
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 93
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 95
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题库"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 102
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 103
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 104
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question")), "html", null, true);
        } else {
            // line 105
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 106
        echo "\">
              <span ";
        // line 107
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
        echo "
            </a>
          </li>

          ";
        // line 111
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("QuestionPlus") && $this->env->getExtension('topxia_web_twig')->getSetting("question_plus.enabled"))) {
            // line 112
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_plumber")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 113
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 114
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question_plumber")), "html", null, true);
            } else {
                // line 115
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_question_plumber", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "import")), "html", null, true);
                echo "
              ";
            }
            // line 116
            echo "\">
                <span ";
            // line 117
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目导入/导出"), "html", null, true);
            echo "
              </a>
            </li>
          ";
        }
        // line 121
        echo "
          <!-- <li class=\"list-group-item ";
        // line 122
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_category")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">题目类别管理</a>
          </li> -->

          <li class=\"list-group-item ";
        // line 126
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testpaper")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 127
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 128
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "testpaper")), "html", null, true);
        } else {
            // line 129
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 130
        echo "\">
              <span ";
        // line 131
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷管理"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 134
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testCheck")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\"><span></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷批阅"), "html", null, true);
        echo "</a>
          </li>
          ";
        // line 137
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 138
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "homeworkCheck")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_check_list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\"><span></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业批改"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 142
        echo "        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程运营"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 146
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "course_manage_data")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_data", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程学习数据"), "html", null, true);
        echo "</a>
          </li>

          ";
        // line 151
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_search_order") == 1))) {
            // line 152
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "course_manage_order")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_order", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><span></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程订单查询"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 156
        echo "        </ul>
      </div>
    ";
    }

    // line 161
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 161,  557 => 156,  549 => 153,  542 => 152,  540 => 151,  534 => 148,  530 => 147,  524 => 146,  520 => 145,  515 => 142,  507 => 139,  500 => 138,  498 => 137,  491 => 135,  485 => 134,  475 => 131,  472 => 130,  466 => 129,  462 => 128,  460 => 127,  454 => 126,  448 => 123,  442 => 122,  439 => 121,  428 => 117,  425 => 116,  419 => 115,  415 => 114,  413 => 113,  406 => 112,  404 => 111,  393 => 107,  390 => 106,  384 => 105,  380 => 104,  378 => 103,  372 => 102,  368 => 101,  356 => 95,  352 => 94,  346 => 93,  336 => 90,  333 => 89,  327 => 88,  323 => 87,  321 => 86,  315 => 85,  305 => 82,  302 => 81,  296 => 80,  292 => 79,  290 => 78,  284 => 77,  280 => 76,  267 => 70,  264 => 69,  258 => 68,  254 => 67,  252 => 66,  245 => 65,  234 => 62,  228 => 61,  224 => 60,  222 => 59,  215 => 58,  213 => 57,  203 => 54,  200 => 53,  194 => 52,  190 => 51,  188 => 50,  182 => 49,  172 => 46,  169 => 45,  163 => 44,  159 => 43,  157 => 42,  151 => 41,  141 => 38,  138 => 37,  132 => 36,  128 => 35,  126 => 34,  120 => 33,  110 => 30,  107 => 29,  101 => 28,  97 => 27,  95 => 26,  89 => 25,  85 => 24,  81 => 22,  78 => 21,  75 => 20,  69 => 162,  67 => 161,  63 => 159,  61 => 20,  54 => 16,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
