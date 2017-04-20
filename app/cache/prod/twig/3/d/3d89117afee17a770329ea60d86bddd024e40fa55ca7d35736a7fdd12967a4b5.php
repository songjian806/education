<?php

/* TopxiaAdminBundle:CourseThread:index.html.twig */
class __TwigTemplate_3d89117afee17a770329ea60d86bddd024e40fa55ca7d35736a7fdd12967a4b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseThread:index.html.twig", 1);
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
        $context["script_controller"] = "course/threads";
        // line 5
        $context["menu"] = "admin_course_thread_manage";
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
      <select class=\"form-control\" name=\"type\">
        ";
        // line 13
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("threadType"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method"), $this->env->getExtension('translator')->trans("帖子类型"));
        echo "
      </select>
    </div>
    
    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"threadType\">
        ";
        // line 21
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("isStick" => $this->env->getExtension('translator')->trans("置顶"), "isElite" => $this->env->getExtension('translator')->trans("加精")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "threadType"), "method"), $this->env->getExtension('translator')->trans("属性"));
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 29
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("title" => $this->env->getExtension('translator')->trans("标题"), "content" => $this->env->getExtension('translator')->trans("内容"), "courseId" => $this->env->getExtension('translator')->trans("课程编号"), "courseTitle" => $this->env->getExtension('translator')->trans("课程名")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "\" name=\"author\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>
</div>

  <div id=\"thread-table-container\">
    <table class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("帖子"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复/查看"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("属性"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <body>
        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 59
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array"), null)) : (null));
            // line 60
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array"), null)) : (null));
            // line 61
            echo "          ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["thread"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["thread"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 62
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              ";
            // line 65
            if (($this->getAttribute($context["thread"], "type", array()) == "question")) {
                // line 66
                echo "                <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问"), "html", null, true);
                echo "</span>
              ";
            }
            // line 68
            echo "
              <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["thread"], "courseId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
            echo "</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 72
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["thread"], "content", array()), 60);
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
            echo ")</span></div>
                <div class=\"long-text\">";
            // line 73
            echo $this->getAttribute($context["thread"], "content", array());
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
            echo ")</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 77
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 78
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 79
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 80
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 81
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
                // line 83
                echo "                ";
            }
            // line 84
            echo "              </div>
            </td>
            <td><span class=\"text-sm\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
            echo "</span></td>
            <td>
              ";
            // line 88
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 89
                echo "                <a href=\"javascript:;\" data-set-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_elite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" data-cancel-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_unelite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" class=\"promoted-label\">
                  <span class=\"label ";
                // line 90
                if ($this->getAttribute($context["thread"], "isElite", array())) {
                    echo "label-success";
                } else {
                    echo "label-default";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精"), "html", null, true);
                echo "</span>
                </a>
              
                <a href=\"javascript:;\" data-set-url=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_stick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" data-cancel-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_unstick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" class=\"promoted-label\">
                  <span class=\"label ";
                // line 94
                if ($this->getAttribute($context["thread"], "isStick", array())) {
                    echo "label-success";
                } else {
                    echo "label-default";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("顶"), "html", null, true);
                echo "</span>
                </a>
              ";
            }
            // line 97
            echo "            </td>
            <td>
              ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null)), "method"), "html", null, true);
            echo " <br />
              <span class=\"text-muted text-sm\">";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
            </td>
            <td>
              <div class=\"btn-group\">
                <a href=\"javascript:;\" data-role=\"item-delete\" data-url=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_thread_delete", array("id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\" 
                data-name=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("帖子"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</a>
              </div>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无帖子记录"), "html", null, true);
            echo "</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      </body>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("帖子"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_thread_batch_delete");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
    </div>

  </div>
    
  ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseThread:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 122,  310 => 117,  306 => 116,  300 => 112,  291 => 110,  279 => 105,  275 => 104,  268 => 100,  264 => 99,  260 => 97,  248 => 94,  242 => 93,  230 => 90,  223 => 89,  221 => 88,  214 => 86,  210 => 84,  207 => 83,  195 => 81,  192 => 80,  190 => 79,  183 => 78,  181 => 77,  172 => 73,  166 => 72,  158 => 69,  155 => 68,  149 => 66,  147 => 65,  142 => 63,  139 => 62,  136 => 61,  133 => 60,  130 => 59,  125 => 58,  118 => 54,  114 => 53,  110 => 52,  106 => 51,  102 => 50,  90 => 41,  82 => 38,  73 => 34,  65 => 29,  54 => 21,  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
