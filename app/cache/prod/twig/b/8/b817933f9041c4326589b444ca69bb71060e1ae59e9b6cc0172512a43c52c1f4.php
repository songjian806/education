<?php

/* TopxiaWebBundle:Mobile:index.html.twig */
class __TwigTemplate_b817933f9041c4326589b444ca69bb71060e1ae59e9b6cc0172512a43c52c1f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Mobile:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "mobile/index";
        // line 4
        $context["isEsApp"] = ((isset($context["mobileCode"]) ? $context["mobileCode"] : null) == "edusohov3");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移动学习"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_full_content($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"es-mobile\">
    <div class=\"js-mobile-item mobile-first\">
      <div class=\"container\">
        <img class=\"img-one hidden-xs\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_black.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"img-two hidden-xs\">
          <img class=\"img-two-bg\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_white_bg.png"), "html", null, true);
        echo "\" alt=\"\">
          ";
        // line 15
        if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.appcover")) {
            // line 16
            echo "          <img class=\"img-two-content\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("mobile.appcover")), "html", null, true);
            echo "\" alt=\"\">
          ";
        } else {
            // line 18
            echo "          <img class=\"img-two-content\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_white_content.png"), "html", null, true);
            echo "\" alt=\"\">
          ";
        }
        // line 20
        echo "        </div>
        <div class=\"mobile-content\">
          <div class=\"title\">
            ";
        // line 23
        if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.applogo")) {
            // line 24
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("mobile.applogo")), "html", null, true);
            echo "\" alt=\"\">
            ";
        } else {
            // line 26
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/app_logo.png"), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 28
        echo "            
            ";
        // line 29
        if ( !(isset($context["isEsApp"]) ? $context["isEsApp"] : null)) {
            // line 30
            echo "              ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()), $this->env->getExtension('translator')->trans("阔知学堂"))) : ($this->env->getExtension('translator')->trans("阔知学堂"))), "html", null, true);
            echo "
            ";
        } else {
            // line 32
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("阔知学堂"), "html", null, true);
            echo "
            ";
        }
        // line 34
        echo "          </div>
          <div class=\"subtitle\">
            ";
        // line 36
        if ( !(isset($context["isEsApp"]) ? $context["isEsApp"] : null)) {
            // line 37
            echo "              ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appabout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appabout", array()), $this->env->getExtension('translator')->trans(" 将学校装进口袋，移动学习，随时随地。"))) : ($this->env->getExtension('translator')->trans(" 将学校装进口袋，移动学习，随时随地。"))), "html", null, true);
            echo "
            ";
        } else {
            // line 39
            echo "               ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("将学校装进口袋，移动学习，随时随地。"), "html", null, true);
            echo "
            ";
        }
        // line 41
        echo "          </div>
          <a class=\"btn-mobile\" href=\"javascript:;\" data-url=\".mobile-second\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载APP"), "html", null, true);
        echo "<i class=\"es-icon es-icon-filedownload\"></i></a>

          ";
        // line 44
        if ((isset($context["isEsApp"]) ? $context["isEsApp"] : null)) {
            // line 45
            echo "          <a class=\"btn-mobile\" href=\"javascript:;\" data-url=\".mobile-third\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录网校"), "html", null, true);
            echo "<i class=\"es-icon es-icon-phone1\"></i></a>
          ";
        }
        // line 47
        echo "        </div>
      </div>
    </div>
    <div class=\" mobile-second\">
      <div class=\"container\">
        <div class=\"step\">
          ";
        // line 53
        if (((isset($context["mobileCode"]) ? $context["mobileCode"] : null) == "edusohov3")) {
            echo "<span class=\"member\">1</span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第一步:"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫描二维码，下载手机APP。"), "html", null, true);
        echo "
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-center\">
            <img class=\"qrcode\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_download_qrcode", array("code" => (isset($context["mobileCode"]) ? $context["mobileCode"] : null))), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"col-sm-6 text-center\">
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_download", array("client" => "android", "code" => (isset($context["mobileCode"]) ? $context["mobileCode"] : null))), "html", null, true);
        echo "\" class=\"btn-android\"><i class='es-icon es-icon-android'></i>Android ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("客户端"), "html", null, true);
        echo "</a>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_download", array("client" => "iphone", "code" => (isset($context["mobileCode"]) ? $context["mobileCode"] : null))), "html", null, true);
        echo "\" class=\"btn-apple\"><i class='es-icon es-icon-apple'></i>iPhone";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("客户端"), "html", null, true);
        echo "</a>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 66
        if ((isset($context["isEsApp"]) ? $context["isEsApp"] : null)) {
            // line 67
            echo "    <div class=\"js-mobile-item mobile-third\">
      <div class=\"container\">
        <div class=\"step\">
          <span class=\"member\">2</span>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第二步: 打开阔知学堂APP，扫描网校二维码。"), "html", null, true);
            echo "
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-center\">
            <img class=\"thumb\" src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_gui.png"), "html", null, true);
            echo "\" alt=\"\">
          </div>
          <div class=\"col-sm-6 text-center\">
            <div class=\"qrcode\">
              <p>";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫一扫登录客户端"), "html", null, true);
            echo "</p>
              <img src=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("topxia_mobile_qrcode");
            echo "\" alt=\"\">
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        // line 86
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Mobile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 86,  210 => 79,  206 => 78,  199 => 74,  192 => 70,  187 => 67,  185 => 66,  175 => 61,  169 => 60,  163 => 57,  151 => 53,  143 => 47,  137 => 45,  135 => 44,  130 => 42,  127 => 41,  121 => 39,  115 => 37,  113 => 36,  109 => 34,  103 => 32,  97 => 30,  95 => 29,  92 => 28,  86 => 26,  80 => 24,  78 => 23,  73 => 20,  67 => 18,  61 => 16,  59 => 15,  55 => 14,  50 => 12,  45 => 9,  42 => 8,  34 => 6,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
