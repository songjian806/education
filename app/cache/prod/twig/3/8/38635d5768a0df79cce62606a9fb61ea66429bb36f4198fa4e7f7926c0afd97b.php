<?php

/* TopxiaAdminBundle:System:auth.html.twig */
class __TwigTemplate_38635d5768a0df79cce62606a9fb61ea66429bb36f4198fa4e7f7926c0afd97b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:auth.html.twig", 1);
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
        $context["menu"] = "admin_user_auth";
        // line 5
        $context["script_controller"] = "setting/auth";
        // line 6
        $context["script_arguments"] = array("emailVerified" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "emailVerified", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册设置"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户注册模式"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default ";
        // line 20
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "email")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱注册"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 21
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机注册"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 22
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "email_or_mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email_or_mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱或手机注册"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 23
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "closed")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"closed\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "</button>
        </div>
        <input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()), "none")) : ("none")), "html", null, true);
        echo "\" name=\"register_mode\" />
        <div class=\"help-block\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启云短信后，才可使用“手机注册”或“邮箱或手机注册”"), "html", null, true);
        echo "</div>
      </div>
    </div>

    
    <div class=\"email-content ";
        // line 31
        if ((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "mobile") || ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "closed"))) {
            echo "hidden";
        }
        echo "\">
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label >";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱验证登录"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 37
        echo $this->env->getExtension('topxia_html_twig')->radios("email_enabled", array("opened" => $this->env->getExtension('translator')->trans("开启"), "closed" => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_enabled", array()));
        echo "
         <button type=\"button\" class=\"btn btn-primary btn-sm js-email-send-check hidden\"  data-url=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_report_status_email_send");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("检测邮箱服务"), "html", null, true);
        echo "</button>
         <div class=\"alert alert-info js-email-status hidden\"  data-url=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_setting_mailer");
        echo "\"role=\"alert\" style=\"padding: 5px;margin-bottom: 0\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在检测....."), "html", null, true);
        echo "</div>
         <div class=\"help-block\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后,邮箱未验证的用户将无法登录,请先保证邮件服务器已设置"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <input type=\"hidden\" name=\"setting_time\"  value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("auth.setting_time"), "html", null, true);
        echo "\" >

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_title\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新用户激活邮件标题"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_activation_title", array()), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新用户激活邮件内容"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_activation_body", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("变量说明："), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 64
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为接收方用户昵称"), "html", null, true);
        echo "</li>
              <li>";
        // line 65
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为网站名称"), "html", null, true);
        echo "</li>
              <li>";
        // line 66
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为网站的地址"), "html", null, true);
        echo "</li>
              <li>";
        // line 67
        echo "{{verifyurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为邮箱验证地址"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册防护机制"), "html", null, true);
        echo "</label>
      </div>

      <div class=\"controls col-md-8 radios\">
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" ";
        // line 82
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "none")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" ";
        // line 85
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("低"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" ";
        // line 88
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("中"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"";
        // line 91
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("高"), "html", null, true);
        echo "
        </label>
      </div>

      <div class=\"controls col-md-8 mtl low register-help  col-md-offset-3\" ";
        // line 95
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("方案说明："), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册时需填写验证码。"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl middle register-help  col-md-offset-3\" ";
        // line 102
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("方案说明："), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册时需填写验证码。"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">2：";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("同一IP24小时內只能注册30次。"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl high register-help  col-md-offset-3\" ";
        // line 110
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("方案说明："), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册时需填写验证码。"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">2：";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("同一IP24小时內只能注册10次。"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">3：";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("同一IP1小时內只能注册1个账号。"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎信息设置"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发送欢迎信息"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 130
        echo $this->env->getExtension('topxia_html_twig')->checkboxs("welcome_methods", array("message" => $this->env->getExtension('translator')->trans("站内私信"), "email" => $this->env->getExtension('translator')->trans("电子邮件")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_methods", array()));
        echo "
        <div class=\"help-block\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效"), "html", null, true);
        echo "。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发送欢迎信息"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 140
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_enabled", array("opened" => $this->env->getExtension('translator')->trans("开启"), "closed" => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_enabled", array()));
        echo "
        <div class=\"help-block\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎信以站内私信的方式，发送给新用户。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎信息发送方"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_sender", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通常为这个网站的管理员，请输入用户用户名。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎信息标题"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_title", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎信息内容"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          <div>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注意： 私信长度不能超过1000个字符"), "html", null, true);
        echo "</div>
          <div>";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("变量说明："), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 174
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为接收方用户用户名"), "html", null, true);
        echo "</li>
            <li>";
        // line 175
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为网站名称"), "html", null, true);
        echo "</li>
            <li>";
        // line 176
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为网站的地址"), "html", null, true);
        echo "</li>
          </ul>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("服务条款设置"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是否开启服务条款"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 190
        echo $this->env->getExtension('topxia_html_twig')->radios("user_terms", array("opened" => $this->env->getExtension('translator')->trans("开启"), "closed" => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "user_terms", array()));
        echo "
        <div class=\"help-block\">";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后用户注册时必须同意条款才能注册"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("条款内容"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "user_terms_body", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </fieldset>


  ";
        // line 207
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("magic.username_setting"), false)) {
            // line 208
            echo "    <fieldset>
      <legend>";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称设置"), "html", null, true);
            echo "</legend>
      <div class=\"row form-group\">
          <div class=\"col-md-2 col-md-offset-2 control-label\">
              <label for=\"user_name\">";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名称"), "html", null, true);
            echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" ";
            // line 215
            if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array()), $this->env->getExtension('translator')->trans("学员"))) : ($this->env->getExtension('translator')->trans("学员"))), "html", null, true);
                echo "\" ";
            }
            echo ">
          </div>
      </div>

      <div class=\"alert alert-info deduction text-center\">
        <p><strong> ";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称"), "html", null, true);
            echo "
        </strong></p>
      </div>
    </fieldset> 
  ";
        }
        // line 225
        echo "  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 233,  550 => 232,  544 => 229,  538 => 225,  530 => 220,  518 => 215,  512 => 212,  506 => 209,  503 => 208,  501 => 207,  489 => 200,  483 => 197,  474 => 191,  470 => 190,  464 => 187,  458 => 184,  445 => 176,  439 => 175,  433 => 174,  428 => 172,  424 => 171,  419 => 169,  413 => 166,  404 => 160,  398 => 157,  389 => 151,  385 => 150,  379 => 147,  370 => 141,  366 => 140,  360 => 137,  351 => 131,  347 => 130,  341 => 127,  334 => 123,  323 => 115,  319 => 114,  315 => 113,  311 => 112,  303 => 110,  296 => 106,  292 => 105,  288 => 104,  280 => 102,  273 => 98,  269 => 97,  261 => 95,  250 => 91,  240 => 88,  230 => 85,  220 => 82,  212 => 77,  197 => 67,  191 => 66,  185 => 65,  179 => 64,  174 => 62,  169 => 60,  163 => 57,  154 => 51,  148 => 48,  141 => 44,  134 => 40,  128 => 39,  122 => 38,  118 => 37,  112 => 34,  104 => 31,  96 => 26,  92 => 25,  83 => 23,  75 => 22,  67 => 21,  59 => 20,  52 => 16,  46 => 13,  38 => 8,  35 => 7,  31 => 1,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }
}
