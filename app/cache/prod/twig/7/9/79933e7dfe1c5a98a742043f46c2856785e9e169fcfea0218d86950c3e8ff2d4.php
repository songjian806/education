<?php

/* TopxiaWebBundle:Thread:create.html.twig */
class __TwigTemplate_79933e7dfe1c5a98a742043f46c2856785e9e169fcfea0218d86950c3e8ff2d4 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread:create.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 4
        $context["isUpdate"] = (((isset($context["thread"]) ? $context["thread"] : null)) ? (1) : (0));
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig", "TopxiaWebBundle:Thread:create.html.twig", 6)->display(array_merge($context, array("target" => (isset($context["target"]) ? $context["target"] : null), "thread" => (isset($context["thread"]) ? $context["thread"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "isUpdate" => (isset($context["isUpdate"]) ? $context["isUpdate"] : null))));
        // line 7
        echo "
<form id=\"thread-form\" class=\"form-horizontal\" method=\"post\" 
  ";
        // line 9
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 10
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_update"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 12
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_create"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
            echo "\"
    ";
        }
        // line 14
        echo "  >
  
  ";
        // line 16
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 17
            echo "    <div class=\"form-group\">
      <div class=\"col-md-12\">
        <input type=\"type\" id=\"title\" class=\"form-control\" placeholder=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问题"), "html", null, true);
            echo "\" ata-display=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问题"), "html", null, true);
            echo "\" name= \"title\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
    </div>
  ";
        }
        // line 23
        echo "  
  ";
        // line 24
        if (((isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 25
            echo "    <div class=\"form-group\">
        ";
            // line 27
            echo "      <div class=\"col-md-12\">
        <input type=\"type\" id=\"title\" class=\"form-control\" placeholder=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题标题"), "html", null, true);
            echo "\" ata-display=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题标题"), "html", null, true);
            echo "\" name= \"title\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
    </div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (((isset($context["type"]) ? $context["type"] : null) == "event")) {
            // line 34
            echo "    <div class=\"form-group\">
        <label for=\"title\" class=\"col-sm-2 control-label\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动标题"), "html", null, true);
            echo "</label>
      <div class=\"col-sm-7\">
        <input type=\"type\" id=\"title\" class=\"form-control\" placeholder=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动标题"), "html", null, true);
            echo "\" ata-display=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
            echo "\" name= \"title\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
    </div>

    <div class=\"js-event-content\" ";
            // line 41
            if (((isset($context["type"]) ? $context["type"] : null) != "event")) {
                echo "style=\"display:none;\" ";
            }
            echo ">
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"startTime\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动时间"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"startTime\" class=\"form-control\" placeholder=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动开始时间"), "html", null, true);
            echo "\" name=\"startTime\" value=\"";
            if ((($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array()), null)) : (null))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array()), "Y-m-d H:i"), "html", null, true);
            }
            echo "\">
          </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"location\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动地点"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"location\" class=\"form-control\" placeholder=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动地点"), "html", null, true);
            echo "\" name= \"location\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "location", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "location", array()), "")) : ("")), "html", null, true);
            echo "\">
          </div>
      </div>

      <div class=\"form-group\">
        <label for=\"inputTitle\" class=\"col-sm-2 control-label\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("封面图片"), "html", null, true);
            echo "</label>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" class=\"form-control\" name=\"actvityPicture\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "actvityPicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "actvityPicture", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐图片大小200*112"), "html", null, true);
            echo "\">
        </div>
        <div class=\"col-sm-2\">
          <a class=\"btn btn-default btn-block\" id=\"js-activity-uploader\" data-upload-token=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("classroom", "image"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("浏览..."), "html", null, true);
            echo "</a>
        </div>
      </div>

      ";
            // line 70
            $context["maxUsers"] = (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array()), null)) : (null));
            // line 71
            echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"maxUsers\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最大人数"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"maxUsers\" class=\"form-control\" placeholder=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("不限"), "html", null, true);
            echo "\" name=\"maxUsers\" value=\"";
            if (((isset($context["maxUsers"]) ? $context["maxUsers"] : null) && ((isset($context["maxUsers"]) ? $context["maxUsers"] : null) != 0))) {
                echo twig_escape_filter($this->env, (isset($context["maxUsers"]) ? $context["maxUsers"] : null), "html", null, true);
            }
            echo "\">
          </div>
      </div>
    </div>
  ";
        }
        // line 81
        echo " 
  <div class=\"form-group\">
    ";
        // line 83
        if (((isset($context["type"]) ? $context["type"] : null) == "event")) {
            // line 84
            echo "        <div class=\"controls col-md-2\"></div>
        <div class=\"controls col-md-7\">
          <textarea id=\"thread-content-field\" class=\"form-control\" rows=\"15\" data-display=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
            echo "\" name=\"content\"
            data-image-upload-url=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
        </div>
    ";
        } else {
            // line 90
            echo "        ";
            // line 91
            echo "        <div class=\"controls col-md-12\">
          <textarea id=\"thread-content-field\" class=\"form-control\" rows=\"15\" data-display=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
            echo "\" name=\"content\"
            data-image-upload-url=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
        </div>
    ";
        }
        // line 96
        echo "    
  </div>
   ";
        // line 98
        if (((isset($context["type"]) ? $context["type"] : null) != "event")) {
            // line 99
            echo "      ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Attachment:formFields", array("targetType" => "classroom.thread", "targetId" => (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), 0)) : (0))), array("showLabel" => false)));
            echo "
    ";
        }
        // line 101
        echo "  <div class=\"clearfix\">
      ";
        // line 102
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 103
            echo "        <button type=\"submit\" class=\"btn btn-primary pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
        <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_show"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link pull-right color-gray\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</a>

      ";
        } else {
            // line 107
            echo "        <button type=\"submit\" class=\"btn btn-primary pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
            echo "</button>
        <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link pull-right color-gray\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</a>

      ";
        }
        // line 111
        echo "  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 114,  297 => 113,  293 => 111,  285 => 108,  280 => 107,  272 => 104,  267 => 103,  265 => 102,  262 => 101,  256 => 99,  254 => 98,  250 => 96,  240 => 93,  236 => 92,  233 => 91,  231 => 90,  221 => 87,  217 => 86,  213 => 84,  211 => 83,  207 => 81,  195 => 76,  189 => 73,  185 => 71,  183 => 70,  174 => 66,  166 => 63,  161 => 61,  151 => 56,  145 => 53,  132 => 47,  126 => 44,  118 => 41,  107 => 37,  102 => 35,  99 => 34,  97 => 33,  94 => 32,  83 => 28,  80 => 27,  77 => 25,  75 => 24,  72 => 23,  61 => 19,  57 => 17,  55 => 16,  51 => 14,  45 => 12,  39 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
