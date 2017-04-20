<?php

/* TopxiaWebBundle:OpenCourseLessonManage:open-course-lesson-list-item.html.twig */
class __TwigTemplate_451bac4df99dbf03b142537c4476d475e42822fefe7755a145dac43a17f75389 extends Twig_Template
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
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "liveOpen")) {
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
        } else {
            // line 27
            echo "      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    ";
        }
        // line 29
        echo "    ";
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 30
            echo "      课时 <span class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
            echo "</span>：
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (((!twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "liveOpen")) && ($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) == "self")) && (($this->getAttribute(        // line 35
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), false)) : (false))) ||  !$this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array())))) {
            // line 37
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时文件已删除"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无效课时"), "html", null, true);
            echo "</span>
    ";
        }
        // line 39
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "

    ";
        // line 41
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 42
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
            // line 46
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 48
        echo "
    <span data-role=\"mediaStatus\"></span>
    ";
        // line 50
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 51
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) ? ($this->env->getExtension('translator')->trans("视频")) : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) ? ($this->env->getExtension('translator')->trans("音频")) : ($this->env->getExtension('translator')->trans("文件")))));
            // line 52
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 53
                echo "        <span class=\"text-warning\">(正在等待";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换)</span>
      ";
            } elseif ((            // line 54
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 55
                echo "        <span class=\"text-info\">(正在转换";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式)</span>
      ";
            } elseif ((            // line 56
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 57
                echo "        <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换失败)</span>
      ";
            }
            // line 59
            echo "    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 62
            echo "      <span class=\"unpublish-warning text-warning\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo ")</span>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "materialNum", array()) > 0)) {
            // line 66
            echo "      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-paperclip mls color-gray\"></i></span>
    ";
        }
        // line 68
        echo "  </div>
  
  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\" >
      <span class=\"es-icon es-icon-edit prs\"></span>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "
    </a>
    
    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
        echo "</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">

        ";
        // line 80
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            // line 81
            echo "          <li>
            <a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-paperclip prs\"></span>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加资料"), "html", null, true);
            echo "</a>
          </li>
          <li class=\"divider\"></li>
        ";
        }
        // line 87
        echo "        
        <li class=\"";
        // line 88
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
        echo "
          </a>
        </li>
        
        <li class=\"";
        // line 94
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消发布"), "html", null, true);
        echo "
          </a>
        </li>

        

        <li class=\"";
        // line 102
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    </span>
  </div>

</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourseLessonManage:open-course-lesson-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 104,  279 => 103,  273 => 102,  264 => 96,  260 => 95,  254 => 94,  247 => 90,  243 => 89,  237 => 88,  234 => 87,  227 => 83,  223 => 82,  220 => 81,  218 => 80,  211 => 76,  204 => 72,  200 => 71,  195 => 68,  189 => 66,  187 => 65,  184 => 64,  178 => 62,  176 => 61,  173 => 60,  170 => 59,  164 => 57,  162 => 56,  157 => 55,  155 => 54,  150 => 53,  147 => 52,  144 => 51,  142 => 50,  138 => 48,  132 => 46,  130 => 45,  127 => 44,  121 => 42,  119 => 41,  113 => 39,  105 => 37,  103 => 35,  102 => 34,  101 => 33,  98 => 32,  92 => 30,  89 => 29,  85 => 27,  82 => 26,  78 => 24,  74 => 22,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  54 => 14,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  19 => 1,);
    }
}
