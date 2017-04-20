<?php

/* TopxiaWebBundle:Group:group-header.html.twig */
class __TwigTemplate_ace436ed1a345d94c99097ed04a45bb285a2715d523bc7e4d50cf111cd5596ce extends Twig_Template
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
        $context["groupNav"] = ((array_key_exists("groupNav", $context)) ? (_twig_default_filter((isset($context["groupNav"]) ? $context["groupNav"] : null), null)) : (null));
        // line 2
        echo "<ol class=\"breadcrumb breadcrumb-o\" style=\"margin-top:-18px\">
  <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "name", array()), $this->env->getExtension('translator')->trans("首页"))) : ($this->env->getExtension('translator')->trans("首页"))), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name", array()), $this->env->getExtension('translator')->trans("小组频道"))) : ($this->env->getExtension('translator')->trans("小组频道"))), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "</a></li>
</ol>
<div class=\"group-header\" style=\"background:url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "backgroundLogo", array()), "background_group.jpg"), "html", null, true);
        echo ");background-repeat: no-repeat;background-size: 100% 100%;\">
  <div class=\"media\">
    <div class=\"media-left\">
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "logo", array()), "group.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "\" class=\"avatar-square-md\" >
      </a>
    </div>
    <div class=\"media-body\">
      <h2 class=\"media-heading\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "
        ";
        // line 17
        if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 0)) {
            // line 18
            echo "          <a id=\"add-btn\" class=\"btn btn-success btn-sm mlm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_join", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入小组"), "html", null, true);
            echo "</a>
        ";
        }
        // line 20
        echo "        ";
        if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 1) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 21
            echo "          <a id=\"exit-btn\" class=\"btn btn-default btn-sm mlm\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_exit", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出小组"), "html", null, true);
            echo "</a>
        ";
        }
        // line 23
        echo "
      </h2>
      <div class=\"media-metas\">

        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%memberNum%个成员", array("%memberNum%" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "memberNum", array()))), "html", null, true);
        echo "
        <span class=\"mlm\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%threadNum%个话题", array("%threadNum%" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "threadNum", array()))), "html", null, true);
        echo "</span>
        <span class=\"fsn mlm\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建时间：%createdTime%", array("%createdTime%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "createdTime", array()), "Y-m-d"))), "html", null, true);
        echo "</span>

      </div>
    </div>
  </div>
  <div class=\"image-overlay image-overlay-o\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  98 => 28,  94 => 27,  88 => 23,  80 => 21,  77 => 20,  69 => 18,  67 => 17,  63 => 16,  53 => 11,  49 => 10,  43 => 7,  36 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
