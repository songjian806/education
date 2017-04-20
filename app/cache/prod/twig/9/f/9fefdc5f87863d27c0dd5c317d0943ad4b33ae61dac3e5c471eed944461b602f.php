<?php

/* TopxiaWebBundle:Thread/Part:thread-action.html.twig */
class __TwigTemplate_9fefdc5f87863d27c0dd5c317d0943ad4b33ae61dac3e5c471eed944461b602f extends Twig_Template
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
        echo "<div class=\"topic-action\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.update", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 3
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_update"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-edit\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
            echo "</a>
    ";
        }
        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.delete", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 6
            echo "      <a href=\"javascript:;\"data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_delete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" data-after-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
            echo "\" data-role=\"confirm-btn\" data-confirm-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您真的要删除该帖吗？"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-delete\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</a>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.sticky", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 10
            echo "      ";
            if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "sticky", array())) {
                // line 11
                echo "        <a href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_cancel_sticky", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"confirm-btn\" data-confirm-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您真的要取消置顶该帖吗？"), "html", null, true);
                echo "\"><i class=\"es-icon es-icon-publish\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消置顶"), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 13
                echo "        <a href=\"javascript:\"  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_set_sticky", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"confirm-btn\" data-confirm-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您真的要置顶该帖吗？"), "html", null, true);
                echo "\"><i class=\"es-icon es-icon-publish\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
                echo "</a>
      ";
            }
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.sticky", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 18
            echo "      ";
            if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "nice", array())) {
                // line 19
                echo "        <a href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_cancel_nice", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\"data-role=\"confirm-btn\" data-confirm-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您真的要取消加精该帖吗？"), "html", null, true);
                echo "\"><i class=\"es-icon es-icon-thumbup\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消加精"), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 21
                echo "        <a href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_set_nice", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\"data-role=\"confirm-btn\" data-confirm-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您真的要加精该帖吗？"), "html", null, true);
                echo "\"><i class=\"es-icon es-icon-thumbup\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加精"), "html", null, true);
                echo "</a>
      ";
            }
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "event")) {
            // line 26
            echo "      ";
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.update", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
                // line 27
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_export_members", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_balnk\"><i class=\"es-icon es-icon-fileupdate\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("导出成员"), "html", null, true);
                echo "</a>
      ";
            }
            // line 29
            echo "    ";
        }
        // line 30
        echo "</div>  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:thread-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  125 => 29,  117 => 27,  114 => 26,  112 => 25,  109 => 24,  106 => 23,  96 => 21,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  75 => 15,  65 => 13,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  35 => 6,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
