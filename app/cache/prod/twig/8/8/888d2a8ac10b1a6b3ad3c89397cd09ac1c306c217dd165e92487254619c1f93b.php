<?php

/* TopxiaWebBundle:CourseManage:picture.html.twig */
class __TwigTemplate_888d2a8ac10b1a6b3ad3c89397cd09ac1c306c217dd165e92487254619c1f93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "TopxiaWebBundle:CourseManage:picture.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen"))) {
            // line 2
            $context["layout"] = "TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig";
        } else {
            // line 4
            $context["layout"] = "TopxiaWebBundle:CourseManage:layout.html.twig";
        }
        // line 10
        $context["side_nav"] = "picture";
        // line 11
        $context["script_controller"] = "course-manage/picture";
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
      ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <p class=\"help-block\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("你可以上传jpg, gif, png格式的文件, 图片建议尺寸至少为480x270。"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件大小不能超过"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("2M"), "html", null, true);
        echo "</strong>。</p>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <a
          id=\"upload-picture-btn\"
          class=\"btn btn-fat btn-primary\"
          data-upload-token=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
          ";
        // line 40
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen"))) {
            // line 41
            echo "            data-goto-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_picture_crop", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
          ";
        } else {
            // line 43
            echo "            data-goto-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture_crop", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
          ";
        }
        // line 45
        echo "          
          >";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选择要上传的图片"), "html", null, true);
        echo "</a>
        </div>
      </div>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  114 => 45,  108 => 43,  102 => 41,  100 => 40,  96 => 39,  80 => 30,  71 => 24,  64 => 20,  57 => 16,  52 => 13,  49 => 12,  41 => 8,  37 => 6,  35 => 11,  33 => 10,  30 => 4,  27 => 2,  25 => 1,  19 => 6,);
    }
}
