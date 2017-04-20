<?php

/* TopxiaAdminBundle:EduCloud:cloud-account.html.twig */
class __TwigTemplate_b581d1768d75d69a41e970529ed6dc4bf7decb83a299f26f87929beb27fb8026 extends Twig_Template
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
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-body\">
    <div class=\"edu-balance\">
      <h4 style=\"color:#555; margin-bottom:20px\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("账户余额"), "html", null, true);
        echo "
      </h4>
      <p>
        ";
        // line 9
        if (((($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array()), "0")) : ("0")) > 0)) {
            // line 10
            echo "          <span class=\"balance\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "
        ";
        } else {
            // line 12
            echo "          <span class=\"balance\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_cloud_recharge");
        echo "\" class=\"btn btn-primary\" target=\"_blank\" style=\"margin-left:20px;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("充值"), "html", null, true);
        echo "</a>
      </p> 
      ";
        // line 16
        if ((((($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)) < 50) && ((($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)) >= 0))) {
            // line 17
            echo "        <p class=\"text-danger text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("你的余额不足50元，请尽快充值，以免影响正常使用。"), "html", null, true);
            echo "</p>
      ";
        } elseif (((($this->getAttribute($this->getAttribute(        // line 18
(isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)) < 0)) {
            // line 19
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array()), "arrearageDays", array()) < 7)) {
                // line 20
                echo "          <p class=\"text-danger text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已欠费，教育云将于%arrearageDays% 天后暂停，请尽快充值，以免影响正常使用", array("%arrearageDays%" => (7 - $this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array()), "arrearageDays", array())))), "html", null, true);
                echo "</p>
        ";
            } else {
                // line 22
                echo "          <p class=\"text-danger text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已欠费%arrearageDays%天，教育云服务已暂停，请尽快充值", array("%arrearageDays%" => $this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "account", array()), "arrearageDays", array()))), "html", null, true);
                echo "</p>
        ";
            }
            // line 24
            echo "      ";
        }
        // line 25
        echo "      <hr style=\"margin: 10px 0\">
      <div>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("代金券余额："), "html", null, true);
        echo "<span class=\"\" >";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "coupon", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "coupon", array(), "any", false, true), "balance", array()), "0.00")) : ("0.00")), "html", null, true);
        echo "</span>
      <a href=\"http://open.edusoho.com/coupon/activate\" target=\"_blank\" style=\"margin-left:30px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("激活代金券"), "html", null, true);
        echo "</a></div>
    </div>
  </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  88 => 26,  85 => 25,  82 => 24,  76 => 22,  70 => 20,  67 => 19,  65 => 18,  60 => 17,  58 => 16,  50 => 14,  42 => 12,  34 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
