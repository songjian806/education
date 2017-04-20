<?php

/* TopxiaWebBundle::script_boot.html.twig */
class __TwigTemplate_3ce7ec041ad0fc3c22a997f5208f36783a50b2b4e36a61e466434952ae9a9cac extends Twig_Template
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
        echo "<script>
  var app = {};
  app.debug = ";
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetsVersion(), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBasePath", array(), "method"), "html", null, true);
        echo "';
  app.theme = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.themeGlobalScript = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getThemeGlobalScript(), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 9
        echo twig_jsonencode_filter($this->env->getExtension('topxia_web_twig')->getJsPaths());
        echo ";

  app.crontab = '";
        // line 11
        echo $this->env->getExtension('routing')->getPath("common_crontab");
        echo "';
  ";
        // line 12
        $context["crontabNextExecutedTime"] = $this->env->getExtension('topxia_web_twig')->getNextExecutedTime();
        // line 13
        echo "  ";
        if (((isset($context["crontabNextExecutedTime"]) ? $context["crontabNextExecutedTime"] : $this->getContext($context, "crontabNextExecutedTime")) > 0)) {
            // line 14
            echo "    ";
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["crontabNextExecutedTime"]) ? $context["crontabNextExecutedTime"] : $this->getContext($context, "crontabNextExecutedTime")), "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 15
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('routing')->getPath("common_crontab");
                echo "';
    ";
            }
            // line 17
            echo "  ";
        }
        // line 18
        echo "
  var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  var CLOUD_FILE_SERVER = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\"; 

  app.config = ";
        // line 22
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.renren_key", ""))), "cloud" => array("video_player" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player"), "video_player_watermark_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_watermark_plugin"), "video_player_fingerprint_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_fingerprint_plugin")), "loading_img_path" => $this->env->getExtension('assets')->getAssetUrl("assets/img/default/loading.gif")));
        // line 37
        echo ";

  app.arguments = {};
  ";
        // line 40
        if (array_key_exists("script_controller", $context)) {
            // line 41
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, (isset($context["script_controller"]) ? $context["script_controller"] : $this->getContext($context, "script_controller")), "html", null, true);
            echo "';
  ";
        }
        // line 43
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 44
            echo "    app.arguments = ";
            echo twig_jsonencode_filter((isset($context["script_arguments"]) ? $context["script_arguments"] : $this->getContext($context, "script_arguments")));
            echo ";
  ";
        }
        // line 46
        echo "  
  app.scripts = ";
        // line 47
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->exportScripts(), null));
        echo ";
  
  app.uploadUrl = '";
        // line 49
        echo $this->env->getExtension('routing')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 50
        echo $this->env->getExtension('routing')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudSdkCdn = '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.cloud_sdk_cdn"), "html", null, true);
        echo "';
  app.mainScript = '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["script_main"]) ? $context["script_main"] : $this->getContext($context, "script_main")), "html", null, true);
        echo "';
  app.lang = '";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "';
</script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 62
        echo "<script>
  seajs.use(app.mainScript);
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 62,  159 => 60,  155 => 59,  151 => 58,  147 => 57,  143 => 56,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  113 => 47,  110 => 46,  104 => 44,  101 => 43,  95 => 41,  93 => 40,  88 => 37,  86 => 22,  81 => 20,  77 => 18,  74 => 17,  68 => 15,  65 => 14,  62 => 13,  60 => 12,  56 => 11,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  23 => 3,  19 => 1,);
    }
}
