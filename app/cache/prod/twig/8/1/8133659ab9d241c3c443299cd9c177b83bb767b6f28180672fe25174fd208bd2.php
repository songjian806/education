<?php

/* TopxiaAdminBundle:EduCloud:my-cloud.html.twig */
class __TwigTemplate_8133659ab9d241c3c443299cd9c177b83bb767b6f28180672fe25174fd208bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $context["menu"] = "admin_my_cloud_overview";
        // line 4
        $context["submenu"] = "service-information";
        // line 5
        $context["script_controller"] = "app/my-cloud";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery/morris/0.5.0/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "  
      ";
        // line 13
        if ((((array_key_exists("locked", $context)) ? (_twig_default_filter((isset($context["locked"]) ? $context["locked"] : null), 0)) : (0)) == 1)) {
            // line 14
            echo "        <div class=\"alert alert-warning\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的教育云服务已被锁定，请联系客服人员："), "html", null, true);
            echo "0571-86819929。</div>
      ";
        }
        // line 16
        echo "
      ";
        // line 17
        if ((((array_key_exists("enabled", $context)) ? (_twig_default_filter((isset($context["enabled"]) ? $context["enabled"] : null), 1)) : (1)) == 0)) {
            // line 18
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的教育云服务已被禁用，请联系客服人员："), "html", null, true);
            echo "0571-86819929。</div>
      ";
        }
        // line 20
        echo "
      ";
        // line 21
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 22
            echo "        ";
            if ( !(null === (isset($context["trialhtml"]) ? $context["trialhtml"] : null))) {
                // line 23
                echo "          ";
                echo (isset($context["trialhtml"]) ? $context["trialhtml"] : null);
                echo "
        ";
            }
            // line 25
            echo "      ";
        } else {
            // line 26
            echo "        <div class=\"eduyun-main\">
        ";
            // line 27
            if ((((array_key_exists("enabled", $context)) ? (_twig_default_filter((isset($context["enabled"]) ? $context["enabled"] : null), 1)) : (1)) == 0)) {
                // line 28
                echo "          <div class=\"mask\"></div>
        ";
            }
            // line 30
            echo "
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"edu-user\">
              <div class=\"pull-left\">
                <img class=\"edu-user-img\" ";
            // line 35
            if (((($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "avatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "avatar", array()), "")) : ("")) == "")) {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("user_avatar.png"), "html", null, true);
                echo "\" ";
            } else {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "avatar", array()), "html", null, true);
                echo "\" ";
            }
            echo ">
              </div>
              <div class=\"edu-user-info\">
                <div class=\"detail\">
                  ";
            // line 39
            if (((($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array()), "")) : ("")) == "")) {
                // line 40
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您尚未绑定EduSoho开放云平台"), "html", null, true);
                echo "&nbsp;
                    <a href=\"http://open.edusoho.com/article/1\" target=\"_blank\"  title=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("什么是EduSoho开放云平台？"), "html", null, true);
                echo "\" style=\"color: #999;\"> <i class=\"glyphicon glyphicon-question-sign\"></i></a>
                  ";
            } else {
                // line 43
                echo "                    <div>Hi,<span class=\"name\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array()), "")) : ("")), "html", null, true);
                echo "</span></div>
                    <hr style=\"margin: 10px 0\">
                    <div>";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ES云平台账户名:"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "email", array()), "")) : ("")), "html", null, true);
                echo "</div>
                  ";
            }
            // line 47
            echo "                </div>
              </div>
            </div>
          </div>
        </div>

          <!--账户余额-->
          ";
            // line 54
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-account.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 54)->display($context);
            // line 55
            echo "
          
          ";
            // line 70
            echo "

          <div class=\"page-header clearfix\">
            <h1 class=\"pull-left\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("产品与服务"), "html", null, true);
            echo "</h1>
          </div>

            <!--服务动态内容 --> 
            <!-- <div class=\"edu-service row\"> -->

              <!--云视频信息 -->
              ";
            // line 81
            echo "
              <!-- 云直播信息 -->
              ";
            // line 84
            echo "
            <!-- </div> -->


            <!--服务云视频-->
            <!-- <div class=\"edu-service row\"> -->
              <!-- 云短信信息 -->
              ";
            // line 92
            echo "
            <!-- </div> -->
          <div class=\"edu-service row\">
            <!-- 云视频包状态 -->
            ";
            // line 96
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-storage.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 96)->display($context);
            // line 97
            echo "            <!-- <div class=\"col-md-6\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h3 class=\"panel-title\">云视频包状态</h3>
                </div>
                <div class=\"data-tab\" style=\"height: 250px;\"></div>
              </div>
            </div> -->

            <!-- 云视频使用情况（最近七个月） -->
            ";
            // line 107
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-storage-chart.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 107)->display($context);
            // line 108
            echo "
            <!-- 云直播信息 -->
            ";
            // line 110
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-live.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 110)->display($context);
            // line 111
            echo "
            <!-- 参与直播人数（最近七天） -->
            ";
            // line 113
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-live-chart.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 113)->display($context);
            // line 114
            echo "
            <!-- 云短信信息 -->
            ";
            // line 116
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-sms.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 116)->display($context);
            // line 117
            echo "
            <!-- 云短信使用情况（最近七天） -->
            ";
            // line 119
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-sms-chart.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 119)->display($context);
            // line 120
            echo "
            <!-- 云邮件使用情况（最近七天） -->
            ";
            // line 123
            echo "
            <!-- IM信息） -->
            ";
            // line 125
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-im.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 125)->display($context);
            // line 126
            echo "            <!-- IM使用情况（最近七天） -->
            ";
            // line 127
            $this->loadTemplate("TopxiaAdminBundle:EduCloud:cloud-im-chart.html.twig", "TopxiaAdminBundle:EduCloud:my-cloud.html.twig", 127)->display($context);
            // line 128
            echo "          </div>
          
        </div>
      ";
        }
        // line 132
        echo "
      

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:my-cloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 132,  252 => 128,  250 => 127,  247 => 126,  245 => 125,  241 => 123,  237 => 120,  235 => 119,  231 => 117,  229 => 116,  225 => 114,  223 => 113,  219 => 111,  217 => 110,  213 => 108,  211 => 107,  199 => 97,  197 => 96,  191 => 92,  182 => 84,  178 => 81,  168 => 73,  163 => 70,  159 => 55,  157 => 54,  148 => 47,  141 => 45,  135 => 43,  130 => 41,  125 => 40,  123 => 39,  108 => 35,  101 => 30,  97 => 28,  95 => 27,  92 => 26,  89 => 25,  83 => 23,  80 => 22,  78 => 21,  75 => 20,  69 => 18,  67 => 17,  64 => 16,  58 => 14,  56 => 13,  53 => 12,  50 => 11,  44 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
