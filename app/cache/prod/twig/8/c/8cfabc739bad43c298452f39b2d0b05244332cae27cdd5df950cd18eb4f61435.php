<?php

/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_8cfabc739bad43c298452f39b2d0b05244332cae27cdd5df950cd18eb4f61435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "settings/profile";
        // line 6
        $context["side_nav"] = "profile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基础信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
\t";
        // line 10
        $this->loadTemplate("TopxiaWebBundle:Settings:profile.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 10, "697604138")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_8cfabc739bad43c298452f39b2d0b05244332cae27cdd5df950cd18eb4f61435_697604138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 10);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基础信息"), "html", null, true);
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
\t\t\t";
        // line 14
        if ((isset($context["fromCourse"]) ? $context["fromCourse"] : null)) {
            // line 15
            echo "\t\t\t<div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置头衔、自我介绍并保存后，即可开始创建课程。"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 17
        echo "
\t\t\t<form id=\"user-profile-form\" class=\"form-horizontal\" method=\"post\">
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t<div class=\"control-text\">
\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("user_partner.nickname_enabled")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("setting_nickname");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("修改"), "html", null, true);
            echo "</a> ";
        }
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_truename\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("姓名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t";
        // line 31
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 32
            echo "              <div class=\"control-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 34
            echo "            \t<div class=\"col-md-7 controls radios\">
              \t<input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "")) : ("")), "html", null, true);
            echo "\">
              \t<div class=\"help-block\" style=\"display:none;\"></div>
            \t</div>
            ";
        }
        // line 39
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("性别"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls radios\">
\t\t\t\t\t\t\t<div id=\"profile_gender\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_0\" name=\"profile[gender]\" required=\"required\" value=\"male\" ";
        // line 45
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_0\" class=\"required\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("男"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_1\" name=\"profile[gender]\" required=\"required\" value=\"female\" ";
        // line 47
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_1\" class=\"required\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("女"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_idcard\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("身份证号"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t";
        // line 55
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 56
            echo "              <div class=\"col-md-7 controls\">
                <div class=\"control-text\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array())), "html", null, true);
            echo "</div>
              </div>
            ";
        } else {
            // line 60
            echo "              <div class=\"col-md-7 controls radios\">
                <input type=\"text\" id=\"profile_idcard\" name=\"profile[idcard]\" class=\"form-control\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            ";
        }
        // line 65
        echo "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 67
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) > 0)) {
            // line 68
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机号码"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t\t<div class=\"control-text\">
\t\t\t\t\t\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "")) : (""))), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<small class=\"text-success\">(";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已绑定"), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机号码"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_mobile\" name=\"profile[mobile]\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "")) : ("")), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 86
            if (($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled", "") == "1")) {
                // line 87
                echo "\t\t\t\t\t\t\t<div class=\"help-block\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\"></label>
\t\t\t\t\t\t\t\t<p class=\"text-warning\">
\t\t\t\t\t\t\t\t";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没绑定手机号，"), "html", null, true);
                echo "<strong><a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings_bind_mobile");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("前去绑定"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t";
        }
        // line 96
        echo "
\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公司"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_company\" name=\"profile[company]\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("职业"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_job\" name=\"profile[job]\" class=\"form-control\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头衔"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人签名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea type=\"text\" rows=\"4\" maxlength=\"80\" id=\"profile_signature\" name=\"profile[signature]\" class=\"form-control\">";
        // line 124
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("自我介绍"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\" data-image-upload-url=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("user"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人主页"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_site\" name=\"profile[site]\" class=\"form-control\" data-widget-cid=\"widget-4\" data-explain=\"\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t\t<label for=\"weibo\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("微博"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"weibo\" name=\"profile[weibo]\" class=\"form-control\" data-widget-cid=\"widget-3\" data-explain=\"\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\"><input type=\"checkbox\" name=\"profile[isWeiboPublic]\" ";
        // line 152
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isWeiboPublic", array())) {
            echo "checked=\"checked\" ";
        }
        echo "/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公开"), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("微信"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_weixin\" name=\"profile[weixin]\" class=\"form-control\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\"><input type=\"checkbox\" name=\"profile[isWeixinPublic]\" ";
        // line 161
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isWeixinPublic", array())) {
            echo "checked=\"checked\" ";
        }
        echo "/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公开"), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"profile_qq\" class=\"col-md-2 control-label\">QQ</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_qq\" name=\"profile[qq]\" class=\"form-control\" data-widget-cid=\"widget-2\" data-explain=\"\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\"><input type=\"checkbox\" name=\"profile[isQQPublic]\" ";
        // line 170
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isQQPublic", array())) {
            echo "checked=\"checked\"";
        }
        echo "/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公开"), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>



\t\t\t\t\t";
        // line 175
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 176
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t";
            // line 177
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 178
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 179
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 180
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea id=\"";
                    // line 182
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 186
$context["field"], "type", array()) == "int")) {
                    // line 187
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 188
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 190
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最大值为9位整数"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 194
$context["field"], "type", array()) == "float")) {
                    // line 195
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 196
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保留到2位小数"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 202
$context["field"], "type", array()) == "date")) {
                    // line 203
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 210
$context["field"], "type", array()) == "varchar")) {
                    // line 211
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 212
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 219
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "\t\t\t\t\t";
        }
        // line 221
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7 col-md-offset-2\">
\t\t\t\t\t\t\t<button id=\"profile-save-btn\" data-submiting-text=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t\t\t</form>

\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 228,  604 => 224,  599 => 221,  596 => 220,  590 => 219,  578 => 214,  571 => 212,  568 => 211,  566 => 210,  551 => 206,  544 => 204,  541 => 203,  539 => 202,  524 => 198,  517 => 196,  514 => 195,  512 => 194,  497 => 190,  490 => 188,  487 => 187,  485 => 186,  472 => 182,  465 => 180,  462 => 179,  459 => 178,  455 => 177,  452 => 176,  450 => 175,  438 => 170,  432 => 167,  419 => 161,  413 => 158,  408 => 156,  397 => 152,  391 => 149,  385 => 146,  375 => 139,  370 => 137,  360 => 132,  355 => 130,  346 => 124,  341 => 122,  332 => 116,  327 => 114,  318 => 108,  313 => 106,  304 => 100,  299 => 98,  295 => 96,  292 => 95,  278 => 90,  273 => 87,  271 => 86,  263 => 81,  258 => 79,  255 => 78,  247 => 73,  243 => 72,  237 => 69,  234 => 68,  232 => 67,  228 => 65,  221 => 61,  218 => 60,  212 => 57,  209 => 56,  207 => 55,  203 => 54,  194 => 48,  188 => 47,  184 => 46,  178 => 45,  172 => 42,  167 => 39,  160 => 35,  157 => 34,  151 => 32,  149 => 31,  145 => 30,  129 => 25,  123 => 22,  117 => 19,  113 => 17,  107 => 15,  105 => 14,  102 => 13,  99 => 12,  93 => 11,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
