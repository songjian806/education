<?php

/* TopxiaWebBundle:OpenCourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_7d947acc6a5cc4451345304aa44b9946b0cb840d7ff34b48b358b07041614c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:OpenCourseLessonManage:lesson-modal.html.twig", 1);
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
        // line 99
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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑课时"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\" data-lesson-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\"
  ";
        } else {
            // line 18
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 20
        echo "  >

  <div class=\"form-group\" style=\"display:none;\">
    <div class=\"col-md-2 control-label\"><label>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("类型"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        <label><input type=\"radio\" name=\"type\" value=\"video\" checked=\"checked\" /> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频"), "html", null, true);
        echo "</label>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 31
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
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
      </div>
    </div>
  </div>
   
  <div class=\"form-group for-text-type\">

    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">

      ";
        // line 47
        if (((array_key_exists("draft", $context)) ? (_twig_default_filter((isset($context["draft"]) ? $context["draft"] : null), false)) : (false))) {
            // line 48
            echo "      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("course_draft_view");
            echo "\" >
        <small>
        ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您有一段自动保存内容，继续编辑请点击"), "html", null, true);
            echo "
        </small>
      </a>
      ";
        }
        // line 54
        echo "
      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"
      data-image-upload-url=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      data-flash-upload-url=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      >";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 62
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo " \">
    <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-2 control-label for-document-type\"><label>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-flash-type\"><label>Flash</label></div>
    <div class=\"col-md-9 controls\">
      ";
        // line 69
        $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", "TopxiaWebBundle:OpenCourseLessonManage:lesson-modal.html.twig", 69)->display($context);
        // line 70
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "media")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长"), "html", null, true);
        echo "</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长或"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 79
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "minute");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 80
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "second");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("秒"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("时长必须为非负整数"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>


<script>app.load('open-course-manage/lesson-modal')</script>


";
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        // line 95
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"";
        // line 96
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
        return "TopxiaWebBundle:OpenCourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 96,  250 => 95,  247 => 94,  234 => 85,  227 => 81,  221 => 80,  215 => 79,  210 => 77,  206 => 76,  202 => 75,  193 => 70,  191 => 69,  185 => 66,  180 => 64,  176 => 63,  170 => 62,  163 => 58,  157 => 57,  153 => 56,  149 => 54,  142 => 50,  136 => 48,  134 => 47,  128 => 44,  117 => 36,  110 => 32,  104 => 31,  96 => 26,  90 => 23,  85 => 20,  79 => 18,  71 => 16,  69 => 15,  64 => 14,  56 => 13,  53 => 12,  50 => 11,  40 => 8,  37 => 7,  33 => 1,  31 => 99,  29 => 4,  27 => 3,  11 => 1,);
    }
}
