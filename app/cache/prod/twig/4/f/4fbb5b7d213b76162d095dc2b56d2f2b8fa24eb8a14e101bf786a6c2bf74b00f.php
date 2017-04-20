<?php

/* TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig */
class __TwigTemplate_4fbb5b7d213b76162d095dc2b56d2f2b8fa24eb8a14e101bf786a6c2bf74b00f extends Twig_Template
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
        $context["isUpdate"] = ((array_key_exists("isUpdate", $context)) ? (_twig_default_filter((isset($context["isUpdate"]) ? $context["isUpdate"] : null), false)) : (false));
        // line 2
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 3
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "discussion")) : ("discussion"));
        // line 4
        echo "<ul class=\"breadcrumb\">
  <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 6
        if (($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) == "classroom")) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%classroom.name%话题", array("%classroom.name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "
    ";
        } else {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("讨论区"), "html", null, true);
            echo "
    ";
        }
        // line 11
        echo "  </a></li>
  ";
        // line 12
        if (((isset($context["thread"]) ? $context["thread"] : null) && (isset($context["isUpdate"]) ? $context["isUpdate"] : null))) {
            // line 13
            echo "    <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_show"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 10);
            echo "</a>
    </li>
    <li class=\"active\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()));
            echo "</li>
  ";
        } elseif ((        // line 17
(isset($context["thread"]) ? $context["thread"] : null) &&  !(isset($context["isUpdate"]) ? $context["isUpdate"] : null))) {
            // line 18
            echo "  \t<li class=\"active\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()));
            echo "</li>
  ";
        } else {
            // line 20
            echo "    <li class=\"active\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发"), "html", null, true);
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", (isset($context["type"]) ? $context["type"] : null));
            echo "</li>
  ";
        }
        // line 22
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  76 => 20,  70 => 18,  68 => 17,  63 => 16,  54 => 14,  51 => 13,  49 => 12,  46 => 11,  40 => 9,  34 => 7,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
