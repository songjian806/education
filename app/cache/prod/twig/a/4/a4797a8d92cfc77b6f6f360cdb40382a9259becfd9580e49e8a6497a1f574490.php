<?php

/* ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig */
class __TwigTemplate_a4797a8d92cfc77b6f6f360cdb40382a9259becfd9580e49e8a6497a1f574490 extends Twig_Template
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
        echo "<div class=\"nav-filter clearfix\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "method")) {
            // line 4
            echo "    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发话题"), "html", null, true);
            echo " <span class=\"caret\"></span></button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "discussion")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发话题"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "question")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提问题"), "html", null, true);
            echo "</a></li>
        ";
            // line 9
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.event.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "method")) {
                // line 10
                echo "          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "event")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建活动"), "html", null, true);
                echo "</a></li> 
        ";
            }
            // line 12
            echo "      </ul>
    </div>
  ";
        }
        // line 15
        echo "
  <ul class=\"nav nav-pills nav-pills-sm\">
    <li";
        // line 17
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "all"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
        echo "</a></li>
    
    <li";
        // line 19
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "question")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "question"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问答"), "html", null, true);
        echo "</a></li>

    <li";
        // line 21
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "nice")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "nice"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精华"), "html", null, true);
        echo "</a></li>

    <li class=\"dropdown\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("排序："), "html", null, true);
        echo "</span>
        ";
        // line 26
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            // line 27
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后回复"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo " 
          ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新发帖"), "html", null, true);
            echo "
        ";
        }
        // line 31
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 34
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "posted"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后回复"), "html", null, true);
        echo "</a></li>
        <li class=\"";
        // line 35
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "created"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新发帖"), "html", null, true);
        echo "</a></li>
      </ul>
    </li>
  </ul>

</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  124 => 34,  119 => 31,  114 => 29,  110 => 28,  105 => 27,  103 => 26,  99 => 25,  86 => 21,  75 => 19,  64 => 17,  60 => 15,  55 => 12,  47 => 10,  45 => 9,  39 => 8,  33 => 7,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
