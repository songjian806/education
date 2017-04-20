<?php

/* TopxiaAdminBundle:System:mobile.setting.html.twig */
class __TwigTemplate_14a0af0ac62b873f71226876fc713479f6e44c05ec1c54546816e2b3d1645ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_mobile_settings";
        // line 5
        $context["script_controller"] = "setting/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>
#mobile-splash1-container img ,
#mobile-splash2-container img ,
#mobile-splash3-container img ,
#mobile-splash4-container img ,
#mobile-splash5-container img ,
#mobile-logo-container img ,
#site-appcover-container img,
#site-applogo-container img
{max-width: 80%; margin-bottom: 10px;}
</style>

";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是否开启客户端"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 30
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => $this->env->getExtension('translator')->trans("开启"), 0 => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "enabled", array()));
        echo "
      <div class=\"help-block\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后，网站首页顶部导航会出现客户端入口"), "html", null, true);
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_operation_mobile");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("常规设置点这里"), "html", null, true);
        echo "</a></div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网校简介"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\" data-image-upload-url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "about", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此简介将显示在移动客户端的\"关于网校"), "html", null, true);
        echo "\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网校LOGO"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 50
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" data-upload-token=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公告"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" class=\"form-control\" name=\"notice\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "notice", array()), "html", null, true);
        echo "\">
      <p class=\"help-block\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("将会在手机端banner下面显示网校的公告，建议用简练概括的语言描述，字数在20字以下。"), "html", null, true);
        echo "</p>
    </div>
  </div>

";
        // line 68
        if ((((isset($context["mobileCode"]) ? $context["mobileCode"] : null) != "edusoho") && ((isset($context["mobileCode"]) ? $context["mobileCode"] : null) != "edusohov3"))) {
            // line 69
            echo "  <fieldset>
    <legend>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("定制APP设置项"), "html", null, true);
            echo "</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appname\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("APP名称"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appname\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()), "html", null, true);
            echo "\" >
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appabout\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("APP简介"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appabout\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appabout", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"applogo\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("APP图标"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">

         <div id=\"site-applogo-container\" class=\"mbl\">";
            // line 95
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-applogo-upload\" data-upload-token=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "applogo"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-applogo-remove\" type=\"button\"
          data-url=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "applogo"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
          <p class=\"help-block\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。推荐尺寸 120*120。"), "html", null, true);
            echo "</p>
           <input type=\"hidden\" name=\"applogo\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appcover\">";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("APP封面"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
         <div id=\"site-appcover-container\" class=\"mbl\">";
            // line 110
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-appcover-upload\" data-upload-token=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "appcover"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-appcover-remove\" type=\"button\"
          data-url=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "appcover"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
          <p class=\"help-block\">";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。推荐尺寸 225*400。"), "html", null, true);
            echo "</p>
          <input type=\"hidden\" name=\"appcover\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array()), "html", null, true);
            echo "\">
        </div>

      </div>
  </fieldset>
";
        }
        // line 122
        echo "
 <fieldset>
  <legend>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置启动图"), "html", null, true);
        echo "</legend>
  <div class=\"help-block\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。"), "html", null, true);
        echo "</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("启动图1"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 131
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" data-upload-token=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件"), "html", null, true);
        echo "。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("启动图2"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 144
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" data-upload-token=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("启动图3"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 157
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" data-upload-token=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("启动图4"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 170
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" data-upload-token=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("启动图5"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 183
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" data-upload-token=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>



  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 199,  544 => 195,  533 => 187,  529 => 186,  519 => 185,  511 => 184,  503 => 183,  497 => 180,  488 => 174,  484 => 173,  474 => 172,  466 => 171,  458 => 170,  452 => 167,  443 => 161,  439 => 160,  429 => 159,  421 => 158,  413 => 157,  407 => 154,  398 => 148,  394 => 147,  384 => 146,  376 => 145,  368 => 144,  362 => 141,  353 => 135,  349 => 134,  339 => 133,  331 => 132,  323 => 131,  317 => 128,  311 => 125,  307 => 124,  303 => 122,  294 => 116,  290 => 115,  280 => 114,  273 => 112,  269 => 111,  261 => 110,  255 => 107,  246 => 101,  242 => 100,  232 => 99,  225 => 97,  221 => 96,  213 => 95,  206 => 91,  197 => 85,  191 => 82,  182 => 76,  176 => 73,  170 => 70,  167 => 69,  165 => 68,  158 => 64,  154 => 63,  148 => 60,  139 => 54,  135 => 53,  125 => 52,  117 => 51,  109 => 50,  103 => 47,  94 => 41,  88 => 40,  82 => 37,  69 => 31,  65 => 30,  59 => 27,  50 => 21,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
