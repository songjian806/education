<?php

/* TopxiaAdminBundle:User:index.html.twig */
class __TwigTemplate_79eae307b6747702c20b4b0098e175dc8a1a8a1b4f73e43842185d6a29ef7de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:index.html.twig", 1);
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
        $context["menu"] = "admin_user_manage";
        // line 5
        $context["script_controller"] = "user/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">

      ";
        // line 14
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:index.html.twig", 14)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 15
        echo "
      <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
        ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("longinDate" => $this->env->getExtension('translator')->trans("登录时间"), "registerDate" => $this->env->getExtension('translator')->trans("注册时间")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "datePicker"), "method"), $this->env->getExtension('translator')->trans("--时间类型--"));
        echo "
      </select>
      <div class=\"form-group \">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("起始时间"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("结束时间"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">

      <select class=\"form-control\" name=\"roles\">
        ";
        // line 30
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->arrayMerge($this->env->getExtension('topxia_web_twig')->getDict("userRole"), (isset($context["allRoles"]) ? $context["allRoles"] : null)), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "roles"), "method"), $this->env->getExtension('translator')->trans("--所有角色--"));
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>
    <div class=\"form-group\">
      <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
        ";
        // line 37
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordUserType"), "method"), $this->env->getExtension('translator')->trans("--注册来源--"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
        ";
        // line 43
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userKeyWordType"), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) : ("nickname")));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"
             placeholder=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

    ";
        // line 54
        if (($this->env->getExtension('permission.permission_extension')->hasPermission("admin_user_export") && $this->env->getExtension('topxia_web_twig')->isPluginInstalled("UserImporter"))) {
            // line 55
            echo "      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\"
         data-url=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("admin_user_export");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("导出搜索结果"), "html", null, true);
            echo "</a>
    ";
        }
        // line 58
        echo "
  </form>



  <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
    <thead>
    <tr>
      <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</th>
      ";
        // line 67
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 67)->display($context);
        // line 68
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机号"), "html", null, true);
        echo "</th>
      <th>Email</th>
      <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近登录"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户总数："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["userCount"]) ? $context["userCount"] : null), "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 80
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:User:user-table-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 80)->display(array_merge($context, array("user" => $context["user"], "profile" => $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["user"], "id", array()), array(), "array"))));
            // line 81
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </tbody>
  </table>
  ";
        // line 84
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:User:index.html.twig", 84)->display(array_merge($context, array("module" => "user", "formId" => "user-table")));
        // line 85
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 85,  213 => 84,  209 => 82,  195 => 81,  192 => 80,  175 => 79,  168 => 77,  160 => 72,  156 => 71,  152 => 70,  146 => 68,  144 => 67,  140 => 66,  130 => 58,  123 => 56,  120 => 55,  118 => 54,  110 => 49,  106 => 48,  98 => 43,  89 => 37,  79 => 30,  68 => 24,  60 => 21,  53 => 17,  49 => 15,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
