<?php

/* TopxiaAdminBundle:System/Pay:quickly.html.twig */
class __TwigTemplate_ff6781d3d4241195d7a3bd95ff1728d3fd87b255bc7c924910d606e42e15f9dd extends Twig_Template
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
  <legend>汇付宝－快捷支付</legend>
  ";
        // line 3
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.quickpay", false)) {
            // line 4
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-3 radios\">
        ";
            // line 9
            echo $this->env->getExtension('topxia_html_twig')->radios("quickpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "quickpay_enabled", array()));
            echo "
      </div>
      <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/heepay.zip\">下载接口申请说明文档</a>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"quickpay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"quickpay_key\" name=\"quickpay_key\" class=\"form-control\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "quickpay_key", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"quickpay_key\">Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"quickpay_secret\" name=\"quickpay_secret\" class=\"form-control\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "quickpay_secret", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"quickpay_aes\">Aes</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"quickpay_aes\" name=\"quickpay_aes\" class=\"form-control\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "quickpay_aes", array()), "html", null, true);
            echo "\">
      </div>
    </div>
  ";
        } else {
            // line 43
            echo "    <div class=\"alert alert-info text-center\" role=\"alert\">
      因汇付宝公司事务引起网银支付申请暂停，对此造成不便，请您谅解，如有疑问，请联系EduSoho官方
    </div>
  ";
        }
        // line 47
        echo "</fieldset>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:quickly.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 47,  78 => 43,  71 => 39,  59 => 30,  47 => 21,  32 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }
}
