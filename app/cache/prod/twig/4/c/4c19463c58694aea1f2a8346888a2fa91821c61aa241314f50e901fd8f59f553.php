<?php

/* TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig */
class __TwigTemplate_4c19463c58694aea1f2a8346888a2fa91821c61aa241314f50e901fd8f59f553 extends Twig_Template
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
        echo "<!-- 紧跟标题 -->
";
        // line 2
        if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("homeworkLessonIds", $context)) ? (_twig_default_filter((isset($context["homeworkLessonIds"]) ? $context["homeworkLessonIds"] : null), null)) : (null)))) {
            // line 3
            echo "  <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-mylibrarybooks mls\"></i></span>
";
        }
        // line 5
        echo "
";
        // line 6
        if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("exercisesLessonIds", $context)) ? (_twig_default_filter((isset($context["exercisesLessonIds"]) ? $context["exercisesLessonIds"] : null), null)) : (null)))) {
            // line 7
            echo "  <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("练习"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-exam mls color-gray mls\"></i></span>
";
        }
        // line 9
        echo "
";
        // line 10
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "materialNum", array()) > 0)) {
            // line 11
            echo "  <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-paperclip mls\"></i></span>
";
        }
        // line 13
        echo "
";
        // line 14
        if ((((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) > 0)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) &&  !((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter((isset($context["fromPlugin"]) ? $context["fromPlugin"] : null), false)) : (false)))) {
            // line 15
            echo "  ";
            $context["remainTime"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())) - (($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array()), 0)) : (0)));
            // line 16
            echo "  ";
            if (((isset($context["remainTime"]) ? $context["remainTime"] : null) > 0)) {
                // line 17
                echo "    <small class=\"text text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还剩"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationTextFilter((isset($context["remainTime"]) ? $context["remainTime"] : null)), "html", null, true);
                echo "</small>
  ";
            } else {
                // line 19
                echo "    <small class=\"text text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已达最大可看时长"), "html", null, true);
                echo "</small>
  ";
            }
        }
        // line 22
        echo "

<!-- 右边图标 -->
";
        // line 25
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 26
            echo "  ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) {
                // line 27
                echo "    <span class=\"date\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videoclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 32
            echo "
  ";
            // line 33
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "audio")) {
                // line 34
                echo "    <span class=\"date\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频时长"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-audioclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 39
            echo "
  ";
            // line 40
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "text")) {
                // line 41
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-graphicclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图文课程"), "html", null, true);
                echo "\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图文"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 45
            echo "
  ";
            // line 46
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "testpaper")) {
                // line 47
                echo "    
    ";
                // line 48
                if ((((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()), null)) : (null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testMode", array()) == "realTime")) && (($this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mediaId", array()), array(), "array"), null)) : (null)))) {
                    // line 49
                    echo "      ";
                    $context["endTime"] = (($this->getAttribute($this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mediaId", array()), array(), "array"), "limitedTime", array()) * 60) + $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()));
                    // line 50
                    echo "      <span class=\"color-gray course-type \">
        ";
                    // line 51
                    if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()))) {
                        // line 52
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试倒计时"), "html", null, true);
                        echo ":<span class=\"color-primary pls\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array())), "html", null, true);
                        echo "</span>
        ";
                    } else {
                        // line 54
                        echo "          ";
                        if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < (isset($context["endTime"]) ? $context["endTime"] : null))) {
                            // line 55
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已开始"), "html", null, true);
                            echo "
          ";
                        } else {
                            // line 57
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已结束"), "html", null, true);
                            echo "
          ";
                        }
                        // line 59
                        echo "      ";
                    }
                    // line 60
                    echo "      </span>
    ";
                } else {
                    // line 62
                    echo "      <span class=\"course-type\">
        <i class=\"es-icon es-icon-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
                    echo "\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
                    echo "\"></i>
      </span>
    ";
                }
                // line 66
                echo "  ";
            }
            // line 67
            echo "
  ";
            // line 68
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "ppt")) {
                // line 69
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-pptclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PPT课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 73
            echo "
  ";
            // line 74
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "document")) {
                // line 75
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-description\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档课程"), "html", null, true);
                echo "\" data-original-title=\"文档\"></i>
    </span>
  ";
            }
            // line 79
            echo "
  ";
            // line 80
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "flash")) {
                // line 81
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-flashclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 85
            echo "
  ";
            // line 86
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "live")) {
                // line 87
                echo "
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videocam\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课程"), "html", null, true);
                echo "\"></i>
      ";
                // line 90
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()) > (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 91
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), $this->env->getExtension('translator')->trans("m月d日")), "html", null, true);
                    echo "
          ";
                    // line 97
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), "H：i"), "html", null, true);
                    echo "
        </small>
      ";
                } elseif ((($this->getAttribute(                // line 99
(isset($context["item"]) ? $context["item"] : null), "startTime", array()) <= (isset($context["currentTime"]) ? $context["currentTime"] : null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "endTime", array()) >= (isset($context["currentTime"]) ? $context["currentTime"] : null)))) {
                    // line 100
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播中"), "html", null, true);
                    echo "</small>
      ";
                } elseif (($this->getAttribute(                // line 101
(isset($context["item"]) ? $context["item"] : null), "endTime", array()) < (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 102
                    echo "
        <small class=\"type\">
          ";
                    // line 104
                    if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "replayStatus", array()), array(0 => "generated", 1 => "videoGenerated"))) {
                        // line 105
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回放"), "html", null, true);
                        echo "
          ";
                    } else {
                        // line 107
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播结束"), "html", null, true);
                        echo "
          ";
                    }
                    // line 109
                    echo "        </small>

      ";
                }
                // line 112
                echo "    </span>
  ";
            }
            // line 114
            echo "
";
        } else {
            // line 116
            echo "  <span class=\"period-state\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("敬请期待"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 116,  305 => 114,  301 => 112,  296 => 109,  290 => 107,  284 => 105,  282 => 104,  278 => 102,  276 => 101,  271 => 100,  269 => 99,  263 => 97,  258 => 91,  256 => 90,  252 => 89,  248 => 87,  246 => 86,  243 => 85,  237 => 82,  234 => 81,  232 => 80,  229 => 79,  223 => 76,  220 => 75,  218 => 74,  215 => 73,  209 => 70,  206 => 69,  204 => 68,  201 => 67,  198 => 66,  190 => 63,  187 => 62,  183 => 60,  180 => 59,  174 => 57,  168 => 55,  165 => 54,  157 => 52,  155 => 51,  152 => 50,  149 => 49,  147 => 48,  144 => 47,  142 => 46,  139 => 45,  131 => 42,  128 => 41,  126 => 40,  123 => 39,  117 => 36,  108 => 34,  106 => 33,  103 => 32,  97 => 29,  88 => 27,  85 => 26,  83 => 25,  78 => 22,  71 => 19,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  52 => 13,  46 => 11,  44 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
