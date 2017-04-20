<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_3c15261669f304a6716f20fb56702b19446fdf27e0642cdeda97dcc4e623d7bc extends Twig_Template
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
        echo "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>
        <ul class=\"nav navbar-nav\">
          ";
        // line 16
        $context["navigations"] = $this->env->getExtension('topxia_data_twig')->getData("NavigationsTree", array());
        // line 17
        echo "          ";
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 17)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => true)));
        // line 18
        echo "        </ul>
      </div>
    </div>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
      ";
        // line 22
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 23
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath(("../" . $this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), ""), "html", null, true);
            echo "\">
      ";
        } else {
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "CJEdu"), "html", null, true);
            echo "
      ";
        }
        // line 27
        echo "    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 31
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 31)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => false)));
        // line 32
        echo "    </ul>
    <div class=\"navbar-user ";
        // line 33
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
      <ul class=\"nav user-nav\">
        ";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 36
            echo "        <li class=\"user-avatar-li nav-hover\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li role=\"presentation\" class=\"dropdown-header\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
            <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人主页"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人设置"), "html", null, true);
            echo "</a></li>
            <li class=\"hidden-lg\">
              <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
                <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 46
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
            }
            // line 47
            echo "              </a>
            </li>
            <li><a href=\"";
            // line 49
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('routing')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('routing')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("账户中心"), "html", null, true);
            echo "</a></li>

            ";
            // line 51
            if ($this->env->getExtension('permission.permission_extension')->hasPermission("admin")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理后台"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 53
            echo "
            <li class=\"hidden-lg\"><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
            echo "</a></li>
            <li class=\"hidden-lg\"><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"es-icon es-icon-power\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出登录"), "html", null, true);
            echo "</a></li>
          </ul>
        </li>
        <li class=\"visible-lg\">
          <a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
            ";
            // line 61
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 62
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
                echo "
            ";
            } else {
                // line 64
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
                echo "
            ";
            }
            // line 66
            echo "          </a>
        </li>
        <li class=\"visible-lg nav-hover\">

          ";
            // line 70
            if (($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0))) {
                // line 71
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } elseif (( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 72
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 73
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } else {
                // line 75
                echo "            <a><i class=\"es-icon es-icon-mail\"></i></a>
          ";
            }
            // line 77
            echo "
          <ul class=\"dropdown-menu\" role=\"menu\">
            ";
            // line 79
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 80
                echo "              <li>
                <a href=\"";
                // line 81
                echo $this->env->getExtension('routing')->getPath("notification");
                echo "\">
                  <span class=\"pull-right num\">";
                // line 82
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                  <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
                echo "
                </a>
              </li>
            ";
            }
            // line 87
            echo "            <li>
              <a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\">
                <span class=\"pull-right num\">";
            // line 89
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                <i class=\"es-icon es-icon-mail\"></i>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "
              </a>
            </li>
          </ul>
        </li>
        ";
        } else {
            // line 96
            echo "        <li class=\"user-avatar-li nav-hover visible-xs\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</a></li>
          </ul>
        </li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a></li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 108
        echo "        ";
        // line 109
        echo "      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 112,  312 => 110,  309 => 109,  307 => 108,  300 => 106,  294 => 105,  286 => 102,  280 => 101,  274 => 98,  270 => 96,  261 => 90,  255 => 89,  251 => 88,  248 => 87,  241 => 83,  235 => 82,  231 => 81,  228 => 80,  226 => 79,  222 => 77,  218 => 75,  214 => 73,  212 => 72,  209 => 71,  207 => 70,  201 => 66,  195 => 64,  189 => 62,  187 => 61,  183 => 60,  174 => 56,  164 => 55,  154 => 54,  151 => 53,  142 => 51,  131 => 49,  127 => 47,  121 => 46,  117 => 45,  110 => 43,  104 => 42,  100 => 41,  94 => 38,  90 => 36,  88 => 35,  81 => 33,  78 => 32,  76 => 31,  70 => 27,  64 => 25,  58 => 23,  56 => 22,  52 => 21,  47 => 18,  44 => 17,  42 => 16,  34 => 11,  29 => 9,  19 => 1,);
    }
}
