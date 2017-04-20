<?php

/* TopxiaWebBundle:CourseLessonManage:index.html.twig */
class __TwigTemplate_0c095971bc47c36f0a11e2e54d3143fb709b556b92fd128d6c7aa31c0f31f355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "lesson";
        // line 6
        $context["script_controller"] = "course-manage/lesson";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\"
\tdata-file-status-url=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_file_status", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo ">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">

\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 15
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课时"), "html", null, true);
        }
        echo "</button>

\t\t\t";
        // line 17
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live"))) {
            // line 18
            echo "\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
            echo "</button>
\t\t\t";
        }
        // line 20
        echo "
\t\t\t";
        // line 21
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal") && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 22
            echo "\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"batch-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_batch_modal", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "token" => $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken("courselesson", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "private"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量添加课时"), "html", null, true);
            echo "</button>
\t\t\t";
        }
        // line 24
        echo "
\t\t\t<div class=\"btn-group\">
\t\t\t  <button type=\"button\" class=\"btn btn-sm btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    <i class=\"glyphicon glyphicon-plus\"></i>";
        // line 27
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), $this->env->getExtension('translator')->trans("章")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), $this->env->getExtension('translator')->trans("节")), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加%chapter_name%", array("%chapter_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), $this->env->getExtension('translator')->trans("章")))), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "unit")), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加%part_name%", array("%part_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"))), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo "
\t</div>

\t";
        // line 43
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : null))) {
            // line 44
            echo "
\t <div class=\"empty\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课时内容！"), "html", null, true);
            echo "</div>

\t ";
        }
        // line 48
        echo "
\t<div class=\"panel-body\">
\t\t<ul class=\"lesson-list sortable-list js-period-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 52
            echo "\t\t\t  ";
            if (twig_in_filter("chapter", $context["id"])) {
                // line 53
                echo "\t\t\t    ";
                $this->loadTemplate("TopxiaWebBundle:CourseChapterManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 53)->display(array_merge($context, array("chapter" => $context["item"])));
                // line 54
                echo "\t\t\t  ";
            } elseif (twig_in_filter("lesson", $context["id"])) {
                // line 55
                echo "\t\t\t  \t";
                $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 55)->display(array_merge($context, array("lesson" => $context["item"], "file" => (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 56
                echo "\t\t\t  ";
                // line 60
                echo "\t\t\t  ";
            }
            // line 61
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 62,  186 => 61,  183 => 60,  181 => 56,  178 => 55,  175 => 54,  172 => 53,  169 => 52,  152 => 51,  148 => 50,  144 => 48,  138 => 45,  135 => 44,  133 => 43,  127 => 40,  116 => 34,  108 => 31,  99 => 27,  94 => 24,  86 => 22,  84 => 21,  81 => 20,  73 => 18,  71 => 17,  56 => 15,  49 => 11,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
