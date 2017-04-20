<?php

/* TopxiaAdminBundle:Announcement:index.html.twig */
class __TwigTemplate_c5cf0ff33dd7947f6455d2b105bbd336d2542c8869f26d67736422cd142e1e53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 1);
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
        $context["script_controller"] = "announcement/index";
        // line 5
        $context["menu"] = "admin_announcement_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0")) {
            echo "  
  <form id=\"announcement-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
            // line 10
            $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
            // line 11
            echo "    <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
            echo "</button>
  </form>
";
        }
        // line 14
        echo "
  <table id=\"announcement-table\" class=\"table table-striped\">
    <thead>
    <tr>
      <th width=\"25%\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公告信息"), "html", null, true);
        echo "</th>
      ";
        // line 19
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 19)->display($context);
        // line 20
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("结束时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布人"), "html", null, true);
        echo "</th>
      <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 28
        if ((isset($context["announcements"]) ? $context["announcements"] : null)) {
            // line 29
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 30
                echo "        <tr announcement-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "id", array()), "html", null, true);
                echo ">
          ";
                // line 31
                $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 31)->display($context);
                // line 32
                echo "          <td><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", array()), "html", null, true);
                echo "\" target=\"_content\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "content", array()), "html", null, true);
                echo "</td>
          ";
                // line 33
                $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 33)->display(array_merge($context, array("orgCode" => $this->getAttribute($context["announcement"], "orgCode", array()))));
                // line 34
                echo "          <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "startTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "endTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 37
                if (((isset($context["now"]) ? $context["now"] : null) < $this->getAttribute($context["announcement"], "startTime", array()))) {
                    // line 38
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("即将开始"), "html", null, true);
                    echo "
            ";
                } elseif ((                // line 39
(isset($context["now"]) ? $context["now"] : null) > $this->getAttribute($context["announcement"], "endTime", array()))) {
                    // line 40
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已结束"), "html", null, true);
                    echo "
            ";
                } else {
                    // line 42
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("显示中"), "html", null, true);
                    echo "
            ";
                }
                // line 44
                echo "          </td>
          <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["announcement"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</td>
          <td>
            <div class=\"btn-group\">
              <a data-url=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_announcement_edit", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\"
                 data-toggle=\"modal\" data-target=\"#modal\">";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
                echo "</a>
              <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu\">
                <li>
                  <a href=\"javascript:;\" data-url=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_announcement_delete", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"delete-btn\"><span class=\"glyphicon glyphicon-trash\"></span> ";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                echo "</a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    ";
        }
        // line 64
        echo "    </tbody>
  </table>
  ";
        // line 66
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 66)->display(array_merge($context, array("module" => "announcement", "formId" => "announcement-table")));
        // line 67
        echo "  ";
        if ( !(isset($context["announcements"]) ? $context["announcements"] : null)) {
            // line 68
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无公告"), "html", null, true);
            echo "</div>
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Announcement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 71,  218 => 70,  212 => 68,  209 => 67,  207 => 66,  203 => 64,  200 => 63,  179 => 56,  175 => 55,  166 => 49,  162 => 48,  156 => 45,  153 => 44,  147 => 42,  141 => 40,  139 => 39,  134 => 38,  132 => 37,  127 => 35,  122 => 34,  120 => 33,  113 => 32,  111 => 31,  106 => 30,  88 => 29,  86 => 28,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  62 => 20,  60 => 19,  56 => 18,  50 => 14,  43 => 11,  41 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
