<?php

/* TopxiaWebBundle:Course:Part/normal-nav.html.twig */
class __TwigTemplate_6c58df7eba4d650ed03eefc7b95a70a9c45a9c4712f46d416fee1b9589288b3a extends Twig_Template
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
        $context["tab"] = ((array_key_exists("tab", $context)) ? (_twig_default_filter((isset($context["tab"]) ? $context["tab"] : null), null)) : (null));
        // line 2
        $context["previewAs"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 3
        $context["courseRelatedData"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("CourseRelatedData", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), array());
        // line 4
        echo "
<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 7
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 8
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程概览"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 9
            if (((isset($context["tab"]) ? $context["tab"] : null) == "lesson-list")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时列表"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 10
            if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 12
            if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("笔记"), "html", null, true);
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a></li>
    ";
        } else {
            // line 14
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时列表"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 15
            if (((isset($context["tab"]) ? $context["tab"] : null) == "thread")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("讨论区"), "html", null, true);
            if ($this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "threadNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "threadNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 16
            if (((isset($context["tab"]) ? $context["tab"] : null) == "material")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料区"), "html", null, true);
            echo "
      ";
            // line 17
            if ($this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "materialNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "materialNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 18
            if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 20
            if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("笔记"), "html", null, true);
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 22
            if (((isset($context["tab"]) ? $context["tab"] : null) == "info")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("概览"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 24
        echo "
  </ul>

  ";
        // line 27
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()) == 0)) && ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher")))) {
            // line 28
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
        <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公告"), "html", null, true);
            echo "
      </a>
  </div>
  ";
        }
        // line 35
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 35,  267 => 31,  262 => 29,  259 => 28,  257 => 27,  252 => 24,  233 => 22,  209 => 20,  185 => 18,  177 => 17,  159 => 16,  136 => 15,  117 => 14,  93 => 12,  69 => 10,  51 => 9,  32 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
