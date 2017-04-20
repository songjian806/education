<?php

/* TopxiaWebBundle:OpenCourseLessonManage:index.html.twig */
class __TwigTemplate_7c63d2136e064ad687d00b8dcd30ad8c78712bbb32ab23627a3d02fe7a67e6bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig", "TopxiaWebBundle:OpenCourseLessonManage:index.html.twig", 1);
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
        $context["side_nav"] = "lesson";
        // line 6
        $context["script_controller"] = "open-course-manage/lesson";
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
<div class=\"panel panel-default panel-col lesson-manage-panel\" data-file-status-url=";
        // line 10
        echo $this->env->getExtension('routing')->getPath("course_manage_file_status");
        echo ">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">
\t\t\t<button class=\"btn btn-info btn-sm\" ";
        // line 13
        if ((isset($context["items"]) ? $context["items"] : null)) {
            echo "disabled=\"disabled\"";
        }
        echo " id=\"lesson-create-btn\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
        }
        echo "</button>
\t\t</div>
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo "
\t</div>

\t<div class=\"alert alert-warning only-one-lesson-notify\" ";
        // line 18
        if ((isset($context["items"]) ? $context["items"] : null)) {
            echo "style=\"display:none;\"";
        }
        echo ">公开课当前仅支持添加一个课时！</div>

\t";
        // line 20
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : null))) {
            // line 21
            echo "
\t <div class=\"empty\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课时内容！"), "html", null, true);
            echo "</div>

\t ";
        }
        // line 25
        echo "
\t<div class=\"panel-body\">
\t\t<ul class=\"lesson-list sortable-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t";
        // line 28
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
            // line 29
            echo "\t\t\t  
\t\t\t  ";
            // line 30
            if (twig_in_filter("lesson", $context["id"])) {
                // line 31
                echo "\t\t\t\t\t";
                $this->loadTemplate("TopxiaWebBundle:OpenCourseLessonManage:open-course-lesson-list-item.html.twig", "TopxiaWebBundle:OpenCourseLessonManage:index.html.twig", 31)->display(array_merge($context, array("lesson" => $context["item"], "file" => (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 32
                echo "\t\t\t  ";
            }
            // line 33
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
        // line 34
        echo "
\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourseLessonManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  129 => 33,  126 => 32,  123 => 31,  121 => 30,  118 => 29,  101 => 28,  97 => 27,  93 => 25,  87 => 22,  84 => 21,  82 => 20,  75 => 18,  69 => 15,  54 => 13,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
