<?php

/* TopxiaWebBundle:Course:learn.html.twig */
class __TwigTemplate_8f4105aa60186fb5fdef6d334ca555751ff0c5ed423bbae016b2973d0fae7369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:learn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'esBar' => array($this, 'block_esBar'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["hideSetupHint"] = true;
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 8
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material", 4 => "homework"));
        } else {
            // line 10
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material"));
        }
        // line 13
        $context["script_controller"] = "course/learn";
        // line 14
        $context["bodyClass"] = "lesson-dashboard-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 22
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 23
    public function block_full_content($context, array $blocks = array())
    {
        // line 24
        echo "  <div class=\"lesson-dashboard\" id=\"lesson-dashboard\"
       data-course-id=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\"
       data-course-uri=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
       data-dashboard-uri=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
       data-watch-limit=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit"), "html", null, true);
        echo "\"
       data-starttime=\"";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("starttime", $context)) ? (_twig_default_filter((isset($context["starttime"]) ? $context["starttime"] : null), "")) : ("")), "html", null, true);
        echo "\"
       data-hide-media-lesson-learn-btn=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
    <div class=\"dashboard-content\">
      ";
        // line 32
        $context["classroom"] = $this->env->getExtension('topxia_data_twig')->getData("GetClassroomByCourseId", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        // line 33
        echo "      ";
        if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
            // line 34
            echo "        <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span
              class=\"glyphicon glyphicon-chevron-left\"></span> ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回班级"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 37
            echo "        <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><span
              class=\"glyphicon glyphicon-chevron-left\"></span> ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程"), "html", null, true);
            echo "</a>
      ";
        }
        // line 40
        echo "
      <a class=\"btn btn-primary  nav-btn prev-lesson-btn\" href=\"javascript:\" data-role=\"prev-lesson\"
         data-placement=\"right\" title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上一课时"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-up\"
                                                                 title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上一课时"), "html", null, true);
        echo "\"></span></a>
      <a class=\"btn btn-primary nav-btn next-lesson-btn\" href=\"javascript:\" data-role=\"next-lesson\"
         data-placement=\"right\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一课时"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>

      <div class=\"dashboard-header\">
        <div class=\"pull-left title-group\">
          <span class=\"chapter-label\">
            ";
        // line 50
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 51
            echo "            <span
                data-role=\"custom-chapter-number\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第"), "html", null, true);
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), $this->env->getExtension('translator')->trans("章")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("章"), "html", null, true);
            }
            echo "</span></span>
          ";
        } else {
            // line 54
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第"), "html", null, true);
            echo "<span
              data-role=\"chapter-number\"></span>";
            // line 55
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), $this->env->getExtension('translator')->trans("章")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("章"), "html", null, true);
            }
            echo "</span>
          ";
        }
        // line 57
        echo "          <span class=\"divider\">&raquo;</span>
          <span class=\"chapter-label\">
            ";
        // line 59
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 60
            echo "            <span
                data-role=\"custom-unit-number\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第"), "html", null, true);
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), $this->env->getExtension('translator')->trans("节")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("节"), "html", null, true);
            }
            echo "</span></span>
        ";
        } else {
            // line 63
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第"), "html", null, true);
            echo "<span
            data-role=\"unit-number\"></span>";
            // line 64
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("节"), "html", null, true);
            }
            echo "</span>
          ";
        }
        // line 66
        echo "          <span class=\"divider\">&raquo;</span>
          <span class=\"item-label\">";
        // line 67
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
            echo "<span
                data-role=\"lesson-number\"></span>";
        }
        // line 68
        echo "</span>
          <span class=\"item-title\" data-role=\"lesson-title\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加载"), "html", null, true);
        echo "...</span>
        </div>
      </div>

      <div class=\"dashboard-body\">
        <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" style=\"display:none;\"
            ";
        // line 75
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 76
            echo "              data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null), "html", null, true);
            echo "\"
            ";
        }
        // line 78
        echo "            ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 79
            echo "              data-fingerprint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
            echo "\"
            ";
        }
        // line 81
        echo "             data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "\"
             data-balloon-player=\"1\"
        ></div>
        <div class=\"watermarkEmbedded\"></div>

        <div class=\"lesson-content lesson-content-audio\" id=\"lesson-audio-content\" data-role=\"lesson-content\"
             style=\"display:none;\"></div>
        <div class=\"lesson-content\" id=\"lesson-swf-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content\" id=\"lesson-iframe-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-text-content\" data-role=\"lesson-content\"
             style=\"display:none;\"
            ";
        // line 92
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
            echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
        }
        echo ">
          <div class=\"lesson-content-text-body\"></div>
        </div>

        <div class=\"lesson-content lesson-content-document\" id=\"lesson-document-content\" data-role=\"lesson-content\"
             style=\"display:none;\"
             ";
        // line 98
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.doc_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_doc_watermark");
            echo "\" ";
        }
        // line 99
        echo "        >
          <div class=\"lesson-content-document-body\"></div>
        </div>

        <div class=\"lesson-content lesson-content-text\" id=\"lesson-live-content\" data-role=\"lesson-content\"
             style=\"display:none;\">
          <div class=\"lesson-content-text-body\"></div>
        </div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-unpublished-content\" data-role=\"lesson-content\"
             style=\"display:none;\">
          <div class=\"lesson-content-text-body\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前课时正在编辑中，暂时无法观看。"), "html", null, true);
        echo "</div>
        </div>

        <div class=\"lesson-content lesson-content-text\" id=\"lesson-testpaper-content\" data-role=\"lesson-content\"
             style=\"display:none;\">
          <div class=\"lesson-content-text-body\"></div>
        </div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-ppt-content\" data-role=\"lesson-content\"
             style=\"display:none;\"
             ";
        // line 118
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.ppt_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_ppt_watermark");
            echo "\" ";
        }
        // line 119
        echo "        >
          <div class=\"lesson-content-text-body\"></div>
        </div>

      </div>

      <div class=\"dashboard-footer clearfix\">
        <div class=\"pull-right\">
          <button class=\"btn btn-primary finish-btn\" data-role=\"finish-lesson\" style=\"display:none;\"><span
                class=\"glyphicon glyphicon-unchecked\"></span> ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学过了"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>

    <div class=\"toolbar toolbar-open\" id=\"lesson-dashboard-toolbar\">
      <div class=\"toolbar-nav\">

        <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-primary\"></ul>
        <ul class=\"list-unstyled\">
          <li class=\"es-qrcode toolbar-qrcode\" data-url=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"es-icon es-icon-qrcode\"></i><br>
            ";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫一扫"), "html", null, true);
        echo "
            <span class=\"qrcode-popover\">
              <img src=\"\" alt=\"\">
              ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
        echo "
              ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
        echo "
            </span>
          </li>
        </ul>
        <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-secondary\">
          <li class=\"hide-pane\" style=\"display:none;\">
            <a href=\"javascript:\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
          </li>
        </ul>

      </div>
      <div class=\"toolbar-pane-container\">
      </div>
    </div>

  </div>

  <div class=\"modal\" id=\"course-learned-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习进度提示"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程"), "html", null, true);
        echo "～～～</p>
        </div>
        <div class=\"modal-footer\">
          <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回课程主页"), "html", null, true);
        echo "</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal\" id=\"mediaPlayed-control-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("媒体课时学习提示"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时设置了必须完整播放完整个课时才能学完"), "html", null, true);
        echo "～～</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal\" id=\"homeworkDone-control-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业未完成提示"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时设置了必须做完本课时作业并提交后才能学完"), "html", null, true);
        echo "～～</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  ";
        // line 206
        $this->loadTemplate("TopxiaWebBundle:Common:weixin-share.html.twig", "TopxiaWebBundle:Course:learn.html.twig", 206)->display(array_merge($context, array("title" => $this->getAttribute(        // line 207
(isset($context["course"]) ? $context["course"] : null), "title", array()), "desc" => $this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 208
(isset($context["course"]) ? $context["course"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 209
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('topxia_web_twig')->getFurl($this->getAttribute(        // line 210
(isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"))));
        // line 212
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 212,  451 => 210,  450 => 209,  449 => 208,  448 => 207,  447 => 206,  438 => 200,  432 => 197,  418 => 186,  412 => 183,  396 => 172,  390 => 169,  384 => 166,  359 => 144,  355 => 143,  349 => 140,  344 => 138,  331 => 128,  320 => 119,  314 => 118,  302 => 109,  290 => 99,  284 => 98,  273 => 92,  258 => 81,  252 => 79,  249 => 78,  243 => 76,  241 => 75,  232 => 69,  229 => 68,  223 => 67,  220 => 66,  211 => 64,  206 => 63,  196 => 61,  193 => 60,  191 => 59,  187 => 57,  178 => 55,  173 => 54,  163 => 52,  160 => 51,  158 => 50,  150 => 45,  145 => 43,  141 => 42,  137 => 40,  132 => 38,  127 => 37,  122 => 35,  117 => 34,  114 => 33,  112 => 32,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  84 => 24,  81 => 23,  76 => 22,  71 => 21,  66 => 20,  59 => 17,  56 => 16,  48 => 3,  44 => 1,  42 => 14,  40 => 13,  37 => 10,  34 => 8,  32 => 7,  30 => 5,  11 => 1,);
    }
}
