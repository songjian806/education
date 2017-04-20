<?php

/* TopxiaWebBundle:OpenCourse:open-course-info-bar-block.html.twig */
class __TwigTemplate_3a3b84727cde90cd508776af6b1fd2163926704b414430e5b040b6841c9cf0e1 extends Twig_Template
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
        echo "<div class=\"es-section open-course-detail clearfix\">
  <div class=\"open-course-detail-main media hidden-sm hidden-xs\">
    <div class=\"media-left\">
      <img class=\"img-responsive\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "smallPicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "smallPicture", array()), "")) : ("")), "course.png"), "html", null, true);
        echo "\"
           alt=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"media-body\">
      <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</div>
      <div class=\"metas\">
        <span><i class=\"es-icon es-icon-removeredeye mrs\"></i>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "hitNum", array()), "html", null, true);
        echo "</span>
        <span><i class=\"es-icon es-icon-textsms mrs\"></i>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "postNum", array()), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
  <div class=\"open-course-detail-operation\">
    <div class=\"operation-list\">
      <div class=\"operation-img operation-zan\">
        <a href=\"javascript:;\" class=\"js-like-num\" data-like-url=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_like", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
           data-cancel-like-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_unlike", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"><i
              class=\"es-icon es-icon-thumbup\"></i></a>
      </div>
      <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "likeNum", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"operation-list\">
      <div class=\"operation-img  operation-share es-share top\">
        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"es-icon es-icon-share\"></i></a>
        ";
        // line 27
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:OpenCourse:open-course-info-bar-block.html.twig", 27)->display(array_merge($context, array("type" => "open_course")));
        // line 28
        echo "      </div>
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
        echo "
    </div>
    <div class=\"operation-list  no-border\">
      <div class=\"operation-img operation-collection ";
        // line 32
        if ((isset($context["memberFavorite"]) ? $context["memberFavorite"] : null)) {
            echo "active";
        }
        echo "\">
        <a href=\"javascript:;\" class=\"js-favorite-num\"
           data-cancel-favorite-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
           data-favorite-url=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
           data-login-url=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"
           ><i
              class=\"es-icon es-icon-bookmarkoutline\"></i></a>
      </div>
      <span>";
        // line 40
        if ((isset($context["memberFavorite"]) ? $context["memberFavorite"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已收藏"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收藏"), "html", null, true);
        }
        echo "</span>
    </div>
    <div class=\"operation-list hidden-sm hidden-xs\">
      <div class=\"operation-img  operation-code\">
        <a class=\"js-qrcode qrcode-popover top\"> 
          <i class=\"es-icon es-icon-phone1\"></i>
          <div class=\"qrcode-content\">
            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('endroid_qrcode')->qrcodeDataUriFunction($this->env->getExtension('routing')->getUrl("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())))), "html", null, true);
        echo "\" alt=\"\">
            <span class=\"gray-darker text-center text-sm\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
        echo "<br />
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
        echo "</span>
          </div>
        </a>
      </div>
      ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码"), "html", null, true);
        echo "
    </div>
   </div>
  ";
        // line 56
        if ((((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 57
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-setting hidden-xs hidden-sm\" title=\"课程管理\">
      <i class=\"es-icon es-icon-setting\"></i>
    </a>
  ";
        }
        // line 61
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:open-course-info-bar-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 61,  141 => 57,  139 => 56,  133 => 53,  126 => 49,  122 => 48,  118 => 47,  104 => 40,  97 => 36,  93 => 35,  89 => 34,  82 => 32,  76 => 29,  73 => 28,  71 => 27,  63 => 22,  57 => 19,  53 => 18,  43 => 11,  39 => 10,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
