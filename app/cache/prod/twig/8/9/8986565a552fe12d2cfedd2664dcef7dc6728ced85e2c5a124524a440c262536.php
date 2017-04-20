<?php

/* TopxiaWebBundle:CourseChapterManage:list-item.html.twig */
class __TwigTemplate_8986565a552fe12d2cfedd2664dcef7dc6728ced85e2c5a124524a440c262536 extends Twig_Template
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
        echo "<li class=\"item-chapter ";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "chapter")) {
            echo "js-chapter";
        }
        echo " ";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
            echo "item-chapter-unit";
        }
        echo " clearfix\" id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
\t<div class=\"item-content\">
\t\t";
        // line 3
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 4
            echo "\t\t\t第 <span class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()), "html", null, true);
            echo "</span> ";
            if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), $this->env->getExtension('translator')->trans("节")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("节"), "html", null, true);
                }
            } else {
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), $this->env->getExtension('translator')->trans("章")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("章"), "html", null, true);
                }
            }
            echo "：
\t\t";
        }
        // line 6
        echo "\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), "html", null, true);
        echo "
\t</div>
\t<div class=\"item-actions prs\">
\t\t<div class=\"btn-group\">
\t\t<button class=\"btn btn-link dropdown-toggle\" title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        echo "\"  data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-plus-sign\"></i></button>
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
            // line 12
            echo "\t\t \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 14
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            }
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加 课时"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加 直播课时"), "html", null, true);
                echo " ";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t    ";
            // line 16
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                // line 17
                echo "\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加 试卷"), "html", null, true);
                echo " </a>
\t\t\t    </li>
\t\t\t    ";
            }
            // line 21
            echo "\t\t\t</ul>
\t\t ";
        } else {
            // line 23
            echo "\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "unit", "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
            echo " ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), $this->env->getExtension('translator')->trans("节")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("节"), "html", null, true);
            }
            echo " </a>
\t\t\t    </li>
\t\t\t   <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 28
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            }
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加 课时"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加 直播课时"), "html", null, true);
                echo " ";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t    ";
            // line 30
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                // line 31
                echo "\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加 试卷"), "html", null, true);
                echo " </a>
\t\t\t    </li>
\t\t\t    ";
            }
            // line 35
            echo "\t\t\t</ul>
\t\t";
        }
        // line 37
        echo "\t\t</div>

\t\t<button class=\"btn btn-link\" title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modal\" data-keyboard=\"false\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i></button>

\t\t<button class=\"btn btn-link delete-chapter-btn\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
        echo "\" data-chapter=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), $this->env->getExtension('translator')->trans("章"))) : ($this->env->getExtension('translator')->trans("章"))), "html", null, true);
        echo "\" data-part=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), $this->env->getExtension('translator')->trans("节"))) : ($this->env->getExtension('translator')->trans("节"))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-trash\"></i></button>
\t\t";
        // line 42
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "chapter")) {
            // line 43
            echo "\t\t\t<a href=\"javascript:;\" class=\"btn-link pls\"><i class=\"glyphicon glyphicon-chevron-up js-icon\"></i></a>
\t\t";
        }
        // line 45
        echo "\t\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseChapterManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 45,  186 => 43,  184 => 42,  174 => 41,  167 => 39,  163 => 37,  159 => 35,  151 => 32,  148 => 31,  146 => 30,  127 => 28,  113 => 25,  109 => 23,  105 => 21,  97 => 18,  94 => 17,  92 => 16,  73 => 14,  69 => 12,  67 => 11,  63 => 10,  55 => 6,  35 => 4,  33 => 3,  19 => 1,);
    }
}
