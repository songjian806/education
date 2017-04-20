<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\group-thread.tpl.html.twig */
class __TwigTemplate_f86ec5951e1815c0480d6fbf4e6bfb4b2883ee5dc9fce932a6be8f9c67fe5c6e extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
\t     ";
        // line 7
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "content", array());
        // line 8
        echo "\t    
\t     ";
        // line 9
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array()) == "delete")) {
            // line 10
            echo "\t     \t    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo " <strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被"), "html", null, true);
            echo "<a href =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userName", array()), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除。"), "html", null, true);
            echo "
\t     ";
        } elseif (($this->getAttribute(        // line 11
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "elite")) {
            // line 12
            echo "\t     \t    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被设为精华。"), "html", null, true);
            echo "
\t     ";
        } elseif (($this->getAttribute(        // line 13
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "unelite")) {
            // line 14
            echo "\t      \t  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被取消精华。"), "html", null, true);
            echo "
\t     ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "top")) {
            // line 16
            echo "\t     \t    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被置顶。"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "untop")) {
            // line 18
            echo "\t\t\t      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被取消置顶。"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 19
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "close")) {
            // line 20
            echo "         \t  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被关闭。"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "open")) {
            // line 22
            echo "         \t  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被打开。"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "modify")) {
            // line 24
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被管理员编辑。"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击查看"), "html", null, true);
            echo "</a>
        ";
        } elseif (($this->getAttribute(        // line 25
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "collect")) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userId", array()))), "html", null, true);
            echo "\" target='_blank'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userName", array()), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已经收藏了你的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>！
        ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "uncollect")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userId", array()))), "html", null, true);
            echo "\" target='_blank'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userName", array()), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已经取消收藏你的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>！
        ";
        } elseif (($this->getAttribute(        // line 29
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "reply")) {
            // line 30
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userName", array()), "html", null, true);
            echo "</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("中回复了您。"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "page", array()), "html", null, true);
            echo "#post-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "post", array()), "html", null, true);
            echo "\" target='_blank'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击查看"), "html", null, true);
            echo "</a>
        ";
        } elseif (($this->getAttribute(        // line 31
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "delete-post")) {
            // line 32
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您在话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("的回复被删除。"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["data"]) ? $context["data"] : null), "type", array()) == "type-modify")) {
            // line 34
            echo "            ";
            $context["url"] = ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "targetType", array()) . "_thread_show");
            // line 35
            echo "            ";
            $context["urlId"] = ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "targetType", array()) . "Id");
            echo "  
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的话题"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "targetType", array()) . "_thread_show"), array(($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "targetType", array()) . "Id") => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "targetId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "targetId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "”</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("被"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userName", array()), "html", null, true);
            echo "</strong></a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
            echo "
\t \t ";
        }
        // line 38
        echo "    </div>
    <div class=\"notification-footer\">
     ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\group-thread.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 40,  243 => 38,  226 => 36,  221 => 35,  218 => 34,  216 => 33,  205 => 32,  203 => 31,  180 => 30,  178 => 29,  163 => 28,  161 => 27,  146 => 26,  144 => 25,  129 => 24,  127 => 23,  116 => 22,  114 => 21,  103 => 20,  101 => 19,  90 => 18,  88 => 17,  77 => 16,  75 => 15,  64 => 14,  62 => 13,  51 => 12,  49 => 11,  34 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
