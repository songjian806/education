<?php

/* TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig */
class __TwigTemplate_d52189873227ee5ffaa2b64720fc2ff1242a721be9ed6f0f69f255b364c11c68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig", 1);
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
        $this->loadTemplate("TopxiaWebBundle:OpenCourseManage:open-course-manage-header.html.twig", "TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig", 16)->display($context);
        // line 17
        echo "
<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 20
        $this->displayBlock('side', $context, $blocks);
        // line 80
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 82
        $this->displayBlock('main', $context, $blocks);
        // line 83
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span ";
        // line 27
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 30
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span ";
        // line 32
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 35
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen")) {
            // line 36
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "liveTimeSet")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_live_time_set", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                <span ";
            // line 38
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播时间设置"), "html", null, true);
            echo "
              </a>
            </li>
            <li class=\"list-group-item ";
            // line 41
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "replay")) {
                echo "active";
            }
            echo "\" >
              <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_open_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
              <span ";
            // line 43
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("录播管理"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 46
        echo "          ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            // line 47
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "lesson")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                <span ";
            // line 49
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
            echo "
              </a>
            </li>
            <li class=\"list-group-item ";
            // line 52
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "files")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                <span ";
            // line 54
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件管理"), "html", null, true);
            echo "
              </a>
            </li>
          ";
        }
        // line 58
        echo "        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程设置"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 62
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "marketing")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_marketing", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 67
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teachers")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span ";
        // line 69
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 72
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userType" => "login")), "html", null, true);
        echo "\">
              <span></span>";
        // line 74
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>
      </div>
    ";
    }

    // line 82
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 82,  272 => 74,  268 => 73,  262 => 72,  252 => 69,  248 => 68,  242 => 67,  236 => 64,  232 => 63,  226 => 62,  222 => 61,  217 => 58,  206 => 54,  202 => 53,  196 => 52,  186 => 49,  182 => 48,  175 => 47,  172 => 46,  162 => 43,  158 => 42,  152 => 41,  142 => 38,  138 => 37,  131 => 36,  129 => 35,  119 => 32,  115 => 31,  109 => 30,  99 => 27,  95 => 26,  89 => 25,  85 => 24,  81 => 22,  78 => 21,  75 => 20,  69 => 83,  67 => 82,  63 => 80,  61 => 20,  56 => 17,  54 => 16,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
