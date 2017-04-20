<?php

/* TopxiaWebBundle:CourseTestpaperManage:index.html.twig */
class __TwigTemplate_396ffa53c728ba855199c8ab90bec38f67baf6b00a7af9e5d6d8e220c153aa2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:index.html.twig", 1);
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
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseTestpaperManage:index.html.twig", 2);
        // line 6
        $context["side_nav"] = "testpaper";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷管理"), "html", null, true);
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
      <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
         class=\"btn btn-info btn-sm pull-right mls\"><span class=\"glyphicon glyphicon-plus\"></span>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建试卷"), "html", null, true);
        echo "</a>
      ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷管理"), "html", null, true);
        echo "
    </div>

    <div class=\"panel-body \" id=\"quiz-table-container\">

      <table class=\"table table-striped table-hover\" id=\"quiz-table\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <thead>
        <tr>
          <th><input type=\"checkbox\" autocomplete=\"off\" data-role=\"batch-select\"></th>
          <th width=\"38%\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
          <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
          <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目统计"), "html", null, true);
        echo "</th>
          <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("时间限制"), "html", null, true);
        echo "</th>
          <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新人/时间"), "html", null, true);
        echo "</th>
          <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testpapers"]) ? $context["testpapers"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            // line 36
            echo "          ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["testpaper"], "updatedUserId", array()), array(), "array");
            // line 37
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:tr.html.twig", "TopxiaWebBundle:CourseTestpaperManage:index.html.twig", 37)->display($context);
            // line 38
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
            // line 39
            echo "          <tr>
            <td colspan=\"20\">
              <div class=\"empty\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有试卷，请点击右上角按钮，"), "html", null, true);
            echo "<a
                    href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建一个新试卷"), "html", null, true);
            echo "</a>
              </div>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
      </table>
      <div>
        <label class=\"checkbox-inline\"><input type=\"checkbox\" autocomplete=\"off\" data-role=\"batch-select\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
        echo "\"
                data-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_deletes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      </div>

      ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

      <div class=\"text-muted mtl\">
        ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提示：试卷一旦发布不能修改，发布后的试卷需要"), "html", null, true);
        echo "
        <strong>
          ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加到课时"), "html", null, true);
        echo "
        </strong>
        ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("中才能正常使用。"), "html", null, true);
        echo "
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 62,  195 => 60,  190 => 58,  184 => 55,  176 => 52,  172 => 51,  168 => 50,  163 => 47,  150 => 42,  146 => 41,  142 => 39,  129 => 38,  126 => 37,  123 => 36,  105 => 35,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  71 => 22,  62 => 16,  58 => 15,  54 => 14,  49 => 11,  46 => 10,  38 => 4,  34 => 1,  32 => 8,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }
}
