<?php

/* TopxiaWebBundle:CourseStudentManage:index.html.twig */
class __TwigTemplate_c67393142b5f84e221ebcb9e75af9e54395983a42ae6e21eda67b3274c746937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseStudentManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "students";
        // line 6
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
  ";
        // line 11
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
  ";
        // line 12
        if (((isset($context["role"]) ? $context["role"] : null) == "student")) {
            // line 13
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_export_student", false))) {
                // line 14
                echo "      <a class=\"btn btn-info btn-sm pull-right mhs\"
         href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"><i
            class=\"glyphicon glyphicon-export\"></i> ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("导出"), "html", null, true);
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
                }
                // line 17
                echo "      </a>
    ";
            }
            // line 19
            echo "    ";
            if ($this->env->getExtension('permission.permission_extension')->hasPermission("course_manage_student_create")) {
                // line 20
                echo "
      ";
                // line 21
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
                    // line 22
                    echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\"
           data-url=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("importer_index", array("type" => "course-member", "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"><i
              class=\"glyphicon glyphicon-import\"></i> ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量导入"), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 26
                    echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\"
           title=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程未发布,不可导入学员"), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量导入"), "html", null, true);
                    echo "</a>

      ";
                }
                // line 30
                echo "      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\"
              data-url=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"><i
            class=\"glyphicon glyphicon-plus\"></i> ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
                }
                // line 33
                echo "      </button>
    ";
            }
            // line 35
            echo "    </div>

    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs mbl\">
        <li class=\"";
            // line 39
            if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : null))) : ("")) == "student")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正式学员"), "html", null, true);
            echo "
          </a>
        </li>

        <li class=\"";
            // line 44
            if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : null))) : ("")) == "record")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_record", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出记录"), "html", null, true);
            echo "
          </a>
        </li>
      </ul>

      ";
            // line 50
            $this->displayBlock('maincontent', $context, $blocks);
            // line 51
            echo "    </div>
    </div>
  ";
        }
    }

    // line 50
    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 50,  175 => 51,  173 => 50,  163 => 45,  157 => 44,  148 => 40,  142 => 39,  136 => 35,  132 => 33,  125 => 32,  121 => 31,  118 => 30,  110 => 27,  107 => 26,  102 => 24,  98 => 23,  95 => 22,  93 => 21,  90 => 20,  87 => 19,  83 => 17,  76 => 16,  72 => 15,  69 => 14,  66 => 13,  64 => 12,  55 => 11,  51 => 9,  48 => 8,  35 => 3,  31 => 1,  29 => 6,  27 => 5,  11 => 1,);
    }
}
