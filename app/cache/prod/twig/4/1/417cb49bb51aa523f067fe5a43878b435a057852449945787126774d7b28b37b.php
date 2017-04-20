<?php

/* TopxiaWebBundle:OpenCourse:open-course-comment.html.twig */
class __TwigTemplate_417cb49bb51aa523f067fe5a43878b435a057852449945787126774d7b28b37b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:OpenCourse:open-course-comment.html.twig", 1);
        // line 2
        echo "
<div class=\"es-section\" id=\"open-course-comment\">
  <div class=\"gray-darker pbl\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评论"), "html", null, true);
        echo "(<span class=\"thread-post-num\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "postNum", array()), "html", null, true);
        echo "</span>)</div>
  ";
        // line 5
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 6
            echo "    <form class=\"es-commet\" id=\"thread-post-form\" method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_post", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" onsubmit=\"return false\">
      <textarea class=\"form-control form-control-o\" rows=\"6\" placeholder=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的想法"), "html", null, true);
            echo "\" ";
            if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                echo "disabled";
            }
            echo " name=\"content\"></textarea>
      <div class=\"form-group clearfix\">
        <button type=\"submit\" class=\"btn btn-primary pull-right ";
            // line 9
            if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method"), "")) : ("")) == "preview"))) {
                echo "disabled";
            }
            echo "\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存..."), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表评论"), "html", null, true);
            echo "</button>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        } else {
            // line 14
            echo "    <div class=\"empty\">
      ";
            // line 15
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
        // line 18
        echo "
  <ul class=\"comment-list thread-pripost-list\">
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "      ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 22
            echo "      ";
            $context["postReplyUrl"] = $this->env->getExtension('routing')->getPath("open_course_post_reply", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "postId" => $this->getAttribute($context["post"], "id", array()), "targetType" => "openCourse"));
            // line 23
            echo "      ";
            $context["goto"] = ((array_key_exists("goto", $context)) ? (_twig_default_filter((isset($context["goto"]) ? $context["goto"] : null), $this->env->getExtension('routing')->getPath("homepage"))) : ($this->env->getExtension('routing')->getPath("homepage")));
            // line 24
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:Thread/Part:post-item.html.twig", "TopxiaWebBundle:OpenCourse:open-course-comment.html.twig", 24)->display($context);
            // line 25
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "      <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有人评论，欢迎说说您的想法！"), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </ul>

  <nav class=\"text-center\">
    ";
        // line 31
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "
  </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:open-course-comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 31,  139 => 28,  130 => 26,  117 => 25,  114 => 24,  111 => 23,  108 => 22,  105 => 21,  87 => 20,  83 => 18,  67 => 15,  64 => 14,  58 => 11,  47 => 9,  38 => 7,  33 => 6,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
