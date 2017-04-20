<?php

/* TopxiaWebBundle:My:layout.html.twig */
class __TwigTemplate_42397910b0ddaf92384c728288c60ed3ea6986871c7ce71cc9fa396008ca4def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:My:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        // line 4
        echo "  ";
        if (twig_in_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), array(0 => "my-teaching-courses", 1 => "my-teaching-classroom", 2 => "my-teaching-questions", 3 => "my-teaching-discussions", 4 => "my-teaching-check", 5 => "my-teaching-homework-check", 6 => "material-lib"))) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        }
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:My:avatarAlert"));
        echo "

<div class=\"row row-3-9\">
  <div class=\"col-md-3\">
    <div class=\"sidenav\">
      ";
        // line 18
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Point")) {
            // line 19
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的网校"), "html", null, true);
            echo "</li>
          <li class=\"list-group-item
           ";
            // line 22
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "growth")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的成长"), "html", null, true);
            echo "</a>
          </li>
        </ul>
      ";
        }
        // line 27
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method")) {
            // line 28
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            echo "</li>
          <li class=\"list-group-item
           ";
            // line 31
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("my_teaching_courses");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
            echo "</a>
          </li>

          <li class=\"list-group-item ";
            // line 35
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-classroom")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("my_teaching_classrooms");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所教"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo "
              </a>
          </li>


          <li class=\"list-group-item ";
            // line 41
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-questions")) {
                echo "active ";
            }
            echo "\">
            <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "question"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问答"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"list-group-item ";
            // line 45
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-discussions")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
            echo "</a>
          </li>

          <li class=\"list-group-item ";
            // line 49
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-check")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷批阅"), "html", null, true);
            echo "
            </a>
          </li>

          ";
            // line 54
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                // line 55
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-homework-check")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("my_teaching_homework_list");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业批改"), "html", null, true);
                echo "</a>
            </li>
          ";
            }
            // line 59
            echo "
          <li class=\"list-group-item ";
            // line 60
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "material-lib")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("material_lib_browsing");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教学资料库"), "html", null, true);
            echo "</a>
          </li>
        </ul>
      ";
        }
        // line 65
        echo "
      <ul class=\"list-group\">
        <li class=\"list-group-heading\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item ";
        // line 68
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-learning")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的课程"), "html", null, true);
        echo "</a>
        </li>


          <li class=\"list-group-item ";
        // line 73
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-classroom")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("my_classrooms");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</a>
          </li>


        ";
        // line 78
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 79
            echo "        <li class=\"list-group-item
          ";
            // line 80
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
          <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("my_live_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的直播课表"), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 84
        echo "
        <li class=\"list-group-item
        ";
        // line 86
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-questions")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("my_questions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的问答"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 90
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-discussions")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的话题"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 94
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-notes")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("my_notebooks");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的笔记"), "html", null, true);
        echo "</a>
        </li>

        ";
        // line 98
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 99
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-homeworks")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("my_homework_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的作业"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 103
        echo "
        <li class=\"list-group-item
        ";
        // line 105
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-quiz")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的考试"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 109
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-group")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的小组"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 112
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 113
            echo "          <li class=\"list-group-item
          ";
            // line 114
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-task")) {
                echo " active ";
            }
            echo "\" >
            <a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("my_task_calendar");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的任务"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 118
        echo "      </ul>
    </div>
  </div>
  <div class=\"col-md-9\">";
        // line 121
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
</div>

";
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 121,  393 => 118,  385 => 115,  379 => 114,  376 => 113,  374 => 112,  367 => 110,  361 => 109,  353 => 106,  347 => 105,  343 => 103,  335 => 100,  328 => 99,  326 => 98,  318 => 95,  312 => 94,  304 => 91,  298 => 90,  290 => 87,  284 => 86,  280 => 84,  272 => 81,  266 => 80,  263 => 79,  261 => 78,  252 => 74,  246 => 73,  237 => 69,  231 => 68,  227 => 67,  223 => 65,  214 => 61,  208 => 60,  205 => 59,  197 => 56,  190 => 55,  188 => 54,  179 => 50,  173 => 49,  160 => 46,  154 => 45,  141 => 42,  135 => 41,  124 => 36,  118 => 35,  110 => 32,  104 => 31,  99 => 29,  96 => 28,  93 => 27,  84 => 23,  78 => 22,  73 => 20,  70 => 19,  68 => 18,  60 => 13,  57 => 12,  54 => 11,  44 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
