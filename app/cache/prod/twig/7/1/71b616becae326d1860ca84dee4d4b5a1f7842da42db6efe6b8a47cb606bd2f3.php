<?php

/* TopxiaWebBundle:CourseStudentManage:student.html.twig */
class __TwigTemplate_71b616becae326d1860ca84dee4d4b5a1f7842da42db6efe6b8a47cb606bd2f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:index.html.twig", "TopxiaWebBundle:CourseStudentManage:student.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "<form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
  <div class=\"form-group col-md-7\">
    <input class=\"form-control \" type=\"text\" style=\"width:45%\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请输入用户名/邮箱/手机号"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">

    <button class=\"btn btn-primary\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
  </div>
  <div class=\"clearfix\"></div>
</form>
<table class=\"table table-striped\" id=\"course-student-list\">
  <thead>
    <tr>
      <th width=\"40%\">";
        // line 21
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo "</th>
      <th width=\"30%\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习进度"), "html", null, true);
        echo "</th>
      <th width=\"30%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 28
            echo "      ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 29
            echo "      ";
            $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 30
            echo "      ";
            $context["isFollowing"] = twig_in_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), (isset($context["followingIds"]) ? $context["followingIds"] : null));
            // line 31
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:tr.html.twig", "TopxiaWebBundle:CourseStudentManage:student.html.twig", 31)->display($context);
            // line 32
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 33
            echo "      <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无"), "html", null, true);
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("记录"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>
</table>
";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  143 => 35,  128 => 33,  115 => 32,  112 => 31,  109 => 30,  106 => 29,  103 => 28,  85 => 27,  78 => 23,  74 => 22,  66 => 21,  56 => 14,  49 => 12,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
