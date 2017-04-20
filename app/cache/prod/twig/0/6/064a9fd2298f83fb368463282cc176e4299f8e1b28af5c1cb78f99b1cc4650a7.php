<?php

/* TopxiaAdminBundle:System:payment.html.twig */
class __TwigTemplate_064a9fd2298f83fb368463282cc176e4299f8e1b28af5c1cb78f99b1cc4650a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 1);
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
        $context["script_controller"] = "system/payment";
        // line 5
        $context["menu"] = "admin_payment";
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

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付功能"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => $this->env->getExtension('translator')->trans("开启"), 0 => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "enabled", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"disabled_message\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付关闭时的提示信息"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "disabled_message", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  ";
        // line 30
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:alipay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 30)->display($context);
        // line 31
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:wxpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 31)->display($context);
        // line 32
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:heepay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 32)->display($context);
        // line 33
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:quickly.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 33)->display($context);
        // line 34
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:llpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 34)->display($context);
        // line 35
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  95 => 39,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  77 => 31,  75 => 30,  68 => 26,  62 => 23,  53 => 17,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
