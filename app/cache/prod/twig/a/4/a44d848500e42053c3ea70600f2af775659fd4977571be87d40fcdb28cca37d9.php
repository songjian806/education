<?php

/* TopxiaAdminBundle:Order:manage.html.twig */
class __TwigTemplate_a44d848500e42053c3ea70600f2af775659fd4977571be87d40fcdb28cca37d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 1);
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
        // line 7
        $context["menu"] = (("admin_" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "_order");
        // line 9
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建时间:"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("起始时间"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("结束时间"), "html", null, true);
        echo "\">
    </div>
    </div>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("筛选条件:"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"status\">
          ";
        // line 26
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("orderStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), $this->env->getExtension('translator')->trans("订单状态"));
        echo "
        </select>
  
      <select class=\"form-control\" name=\"payment\">
        ";
        // line 30
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("payment"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), $this->env->getExtension('translator')->trans("支付方式"));
        echo "
      </select>
    </div> 
    <div class=\"form-group\" style=\"display:none;\">
      <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\", placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("付款时间段"), "html", null, true);
        echo "\">
    </div>


    <div class=\"form-group\">
    <label class=\"ptm\" >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词:"), "html", null, true);
        echo "</label>
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 41
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "vip")) {
            // line 42
            echo "          ";
            $context["options"] = array("sn" => $this->env->getExtension('translator')->trans("订单号"), "buyer" => $this->env->getExtension('translator')->trans("购买者用户名"), "title" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('translator')->trans("名")));
            // line 43
            echo "        ";
        } else {
            // line 44
            echo "          ";
            $context["options"] = array("sn" => $this->env->getExtension('translator')->trans("订单号"), "buyer" => $this->env->getExtension('translator')->trans("购买者用户名"), "targetId" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('translator')->trans("编号")), "title" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('translator')->trans("名")));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>

    <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
    <a class=\"btn btn-primary btn-export-csv\" 
    href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_manage_export_csv", array("targetType" =>         // line 55
(isset($context["targetType"]) ? $context["targetType"] : null), "startTime" => $this->getAttribute(        // line 56
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "endTime" => $this->getAttribute(        // line 57
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(        // line 58
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(        // line 59
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(        // line 60
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(        // line 61
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 62
        echo "\"
    data-export-count=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method"), "html", null, true);
        echo "\"
    data-export-count-format=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->numberFilter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method")), "html", null, true);
        echo "\"
    data-export-allow-count=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("magic.export_allow_count"), "html", null, true);
        echo "\"
    data-export-allow-count-format=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->numberFilter($this->env->getExtension('topxia_web_twig')->getSetting("magic.export_allow_count")), "html", null, true);
        echo "\"
    >";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("导出结果"), "html", null, true);
        echo "</a>
    </div>
  </form>

  <table class=\"table table-striped table-hover\" id=\"order-table\">
    ";
        // line 72
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 72)->display(array_merge($context, array("mode" => "admin")));
        // line 73
        echo "  </table>
  <div class=\"paginator\">
    ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Order:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 75,  167 => 73,  165 => 72,  157 => 67,  153 => 66,  149 => 65,  145 => 64,  141 => 63,  138 => 62,  136 => 61,  135 => 60,  134 => 59,  133 => 58,  132 => 57,  131 => 56,  130 => 55,  129 => 54,  124 => 52,  116 => 49,  109 => 46,  106 => 45,  103 => 44,  100 => 43,  97 => 42,  95 => 41,  90 => 39,  82 => 34,  75 => 30,  68 => 26,  63 => 24,  53 => 19,  46 => 17,  42 => 16,  36 => 12,  33 => 11,  29 => 1,  27 => 9,  25 => 7,  11 => 1,);
    }
}
