<?php

/* TopxiaWebBundle:CourseManage:picture-crop.html.twig */
class __TwigTemplate_6ef3ce8a2b3c9b7e6aa90db6c1cf265aa47312fcbda85e80273af077e128427f extends Twig_Template
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
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "TopxiaWebBundle:CourseManage:picture-crop.html.twig", 6);
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
        $context["script_controller"] = "course-manage/picture-crop";
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

  <div id=\"course-picture-crop-form\" class=\"panel-body\">

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\"
          id=\"course-picture-crop\"
          width=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\" />
          <div class=\"help-block\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提示：请选择图片裁剪区域。"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
        ";
        // line 32
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen"))) {
            // line 33
            echo "         <button class=\"btn btn-fat btn-primary\"
          data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_picture_crop", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
          id=\"upload-picture-btn\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
        ";
        } else {
            // line 38
            echo "         <button class=\"btn btn-fat btn-primary\"
          data-url=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture_crop", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
          id=\"upload-picture-btn\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
        ";
        }
        // line 43
        echo "          <a href=\"javascript:;\" class=\"go-back btn btn-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新选择图片"), "html", null, true);
        echo "</a>
        </div>
      </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:picture-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  120 => 41,  116 => 40,  112 => 39,  109 => 38,  104 => 36,  100 => 35,  96 => 34,  93 => 33,  91 => 32,  82 => 26,  72 => 25,  67 => 23,  57 => 16,  52 => 13,  49 => 12,  41 => 8,  37 => 6,  35 => 11,  33 => 10,  30 => 4,  27 => 2,  25 => 1,  19 => 6,);
    }
}
