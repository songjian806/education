<?php

/* TopxiaWebBundle:Player:show.html.twig */
class __TwigTemplate_773891f39572746772efeef8a111953de07161a83b5898582791937ef2f22d42 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Player:show.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />
    <meta content=\"black\" name=\"apple-mobile-web-app-status-bar-style\" />
    <meta content=\"telephone=no\" name=\"format-detection\" />
    <meta content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />

    ";
        // line 14
        $this->loadTemplate("TopxiaWebBundle:Player:stylesheet.html.twig", "TopxiaWebBundle:Player:show.html.twig", 14)->display($context);
        // line 15
        echo "  </head>
  <body style=\"overflow:hidden;border:0px;\">
    ";
        // line 17
        if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
            // line 18
            echo "      ";
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), array(0 => "ppt", 1 => "document", 2 => "video"))) && ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array()) == "error"))) {
                // line 19
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("转码失败，请联系管理员。"), "html", null, true);
                echo "</div>
      ";
            } elseif (((($this->getAttribute(            // line 20
(isset($context["file"]) ? $context["file"] : null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), array(0 => "ppt", 1 => "document", 2 => "video"))) && ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array()) != "success"))) {
                // line 21
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在转码，请稍后尝试。"), "html", null, true);
                echo "</div>
      ";
            } else {
                // line 23
                echo "        <div style=\"position:absolute;top:0;bottom:0;left:0;right:0;text-align:center;\">
          <div id=\"lesson-video-content\"
          data-user-id=\"";
                // line 25
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)), "html", null, true);
                echo "\"
          data-user-name=\"";
                // line 26
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), "")) : ("")), "html", null, true);
                echo "\"
          data-file-global-id=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "globalId", array()), "html", null, true);
                echo "\"
          data-file-id=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()), "html", null, true);
                echo "\"
          data-file-type=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), "html", null, true);
                echo "\"
          data-url=\"";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\"
          data-video-header-length=\"";
                // line 31
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "videoHeaderLength", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "videoHeaderLength", array()), 0)) : (0)), "html", null, true);
                echo "\"
          data-enable-playback-rates=\"";
                // line 32
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("storage.enable_playback_rates"), false), "html", null, true);
                echo "\"
          data-player=\"";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["player"]) ? $context["player"] : null), "html", null, true);
                echo "\"
          data-agentInWhiteList=\"";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["agentInWhiteList"]) ? $context["agentInWhiteList"] : null), "html", null, true);
                echo "\"
          ";
                // line 35
                if ((( !(($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "hasVideoWatermark", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "hasVideoWatermark", array()), 0)) : (0)) && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0)) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
                    // line 36
                    echo "            data-watermark=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFurl($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null), "html", null, true);
                    echo "\"
          ";
                }
                // line 38
                echo "          ";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key")) {
                    // line 39
                    echo "            data-access-key=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key"), "html", null, true);
                    echo "\"
          ";
                }
                // line 41
                echo "          ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                    // line 42
                    echo "            data-fingerprint=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
                    echo "\"
            data-fingerprint-src=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                    echo "\"
            data-fingerprint-time=\"";
                    // line 44
                    echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint_time"), 0.5) * 1000), "html", null, true);
                    echo "\"
          ";
                }
                // line 46
                echo "          ";
                if (((isset($context["player"]) ? $context["player"] : null) == "balloon-cloud-video-player")) {
                    // line 47
                    echo "            class=\"ballon-video-player\"
          ";
                } else {
                    // line 49
                    echo "            class=\"";
                    echo twig_escape_filter($this->env, (isset($context["player"]) ? $context["player"] : null), "html", null, true);
                    echo "\"
          ";
                }
                // line 51
                echo "          ";
                if (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "hideQuestion", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "hideQuestion", array()), 0)) : (0)) == 0)) {
                    // line 52
                    echo "            data-markerurl=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_markers_show", array("mediaId" => $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()))), "html", null, true);
                    echo "\"
          ";
                }
                // line 54
                echo "            data-timelimit=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "watchTimeLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "watchTimeLimit", array()), "")) : ("")), "html", null, true);
                echo "\"
            data-starttime=\"";
                // line 55
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "starttime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "starttime", array()), "")) : ("")), "html", null, true);
                echo "\"
            data-lesson-id=\"";
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "lessonId", array()), 0)) : (0)), "html", null, true);
                echo "\"
            style=\"height:100%\"
          ></div>
        </div>

        ";
                // line 61
                $context["script_controller"] = "player/show";
                // line 62
                echo "
        ";
                // line 63
                $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle:Player:show.html.twig", 63)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
                // line 64
                echo "      ";
            }
            // line 65
            echo "    ";
        } else {
            // line 66
            echo "      <div class=\"\"><br>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该浏览器不支持云视频播放，请前往"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("mobile");
            echo "\" target=\"parent\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载App"), "html", null, true);
            echo "</a>。</div>
    ";
        }
        // line 68
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Player:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 68,  192 => 66,  189 => 65,  186 => 64,  184 => 63,  181 => 62,  179 => 61,  171 => 56,  167 => 55,  162 => 54,  156 => 52,  153 => 51,  147 => 49,  143 => 47,  140 => 46,  135 => 44,  131 => 43,  126 => 42,  123 => 41,  117 => 39,  114 => 38,  108 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 23,  56 => 21,  54 => 20,  49 => 19,  46 => 18,  44 => 17,  40 => 15,  38 => 14,  33 => 12,  21 => 2,  19 => 1,);
    }
}
