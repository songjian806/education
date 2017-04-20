<?php

/* TopxiaAdminBundle:System/Pay:llpay.html.twig */
class __TwigTemplate_1557ba1f1ddf0d5cfbb6866662946087731d1f48f517a368c257fb941ec5b43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<fieldset>
  <legend>连连支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      ";
        // line 8
        echo $this->env->getExtension('topxia_html_twig')->radios("llpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "llpay_enabled", array()));
        echo "
    </div>
     <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/lianlianpay.zip\">下载接口申请说明文档</a>
      </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_key\">商户账号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_key\" name=\"llpay_key\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "llpay_key", array()), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_secret\">商户平台Key</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_secret\" name=\"llpay_secret\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "llpay_secret", array()), "html", null, true);
        echo "\">
    </div>
  </div>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:llpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 28,  43 => 20,  28 => 8,  19 => 1,);
    }
}
