<?php

/* TopxiaAdminBundle:Course:index.html.twig */
class __TwigTemplate_26c38c7b8f61b98c7c630413362f803b67dd89057d2767713e475256b5bbe4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 1);
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
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:Course:tab.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 8)->display($context);
        // line 9
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      ";
        // line 12
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 12)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 13
        echo "
      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
          ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('translator')->trans("课程分类"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          ";
        // line 21
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('translator')->trans("课程状态"));
        echo "
        </select>
      </div>
      ";
        // line 24
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            // line 25
            echo "        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"chargeStatus\">
            ";
            // line 27
            echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("free" => $this->env->getExtension('translator')->trans("免费课程"), "charge" => $this->env->getExtension('translator')->trans("收费课程")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "chargeStatus"), "method"), $this->env->getExtension('translator')->trans("收费状态"));
            echo "
        </select>
        </div>
      ";
        }
        // line 31
        echo "
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建者"), "html", null, true);
        echo "\" name=\"creator\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>

      ";
        // line 40
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 40)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('translator')->trans("课程说明Tooltip"), "placement" => "left")));
        // line 41
        echo "    </form>
  </div>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编号"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
        echo "</th>
      ";
        // line 50
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 50)->display($context);
        // line 51
        echo "      <th width=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("连载状态"), "html", null, true);
        echo "</th>
      ";
        // line 52
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 53
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所在"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 55
            echo "        <th>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            // line 56
            echo "          数
        </th>

      ";
        }
        // line 60
        echo "      ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "course")) {
            // line 61
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收入(元)"), "html", null, true);
            echo "</th>
      ";
        } elseif ((        // line 62
(isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
            // line 63
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员等级"), "html", null, true);
            echo "</th>
      ";
        }
        // line 65
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建者"), "html", null, true);
        echo "</th>
      <th>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 72
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 73
            echo "      ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 74
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:Course:tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 74)->display($context);
            // line 75
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
            // line 76
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课程记录"), "html", null, true);
            echo "</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </tbody>
  </table>
  ";
        // line 84
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 84)->display(array_merge($context, array("module" => "course", "formId" => "course-table")));
        // line 85
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 85,  243 => 84,  239 => 82,  229 => 78,  225 => 76,  212 => 75,  209 => 74,  206 => 73,  203 => 72,  185 => 71,  178 => 67,  174 => 66,  169 => 65,  163 => 63,  161 => 62,  156 => 61,  153 => 60,  147 => 56,  140 => 55,  133 => 53,  131 => 52,  126 => 51,  124 => 50,  120 => 49,  116 => 48,  112 => 47,  104 => 41,  102 => 40,  97 => 38,  90 => 36,  82 => 33,  78 => 31,  71 => 27,  67 => 25,  65 => 24,  59 => 21,  51 => 16,  46 => 13,  44 => 12,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
