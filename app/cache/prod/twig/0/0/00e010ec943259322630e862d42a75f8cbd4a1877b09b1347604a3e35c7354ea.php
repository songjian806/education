<?php

/* TopxiaAdminBundle:CourseNote:index.html.twig */
class __TwigTemplate_00e010ec943259322630e862d42a75f8cbd4a1877b09b1347604a3e35c7354ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseNote:index.html.twig", 1);
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
        $context["menu"] = "admin_course_note_manage";
        // line 5
        $context["script_controller"] = "course/note";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"well well-sm\">
  <form class=\"form-inline\">

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("content" => $this->env->getExtension('translator')->trans("内容"), "courseId" => $this->env->getExtension('translator')->trans("课程编号"), "courseTitle" => $this->env->getExtension('translator')->trans("课程名")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词"), "html", null, true);
        echo "\">
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"author\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>
</div>

<div id=\"note-table-container\">

  <table class=\"table table-striped table-hover\" id=\"note-table\">

    <thead>
      <tr>
        <th width=\"3%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
        <th width=\"75%\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
        echo "</th>
        <th width=\"15%\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "</th>
        <th width=\"7%\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
    </thead>

    <tbody>

      ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 48
            echo "        ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["note"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["note"], "courseId", array()), array(), "array"), null)) : (null));
            // line 49
            echo "        ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["note"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["note"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 50
            echo "        <tr data-role=\"item\">
          <td><input value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\"  data-role=\"batch-item\" ></td>
          <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">";
            // line 54
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["note"], "content", array()), 100);
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
            echo ")</span></div>
                <div class=\"long-text\">";
            // line 55
            echo $this->getAttribute($context["note"], "content", array());
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
            echo ")</span></div>
              </div>

              <div class=\"text-sm mts\">
                ";
            // line 59
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 60
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 61
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 62
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()))), "html", null, true);
                    echo "#lesson/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                    echo "</a>

                  ";
                }
                // line 66
                echo "                ";
            }
            // line 67
            echo "              </div>
          </td>
          <td>
            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["note"], "userId", array()), array(), "array")), "method"), "html", null, true);
            echo "
            <br>
            <span class=\"text-muted text-sm\">";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
          </td>
          <td>
            <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("笔记"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_note_delete", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无笔记记录"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </tbody>
  </table>

  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("笔记"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_note_batch_delete");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
  </div>

</div>

  <div>
    ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseNote:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 92,  215 => 86,  211 => 85,  205 => 81,  196 => 79,  183 => 75,  177 => 72,  172 => 70,  167 => 67,  164 => 66,  151 => 63,  148 => 62,  146 => 61,  139 => 60,  137 => 59,  128 => 55,  122 => 54,  116 => 51,  113 => 50,  110 => 49,  107 => 48,  102 => 47,  93 => 41,  89 => 40,  85 => 39,  71 => 28,  63 => 25,  52 => 19,  44 => 14,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
