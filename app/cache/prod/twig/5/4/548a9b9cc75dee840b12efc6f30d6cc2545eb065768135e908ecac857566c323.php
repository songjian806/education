<?php

/* TopxiaWebBundle:Register:index.html.twig */
class __TwigTemplate_548a9b9cc75dee840b12efc6f30d6cc2545eb065768135e908ecac857566c323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/register";
        // line 6
        $context["parameter"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录帐号"), "html", null, true);
        echo "</a>
    <a class=\"active\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册帐号"), "html", null, true);
        echo "</a>
  </div>
  <div class=\"login-main\">
    ";
        // line 15
        if ((isset($context["isRegisterEnabled"]) ? $context["isRegisterEnabled"] : null)) {
            // line 16
            echo "      <form id=\"register-form\" method=\"post\" action=\"\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

        ";
            // line 19
            if (((isset($context["inviteCode"]) ? $context["inviteCode"] : null) != null)) {
                // line 20
                echo "          <div class=\"alert alert-info alert-sm\">";
                echo $this->env->getExtension('translator')->trans("您正在通过<span class=\"color-gray mhs\">%inviteUser%</span>的邀请注册。", array("%inviteUser%" => $this->getAttribute((isset($context["inviteUser"]) ? $context["inviteUser"] : null), "nickname", array())));
                echo "</div>
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            if (($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "email")) {
                // line 24
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_email\">";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱地址"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"email\" id=\"register_email\" name=\"email\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 27
                echo $this->env->getExtension('routing')->getPath("register_email_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("填写你常用的邮箱作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } elseif (($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "mobile")) {
                // line 32
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_mobile\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机号码"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 35
                echo $this->env->getExtension('routing')->getPath("register_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("填写你常用的手机号码作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } else {
                // line 40
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_emailOrmobile\">";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机/邮箱"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 43
                echo $this->env->getExtension('routing')->getPath("register_email_or_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("填写你常用的邮箱或手机号码作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            }
            // line 48
            echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_nickname\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
            echo "</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("register_nickname_check");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("中、英文均可，最长18个英文或9个汉字"), "html", null, true);
            echo "\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_password\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("密码"), "html", null, true);
            echo "</label>
          <div class=\"controls\">
            <input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("5-20位英文、数字、符号，区分大小写"), "html", null, true);
            echo "\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        ";
            // line 63
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("auth.captcha_enabled"), 0) == 1) && ($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") != "mobile"))) {
                // line 64
                echo "          <div class=\"form-group mbl js-captcha\">
            <label class=\"control-label required\" for=\"captcha_code\">";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("验证码"), "html", null, true);
                echo "</label>
            <div class=\"controls row\">
              <div class = \"col-xs-7\">
                <input type=\"text\" class=\"form-control input-lg\" id=\"captcha_code\" name=\"captcha_code\" maxlength=\"5\" placeholder=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("验证码"), "html", null, true);
                echo "\" required=\"required\"  data-url=\"";
                echo $this->env->getExtension('routing')->getPath("register_captcha_check");
                echo "\" >
                <p class=\"help-block\"></p>
              </div>
              <div class=\"col-xs-5\">
                <img src=\"";
                // line 72
                echo $this->env->getExtension('routing')->getPath("register_captcha_num");
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("register_captcha_num");
                echo "\" id=\"getcode_num\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("看不清，点击换一张"), "html", null, true);
                echo "\" style=\"cursor:pointer;height:40px;width:100%\">
              </div>
              
            </div>
          </div>
        ";
            }
            // line 78
            echo "        ";
            if ((($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "email_or_mobile") || ($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "mobile"))) {
                // line 79
                echo "          <div class=\"form-group mbl ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") != "mobile")) {
                    echo "hidden";
                }
                echo " email_mobile_msg\">
            <label class=\"control-label required\" for=\"sms_code\">";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("短信验证码"), "html", null, true);
                echo "</label>
            <div class=\"controls row\" >
              <div class = \"col-xs-7\" >
                <input type=\"number\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("填写你的短信验证码"), "html", null, true);
                echo "\" required=\"required\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_check", array("type" => "sms_registration"));
                echo "\">
                <p class=\"help-block\"> </p>
              </div>
              <div class=\"col-xs-5\">
                <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-lg js-sms-send disabled\" data-url=\"";
                // line 87
                echo $this->env->getExtension('routing')->getPath("register_captcha_modal");
                echo "\" data-sms-url=\"";
                echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_send");
                echo "\">
                  <span id=\"js-time-left\"></span>
                  <span id=\"js-fetch-btn-text\">";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("获取短信验证码"), "html", null, true);
                echo "</span>
               </a>
              </div>
            </div>
          </div>
        ";
            }
            // line 95
            echo "        ";
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("invite.invite_code_setting"), 0) == 1) && ((isset($context["inviteCode"]) ? $context["inviteCode"] : null) == null))) {
                // line 96
                echo "        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"invite_code\">";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邀请码"), "html", null, true);
                echo "<span class=\"text-success\">（";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选填"), "html", null, true);
                echo "）</span></label>
          <div class=\"controls\">
            <input type=\"text\" name=\"invite_code\" required=\"required\" class=\"form-control input-lg invitecode\" data-url=\"";
                // line 99
                echo $this->env->getExtension('routing')->getPath("invitecode_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("如果您有邀请码，请填写您的邀请码"), "html", null, true);
                echo "\">
          </div>
        </div>
        ";
            }
            // line 103
            echo "
        ";
            // line 104
            if (($this->env->getExtension('topxia_web_twig')->getSetting("auth.user_terms") == "opened")) {
                // line 105
                echo "          <div class=\"form-group mbl\">
            <div class=\"controls\">
              <label>
                <input type=\"checkbox\" id=\"user_terms\" checked=\"checked\"> ";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我已阅读并同意"), "html", null, true);
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("user_terms");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("服务协议"), "html", null, true);
                echo "》</a>
              </label>
            </div>
          </div>
        ";
            }
            // line 113
            echo "
        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <button type=\"submit\" id=\"register-btn\" data-submiting-text=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"captcha_enabled\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("auth.captcha_enabled"), "html", null, true);
            echo "\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        ";
            // line 122
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method")) {
                // line 123
                echo "        <input type=\"hidden\" id=\"invite_code\" name=\"invite_code\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method"), "html", null, true);
                echo "\">
        ";
            }
            // line 125
            echo "
      </form>

      ";
            // line 128
            if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
                // line 129
                echo "        <div class=\"social-login\">
          <span>
            ";
                // line 131
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null), "inviteCode" => ((array_key_exists("inviteCode", $context)) ? (_twig_default_filter((isset($context["inviteCode"]) ? $context["inviteCode"] : null), "")) : ("")))));
                echo "
          </span>
          <div class=\"line\"></div>
        </div>
      ";
            }
            // line 136
            echo "    ";
        } else {
            // line 137
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("系统暂时关闭注册，请联系管理员"), "html", null, true);
            echo "</div>
    ";
        }
        // line 139
        echo "  </div>
</div>
  ";
        // line 141
        if (($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled") == "1")) {
            // line 142
            echo "    ";
            $this->env->getExtension('topxia_web_twig')->loadScript("auth/isWeiXin");
            // line 143
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 143,  352 => 142,  350 => 141,  346 => 139,  340 => 137,  337 => 136,  329 => 131,  325 => 129,  323 => 128,  318 => 125,  312 => 123,  310 => 122,  306 => 121,  302 => 120,  293 => 116,  288 => 113,  276 => 108,  271 => 105,  269 => 104,  266 => 103,  257 => 99,  250 => 97,  247 => 96,  244 => 95,  235 => 89,  228 => 87,  219 => 83,  213 => 80,  206 => 79,  203 => 78,  190 => 72,  181 => 68,  175 => 65,  172 => 64,  170 => 63,  163 => 59,  158 => 57,  148 => 52,  143 => 50,  139 => 48,  129 => 43,  124 => 41,  121 => 40,  111 => 35,  106 => 33,  103 => 32,  93 => 27,  88 => 25,  85 => 24,  83 => 23,  80 => 22,  74 => 20,  72 => 19,  67 => 17,  64 => 16,  62 => 15,  56 => 12,  50 => 11,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 4,  11 => 1,);
    }
}
