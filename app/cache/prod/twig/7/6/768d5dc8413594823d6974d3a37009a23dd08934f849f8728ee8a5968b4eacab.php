<?php

/* TopxiaWebBundle:CourseQuestionManage:index.html.twig */
class __TwigTemplate_768d5dc8413594823d6974d3a37009a23dd08934f849f8728ee8a5968b4eacab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:index.html.twig", 1);
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
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseQuestionManage:index.html.twig", 2);
        // line 6
        $context["parentId"] = (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0));
        // line 8
        $context["side_nav"] = "question";
        // line 9
        $context["script_controller"] = "course-manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    <div class=\"pull-right\">
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "choice", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选择题"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "fill", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("填空题"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "determine", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("判断题"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "essay", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问答题"), "html", null, true);
        echo "</a>
      ";
        // line 20
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 21
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "material")), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("材料题"), "html", null, true);
            echo "</a>
      ";
        }
        // line 23
        echo "    </div>
    ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body \" id=\"quiz-table-container\">

    ";
        // line 29
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 30
            echo "      <ol class=\"breadcrumb\">
        <li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
            echo "</a></li>
        <li class=\"active\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("材料题"), "html", null, true);
            echo "</li>
      </ol>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

    ";
        // line 38
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 39
            echo "      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"well well-sm short-long-text\">
            <div class=\"short-text\">";
            // line 42
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "stem", array()), 100);
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
            echo ")</span></div>
            <div class=\"long-text\">";
            // line 43
            echo $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "stem", array());
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
            echo ")</span></div>
          </div>
        </div>
      </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 50
            echo "      <form class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"type\">
            ";
            // line 53
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method"), $this->env->getExtension('translator')->trans("--按题型--"));
            echo "
          </select>
        </div>

        <div class=\"form-group\">
          <select class=\"form-control\" name=\"target\" style=\"width:200px;\">
            ";
            // line 59
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["targetChoices"]) ? $context["targetChoices"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "target"), "method"), $this->env->getExtension('translator')->trans("--按从属--"));
            echo "
          </select>
        </div>

        <div class=\"form-group\">
          <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词"), "html", null, true);
            echo "\">
        </div>

        <button class=\"btn btn-primary btn-sm\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
            echo "</button>

      </form>
    ";
        }
        // line 71
        echo "





    <table class=\"table table-striped table-hover\" id=\"quiz-table\">
      <thead>
      <tr>
        <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
        <th width=\"50%\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题干"), "html", null, true);
        echo "</th>
        <th>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("类型"), "html", null, true);
        echo "</th>
        <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后更新"), "html", null, true);
        echo "</th>
        <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 89
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig", "TopxiaWebBundle:CourseQuestionManage:index.html.twig", 89)->display($context);
            // line 90
            echo "        ";
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
            // line 91
            echo "          <tr>
            <td colspan=\"20\"><div class=\"empty\">";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("一道题都没有，请点击右上角按钮，按不同的题型录入题目"), "html", null, true);
            echo "</div></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "      </tbody>
    </table>
    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-select\"> ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_deletes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      <span class=\"pull-right text-muted\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("共%getItemCount()%题", array("%getItemCount()%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method"))), "html", null, true);
        echo "</span>
    </div>
    <nav class=\"text-center\">
      ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 103,  284 => 100,  276 => 99,  272 => 98,  267 => 95,  258 => 92,  255 => 91,  242 => 90,  239 => 89,  221 => 88,  214 => 84,  210 => 83,  206 => 82,  202 => 81,  190 => 71,  183 => 67,  175 => 64,  167 => 59,  158 => 53,  153 => 50,  151 => 49,  148 => 48,  138 => 43,  132 => 42,  127 => 39,  125 => 38,  120 => 36,  117 => 35,  111 => 32,  105 => 31,  102 => 30,  100 => 29,  92 => 24,  89 => 23,  81 => 21,  79 => 20,  73 => 19,  67 => 18,  61 => 17,  55 => 16,  49 => 12,  46 => 11,  38 => 4,  34 => 1,  32 => 9,  30 => 8,  28 => 6,  26 => 2,  11 => 1,);
    }
}
