<?php

/* TopxiaAdminBundle:CourseReview:index.html.twig */
class __TwigTemplate_386a6c636d4563c9571d3e2dbb8f72b0f841818d37592b1d0452d035fe6ad670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseReview:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "review/list";
        // line 5
        $context["menu"] = "admin_course_review_tab";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <form id=\"review-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate> 

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"rating\">
        ";
        // line 13
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array(1 => $this->env->getExtension('translator')->trans("1星"), 2 => $this->env->getExtension('translator')->trans("2星"), 3 => $this->env->getExtension('translator')->trans("3星"), 4 => $this->env->getExtension('translator')->trans("4星"), 5 => $this->env->getExtension('translator')->trans("5星")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "rating"), "method"), $this->env->getExtension('translator')->trans("评分"));
        echo "
      </select>
    </div>

   ";
        // line 20
        echo "    
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程名"), "html", null, true);
        echo "\" name=\"courseTitle\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "courseTitle"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "\" name=\"author\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价内容关键词"), "html", null, true);
        echo "\" name=\"content\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>

  <div id=\"review-table-container\">
    <table class=\"table table-striped table-hover\" id=\"review-table\">
      <thead>
        <tr>
          <th width=\"4%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
          <th width=\"55%\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价内容"), "html", null, true);
        echo "</th>
          <th width=\"8\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评分"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成进度"), "html", null, true);
        echo "</th>
          <th width=\"8%\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 50
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
            // line 51
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
            // line 52
            echo "          <tr id=\"review-table-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"item\">
            <td><input type=\"checkbox\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"batch-item\"></td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">
                  ";
            // line 57
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 60);
            echo " <span class=\"text-muted trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
            echo ")</span>
                </div>
                <div class=\"long-text\">";
            // line 59
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
            echo " <span class=\"text-muted trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
            echo ")</span></div>
              </div>
              <div class=\"mts\">
                ";
            // line 62
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 63
                echo "                  <a class=\"text-success text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["review"], "courseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 65
                echo "                  <span class=\"text-muted text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程已删除"), "html", null, true);
                echo "</span>
                ";
            }
            // line 67
            echo "              </div>
            </td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("星"), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null)), "method"), "html", null, true);
            echo "<br>
              <span class=\"text-muted\">";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
            </td>
            <td>";
            // line 74
            if ($this->getAttribute($context["review"], "meta", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "learnedNum", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "lessonNum", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
            <td>
              <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_review_delete", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无评价记录"), "html", null, true);
            echo "</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>
      <button class=\"btn btn-default btn-sm mlm\" data-url=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("admin_review_batch_delete");
        echo "\" data-role=\"batch-delete\" data-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
    </div>
  </div>

  ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 91,  230 => 87,  226 => 86,  220 => 82,  211 => 80,  198 => 76,  187 => 74,  182 => 72,  178 => 71,  172 => 69,  168 => 67,  162 => 65,  154 => 63,  152 => 62,  144 => 59,  137 => 57,  130 => 53,  125 => 52,  122 => 51,  119 => 50,  114 => 49,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  80 => 33,  72 => 30,  63 => 26,  54 => 22,  50 => 20,  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
