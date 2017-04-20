<?php

/* ClassroomBundle:ClassroomReview:index.html.twig */
class __TwigTemplate_bd83e0b9de08ca1f43605be1dc1e2ad85e4e3af1bec8c0be1489e581243597f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomReview:index.html.twig", 1);
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
        $context["menu"] = "admin_classroom_review_tab";
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
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array(1 => ("1" . $this->env->getExtension('translator')->trans("星")), 2 => ("2" . $this->env->getExtension('translator')->trans("星")), 3 => ("3" . $this->env->getExtension('translator')->trans("星")), 4 => ("4" . $this->env->getExtension('translator')->trans("星")), 5 => ("5" . $this->env->getExtension('translator')->trans("星"))), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "rating"), "method"), $this->env->getExtension('translator')->trans("评分"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%classroomName%名", array("%classroomName%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "\" name=\"classroomTitle\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "classroomTitle"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "\" name=\"author\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价内容关键词"), "html", null, true);
        echo "\" name=\"content\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>

  <div id=\"review-table-container\">
    <table class=\"table table-striped table-hover\" id=\"review-table\">
      <thead>
        <tr>
          <th width=\"4%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
          <th width=\"60%\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价内容"), "html", null, true);
        echo "</th>
          <th width=\"8\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评分"), "html", null, true);
        echo "</th>
          <th width=\"20%\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "</th>
          <th width=\"8%\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 45
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
            // line 46
            echo "          ";
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["review"], "classroomId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["review"], "classroomId", array()), array(), "array"), null)) : (null));
            // line 47
            echo "          <tr id=\"review-table-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"item\">
            <td><input type=\"checkbox\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"batch-item\"></td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">
                  ";
            // line 52
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 60);
            echo " <span class=\"text-muted trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
            echo ")</span>
                </div>
                <div class=\"long-text\">";
            // line 54
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
            echo " <span class=\"text-muted trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
            echo ")</span></div>
              </div>
              <div class=\"mts\">
                ";
            // line 57
            if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                // line 58
                echo "                  <a class=\"text-success text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["review"], "classroomId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["review"], "classroomId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 60
                echo "                  <span class=\"text-muted text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%classroomName%已删除", array("%classroomName%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                echo "</span>
                ";
            }
            // line 62
            echo "              </div>
            </td>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("星"), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null)), "method"), "html", null, true);
            echo "<br>
              <span class=\"text-muted\">";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
            </td>
            <td>
              <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_review_delete", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无评价记录"), "html", null, true);
            echo "</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>
      <button class=\"btn btn-default btn-sm mlm\" data-url=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("admin_classroom_review_batch_delete");
        echo "\" data-role=\"batch-delete\" data-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
    </div>
  </div>

  ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 85,  213 => 81,  209 => 80,  203 => 76,  194 => 74,  181 => 70,  175 => 67,  171 => 66,  165 => 64,  161 => 62,  155 => 60,  147 => 58,  145 => 57,  137 => 54,  130 => 52,  123 => 48,  118 => 47,  115 => 46,  112 => 45,  107 => 44,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  77 => 29,  69 => 26,  60 => 22,  51 => 18,  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
