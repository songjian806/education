<?php

/* ClassroomBundle:Classroom/Course:note-nav.html.twig */
class __TwigTemplate_d1d9d4ae48d7af5d548e23b284a072a410bdbce50f58d7c07c095ec808eb99a5 extends Twig_Template
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
        echo "<div class=\"note-filter nav-filter clearfix\">
  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
      ";
        // line 4
        if (((($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "courseId", array()), "")) : ("")) == "")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
            echo "
      ";
        } else {
            // line 6
            echo " 
        ";
            // line 7
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "courseId", array()), array(), "array"), "title", array(), "array"), 10);
            echo "
      ";
        }
        // line 9
        echo "       
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li class=\"";
        // line 13
        if (((($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "courseId", array()), "")) : ("")) == "")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("courseId" => ""))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
        echo "</a>
      </li>
      ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 17
            echo "        <li class=\"";
            if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "courseId", array()) == $this->getAttribute($context["course"], "id", array()))) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("courseId" => $this->getAttribute($context["course"], "id", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["course"], "title", array()), 10);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
  </div>

  <ul class=\"nav nav-pills nav-pills-sm\">
    <li class=\"dropdown hidden-xs\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("排序："), "html", null, true);
        echo "</span>
        ";
        // line 28
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "latest")) {
            // line 29
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新笔记"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "likeNum")) {
            echo " 
          ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点赞最多"), "html", null, true);
            echo "
        ";
        }
        // line 33
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 36
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "latest")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "latest"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新笔记"), "html", null, true);
        echo "</a></li>
        <li class=\"";
        // line 37
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "likeNum")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "likeNum"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点赞最多"), "html", null, true);
        echo "</a></li>
      </ul>
    </li>
  </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Course:note-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  116 => 36,  111 => 33,  106 => 31,  102 => 30,  97 => 29,  95 => 28,  91 => 27,  83 => 21,  70 => 18,  63 => 17,  59 => 16,  52 => 14,  46 => 13,  40 => 9,  35 => 7,  32 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
