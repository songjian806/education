<?php

/* TopxiaWebBundle:EsBar:ListContent/StudyCenter/study-mission.html.twig */
class __TwigTemplate_dc1d1e69ee1fc6ae452c3773ffeb289f603a3b8d70b8ad05ddce0f3b19587899 extends Twig_Template
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
        echo "<div class=\"text-line gray small\">
  <h5><span>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习任务"), "html", null, true);
        echo "</span></h5>
  <div class=\"line\"></div>
</div>

";
        // line 6
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0))) {
            // line 7
            echo "  ";
            $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("ClassroomMissions", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "count" => 5, "missionCount" => 4));
            // line 8
            echo "  ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("CourseMissions", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "count" => 5, "missionCount" => 4));
        }
        // line 10
        echo "
";
        // line 11
        if ((((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), false)) : (false)) || ((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), false)) : (false)))) {
            // line 12
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
                    // line 13
                    echo "    ";
                    if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
                        // line 14
                        echo "      ";
                        $context["classroomPlan"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("GetClassroomPlanByClassroomId", array("classroomId" => $this->getAttribute($context["classroom"], "id", array()))), null);
                        // line 15
                        echo "      ";
                        $context["userPlanTaskNumInfo"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("UserClassroomPlanTaskNumInfo", array("classroomId" => $this->getAttribute($context["classroom"], "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), null);
                        // line 16
                        echo "    ";
                    }
                    // line 17
                    echo "    <div class=\"bar-task\">
      <div class=\"bar-task-header\">
        <div class=\"title\">
          ";
                    // line 20
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $context["classroom"], "html", null, true);
                    echo "
          ";
                    // line 21
                    if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), null)) : (null)) && ($this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), "status", array()) == "published")) && ((array_key_exists("userPlanTaskNumInfo", $context)) ? (_twig_default_filter((isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : null), null)) : (null)))) {
                        // line 22
                        echo "            <span>";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : null), "allDoneNum", array()) . "/") . $this->getAttribute((isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : null), "tasksNum", array())), "html", null, true);
                        echo "</span>
          ";
                    } else {
                        // line 24
                        echo "            <span>";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["classroom"], "learnedLessonNum", array()) . "/") . $this->getAttribute($context["classroom"], "allLessonNum", array())), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 26
                    echo "        </div>
      </div>

      <ul class=\"bar-time-line\">
        ";
                    // line 30
                    if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), null)) : (null)) && ($this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), "status", array()) == "published")) && (isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : null))) {
                        // line 31
                        echo "          ";
                        $context["tasks"] = $this->env->getExtension('topxia_data_twig')->getData("TodayUserTasks", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "taskType" => "studyplan", "batchId" => $this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), "id", array()), "count" => 4));
                        // line 32
                        echo "        ";
                    }
                    // line 33
                    echo "
        ";
                    // line 34
                    if (((array_key_exists("tasks", $context)) ? (_twig_default_filter((isset($context["tasks"]) ? $context["tasks"] : null), null)) : (null))) {
                        // line 35
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                            // line 36
                            echo "            ";
                            if (($this->getAttribute($context["task"], "targetType", array()) == "homework")) {
                                // line 37
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light ";
                                if (($this->getAttribute($context["task"], "timeStatus", array()) == "behind")) {
                                    echo "text-danger";
                                }
                                echo "\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_start_do", array("courseId" => $this->getAttribute($this->getAttribute($context["task"], "meta", array()), "courseId", array()), "homeworkId" => $this->getAttribute($context["task"], "targetId", array()))), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            } else {
                                // line 39
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light ";
                                if (($this->getAttribute($context["task"], "timeStatus", array()) == "behind")) {
                                    echo "text-danger";
                                }
                                echo "\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($this->getAttribute($context["task"], "meta", array()), "courseId", array()))) . "#lesson/") . $this->getAttribute($context["task"], "targetId", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            }
                            // line 41
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "        ";
                    } elseif ($this->getAttribute($context["classroom"], "lessons", array(), "array")) {
                        // line 43
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["classroom"], "lessons", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                            // line 44
                            echo "            ";
                            $context["status"] = $this->getAttribute($context["lesson"], "isLearned", array());
                            // line 45
                            echo "            ";
                            if ((isset($context["status"]) ? $context["status"] : null)) {
                                // line 46
                                echo "              <li><span class=\"es-icon es-icon-doing\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时%number%-%title%", array("%number%" => $this->getAttribute($context["lesson"], "number", array()), "%title%" => $this->getAttribute($context["lesson"], "title", array()))), "html", null, true);
                                echo "</a></li>
            ";
                            } else {
                                // line 48
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时%number%-%title%", array("%number%" => $this->getAttribute($context["lesson"], "number", array()), "%title%" => $this->getAttribute($context["lesson"], "title", array()))), "html", null, true);
                                echo "</a></li>
            ";
                            }
                            // line 50
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "        ";
                    }
                    // line 52
                    echo "      </ul>
    </div>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                if ((isset($context["courses"]) ? $context["courses"] : null)) {
                    // line 56
                    echo "    <div class=\"bar-task\">
      <div class=\"bar-task-header\">
        <div class=\"title\">
          ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程:%title%", array("%title%" => $this->getAttribute($context["course"], "title", array()))), "html", null, true);
                    echo "
          <span>";
                    // line 60
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "learnedLessonNum", array()) . "/") . $this->getAttribute($context["course"], "allLessonNum", array())), "html", null, true);
                    echo "</span>
        </div>
      </div>

      <ul class=\"bar-time-line\">
        ";
                    // line 65
                    if ($this->getAttribute($context["course"], "lessons", array(), "array")) {
                        // line 66
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["course"], "lessons", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                            // line 67
                            echo "            ";
                            $context["status"] = $this->getAttribute($context["lesson"], "isLearned", array());
                            // line 68
                            echo "            ";
                            if ((isset($context["status"]) ? $context["status"] : null)) {
                                // line 69
                                echo "              <li><span class=\"es-icon es-icon-doing\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时%number%-%title%", array("%number%" => $this->getAttribute($context["lesson"], "number", array()), "%title%" => $this->getAttribute($context["lesson"], "title", array()))), "html", null, true);
                                echo "</a></li>
            ";
                            } else {
                                // line 71
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时%number%-%title%", array("%number%" => $this->getAttribute($context["lesson"], "number", array()), "%title%" => $this->getAttribute($context["lesson"], "title", array()))), "html", null, true);
                                echo "</a></li>
            ";
                            }
                            // line 73
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "        ";
                    }
                    // line 75
                    echo "      </ul>
    </div>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 79
            echo "  <span class=\"\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂未发现还有未学习课时。"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去逛逛"), "html", null, true);
            echo ">></a>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/StudyCenter/study-mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 79,  264 => 75,  261 => 74,  255 => 73,  245 => 71,  235 => 69,  232 => 68,  229 => 67,  224 => 66,  222 => 65,  214 => 60,  210 => 59,  205 => 56,  199 => 55,  190 => 52,  187 => 51,  181 => 50,  171 => 48,  161 => 46,  158 => 45,  155 => 44,  150 => 43,  147 => 42,  141 => 41,  127 => 39,  113 => 37,  110 => 36,  105 => 35,  103 => 34,  100 => 33,  97 => 32,  94 => 31,  92 => 30,  86 => 26,  80 => 24,  74 => 22,  72 => 21,  66 => 20,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  43 => 12,  41 => 11,  38 => 10,  34 => 8,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
