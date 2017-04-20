<?php

/* TopxiaAdminBundle:System/Pay:wxpay.html.twig */
class __TwigTemplate_c765a415be3f826f20f16f4ec7f4215b70b93ba4f294ced915845555931751d4 extends Twig_Template
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
  <legend>微信支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      ";
        // line 8
        echo $this->env->getExtension('topxia_html_twig')->radios("wxpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_enabled", array()));
        echo "
    </div>
    <div class=\"controls col-md-4 radios\">
      <a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">简单申请介绍</a>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_key\">PID</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_key\" name=\"wxpay_key\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_key", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">PID即为公众号APPID。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_account\">商户号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_account\" name=\"wxpay_account\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_account", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">商户号即为微信支付商户号。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_secret\">商户平台Key</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_secret\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_secret", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">
        商户平台key需要登录<a href=\"https://pay.weixin.qq.com/service_provider/index.shtml\" target=\"_blank\">微信商户平台</a>，在【账户设置】-【API安全】中设置密匙。
      </div>
    </div>
  </div> 
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:wxpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 37,  54 => 28,  42 => 19,  28 => 8,  19 => 1,);
    }
}
