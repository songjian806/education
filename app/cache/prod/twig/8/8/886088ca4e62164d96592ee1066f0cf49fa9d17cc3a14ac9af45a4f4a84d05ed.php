<?php

/* TopxiaWebBundle:Thread:post.html.twig */
class __TwigTemplate_886088ca4e62164d96592ee1066f0cf49fa9d17cc3a14ac9af45a4f4a84d05ed extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 2
            echo "  ";
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
                // line 3
                echo "    <form class=\"thread-post-form\" id=\"thread-post-form\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_post", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\">
      <div class=\"form-group\">
        <div class=\"controls\">
          <textarea
            id=\"thread-";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
                echo "-post-form\"
            name=\"content\" value=\"\" rows=\"10\" id=\"post_content\" class=\"form-control\" data-display=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复内容"), "html", null, true);
                echo "\"
            data-image-upload-url=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
                echo "\" data-image-download-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
                echo "\"
          ></textarea>
        </div>
      </div>
      ";
                // line 13
                if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) != "event")) {
                    // line 14
                    echo "        ";
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Attachment:formFields", array("targetType" => "classroom.thread.post", "targetId" => (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), 0)) : (0))), array("showLabel" => false)));
                    echo "
     ";
                }
                // line 16
                echo "      <div class=\"form-group clearfix\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">
        <button class=\"btn btn-primary pull-right\" type=\"submit\" data-loading-text=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在回复"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
                echo "</button>
      </div>
    </form>
  ";
            } else {
                // line 22
                echo "    <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只有学员才能回复！"), "html", null, true);
                echo "</div>
  ";
            }
        } else {
            // line 25
            echo "  <div class=\"empty\">
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("你还没有登录，请先"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("或"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</a>！
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  80 => 25,  73 => 22,  64 => 18,  60 => 17,  57 => 16,  51 => 14,  49 => 13,  40 => 9,  36 => 8,  32 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
