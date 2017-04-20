<?php

/* ClassroomBundle:ClassroomAdmin:index.html.twig */
class __TwigTemplate_8e674b0036e6a06824ee55f0bb4f017bb0ef990944fbb054c6d416997dc2f8a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 1);
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
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
        // line 9
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 10
        echo "
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%名称", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
    ";
        // line 16
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 16)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('translator')->trans("班级说明Tooltip"), "placement" => "left")));
        // line 17
        echo "
  </form>
  ";
        // line 19
        if ((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null)) {
            // line 20
            echo "  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("班级编号"), "html", null, true);
            echo "</th>
      <th width=\"25%\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%名称", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</th>
      ";
            // line 25
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 25)->display($context);
            // line 26
            echo "      <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程数"), "html", null, true);
            echo "</th>
      <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员数"), "html", null, true);
            echo "</th>
      <th width=\"15%\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
            echo "</th>
      <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
            echo "</th>
      <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 36
                echo "      ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 37
                echo "      ";
                $this->loadTemplate("ClassroomBundle:ClassroomAdmin:table-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 37)->display(array_merge($context, array("classroom" => $context["classroom"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                // line 38
                echo "
   ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 45
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无%name%信息!", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</div>
  ";
        }
        // line 47
        echo "  ";
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 47)->display(array_merge($context, array("module" => "classroom", "formId" => "classroom-table")));
        // line 48
        echo "  <div class=\"pull-right\">
   ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>


";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  160 => 48,  157 => 47,  151 => 45,  144 => 40,  129 => 38,  126 => 37,  123 => 36,  106 => 35,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  81 => 26,  79 => 25,  75 => 24,  71 => 23,  66 => 20,  64 => 19,  60 => 17,  58 => 16,  54 => 15,  46 => 12,  42 => 10,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
