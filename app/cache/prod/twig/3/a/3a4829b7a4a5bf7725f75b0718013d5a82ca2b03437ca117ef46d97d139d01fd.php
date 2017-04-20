<?php

/* TopxiaWebBundle:MyOrder:index.html.twig */
class __TwigTemplate_3a4829b7a4a5bf7725f75b0718013d5a82ca2b03437ca117ef46d97d139d01fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyOrder:layout.html.twig", "TopxiaWebBundle:MyOrder:index.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyOrder:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "my/orders";
        // line 5
        $context["main_nav"] = "orders";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main_body($context, array $blocks = array())
    {
        // line 8
        echo "  <ul class=\"nav nav-pills\" role=\"tablist\">
    <li role=\"presentation\" ";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method") == "")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders", array("status" => ""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部订单"), "html", null, true);
        echo "</a></li>
    <li role=\"presentation\" ";
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method") == "created")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders", array("status" => "created"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("待付款"), "html", null, true);
        echo "<span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["waitToBePaidCount"]) ? $context["waitToBePaidCount"] : null), "html", null, true);
        echo "</span></a></li>
    <li role=\"presentation\" ";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method") == "paid")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders", array("status" => "paid"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已付款"), "html", null, true);
        echo "</a></li>
  </ul>
  <br>
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <input type=\"hidden\" name=\"status\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "html", null, true);
        echo "\">
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\" >
        ";
        // line 18
        $context["options"] = array("oneWeek" => $this->env->getExtension('translator')->trans("最近一周"), "twoWeeks" => $this->env->getExtension('translator')->trans("最近两周"), "oneMonth" => $this->env->getExtension('translator')->trans("最近一个月"), "twoMonths" => $this->env->getExtension('translator')->trans("最近两个月"), "threeMonths" => $this->env->getExtension('translator')->trans("最近三个月"), "" => $this->env->getExtension('translator')->trans("全部记录"));
        // line 19
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"payWays\"  onchange=\"submit();\" >

        ";
        // line 25
        $context["options"] = array("alipay" => $this->env->getExtension('translator')->trans("支付宝"), "wxpay" => $this->env->getExtension('translator')->trans("微信支付"), "heepay" => $this->env->getExtension('translator')->trans("网银支付"), "quickpay" => $this->env->getExtension('translator')->trans("快捷支付"), "llpay" => $this->env->getExtension('translator')->trans("连连支付"), "none" => $this->env->getExtension('translator')->trans("其他支付"), "" => $this->env->getExtension('translator')->trans("支付方式"));
        // line 26
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payWays"), "method"));
        echo "
      </select>
    </div>
  </form>
  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover\" id=\"orders-table\">
      ";
        // line 32
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaWebBundle:MyOrder:index.html.twig", 32)->display(array_merge($context, array("mode" => "my")));
        // line 33
        echo "    </table>
  </div>
";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  106 => 33,  104 => 32,  94 => 26,  92 => 25,  82 => 19,  80 => 18,  74 => 15,  61 => 11,  49 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
