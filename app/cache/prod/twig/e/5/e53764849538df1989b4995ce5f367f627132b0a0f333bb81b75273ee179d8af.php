<?php

/* TopxiaWebBundle:User:header-block.html.twig */
class __TwigTemplate_e53764849538df1989b4995ce5f367f627132b0a0f333bb81b75273ee179d8af extends Twig_Template
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
        echo "<div class=\"user-center-header\" data-href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" data-sharpness=\"40\">
  <div class=\"container clearfix\">
    <div class=\"user-avatar\">
      <div class=\"avatar-wrap\">
        <img class=\"avatar-lg\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
        ";
        // line 6
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
            // line 7
            echo "          <span class=\"icon-user-status icon-md\"><i class=\"es-icon es-icon-school\"></i></span>
        ";
        }
        // line 9
        echo "      </div>
      <div class=\"name\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
      </div>
      <div class=\"position\">
        <span class=\"mrm\">";
        // line 14
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无头衔"), "html", null, true);
        }
        echo "</span>
        ";
        // line 15
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weibo", array()) && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isWeiboPublic", array()))) {
            // line 16
            echo "          <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weibo", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-weibo\"></i></a>
        ";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "site", array())) {
            // line 19
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "site", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-link\"></i></a>
        ";
        }
        // line 21
        echo "        ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "qq", array()) && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isQQPublic", array()))) {
            // line 22
            echo "          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "qq", array()), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-qq\"></i></a>
        ";
        }
        // line 24
        echo "        ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weixin", array()) && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isWeixinPublic", array()))) {
            // line 25
            echo "          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weixin", array()), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
        ";
        }
        // line 27
        echo "      </div>
      <div class=\"mates\">
        <span class=\"mrm\">";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("follower", $context)) ? (_twig_default_filter((isset($context["follower"]) ? $context["follower"] : null), 0)) : (0)), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("粉丝"), "html", null, true);
        echo "<span class=\"mlm mrm\">｜</span><span class=\"mrm\">";
        echo twig_escape_filter($this->env, ((array_key_exists("following", $context)) ? (_twig_default_filter((isset($context["following"]) ? $context["following"] : null), 0)) : (0)), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关注"), "html", null, true);
        echo "
      </div>
      ";
        // line 31
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())))) {
            // line 32
            echo "        <div class=\"actions\">
          <a class=\"btn btn-primary follow-btn mrl\" href=\"javascript:;\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关注"), "html", null, true);
            echo "</a>
          <a class=\"btn btn-default unfollow-btn mrl\" href=\"javascript:;\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关注"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-ghost-white\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "</button>
        </div>
      ";
        }
        // line 38
        echo "    </div>
    <div class=\"user-about hidden-sm hidden-xs\">
      <div class=\"user-about-content\">
        ";
        // line 41
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "signature", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "signature", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无签名"), "html", null, true);
        }
        // line 42
        echo "      </div>
    </div>
  </div>
  <div class=\"mask\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:header-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  143 => 41,  138 => 38,  130 => 35,  120 => 34,  110 => 33,  107 => 32,  105 => 31,  94 => 29,  90 => 27,  84 => 25,  81 => 24,  75 => 22,  72 => 21,  66 => 19,  63 => 18,  57 => 16,  55 => 15,  47 => 14,  41 => 11,  37 => 9,  33 => 7,  31 => 6,  27 => 5,  19 => 1,);
    }
}
