<?php

/* TopxiaWebBundle:OpenCourse/Widget:open-course-grid.html.twig */
class __TwigTemplate_26adb3af36cefb2dce15f0a5c5d7cc11ee30c5feb3c00be066df56327df3fbbc extends Twig_Template
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
        echo "<div class=\"course-item\">
  <div class=\"course-img\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "\">
      ";
        // line 4
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 5
            echo "        <span class=\"tags\">
          <span class=\"tag-open-live\"></span>
        </span>
      ";
        }
        // line 9
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "middlePicture", array()), "course.png"), "img-responsive", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()));
        echo "
    </a>
    ";
        // line 11
        $context["lessons"] = $this->env->getExtension('topxia_data_twig')->getData("OpenCourseLessons", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "count" => 1));
        // line 12
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 13
            echo "      <div class=\"open-starttime\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")), 0, array(), "array"), "startTime", array()), "Y-m-d H:i"), "html", null, true);
            echo "直播</div>
    ";
        }
        // line 15
        echo "  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      ";
        // line 18
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 19
            echo "        ";
            if (((twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")), 0, array(), "array"), "startTime", array())) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")), 0, array(), "array"), "endTime", array())))) {
                // line 20
                echo "          <span class=\"label label-primary mrm\">正在直播</span>
        ";
            } elseif ((twig_date_format_filter($this->env, "now", "U") < $this->getAttribute($this->getAttribute(            // line 21
(isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")), 0, array(), "array"), "startTime", array()))) {
                // line 22
                echo "          <span class=\"label label-warning mrm\">即将直播</span>
        ";
            }
            // line 24
            echo "      ";
        }
        // line 25
        echo "      <a class=\"link-dark\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas clearfix\">
      <span class=\"num\"><i class=\"es-icon es-icon-removeredeye\"></i>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "hitNum", array()), "html", null, true);
        echo "</span>
      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "postNum", array()), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse/Widget:open-course-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  90 => 30,  83 => 26,  76 => 25,  73 => 24,  69 => 22,  67 => 21,  64 => 20,  61 => 19,  59 => 18,  54 => 15,  48 => 13,  45 => 12,  43 => 11,  37 => 9,  31 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
