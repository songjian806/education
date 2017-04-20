<?php

/* TopxiaWebBundle:Thread/Part:post-item.html.twig */
class __TwigTemplate_8def66ccd1aca2b09134f10eb9c467d0668fcd1365d523159bd73a548778a900 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread/Part:post-item.html.twig", 1);
        // line 2
        echo "<li id=\"post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()), "html", null, true);
        echo "\" class=\"thread-post thread-post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo " media media-comment user-id-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"media-left\">
    ";
        // line 4
        echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : null), "user-avatar", "avatar-sm", true);
        echo "
  </div>

  <div class=\"media-body\">
    <div class=\"metas title\">
      ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Thread:post-manage-menu.html.twig", "TopxiaWebBundle:Thread/Part:post-item.html.twig", 9)->display($context);
        // line 10
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"nickname\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      <span class=\"bullet\">•</span>
      <span class=\"text-muted\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdTime", array())), "html", null, true);
        echo " </span>
      ";
        // line 13
        if ((($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array()), null)) : (null))) {
            echo "<span class=\"mll text-danger\">(";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("classroomRoles", $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array()));
            echo ") </span>";
        }
        // line 14
        echo "    </div>
    <div class=\"editor-text\">";
        // line 15
        echo $this->env->getExtension('topxia_web_twig')->atFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ats", array()));
        echo "</div>
    ";
        // line 16
        $this->loadTemplate("TopxiaWebBundle:Attachment/Widget:list.html.twig", "TopxiaWebBundle:Thread/Part:post-item.html.twig", 16)->display(array_merge($context, array("targetType" => "classroom.thread.post", "targetId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))));
        // line 17
        echo "    <div class=\"comment-sns\">
      ";
        // line 18
        $this->loadTemplate("TopxiaWebBundle:Thread:post-interaction.html.twig", "TopxiaWebBundle:Thread/Part:post-item.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
    <div class=\"thread-subpost-container subcomments clearfix ";
        // line 20
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
            echo "hide";
        }
        echo "\">
      <div class=\"thread-subpost-content\">
        ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:subposts", array("threadId" => (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), 0)) : (0)), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "less" => true)));
        echo "
      </div>
      <div class=\"thread-subpost-morebar clearfix ";
        // line 24
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
            echo "hide";
        }
        echo "\">
        ";
        // line 25
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["post"]) ? $context["post"] : null)), "method")) {
            // line 26
            echo "          <button class=\"btn btn-default btn-xs pull-right js-toggle-subpost-form\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我也说一句"), "html", null, true);
            echo "</button>
        ";
        }
        // line 28
        echo "        <span class=\"thread-subpost-moretext ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()) <= 5)) {
            echo "hide";
        }
        echo "\"><span class=\"text-muted\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还有%post.subposts%条回复，", array("%post.subposts%" => ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()) - 5))), "html", null, true);
        echo "</span><a href=\"javascript:;\" class=\"js-post-more\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击查看"), "html", null, true);
        echo "</a></span>
      </div>

      ";
        // line 31
        $context["goto"] = ((array_key_exists("goto", $context)) ? (_twig_default_filter((isset($context["goto"]) ? $context["goto"] : null), $this->env->getExtension('routing')->getPath("homepage"))) : ($this->env->getExtension('routing')->getPath("homepage")));
        // line 32
        echo "      ";
        if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["post"]) ? $context["post"] : null)), "method") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 33
            echo "      
        ";
            // line 34
            $context["postReplyUrl"] = ((array_key_exists("postReplyUrl", $context)) ? (_twig_default_filter((isset($context["postReplyUrl"]) ? $context["postReplyUrl"] : null), $this->env->getExtension('routing')->getPath("thread_post_reply", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))))) : ($this->env->getExtension('routing')->getPath("thread_post_reply", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array())))));
            // line 35
            echo "        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["postReplyUrl"]) ? $context["postReplyUrl"] : null), "html", null, true);
            echo "\" class=\"thread-subpost-form ";
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
                echo "hide";
            }
            echo "\">
          <div class=\"form-group\">
            <div class=\"controls\">
              <textarea class=\"form-control\" name=\"content\" data-display=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
            echo "\"></textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
            <button type=\"submit\" data-loading-text=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在发表"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
            echo "</button>
          </div>
        </form>
      ";
        } else {
            // line 47
            echo "        <div class=\"empty\">
          ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("你还没有登录，请先"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => (isset($context["goto"]) ? $context["goto"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("或"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["goto"]) ? $context["goto"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</a>！
        </div>
      ";
        }
        // line 51
        echo "
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 51,  161 => 48,  158 => 47,  149 => 43,  145 => 42,  138 => 38,  127 => 35,  125 => 34,  122 => 33,  119 => 32,  117 => 31,  104 => 28,  98 => 26,  96 => 25,  90 => 24,  85 => 22,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  68 => 16,  64 => 15,  61 => 14,  55 => 13,  51 => 12,  43 => 10,  41 => 9,  33 => 4,  21 => 2,  19 => 1,);
    }
}
