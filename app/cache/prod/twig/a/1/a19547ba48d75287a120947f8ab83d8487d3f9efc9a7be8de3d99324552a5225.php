<?php

/* TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_a19547ba48d75287a120947f8ab83d8487d3f9efc9a7be8de3d99324552a5225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 4
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null));
        // line 151
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑课时%number%", array("%number%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加课时"), "html", null, true);
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<form id=\"course-lesson-form\" data-course-id=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal lesson-form\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "  data-create-draft-url=\"";
        echo $this->env->getExtension('routing')->getPath("course_draft_create");
        echo "\"
  ";
        // line 15
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            // line 16
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\" data-lesson-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\"
  ";
        } else {
            // line 18
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 20
        echo "  >

  <div class=\"form-group\" ";
        // line 22
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <div class=\"col-md-2 control-label\"><label>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("类型"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        ";
        // line 26
        echo $this->env->getExtension('topxia_html_twig')->radios("type", $this->env->getExtension('topxia_web_twig')->getDict("lessonType"), _twig_default_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "type"), "video"));
        echo "
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 31
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-10\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 36
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "title");
        echo "\" >
        </div>
        <div class=\"col-md-2\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"free\" value=\"1\" ";
        // line 40
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "free")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费课时"), "html", null, true);
        echo "</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 47
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("简介"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\" >";
        // line 49
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "summary");
        echo "</textarea>

    </div>
  </div>

  <div class=\"form-group for-text-type\">



    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">

      ";
        // line 61
        if (((array_key_exists("draft", $context)) ? (_twig_default_filter((isset($context["draft"]) ? $context["draft"] : null), false)) : (false))) {
            // line 62
            echo "      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("course_draft_view");
            echo "\" >
        <small>
        ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您有一段自动保存内容，继续编辑请点击"), "html", null, true);
            echo "
        </small>
      </a>
      ";
        }
        // line 68
        echo "
      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"
      data-image-upload-url=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      data-flash-upload-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      >";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 76
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo " \">
    <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-2 control-label for-document-type\"><label>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-flash-type\"><label>Flash</label></div>
    <div class=\"col-md-9 controls\">
      ";
        // line 83
        $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 83)->display(array_merge($context, array("lesson" => ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null)))));
        // line 84
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "media")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 88
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->env->getExtension('translator')->trans("PPT课时需要开通EduSoho云文档服务才能使用,")), "html", null, true);
        echo "
          ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击"), "html", null, true);
        echo "<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("这里"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情。"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 97
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-document-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->env->getExtension('translator')->trans("文档课时需要开通EduSoho云文档服务才能使用,")), "html", null, true);
        echo "
          ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击"), "html", null, true);
        echo "<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("这里"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情。"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 106
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-flash-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->env->getExtension('translator')->trans("Flash课时需要开通EduSoho云视频服务才能使用,")), "html", null, true);
        echo "
          ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击"), "html", null, true);
        echo "<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("这里"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情。"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长"), "html", null, true);
        echo "</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长或"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 120
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "minute");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 121
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "second");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("秒"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("时长必须为非负整数"), "html", null, true);
        echo "</div>
    </div>
  </div>

  ";
        // line 126
        if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : null))) {
            // line 127
            echo "  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学分"), "html", null, true);
            echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()), 0)) : (0)), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
            echo "
      <div class=\"help-block\">";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学完此课时，可获得的学分"), "html", null, true);
            echo "</div>
    </div>
  </div>
  ";
        }
        // line 135
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">


</form>


<script>app.load('course-manage/lesson-modal')</script>


";
    }

    // line 146
    public function block_footer($context, array $blocks = array())
    {
        // line 147
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 148,  385 => 147,  382 => 146,  368 => 136,  365 => 135,  358 => 131,  352 => 130,  347 => 128,  344 => 127,  342 => 126,  335 => 122,  329 => 121,  323 => 120,  318 => 118,  314 => 117,  310 => 116,  297 => 110,  293 => 109,  285 => 106,  273 => 101,  269 => 100,  261 => 97,  249 => 92,  245 => 91,  237 => 88,  229 => 84,  227 => 83,  221 => 80,  216 => 78,  212 => 77,  206 => 76,  199 => 72,  193 => 71,  189 => 70,  185 => 68,  178 => 64,  172 => 62,  170 => 61,  164 => 58,  152 => 49,  148 => 48,  142 => 47,  128 => 40,  121 => 36,  114 => 32,  108 => 31,  100 => 26,  94 => 23,  88 => 22,  84 => 20,  78 => 18,  70 => 16,  68 => 15,  63 => 14,  55 => 13,  52 => 12,  49 => 11,  40 => 8,  37 => 7,  33 => 1,  31 => 151,  29 => 4,  27 => 3,  11 => 1,);
    }
}
