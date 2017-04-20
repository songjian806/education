<?php

/* TopxiaWebBundle:OpenCourseManage:open-course-base.html.twig */
class __TwigTemplate_b25b67ae6192b408d855712b1b66c7298fc08fd0939719f28226655e3d202d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig", "TopxiaWebBundle:OpenCourseManage:open-course-base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 8
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('routing')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('routing')->getPath("location_all"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

      ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("副标题"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\" class=\"form-control\">";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标签"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : null), ","), "html", null, true);
        echo "\" data-explain=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("将会应用于按标签搜索课程、相关课程的提取等"), "html", null, true);
        echo "\">
          <div class=\"help-block\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("将会应用于按标签搜索课程、相关课程的提取等"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            ";
        // line 52
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "categoryId", array()), $this->env->getExtension('translator')->trans("分类"));
        echo "
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程简介"), "html", null, true);
        echo "</label></div>
        <div class=\"col-md-8 controls\">
          <textarea name=\"about\" rows=\"10\" id=\"course-about-field\" class=\"form-control\" data-image-upload-url=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array()), "html", null, true);
        echo "</textarea>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourseManage:open-course-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 71,  143 => 67,  132 => 61,  127 => 59,  117 => 52,  111 => 49,  103 => 44,  97 => 43,  92 => 41,  83 => 35,  78 => 33,  69 => 27,  64 => 25,  58 => 22,  51 => 18,  47 => 16,  44 => 15,  36 => 3,  32 => 1,  30 => 8,  28 => 6,  26 => 5,  11 => 1,);
    }
}
