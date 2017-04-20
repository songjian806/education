<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_f83778063b0a9f050f7b24bf08b95d54119d1722f7c4389f45860bf63da7b4af extends Twig_Template
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
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\" data-file-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()), "html", null, true);
        echo "\" data-lesson-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) {
            // line 7
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 8
                echo "      <i class=\"fa fa-file-video-o text-warning\"></i>
      ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 10
                echo "      <i class=\"fa fa-file-video-o text-info\"></i>
      ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 12
                echo "      <i class=\"fa fa-file-video-o text-danger\"></i>
      ";
            } else {
                // line 14
                echo "      <i class=\"fa fa-file-video-o text-success\"></i>
      ";
            }
            // line 16
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 17
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 18
                echo "      <i class=\"fa fa-video-camera text-warning\"></i>
      ";
            } elseif ((            // line 19
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 20
                echo "      <i class=\"fa fa-video-camera text-info\"></i>
      ";
            } elseif ((            // line 21
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 22
                echo "      <i class=\"fa fa-video-camera text-danger\"></i>
      ";
            } else {
                // line 24
                echo "      <i class=\"fa fa-video-camera text-success\"></i>
      ";
            }
            // line 26
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) {
            // line 27
            echo "      <i class=\"fa fa-file-audio-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 29
            echo "      <i class=\"fa fa-file-text-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "text")) {
            // line 31
            echo "      <i class=\"fa fa-file-photo-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 32
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "document")) {
            // line 33
            echo "      <i class=\"fa fa-files-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "flash")) {
            // line 35
            echo "      <i class=\"fa fa-film text-success\"></i>
    ";
        } else {
            // line 37
            echo "      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 41
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
            echo " <span class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
            echo "</span>：
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "free", array()) == 1)) {
            // line 45
            echo "      <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
            echo "</span>
    ";
        } elseif ((($this->getAttribute(        // line 46
(isset($context["course"]) ? $context["course"] : null), "tryLookable", array()) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) && ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 47
            echo "      <span class=\"label label-warning mrm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试看"), "html", null, true);
            echo "</span>";
        }
        // line 48
        echo "    ";
        if (((!twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "text", 1 => "live", 2 => "testpaper")) && ($this->getAttribute(        // line 49
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) == "self")) && (($this->getAttribute(        // line 50
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), false)) : (false))) ||  !$this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array())))) {
            // line 52
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时文件已删除"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无效课时"), "html", null, true);
            echo "</span>
    ";
        }
        // line 54
        echo "    ";
        echo $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array());
        echo "
    ";
        // line 55
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 56
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
            // line 60
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()) > 0)) {
            // line 64
            echo "      <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%giveCredit%学分", array("%giveCredit%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()))), "html", null, true);
            echo ")</small>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()) > 0)) {
            // line 68
            echo "      <small class=\"text-muted\">
        (";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("需%giveCredit%学分", array("%giveCredit%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()))), "html", null, true);
            echo ")
      </small>
    ";
        }
        // line 72
        echo "
    <span data-role=\"mediaStatus\"></span>
    ";
        // line 74
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 75
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) ? ($this->env->getExtension('translator')->trans("视频")) : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) ? ($this->env->getExtension('translator')->trans("音频")) : ($this->env->getExtension('translator')->trans("文件")))));
            // line 76
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 77
                echo "        <span class=\"text-warning\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在等待"), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式转换"), "html", null, true);
                echo ")</span>
      ";
            } elseif ((            // line 78
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 79
                echo "        <span class=\"text-info\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在转换"), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式"), "html", null, true);
                echo ")</span>
      ";
            } elseif ((            // line 80
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 81
                echo "        <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式转换失败"), "html", null, true);
                echo ")</span>
      ";
            }
            // line 83
            echo "    ";
        }
        // line 84
        echo "
    ";
        // line 85
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 86
            echo "      <span class=\"unpublish-warning text-warning\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo ")</span>
    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper"))) {
            // line 90
            echo "      ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array"), null)) : (null));
            // line 91
            echo "      ";
            if ((isset($context["homework"]) ? $context["homework"] : null)) {
                // line 92
                echo "        <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业"), "html", null, true);
                echo "\"><i class=\"es-icon es-icon-mylibrarybooks mls color-gray\"></i></span>
      ";
            }
            // line 94
            echo "    ";
        }
        // line 95
        echo "
    ";
        // line 96
        $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array"), null)) : (null));
        // line 97
        echo "    ";
        if ((isset($context["exercise"]) ? $context["exercise"] : null)) {
            // line 98
            echo "      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("练习"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-exam mls color-gray\"></i></span>
    ";
        }
        // line 100
        echo "
    ";
        // line 101
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "materialNum", array()) > 0)) {
            // line 102
            echo "      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-paperclip mls color-gray\"></i></span>
    ";
        }
        // line 104
        echo "  </div>

  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
      ";
        // line 108
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 109
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } elseif (($this->getAttribute(        // line 110
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 111
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } else {
            // line 113
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 115
        echo "      ><span class=\"es-icon es-icon-edit prs\"></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</a>
    ";
        // line 116
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 117
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 119
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "preview" => 1)), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
            echo "</a>
    ";
        }
        // line 121
        echo "    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
        echo "</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">

        ";
        // line 126
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper"))) {
            // line 127
            echo "          ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array"), null)) : (null));
            // line 128
            echo "          ";
            $context["homeworkId"] = (($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array()), null)) : (null));
            // line 129
            echo "          ";
            if ((isset($context["homework"]) ? $context["homework"] : null)) {
                // line 130
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"es-icon es-icon-mylibrarybooks prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑作业"), "html", null, true);
                echo "</a></li>
            <li><a href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" class=\"preview-homework-btn\" ><span class=\"glyphicon glyphicon-eye-open prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览作业"), "html", null, true);
                echo "</a></li>
            <li><a href=\"javascript:;\" class=\"delete-homework-btn\" data-url=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除作业"), "html", null, true);
                echo "</a></li>
          ";
            } else {
                // line 134
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"es-icon es-icon-mylibrarybooks prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("布置作业"), "html", null, true);
                echo "</a></li>
          ";
            }
            // line 136
            echo "            <li class=\"divider\"></li>
          ";
            // line 137
            $context["lessonId"] = $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array());
            // line 138
            echo "          ";
            $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array"), null)) : (null));
            // line 139
            echo "          ";
            if ((isset($context["exercise"]) ? $context["exercise"] : null)) {
                // line 140
                echo "            <li><a href=\"javascript:;\" class=\"delete-exercise-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "id" => $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除练习"), "html", null, true);
                echo "</a></li>
          ";
            } else {
                // line 142
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"es-icon es-icon-exam prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增练习"), "html", null, true);
                echo "</a></li>
          ";
            }
            // line 144
            echo "          <li class=\"divider\"></li>
        ";
        }
        // line 146
        echo "
        ";
        // line 147
        if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video") && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 148
            echo "          ";
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), null)) : (null)) == "cloud")) {
                // line 149
                echo "          <li class=\"mark-manage\" style=\"display:none;\">
            <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_marker_manage", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" class=\"manage-lesson-marker-btn\" >
            <span class=\"glyphicon glyphicon-list prs\"></span>";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("弹题管理"), "html", null, true);
                echo "
            </a>
          </li>
          <li class=\"divider mark-manage-divider\" style=\"display:none;\"></li>
          ";
            }
            // line 156
            echo "        ";
        }
        // line 157
        echo "
        ";
        // line 158
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 159
            echo "          <li><a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加资料"), "html", null, true);
            echo "</a></li>
          <li class=\"divider\"></li>
        ";
        }
        // line 162
        echo "
        <li class=\"";
        // line 163
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"";
        // line 169
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消发布"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"";
        // line 174
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    </span>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 176,  515 => 175,  509 => 174,  503 => 171,  499 => 170,  493 => 169,  486 => 165,  482 => 164,  476 => 163,  473 => 162,  464 => 159,  462 => 158,  459 => 157,  456 => 156,  448 => 151,  444 => 150,  441 => 149,  438 => 148,  436 => 147,  433 => 146,  429 => 144,  421 => 142,  413 => 140,  410 => 139,  407 => 138,  405 => 137,  402 => 136,  394 => 134,  387 => 132,  381 => 131,  374 => 130,  371 => 129,  368 => 128,  365 => 127,  363 => 126,  356 => 122,  353 => 121,  343 => 119,  335 => 117,  333 => 116,  328 => 115,  322 => 113,  316 => 111,  314 => 110,  309 => 109,  307 => 108,  301 => 104,  295 => 102,  293 => 101,  290 => 100,  284 => 98,  281 => 97,  279 => 96,  276 => 95,  273 => 94,  267 => 92,  264 => 91,  261 => 90,  259 => 89,  256 => 88,  250 => 86,  248 => 85,  245 => 84,  242 => 83,  235 => 81,  233 => 80,  226 => 79,  224 => 78,  217 => 77,  214 => 76,  211 => 75,  209 => 74,  205 => 72,  199 => 69,  196 => 68,  194 => 67,  191 => 66,  185 => 64,  183 => 63,  180 => 62,  174 => 60,  172 => 59,  169 => 58,  163 => 56,  161 => 55,  156 => 54,  148 => 52,  146 => 50,  145 => 49,  143 => 48,  138 => 47,  136 => 46,  131 => 45,  129 => 44,  126 => 43,  118 => 41,  116 => 40,  113 => 39,  109 => 37,  105 => 35,  103 => 34,  100 => 33,  98 => 32,  95 => 31,  93 => 30,  90 => 29,  88 => 28,  85 => 27,  82 => 26,  78 => 24,  74 => 22,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  54 => 14,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  19 => 1,);
    }
}
