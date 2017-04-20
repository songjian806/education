<?php

/* TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig */
class __TwigTemplate_f78897273a93aef02698a04b3b7dbbe5bf1bb47eac64649d0a06e9ac27395239 extends Twig_Template
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
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode", "local") == "cloud")) {
            // line 2
            echo "<div class=\"video-quality-switcher\">
  <div>
    <label>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频转码类型："), "html", null, true);
            echo "</label>
    <span class=\"quality-switcher-bar\">
      <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
    </span>
  </div>

  <div class=\"quality-switcher-control\" style='display:none'>
    <div class=\"video-quality radios\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("画质："), "html", null, true);
            echo "
        ";
            // line 13
            echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => $this->env->getExtension('translator')->trans("流畅 <span class=\"text-muted\">(适合PPT讲解)</span>"), "normal" => $this->env->getExtension('translator')->trans("标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>"), "high" => $this->env->getExtension('translator')->trans("精细 <span class=\"text-muted\">(适合动态电影)</span>")), $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_quality", "normal"));
            echo "
    </div>

    <div class=\"audio-quality radios\">
      ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音质："), "html", null, true);
            echo "
        ";
            // line 18
            echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => $this->env->getExtension('translator')->trans("流畅"), "normal" => $this->env->getExtension('translator')->trans("标准"), "high" => $this->env->getExtension('translator')->trans("高品")), $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_audio_quality", "normal"));
            echo "
    </div>
    <input type=\"hidden\" name=\"support_mobile\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("storage.support_mobile", 0), "html", null, true);
            echo "\" />
    <div class=\"quality-actions\">
      <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定"), "html", null, true);
            echo "</a>
      <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</a>
    </div>
  </div>
</div>
<script>app.load('topxiawebbundle/controller/cloud-file/cloud-video-quality-switcher')</script>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  61 => 22,  56 => 20,  51 => 18,  47 => 17,  40 => 13,  36 => 12,  25 => 4,  21 => 2,  19 => 1,);
    }
}
