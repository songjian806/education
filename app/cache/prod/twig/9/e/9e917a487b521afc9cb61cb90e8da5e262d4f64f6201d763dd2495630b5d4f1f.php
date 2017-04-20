<?php

/* TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig */
class __TwigTemplate_9e917a487b521afc9cb61cb90e8da5e262d4f64f6201d763dd2495630b5d4f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig", 1);
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
        // line 2
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig", 2);
        // line 6
        $context["side_nav"] = "testCheck";
        // line 7
        $context["parentId"] = ((array_key_exists("parentId", $context)) ? (_twig_default_filter((isset($context["parentId"]) ? $context["parentId"] : null), null)) : (null));
        // line 8
        $context["script_controller"] = "test-paper/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷批阅"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">

  <div class=\"panel-heading\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷批阅"), "html", null, true);
        echo "
  </div>
  <div class=\"panel-body\">
    <ul class=\"nav nav-tabs\">
      <li class=\"";
        // line 19
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未批阅"), "html", null, true);
        echo "</a></li>
      <li class=\"";
        // line 20
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "finished")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已批阅"), "html", null, true);
        echo "</a></li>
    </ul>
    <br>
    ";
        // line 23
        $this->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig", "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig", 23)->display($context);
        // line 24
        echo "
    ";
        // line 25
        if ((array_key_exists("isTeacher", $context) &&  !(isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
            // line 26
            echo "      <span class=\"text-danger\">当前用户不是本课程教师，没有批改试卷的权限。</span>
    ";
        }
        // line 28
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  91 => 26,  89 => 25,  86 => 24,  84 => 23,  72 => 20,  62 => 19,  55 => 15,  49 => 11,  46 => 10,  38 => 4,  34 => 1,  32 => 8,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }
}
