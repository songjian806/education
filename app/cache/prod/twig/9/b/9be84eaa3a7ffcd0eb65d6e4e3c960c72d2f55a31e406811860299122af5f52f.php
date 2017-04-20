<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig */
class __TwigTemplate_9be84eaa3a7ffcd0eb65d6e4e3c960c72d2f55a31e406811860299122af5f52f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["layoutClass"] = "after";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</li>
  </ol>
  ";
        // line 13
        if (((isset($context["member"]) ? $context["member"] : null) && $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
            // line 14
            echo "    <div class=\"alert alert-warning\">
      ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的退款申请已提交，请等待管理员的处理。"), "html", null, true);
            echo "
      <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消退款，继续学习！"), "html", null, true);
            echo "</button>
    </div>
  ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("course/common"), "html", null, true);
        echo "

  <div class=\"course-header-top clearfix\">

    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "picture", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "

    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "info", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["member"]) ? $context["member"] : null), 2 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)), "method"), "html", null, true);
        echo "

    <div class=\"course-operation\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "student_num", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
      <ul class=\"course-data clearfix two-col\">
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "favorite_btn", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)), "method"), "html", null, true);
        echo "
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "share_btn", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
      </ul>
    </div>
  </div>

  <div class=\"progress progress-sm\">
    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "percent", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "percent", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"course-header-bottom clearfix\">
    <span class=\"pull-left\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成课时："), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "number", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "total", array()), "html", null, true);
        echo "</span>
    ";
        // line 46
        if ((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null)) {
            // line 47
            echo "      <a class=\"btn btn-lg btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("继续学习"), "html", null, true);
            echo "</a>
      <span class=\"next-class hidden-xs\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一课时："), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "title", array());
            echo "</a></span>
    ";
        }
        // line 50
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  153 => 48,  144 => 47,  142 => 46,  134 => 45,  124 => 40,  115 => 34,  111 => 33,  106 => 31,  100 => 28,  95 => 26,  87 => 22,  84 => 21,  74 => 16,  70 => 15,  67 => 14,  65 => 13,  59 => 11,  48 => 9,  44 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
