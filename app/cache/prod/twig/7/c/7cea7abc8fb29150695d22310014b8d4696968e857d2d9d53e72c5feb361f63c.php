<?php

/* TopxiaWebBundle:OpenCourseManage:open-course-manage-header.html.twig */
class __TwigTemplate_7cea7abc8fb29150695d22310014b8d4696968e857d2d9d53e72c5feb361f63c extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:OpenCourseManage:open-course-manage-header.html.twig", 1);
        // line 2
        echo "
<div class=\"es-section course-manage-header clearfix\">

  <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
    <img class=\"picture\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  </a>
  <h1 class=\"title\">
    [";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("courseType"), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()), array(), "array"), "html", null, true);
        echo "]
    <a class=\"link-dark\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 11
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "closed")) {
            // line 12
            echo "      <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 13
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "draft")) {
            // line 14
            echo "      <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            echo "    
      <span class=\"label label-warning \">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
            echo "</span> 
    ";
        }
        // line 18
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 21
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()), null)) : (null))) {
            // line 22
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师："), "html", null, true);
            echo "
      ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                if ($context["id"]) {
                    // line 24
                    echo "        ";
                    $context["user"] = $this->env->getExtension('topxia_data_twig')->getData("User", array("userId" => $context["id"]));
                    // line 25
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                    echo "</a>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        // line 28
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    
    ";
        // line 32
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 33
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程主页"), "html", null, true);
            echo "</a>
      </div>
    ";
        } else {
            // line 37
            echo "      <div class=\"btn-group\">
        <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布课程"), "html", null, true);
            echo "</button>
      </div>
    ";
        }
        // line 41
        echo "    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm mrs\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "as" => "preview")), "html", null, true);
        echo "\" target=\"_blank\">预览</a>
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "as" => "preview", "previewType" => "wx")), "html", null, true);
        echo "\" target=\"_blank\">微信端预览</a>
    </div>
  </div>
</div>

";
        // line 48
        $this->env->getExtension('topxia_web_twig')->loadScript("course-manage/header");
        // line 49
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourseManage:open-course-manage-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 49,  149 => 48,  141 => 43,  137 => 42,  134 => 41,  126 => 38,  123 => 37,  115 => 34,  112 => 33,  110 => 32,  104 => 28,  101 => 27,  89 => 25,  86 => 24,  81 => 23,  76 => 22,  74 => 21,  69 => 18,  64 => 16,  60 => 15,  55 => 14,  53 => 13,  48 => 12,  46 => 11,  40 => 10,  36 => 9,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
